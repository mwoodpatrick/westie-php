
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP Language</h1>
    <?php echo "1) PHP Special Syntax Code"; ?><br>

    <?= "2) PHP Special Syntax Code"; ?><br>

    <!-- Not Working-->  <? "3) PHP Special Syntax Code" ?> 

<h1>This is the Westie root</h1>
Today is <?php
$datetime = new DateTime();
// set the default timezone to use.
$timezone = new DateTimeZone('America/Los_Angeles');
$datetime->setTimezone($timezone);
echo $datetime->format("F j, Y, g:i a");
?>

<a href="https://www.w3schools.com">Visit W3Schools</a>

<h1>Loaded Files</h1>

<?php
var_dump(php_ini_loaded_file(), php_ini_scanned_files());
?>

<h1>PHP Info</h1>

<a href="https://linuxconfig.org/how-to-create-phpinfo-php-page">How to create phpinfo.php page</a>

<?php echo phpinfo(); ?>

<h1>XDebug</h1>
<?php echo xdebug_info(); ?>

</body>
</html>

