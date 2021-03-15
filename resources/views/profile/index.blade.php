@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">You'r profile</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div>
                        <a class="btn btn-primary" href="{{ route('profile.edit', auth()->id()) }}">Edit</a>
                    </div>

                    <div class="row mt-4">
                        <div class="col">

                        <p>Name: {{ $user->name }}</p>
                        <p>Email: {{ $user->email }}</p>

                        </div>
                    </div>
                    <br/>

                    {!! $apiKeysIndex !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
