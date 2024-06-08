<?php
session_start();
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) { // mengecek apakah uname dan password telah diisi oleh pengguna

    function validate($data){ //digunakan untuk membersihkan dan mengubah data masukan pengguna sebelum di proses
        $data = trim($data); //menghilangkan spasi didepan atau belakang pada data masukan
            $data = stripslashes($data); //menghilangkan tanda backslash pada data masukan
            $data = htmlspecialchars($data); // mengubah karakter khusus dalam data masukan menjadi entitas HTML. 
                                             //Ini dilakukan untuk mencegah serangan penginjeksi HTML atau JavaScript.
            return $data;
    }

    $uname = validate($_POST['uname']); // memangggil function validate untuk memeriksa data uanme
    $pass = validate($_POST['password']);

    if (empty($uname)) {
            header("Location: sign-in.php?error=User Name is required");
            exit();
    }else if(empty($pass)) {
            header("Location: sign-in.php?error=Password is required");
            exit();
    }else{

        $pass = md5($pass); // mengenkripsi data password menggunakan fungsi md5
            // mengambil data username yang sama dengan isi variabel $uname didalam tabel username
            $sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
        if ($row['user_name'] === $uname && $row['password'] === $pass) {
            $_SESSION['user_name'] = $row['user_name'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['id'];
            if($row['role'] == 'admin'){
                header("Location: user-admin.php");
            }else{
            header("Location: user.php");
                exit();
            }
        }else{
                        // berpindah ke halaman sign in dan mengirim pesan didalam variabel error
                        header("Location: sign-in.php?error=Incorect User name or Password");
                        exit();
                    }
        }else{
            header("Location: sign-in.php?error=Incorect User Name or Password");
            exit();
        }
    }
}else{
        header("Location: sign-in.php");
        exit();
}