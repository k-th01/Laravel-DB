<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Http Client</title>
</head>
<body>
    
   <header>User Data</header>

    <ul class="info-list">
        <li><span>Name:</span> <b>{{$info->name}}</b></li>
        <li><span>Username:</span> <b>{{$info->username}}</b></li>
        <li><span>Email:</span> <b>{{$info->email}}</b></li>
        <li><span>Address:</span> <b>{{$info->address->street}}, {{$info->address->suite}}, {{$info->address->city}}, {{$info->address->zipcode}}</b></li>
        <li><span>Phone:</span> <b>{{$info->phone}}</b></li>
        <li><span>Company:</span> <b>{{$info->company->name}}</b></li>
    </ul>
</body>
</html>

<style>

body {
    background-color: #FFFAFF;
}

header {
    text-align: center;
    font-size: 35px;
    font-weight: bold;
    margin: 20px 0;
    font-family: 'Arial', sans-serif;
    color: #0F1A2B;
}

.info-list {
        margin: 20px auto;
        text-align: center;
        list-style: none;
        padding: 20px;
        max-width: 400px;
        border: 2px solid #0F1A2B;
        border-radius: 10px;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        font-family:'Times New Roman', Times, serif;
    }
    
    .info-list li {
        justify-content: center;
        gap: 10px;
        padding: 10px 0;
        display: flex;
        justify-content: space-between;
        border-bottom: 1px solid #ddd;
    }

    .info-list li:last-child {
        border-bottom: none;
    }

    .info-list span {
        color: #0F1A2B;
        font-weight: bold;
    }

    .info-list b {
        color: #0F1A2B;
        font-weight: 500;
    }

</style>