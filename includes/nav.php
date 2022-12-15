<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/style.css" >
    </head>
    <body>
        <header class="nav">
            <table cellspacing="0" rowspacing="0">
                <tr>   
                    
                    
                    
                    
                    <?php
                        $loginURL = '/zsp-movie-rental/sites/login.php';
                        $logoutURL = '/zsp-movie-rental/sites/logout.php';   
                        $myMovieURL = '/zsp-movie-rental/sites/movie-my.php';
                        $addMovieURL = '/zsp-movie-rental/sites/movie-add.php';
                    
                        $movieListURL = '/zsp-movie-rental/admin/movie-list.php';
                        $adminLogoutURL = '/zsp-movie-rental/admin/logout.php';
                        $addAdminURL = '/zsp-movie-rental/admin/add-admin.php';
                        
                    
                        if(isset($_SESSION["isAdmin"]))
                        {
                            echo'
                                <form action="'.$movieListURL.'" method="post">
                                    <td>
                                        <button class="navButton"><span>Lista filmów</span></button>
                                    </td>
                                </form>
                                
                                <form action="'.$addAdminURL.'" method="post">
                                    <td>
                                        <button class="navButton"><span>Dodaj admina</span></button>
                                    </td>
                                </form>
                                
                                <form action="'.$adminLogoutURL.'" method="post">
                                    <td>
                                        <button class="navButton"><span>Wyloguj</span></button>
                                    </td>
                                </form>
                            ';
                        }
                        else
                        {
                            echo'
                                <form action="/zsp-movie-rental/sites/movie-search.php" method="post">
                                    <td>
                                        <button class="navButton"><span>Szukaj filmu</span></button>
                                    </td>
                                </form>
                            ';
                            
                            if(isset($_SESSION["whoLogged"]))
                            {
                                echo'
                                    <form action="'.$myMovieURL.'" method="post">
                                        <td>
                                            <button class="navButton"><span>Moje filmy</span></button>
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
                        }   
                    ?>
                </tr>
            </table>
        </header>
    </body>
</html>