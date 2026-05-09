<?php

namespace App\Controllers;


class ErrorController 
{
/**
 * Error 404 not found
 * 
 * @return void
 */
    public static function notFound($message = 'Page Not Found'){


        http_response_code(404);

        loadView('error/404', [
            'status' => 404,
            'message' => $message
        ]);


    }
    /**
 * Error 403 not unauthozised error
 * 
 * @return void
 */
    public static function unauthorized($message = 'You are not authorized to view this page'){


        http_response_code(403);

        loadView('error/403', [
            'status' => 403,
            'message' => $message
        ]);
    }
}