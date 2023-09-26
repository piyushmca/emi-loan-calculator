<?php
/**
 * Plugin Name: Emi Loan Calculator
 * Plugin URI:  https://profiles.wordpress.org/piyushmca/
 * Description: All Loan Calculator By Piyush Patel. Put ShortCode [Loan-calculator]
 * Version:     1.2
 * Author:      Piyush Patel
 * Author URI:  https://profiles.wordpress.org/piyushmca/
 * License:     GPLv2+
 * Text Domain: emi-loan-calculator
 * Domain Path: /languages/
 */

/**
 * Copyright (c) 2015 required+ (email : patelpiyushkumar23@gmail.com)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2 or, at
 * your discretion, any later version, as published by the Free
 * Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */



if(!defined('ABSPATH'))exit; 
function piyushmca_loan_calculator(){ 
	include "home_loan_calculator.php";
 }
 
add_shortcode('Loan-calculator','piyushmca_loan_calculator');
function piyushmca_loan_calculator_scripts(){
	wp_enqueue_script('clientlibrarymanager', plugins_url('assets/clientlibrarymanager.min.js', __FILE__ ),array(),'1.0.0',true);
	wp_enqueue_style( 'print', plugins_url( 'assets/print.css', __FILE__ ));
	wp_enqueue_style( 'gbst_styles', plugins_url( 'assets/gbst_styles.css', __FILE__ ));
	wp_enqueue_script('loan-calculator-lib', plugins_url('assets/loan-calculator-lib.js', __FILE__ ),array(),'1.0.0',true);
	wp_enqueue_script('config', plugins_url('assets/config.js', __FILE__ ),array(),'1.0.0',true);
	wp_enqueue_script('loan-calculator-app', plugins_url('assets/loan-calculator-app.js', __FILE__ ),array(),'1.0.0',true);
}
add_action( 'wp_enqueue_scripts', 'piyushmca_loan_calculator_scripts' );

 
 

?>