@extends('layouts.master-bootstrap')

@section('content')


<div class="container">


	

		

		<form method="GET" action="search_admin">   

<div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
  <div class="btn-group" role="group" aria-label="First group">
		 	<a class="btn btn-success" href="/accountAdmin/create"><i class="fa fa-plus"> Create Admin </i></a>

		 	&nbsp;<a class="btn btn-success" href="/accountAdmin"><i class="fa fa-plus"> Revert</i></a>



  </div>
		    <div class="input-group">
		      <span class="input-group-btn">
		        <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
		      </span>
		      <input type="text" class="form-control" placeholder="Search for..." name="search" required>
    		</div><!-- /input-group -->	
</div>




		 </form>

</div>






<div class="container">




<br><br>
<table class="table">
    
<tr>
    <th>Account ID</th>
    <th>Name</th>
    <th>Email</th>

    <th>Actions</th>


</tr>

@foreach($users as $user)




            <tr>

                 <td>{{ $user->id }}</td>
                  <td>{{ $user->name }}</td>

                  <td>{{ $user->email }}</td>

                  <td>

                    <div class="row">
                    <a class="btn btn-primary col-md-5" href="/book_list/{{ $user->id }}/edit"><i class="fa fa-edit"></i></a> &nbsp;


        {{--             <a class="btn btn-primary col-md-3"><i class="fa fa-remove"></i></a> --}}
                    </div>

                  </td>





@endforeach

</tr>
</table>
<div class="text-center">
{{  $users->links()}}
</div>






</div>


@endsection