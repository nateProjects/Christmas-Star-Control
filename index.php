<?php
    if (!empty($_POST))
    {
        resetLights();
    }
    if (isset($_POST['allon']))
    {
        exec($cmd+'/usr/bin/sudo /usr/bin/python3 /home/pi/Programmable-Christmas-Star/all_on.py 2>/dev/null >/dev/null &');
    }
    if (isset($_POST['inout']))
    {
        exec('/usr/bin/sudo /usr/bin/python3 /home/pi/Programmable-Christmas-Star/in_out.py 2>/dev/null >/dev/null &');
    }
    if (isset($_POST['random']))
    {
        exec('/usr/bin/sudo /usr/bin/python3 /home/pi/Programmable-Christmas-Star/random_leds.py 2>/dev/null >/dev/null &');
    }
    if (isset($_POST['slow']))
    {
        exec('/usr/bin/sudo /usr/bin/python3 /home/pi/Programmable-Christmas-Star/slow_walk.py 2>/dev/null >/dev/null &');
    }
    if (isset($_POST['twinkle']))
    {
        exec('/usr/bin/sudo /usr/bin/python3 /home/pi/Programmable-Christmas-Star/twinkle.py 2>/dev/null >/dev/null &');
    }
    if (isset($_POST['reset']))
    {
        resetLights();
    }
    if (isset($_POST['down']))
    {
        exec('/usr/bin/sudo shutdown -h now 2>/dev/null >/dev/null &');
    }
    function resetLights() {
        exec('/usr/bin/sudo /usr/bin/pkill -f "/home/pi/Programmable-Christmas-Star/" 2>/dev/null >/dev/null &');
        sleep(1);
    }
?>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <form action="" method="post">
    <p>
        <button type="submit" class="btn btn-primary btn-lg" name="allon">All On</button>
    </p>
        <p>
        <button type="submit" class="btn btn-primary btn-lg" name="inout">In & Out</button>
    </p>
        <p>
        <button type="submit" class="btn btn-primary btn-lg" name="random">Random LEDs</button>
    </p>
        <p>
        <button type="submit" class="btn btn-primary btn-lg" name="slow">Slow Walk</button>
    </p>
        <p>
        <button type="submit" class="btn btn-primary btn-lg" name="twinkle">Twinkle</button>
    </p>
        <p>
        <button type="submit" class="btn btn-danger" name="reset">Reset</button>
    </p>
        <p>
        <button type="submit" class="btn btn-danger" name="down">Shut Down</button>
    </p>
    </form>
</body>