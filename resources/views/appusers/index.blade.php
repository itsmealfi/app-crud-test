<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>App User</h1>
    <div>
        <form method="get" action="{{route('appuser.search')}}">
            <input type="text" name="query" placeholder="Search by User ID">
            <button type="submit">Search</button>
        </form>
    </div>

    <div>
        @if(session()->has('success'))
        <div>
            {{session('success')}}
        </div>
        @endif
    </div>

    <div>
        <div>
            <a href="{{route('appuser.create')}}">Create a New Data</a>
        </div>

        @if(isset($message))
            <p>{{ $message }}</p>
        @elseif($appusers->isEmpty())
            <p>No users found.</p>
        @else

            <table border="1">
                <tr>
                    <th>No.</th>
                    <th>User ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Update</th>
                    <th>Delete</th>

                </tr>
                @foreach($appusers as $index => $appuser)
                    <tr>
                        <td>{{$index + 1}}</td>
                        <td>{{$appuser->userid}}</td>
                        <td>{{$appuser->name}}</td>
                        <td>{{$appuser->email}}</td>
                        <td>{{$appuser->age}}</td>
                        <td>
                            <a href="{{route('appuser.edit', ['appuser' => $appuser])}}">Update</a>
                        </td>
                        <td>
                            <form method="post" action="{{route('appuser.delete', ['appuser' => $appuser])}}">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete" />
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        @endif

        @if(request()->has('query')) 
            <div>
                <a href="{{route('appuser.index')}}">
                    <button>Back</button>
                </a>
            </div>
        @endif
    </div>
</body>
</html>