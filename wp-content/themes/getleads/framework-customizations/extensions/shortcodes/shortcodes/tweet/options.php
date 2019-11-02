<?php

if (!defined('FW'))
    die('Forbidden');

$options = array(
    'twitterpost' => array(
        'label' => __('Show Twitter Post', 'fw'),
        'type' => 'short-text',
        'value' => '3',
        'desc' => __('How many post will be display', 'fw'),
    ),
    'twitterusername' => array(
        'label' => __('Twitter User Name (New)', 'fw'),
        'type' => 'text',
        'value' => 'xpeedstudio',
        'desc' => __('Insert your twitter user name here', 'fw'),
    ),
    'twitterid' => array(
        'label' => __('Twitter Widget ID (Old)', 'fw'),
        'desc' => __('you need twitter feed id if you have twitter widget id then you can use this twitter id here. For new version you dont need any Twitter id only Username is enough', 'fw'),
        'type' => 'text',
    ),
);
