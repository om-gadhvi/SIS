<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>aboutUS</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Pacifico&amp;family=Quicksand&amp;display=swap'><link rel="stylesheet" href="./contactus.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>


<style>
	footer{
    position: relative;
    background: #ffffff;
    width: 100%;
    bottom: 0;
    left: 0;
  }
  footer::before{
    content: '';
    position: absolute;
    left: 0;
    top: 100px;
    height: 1px;
    width: 100%;
    background: #000000;
  }
  footer .content{
    max-width: 1250px;
    margin: auto;
    padding: 30px 40px 40px 40px;
  }
  footer .content .top{
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 50px;
  }
  .content .top .logo-details{
    color: #000000;
    font-size: 30px;
  }
  .content .top .media-icons{
    display: flex;
  }
  .content .top .media-icons a{
    height: 40px;
    width: 40px;
    margin: 0 8px;
    border-radius: 50%;
    text-align: center;
    line-height: 40px;
    color: #000000;
    font-size: 17px;
    text-decoration: none;
    transition: all 0.4s ease;
  }
  .top .media-icons a:nth-child(1){
    background: #4267B2;
  }
  .top .media-icons a:nth-child(1):hover{
    color: #4267B2;
    background: #000000;
  }
  .top .media-icons a:nth-child(2){
    background: #1DA1F2;
  }
  .top .media-icons a:nth-child(2):hover{
    color: #1DA1F2;
    background: #000000;
  }
  .top .media-icons a:nth-child(3){
    background: #E1306C;
  }
  .top .media-icons a:nth-child(3):hover{
    color: #E1306C;
    background: #000000;
  }
  .top .media-icons a:nth-child(4){
    background: #0077B5;
  }
  .top .media-icons a:nth-child(4):hover{
    color: #0077B5;
    background: #000000;
  }
  .top .media-icons a:nth-child(5){
    background: #FF0000;
  }
  .top .media-icons a:nth-child(5):hover{
    color: #FF0000;
    background: #000000;
  }
  footer .content .link-boxes{
    width: 100%;
    display: flex;
    justify-content: space-between;
  }
  footer .content .link-boxes .box{
    width: calc(100% / 5 - 10px);
  }
  .content .link-boxes .box .link_name{
    color: #000000;
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 10px;
    position: relative;
  }
  .link-boxes .box .link_name::before{
    content: '';
    position: absolute;
    left: 0;
    bottom: -2px;
    height: 2px;
    width: 35px;
    background: #000000;
  }
  .content .link-boxes .box li{
    margin: 6px 0;
    list-style: none;
  }
  .content .link-boxes .box li a{
    color: #000000;
    font-size: 14px;
    font-weight: bold;
    text-decoration: none;
    opacity: 0.8;
    transition: all 0.4s ease
  }
  .content .link-boxes .box li a:hover{
    opacity: 1;
    text-decoration: underline;
  }
  .content .link-boxes .input-box{
    margin-right: 55px;
  }
  .link-boxes .input-box input{
    height: 40px;
    width: calc(100% + 55px);
    outline: none;
    border: 2px solid #000000;
    background: #757fd0;
    border-radius: 4px;
    padding: 0 15px;
    font-size: 15px;
    color: #000000;
    margin-top: 5px;
  }
  .link-boxes .input-box input::placeholder{
    color: #000000;
    font-size: 16px;
  }
  .link-boxes .input-box input[type="button"]{
    background: #757fd0;
    color: #000000;
    border: 2px solid #000000;
    font-size: 18px;
    font-weight: 500;
    margin: 4px 0;
    opacity: 0.8;
    cursor: pointer;
    transition: all 0.4s ease;
  }
  .input-box input[type="button"]:hover{
    opacity: 1;
  }
  footer .bottom-details{
    width: 100%;
    background: #757fd0;
    border: 2px solid #000000;
  }
  footer .bottom-details .bottom_text{
    max-width: 1250px;
    margin: auto;
    padding: 20px 40px;
    display: flex;
    justify-content: space-between;
  }
  .bottom-details .bottom_text span,
  .bottom-details .bottom_text a{
    font-size: 14px;
    font-weight: bold;
    color: #000000;
    opacity: 0.8;
    text-decoration: none;
  }
  .bottom-details .bottom_text a:hover{
    opacity: 1;
    text-decoration: underline;
  }
  .bottom-details .bottom_text a{
    margin-right: 10px;
  }
  @media (max-width: 900px) {
    footer .content .link-boxes{
      flex-wrap: wrap;
    }
    footer .content .link-boxes .input-box{
      width: 40%;
      margin-top: 10px;
    }
  }
  @media (max-width: 700px){
    footer{
      position: relative;
    }
    .content .top .logo-details{
      font-size: 26px;
    }
    .content .top .media-icons a{
      height: 35px;
      width: 35px;
      font-size: 14px;
      line-height: 35px;
    }
    footer .content .link-boxes .box{
      width: calc(100% / 3 - 10px);
    }
    footer .content .link-boxes .input-box{
      width: 60%;
    }
    .bottom-details .bottom_text span,
    .bottom-details .bottom_text a{
      font-size: 12px;
    }
  }
  @media (max-width: 520px){
    footer::before{
      top: 145px;
    }
    footer .content .top{
      flex-direction: column;
    }
    .content .top .media-icons{
      margin-top: 16px;
    }
    footer .content .link-boxes .box{
      width: calc(100% / 2 - 10px);
    }
    footer .content .link-boxes .input-box{
      width: 100%;
    }
  }
