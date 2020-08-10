<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		  <tr>
		    <th>Id User</th>
		    <th>User name</th>
		    <th>Full name</th>
		    <th>Email</th>
		    <th>Password</th>
		    <th>Phone number</th>
		    <th>Address</th>
		    <th>Money</th>
		    <th>Delete</th>
            <th>Edit</th>
		  </tr>
		  @foreach($users as $users)
                    <tr>
                        <td>{{$users->id}}</td>
                        <td>{{$users->username}}</td>
                        <td>{{$users->password}}</td>
                        <td>{{$users->name}}</td>
                        <td>{{$users->role}}</td>
                        <td>
                            <form action="{{'/user/index/'.$users->id}}" method="POST">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btd">Delete</button>

                            </form>
                        </td>
                        <td>
                            <form action="{{'/user/index/'.$users->id.'/edit'}}" method="GET">
                                @csrf
                                <button type="submit" class="bte">Edit</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
</table>

</body>
</html>