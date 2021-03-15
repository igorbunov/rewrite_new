<div class="row">
    <div class="col">

    <h4>Api Keys</h3>

    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Api Key</th>
            <th scope="col" style="width: 150px;"></th>
            </tr>
        </thead>
        <tbody>
        @forelse($apiKeys as $apiKey)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $apiKey->api_key }}</td>
                <td>
                    <a href="{{ route('api-keys.edit', $apiKey->id) }}" class="btn btn-sm btn-info">Edit</a>
                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3">No keys found.</td>
            </tr>
        @endforelse
        </tbody>
        </table>
    </div>
</div>
