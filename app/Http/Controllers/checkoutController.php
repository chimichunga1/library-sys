<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\book_list;
use App\genre_list;
use App\section_list;
use Illuminate\Support\Facades\Auth;
class checkoutController extends Controller
{
    //

        public function checkout(Request $request)

    {




   
/*        $user =  Auth::user()->id;         
        
        $book_list = book_list::find($request['id']);


        $book_list->isBorrowed = $request->;
        $book_list->user_id = $request->$user;
        $book_list->save();
        
        return back();*/
        $user =  Auth::user()->id; 
		book_list::where('id',$request['id'] )
            ->update(['isBorrowed' => '1',

            			'user_id' =>$user,

        			]);

          return back();


           



    }




}
