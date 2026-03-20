<div id="servicesTable" class="table-responsive d-none mb-4">
    <h3>Services</h3>
    <table class="table table-striped table-bordered">
        <thead class="table-light">
            <tr>
                <th>ID</th><th>Name</th><th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
                <tr>
                    <td>{{ $service['id'] }}</td>
                    <td>{{ $service['name'] }}</td>
                    <td>{{ $service['description'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>