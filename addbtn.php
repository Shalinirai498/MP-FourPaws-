<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FourPaws</title>
    <link rel="stylesheet" href="AddBtn.css">
</head>
<body>
    <div class="bg-img">


    <form action="code.php" method="post" enctype="multipart/form-data" class="container">
     
     
        <h1>ADD DETAILS</h1>
      <label for="text"><b>Pet Name</b></label>
      <input type="text" placeholder="Enter your Pet Name" name="petname" id="petname" required>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" id="email" required>
      <label for="phonenumber"><b>Phone Number</b></label>
      <input type="text" placeholder="Enter PhoneNumber" id="phonenumber" name="phonenumber" required>
      <label for="text"><b>Breed</b></label>
      <input type="text" placeholder="Enter your pet breed" name="breed" id="breed" required>
      <label for="text"><b>Category</b></label>
      <input type="text" placeholder="Enter your pet's category" name="category" id="category" required>
      
      
      <label for="age"><b>Pet Age</b></label>
      <input type="text" placeholder="Enter your Pet Age" name="age" id="age" required>

      <label for="text"><b>Vaccinated</b></label>
      <input type="text" placeholder="YES OR NO" name="vac" id="vac" required>

      <label for="text"><b>Trained</b></label>
      <input type="text" placeholder="YES OR NO" name="tra" id="tra" required>
      
      <label for=""><b>Picture</b></label>
  
        <input type="file" id="dbimage" accept="image/" name="dbimage">
        
        <br>
  
      <button type="submit" name="addsubmit" class="btn">Submit</button>
    </div>
    </form>
    
  </div>
    
</body>
</html>