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
        
        
        <section>
            <?php
                if(!isset($_SESSION["whoLogged"]))
                {
                    header("location: ../sites/login.php");
                }
            ?>
            
            
            <div class="detailsBox">
                <div class="detailContent">
                    <form method="post">
                        <input type="hidden" name="confirm">
                        <h3>Wypożyczanie filmu</h3>

                        <?php echo 'Dzisiejsza data: '.date('Y-m-d'); ?>
                        <br><br>
                        <label>Na ile dni wypożyczyć? <br><input type="number" max="14" min="1" name="days"> max: 14 dni</label><br>
                        
                        <?php
                            echo '<input type="hidden" value="'.$_POST["filmID"].'" name="filmID">';
                            
                            if(isset($_POST["confirm"]))
                            {
                                if($_POST["days"] == NULL)
                                {
                                   echo '<h1>Podaj date!</h1>';   
                                }
                                else
                                {
                                    $days = '+ '.$_POST["days"].' days';
                                    $date = date('Y-m-d');
                                    $endDate = date('Y-m-d', strtotime($date .''. $days));
                                    $accID = $_SESSION["whoLogged"];
                                    $filmID = $_POST["filmID"];
                                    
                                    $sql = "INSERT INTO rents (date_start, date_end, accounts_id, movies_id) VALUES ('$date','$endDate', $accID, $filmID);";
                                    
                                    $db->query($sql);
                                    
                                    header("location: ../sites/movie-search.php");
                                }
                            }
                        ?>
                        
                        <button class="detailButton" type="submit">Potwierdź</button>
                    </form>
                </div>
            </div>
        </section>
        
        
        <footer>
            <?php include '../includes/footer.php'; ?>
        </footer>
    </body>
</html>