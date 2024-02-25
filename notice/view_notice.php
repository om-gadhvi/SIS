<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Notice</title>
    <!---Custom CSS File--->
    <link rel="stylesheet" href="./css/admin.css">
    <link rel="stylesheet" href="./css/PaymentUi.css" />
   
  </head>
  <body>
    <div>

    <section class="container">
    <br>
    <center><h3>Notices for you</h3></center><br>
    <?php
    session_start();
    $userId = $_SESSION['userid'];
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"studentlogin");
    //$query1 = "select * from notice where to_whom = 'To All' OR to_whom = 'To Class $_SESSION[class]'";
    $query = "SELECT DISTINCT n.* FROM notice n LEFT JOIN student s ON n.to_whom = s.Sem OR n.branch = s.phoneCode2 where s.UserId = $userId OR (n.to_whom = 'To All' AND n.to_whom = s.Sem) AND (n.branch = 'To All' OR n.branch = s.phoneCode2);";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run)){
      ?>
     

        <div>

          <div class="report-container">
				  <div class="report-header">
					<h5 class="recent-Articles"><?php echo $row['title'];?></h5>
					<!-- <button class="view">View All</button> -->
				  </div>

            <div style="overflow-x: auto;">
            <table>
              <tr>
              <th><?php echo $row['message'];?></th>
              </tr>
            </table>
            </div>
          </div>
          
          <br>
        </div>
    
      <?php
    }
    ?>
    </div>
  </body>
</html>
