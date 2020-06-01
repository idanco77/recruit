@extends('layouts.app')

@section('title', 'Candidates')

@section('content')
                   
<div><a href =  "{{url('/candidates/create')}}"> Add new candidate</a></div>
<h1>List of candidates</h1>
<table class = "table table-dark">
    <tr>
        <th>id</th><th>Name</th><th>Email</th><th>Owner</th><th>Created</th><th>Updated</th>
    </tr>
    <!-- the table data -->
    @foreach($candidates as $candidate)
        <tr>
            <td>{{$candidate->id}}</td>
            <td>{{$candidate->name}}</td>
            <td>{{$candidate->email}}</td>
            <td>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @if(isset($candidate->user_id))
                          {{$candidate->owner->name}}  
                        @else
                          Assign owner
                        @endif
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    @foreach($users as $user)
                      <a class="dropdown-item" href="{{route('candidate.changeuser',[$candidate->id,$user->id])}}">{{$user->name}}</a>
                    @endforeach
                    </div>
                  </div>                
            </td>
            <td>{{$candidate->created_at}}</td>
            <td>{{$candidate->updated_at}}</td>
            <td>
                <a href = "{{route('candidates.edit',$candidate->id)}}">Edit</a>
            </td> 
            <td>
                    <a href = "{{route('candidate.delete',$candidate->id)}}">Delete</a>
            </td>                                                               
        </tr>
    @endforeach
</table>
@endsection

