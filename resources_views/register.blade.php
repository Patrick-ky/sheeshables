<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>



</head>
<body>

        <h1  class="h1"> Register</h1>
    
    <form action="/register" method="POST">
            @csrf
            <div class="form-group">
            <input name="name" class="form-control" type="text" placeholder="Full name" >
           </div>

           <div class="form-group">
            <input name="email" class="form-control" type="email" placeholder="Email" >
            </div>   

            <div class="form-group">
            <input name="password" class="form-control" type="password" placeholder="Password" >
            </div>
            
            <div class="form-group"> 
            <button class="button">Register</button>
            </div>

    </form>
  
    <p class="h1"> Already have an account?<a class ="h1" href="{{url('login')}}"> login here </a> </p>
    
</body>
</html>

