<?php

namespace App\Http\Controllers;

use App\Mail\Verification;
use App\Models\contact;
use App\Models\faq;
use App\Models\User;
use App\Models\user_admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class DellymanController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('isAdmin')->except(['login']);
//    }
//     public function isAdmin()
//     {
//         dd('isAdminnnnn');
    
//         # code...
//     }

    public function login(Request $request)
    {
        if(session()->has('login')) {
            return redirect('/Dashboard');
        }

        if ($request->isMethod('post')) {


            $response = $request->validate([

                'password' => 'required',
                'email' => 'required'

            ]);


            $usernames = User::where(['email' => $request->email])->get();
           
            foreach($usernames as $username){

                $username = $username['id'];
            }


          

        

            if (Auth::attempt($response) > 0) {

                $checkVerification = User::where(['status' => 'verified', 'email' => $request->email])->count();

                if ($checkVerification > 0) {

                    $request->session()->put('login', $request->email);
               
                    return redirect("/Dashboard")->with('username', $username);
                } else {

                    return redirect('/validation');
                }
            } else {
                return back()->with('error', 'Wrong Email or Password Entered');
            }
        }
        return view('admin-login');
    }

    public function signup(Request $request)
    {

        if ($request->isMethod('post')) {





            $request->validate([

                'password' => 'required|confirmed',
                'password_confirmation' => 'required',
                'email' => 'required|unique:user_admins',
                'name' => 'required'


            ]);


            $coupon = uniqid();
            $status = 'pending';
            $data = $request->all();
            $data['coupon'] = $coupon;
            $data['status'] = $status;

            // $data['user_id'] = $
            //    dd($data);

            $data['password'] = Hash::make($request->password);

            $save = user::Create($data);
            if ($save) {
                Mail::to($request->email)->send(new Verification($data));
                return redirect('/validation');
            } else {
                return back()->with('error', 'you don cook beans');
            }
        }
        return view('sign-up');
    }


    public function Validation_page(Request $request)
    {

        if ($request->isMethod('post')) {

            $request->validate([

                'coupon' => 'required',
              

            ]);

            $emails = User::where(['coupon' => $request->coupon])->get();
           
            foreach($emails as $email){

                $email = $email['email'];
            }



            $verify = user::where(['coupon' => $request->coupon, 'email' => $email,])->count();

            if ($verify > 0) {

                $verified = user::find($request->all());

                if ($verified) {

                    user::where(['coupon' => $request->coupon])->update(['status' => 'verified', 'coupon' => 'expired']);
                }

                return redirect('/admin-login');
            } else {
                return back()->with('error', 'Wrong or Expired Otp Entered');
            }



            // else{
            //    return back()->with('error', 'Wrong Email or Password Entered');

            //  }


        }
        return view('validation-page');
    }









    public function add_new_faq(Request $request)
    {
        if ($request->isMethod('post')) {


            $request->validate([

                'question' => 'required',
                'answer' => 'required',

            ]);

            $fetch = $request->all();
            $save = faq::Create($fetch);
            if ($save) {
                return back()->with('success', 'Faqs Updated Successfully');
            } else {
                return back()->with('error', 'you don cook beans');
            }
        }



        return view('add-new-faq');
    }


    public function dashboard()
    {   
        $fetch_faqs = faq::paginate(5); //as an array select


        return view('Dashboard', compact('fetch_faqs'));
    }

    public function faq_post_change(Request $request)

    {
        if ($request->action == 'edit') {
            if ($request->isMethod('post')) {
                $request->validate([
                    'question' => 'required',
                    'answer' => 'required',
                ]);
                $affected = faq::where(['id' => $request->id])->update(['question' => $request->question, 'answer' => $request->answer]);

                return redirect('/Dashboard');
            }
            $data = faq::find($request->id);
            return view('faq-post-change', compact('data'));
        } 
    }

    public function delete(Request $request, $id)
    {
         faq::find($id);
    
        if ($request->isMethod("POST")){
            $deleted = faq::where(["id" => $id])->delete();
            if($deleted){
                return redirect("Dashboard");   
            }
        }
        return view("delete");
    }


    public function view_contacts(Request $request)
    {
        $singles['name'] = "";
        $singles['id'] = "";
        $singles['email'] = "";
        $singles['phonenumber'] = "";
        $singles['message'] = "";
        $singles = (object) $singles;

        $contacts = contact::all()->toArray(); //as an array select

        // dd($request);

        // $singles = contact::where('id' , $request->id);
        //  dd($singles);
        if ($request->isMethod('post')) {

            $singles = DB::table('contacts')->find($request->id); //array

            $singles = (object) $singles;
            // return view('view-contacts', compact('contacts', 'singles'));

        }

        // $singles  = DB::table('contacts')->find($request->id);

        return view('view-contacts', compact('contacts', 'singles'));
    }
}
