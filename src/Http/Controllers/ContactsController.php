<?php

namespace ut\contacts\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use ut\contacts\Mail\OrderShipped;
use ut\contacts\Models\contact;

class ContactsController extends Controller
{
    public function index():View{
        return view('contacts::contactform');
    }
    public function send(Request $request){
    Mail::to('utkarshsrivastava434@gmail.com')->send(new OrderShipped($request->message));
    contact::create($request->all());
    return redirect('contacts');
    // return $request->all();

    }
}