</style>

</head>
<body class="site-header">
	
  <form action="#">
  <div class="bg-light">
    <div class="container py-5">
      <div class="row h-100 align-items-center py-5">
        <div class="col-lg-6">
          <h1 class="display-4" style="font-weight: 500;">About us</h1>
          <p class="font-italic lead text-muted mb-0" style="font-weight: 400;">A student information system is a software solution that has all the information of a student under a single dashboard. This makes it easy to track the progress of the student over time when it comes to academic performance. In addition, it also helps admins track the fees the student has pending and details about the facilities used by the student in one place.</p>
          
        </div>
        <div class="col-lg-6 d-none d-lg-block"><img src="https://bootstrapious.com/i/snippets/sn-about/illus.png" alt="" class="img-fluid"></div>
      </div>
    </div>
  </div>
  
  <div class="bg-white py-5">
    <div class="container py-5">
      <div class="row align-items-center mb-5">
        <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
          <h2 style="font-weight: bold;">Mission</h2>
          <p class="font-italic text-muted mb-4" style="font-weight: 500;">We're here to empower educational excellence. Our SIS is designed to support student success, enhance teaching and learning, and streamline administrative tasks. We believe in the power of data-driven insights, inclusivity, and technological innovation. Security, privacy, and community engagement are at the heart of what we do. We're committed to making education accessible, efficient, and impactful, and we're proud to be part of your educational journey. Thank you for choosing our SIS as your partner in education.</p><a href="#" class="btn btn-light px-5 rounded-pill shadow-sm">Learn More</a>
        </div>
        <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="https://bootstrapious.com/i/snippets/sn-about/img-1.jpg" alt="" class="img-fluid mb-4 mb-lg-0"></div>
      </div>

      <div class="row align-items-center">
        <div class="col-lg-5 px-5 mx-auto"><img src="https://bootstrapious.com/i/snippets/sn-about/img-2.jpg" alt="" class="img-fluid mb-4 mb-lg-0"></div>
        <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
          <h2 style="font-weight: bold;">Vision</h2>
          <p class="font-italic text-muted mb-4" style="font-weight: 500;">our vision is to be a pioneering force in transforming education through technology. We aspire to create a dynamic and inclusive educational ecosystem where data-driven insights and innovative solutions empower students, educators, and institutions to achieve their fullest potential. Our commitment to excellence, security, and user-centric design drives us to continuously evolve and provide the best tools for the future of education.</p><a href="#" class="btn btn-light px-5 rounded-pill shadow-sm">Learn More</a>
        </div>
      </div>
    </div>
  </div>
  
  <div class="bg-light py-5">
    <div class="container py-5">
      <div class="row mb-4">
        <div class="col-lg-5">
          <h2 class="display-4 font-weight-light">Our team</h2>
          <!-- <p class="font-italic text-muted"></p> -->
        </div>
      </div>
  
      <div class="row text-center">
        <!-- Team item-->
        <div class="col-xl-3 col-sm-6 mb-5">
          <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://bootstrapious.com/i/snippets/sn-about/avatar-4.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
            <h5 class="mb-0">Prof. Swati Nadkarni</h5><span class="small text-uppercase text-muted">I/c Head of Department</span>
            <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
        <!-- End-->
  
        <!-- Team item-->
        <div class="col-xl-3 col-sm-6 mb-5">
          <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://bootstrapious.com/i/snippets/sn-about/avatar-3.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
            <h5 class="mb-0">Prof. Uday K Bhave</h5><span class="small text-uppercase text-muted">I/c Head of Department</span>
            <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
        <!-- End-->
  
        <!-- Team item-->
        <div class="col-xl-3 col-sm-6 mb-5">
          <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://bootstrapious.com/i/snippets/sn-about/avatar-4.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
            <h5 class="mb-0">Dr. Nilakshi Jain</h5><span class="small text-uppercase text-muted">I/c Head of Department</span>
            <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
        <!-- End-->
  
        <!-- Team item-->
        <div class="col-xl-3 col-sm-6 mb-5">
          <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://bootstrapious.com/i/snippets/sn-about/avatar-4.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
            <h5 class="mb-0">Dr. Vinutha T P</h5><span class="small text-uppercase text-muted">I/c Head of Department</span>
            <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
        <!-- End-->
  
      </div>
    </div>
  </div>
  </form>
		
	</div>

