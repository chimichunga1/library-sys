<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\book_list;
use App\genre_list;
use App\section_list;
use Illuminate\Support\Facades\Auth;
class book_sectionController extends Controller
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
    else
    {

        $book_list = new book_list;
        $one = "1";
        $zero = "0";
        $book_list->title = $request->input('book-title');
        $book_list->Author = $request->input('book-author');
        $book_list->book_desc = $request->input('book-desc');
        $book_list->Genre = $request->input('book-genre');    
        $book_list->lib_sections = $request->input('book_section');



        $book_list->isBorrowed = $request->input('zero',$zero);
        $book_list->user_id = $request->input('zero',$zero);
        $book_list->times_borrowed = $request->input('zero',$zero);
        $book_list->save();
        $value = $request->input('book_section');

	// return redirect()->route('profile', ['id' => 1]);
	return redirect('book_section/'.$value);

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
		
        $book_lists = book_list::where('lib_sections', '=', $id)->paginate(5);
	

		$section_lists = section_list::where('section_name', '=', $id)->get();		
		return view('book_section')->with("book_lists",$book_lists)->with("section_lists",$section_lists);

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


	$value = $request->input('book_section');




	// return $value;


        if($request['search'] !='')

        {
            $book_lists = book_list::where('title','LIKE','%'.$request['search'].'%')->where('lib_sections', '=', $value)->paginate(10);


            return view('book_list')->with('book_lists',$book_lists);


        }

        else
        {

        $book_lists = book_list::paginate(5);


    	return view("book_list")->with("book_lists",$book_lists);
        }











    }


    public function catch($id){



    	return "caught";


	}











}

