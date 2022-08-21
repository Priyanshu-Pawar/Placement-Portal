<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <title>Placement</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="d.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
  <!------------header--------->
  <section id="header">
  <div class="menuBar">
            
            <ul>
              
              <a class="navbar-brand" href="#"><img src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/64/000000/external-jobs-job-search-flaticons-lineal-color-flat-icons-5.png"/></a>
              <li><a href="index.php">HOME</a>
            </li>
              <li><a href="#">PREPERATION <i class="fas fa-caret-down"></i></a>
      
                <div class="dropdownMenu">
                    <ul>
                      <li><a href="http://localhost/demo/Placement-and-internship-practice-management-system-master/">APTITUDE</a></li>
                      <li><a href="TechInterview.html">TECHNICAL INTERVIEW</a></li>
                      <li><a href="gd.html">GROUP DISCUSSION</a></li>
                      <li><a href="hr.html">HR INTERVIEW</a></li>
                    </ul>
                  </div>
            </li>
              <li><a href="#">RESUME<i class="fas fa-caret-down"></i></a>
      
                <div class="dropdownMenu">
                    <ul>
                      <li><a href="http://localhost/demo/CV-Generator-master/CV-Generator-master/">RESUME CREATER</a></li>
                      <li><a href="fresume.html">EXPERIENCE</a></li>
                    </ul>
                  </div>
            </li>
              <li><a href="#">ABOUT US <i class="fas fa-caret-down"></i></a>
      
                  <div class="dropdownMenu">
                      <ul>
                        <li><a href="quality.html">Quality</a></li>
                        <li><a href="vision.html">Vision & Mission</a></li>
                      </ul>
                    </div>
              </li>
              
            </ul>
          </div>




    <div class="banner text-center">

      <h1>A one stop portal for Placements</h1>
      <h3>Placement</h3>
    </div>
  </section>

  <div class="login">
    <a href="login.php"><button>Student</button></a>
    <a href="adminLogin.php"><button style="margin-left: 38%;">Co-ordinator</button></a>
    
    <!-- <button>College</button> -->
    <!--------<input type="button" class="btn btn-primary" value="Find Job">--->

  </div>
  <!------------------------------>
  <section id="banner1">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p class="promo-title">Placement we are having</p>
          <p class="msg">The goal is to achieve the strongest placement results and highest levels of student and employer satisfaction College placement cell is an important component of any college. The final year students appear for interviews offered by various companies invited by the placement officer. For this there is a need of an online system where the placement officer can post the upcoming placement drives. Students willing to appear for these placement drives must be able to register and get the message for any placement drive matching their qualification. </p>

        </div>
        <div class="col-md-6 text-center">
          <img src="img1/p2.png" class="img-fluid">
        </div>
      </div>
    </div>


  </section>




  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="img1/w4.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>PROBLEM DEFINITION</h5>
          <p> Students choose a specific college where the placement
            will be held, there is a need to maintain all these papers,
            causing large amount of space. It is manually done, chances
            of missing, difficult to handle the details of student.
          </p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="img1/wb.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>EXISTING SYSTEM</h5>
          <p>The existing system describes the features of the
            previous working model and their drawback. Existing
            system does all process manually..</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img1/wa.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>PROPOSED SYSTEM</h5>
          <p> The aim of the proposed system is to develop a system
            with improved facilities. The proposed system can
            overcome all the limitation of the existing system, .</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!--------------------------------->

  <section id="services">
    <div class="container">
      <div class="card" style="width: 18rem;">
        <img src="img1/p1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">registration enabled.
            The placement cell calls the companies to select their
            students for jobs via the campus interview. The placement
            cell allows the companies to view the student resumes in
            selective manner. They can filter the students profile as per
            their requirement. The job details of the placed students will
            be provided by the administrator. The administrator plays
            an important role in our project. Our project provides the
            facility of maintaining the details of the students and gets
            the requested list of candidates for the company who would
            like to recruit the students based on given query. </p>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="img1/9.webp" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text"> In order to avoid this web based
            placement managed system is proposed, where the student
            information in the college with regard to placement is
            managed efficiently. It intends to help fast in fast access
            procedures in placement related activities and ensures to
            maintain the details of the student. Students logging should
            be able to upload their personal and educational information.
            The key feature of this project is that it is one time
            registration enabled.</p>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="img1/p3.png" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">This system can be used as an
            application for the Placement Officers in the college to manage
            the student information with regard to placement. Student
            logging should be able to upload their personal and
            educational information in the form of a resume. The key
            feature of this project is that it is one time registration enabled.
            Our project provides the facility of maintaining the details of
            the students. It reduces the manual work and consumes less
            paper work to reduce the time..</p>
        </div>
      </div>
    </div>
  </section>


  <!--------------------------------->


  <footer>
    <div class="footer-content">
      <h2>code opacity</h2>
      <p>Placement and Training Deparment</p>
      <ul class="socials">

        <li class="social-items"><a href=""><img src="https://img.icons8.com/fluency/48/000000/facebook.png" /></a></li>
        <li class="social-items"><a href=""><img src="https://img.icons8.com/color/48/000000/instagram-new--v1.png" /></a></li>
        <li class="social-items"><a href=""><img src="https://img.icons8.com/color/50/000000/twitter.png" /></a></li>
        <li class="social-items"><a href=""><img src="https://img.icons8.com/color/50/000000/whatsapp--v5.png" /></a></li>

      </ul>
    </div>
    <div class="footer-bottom text-center">
      <h5>Copywrite &copy; Web coding Pro.All rights Reserved</h5>
    </div>

  </footer>

  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>

</html>