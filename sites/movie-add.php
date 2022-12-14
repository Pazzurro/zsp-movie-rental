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
                    <form action="../movie-my.php">
                        <h3>Wypożyczanie filmu</h3>

                        <?php echo 'Dzisiejsza data: '.date('Y-m-d'); ?>
                        <br><br>
                        <label>Na ile dni wypożyczyć? <br><input type="number" max="14" min="0" onchange="calcDate"> max: 14 dni</label>
                        
                        <p id="fixedTime"></p>
                    </form>
                </div>
            </div>
        </section>
        
        
        <footer>
            <?php include '../includes/footer.php'; ?>
        </footer>
        
        <script>
            function calcDate(days)
            {
                var p = document.getElementById("fixedTime");
                
            }
        </script>
    </body>
</html>