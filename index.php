<?php 


include 'database_conn.php';
session_start();

// check if user is logged in
if (!isset($_SESSION["username"])) {
  // redirect to login page
  header("Location: login.php");
  exit;
}

    
$query = "select * from employers";
$result = mysqli_query($db_connect, $query); ?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <title>Admin dashboard</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container mt-4">
     <div class="row">
     
         <div class="col-md-12">
         <div><a href="logout.php" class="btn btn-info">Logout</a></div>
            <div>Welcome, <b><?php echo $_SESSION["username"]; ?></b>!</div>
             <div class="alert alert-warning alert-dismissible fade show" role="alert">
                 <?php include 'message.php'; ?>
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true"></span>
                 </button>
                 
             </div>
             
             
         </div>
         <div class="col-md-12">
             <div class="float-left mb-4">
                 <h2>Employer</h2>
             </div>
             <div class="float-right">
                 <a href="add.php" class="btn btn-success">Add new Employer</a>
             </div>
             <table class="table">
                 <thead>
                     <tr>
                         <th scope="col">#</th>
                         <th scope="col">Employer First Name</th>
                         <th scope="col">Employer Last Name </th>
                         <th scope="col">Email</th>
                         <th scope="col">Phone</th>
                         <th scope="col">Action</th>
                     </tr>
                 </thead>
                 <tbody>

                 <?php if ($result->num_rows > 0): ?>
                 <?php while($customer_data = mysqli_fetch_assoc($result)): ?>
                     <tr>
                         <th scope="row"><?php echo $customer_data['ID'];?></th>
                         <td><?php echo $customer_data['firstname'];?></td>
                         <td><?php echo $customer_data['lastname'];?></td>
                         <td><?php echo $customer_data['email'];?></td>
                         <td><?php echo $customer_data['phone'];?></td>
                         <td><img src="Images/<?php echo $customer_data['image'];?>" alt=""></td>
                         <td>
                             <a href="edit.php?ID=<?php echo $customer_data['ID'];?>" class="btn btn-primary">Edit</a>
                             <a href="delete.php?ID=<?php echo $customer_data['ID'];?>" class="btn btn-danger">Delete</a>
                         </td>
                     </tr>
                 <?php endwhile; ?>
                 <?php else: ?>
                 <tr>
                     <td colspan="3" rowspan="1" headers="">No data found!</td>
                 </tr>
                 <?php endif; ?>

               </tbody>
             </table>
         </div>
     </div>
</div>
</body>
</html>