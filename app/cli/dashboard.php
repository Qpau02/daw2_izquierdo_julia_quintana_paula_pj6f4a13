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
                    echo "<a href='./forms/check_worker_data_form.html'><button>Check worker data</button></a>";
                    echo "<a href='./forms/check_all_worker_data_form.html'><button>Check all worker data</button></a>";
                    echo "<a href='./forms/create_new_worker_form.html'><button>Create new worker</button></a>";
                    echo "<a href='./forms/edit_worker_form.html'><button>Edit worker</button></a>";
                    echo "<a href='./forms/delete_worker_form.html'><button>Delete worker</button></a>";
                } else {
                    echo "<a href='./forms/check_product_data_form.html'><button>Check product data</button></a>";
                    echo "<a href='./forms/check_all_product_data_form.html'><button>Check all product data</button></a>";
                    echo "<a href='./forms/create_new_product_form.html'><button>Create new product</button></a>";
                    echo "<a href='./forms/edit_product_form.html'><button>Edit product</button></a>";
                    echo "<a href='./forms/delete_product_form.html'><button>Delete product</button></a>";  
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