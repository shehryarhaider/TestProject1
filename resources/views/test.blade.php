<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('user.create')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Name"><br>
        <input type="text" name="email" placeholder="Email"><br>
        <input type="password" name="password" placeholder="password"><br><br>
        <input type="submit" name="submit" value="SUBMIT">
    </form>
    <br>
    <table>
        <thead>
            <th>Name</th>  
            <th>Email</th>  
        </thead>
        <tbody>
            @foreach ($data as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                </tr>
            @endforeach
            
        </tbody>
    </table>
    <h3></h3>
    <h1>Test View</h1>
</body>
</html>