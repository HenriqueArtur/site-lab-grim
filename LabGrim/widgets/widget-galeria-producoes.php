<?php 
	// classe do widget
	class Galeria_Producoes_Widget extends WP_Widget {
		// Método construtor
	    function __construct() {
	        add_action('admin_enqueue_scripts', array($this, 'custom_scripts'));

	        $widget_ops = array(
	            'classname'   => 'galeria-producoes-widget',
	            'description' => 'Widget para o carrossel da galeria da página de Produções.'
	        );
	        parent::__construct( 'galeria-producoes-widget', 'Galeria Produções', $widget_ops );
	    }

	    // Metodo que cria o html na pagina
	    function widget( $args, $instance ) {
	        $video_url    = !empty($instance['video_url']) ? apply_filters( 'widget_title', $instance['video_url'] ) : '';
	        $titulo       = !empty($instance['titulo']) ? apply_filters( 'widget_title', $instance['titulo'] ) : '';
	        $descricao          = !empty($instance['descricao']) ? apply_filters( 'widget_title', $instance['descricao'] ) : '';

	     	echo $args['before_widget'];
	        ?>
            <div class="gallery-post">
        		<iframe class="post-video" height="200" src="<?php echo $video_url; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        		<div class="post-text">
            		<h5 class="post-title m-t-1p"><?php echo $titulo; ?></h5>
            		<p class="post-description"><?php echo $descricao; ?></p>
            	</div>
        	</div>
	        <?php
	        echo $args['after_widget'];
	    }

	    // Metodo de updade das instancias
	    function update( $new_instance, $old_instance ) {
	        $updated_instance                    = $old_instance;
	        $updated_instance['video_url'] = $new_instance['video_url'];
	        $updated_instance['titulo']           = $new_instance['titulo'];
	        $updated_instance['descricao']   = $new_instance['descricao'];

	        return $updated_instance;
	    }

	  	// Metodo que faz aparecer as opções no Painel do WordPress
	    // No caso de upload de arquivo, um js precisa ser criado
	    function form( $instance ) {
	        $video_url              = !empty($instance['video_url']) ? apply_filters( 'widget_title', $instance['video_url'] ) : '';
	        $titulo      = !empty($instance['titulo']) ? $instance['titulo'] : '';
	        $descricao              = !empty($instance['descricao']) ? apply_filters( 'widget_title', $instance['descricao'] ) : '';

	        ?>
	        <div>
	            <div>
	                <label for="<?php echo $this->get_field_id( 'video_url' ); ?>">URL do vídeo (Youtube):</label>
	                <br>
	                <input
	                    class="widefat"
	                    type="text"
	                    id="<?php echo $this->get_field_id( 'video_url' ); ?>"
	                    name="<?php echo $this->get_field_name( 'video_url' ); ?>"
	                    value="<?php echo esc_attr( $video_url ); ?>" />
	            </div>
	            <br>
	            <div>
	                <label for="<?php echo $this->get_field_id( 'titulo' ); ?>">Título do vídeo:</label>
	                <br>
	                <input
	                    class="widefat"
	                    type="text"
	                    id="<?php echo $this->get_field_id( 'titulo' ); ?>"
	                    name="<?php echo $this->get_field_name( 'titulo' ); ?>"
	                    value="<?php echo esc_attr( $titulo ); ?>" />
	            </div>
	            <br>
	            <div>
	                <label for="<?php echo $this->get_field_id( 'descricao' ); ?>">Descrição do vídeo:</label>
	                <br>
	                <input
	                    class="widefat"
	                    type="text"
	                    id="<?php echo $this->get_field_id( 'descricao' ); ?>"
	                    name="<?php echo $this->get_field_name( 'descricao' ); ?>"
	                    value="<?php echo esc_attr( $descricao ); ?>" />
	            </div>
	        </div>
	        <?php 
	    }

	    // Metodo que carrega as dependecias da classe
	    public function custom_scripts() {
	        wp_enqueue_script('media-upload');
	        wp_enqueue_media();
	        // essa funcao chama o aquivo js que faz o upload das imagens e do video
	        /*wp_enqueue_script(
	            'admin_mod',
	            get_stylesheet_directory_uri() . '/widgets/js/scripts.js',
	            array('jquery')
	        );*/
	    }

	}

// Funcao que regista o widget
function galeria_producoes_register_widget() {
    register_widget( 'Galeria_Producoes_Widget' );
}

// Metodo que adiciona o widget ao gancho de criação de widgets no WP
add_action( 'widgets_init', 'galeria_producoes_register_widget' );
