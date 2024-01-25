<?php

// Create a helper function in app/Helpers/auth_helper.php
if (!function_exists('isAuthenticated')) {
    function isAuthenticated()
    {
        $session = session();
        return $session->has('logged_in') && $session->get('logged_in') === true;
    }
}



?>