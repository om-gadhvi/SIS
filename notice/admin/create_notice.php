<?php include "connection.php";?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Create Notice</title>
    <!---Custom CSS File--->
    <link rel="stylesheet" href="../css/PaymentUi.css" />
   
  </head>
<body >
    
<?php
session_start();

if(isset($_POST['send_notice'])){
  $folder = "uploads/";
	$image_file=$_FILES['image']['name'];
	$file = $_FILES['image']['tmp_name'];    
	$path = $folder . $image_file;  
	$target_file=$folder.basename($image_file);
	 $imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);
	//Allow only JPG, JPEG, PNG & GIF etc formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" && $imageFileType != "pdf" && $imageFileType != "docx" && $imageFileType != "cvs") {
	$error[] = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed';   
	}
	//Set image upload size 
		if ($_FILES["image"]["size"] > 500000) {
	$error[] = 'Sorry, your image is too large. Upload less than 500 KB in size.';
	}
	if(!isset($error))
	{
	move_uploaded_file($file,$target_file); 
	}
	
	if(isset($error)){ 
	  foreach ($error as $error) { 
		  echo '<div class="message">'.$error.'</div><br>'; 	
	  }
  }
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"studentlogin");
  $query = "insert into notice values(null,'$_POST[post_date]','$_POST[to_whom]','$_POST[branch]','$_POST[subject]','$_POST[message]','$image_file')";
  $query_run = mysqli_query($connection,$query);
  if($query_run){
    echo "<script>alert('Notice Created...');
    window.location.href = 'view_all_notice.php';
    </script>"; 
  }
  else{
    echo "<script>alert('Please try again');
    window.location.href = 'view_all_notice.php';
    </script>";
  }
}
?>
    <div>
        <form action="" class="form" method="post" enctype="multipart/form-data">
          <section class="container">
          <center><header><h2>Send Notice</h2></header></center>
          <br>
          <div class="column">
            <div>
              <label  required>Semester:</label>
              <select class="select-box" name="to_whom" required>
                <option hidden>Semester*</option>
                <option>To All</option>
                <option>SEM-I</option>
                <option>SEM-II</option>
                <option>SEM-III</option>
                <option>SEM-IV</option>
                <option>SEM-V</option>
                <option>SEM-VI</option>
                <option>SEM-VII</option>
                <option>SEM-VIII</option>
              </select>
            </div>

            <br>
            <br>
            <br>

            <div class="form-group">
              <label>Post Date:</label>
              <input type="date" class="select-box" name="post_date" required>
            </div>
          </div>
            <br>
            <br>
            <div class="column">
              <div>
                <label  required>Branch:</label>
                <select class="select-box" name="branch" required>
                  <option hidden>Branch</option>
                  <option>To All</option>
                  <option>CS</option>
                  <option>IT</option>
                  <option>ECS</option>
                  <option>EXTC</option>
                  <option>CYSE</option>
                  <option>AIDS</option>
                  <option>ACT</option>
                </select>
              </div>
              <br>
              <div>
                <label>Image</label>
                <br>
                <br>
                <input type="file" name="image" class="form-control" >
              </div>
            </div>
          
	        
          <br>
          <br>
          <div class="form-group">
            <label>Subject:</label>
            <input type="text" class="select-box" name="subject" placeholder="Enter Subject" required>
          </div>

          <br>

          <div class="form-group">
            <label>Message:</label>
            <textarea name="message"  class="select-box" placeholder="Type your message..." required></textarea>
          </div>

          <button type="submit" class="btn btn-primary" name="send_notice">Send Notice</button>

        </form>
        
      </div>
      <div >
          <div>
              <img src="../images/notice.png" alt="Login" class="img-fluid p-5">
          </div>
      </div>
  </body>
</html>
