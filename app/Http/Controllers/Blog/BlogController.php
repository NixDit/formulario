<?php

namespace App\Http\Controllers\Blog;

use App\Models\Distribuidor;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\NotificationsController;
use App\Http\Resources\ProductResource;
use App\Http\Resources\ProductCollection;
use App\Models\Product;
use Carbon\Carbon;
use App\Models\User;

class BlogController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('blog.index');
    }

    public function blog1()
    {
        return view('blog.pages.blog1');
    }
}
