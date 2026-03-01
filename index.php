<?php
include 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP App</title>
    <style>
        body {
            font-family: Arial;
            text-align: center;
            margin-top: 100px;
        }
        .box {
            padding: 20px;
            border-radius: 8px;
            display: inline-block;
        }
        .DEV { background-color: #d4edda; }
        .TEST { background-color: #fff3cd; }
        .PROD { background-color: #f8d7da; }
    </style>
</head>
<body>

<div class="box <?php echo $environment; ?>">
    <h1>🚀 Simple PHP Application Updated from dev1 user</h1>
    <h1>Updated from dev 2</h1>
    <h2>Environment: <?php echo $environment; ?></h2>
    <p>Server IP: <?php echo $_SERVER['SERVER_ADDR']; ?></p>
    <p>Hostname: <?php echo gethostname(); ?></p>
</div>

</body>
</html>
