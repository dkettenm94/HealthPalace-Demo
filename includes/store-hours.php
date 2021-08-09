<!DOCTYPE html>
<html lang="en" xml:lang="en"><head>
    <meta charset="utf-8">

    <head>
        <title>PHP Store Hours</title>

        <style type="text/css">
        body {
            font-family: 'Helvetica Neue', arial;
            text-align: center;
        }
        table {
            font-size: small;
            text-align: left;
            margin: 100px auto 0 auto;
            border-collapse: collapse;
        }
        td {
            padding: 2px 8px;
            border: 1px solid #ccc;
        }
        </style>
    </head>

    <body>

    <h1></h1>
    <h2></h2>

    <?php

    // REQUIRED
    // Set your default time zone (listed here: http://php.net/manual/en/timezones.php)
    date_default_timezone_set('Europe/Berlin');
    // Include the store hours class
    require __DIR__ . '/StoreHours.class.php';

    // REQUIRED
    // Define daily open hours
    // Must be in 24-hour format, separated by dash
    // If closed for the day, leave blank (ex. sunday)
    // If open multiple times in one day, enter time ranges separated by a comma
    $hours = array(
        'mon' => array(''),
        'tue' => array('13:00-21:00'),
        'wed' => array('13:00-21:00'),
        'thu' => array('13:00-21:00'),
        'fri' => array('16:00-23:00'),
        'sat' => array('16:00-23:00'),
        'sun' => array('')
    );

    // OPTIONAL
    // Add exceptions (great for holidays etc.)
    // MUST be in a format month/day[/year] or [year-]month-day
    // Do not include the year if the exception repeats annually
    $exceptions = array(
    
    );

    $config = array(
        'separator'      => ' - ',
        'join'           => ' and ',
        'format'         => 'H:i',
        'overview_weekdays'  => array('Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag', 'Sonntag')
    );

    // Instantiate class
    $store_hours = new StoreHours($hours, $exceptions, $config);
    
    // Display open / closed message
    if($store_hours->is_open()) {
        echo "<strong><span style='color: green;'>Wir haben derzeit geöffnet, unsere heutigen Öffnungszeiten sind: " . $store_hours->hours_today() . ".</strong>";
    } else {
        echo "<strong><span style='color: red;'>Wir haben derzeit geschlossen, unsere heutigen Öffnungszeiten sind: " . $store_hours->hours_today() . ".</strong>";
    }

    ?>

    </body>

</html>
