<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

</head>
<body>

  <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-warning text-center" > Display Table Data </h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Username </th>
 <th>email </th>
 <th> Password </th>
 <!-- <th> Delete </th> -->
 <th> Update </th>

  </tr >

  <?php

  include 'config_page.php'; 
 $query = "select * from data ";

  $data = mysqli_query($conn,$query);

  while($result = mysqli_fetch_array($data)){
 ?>
 <tr class="text-center">
 <td> <?php echo $result['username'];  ?> </td>
 <td><?php echo $result['email']; ?></td>
 <td> <?php echo $result['password'];  ?> </td>
 <!-- <td> <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $result['id']; ?>" class="text-white"> Delete </a>  </button> </td> -->
 <td> <button class="btn-primary btn"> <a href="update.php?id=<?php echo $result['id']; ?>" class="text-white"> Update </a> </button> </td>

  </tr>

  <?php 
 }
  ?>
 
 </table>  
 <a href="logout1.php"><h3>logout</h3></a>
  </div>
 </div>

  <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>

</body>
</html>