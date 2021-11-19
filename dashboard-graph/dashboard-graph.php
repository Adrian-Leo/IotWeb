
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../styles/Dashboard-graph.css">
        <title> dashboard </title>




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
                <div class="isi-child active" onclick="location.href='dashboard-graph/dashboard-graph.php';">
                    <img src="../imgOno/icon-statistic.png" alt="">
                    <span>Statistic1</span>
                </div>
                <div class="isi-child" onclick="location.href='../dashboard-graph2/dashboard-graph2.php';">
                    <img src="../imgOno/icon-statistic.png" alt="">
                    <span>Statistic2</span>
                </div>
                <div class="isi-child" onclick="location.href='../dashboard-control/kontrol.php';">
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
        <div class="profile">
            <span><?php
            include('../koneksi.php');
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
        <div class="main">

            <!-- pilihan grafik -->

            <select name="pilihGrafik" id="pilihGrafik" class="custom-select" onchange="gantiChart();">
                <option value="">--pilih grafik--</option>
                <option value="line" >Line</option>
                <option value="bar" >Bar</option>
            </select>

            <!-- pilihan grafik -->

            <!-- membuat grafik -->

            <div class="container-grafik">
                <div class="child-grafik" id="grafik" style="width:80%; text-align:center;"></div>
            </div>

            



        

            <!-- membuat grafik -->


        </div>
        <!-- membuat konten -->

        <script type = "text/javascript" src="../js/jquery-3.4.0.min.js"></script>
        <script type = "text/javascript" src="../js/mdb.min.js"></script>
        <script type = "text/javascript" src="jquery-latest.js"></script>

        <!-- memanggil chart -->
        <script type = "text/javascript">
            var chart = 'chart-line.php';

            // mengganti chart sesuai pilihan
            function gantiChart(){
                var x = document.getElementById("pilihGrafik").selectedIndex;
                var opt = document.getElementsByTagName("option")[x].value;

                if(opt === "line"){
                    return chart = 'chart-line.php'

                }if (opt === "bar"){
                    return chart = 'chart-bar.php'
                }
            }

            console.log(chart);

            var refreshid = setInterval(function(){
                $('#grafik').load(chart);
            }, 1000);
        </script>

    </body>

    </html>