@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('admin.projects.update', $project)}}" method="POST">

        @csrf

        @method('PUT')

        <div class="mb-3">
            <div>
                <label for="title">Titolo:</label>
            </div>
            <input type="text" name="title" id="title" class="form-control" placeholder="Titolo del Progetto" value="{{$project->title}}">
        </div>

        <div class="mb-3">
            <div>
                <label for="type_id">Type:</label>
            </div>
            <select name="type_id" id="type_id">
                <option value="">--SELECT TYPE--</option>
                @foreach ($types as $type)
                <option  value="{{$type->id}}">{{$type->name}}</option>
                    
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <div>
                <label for="title">Descrizione:</label>
            </div>
            <input type="text" name="description" id="description" class="form-control" placeholder="Descrizione progetto" value="{{$project->description}}">
        </div>

        <div class="mb-3">
            <div>
                <label for="title">Link Git:</label>
            </div>
            <input type="text" name="github_link" id="github_link" class="form-control" placeholder="Link per GitHub" value="{{$project->github_link}}">
        </div>

        <button class="btn btn-primary">salva</button>

    </form>
</div>
@endsection