<?php
$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$start = $time;
?>

<head>
  <link rel="stylesheet" type="text/css" href="main.css">
  <title>
    F5 Canada Social Coding Project
  </title>
</head>

<body>

  <h1>Hello World</h1> <br>

<h2>Your IP address is <?php echo $_SERVER["REMOTE_ADDR"]; ?></h2>


<?php
$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$finish = $time;
$total_time = round(($finish - $start), 4);
echo 'Page generated in '.$total_time.' seconds.';
?>
  

</body>
