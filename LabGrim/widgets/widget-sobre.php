<?php 
	// classe do widget
	class Pesquisador_Widget extends WP_Widget {
		// Metodo construtor
	    function __construct() {
	        add_action('admin_enqueue_scripts', array($this, 'custom_scripts'));

	        $widget_ops = array(
	            'classname'   => 'pesquisador-widget',
	            'description' => 'Widget para a div de pesquisador na página de sobre.'
	        );
	        parent::__construct( 'pesquisador-widget', 'Pesquisador Info', $widget_ops );
	    }

	    // Metodo que cria o html na pagina
	    function widget( $args, $instance ) {
	        $name              = !empty($instance['name']) ? apply_filters( 'widget_title', $instance['name'] ) : '';
	        $icon_perfil_url      = !empty($instance['icon_perfil_url']) ? $instance['icon_perfil_url'] : '';
	        $bio              = !empty($instance['bio']) ? apply_filters( 'widget_title', $instance['bio'] ) : '';
	        $lattes_url    = !empty($instance['lattes_url']) ? apply_filters( 'widget_title', $instance['lattes_url'] ) : '';
	        $tipo_pesquisador      = !empty($instance['tipo_pesquisador']) ? $instance['tipo_pesquisador'] : '';

	     	echo $args['before_widget'];
	        ?>
	        <li class="inline-block text-center text-box <?php echo $tipo_pesquisador; ?>">
				<div class="image-cropper">
					<?php 
	        			if( !empty($instance['icon_perfil_url']) ):
	        		?>
						<img src="<?php echo esc_url( $icon_perfil_url ); ?>" alt="avatar" class="profile-pic">
					<?php 
	        			endif;
	        		?>
				</div>
				<b class="nome"><?php echo $name; ?></b>
				<p class="text-center m-t-3p"><?php echo $bio; ?></p>
				<a href="<?php echo esc_url( $lattes_url ); ?>" class="link" target="_blank">- Link lattes -</a>
            </li>
	        <?php
	        echo $args['after_widget'];
	    }

	    // Metodo de updade das instancias
	    function update( $new_instance, $old_instance ) {
	        $updated_instance                    = $old_instance;
	        $updated_instance['tipo_pesquisador'] = $new_instance['tipo_pesquisador'];
	        $updated_instance['name']           = $new_instance['name'];
	        $updated_instance['icon_perfil_url']   = $new_instance['icon_perfil_url'];
	        $updated_instance['bio'] = $new_instance['bio'];
	        $updated_instance['lattes_url'] = $new_instance['lattes_url'];

	        return $updated_instance;
	    }

	  	// Metodo que faz aparecer as opções no Painel do WordPress
	    // No caso de upload de arquivo, um js precisa ser criado
	    function form( $instance ) {
	    	$tipo_pesquisador      = !empty($instance['tipo_pesquisador']) ? apply_filters( 'widget_title', $instance['tipo_pesquisador'] ) : '';
	        $name              = !empty($instance['name']) ? apply_filters( 'widget_title', $instance['name'] ) : '';
	        $icon_perfil_url      = !empty($instance['icon_perfil_url']) ? $instance['icon_perfil_url'] : '';
	        $bio              = !empty($instance['bio']) ? apply_filters( 'widget_title', $instance['bio'] ) : '';
	        $lattes_url    = !empty($instance['lattes_url']) ? apply_filters( 'widget_title', $instance['lattes_url'] ) : '';

	        ?>
	        <div>
	        	<div>
	                <label for="<?php echo $this->get_field_id( 'tipo_pesquisador' ); ?>">Tipo de pesquisador:</label>
	                <br>
	                <select id="<?php echo $this->get_field_id('tipo_pesquisador'); ?>" name="<?php echo $this->get_field_name('tipo_pesquisador'); ?>" class="widefat" style="width:100%;"> 
				        <option <?php selected( $instance['tipo_pesquisador'], 'Pesquisador sênior'); ?> value="pesquisador-senior">Pesquisador sênior</option> 
				        <option <?php selected( $instance['tipo_pesquisador'], 'Pesquisador voluntário'); ?> value="pesquisador-voluntario">Pesquisador voluntário</option> 
				        <option <?php selected( $instance['tipo_pesquisador'], 'Pesquisador anterior'); ?> value="pesquisador-anterior">Pesquisador anterior</option> 
				        <option <?php selected( $instance['tipo_pesquisador'], 'Bolsista atual'); ?> value="bolsista-atual">Bolsista atual</option> 
				        <option <?php selected( $instance['tipo_pesquisador'], 'Bolsista anterior'); ?> value="bolsista-anterior">Bolsista anterior</option>
				    </select>
	            </div>
	            <br>
	            <div>
	                <label for="<?php echo $this->get_field_id( 'name' ); ?>">Nome do pesquisador:</label>
	                <br>
	                <input
	                    class="widefat"
	                    type="text"
	                    id="<?php echo $this->get_field_id( 'name' ); ?>"
	                    name="<?php echo $this->get_field_name( 'name' ); ?>"
	                    value="<?php echo esc_attr( $name ); ?>" />
	            </div>
	            <br>
	            <div>
	                <label for="<?php echo $this->get_field_id( 'icon_perfil_url' ); ?>">Imagem de perfil:</label>
	                <br>
	                <input
	                    class="widefat"
	                    type="text"
	                    id="<?php echo $this->get_field_id( 'icon_perfil_url' ); ?>"
	                    name="<?php echo $this->get_field_name( 'icon_perfil_url' ); ?>"
	                    value="<?php echo esc_url( $icon_perfil_url ); ?>" />
	                <br>
	                <button class="upload_icon_button button button-primary">Escolha uma imagem</button>
	            </div>
	            <br>
	            <div>
	                <label for="<?php echo $this->get_field_id( 'bio' ); ?>">Descrição do pesquisador (bio):</label>
	                <br>
	                <input
	                    class="widefat"
	                    type="text"
	                    id="<?php echo $this->get_field_id( 'bio' ); ?>"
	                    name="<?php echo $this->get_field_name( 'bio' ); ?>"
	                    value="<?php echo esc_attr( $bio ); ?>" />
	            </div>
	            <br>
	            <div>
	                <label for="<?php echo $this->get_field_id( 'lattes_url' ); ?>">Link lattes:</label>
	                <br>
	                <input
	                    class="widefat"
	                    type="text"
	                    id="<?php echo $this->get_field_id( 'lattes_url' ); ?>"
	                    name="<?php echo $this->get_field_name( 'lattes_url' ); ?>"
	                    value="<?php echo esc_attr( $lattes_url ); ?>" />
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
function pesquisador_register_widget() {
    register_widget( 'Pesquisador_Widget' );
}

// Metodo que adiciona o widget ao gancho de criação de widgets no WP
add_action( 'widgets_init', 'pesquisador_register_widget' );
