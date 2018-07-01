<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\book_list;
use App\genre_list;
use App\section_list;




use Illuminate\Support\Facades\Auth;
class PagesController extends Controller
{
    //

	public function books(){


        $user =  Auth::user()->admin;

        if($user == 0)
    {
        return redirect('home');
    }


    else
    {
        $section_lists = section_list::paginate(5);
		return view('books')->with("section_lists",$section_lists);
	}
}

	public function section($id){

        $user =  Auth::user()->admin;

        if($user == 0)
    {
        return redirect('home');
    }

}

	public function register(){

		return view('register');
	}

    public function lib_section(){


    $section_lists = section_list::get();

        return view('lib_section')->with('section_lists',$section_lists);
    }


    public function section_show($id){


        return $id;


    }






}
