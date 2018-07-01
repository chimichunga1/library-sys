<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\book_list;
use App\genre_list;
use App\section_list;
use Illuminate\Support\Facades\Auth;
class CreateInSection extends Controller
{
    //


    public function index(){

        $user =  Auth::user()->admin;

        if($user == 0)
    {
        return redirect('home');
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

    else
    {
        $genre_lists = genre_list::all();


		return view('CreateInSection')->with("genre_lists",$genre_lists)->with("id",$id);

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
}


    public function search(Request $request){

        $user =  Auth::user()->admin;

        if($user == 0)
    {
        return redirect('home');
    }


}


    public function catch($id){





	}











}

