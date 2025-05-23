<html>
<head>
     <link rel="stylesheet" type="text/css" href="../css/analisaHalamanUtama.css">
</head>
<body> 
    <div id="laman">
        <?php
        include('analisaHeader.php') ?>
        <div id="enter"></div>
        <?php
        include('analisaMenuBar.php') ?>
        <div id="enter"></div>
        <div id="menu">
        </div>
        <div id="isi">
               <div class="badan"> Badan
                <div>
                <iframe src="beranda.php"></iframe>
                <iframe src="pendidikanFormal.php"></iframe>
                <iframe src="pendidikanNonFormal.php"></iframe>
                <iframe src="pengalamanOrganisasi.php"></iframe>
                <iframe src="hobi.php"></iframe>
                <iframe src="galeriPhoto.php"></iframe>
            </div>
        </div>
            <div class="samping"> Samping </div>

            <div class="kaki_atas_satu">kaki_atas_satu
                <br>           
            <p> E-mail : 1810fani@gamil.com </p>
            <p> No. Hp : 082392257373 </p>             
        </div>
           <div class="kaki_atas_dua"> kaki_atas_dua
            <br>
            <a href="files/Jobsheet1" download="Jobsheet1" >Jobsheet1</a>
            <a href="files/Jobsheet2" download="Jobsheet2">Jobsheet2</a>
        </div>  
            <div class="kaki_atas_tiga">kaki_atas_tiga
                <br>
             <a href="files/Jobsheet3" download="Jobsheet3">Jobsheet3</a>
             <a href="files/Jobsheet4" download="Jobsheet4">Jobsheet4</a>
        </div>
            <div class="kaki_atas_empat"> kaki_atas_empat
                <br>
            <a href="files/Jobsheet5" download="Jobsheet5">Jobsheet5</a>
            <a href="files/Jobsheet6" download="Jobsheet6">Jobsheet6</a>
        </div>
    </div>
    <?php
    include('analisaFooter.php') ?>
    
</body>
</html>
