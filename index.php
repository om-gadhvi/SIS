<?php
session_start();
session_unset();
session_destroy();
//header('location: login-user.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Home.css">
  <link rel="stylesheet" href="./chatbox/style.css">
  <!-- Google Fonts Link For Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="./cousal.css">

  <title>Home_page</title>


  <style>
    footer {
      position: relative;
      background: #ffffff;
      width: 100%;
      bottom: 0;
      left: 0;
    }

    footer::before {
      content: '';
      position: absolute;
      left: 0;
      top: 100px;
      height: 1px;
      width: 100%;
      background: #000000;
    }

    footer .content {
      max-width: 1250px;
      margin: auto;
      padding: 30px 40px 40px 40px;
    }

    footer .content .top {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 50px;
    }

    .content .top .logo-details {
      color: #000000;
      font-size: 30px;
    }

    .content .top .media-icons {
      display: flex;
    }

    .content .top .media-icons a {
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

    .top .media-icons a:nth-child(1) {
      background: #4267B2;
    }

    .top .media-icons a:nth-child(1):hover {
      color: #4267B2;
      background: #000000;
    }

    .top .media-icons a:nth-child(2) {
      background: #1DA1F2;
    }

    .top .media-icons a:nth-child(2):hover {
      color: #1DA1F2;
      background: #000000;
    }

    .top .media-icons a:nth-child(3) {
      background: #E1306C;
    }

    .top .media-icons a:nth-child(3):hover {
      color: #E1306C;
      background: #000000;
    }

    .top .media-icons a:nth-child(4) {
      background: #0077B5;
    }

    .top .media-icons a:nth-child(4):hover {
      color: #0077B5;
      background: #000000;
    }

    .top .media-icons a:nth-child(5) {
      background: #FF0000;
    }

    .top .media-icons a:nth-child(5):hover {
      color: #FF0000;
      background: #000000;
    }

    footer .content .link-boxes {
      width: 100%;
      display: flex;
      justify-content: space-between;
    }

    footer .content .link-boxes .box {
      width: calc(100% / 5 - 10px);
    }

    .content .link-boxes .box .link_name {
      color: #000000;
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 10px;
      position: relative;
    }

    .link-boxes .box .link_name::before {
      content: '';
      position: absolute;
      left: 0;
      bottom: -2px;
      height: 2px;
      width: 35px;
      background: #000000;
    }

    .content .link-boxes .box li {
      margin: 6px 0;
      list-style: none;
    }

    .content .link-boxes .box li a {
      color: #000000;
      font-size: 14px;
      font-weight: bold;
      text-decoration: none;
      opacity: 0.8;
      transition: all 0.4s ease
    }

    .content .link-boxes .box li a:hover {
      opacity: 1;
      text-decoration: underline;
    }

    .content .link-boxes .input-box {
      margin-right: 55px;
    }

    .link-boxes .input-box input {
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

    .link-boxes .input-box input::placeholder {
      color: #000000;
      font-size: 16px;
    }

    .link-boxes .input-box input[type="button"] {
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

    .input-box input[type="button"]:hover {
      opacity: 1;
    }

    footer .bottom-details {
      width: 100%;
      background: #757fd0;
      border: 2px solid #000000;
    }

    footer .bottom-details .bottom_text {
      max-width: 1250px;
      margin: auto;
      padding: 20px 40px;
      display: flex;
      justify-content: space-between;
    }

    .bottom-details .bottom_text span,
    .bottom-details .bottom_text a {
      font-size: 14px;
      font-weight: bold;
      color: #000000;
      opacity: 0.8;
      text-decoration: none;
    }

    .bottom-details .bottom_text a:hover {
      opacity: 1;
      text-decoration: underline;
    }

    .bottom-details .bottom_text a {
      margin-right: 10px;
    }

    @media (max-width: 900px) {
      footer .content .link-boxes {
        flex-wrap: wrap;
      }

      footer .content .link-boxes .input-box {
        width: 40%;
        margin-top: 10px;
      }
    }

    @media (max-width: 700px) {
      footer {
        position: relative;
      }

      .content .top .logo-details {
        font-size: 26px;
      }

      .content .top .media-icons a {
        height: 35px;
        width: 35px;
        font-size: 14px;
        line-height: 35px;
      }

      footer .content .link-boxes .box {
        width: calc(100% / 3 - 10px);
      }

      footer .content .link-boxes .input-box {
        width: 60%;
      }

      .bottom-details .bottom_text span,
      .bottom-details .bottom_text a {
        font-size: 12px;
      }
    }

    @media (max-width: 520px) {
      footer::before {
        top: 145px;
      }

      footer .content .top {
        flex-direction: column;
      }

      .content .top .media-icons {
        margin-top: 16px;
      }

      footer .content .link-boxes .box {
        width: calc(100% / 2 - 10px);
      }

      footer .content .link-boxes .input-box {
        width: 100%;
      }
    }
  </style>
</head>

<body class="site-header">
  <header class="clearfix">
    <nav>
      <div class="logo">
        <img src="./image/Quick-3--unscreen.gif" style="width: 50%; margin-top: -12%; margin-left: -7%" alt="">
        <!-- <h1>QuickTech</h1> -->
      </div>
      <div class="menu">
        <ul>
          <a href="index.php">
            <li>Home</li>
          </a>
          <a href="https://drive.google.com/file/d/18oDXg9JYLKpaLBpXuXcNsa4v-R4sUMTb/view?usp=share_link">
            <li>Notification</li>
          </a>
          <a href="https://drive.google.com/file/d/1xHS30K-3ZD46r6azxvopkpqzC9csTL3M/view?usp=share_link">
            <li>Scholarship</li>
          </a>
          <!-- <li>AboutUs</li> -->
          <a target="_blank" href="./Aboutus.php">
            <li>AboutUs</li>
          </a>
          <a target="_blank" href="./contactus.php">
            <li>ContactUs</li>
          </a>
        </ul>
      </div>
    </nav>

  </header>
  <section>
    <div class="leftside">
      <img src="image/intro4.png">
    </div>
    <div class="rightside">
      <h1>Student</h1>
      <h1>Information</h1>
      <h1> System</h1>
      <p> A student information system is a software solution that has all the information of a student under a single dashboard. This makes it easy to track the progress of the student over time when it comes to academic performance. In addition, it also helps admins track the fees the student has pending and details about the facilities used by the student in one place.</p>
      <a href="login.php"><button>Welcome</button></a>
    </div>

  </section>
  <br>
  <br>


  <div class="slide">
    <section style="text-align:center;">
      <div class="report-containerr">
        <br>
        <div class="report-bodyy">
          <div class="carousel">
            <div class="carousel_inner">
              <div class="carousel_item carousel_item__active">
                <img src="./image/IT-banner1.jpg" alt="" class="carousel_img">
              </div>
              <div class="carousel_item">
                <img src="./image/IT-banner1.jpg" alt="" class="carousel_img">
              </div>
              <div class="carousel_item">
                <img src="./image/IT-banner1.jpg" alt="" class="carousel_img">
              </div>

            </div>
    </section>
  </div>

  <br>
  <br>

  <div>
    <div class="card">
      <div class="report-container">
        <div class="report-header">

        </div>
        <br>
        <div class="report-body">
          <div class="report-topic-heading">
            <h3 class="t-op">Notifications</h3>
            <a href="https://drive.google.com/file/d/18oDXg9JYLKpaLBpXuXcNsa4v-R4sUMTb/view?usp=share_link"><button class="view">View</button></a>

          </div>
          <br>
          <div class="report-topic-heading">
            <h3 class="t-op">Schedule</h3>
            <a href="https://drive.google.com/file/d/1KhQbcNyelfp65CpPuffjNLrTH9_maTMf/view?usp=share_link"><button class="view">View</button></a>

          </div>
          <br>
          <div class="report-topic-heading">
            <h3 class="t-op">Candidate/Admin Login</h3>
            <a href="login.php"><button class="view">Login</button></a>

          </div>
          <br>
          <div class="report-topic-heading">
            <h3 class="t-op">User Manual</h3>
            <a href="USER_MANUAL.pdf"></a>
            <a href="https://drive.google.com/file/d/1fPGh_htW_v8ezhejPfCzCSvi8taNJqMY/view?usp=share_link"><button class="view">View </button></a>

          </div>
          <br>
          <div class="report-topic-heading">
            <h3 class="t-op">Subjects/Syllabus</h3>
            <a href="https://drive.google.com/file/d/1llb5vGqqM9Lm6iIIJBOO6MVgo2O3ChGz/view?usp=share_link"><button class="view">View</button></a>

          </div>
          <br>
          <div class="report-topic-heading">
            <h3 class="t-op">Question Papers</h3>
            <a href="https://drive.google.com/file/d/1dZahdSL6CTBrf6MFjAMsZ8z5AqGRvY0d/view?usp=share_link"><button class="view">View All</button></a>

          </div>
        </div>
      </div>


      <section>
        <div>
          <button class="chatbot-toggler">
            <span class="material-symbols-rounded">mode_comment</span>
            <span class="material-symbols-outlined">close</span>
          </button>
          <div class="chatbot">
            <header>
              <h2>Chatbot</h2>
              <span class="close-btn material-symbols-outlined">close</span>
            </header>
            <ul class="chatbox">
              <li class="chat incoming">
                <span class="material-symbols-outlined">smart_toy</span>
                <p>Hi there 👋<br>How can I help you today?</p>
              </li>
            </ul>
            <div class="chat-input">
              <textarea placeholder="Enter a message..." spellcheck="false" required></textarea>
              <span id="send-btn" class="material-symbols-rounded">send</span>
            </div>
          </div>

        </div>
      </section>


      <br>
      <br>
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
      <script src="./chatbox/script.js"></script>
      <script src="./causal.js"></script>
</body>

</html>