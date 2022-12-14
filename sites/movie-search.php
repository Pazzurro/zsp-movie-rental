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
            <div class="main">
                <?php
                    $sql = 'SELECT movies.id, movies.title, movies.lenght, movies.year FROM movies JOIN rents ON movies.id != rents.movies_id;';
                
                    if($res = $db->query($sql))
                    {
                        while($row = $res->fetch_array())
                        {
                            echo'
                                <form action="movie-details.php" method="get">
                                    
                                    <input type="hidden" name="filmID" value="'.$row["id"].'">
                                    <button type="submit" class="searchButton">
                                        <div class="searchContent">
                                            <h2>'.$row["title"].'</h4>

                                            <table class="searchTable">
                                                <tr>
                                                    <td style="width: 100px">
                                                        <p>rok produkcji: '.$row["year"].' </p>
                                                    </td>
                                                    <td style="width: 100px">
                                                        <p>długość filmu: '.$row["lenght"].' minut </p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </button>
                                </form>
                            ';
                        }
                    }
                ?>
            </div>
        </section>
        
        
        <footer>
            <?php include '../includes/footer.php'; ?>
        </footer>
    </body>
</html>