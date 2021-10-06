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
        background-image: linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)), url(../IMAGES/weed.jpg);
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
        background: rgb(46, 136, 196);
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
        border: 1px solid rgb(46, 136, 196);
        background: rgb(46, 136, 196);
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
    <a href="#"><img src="../IMAGES/HEART.png" alt=""></a>
      <div class="nav-links" id="navLinks">
          <i class="fa fa-times" onclick="hideMenu()"></i>
          @auth()<div class="text-white"><a href="{{route('update.show',auth()->user()->id)}}">{{ Session('user') }}</a></div>
          @endauth<ul>
              <li><a href="/">HOME</a></li>
              <li><a href="{{ route('course.show') }}#course">COURSES</a></li>
              <li><div>
                <button onclick="openModal('main-modal')" class='text-white text-sm '>CONTACT US</button>
              </div>  </li>
              @auth()
              @if (auth()->user()->User_type == 'Admin')
              <li><a href="{{ route('logout') }}" onclick="log()" id="logout">LOG OUT</a></li>
              <li><a href="#">ADMIN</a></li>
              @elseif (auth()->user()->User_type == 'user')
              <li><a href="{{ route('logout') }}" onclick="log()" id="logout">LOG OUT</a></li>
              @endif
              @else
              <li><a href="{{ route('login') }}"  id="login">LOG IN</a></li>
              @endauth
              
          </ul>
      </div>
      <i class="fa fa-bars" onclick="showMenu()"></i>
  </nav>

  <div class="text-box">
      <h2>H.E.A.R.T</h2>
     <p style="font-weight: 700">Your Competence is Our Goal</p>

  </div>
</section>
<div class="main-modal fixed w-full inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster" style="background: rgba(0,0,0,.7);">
  <div class="border border-blue-500 shadow-lg modal-container bg-white w-4/12 md:max-w-11/12 mx-auto rounded-xl shadow-lg z-50 overflow-y-auto">
    <div class="modal-content py-4 text-left px-6">
      <!--Title-->
      <div class="flex justify-between items-center pb-3">
        <p class="text-2xl font-bold text-gray-500">Contact us</p>
        <div class="modal-close cursor-pointer z-50" onclick="modalClose('main-modal')">
          <svg class="fill-current text-gray-500" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
            viewBox="0 0 18 18">
            <path
              d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
            </path>
          </svg>
        </div>
      </div>
      <!--Body-->
      <div class="my-5 mr-5 ml-5 flex justify-center">
        <form action="{{ route('send.mail') }}" method="POST" class="w-full">
          @csrf
          <div class="">
            <div class="">
                <label for="phone" class="text-md text-gray-600">Enter your Email</label>
            </div>
            <div class="">
                <input type="email" id="phone" autocomplete="off" name="email" class="h-3 p-6 w-full border-2 border-gray-300 mb-5 rounded-md" placeholder="example@gmail.com" required>
            </div>
            <div class="">
                <label for="id_number" class="text-md text-gray-600">Message</label>
            </div>
            <div class="">
            <textarea name="message" id="" cols="40" rows="10" class=" w-full border-2 border-gray-300 mb-5 rounded-md" required></textarea>    
            </div>
        <input type="submit" value="Send" class="bg-blue-500 rounded text-white py-2 px-3 w-40 ml-24 hover:bg-blue-600">
          </div>
      </form>
      </div>
      <!--Footer-->
      <div class="flex justify-end pt-2 space-x-14">
        <!-- <button
          class="px-4 bg-gray-200 p-3 rounded text-black hover:bg-gray-300 font-semibold" onclick="modalClose('main-modal')">Cancel</button>
        <button
          class="px-4 bg-blue-500 p-3 ml-3 rounded-lg text-white hover:bg-teal-400" onclick="validate_form(document.getElementById('add_caretaker_form'))">Confirm</button> -->
      </div>
    </div>
  </div>
</div>
  <div class="another-modal fixed w-full inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster" style="background: rgba(0,0,0,.7);">
  <div class="border border-blue-500 shadow-lg modal-container bg-white w-4/12 md:max-w-11/12 mx-auto rounded-xl shadow-lg z-50 overflow-y-auto">
    <div class="modal-content py-4 text-left px-6">
      <!--Title-->
      <div class="flex justify-between items-center pb-3">
        <p class="text-2xl font-bold text-gray-500">Edit Caretaker</p>
        <div class="modal-close cursor-pointer z-50" onclick="modalClose('another-modal')">
          <svg class="fill-current text-gray-500" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
            viewBox="0 0 18 18">
            <path
              d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
            </path>
          </svg>
        </div>
      </div>
      <!--Body-->
      <!--Footer-->
      <div class="flex justify-end pt-2 space-x-14">
        <button
          class="px-4 bg-gray-200 p-3 rounded text-black hover:bg-gray-300 font-semibold" onclick="modalClose('another-modal')">Cancel</button>
        <button
          class="px-4 bg-blue-500 p-3 ml-3 rounded-lg text-white hover:bg-teal-400" onclick="validate_form(document.getElementById('add_caretaker_form'))">Confirm</button>
      </div>
    </div>
  </div>
</div>

<script>
      all_modals = ['main-modal', 'another-modal']
      all_modals.forEach((modal)=>{
          const modalSelected = document.querySelector('.'+modal);
          modalSelected.classList.remove('fadeIn');
          modalSelected.classList.add('fadeOut');
          modalSelected.style.display = 'none';
      })
      const modalClose = (modal) => {
          const modalToClose = document.querySelector('.'+modal);
          modalToClose.classList.remove('fadeIn');
          modalToClose.classList.add('fadeOut');
          setTimeout(() => {
              modalToClose.style.display = 'none';
          }, 500);
      }

      const openModal = (modal) => {
          const modalToOpen = document.querySelector('.'+modal);
          modalToOpen.classList.remove('fadeOut');
          modalToOpen.classList.add('fadeIn');
          modalToOpen.style.display = 'flex';
      }
  
</script>
@yield('body')


</body>
</html>