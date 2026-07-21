<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Star Rating</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@7.3.1/css/all.min.css">
  <style>
     .checked {
       color: orange;
     }
  </style>
</head>
<body>
  
  <span class="fa fa-star checked"></span>
  <span class="fa fa-star checked"></span>
  <span class="fa fa-star"></span>
  <span class="fa fa-star"></span>
  <span class="fa fa-star"></span>

  <?php 
    // if($row['rating'] == 2)
    { 
    ?>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star"></span>
    <span class="fa fa-star"></span>
    <span class="fa fa-star"></span>
    <span class="fa fa-star"></span>
  <?php 
   }
   ?>
</body>
</html>