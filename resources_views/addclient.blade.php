<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center "> Add Client<h1>

        <form action="{{route('addclient.saveclient')}}" method="POST">
            @csrf 
            @method('post')

    <div>
        <label style="font-family: 'Courier New', Courier, monospace ">Stall owner Name: </label>
        <input name="Stall_owner_name" class="form-control" type="text" placeholder=" Enter Stall Owner name" >
      </div><br>

      <div>
        <label style="font-family: 'Courier New', Courier, monospace ">Phone Number: </label>
        <input name="'Cellphone_number" class="form-control" type="integer" placeholder=" Enter Cellphone number" >
      </div><br>

      <div>
        <label style="font-family: 'Courier New', Courier, monospace ">Stall number: </label>
        <input name="Stall_number" class="form-control" type="integer" placeholder=" Enter Stall number" >
      </div><br>

      <div>
        <label style="font-family: 'Courier New', Courier, monospace ">Stall type: </label>
        <input name="Stall_type" class="form-control" type="text" placeholder=" Enter Stall type">
      </div><br>

      <div>
        <input type="submit" value="Add new Client">
    </div>
    <a href="{{url('/')}}">Cancel </a>
      </form>
      </form>
    
</body>
</html>