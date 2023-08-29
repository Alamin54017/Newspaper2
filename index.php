<?php 
include('demo.php');

    ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>The News-71</title>
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
            <div class="main-panel">
                <?php
                    include 'includes/header.php';
                    ?>
                <div class="container mt-2">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex justify-content-between align-items-center breaking-news bg-white border-top border-bottom">
                                <div class="d-flex flex-row flex-grow-1 flex-fill justify-content-center bg-danger py-2 text-white px-1 news "><span class="d-flex align-items-center">&nbsp;Breaking News</span></div>
                                    <marquee class="news-scroll" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
                                        <?php
                                    $query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId LIMIT 4");
while ($row=mysqli_fetch_array($query)) {
?>
                                        <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>"><?php echo htmlentities($row['posttitle']);?></a>
                                        <span class="dot"></span> 
                                         <?php } ?>
                                    </marquee>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="container mt-2">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="owl-carousel owl-theme" id="main-banner-carousel">
                                <?php
                                    $query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url,image from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId LIMIT 4");
while ($row=mysqli_fetch_array($query)) {
?>
                                <div class="item">
                                    <div class="carousel-content-wrapper mb-2">
                                        <div class="carousel-content">
                                            <h1 class="font-weight-bold"><a class="text-white" href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>"><?php echo htmlentities($row['posttitle']);?></a></h1>
                                            
                                            <p class="text-color m-0 pt-2 d-flex align-items-center">
                                                <span class="fs-10 mr-1">2 hours ago</span>
                                                <i class="bi bi-bookmark mr-3"></i>
                                                <span class="fs-10 mr-1">126</span>
                                                <i class="bi bi-chat-dots"></i>
                                            </p>
                                        </div>
                                        <div class="carousel-image">
                                            <?php $image='uploads/'.htmlentities($row['image']); ?>
                                            <img src="<?php echo $image; ?>">
                                        </div>
                                    </div>
                                </div>
<?php } ?>
                                
                                
                                
                                
                                
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="row">
                                
                               <?php
                                    $query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url,image from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId LIMIT 4");
while ($row=mysqli_fetch_array($query)) {
?> 
                                
                                <div class="col-sm-12">
                                    <div class="py-1 border-bottom">
                                        <div class="d-flex align-items-center pb-3">
                                            <?php $image='uploads/'.htmlentities($row['image']); ?>
                                            <img
                                                src="<?php echo $image; ?>"
                                                class="img-lg img-thumbnail mr-3"
                                                alt="thumb"/>
                                            <span class="fs-14 m-0 font-weight-medium line-height-sm"><a class="text-body" href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>"><?php echo htmlentities($row['posttitle']);?></a></span>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="world-news">
            <div class="row">
              <div class="col-sm-12">
                <div class="d-flex position-relative  float-left">
                  <h3 class="section-title">Bangladesh's News</h3>
                </div>
              </div>
            </div>
            <div class="row">
                <?php
$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblcategory.CategoryName as category,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url,image from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.CategoryId=2 LIMIT 4");
while ($row=mysqli_fetch_array($query)) {
    ?>
              <div class="col-lg-3 col-sm-6 grid-margin mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                  <?php $image='uploads/'.htmlentities($row['image']); ?>
                <img src="<?php echo $image; ?>" class="img-fluid">
                  <span class="thumb-title"><?php echo htmlentities($row['category']);?></span>
                </div>
                <h5 class="font-weight-bold mt-3">
                  <?php echo htmlentities($row['posttitle']);?>
                </h5>
                
                <a class="text-body font-weight-bold" href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>">Read Article</a>
              </div>
              <?php } ?>
            </div>
          </div>
                    <div class="world-news">
            <div class="row">
              <div class="col-sm-12">
                <div class="d-flex position-relative  float-left">
                  <h3 class="section-title">Politics</h3>
                </div>
              </div>
            </div>
            <div class="row">
                <?php
$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblcategory.CategoryName as category,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url,image from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.CategoryId=6 LIMIT 4");
while ($row=mysqli_fetch_array($query)) {
    ?>
              <div class="col-lg-3 col-sm-6 grid-margin mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                  <?php $image='uploads/'.htmlentities($row['image']); ?>
                <img src="<?php echo $image; ?>" class="img-fluid">
                  <span class="thumb-title"><?php echo htmlentities($row['category']);?></span>
                </div>
                <h5 class="font-weight-bold mt-3">
                  <?php echo htmlentities($row['posttitle']);?>
                </h5>
                
                <a class="text-body font-weight-bold" href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>">Read Article</a>
              </div>
              <?php } ?>
            </div>
          </div>
                    <div class="world-news">
            <div class="row">
              <div class="col-sm-12">
                <div class="d-flex position-relative  float-left">
                  <h3 class="section-title">Business News</h3>
                </div>
              </div>
            </div>
            <div class="row">
                <?php
$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblcategory.CategoryName as category,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url,image from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.CategoryId=7 LIMIT 4");
while ($row=mysqli_fetch_array($query)) {
    ?>
              <div class="col-lg-3 col-sm-6 grid-margin mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                  <?php $image='uploads/'.htmlentities($row['image']); ?>
                <img src="<?php echo $image; ?>" class="img-fluid">
                  <span class="thumb-title"><?php echo htmlentities($row['category']);?></span>
                </div>
                <h5 class="font-weight-bold mt-3">
                  <?php echo htmlentities($row['posttitle']);?>
                </h5>
                
                <a class="text-body font-weight-bold" href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>">Read Article</a>
              </div>
              <?php } ?>
            </div>
          </div>
                   <div class="world-news">
            <div class="row">
              <div class="col-sm-12">
                <div class="d-flex position-relative  float-left">
                  <h3 class="section-title">Health News</h3>
                </div>
              </div>
            </div>
            <div class="row">
                <?php
$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblcategory.CategoryName as category,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url,image from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.CategoryId=9 LIMIT 4");
while ($row=mysqli_fetch_array($query)) {
    ?>
              <div class="col-lg-3 col-sm-6 grid-margin mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                  <?php $image='uploads/'.htmlentities($row['image']); ?>
                <img src="<?php echo $image; ?>" class="img-fluid">
                  <span class="thumb-title"><?php echo htmlentities($row['category']);?></span>
                </div>
                <h5 class="font-weight-bold mt-3">
                  <?php echo htmlentities($row['posttitle']);?>
                </h5>
                
                <a class="text-body font-weight-bold" href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>">Read Article</a>
              </div>
              <?php } ?>
            </div>
          </div> 
                    
                    
                    
                </div>
                
                <?php
                    include 'includes/footer.php';
                    ?>
                
                
                
            </div>
        </div>
        
        
        <script src="js/vendor.bundle.base.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/demo.js"></script>
    </body>
</html>
