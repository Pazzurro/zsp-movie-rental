<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/style.css" >
    </head>
    <body>
        <header class="nav">
            <table cellspacing="0" rowspacing="0">
                <tr>
                    <td><button class="navButton"><span style="font-size: 15px">Wyszukiwarka filmów</span></button></td>
                    
                    <?php
                        if(isset($_SESSION["whoLogged"]))
                        {
                            echo'
                                <td><button class="navButton"><span style="font-size: 15px">Moje filmy</span></button></td>
                                
                                <td><button class="navButton"><span style="font-size: 15px">Wyloguj</span></button></td>
                            ';
                        }
                        else
                        {
                            echo'
                                <td><button class="navButton"><span style="font-size: 15px">Zaloguj</span></button></td>
                            ';
                        }
                    ?>
                </tr>
            </table>
        </header>
    </body>
</html>