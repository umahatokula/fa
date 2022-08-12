<?php namespace Umaha\Scepter\Controllers;

use Umaha\Scepter\Models\MailSender;
use Umaha\Scepter\Models\ScepterRegistration;
use BackendMenu;
use Input;
use Flash;
use Mail;
use Backend\Classes\Controller;
use October\Rain\Support\Collection;

/**
 * Mails Back-end Controller
 */
class Mails extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Umaha.Scepter', 'scepter', 'mails');
    }


    /**
     * Passing to form
     * */
    public function index() {
        $config = $this->makeConfig('$/umaha/scepter/models/mailsender/fields.yaml');
        $config->model = new MailSender;
        $widget = $this->makeWidget('Backend\Widgets\Form', $config);
        $this->vars['widget'] = $widget;

        $this->vars['events'] = ScepterRegistration::all();
        
        $this->asExtension('FormController')->create();

    }

    /**
     * Sending Mail
     * */
    public function onSendMail() {
        /**
         * Getting form results
         * */
        // dd(Input::file('attachments'));
        $event_code = post('event_code');
        $subject    = post('subject');
        $msg        = post('message');
        $test_email = post('testEmail');

        /**
         * Checking if there's no data
         * */
        if($subject == "" || $msg == ""):
            Flash::error('All fields are required');
            return ;
        endif;

        /**
         * Striping tags for the plain version of mail
         * */
        $msgPlain = strip_tags(post('message'));

        /**
         * Setting vars array for mail template
         * */
        $vars = [
            'subject' => $subject,
            'msg' => $msg,
            'msgPlain' => $msgPlain,
            ];

        /**
         * Check if the administrator want to send only a test message
         * */
        if($test_email != "") {
            //email and subject array
            $array = [
            'email' => $test_email,
            'subject'=>$subject
            ];

            //Sending mail
            if(filter_var($array['email'], FILTER_VALIDATE_EMAIL)) {
                try{
                    Mail::sendTo([
                            'text' => $msgPlain,
                            'html' => $msg,
                            'raw' => true
                        ], $vars, function($message) use ($array){
                        $message->subject($array['subject']);
                        $message->to($array['email'], "Test Reciever");
                        if (Input::hasFile('attachments')) {
                            foreach(Input::file('attachments') as $attachment) {
                                $message->attach($attachment->getRealPath(), ['as' => $attachment->getClientOriginalName(), 'mime' => $attachment->getMimeType()]);
                            }
                        }
                    });
                } catch (\Exception $e) {
                    Flash::error('Please enter a valid email address.');
                    return ;
                }
            } else {
              Flash::error('Please enter a valid email address.');
              return ;
            }

            /**
             * Success message
             * */
            Flash::success('Message has been sent successfully');
            return ;
        }

        /**
         * Check if the administrator want to send to every single unique email ever registered
         * */
        if(post('all_registrants') == 1) {
            //email and subject array
            $array = [
                'email' => $test_email,
                'subject'=>$subject
            ];

            //Fetching users ids
            $users = ScepterRegistration::distinct('email')->lists('fname', 'email');

            $collection = new Collection($users);

            $filtered = $collection->filter(function ($item, $key) {
                return filter_var($key, FILTER_VALIDATE_EMAIL);
            });

            $users = $filtered->all();
            
            $array = [
                'users' => $users,
                'subject' => $subject
            ];

            //Sending mail
            try {
                Mail::sendTo(
                    $array['users'], 
                    [
                        'text' => $msgPlain,
                        'html' => $msg,
                        'raw' => true
                    ], 
                    $vars, 
                    function($message) use ($array){
                        $message->subject($array['subject']);
                        if (Input::hasFile('attachments')) {
                            foreach (Input::file('attachments') as $attachment) {
                                $message->attach($attachment->getRealPath(), ['as' => $attachment->getClientOriginalName(), 'mime' => $attachment->getMimeType()]);
                            }
                        }
                    },
                    ['queue', 'bcc']);
            } catch (\Exception $e) {
                // Do nothing
            }

            /**
             * Success message
             * */
            Flash::success('Message has been sent successfully');
            return ;
        }

        /**
         * Getting users count in this group
         * */
        $users_count = ScepterRegistration::distinct('email')->where('event_code', $event_code)->count();

        /**
         * Checking if there's users in the group
         * */
        if($users_count != 0):
                //Fetching users ids
                $users = ScepterRegistration::distinct('email')->where('event_code', $event_code)->lists('fname', 'email');

                /**
                 * Looping to send mail to every user
                 * */

                $collection = new Collection($users);

                $filtered = $collection->filter(function ($item, $key) {
                    return filter_var($key, FILTER_VALIDATE_EMAIL);
                });

                $users = $filtered->all();

                $array = [
                    'users' => $users,
                    'subject' => $subject
                ];

                //Sending mail
                try {
                    Mail::sendTo(
                        $array['users'],
                        [
                            'text' => $msgPlain,
                            'html' => $msg,
                            'raw' => true
                        ],
                        $vars,
                        function ($message) use ($array) {
                            $message->subject($array['subject']);
                            if (Input::hasFile('attachments')) {
                                foreach (Input::file('attachments') as $attachment) {
                                    $message->attach($attachment->getRealPath(), ['as' => $attachment->getClientOriginalName(), 'mime' => $attachment->getMimeType()]);
                                }
                            }
                        },
                        ['queue', 'bcc']
                    );
                } catch (\Exception $e) {
                    // Do nothing
                }

            /**
             * Success Message
             * */
            Flash::success('Message has been sent successfully to '.$users_count.' users');
        else:
            /**
             * Warning message that there's no users in this group
             * */
            Flash::warning('There\'s no body in this group');
        endif;

    }

    /**
     * This function checks if there's a value in test email field.
     * if there's any value the send button to all group will be hidden
     * */
    public function onCheckTestEmail() {
        if(post('testEmail') == ""){

            return  ['correct'=> 0];

        } else {

            return  ['correct'=> 1];

        }
    }
}
