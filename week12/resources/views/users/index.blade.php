<!DOCTYPE html>
<html>
<head>
    <title>Users List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .btn {
            padding: 5px 10px;
            text-decoration: none;
            margin: 2px;
            border: none;
            cursor: pointer;
        }
        .btn-primary { background: #007bff; color: white; }
        .btn-info { background: #17a2b8; color: white; }
        .btn-warning { background: #ffc107; color: black; }
        .btn-danger { background: #dc3545; color: white; }
        .alert {
            padding: 10px;
            background: #d4edda;
            border: 1px solid #c3e6cb;
            color: #155724;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <h1>Users Management</h1>
    
    @if(session('success'))
        <div class="alert">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('users.create') }}" class="btn btn-primary">Add New User</a>
    
    <br><br>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <a href="{{ route('users.show', $user->id) }}" class="btn btn-info">View</a>
                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Edit</a>
                <form style="display: inline;" method="POST" action="{{ route('users.destroy', $user->id) }}" onsubmit="return confirm('Delete this user?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    @if($users->isEmpty())
        <p>No users found. <a href="{{ route('users.create') }}">Add the first user</a></p>
    @endif
</body>
</html> 