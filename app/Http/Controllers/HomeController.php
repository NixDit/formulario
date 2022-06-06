<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactUsMailable;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    
    public function index() {

    }

    public function contact( Request $request ) {

        $request->validate([
            'name'      => 'required|string|min:8',
            'email'     => 'required|email',
            //'phone'     => 'required|regex:/[0-9]{10}/',
            'subject'   => 'required',
            'message'   => 'required|min:15',
        ]);

        try {
            $email = new ContactUsMailable( $request->all() );
            Mail::to('dev@industrialmaquiladora.com')->send( $email );
            return redirect('success', 'Correcto' );
        } catch (\Throwable $th) {
            return redirect('error', 'Error' );
        }

        
        

    }

}
