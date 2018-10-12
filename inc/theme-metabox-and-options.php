<?php
get_template_part('/inc/theme-options/cs-framework');

// framework Metabox options filter example

function afflifiate_theme_framework_options($options)
    {
    $options = array(); // remove old options

    // All page option meta

    $options[] = array(
        'id' => 'afflifiate_theme_page_meta',
        'title' => 'Page Options',
        'post_type' => 'page',
        'context' => 'normal',
        'priority' => 'default',
        'sections' => array(
            array(
                'name' => 'afflifiate_theme_page_metabox',
                'title' => 'Page Options',
                'fields' => array(

                    // begin: a field

                    array(
                        'id' => 'enable_title',
                        'type' => 'switcher',
                        'title' => 'Enable Page Title',
                        'default' => 'false'
                    ) ,

                    // end: a field

                    array(
                        'id' => 'custom_title',
                        'type' => 'textarea',
                        'title' => 'Add Page custom Title',
                        'dependency' => array(
                            'enable_title',
                            '==',
                            'true'
                        )
                    ) ,

                    // end: a field

                    array(
                        'id' => 'text_title_direction',
                        'type' => 'select',
                        'title' => 'Select Text Align',
                        'options' => array(
                            'center' => 'Center',
                            'left' => 'Left',
                            'right' => 'Right'
                        ) ,
                        'default' => 'left',
                        'dependency' => array(
                            'enable_title',
                            '==',
                            'true'
                        )
                    ) ,

                    // end: a field

                    array(
                        'id' => 'header_style',
                        'type' => 'select',
                        'title' => 'Select Header Style',
                        'options' => array(
                            '8' => 'Header 1',
                            '12' => 'Header 2'
                        ) ,
                        'default' => 'Header 1'
                    )

                    // end: a field

                )
            )
        )
    );
    return $options;
    }

add_filter('cs_metabox_options', 'afflifiate_theme_framework_options');

// framework Theme options filter example

