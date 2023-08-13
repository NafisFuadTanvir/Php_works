<?php
include 'connect.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Showing Opertions</title>
</head>
<body class="bg-primary-subtle">
    <div class="container my-5"><a href="user.php">
    <button class="btn btn-primary my-5"> Sign Up </button>
    

    
    </a>
       
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Pssword</th>
      <th scope="col">Mobile</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
<?php
$uery="select * from person";
$h=mysqli_query($conn,$uery);
if ($h) {
    while ($r=mysqli_fetch_assoc($h)) {
        $id= $r['id'];
        $nme= $r['nme'];
        $emil= $r['emil'];
        $mobile= $r['mobile'];
        $pssword= $r['pssword'];  
        
        echo '  <tr>
        <th scope="row">'.$id.'</th>
        <td>'.$nme.'</td>
        <td>'.$emil.'</td>
        <td>'.$pssword.'</td>
        <td>'.$mobile.'</td>
        <td><button  class=" btn-primary "><a style="color: whitesmoke;" 
        href="remove.php?id='.$id.'">Delete Entry</a></button>
        <button class=" btn-danger "><a style="color: whitesmoke;"
        href="alter.php?
        id='.$id.'">Update Entry</a></button></td>
       
        </tr> ';
    }
    
}
?>

 
   <a style="color: whitesmoke;" href=""></a>
  </tbody>
</table>
    </div>
    
</body>
</html>