<?php // Main Theme Builder Class
class Ananta_Gutenberg_Site_builder {

    private static $instance = null;
	public static function instance() {
		if ( is_null( self::$instance) ){
			self::$instance = new self();
		}
		return self::$instance;
	}

    private function __construct() {

        $this->includes();
        
        // Initialize the post type.
        add_action('init', [ $this,'ananta_post_type']);

        add_action('add_meta_boxes', [ $this,'ananta_header_footer_meta_box']);

        add_action('save_post', [ $this,'ananta_guten_builder_meta_cb_save']);

        add_action('admin_print_styles', [ $this,'ananta_main_plug_styles']);

        add_action('admin_enqueue_scripts', [ $this,'ananta_main_plug_enqueue_script'], 999);

        //Setup Gutenberg Site builder
        
        add_action('wp', array($this, 'checkfor_template'), 999);


        add_filter('template_include', [$this, 'show_full_page'] );
        add_action('add_meta_boxes', array($this, 'init_metabox_callback'));
        add_action('save_post', array($this, 'metabox_save_data'));

        // add_action( 'get_header', [$this, 'show_header'] );
        
        // add_action( 'get_footer', [$this, 'show_footer'] );


        add_action( '_ananta_full_page_', [ $this,'ananta_full_page_template'], 10);

        add_action( '_ananta_head_', [ $this,'ananta_head_template'], 10);

        add_action( '_ananta_foot_', [ $this,'ananta_foot_template'], 10);

        add_action( 'wp_ajax_ananta_pt_update', [ $this,'ananta_pt_input']);

	}

    public function checkfor_template() {
       
        
            if ( wp_is_block_theme() ) {
                add_action('wp_head', array($this, 'show_guten_header'));
                add_action('wp_footer', array($this, 'show_guten_footer'));
            } else {
                add_action('get_header', array($this, 'show_guten_header'));
                add_action('get_footer', array($this, 'show_guten_footer'));
            }
        
    }

    function ananta_post_type(){
        $labels = array(
            'name'                      => esc_html__('Anant Gutenburg Builder', 'Post Type General Name', 'ananta-sites'),
            'singular_name'             => esc_html__('item', 'Post Type Singular Name', 'ananta-sites'),
            'menu_name'                 => esc_html__('Anant Gutenburg Builder', 'ananta-sites'),
            'name_admin_bar'            => esc_html__('Anant Gutenburg Builder item', 'ananta-sites'),
            'parent_item_colon'         => esc_html__( 'Parent Item', 'ananta-sites' ),
            'all_items'                 => esc_html__( 'All Items', 'ananta-sites' ),
            'view_item'                 => esc_html__( 'View Item', 'ananta-sites' ),
            'add_new_item'              => esc_html__( 'Add New Item', 'ananta-sites' ),
            'add_new'                   => esc_html__( 'Add New', 'ananta-sites' ),
            'edit_item'                 => esc_html__( 'Edit Template', 'ananta-sites' ),
            'update_item'               => esc_html__( 'Update Item', 'ananta-sites' ),
            'search_items'              => esc_html__( 'Search Item', 'ananta-sites' ),
            'not_found'     => esc_html__( 'Not Found', 'ananta-sites' ),
            'not_found_in_trash'        => esc_html__( 'Not found in Trash', 'ananta-sites' ),
        );
    
        $args = array(
            'label'                 => __( 'Anant Gutenberg Site Builder', 'ananta-sites' ),
            'description'           => __( 'Anant Gutenberg Site Builder', 'ananta-sites' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'permalink' ),
            'hierarchical'          => false,
            'public'                => true,
            'register_meta_box_cb'  => array($this, "ananta_header_footer_meta_box"),
            'show_ui'               => true,
            'show_in_menu'          => false,
            'show_in_nav_menus'     => false,
            'show_in_admin_bar'     => false,
            'show_in_rest'          => true,
            'has_archive'           => true,
            'menu_icon'             => 'dashicons-editor-kitchensink'
      
        );
    
        register_post_type('ananta-guten-builder', $args);
    
       }

