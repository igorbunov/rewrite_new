@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">New Project</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('projects.store') }}">
                        @csrf

                        <label for="project-name">Name</label>
                        <input type="text" id="project-name" name="name" class="form-control"/>

                        <br />

                        @include('partials.project-keys-grid')

                        <br/>
                        <input type="submit" class="btn btn-primary" value="Create" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection