<!DOCTYPE html>
<html lang="en">

<head>

    <!-- ** Basic Page Needs ** -->
    <meta charset="utf-8">
    <title>Owerriproperty.com</title>

    <!-- ** Mobile Specific Metas ** -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Agency HTML Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Afams Val">
    <meta name="keywords" content="">

    <!-- favicon -->
    <link href="images/favicon.png" rel="shortcut icon">

    <!-- 
  Essential stylesheets
  =====================================-->
    <link href="plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="plugins/bootstrap/bootstrap-slider.css" rel="stylesheet">
    <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="plugins/slick/slick.css" rel="stylesheet">
    <link href="plugins/slick/slick-theme.css" rel="stylesheet">
    <link href="plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

</head>

<body class="body-wrapper">

    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php include "components/nav_bar.php"; ?>
                </div>
            </div>
        </div>
    </header>
    <!--==================================
=            User Profile            =
===================================-->
    <section class="dashboard section mt-6">
        <!-- Container Start -->
        <div class="container">
            <!-- Row Start -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="sidebar">
                        <!-- User Widget -->
                        <div class="widget user-dashboard-profile">
                            <!-- User Image -->
                            <div class="profile-thumb">
                                <img src="images/user/user-thumb.jpg" alt="" class="rounded-circle">
                            </div>
                            <!-- User Name -->
                            <h5 class="text-center">Samanta Doe</h5>
                            <p>Joined February 06, 2017</p>
                            <a href="user-profile.php" class="btn btn-main-sm">Edit Profile</a>
                        </div>
                        <!-- Dashboard Links -->
                        <div class="widget user-dashboard-menu">
                            <ul>
                                <li class="active">
                                    <a href="dashboard-my-ads.php"><i class="fa fa-user"></i> My Ads</a>
                                </li>
                                <li>
                                    <a href="dashboard-favourite-ads.php"><i class="fa fa-bookmark-o"></i> Favourite Ads
                                        <span>5</span></a>
                                </li>
                                <li>
                                    <a href="dashboard-archived-ads.php"><i class="fa fa-file-archive-o"></i>Archeved
                                        Ads <span>12</span></a>
                                </li>
                                <li>
                                    <a href="dashboard-pending-ads.php"><i class="fa fa-bolt"></i> Pending
                                        Approval<span>23</span></a>
                                </li>
                                <li>
                                    <a href="indexx.php"><i class="fa fa-cog"></i> Logout</a>
                                </li>
                                <li>
                                    <a href="#!" data-toggle="modal" data-target="#deleteaccount"><i
                                            class="fa fa-power-off"></i>Delete Account</a>
                                </li>
                            </ul>
                        </div>

                        <!-- delete-account modal -->
                        <!-- delete account popup modal start-->
                        <!-- Modal -->
                        <div class="modal fade" id="deleteaccount" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header border-bottom-0">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body text-center">
                                        <img src="images/account/Account1.png" class="img-fluid mb-2" alt="">
                                        <h6 class="py-2">Are you sure you want to delete your account?</h6>
                                        <p>Do you really want to delete these records? This process cannot be undone.
                                        </p>
                                        <textarea class="form-control" name="message" id="" cols="40" rows="4"
                                            class="w-100 rounded"></textarea>
                                    </div>
                                    <div class="modal-footer border-top-0 mb-3 mx-5 justify-content-center">
                                        <button type="button" class="btn btn-primary"
                                            data-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-danger">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- delete account popup modal end-->
                        <!-- delete-account modal -->

                    </div>
                </div>
                <div class="col-lg-8">
                    <!-- Recently Favorited -->
                    <div class="widget dashboard-container my-adslist">
                        <h3 class="widget-header">My Ads</h3>
                        <table class="table table-responsive product-dashboard-table">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Product Title</th>
                                    <th class="text-center">Category</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="product-thumb">
                                        <img width="80px" height="auto" src="images/products/products-1.jpg"
                                            alt="image description">
                                    </td>
                                    <td class="product-details">
                                        <h3 class="title">Macbook Pro 15inch</h3>
                                        <span class="add-id"><strong>Ad ID:</strong> ng3D5hAMHPajQrM</span>
                                        <span><strong>Posted on: </strong><time>Jun 27, 2017</time> </span>
                                        <span class="status active"><strong>Status</strong>Active</span>
                                        <span class="location"><strong>Location</strong>Dhaka,Bangladesh</span>
                                    </td>
                                    <td class="product-category"><span class="categories">Laptops</span></td>
                                    <td class="action" data-title="Action">
                                        <div class="">
                                            <ul class="list-inline justify-content-center">
                                                <li class="list-inline-item">
                                                    <a data-toggle="tooltip" data-placement="top" title="View"
                                                        class="view" href="category.php">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a data-toggle="tooltip" data-placement="top" title="Edit"
                                                        class="edit" href="dashboard-my-ads.php">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a data-toggle="tooltip" data-placement="top" title="Delete"
                                                        class="delete" href="dashboard-my-ads.php">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td class="product-thumb">
                                        <img width="80px" height="auto" src="images/products/products-2.jpg"
                                            alt="image description">
                                    </td>
                                    <td class="product-details">
                                        <h3 class="title">Clean Toyota Car</h3>
                                        <span class="add-id"><strong>Ad ID:</strong> ng3D5hAMHPajQrM</span>
                                        <span><strong>Posted on: </strong><time>Feb 12, 2017</time> </span>
                                        <span class="status active"><strong>Status</strong>Active</span>
                                        <span class="location"><strong>Location</strong>USA</span>
                                    </td>
                                    <td class="product-category"><span class="categories">Laptops</span></td>
                                    <td class="action" data-title="Action">
                                        <div class="">
                                            <ul class="list-inline justify-content-center">
                                                <li class="list-inline-item">
                                                    <a data-toggle="tooltip" data-placement="top" title="View"
                                                        class="view" href="category.php">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a data-toggle="tooltip" data-placement="top" title="Edit"
                                                        class="edit" href="dashboard-my-ads.php">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a data-toggle="tooltip" data-placement="top" title="Delete"
                                                        class="delete" href="dashboard-my-ads.php">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td class="product-thumb">
                                        <img width="80px" height="auto" src="images/products/products-3.jpg"
                                            alt="image description">
                                    </td>
                                    <td class="product-details">
                                        <h3 class="title">Macbook Pro 15inch</h3>
                                        <span class="add-id"><strong>Ad ID:</strong> ng3D5hAMHPajQrM</span>
                                        <span><strong>Posted on: </strong><time>Jun 27, 2017</time> </span>
                                        <span class="status active"><strong>Status</strong>Active</span>
                                        <span class="location"><strong>Location</strong>Dhaka,Bangladesh</span>
                                    </td>
                                    <td class="product-category"><span class="categories">Laptops</span></td>
                                    <td class="action" data-title="Action">
                                        <div class="">
                                            <ul class="list-inline justify-content-center">
                                                <li class="list-inline-item">
                                                    <a data-toggle="tooltip" data-placement="top" title="View"
                                                        class="view" href="category.php">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a data-toggle="tooltip" data-placement="top" title="Edit"
                                                        class="edit" href="dashboard-my-ads.php">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a data-toggle="tooltip" data-placement="top" title="Delete"
                                                        class="delete" href="dashboard-my-ads.php">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td class="product-thumb">
                                        <img width="80px" height="auto" src="images/products/products-4.jpg"
                                            alt="image description">
                                    </td>
                                    <td class="product-details">
                                        <h3 class="title">Macbook Pro 15inch</h3>
                                        <span class="add-id"><strong>Ad ID:</strong> ng3D5hAMHPajQrM</span>
                                        <span><strong>Posted on: </strong><time>Jun 27, 2017</time> </span>
                                        <span class="status active"><strong>Status</strong>Active</span>
                                        <span class="location"><strong>Location</strong>Dhaka,Bangladesh</span>
                                    </td>
                                    <td class="product-category"><span class="categories">Laptops</span></td>
                                    <td class="action" data-title="Action">
                                        <div class="">
                                            <ul class="list-inline justify-content-center">
                                                <li class="list-inline-item">
                                                    <a data-toggle="tooltip" data-placement="top" title="View"
                                                        class="view" href="category.php">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a data-toggle="tooltip" data-placement="top" title="Edit"
                                                        class="edit" href="dashboard-my-ads.php">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a data-toggle="tooltip" data-placement="top" title="Delete"
                                                        class="delete" href="dashboard-my-ads.php">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td class="product-thumb">
                                        <img width="80px" height="auto" src="images/products/products-1.jpg"
                                            alt="image description">
                                    </td>
                                    <td class="product-details">
                                        <h3 class="title">Macbook Pro 15inch</h3>
                                        <span class="add-id"><strong>Ad ID:</strong> ng3D5hAMHPajQrM</span>
                                        <span><strong>Posted on: </strong><time>Jun 27, 2017</time> </span>
                                        <span class="status active"><strong>Status</strong>Active</span>
                                        <span class="location"><strong>Location</strong>Dhaka,Bangladesh</span>
                                    </td>
                                    <td class="product-category"><span class="categories">Laptops</span></td>
                                    <td class="action" data-title="Action">
                                        <div class="">
                                            <ul class="list-inline justify-content-center">
                                                <li class="list-inline-item">
                                                    <a data-toggle="tooltip" data-placement="top" title="View"
                                                        class="view" href="category.php">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a data-toggle="tooltip" data-placement="top" title="Edit"
                                                        class="edit" href="dashboard-my-ads.php">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a data-toggle="tooltip" data-placement="top" title="Delete"
                                                        class="delete" href="dashboard-my-ads.php">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                    <!-- pagination -->
                    <div class="pagination justify-content-center">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="dashboard-my-ads.php" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="dashboard-my-ads.php">1</a></li>
                                <li class="page-item active"><a class="page-link" href="dashboard-my-ads.php">2</a></li>
                                <li class="page-item"><a class="page-link" href="dashboard-my-ads.php">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="dashboard-my-ads.php" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- pagination -->

                </div>
            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
    </section>
    <!--============================
=            Footer            =
=============================-->
    <?php include "components/footer.php" ?>

    <!-- 
Essential Scripts
=====================================-->
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/popper.min.js"></script>
    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <script src="plugins/bootstrap/bootstrap-slider.js"></script>
    <script src="plugins/tether/js/tether.min.js"></script>
    <script src="plugins/raty/jquery.raty-fa.js"></script>
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>


    <script src="js/script.js"></script>

</body>

</html>