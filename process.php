<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $fullname = $_POST['fullname'];
    print $fullname . '<br>';
    $password = $_POST['passwd'];
    print $password . '<br>';
    $address = $_POST['address'];
    print $address . '<br>';
    $car = $_POST['car'];
    print $car . '<b>';
    $genser = $_POST['gender'];
    print $address . '<b>';
    $lang = $_POST['lang'];
    print_r($lang);
    $page = $_POST['page'];
    print $page . '<b>';
    $user = $_REQUEST['user'];
    print $user . '<b>';
    ?>
</body>
</html>