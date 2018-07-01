@extends('layouts.master-bootstrap')


@section('content')


<div class="container">


	<div class="row">

			 <div class="card-deck col-md-6">
		      <div class="card">
		        <img class="card-img-top" src="{{URL::asset('assets/img/circulation.jpg')}}" alt="Card image cap">
		        <div class="card-body">
		          <h5 class="card-title">Circulations</h5>
		          <p class="card-text">Search for books in the Library Section.</p>

		          <div class="card-footer">

		           {{--  <a class="btn btn-primary col-md-12" href="lib_circulation">View here</a> --}}
		          </div>
		     {{--      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
		        </div>
		      </div>

		    </div>


		    <div class="col-md-6">

<div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Library Sections
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">

      	<ul>
      		


      		@foreach($section_lists as $section_list)

      		<li><a href="UserViewSection/{{ $section_list->section_name }}">{{ $section_list->section_name }}</a></li>


      		@endforeach

      	</ul>








      </div>
    </div>
  </div>

</div>







    		</div>


		</div>

</div>


@endsection