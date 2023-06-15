
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail form</title>
    <link rel="stylesheet" href="style.css" class="css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    
 
</head>
<body>
<?php
   $insert = false;
if(isset($_POST['name'])){
   $server ="localhost";
   $username="root";
   $password="";

   $con = mysqli_connect($server,$username,$password);

   if(!$con){
    die("connnection to the database failed due to".mysqli_connect_error());    
   }

    //  echo"success conneccting to the database";
   $name = $_POST['name'];
   $age = $_POST['Age'];
   $gender = $_POST['Gender'];
   $email = $_POST['Email'];
   $phone = $_POST['Phone'];
   $desc = $_POST['desc'];

    $sql =   "INSERT INTO `vaishno mata trip` .`trip` ( `name`, `age`, `Gender`, `Email`, `Phone`, `desc`, `Date Time`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp())"; 
    // echo $sql;
    // $sql = "INSERT INTO `vaishno mata trip`.`trip` (`name`, `age`, `Gender`, `Email`, `Phone`, `Other Details`, `Date Time`) VALUES ('$name', ?, ?, ?, ?, ?, current_timestamp())";

    // Assuming you have a database connection named $connection
  
    
    if($con->query($sql)==true){
        $insert = true;
        
      // echo "successfully inserted";
  }
    else 
      echo "Error: $sql <br> $con->error";
      mysqli_close($con); 
  }
?>

    <img class="bg" src="bg.jpeg" alt="college">
    <div class="container">
 
        <h1>Welcome to IIIT Bhubaneswar Vaishno Mata Trip form</h1>
        <p>
            Fill this form with the correct information we will reach you soon.
        </p>  
        <?php
 if($insert==true){
     echo "<p class='submit'>Thanks for submitting your infomration. Your form has submited successfully.</p>";
 }
 ?>

        
        
        <form action="index.php" method="post">
              <input type="text" name="name" id="name" placeholder="Enter Your Name">
              <input type="text" name="Age" id="Age" placeholder="Enter Your Age">
              <input type="text" name="Gender" id="Gender" placeholder="Enter Your Gender">
              <input type="text" name="Email" id="Email" placeholder="Enter Your Email">
              <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter anyohther information here"></textarea>
              <input type="text" name="Phone" id="Phone" placeholder="Enter Your Phone NO."> 
              <button class="btn">Submit</button>
        </form>
    </div>
   <script src="index.js"></script>
  

    <!-- INSERT INTO `trip` (`SrNo.`, `Name`, `age`, `Gender`, `Email`, `Phone`, `Other Details`, `Date Time`) VALUES ('1.', 'Kabir Bhagat', '18 ', 'Male', 'Kb9086252361@gmail.com', '9086252361', 'These are the first details entered in the database.', current_timestamp()); -->
    
</body>
</html>