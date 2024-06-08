<?php
session_start();
include 'db_conn.php';
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {


date_default_timezone_set('Asia/Jakarta');
$tanggal= date("Y-m-d");
$hari = date("l");
switch($hari){
    case 'Monday':
        $latihan="Chest Day";
        break;
    case 'Tuesday':
        $latihan="Back Day";
         break;
    case 'Wednesday':
         $latihan="Rest Day";
        break;
    case 'Thursday':
        $latihan="Push Day";
        break;
    case 'Friday':
        $latihan="Pull Day";
        break;
    case 'Saturday':
        $latihan="Legs Day";
        break;
    case 'Sunday':
        $latihan="Rest Day";
        break;
}

$bmi = 0;
$berat = 0;
$tinggi = 0;
$tipe = "Belum Ditentukan";

if (isset($_POST['berat']) && isset($_POST['tinggi'])) {

    $id = $_SESSION['id'];
    $berat = ($_POST['berat']);
    $tinggi = ($_POST['tinggi']);
    $query = "UPDATE users SET berat ='$berat', tinggi='$tinggi' WHERE id ='$id'";

    $tinggi_m = $tinggi / 100;
    $bmi = $berat / ($tinggi_m * $tinggi_m);
  if ($bmi < 18.5) {
    $tipe= "Kurus";
  } elseif ($bmi <= 24.9) {
    $tipe= "Berat badan normal";
  } elseif ($bmi <= 29.9) {
    $tipe= "Kelebihan berat badan";
  } else {
    $tipe= "Obesitas";
  }    
  } else {
    $berat = "";
    $tinggi = "";
  }

  $sql = "SELECT * FROM users";
  $result=mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($result);




  


 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard</title>
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
                    <a class="list-group-item list-group-item-action list-group-item-light bg-secondary text-white p-3" href="#!">Dashboard</a>
                    <a class="list-group-item list-group-item-action list-group-item-light bg-black p-3 text-white" href="jadwal.php">Schedule</a>
                    <a class="list-group-item list-group-item-action list-group-item-light bg-black p-3 text-white" href="suplemen.php">Suplemen</a>
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
                    <h1 class="mt-4">WELCOME BACK, <span><?php echo $_SESSION['name']; ?></span></h1>
                    <p>Apakah Kamu Sudah Siap Berolahraga</p>
                <div class="container border mt-5">
                    <div class="row align-items-center">
                        <div class="col">
                            <h1 class="text-center"><?php echo($latihan) ?></h1>
                            <p class="text-center"><?php echo($hari) ?></p>
                        </div>
                        <div class="col border">
                            <h4 class="text-center">BMI</h4>
                            <h2 class="text-center"><?php echo number_format($bmi, 2); ?></h2>
                            <p class="text-center"><?php echo $tipe; ?></p>
                        </div>
                    </div>

                </div>
                <div class="container mt-5 align-items-center text-center">
                    <h3>Menghitung BMI</h3>
                <form  method="post">
                    <label >Berat Anda</label><br>
                    <input type="text" name="berat" placeholder="<?php echo $row['berat']?>"><br>
                    <label >Tinggi Anda</label><br>
                    <input type="text" name="tinggi" placeholder="<?php echo $row['tinggi']?>"><br>
                    <button class="btn btn-outline-warning mt-2 mb-5" type="submit">Hitung BMI</button>
                    
                </form>
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