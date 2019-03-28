<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="hu"><!--<![endif]-->
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Napi menü</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Fullscreen Background Image Slideshow with CSS3 - A Css-only fullscreen background image slideshow" />
  <meta name="keywords" content="css3, css-only, fullscreen, background, slideshow, images, content" />
  <meta name="author" content="Codrops" />
  <link rel="shortcut icon" href="../favicon.ico">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/modernizr.custom.86080.js"></script>
  <script src="js/wow.min.js"></script>
  <script>
  new WOW().init();
  </script>
  <link rel="stylesheet" type="text/css" href="css/demo.css" />
  <link rel="stylesheet" type="text/css" href="css/style3.css" />
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/animate.css">
</head>
<body id="page">
  <ul class="cb-slideshow">
    <li><span>Image 01</span><div><h3>JÓ ÉTVÁGYAT</h3></div></li>
    <li><span>Image 02</span><div><h3>JÓ ÉTVÁGYAT </h3></div></li>
    <li><span>Image 03</span><div><h3>JÓ ÉTVÁGYAT</h3></div></li>
    <li><span>Image 04</span><div><h3>JÓ ÉTVÁGYAT</h3></div></li>
    <li><span>Image 05</span><div><h3>JÓ ÉTVÁGYAT</h3></div></li>
    <li><span>Image 06</span><div><h3>JÓ ÉTVÁGYAT</h3></div></li>
    <li><span>Image 07</span><div><h3></h3></div></li>
    <li><span>Image 08</span><div><h3></h3></div></li>
    <li><span>Image 09</span><div><h3></h3></div></li>
    <li><span>Image 10</span><div><h3></h3></div></li>
    <li><span>Image 11</span><div><h3></h3></div></li>
    <li><span>Image 12</span><div><h3></h3></div></li>
    <li><span>Image 13</span><div><h3></h3></div></li>
    <li><span>Image 14</span><div><h3></h3></div></li>
    <li><span>Image 15</span><div><h3></h3></div></li>
    <li><span>Image 16</span><div><h3></h3></div></li>
    <li><span>Image 17</span><div><h3></h3></div></li>
    <li><span>Image 18</span><div><h3></h3></div></li>
    <li><span>Image 19</span><div><h3></h3></div></li>
    <li><span>Image 20</span><div><h3></h3></div></li>
  </ul>
  <?php require_once 'admin/process.php'; ?>
  <?php
  if (isset($_SESSION['message'])): ?>
  <div class="wow slideInDown alert alert-<?=$_SESSION['msg_type']?>">
    <?php
    if(empty($leves) || empty($foetel)) {
      echo $_SESSION['message'];
      unset ($_SESSION['message']);
    }
    ?>
  </div>
<?php endif ?>
<div class="container-fluid col-xl-10">
  <?php
  $mysqli = new mysqli ('localhost', 'napietel_krisz', 'mualim13', 'napietel_crud') or die(mysqli_error($mysqli));
  $result = $mysqli->query("SELECT * FROM data") or die($mysqli->error);
  $result_01 = $mysqli->query("SELECT * FROM foetel") or die($mysqli->error);
  $result_02 = $mysqli->query("SELECT * FROM desszert") or die($mysqli->error);
  //pre_r($result);
  //wow slideInRight
  ?>
  <div class="row justify-content wow slideInRight" data-wow-duration="2s" data-wow-delay="0.5s">
    <table class="table col-xl-12">
    <h4>Levesek</h4>
      <?php
      while ($row = $result->fetch_assoc()): ?>
      <tr>
        <th><?php echo $row['leves'] ?></th>
        <td><i><?php echo "".$row['ar']. "Ft" ;?></i></td>
      </tr>
    <?php endwhile; ?>
  </table>
  <table class="table col-xl-12">
  <h4>Főétel</h4>
      <?php
      while ($row = $result_01->fetch_assoc()): ?>
      <tr>
        <th><?php echo $row['foetel'] ?></th>
        <td><i><?php echo "".$row['ar_01']. "Ft" ;?></i></td>
      </tr>
    <?php endwhile; ?>
    </table>
    <table class="table col-xl-12">
    <h4>Desszert</h4>
    <?php
      while ($row = $result_02->fetch_assoc()): ?>
      <tr>
        <th><?php echo $row['desszert'] ?></th>
        <td><i><?php echo "".$row['ar_02']. "Ft" ;?></i></td>
      </tr>
    <?php endwhile; ?>
  </table>

</div>
<?php
function pre_r( $array ) {
  echo '<pre>';
  print_r($array);
  echo '</pre>';
}

?>

</div>
</body>
</html>