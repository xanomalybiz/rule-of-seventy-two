<?php
/**
* Plugin Name: America Is Easy Rule of Seventy Two Widget 
* Description: A Widget That Calculates The Rule Of Seventy Two
* Version: 1.0
* Author: Xanomaly
**/

//Exit if accessed Directly
if(!defined('ABSPATH'))
{
	exit;	
}

//Load Class
require_once(plugin_dir_path(__FILE__) . '/include/rule-of-seventy-two-class.php');
//Load Scripts
require_once(plugin_dir_path(__FILE__) . '/include/rule-of-seventy-two-scripts.php');
//Load Calculators
require_once(plugin_dir_path(__FILE__) . '/include/rule-of-seventy-two-calculator.php');

function register_rsc()
{
	register_widget('Rule_Of_Seventy_Two_Calculator');
}
add_action('widgets_init', 'register_rsc');
