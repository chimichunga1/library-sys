@extends('layouts.master-bootstrap')


@section('content')

<div class="container" style="padding:10px;">

		<div id="accordion">
		  <div class="card">
		    <div class="card-header" id="headingOne">
		      <h5 class="mb-0">
		        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
		          View All Books
		        </button>
		      </h5>
		    </div>

		    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
		      <div class="card-body">
		        

		      	Manage all books in the Library.


		      </div>
		      <div class="card-footer">
		        <center><a href="/book_list"> View all Books Here&nbsp; <i class="fa fa-chevron-right"></i></a></center>
		      </div>


		    </div>
		  </div>
		  <div class="card">
		    <div class="card-header" id="headingTwo">
		      <h5 class="mb-0">
		        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
		          View by Section
		        </button>
		      </h5>
		    </div>
		    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
		      <div class="card-body">
		        
		      	Manage All Books by Section : 

		      		<ul>

		      		@foreach($section_lists as $section_list)


		      		<li><a href="/book_section/{{ $section_list->section_name }}">{{ $section_list->section_name }}</a></li>


		      		@endforeach



		      		</ul>

		      </div>

		      <div class="card-footer">
	{{-- 	        <center><a href="/book_list"> View all Books Here&nbsp; <i class="fa fa-chevron-right"></i></a></center> --}}
		      </div>



		    </div>
		  </div>
		  <div class="card">
		    <div class="card-header" id="headingThree">
		      <h5 class="mb-0">
		        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
		          Circulations
		        </button>
		      </h5>
		    </div>
		    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
		      <div class="card-body">

		      	Manage the books that are currently borrowed by users.

		      </div>
		      <div class="card-footer">



		        <center>

		        	<a href="/LibCirculation"> View Library Circulation ( Borrow Requests )&nbsp; <i class="fa fa-chevron-right"></i></a>

		        	&nbsp;
					<a href="/LibReturn"> View Library Circulation ( Receive Returns )&nbsp; <i class="fa fa-chevron-right"></i></a>


		        </center>
		      



		      </div>


		      
		    </div>
		  </div>
		</div>

</div>

@endsection