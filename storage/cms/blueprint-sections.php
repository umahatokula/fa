<?php return array (
  '448a8b6e-e812-4b51-83fb-3b4c2f946703' => 
  array (
    'uuid' => '448a8b6e-e812-4b51-83fb-3b4c2f946703',
    'handle' => 'About',
    'type' => 'single',
    'name' => 'About',
    'drafts' => true,
    'navigation' => 
    array (
      'icon' => 'icon-rocket',
    ),
    'fields' => 
    array (
      'big_text' => 
      array (
        'label' => 'Big Text',
        'type' => 'text',
        'size' => 'small',
      ),
      'small_text' => 
      array (
        'label' => 'Small Text',
        'type' => 'text',
        'size' => 'small',
      ),
      'about' => 
      array (
        'label' => 'About',
        'type' => 'richeditor',
        'size' => 'small',
        'span' => 'auto',
      ),
      'location' => 
      array (
        'label' => 'Location',
        'type' => 'richeditor',
        'size' => 'small',
        'span' => 'auto',
      ),
      'speakers' => 
      array (
        'label' => 'Speakers',
        'type' => 'richeditor',
        'size' => 'small',
        'span' => 'auto',
      ),
      'time_date' => 
      array (
        'label' => 'Time and Date',
        'type' => 'richeditor',
        'size' => 'small',
        'span' => 'auto',
      ),
    ),
    'handleSlug' => 'about',
  ),
  '6947ff28-b660-47d7-9240-24ca6d58aeae' => 
  array (
    'uuid' => '6947ff28-b660-47d7-9240-24ca6d58aeae',
    'handle' => 'Blog\\Author',
    'type' => 'entry',
    'name' => 'Author',
    'drafts' => false,
    'navigation' => 
    array (
      'parent' => 'Blog\\Post',
      'icon' => 'octo-icon-user',
      'order' => 200,
    ),
    'fields' => 
    array (
      'avatar' => 
      array (
        'label' => 'Avatar',
        'type' => 'mediafinder',
        'mode' => 'image',
      ),
      'role' => 
      array (
        'label' => 'Role',
        'type' => 'text',
      ),
      'about' => 
      array (
        'label' => 'About',
        'type' => 'textarea',
      ),
      '_social_links' => 
      array (
        'type' => 'mixin',
        'label' => 'Social Links',
        'source' => 'Fields\\SocialLinks',
        'tab' => 'Social',
      ),
    ),
    'handleSlug' => 'blog_author',
  ),
  'b022a74b-15e6-4c6b-9eb9-17efc5103543' => 
  array (
    'uuid' => 'b022a74b-15e6-4c6b-9eb9-17efc5103543',
    'type' => 'structure',
    'handle' => 'Blog\\Category',
    'name' => 'Category',
    'drafts' => false,
    'structure' => 
    array (
      'maxDepth' => 1,
    ),
    'navigation' => 
    array (
      'parent' => 'Blog\\Post',
      'icon' => 'octo-icon-list-ul',
      'order' => 150,
    ),
    'fields' => 
    array (
      'description' => 
      array (
        'label' => 'Description',
      ),
    ),
    'handleSlug' => 'blog_category',
  ),
  'edcd102e-0525-4e4d-b07e-633ae6c18db6' => 
  array (
    'uuid' => 'edcd102e-0525-4e4d-b07e-633ae6c18db6',
    'handle' => 'Blog\\Post',
    'type' => 'stream',
    'name' => 'Post',
    'drafts' => true,
    'primaryNavigation' => 
    array (
      'label' => 'Blog',
      'icon' => 'octo-icon-file',
      'iconSvg' => 'modules/tailor/assets/images/blog-icon.svg',
      'order' => 95,
    ),
    'navigation' => 
    array (
      'icon' => 'octo-icon-pencil',
      'order' => 100,
    ),
    'groups' => 
    array (
      'regular_post' => 
      array (
        'name' => 'Regular Post',
        'fields' => 
        array (
          'content' => 
          array (
            'tab' => 'Edit',
            'label' => 'Content',
            'type' => 'richeditor',
            'span' => 'adaptive',
          ),
          'blog_post_content' => 
          array (
            'type' => 'mixin',
            'source' => 'Blog\\PostContent',
          ),
        ),
      ),
      'markdown_post' => 
      array (
        'name' => 'Markdown Post',
        'fields' => 
        array (
          'content' => 
          array (
            'tab' => 'Edit',
            'label' => 'Content',
            'type' => 'markdown',
            'span' => 'adaptive',
          ),
          'blog_post_content' => 
          array (
            'type' => 'mixin',
            'source' => 'Blog\\PostContent',
          ),
        ),
      ),
    ),
    'handleSlug' => 'blog_post',
  ),
  '3eed98d5-356d-4caf-91e9-069fb8f4eb53' => 
  array (
    'uuid' => '3eed98d5-356d-4caf-91e9-069fb8f4eb53',
    'handle' => 'FAQs',
    'type' => 'single',
    'name' => 'FAQs',
    'drafts' => true,
    'navigation' => 
    array (
      'icon' => 'icon-rocket',
    ),
    'fields' => 
    array (
      'text' => 
      array (
        'label' => 'Text',
        'type' => 'text',
        'size' => 'small',
      ),
      'entries' => 
      array (
        'label' => 'Entries',
        'type' => 'repeater',
        'span' => 'auto',
        'form' => 
        array (
          'fields' => 
          array (
            'question' => 
            array (
              'label' => 'Question',
              'type' => 'text',
              'size' => 'small',
            ),
            'answer' => 
            array (
              'label' => 'Answer',
              'type' => 'richeditor',
              'size' => 'small',
              'span' => 'auto',
            ),
          ),
        ),
      ),
    ),
    'handleSlug' => 'f_a_qs',
  ),
  '9d1f80aa-b5f8-4402-b9ff-0f7de256a941' => 
  array (
    'uuid' => '9d1f80aa-b5f8-4402-b9ff-0f7de256a941',
    'handle' => 'MainMenu',
    'type' => 'single',
    'name' => 'MainMenu',
    'drafts' => true,
    'fields' => 
    array (
      'menu_items' => 
      array (
        'label' => 'Menu Items',
        'type' => 'repeater',
        'span' => 'full',
        'form' => 
        array (
          'fields' => 
          array (
            'item' => 
            array (
              'label' => 'Menu Name',
              'type' => 'text',
              'span' => 'auto',
            ),
            'value' => 
            array (
              'label' => 'URL',
              'type' => 'text',
              'span' => 'auto',
            ),
          ),
        ),
      ),
    ),
    'handleSlug' => 'main_menu',
  ),
  '64f5c20f-e64d-437e-bf1c-4b6ac93361a9' => 
  array (
    'uuid' => '64f5c20f-e64d-437e-bf1c-4b6ac93361a9',
    'handle' => 'Hotels',
    'type' => 'single',
    'name' => 'Hotels',
    'drafts' => true,
    'navigation' => 
    array (
      'icon' => 'icon-rocket',
    ),
    'fields' => 
    array (
      'text' => 
      array (
        'label' => 'Text',
        'type' => 'text',
        'size' => 'small',
      ),
      'hotels' => 
      array (
        'label' => 'Hotel',
        'type' => 'repeater',
        'span' => 'auto',
        'form' => 
        array (
          'fields' => 
          array (
            'picture' => 
            array (
              'label' => 'Picture',
              'type' => 'mediafinder',
              'size' => 'small',
            ),
            'name' => 
            array (
              'label' => 'Name',
              'type' => 'text',
              'size' => 'small',
              'span' => 'auto',
            ),
            'info' => 
            array (
              'label' => 'Hotel Information',
              'type' => 'richeditor',
              'size' => 'small',
              'span' => 'auto',
            ),
          ),
        ),
      ),
    ),
    'handleSlug' => 'hotels',
  ),
  'eeecff72-1fbf-4968-8c3f-e0a59ac23da9' => 
  array (
    'uuid' => 'eeecff72-1fbf-4968-8c3f-e0a59ac23da9',
    'handle' => 'Introduction',
    'type' => 'single',
    'name' => 'Introduction',
    'drafts' => true,
    'navigation' => 
    array (
      'icon' => 'icon-rocket',
    ),
    'fields' => 
    array (
      'small_text' => 
      array (
        'label' => 'Small Text',
        'type' => 'text',
        'size' => 'small',
      ),
      'big_text' => 
      array (
        'label' => 'Big Text',
        'type' => 'text',
        'size' => 'small',
      ),
      'text1' => 
      array (
        'label' => 'Text 1',
        'type' => 'text',
        'size' => 'small',
      ),
      'text2' => 
      array (
        'label' => 'Text 2',
        'type' => 'text',
        'size' => 'small',
      ),
      'text3' => 
      array (
        'label' => 'Text 3',
        'type' => 'text',
        'size' => 'small',
      ),
    ),
    'handleSlug' => 'introduction',
  ),
  '89724a55-eacf-48a5-97c9-a041cea8c8b1' => 
  array (
    'uuid' => '89724a55-eacf-48a5-97c9-a041cea8c8b1',
    'handle' => 'Education',
    'type' => 'entry',
    'name' => 'Education',
    'drafts' => false,
    'navigation' => 
    array (
      'icon' => 'icon-magic',
      'order' => 10,
    ),
    'fields' => 
    array (
      'year_from' => 
      array (
        'label' => 'Year From',
        'type' => 'datepicker',
        'mode' => 'date',
        'span' => 'auto',
      ),
      'year_to' => 
      array (
        'label' => 'Year To',
        'type' => 'datepicker',
        'mode' => 'date',
        'span' => 'auto',
      ),
      'degree' => 
      array (
        'label' => 'Degree',
        'type' => 'text',
        'span' => 'auto',
      ),
      'institution' => 
      array (
        'label' => 'Institution',
        'type' => 'text',
        'span' => 'auto',
      ),
      'description' => 
      array (
        'label' => 'Description',
        'type' => 'textarea',
        'span' => 'auto',
      ),
    ),
    'handleSlug' => 'education',
  ),
  '295a8b2a-a446-443b-bf40-184151906d15' => 
  array (
    'uuid' => '295a8b2a-a446-443b-bf40-184151906d15',
    'handle' => 'Experience',
    'type' => 'entry',
    'name' => 'Experience',
    'drafts' => true,
    'fields' => 
    array (
      'year_from' => 
      array (
        'label' => 'Year From',
        'type' => 'datepicker',
        'mode' => 'date',
        'span' => 'auto',
      ),
      'year_to' => 
      array (
        'label' => 'Year To',
        'type' => 'datepicker',
        'mode' => 'date',
        'span' => 'auto',
      ),
      'job_title' => 
      array (
        'label' => 'Job Title',
        'type' => 'text',
        'span' => 'auto',
      ),
      'company' => 
      array (
        'label' => 'Company',
        'type' => 'text',
        'span' => 'auto',
      ),
      'description' => 
      array (
        'label' => 'Description',
        'type' => 'textarea',
        'span' => 'auto',
      ),
    ),
    'handleSlug' => 'experience',
  ),
  'a63fabaf-7c0b-4c74-b36f-7abf1a3ad1c1' => 
  array (
    'uuid' => 'a63fabaf-7c0b-4c74-b36f-7abf1a3ad1c1',
    'handle' => 'LandingPage',
    'type' => 'single',
    'name' => 'Landing Page',
    'drafts' => true,
    'navigation' => 
    array (
      'icon' => 'icon-rocket',
    ),
    'fields' => 
    array (
      'block_builder' => 
      array (
        'type' => 'mixin',
        'source' => 'BlockBuilder',
      ),
    ),
    'handleSlug' => 'landing_page',
  ),
  '2365912e-f439-4301-8f0b-fb7491d58a06' => 
  array (
    'uuid' => '2365912e-f439-4301-8f0b-fb7491d58a06',
    'handle' => 'Portfolio',
    'type' => 'entry',
    'name' => 'Portfolio',
    'drafts' => true,
    'fields' => 
    array (
      'image' => 
      array (
        'label' => 'Image',
        'type' => 'mediafinder',
        'mode' => 'image',
        'maxItems' => 1,
      ),
      'job_title' => 
      array (
        'label' => 'Job Title',
        'type' => 'text',
        'span' => 'auto',
      ),
      'project_website' => 
      array (
        'label' => 'Project Website',
        'type' => 'text',
        'span' => 'auto',
      ),
      'client' => 
      array (
        'label' => 'Client',
        'type' => 'text',
        'span' => 'auto',
      ),
      'duration' => 
      array (
        'label' => 'Duration',
        'type' => 'text',
        'span' => 'auto',
      ),
      'technologies' => 
      array (
        'label' => 'Technologies',
        'type' => 'repeater',
        'span' => 'auto',
        'form' => 
        array (
          'fields' => 
          array (
            'name' => 
            array (
              'label' => 'Name',
              'type' => 'text',
              'span' => 'auto',
            ),
          ),
        ),
      ),
      'budget' => 
      array (
        'label' => 'Budget',
        'type' => 'text',
        'span' => 'auto',
      ),
    ),
    'handleSlug' => 'portfolio',
  ),
  'c542760a-37d0-43fb-ad55-b21ed0ae6f51' => 
  array (
    'uuid' => 'c542760a-37d0-43fb-ad55-b21ed0ae6f51',
    'handle' => 'Skills',
    'type' => 'single',
    'name' => 'Skills',
    'drafts' => true,
    'fields' => 
    array (
      'skills' => 
      array (
        'label' => 'Skills',
        'type' => 'repeater',
        'span' => 'auto',
        'form' => 
        array (
          'fields' => 
          array (
            'name' => 
            array (
              'label' => 'Name',
              'type' => 'text',
              'span' => 'auto',
            ),
            'proficiency' => 
            array (
              'label' => 'Proficiency',
              'type' => 'number',
              'span' => 'auto',
            ),
          ),
        ),
      ),
    ),
    'handleSlug' => 'skills',
  ),
  '2790e114-91ec-41b1-beb5-89475d36eada' => 
  array (
    'uuid' => '2790e114-91ec-41b1-beb5-89475d36eada',
    'handle' => 'Register',
    'type' => 'single',
    'name' => 'Register',
    'drafts' => true,
    'navigation' => 
    array (
      'icon' => 'icon-rocket',
    ),
    'fields' => 
    array (
      'small_text' => 
      array (
        'label' => 'Small Text',
        'type' => 'text',
        'size' => 'small',
      ),
      'big_text' => 
      array (
        'label' => 'Big Text',
        'type' => 'richeditor',
        'size' => 'small',
      ),
    ),
    'handleSlug' => 'register',
  ),
  'aee415ad-576d-4c60-9076-cbd674b16123' => 
  array (
    'uuid' => 'aee415ad-576d-4c60-9076-cbd674b16123',
    'handle' => 'Slider',
    'type' => 'single',
    'name' => 'Slider',
    'drafts' => true,
    'navigation' => 
    array (
      'icon' => 'icon-rocket',
    ),
    'fields' => 
    array (
      'big_text' => 
      array (
        'label' => 'Big Text',
        'type' => 'text',
        'size' => 'small',
      ),
      'small_text' => 
      array (
        'label' => 'Small Text',
        'type' => 'text',
        'size' => 'small',
      ),
      'button_text' => 
      array (
        'label' => 'Button Text',
        'type' => 'text',
        'size' => 'small',
      ),
      'button_url' => 
      array (
        'label' => 'Button URL',
        'type' => 'text',
        'size' => 'small',
      ),
    ),
    'handleSlug' => 'slider',
  ),
  '022496b7-e1ef-4c71-84f0-a12b5659c9c8' => 
  array (
    'uuid' => '022496b7-e1ef-4c71-84f0-a12b5659c9c8',
    'handle' => 'Speakers',
    'type' => 'single',
    'name' => 'Speakers',
    'drafts' => true,
    'navigation' => 
    array (
      'icon' => 'icon-rocket',
    ),
    'fields' => 
    array (
      'speakers' => 
      array (
        'label' => 'Speakers',
        'type' => 'repeater',
        'span' => 'auto',
        'form' => 
        array (
          'fields' => 
          array (
            'picture' => 
            array (
              'label' => 'Picture',
              'type' => 'mediafinder',
              'size' => 'small',
            ),
            'name' => 
            array (
              'label' => 'Name',
              'type' => 'text',
              'size' => 'small',
            ),
            'about' => 
            array (
              'label' => 'About',
              'type' => 'richeditor',
              'size' => 'small',
              'span' => 'auto',
            ),
            'office' => 
            array (
              'label' => 'Office',
              'type' => 'text',
              'size' => 'small',
              'span' => 'auto',
            ),
          ),
        ),
      ),
    ),
    'handleSlug' => 'speakers',
  ),
);