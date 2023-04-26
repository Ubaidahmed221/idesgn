
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include('css.php');
       ?>
    <title>Hello, world!</title>
  </head>
  <style>
    .sidebar{
      list-style: none;
      margin-right: 25px;
      padding: 5px;
      padding-top: 20px;
      height: auto;

    }
    .sidebar ul li{
      background-color: white;
      margin-top: 30px;
      padding: 10px;
    }
    .sidebar ul li:hover{
      background-color: #ccc;
      cursor: pointer;
    }
    .sidebar ul li a{
      color: black;
      text-decoration: none;
    }
    .sidebar h3 a{
      text-decoration: none;
      color: #fff;
    }
    .bg-dark{
      height: auto;
      margin: 0;

    }
  </style>
  <body>
  <div class="bg-dark" style="width: 260px; ">
  <nav class="sidebar">
    <h3 class="text-white ms-5"><a href="dashboard.php">Dashboard</a> </h3>
    <ul>
      <li><a href="listpro.php">List Project</a></li>
      <li><a href="addpro.php">Add Project</a></li>
      <li><a href="listlogo.php">List logo </a></li>
      <li><a href="addlogo.php">Add Logo</a></li>
      <li><a href="listuser.php">List Users</a></li>
      <li><a href="adduser.php">Add users</a></li>
      <li><a href="listnew.php">List news</a></li>
      <li><a href="addnew.php">Add news</a></li>
      <li><a href="listcatpro.php">List project category</a></li>
      <li><a href="addprocat.php">Add  project category</a></li>
      
      <li><a href="logout.php">Log Out</a></li>
    </ul>
  </nav>

  </div>








































<?php include('js.php') ?>

  </body>
</html>