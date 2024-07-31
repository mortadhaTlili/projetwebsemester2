<?php 



include 'database_conn.php';

$query = "SELECT * FROM employers WHERE ID='" . $_GET["ID"] . "'"; 
$result = mysqli_query($db_connect, $query);
$customer = mysqli_fetch_assoc($result); ?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <title>Edit Employer</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
   <div class="page-header mb-4">
       <h2>Edit Employer</h2>
   </div>
     <div class="row">
         <div class="col-md-12">
             <form action="edit_process.php" method="POST">
               <input type="hidden" name="ID" value="<?php echo $_GET["ID"]; ?>" class="form-control" required="">
               <div class="form-group">
                 <label for="exampleInputEmail1">First name</label>
                 <input type="text" name="firstname" class="form-control" value="<?php echo $customer['firstname']; ?>" required="">
               </div>
               <div class="form-group">
                 <label for="exampleInputEmail1">Last name</label>
                 <input type="text" name="lastname" class="form-control" value="<?php echo $customer['lastname']; ?>" required="">
               </div>
               <div class="form-group">
                 <label for="exampleInputEmail1">Email</label>
                 <input type="email" name="email" class="form-control" value="<?php echo $customer['email']; ?>" required="">
               </div>
               <div class="form-group">
                         <label>Phone</label>
                         <input type="number" name="phone" class="form-control" required="">
                     </div>
               <button type="submit" class="btn btn-primary" value="submit">Submit</button>
             </form>
         </div>
     </div>
</div>
</body>
</html>