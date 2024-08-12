<?php
    //include('connection.php');
    session_start();
    $page = $_GET["page"] ?? $page = "main.php";
    //$mysqli -> close();
?>
<!DOCTYPE html>
<html lang="pol">
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Honk&display=swap" rel="stylesheet">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />   
        <title></title>

        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link href="css/styles.css" rel="stylesheet"/>
        <link href="css/customstyles.css" rel="stylesheet"/>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Kode+Mono:wght@400..700&family=VT323&display=swap" rel="stylesheet">
    </head>
    <body id="page-top">
        <!-- Nawigacja-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container px-4">    
                <a class="navbar-brand Fajna px-6" href="index.php?page=main.php">Msbshop.pl</a>   
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <!-- Ładowanie zakładek skryptem -->
                        <?php
                            echo '<li class="nav-item"><a class="nav-link" href="index.php?page=main.php">Główna</a></li>';
                            echo '<li class="nav-item"><a class="nav-link" href="index.php?page=store.php">Sklep</a></li>';
                            echo '<li class="nav-item"><a class="nav-link" href="index.php?page=news.php">Nowości</a></li>';
                            if(!isset($_SESSION["user"])){
                                echo '<li class="nav-item"><a class="nav-link" href="index.php?page=login.php">Logowanie</a></li>';
                                echo '<li class="nav-item"><a class="nav-link" href="index.php?page=signin.php">Rejestracja</a></li>';
                            }else{
                                echo '<li class="nav-item"><a class="nav-link" href="index.php?page=account.php">Konto</a></li>';
                            }
                            echo '<li class="nav-item"><a class="nav-link" href="index.php?page=Donate.php">Donate</a></li>';
                        ?>
                    </ul>
                </div>
            </div>d
        </nav>
        <!-- Zawartość strony głównej -->
        <?php
            include($page);
        ?>
        <!-- Stopka -->
        <footer class="py-5 bg-dark">
            <div class="container px-5"><h4 class="m-0 text-center text-white Grey_Qo">Copyright &copy; MSBSHOP.pl</h4></div>
        </footer>

        <!-- Skrypty JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
