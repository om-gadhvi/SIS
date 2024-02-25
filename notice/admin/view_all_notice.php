<?php include "connection.php";?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>All Notice</title>
    <!---Custom CSS File--->
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/PaymentUi.css"/>

    <style>
		table {
		  border-collapse: collapse;
		  width: 100%;
		}
		
		th, td {
		  text-align: left;
		  padding: 8px;
		}
		
		tr:nth-child(even) {background-color: #f2f2f2;}
		</style>
   
  </head>
<body>

 <div class="main"> 
    <div class="container_display">
      <div class="report-container">
        <div class="report-header">
          <h1 class="recent-Articles">All Notice</h1>
          <!-- <button class="view">View All</button> -->
          </div>
          <div style="overflow-x: auto;">
            <table>

              <tr>
                <th> Date</th>
                <th>Semester</th>
                <th>Branch</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Attachment</th>
              </tr>

              <?php $res=mysqli_query($con,"SELECT* from notice where post_date > DATE_ADD(CURRENT_DATE(), INTERVAL -30 DAY) ORDER by nid DESC");
                 
                    while($row=mysqli_fetch_array($res)) 
                    {
                      $imageType = '';
                      $downloadButton='';
                      if(strlen($row['image']) != 0)
                      {
                        if (str_contains($row['image'], '.pdf')) {
                            $imageType= "<img src='../images/pdf.png' height='50' width='50'>";
                          }
                          elseif(str_contains($row['image'], '.csv')){
                            $imageType= "<img src='../images/excel.png' height='50' width='50'>";
                          }
                          elseif(str_contains($row['image'], '.xls')){
                            $imageType= "<img src='../images/excel.png' height='50' width='50'>";
                          }
                          elseif(str_contains($row['image'], '.docx')){
                            $imageType= "<img src='../images/doc.png' height='50' width='50'>";
                          }
                          else{
                              $imageType= '<img src="uploads/'.$row['image'].'" height="50" width="50" alt="NA">';
                          }
                          $downloadButton = '<button class="btn-primary download_btn">Download</button>';
                      }
                      
                      
                      echo 
                        '<tr> 
                          <td>'.$row['post_date'].'</td> 
                          <td>'.$row['to_whom'].'</td> 
                          <td>'.$row['branch'].'</td> 
                          <td>'.$row['title'].'</td> 
                          <td>'.$row['message'].'</td> 
                          <td>'.$imageType.'</td>
                          <td></td> 
                          <td><a href="download.php?id='.$row['nid'].'">'.$downloadButton.'</a></td> 
                      </tr>';

              } 
              ?>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>