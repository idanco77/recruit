@extends('layouts.app')

@section('title', 'Create candidate')

@section('content')
        <h1>Create candidate</h1>
        <form method = "post" action = "{{action('CandidatesController@store')}}">
        @csrf 
        <div class="form-group">
            <label for = "name">Candiadte name</label>
            <input type = "text" class="form-control" name = "name">
        </div>     
        <div class="form-group">
            <label for = "email">Candiadte email</label>
            <input type = "text" class="form-control" name = "email">
        </div> 
        <div>
            <input type = "submit" name = "submit" value = "Create candidate">
        </div>                       
        </form>    
@endsection
