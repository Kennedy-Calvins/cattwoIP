<!DOCTYPE html>
<html lang="en">
<head>
  <title>Fees</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Fee Form</h2>
  <form action="/schoolFee" method="POST" >

  <!-- <input type="hidden" name = "token" value="{{ csrf_field() }}"> -->
  {{ csrf_field() }}

    <div class="form-group">
      <label for="number">Student number:</label>
      <input type="number" class="form-control" placeholder="Enter student number" name="stno" required> 
    </div>

    <div class="form-group">
      <label for="name">Full name:</label>
      <input type="text" class="form-control" id="fname" placeholder="Enter student Name" name="name">
    </div>

    <!-- <div class="form-group">
      <label for="name">Full name:</label>
      <input type="text" class="form-control" id="fname" placeholder="Enter student Name" name="name">
    </div> -->

  <div class="form-group">
  <label for="name">Date of payment:</label>
  <input type="date" class="form-control" id="dop" name="dop">
  </div>
    
    <!-- <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email address" name="email">
    </div> -->
    <div class="form-group">
      <label for="fee">Amount in Ksh:</label>
      <input type="number" class="form-control" id="fee" placeholder="Enter Amount Paid" name="fee">
    </div>
    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
