<?php
    include('../koneksi.php');
    $sql="SELECT * FROM tbl_kontrol";
    $res=mysqli_query($conn,$sql);
    $data=mysqli_fetch_array($res);

    $pompa=$data['pompa'];

    $lampu=$data['lampu'];
    
    

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/Dashboard-graph.css">
    <title> dashboard </title>

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


     <!-- javascript -->
     <script type="text/javascript">
        function ubahstatus(ubhstatus){
            if(ubhstatus == true) ubhstatus ="ON";
            else ubhstatus = "OFF";
            document.getElementById('status').innerHTML = ubhstatus;
            
            //ajax untuk pompa
            var xmlhttp = new XMLHttpRequest();
            // 4 artinya sudah ready menerima respons
            xmlhttp.onreadystatechange = function(){
                if(xmlhttp.readyState == 4 && xmlhttp.status ==200) //200 artinya berhasil,404 artinya not found
                {
                    //ambil respon dari web setelah merubah nilai 
                    document.getElementById('status').innerHTML = xmlhttp.responseText;
                }
            }
            // eksekusi file http untuk merubah nilai di database 
            xmlhttp.open("GET","pompa.php?stat=" + ubhstatus, true );
            //kirim data
            xmlhttp.send();
        }

        function ubahstatus2(ubhstatus){
            if(ubhstatus == true) ubhstatus ="ON";
            else ubhstatus = "OFF";
            document.getElementById('status2').innerHTML = ubhstatus;

            //ajax untuk lampu
            var xmlhttp = new XMLHttpRequest();
            // 4 artinya sudah ready menerima respons
            xmlhttp.onreadystatechange = function(){
                if(xmlhttp.readyState == 4 && xmlhttp.status ==200) //200 artinya berhasil,404 artinya not found
                {
                    //ambil respon dari web setelah merubah nilai 
                    document.getElementById('status2').innerHTML = xmlhttp.responseText;
                }
            }
            // eksekusi file http untuk merubah nilai di database 
            xmlhttp.open("GET","lampu.php?stat=" + ubhstatus, true );
            //kirim data
            xmlhttp.send();

        }
    </script>


</head>

<body>

    <!-- membuat nav disamping -->
    <nav>
        <div class="logo">
            <img src="../imgOno/logo.png" alt="logo">
            <h2>Special</h2>
            <h2 class="huruf-kedua">Corp</h2>
        </div>
        <div class="isi">
                <div class="isi-child " onclick="location.href='../dashboard.php';" >
                    <img src="../imgOno/icon-dashboard.png" alt="">
                    <span>Dashboard</span>
                </div>
                <div class="isi-child" onclick="location.href='../dashboard-graph/dashboard-graph.php';">
                    <img src="../imgOno/icon-statistic.png" alt="">
                    <span>Statistic1</span>
                </div>
                <div class="isi-child" onclick="location.href='../dashboard-graph2/dashboard-graph2.php';">
                    <img src="../imgOno/icon-statistic.png" alt="">
                    <span>Statistic2</span>
                </div>
                <div class="isi-child active" onclick="location.href='dashboard-control/kontrol.php';">
                    <img src="../imgOno/icon-device.png" alt="">
                    <span>Control</span>
                </div>
                <!-- <div class="isi-child">
                    <img src="../imgOno/icon-endpoint.png" alt="">
                    <span>Endpoint</span>
                </div> -->
        </div>
        <div class="logout">
            <img src="../imgOno/icon-logout.png" alt="">
            <span>Logout</span>
        </div>
    </nav>
    <!-- membuat nav disamping -->

    <!-- membuat tempat profile -->
    <div class="profile" style=" background-color: #14F3B0">
        <span><?php
        
        $sql = "SELECT * FROM tbl_user";
        $res = mysqli_query($conn,$sql);
        $data = mysqli_fetch_array($res);

        $nama = $data['username'];
       

        echo $nama;

        ?></span>
        <img src="../imgOno/profil1.png" alt="">
    </div>
    <!-- membuat tempat profile -->


    <!-- membuat konten -->
    <div style=" background: linear-gradient(180deg, #14F3B0 -6.97%, rgba(89, 180, 186, 0) 107.75%);">
    <div class="main" >

         <!-- konten -->
            <div class="container" style="text-align:center; ">
                <h2>Kontrol Relay dengan Nodemcu</h2>

            </div>
            <!-- tampilan tombol  -->
            <div class ="container"  style="display:flex; justify-content:center; padding-top:20px; ">
                <!-- pompa -->
                <div class="card  bg-dark text-white mb-3" style="width: 20rem; margin-right:10px;">
                    <div class="card-header" style="font: size 30px; text-align:center; color:white;">Pompa</div>
                    <div class="card-body">
                        <div class="form-check form-switch" style="font-size:50px;">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"  onchange="ubahstatus(this.checked)" <?php if($pompa==1) echo"checked";?> >
                            <label class="form-check-label" for="flexSwitchCheckDefault">  <span id="status"> <?php if($pompa==1) echo"ON"; else echo"OFF";?> </span>  </label>
                        </div>
                        <!-- akhir switch -->
                    </div>
                </div>
            <!-- akhir pompa -->
                

            <!-- mulai lampu -->
                <div class="card bg-light mb-3" style="width: 20rem;">
                    <div class="card-header" style="text-align:center;">Lampu</div>
                    <div class="card-body">
                        <div class="form-check form-switch" style="font-size:50px;">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" onchange="ubahstatus2(this.checked)"  <?php if($lampu==1) echo"checked";?> >  <!-- menentukan true dan false --> 
                            <label class="form-check-label" for="flexSwitchCheckDefault"> <span id="status2"><?php if($lampu==1) echo"ON"; else echo"OFF";?> </span> </label>
                        </div>
                    </div>
                </div>
            <!-- akhir lampu -->

            


            </div>
            <!-- akhir tombol -->


    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    

</body>

</html>