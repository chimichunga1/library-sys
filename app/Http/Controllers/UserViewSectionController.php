<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\book_list;
use App\genre_list;
use App\section_list;
use Illuminate\Support\Facades\Auth;
class UserViewSectionController extends Controller
{
    //


    public function index(){

        $user =  Auth::user()->admin;

        if($user == 1)
    {
        return redirect('home');
    }

    else
    {

    }
}


    public function store(Request $request){


    $user =  Auth::user()->admin;

        if($user == 1)
    {
        return redirect('home');
    }

    else

    {

 

    }

}


    public function create(){
    	//showing of add form
        $user =  Auth::user()->admin;

        if($user == 1)
    {
        return redirect('home');
    }

    else
    {



 
    }
}

    public function show ($id){
        $user =  Auth::user()->admin;

        if($user == 1)
    {
        return redirect('home');
    }


    else
    {

		$book_lists = book_list::where('lib_sections', '=', $id)->where('isBorrowed','=','0')->paginate(5);
        $sections = section_list::where('section_name','=',$id)->get();


        return view('UserViewSection')->with('book_lists',$book_lists)->with("sections",$sections);


    }

}

    public function update (Request $request, $id){

            $user =  Auth::user()->admin;

        if($user == 1)
    {
        return redirect('home');
    }


    	else
    	{
    
    	}
}


    public function destroy($id){

            $user =  Auth::user()->admin;

        if($user == 1)
    {
        return redirect('home');
    }



}

    public function edit($id){

/*                $users = DB::table('users')->select('name', 'email')->get();
  

                 return view('edit')->with("users", $users);
*/






    }




    public function search(Request $request){




        if($request['search'] !='')

        {


            $book_lists = book_list::where('lib_sections', '=', $request['section'])->where('title','LIKE','%'.$request['search'].'%')->orWhere('Author','LIKE','%'.$request['search'].'%')->orWhere('Genre','LIKE','%'.$request['search'].'%')->paginate(10);
            $sections = section_list::where('section_name','=',$request['section']);
           
            return view('UserViewSection')->with('book_lists',$book_lists)->with("sections",$sections);






        }

        else
        {

		$book_lists = book_list::where('lib_sections', '=', $id)->paginate(5);
        $sections = section_list::where('section_name','=',$request['section']);


        return view('UserViewSection')->with('book_lists',$book_lists)->with("sections",$sections);

    	}
	}
}