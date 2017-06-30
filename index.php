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

<body style="background-color:#34495E">
  <font face="verdana" color="#D7DBDD">
  <h1>Hello World</h1> <br>
Your IP address is <?php echo $_SERVER["REMOTE_ADDR"]; ?>
test</font>

<?php
$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$finish = $time;
$total_time = round(($finish - $start), 4);
echo 'Page generated in '.$total_time.' seconds.';
?>
  
</body>
