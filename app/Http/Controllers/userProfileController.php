<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\book_list;
use App\genre_list;
use App\section_list;
use App\user;
use DB;
use DateTime;
use Illuminate\Support\Facades\Auth;
class userProfileController extends Controller
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

                $user =  Auth::user()->id;
        $book_lists = DB::table('book_lists')
                ->leftJoin('users', 'book_lists.user_id', '=', 'users.id')
                ->select('book_lists.*', 'users.name', 'users.email')
                ->where('book_lists.isBorrowed','=','2')            
                ->where('book_lists.user_id','=',$user)         
                ->paginate(5);
                    

         return view ('userProfile')->with("book_lists",$book_lists);


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




    public function search_borrow(Request $request){




        if($request['search'] !='')

        {


  		$book_lists = DB::table('book_lists')
	            ->leftJoin('users', 'book_lists.user_id', '=', 'users.id')
	            ->select('book_lists.*', 'users.name', 'users.email')
	            ->where('book_lists.isBorrowed','=','2')            
	   	        ->where('book_lists.user_id','!=','0')   
	   	        ->where('title','LIKE','%'.$request['search'].'%')
	   	        ->orWhere('Author','LIKE','%'.$request['search'].'%')
	   	        ->orWhere('Genre','LIKE','%'.$request['search'].'%')
	   	        ->orWhere('lib_sections','LIKE','%'.$request['search'].'%')
	            ->paginate(5);          
            return view('LibCirculation')->with('book_lists',$book_lists);



        }

        else
        {

        	return back();

    	}
	}


    public function approveRequest(Request $request){




    	$date = new DateTime();

    	$book_lists = DB::table('book_lists')
            	     ->where('id', $request['book_id'])
                     ->update(['isBorrowed' => '2']);

		$insert = DB::table('book_borrows')->insert(
					  ['user_id' => $request['user_id'], 'book_id' => $request['book_id'], 'borrowed_on' => $date]
					);


		return back();
	}



    public function rejectRequest(Request $request){




   

    	$book_lists = DB::table('book_lists')
            	     ->where('id', $request['book_id'])
                     ->update(['isBorrowed' => '0','user_id' => '0']);


		return back();
	}






}