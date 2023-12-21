@extends('layouts.app')

@section('content')
    <div class="container">
            <h1>{{ $project->title }}</h1>
            <figure><img src="{{ $project->image }}" alt=""></figure>
            <p>{{ $project->description }}</p>
    </div>
@endsection