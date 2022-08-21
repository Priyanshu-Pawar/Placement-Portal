<?php 
include 'connect.php';
include 'db_connect2.php';

?>






<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags-->
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="Colorlib Templates" />
    <meta name="author" content="Colorlib" />
    <meta name="keywords" content="Colorlib Templates" />

    <!-- Title Page-->
    <title>Apply for job by Colorlib</title>

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />

    <!-- Font special for pages-->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
      rel="stylesheet"
    />

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all" />
  </head>

  <body>
    <form action="" method="POST" enctype="multipart/form-data">
      <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
          <div class="card card-6">
            <div class="card-heading">
              <h2 class="title">Apply for job</h2>
            </div>
            <div class="card-body">
              <form method="POST">
                <div class="form-row">
                  <div class="name">First name</div>
                  <div class="value">
                    <input
                      class="input--style-6"
                      type="text"
                      name="firstName"
                      placeholder="First Name"
                      required
                    />
                  </div>
                </div>
                <div class="form-row">
                  <div class="name">Middle name</div>
                  <div class="value">
                    <input
                      class="input--style-6"
                      type="text"
                      name="midName"
                      placeholder="Middle Name"
                      required
                    />
                  </div>
                </div>
                <div class="form-row">
                  <div class="name">Last name</div>
                  <div class="value">
                    <input
                      class="input--style-6"
                      type="text"
                      name="lastName"
                      placeholder="Last Name"
                      required
                    />
                  </div>
                </div>
                <div class="form-row">
                  <div class="name">Email address</div>
                  <div class="value">
                    <div class="input-group">
                      <input
                        class="input--style-6"
                        type="email"
                        name="email"
                        placeholder="example@email.com"
                        required
                      />
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="name">Phone</div>
                  <div class="value">
                    <input class="input--style-6" type="tel" name="number" placeholder="+91 8888 888 888" required />
                  </div>
                </div>

                <div class="form-row">
                  <div class="name">Gender</div>
                  <div class="value">
                    <select class="custom-select" name="gender" id="inputGroupSelect02">
                      <option selected name="gender">Choose...</option>
                      <option value="Male" required name="gender">Male</option>
                      <option value="Female" required  name="gender">Female</option>
                      <option value="Other" required name="gender">Other</option>
                    </select>
                  </div>
                </div>
                <div class="form-row">
                  <div class="name">Upload Image</div>
                  <div class="value">
                    <div class="input-group js-input-file">
                      <input
                        class="input-file"
                        type="file"
                        name="img"
                        id="file"
                        required
                      />
                      <label class="label--file" for="file">Choose file</label>
                      <span class="input-file__info">No file chosen</span>
                    </div>
                    <div class="label--desc">
                      Upload your Image or any other relevant file. Max file
                      size 10 MB
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="name">Upload Resume</div>
                  <div class="value">
                    <div class="input-group js-input-file">
                      <input
                      name="pdf"
                        id="file1"
                        required
                      class="input-file"
                      type="file">
                      
                      <label class="label--file" for="file1">Choose file</label>
                      <span class="input-file__info">No file chosen</span>
                    </div>
                    <div class="label--desc">
                      Upload your CV/Resume or any other relevant file. Max file
                      size 10 MB
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="card-footer">
              <button class="btn btn--radius-2 btn--blue-2" type="submit">
                Send Application
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- Jquery JS-->
      <script src="vendor/jquery/jquery.min.js"></script>

      <!-- Main JS-->
      <script src="js/global.js"></script>
    </form>
  </body>
  <!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
<!-- end document-->
