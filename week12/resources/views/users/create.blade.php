<!DOCTYPE html>
<html>
<head>
    <title>Add User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .form-group {
            margin: 15px 0;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="email"], input[type="password"] {
            width: 300px;
            padding: 8px;
            border: 1px solid #ddd;
        }
        .btn {
            padding: 8px 15px;
            margin: 5px;
            border: none;
            cursor: pointer;
        }
        .btn-success { background: #28a745; color: white; }
        .btn-secondary { background: #6c757d; color: white; }
        .error {
            color: red;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <h1>Add New User</h1>

    <form method="POST" action="{{ route('users.store') }}">
        @csrf
        
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" value="{{ old('name') }}" required>
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" value="{{ old('email') }}" required>
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label>Password:</label>
            <input type="password" name="password" required>
            @error('password')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Add User</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</body>
</html> 