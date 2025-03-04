<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Update a Data</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('appuser.update', ['appuser' => $appuser])}}">
        @csrf
        @method('put')
        <div>
            <label>ID</label>
            <input type="text" name="userid" placeholder="Enter ID" value="{{$appuser->userid}}"/>
        </div>
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Enter name" value="{{$appuser->name}}"/>
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="email" placeholder="Enter email" value="{{$appuser->email}}"/>
        </div>
        <div>
            <label>Age</label>
            <input type="number" name="age" placeholder="Enter age" value="{{$appuser->age}}"/>
        </div>
        <div>
            <input type="submit" value="Update" />
        </div>
    </form>
</body>
</html>