<?php   if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function my_helper() {
    // Get a reference to the controller object
    $CI = get_instance();

    // You may need to load the model if it hasn't been pre-loaded
    $CI->load->model('notices_model');

    // Call a function of the model
    $CI->my_model->do_something();
}