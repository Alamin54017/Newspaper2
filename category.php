<?php 
session_start();
error_reporting(0);
include('demo.php');

    ?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Category</title>
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
                    <?php
$pid=intval($_GET['catid']);
 $query=mysqli_query($con,"select CategoryName,Description from tblcategory where id='$pid'");
while ($row=mysqli_fetch_array($query)) {
?>
          <div class="col-sm-12">
            <div class="text-center">
              <h1 class="text-center mt-5">
                <?php echo htmlentities($row['CategoryName']);?> News
              </h1>
              <p class="text-secondary fs-15 text-muted">
                <?php echo htmlentities($row['Description']);?>
              </p>
            </div>
          </div>
                    <?php } ?>
        </div>
                
                
                
                <div class="row mb-4">
                    <?php 
        if($_GET['catid']!=''){
$_SESSION['catid']=intval($_GET['catid']);
}
             






     if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 8;
        $offset = ($pageno-1) * $no_of_records_per_page;


        $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
        $result = mysqli_query($con,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);


$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblcategory.CategoryName as category,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url,image from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.CategoryId='".$_SESSION['catid']."' LIMIT $offset, $no_of_records_per_page");

$rowcount=mysqli_num_rows($query);
if($rowcount==0)
{
echo "No record found";
}
else {
while ($row=mysqli_fetch_array($query)) {


?>
          <div class="col-sm-3  mb-5 mb-sm-2">
            <div class="position-relative image-hover">
              <?php $image='uploads/'.htmlentities($row['image']); ?>
                <img src="<?php echo $image; ?>" class="img-fluid">
              <span class="thumb-title"><?php echo htmlentities($row['category']);?></span>
            </div>
            <h5 class="font-weight-600 mt-3">
                <a class="text-body" href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>"><?php echo htmlentities($row['posttitle']);?></a>
            </h5>
          </div>
                    <?php } ?>
                    
        </div>
                <ul class="pagination justify-content-center mb-4">
        <li class="page-item"><a href="?pageno=1"  class="page-link">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?> page-item">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>" class="page-link">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?> page-item">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?> " class="page-link">Next</a>
        </li>
        <li class="page-item"><a href="?pageno=<?php echo $total_pages; ?>" class="page-link">Last</a></li>
    </ul>
<?php } ?>
                
                <?php include 'includes/footer.php'; ?>
            </div>
            
        </div>
        
        <script src="js/vendor.bundle.base.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/demo.js"></script>
    </body>
</html>