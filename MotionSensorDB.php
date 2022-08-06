<?php
  $title = "Add a new";
  include("header.php");
  //make the connection by the connectoin page
  include("connection.php");

  if(isset($_POST['add'])){
    //take value
    $var = $_POST['var'];

    //insert in the database
    $query = "INSERT INTO sensor SET sensor=$var";
    if($result = mysqli_query($con, $query)){
      header("Location: MotionSensorDB.php?=status=1");
      exit();
    } else {
      header("Location: MotionSensorDB.php?=status=0");
      exit();
    }

  }
?>

  <?php if(isset($_GET['status'])){
          if(isset($_GET['status']) == 1){
            echo "<h1> added successfully </h1>";
            exit();
          } else if(isset($_GET['status']) == 0){
            echo "<h1> Sorry not add </h1>";
            exit();
          }
        }
  ?>



  <form id="Nsensor" method="post">

    <table>
        <th>Value</th>
        <td>
          <input type="text" name="var">
        </td>
      </tr>
    </table>
    <input type="submit" name="add" id="add" value="Add">
  </form>




<?php include("footer.php");  ?>
