<!DOCTYPE html>
<html>
<head>
    <title>User Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .detail {
            margin: 10px 0;
            padding: 10px;
            background: #f9f9f9;
            border: 1px solid #ddd;
        }
        .label {
            font-weight: bold;
        }
        .btn {
            padding: 8px 15px;
            margin: 5px;
            border: none;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }
        .btn-warning { background: #ffc107; color: black; }
        .btn-secondary { background: #6c757d; color: white; }
        .btn-danger { background: #dc3545; color: white; }
    </style>
</head>
<body>
    <h1>User Details</h1>

    <div class="detail">
        <div class="label">ID:</div>
        <div>{{ $user->id }}</div>
    </div>

    <div class="detail">
        <div class="label">Name:</div>
        <div>{{ $user->name }}</div>
    </div>

    <div class="detail">
        <div class="label">Email:</div>
        <div>{{ $user->email }}</div>
    </div>

    <div class="detail">
        <div class="label">Password:</div>
        <div>••••••••••••</div>
    </div>

    <br>
    
    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Edit</a>
    <a href="{{ route('users.index') }}" class="btn btn-secondary">Back</a>
    
    <form style="display: inline;" method="POST" action="{{ route('users.destroy', $user->id) }}" onsubmit="return confirm('Delete this user?')">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</body>
</html> 