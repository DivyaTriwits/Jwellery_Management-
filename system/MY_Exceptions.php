<?php
// application/core/MY_Exceptions.php

class MY_Exceptions extends CI_Exceptions {

    public function show_error($heading, $message, $template = 'error_php', $status_code = 500)
    {
        // Your custom error handling logic here

        // Load and display your custom error view
        include(APPPATH . 'views/errors/html/error_php.php');

        // You can also log the error or perform other actions here if needed

        // Call the parent show_error method
        parent::show_error($heading, $message, $template, $status_code);
    }
}