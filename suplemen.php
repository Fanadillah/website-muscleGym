<?php
date_default_timezone_set('Asia/Jakarta');
$tanggal= date("Y-m-d");
$hari = date("l");



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
                    <a class="list-group-item list-group-item-action list-group-item-light bg-secondary p-3 text-white" href="#!">Suplemen</a>
                    <a class="list-group-item list-group-item-action list-group-item-light bg-black p-3 text-white" href="tips.php">Tips</a>
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
                    <h1 class="mt-4">Suplemen, <span><?php echo $_SESSION['name']; ?></span></h1>
                </div>

                <div class="container mt-5 my-5">
                    <h3>
                        Creatine
                    </h3>
                </div>
                <div class="container mt-5">
                    <div class="row">
                        <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="suplemen\c1.jfif" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title text-black">Crevolene</h5>
                                <p class="card-text text-black">Rp142.500 - Rp247.000</p>
                                <p class="card-text text-black">Crevolene adalah produk creatine dari Evolene yang mampu membantumu meningkatkan POWER & STRENGTH untuk olahraga. </p>
                                <a href="https://shopee.co.id/Evolene-Crevolene-330gr-60x-serving-i.244776591.4973971750?sp_atk=1153d7fd-f192-4d7e-a601-12edf946720a&utm_campaign=-&utm_content=14959-lsNukRqrqBZUNSxZmhVRk6vUBkhT0Fg4hhrZRsTvxk9mBLm7-https%3A%2F%2Fid.my-best.com-4e0cb6fb5fb446d1c92ede2ed8780188-&utm_medium=affiliates&utm_source=an_11146330000&utm_term=afojvnbjb159&xptdk=1153d7fd-f192-4d7e-a601-12edf946720a" class="btn btn-primary">Go Check Out</a>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="suplemen\c2.jfif" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title text-black">M1 Gold Pro Creatine</h5>
                                <p class="card-text text-black">Rp375.000</p>
                                <p class="card-text text-black">M1 GOLD SERIES PRO CREATINE merupakan suplemen yang diformulasikan khusus untuk menambah dan menebalkan massa otot dalam tubuh,</p>
                                <a href="https://www.tokopedia.com/maniacsupplement/m1-creatine-300-gram-m1-gold-pro-creatine-300-gram-m1-creatin-kreatin-mix-berry-tester-suplemen?extParam=ivf%3Dfalse%26src%3Dsearch" class="btn btn-primary">Go Check Out</a>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="suplemen\c3.jfif" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title text-black">Creatine Matrix</h5>
                                <p class="card-text text-black">Rp90.000 - Rp190.000</p>
                                <p class="card-text text-black">mengandung 5 gr creatine monohydrate per scoop
creatine monohydrate nerupakan jenis creatine terbaik dlm membentuk otot dan menambah tenaga
membentuk otot yang kering(lean muscle) serta meminimalisir pengambahan lemak.</p>
                                <a href="https://shopee.co.id/PROVUS-CREATINE-MATRIX-UNFLAVORED-300-GRAM-GR-60-SERVING-100-ORIGINAL-CREATINE-MONOHYDRATE-PRO-PROCREATINE-i.252371027.8647131778?sp_atk=fc79f39a-7efc-4512-b274-f0662402c1a5&xptdk=fc79f39a-7efc-4512-b274-f0662402c1a5" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container mt-5 my-5">
                    <h3>
                        Whey Protein
                    </h3>
                </div>
                <div class="container mt-5">
                    <div class="row">
                        <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="..." alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title text-black">Card title</h5>
                                <p class="card-text text-black">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="..." alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title text-black">Card title</h5>
                                <p class="card-text text-black">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="..." alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title text-black">Card title</h5>
                                <p class="card-text text-black">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container mt-5 my-5">
                    <h3>
                        BCAA
                    </h3>
                </div>
                <div class="container mt-5">
                    <div class="row">
                        <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="..." alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title text-black">Card title</h5>
                                <p class="card-text text-black">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="..." alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title text-black">Card title</h5>
                                <p class="card-text text-black">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="..." alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title text-black">Card title</h5>
                                <p class="card-text text-black">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container mt-5 my-5">
                    <h3>
                        Gainer
                    </h3>
                </div>
                <div class="container mt-5">
                    <div class="row">
                        <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="..." alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title text-black">Card title</h5>
                                <p class="card-text text-black">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="..." alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title text-black">Card title</h5>
                                <p class="card-text text-black">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="..." alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title text-black">Card title</h5>
                                <p class="card-text text-black">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
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