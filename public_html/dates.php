<div>
    <?php echo "fizzy"; ?>
    <br />
    <?php echo 2 + 3 ?>
    <h1>Hello Mark</h1>
    <?php

    // set the default timezone to use.
    date_default_timezone_set('America/Los_Angeles');

    // Prints something like: Monday
    echo "It's ".date("l")."<br/>";

    // Prints something like: Monday 8th of August 2005 03:12:46 PM
    echo date('l jS \of F Y h:i:s A')."<br/>";

    /* use the constants in the format parameter */
    // prints something like: Wed, 25 Sep 2013 15:28:57 -0700
    echo date(DATE_RFC2822)."<br/>";

    // prints something like: 2000-07-01T00:00:00+00:00
    echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000))."<br/>";

    $t = date("H");
    $y = date("Y");

    echo "t=" . $t . "<br/>";
    echo "y=" . $y . "<br/>";
    
    // Prints: July 1, 2000 is on a Saturday
    echo "December 25, ".$y." is on a " . date("l", mktime(0, 0, 0, 12, 25, $y))."<br/>";

    if (($t >= 6) && ($t < 17)) {
        echo "Have a Good Day";
    } elseif ($t <= 23) {
        echo "Have a Good Evening";
    } else {
        echo "Have a Good Night";
    }
    ?>
</div>