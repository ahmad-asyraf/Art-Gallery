<?php include "db_conn.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- @Author: Asyraf -->
    <title> Art Gallery - Purchase </title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="image/brand-favicon-white.png">
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Educational Purpose UI/UX Students">
    <!-- Main CSS -->
    <link href="css/main-style.css" rel="stylesheet">
    <!-- Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <!-- START NAVBAR -->
    <div class="container-fluid nav-exp fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="#">
                    <img src="image/signature-removebg.png" class="img-brand" alt="Brand Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="bi bi-list"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.html">home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about-us.html">about us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact-us.html">contact us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="gallery.php">gallery</a>
                        </li>
                    </ul>
                    <div class="right">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="sign-in.html">sign in</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="sign-up.html">sign up</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- END NAVBAR -->
    <!-- START MAIN CONTENT -->
    <div class="container-fluid image-details">
        <div class="row main-gallery main-purchase">
            <div class="col-lg-7 offset-lg-1 image-canvas">
                <div class="container">
                    <div class="col">
                        <?php 
                            if(isset($_GET["imageID"]))
                            {
                                $strImageID = $_GET["imageID"];
                            }

                            $sql = "SELECT * FROM images WHERE id = '".$strImageID."' ORDER BY id DESC";
                            $res = mysqli_query($conn,  $sql);

                            if (mysqli_num_rows($res) > 0) 
                            {
                                $images = mysqli_fetch_assoc($res)
                        ?>        
                                <img src="uploads/<?=$images['image_url']?>" class="img-thumbnail" alt="">    
                        <?php 
                            }
                        ?>
                    </div>
                    <div class="col mt-5">
                        <p><b>Artwork details</b></p>
                        <p><b>Title:</b> Forgotten Future</p>
                        <p><b>Artist:</b> <a href="">Micheal</a></p>
                        <p><b>Date:</b> 11 January 2021</p>
                    </div>
                </div>
            </div>
            <div class="col col-lg-3 m-lg-5">
                <div class="container">
                    <div class="row d-none d-lg-block brand-logo-1">
                        <img src="image/signature-removebg.png" class="" alt="">
                    </div>
                    <div class="row mt-5">
                        <p>Interested with this artwork?</p>
                        <p><b>Resolution:</b></p>
                        <p>1024 x 669 pixels</p>
                        <p><b>Price:</b></p>
                        <p>RM120.00</p>
                    </div>
                    <button type="button" class="btn btn-primary col-6"><span class="bi bi-cart"></span> buy</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
    <!-- FOOTER -->
    <div class="container-fluid py-5 footer">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <p>&copy; 2021 Universiti Malaysia Terengganu</p>
                </div>
            </div>
            <div class="row">
                <div class="social-media text-center">
                    <a href="" class="bi bi-facebook"></a>
                    <a href="" class="bi bi-instagram"></a>
                    <a href="" class="bi bi-twitter"></a>
                    <a href="" class="bi bi-youtube"></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>