@extends('layouts.admin');

@section('content')
    <div class="container">
        <h1>Lista progetti</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Titolo</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Data di inizio</th>
                    <th scope="col">Data di fine</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                <tr>
                    <th>{{$project->title}}</th>
                    <td>{{$project->content}}</td>
                    <td>{{$project->start_date}}</td>
                    <td>{{$project->end_date}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
