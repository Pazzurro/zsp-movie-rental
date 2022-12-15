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
            <div class="detailsBox">
                <?php
                    
                    if(!isset($_SESSION["isAdmin"]))
                    {
                        header("location: ../sites/login.php");
                    }
                
                    
                    if(!isset($_GET["filmID"]))
                    {
                        header("location: ../index.php");    
                    }
                    else
                    {
                        if(isset($_GET["accept"]))
                        {
                            $sqlUpdate = 'UPDATE movies SET admin_id = '.$_SESSION["whoLogged"].' WHERE id = '.$_GET["filmID"].';';
                            
                            $db->query($sqlUpdate);
                            
                            header("location: movie-list.php"); 
                        }
                    }
                
                    
                    $sql = 'SELECT movies.title, movies.content, movies.year, movies.lenght, movies.directed_by FROM `movies` WHERE movies.id = '.$_GET["filmID"].';';
                
                    if($res = $db->query($sql))
                    {
                        if($row = $res->fetch_array())
                        {
                            echo '
                                <div class="detailContent">
                                    <h3>'.$row["title"].'</h3>
                                    <h4>'.$row["content"].'</h4><br><br>

                                    <p>Rok premiery: '.$row["year"].'</p>
                                    <p>Reżyseria: '.$row["directed_by"].'</p>
                            '; 
                            
                            echo'        
                                    <form method="get">
                                        <input type="hidden" value="'.$_GET["filmID"].'" name="filmID">
                                        <input type="hidden" name="accept"> 
                                        <button class="detailButton" type="submit">Zaakceptuj</button>
                                    </form>
                                <div>
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