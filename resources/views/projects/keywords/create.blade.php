@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">New Keyword</div>

                <div class="card-body">
                    <div class="mt-3">
                        <form action="{{ route('projects.keywords.store', $project) }}" method="POST">
                            @csrf

                            <label for="">Keyword</label>
                            <br/>
                            <input type="text" name="keyword" class="form-control" value="{{ old('keyword', '') }}" required placeholder="Enter keyword"/>
                            <br />
                            <label for="">Repeat plan</label>
                            <br/>
                            <input type="number" class="form-control" name="repeat_plan" value="{{ old('repeat_plan', 1) }}" min="1" max="100">
                            <br/>
                            <br/>
                            <input type="submit" class="btn btn-primary" name="Create" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection