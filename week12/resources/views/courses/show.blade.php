<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">Course Details</h3>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-3 fw-bold">ID:</div>
                            <div class="col-md-9">{{ $course->id }}</div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-3 fw-bold">Name:</div>
                            <div class="col-md-9">{{ $course->name }}</div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-3 fw-bold">Description:</div>
                            <div class="col-md-9">{{ $course->description }}</div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-3 fw-bold">Professor:</div>
                            <div class="col-md-9">
                                @if($course->professor)
                                    <span class="badge bg-success">{{ $course->professor->name }}</span>
                                @else
                                    <span class="text-muted">No professor assigned</span>
                                @endif
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-3 fw-bold">Enrolled Students:</div>
                            <div class="col-md-9">
                                @if($course->users->count() > 0)
                                    <div class="mb-2">
                                        <span class="badge bg-info">{{ $course->users->count() }} students enrolled</span>
                                    </div>
                                    @foreach($course->users as $user)
                                        <div class="mb-1">
                                            <span class="badge bg-secondary me-2">{{ $user->name }}</span>
                                            <small class="text-muted">{{ $user->email }}</small>
                                        </div>
                                    @endforeach
                                @else
                                    <span class="text-muted">No students enrolled</span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-3 fw-bold">Created:</div>
                            <div class="col-md-9">{{ $course->created_at->format('F j, Y g:i A') }}</div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-3 fw-bold">Updated:</div>
                            <div class="col-md-9">{{ $course->updated_at->format('F j, Y g:i A') }}</div>
                        </div>
                        
                        <div class="d-flex gap-2">
                            <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-warning">
                                <i class="bi bi-pencil"></i> Edit
                            </a>
                            <a href="{{ route('courses.index') }}" class="btn btn-secondary">
                                <i class="bi bi-arrow-left"></i> Back
                            </a>
                            <form style="display: inline;" method="POST" action="{{ route('courses.destroy', $course->id) }}" 
                                  onsubmit="return confirm('Are you sure you want to delete this course?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <i class="bi bi-trash"></i> Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