function afflifiate_theme_options($options)
    {
    $options = array();
    /*remove old options*/

    // Add acording option

    $options[] = array(
        'name' => 'header_options',
        'title' => 'Header Options',
        'icon' => 'fa fa-minus',
        'sections' => array(

            // Header top left start

            array(
                'name' => 'header_top',
                'title' => 'Header Top',
                'icon' => 'fa fa-minus',
                'fields' => array(
                    array(
                        'id' => 'header_top_option',
                        'type' => 'switcher',
                        'title' => 'Header Top Option',
                        'default' => true
                    ) ,
                    array(
                        'id' => 'bloginfo_options',
                        'type' => 'switcher',
                        'title' => 'Blog Info Options',
                        'default' => true
                    ) ,
                    array(
                        'id' => 'header_top_left',
                        'type' => 'fieldset',
                        'title' => 'Header Top Left',
                        'dependency' => array(
                            'bloginfo_options',
                            '==',
                            'true'
                        ) ,
                        'fields' => array(
                            array(
                                'id' => 'site_title',
                                'type' => 'text',
                                'title' => 'Site Title'
                            ) ,
                            array(
                                'id' => 'site_tagline',
                                'type' => 'text',
                                'title' => 'Site Tagline'
                            ) ,
                            array(
                                'id' => 'blog_info_name',
                                'type' => 'text',
                                'title' => 'Blog Info Name'
                            ) ,
                            array(
                                'id' => 'blog_info_url',
                                'type' => 'text',
                                'title' => 'Blog Info Url'
                            )
                        )
                    ) ,
                    array(
                        'id' => 'social_link_array',
                        'type' => 'group',
                        'title' => 'Social Link Add',
                        'button_title' => 'Add New',
                        'accordion_title' => 'Add New Social Link',
                        'fields' => array(
                            array(
                                'id' => 'social_icon',
                                'type' => 'icon',
                                'title' => 'Select social Icon'
                            ) ,
                            array(
                                'id' => 'htop_icon_bg_color',
                                'type' => 'color_picker',
                                'title' => 'Icon Background Color',
                                'default' => '#000',
                                'rgba' => true
                            ) ,
                            array(
                                'id' => 'htop_icon_color',
                                'type' => 'color_picker',
                                'title' => 'Icon Color',
                                'default' => '#fff',
                                'rgba' => true
                            ) ,
                            array(
                                'id' => 'social_link',
                                'type' => 'text',
                                'title' => 'Social link add'
                            )
                        )
                    )
                )
            ) ,
            array(
                'name' => 'header_middle',
                'title' => 'Header Middle',
                'icon' => 'fa fa-minus',
                'fields' => array(
                    array(
                        'id' => 'header_middle_options',
                        'type' => 'switcher',
                        'title' => 'Header Middle Options',
                        'default' => true
                    ) ,
                    array(
                        'id' => 'header_middle_option',
                        'type' => 'fieldset',
                        'title' => 'Header Top Left',
                        'dependency' => array(
                            'header_middle_options',
                            '==',
                            'true'
                        ) ,
                        'fields' => array(
                            array(
                                'id' => 'header_logo',
                                'type' => 'image',
                                'title' => 'Image with Custom Title',
                                'add_title' => 'Add Logo',
                            ) ,
                            array(
                                'id' => 'header_logo_text',
                                'type' => 'text',
                                'title' => 'Logo Right Text'
                            ) ,
                            array(
                                'id' => 'hlogo_bg_color',
                                'type' => 'color_picker',
                                'title' => 'Logo Area BG Color',
                                'default' => '#ffbc00',
                                'rgba' => true,
                            ) ,
                            array(
                                'id' => 'hlogo_text_color',
                                'type' => 'color_picker',
                                'title' => 'Logo Area Text Color',
                                'default' => '#ffbc00',
                                'rgba' => true,
                            ) ,
                        )
                    ) ,

                     array(
                        'id' => 'header_after_options',
                        'type' => 'switcher',
                        'title' => 'Header After Options',
                        'default' => true
                    ) ,
                    array(
                        'id' => 'after_header_option',
                        'type' => 'fieldset',
                        'title' => 'After Header Option',
                        'dependency' => array(
                            'header_after_options',
                            '==',
                            'true'
                        ) ,
                        'fields' => array(
                            array(
                                'id' => 'after_header_text',
                                'type' => 'text',
                                'title' => 'After Header Text'
                            ) ,
                            array(
                                'id' => 'after_header_bg_color',
                                'type' => 'color_picker',
                                'title' => 'After Header BG Color',
                                'default' => '#999999',
                                'rgba' => true,
                            ) ,
                            array(
                                'id' => 'after_header_text_color',
                                'type' => 'color_picker',
                                'title' => 'After Header Text Color',
                                'default' => '#000',
                                'rgba' => true,
                            ) ,
                        ) ,
                    ) ,
                ) ,
            ) ,
            array(
                'name' => 'header_bottom',
                'title' => 'Header Bottom',
                'icon' => 'fa fa-minus',
                'fields' => array(
                    
                    array(
                        'id' => 'header_bottom_options',
                        'type' => 'switcher',
                        'title' => 'Header Bottom Options',
                        'default' => true
                    ) ,
                    array(
                        'id' => 'header_bottom_option',
                        'type' => 'fieldset',
                        'title' => 'Header Bottom Option',
                        'dependency' => array(
                            'header_bottom_options',
                            '==',
                            'true'
                        ) ,
                        'fields' => array(
                         array(
                                'id' => 'after_header_text',
                                'type' => 'text',
                                'title' => 'After Header Text'
                            ) ,
                            array(
                                'id' => 'after_header_bg_color',
                                'type' => 'color_picker',
                                'title' => 'After Header BG Color',
                                'default' => '#999999',
                                'rgba' => true,
                            ) ,
                            array(
                                'id' => 'after_header_text_color',
                                'type' => 'color_picker',
                                'title' => 'After Header Text Color',
                                'default' => '#000',
                                'rgba' => true,
                            ) ,
                        )
                    ) ,              
                )
            ) ,
        )
    );

    // End header acordian option
    // Blog Option Start

    $options[] = array(
        'name' => 'afflifiate_theme_blog_options',
        'title' => 'Blog Options',
        'icon' => 'fa fa-heart',
        'fields' => array(
            array(
                'id' => 'enable_post_by',
                'type' => 'switcher',
                'title' => 'Display Posted By',
                'default' => true
            ) ,
            array(
                'id' => 'enable_posted_on',
                'type' => 'switcher',
                'title' => 'Display Posted On',
                'default' => true
            ) ,
            array(
                'id' => 'enable_post_category',
                'type' => 'switcher',
                'title' => 'Display Posted category',
                'default' => true
            ) ,
            array(
                'id' => 'enable_post_tag',
                'type' => 'switcher',
                'title' => 'Display Posted Tag',
                'default' => true
            ) ,
            array(
                'id' => 'enable_single_post_pagination',
                'type' => 'switcher',
                'title' => 'Display Single Post Pagination',
                'default' => true
            ) ,
            array(
                'id' => 'blog_full_width',
                'type' => 'switcher',
                'title' => 'Display Full Width Blog',
                'default' => false
            )
        )
    );

    // Blog Option End
    // Start footer acordian

    $options[] = array(
        'name' => 'footer_options',
        'title' => 'Footer Options',
        'icon' => 'fa fa-minus',
        'sections' => array(

            // Footer Social Option

            array(
                'name' => 'footer_social_option',
                'title' => 'Footer Social Option',
                'icon' => 'fa fa-minus',
                'fields' => array(
                    array(
                        'id' => 'footer_location_find_array',
                        'type' => 'group',
                        'title' => 'Add widget show you location',
                        'button_title' => 'Add New',
                        'accordion_title' => 'Add New location info',
                        'fields' => array(
                            array(
                                'id' => 'footer_location_icon',
                                'type' => 'icon',
                                'title' => 'Select location Icon'
                            ) ,
                            array(
                                'id' => 'footer_location_detail',
                                'type' => 'text',
                                'title' => 'Your detail location'
                            )
                        )
                    )
                )
            )
        )
    );

    // End footer acordian

    $options[] = array(
        'name' => 'script_section',
        'title' => 'Script Section',
        'fields' => array(
            array(
                'id' => 'custom_css',
                'type' => 'textarea',
                'sanitize' => false,
                'title' => 'Custom Css'
            )
        )
    );
    return $options;
    }

add_filter('cs_framework_options', 'afflifiate_theme_options');

// framework Custom options filter example

function afflifiate_theme_custom_framework_options($options)
    {
    $options = array(); // remove old options
    return $options;
    }

add_filter('cs_customize_options', 'afflifiate_theme_custom_framework_options');