<div id="usersTable" class="table-responsive d-none mb-4">
    <h3>Users</h3>
    <table class="table table-striped table-bordered">
        <thead class="table-light">
            <tr>
                <th>ID</th><th>Name</th><th>Email</th><th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>