@extends('layouts.app')

@section('title', 'Edit candidate')

@section('content')       
       <h1>Edit candidate</h1>
        <form method = "post" action = "{{action('CandidatesController@update',$candidate->id)}}">
        @csrf
        @METHOD('PATCH')
        <div class="form-group">
            <label for = "name">Candiadte name</label>
            <input type = "text" class="form-control" name = "name" value = {{$candidate->name}}>
        </div>     
        <div class="form-group">
            <label for = "email">Candiadte email</label>
            <input type = "text" class="form-control" name = "email" value = {{$candidate->email}}>
        </div> 
        <div>
            <input type = "submit" name = "submit" value = "Update candidate">
        </div>                       
        </form>    
    </body>
</html>
@endsection
