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
                    <h2>Stwórz konto</h2>
                    <label>Login: <input type="text" name="login"></label><br>
                    <label>Hasło: <input type="password" name="password"></label><br>
                    <label>Imie:  <input type="text" name="name"></label><br>
                    <label>Nazwisko: <input type="text" name="lastname"></label><br><br>
                    <button type="submit">Stwórz konto</button>
                    
                    <a href="login.php">Masz już konto?</a>
                </form>
                
                
                
                <div>
                    <?php
                        //dodanie nowego użytkownika
                        if(isset($_POST["login"]) && isset($_POST["password"]) && isset($_POST["name"]) && isset($_POST["lastname"]))
                        {
                            if($_POST["login"] != "" && $_POST["password"] != "" && $_POST["name"] != "" && $_POST["lastname"] != "")
                            {
                                $sql = 'INSERT INTO accounts (login, password, name, lastname, is_admin) VALUES ("'.$_POST["login"].'", "'.$_POST["password"].'", "'.$_POST["name"].'", "'.$_POST["lastname"].'", 0);';
                            
                                $db->query($sql);
                                
                                header("location: login.php");
                            }
                            else
                            {
                                echo '<h1 style="color: red">NIE PODANO WSZYSTKICH DANYCH</h1>';
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