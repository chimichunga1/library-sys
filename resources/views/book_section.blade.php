@extends('layouts.master-bootstrap')


@section('content')

<div class="container">

	<div style="padding:20px;">
	
	
		

<form method="GET" action="search">  

	
		<div class="col-md-12">	
			<center>
			@foreach($section_lists as $section_list)
				

		 	<a class="btn btn-success col-md-5" href="/CreateInSection/{{ $section_list ->section_name }}"><i class="fa fa-plus"> Add a Book for this Section </i></a>
			
		 	&nbsp;<a class="btn btn-success col-md-5" href="/book_section/{{ $section_list ->section_name }}"><i class="fa fa-plus"> Revert</i></a>
	
		 	</center>

		 </div>
<br>		
 
		 <div class="col-md-12">

		    <div class="input-group">
		      <span class="input-group-btn">
		        <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
		      </span>

		      <input type="hidden" name="get_section" value="{{ $section_list ->section_name }}">
		      <input type="text" class="form-control" placeholder="Search for..." name="search">
    		</div><!-- /input-group -->	

		</div>

	 	@endforeach


		 </form>
	
	</div>

</div>



<div class="container">
	<div style="padding:20px;">
		<table class="table">
			

			<tr>
				<th>Books</th>
				<th>Actions</th>				
			</tr>





			@foreach($book_lists as $book_list)
				<tr>
					<td>{{ $book_list ->title }}</td>

					<td>
                    <div class="row">
                    <a class="btn btn-primary col-md-3" href="/book_list/{{ $book_list->id }}/edit"><i class="fa fa-edit"></i></a> &nbsp;


                    <a class="btn btn-primary col-md-3"><i class="fa fa-remove"></i></a>
                    </div>
                </td>

				</tr>

			@endforeach
		</table>

<div class="text-center">
{{  $book_lists->links()}}
</div>




	</div>
</div>





@endsection