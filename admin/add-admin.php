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
            if(!isset($_SESSION["isAdmin"]))
            {
                header("location: ../sites/login.php");
            }
        
            if(isset($_POST["accID"]))
            {
                $sql = 'UPDATE accounts SET is_admin = 1 WHERE id = '.$_POST["accID"].';';
                
                $db->query($sql);
            }
        ?>
        
        <section>
            <div class="main">
                <?php
                    $sql = 'SELECT id, login, name, lastname FROM accounts WHERE is_admin = 0;';
                
                    if($res = $db->query($sql))
                    {
                        while($row = $res->fetch_array())
                        {
                            echo'
                                <div class="searchButton">
                                    <div style="margin-left: 20px">
                                        <h2>'.$row["login"].'</h2>

                                        <form method="post">
                                            <input type="hidden" name="accID" value="'.$row["id"].'">
                                            <table>
                                                <tr>
                                                    <td style="width: 30%">
                                                        <span>'.$row["name"].' '.$row["lastname"].'</span>
                                                    </td>
                                                    <td style="width: 40%">
                                                    
                                                    </td>
                                                    <td style="width: 30%">
                                                        <button type="submit">Nadaj uprawnienia admina</button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </form>
                                    </div>
                                </div>
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