<?php
  include('connection.php');
?>

<header class="bg-primary bg-gradient text-white">
    <div class="container px-4 text-center">
        <h1 class="fw-bolder Grey_Qo">Logowanie</h1>
        <p class="lead">W tym miejscu zaloguj się do swojego konta.</p>
    </div>
</header>

<section id="about">
    <div class="container px-4">
        <div class="row gx-4 justify-content-center">
            <div class="col-lg-4">  
                <!-- Miejsce na formularz -->
            <form method="post" class="form-control fs-5">
                Login : <br><input type="text" required class="form-controll alert alert-primary" name="login"><br>
                Hasło : <br><input type="password" required class="form-controll alert alert-primary"><br>
                <input type="submit" name="submit" value="ZALOGUJ" class="btn btn-outline-seconary alert alert-primary">

                <?php
                    if(isset($_POST["submit"])){
                        zaloguj($_POST["login"]);
                    }
                ?>
            </form> 

            </div>
        </div>
    </div>
</section>

<?php

function zaloguj($nazwa_uzytkownika)
{
  //ustawianie ciasteczka
  setcookie("login_cookie", $nazwa_uzytkownika, time() + 86400);

  //ustawianie sesji
  $_SESSION["user"] = $nazwa_uzytkownika;

  //włączanie podstrony z kontem użytkownika
  header('Location:'.'index.php?page=account.php');
}
?>