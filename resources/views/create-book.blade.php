@extends('layouts.master-bootstrap')


@section('content')



<div class="container">

           <form action="/book_list" method="POST">
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



                              <div class="form-group">
                                <label for="select-genre">Select Genre</label>
                                <select class="form-control" id="select-genre" name="book-genre" required>
                                                         @foreach($genre_lists as $genre_list)


                                                        <option value="{{ $genre_list->genre_name }}" >{{ $genre_list->genre_name }}</option>

                                                        @endforeach 
                                </select>
                              </div>
                    
                              <div class="form-group">
                                <label for="select-section">Select Section </label>
                                <select class="form-control" id="select-section"  name="book-section" required>
                                                         @foreach($section_lists as $section_list)


                                                        <option value="{{ $section_list->section_name }}">{{ $section_list->section_name }}</option>

                                                        @endforeach 
                                </select>
                              </div>


					                <input type="hidden" name="one" value="1">
					                 <input type="hidden" name="zero" value="0">      

                          

 
                <input type="submit" class="btn btn-success" value="ADD">

                        </div>
               

         </form>











</div>






@endsection