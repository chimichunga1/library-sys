<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\book_list;
use App\genre_list;
use App\section_list;
use App\user;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class accountAdminController extends Controller
{
    //


    public function index(){

    $user =  Auth::user()->admin;

        if($user == 0)
    {
        return redirect('home');
    }

    else
    {


        $users = user::where('admin', '=', 1)->paginate(5);
	

	

		return view('accountAdmin')->with("users",$users);    	
    }
    

    }


    public function store(Request $request){



        $user =  Auth::user()->admin;

        if($user == 0)
    {
        return redirect('home');
    }

    else
    {





        $user = new user;
        $one = "1";
        $value = $request->input('password');
		$hashed = Hash::make($value);
        $user->name = $request->input('name');
        $user->email = $request->input('email');		
        $user->password = $request->input('hashed',$hashed);
        $user->admin = $request->input('one',$one);


        $user->save();


        $user_lists = user::where('admin', '=', 1)->paginate(5);
	

	

		return view('accountAdmin')->with("user_lists",$user_lists);   

    }


}


    public function create(){
    	//showing of add form
        $user =  Auth::user()->admin;

        if($user == 0)
    {
        return redirect('home');
    }

    else
    {
    	return view('create-admin');
    }
   

}

    public function show ($id){

        $user =  Auth::user()->admin;

        if($user == 0)
    {
        return redirect('home');
    }

    }

    public function update (Request $request, $id){


            $user =  Auth::user()->admin;

        if($user == 0)
    {
        return redirect('home');
    }
    	


    }


    public function destroy($id){

        $user =  Auth::user()->admin;

        if($user == 0)
    {
        return redirect('home');
    }
    }

    public function edit($id){

/*                $users = DB::table('users')->select('name', 'email')->get();
  

                 return view('edit')->with("users", $users);
*/

     

        $user =  Auth::user()->admin;

        if($user == 0)
    {
        return redirect('home');
    }

    }


    public function search(Request $request){




        if($request['search'] !='')

        {
            $users = user::orderBy('id','desc')->where('name','LIKE','%'.$request['search'].'%')->orWhere('email','LIKE','%'.$request['search'].'%')->where('admin','=','1')->paginate(5);


        return view("accountAdmin")->with("users",$users);


        }

        else
        {
        $users = user::where('admin', '=', 1)->paginate(5);

        return view("accountAdmin")->with("users",$users);
        }


    }










    }








