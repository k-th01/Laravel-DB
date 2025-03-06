<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
</head>
<body>
    
    <header>Students List</header>
    <!-- {{print_r($info)}} -->

    <div class="t-1">
        <table border="1">
            <tr>
                <td>Name</td>
                <td>Email</td>
                <td>Batch</td>
            </tr>
            @foreach($info as $student)
            <tr>
                <td>{{$student->name}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->batch}}</td>
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