<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\book_list;
use App\genre_list;
use App\section_list;
use App\user;
use Illuminate\Support\Facades\Auth;
class accountUserController extends Controller
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

        $users = user::where('admin', '=', 0)->paginate(5);
    

    

        return view('accountUser')->with("users",$users);   

    }
}


    public function store(Request $request){
        $user =  Auth::user()->admin;

        if($user == 0)
    {
        return redirect('home');
    }


    }


    public function create(){
    	//showing of add form
        $user =  Auth::user()->admin;

        if($user == 0)
    {
        return redirect('home');
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
        $user =  Auth::user()->admin;

        if($user == 0)
    {
        return redirect('home');
    }

/*                $users = DB::table('users')->select('name', 'email')->get();
  

                 return view('edit')->with("users", $users);
*/

   




    }


    public function search(Request $request){


        if($request['search'] !='')

        {




        $users = user::where('admin','=','0')->where('name','LIKE','%'.$request['search'].'%')->orWhere('email','LIKE','%'.$request['search'].'%')->paginate(5);


        return view("accountUser")->with("users",$users);


        }

        else
        {
        $users = user::where('admin', '=', 0)->paginate(5);

        return view("accountUser")->with("users",$users);
        }


    }








}


