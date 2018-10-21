<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Auth;
use App\User;

class UserController extends Controller
{
    public function Registration(Request $request)
    {
    	$this->validate($request,
            [ 
               'email'=>'required|email|unique:users',
               'firstname'=>'required|max:120',
               'lastname'=>'required|max:120',
               'username'=>'required|max:120',
               'address'=>'required|max:120',
               'dob'=>'required',
               'password' => 'required|min:6|confirmed',
            ]
            );
    	$username = $request['username'];
    	$firstname = $request['firstname'];
    	$lastname = $request['lastname'];
    	$email = $request['email'];
    	$password = bcrypt($request['password']);
    	$address = $request['address'];
    	$dob = $request['dob'];
    	$user = new User();
    	$user->username = $username;
    	$user->firstname = $firstname;
    	$user->lastname = $lastname;
    	$user->email=$email;
    	$user->password = $password;
    	$user->address = $address;
    	$user->dob = $dob;
        $user->image = "pic.jpg";
    	if($user->save())
    	{
    		$request->session()->flash('message','Registration successful.');
    	}

    	return redirect()->back();
    }



    public function getlogin()
    {
      if(Auth::check())
      {
        return redirect()->route('home');
      }
      else
      {
        return view('login');
      }
    }

    public function getlogedin(Request $request)
    {


    	$this->validate($request,
            [ 
               'email'=>'required|email',   
               'password' => 'required'
            ]
            );

    
    	if(Auth::attempt(['email'=>$request['email'],'password'=>$request['password'],'approved'=>1]))
    	{
            //return "hello";
    		return redirect()->route('home');
    	}
      else
      {
        $request->session()->flash('message','Email or password is wrong');
        return redirect()->back();
      }
    }
     
    public function logout()
    {
         Auth::logout();
        return redirect()->route('login');
    }


      public function getChangeImg(Request $request)
    {
         $file = $request->file('image');
         $filename = Auth::user()->username.'-'.Auth::user()->id;
      
         $user =Auth::user();


        if($file)
        {
            
             if(Storage::disk('local')->has($filename))
            {
                Storage::disk('local')->delete($filename);
            }

            $user->image = $filename;
            Storage::disk('local')->put($filename,File::get($file));
            $user->update();

        }
        else
        {
            if(Storage::disk('local')->has($filename))
            {
                Storage::disk('local')->delete($filename);
            }
        }
        return redirect()->back();
        //return "nw";
    }


     public function getUserImage($filename)
    {
        $file = Storage::disk('local')->get($filename);
        return new Response($file,200);
        //return "nw";
    }
    
    public function gethome()
    {
        return view('home');
    }

   public function getUpdateImage()
   {
      return view('imageUpdate');
   }


   public function getusers()
   {
      return User::all()->where('admin',0);
   }


   public function getAccount()
   {
      $user = Auth::user();
      return view('myaccount')->with('user',$user);
   }


   public function updateinfo(Request $request)
   {
       $this->validate($request,
            [ 
              
               'firstname'=>'required|max:120',
               'lastname'=>'required|max:120',
               'username'=>'required|max:120',
               'address'=>'required|max:120',
               'dob'=>'required'
               
            ]
            );
        $username = $request['username'];
        $firstname = $request['firstname'];
        $lastname = $request['lastname'];
        $address = $request['address'];
        $dob = $request['dob'];
        $user = Auth::user();
        $user->username = $username;
        $user->firstname = $firstname;
        $user->lastname = $lastname;
        $user->address = $address;
        $user->dob = $dob;
        $user->update();
        $request->session()->flash('msg','update information successfully');
        return redirect()->back();
   }


   public function getDeactive($id)
   {
    if(Auth::user()->admin)
    {
      $user = User::find($id);
      $user->approved = 0;
       $user->update();
      return "deactive";
    }
    else{
        
         return redirect()->route('home');

    }
   

  }

    public function getActive($id)
   {

    if(Auth::user()->admin)
    {
      $user = User::find($id);
       $user->approved = 1;
       $user->update();
       return "active";
    }
    else
    {
        return redirect()->route('home'); 
    }

   }

}
