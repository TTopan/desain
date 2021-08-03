<html>
    <head>
        <meta charset="UTF-8">
        <style>
            body{
                background: #fffcd3;
            }  
            .box_soal_jawab{
                width: 100%;
                height: 35%;
                position: absolute;
                left: 0%;
                top: 20%;
                background: transparent;
            }
            .box_soal{
                width: 100%;
                height: 15%;
                position: absolute;
                left: 0%;
                top: 20%;
                background: transparent;
            }
            /*             jawaban*/
            .box_kiri{
                width: 25%;
                height: 15%;
                position: absolute;
                background: transparent;
                left:0%;
                top: 42%;
            }
            .box_kanan{
                width: 25%;
                height: 15%;
                position: absolute;
                background: transparent;
                left: 25%;
                top: 42%;
            }
            .field_tombol{
                width: 15%;
                height: 15%;
                position: absolute;
                left: 50%;
                top: 42%;
                background: transparent;
            }
            .field_jawab{
                width: 35%;
                height: 15%;
                position: absolute;
                left: 65%;
                top: 42%;
                background: transparent;
            }
            input[type="radio"]{
                position: absolute;
                width: 50px;
                height: 50px;
            }
            h1{
                font-size: 50px;
                color: black;
                position: absolute;
                top: 0%;
            }
            label{
                font-size: 50px;
                position: absolute;
                color: black;
                left: 5%;
            }
            .checkmark:after{
                content: "";
                position: absolute;
                display: none;
            }
            .container input:checked ~
            .checkmark:after{
                display: block;
            }
            .container .checkmark:after{
                background: red;
            }
            .jawab input[type="text"]{
                border: none;
                border-bottom: 1px solid black;
                background: transparent;
                outline: none;
                text-align: center;
                font-size: 20px;
                color: black;
                position: absolute;
                left: 6%;
                text-transform: uppercase;
            }
            h2{
                font-size: 50px;
                color: black;
                position: relative;
                display: inline-block;
                top: 3%;
                /*text-align: center;*/
            }
            .text_pelajaran{
                width: 30%;
                height: 10%;
                font-size: 50px;
                background: transparent;
                position: absolute;
                top: 0%;
                left: 0%;
                text-align: center;
                border-bottom: 1px solid black;
            }
            .text_guru{
                width: 40%;
                height: 10%;
                font-size: 50px;
                background: transparent;
                position: absolute;
                top: 0%;
                left: 30%;
                text-align: center;
                border-bottom: 1px solid black;
            }
            .text_kelas{
                width: 30%;
                height: 10%;
                font-size: 50px;
                background: transparent;
                position: absolute;
                top: 0%;
                left: 70%;
                text-align: center;
                border-bottom: 1px solid black;
            }
            .text_nama{
                width: 50%;
                height: 10%;
                font-size: 50px;
                background: transparent;
                position: absolute;
                top: 10%;
                left: 0%;
                text-align: center;
                border-bottom: 1px solid black;
            }
            .text_nomor{
                width: 50%;
                height: 10%;
                font-size: 50px;
                background: transparent;
                position: absolute;
                top: 10%;
                left: 50%;
                text-align: center;
                border-bottom: 1px solid black;
            }
            p{
                font-size: 50px;
                position: absolute;
                top: 0%;
                left: 0%;
            }
        </style>
        <title>SOAL MATEMATIKA</title>
    </head>
    <body>
        <form action="SOAL_IPA.js" name="mm" >
            <!--<p id="demo1" style="" class="p" name="demo1">JAWAB</p>-->
            <div class="text_pelajaran"><p id="pelajaran" style="" class="p" name="pelajaran"></p></div>
            <div class="text_guru"><p id="guru" style="" class="p" name="guru"></p></div>
            <div class="text_kelas"><p id="kelas" style="" class="p" name="kelas"></p></div>
            <div class="text_nama"><p id="nama" style="" class="p" name="nama"></p></div>
            <div class="text_nomor"><p id="nomor" style="" class="p" name="nomor"></p></div>
            
            <div class="box_soal_jawab"></div>
            <div class="box_soal">
                <p>1. Penghubung antar tulang yang satu dengan tulang lainnya yang menyebabkan tulang dapat digerakkan disebut …</p>
            </div>
            <div class="box_kiri">
                <input type="radio" name="jawab1">
                <label style="position: absolute; left: 15%;">A. Kulit</label><br><br><br>
                <input type="radio" name="jawab1">
                <label style="position: absolute; left: 15%;">B. Sendi</label><br><br><br>
            </div>
            <div class="box_kanan">
                <input type="radio" name="jawab1">
                <label style="position: absolute; left: 15%;">C. Tulang</label><br><br><br>
                <input type="radio" name="jawab1">
                <label style="position: absolute; left: 15%;">D. Otot</label><br><br><br>
            </div>
            <div class="field_tombol">
                <br><h1 type="button" onClick="soal1()" style="top:5%; left: 25%;" id="hasil">TOMBOL</h1>
            </div>
            <div class="field_jawab">
                <br><h1 style="top:5%; left: 25%;" id="jawab" name="jawab">HASIL</h1>
            </div>
           
        </h1>
    </form>
    <script src="SOAL_IPA.js" src="LOGIN_SOAL.php">
        function panggil_pelajaran() {
            var parameter = location.search.substring(1).split("&");
            var temp = parameter[0].split("=");
            i = unescape(temp[1]);
            document.getElementById("pelajaran").innerHTML = i;
        }
        panggil_pelajaran();
    </script>

    <script>
        function panggil_guru() {
            var parameter = location.search.substring(1).split("&");
            var temp = parameter[1].split("=");
            i = unescape(temp[1]);
            document.getElementById("guru").innerHTML = i;
        }
        panggil_guru();
    </script>

    <script>
        function panggil_kelas() {
            var parameter = location.search.substring(1).split("&");
            var temp = parameter[2].split("=");
            i = unescape(temp[1]);
            document.getElementById("kelas").innerHTML = i;
        }
        panggil_kelas();
    </script>

    <script>
        function panggil_nama() {
            var parameter = location.search.substring(1).split("&");
            var temp = parameter[3].split("=");
            i = unescape(temp[1]);
            document.getElementById("nama").innerHTML = i;
        }
        panggil_nama();
    </script>

    <script>
        function panggil_nomor() {
            var parameter = location.search.substring(1).split("&");
            var temp = parameter[4].split("=");
            i = unescape(temp[1]);
            document.getElementById("nomor").innerHTML = i;
        }
        panggil_nomor();
    </script>
</body>
</html>
