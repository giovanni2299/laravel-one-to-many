@extends('layouts.app')

@section('content')
    <div class="row justify-content-center p-5">
        <div class="col-3">
            <div class="card">
                <div class="card-header">
                    ecco il progetto che hai visualizzato:
                    {{$project->title}}
                </div>
                <div class="card-body">
                    <p>
                        Slug:
                        {{$project->slug}}
                    </p>
                    <p>
                        Description:
                        {{$project->description}}
                    </p>
                    <p>
                        Type:
                        {{optional($project->type)->name}}
                    </p>

                    <div class="d-flex gap-2">
                        <a class="btn me-2 btn-primary" href="{{ route('admin.projects.edit', $project) }}">edita perogetto  </a>

                        <div id="form" class="d-flex justify-content-center align-items-center gap-4">

                            <button class="btn btn-danger" id="trash">Elimina progetto</button>
                        </div>
                        </div>
                        <script>
                            let trash = document.getElementById('trash')
                
                            trash.addEventListener('click', function() {
                
                                let form = document.getElementById('form')
                
                                let trashConf = confirm('Sei sicuro di volere eliminare?')
                                if (trashConf === true) {
                
                                    form.innerHTML +=
                                        `
                                          <form action="{{ route('admin.projects.destroy', $project) }}" method="POST">
                                          @method('DELETE')
                                          @csrf
                
                                          
                     
                                          <button type="submit" style="display:none;" id='confirm'>trash</button>
                
                                          </form>
                                        `
                                    let confirm = document.getElementById('confirm').click()
                
                                }
                
                
                            })
                        </script>
                
                
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection