<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wikrama School Profile</title>
    <link href="../style.css" rel="stylesheet">
</head>
<body>
    <div>
        <div class="header-background-mini">

        </div>
            <div class="content1">
                <div class="text1">
                     <div class="text">
                           <p id="tag">
                           </p>
                           <h1>Perpustakaan SMK Wikrama</h1>
                           
                           <p class="paragraf">Perpustakaan SMK Wikrama Bogor berada di Kampus SMK Wikrama Bogor Kelurahan Sindangsari, Kecamatan Bogor Timur, Kota Bogor  didirikan pada tahun 1996.  Secara fisik perpustakaan sekolah terletak di lantai 2 (dua) gedung Pajajaran yang merupakan gedung pertama yang dibangun, tepatnya berada di area bangunan seluas 96 m2. Lokasi ini berada di pusat kegiatan pembelajaran yang mudah dijangkau oleh peserta didik, pendidik dan tenaga kependidikan. Semenjak didirikan, keberadaan ruang perpustakaan SMK Wikrama Bogor memberikan manfaat bagi sivitas akademik sekolah bahkan masyarakat sekitar sekolah.</p>
                           <h4>Visi</h4>
                           <p class="paragraf">"Menjadi perpustakaan sekolah teladan berbasis Teknologi Informasi dan Komunikasi"</p>
                           <h4>Misi</h4>
                           <p class="paragraf">- Menjadikan perpustakaan sebagai sumber informasi bagi sivitas sekolah dan masyarakat</p>
                            <p class="paragraf">- Menjadikan budaya membaca sebagai bagian dari budaya sekolah</p>
                            <h4>Motto</h4>
                            <p class="paragraf">“Melayani dengan Hati dan Teknologi”</p>
                           

                            
                      </div>
                  </div>
                  <img class="perpus" src='data:image/png;base64,<?php echo base64_encode(file_get_contents("img/20.Perpus 1.JPG")); ?>'/>
                  
           </div>
    </div>
    <script>
        window.onscroll = function() {myFunction()};
        
        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;
        
        function myFunction() {
          if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
          } else {
            navbar.classList.remove("sticky");
          }
        }
        </script>
    
</body>
</html>