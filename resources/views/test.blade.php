<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if(session('message'))
        <h4>{{session('message')}}</h4>
    @endif
    <form action="{{$isEdit ? route('test.update',$specified_user->id) : route('user.create')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Name" value="{{$specified_user->name ?? null}}"><br>
        <span>{{$errors->first('name') ?? null}}</span><br>
        <input type="text" name="email" placeholder="Email" value="{{$specified_user->email ?? null}}"><br>
         <span>{{$errors->first('email') ?? null}}</span><br>
        <input type="password" name="password" placeholder="password"><br><br>
         <span>{{$errors->first('password') ?? null}}</span><br>
        <input type="submit" name="submit" value="SUBMIT">
    </form>
    <br>
    <table>
        <thead>
            <th>Name</th>  
            <th>Email</th>  
            <th>Edit</th>
            <th>Delete</th>
        </thead>
        <tbody>
            @foreach ($data as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td><a href="{{route('test.edit',$user->id)}}">Edit</a></td>
                    <td><a href="{{route('test.delete',$user->id)}}">Delete</a></td>
                </tr>
            @endforeach
            
        </tbody>
    </table>
</body>
</html>