<!DOCTYPE html>
<html lang="en">
  <style>
    * {
        margin: 0;
        padding: 0%;
    }

    .header {
        min-height: 100vh;
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
        font-weight:600;   
        font-size: 14px;

    }

    .nav-links ul li::after {
        content: '';
        width: 0%;
        height: 2px;
        background: rgb(46, 136, 196);
        display: block;
        margin: auto;
        transition: 0.5s;
    }

    .nav-links ul li:hover::after {
        width: 100%;
        color: rgb(46, 136, 196);
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
        border: 1px solid rgb(46, 136, 196);
        background: rgb(46, 136, 196);
        transition: 1s;
        color: #fff;
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
            background: rgb(46, 136, 196);
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
          <div class="text-white">Welcome back <span class="text-blue-300">{{ Session('user') }}</span></div>
          <ul>
              @auth()
              @if (auth()->user()->User_type == 'Admin')

              <li><a href="#">USERS</a></li>
              <li><a href="{{ route('applicants.show') }}">APPLICANTS</a></li>
              <li><a href="{{ route('logout') }}" onclick="log()" id="logout">LOG OUT</a></li>

              @elseif (auth()->user()->User_type == 'user')

              <li><a href="/">HOME</a></li>
              <li><a href="{{ route('course.show') }}">COURSES</a></li>
              <li><a href="/media">MEDIA</a></li>
              <li><a href="#">CONTACT</a></li>
              <li><a href="{{ route('logout') }}" onclick="log()" id="logout">LOG OUT</a></li>
              
              @endif
              @else
              <li><a href="/">HOME</a></li>
              <li><a href="{{ route('course.show') }}">COURSES</a></li>
              <li><a href="/media">MEDIA</a></li>
              <li><a href="#">CONTACT</a></li>
              <li><a href="login"  id="login">LOG IN</a></li>
              @endauth

          </ul>
      </div>
      <i class="fa fa-bars" onclick="showMenu()"></i>
  </nav>
  @auth()

  @if (auth()->user()->User_type == 'Admin')
  <div class="text-box">
    <h1 class="text-blue-400">ADMIN DASHBOARD</h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam id, provident beatae inventore fugit, cum reiciendis, perspiciatis iure repellat officia recusandae? Saepe velit totam dicta delectus odit molestiae explicabo perferendis.</p>
    <a href="#" class="hero-btn">VIEW USERS</a>
    <a href="#" class="hero-btn">VIEW COURSES</a><br><br>
    <a href="{{ route('applicants.show') }}" class="hero-btn">VIEW APPLICANTS</a>

</div>
  @elseif (auth()->user()->User_type == 'user')
  <div class="text-box">
    <h1>H.E.A.R.T</h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam id, provident beatae inventore fugit, cum reiciendis, perspiciatis iure repellat officia recusandae? Saepe velit totam dicta delectus odit molestiae explicabo perferendis.</p>
    <a href="{{ route('course.show') }}" class="hero-btn">APPLY</a>
</div>
@endif
  @else
  <div class="text-box">
    <h1>H.E.A.R.T</h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam id, provident beatae inventore fugit, cum reiciendis, perspiciatis iure repellat officia recusandae? Saepe velit totam dicta delectus odit molestiae explicabo perferendis.</p>
    <a href="login" class="hero-btn">LOGIN</a>
    <a href="register" class="hero-btn">REGISTER</a><br><br>
    <a href="{{ route('course.show') }}" class="hero-btn">APPLY</a>
</div>  
  @endauth
</section>
@yield('body')
</body>
<script>
  function log(){
 document.getElementById("logout")
 window.alert("{{ Session('user') }} Logging out?")
}
</script>
</html>