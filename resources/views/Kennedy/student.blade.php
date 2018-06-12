<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Student Registration</h2>
  <form action="/registerstudent" method="POST">
    <!-- <input type="hidden" name = "token" value="{{ csrf_field() }}"> -->
    {{ csrf_field() }}
    <div class="form-group">
      <label for="number">Student number:</label>
      <input type="number" class="form-control" placeholder="Enter student number" name="stno" required> 
    </div>

    <div class="form-group">
      <label for="name">Full name:</label>
      <input type="text" class="form-control" id="fname" placeholder="Enter student Name" name="name" required>
    </div>

  <div class="form-group">
  <label for="name">Date of Birth:</label>
  <input type="date" class="form-control" id="dob" name="dobh" required>
  </div>
    
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email address" name="add" required>
    </div>
    
    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
