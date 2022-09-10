<?php

function customize_site_info($wp_customize){
    $wp_customize->add_section('gradient_colors', array(
        'title' => __('Градиент фона блоков меню, контента', 'mob_apps'),
        'description' => 'Градиент фона блоков меню, контента'
    ));
    
    $wp_customize->add_setting('top_left_color', array(
        'default' => '#3c0876'
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'top_left_color', array(
        'label' => __('Левая верхняя граница', 'mob_apps'),
        'section' => 'gradient_colors',
        'settings' => 'top_left_color'
    )));
    
    $wp_customize->add_setting('bottom_right_color', array(
        'default' => '#fa0076'
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'bottom_right_color', array(
        'label' => __('Правая нижняя граница', 'mob_apps'),
        'section' => 'gradient_colors',
        'settings' => 'bottom_right_color'
    )));

   
   
   $wp_customize->add_section('mobapp_fonts', array(
        'title' => __('Шрифты', 'mob_apps'),
        'description' => 'Шрифты контента'
    )); 
    
	$wp_customize->add_setting('mobapp_fonts', array(
	   'default'   => 'rubik'
	));
	$wp_customize->add_control('mobapp_fonts', array(
			'section' => 'mobapp_fonts',
            'settings' => 'mobapp_fonts',
			'label' => 'Шрифт',
			'type' => 'select',
			'choices' => array(
				'arial' => 'Arial',
				'courier' => 'Courier New',
                'rubik' => 'Rubik'
	)));




    $wp_customize->add_section('font_color', array(
        'title' => __('Цвет текса контента', 'mob_apps'),
        'description' => 'Цвет текса контента'
    ));
    
    $wp_customize->add_setting('h_font_color', array(
        'default' => '#633991'
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'h_font_color', array(
        'label' => __('Цвет заголовков', 'mob_apps'),
        'section' => 'font_color',
        'settings' => 'h_font_color'
    )));
    
    $wp_customize->add_setting('p_font_color', array(
        'default' => '#959094'
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'p_font_color', array(
        'label' => __('Цвет текста', 'mob_apps'),
        'section' => 'font_color',
        'settings' => 'p_font_color'
    )));




    
    $wp_customize->add_section('head_content_text', array(
        'title' => __('Заголовок для шапки', 'mob_apps'),
        'description' => 'Редактирование текста контента шапки сайта'
    ));
    $wp_customize->add_setting('theme_description', array(
        'default' => 'Mobile App Landing Page Template'
    ));
    $wp_customize->add_control( 'theme_description', array(
        'label' => __('Заголовок для шапки', 'mob_apps'),
        'section' => 'head_content_text',
        'settings' => 'theme_description'
    ));
    
    $wp_customize->add_setting('short_theme_description', array(
        'default' => 'The one and only solution for any kind of mobila app landing needs. Just change the screenshots and texts and you are good to go.'
    ));
    $wp_customize->add_control( 'short_theme_description', array(
        'label' => __('Краткое описание для шапки', 'mob_apps'),
        'section' => 'head_content_text',
        'settings' => 'short_theme_description'
    ));
    

    
    $wp_customize->add_section('features_content', array(
        'title' => __('Features you love', 'mob_apps'),
        'description' => 'Контент блока'
    ));
    
    $wp_customize->add_setting('simple_text', array(
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque'
    ));
    
    $wp_customize->add_control( 'simple_text', array(
        'type' => 'textarea',
        'label' => __('Для Simple', 'mob_apps'),
        'section' => 'features_content',
        'settings' => 'simple_text'
    ));

    $wp_customize->add_setting('customize_text', array(
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque'
    ));
    
    $wp_customize->add_control( 'customize_text', array(
        'type' => 'textarea',
        'label' => __('Для Customize', 'mob_apps'),
        'section' => 'features_content',
        'settings' => 'customize_text'
    ));
    
    $wp_customize->add_setting('secure_text', array(
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque'
    ));
    
    $wp_customize->add_control( 'secure_text', array(
        'type' => 'textarea',
        'label' => __('Для Secure', 'mob_apps'),
        'section' => 'features_content',
        'settings' => 'secure_text'
    ));
    
    $wp_customize->add_setting('discover_our_app_text', array(
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque'
    ));
    
    $wp_customize->add_control( 'discover_our_app_text', array(
        'type' => 'textarea',
        'label' => __('Для Discover Our App', 'mob_apps'),
        'section' => 'features_content',
        'settings' => 'discover_our_app_text'
        
    ));



    $wp_customize->add_section('do_more_content', array(
        'title' => __('Do more with our app', 'mob_apps'),
        'description' => 'Контент блока'
    ));

    $wp_customize->add_setting('comunication_content_header', array(
        'default' => 'Communicate with ease'
    ));

    $wp_customize->add_control( 'comunication_content_header', array(
        'type' => 'text',
        'label' => __('Заголовок Comunications', 'mob_apps'),
        'section' => 'do_more_content',
        'settings' => 'comunication_content_header'
        
    ));

    $wp_customize->add_setting('comunication_content_description', array(
        'default' => 'Uniquely underwhelm premium outsourcing with proactive leadership skills.'
    ));

    $wp_customize->add_control( 'comunication_content_description', array(
        'type' => 'text',
        'label' => __('Краткое описание Comunications', 'mob_apps'),
        'section' => 'do_more_content',
        'settings' => 'comunication_content_description'
        
    ));

    $wp_customize->add_setting('comunication_content_text', array(
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, 
        et sagittis dolor nulla vel sapien. Vestibulum sit amet mattis ante. 
        Ut placerat dui eu nulla congue tincidunt ac a nibh. Mauris accumsan pulvinar lorem placerat volutpat. 
        Praesent quis facilisis elit. Sed condimentum neque quis ex porttitor,
        malesuada faucibus augue aliquet. Sed elit est, eleifend sed dapibus a, semper a eros. 
        Vestibulum blandit vulputate pharetra. Phasellus lobortis leo a nisl euismod, eu faucibus 
        justo sollicitudin. Mauris consectetur, tortor sed tempor malesuada, sem nunc porta augue, 
        in dictum arcu tortor id turpis. Proin aliquet vulputate aliquam.'
    ));

    $wp_customize->add_control( 'comunication_content_text', array(
        'type' => 'textarea',
        'label' => __('Текст Comunications', 'mob_apps'),
        'section' => 'do_more_content',
        'settings' => 'comunication_content_text'
        
    ));

    $wp_customize->add_setting('scheduling_content_header', array(
        'default' => 'Scheduling when you want'
    ));

    $wp_customize->add_control( 'scheduling_content_header', array(
        'type' => 'text',
        'label' => __('Заголовок Scheduling', 'mob_apps'),
        'section' => 'do_more_content',
        'settings' => 'scheduling_content_header'
        
    ));

    $wp_customize->add_setting('scheduling_content_description', array(
        'default' => 'Uniquely underwhelm premium outsourcing with proactive leadership skills.'
    ));

    $wp_customize->add_control( 'scheduling_content_description', array(
        'type' => 'text',
        'label' => __('Краткое описание Scheduling', 'mob_apps'),
        'section' => 'do_more_content',
        'settings' => 'scheduling_content_description'
        
    ));

    $wp_customize->add_setting('scheduling_content_text', array(
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, 
        et sagittis dolor nulla vel sapien. Vestibulum sit amet mattis ante. 
        Ut placerat dui eu nulla congue tincidunt ac a nibh. Mauris accumsan pulvinar lorem placerat volutpat. 
        Praesent quis facilisis elit. Sed condimentum neque quis ex porttitor,
        malesuada faucibus augue aliquet. Sed elit est, eleifend sed dapibus a, semper a eros. 
        Vestibulum blandit vulputate pharetra. Phasellus lobortis leo a nisl euismod, eu faucibus 
        justo sollicitudin. Mauris consectetur, tortor sed tempor malesuada, sem nunc porta augue, 
        in dictum arcu tortor id turpis. Proin aliquet vulputate aliquam.'
    ));

    $wp_customize->add_control( 'scheduling_content_text', array(
        'type' => 'textarea',
        'label' => __('Текст Scheduling', 'mob_apps'),
        'section' => 'do_more_content',
        'settings' => 'scheduling_content_text'
        
    ));

    $wp_customize->add_setting('messages_content_header', array(
        'default' => 'Realtime Messaging service'
    ));

    $wp_customize->add_control( 'messages_content_header', array(
        'type' => 'text',
        'label' => __('Заголовок Messages', 'mob_apps'),
        'section' => 'do_more_content',
        'settings' => 'messages_content_header'
        
    ));

    $wp_customize->add_setting('messages_content_description', array(
        'default' => 'Uniquely underwhelm premium outsourcing with proactive leadership skills.'
    ));

    $wp_customize->add_control( 'messages_content_description', array(
        'type' => 'text',
        'label' => __('Краткое описание Messages', 'mob_apps'),
        'section' => 'do_more_content',
        'settings' => 'messages_content_description'
        
    ));

    $wp_customize->add_setting('messages_content_text', array(
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, 
        et sagittis dolor nulla vel sapien. Vestibulum sit amet mattis ante. 
        Ut placerat dui eu nulla congue tincidunt ac a nibh. Mauris accumsan pulvinar lorem placerat volutpat. 
        Praesent quis facilisis elit. Sed condimentum neque quis ex porttitor,
        malesuada faucibus augue aliquet. Sed elit est, eleifend sed dapibus a, semper a eros. 
        Vestibulum blandit vulputate pharetra. Phasellus lobortis leo a nisl euismod, eu faucibus 
        justo sollicitudin. Mauris consectetur, tortor sed tempor malesuada, sem nunc porta augue, 
        in dictum arcu tortor id turpis. Proin aliquet vulputate aliquam.'
    ));

    $wp_customize->add_control( 'messages_content_text', array(
        'type' => 'textarea',
        'label' => __('Текст Messages', 'mob_apps'),
        'section' => 'do_more_content',
        'settings' => 'messages_content_text'
        
    ));

    $wp_customize->add_setting('livechat_content_header', array(
        'default' => 'Live chat when you needed'
    ));

    $wp_customize->add_control( 'livechat_content_header', array(
        'type' => 'text',
        'label' => __('Заголовок Live chat', 'mob_apps'),
        'section' => 'do_more_content',
        'settings' => 'livechat_content_header'
        
    ));

    $wp_customize->add_setting('livechat_content_description', array(
        'default' => 'Uniquely underwhelm premium outsourcing with proactive leadership skills.'
    ));

    $wp_customize->add_control( 'livechat_content_description', array(
        'type' => 'text',
        'label' => __('Краткое описание Live chat', 'mob_apps'),
        'section' => 'do_more_content',
        'settings' => 'livechat_content_description'
        
    ));

    $wp_customize->add_setting('livechat_content_text', array(
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, 
        et sagittis dolor nulla vel sapien. Vestibulum sit amet mattis ante. 
        Ut placerat dui eu nulla congue tincidunt ac a nibh. Mauris accumsan pulvinar lorem placerat volutpat. 
        Praesent quis facilisis elit. Sed condimentum neque quis ex porttitor,
        malesuada faucibus augue aliquet. Sed elit est, eleifend sed dapibus a, semper a eros. 
        Vestibulum blandit vulputate pharetra. Phasellus lobortis leo a nisl euismod, eu faucibus 
        justo sollicitudin. Mauris consectetur, tortor sed tempor malesuada, sem nunc porta augue, 
        in dictum arcu tortor id turpis. Proin aliquet vulputate aliquam.'
    ));

    $wp_customize->add_control( 'livechat_content_text', array(
        'type' => 'textarea',
        'label' => __('Текст Live chat', 'mob_apps'),
        'section' => 'do_more_content',
        'settings' => 'livechat_content_text'
        
    ));

    $wp_customize->add_setting('lunchyourapp_content_text', array(
        'default' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati vel exercitationem eveniet vero maxime ratione'
    ));

    $wp_customize->add_control( 'lunchyourapp_content_text', array(
        'type' => 'textarea',
        'label' => __('Описание Launch your App', 'mob_apps'),
        'section' => 'do_more_content',
        'settings' => 'lunchyourapp_content_text'
        
    ));

    $wp_customize->add_setting('createanaccount_content_text', array(
        'default' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati vel exercitationem eveniet vero maxime ratione'
    ));

    $wp_customize->add_control( 'createanaccount_content_text', array(
        'type' => 'textarea',
        'label' => __('Описание Create an Account', 'mob_apps'),
        'section' => 'do_more_content',
        'settings' => 'createanaccount_content_text'
        
    ));

    $wp_customize->add_setting('sharewithfriends_content_text', array(
        'default' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati vel exercitationem eveniet vero maxime ratione'
    ));

    $wp_customize->add_control( 'sharewithfriends_content_text', array(
        'type' => 'textarea',
        'label' => __('Описание Share with friends', 'mob_apps'),
        'section' => 'do_more_content',
        'settings' => 'sharewithfriends_content_text'
        
    ));

    $wp_customize->add_setting('enjoyyourlife_content_text', array(
        'default' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati vel exercitationem eveniet vero maxime ratione'
    ));

    $wp_customize->add_control( 'enjoyyourlife_content_text', array(
        'type' => 'textarea',
        'label' => __('Описание Enjoy your life', 'mob_apps'),
        'section' => 'do_more_content',
        'settings' => 'enjoyyourlife_content_text'
        
    ));




    $wp_customize->add_section('what_our_costumers_says', array(
        'title' => __('What our Customers Says', 'mob_apps'),
        'description' => 'Контент блока'
    ));

    $wp_customize->add_setting('slider_user_img_1', array(
        'default' => get_template_directory_uri() . '/images/client.png'
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'user_img_1', array(
        'label' => __('Изображение пользователя слайдера №1', 'mob_apps'),
        'section' => 'what_our_costumers_says',
        'settings' => 'slider_user_img_1'
        
    )));

    $wp_customize->add_setting('slider_text_1', array(
        'default' => 'Uniquely streamline highly efficient scenarios and 24/7 initiatives. 
        Conveniently embrace multifunctional ideas through proactive customer service. 
        Distinctively conceptualize 2.0 intellectual capital via user-centric partnerships.'
    ));

    $wp_customize->add_control( 'slider_text_1', array(
        'type' => 'textarea',
        'label' => __('Текст слайдера №1', 'mob_apps'),
        'section' => 'what_our_costumers_says',
        'settings' => 'slider_text_1'
        
    ));

    $wp_customize->add_setting('slider_name_1', array(
        'default' => 'Crystal Gordon'
    ));

    $wp_customize->add_control( 'slider_name_1', array(
        'type' => 'text',
        'label' => __('Имя пользователя слайдера №1', 'mob_apps'),
        'section' => 'what_our_costumers_says',
        'settings' => 'slider_name_1'
        
    ));

    $wp_customize->add_setting('slider_country_1', array(
        'default' => 'United States'
    ));

    $wp_customize->add_control( 'slider_country_1', array(
        'type' => 'text',
        'label' => __('Страна пользователя слайдера №1', 'mob_apps'),
        'section' => 'what_our_costumers_says',
        'settings' => 'slider_country_1'
        
    ));
    
    $wp_customize->add_setting('slider_user_img_2', array(
        'default' => get_template_directory_uri() . '/images/client.png'
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'user_img_2', array(
        'label' => __('Изображение пользователя слайдера №2', 'mob_apps'),
        'section' => 'what_our_costumers_says',
        'settings' => 'slider_user_img_2'
        
    )));

    $wp_customize->add_setting('slider_text_2', array(
        'default' => 'Uniquely streamline highly efficient scenarios and 24/7 initiatives. 
        Conveniently embrace multifunctional ideas through proactive customer service. 
        Distinctively conceptualize 2.0 intellectual capital via user-centric partnerships.'
    ));

    $wp_customize->add_control( 'slider_text_2', array(
        'type' => 'textarea',
        'label' => __('Текст слайдера №2', 'mob_apps'),
        'section' => 'what_our_costumers_says',
        'settings' => 'slider_text_2'
        
    ));

    $wp_customize->add_setting('slider_name_2', array(
        'default' => 'Crystal Gordon'
    ));

    $wp_customize->add_control( 'slider_name_2', array(
        'type' => 'text',
        'label' => __('Имя пользователя слайдера №2', 'mob_apps'),
        'section' => 'what_our_costumers_says',
        'settings' => 'slider_name_2'
        
    ));

    $wp_customize->add_setting('slider_country_2', array(
        'default' => 'United States'
    ));

    $wp_customize->add_control( 'slider_country_2', array(
        'type' => 'text',
        'label' => __('Страна пользователя слайдера №2', 'mob_apps'),
        'section' => 'what_our_costumers_says',
        'settings' => 'slider_country_1'
        
    ));
    
    $wp_customize->add_setting('slider_user_img_3', array(
        'default' => get_template_directory_uri() . '/images/client.png'
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'user_img_3', array(
        'label' => __('Изображение пользователя слайдера №3', 'mob_apps'),
        'section' => 'what_our_costumers_says',
        'settings' => 'slider_user_img_3'
        
    )));

    $wp_customize->add_setting('slider_text_3', array(
        'default' => 'Uniquely streamline highly efficient scenarios and 24/7 initiatives. 
        Conveniently embrace multifunctional ideas through proactive customer service. 
        Distinctively conceptualize 2.0 intellectual capital via user-centric partnerships.'
    ));

    $wp_customize->add_control( 'slider_text_3', array(
        'type' => 'textarea',
        'label' => __('Текст слайдера №3', 'mob_apps'),
        'section' => 'what_our_costumers_says',
        'settings' => 'slider_text_3'
        
    ));

    $wp_customize->add_setting('slider_name_3', array(
        'default' => 'Crystal Gordon'
    ));

    $wp_customize->add_control( 'slider_name_3', array(
        'type' => 'text',
        'label' => __('Имя пользователя слайдера №3', 'mob_apps'),
        'section' => 'what_our_costumers_says',
        'settings' => 'slider_name_3'
        
    ));

    $wp_customize->add_setting('slider_country_3', array(
        'default' => 'United States'
    ));

    $wp_customize->add_control( 'slider_country_3', array(
        'type' => 'text',
        'label' => __('Страна пользователя слайдера №3', 'mob_apps'),
        'section' => 'what_our_costumers_says',
        'settings' => 'slider_country_3'
        
    ));
    
    
    
    $wp_customize->add_section('app_screenshots', array(
        'title' => __('App Screenshots', 'mob_apps'),
        'description' => 'Редактирование галереи'
    ));

    $wp_customize->add_setting('gallery_img_1', array(
        'default' => get_template_directory_uri() . '/images/screen1.jpg'
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'gallery_img_1', array(
        'label' => __('Изображение галереи №1', 'mob_apps'),
        'section' => 'app_screenshots',
        'settings' => 'gallery_img_1'
        
    )));

    $wp_customize->add_setting('gallery_img_2', array(
        'default' => get_template_directory_uri() . '/images/screen2.jpg'
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'gallery_img_2', array(
        'label' => __('Изображение галереи №2', 'mob_apps'),
        'section' => 'app_screenshots',
        'settings' => 'gallery_img_2'
        
    )));
    
    $wp_customize->add_setting('gallery_img_3', array(
        'default' => get_template_directory_uri() . '/images/screen3.jpg'
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'gallery_img_3', array(
        'label' => __('Изображение галереи №3', 'mob_apps'),
        'section' => 'app_screenshots',
        'settings' => 'gallery_img_3'
        
    )));

    $wp_customize->add_setting('gallery_img_4', array(
        'default' => get_template_directory_uri() . '/images/screen1.jpg'
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'gallery_img_4', array(
        'label' => __('Изображение галереи №4', 'mob_apps'),
        'section' => 'app_screenshots',
        'settings' => 'gallery_img_4'
        
    )));
    
    
    
    $wp_customize->add_section('upgrade_to_pro', array(
        'title' => __('Upgrade to Pro', 'mob_apps'),
        'description' => 'Редактирование блоков прайсинга'
    ));
    
    $wp_customize->add_setting('price_block_1', array(
        'default' => '$14'
    ));

    $wp_customize->add_control( 'price_block_1', array(
        'type' => 'text',
        'label' => __('Цена блока 1', 'mob_apps'),
        'section' => 'upgrade_to_pro',
        'settings' => 'price_block_1'
        
    ));
    
    $wp_customize->add_setting('description_field1_block_1', array(
        'default' => '10 Projects'
    ));

    $wp_customize->add_control( 'description_field1_block_1', array(
        'type' => 'text',
        'label' => __('Текст поля блока 1', 'mob_apps'),
        'section' => 'upgrade_to_pro',
        'settings' => 'description_field1_block_1'
        
    ));
    
    $wp_customize->add_setting('description_field2_block_1', array(
        'default' => '5 GB Storage'
    ));

    $wp_customize->add_control( 'description_field2_block_1', array(
        'type' => 'text',
        'label' => __('Текст поля блока 1', 'mob_apps'),
        'section' => 'upgrade_to_pro',
        'settings' => 'description_field2_block_1'
        
    ));
    
    $wp_customize->add_setting('description_field3_block_1', array(
        'default' => 'Basic Support'
    ));

    $wp_customize->add_control( 'description_field3_block_1', array(
        'type' => 'text',
        'label' => __('Текст поля блока 1', 'mob_apps'),
        'section' => 'upgrade_to_pro',
        'settings' => 'description_field3_block_1'
        
    ));
    
    $wp_customize->add_setting('description_field4_block_1', array(
        'default' => 'Collaboration'
    ));

    $wp_customize->add_control( 'description_field4_block_1', array(
        'type' => 'text',
        'label' => __('Текст поля блока 1', 'mob_apps'),
        'section' => 'upgrade_to_pro',
        'settings' => 'description_field4_block_1'
        
    ));
    
    $wp_customize->add_setting('description_field5_block_1', array(
        'default' => 'Reports and analytics'
    ));

    $wp_customize->add_control( 'description_field5_block_1', array(
        'type' => 'text',
        'label' => __('Текст поля блока 1', 'mob_apps'),
        'section' => 'upgrade_to_pro',
        'settings' => 'description_field5_block_1'
        
    ));

    $wp_customize->add_setting('price_block_2', array(
        'default' => '$29'
    ));

    $wp_customize->add_control( 'price_block_2', array(
        'type' => 'text',
        'label' => __('Цена блока 2', 'mob_apps'),
        'section' => 'upgrade_to_pro',
        'settings' => 'price_block_2'
        
    ));
    
    $wp_customize->add_setting('description_field1_block_2', array(
        'default' => 'Unlimited Projects'
    ));

    $wp_customize->add_control( 'description_field1_block_2', array(
        'type' => 'text',
        'label' => __('Текст поля блока 2', 'mob_apps'),
        'section' => 'upgrade_to_pro',
        'settings' => 'description_field1_block_2'
        
    ));
    
    $wp_customize->add_setting('description_field2_block_2', array(
        'default' => '100 GB Storage'
    ));

    $wp_customize->add_control( 'description_field2_block_2', array(
        'type' => 'text',
        'label' => __('Текст поля блока 2', 'mob_apps'),
        'section' => 'upgrade_to_pro',
        'settings' => 'description_field2_block_2'
        
    ));
    
    $wp_customize->add_setting('description_field3_block_2', array(
        'default' => 'Priority Support'
    ));

    $wp_customize->add_control( 'description_field3_block_2', array(
        'type' => 'text',
        'label' => __('Текст поля блока 2', 'mob_apps'),
        'section' => 'upgrade_to_pro',
        'settings' => 'description_field3_block_2'
        
    ));
    
    $wp_customize->add_setting('description_field4_block_2', array(
        'default' => 'Collaboration'
    ));

    $wp_customize->add_control( 'description_field4_block_2', array(
        'type' => 'text',
        'label' => __('Текст поля блока 2', 'mob_apps'),
        'section' => 'upgrade_to_pro',
        'settings' => 'description_field4_block_2'
        
    ));
    
    $wp_customize->add_setting('description_field5_block_2', array(
        'default' => 'Reports and analytics'
    ));

    $wp_customize->add_control( 'description_field5_block_2', array(
        'type' => 'text',
        'label' => __('Текст поля блока 2', 'mob_apps'),
        'section' => 'upgrade_to_pro',
        'settings' => 'description_field5_block_2'
        
    ));
    
    $wp_customize->add_setting('price_block_3', array(
        'default' => '$249'
    ));

    $wp_customize->add_control( 'price_block_3', array(
        'type' => 'text',
        'label' => __('Цена блока 3', 'mob_apps'),
        'section' => 'upgrade_to_pro',
        'settings' => 'price_block_3'
        
    ));
    
    $wp_customize->add_setting('description_field1_block_3', array(
        'default' => 'Unlimited Projects'
    ));

    $wp_customize->add_control( 'description_field1_block_3', array(
        'type' => 'text',
        'label' => __('Текст поля блока 3', 'mob_apps'),
        'section' => 'upgrade_to_pro',
        'settings' => 'description_field1_block_3'
        
    ));
    
    $wp_customize->add_setting('description_field2_block_3', array(
        'default' => 'Unlimited Storage'
    ));

    $wp_customize->add_control( 'description_field2_block_3', array(
        'type' => 'text',
        'label' => __('Текст поля блока 3', 'mob_apps'),
        'section' => 'upgrade_to_pro',
        'settings' => 'description_field2_block_3'
        
    ));
    
    $wp_customize->add_setting('description_field3_block_3', array(
        'default' => 'Collaboration'
    ));

    $wp_customize->add_control( 'description_field3_block_3', array(
        'type' => 'text',
        'label' => __('Текст поля блока 3', 'mob_apps'),
        'section' => 'upgrade_to_pro',
        'settings' => 'description_field3_block_3'
        
    ));
    
    $wp_customize->add_setting('description_field4_block_3', array(
        'default' => 'Reports and analytics'
    ));

    $wp_customize->add_control( 'description_field4_block_3', array(
        'type' => 'text',
        'label' => __('Текст поля блока 3', 'mob_apps'),
        'section' => 'upgrade_to_pro',
        'settings' => 'description_field4_block_3'
        
    ));
    
    $wp_customize->add_setting('description_field5_block_3', array(
        'default' => 'Web hooks'
    ));

    $wp_customize->add_control( 'description_field5_block_3', array(
        'type' => 'text',
        'label' => __('Текст поля блока 3', 'mob_apps'),
        'section' => 'upgrade_to_pro',
        'settings' => 'description_field5_block_3'
        
    ));

    $wp_customize->add_section('frequently_asked_questions', array(
        'title' => __('Frequently Asked Questions', 'mob_apps'),
        'description' => 'Редактирование FAQ'
    ));
    
    $wp_customize->add_setting('faq_header_1', array(
        'default' => 'Can I try before I buy?'
    ));

    $wp_customize->add_control( 'faq_header_1', array(
        'type' => 'text',
        'label' => __('Заголовок вопроса 1', 'mob_apps'),
        'section' => 'frequently_asked_questions',
        'settings' => 'faq_header_1'
        
    ));
    
    $wp_customize->add_setting('faq_text_1', array(
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, et sagittis dolor nulla vel sapien. 
        Vestibulum sit amet mattis ante. '
    ));

    $wp_customize->add_control( 'faq_text_1', array(
        'type' => 'textarea',
        'label' => __('Содержание ответа вопроса 1', 'mob_apps'),
        'section' => 'frequently_asked_questions',
        'settings' => 'faq_text_1'
        
    ));

    $wp_customize->add_setting('faq_header_2', array(
        'default' => 'Can I try before I buy?'
    ));

    $wp_customize->add_control( 'faq_header_2', array(
        'type' => 'text',
        'label' => __('Заголовок вопроса 2', 'mob_apps'),
        'section' => 'frequently_asked_questions',
        'settings' => 'faq_header_2'
        
    ));
    
    $wp_customize->add_setting('faq_text_2', array(
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, et sagittis dolor nulla vel sapien. 
        Vestibulum sit amet mattis ante. '
    ));

    $wp_customize->add_control( 'faq_text_2', array(
        'type' => 'textarea',
        'label' => __('Содержание ответа вопроса 2', 'mob_apps'),
        'section' => 'frequently_asked_questions',
        'settings' => 'faq_text_2'
        
    ));
    
    $wp_customize->add_setting('faq_header_3', array(
        'default' => 'What payment methods do you accept?'
    ));

    $wp_customize->add_control( 'faq_header_3', array(
        'type' => 'text',
        'label' => __('Заголовок вопроса 3', 'mob_apps'),
        'section' => 'frequently_asked_questions',
        'settings' => 'faq_header_3'
        
    ));
    
    $wp_customize->add_setting('faq_text_3', array(
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, et sagittis dolor nulla vel sapien. 
        Vestibulum sit amet mattis ante. '
    ));

    $wp_customize->add_control( 'faq_text_3', array(
        'type' => 'textarea',
        'label' => __('Содержание ответа вопроса 3', 'mob_apps'),
        'section' => 'frequently_asked_questions',
        'settings' => 'faq_text_3'
        
    ));
    
    $wp_customize->add_setting('faq_header_3', array(
        'default' => 'Can I change my plan later?'
    ));

    $wp_customize->add_control( 'faq_header_3', array(
        'type' => 'text',
        'label' => __('Заголовок вопроса 3', 'mob_apps'),
        'section' => 'frequently_asked_questions',
        'settings' => 'faq_header_3'
        
    ));
    
    $wp_customize->add_setting('faq_text_3', array(
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, et sagittis dolor nulla vel sapien. 
        Vestibulum sit amet mattis ante. '
    ));

    $wp_customize->add_control( 'faq_text_3', array(
        'type' => 'textarea',
        'label' => __('Содержание ответа вопроса 3', 'mob_apps'),
        'section' => 'frequently_asked_questions',
        'settings' => 'faq_text_3'
        
    ));
    
    $wp_customize->add_setting('faq_header_4', array(
        'default' => 'Do you have a contract?'
    ));

    $wp_customize->add_control( 'faq_header_4', array(
        'type' => 'text',
        'label' => __('Заголовок вопроса 4', 'mob_apps'),
        'section' => 'frequently_asked_questions',
        'settings' => 'faq_header_4'
        
    ));
    
    $wp_customize->add_setting('faq_text_4', array(
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, et sagittis dolor nulla vel sapien. 
        Vestibulum sit amet mattis ante. '
    ));

    $wp_customize->add_control( 'faq_text_4', array(
        'type' => 'textarea',
        'label' => __('Содержание ответа вопроса 4', 'mob_apps'),
        'section' => 'frequently_asked_questions',
        'settings' => 'faq_text_4'
        
    ));
    
    $wp_customize->add_section('copyright', array(
        'title' => __('Copyright', 'mob_apps'),
        'description' => 'COPYRIGHT'
    ));
    
    $wp_customize->add_setting('copyright', array(
        'default' => 'COPYRIGHT © 2017. ALL RIGHTS RESERVED. MOBAPP TEMPLATE BY COLORLIB'
    ));

    $wp_customize->add_control( 'copyright', array(
        'type' => 'text',
        'label' => __('COPYRIGHT', 'mob_apps'),
        'section' => 'copyright',
        'settings' => 'copyright'
        
    ));

}

function site_customization(){
    ?>
        <style>
            body {
                font-family: <?php echo get_theme_mod('mobapp_fonts');?>, sans-serif;
            }
            h2, h3, h4, h5 {
                color: <?php echo get_theme_mod('h_font_color');?>; 
            }
            p {
                color: <?php echo get_theme_mod('p_font_color');?>;
            }
            .bg-gradient {
               background-image: linear-gradient( 135deg, <?php echo get_theme_mod('top_left_color');?>, <?php echo get_theme_mod('bottom_right_color');?>);
            }
            .nav-menu.is-scrolling, .nav-menu.menu-is-open {
                background: linear-gradient( 135deg, <?php echo get_theme_mod('top_left_color');?>, <?php echo get_theme_mod('bottom_right_color');?>);
            }

        </style>
    <?php
}

add_action('wp_head', 'site_customization');

add_action('customize_register', 'customize_site_info');




















?>