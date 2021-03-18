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
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Create date</th>
                                    <th>Hours spend</th>
                                    <th></th>
                                </tr>

                                @forelse ($projects as $project)
                                    <tr>
                                        <td>{{ $project->id }}</td>
                                        <td>{{ $project->name }}</td>
                                        <td>{{ $project->created_at->format('d.m.Y H:i') }}</td>
                                        <td>{{ $project->working_hours }}</td>
                                        <td>
                                            <a class="btn btn-sm btn-info" href="{{ route('projects.show', $project->id) }}">View</a>
                                            {{-- <a class="btn btn-sm btn-danger">Delete</a> --}}
                                        </td>
                                    </tr>
                                @empty
                                    <tr><td colspan="4">no projects.</td></tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <br/>

                    <div class="d-flex justify-content-center">
                        {{ $projects->onEachSide(1)->links('vendor.pagination.bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
