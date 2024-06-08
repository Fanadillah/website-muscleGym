<?php

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Schedule</title>
        <!-- Favicon-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-black" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-black" style="color: #8b0909;">MuscleGym</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light bg-black p-3 text-white" href="user.php">Dashboard</a>
                    <a class="list-group-item list-group-item-action list-group-item-light bg-black text-white p-3" href="jadwal.php">Schedule</a>
                    <a class="list-group-item list-group-item-action list-group-item-light bg-black p-3 text-white" href="suplemen.php">Suplemen</a>
                    <a class="list-group-item list-group-item-action list-group-item-light bg-secondary p-3 text-white" href="tips.php">Tips</a>
                    
                </div>
            </div>
            <!-- Page content wrapper-->
            <div class="bg-black" id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-danger" id="sidebarToggle">-</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item active"><a class="nav-link" href="Home.php">Home</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['name']; ?></a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#!">Profile</a>
                                        <a class="dropdown-item" href="#!">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" id="testbuttton" href="logout.php">Log Out</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
                <div class="container-fluid text-white">
                    <div class="container border ">
                    <h1 class="mt-4">Tips Untukmu, <span><?php echo $_SESSION['name']; ?></span></h1>
                </div>
                <div class="main">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col">
                            <a href="https://www.halodoc.com/artikel/tinggi-protein-intip-4-menu-diet-sehat-ini">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="tips\tips1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title text-black">4 Menu Diet Tinggi Protein</h5>
                                <p class="card-text text-black">Mengonsumsi lebih banyak protein menjadi kunci bagi orang-orang yang sedang menjalankan diet untuk membentuk otot tubuh. Namun ternyata, tidak semua jenis makanan yang tinggi protein</p>
                                </div>
                            </div>
                            </a>
                        </div>

                        <div class="col">
                        <div class="card" style="width: 18rem;">
                        <a href="">
                            <img class="card-img-top" src="tips\tips2.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title text-black">13 Cara Menurunkan Berat Badan dengan Cepat dan Alami</h5>
                                <p class="card-text text-black">supaya bisa menurunkan berat badan, tentu asupan kalori yang masuk ke tubuh harus lebih sedikit. Selain itu, kamu juga harus meningkatkan durasi aktivitas fisik sehingga tubuh bisa</p>
                                </div>
                                </a>
                            </div>
                            
                        </div>

                        <div class="col">
                        <div class="card" style="width: 18rem;">
                        <a href="https://hellosehat.com/kebugaran/olahraga-lainnya/tips-mengatur-jadwal-olahraga/">
                            <img class="card-img-top" src="tips\tips3.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title text-black">5 Tips Mengatur Jadwal Olahraga di Tengah Kesibukan</h5>
                                <p class="card-text text-black">Meski sibuk bekerja seharian dan baru pulang di malam hari, sebisa mungkin luangkanlah sedikit waktu Anda untuk berolahraga. Olahraga ibarat pelepas stres karena efeknya mampu</p>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

                </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
<?php
}else{
    header("Location: sign-in.php");
    exit();
}
    ?>