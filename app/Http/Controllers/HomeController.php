<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //   $users=new User;
        $user_email = Auth::user()->email;
        $cruds = Crud::select('*')
                       //->where('email',$user_email)
                       ->  get();
        $users = User::get();
        return view('trainer.chatbox', compact('cruds','users' ));

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $user_email = Auth::user()->email;
         $cruds = Crud::select('*')
                       ->where('email',$user_email)
                       ->  get();
         $users = User::get();
        return view('trainer.chatbox2', compact('cruds','users'));
    }

}
