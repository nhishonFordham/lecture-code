<?php
// **PREVENTING SESSION HIJACKING**
// Prevents javascript XSS attacks aimed to steal the session ID
ini_set('session.cookie_httponly', 1);

// **PREVENTING SESSION FIXATION**
// Session ID cannot be passed through URLs
ini_set('session.use_only_cookies', 1);

// Uses a secure connection (HTTPS) if possible
ini_set('session.cookie_secure', 1);

session_start();                              // Start/renew session
$logged_in = $_SESSION['logged_in'] ?? false; // Is user logged in?

//validation will come here
$email     = 'test@test.com';                 // Email address to login
$password  = 'test';                          // Password to login

function login()                              // Remember user passed login
{
    session_regenerate_id(true);  // Update session id
    $_SESSION['logged_in'] = true;                // Set logged_in key to true
}

function logout()                                        // Terminate the session
{
    $_SESSION = [];                                      // Clear contents of array

    $params = session_get_cookie_params();               // Get session cookie parameters
    setcookie('PHPSESSID', '', time() - 3600, $params['path'], $params['domain'],
        $params['secure'], $params['httponly']);         // Delete session cookie

    session_destroy();
    header('Location: login');                   // Send to login page// Delete session file
}

function require_login($logged_in)                       // Check if user logged in
{
    if ($logged_in == false) {                           // If not logged in
        header('Location: login');                   // Send to login page
        exit;                                            // Stop rest of page running
    }
}
