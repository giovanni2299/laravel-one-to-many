@extends('layouts.app')

@section('content')

<div class="container p-3">
    <h1>Progetti di Giovanni Sorretnino</h1>
    <a href="{{route('admin.projects.create')}}" class="btn btn-primary">vai al create</a>
    <div class="row gx-2 gy-3">
        @foreach ($projects  as $project)
                <div class="col-3">
                    <div class="card h-100 p-3">
                        <div class="card-header bg-primary">
                            <div class="p-2">
                                <h3>
                                    Titolo:
        
                                </h3>
                                {{$project->title}}
                            </div>
    
                        </div>
    
                        <div class="card-body bg-light">
                            <div class="p-2">
                                <h3>
                                    Type:
        
                                </h3>
                                {{$project->type_id}}
                                <p>
                                    {{$project->type ? $project->type->name : ''}}
        
                                </p>
                            </div>
        
                            <div class="p-2">
                                <h3>
                                    look the project:
                                </h3>
                                <a href="{{route('admin.projects.show', $project)}}">{{$project->github_link}}</a>
        
                            </div>
                        </div>
    
                        </div>

                    </div>

            
        @endforeach
        
    </div>
</div>
    
@endsection