<br>

<footer class="tm-overflow-hidden">
	<div class="content">
	<div class="top">
		<div class="logo-details">
		<i class="fab fa-slack"></i>
		<span class="logo_name">QuickTech</span>
		</div>
		<div class="media-icons">
		<a href="#"><i class="fab fa-facebook-f"></i></a>
		<a href="#"><i class="fab fa-twitter"></i></a>
		<a href="#"><i class="fab fa-instagram"></i></a>
		<a href="#"><i class="fab fa-linkedin-in"></i></a>
		<a href="#"><i class="fab fa-youtube"></i></a>
		</div>
	</div>
	<div class="link-boxes">
		<ul class="box">
		<li class="link_name">Company</li>
		<li><a target="_blank" href="index.php">Home</a></li>
		<li><a target="_blank" href="contactus.php">Contact us</a></li>
		<li><a target="_blank" href="aboutUS.php">About us</a></li>
		<li><a target="_blank" href="login.php">Get started</a></li>
		</ul>
		<ul class="box">
		<li class="link_name">DEPARTMENTS</li>
		<li><a href="#">Electronics & Computer Sc.</a></li>
		<li><a href="#">Computer Engg.</a></li>
		<li><a href="#">Information Technology</a></li>
		<li><a href="#">Electronics & Telecomm.</a></li>
		<li><a href="#">AI & Data Science</a></li>
		<li><a href="#">Cyber Security</a></li>
		</ul>
		<ul class="box">
		<li class="link_name">Account</li>
		<li><a href="#">Profile</a></li>
		<li><a href="#">My account</a></li>
		<li><a href="#">Prefrences</a></li>
		<li><a href="#">Purchase</a></li>
		</ul>
		<ul class="box">
		<li class="link_name">Courses</li>
		<li><a href="#">HTML & CSS</a></li>
		<li><a href="#">JavaScript</a></li>
		<li><a href="#">Python</a></li>
		<li><a href="#">C, C++</a></li>
		</ul>
		<ul class="box input-box">
		<li class="link_name">Join Us</li>
		<li><input type="text" placeholder="Enter your email"></li>
		<li><input type="button" value="Join Us"></li>
		</ul>
	</div>
	<!-- </div> -->
	<div class="bottom-details">
	<div class="bottom_text">
		<span class="copyright_text">Copyright &#169; 2021 <a href="#">CodingLab.</a>All rights reserved</span>
		<span class="policy_terms">
		<a href="#">Privacy policy</a>
		<a href="#">Terms & condition</a>
		</span>
	</div>
	</div>
</footer>

<!-- partial -->
<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
<!-- <script src='https://unpkg.com/feather-icons'></script><script  src="./script.js"></script> -->

</body>
</html>


 