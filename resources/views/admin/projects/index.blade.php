@extends('layouts.admin');

@section('content')
    <div class="container">
        <div class="container d-flex justify-content-between align-items-center my-4">
            <h1>Lista progetti</h1>
            <a class="btn btn-primary" href="{{ route('admin.projects.create') }}">Crea un nuovo progetto</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Titolo</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Data di inizio</th>
                    <th scope="col">Data di fine</th>
                    <th scope="col"></th>


                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                <tr>
                    <th>{{$project->title}}</th>
                    <td>{{$project->content}}</td>
                    <td>{{$project->start_date}}</td>
                    <td>{{$project->end_date}}</td>
                    <td><a href="{{ route('admin.projects.show', ['project'=>$project->slug]) }}" class="btn btn-info">Dettagli</a></td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
