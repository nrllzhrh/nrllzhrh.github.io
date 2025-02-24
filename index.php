<?php

//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "portofolio");


//apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])) {
  
  //ambil data dari tiap elemen
  $nama = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $pesan = $_POST["messages"];

  //query insert data
  $query = "INSERT INTO table_contact VALUES('', '$nama', '$email', '$phone', '$pesan')";
  mysqli_query($conn, $query);

}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>My Portofolio</title>

  <!-- boxicons -->
    <link rel="stylesheet" type="text/css" href="boxicons-2.1.4/css/boxicons.min.css">
  <!-- css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>
  <header>
    <div class="logo">NU<span>R</span>UL.</div>
    <ul class="navlist">
      <li><a href="#home" class="active">Home</a></li>
      <li><a href="#about" class="active">About</a></li>
      <li><a href="#portfolio" class="active">Portofolio</a></li>
      <li><a href="#skills" class="active">Skills</a></li>
      <li><a href="#timeline" class="active">Timeline</a></li>
      <li><a href="#contact" >Contact</a></li>
    </ul>
    <div class="bx bx-menu" id="menu-icon"></div>
  </header>

  <!-- Home Section -->
  <section class="home" id="home">
    <div class="home-content">
      <h1>Hi! I'm Nurul Zahrah</h1>
      <div class="change-text">
        <h3>And I'm</h3>
        <h3>
          <span class="word">Data&nbsp;Analyst</span>
          <span class="word">Data&nbsp;Science</span>
        </h3>
      </div>

      <p>Unilizing Data And Analytics with 6 project of experiences</p>

      <div class="info-box">
        <div class="email-info">
          <h5>Email :</h5>
          <span>nurullzahrah08@gmail.com</span>
        </div>
      </div>

      <div class="btn-box">
        <a href="https://drive.google.com/file/d/17l7J6G3RPZm_4rEPW-u0ltg8-dUSlAiY/view?usp=sharing" class="btn" target="_blank">Download CV</a>
      </div>

      <div class="social-icons">
        <a href="https://www.facebook.com/nurul.zahrah.712" target="_blank"><i class='bx bxl-facebook'></i></a>
        <a href="https://instagram.com/nrllzhrh" target="_blank"><i class='bx bxl-instagram' ></i></a>
        <a href="https://wa.me/628389552878" target="_blank"><i class='bx bxl-whatsapp' ></i></a>
        <a href="https://www.linkedin.com/in/nurul-zahrah-42276422a" target="_blank"><i class='bx bxl-linkedin' target="_blank"></i></a>
      </div>
    </div>

    <div class="home-image">
      <div class="img-box">
        <img src="images/pngwing.com (4) (3).png">
      </div>

      <!-- <div class="liquid-shape">
        <svg viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" id="blobSvg">
          <path fill=" #12f7ff">
            <animate attributeName="d"
              dur = "20000ms"
              repeatCount = "indefinite"
              values = "
              M465.5,312Q465,374,412,406.5Q359,439,304.5,424.5Q250,410,201.5,413.5Q153,417,95.5,394.5Q38,372,48,311Q58,250,62,197Q66,144,106.5,108Q147,72,198.5,37Q250,2,305,31Q360,60,371,117Q382,174,424,212Q466,250,465.5,312Z;

              M413.5,291.5Q394,333,373,380Q352,427,301,426.5Q250,426,202.5,420.5Q155,415,108.5,387Q62,359,75.5,304.5Q89,250,62.5,188.5Q36,127,92.5,101Q149,75,199.5,54.5Q250,34,297.5,59.5Q345,85,369.5,126Q394,167,413.5,208.5Q433,250,413.5,291.5Z;

              M459,299Q419,348,394.5,403Q370,458,310,442Q250,426,195,433.5Q140,441,111,394Q82,347,42,298.5Q2,250,53.5,208.5Q105,167,124.5,116.5Q144,66,197,51Q250,36,304,49Q358,62,375,115Q392,168,445.5,209Q499,250,459,299Z;

              M424.5,303.5Q435,357,388,382.5Q341,408,295.5,442Q250,476,206.5,438.5Q163,401,139,364.5Q115,328,60,289Q5,250,60,211Q115,172,139.5,136Q164,100,207,96Q250,92,289.5,103Q329,114,383,128Q437,142,425.5,196Q414,250,424.5,303.5Z;

              M420.5,288.5Q383,327,361.5,366.5Q340,406,295,428Q250,450,196.5,443Q143,436,105.5,395.5Q68,355,46,302.5Q24,250,59.5,205Q95,160,131.5,134Q168,108,209,87Q250,66,297,76.5Q344,87,386.5,117Q429,147,443.5,198.5Q458,250,420.5,288.5Z;

              M400.5,292.5Q397,335,363.5,361.5Q330,388,290,420Q250,452,205.5,427.5Q161,403,106,384Q51,365,62.5,307.5Q74,250,59,190.5Q44,131,97,103.5Q150,76,200,57.5Q250,39,303.5,52Q357,65,404,99.5Q451,134,427.5,192Q404,250,400.5,292.5Z;

              M446,302.5Q432,355,384.5,378Q337,401,293.5,437.5Q250,474,196,455.5Q142,437,112.5,391.5Q83,346,64.5,298Q46,250,66.5,203Q87,156,125,127.5Q163,99,206.5,80Q250,61,292.5,81.5Q335,102,382,124Q429,146,444.5,198Q460,250,446,302.5Z;

              M465.5,312Q465,374,412,406.5Q359,439,304.5,424.5Q250,410,201.5,413.5Q153,417,95.5,394.5Q38,372,48,311Q58,250,62,197Q66,144,106.5,108Q147,72,198.5,37Q250,2,305,31Q360,60,371,117Q382,174,424,212Q466,250,465.5,312Z;
              "
            ></animate>
          </path>
        </svg>
      </div>

      <div class="liquid-shape">
        <svg viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" id="blobSvg">
          <path fill=" #12f7ff">
            <animate attributeName="d"
              dur = "20000ms"
              repeatCount = "indefinite"
              values = "
              M465.5,312Q465,374,412,406.5Q359,439,304.5,424.5Q250,410,201.5,413.5Q153,417,95.5,394.5Q38,372,48,311Q58,250,62,197Q66,144,106.5,108Q147,72,198.5,37Q250,2,305,31Q360,60,371,117Q382,174,424,212Q466,250,465.5,312Z;

              M413.5,291.5Q394,333,373,380Q352,427,301,426.5Q250,426,202.5,420.5Q155,415,108.5,387Q62,359,75.5,304.5Q89,250,62.5,188.5Q36,127,92.5,101Q149,75,199.5,54.5Q250,34,297.5,59.5Q345,85,369.5,126Q394,167,413.5,208.5Q433,250,413.5,291.5Z;

              M459,299Q419,348,394.5,403Q370,458,310,442Q250,426,195,433.5Q140,441,111,394Q82,347,42,298.5Q2,250,53.5,208.5Q105,167,124.5,116.5Q144,66,197,51Q250,36,304,49Q358,62,375,115Q392,168,445.5,209Q499,250,459,299Z;

              M424.5,303.5Q435,357,388,382.5Q341,408,295.5,442Q250,476,206.5,438.5Q163,401,139,364.5Q115,328,60,289Q5,250,60,211Q115,172,139.5,136Q164,100,207,96Q250,92,289.5,103Q329,114,383,128Q437,142,425.5,196Q414,250,424.5,303.5Z;

              M420.5,288.5Q383,327,361.5,366.5Q340,406,295,428Q250,450,196.5,443Q143,436,105.5,395.5Q68,355,46,302.5Q24,250,59.5,205Q95,160,131.5,134Q168,108,209,87Q250,66,297,76.5Q344,87,386.5,117Q429,147,443.5,198.5Q458,250,420.5,288.5Z;

              M400.5,292.5Q397,335,363.5,361.5Q330,388,290,420Q250,452,205.5,427.5Q161,403,106,384Q51,365,62.5,307.5Q74,250,59,190.5Q44,131,97,103.5Q150,76,200,57.5Q250,39,303.5,52Q357,65,404,99.5Q451,134,427.5,192Q404,250,400.5,292.5Z;

              M446,302.5Q432,355,384.5,378Q337,401,293.5,437.5Q250,474,196,455.5Q142,437,112.5,391.5Q83,346,64.5,298Q46,250,66.5,203Q87,156,125,127.5Q163,99,206.5,80Q250,61,292.5,81.5Q335,102,382,124Q429,146,444.5,198Q460,250,446,302.5Z;

              M465.5,312Q465,374,412,406.5Q359,439,304.5,424.5Q250,410,201.5,413.5Q153,417,95.5,394.5Q38,372,48,311Q58,250,62,197Q66,144,106.5,108Q147,72,198.5,37Q250,2,305,31Q360,60,371,117Q382,174,424,212Q466,250,465.5,312Z;
              "
            ></animate>
          </path>
        </svg>
      </div> -->
    </div>
  </section>

  <!-- About Section -->
  <section class="about" id="about">
    <div class="img-about">
      <img src="images/nurul-ungu (1).png" alt="">
      <div class="info-about1">
        <span>6</span>
        <p>Project Of Experience</p>
      </div>
    </div>

    <div class="about-content">
      <span>Let Me Introduce My Self</span>
      <h2>About Me</h2>
      <h3>A story of good</h3>
      <p>I am Nurul Zahrah, an active student at Bina Sarana Informatics University with
      majoring in Information Technology. Currently I am focusing on studying some
      material about data analysts, because my career goal is to become a Data Analyst.
      There are several trainings and projects that I have done and will continue to do
      do it to become a professional Data Analyst.</p>
    </div>
  </section>

  <!-- Portfolio Section -->
  <section class="portfolio" id="portfolio">
    <div class="main-text">
      <span>The Results Of My Project</span>
      <h2>Portofolio</h2>
    </div>

    <div class="section-portfolio">
      <div class="portfolio-box">
        <i class='bx bxs-layer portfolio-icons'></i>
        <h3>Bootcamp Data Analyst</h3>
        <p>
          Participate in the Independent Campus Certified Independent Study Program by taking
          data analyst field
        </p>
        <div class="btn-box portfolio-btn">
          <a href="bootcamp.html" class="btn">Read More</a>
        </div>
      </div>

      <div class="portfolio-box">
        <i class='bx bx-data portfolio-icons'></i>
        <h3>BNSP Data Science Certification</h3>
        <p>
          Take the BNSP Data Science Certification test
        </p>
        <div class="btn-box portfolio-btn">
          <a href="sertifikatbnsp.html" class="btn">Read More</a>
        </div>
      </div>

      <div class="portfolio-box">
        <i class='bx bx-line-chart portfolio-icons'></i>
        <h3>Data Science Freclass</h3>
        <p>
          Study data science material, solve several questions in each material and
          get certification.
        </p>
        <div class="btn-box portfolio-btn">
          <a href="dqlabdatascience.html" class="btn">Read More</a>
        </div>
      </div>

      <div class="portfolio-box">
        <i class='bx bx-desktop portfolio-icons'></i>
        <h3>Machine Learning Development</h3>
        <p>
          Learn the basics of data visualization, python programming and machine material
          learning and working on questions in each material.
        </p>
        <div class="btn-box portfolio-btn">
          <a href="dicodingmachinelearning.html" class="btn">Read More</a>
        </div>
      </div>

      <div class="portfolio-box">
        <i class='bx bx-store portfolio-icons'></i>
        <h3>Independent Market Evaluation</h3>
        <p>
          Evaluate skills independently by analyzing existing data on Kaggle, which
          The aim is to further develop existing skills.
        </p>
        <div class="btn-box portfolio-btn">
          <a href="marketevaluation.html" class="btn">Read More</a>
        </div>
      </div>

      <div class="portfolio-box">
        <i class='bx bx-file-find portfolio-icons'></i>
        <h3>Cisco Certification Training</h3>
        <p>
          Take several training tests at Cisco such as introduction to data science, data analytics essential, python essentials 1 and received CISCO certificate
        </p>
        <div class="btn-box portfolio-btn">
          <a href="freecertificatecisco.html" class="btn">Read More</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Skills Section -->
  <section class="skills" id="skills">
    <div class="main-text">
      <span>Technical And Professional</span>
      <h2>My Skills</h2>
    </div>

    <div class="skills-main">
      <div class="skills-left">
        <h3>Technical Skills</h3>
        <div class="skills-bar">
          <div class="info">
            <p>Data Aanalyst | Data Modelling</p>
            <p>Beginner</p>
          </div>
          <span>(Google Ccolab | Jupyter Notebook)</span>         
        </div>

        <div class="skills-bar">
          <div class="info">
            <p>Data Visualisasi</p>
            <p>Beginner</p>
          </div>
          <span>(Google Looker Studio)</span>
        </div>

        <div class="skills-bar">
          <div class="info">
            <p>SQL</p>
            <p>Beginner</p>
          </div>
          <span>(Google BigQuery)</span>
        </div>

        <div class="skills-bar">
          <div class="info">
            <p>Bahasa Pemrograman</p>
            <p>Beginner</p>
          </div>
          <span>(Pemrograman Python, HTML, PHP)</span>
        </div>
      </div>

      <div class="skills-right">
        <h3>Professional Skills</h3>
        <div class="professional">
          <div class="box">
            <div class="circle" data-dots="80" data-percent="90"></div>
            <div class="text">
              <big>80%</big>
              <small>Team Work</small>
            </div>
          </div>

          <div class="box">
            <div class="circle" data-dots="80" data-percent="90"></div>
            <div class="text">
              <big>70%</big>
              <small>Critical Thinking</small>
            </div>
          </div>

          <div class="box">
            <div class="circle" data-dots="80" data-percent="90"></div>
            <div class="text">
              <big>70%</big>
              <small>Communication</small>
            </div>
          </div>

          <div class="box">
            <div class="circle" data-dots="80" data-percent="90"></div>
            <div class="text">
              <big>60%</big>
              <small>Creativity</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Timeline Section -->
  <section class="timeline" id="timeline">
    <div class="main-text">
      <span>Working Period</span>
      <h2>Timeline</h2>
    </div>

    <div class="timeline">
      <div class="timeline-item">
        <div class="timeline-main">
        <h3>Bootcamp Data Analyst || PT. GreatEdu Global Mahardika </h3>
        <span>Agustus - Desember 2023 </span>
        </div>
        <p>Participate in the independent campus certified independent study program by taking data analiyst.</p>
      </div>
      <div class="timeline-item">
        <div class="timeline-main">
        <h3>BNSP Data Science Certification || Lembaga Sertifikasi Profesi Informatika</h3>
        <span>13 - 17 November, 2023</span>
      </div>
        <p>Take the BNSP Data Science Certification test.</p>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="contact" id="contact">
    <div class="main-text">
      <span>Ask Me Question</span>
      <h2>Contact</h2>

      <form action=" " method="post" enctype="multipart/form-data">
        <input type="text" name="name" id="name" placeholder="Your Name">
        <input type="text" name="email" id="email" placeholder="Your Email">
        <input type="number" name="phone" id="phone" placeholder="Phone Number">
        <textarea name="messages" id="messages" cols="30" rows="10" placeholder="Your Message"></textarea>
        <div class="btn-box formBtn">
          <button type="submit" name="submit" class="btn" onclick="alert('Terima Kasih Telah Menghubungi!')">Send Message</button>
        </div>
      </form>
    </div>
  </section>


  <!-- Footer Section -->
  <footer>
    <p>Copyright &copy; 2024 by Nurul Zahrah || All Right Reserved.</p>
    <a href="#home"><i class='bx bx-up-arrow-alt'></i></a>
  </footer>


  <!-- Custom Js Link -->
  <script type="text/javascript" src="js/script.js"></script>
  <script type="text/javascript" src="js/mixitup.min.js"></script>

</body>
</html>