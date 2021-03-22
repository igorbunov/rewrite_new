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
                                            <a class="btn btn-sm btn-secondary" href="{{ route('projects.show', $project->id) }}">Work</a>
                                            <a class="btn btn-sm btn-info" href="{{ route('projects.edit', $project->id) }}">Edit</a>
                                            <form
                                                class="d-inline-flex"
                                                onsubmit="return confirm('Are you sure?');"
                                                method="POST"
                                                action="{{ route('projects.destroy', $project->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                            </form>
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
                        {{ $projects->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
