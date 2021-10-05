@extends('layouts.header')
@section('title','H.E.A.R.T')
  

<style>

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

    .hero-btn2 {
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

    .hero-btn2:hover {
        border: 3px solid gray;
        background: white;
        transition: 1s;
        color: rgb(46, 136, 196);
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

    /* campus */

    .campus {
        width: 80%;
        margin: auto;
        text-align: center;
        padding-top: 50px;
    }

    .campus-col {
        flex-basis: 32%;
        border-radius: 10px;
        margin-bottom: 30px;
        position: relative;
        overflow: hidden;
    }

    .campus-col img {
        width: 100%;
        display: block;
    }

    .layer {
        background: transparent;
        height: 100%;
        width: 100%;
        position: absolute;
        top: 0%;
        left: 0%;
        transition: 0.5s;
    }

    .layer:hover {
        background: rgb(46, 136, 196);
    }

    .layer h3 {
        width: 100%;
        font-weight: 500;
        color: #fff;
        font-size: 26px;
        bottom: 0%;
        left: 0%;
        transform: translateY(-50%);
        position: absolute;
        opacity: 0;
        transition: 0.5s;
    }

    .layer:hover h3 {
        bottom: 49%;
        opacity: 1;
    }

    /* facilities */
    .facilities {
        width: 80%;
        margin: auto;
        text-align: center;
        padding-top: 100px;
    }

    .facilities-col img {
        width: 100%;
        position: fixed;
        border-radius: 10px;
    }

    .facilities-col p {
        padding: 0%;
    }

    .facilities-col h3 {
        margin-top: 16px;
        margin-bottom: 15px;
        text-align: left;
    }

    .testimonials {
        width: 80%;
        margin: auto;
        padding-top: 100px;
        text-align: center;
    }

    .testimonials-col {
        flex-basis: 44%;
        border-radius: 10px;
        margin-bottom: 5%;
        text-align: center;
        background:rgb(46, 136, 196) ;
        padding: 25px;
        cursor: pointer;
        display: flex;
    }

    .testimonials-col img {
        height: 40px;
        margin-left: 5px;
        margin-right: 30px;
        border-radius: 50%;
    }

    .testimonials-col p {
        padding: 0%;
        color: #fff;
        font-size: 15px; 
    }

    .testimonials-col h3 {
        margin-top: 15px;
        text-align: left;
    }

    @media(max-width: 700px) {
        .testimonials-col img {
            margin-left: 0px;
            margin-right: 15px;
        }
    }

    .cta {
        margin: 100px auto;
        width: 80%;
        background-color: rgb(46, 136, 196);
        background-image: linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7), url(..\IMAGES\IMG1.jpg));
        background-position: center;
        background-size: cover;
        border-radius: 10px;
        text-align: center;
        padding: 100px 0;
    }

    .cta h1 {
        color: #fff;
        margin-bottom: 40px;
        padding: 0;
    }

    @media(max-width: 700px) {
        .cta h1 {
            font-size: 24px;
        }
    }

    /* footer */
    .footer{
        width: 100%;
        text-align: center;
        padding: 30px 0;
    }

.footer h4{
    margin-bottom: 25px;
    margin-top: 20px;
    font-weight: 600;
}

  .animated {
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
  }

  .animated.faster {
    -webkit-animation-duration: 500ms;
    animation-duration: 500ms;
  }

  .fadeIn {
    -webkit-animation-name: fadeIn;
    animation-name: fadeIn;
  }

  .fadeOut {
    -webkit-animation-name: fadeOut;
    animation-name: fadeOut;
  }

  @keyframes fadeIn {
    from {
      opacity: 0;
    }

    to {
      opacity: 1;
    }
  }

  @keyframes fadeOut {
    from {
      opacity: 1;
    }

    to {
      opacity: 0;
    }
  }
</style>


