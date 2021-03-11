<?php
    add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
    
    function my_theme_enqueue_styles() {
        wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
        wp_enqueue_style( 'child-style', 
             get_stylesheet_directory_uri() . '/style.css',
             array( 'parent-style' ),
             wp_get_theme()->get('Version')
        );
     }

    add_action( 'customize_register', 'grid_child_theme_add_stuff_to_customizer' );
    function grid_child_theme_add_stuff_to_customizer( $wp_customize ) {

        /* ici j'ajoute la section */
        $wp_customize->add_section(
          'gridbox_child_theme_custom_section', /* section id */
          array(
            'title'       => 'Ajouter un copyright sur footer',
            'description' => '',
          )
        );

      
        /* ici j'ajoute un setting, une entrée dans la base de donnée pour mon option */
      
        $wp_customize->add_setting(
          'gridbox_child_theme_custom_setting',
          array(
            'default'           => '',
            'sanitize_callback' => 'wp_kses_post', /* ceci dépend du type de données */
          )
        );

        $wp_customize->add_setting(
            'gridbox_child_theme_custom_link',
            array(
              'default'           => '',
              'sanitize_callback' => 'esc_url_raw', /* ceci dépend du type de données */
            )
          );
      
        /* ici  j'ajoute un control (autrement dit un champ input, textarea, select etc.) qui permettra à enregistrer notre setting */
      
        $wp_customize->add_control(
          'gridbox_child_theme_custom_setting',
          array(
            'type'        => 'text', /* différents types sont disponible */
            'section'     => 'gridbox_child_theme_custom_section', // Required, core or custom.
            'label'       => 'Footer credit',
            'description' => 'Ecrire le texte que vous voulez mettre',
          )
        );

        $wp_customize->add_control(
            'gridbox_child_theme_custom_link',
            array(
              'type'        => 'text', /* différents types sont disponible */
              'section'     => 'gridbox_child_theme_custom_section', // Required, core or custom.
              'label'       => 'Link to copyright',
              'description' => 'link pls',
            )
          );





      }

  ?>




