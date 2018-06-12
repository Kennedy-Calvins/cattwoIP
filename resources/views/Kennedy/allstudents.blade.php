<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>




.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}







.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}


}
</style>


  <title>List of All Students</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
<form action="/registerstudent" method="GET">

<div class="container">
  
  <h2>List of All Students</h2>
          
  <table class="table">
    <thead>
    <div class="topnav">
  
  <div class="search-container">
    <form action="">

      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
      <tr>
        <th>Student number</th>
        <th>Fullname</th>
        <th>Date of Birth</th>
        <th>Address</th>
        
      </tr>
    </thead>
    <tbody>
    @foreach($allstudents as $allstudent)
      <tr>
        <td>{{$allstudent->st_id}}</td>
        <td>{{$allstudent->fname}}</td>
        <td>{{$allstudent->dob}}</td>
        <td>{{$allstudent->address}}</td>
        
      </tr>
      
      @endforeach

      <tr>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
      </tr>
     
    </tbody>
  </table>
</div>
</form>
</body>
</html>
