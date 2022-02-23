<?php
    //allow the config define('_CONFIG_', true);
const _CONFIG_ = true;
    //Require config
    require_once "inc/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Page Title</title>

    <base href="/" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.11.1/dist/css/uikit.min.css" />
</head>
<body>

<div class="uk-section uk-container">
    <div class="uk-section uk-container">
        <?php
        echo "Hello World, today is: ";
        echo date("Y m d");
        ?>
        <p>
            <a href="/login2.php">Login</a>
            <a href="/register.php">Register</a>
        </p>

    </div>
</div>
<?php require_once "inc/footer.php"; ?>



</body>
</html>


