<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Technoshine DB Diagram</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .table-box {
            border: 2px solid #0d6efd;
            border-radius: 0.5rem;
            padding: 1rem;
            background-color: #ffffff;
            min-width: 220px;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
            text-align: center;
        }

        .table-box:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 15px rgba(0,0,0,0.15);
        }

        .tables-row {
            display: flex;
            justify-content: center;
            margin-top: 3rem;
            flex-wrap: wrap;
            gap: 2rem;
            position: relative;
        }

        .connector {
            position: absolute;
            width: 2px;
            background-color: #0d6efd;
        }

        h1 {
            font-weight: bold;
        }

        table th, table td {
            vertical-align: middle !important;
        }
    </style>
</head>
<body>

<div class="container my-5">
    <h1 class="text-center mb-4">🔹 Technoshine DB</h1>

    {{-- Stats Cards --}}
    <div class="row mb-4 text-center">
        <div class="col-md-4 mb-2">
            <div class="p-3 bg-primary text-white rounded">
                <h5>Users</h5>
                <h3>{{ count($users) }}</h3>
            </div>
        </div>
        <div class="col-md-4 mb-2">
            <div class="p-3 bg-success text-white rounded">
                <h5>Projects</h5>
                <h3>{{ count($projects) }}</h3>
            </div>
        </div>
        <div class="col-md-4 mb-2">
            <div class="p-3 bg-warning text-dark rounded">
                <h5>Services</h5>
                <h3>{{ count($services) }}</h3>
            </div>
        </div>
    </div>

    {{-- Tables Row --}}
    <div class="tables-row">
        {{-- Users --}}
        <div class="table-box" onclick="toggleTable('usersTable')">
            <h5 class="fw-bold">Users</h5>
            <ul class="list-unstyled mb-0">
                <li>ID</li>
                <li>Name</li>
                <li>Email</li>
                <li>Created At</li>
            </ul>
        </div>

        {{-- Projects --}}
        <div class="table-box" onclick="toggleTable('projectsTable')">
            <h5 class="fw-bold">Projects</h5>
            <ul class="list-unstyled mb-0">
                <li>ID</li>
                <li>Label</li>
                <li>Before</li>
                <li>After</li>
                <li>User ID</li>
            </ul>
        </div>

        {{-- Services --}}
        <div class="table-box" onclick="toggleTable('servicesTable')">
            <h5 class="fw-bold">Services</h5>
            <ul class="list-unstyled mb-0">
                <li>ID</li>
                <li>Name</li>
                <li>Description</li>
            </ul>
        </div>
    </div>

    {{-- Connectors --}}
    <div style="position: relative; margin-top: 2rem; height: 50px;">
        <div style="position: absolute; left: calc(33% - 1px); top: 0; height: 50px; width: 2px; background-color: #0d6efd;"></div>
        <div style="position: absolute; left: calc(66% - 1px); top: 0; height: 50px; width: 2px; background-color: #0d6efd;"></div>
        <div style="position: absolute; left: 0; top: 25px; width: 100%; height: 2px; background-color: #0d6efd;"></div>
    </div>

    {{-- Tables Data --}}
    <div class="mt-5">
        @include('partials.users_table')
        @include('partials.projects_table')
        @include('partials.services_table')
    </div>
</div>

<script>
function toggleTable(id) {
    const tables = ['usersTable','projectsTable','servicesTable'];
    tables.forEach(t => {
        if(t === id){
            document.getElementById(t).classList.toggle('d-none');
        } else {
            document.getElementById(t).classList.add('d-none');
        }
    });
}
</script>

</body>
</html>