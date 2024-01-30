<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Add your head content here -->
</head>
<body>

<h1>User Management</h1>

<table>
    <tr>
        <th>User ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <form method="POST" action="{{ route('deleteUser', ['id' => $user->user_id]) }}" onsubmit="return confirmDeleteUser()">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete-button"><i class="fas fa-trash"></i> Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

<!-- JavaScript for delete confirmation -->
<script>
    function confirmDeleteUser() {
        return confirm("Are you sure you want to delete this user?");
    }
</script>

</body>
</html>