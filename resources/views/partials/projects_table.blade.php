<div id="projectsTable" class="table-responsive d-none mb-4">
    <h3>Projects</h3>
    <table class="table table-striped table-bordered">
        <thead class="table-light">
            <tr>
                <th>ID</th><th>Label</th><th>Before</th><th>After</th><th>User ID</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->label }}</td>
                    <td><img src="{{ $project->before }}" width="80" /></td>
                    <td><img src="{{ $project->after }}" width="80" /></td>
                    <td>{{ $project->user_id ?? '-' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>