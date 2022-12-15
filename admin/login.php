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
                    <h2>Logowanie jako Admin</h2>
                    <label>Login: <input type="text" name="login"></label><br>
                    <label>Hasło: <input type="password" name="password"></label><br><br>
                    <button type="submit">Zaloguj</button>
                </form>
                
                
                
                <div>
                    <?php
                        //sprawdzenie poprawności danych logowania
                        if(isset($_POST["login"]) && isset($_POST["password"]))
                        {
                            $sql = 'SELECT id, login, password FROM accounts WHERE login = "'.$_POST["login"].'" AND password = "'.$_POST["password"].'" AND is_admin = 1;';


                            if($res = $db->query($sql))
                            {
                                if($row = $res->fetch_array())
                                {
                                    //zalogowano
                                    $_SESSION["whoLogged"] = $row["id"];
                                    $_SESSION["isAdmin"] = true;

                                    header("location: ../index.php");
                                }
                                else
                                {
                                    //błędne dane
                                    echo '<h1 style="color: red">PODANO ZŁE DANE</h1>';
                                }   
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