        function ananta_header_footer_meta_box() {
            add_meta_box(
                'ananta-gutenberg-site-builder-metabox',
                esc_html__( 'Anant Gutenberg Metabox', 'ananta-sites' ),
                array($this, "ananta_guten_builder_meta_cb"),
                'ananta-guten-builder'
            );
        }

        function ananta_guten_builder_meta_cb( $post ){

            $post_types       = get_post_types();

            $post_types_unset = array(
                'attachment'          => 'attachment',
                'revision'            => 'revision',
                'nav_menu_item'       => 'nav_menu_item',
                'custom_css'          => 'custom_css',
                'customize_changeset' => 'customize_changeset',
                'oembed_cache'        => 'oembed_cache',
                'user_request'        => 'user_request',
                'wp_block'            => 'wp_block',
                'elementor_library'   => 'elementor_library',
                'elespare_builder'    => 'elespare_builder',
                'elementor-hf'        => 'elementor-hf',
                'elementor_font'      => 'elementor_font',
                'elementor_icons'     => 'elementor_icons',
                'wpforms'             => 'wpforms',
                'wpforms_log'         => 'wpforms_log',
                'acf-field-group'     => 'acf-field-group',
                'acf-field'           => 'acf-field',
                'booked_appointments' => 'booked_appointments',
                'wpcf7_contact_form'  => 'wpcf7_contact_form',
                'scheduled-action'    => 'scheduled-action',
                'shop_order'          => 'shop_order',
                'shop_order_refund'   => 'shop_order_refund',
                'shop_coupon'         => 'shop_coupon',
                'ananta-guten-builder'=> 'ananta-guten-builder',
                'ananta-guten-builder-pro' => 'ananta-guten-builder-pro', 
                'ant_mega_menu'       => 'ant_mega_menu',
                'wp_navigation'       => 'wp_navigation',
                'product_variation'   => 'product_variation',
                'shop_order_placehold'=> 'shop_order_placehold',
                'product'             => 'product',
                'wp_global_styles'    => 'wp_global_styles',
                'wp_template_part'    => 'wp_template_part',
                'wp_template'         => 'wp_template',
                'e-landing-page'      => 'e-landing-page',
            );
            
            $options = array_diff( $post_types, $post_types_unset );
        
        $template_type    = get_post_meta($post->ID, 'template_type', true);    
        
        $current_template = get_post_meta( $post->ID, '_display_on_template', true );
        
        $post_id      = get_post_meta( $post->ID, 'post_type_posts', true );
        
        $post_type    = get_post_meta( $post->ID, 'post_type_template', true );
        
        if(get_post_meta( $post->ID, '_display_on_template', true ) == ''){
            $current_template =  array('');
        }elseif(in_array( 'all', $current_template , true )){
            $current_template = array('','all');
        }else{
            $current_template = get_post_meta( $post->ID, '_display_on_template', true );
        }
        ?>
        <div class = "main_cls">
            <div class="template-type-main">
                <div class="temp-label">
                <label><strong><?php esc_html_e( 'Type of Template', 'ananta-sites' ) ?></strong></label>
                </div>
                    <div class="template-type">
                    <select name="type_of_template" class="form-control selectpicker">
                        <option value="header" <?php selected($template_type, 'header' ); ?>><?php esc_html_e('Header', 'ananta-sites'); ?></option>
                        <option value="footer" <?php selected($template_type, 'footer' ); ?>><?php esc_html_e('Footer', 'ananta-sites'); ?></option>
                        <option value="body" <?php selected($template_type, 'body' ); ?>><?php esc_html_e('Full Page', 'ananta-sites'); ?></option>
                    </select>
                    </div>
                </div>
        
            <div class="display--on">
                <div class="dis-label">
                    <label><strong><?php esc_html_e( 'Display On ', 'ananta-sites' ) ?></strong></label>
                    <i class="bsf-target-rules-heading-help dashicons dashicons-editor-help"></i>
                </div>
                    <div class="custome-dropdown-wrapper">
                        <select name="_display_on_template[]" data-placeholder="multiple-select" class="custome-dropdown opt-display-on" multiple="multiple"  >
                                <option style = "display:none;" value=""<?php selected( in_array( '', $current_template, true ) ); ?>><?php esc_html_e( ' ', 'ananta-sites' ) ?></option>
                                <option value="all"       <?php selected( in_array( 'all', $current_template, true ) ); ?>><?php esc_html_e( 'Entire Site', 'ananta-sites' ) ?></option>
                                <option value="home"      <?php selected( in_array( 'home', $current_template, true ) ); ?>><?php esc_html_e( 'Home Page', 'ananta-sites' ) ?></option>
                                <option value="single_post"   <?php selected( in_array( 'single_post', $current_template, true ) ); ?>><?php esc_html_e( 'Single post Page', 'ananta-sites' ) ?></option>
                                <option value="archive"   <?php selected( in_array( 'archive', $current_template, true ) ); ?>><?php esc_html_e( 'Archive Page', 'ananta-sites' ) ?></option>
                                <option value="search"    <?php selected( in_array( 'search', $current_template, true ) ); ?>><?php esc_html_e( 'Search Page', 'ananta-sites' ) ?></option>
                                <option value="not_found" <?php selected( in_array( 'not_found', $current_template, true ) ); ?>><?php esc_html_e( '404 Page', 'ananta-sites' ) ?></option>
                                <?php if ( class_exists( 'woocommerce' ) ) { ?> 
                                    <option value="shop" <?php selected( in_array( 'shop', $current_template, true ) ); ?>><?php esc_html_e( 'Shop Page', 'ananta-sites' ) ?></option>
                                    <option value="current_product" <?php selected( in_array( 'current_product', $current_template, true ) ); ?>><?php esc_html_e( 'Single Product Page', 'ananta-sites' ) ?></option>
                                    <option value="wooarchive" <?php selected( in_array( 'wooarchive', $current_template, true ) ); ?>><?php esc_html_e( 'Product Archive Page', 'ananta-sites' ) ?></option> <?php
                                } ?>
                                <?php foreach($options as $option){ ?>
                                    <option value="<?php esc_attr_e( $option ); ?>" <?php selected( in_array( $option, $current_template, true ) ); ?> style = " text-transform: capitalize;"><?php esc_html_e( $option ); ?></option>
                                <?php } ?>
                        </select>
                    </div>
        
            </div>
            <div class="posttype_val">
                <input type="hidden" name="post_type_posts" value="<?php esc_attr_e( $post_id ); ?>">
                <input type="hidden" name="post_type_template" value="<?php esc_attr_e( $post_type ); ?>" class="post-type-template">
            </div>					
            <div class="display-on-post"></div>
        </div>
        <?php
        }

