<?php

// Регистрируем css 
function bz_add_css(){
    $parenthandle = 'parent-style'; 
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css',  array());
    wp_enqueue_style( 'bz-fonts', get_stylesheet_directory_uri() . '/fonts/fonts.css',  array());
}
add_action( 'wp_enqueue_scripts', 'bz_add_css' );

// Регистрируем скрипты
function bz_add_js(){
    // 
}
add_action( 'wp_enqueue_scripts', 'bz_add_js' );

//Добавляем настройки в тему
function bz_customize_register( $wp_customize ) {
    /*
    Добавляем секцию футера в настройки темы
    */
    $wp_customize->add_section(
        // ID
        'footer_data_section',
        // Arguments array
        array(
            'title' => 'Данные в футере',
            'capability' => 'edit_theme_options',
            'description' => "Ссылки и юридическая информация в нижней части сайта"
        )
    );
    /*
    Добавляем поля
    */
    $wp_customize->add_setting(
        // ID
        'theme_termsofuse',
        // Arguments array
        array(
            'default' => '',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        // ID
        'theme_termsofuse_control',
        // Arguments array
        array(
            'type' => 'dropdown-pages',
            'label' => "Страница пользовательского соглашения",
            'section' => 'footer_data_section',
            // This last one must match setting ID from above
            'settings' => 'theme_termsofuse'
        )
    );
    //////////////////////////////////////////

    $wp_customize->add_setting(
        // ID
        'theme_personal_data_consent',
        // Arguments array
        array(
            'default' => '',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        // ID
        'theme_personal_data_consent_control',
        // Arguments array
        array(
            'type' => 'dropdown-pages',
            'label' => "Страница согласия на обработку персональных данных",
            'section' => 'footer_data_section',
            // This last one must match setting ID from above
            'settings' => 'theme_personal_data_consent'
        )
    );
    ////////////////////////////////////////////

    $wp_customize->add_setting(
        // ID
        'theme_legal_information',
        // Arguments array
        array(
            'default' => '',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        // ID
        'theme_legal_information_control',
        // Arguments array
        array(
            'type' => 'text',
            'label' => "Юридическая информация",
            'section' => 'footer_data_section',
            // This last one must match setting ID from above
            'settings' => 'theme_legal_information'
        )
    );
    ////////////////////////////////////////////

    $wp_customize->add_setting(
        // ID
        'theme_email',
        // Arguments array
        array(
            'default' => '',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        // ID
        'theme_email_control',
        // Arguments array
        array(
            'type' => 'text',
            'label' => "Email",
            'section' => 'footer_data_section',
            // This last one must match setting ID from above
            'settings' => 'theme_email'
        )
    );
    ////////////////////////////////////////////

    $wp_customize->add_setting(
        // ID
        'theme_phone',
        // Arguments array
        array(
            'default' => '',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        // ID
        'theme_phone_control',
        // Arguments array
        array(
            'type' => 'text',
            'label' => "Телефон",
            'section' => 'footer_data_section',
            // This last one must match setting ID from above
            'settings' => 'theme_phone'
        )
    );
    ////////////////////////////////////////////

    $wp_customize->add_setting(
        // ID
        'theme_social_link_telegram',
        // Arguments array
        array(
            'default' => '',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        // ID
        'theme_social_link_telegram_control',
        // Arguments array
        array(
            'type' => 'text',
            'label' => "Ссылка на Телеграм",
            'section' => 'footer_data_section',
            // This last one must match setting ID from above
            'settings' => 'theme_social_link_telegram'
        )
    );
    ////////////////////////////////////////////

    $wp_customize->add_setting(
        // ID
        'theme_social_link_youtube',
        // Arguments array
        array(
            'default' => '',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        // ID
        'theme_social_link_youtube_control',
        // Arguments array
        array(
            'type' => 'text',
            'label' => "Ссылка на Телеграм",
            'section' => 'footer_data_section',
            // This last one must match setting ID from above
            'settings' => 'theme_social_link_youtube'
        )
    );
    ////////////////////////////////////////////

    $wp_customize->add_setting(
        // ID
        'theme_social_link_facebook',
        // Arguments array
        array(
            'default' => '',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        // ID
        'theme_social_link_facebook_control',
        // Arguments array
        array(
            'type' => 'text',
            'label' => "Ссылка на Телеграм",
            'section' => 'footer_data_section',
            // This last one must match setting ID from above
            'settings' => 'theme_social_link_facebook'
        )
    );
    ////////////////////////////////////////////

    $wp_customize->add_setting(
        // ID
        'theme_social_link_insta',
        // Arguments array
        array(
            'default' => '',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        // ID
        'theme_social_link_insta_control',
        // Arguments array
        array(
            'type' => 'text',
            'label' => "Ссылка на Телеграм",
            'section' => 'footer_data_section',
            // This last one must match setting ID from above
            'settings' => 'theme_social_link_insta'
        )
    );


     /*
    Добавляем секцию обратной связи в настройки темы
    */
    $wp_customize->add_section(
        // ID
        'footer_cf_data_section',
        // Arguments array
        array(
            'title' => 'Форма обратной связи',
            'capability' => 'edit_theme_options',
            'description' => "Текст рядом с формой обратной свзязи (перед футером)"
        )
    );
    /*
    Добавляем поля
    */
    $wp_customize->add_setting(
        // ID
        'theme_footer_cf_header',
        // Arguments array
        array(
            'default' => 'Поделитесь с нами своими идеями',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        // ID
        'theme_footer_cf_header_control',
        // Arguments array
        array(
            'type' => 'text',
            'label' => "Заголовок",
            'section' => 'footer_cf_data_section',
            // This last one must match setting ID from above
            'settings' => 'theme_footer_cf_header'
        )
    );
    ////////////////////////////////////////////

    $wp_customize->add_setting(
        // ID
        'theme_footer_cf_text',
        // Arguments array
        array(
            'default' => '',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        // ID
        'theme_footer_cf_text_control',
        // Arguments array
        array(
            'type' => 'textarea',
            'label' => "Текст",
            'section' => 'footer_cf_data_section',
            // This last one must match setting ID from above
            'settings' => 'theme_footer_cf_text'
        )
    );
};
add_action( 'customize_register', 'bz_customize_register' );


function bz_catalog_menu() {
    register_nav_menu('bz-catalog-menu',__( 'Catalog menu' ));
  }
  add_action( 'init', 'bz_catalog_menu' );
?>