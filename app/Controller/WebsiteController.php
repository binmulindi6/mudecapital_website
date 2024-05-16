<?php

namespace App\Controller;

use App\Http\Session;
use App\Model\Blog;

// save mail in DB
class WebsiteController extends Controller
{
    public static function home()
    {
        return htmlView('website/index');
    }
    public static function blog()
    {
        return htmlView('website/blog');
    }
    public static function blogs($blog_id)
    {
        $instance = new Blog();
        // var_dump($blog_id['id']);
        if (isset($blog_id['id']) and $instance->find($blog_id['id'])) {
            $blog = $instance->find($blog_id['id']);
            return view('website/blog-post', ['id' => $blog->id, 'blog' => $blog]);
        } else {
            NotFound();
        }
    }
    public static function company()
    {
        return htmlView('website/company');
    }
    public static function contact()
    {
        return htmlView('website/contact');
    }
    public static function policy()
    {
        return htmlView('website/policy');
    }
    public static function help()
    {
        return htmlView('website/help');
    }
    public static function post_blog()
    {
        return view('blog/post');
    }


    //dashboard
    public static function dashboard()
    {
        if (!Session::check()) {
            return htmlView('admin/login');
        } else {
            return htmlView('admin/dashboard');
        }
    }
    public static function admin_blog()
    {
        if (!Session::check()) {
            return htmlView('admin/login');
        } else {
            return htmlView('admin/dashboard-blog');
        }
    }
    public static function edit_blog($blog_id)
    {
        if (!Session::check()) {
            return htmlView('admin/login');
        } else {
            $instance = new Blog();
            if (isset($blog_id['id']) and $instance->find($blog_id['id'])) {
                $blog = $instance->find($blog_id['id']);
                return view('admin/edit-blog', ['blog' => $blog]);
            } else {
                NotFound();
            }
        }
    }
    public static function admin_post_blog()
    {

        if (!Session::check()) {
            return htmlView('admin/login');
        } else {
            return htmlView('admin/post-blog');
        }
    }


    public static function error($code = 404)
    {
        http_response_code(404);
        // header("HTTP/1.1 404 Not Found");
        return view('errors/404');
    }
}

function view($path, $data = [])
{
    // var_dump($data['blog']->title);
    // die();
    extract($data);
    require('pages/' . $path . '.php');
}
function htmlView($path)
{
    require('pages/' . $path . '.html');
}
