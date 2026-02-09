<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="ca">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Company Data Management - Dashboard</title>
        <link href="./styles/styles.css" rel="stylesheet" type="text/css" />
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
        <section class="main">
            <div class="container">
                <?php
                if ($_SESSION['userType'] === "Admin") {
                    echo "<a href='./check_worker_data.php'><button>Check worker data</button></a>";
                    echo "<a href='./check_all_worker_data.php'><button>Check all worker data</button></a>";
                    echo "<a href='./create_new_worker.php'><button>Create new worker</button></a>";
                    echo "<a href='./edit_worker.php'><button>Edit worker</button></a>";
                    echo "<a href='./delete_worker.php'><button>Delete worker</button></a>";
                } else {
                    echo "<a href='./check_product_data.php'><button>Check product data</button></a>";
                    echo "<a href='./check_all_product_data.php'><button>Check all product data</button></a>";
                    echo "<a href='./create_new_product.php'><button>Create new product</button></a>";
                    echo "<a href='./edit_product.php'><button>Edit product</button></a>";
                    echo "<a href='./delete_product.php'><button>Delete product</button></a>";  
                }
                ?>
            </div>
        </section>
        <footer class="footer">
            <div class="container">
                <p>Footer Filling</p>
            </div>
        </footer>
    </body>
</html>