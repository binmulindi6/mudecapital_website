<?php

use App\Controller\Auth\AuthenticationController;
use App\Controller\BlogController;
use App\Controller\MailController;
use App\Controller\WebsiteController;
use App\Http\Request;
use App\Middleware\AbilityMiddleware;
// Allow requests from any origin
header("Access-Control-Allow-Origin: *");

// Allow specific HTTP methods
header("Access-Control-Allow-Methods: DELETE,GET, POST, PUT");

// Allow specific headers
header("Access-Control-Allow-Headers: Content-Type, Authorization");
//views
require_once 'vendor/autoload.php';
date_default_timezone_set("Africa/Kigali");
session_start();

$host = ""; #you host url, if the api has not  a dedicated domain name
//ALL GETS GOES HERE

if (Request::get($host . '/api', true) && !isset($data)) {
    //GET USERS
    if (Request::get($host . '/api/blogs', true)) {
        (Request::get($host . '/api/blogs') &&  ($data = BlogController::index()))
            ?: (Request::get($host . '/api/blogs/latest') &&  ($data = BlogController::latest()))
            ?: (Request::get($host . '/api/blogs', false, ['id']) && $data = BlogController::show(Request::getParams(['id'])))
            ?:  NotFound();
    } else {

        !isset($data) && NotFound();
    }
}


//ALL POSTS GO HERE
elseif (Request::post($host . '/api', true)) {
    // echo 'here';

    if (Request::post($host . '/api/blogs', true)) {
        (Request::post($host . '/api/blogs/post') && ($data = BlogController::store()))
            ?: Request::post($host . '/api/blogs/update') && ($data = BlogController::update())
            ?: Request::post($host . '/api/blogs/delete') && ($data = BlogController::destroy())
            ?:  NotFound();
    } elseif (Request::post($host . '/api/send_mail', true)) {

        (Request::post($host . '/api/send_mail') && ($data = MailController::store()))
            ?:  NotFound();
    }
    !isset($data) && NotFound();
}



////web controller
elseif (Request::get() && (!Request::post() || (!Request::get($host . '/api', true) && !Request::get($host  . '/auth', true)))) {

    Request::get($host . '/')  && WebsiteController::home();
    Request::get($host . '/contact')  && WebsiteController::contact();
    Request::get($host . '/company')  && WebsiteController::company();
    Request::get($host . '/policy')  && WebsiteController::policy();
    Request::get($host . '/help')  && WebsiteController::help();
    Request::get($host . '/blog')  && WebsiteController::blog();
    Request::get($host . '/blog-post', true, ['id'])  && WebsiteController::blogs(Request::getParams(['id']));
    Request::get($host . '/dashboard')  && WebsiteController::dashboard();
    Request::get($host . '/admin/blog')  && WebsiteController::admin_blog();
    Request::get($host . '/admin/post-blog')  && WebsiteController::admin_post_blog();
    Request::get($host . '/admin/edit-post', true, ['id'])  && WebsiteController::edit_blog(Request::getParams(['id']));
    // // Request::get($host . '/blogs/1')  && WebsiteController::post_blog();
}

Request::post($host . '/login')  && AuthenticationController::loginWeb();
Request::post($host . '/logout')  && AuthenticationController::logoutWeb();

if (isset($data)) {
    echo json_encode($data, JSON_PRETTY_PRINT);
} else {
    NotFound();
}

function NotFound() // 404 function
{
    http_response_code(404);
}
