<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\book_list;
use App\genre_list;
use App\section_list;
use Illuminate\Support\Facades\Auth;
use DB;
class book_listController extends Controller
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
    	$book_lists = book_list::paginate(10);
        $genre_lists = genre_list::all();
        $section_lists = section_list::all();

    
    	return view("book_list")->with("book_lists",$book_lists)->with("genre_lists",$genre_lists)->with("section_lists",$section_lists);
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
        $book_list->lib_sections = $request->input('book-section');



        $book_list->isBorrowed = $request->input('zero',$zero);
        $book_list->user_id = $request->input('zero',$zero);
        $book_list->times_borrowed = $request->input('zero',$zero);
        $book_list->save();




        $book_lists = book_list::paginate(10);
        $genre_lists = genre_list::all();
        $section_lists = section_list::all();

        return view("book_list")->with("book_lists",$book_lists)->with("genre_lists",$genre_lists)->with("section_lists",$section_lists);


    }










    	//adding 
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
        $book_lists = book_list::all();




       $genre_lists = genre_list::all();
        $section_lists = section_list::all();

     return view("create-book")->with("book_lists",$book_lists)->with("genre_lists",$genre_lists)->with("section_lists",$section_lists);


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

        $book_lists = book_list::paginate(10);
        $genre_lists = genre_list::all();
        $section_lists = section_list::all();

        return view("book_list")->with("book_lists",$book_lists)->with("genre_lists",$genre_lists)->with("section_lists",$section_lists);


        }

    }

    public function update (Request $request, $id){

        $user =  Auth::user()->admin;

        if($user == 0)
    {
        return redirect('home');
    }

    else
    {


        $book_list = book_list::find($id);
        $book_list->title = $request->book_title;
        $book_list->Author = $request->book_author;
        $book_list->book_desc = $request->book_desc;
        $book_list->Genre = $request->book_genre;    
        $book_list->lib_sections = $request->book_section;
        $book_list->save();
        
        $book_lists = book_list::paginate(10);
        $genre_lists = genre_list::all();
        $section_lists = section_list::all();

        return view("book_list")->with("book_lists",$book_lists)->with("genre_lists",$genre_lists)->with("section_lists",$section_lists);

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


        $book_list = book_list::find($id);




        $genre_lists = genre_list::all();
      
        $section_lists = section_list::all();        




        return view('edit')->with("book_list", $book_list)->with("genre_lists", $genre_lists)->with("section_lists",$section_lists);



    }




}


    public function search(Request $request){

        if($request['search'] !='')

        {
            $book_lists = book_list::orderBy('id','desc')->where('title','LIKE','%'.$request['search'].'%')->orWhere('Author','LIKE','%'.$request['search'].'%')->orWhere('Genre','LIKE','%'.$request['search'].'%')->orWhere('lib_sections','LIKE','%'.$request['search'].'%')->paginate(5);


            return view('book_list')->with('book_lists',$book_lists);


        }

        else
        {
        $book_lists = book_list::paginate(10);
        $genre_lists = genre_list::all();
        $section_lists = section_list::all();

        return view("book_list")->with("book_lists",$book_lists)->with("genre_lists",$genre_lists)->with("section_lists",$section_lists);
        }


    }

    public function deleteBook(Request $request){

         $delete = DB::table('book_lists')
                    ->where('id', '=', $request['book_id'])

                    ->delete();
                    

                    return back();       

    }    






}
