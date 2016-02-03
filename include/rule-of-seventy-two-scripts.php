<?php
//addscripts
	function rsc_load_scripts()
	{
		wp_enqueue_style('rsc-main-style', plugins_url() . '/rule-of-seventy-two/css/style.css');
		wp_enqueue_script('rsc-main-script', plugins_url() . '/rule-of-seventy-two/js/main.js', array('jquery'));
	}
	add_action('wp_enqueue_scripts', 'rsc_load_scripts');