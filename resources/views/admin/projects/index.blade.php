@extends('layouts.admin')

@section('content')
    <h1>Index </h1>
    <div>
        <a class="btn btn-success" href="{{ route('admin.projects.create') }}">Crea</a>
    </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Contenuto</th>
            <th scope="col">Slug</th>
            <th scope="col">Azioni</th>   
          </tr>
        </thead>
        <tbody>
            @foreach ($projectsArray as $curProject)
            <tr>
              <th scope="row">{{ $curProject->id }}</th>
              <td>{{ $curProject->title }}</td>
              <td>{{$curProject->content}}</td>
              <td>{{$curProject->slug}}</td>
              <td>
              </td>
            </tr>
                
            @endforeach
        </tbody>
      </table>
@endsection