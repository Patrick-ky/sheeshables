<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <style>
button {  display: inline-block; background-color: #7822f1;padding: 20px;width: 200px;color: #ffffff;text-align: center; float:right}
.topnav {background-color: #333;overflow: hidden;}
.topnav a {float: left;color: #f2f2f2;text-align: center;padding: 14px 16px;text-decoration: none;font-size: 17px;}
.topnav a:hover {background-color: #ddd;color: black;}
.topnav a.active {background-color: #8caa04;color: white;}
.container {  max-width: 300px;    margin: 100px;    padding: 50px;    box-shadow: rgb(50, 76, 155);}
.form-group{    margin: bottom 300px;    padding: 100px;}
table, th, td {border: 1px solid black;}

</style>

  </head>
<body>

<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>


  <form action="/logout" method="POST">
    @csrf
  <button class="button">logout</button>
  </form>
</div>
<h1 style="text-align: center">Clients<h1>


  <form action="/addclient" method="GET">
    @csrf
  <button style="font-size: 12px">Add Clients</button>
  </form>
  <table style="width: 100%">
    <tr>
      <th>Name</th>
      <th>Cellphone Number</th>
      <th>Stall number</th>
      <th>Type of Stall</th>
      
    </tr>
    
    <tr>
      <td>Jenaica Lim      </td>
      <td>09987654321      </td>
      <td>9                </td>
      <td>Refreshment      </td>
    </tr>
   
  </table>
  <br><br>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>