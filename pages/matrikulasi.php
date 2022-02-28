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
                           <h1>Kegiatan Matrikulasi Wikrama 2021/2022</h1>
                          <br>
                           <p class="paragraf">Sebelum masuk di pembelajaran baru tahun 2021/ 2022, ada kegiatan MATRIKULASI.</p>

                            <p class="paragraf">Matrikulasi adalah kegiatan pembelajaran yang dilakukan untuk memenuhi kekurangan dalam hal pengetahuan, ketrampilan dan sikap yang berfungsi untuk mengetahui kemampuan awal/ pemetaan kemampuan awal peserta didik yang diperlukan untuk mengikuti kegiatan pembelajaran.</p>
                            
                            <img class="matrik" src='data:image/png;base64,<?php echo base64_encode(file_get_contents("img/Matrik.jpg")); ?>'>
                            
                            <p class="paragraf">Waktu pelaksanaan Matrikulasi di SMK Wikrama Bogor yaitu selama 4 minggu (26 Juli - 21 Agustus 2021) secara online dengan sistem sinkronus dan asinkronus. Diikuti oleh 585 peserta didik baru.</p><p class="paragraf"></p>
                       
                    </div>
                  </div>
                  <img >
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