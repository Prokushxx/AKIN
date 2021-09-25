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
        background: #fff3f3;
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
        background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7), url());
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
                <img src="../IMAGES/pic6.jpg" alt="">
                <div class="layer">
                    <h3>STONY HILL</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="" alt="">
                <div class="layer">
                    <H3>BOYS TOWN</H3>
                </div>
            </div>
            <div class="campus-col">
                <img src="" alt="">
                <div class="layer">
                    <H3>EBONY PARK</H3>
                </div>
            </div>
        </div>


    </section>

    
    <section class="testimonials">
        <h1>What our students say</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <div class="row">
            <div class="testimonials-col">
                <img src="" alt="">
                <div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati vel officia eius sapiente? Architecto, eaque repellat cupiditate culpa quae quos eligendi adipisci, esse, possimus dolorem pariatur delectus explicabo distinctio aspernatur!</p>
                    <h4>PROKUSHxx</h4>
                </div>
            </div>
            <div class="testimonials-col">
                <img src="" alt="">
                <div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati vel officia eius sapiente? Architecto, eaque repellat cupiditate culpa quae quos eligendi adipisci, esse, possimus dolorem pariatur delectus explicabo distinctio aspernatur!</p>
                    <h4>XAVIER</h4>
                </div>
            </div>
            <div class="testimonials-col">
                <img src="" alt="">
                <div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati vel officia eius sapiente? Architecto, eaque repellat cupiditate culpa quae quos eligendi adipisci, esse, possimus dolorem pariatur delectus explicabo distinctio aspernatur!</p>
                    <h4>AKINYENE</h4>
                </div>
            </div>
        </div>



    </section>


    <!-- Call to Action  -->
    <section class="cta">
        <h1>Enroll for our various online courses Anywhere Locally</h1>
        <a href="" class="hero-btn">Contact Us</a>
    </section>

    <!-- Footer -->

    <section class="footer">
        <h4>About us</h4>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Sequi ipsa iure sunt inventore beatae. Nulla fugit nisi, facilis, <br> reprehenderit quasi doloribus alias iure at voluptates nobis eos recusandae neque id.</p>
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