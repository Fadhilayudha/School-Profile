<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wikrama School Profile</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <div>
        <nav>
            <ul>
                <li class="logo"><a  href="index.php?page=home"><img class="logoimg" src="img/smkwikrama.jpg" /><span class="logo-text">SMK WIKRAMA BOGOR </span></a></li>
                <li><a href="index.php?page=jurusan">Jurusan</a></li>
                <li><a href="index.php?page=perpustakaan">Perpustakaan Wikrama</a></li>
                <li><a href="index.php?page=kantin">Kantin Wikrama</a></li>
                <li><a href="index.php?page=matrikulasi">Matrikulasi</a></li>
                <li><a href="index.php?page=sejarah">Sejarah Wikrama</a></li>
            </ul>
        </nav>
        <div>
            <?php
                if(isset($_GET['page'])){
                    $page = $_GET['page'];
                    switch ($page){
                        case 'home':
                            include "home.php";
                            break;
                        
                        case 'jurusan':
                            include "pages/jurusan.php";
                            break;

                        case 'matrikulasi':
                            include "pages/matrikulasi.php";
                            break;

                        case 'perpustakaan':
                            include "pages/perpustakaan.php";
                            break;

                        case 'sejarah':
                            include "pages/sejarah.php";
                            break;

                        case 'kantin':
                            include "pages/kantin.php";
                            break;

                        default:
                        echo "<center><h3>Maaf. Halaman tidak ditemukan!</h3></center>";
                        break;
                    }
                }
                else{
                    include "home.php";
                }
            
            ?>
        </div>
    </div>
    
</body>
</html>