@extends('layouts.master-bootstrap')

@section('content')


<div class="container">


	
	<div class="row">
		

		<form method="GET" action="search">   

		<div class="row">

		<div class="col-md-6">	
		 	<a class="btn btn-success" href="/book_list/create"><i class="fa fa-plus"> Add a Book </i></a>

		 	&nbsp;<a class="btn btn-success" href="/book_list"><i class="fa fa-plus"> Revert</i></a>


		 </div>

		 <div class="col-md-6">

		    <div class="input-group">
		      <span class="input-group-btn">
		        <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
		      </span>
		      <input type="text" class="form-control" placeholder="Search for..." name="search">
    		</div><!-- /input-group -->	

		</div>

		</div>



		 </form>
	</div>
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

                  <td style="width: 200px;">

                    <div class="row">
                    <a class="btn btn-primary col-md-3" href="/book_list/{{ $book_list->id }}/edit"><i class="fa fa-edit"></i></a> &nbsp;

	 
		<form method="GET" action="{{ route('deleteBook') }}">   



		
		<input type="hidden" name="book_id" value="{{ $book_list->id }}">
     
       	<input type="submit" class="btn btn-primary" name="approve" value="Delete"> 



       </form>
                    



                    </div>

                  </td>





@endforeach

</tr>
</table>
<div class="text-center">
{{  $book_lists->links()}}
</div>






</div>


@endsection