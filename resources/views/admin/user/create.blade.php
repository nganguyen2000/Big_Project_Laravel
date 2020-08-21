<!DOCTYPE html>
<html>
<head>
	<title>Add new user</title>
     <link rel="stylesheet" href="/css/createUser.css">

</head>
<body>
        <center><h2>Add New User</h2></center>
        <div class="container">
		 <form action="/user/create" method="POST">
             @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="inner-wrap">
                    <div class="label">
                      <label class="space" >Your Full Name</label>  
                    <input type=" text" name="name" />
                    </div>
                    <div class="label1">
                         <label  class="space1" >Your User Name</label>
                         <input type="text" name="username" />
                     </div>
                </div>
                <div class="inner-wrap">
                    <div class="label">
                       <label  class="space2">Email Address</label>
                        <input type="text" name="email" />
                    </div>
                    <div class="label2">
                         <label  class="space3">Phone Number </label>
                         <input type="text" name="phoneNumber" />
                     </div>
                </div>
                <div class="inner-wrap">
                    <div class="label">
                         <label  class="space4">Password  </label>
                         <input type="password" name="password" />
                    </div>
                    <div class="label3">
                        <label  class="space5">Address</label>
                         <input type="text" name="address"/>
                     </div>
                </div>
                <div class="button-section">
                    <button class="button" type="submit">Add new user</button>
                </div>
        </form>
	   </div>
</body>
</html>