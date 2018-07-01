@extends('layouts.master-bootstrap')


@section('content')



<br><br>

<div class="container">

           <form action="/section_list/{{$section_list->id }} " method="POST">
                @csrf
                @method('PUT')

                        <div class="col-md-12">
                        
                             <div>
                                    <label for="section-title" class="grey-text">Section Name:</label>
                                    <input type="text" id="section-title" class="form-control" name="section_name" placeholder="{{$section_list->section_name }}" required>

                            </div>
       


 


<br>

                <input type="submit" class="btn btn-success" value="SAVE">

                        </div>
               

         </form>











</div>



@endsection