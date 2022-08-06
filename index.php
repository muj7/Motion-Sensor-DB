<?php
  $title = "Show Sensors";
  include("header.php");
  //make the connection by the connectoin page
  include("connection.php");


  $sensors = array();

  $query = 'SELECT * FROM sensor';
  $result = mysqli_query($con, $query);

  while($sensor = mysqli_fetch_assoc($result))
  {
    $sensors[] = $sensor;
  }
?>

    <ul>
        <?php foreach ($sensors as $sensor) { ?>
      <li> <?php echo $sensor["sensor"]."<br>"; ?></li>
      <?php } ?>
    </ul>


<?php include("footer.php"); ?>
