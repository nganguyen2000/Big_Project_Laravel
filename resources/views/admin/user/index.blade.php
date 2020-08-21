<!DOCTYPE html>
<html>
<head>
	<title>Manage User</title>
     <link rel="stylesheet" href="/css/indexUser.css">
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="container">
        <div class="header">
            @include('partials/header')
        </div>
        <div class="content">
            <div class="left">
                <div class="tab">
                  <button class="tablinks" onclick="openCity(event, 'London')">User management</button></br>
                  <button class="tablinks" onclick="openCity(event, 'Paris')">Product management</button></br>
                  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Category management</button></br>
                </div>
            </div>
            <div class="right">
                   <center><h1>Welcome to admin</h1></center>
                   <div id="London" class="tabcontent">
                            <h1>User Management</h1>
                             <div class="table">
                                 <table border="1px">
                                      <tr>
                                        <th>Id User</th>
                                        <th>User name</th>
                                        <th>Full name</th>
                                        <th>Email</th>
                                        <th>Phone number</th>
                                        <th>Address</th>
                                        <th>Money</th>
                                        <th>Role</th>
                                        <th>Delete</th>
                                      </tr>
                                      @foreach($users as $users)
                                            <tr>
                                                <td>{{$users->id}}</td>
                                                <td>{{$users->username}}</td>
                                                <td>{{$users->name}}</td>
                                                <td>{{$users->email}}</td>
                                                <td>{{$users->phoneNumber}}</td>
                                                <td>{{$users->address}}</td>
                                                <td>{{$users->money}}</td>
                                                <td>{{$users->role}}</td>
                                                <td>
                                                    <form action="{{'/user/delete/'.$users->id}}" method="POST">
                                                        @csrf
                                                        @method("DELETE")
                                                        <button type="submit" class="btd">Delete</button>

                                                    </form>
                                                </td>
                                            </tr>
                                  @endforeach
                            </table>
                              <form action="/user/create" method="get">
                                @csrf
                                <button type="submit" class="add">
                                Add new user
                                </button>
                            </form>
                        </div>
                    </div>
                    <div id="Paris" class="tabcontent">
                      <h3>Management Products</h3>
                        <div class="table">
                                 <table border="1px">
                                      <tr>
                                        <th>Id Product</th>
                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <th>Old Price</th>
                                        <th>Image</th>
                                        <th>Quantity</th>
                                        <th>Category_id</th>
                                        <th>User_id</th>
                                        <th>Delete</th>
                                      </tr>
                                      @foreach($products as $product)
                                            <tr>
                                                <td>{{$product->id}}</td>
                                                <td>{{$product->name}}</td>
                                                <td>{{$product->price}}</td>
                                                <td>{{$product->oldPrice}}</td>
                                                <td><img src="{{$product->image}}" alt="" height="150px" width="150px"></td>
                                                <td>{{$product->quantity}}</td>
                                                <td>{{$product->category_id}}</td>
                                                <td>{{$product->user_id}}</td>
                                                <td>
                                                    <form action="{{'/product/delete/'.$product->id}}" method="POST">
                                                        @csrf
                                                        @method("DELETE")
                                                        <button type="submit" class="btd">Delete</button>

                                                    </form>
                                                </td>
                                            </tr>
                                  @endforeach
                            </table>
                          </div>
                    </div>

                    <div id="Tokyo" class="tabcontent">
                       <h3>Management Categories</h3>
                        <div class="table">
                                 <table border="1px">
                                      <tr>
                                        <th>Id Category</th>
                                        <th>Name Category</th>
                                        <th>Delete</th>
                                        <th>Edit</th>
                                      </tr>
                                      @foreach($categories as $category)
                                            <tr>
                                                <td>{{$category->id}}</td>
                                                <td>{{$category->name}}</td>
                                                <td>
                                                    <form action="{{'/category/delete/'.$category->id}}" method="POST">
                                                        @csrf
                                                        @method("DELETE")
                                                        <button type="submit" class="btd">Delete</button>

                                                    </form>
                                                </td>
                                                <td>
                                                   <form action="{{'/category/edit/'.$category->id}}" method="GET">
                                                        @csrf
                                                       <button type="submit" class="bte">Edit</button>
                                                    </form>
                                                </td>
                                            </tr>
                                  @endforeach
                            </table>
                             <form action="/category/create" method="get">
                                @csrf
                                <button type="submit" class="add">
                                Add new category
                                </button>
                            </form>
                          </div>
                    </div>  
           </div>

        </div>
        <div class="footer">
            @include('partials/footer')
        </div>
     </div>

     <script>
        function openCity(evt, cityName) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(cityName).style.display = "block";
          evt.currentTarget.className += " active";
        }
     </script>
</body>
</html>