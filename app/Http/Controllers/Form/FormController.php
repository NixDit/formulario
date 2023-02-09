<?php

namespace App\Http\Controllers\Form;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Product;
use App\Models\Distribuidor;
use App\Models\Formbusiness;
use Illuminate\Http\Request;
use App\Models\Imaqformlines;
use App\Models\Imaqformservices;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Http\Resources\ProductResource;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use App\Http\Resources\ProductCollection;
use App\Http\Controllers\NotificationsController;

class FormController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        //return view('administrador.ecommerce.catalog.products.create-product')->with( 'product', new Product );
        // return view('form.form');

        $data               = (object)[];
        $data->service      = Imaqformservices::all()->where('status',1);
        $data->line         = Imaqformlines::all()->where('status',1);
        return view('form.form', compact('data'));

    }

    public function store(Request $request)
    {

        $event = Formbusiness::create([
            'name'          =>$request->name,
            'last_name'     =>$request->last_name,
            'email'         =>$request->email,
            'phone'         =>$request->phone,
            'service_id'    =>$request->service_id,
            'line_id'       =>$request->line_id,
            'message'       =>$request->message,
            'quantity'      =>$request->quantity,
            'hour'          =>$request->hour,
        ]);
        // dd($event);

        event(new Registered($event));

        Session::flash('alert',[ // Message for Swal general alert
            'type'    => 'success',
            'message' => 'El formulario se ha enviado correctamente'
        ]);
        // return redirect()->route('view-products');
        return back();
    }
}
