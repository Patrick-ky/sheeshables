<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>login</title>


</head>
<body>


    <div class="container">
        <h1>Login</h1>
    
    <form action="/login" method="POST">
            @csrf
            <div>
            <input name="loginname" class="form-control" type="text" placeholder="Full name" >
            </div>
            <div>
            <input name="loginpassword" class="form-control" type="password" placeholder="Password" >
            </div>
            <button>login</button>
    </form>
    <p> No account?<a class ="nav-item nav-link" href="{{url('register')}}"> Register here </a> </p>
    </div>

    
</body>
</html>