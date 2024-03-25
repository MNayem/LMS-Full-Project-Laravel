<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Chat;
use App\Models\Training;
use App\Models\Trainer;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
 public function mathbasic()
  {
    $user_email = Auth::user()->email;
    $isadmin = User::where('email',  $user_email )
                      -> get('is_admin');
            foreach ($isadmin as $data) {
            echo $data->is_admin;
        }
        if($data->is_admin == 1){
            $mathchat= Chat::get();
            $chatmenu = Training::select('*')
                      ->get();
        }
        else{
            
            $chatmenu = Training::select('*')
                            ->where('email', $user_email)
                            ->get();
        }
        return view('chat.mathbasic',compact('chatmenu') );
        
  }
  public function mathchat()
  {
    $user_email = Auth::user()->email;
    /*$isadmin = User::where('email',  $user_email )
                      -> get('is_admin');
            foreach ($isadmin as $data) {
            echo $data->is_admin;
        }
        if($data->is_admin == 1){
            $mathchat= Chat::get();
            $chatmenu = Training::select('*')
                            ->get();
        }
        else{
            
            $chatmenu = Training::select('*')
                            ->where('email', $user_email)
                            ->get();
        }*/
    $category="Basic Math";
    $chats=Chat:: where('category',$category)
                         -> get();
    $chatmenu = Training::select('*')
                            ->where('email', $user_email)
                            ->get();

      return view('chat.mathchat',compact('chats','chatmenu') );
  }
  public function mathbasicprocess(Request $request)
  {
    $user_email = Auth::user()->email;
    $trainer=new Chat;
    $trainer->student_email=$user_email;
    $trainer->category="Math";
    $trainer->message=$request->message;
    $trainer->save();
    
    return redirect()->back()->with('message', 'Chat message has been placed successfully!!!');

    $category="Basic Math";
    $chats=Chat::  where('category',$category)
                       -> get();

    return view('chat.mathchat',compact('chats') );
  }
  
  public function mathadvance()
  {
    $user_email = Auth::user()->email;
    $category="Advance Math";
    $chats=Chat::  where('category',$category)
                         -> get();
    $chatmenu = Training::select('*')
                            ->where('email', $user_email)
                            ->get();
      return view('chat.mathadvance',compact('chats','chatmenu') );
  }
  public function mathadvanceprocess(Request $request)
  {
    $user_email = Auth::user()->email;
    $trainer=new Chat;
    $trainer->student_email=$user_email;
    $trainer->category="Basic Math";
    $trainer->message=$request->message;
    $trainer->save();
    
    return redirect()->back()->with('message', 'Chat message has been placed successfully!!!');

  $category="Advance Math";
  $chats=Chat::  where('category',$category)
                       -> get();

    return view('chat.mathadvance',compact('chats') );
  }
  
  public function englishbasic()
  {
    $user_email = Auth::user()->email;
    $category="Basic English";
    $chats=Chat::  where('category',$category)
                         -> get();
    $chatmenu = Training::select('*')
                            ->where('email', $user_email)
                            ->get();
      return view('chat.englishbasic',compact('chats','chatmenu') );
  }
  public function englishbasicprocess(Request $request)
  {
    $user_email = Auth::user()->email;
    $trainer=new Chat;
    $trainer->student_email=$user_email;
    $trainer->category="Basic English";
    $trainer->message=$request->message;
    $trainer->save();
    
   return redirect()->back()->with('message', 'Chat message has been placed successfully!!!');
   
      $category="Basic English";
      $chats=Chat::  where('category',$category)
                           -> get();

    return view('chat.englishbasic',compact('chats') );
  }
  
  public function analyticalbasic()
  {
    $user_email = Auth::user()->email;
    $category="Basic Analytical";
    $chats=Chat::  where('category',$category)
                         -> get();
    $chatmenu = Training::select('*')
                            ->where('email', $user_email)
                            ->get();
      return view('chat.analyticalbasic',compact('chats','chatmenu') );
  }
  public function analyticalbasicprocess(Request $request)
  {
    $user_email = Auth::user()->email;
    $trainer=new Chat;
    $trainer->student_email=$user_email;
    $trainer->category="Basic Math";
    $trainer->message=$request->message;
    $trainer->save();
    
    return redirect()->back()->with('message', 'Chat message has been placed successfully!!!');

  $category="Basic Analytical";
  $chats=Chat::  where('category',$category)
                       -> get();

    return view('chat.analyticalbasic',compact('chats') );
  }
}
