<?php
	function labgrim_footer_custumizer( $wp_customize ) {
		
		// Endereço
		$wp_customize->add_section(
			'sec_footer', array(
				'title' 				=> 'Rodapé',
				'description' 			=> 'Aqui você pode configurar todo o rodapé.'
			)
		);

		$wp_customize->add_setting(
			'set_endereco-1', array(
				'type' 					=> 'theme_mod',
				'default' 				=> 'Campus do Pici, ICA - Av. Mister Hall, s/n - Pici,',
				'sanitize_callback' 	=> 'wp_filter_nohtml_kses'
			)
		);

		$wp_customize->add_control(
			'set_endereco-1', array(
				'label' 				=> 'Endereço Linha Superior',
				'section'				=> 'sec_footer',
				'type'					=> 'text'
			)
		);

		$wp_customize->add_setting(
			'set_endereco-2', array(
				'type' 					=> 'theme_mod',
				'default' 				=> 'Fortaleza - CE, 60455-760 | grim.ufc@gmail.com',
				'sanitize_callback' 	=> 'wp_filter_nohtml_kses'
			)
		);

		$wp_customize->add_control(
			'set_endereco-2', array(
				'label' 				=> 'Endereço Linha Inferior',
				'section'				=> 'sec_footer',
				'type'					=> 'text'
			)
		);

		// Imagens
        // IMAGEM UFC
        $wp_customize->add_setting( 
            'set_logo_ufc', 
            array(
                'sanitize_callback' 	=> 'labGrim_sanitize_file'
            )
        );
        
        $wp_customize->add_control( 
            new WP_Customize_Upload_Control( 
                $wp_customize, 
                'set_logo_ufc', 
                array(
                    'label'      		=> __( 'Logo UFC', 'sec_footer' ),
                    'section'    		=> 'sec_footer'                   
                )
            ) 
        );

        $wp_customize->add_setting(
			'set_url_ufc', array(
				'type' 					=> 'theme_mod',
				'default' 				=> 'http://www.ufc.br/',
				'sanitize_callback' 	=> 'wp_filter_nohtml_kses'
			)
		);

		$wp_customize->add_control(
			'set_url_ufc', array(
				'label' 				=> 'URL UFC',
				'section'				=> 'sec_footer',
				'type'					=> 'text'
			)
		);

		// IMAGEM ICA
        $wp_customize->add_setting( 
            'set_logo_ica', 
            array(
                'sanitize_callback' 	=> 'labGrim_sanitize_file'
            )
        );
        
        $wp_customize->add_control( 
            new WP_Customize_Upload_Control( 
                $wp_customize, 
                'set_logo_ica', 
                array(
                    'label'      		=> __( 'Logo ICA', 'sec_footer' ),
                    'section'    		=> 'sec_footer'                   
                )
            ) 
        );

        $wp_customize->add_setting(
			'set_url_ica', array(
				'type' 					=> 'theme_mod',
				'default' 				=> 'http://www.ica.ufc.br/pt/',
				'sanitize_callback' 	=> 'wp_filter_nohtml_kses'
			)
		);

		$wp_customize->add_control(
			'set_url_ica', array(
				'label' 				=> 'URL ICA',
				'section'				=> 'sec_footer',
				'type'					=> 'text'
			)
		);

		// IMAGEM INSTITUTO VIRTUAL
        $wp_customize->add_setting( 
            'set_logo_virtual', 
            array(
                'sanitize_callback' 	=> 'labGrim_sanitize_file'
            )
        );
        
        $wp_customize->add_control( 
            new WP_Customize_Upload_Control( 
                $wp_customize, 
                'set_logo_virtual', 
                array(
                    'label'      		=> __( 'Logo INSTITUTO UFC VIRTUAL', 'sec_footer' ),
                    'section'    		=> 'sec_footer'                   
                )
            ) 
        );

        $wp_customize->add_setting(
			'set_url_virtual', array(
				'type' 					=> 'theme_mod',
				'default' 				=> 'http://portal.virtual.ufc.br/',
				'sanitize_callback' 	=> 'wp_filter_nohtml_kses'
			)
		);

		$wp_customize->add_control(
			'set_url_virtual', array(
				'label' 				=> 'URL INSTITUTO UFC VIRTUAL',
				'section'				=> 'sec_footer',
				'type'					=> 'text'
			)
		);
	}

	add_action( 'customize_register', 'labgrim_footer_custumizer' );

	function labGrim_sanitize_file( $file, $setting ) {
      
        $mimes = array(
            'jpg|jpeg|jpe' => 'image/jpeg',
            'gif'          => 'image/gif',
            'png'          => 'image/png'
        );
          
        $file_ext = wp_check_filetype( $file, $mimes );
        
        return ( $file_ext['ext'] ? $file : $setting->default );
    }
?>