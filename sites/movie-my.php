<html>
    <head>
        <meta charset="utf-8">
        <title>zsp-movie-rental Damian Kapral</title>
        
        <link rel="stylesheet" type="text/css" href="css/style.css" >
    </head>
    <body>
        <header>
            <?php include '../includes/header.php'; ?>
            
        </header>
        
        
        <nav>
            <?php include '../includes/nav.php'; ?>
        </nav>
        
        <?php
            if(!isset($_SESSION["whoLogged"]))
            {
                header("location: ../sites/login.php");
            }
        
            if(isset($_POST["rentID"]) && isset($_POST["movieID"]))
            {
                $sqlDeleteRow = 'DELETE FROM rents WHERE id = '.$_POST["rentID"].';';
                $sqlChangeAccept = 'UPDATE movies SET admin_id = 0 WHERE id = '.$_POST["movieID"].';';
                
                $db->query($sqlDeleteRow);
                $db->query($sqlChangeAccept);
            }
        ?>
        
        <section>
            <div class="main">
                <table class="myMovies">
                    <tr>
                        <td>
                            <h2>Filmy mczekujące na potwierdzenie</h2>
                        </td>
                        <td style="width:30%">
                            
                        </td>
                        <td>
                            <h2>Filmy wypożyczone</h2>
                        </td>
                    </tr>
                </table>
                
                <hr class="myMoviesLine">
                
                <div class="myMoviesSide">
                    <?php
                       //Oczekujące wypożyczenia 
                        $sql = 'SELECT movies.id AS mID, movies.title, rents.date_end, rents.id AS rID FROM movies JOIN rents ON rents.movies_id = movies.id WHERE rents.accounts_id = '.$_SESSION["whoLogged"].' AND movies.admin_id = 0;';
                    
                        if($res = $db->query($sql))
                        {
                            while($row = $res->fetch_array())
                            {
                                echo'
                                    <div class="myMoviesBlock">
                                        <form method="post">
                                            <h2>'.$row["title"].'</h2>
                                            <p>Data oddania: '.$row["date_end"].'</p>
                                            
                                            
                                            <input type="hidden" name="movieID" value="'.$row["mID"].'">
                                            <input type="hidden" name="rentID" value="'.$row["rID"].'">
                                            <button type="submit">Oddaj</button>
                                        </form>
                                    </div>
                                ';
                            }
                        }
                    ?>
                </div>
                
                <div class="myMoviesSide">
                    <?php
                       //Potwierdzone wypożyczenia 
                        $sql = 'SELECT movies.id AS mID, movies.title, rents.date_end, rents.id AS rID FROM movies JOIN rents ON rents.movies_id = movies.id WHERE rents.accounts_id = '.$_SESSION["whoLogged"].' AND movies.admin_id != 0;';
                    
                        if($res = $db->query($sql))
                        {
                            while($row = $res->fetch_array())
                            {
                                echo'
                                    <div class="myMoviesBlock">
                                        <form method="post">
                                            <h2>'.$row["title"].'</h2>
                                            <p>Data oddania: '.$row["date_end"].'</p>
                                            
                                            
                                            <input type="hidden" name="movieID" value="'.$row["mID"].'">
                                            <input type="hidden" name="rentID" value="'.$row["rID"].'">
                                            <button type="submit">Oddaj</button>
                                        </form>
                                    </div>
                                ';
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