        function ananta_guten_builder_meta_cb_save( $post_id ){

            if ( isset( $_REQUEST['_display_on_template'] ) ) {
                    $array = array_map( 'sanitize_text_field', wp_unslash( $_POST['_display_on_template'] ) );
                    update_post_meta( $post_id, '_display_on_template',  $array );
            }
            
            if ( isset( $_REQUEST['type_of_template'] ) ) {
                update_post_meta( $post_id, 'template_type',  sanitize_text_field( $_POST[ 'type_of_template' ] ) );
            }
            
            if ( isset( $_REQUEST['post_type_template'] ) ) {
                update_post_meta( $post_id, 'post_type_template',  sanitize_text_field( $_POST[ 'post_type_template' ] ) );
            }
            
            if ( isset( $_REQUEST['post_type_posts'] ) ) {
                update_post_meta( $post_id, 'post_type_posts',  sanitize_text_field( $_POST[ 'post_type_posts' ] ) );
            }
            
        }
        
        function ananta_main_plug_styles() {
            wp_enqueue_style( 'meta-box-style',  ANANTA_SITES_DIR_URL . "admin/css/meta-box.css");
            wp_enqueue_style( 'select2-min-css', ANANTA_SITES_DIR_URL . "admin/css/select2.min.css");
        }
            
