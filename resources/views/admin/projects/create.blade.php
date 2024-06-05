@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route('admin.projects.store')}}" method="POST">

            @csrf
            <div class="mb-3">
                <div>
                    <label for="title">Titolo:</label>
                </div>
                <input type="text" name="title" id="title" class="form-control" placeholder="Titolo del Progetto">
            </div>

            <div class="mb-3">
                <div>
                    <label for="title">Descrizione:</label>
                </div>
                <input type="text" name="description" id="description" class="form-control" placeholder="Descrizione progetto">
            </div>

            <div class="mb-3">
                <div>
                    <label for="title">Link Git:</label>
                </div>
                <input type="text" name="github_link" id="github_link" class="form-control" placeholder="Link per GitHub">
            </div>

            <button class="btn btn-primary">Crea</button>

        </form>
    </div>
@endsection