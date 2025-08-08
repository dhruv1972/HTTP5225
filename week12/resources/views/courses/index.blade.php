<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1>Courses Management</h1>
                    <div>
                        <a href="{{ route('users.index') }}" class="btn btn-outline-secondary me-2">Users</a>
                        <a href="{{ route('courses.create') }}" class="btn btn-primary">
                            <i class="bi bi-plus-circle"></i> Add New Course
                        </a>
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

                @if($courses->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Created</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($courses as $course)
                                <tr>
                                    <td>{{ $course->id }}</td>
                                    <td>{{ $course->name }}</td>
                                    <td>{{ Str::limit($course->description, 100) }}</td>
                                    <td>{{ $course->created_at->format('M d, Y') }}</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('courses.show', $course->id) }}" class="btn btn-info btn-sm">
                                                <i class="bi bi-eye"></i> View
                                            </a>
                                            <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-warning btn-sm">
                                                <i class="bi bi-pencil"></i> Edit
                                            </a>
                                            <form style="display: inline;" method="POST" action="{{ route('courses.destroy', $course->id) }}" 
                                                  onsubmit="return confirm('Are you sure you want to delete this course?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="bi bi-trash"></i> Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="alert alert-info">
                        <i class="bi bi-info-circle"></i> No courses found. 
                        <a href="{{ route('courses.create') }}" class="alert-link">Add the first course</a>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
