<!DOCTYPE html>
<html lang="en">
  <style>
    * {
        margin: 0;
        padding: 0%;
    }

    .header {
        min-height: 80vh;
        width: 100%;
        background-image: linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)), url();
        background-position: center;
        background-size: cover;
        position: relative;
    }

    nav {
        display: flex;
        padding: 2% 6%;
        justify-content: space-between;
        align-items: center;
    }

    nav img {
        width: 150px;
    }

    .nav-links {
        flex: 1;
        text-align: right;
    }

    .nav-links ul li {
        list-style: none;
        display: inline-block;
        padding: 8px 12px;
        position: relative;
    }

    .nav-links ul li a {
        color: #fff;
        text-decoration: none;
        font-size: 13px;
    }

    .nav-links ul li::after {
        content: '';
        width: 0%;
        height: 2px;
        background: #f44336;
        display: block;
        margin: auto;
        transition: 0.5s;
    }

    .nav-links ul li:hover::after {
        width: 100%;
    }

    .text-box {
        width: 90%;
        color: #fff;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    }

    .text-box h1 {
        font-size: 62px;
    }

    .text-box p {
        margin: 10px 0 40px;
        font-size: 15px;
        color: #fff;
    }

    .hero-btn {
        display: inline-block;
        text-decoration: none;
        color: #fff;
        border: 1px solid #fff;
        padding: 12px 34px;
        font-size: 13px;
        background: transparent;
        position: relative;
        cursor: pointer;
    }

    .hero-btn:hover {
        border: 1px solid #f44336;
        background: #f44336;
        transition: 1s;
    }

    nav.fa {
        display: none;
    }

    @media(max-width: 700px) {
        .text-box h1 {
            font-size: 20px;
        }

        .nav-links ul li {
            display: block;
        }

        .nav-links {
            position: absolute;
            background: #f44336;
            height: 100vh;
            width: 200px;
            top: 0%;
            right: -200px;
            text-align: left;
            z-index: 2;
            transition: 1s;
        }

        nav .fa {
            display: block;
            color: #fff;
            margin: 10px;
            font-size: 22px;
            cursor: pointer;
        }
    }
     /* course */
     .course {
        width: 80%;
        margin: auto;
        text-align: center;
        padding-top: 100px;
    }

    h1 {
        font-size: 36px;
        font-weight: 600;
    }

    p {
        color: #777;
        font-size: 14px;
        font-weight: 300;
        line-height: 22px;
        padding: 10px;
    }

    .row {
        margin-top: 5%;
        display: flex;
        justify-content: space-between;
    }

    .course-col {
        flex-basis: 31%;
        background: #fff3f3;
        border-radius: 10px;
        margin-bottom: 5%;
        padding: 20px 12px;
        box-sizing: border-box;
        transition: 0.5s;
    }

    .course-col2 {
        flex-basis: 44%;
        background: #fff3f3;
        border-radius: 10px;
        margin-bottom: 5%;
        padding: 20px 12px;
        box-sizing: border-box;
        transition: 0.5s;
    }

    h3 {
        text-align: center;
        font-weight: 600;
        margin: 10px 0;
    }

    .course-col:hover {
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2);
    }

    @media(max-width: 700px) {
        .row {
            flex-direction: column;
        }
    }
    .course-col2:hover {
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2);
    }

    @media(max-width: 700px) {
        .row {
            flex-direction: column;
        }
    }
  </style>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">   
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

<section class="header">
  <nav>
      <a href="#"><img src="" alt=""></a>
      <div class="nav-links" id="navLinks">
          <i class="fa fa-times" onclick="hideMenu()"></i>
          <ul>
              <li><a href="/">HOME</a></li>
              <li><a href="courses#course">COURSES</a></li>
              <li><a href="#">MEDIA</a></li>
              <li><a href="#">CONTACT</a></li>
              <li><a href="#">ADMIN</a></li>
              <li><a href="{{ route('logout') }}">LOG OUT</a></li>
              
          </ul>
      </div>
      <i class="fa fa-bars" onclick="showMenu()"></i>
  </nav>

  <div class="text-box">
      <h2>H.E.A.R.T</h2>
     <p style="font-weight: 700">Your Competence is Our Goal</p>

  </div>
</section>

@yield('body')


</body>
</html>