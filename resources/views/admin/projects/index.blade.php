@extends('admin.home')

@section('content')
<div>
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

    <h1>Projects: <a href=""></a></h1>
    @foreach ($projects as $project)
        <div class="card w-75 my-5 m-auto text-center box my-shadow">
            <div class="card-header">
              <h4><strong>Project title:</strong> {{ $project->title }}</h4>

            </div>
            <div class="card-body">
                <h5 class="card-title"><strong>Project n°:</strong> {{ $project->id }}</h5>
                @if ($project->technology)
                    <h5 class="card-title">
                        <strong>Project technology:</strong> {{ $project->technology->id }}
                    </h5>
                @else
                    <p>Nessuna tecnologia utilizzata</p>
                @endif
                <p class="card-text"><strong>Project description:</strong> {{ $project->description }}</p>
                <a href="{{route('admin.project.show', $project)}}" class="btn btn-primary">More info</a>
            </div>
            <div class="card-footer text-muted">
                <strong><a href="{{ $project->website_url }}">See more on GitHub</a></strong>
            </div>
        </div>
    @endforeach
    <div class="m-3">
        {{ $projects->links() }}
    </div>
</div>

@endsection
