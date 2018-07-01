@extends('layouts.master-bootstrap')


@section('content')



<div class="container">

           <form action="/book_section" method="POST">
                @csrf
                        <div class="col-md-12">
                           
                             <div>
                                    <label for="book-title" class="grey-text">Book Title:</label>
                                    <input type="text" id="book-title" class="form-control" name="book-title" required>

                            </div>
                             <div>
                                    <label for="book-author" class="grey-text">Author: </label>
                                    <input type="text" id="book-author" class="form-control" name="book-author" required>

                            </div>
                            <div>
                                    <label for="book-description" class="grey-text">Description</label>
                                    <textarea type="text" id="book-description" class="form-control" name="book-desc" required>
                                    </textarea>

                            </div>          


                            <div>
                                    <label for="book-author" class="grey-text">Section: </label>

                                    <input type="hidden" name="book_section" value="{{ $id }}">

                                    <input type="text" id="book-author" class="form-control" name="book-sectionz" placeholder="{{ $id }}" value="{{ $id }}" disabled>

                            </div>    
                    
                              <div class="form-group">
                                <label for="select-section">Select Genre </label>
                                <select class="form-control" id="select-section"  name="book-genre" required>
                                                         @foreach($genre_lists as $genre_list)


                                                        <option value="{{ $genre_list->genre_name }}">{{ $genre_list->genre_name }}</option>

                                                        @endforeach 
                                </select>
                              </div>


 
                <input type="submit" class="btn btn-success" value="ADD">

                        </div>
               

         </form>











</div>






@endsection