<?php 
	// classe do widget
	class Home_Banner_Widget extends WP_Widget {

	// Metodo construtira
    function __construct() {
        add_action('admin_enqueue_scripts', array($this, 'custom_scripts'));

        $widget_ops = array(
            'classname'   => 'home-banner-widget',
            'description' => 'Widget para o banner principal da página inicial.'
        );
        parent::__construct( 'home-banner-widget', 'Home Banner', $widget_ops );
    }

    // Metodo que cria o html na pagina
    function widget( $args, $instance ) {
        $title              = !empty($instance['title']) ? apply_filters( 'widget_title', $instance['title'] ) : '';
        $banner_bg_url      = !empty($instance['banner_bg_url']) ? $instance['banner_bg_url'] : '';
        $banner_logo_url    = !empty($instance['banner_logo_url']) ? $instance['banner_logo_url'] : '';

     	echo $args['before_widget'];
        ?>
        <div class="pelicula"></div>
        <div id="home-banner">
        	<video src="<?php echo esc_url( $banner_bg_url ); ?>" autoplay loop class="bg-video"></video>
        </div>
        	<div class="animete-objects">
        		<?php get_template_part( 'template-parts/misc-logo-home' ); ?>
        	</div>
        <div class="div-logo-img">
			<img class="logo-home img-fluid" src="<?php echo esc_url( $banner_logo_url ); ?>" alt="<?php echo $title; ?>"></img>
    	</div>
        <?php
        echo $args['after_widget'];
    }

    // Metodo de updade das instancias
    function update( $new_instance, $old_instance ) {
        $updated_instance                    = $old_instance;
        $updated_instance['title']           = $new_instance['title'];
        $updated_instance['banner_bg_url']   = $new_instance['banner_bg_url'];
        $updated_instance['banner_logo_url'] = $new_instance['banner_logo_url'];

        return $updated_instance;
    }

    // Metodo que faz aparecer as opções no Painel do WordPress
    // No caso de upload de arquivo, um js precisa ser criado
    function form( $instance ) {
        $title              = !empty($instance['title']) ? apply_filters( 'widget_title', $instance['title'] ) : '';
        $banner_bg_url      = !empty($instance['banner_bg_url']) ? $instance['banner_bg_url'] : '';
        $banner_logo_url    = !empty($instance['banner_logo_url']) ? $instance['banner_logo_url'] : '';

        ?>
        <div>
        	<div>
                <label for="<?php echo $this->get_field_id( 'title' ); ?>">Texto da Logo:</label>
                <br>
                <input
                    class="widefat"
                    type="text"
                    id="<?php echo $this->get_field_id( 'title' ); ?>"
                    name="<?php echo $this->get_field_name( 'title' ); ?>"
                    value="<?php echo esc_attr( $title ); ?>" />
            </div>
            <br>
            <div>
                <label for="<?php echo $this->get_field_id( 'banner_bg_url' ); ?>">Vídeo de fundo:</label>
                <br>
                <input
                    class="widefat"
                    type="text"
                    id="<?php echo $this->get_field_id( 'banner_bg_url' ); ?>"
                    name="<?php echo $this->get_field_name( 'banner_bg_url' ); ?>"
                    value="<?php echo esc_url( $banner_bg_url ); ?>" />
                <br>
                <button class="upload_video_button button button-primary">Escolha um vídeo</button>
            </div>
            <br>
            <div>
                <label for="<?php echo $this->get_field_id( 'banner_logo_url' ); ?>">Logo:</label>
                <br>
                <input
                    class="widefat"
                    type="text"
                    id="<?php echo $this->get_field_id( 'banner_logo_url' ); ?>"
                    name="<?php echo $this->get_field_name( 'banner_logo_url' ); ?>"
                    value="<?php echo esc_url( $banner_logo_url ); ?>" />
                <br>
                <button class="upload_logo_button button button-primary">Escolha a logo</button>
            </div>
        </div>
        <?php 
    }

    // Metodo que carrega as dependecias da classe
    public function custom_scripts() {
        wp_enqueue_script('media-upload');
        wp_enqueue_media();
        // essa funcao chama o aquivo js que faz o upload das imagens e do video
        wp_enqueue_script(
            'admin_mod',
            get_stylesheet_directory_uri() . '/widgets/js/scripts.js',
            array('jquery')
        );
    }

}

// Funcao que regista o widget
function home_banner_register_widget() {
    register_widget( 'Home_Banner_Widget' );
}

// Metodo que adiciona o widiget ao gancho de criação de widgets no WP
add_action( 'widgets_init', 'home_banner_register_widget' );
