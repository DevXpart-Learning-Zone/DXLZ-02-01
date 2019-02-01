<?php
  
  $error = []; //for saving error message
  //array_push() function is used to store more array data
  
  //for validating data
  function validation($data)
  {
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripcslashes($data);
    return $data; //return validated data
  }

  //check form method and form is having attributes or not
  if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['mobile']) && isset($_POST['address'])) {

    $first_name = validation($_POST['first_name']);
    $last_name  = validation($_POST['last_name']);
    $mobile     = validation($_POST['mobile']);
    $address    = validation($_POST['address']);

    //form data valiation
    

    //check first name is empty or not
    if (empty($first_name)) {
      array_push($error, "<p class='alert alert-warning error'>First Name Must Not Be Empty!</p>");
    }

    //check last name is empty or not
    if (empty($last_name)) {
      array_push($error, "<p class='alert alert-warning error'>Last Name Must Not Be Empty!</p>");
    }

    //check first name characters length
    if (strlen($first_name) <3 ) {
      array_push($error, "<p class='alert alert-warning error'>First Name Must be Greater Than 2 Character!</p>");
    }

    //check last name characters length
    if (strlen($last_name) <3 ) {
      array_push($error, "<p class='alert alert-warning error'>Last Name Must be Greater Than 2 Character!</p>");
    }

    //check mobile characters length
    if (strlen($last_name) <11 ) {
      array_push($error, "<p class='alert alert-warning error'>Mobile Number Must be Greater Than 10 Character!</p>");
    }


  }
 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
   <div class="container">
      <h1 class="text-center">PHP Form Validatation</h1>

      <form action="" method="post" style="max-width: 550px; margin: 0 auto;">
          
          <div class="form-group">
            <label for="">First Name</label>
            <input type="text" class="form-control" name="first_name" placeholder="Enter your first name">
          </div>

           <div class="form-group">
            <label for="">Last Name</label>
            <input type="text" class="form-control" name="last_name" placeholder="Enter your last name">
          </div>

           <div class="form-group">
            <label for="">Mobile</label>
            <input type="text" class="form-control" name="mobile" placeholder="Enter your mobile number">
          </div>

           <div class="form-group">
            <label for="">Address</label>
            <input type="text" class="form-control" name="address" placeholder="Enter your address in details">
          </div>

           <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>

          </div>

          

          <?php  foreach ($error as $value){  //print array value by using foreach loop ?>
             
             <?php echo $value;?>
           <?php }  ?>


      </form>
   </div>
   
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <script>
      $(document).ready(function() { 
        setTimeout(function(){ 
        //setTimout is used for executing a section of code after a certain period of time.
          $('.error').slideUp(800); //error class will be hidden with 800speed
        },2000); //code      execute after 2000(2s)
      });
    </script>
  </body>
</html>