@extends('layouts.app')

@section('content')
    <div class="container">
        <ul>
            @forelse ($projects as $project)
                <li class="row">
                    <div class="col-auto">
                        <a href="{{route('projects.show',$project)}}">{{ $project->title }}</a>
                    </div>
                    <div class="col-auto d-flex">
                        <button class="btn btn-warning"><a href="{{ route('projects.edit',$project) }}">modifica</a></button>
                        <form action="{{route('projects.destroy',$project)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="elimina">
                        </form>
                    </div>
                </li>
            @empty
                <h1>Nessun progetto trovato!</h1>    
            @endforelse
        </ul>
    </div>
@endsection