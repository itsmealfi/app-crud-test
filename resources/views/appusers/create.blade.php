<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create a Data</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('appuser.add')}}">
        @csrf
        @method('post')
        <div>
            <label>ID</label>
            <input type="text" name="userid" placeholder="Enter ID" />
        </div>
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Enter name" />
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="email" placeholder="Enter email" />
        </div>
        <div>
            <label>Age</label>
            <input type="number" name="age" placeholder="Enter age" />
        </div>
        <div>
            <input type="submit" value="Save a New Data" />
        </div>
    </form>
</body>
</html>