<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professors Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1>Professors Database</h1>
                    <div>
                        <a href="{{ route('users.index') }}" class="btn btn-outline-secondary me-2">Users</a>
                        <a href="{{ route('courses.index') }}" class="btn btn-outline-secondary me-2">Courses</a>
                    </div>
                </div>
                
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                <div class="alert alert-info">
                    <i class="bi bi-info-circle"></i> 
                    <strong>Database Setup Complete!</strong> This shows the 10 fake professors that were seeded into the database.
                </div>

                @if($professors->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Professor Name</th>
                                    <th>Created</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($professors as $professor)
                                <tr>
                                    <td>{{ $professor->id }}</td>
                                    <td>{{ $professor->name }}</td>
                                    <td>{{ $professor->created_at->format('M d, Y g:i A') }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="mt-3">
                        <div class="alert alert-success">
                            <i class="bi bi-check-circle"></i> 
                            <strong>Success!</strong> Found {{ $professors->count() }} professors in the database.
                        </div>
                    </div>
                @else
                    <div class="alert alert-warning">
                        <i class="bi bi-exclamation-triangle"></i> No professors found in database. 
                        Run: <code>php artisan db:seed --class=ProfessorSeeder</code>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
