<?php

namespace App\Http\Controllers;

use App\Mail\Verification;
use App\Models\contact;
use App\Models\faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DellyController extends Controller
{
    public function index()
    {
       return view('index');
    }
    public function how_it_works()
    {
       return view('how_it_works');
    }


    public function faq()
    {
      $fetch_faqs = faq::all()->toArray();//as an array select
       return view('faq', compact('fetch_faqs'));
    }


    public function contact(Request $request)
    {

      if($request->isMethod('post')){

         
         $request->validate([
            
         'name' => 'required',
         'phonenumber' => 'required',
         'message' => 'required',
         'email' => 'required'

     ]);
     $coupon = uniqid();
     $data = $request->all();
     $data['coupon']= $coupon;
   //   dd($data);
 
     $save = contact::Create($data);
     if($save){
        Mail::to('lordsoliz@gmail.com')->send(new Verification($data));
      return back()->with('success', 'Contact uploaded Successfully');

     }else{
      return back()->with('error', 'you don cook beans');

     }
   }

    
       return view('contact');
    }






    public function sign()
    {
       return view('sign');
    }
}
