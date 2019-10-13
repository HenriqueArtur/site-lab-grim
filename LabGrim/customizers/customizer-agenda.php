<?php
	/*
	 * O que voce deve colocar no html:
	 * Imagem (note que o SLUG passado é o criado no SETTINGS, no caso 'sobre-img', mas vai ser o nome dado por voce)
	 * <img class="" src="<?php echo get_theme_mod( 'set_sobre-img' ); ?>"></img>
	 * 
	 * Texto (note que o SLUG passado é o criado no SETTINGS, no caso 'set_texto', mas vai ser o nome dado por voce)
	 * <p>src="<?php echo get_theme_mod( 'set_texto' ); ?>"></p>
	 *
	 * ATENCAO esse aquivo deve ser iniciado no functions.php, mas eu ja iniciei pra ti porque tu é a melhor gabi do mundo
	 * é assim que inicia:
	 * require get_template_directory() . '/customizers/customizer-sobre.php';
	 */

	// essa funcao é que cria o customizer
	// ATENCAO nao mudar o nome da variavel "$wp_customize "
	function labgrim_agenda_customizer( $wp_customize ) {

		////////////////////CUSTOMIZER AGENDA////////////////////////////////

			// Esse obj recebe a funcao que cria o secao no painel do WP
			$wp_customize->add_section(
				// aqui voce coloca o slug(ID) da secao recomendo colocar "sec_" ao inicio da slug
				'sec_agenda', array(
					// texto
					'title' 				=> 'Imagem da agenda',
				)
			);

	        // AQUI diz ao WP que ele deve criar um link para
			// a secao de configuracoes dele com o customizer que
			// voce vai criar para o TEXTO
	        $wp_customize->add_setting( 
	            'set_agenda_img', 
	            array(
	                'sanitize_callback' 	=> 'labGrim_sanitize_file'
	            )
	        );

	        // aqui ele add ao painel a area inserção do texto
			$wp_customize->add_control( 
	            new WP_Customize_Upload_Control( 
	                $wp_customize, 
	                'set_agenda_img', 
	                array(
	                    'label'      		=> __( 'Imagem da agenda', 'sec_agenda' ),
	                    'section'    		=> 'sec_agenda'                   
	                )
	            ) 
	        );


	}

	// Aqui voce adiciona a funcao acima ao GANCHO de carregamento do WP
	add_action( 'customize_register', 'labgrim_agenda_customizer' );

	// ATENCAO NAO MEXER NESSA FUNCAO
	// essa funcao foi criada pra o sanitize de imagens, pois o WP nao possui uma.
	// ela ja foi inciada no footer
	/*function labGrim_sanitize_file( $file, $setting ) {
        $mimes = array(
            'jpg|jpeg|jpe' => 'image/jpeg',
            'gif'          => 'image/gif',
            'png'          => 'image/png'
        );
        
        $file_ext = wp_check_filetype( $file, $mimes );

        return ( $file_ext['ext'] ? $file : $setting->default );
    }*/
?>