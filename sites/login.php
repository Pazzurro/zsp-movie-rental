<html>
    <head>
        <meta charset="utf-8">
        <title>zsp-movie-rental Damian Kapral</title>
        
        <link rel="stylesheet" type="text/css" href="../css/style.css" >
    </head>
    <body>
        <header>
            <?php include '../includes/header.php'; ?>
        </header>
        
        
        <section>
            <div class="loginBox">
                <form method="post">
                    <h2>Logowanie</h2>
                    <label>Login: <input type="text" name="login"></label><br>
                    <label>Hasło: <input type="text" name="password"></label><br><br>
                    <button type="submit">Zaloguj</button>
                </form>
                
                <a href="register.php">Create account</a>
                
                <div>
                    <?php
                        //sprawdzenie poprawności danych logowania
                        if(isset($_POST["login"]) && isset($_POST["password"]))
                        {
                            $sql = 'SELECT login, password FROM accounts WHERE (login = "'.$_POST["login"].'" AND password = "'.$_POST["password"].'") AND is_admin = 0;';


                            if(mysqli_num_rows($db->query($sql)))
                            {
                                //zalogowano
                                header("location: ../index.php");
                            }
                            else
                            {
                                //błędne dane
                                echo '<h1 style="color: red">PODANO ZŁE DANE</h1>';

                            }
                        }

                    ?>
                </div>
            </div>
        </section>
        
        
        <footer>
            <?php include '../includes/footer.php'; ?>
        </footer>
    </body>
</html>