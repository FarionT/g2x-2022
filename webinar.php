<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Webinar</title>
    <link rel="icon" href="Assets/logo.png" type="image/x-icon">
    <style type="text/css">
    
      #logo-header {
        width: 40px;
      }

      * {
        background-color: white;
      }

      .navbar-expand-md {
        background-color: rgba(245, 233, 5, 0);
        height: 100px;
      }

      #kosong {
        height: 80px;
      }

      .container-fluid {
        width: 960px;
      }

      #webinar-list {
        width: 820px;
      }

      #webinar {
        height: 200px;
      }

      #day, #time ,#gdcumn {
        margin: 0;
      }

      .webinar {
        margin-bottom: 80px;
      }

      #btnRegist {
        padding-left: 50px;
        padding-right: 50px;
        padding-top: 10px;
        padding-bottom: 10px;
        border-radius: 200px;
      }
      
      footer {
        margin-top: 300px;
      }

      #logo-ig {
        width: 30px;
        margin-right: 10px;
      }

      #contact-detail {
        margin-bottom: 80px;
        margin-right: 0;
      }

      #gdcumn {
        font-size: 20px;
        width: fit-content;
      }

      #h2contctus {
        margin-right: 0;
      }

      #allright {
        margin-bottom: 50px;
      }

      img{
        width:54px;
        height:54px;
      }

    </style>
</head>
<body>
  <!-- header -->
  

<!-- content -->
    <div id="kosong"></div>
    <div class="container-fluid">
    <header>  
      <?php require_once('header.html'); ?>
  </header>
      <div id="title">
        <h1 class="d-flex justify-content-center" id="judul" >WEBINAR</h1>
        <h4 class="d-flex justify-content-center" id="subjudul">lorem ipsum lorem ipsum lorem ipsum <br> lorem ipsum lorem ipsum lorem ipsum</h4>
      </div>
      <div id="kosong"></div>
      <!-- webinar list -->
      <div class="container webinar" id="webinar-list">
        <div class="row">
          <div class="col-4"><img id="webinar" src="Assets/logo.png" alt=""></div>
          <div class="col-8 d-inline-flex align-items-center">
            <div></div>
            <div id="explaination">
              <h4>WEBINAR TITLE<br>WEBINAR TITLE</h4>
              <p id="category">Category</p>
              <p id="day">Day, DD MM YY</p>
              <p id="time">Pukul 00.00 WIB</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container webinar" id="webinar-list">
        <div class="row">
          <div class="col-3"></div>
          <div class="col-4" id="webinar-logo"><img id="webinar" src="Assets/logo.png" alt=""></div>
          <div class="col-5 d-inline-flex align-items-center">
            <div></div>
            <div id="explaination">
              <h4>WEBINAR TITLE<br>WEBINAR TITLE</h4>
              <p id="category">Category</p>
              <p id="day">Day, DD MM YY</p>
              <p id="time">Pukul 00.00 WIB</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container webinar" id="webinar-list">
        <div class="row">
          <div class="col-4"><img id="webinar" src="Assets/logo.png" alt=""></div>
          <div class="col-8 d-inline-flex align-items-center">
            <div></div>
            <div id="explaination">
              <h4>WEBINAR TITLE<br>WEBINAR TITLE</h4>
              <p id="category">Category</p>
              <p id="day">Day, DD MM YY</p>
              <p id="time">Pukul 00.00 WIB</p>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center">
        <button id="btnRegist" href="#">REGIST HERE</button>
      </div>

    <!-- footer -->
    <footer>
            <?php include("footer.html"); ?>
        </footer>
      </div>
</body>
</html>