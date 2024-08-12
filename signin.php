<?php
  include('connection.php');
?>

<header class="bg-primary bg-gradient text-white Grey_Qo">
    <div class="container px-4 text-center">
        <h1 class="fw-bolder Grey_Qo">Formularz rejestracji</h1>
        <p class="lead">W tym miejscu dodaj użytkownika do bazy danych.</p>
    </div>
</header>

<section id="about">
    <div class="container px-4 ">
        <div class="row gx-4 justify-content-center Grey_Qo">  
            <div class="col-lg-4">
              <div class="alert alert-primary">
                <?php
                    sprawdz_te_same_pola("password1" , "password2" , "submit");
                  ?>
              </div>
               <!-- Miejsce na formularz -->
               <form method="post" class="form-control fs-5  ">
                Login : <input type="text" class="form-control alert alert-primary">
                Hasło : <input type="password" name="password1" class="form-control alert alert-primary">
                Powtórz hasło : <input type="password" name="password2" class="form-control alert alert-primary"><br>

                Numer telefonu : <input type="tel" required class="alert alert-primary"><br>
                E-mail : <br><input type="email" required class="form-control alert alert-primary"><br>
                Data Urodzenia : <br><input type="date" required class="form-control alert alert-primary"> <br>

                
                <input value="therms "type="checkbox" required class="alert alert-primary"> Czy akceptyjesz regulamin ?<br>
                <input type="submit" name="submit" value="ZAREJESTRUJ" class="btn btn-outline-seconary ">

            </form>


            </div>
        </div>
    </div>
</section>

<?php
  function sprawdz_te_same_pola($nazwa_pola_1, $nazwa_pola_2, $nazwa_przycisku_zatwierdzania)
  {
    // Sprawdzenie naciśnięcia przycisku typu submit
    if(isset($_POST[$nazwa_przycisku_zatwierdzania]))
    {
       //porównanie ze sobą wartości z pól podanych inputów (!= oznacza nierówność)
       if($_POST[$nazwa_pola_1] != $_POST[$nazwa_pola_2])
       {
         //wyświetlenie komunikatu gdy warunek jest spełniony
          echo "Wprowadzone pola nie są takie same.";
       }
       else
       {
        //wyświetlenie komunikatu gdy warunek nie jest spełniony
        echo "Wprowdzone pola są poprawne.";
       }
    }
  }
?>