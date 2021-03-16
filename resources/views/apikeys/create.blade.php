@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create key</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('api-keys.store') }}">
                        @csrf
                        <label>Api Key:</label>
                        <br/>

                        @error('api_key')
                            <input type="text" class="form-control is-invalid" name="api_key" value="{{ old('api_key') }}" required/>

                            <div class="invalid-feedback">{{ $message }}</div>
                        @else
                            <input type="text" class="form-control" name="api_key" value="{{ old('api_key') }}" required/>
                        @enderror

                        <br/>
                        <input type="submit" class="btn btn-primary" value="Create" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