        function ananta_main_plug_enqueue_script() {   
            wp_enqueue_script( 'main-js', ANANTA_SITES_DIR_URL . 'admin/js/main.js',array( 'jquery', 'suggest' ), 0.1 , true );
        
            $localize = array(
                'url'   => admin_url( 'admin-ajax.php' ),
                'nonce' => wp_create_nonce( 'ananta_pt_nonce' ),
                'edit'  => admin_url( 'edit.php?post_type=ananta-guten-builder' ),
            );
        
            wp_localize_script(
                'main-js',
                'admin',
                $localize
            );
        
            wp_enqueue_script( 'select2-min-js', ANANTA_SITES_DIR_URL . 'admin/js/select2.min.js',array( 'jquery'), '4.0.13' , true);
        }

        function show_full_page($template) {
            $page_id = $this->full_page_template_id();
            $head_template_id = $this->head_template_id();
            $foot_template_id = $this->foot_template_id();
            if ( $page_id) {
                if ( wp_is_block_theme() ) {
                    ?><!DOCTYPE html>
                    <html <?php language_attributes(); ?>>
                    <head>
                        <meta charset="<?php bloginfo( 'charset' ); ?>" />
                        <?php wp_head(); 
                        wp_enqueue_style( 'wp-block-library' );?>
                    </head>
                    <body <?php body_class(); ?>>
                    <?php wp_body_open();
                
                    if( !$head_template_id ) {
                        ob_start();
                        block_template_part('header');
                        $header = ob_get_clean();
                        echo '<header class="wp-block-template-part">'.$header.'</header>';
                    }
                } else {
                    get_header();
                }
                $width = $page_id ? ( get_post_meta($page_id, 'anant_template_container_width', true) ? get_post_meta($page_id, 'anant_template_container_width', true) : '1140' ) : '1140';
                echo '<div class="ananta-guten-builder-container" " style="margin:0 auto; width: -webkit-fill-available; width: -moz-available; max-width: '.esc_html($width).'px;">';
                 
                    echo '<div class="ananta-guten-builder-wrap">';
                        if ($page_id) {
                            $this->content($page_id);
                        } else {
                            the_content();
                        }
                    echo '</div>';
                
                echo '</div>';
                
                if ( wp_is_block_theme() ) {
                    ?>
                    </body>
                    </html>
                    <?php
                    if ( !$foot_template_id ) {
                        ob_start();
                        block_template_part('footer');
                        $footer = ob_get_clean();
                        echo '<footer class="wp-block-template-part">'.$footer.'</footer>';
                    }
                    wp_footer();
                } else {
                    get_footer();
                }
            }else{
                return $template;
            }
        }

        function init_metabox_callback() {
            
            add_meta_box(
                'postx-builder-id',
                __('Anant Builder Settings', 'ultimate-post'), 
                array($this, 'container_width_callback'), 
                'ananta-guten-builder', 
                'side'
            );
        }

        function container_width_callback($post) {
            // wp_nonce_field('container_meta_box', 'container_meta_box_nonce');
            $width = get_post_meta($post->ID, 'anant_template_container_width', true);
            ?>
    
            <p>
                <label><?php echo esc_html__('Container Width', 'ananta-sites'); ?></label>
                <input type="number" style="width:100%" name="container-width" value="<?php echo esc_attr($width ? $width : 1140); ?>"/>
            </p>
        <?php }
    
    function metabox_save_data($post_id) {
        
        // For Container and Sidebar Information
        // if (!isset($_POST['container_meta_box_nonce'])){ return; }
        // if (!wp_verify_nonce( sanitize_key( wp_unslash($_POST['container_meta_box_nonce'])), 'container_meta_box')) { return; }
        if (isset($_POST['container-width'])) {
            update_post_meta($post_id, 'anant_template_container_width', sanitize_text_field($_POST['container-width']));
        }
    }
    

        function show_header() {
            $head_template_id = $this->head_template_id();
            
            if ( $head_template_id) {
        
                require plugin_dir_path( __FILE__ ) . 'templates/default/header.php';
                $template   = array();
                $template[] = 'header.php';
                remove_all_actions( 'wp_head' );
                ob_start();
                locate_template( $template, true );
                ob_get_clean();
            }
        }

        function show_guten_header() {
            $head_template_id = $this->head_template_id();
            
            if ( $head_template_id) {
                if ( !wp_is_block_theme() ) {
                    require plugin_dir_path( __FILE__ ) . 'templates/default/gutenberg/header.php';
                    $template   = array();
                    $template[] = 'header.php';
                    remove_all_actions( 'wp_head' );
                    ob_start();
                    locate_template( $template, true );
                    ob_get_clean();
                }
                ?> 
                    <header id="ananta-header-template" class="<?php esc_html_e('ananta-guten-builderid-'.$head_template_id); ?>">
                        <?php echo $this->content($head_template_id);  //phpcs:ignore  ?> 
                    </header> 
                <?php
            }
        }
            
        function show_footer() {  
            $foot_template_id = $this->foot_template_id();
            
            if ( $foot_template_id) {
        
                require plugin_dir_path( __FILE__ ) . 'templates/default/footer.php';
                $template   = array();
                $template[] = 'footer.php';
                remove_all_actions( 'wp_footer' );
                ob_start();
                locate_template( $template, true );
                ob_get_clean();
            }
        }
            
        function show_guten_footer() {  
            $foot_template_id = $this->foot_template_id();
            
            if ( $foot_template_id) {
                ?> 
                    <footer id="ananta-footer-template" class="<?php esc_html_e('ananta-guten-builderid-'.$foot_template_id); ?>" role="contentinfo">
                        <?php echo $this->content($foot_template_id) //phpcs:ignore ?>
                    </footer> 
                <?php
                if ( !wp_is_block_theme() ) {
        
                    require plugin_dir_path( __FILE__ ) . 'templates/default/gutenberg/footer.php';
                    $template   = array();
                    $template[] = 'footer.php';
                    remove_all_actions( 'wp_footer' );
                    ob_start();
                    locate_template( $template, true );
                    ob_get_clean();
                }
            }
        }

        function ananta_full_page_template() {
            global $post;
            
            if ( ! empty( $post ) ) {
                $id   = $post->ID;
                $post_type = get_post_type( $post->ID );
            }
        
            $path      = plugin_dir_path( __FILE__ ) . 'templates/content/full-page-content.php';
            $template_type = $this->template_type();
            
            if ( ! empty( $template_type ) ) {
                
                $full_page = $this->show_template( $template_type, 'body' );
                if ( ! $full_page ) {
                    $full_page = $this->show_all('body');
                }
            }
        
            if ( is_singular() ) {
                $full_page = $this->present_single( $id, $post_type, 'body' );
        
                if ( ! $full_page ) {
                    $full_page = $this->total_single( $id, $post_type, 'body' );
                    if ( ! $full_page ) {
                        $full_page = $this->show_all('body');
                    }
                }
            }

            if($full_page == false){
        
            }else{
                $this->generate( $full_page, $path );
            }
        }
        
        function ananta_head_template() {
            global $post;
            
            if ( ! empty( $post ) ) {
                $id   = $post->ID;
                $post_type = get_post_type( $post->ID );
            }
        
            $path      = plugin_dir_path( __FILE__ ) . 'templates/content/content-header.php';
            $template_type = $this->template_type();
            
            if ( ! empty( $template_type ) ) {
                
                $header = $this->show_template( $template_type, 'header' );
                if ( ! $header ) {
                    $header = $this->show_all('header');
                }
            }
        
            if ( is_singular() ) {
                $header = $this->present_single( $id, $post_type, 'header' );
        
                if ( ! $header ) {
                    $header = $this->total_single( $id, $post_type, 'header' );
                    if ( ! $header ) {
                        $header = $this->show_all('header');
                    }
                }
            }

            if($header == false){
        
            }else{
                $this->generate( $header, $path );
            }
        }
            
        function ananta_foot_template() {
            global $post;
            
            if ( ! empty( $post ) ) {
                $id        = $post->ID;
                $post_type = get_post_type( $post->ID );
            }
        
            $path      = plugin_dir_path( __FILE__ ) . 'templates/content/content-footer.php';
            $template_type = $this->template_type();
            
            if ( ! empty( $template_type ) ) {
                $footer = $this->show_template( $template_type, 'footer' );
                if ( ! $footer ) {
                    $footer = $this->show_all( 'footer' );
                }
            }
        
            if ( is_singular() ) {
                $footer = $this->present_single( $id, $post_type, 'footer' );
                if ( ! $footer ) {
                    $footer = $this->total_single( $id, $post_type, 'footer' );
                    if ( ! $footer ) {
                        $footer = $this->show_all( 'footer' );
                    }
                }
            }

            if($footer == false){
        
            }else{
                $this->generate( $footer, $path );
            }
        }
        
        function show_all( $type ) {
            $args = array(
                'post_type'           => 'ananta-guten-builder',
                'orderby'             => 'id',
                'order'               => 'DESC',
                'posts_per_page'      => 1,
                'ignore_sticky_posts' => 1,
                'meta_query'          => array( 
                    array(
                        'key'     => 'template_type',
                        'compare' => 'LIKE',
                        'value'   => $type,
                    ),
                    array(
                        'key'     => '_display_on_template',
                        'compare' => 'LIKE',
                        'value'   => 'all',
                    ),
                ),
            );
        
            $header = new \WP_Query( $args );
        
            if ( $header->have_posts() ) {
                return $header;
            } else {
                return false;
            }
        }
        
        function show_template( $template_type, $type ) {
            if ( empty( $template_type ) ) {
                return false;
            }
            $args   = array(
                'post_type'           => 'ananta-guten-builder',
                'orderby'             => 'id',
                'order'               => 'DESC',
                'posts_per_page'      => 1,
                'ignore_sticky_posts' => 1,
                'meta_query'          => array( 
                    array(
                        'key'     => 'template_type',
                        'compare' => 'LIKE',
                        'value'   => $type,
                    ),
                    array(
                        'key'     => '_display_on_template',
                        'compare' => 'LIKE',
                        'value'   => $template_type,
                    ),
                ),
            );
            $header = new \WP_Query( $args );
        
            if ( $header->have_posts() ) {
                return $header;
            } else {
                return false;
            }
        }
        
        
        function present_single( $id, $post_type, $type ) {
            if ( ! is_singular()  ) {
                return false;
            }
        
            $args = array(
                'post_type'           => 'ananta-guten-builder',
                'orderby'             => 'id',
                'order'               => 'DESC',
                'posts_per_page'      => -1,
                'ignore_sticky_posts' => 1,
                'meta_query'          => array(
                    array(
                        'key'     => 'template_type',
                        'compare' => 'LIKE',
                        'value'   => $type,
                    ),
                    array(
                        'key'     => 'post_type_template',
                        'compare' => 'LIKE',
                        'value'   => $post_type,
                    ),
                ),
            );
            $header = new \WP_Query( $args );
                
            if ( $header->have_posts() ) {
                
                $list_header = $header->posts;
                $current     = array();   
        
                foreach ( $list_header as $key => $post ) {
                    
                    $list_id = get_post_meta( $post->ID, 'post_type_posts', true );
                    if ( ! empty( $list_id ) || 'all' != $list_id ) { 
                        $post_id = explode( ',', $list_id );
                        if ( in_array( $id, $post_id ) ) { 
                            $current[0] = $post;
                        }
                    }
                }
                wp_reset_postdata();
        
                if ( empty( $current ) ) {
        
                    return false;
                } else {
                    $header->posts      = $current;
                    $header->post_count = 1;
                    return $header;
                }
            } else {
                return false;
            }
        }
            
            
        function total_single( $post_id, $post_type, $type) {
            if ( ! is_singular() ) {
                return false;
            }
            $args   = array(
                'post_type'           => 'ananta-guten-builder',
                'orderby'             => 'id',
                'order'               => 'DESC',
                'posts_per_page'      => 1,
                'ignore_sticky_posts' => 1,
                'meta_query'          => array(
                    array(
                        'key'     => 'template_type',
                        'compare' => 'LIKE',
                        'value'   => $type,
                    ),
                    array(
                        'key'     => 'post_type_template',
                        'compare' => 'LIKE',
                        'value'   => $post_type,
                    ),
                    array(
                        'key'     => 'post_type_posts',
                        'compare' => 'LIKE',
                        'value'   => 'all',
                    ),
                ),
            );
            $header = new \WP_Query( $args );
        
            if ( $header->have_posts() ) {
                return $header;
            } else {
                return false;
            }
        }       
        
