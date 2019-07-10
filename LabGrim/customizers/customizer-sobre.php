<?php
	/*
	 * O que voce deve colocar no html:
	 * Imagem (note que o SLUG passado é o criado no SETTINGS, no caso 'sobre-img', mas vai ser o nome dado por voce)
	 * <img class="" src="<?php echo get_theme_mod( 'set_sobre-img' ); ?>"></img>
	 * 
	 * Texto (note que o SLUG passado é o criado no SETTINGS, no caso 'set_texto', mas vai ser o nome dado por voce)
	 * <p>src="<?php echo get_theme_mod( 'set_texto' ); ?></p>
	 *
	 * ATENCAO esse aquivo deve ser iniciado no functions.php, mas eu ja inicei pra ti porque tu é a melhor gabi do mundo
	 * é assimque inicia:
	 * require get_template_directory() . '/customizers/customizer-sobre.php';
	 */

	// essa funcao é que cria o customizer
	// ATENCAO nao mudar o nome da variavel "$wp_customize "
	function labgrim_sobre_custumizer( $wp_customize ) {
		
		// Esse obj recebe a funcacao que cria o secao no painel do WP
		$wp_customize->add_section(
			// aqui voce coloca o slug(ID) da secacao recomendo colocar "sec_" ao inicio da slug
			'sec_sobre', array(
				// titulo
				'title' 				=> 'titulo',
				// descricao da secao
				'description' 			=> 'Colaca uma descrição aqui!'
			)
		);

		// AQUI diz ao WP que ele deve cria criar um link para
		// a secao de conficuracoes dele com o customizer que
		// voce vai criar para o UPLOAD DE IMAGEM
        $wp_customize->add_setting( 
        	// aqui voce coloca o slug(ID) do LINK. recomendo colocar "set_" ao inicio da slug
            'set_sobre-img', 
            array(
            	// Aqui é uma funcao filtro que checa se voce esta enviando uma imagem
            	// NAO MODIFIQUE
                'sanitize_callback' => 'labGrim_sanitize_file'
            )
        );
        
        // aqui ele add ao painel a area de upload da imagem
        $wp_customize->add_control( 
            new WP_Customize_Upload_Control( 
                $wp_customize,
                // aqui voce deve passar o MESMO SLUG do setting
                'set_sobre-img', 
                array(
                	// aqui é o titulo da area de upload
                    'label'      => __( 'texto'/*breve descicao da secao*/, 'sec_sobre'/*ATENCAO: coloca o SLUG da SECAO o primeiro la SEC*/ ),
                    // aqui voce diz a qual secao esse controle pertence usando o SLUG, no caso é o *SEC*_sobre
                    'section'    => 'sec_sobre'                   
                )
            ) 
        );

        // AQUI diz ao WP que ele deve cria criar um link para
		// a secao de conficuracoes dele com o customizer que
		// voce vai criar para o TEXTO
        $wp_customize->add_setting(
			// SLUG para o texto
			'set_texto', array(
				// Aqui diz que tipo de area o WP vai criar, sempre deixe 'theme_mod'
				'type' 					=> 'theme_mod',
				// Aqui define o texto padrao cao o usuario nao isira nada.
				'default' 				=> 'Insira um texto aqui',
				// Aqui é o filtro de texto do proprio WP
				// Nao mexa aqui
				'sanitize_callback' 	=> 'esc_textarea'
			)
		);

        // aqui ele add ao painel a area inserção do texto
		$wp_customize->add_control(
			// Aqui voce passa SLUG que crio no SETTING do texto
			'set_texto', array(
				// Titulo que vai enciama da ca de texto
				'label' 				=> 'Insira um texto aqui',
				// Aqui deve coloca a SLUG de SECAO no caso SEC_sobre
				'section'				=> 'sec_sobre',
				// aqui é o tipo de area vai aparece no painel WP, no caso é um textarea
				'type'					=> 'textarea'
			)
		);
	}

	// Aqui voce adiciona a funcao acima ao GANCHO de carregamento do WP
	add_action( 'customize_register', 'labgrim_sobre_custumizer' );

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