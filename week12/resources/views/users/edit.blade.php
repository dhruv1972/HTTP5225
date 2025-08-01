<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
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
        .note {
            font-size: 12px;
            color: #666;
        }
    </style>
</head>
<body>
    <h1>Edit User</h1>

    <form method="POST" action="{{ route('users.update', $user->id) }}">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" value="{{ old('name', $user->name) }}" required>
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" value="{{ old('email', $user->email) }}" required>
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label>Password:</label>
            <input type="password" name="password" placeholder="Leave blank to keep current">
            <div class="note">Leave blank if you don't want to change password</div>
            @error('password')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Update User</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</body>
</html> 