        function template_type() {
            $template_type = '';

            if ( class_exists( 'woocommerce' ) ) {
                if ( is_home() ) {
                    $template_type = 'home';
                }elseif ( is_archive() && get_post_type() === 'post' ) {
                    $template_type = 'archive';
                }elseif ( is_single() && is_singular('post') ) {
                    $template_type = 'single_post';
                }elseif ( is_archive() && get_post_type() === 'product' && ! is_shop() ) {
                    $template_type = 'wooarchive';
                }elseif ( is_product() && is_singular('product') ) {
                    $template_type = 'current_product';
                }elseif ( is_search() ) {
                    $template_type = 'search';
                }elseif ( is_404() ) {
                    $template_type = 'not_found';
                }elseif ( is_shop() ) {
                    $template_type = 'shop';
                    
                }
            }else{
                if ( is_home() ) {
                    $template_type = 'home';
                }elseif ( is_single() && is_singular('post') ) {
                    $template_type = 'single_post';
                }elseif ( is_archive() && get_post_type() === 'post' ) {
                    $template_type = 'archive';
                }elseif ( is_search() ) {
                    $template_type = 'search';
                }elseif ( is_404() ) {
                    $template_type = 'not_found';
                }
            }
            return $template_type;
        }
        
        function generate( $content, $path ) {
            if ( $content->have_posts() ) {
                while ( $content->have_posts() ) {
                    $content->the_post();
                    load_template( $path );
                }
                wp_reset_postdata();
            }
        }

        function content($post_id) {
            $content_post = get_post($post_id);
            $content = $content_post->post_content;
            $content = do_blocks($content);
            $content = do_shortcode($content);
            $content = str_replace(']]>', ']]&gt;', $content);
            $content = preg_replace('%<p>&nbsp;\s*</p>%', '', $content);
            $content = preg_replace('/^(?:<br\s*\/?>\s*)+/', '', $content);
            echo  $content; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
        }

        function elementor_maintenance_check(){
            $maintain_mode     = get_option( 'elementor_maintenance_mode_mode' );
            $maintain_template = get_option( 'elementor_maintenance_mode_template_id' );
            if ( 'coming_soon' == $maintain_mode && $maintain_template == $post_id ) {
                return false;
            }
        }

