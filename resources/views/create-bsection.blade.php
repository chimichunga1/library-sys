@extends('layouts.master-bootstrap')


@section('content')



<div class="container">

           <form action="/genre_list" method="POST">
                @csrf
                        <div class="col-md-12">
                           
                             <div>
                                    <label for="book-title" class="grey-text">Genre Name</label>
                                    <input type="text" id="book-title" class="form-control" name="genre-name" required>

                            </div>






  <br>
                <input type="submit" class="btn btn-success" value="ADD">

                        </div>
               

         </form>











</div>






@endsection