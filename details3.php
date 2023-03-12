<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="details.css">
</head>
<body style="background-color:rgb(201, 244, 230) ;">
    <h2>ADOPT ME</h2>
    <div class="details">
   
    </div>
    <div class="table">
    <?php

    $conn = mysqli_connect("localhost","root","","login_sample_db");
    $query = "SELECT * from pet where id =11";

    $query_run = mysqli_query($conn,$query);
    ?>
    
    <?php
if(mysqli_num_rows($query_run) > 0){

    foreach($query_run as $row)
    {
     ?>  
     <img src=" <?php echo "upload/".$row['dbimage']?>" alt="Image"> 
        <ul>
        <li>Name:<?php echo $row['petname']?></li>
        <li>Age:<?php echo $row['age']?></li>
        <li>Breed:<?php echo $row['breed']?></li>
        
            <li>vaccinated:<?php echo $row['vac']?></li>
            <li>Trained:<?php echo $row['tra']?></li>
            
          
      </ul>
<?php
    }
}
?>

        
                
              
         
</div>
    
</body>
</html>