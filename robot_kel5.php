<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Robot Kelompok 5</title>
    <style>
        *{
            padding:0;
            margin:0;
        }
        .container{
            margin:10px auto;
            width:600px;
            border:2px solid salmon;
            text-align:center;
            padding:10px;
        }
    </style>
</head>
<body>
<div class="container">
    <img src="https://i.pinimg.com/736x/9d/c0/a7/9dc0a74078c72e57de35b419a6a7d0c0.jpg" alt="robot_kel5" width=200 height=200>

    <h1>Robot Kelompok 5</h1>
    <br>
    <form method="POST">
        <input type="submit" name="nyala" value="NYALAKAN ROBOT">
        <?php

        // class dari robot 
        class robot{
            public function ambil_tanggal(){
                return date("d F Y");
            }
            public function ambil_hari(){
                return date('N');
            }

            public function ulang(int $angka){
                for($i=1;$i<=$angka;$i++){
                    echo "Halo Aku Robot kel 5 Pengulangan ke- ".$i."<br>";
                }
            }
        }
        
        // Menyalakan robot
         if(isset($_POST['nyala'])){
            ambil_menu();
        }
        // Mematikan robot dengan me refresh halaman
        if(isset($_POST['mati'])){
            peringatan("robot 5 telah dimatikan");
        }

        // fungsi mengambil menu
        function ambil_menu(){
            echo "<input type='submit' name='mati' value='MATIKAN ROBOT'>"."<br>"."<br>";
            echo "'Robot kel 5 telah dinyalakan, ada yang bisa dibantu?'"."<br>"."<br>";
            echo "<input type='submit' name='hari' value='AMBIL TANGGAL'>";
            echo " <input type='submit' name='ulang' value='PENGULANGAN'>";
        }
        ?>
    </form>
</div>
