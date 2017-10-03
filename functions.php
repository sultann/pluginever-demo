<?php
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar');


function pluginever_demo_customize_register($wp_customize){

	$wp_customize->add_section('pluginever_demo', array(
		'title'    => __('Product Link', 'themename'),
		'priority' => 120,
	));
	//  =============================
	//  = Text Input                =
	//  =============================
	$wp_customize->add_setting('pluginever_demo[demo_link]', array(
		'default'        => 'Product page link!',
		'capability'     => 'edit_theme_options',
		'type'           => 'option',
	));
	$wp_customize->add_control('themename_demo_link', array(
		'label'      => __('Product Page link', 'themename'),
		'section'    => 'pluginever_demo',
		'settings'   => 'pluginever_demo[demo_link]',
	));

}
add_action('customize_register', 'pluginever_demo_customize_register');

