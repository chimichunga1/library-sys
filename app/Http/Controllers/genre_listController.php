<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\book_list;
use App\genre_list;
use App\section_list;
use Illuminate\Support\Facades\Auth;
class genre_listController extends Controller
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
        $genre_lists = genre_list::paginate(5);


    	return view("genre_list")->with("genre_lists",$genre_lists);
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

        $genre_list = new genre_list;
        $zero = "0";
        $genre_list->genre_name = $request->input('genre-name');
         $genre_list->isDeleted = $request->input('zero',$zero);      

        $genre_list->save();        

        $genre_lists = genre_list::paginate(5);


    	return view("genre_list")->with("genre_lists",$genre_lists);     

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



        return view("create-genre");
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






    }


    public function search_genre(Request $request){


        if($request['search'] !='')

        {
            $genre_lists = genre_list::orderBy('id','desc')->where('genre_name','LIKE','%'.$request['search'].'%')->paginate(5);


            return view('genre_list')->with('genre_lists',$genre_lists);


        }

        else
        {

        $genre_lists = genre_list::paginate(5);


    	return view("genre_list")->with("genre_lists",$genre_lists);
        }



    }








}
