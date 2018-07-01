@extends('layouts.master-bootstrap')

@section('content')


<div class="container">


	
	<div class="row">
		

		<form method="GET" action="{{ route('userSearch') }}">   


		      @foreach($sections as $section)

		      <input type="hidden" name="section" value="{{$section->section_name}}">
		    
		      @endforeach
	</div>

  
<br>
<div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
  <div class="btn-group" role="group" aria-label="First group">
 <a class="btn btn-primary" href="javascript:history.back()"><i class="fa fa-undo"></i> Revert</a>
  
  </div>
  <div class="input-group">
        <div class="input-group">
          <span class="input-group-btn">         
          
            <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
          </span>


          
          <input type="text" class="form-control" placeholder="Search for..." name="search" required>
        </div><!-- /input-group --> 
  </div>
</div>

     </form>

</div>

<div class="container">




<br>
<table class="table">
    
<tr>
    <th>Book ID</th>
    <th>Title</th>
    <th>Author</th>
    <th>Genre</th>
    <th>Actions</th>

</tr>

@foreach($book_lists as $book_list)




            <tr>

                 <td>{{ $book_list->id }}</td>
                  <td>{{ $book_list->title }}</td>

                  <td>{{ $book_list->Author }}</td>
                  <td>{{ $book_list->Genre }}</td>
                  <td>

                    <div class="row">
                    <a class="btn btn-primary col-md-3" data-toggle="modal" data-target="#{{ $book_list->id }}" href="/book_list/{{ $book_list->id }}/edit"><i class="fa fa-eye"></i></a> &nbsp;

                    <form method="GET" action="{{ route('checkout') }}">   
                    
                    <input type="hidden" name="id" value="{{ $book_list->id }}">
                    <input type="hidden" name="section" value="{{ $book_list->lib_sections }}">

                    <input type="submit" class="btn btn-primary col-md-6" style="width: 200px;" value="Checkout">
                    
                	</form>
                    </div>

                  </td>



<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="{{ $book_list->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Book Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-6">


        	<h3>Title : {{ $book_list->title }} </h3>
        	<h3> Author :  {{ $book_list->Author }} </h3>
        	<h3> Genre :  {{ $book_list->Genre }} </h3>
        	<h3> Details :  {{ $book_list->book_desc }} </h3>





        </div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
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