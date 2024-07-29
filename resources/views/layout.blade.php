<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel CRUD</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        a {
            text-decoration: none;
            color: #007bff;
        }
        a:hover {
            text-decoration: underline;
        }
        form {
            margin-top: 20px;
        }
        input, textarea, select {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            margin-top: 10px;
            padding: 05px 10px;
            border: none;
            background-color: #ee3a1f;
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #da230f;
        }

        .btn2{
            margin-top: 10px;
            padding: 10px 20px;
            border: none;
            background-color: #0eb8ff;
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }
        .btn2:hover{
            background-color: #0e88ff;
        }
    </style>
</head>
<body>
    <nav>
        <a href="{{ route('users.index') }}">Usuários</a> |
        <a href="{{ route('posts.index') }}">Posts</a>
    </nav>
    <hr>
    @yield('content')
</body>
</html>