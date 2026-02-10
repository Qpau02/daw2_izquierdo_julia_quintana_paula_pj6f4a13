<?php
    session_start();
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Company Data Management - Delete Worker</title>
        <link href="../styles/styles.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <header class="header">
            <div class="container">
                <div class="left">
                    <p><?php echo $_SESSION['userType'] ?></p>
                </div>
                <div class="right dropdown">
                    <button class="dropbtn"><?php echo $_SESSION['user'] ?></button>
                    <nav class="dropdown-content nav">
                        <a href="./logout.php">Logout</a>
                    </nav>
                </div>
            </div>
        </header>
    </body>
</html>
