<?php return array (
  '4d7fd1e4-85f2-48f5-947e-92819fc8664b' => 
  array (
    'uuid' => '4d7fd1e4-85f2-48f5-947e-92819fc8664b',
    'handle' => 'Blog\\PostContent',
    'type' => 'mixin',
    'name' => 'Blog Post Content',
    'fields' => 
    array (
      'banner' => 
      array (
        'tab' => 'Manage',
        'label' => 'Banner',
        'type' => 'fileupload',
        'mode' => 'image',
        'maxFiles' => 1,
      ),
      'author' => 
      array (
        'tab' => 'Manage',
        'label' => 'Author',
        'commentAbove' => 'Select the author for this blog post',
        'type' => 'entries',
        'maxItems' => 1,
        'source' => 'Blog\\Author',
      ),
      'categories' => 
      array (
        'tab' => 'Manage',
        'label' => 'Categories',
        'commentAbove' => 'Select categories the blog post belongs to',
        'type' => 'entries',
        'source' => 'Blog\\Category',
      ),
      'featured_text' => 
      array (
        'tab' => 'Featured',
        'label' => 'Featured Text',
        'type' => 'textarea',
        'size' => 'small',
      ),
      'gallery' => 
      array (
        'label' => 'Gallery',
        'type' => 'fileupload',
        'mode' => 'image',
        'span' => 'adaptive',
        'tab' => 'Gallery',
      ),
      'gallery_media' => 
      array (
        'label' => 'Media',
        'type' => 'mediafinder',
        'mode' => 'image',
        'span' => 'adaptive',
        'tab' => 'Media',
      ),
    ),
    'handleSlug' => 'blog_post_content',
  ),
  '7b193500-ac0b-481f-a79c-2a362646364d' => 
  array (
    'uuid' => '7b193500-ac0b-481f-a79c-2a362646364d',
    'handle' => 'BlockBuilder',
    'type' => 'mixin',
    'name' => 'Block Builder',
    'fields' => 
    array (
      'blocks' => 
      array (
        'label' => 'Blocks',
        'type' => 'repeater',
        'displayMode' => 'builder',
        'span' => 'adaptive',
        'tab' => 'Blocks',
        'groups' => 
        array (
          'home' => 
          array (
            'name' => 'Homepage',
            'description' => 'Home page',
            'icon' => 'octo-icon-picture',
            'fields' => 
            array (
              '_mixin' => 
              array (
                'type' => 'mixin',
                'source' => 'Blocks\\Home',
              ),
            ),
          ),
          'about' => 
          array (
            'name' => 'About',
            'description' => 'About page',
            'icon' => 'octo-icon-text-h1',
            'fields' => 
            array (
              '_mixin' => 
              array (
                'type' => 'mixin',
                'source' => 'Blocks\\About',
              ),
            ),
          ),
          'portfolio' => 
          array (
            'name' => 'Portfolio',
            'description' => 'Portfolio page',
            'icon' => 'octo-icon-diamond',
            'fields' => 
            array (
              '_mixin' => 
              array (
                'type' => 'mixin',
                'source' => 'Blocks\\Portfolio',
              ),
            ),
          ),
          'contact' => 
          array (
            'name' => 'Contact',
            'description' => 'Contact page',
            'icon' => 'icon-quote-right',
            'fields' => 
            array (
              '_mixin' => 
              array (
                'type' => 'mixin',
                'source' => 'Blocks\\Contact',
              ),
            ),
          ),
        ),
      ),
    ),
    'handleSlug' => 'block_builder',
  ),
  '015fde4b-23d8-4ba3-8e78-9c6ebfb5fcf7' => 
  array (
    'uuid' => '015fde4b-23d8-4ba3-8e78-9c6ebfb5fcf7',
    'name' => 'Paragraph Block',
    'type' => 'mixin',
    'handle' => 'Blocks\\About',
    'fields' => 
    array (
      'tag_line' => 
      array (
        'label' => 'Tag Line',
        'type' => 'text',
        'tab' => 'Bio Data',
      ),
      'lead_text_1' => 
      array (
        'label' => 'Lead Text 1',
        'type' => 'text',
        'tab' => 'Bio Data',
      ),
      'lead_text_2' => 
      array (
        'label' => 'Lead Text 2',
        'type' => 'text',
        'tab' => 'Bio Data',
      ),
      'paragraph' => 
      array (
        'label' => 'Paragraph',
        'type' => 'richeditor',
        'tab' => 'Bio Data',
      ),
      'bio_data' => 
      array (
        'label' => 'Bio Data',
        'type' => 'repeater',
        'span' => 'auto',
        'tab' => 'Bio Data',
        'form' => 
        array (
          'fields' => 
          array (
            'item' => 
            array (
              'label' => 'Text',
              'type' => 'text',
              'span' => 'auto',
            ),
            'value' => 
            array (
              'label' => 'Text',
              'type' => 'text',
              'span' => 'auto',
            ),
          ),
        ),
      ),
      'image' => 
      array (
        'label' => 'Image',
        'type' => 'mediafinder',
        'mode' => 'image',
        'maxItems' => 1,
        'tab' => 'Bio Data',
      ),
      'download_cv_text' => 
      array (
        'label' => 'Download CV Text',
        'type' => 'text',
        'tab' => 'Bio Data',
      ),
      'resume' => 
      array (
        'label' => 'Resume',
        'type' => 'mediafinder',
        'mode' => 'file',
        'maxItems' => 1,
        'tab' => 'Bio Data',
      ),
      'years_of_experience' => 
      array (
        'label' => 'Years of Experience',
        'type' => 'text',
        'span' => 'auto',
      ),
    ),
    'handleSlug' => 'blocks_about',
  ),
  'da034c4f-0e24-4906-94b9-66b26c0549c9' => 
  array (
    'uuid' => 'da034c4f-0e24-4906-94b9-66b26c0549c9',
    'name' => 'Detailed Block',
    'type' => 'mixin',
    'handle' => 'Blocks\\Contact',
    'fields' => 
    array (
      'tag_line' => 
      array (
        'label' => 'Tag Line',
        'type' => 'text',
      ),
      'paragraph' => 
      array (
        'label' => 'Paragraph',
        'type' => 'textarea',
      ),
    ),
    'handleSlug' => 'blocks_contact',
  ),
  '21aad99b-d3c6-4f5e-b271-15471c81e11b' => 
  array (
    'uuid' => '21aad99b-d3c6-4f5e-b271-15471c81e11b',
    'name' => 'Homepage',
    'type' => 'mixin',
    'handle' => 'Blocks\\Home',
    'fields' => 
    array (
      'image' => 
      array (
        'label' => 'Image',
        'type' => 'mediafinder',
        'mode' => 'image',
        'maxItems' => 1,
        'span' => 'auto',
      ),
      'heading' => 
      array (
        'label' => 'Top Text',
        'type' => 'text',
        'span' => 'auto',
      ),
      'scrolling_text' => 
      array (
        'label' => 'Scrolling Text',
        'type' => 'repeater',
        'span' => 'auto',
        'form' => 
        array (
          'fields' => 
          array (
            'text' => 
            array (
              'label' => 'Text',
              'type' => 'text',
              'span' => 'full',
            ),
          ),
        ),
      ),
      'paragraph' => 
      array (
        'label' => 'Paragraph',
        'type' => 'richeditor',
        'span' => 'auto',
      ),
      'first_button_text' => 
      array (
        'label' => 'First button text',
        'type' => 'text',
        'span' => 'auto',
      ),
      'first_button_link' => 
      array (
        'label' => 'First button link',
        'type' => 'text',
        'span' => 'auto',
      ),
      'second_button_text' => 
      array (
        'label' => 'Second button text',
        'type' => 'text',
        'span' => 'auto',
      ),
      'second_button_link' => 
      array (
        'label' => 'Second button link',
        'type' => 'text',
        'span' => 'auto',
      ),
    ),
    'handleSlug' => 'blocks_home',
  ),
  '55615b16-120f-4be9-9429-6ae6dabc523c' => 
  array (
    'uuid' => '55615b16-120f-4be9-9429-6ae6dabc523c',
    'name' => 'Scoreboard Metrics',
    'type' => 'mixin',
    'handle' => 'Blocks\\Portfolio',
    'fields' => 
    array (
      'tag_line' => 
      array (
        'label' => 'Tag Line',
        'type' => 'text',
      ),
    ),
    'handleSlug' => 'blocks_portfolio',
  ),
  '8c4041cf-f16d-46f8-86be-9372a266ae6d' => 
  array (
    'uuid' => '8c4041cf-f16d-46f8-86be-9372a266ae6d',
    'name' => 'Team Leaders',
    'type' => 'mixin',
    'handle' => 'Blocks\\TeamLeaders',
    'fields' => 
    array (
      'members' => 
      array (
        'label' => 'Members',
        'type' => 'repeater',
        'itemsExpanded' => false,
        'form' => 
        array (
          'fields' => 
          array (
            'title' => 
            array (
              'label' => 'Title',
              'span' => 'left',
            ),
            'role' => 
            array (
              'label' => 'Role',
              'span' => 'right',
            ),
            'description' => 
            array (
              'label' => 'Description',
              'type' => 'textarea',
              'size' => 'tiny',
            ),
            'avatar' => 
            array (
              'label' => 'Image',
              'type' => 'mediafinder',
              'mode' => 'image',
              'maxItems' => 1,
            ),
            '_social_links' => 
            array (
              'label' => 'Social Links',
              'type' => 'mixin',
              'source' => 'Fields\\SocialLinks',
            ),
          ),
        ),
      ),
    ),
    'handleSlug' => 'blocks_team_leaders',
  ),
);