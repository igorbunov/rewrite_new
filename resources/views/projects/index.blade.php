@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Projects</div>

                <div class="card-body">
                    <a class="btn btn-primary" href="{{ route('projects.create') }}">New Project</a>

                    <br/>
                    <br/>

                    <div class="row">
                        <div class="col">
                            @forelse ($projects as $project)
                                <div>
                                    {{ $loop->iteration }}
                                    {{ $project->title }}
                                    {{ $project->created_at->toDateTimeString() }}
                                </div>
                            @empty
                                no projects.
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
