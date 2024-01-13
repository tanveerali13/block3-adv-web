<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <section>
        <div class="container">
            <h1>Computer Builder Database</h1>

            <?php
                ini_set('display_errors', '1');

                include __DIR__ . '/views/view-nav.php';

                // // Check if the session variable is not set
                // if (!isset($_SESSION['first_load'])) {
                //     // Include the PHP view
                //     include __DIR__ . '/views/view-home.php';

                //     // Set the session variable to indicate that the page has been loaded
                //     $_SESSION['first_load'] = true;
                // }

                include __DIR__ . '/controllers/controller.php';

            ?>
        </div>
    </section>
</body>
</html>