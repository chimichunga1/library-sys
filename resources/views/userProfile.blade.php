@extends('layouts.master-bootstrap')

@section('content')


<div class="container">


	

		

		<form method="GET" action="search_borrow">   



	
	

		


		





<div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
  <div class="btn-group" role="group" aria-label="First group">
  &nbsp;<a class="btn btn-primary" href="javascript:history.back()"><i class="fa fa-undo"> Revert</i></a>
  
  </div>
        <div class="input-group">
          <span class="input-group-btn">
{{-- @foreach($book_lists as $book_list)
            <input  type="hidden" name="book_id" value="{{ $book_list->id }}"></input> 
            
@endforeach --}}
            <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
          </span>
          <input type="text" class="form-control" placeholder="Search for..." name="search">


        </div><!-- /input-group --> 
</div>




		 </form>

</div>

<div class="container">




<br><br>
<table class="table">
    
<tr>
    <th>Title</th>
    <th>Author</th>
    <th>Genre</th>
    <th>Section</th>
    <th>Actions</th>


</tr>

@foreach($book_lists as $book_list)




            <tr>

                 <td>{{ $book_list->title }}</td>
                  <td>{{ $book_list->Author }}</td>
                  <td>{{ $book_list->Genre }}</td>
                  <td>{{ $book_list->lib_sections }}</td>

                  <td>

                    <div class="row">
                    <a class="btn btn-primary col-md-3" data-toggle="modal" data-target="#view{{ $book_list->id }}" style="color:white;"><i class="fa fa-eye"></i></a> &nbsp;


                    <a class="btn btn-primary col-md-5" data-toggle="modal" data-target="#approve{{ $book_list->id }}" style="color:white;"><i class="fa fa-check"></i> Return Book</a>&nbsp;




                    </div>

                  </td>





<!-- Modal -->
<div class="modal fade" id="view{{ $book_list->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Book & Borrower Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<div class="row">
        <div class="col-md-6">


        	<h4>Title : {{ $book_list->title }} </h4>
        	<h4> Author :  {{ $book_list->Author }} </h4>
        	<h4> Genre :  {{ $book_list->Genre }} </h4>
        	<h4> Details :  {{ $book_list->book_desc }} </h4>





        </div>
        <div class="col-md-6">


        	<h4>Username : {{ $book_list->name }} </h4>
        	<h4>Email :  {{ $book_list->email }} </h4>






        </div>

    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>




<!-- Modal -->
<div class="modal fade" id="approve{{ $book_list->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Return Request</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


      	Would you like to Return this book?



      </div>
      <div class="modal-footer">

		<form method="GET" action="{{ route('returnRequest') }}">   



		<input type="hidden" name="user_id" value="{{ $book_list->user_id }}">
		<input type="hidden" name="book_id" value="{{ $book_list->id }}">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
       	<input type="submit" class="btn btn-primary" name="approve" value="Yes"> 



       </form>

      </div>
    </div>
  </div>
</div>


	




@endforeach

</tr>
</table>














<div class="text-center">
{{  $book_lists->links()}}
</div>






</div>


@endsection