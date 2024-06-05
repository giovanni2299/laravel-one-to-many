@extends('layouts.app')

@section('content')

<div class="container p-3">
    <h1>Progetti di Giovanni Sorretnino</h1>
    <a href="{{route('admin.projects.create')}}" class="btn btn-primary">vai al create</a>
    <div class="row p-3">
        @foreach ($projects  as $project)
                <div class="col-3">
                    <p>{{$project->title}}</p>
                    <a href="{{route('admin.projects.show', $project)}}">{{$project->github_link}}</a>
                </div>
            
        @endforeach
        
    </div>
</div>
    
@endsection