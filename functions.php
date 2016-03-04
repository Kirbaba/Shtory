<?php

define('TM_DIR', get_template_directory(__FILE__));
define('TM_URL', get_template_directory_uri(__FILE__));

require_once TM_DIR . '/lib/Parser.php';

function add_style(){
    wp_enqueue_style( 'my-bootstrap-extension', get_template_directory_uri() . '/css/bootstrap.css', array(), '1');
    wp_enqueue_style( 'owl', get_template_directory_uri() . '/css/owl.carousel.css', array('my-bootstrap-extension'), '1');
    wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/css/owl.theme.css', array('my-bootstrap-extension'), '1');
    wp_enqueue_style( 'my-styles', get_template_directory_uri() . '/css/style.css', array('my-bootstrap-extension'), '1');
     wp_enqueue_style( 'font-ewesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', array('my-bootstrap-extension'), '1');
    wp_enqueue_style( 'my-sass', get_template_directory_uri() . '/sass/style.css', array('my-bootstrap-extension'), '1');
    wp_enqueue_style( 'fotorama', get_template_directory_uri() . '/css/fotorama.css', array('my-bootstrap-extension'), '1');
}

function add_script(){    
    wp_enqueue_script( 'jq', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js', array(), '1');
    wp_enqueue_script( 'my-bootstrap-extension', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1');
    wp_enqueue_script( 'owl', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '1',1);
    wp_enqueue_script( 'yndex-map', 'http://api-maps.yandex.ru/2.1/?lang=ru_RU', array(), '1');
    wp_enqueue_script( 'my-script', get_template_directory_uri() . '/js/script.min.js', array(), '1');
    wp_enqueue_script( 'fotorama-js', get_template_directory_uri() . '/js/fotorama.js', array(), '1');
    wp_localize_script('my-script', 'myajax',
        array(
            'url' => admin_url('admin-ajax.php')
        )
    );
    wp_localize_script( 'my-script', 'img',
        array(
            'url' => get_template_directory_uri().'/img/',
            'act' => admin_url('admin-ajax.php')
        ));
}

function add_admin_script(){
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-2.1.3.min.js', array(), '1');
    wp_enqueue_script('admin',get_template_directory_uri() . '/js/admin.js', array(), '1');
    wp_enqueue_style( 'my-bootstrap-extension-admin', get_template_directory_uri() . '/css/bootstrap.css', array(), '1');
    wp_enqueue_script( 'my-bootstrap-extension', get_template_directory_uri() . '/js/bootstrap.js', array(), '1');
    wp_enqueue_style( 'my-style-admin', get_template_directory_uri() . '/css/admin.css', array(), '1');
}

add_action('admin_enqueue_scripts', 'add_admin_script');
add_action( 'wp_enqueue_scripts', 'add_style' );
add_action( 'wp_enqueue_scripts', 'add_script' );

function prn($content) {
    echo '<pre style="background: lightgray; border: 1px solid black; padding: 2px">';
    print_r ( $content );
    echo '</pre>';
}

function my_pagenavi() {
    global $wp_query;

    $big = 999999999; // уникальное число для замены

    $args = array(
        'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) )
    ,'format' => ''
    ,'current' => max( 1, get_query_var('paged') )
    ,'total' => $wp_query->max_num_pages
    );

    $result = paginate_links( $args );

    // удаляем добавку к пагинации для первой страницы
    $result = str_replace( '/page/1/', '', $result );

    echo $result;
}

function excerpt_readmore($more) {
    return '... <br><a href="'. get_permalink($post->ID) . '" class="readmore">' . 'Читать далее' . '</a>';
}
add_filter('excerpt_more', 'excerpt_readmore');


if ( function_exists( 'add_theme_support' ) )
    add_theme_support( 'post-thumbnails' );

/*------------------------------------------------ SLIDER -----------------------------------------------------------*/

add_action('init', 'myCustomInitSlider');

function myCustomInitSlider()
{
    $labels = array(
        'name' => 'Слайдер', // Основное название типа записи
        'singular_name' => 'Слайды', // отдельное название записи типа Book
        'add_new' => 'Добавить слайд',
        'add_new_item' => 'Добавить новый слайд',
        'edit_item' => 'Редактировать слайд',
        'new_item' => 'Новый слайд',
        'view_item' => 'Посмотреть слайд',
        'search_items' => 'Найти слайд',
        'not_found' => 'Слайдов не найдено',
        'not_found_in_trash' => 'В корзине слайдов не найдено',
        'parent_item_colon' => '',
        'menu_name' => 'Слайдер на главной'

    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'editor','thumbnail')
    );
    register_post_type('slides', $args);
}


function sliderShortcode()
{
    $args = array(
        'post_type' => 'slides',
        'post_status' => 'publish',
        'posts_per_page' => -1);

    $my_query = null;
    $my_query = new WP_Query($args);

    $parser = new Parser();
    $parser->render(TM_DIR . '/view/slider.php', ['my_query' => $my_query]);
}

add_shortcode('slider', 'sliderShortcode');


add_action('save_post', 'myExtraFieldsUpdate', 10, 1);
/* Сохраняем данные, при сохранении поста */
function myExtraFieldsUpdate($post_id)
{
    if (!isset($_POST['extra'])) return false;
    foreach ($_POST['extra'] as $key => $value) {
        if (empty($value)) {
            delete_post_meta($post_id, $key); // удаляем поле если значение пустое
            continue;
        }

        update_post_meta($post_id, $key, $value); // add_post_meta() работает автоматически
    }
    return $post_id;
}

/*----------------------------------------------- END SLIDER --------------------------------------------------------*/
/*---------------------------------------------THEME SETTINGS--------------------------------------------------------*/

add_action('customize_register', function($customizer){
    /*Меню настройки контактов*/
    $customizer->add_section(
        'contacts_section',
        array(
            'title' => 'Настройки контактов',
            'description' => 'Контакты',
            'priority' => 35,
        )
    );
    $customizer->add_setting(
        'address_textbox',
        array('default' => 'г. Москва м. Румянцево, Бизнес-парк "Румянцево»')
    );
    $customizer->add_setting(
        'mail_textbox',
        array('default' => 'shtori@gmail.com')
    );
    $customizer->add_setting(
        'phone_textbox',
        array('default' => '+7 903 722 63 49')
    );

    $customizer->add_control(
        'phone_textbox',
        array(
            'label' => 'Телефон',
            'section' => 'contacts_section',
            'type' => 'text',
        )
    );
    $customizer->add_control(
        'address_textbox',
        array(
            'label' => 'Адрес',
            'section' => 'contacts_section',
            'type' => 'text',
        )
    );
    $customizer->add_control(
        'mail_textbox',
        array(
            'label' => 'Email',
            'section' => 'contacts_section',
            'type' => 'text',
        )
    );

    /*Меню настройки соц-сетей*/
    $customizer->add_section(
        'social_section',
        array(
            'title' => 'Настройки соц. сетей',
            'description' => 'Социальные сети',
            'priority' => 35,
        )
    );
    $customizer->add_setting(
        'fb_textbox',
        array('default' => 'http://fb.com/')
    );
    $customizer->add_setting(
        'vk_textbox',
        array('default' => 'http://vk.com/')
    );
    $customizer->add_setting(
        'inst_textbox',
        array('default' => 'http://instagram.com')
    );

    $customizer->add_control(
        'fb_textbox',
        array(
            'label' => 'Facebook',
            'section' => 'social_section',
            'type' => 'text',
        )
    );
    $customizer->add_control(
        'vk_textbox',
        array(
            'label' => 'Вконтакте',
            'section' => 'social_section',
            'type' => 'text',
        )
    );
    $customizer->add_control(
        'inst_textbox',
        array(
            'label' => 'Instagram',
            'section' => 'social_section',
            'type' => 'text',
        )
    );
});

/*------------------------------------------END THEME SETTINGS--------------------------------------------------------*/
/*------------------------------------------------ CONTACTS ----------------------------------------------------------*/

// AJAX ACTION
add_action('wp_ajax_sendCallback', 'sendCallback');
add_action('wp_ajax_nopriv_sendCallback', 'sendCallback');

function sendCallback(){
    //prn($_POST);
    $adminMail = get_option('admin_email');
    $phone =  $_POST['phone'];
    $name = $_POST['name'];
    $message = $_POST['message'];

    if(isset($_POST['type'])){
        $type = $_POST['type'];
    }

    if(!empty($message)){

        $str = "С вашего сайта оставили заявку:<br>";
        $str .= 'Тип заявки: ';
        switch($type){
            case 'callback':
                $str .= '"Обратный звонок"';
                break;
            case 'pricelist':
                $str .=  '"Прайс лист"';
                break;
            case 'consultation':
                $str .=  '"Консультация"';
                break;
        }
        $str .= ' <br>';
        $str .= 'Имя: '.$name.' <br>';
        $str .= 'Телефон: '.$phone.' <br>';
        $str .= 'Текст сообщения : '.$message.' <br>';

        mail($adminMail, "Письмо с сайта Шторы", $str, "Content-type: text/html; charset=UTF-8\r\n");

        echo 1;
    }else{
        echo 0;
    }

    die();
}

// AJAX ACTION
add_action('wp_ajax_sendFeedback', 'sendFeedback');
add_action('wp_ajax_nopriv_sendFeedback', 'sendFeedback');

function sendFeedback(){
    //prn($_POST);
    $adminMail = get_option('admin_email');
    $phone =  $_POST['phone'];
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $message = $_POST['message'];


    if(!empty($message)){

        $str = "С вашего сайта оставили запрос на обратную связь :<br>";
        $str .= 'Имя: '.$name.' <br>';
        $str .= 'Email: '.$mail.' <br>';
        $str .= 'Телефон: '.$phone.' <br>';
        $str .= 'Текст сообщения : '.$message.' <br>';

        mail($adminMail, "Письмо с сайта Шторы", $str, "Content-type: text/html; charset=UTF-8\r\n");

        echo 1;
    }else{
        echo 0;
    }

    die();
}

/*---------------------------------------------- END CONTACTS --------------------------------------------------------*/
/*------------------------------------------------ PARTNERS -----------------------------------------------------------*/

add_action('init', 'myCustomInitPartners');

function myCustomInitPartners()
{
    $labels = array(
        'name' => 'Партнеры', // Основное название типа записи
        'singular_name' => 'Партнер', // отдельное название записи типа Book
        'add_new' => 'Добавить партнера',
        'add_new_item' => 'Добавить нового партнера',
        'edit_item' => 'Редактировать партнера',
        'new_item' => 'Новый партнер',
        'view_item' => 'Посмотреть партнера',
        'search_items' => 'Найти партнера',
        'not_found' => 'Партнеров не найдено',
        'not_found_in_trash' => 'В корзине партнеров не найдено',
        'parent_item_colon' => '',
        'menu_name' => 'Партнеры'

    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'thumbnail')
    );
    register_post_type('partners', $args);
}


function partnersShortcode()
{
    $args = array(
        'post_type' => 'partners',
        'post_status' => 'publish',
        'posts_per_page' => -1);

    $my_query = null;
    $my_query = new WP_Query($args);

    $parser = new Parser();
    $parser->render(TM_DIR . '/view/partners.php', ['my_query' => $my_query]);
}

add_shortcode('partners', 'prtnersShortcode');


/*----------------------------------------------- END PARTNERS --------------------------------------------------------*/

