<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="assets/money.png">
   <link rel="stylesheet"  type="text/css" href="styles.css">
   <style>

    table{
      margin: 1rem auto;

      font-family: var(--inter);
      max-width: 600px;
      border-spacing:0 15px;
    }

    th, td {
    padding: .5rem;
    
    }

    tr{
      background-color: rgba(89, 160, 48,.2);
      border-radius: 4px;

     margin: 20px;
    }

   </style>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->


<!-- Link to Google Fonts  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@500&family=Inter:wght@300;400;500;600;700;800;900&family=League+Spartan:wght@100;300;500;600;700;800&family=Outfit:wght@100;400&family=Roboto:wght@100&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@500&family=Inria+Serif:wght@300;400;700&family=Inter:wght@300;400;500;600;700;800;900&family=League+Spartan:wght@100;300;500;600;700;800&family=Outfit:wght@100;400&family=Roboto:wght@100&display=swap" rel="stylesheet">

</head>
<body>

  <main>
<table>
  <tbody>
    <?php
    // include '../db.php';
    //above tutorial have a php page just for sql connection we dont 
    $db_sever = "localhost";
    $db_user = "root";
    $db_pass= "";
    $db_name = "websitedb";
    $conn = "";

    try{
      //connection object 
      $conn = mysqli_connect($db_sever, $db_user, $db_pass,$db_name);
      //echo"database connected";
    }catch(mysqli_sql_exception){
      //echo"Not Connected";
    }

    $sql = "select * from reviews";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" .  $row['username'] ."<br>"."\"". $row['textReview'] ."\"". "</td>";
      // echo "<td>" ."-". "</td>";
      
      echo "</tr>";
    }
    $conn->close();
  ?>
  </tbody>
</table>
 
 



  </main>

  <!-- JS Scripts -->
  <script type="text/javascript" src="scripts.js"></script>



  
</body>
</html>