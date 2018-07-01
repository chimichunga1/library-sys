@extends('layouts.master-bootstrap')

@section('content')


<div class="container">


	

		

		<form method="GET" action="search_genre">   


<div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
  <div class="btn-group" role="group" aria-label="First group">
		 	<a class="btn btn-success" href="/genre_list/create"><i class="fa fa-plus"> Add a Genre </i></a>

		 	&nbsp;<a class="btn btn-success" href="/genre_list"><i class="fa fa-plus"> Revert</i></a>

  </div>
		    <div class="input-group">
		      <span class="input-group-btn">
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
    <th>Name</th>


    <th>Actions</th>


</tr>

@foreach($genre_lists as $genre_list)




            <tr>

                 <td>{{ $genre_list->genre_name }}</td>


                  <td>

                    <div class="row">
                    <a class="btn btn-primary col-md-3" href="/genre_list/{{ $genre_list->id }}/edit"><i class="fa fa-edit"></i></a> &nbsp;


    {{--                 <a class="btn btn-primary col-md-3"><i class="fa fa-remove"></i></a> --}}
                    </div>

                  </td>





@endforeach

</tr>
</table>
<div class="text-center">
{{  $genre_lists->links()}}
</div>






</div>


@endsection