<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'socials' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'social_style' => array(
                'label' => __('Social Style', 'getleads'),
                'type' => 'image-picker',
                'value' => 'social-1',
                'desc' => __('Select Social style.', 'getleads'),
                'choices' => array(
                    'social-1' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => GETLEADS_IMAGES . '/image-picker/social-style1.jpg'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src' => GETLEADS_IMAGES . '/image-picker/social-style1.jpg'
                        ),
                    ),
                    
                    'social-3' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => GETLEADS_IMAGES . '/image-picker/social-style4.jpg'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src' => GETLEADS_IMAGES . '/image-picker/social-style4.jpg'
                        ),
                    ),
                ),
            ),
        ),
        'choices' => array(
            'social-1' => array(
                'social_item' => array(
                    'type' => 'addable-popup',
                    'limit' => '3',
                    'label' => __('Social Item', 'getleads'),
                    'popup-title' => __('Add/Edit Social Item', 'getleads'),
                    'desc' => __('Add Social item one by one', 'getleads'),
                    'template' => '{{=title}}',
                    'popup-options' => array(
                        'title' => array(
                            'label' => __('Social Title', 'getleads'),
                            'desc' => __('Type your social share title', 'getleads'),
                            'type' => 'text',
                            'value' => 'Share on Facebook'
                        ),
                        'link' => array(
                            'label' => __('Social Link', 'getleads'),
                            'desc' => __('Where should your Social link to', 'getleads'),
                            'type' => 'text',
                            'value' => '#'
                        ),
                        'background-color' => array(
                            'label' => __('Background', 'getleads'),
                            'desc' => __('Choose your social link background color', 'getleads'),
                            'type' => 'color-picker',
                            'value' => '#FF0000',
                        ),
                        'icon' => array(
                            'label' => __('Social Icon', 'getleads'),
                            'desc' => __('Select your social icon', 'getleads'),
                            'type' => 'new-icon',
                        ),
                    ),
                )
            ),
            
            'social-3' => array(
                'documentation' => array(
                    'label' => esc_html__('Instagram', 'getleads'),
                    'type' => 'html',
                    'html' => 'Create access token from here <a href="http://finesttheme.com/test/others/instragram/" target="_blank">Here</a>',
                ),
                'access_token' => array(
                    'type' => 'text',
                    'label' => esc_html__('Access Token', 'getleads'),
                    'value' => '2367672995.f53f83f.88eda6a77b1d4a9fb704fedc4ff869eb',
                    'desc' => esc_html__('Add your own Access token', 'getleads'),
                ),
            ),
        ),
        'show_borders' => false,
    ),
);
