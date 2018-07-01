<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\book_list;
use App\genre_list;
use App\section_list;
use Illuminate\Support\Facades\Auth;
class section_listController extends Controller
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

    	$book_lists = book_list::all();
        $genre_lists = genre_list::all();
        $section_lists = section_list::paginate(5);

    	return view("section_list")->with("book_lists",$book_lists)->with("genre_lists",$genre_lists)->with("section_lists",$section_lists);

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
        $section_list = new section_list;
        $zero = "0";
        $section_list->section_name = $request->input('section-name');
         $section_list->isDeleted = $request->input('zero',$zero);      

        $section_list->save();        

        $section_lists = section_list::paginate(5);


    	return view("section_list")->with("section_lists",$section_lists);     


    }

}


    public function create(){
    	//showing of add form
        $user =  Auth::user()->admin;

        if($user == 0)
    {
        return redirect('home');
    }


        return view("create-section");

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


    else
    {
        $section_list = section_list::find($id);
         

		return view('edit-section')->with("section_list",$section_list);

    }

}


    public function search(Request $request){

        if($request['search'] !='')

        {
            $section_lists = section_list::orderBy('id','desc')->where('section_name','LIKE','%'.$request['search'].'%')->paginate(5);


         return view('section_list')->with('section_lists',$section_lists);


        }

        else
        {

        $section_lists = section_list::paginate(5);


    	return view("section_list")->with("section_lists",$section_lists);
        }



    }








}


