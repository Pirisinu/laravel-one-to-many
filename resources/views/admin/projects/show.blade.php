@extends('admin.home')

@section('content')
    <div class="d-flex flex-column justify-content-between h-100 ">
        <div class="h-100 ">
            <h1 class="d-flex justify-content-evenly my-2">
                <strong>Project n°:{{$project->id}}</strong>
                <form action={{route('admin.project.destroy', $project)}} method="post" onsubmit="return confirm('Are you sure you want to delete this project?')">
                    <button class="btn btn-warning">
                        <a class="nav-link btn btn-warning" href="{{route('admin.project.edit', $project->id)}}"><i class="fa-sharp fa-solid fa-pen fa-bounce"></i></a>
                    </button>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        <i class="fa-solid fa-trash fa-bounce"></i>
                    </button>
                </form>
            </h1>
            <h2 class="text-center">
                <strong>Project name:</strong>
                {{$project->title}}
            </h2>
            <div>
                <h3>Description:</h3>
                <p>{{$project->description}}</p>
            </div>
            @include('partials.btn_next_prev')
        </div>
        <div class="bg-secondary text-center">Creation date: {{$project->start_date}}</div>
    </div>
@endsection
