<header id="header">
                    <div class="container">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <div class="d-flex justify-content-between align-items-center navbar-top">
                                <ul class="navbar-left">
                                    <li><?php echo date('D,F d,Y'); ?></li>
                                    <li>34°C,Dhaka</li>
                                </ul>
                                <div>
                                    <a class="navbar-brand" href="index.php"><img src="logo.jpg" alt=""/></a>
                                </div>
                                <div class="d-flex">
                                    <ul class="navbar-right">
                                        <li><a href="index.php">ENGLISH</a></li>
                                        <li><a href="soon.php">বাংলা</a></li>
                                    </ul>
                                    <ul class="social-media">
                                        <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                                        <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                                        <li><a href="#"><i class="bi bi-youtube"></i></a></li>
                                        <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                                        <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="navbar-bottom-menu">
                                <button
                                    class="navbar-toggler"
                                    type="button"
                                    data-target="#navbarSupportedContent"
                                    aria-controls="navbarSupportedContent"
                                    aria-expanded="false"
                                    aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="navbar-collapse justify-content-center collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav d-lg-flex justify-content-between align-items-center">
                                        <li>
                      <button class="navbar-close">
                        <i class="bi bi-x"></i>
                      </button>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    
                    <?php $query=mysqli_query($con,"select id,CategoryName from tblcategory");
while($row=mysqli_fetch_array($query))
{
?>
                    <li class="nav-item">
                      <a class="nav-link" href="category.php?catid=<?php echo htmlentities($row['id'])?>"><?php echo htmlentities($row['CategoryName']);?></a>
                    </li>
                    <?php } ?>
                    
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </header>