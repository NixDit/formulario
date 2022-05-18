<?php

namespace App\Http\Controllers\Services;

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

class DiseñoController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        //return view('administrador.ecommerce.catalog.products.create-product')->with( 'product', new Product );
        return view('services.diseño');
    }
}
