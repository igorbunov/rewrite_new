@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Keyword</div>

                <div class="card-body">
                    <div class="mt-3">
                        <form action="{{ route('projects.keywords.update', [$project, $keyword]) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <label for="">Keyword</label>
                            <br/>
                            <input
                                type="text"
                                name="keyword"
                                value="{{ $keyword->keyword }}"
                                required
                                class="form-control"
                                placeholder="Enter keyword"/>
                            <br />
                            <label for="">Repeat plan</label>
                            <br/>
                            <input
                                type="number"
                                class="form-control"
                                name="repeat_plan"
                                value="{{ $keyword->repeat_plan }}"
                                min="1"
                                max="100">
                            <br/>
                            <br/>
                            <input type="submit" class="btn btn-primary" value="Update" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection