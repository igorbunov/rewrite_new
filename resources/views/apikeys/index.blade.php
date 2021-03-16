<div class="row">
    <div class="col">

    <h4>Api Keys</h3>


    <a class="btn btn-primary" href="{{ route('api-keys.create') }}">Add key</a>
    <br/>
    <br/>

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

                    <form class="d-inline-flex" method="POST" action="{{ route('api-keys.destroy', $apiKey->id) }}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                    </form>
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
