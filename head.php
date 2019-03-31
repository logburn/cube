<?php
  require '../res/mobiledetect.php';
  $detect = new Mobile_Detect;
  $check = $detect->isMobile(); 
  if($check){
    $css = "mobile.css";
  } else{
    $css = "index.css";
  } 
?>
<head>
<meta charset="utf-8">
 <title>Rubiks My Cube | <?php echo $t; ?></title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo $css; ?>">
    <link href="https://fonts.googleapis.com/css?family=Cutive+Mono|PT+Sans|Share+Tech+Mono|Yantramanav:300" rel="stylesheet">
</head>