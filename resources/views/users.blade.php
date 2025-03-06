<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="Laravel.ico">
    <link rel="stylesheet" href="{{ asset('css/WelcomePage.css') }}">
    
    <title>Users List</title>
</head>
<body>
    
    <header>Users Lists</header>
    
    <!-- Display Data -->
    <!-- {{print_r($users)}} -->

    <!-- Display Database Data on UI Tutorial #27 -->
    <div class="t-1">
        <table border="3">
            <tr>
                <td>Name</td>
                <td>Email</td>
                <td>Phone</td>
            </tr>
            @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
            </tr>
            @endforeach
        </table>
    </div>
    
</body>
</html>

<style>

body {
    background-color: #D1CDC9;
}

header {
    text-align: center;
    font-size: 35px;
    font-weight: bold;
    margin: 20px 0;
    font-family: 'Arial', sans-serif;
    color: #0F1A2B;
}

.t-1 {
    width: 60%;
    margin: 20px auto;
    border-collapse: collapse;
    font-family: 'Fira Code', sans-serif;
    border: 2px solid #1C2E4A;
}

.t-1 table {
    width: 100%;
    border: 1px solid #0F1A2B;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
    background-color:rgb(240, 236, 227);
}

.t-1 th, .t-1 td {
    border: 2px solid #1C2E4A;
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

.t-1 tr:hover {
    background-color: #1C2E4A;
    color: #fff;
    transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
}

.t-1 th {
    background-color:rgb(255, 255, 255);
    color: white;
    text-transform: uppercase;
}

</style>