@section('body')

    <!-- course -->
    <section class="course">
        <h1>Course we Offer</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

        <div class="row">
            <div class="course-col">
                <h3>Web Development</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Quia aliquid illo unde amet quod? Sit modi consequuntur accusantium
                    soluta eius dignissimos aliquid, consequatur delectus aperiam voluptas unde facilis nam aliquam!</p>
            </div>
            <div class="course-col">
                <h3>Accounting</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Quia aliquid illo unde amet quod? Sit modi consequuntur accusantium
                    soluta eius dignissimos aliquid, consequatur delectus aperiam voluptas unde facilis nam aliquam!</p>
            </div>
            <div class="course-col">
                <h3>Network Support</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Quia aliquid illo unde amet quod? Sit modi consequuntur accusantium
                    soluta eius dignissimos aliquid, consequatur delectus aperiam voluptas unde facilis nam aliquam!</p>
            </div>
        </div>
    </section>
    <!-- campus -->
    <section class="campus">
        <h1>Our Campus</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

        <div class="row">
            <div class="campus-col">
                <img src="../IMAGES/Dormitory-Block.jpg" alt="">
                <div class="layer">
                    <h3>DORMITORY</h3>   
                </div>
            </div>
            <div class="campus-col">
                <img src="../IMAGES/IMG_3750.jpg" alt="">
                <div class="layer">
                    <H3>VOLLEYBALL COURT</H3>
                </div>
            </div>
            <div class="campus-col">
                <img src="../IMAGES/IMG_2399.jpg" alt="">
                <div class="layer">
                    <H3>FOOTBALL FIELD</H3>
                </div>
            </div>
          </div>
    </section>

    
    <section class="testimonials">
        <h1>What our students say</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <div class="row">
          @foreach ($comments as $comment)
          <div class="testimonials-col">
            <div>
              <p>{{ $comment->comments }}</p>
              <h4>{{ $comment->username }}</h4>
            </div>
          </div>
          @endforeach
        </div>

        @auth()
          
        @if (auth()->user()->User_type == 'user')
        
        
        <form action="{{ route('add.comment') }}" method="POST">
          @csrf
          <textarea name="comment" id="comments" cols="50" rows="5" required class="bg-blue-200"></textarea>
          <input type="submit" value= "Send" class="bg-blue-200">
        </form>
        
        @endif
        @endauth

    </section>


    <!-- Call to Action  -->
    <section class="cta">
        <h1>Enroll for our various online courses Anywhere Locally</h1>
        {{-- <a href="#" class="hero-btn2">Contact Us</a> --}}

        <div>
          <button onclick="openModal('main-modal')" class='hero-btn2'>Contact Us</button>
        </div>
        {{-- </div>
        
        <div class="main-modal fixed w-full inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster" style="background: rgba(0,0,0,.7);">
          <div class="border border-blue-500 modal-container bg-white w-4/12 md:max-w-11/12 mx-auto rounded-xl shadow-lg z-50 overflow-y-auto">
            <div class="modal-content py-4 text-left px-6">
              <!--Title-->
              <div class="flex justify-between items-center pb-3">
                <p class="text-2xl font-bold text-gray-500">Contact us via</p>
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
                          <form action="#" method="POST" id="add_caretaker_form"  class="w-full">
                              <div class="">
                                  <div class="">
                                      <h6>INSTAGRAM</h6>
                                      <i class="fa-instagram-square h-3 p-6 w-full pt-4 mb-5 rounded-md" aria-hidden="true"></i>
                                      <label for="names" class="text-md text-gray-600">myamber.group</label>
                                  </div>
                                  <div class="">
                                  <i class="fa-instagram-square h-3 p-6 w-full pt-4 mb-5 rounded-md" aria-hidden="true"></i>
                                      <label for="names" class="text-md text-gray-600">heartnstatrust</label>
                                      </div>
                                  <div class="">
                                      <h6>Whatsapp</h6>
                                  <i class="fa-whatsapp h-3 p-6 w-full pt-4 mb-5 rounded-md" aria-hidden="true"></i>
                                      <label for="names" class="text-md text-gray-600">1876-875-2415</label>
                                  </div>
                                  <div class="">
                                      <h6>Telephone</h6>
                                  <i class="fa-phone h-3 p-6 w-full pt-4 mb-5 rounded-md" aria-hidden="true"></i>
                                      <label for="names" class="text-md text-gray-600">906-3487-9</label>      
                                </div>
                                  <div class="">
                                  <i class="fa-phone h-3 p-6 w-full pt-4 mb-5 rounded-md" aria-hidden="true"></i>
                                      <label for="names" class="text-md text-gray-600">906-3613</label>      
                                </div>
                                
                                <i class="fa-phone h-3 p-6 w-full pt-4 mb-5 rounded-md" aria-hidden="true"></i>
                                      <label for="names" class="text-md text-gray-600">906-4530</label>      
                                </div>
                                  <div class="">
                                      <h6>Email</h6>
                                  <i class="fa-mail h-3 p-6 w-full pt-4 mb-5 rounded-md" aria-hidden="true"></i>
                                      <label for="names" class="text-md text-gray-600">info@heart-nta.org</label>
                                  </div>
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
          {{-- <div class="another-modal fixed w-full inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster" style="background: rgba(0,0,0,.7);">
          <div class="border border-blue-500 modal-container bg-white w-4/12 md:max-w-11/12 mx-auto rounded-xl shadow-lg z-50 overflow-y-auto">
            <div class="modal-content py-4 text-left px-6">
              <!--Title-->
              <div class="flex justify-between items-center pb-3">
                <p class="text-2xl font-bold text-gray-500">Edit Caretaker</p>
                <div class="modal-close cursor-pointer z-50" onclick="modalClose('another-odal')">
                  <svg class="fill-current text-gray-500" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                    viewBox="0 0 18 18">
                    <path
                      d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                    </path>
                  </svg>
                </div>
              </div>
              <!--Body--> --}}
              <!--Footer-->
              {{-- <div class="flex justify-end pt-2 space-x-14">
                <button
                  class="px-4 bg-gray-200 p-3 rounded text-black hover:bg-gray-300 font-semibold" onclick="modalClose('another-modal')">Cancel</button>
                <button
                  class="px-4 bg-blue-500 p-3 ml-3 rounded-lg text-white hover:bg-teal-400" onclick="validate_form(document.getElementById('add_caretaker_form'))">Confirm</button>
              </div>
            </div>
          </div>
        </div>
         --}}
        {{-- <script>
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
          
        </script> --}}


    </section>

    <!-- Footer -->

    <section class="footer" id="contact">
        <h4>About us</h4>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Sequi ipsa iure sunt inventore beatae. Nulla fugit nisi, facilis, <br> reprehenderit quasi doloribus alias iure at voluptates 
           <br> nobis eos recusandae neque id. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam laborum officia eveniet, dicta explicabo dolorum et veniam laudantium <br> soluta amet accusantium voluptates nisi architecto quis molestiae a temporibus sed saepe!</p>
    </section>

    <script>
        var navLinks = document.getElementById("navLinks");

        function showMenu() {
            navLinks.style.right = "0";
        }

        function hideMenu() {
            navLinks.style.right = "-200px";
        }
    </script>
</body>
@endsection
</html>

<!-- component -->
<!-- component -->


