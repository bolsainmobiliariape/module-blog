<?php 

namespace Bolsainmobiliariape\ModuleBlog\Http\Controllers\Dashboard\Blog;

use App\Http\Controllers\Controller;
use Bolsainmobiliariape\ModuleBlog\Models\Blog;

class IndexController extends Controller
{
    public function index()
    {
        return view('module-blog::dashboard.blog.indexwrapper');
    }

    public function create()
    {
        return view('module-blog::dashboard.blog.editwrapper', ['blog'=>new Blog()]);
    }

    public function edit(Blog $blog)
    {
        return view('module-blog::dashboard.blog.editwrapper', ['blog'=>$blog]);
    }
}