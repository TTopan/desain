<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <style>
            body{
                background: teal;
            }
            .field{
                position: absolute;
                top: 15%;
                left: 34%;
                width: 35%;
                height: 78%;
                background: wheat;
            }
            .pelajaran input[type="text"]{
                position: absolute;
                top:25%;
                left:40%;
                border: none;
                border-bottom: 1px solid black;
                background: transparent;
                outline: none;
                text-align: center;
                font-size: 35px;
                color: red;

            }
            .guru input[type="text"]{
                position: absolute;
                top:35%;
                left:40%;
                border: none;
                border-bottom: 1px solid black;
                background: transparent;
                outline: none;
                text-align: center;
                font-size: 35px;
                color: red;

            }
            .kelas input[type="text"]{
                position: absolute;
                top:45%;
                left:40%;
                border: none;
                border-bottom: 1px solid black;
                background: transparent;
                outline: none;
                text-align: center;
                font-size: 35px;
                color: red;

            }
            .nama input[type="text"]{
                position: absolute;
                top:60%;
                left:40%;
                border: none;
                border-bottom: 1px solid black;
                background: transparent;
                outline: none;
                text-align: center;
                font-size: 35px;
                color: red;

            }.nomor input[type="text"]{
                position: absolute;
                top:70%;
                left:40%;
                border: none;
                border-bottom: 1px solid black;
                background: transparent;
                outline: none;
                text-align: center;
                font-size: 35px;
                color: red;
            }
            h1{
                position: absolute;
                top:80%;
                left: 48%;
                font-size: 35px;
                color: black;
            }
        </style>
        <title>LOGIN SOAL</title>
    </head>
    <body>
        <form action="SOAL_IPA.php" method="GET">
            <div class="field"></div>
            <div class="pelajaran">
                <!--                <br><h1 style="top: 0%;font-size: 60px">IPA</h1>-->
                <input style="color:black" type="text" placeholder="Pelajaran" name="pelajaran" id="pelajaran">
            </div>
            <div class="guru">
                <!--<h1>BAPAK E</h1>-->
                <input style="color:black" type="text" placeholder="Nama Guru" name="guru" id="guru">
            </div>
            <div class="kelas">
                <input style="color:black" type="text" placeholder="Kelas" name="kelas" id="kelas">
            </div>
            <div class="nama">
                <input style="color:black" type="text" placeholder="Nama" name="nama" id="nama">
            </div>
            <div class="nomor">
                <input style="color:black" type="text" placeholder="Nomor" name="nomor" id="nomor">
            </div>
            
            <br><br><br>
            <input type="submit" value="submit" style="font-size: 50px">
            <!--            <a href="SOAL_IPA.php" onclick="soal1()"><h1>MASUK</h1></a>-->
        </form>
<!--        <script type="text/javascript" onclick="soal1()" src="SOAL_IPA.php">
            function soal1() {
                var pelajaran;
                var guru;
                var kelas;
                var nama;
                var nomor;
                var text_pelajaran = document.getElementById("text_pelajaran").value;
                // BENAR
                var input_pelajaran = document.getElementById("pelajaran").value;
//                var input_guru = document.getElementById("nama").value;
                // 
                document.getElementById("text_pelajaran").innerHTML = input_pelajaran;
//                if (input_pelajaran === document.getElementById("pelajaran").innerHTML) {
//                    document.getElementById("pelajaran").innerHTML = pelajaran;
//                }

                document.getElementById("guru").innerHTML = guru;
                document.getElementsById("kelas").innerHTML = kelas;
                document.getElementsById("nama").innerHTML = nama;
                document.getElementsById("nomor").innerHTML = nomor;

                // MENAMPILKAN
                // PELAJARAN, GURU, KELAS, NAMA, NOMOR
        </script>-->
    </body>
</html>
