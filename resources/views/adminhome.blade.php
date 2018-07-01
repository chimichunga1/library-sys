@extends('layouts.master-bootstrap')


@section('content')
<div class="conainer" style="padding:10px;">
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="{{URL::asset('assets/img/book-mngmt.gif')}}" alt="Card image cap" style="height: 400px;">
    <div class="card-body">
      <h5 class="card-title">Book Management</h5>

      <p class="card-text">
        

        Manage All Books. Approve and Receive Books in the Circulation.


      </p>
      <div class="card-footer">


              <a href="/books" class="btn btn-primary col-md-12">
          <center>View Here</center>
            </a>
      </div>

  {{--     <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{URL::asset('assets/img/data.gif')}}" alt="Card image cap" style="height: 400px;">
    <div class="card-body">
      <h5 class="card-title">Metadata</h5>
      <p class="card-text">Manage all Metadatas</p><br>
      <div class="card-footer">


              <a href="/genre_list" class="btn btn-primary col-md-5">
          Genre
            </a>
              <a href="/section_list" class="btn btn-primary col-md-5">
          Sections
            </a>      
        </div>
{{--       <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{URL::asset('assets/img/account.gif')}}" alt="Card image cap" style="height: 400px;">
    <div class="card-body">
      <h5 class="card-title">Acount Management</h5>
      <p class="card-text">Manage both Admin and User Accounts.</p><br>


      <div class="card-footer">               
        <div class="row">

      
              <a href="/accountAdmin" class="btn btn-primary col-md-5">
                Admin
              </a>  &nbsp;
              <a href="/accountUser" class="btn btn-primary col-md-5">
                Users
              </a>  
         

        </div>
      </div>


      {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
    </div>
  </div>
</div>
</div>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">

        <a class="btn btn-primary col-md-12" href="/book_list"> View All Books </a>
        <a class="btn btn-primary col-md-12" href="/book_list"> View All Books </a>
        <a class="btn btn-primary col-md-12" href="/book_list"> View All Books </a>


    </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>




@endsection