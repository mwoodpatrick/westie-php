<h1>This is the Westie root</h1>
Today is <?php
$datetime = new DateTime();
// set the default timezone to use.
$timezone = new DateTimeZone('America/Los_Angeles');
$datetime->setTimezone($timezone);
echo $datetime->format("F j, Y, g:i a");
?>
