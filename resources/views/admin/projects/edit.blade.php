@extends('admin.home')

@section('content')
    <div class="container">
        <h1>Edit Project</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{route('admin.project.update', $projectToEdit->id)}}" method="POST" class="row g-3 p-3">
            @csrf
            @method('PUT')
            {{-- NAME --}}
            <div class="col-md-6">
              <label for="title" class="form-label">Name:</label>
              <input type="text" placeholder="Project name" class="form-control" name="title" id="title" value="{{ old('title', $projectToEdit->title) }}">
            </div>
            {{-- DATE --}}
            <div class="col-md-6">
              <label for="start_date" class="form-label">Project start date:</label>
              <input type="date" class="form-control" name="start_date" id="start_date" value="{{ old('start_date', $projectToEdit->start_date) }}">
            </div>
            {{-- DESCRIPTION --}}
            <div class="mb-3">
                <label for="description"  class="form-label">Description:</label>
                <textarea class="form-control" name="description" placeholder="Insert description" id="description" rows="3">{{ old('description', $projectToEdit->description) }}</textarea>
            </div>
            {{-- BTN --}}
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Save new project</button>
                <button type="reset" class="btn btn-warning">Annulla</button>
                <button class="btn btn-danger"><a class="text-decoration-none text-black" href="{{route('admin.project.show', $projectToEdit)}}">Exit</a></button>
            </div>
          </form>
    </div>
@endsection
