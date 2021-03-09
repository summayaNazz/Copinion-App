<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>copinyun</title>

    <!-- bootstrap cdn -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- CSS only -->
<link rel="stylesheet" href="./login.css">
<!-- font awesome cdn -->
<script src="https://use.fontawesome.com/3e1d84919d.js"></script>
</head>

<body>
<!-- login page -->
<section>

<div class="container">
<div class="text-center">
<!-- <h1 class="m-5">copinyun</h1> -->
<a href="#"><img src="./images/pin.jpg" alt="" width="100" class="mt-4"></a>
<h5 class="mb-5">Share your Opinion with the World!</h5>
<h2 class="m-4">Join</h2><br/><br/>

<div>
    <?php require_once 'process.php' ?>
  <form action='process.php' class="row g-3" method='POST'>
    <div class="col-md-6 mb-5">
      <label for="html" class="labels">first Name</label>
      <input type="name" name='fName' class="col-12" id="name" autofocus  /> 
    </div>
  
    <div class="col-md-6 mb-5">
      <label for="html" class="labels">last Name</label>
      <input type="name" name='lName' class="col-12" id="name" autofocus  /> 
    </div>

    <div class="col-md-6 mb-5">
      <label for="html">Email</label>
      <input type="email" name='email' class="col-12" id="email" autofocus  />
    </div><br/>
    <div class="col-md-6 mb-5">
      <label for="html">Phone</label>
      <input type="number" class="col-12" id="phone" placeholder="+92-3XZ-YYYYYYY" autofocus  />
    </div><br/>

    <div class="col-12">
      <button type="submit" name='save' class="btn btn-danger d-grid gap-2 col-4 mx-auto">Submit</button>
    </div>
  </form>
</div>
  
</div>
</div>
</section>
<!-- login page -->

</body>
</html> 