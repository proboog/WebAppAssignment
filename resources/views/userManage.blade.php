<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Management</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        html, body, h1, h2, h3, h4, h5, h6 {
            font-family: "Roboto", sans-serif;
        }

        h1 {
            font-size: 36px;
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            background-color: #4CAF50;
            color: white;
            margin-bottom: 30px;
        }

        table {
            font-family: Arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 12px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .delete-button {
            background-color: #f44336;
            color: white;
            padding: 8px 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .delete-button:hover {
            background-color: #d32f2f;
        }

        /* Top bar styles */
        .top-bar {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .top-bar a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
            transition: color 0.3s;
        }

        .top-bar a:hover {
            color: #4CAF50;
        }
    </style>
</head>
<body>

<!-- Top bar -->
<div class="top-bar">
    <div class="w3-bar w3-theme">
        <a href="/adminPage" class="w3-bar-item w3-button w3-right w3-padding-large">Home</a>
    </div>
</div>

<!-- Main content -->
<div class="w3-container w3-content" style="max-width: 800px; margin-top: 80px;">
    <h1>Delete User</h1>

    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        @foreach($users as $user)
            <tr>
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
</div>

<!-- JavaScript for delete confirmation -->
<script>
    function confirmDeleteUser() {
        return confirm("Are you sure you want to delete this user?");
    }
</script>

</body>
</html>
