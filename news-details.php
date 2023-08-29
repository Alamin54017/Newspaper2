<?php 
session_start();
error_reporting(0);
include('demo.php');

    ?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>News</title>
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
                <?php
$pid=intval($_GET['nid']);
 $query=mysqli_query($con,"select tblposts.PostTitle as posttitle,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url,image from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.id='$pid'");
while ($row=mysqli_fetch_array($query)) {
?>
                <div class="row">
          <div class="col-sm-12">
            <div class="text-center">
              <h1 class="text-center mt-5">
                <?php echo htmlentities($row['posttitle']);?>
              </h1>
                <?php $image='uploads/'.htmlentities($row['image']); ?>
                <img src="<?php echo $image; ?>" class="w-75 h-auto">
            </div>
            <p class="text-center font-weight-medium mb-3"><?php 
$pt=$row['postdetails'];
              echo  (substr($pt,0));?></p>
          </div>
        </div>
                <?php } ?>
              <?php include 'includes/footer.php'; ?>  
            </div>
        </div>
        
        
        <script src="js/vendor.bundle.base.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/demo.js"></script>
    </body>
</html>