        function full_page_template_id() { 
            global $post;
            
            if ( ! empty( $post ) ) {
                $post_id   = $post->ID;
                $post_type = get_post_type( $post->ID );
            }else{
                $post_id   = NULL;
                $post_type = NULL;
            }
            $this->elementor_maintenance_check();

            $template_type = $this->template_type();
            $id        = '';
        
            if ( $this->show_all('body') || $this->show_template( $template_type , 'body' ) || $this->total_single( $post_id, $post_type, 'body' ) || $this->present_single( $post_id, $post_type, 'body' ) ) {
                
                if ( $this->show_all('body') ) {
                    $full_page = $this->show_all('body');
                }
        
                if ( $this->show_template( $template_type , 'body' ) ) {
                    $full_page = $this->show_template( $template_type , 'body' );
                }
                if ( $this->total_single( $post_id, $post_type, 'body' ) ) {
                    $full_page = $this->total_single( $post_id, $post_type, 'body' );
                }
                if ( $this->present_single( $post_id, $post_type, 'body' ) ) {
                    $full_page = $this->present_single( $post_id, $post_type, 'body' );
                }
        
                while ( $full_page->have_posts() ) {
                    $full_page->the_post();
                    $id = get_the_ID();
                }
                wp_reset_postdata();
                return $id;
        
            } else {
                return false;
            }
        }
        
        function head_template_id() { 
            global $post;
            
            if ( ! empty( $post ) ) {
                $post_id   = $post->ID;
                $post_type = get_post_type( $post->ID );
            }else{
                $post_id   = NULL;
                $post_type = NULL;
            }
        
            $this->elementor_maintenance_check();

            $template_type = $this->template_type();
            $id        = '';
        
            if ( $this->show_all('header') || $this->show_template( $template_type , 'header' ) || $this->total_single( $post_id, $post_type, 'header' ) || $this->present_single( $post_id, $post_type, 'header' ) ) {
                
                if ( $this->show_all('header') ) {
                    $header = $this->show_all('header');
                }
        
                if ( $this->show_template( $template_type , 'header' ) ) {
                    $header = $this->show_template( $template_type , 'header' );
                }
                if ( $this->total_single( $post_id, $post_type, 'header' ) ) {
                    $header = $this->total_single( $post_id, $post_type, 'header' );
                }
                if ( $this->present_single( $post_id, $post_type, 'header' ) ) {
                    $header = $this->present_single( $post_id, $post_type, 'header' );
                }
        
                while ( $header->have_posts() ) {
                    $header->the_post();
                    $id = get_the_ID();
                }
                wp_reset_postdata();
                return $id;
        
            } else {
                return false;
            }
        }
        
        function foot_template_id() {
            global $post;
        
            if ( ! empty( $post ) ) {
                $post_id   = $post->ID;
                $post_type = get_post_type( $post->ID );
            }else{
                $post_id   = NULL;
                $post_type = NULL;
            }
        
            $this->elementor_maintenance_check();

            $template_type = $this->template_type();
            $id        = '';
        
            if ( $this->show_all( 'footer' ) || $this->show_template( $template_type, 'footer' ) || $this->total_single( $post_id, $post_type, 'footer' ) || $this->present_single( $post_id, $post_type, 'footer' ) ) {
                if ( $this->show_all( 'footer' ) ) {
                    $header = $this->show_all( 'footer' );
                }
                if ( $this->show_template( $template_type, 'footer' ) ) {
                    $header = $this->show_template( $template_type, 'footer' );
                }
                if ( $this->total_single( $post_id, $post_type, 'footer' ) ) {
                    $header = $this->total_single( $post_id, $post_type, 'footer' );
                }
                if ( $this->present_single( $post_id, $post_type, 'footer' ) ) {
                    $header = $this->present_single( $post_id, $post_type, 'footer' );
                }
        
                while ( $header->have_posts() ) {
                    $header->the_post();
                    $id = get_the_ID();
                }
                wp_reset_postdata();
        
                return $id;
        
            } else {
                return false;
            }
        }

        function ananta_pt_input() {

            if ( isset($_POST) ) {
                $post_type = $_POST['post_type1'];
                $post_type =  implode(",",$post_type);
            }
                
            if ( 'all' !== $post_type && 'archive' !== $post_type && 'search' !== $post_type && 'home' !== $post_type && 'not_found' !== $post_type ) : ?>
        
            <input type="hidden" name="post_type_posts" value="all">
            <input type="hidden" name="post_type_template" value="<?php esc_attr_e( $post_type ); ?>" class="post-type-template">
        
            <?php endif;
                die();
        }          

    public function includes() { 
   
    } 
}