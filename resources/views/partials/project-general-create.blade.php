<div class="mt-3">
    <form action="{{ route('projects.store') }}" method="POST">
        @csrf

        <label for="">Project name:</label>
        <br/>
        <input type="text" class="form-control" name="name" required value="{{ old('name') }}">
        <br/>
        <input type="submit" value="Create" class="btn btn-primary">
    </form>
</div>