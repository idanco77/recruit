@extends('layouts.app')

@section('title', 'Candidates')

@section('content')
@if(Session::has('notallowed'))
<div class = 'alert alert-danger'>
    {{Session::get('notallowed')}}
</div>
@endif
<div><a href =  "{{url('/candidates/create')}}"> Add new candidate</a></div>
<h1>List of candidates</h1>
<table class = "table table-dark">
    <tr>
        <th>id</th><th>Name</th><th>Email</th><th>Owner</th><th>Status</th><th>Created</th><th>Updated</th>
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
            <td>
                <div class="dropdown">
                    @if (null != App\Status::next($candidate->status_id))
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @if (isset($candidate->status_id))
                           {{$candidate->status->name}}
                        @else
                            Define status
                        @endif
                    </button>
                    @else
                        @if (isset($candidate->status_id))
                            {{$candidate->status->name}}
                        @else
                            Define status
                        @endif
                    @endif

                    @if (App\Status::next($candidate->status_id) != null )
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        @foreach(App\Status::next($candidate->status_id) as $status)
                         <a class="dropdown-item" href="{{route('candidates.changestatus', [$candidate->id,$status->id])}}">{{$status->name}}</a>
                        @endforeach
                    </div>
                    @endif
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

