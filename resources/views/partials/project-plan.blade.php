<div class="mt-3">
    <form action="{{ route('projects.update', $project) }}" method="POST">
        @csrf
        @method('PUT')

        <input type="hidden" name="name" value="{{ $project->name }}">

        <label for="">Project plan:</label>
        <br/>
        <textarea
            class="form-control"
            name="plan"
            rows="10"
            placeholder="Write you'r plan">{{ old('plan', $project->plan) }}</textarea>
        <br/>
        <input type="submit" value="Save" class="btn btn-primary">
    </form>
</div>