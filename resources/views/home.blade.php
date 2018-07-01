@extends('layouts.master-bootstrap')


@section('content')

<div class="container">

    <div class="card-deck">
      <div class="card">
        <img class="card-img-top img-fluid" src="{{URL::asset('assets/img/lib-section.jpg')}}" alt="Card image cap" style="height: 400px;">
        <div class="card-body">
          <h5 class="card-title">Library Section</h5>
          <p class="card-text">Checkout the different Library Sections here! You can also request for a book lend in the Circulations. </p>

          <div class="card-footer">

            <a class="btn btn-primary col-md-12" href="lib_section"><center>Check it out Here</center></a>
          </div>
         {{--  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="{{URL::asset('assets/img/profile.gif')}}" alt="Card image cap" style="height: 400px;">
        <div class="card-body">
          <h5 class="card-title">My Profile</h5>
          <p class="card-text">View all the books you have currently borrowed.</p><br>

          <div class="card-footer">




            <a class="btn btn-primary col-md-12" href="userProfile"><center>View my Profile</center></a>
          </div>

       {{--    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
        </div>
      </div>

    </div>



</div>
{{-- 
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> --}}
@endsection