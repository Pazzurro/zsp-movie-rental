<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/style.css" >
    </head>
    <body>
        <header class="nav">
            <table cellspacing="0" rowspacing="0">
                <tr>   
                    
                    <form action="/zsp-movie-rental/sites/movie-search.php" method="post">
                        <td>
                            <button class="navButton"><span>Szukaj</span></button>
                        </td>
                    </form>
                    
                    
                    <?php
                        $logoutURL = '/zsp-movie-rental/sites/logout.php';   $loginURL = '/zsp-movie-rental/sites/login.php';
                        $myMovieURL = '/zsp-movie-rental/sites/movie-my.php';
                        $addMovieURL = '/zsp-movie-rental/sites/movie-add.php';
                    
                        if(isset($_SESSION["whoLogged"]))
                        {
                            echo'
                                <form action="'.$myMovieURL.'" method="post">
                                    <td>
                                        <button class="navButton"><span>Moje filmy</span></button>
                                    </td>
                                </form>
                                
                                <form action="'.$addMovieURL.'" method="post">
                                    <td>
                                        <button class="navButton"><span>Dodaj film</span></button>
                                    </td>
                                </form>
                                
                                <form action="'.$logoutURL.'" method="post">
                                    <td>
                                        <button class="navButton"><span>Wyloguj</span></button>
                                    </td>
                                </form>
                            ';
                        }
                        else
                        {
                            echo'
                                <form action="'.$loginURL.'" method="post">
                                    <td><button class="navButton"><span>Zaloguj</span></button></td>
                                </form>
                            ';
                        }
                    ?>
                </tr>
            </table>
        </header>
    </body>
</html>