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
        
        <?php
            session_destroy();
        ?>
        
        <script>
            if(!window.location.hash)
            {
                window.location = window.location + '#loaded';
                window.location.reload();
            }
        </script>
        
        <nav>
            <?php include '../includes/nav.php'; ?>
        </nav>
        
        
        <section>
            <div class="main">
                <h1>Nastąpiło wylogowanie</h1>
            </div>
        </section>
        
        
        <footer>
            <?php include '../includes/footer.php'; ?>
        </footer>
    </body>
</html>