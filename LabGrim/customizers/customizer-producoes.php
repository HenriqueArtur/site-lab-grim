<?php
	/*
	 * O que voce deve colocar no html:
	 * Imagem (note que o SLUG passado é o criado no SETTINGS, no caso 'producoes-img', mas vai ser o nome dado por voce)
	 * <img class="" src="<?php echo get_theme_mod( 'set_producoes-img' ); ?>"></img>
	 * 
	 * Texto (note que o SLUG passado é o criado no SETTINGS, no caso 'set_texto', mas vai ser o nome dado por voce)
	 * <p>src="<?php echo get_theme_mod( 'set_texto' ); ?>"></p>
	 *
	 * ATENCAO esse aquivo deve ser iniciado no functions.php, mas eu ja iniciei pra ti porque tu é a melhor gabi do mundo
	 * é assim que inicia:
	 * require get_template_directory() . '/customizers/customizer-producoes.php';
	 */

	// essa funcao é que cria o customizer
	// ATENCAO nao mudar o nome da variavel "$wp_customize "
	function labgrim_producoes_customizer( $wp_customize ) {

		////////////////////CUSTOMIZER O QUE É////////////////////////////////

			// Esse obj recebe a funcao que cria o secao no painel do WP
			$wp_customize->add_section(
				// aqui voce coloca o slug(ID) da secao recomendo colocar "sec_" ao inicio da slug
				'sec_producoes', array(
					// texto
					'title' 				=> 'Texto descritivo da página',
				)
			);

	        // AQUI diz ao WP que ele deve criar um link para
			// a secao de configuracoes dele com o customizer que
			// voce vai criar para o TEXTO
	        $wp_customize->add_setting(
				// SLUG para o texto
				'set_producoes-texto', array(
					// Aqui diz que tipo de area o WP vai criar, sempre deixe 'theme_mod'
					'type' 					=> 'theme_mod',
					// Aqui define o texto padrao caso o usuario nao insira nada.
					'default' 				=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer enim sapien, rutrum eu ultricies nec, eleifend finibus dui. Fusce pretium elit at dui ultricies, in vulputate lorem luctus. Suspendisse ornare orci sed rhoncus lobortis. Nunc ac egestas augue. Morbi et maximus felis, nec ullamcorper lorem. Morbi sit amet augue vehicula, scelerisque elit nec, dapibus sapien. Duis sit amet libero venenatis, consectetur enim non, placerat leo. Cras tortor ex, tincidunt eu malesuada sed, bibendum ac ante.

						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer enim sapien, rutrum eu ultricies nec, eleifend finibus dui. Fusce pretium elit at dui ultricies, in vulputate lorem luctus. Suspendisse ornare orci sed rhoncus lobortis. Nunc ac egestas augue. Morbi et maximus felis, nec ullamcorper lorem. Morbi sit amet augue vehicula, scelerisque elit nec, dapibus sapien. Duis sit amet libero venenatis, consectetur enim non, placerat leo. Cras tortor ex, tincidunt eu malesuada sed, bibendum ac ante.',
					// Aqui é o filtro de texto do proprio WP
					// Nao mexa aqui
					'sanitize_callback' 	=> 'esc_textarea'
				)
			);

	        // aqui ele add ao painel a area inserção do texto
			$wp_customize->add_control(
				// Aqui voce passa SLUG que crio no SETTING do texto
				'set_producoes-texto', array(
					// Titulo que vai encima da caixa de texto
					'label' 				=> 'Texto descritivo da página',
					// Aqui deve coloca a SLUG de SECAO no caso sec_pesquisador_senior_2
					'section'				=> 'sec_producoes',
					// aqui é o tipo de area vai aparece no painel WP, no caso é um textarea
					'type'					=> 'textarea'
				)
			);
	}

	// Aqui voce adiciona a funcao acima ao GANCHO de carregamento do WP
	add_action( 'customize_register', 'labgrim_producoes_customizer' );

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