<!DOCTYPE html>
<html>
<head>
	<title>Update Category</title>
     <link rel="stylesheet" href="/css/createUser.css">

</head>
<body>
        <center><h2>Update Category</h2></center>
        <div class="container">
		 <form action="{{'/category/edit/'.$categories->id}}" method="POST">
            @csrf
             @method("PATCH")
                <div class="inner-wrap">
                      <label class="space" >Your name category</label>  
                    <input type=" text" name="name"  value="{{$categories->name}}" />
                </div>
                <div class="button-section">
                    <button class="button" type="submit">Update category</button>
                </div>
        </form>
	   </div>
</body>
</html>