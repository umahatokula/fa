<?php return array (
  '448a8b6e-e812-4b51-83fb-3b4c2f946703' => 
  array (
    'name' => 'About',
    'handle' => 'About',
    'contentUuid' => '448a8b6e-e812-4b51-83fb-3b4c2f946703',
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
  ),
  '6947ff28-b660-47d7-9240-24ca6d58aeae' => 
  array (
    'name' => 'Author',
    'handle' => 'Blog\\Author',
    'contentUuid' => '6947ff28-b660-47d7-9240-24ca6d58aeae',
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
  ),
  'b022a74b-15e6-4c6b-9eb9-17efc5103543' => 
  array (
    'name' => 'Category',
    'handle' => 'Blog\\Category',
    'contentUuid' => 'b022a74b-15e6-4c6b-9eb9-17efc5103543',
    'fields' => 
    array (
      'description' => 
      array (
        'label' => 'Description',
      ),
    ),
  ),
  'edcd102e-0525-4e4d-b07e-633ae6c18db6:regular_post' => 
  array (
    'name' => 'Regular Post',
    'handle' => 'regular_post',
    'contentUuid' => 'edcd102e-0525-4e4d-b07e-633ae6c18db6',
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
  'edcd102e-0525-4e4d-b07e-633ae6c18db6:markdown_post' => 
  array (
    'name' => 'Markdown Post',
    'handle' => 'markdown_post',
    'contentUuid' => 'edcd102e-0525-4e4d-b07e-633ae6c18db6',
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
  '3eed98d5-356d-4caf-91e9-069fb8f4eb53' => 
  array (
    'name' => 'FAQs',
    'handle' => 'FAQs',
    'contentUuid' => '3eed98d5-356d-4caf-91e9-069fb8f4eb53',
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
  ),
  '9d1f80aa-b5f8-4402-b9ff-0f7de256a941' => 
  array (
    'name' => 'MainMenu',
    'handle' => 'MainMenu',
    'contentUuid' => '9d1f80aa-b5f8-4402-b9ff-0f7de256a941',
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
  ),
  '64f5c20f-e64d-437e-bf1c-4b6ac93361a9' => 
  array (
    'name' => 'Hotels',
    'handle' => 'Hotels',
    'contentUuid' => '64f5c20f-e64d-437e-bf1c-4b6ac93361a9',
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
  ),
  'eeecff72-1fbf-4968-8c3f-e0a59ac23da9' => 
  array (
    'name' => 'Introduction',
    'handle' => 'Introduction',
    'contentUuid' => 'eeecff72-1fbf-4968-8c3f-e0a59ac23da9',
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
  ),
  '2790e114-91ec-41b1-beb5-89475d36eada' => 
  array (
    'name' => 'Register',
    'handle' => 'Register',
    'contentUuid' => '2790e114-91ec-41b1-beb5-89475d36eada',
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
    ),
  ),
  'aee415ad-576d-4c60-9076-cbd674b16123' => 
  array (
    'name' => 'Slider',
    'handle' => 'Slider',
    'contentUuid' => 'aee415ad-576d-4c60-9076-cbd674b16123',
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
  ),
  '022496b7-e1ef-4c71-84f0-a12b5659c9c8' => 
  array (
    'name' => 'Speakers',
    'handle' => 'Speakers',
    'contentUuid' => '022496b7-e1ef-4c71-84f0-a12b5659c9c8',
    'fields' => 
    array (
      'text' => 
      array (
        'label' => 'Text',
        'type' => 'text',
        'size' => 'small',
      ),
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
  ),
  '3328c303-7989-462e-b866-27e7037ba275' => 
  array (
    'name' => 'Blog Settings',
    'handle' => 'Blog\\Config',
    'contentUuid' => '3328c303-7989-462e-b866-27e7037ba275',
    'fields' => 
    array (
      'blog_name' => 
      array (
        'label' => 'Blog Name',
        'tab' => 'General',
        'placeholder' => 'Latest News',
      ),
      'about_this_blog' => 
      array (
        'label' => 'About This Blog',
        'comment' => 'Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.',
        'type' => 'textarea',
        'size' => 'small',
        'tab' => 'General',
      ),
      '_section1' => 
      array (
        'label' => 'Social Links',
        'type' => 'section',
        'tab' => 'General',
      ),
      '_social_links' => 
      array (
        'type' => 'mixin',
        'source' => 'Fields\\SocialLinks',
        'tab' => 'General',
      ),
    ),
  ),
  'ae2d2c25-3a0e-4765-8b36-d1666fc0e31f' => 
  array (
    'name' => 'Social Links',
    'handle' => 'Fields\\SocialLinks',
    'contentUuid' => 'ae2d2c25-3a0e-4765-8b36-d1666fc0e31f',
    'fields' => 
    array (
      'phone' => 
      array (
        'type' => 'text',
        'label' => 'Phone number',
      ),
      'email' => 
      array (
        'type' => 'text',
        'label' => 'Email',
      ),
      'social_links' => 
      array (
        'type' => 'repeater',
        'prompt' => 'Add Link',
        'form' => 
        array (
          'fields' => 
          array (
            'platform' => 
            array (
              'span' => 'auto',
              'label' => 'Platform',
              'type' => 'dropdown',
              'options' => 
              array (
                'facebook' => 'Facebook',
                'linkedin' => 'LinkedIn',
                'github' => 'Github',
                'dribbble' => 'Dribbble',
                'twitter' => 'Twitter',
                'youtube' => 'YouTube',
                'instagram' => 'Instagram',
              ),
            ),
            'url' => 
            array (
              'span' => 'auto',
              'label' => 'Social Link',
              'type' => 'text',
              'placeholder' => 'https://...',
            ),
          ),
        ),
      ),
    ),
  ),
);