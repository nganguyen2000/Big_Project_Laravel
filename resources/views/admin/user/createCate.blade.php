<!DOCTYPE html>
<html>
<head>
	<title>Add new user</title>
     <link rel="stylesheet" href="/css/createUser.css">

</head>
<body>
        <center><h2>Add New Categogry</h2></center>
        <div class="container">
		 <form action="/category/create" method="POST">
             @csrf
                <div class="inner-wrap">
                      <label class="space" >Name Category</label>  
                      <input type=" text" name="name" />
                </div>
                <div class="button-section">
                    <button class="button" type="submit">Add new category</button>
                </div>
        </form>
	   </div>
</body>
</html>