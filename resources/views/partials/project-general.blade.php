<div class="mt-3">
    <form action="{{ route('projects.update', $project) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="">Project name:</label>
        <br/>
        <input type="text" class="form-control" name="name" required value="{{ $project->name }}">
        <br/>
        <input type="submit" value="Save" class="btn btn-primary">
    </form>
</div>