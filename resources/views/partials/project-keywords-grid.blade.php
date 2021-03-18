<div class="mt-3">
    <a href="{{ route('project-keywords.create') }}" class="btn btn-primary">New key</a>
    <br/>
    <br/>

    <table class="table">
        <thead>
            <tr>
                <th scope="col" style="width: 50px;">#</th>
                <th scope="col">Name</th>
                <th scope="col" style="width: 70px;">Repeated</th>
                <th scope="col" style="width: 130px;"></th>
            </tr>
        </thead>
        <tbody>
            @forelse($project->projectKeywords as $keyword)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $keyword->keyword }}</td>
                <td>{{ $keyword->repeat_fact }} / {{ $keyword->repeat_plan }}</td>
                <td>
                    <a href="{{ route('project-keywords.edit', $keyword->id) }}" class="btn btn-sm btn-info">Edit</a>

                    <form
                        class="d-inline-flex"
                        onsubmit="return confirm('Are you sure?');"
                        method="POST"
                        action="{{ route('project-keywords.destroy', $keyword->id) }}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                    </form>
                </td>
            </tr>
            @empty
                <tr>
                    <td colspan="4">No keys found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>