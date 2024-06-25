@extends('layouts.admin');

@section('content')

    <h2>{{$project->title}}</h2>
    <p><strong>Descrizione:</strong> {{$project->content}}</p>
    <p><strong>Data inizio:</strong> {{$project->start_date}}</p>
    <p><strong>Data fine:</strong> {{$project->end_date}}</p>

    <a class="btn btn-primary"  href="{{route('admin.projects.index')}}">Indietro</a>

@endsection