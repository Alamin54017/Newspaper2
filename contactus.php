<?php 
session_start();
error_reporting(0);
include('demo.php');

    ?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Contact Us</title>
        <link rel="shortcut icon" type="image/jpg" href="images/favicon.png"/>
        <link rel="stylesheet" href="CSS/style.css">
        <link rel="stylesheet" href="CSS/index.css">
        <link rel="stylesheet" href="CSS/aos.css"/>
        <link rel="stylesheet" href="CSS/materialdesignicons.min.css"/>
        <link rel="stylesheet" href="CSS/owl.carousel.min.css"/>
        <link rel="stylesheet" href="CSS/owl.theme.default.min.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    </head>
    <body>
        <div class="container-scroller">
            <?php include 'includes/header.php'; ?>
            <div class="container">
                <div class="row">
          <div class="col-sm-12">
            <div class="text-center">
              <h1 class="text-center mt-5">
                Contact Us
              </h1>
                <?php 
$pagetype='contactus';
$query=mysqli_query($con,"select PageTitle,Description from tblpages where PageName='$pagetype'");
while($row=mysqli_fetch_array($query))
{

?>
              <p class="text-secondary fs-15">
                <?php echo $row['Description'];?>
              </p>
              <?php } ?>
            </div>
          </div>
        </div>
                <?php
                    include 'includes/footer.php';
                    ?>
            </div>
        </div>
    </body>
</html>