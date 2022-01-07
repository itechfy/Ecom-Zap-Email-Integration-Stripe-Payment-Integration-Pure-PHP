<?php
include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="theme/style.css" />
    <link rel="shortcut icon" href="assets/icons/logo1.svg" type="image/x-icon" />
    <title>Ecom Zap</title>
  </head>
  <body>
    <header class="width-100">
      <nav class="d-flex align-center width-80 margin-auto">
        <a href="#" class="logo">
        <div>
          <img src="assets/icons/logo1.svg" alt="" />
        </div>
      </a>
        <input type="checkbox" name="" id="chkbox" />
        <div class="menu-list d-flex flex-1">
          <li class="d-flex align-center p-relative">
            <a href="#what" class="w-bold">What we do?</a>
            <div class="line p-absolute"></div>
          </li>
          <li class="d-flex align-center p-relative">
            <a href="#who" class="w-bold">Who we are?</a>
            <div class="line p-absolute"></div>
          </li>
          <li class="d-flex align-center p-relative">
            <a href="#partners" class="w-bold">Partners</a>
            <div class="line p-absolute"></div>
          </li>
        </div>
        <div class="ctas d-flex">
          <a href="" class="d-flex">
            <div
              class="call box-btn d-flex align-center justify-center radius-3"
            >
              <img src="assets/icons/call.svg" alt="" />
            </div>
          </a>

          <label for="chkbox" class="menu d-none">
            <div
              class="menu-btn box-btn d-flex align-center justify-center radius-3"
            >
              <img src="assets/icons/menu-ico.svg" alt="" />
            </div>
          </label>
          <a
            href="views/contact.php"
            class="d-flex align-center justify-center box-btn w-bold contact-btn clicked radius-3"
          >
            Contact us
          </a>
        </div>
      </nav>
    </header>

    <main>
      <section class="circles width-100 p-relative">
        <section class="hero d-flex wrap-flex width-80 margin-auto">
          <div class="left-hero flex-1">
            <p class="w-black font-50-30">
              Looking for
              <span class="clrd-text">Amazon</span>
            </p>
            <p class="w-black font-50-30">Experts for your business?</p>
            <p class="hero-desc">
              Take your business to the next level with Ecom Zap. Get managed
              services by our Amazon experts.
            </p>
            <form action="" method="post" class="subscribe-form d-flex">
              <div class="subscribe d-flex align-center flex-1">
                <input
                  type="email"
                  name=""
                  placeholder="Email Address"
                  id="sub-email"
                  class="flex-1"
                />
                <button type="submit" class="sub-btn">
                  <img src="assets/icons/white-arrow.svg" alt="" />
                </button>
              </div>
              <div class="whirl">
                <img src="assets/icons/whirl-arrow.svg" alt="" class="" />
              </div>
            </form>
          </div>
          <div class="right-hero">
            <img
              src="assets/images/man.png"
              alt=""
              class="margin-auto width-100"
            />
          </div>
        </section>

        <img
          src="assets/icons/tr-circles.svg"
          alt=""
          class="p-absolute tr-circles"
        />
        <img
          src="assets/icons/tl-circles.svg"
          alt=""
          class="p-absolute tl-circles"
        />
      </section>

      <!---------What we do?------------->
      <section class="services width-80 margin-auto" id="what">
        <div class="service-head d-flex align-center wrap-flex">
          <div class="flex-1">
            <h1 class="font-50-30 w-extrabold d-flex align-center">
              <span>What we do? &nbsp;</span>
              <span>
                <img src="assets/images/bulb.png" alt="" class="bulb" />
              </span>
            </h1>
            <p class="font-16-13 padTop-20 line-height">
              We can help you cut through the noise, find your audience and
              deliver your brand story at its best. We are dedicated to
              authentic brand stories and use journalistic methods to create the
              largest possible value for both your budget and your audience.
            </p>
          </div>
          <div class="flex-1 d-flex stacks">
            <img src="assets/images/stacks.png" alt="" />
          </div>
        </div>
        <!-------Services list--------->
        <div class="services-list d-flex flex-col m-t-30 padTop-20">
  
          <!--------Service-------->
          <a href="views/patent.php" class="service d-flex align-center">
            <div class="service-img service-img1  d-flex align-center justify-center">
              <img src="assets/icons/patent.svg" alt=""/>
            </div>
            <div class="service-content flex-1">
            <p class="font-20 w-bold line-h-30">Patent Check</p>
            <p class="font-16 line-height">

              Sellers on Amazon patent their products to secure their business. Patent experts at Ecom Zap will help verify if the product that you are interested in launching has an existing patent or not. This will ensure that you make a safe investment. </p>
            <div
            class="w-bold clicked more radius-3 padTop-20"
          >
            Learn more &nbsp;&nbsp; <img src="assets/icons/black-arrow.svg" alt="" class="smooth-transition">
          </div>
          </div>
          </a>
          <!--------Service-------->
          <a href="views/copywriting.php" class="service d-flex align-center">
            <div class="service-img service-img2 d-flex align-center justify-center">
              <img src="assets/icons/copywriting.svg" alt=""/>
            </div>
            <div class="service-content flex-1">
            <p class="font-20 w-bold line-h-30">Copywriting</p>
            <p class="font-16 line-height">

              Product descriptions and content on your Amazon can make or break your business. Our professional writers create engagement-focused descriptions that highlight the true potential of your product, in an effort to boost sales.   </p>
            <div
            class="w-bold clicked more radius-3 padTop-20"
          >
            Learn more &nbsp;&nbsp; <img src="assets/icons/black-arrow.svg" alt="" class="smooth-transition">
          </div>
          </div>
          </a>
          <!--------Service-------->
          <a href="views/graphic.php" class="service d-flex align-center">
            <div class="service-img service-img3 d-flex align-center justify-center">
              <img src="assets/icons/graphic.svg" alt=""/>
            </div>
            <div class="service-content flex-1">
            <p class="font-20 w-bold line-h-30">Graphics Designing</p>
            <p class="font-16 line-height">

              From logo designing to designing your packaging material, we assist you through each step to develop a strong online brand appearance. </p>
            <div
            class="w-bold clicked more radius-3 padTop-20"
          >
            Learn more &nbsp;&nbsp; <img src="assets/icons/black-arrow.svg" alt="" class="smooth-transition">
          </div>
          </div>
          </a>
          <!--------Service-------->
          <a href="views/product-inspection.php" class="service d-flex align-center">
            <div class="service-img service-img4 d-flex align-center justify-center">
              <img src="assets/icons/inspection.svg" alt=""/>
            </div>
            <div class="service-content flex-1">
            <p class="font-20 w-bold line-h-30">Product Inspection</p>
            <p class="font-16 line-height">

              We offer highly reliable inventory inspection service for your products through our office in China, and provide you with a detailed report before your inventory is shipped to an Amazon Fulfillment center. </p>
            <div
            class="w-bold clicked more radius-3 padTop-20"
          >
            Learn more &nbsp;&nbsp; <img src="assets/icons/black-arrow.svg" alt="" class="smooth-transition">
          </div>
          </div>
          </a>
          <!--------Service-------->
          <a href="views/sample-testing.php" class="service d-flex align-center">
            <div class="service-img service-img5 d-flex align-center justify-center">
              <img src="assets/icons/testing.svg" alt=""/>
            </div>
            <div class="service-content flex-1">
            <p class="font-20 w-bold line-h-30">Sample Testing</p>
            <p class="font-16 line-height">

             
Our team in China receives and inspects the product samples and provides you with visual evidence of inspection, in addition to providing the required feedback to the client.</p>
            <div
            class="w-bold clicked more radius-3 padTop-20"
          >
            Learn more &nbsp;&nbsp; <img src="assets/icons/black-arrow.svg" alt="" class="smooth-transition">
          </div>
          </div>
          </a>
          <!--------Service-------->
          <a href="views/freight.php" class="service d-flex align-center">
            <div class="service-img service-img6 d-flex align-center justify-center">
              <img src="assets/icons/freight.svg" alt=""/>
            </div>
            <div class="service-content flex-1">
            <p class="font-20 w-bold line-h-30">Freight Forwarding</p>
            <p class="font-16 line-height">

              We provide trustworthy and affordable freight forwarding services that include air, land, and sea freights. In addition to this, we also provide custom clearance, pick & delivery, and shipping for Fulfillment by Amazon.  </p>
            <div
            class="w-bold clicked more radius-3 padTop-20"
          >
            Learn more &nbsp;&nbsp; <img src="assets/icons/black-arrow.svg" alt="" class="smooth-transition">
          </div>
          </div>
          </a>
          <!--------Service-------->
          <a href="views/product-research.php" class="service d-flex align-center">
            <div class="service-img service-img7 d-flex align-center justify-center">
              <img src="assets/icons/Research.svg" alt=""/>
            </div>
            <div class="service-content flex-1">
            <p class="font-20 w-bold line-h-30">Product Research</p>
            <p class="font-16 line-height">

              Our Experts Help You Hunt The Best Products For Amazon FBA. Our experts have years of product hunting experience for Amazon FBA in different international markets, i.e. US, UK, and UAE.</p>
            <div
            class="w-bold clicked more radius-3 padTop-20"
          >
            Learn more &nbsp;&nbsp; <img src="assets/icons/black-arrow.svg" alt="" class="smooth-transition">
          </div>
          </div>
          </a>
          <!--------Service-------->
          <a href="views/trademark.php" class="service d-flex align-center">
            <div class="service-img service-img8 d-flex align-center justify-center">
              <img src="assets/icons/trademark.svg" alt=""/>
            </div>
            <div class="service-content flex-1">
            <p class="font-20 w-bold line-h-30">Trademark Registration</p>
            <p class="font-16 line-height">

              Our Experts Help You Hunt The Best Products For Amazon FBA. Our experts have years of product hunting experience for Amazon FBA in different international markets, i.e. US, UK, and UAE. </p>
            <div
            class="w-bold clicked more radius-3 padTop-20"
          >
            Learn more &nbsp;&nbsp; <img src="assets/icons/black-arrow.svg" alt="" class="smooth-transition">
          </div>
          </div>
          </a>
          <!--------Service-------->
          <a href="views/FBA.php" class="service d-flex align-center">
            <div class="service-img service-img9 d-flex align-center justify-center">
              <img src="assets/icons/FBA.svg" alt=""/>
            </div>
            <div class="service-content flex-1">
            <p class="font-20 w-bold line-h-30">FBA A to Z</p>
            <p class="font-16 line-height">

              Forget about all the hassles associated with running an Amazon FBA business. We do all the work for you, and get your product to the top of the mountain.    </p>
            <div
            class="w-bold clicked more radius-3 padTop-20"
          >
            Learn more &nbsp;&nbsp; <img src="assets/icons/black-arrow.svg" alt="" class="smooth-transition">
          </div>
          </div>
          </a>
          <!--------Service-------->
          <a href="views/account.php" class="service d-flex align-center">
            <div class="service-img service-img10 d-flex align-center justify-center">
              <img src="assets/icons/account.svg" alt=""/>
            </div>
            <div class="service-content flex-1">
            <p class="font-20 w-bold line-h-30">Amazon Account Valuation</p>
            <p class="font-16 line-height">

              Selling and buying a business is a significant decision. The experts at Ecom Zap will help make the process easier for you by carefully evaluating the account and giving solid reports. </p>
            <div
            class="w-bold clicked more radius-3 padTop-20"
          >
            Learn more &nbsp;&nbsp; <img src="assets/icons/black-arrow.svg" alt="" class="smooth-transition">
          </div>
          </div>
          </a>
         
         
 
        </div>
      </section>

      <!-----------Partners------------->
      <section class="collab width-80 margin-auto" id="partners">
        <p class="font-50-30 w-extrabold d-flex align-center justify-center">
          <span>
            Our partners
            <span class="dot">.</span>
          </span>
        </p>
        <div class="partners-list d-flex wrap-flex align-center">
          <div class="partner">
            <img src="assets/images/p1.png" alt="" />
          </div>
          <div class="partner">
            <img src="assets/images/p3.png" alt="" />
          </div>
          <div class="partner">
            <img src="assets/images/p2.png" alt="" />
          </div>
          <div class="partner">
            <img src="assets/images/p4.png" alt="" />
          </div>
          <div class="partner">
            <img src="assets/images/p5.png" alt="" />
          </div>
        </div>
      </section>
      <!----------Thriving-------------->
      <section class="talk">
        <div class="talk2 width-80 margin-auto d-flex wrap-flex">
          <div class="flex-1 d-flex flex-col">
            <p class="font-50-30 w-extrabold">
              <br>
                Go from surviving to thriving on Amazon
              </span>
            </p>
            <p class="hero-desc">
              Use the power and influence of advertising to increase sales. Learn more about how you can benefit from our management expertise.
            </p>
            <a
            href="#c-form"
            class="d-flex align-center justify-center box-btn w-bold contact-btn talk-btn clicked radius-3"
          >
            Let's start &nbsp;&nbsp; <img src="assets/icons/black-arrow.svg" alt="">
          </a>
          </div>

          <div class="d-flex">
            <img src="assets/images/hearts-and-tick.png" alt="">
          </div>
        </div>
      </section>
      <!---------Selling the right way----------->
      <section class="selling d-flex" id="who">
        <div class="highlight"></div>
        <section class="width-80 margin-auto d-flex wrap-flex selling2">
          <div class="flex-1">
            <p class="font-50-30 w-extrabold rightway">
              <span>
                Amazon selling the right way
                <span class="dot">.</span>
              </span>
            </p>
            <img src="assets/images/right-way.png" alt="" class="width-100">
          </div>
          <div class="content d-flex">
            
              <p class="hero-desc">
                We help brands build loyalty and trust in an industry that’s extremely cluttered and competitive. Our thought-provoking and customized strategies have allowed us to grow our brands to over $10 million in annual revenue in under 5 years!
              </br>
            </br>
            
We’ve taken all the things we learned, mistakes we’ve made, and trimmed the fat to create this effective marketing and brand building platform to clients of all sizes: solo-preneurs, partnerships, startups, local businesses and enterprises. We focus on straightforward true and tried methods to minimize costs and to ensure results.
              </p>
            
          </div>
        </section>
      </section>


      <!----------Form area------------>
      <section class="d-flex wrap-flex f-area" >
        <div class="trust-img p-relative">
          <p class="font-50-30 w-extrabold p-absolute width-100">
              Trust builds here
          </p>
          <img src="assets/images/trust.png" alt="" class="width-100">
          
        </div>
        <div class="form flex-1">
          <div class="s-form c-form" id="c-form">
            <p class="font-50-30 w-extrabold">
              <span class="clrd-text">
                Get your Services </br> Now
              </span>
            </p>
            <p class="clrd-text">Fill the form, choose your service and easily pay in next steps so that we will contact you directly.</p>
          
          <!--------form starts here------------->
          <p class="font-13 w-semibold field-name">NAME</p>
          <input required type="text" name="c-name" id="name" class="field width-100 font-16" onkeyup='check();'>
          <p class="font-13 w-semibold field-name">EMAIL ADDRESS</p>
          <input required type="email" name="email" id="e-mail" class="field width-100 font-16" onkeyup='check();'>
          <p class="font-13 w-semibold field-name">PHONE NUMBER</p>
          <input required type="number" name="phone" id="pn" class="field width-100 font-16" onkeyup='check();'>
          <p class="font-13 w-semibold field-name">SELECT SERVICE</p>
          <select name="service" id="serv" class="field width-100" onchange='check();'>
            <option selected="true" disabled="disabled" value="0">Click to choose</option>
            <option value="100">Patent Check</option>
            <option value="300">Copywriting</option>
            <option value="200">Logo Design</option>
            <option value="300">Packaging</option>
            <option value="50">Sample Testing</option>
            <option value="500">Product Research</option>
            <option value="7000">Amazon FBA</option>
            <option value="549">Trademark Registration (Starter)</option>
            <option value="899">Trademark Registration (Premium)</option>
            <option value="1399">Trademark Registration (Pro)</option>
            <option value="500">Account Evaluation</option>
          </select>
          <input type="hidden" name="desc" class="hiddenfield" id="desc">
          <div class="d-flex align-center price-area">
<div>
  <span class="font-50-30 w-extrabold price clrd-text">0</span><span class="clrd-text">&nbsp;&nbsp;$</span>
</div>
<div class="margin-left-auto">         
      <button type="submit" name="submit" id="continue" class="d-flex align-center justify-center box-btn w-bold contact-btn talk-btn con-btn clicked radius-3 send-btn margin-left-auto"
    >
       Next &nbsp;&nbsp; <img src="assets/icons/black-arrow.svg" alt="">
    </button>
  
    </div> 
          </div>

</div>
   
        </div>
      </section>

      <!----------Ask---------->
      <div class="chat p-relative">
        <p class="font-50-30 w-extrabold d-flex justify-center">
        Ask us through live chat support
        </p>
        <img src="assets/images/msg.png" alt="" class="p-absolute">
      </div>
  
    </main>

    <footer id="foot">
    <div  class="d-flex wrap-flex footer gap">
<div class="logo-foot">
<img src="assets/icons/logo-footer.svg" alt="">
</div>
<div class="s-foot">
<p class="font-13 w-semibold foot-heading">AMAZON SERVICES</p>
<div class="s-list d-flex flex-col line-h-30 hover-blue-line">
<a href="views/account.php" class="font-16-13"> Full Account Management</a>
<a href="views/copywriting.php" class="font-16-13">Copywriting</a>
<a href="views/FBA.php" class="font-16-13">FBA Full</a>
<a href="views/freight.php" class="font-16-13">Freight Management</a>
<a href="views/graphic.php" class="font-16-13">Graphic Designing</a>
<a href="views/patent.php" class="font-16-13">Patent check</a>
<a href="views/product-inspection.php" class="font-16-13">Product Inspection</a>
<a href="views/product-research.php" class="font-16-13">Product Research</a>
<a href="views/sample-testing.php" class="font-16-13">Sample Testing</a>
<a href="views/trademark.php" class="font-16-13">Trademark Registration</a>
</div>
</div>
<!---------------------------->
<div class="d-flex flex-col gap">
<div class="s-foot">
<p class="font-13 w-semibold foot-heading">COMPANY</p>
<div class="s-list d-flex flex-col line-h-30 hover-blue-line">
<a href="" class="font-16-13">What we do?</a>
<a href="" class="font-16-13">Who we are?</a>
<a href="" class="font-16-13">Partners</a>
</div>
</div>
<div class="s-foot">
<p class="font-13 w-semibold foot-heading">LOCATION</p>
<div class="s-list d-flex flex-col line-h-30 hover-blue-line">
<p class="font-16-13">Pakistan </br> Office Haji Camp i-14 </br>Islamabad</p>
</div>
</div>
</div>
<!---------------------------->
<div class="d-flex flex-col gap">
<div class="s-foot">
  <p class="font-13 w-semibold foot-heading">CONTACT</p>
  <div class="s-list d-flex flex-col line-h-30 hover-blue-line">
    <!-----  <a href="" class="font-16-13">+92 331 5970886</a> -->
  <a href="mailto:info@ecom-zap.com" class="font-16-13">info@ecom-zap.com</a>
  </div>
</div>
<!--------<div class="s-foot">
  <p class="font-13 w-semibold foot-heading">SOCIAL</p>
  <div class="s-list d-flex flex-col line-h-30 hover-blue-line">

  </div>
</div> -->
</div>
</div>
<div class="rights d-flex wrap-flex">
<div class="font-13">@ 2021, All rights reserved to Ecom-zap.com</div>
<div class="font-13 margin-left-auto">Made with <span class="love"> ❤ </span> by <a href="https://www.instagram.com/visuals.me/" class="w-bold"> Visuals.me</a></div>
</div>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>

$(document).ready(function(){
           $("#continue").on('click',function(e){
             e.preventDefault();
             //ids = name ,e-mail, pn, serv
             var fullName = $('#name').val();
             var email = $('#e-mail').val();
             var phone = $('#pn').val();
             var price = $('#serv').val();
             var desc = $('#desc').val();
             var service = '&name='+fullName+'&email='+email+'&phone'+phone+'&price='+price+'&desc='+desc;
             var url = 'http://localhost:8080/Ecom%20Zap/pay.php?'+service; 

             $.ajax({
                         url:url,
                         method:'GET',
                         success:function(){
                              window.location.href=url;
                         }
                         });

                        


           })});
</script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
      var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date()
      ;(function () {
        var s1 = document.createElement('script'),
          s0 = document.getElementsByTagName('script')[0]
        s1.async = true
        s1.src = 'https://embed.tawk.to/61afbb7080b2296cfdd096df/1fmb78cv0'
        s1.charset = 'UTF-8'
        s1.setAttribute('crossorigin', '*')
        s0.parentNode.insertBefore(s1, s0)
      })()
    </script>
    <!--End of Tawk.to Script-->
    <script>
      document.querySelector('#chkbox').addEventListener('change', (e) => {
        if (e.target.checked == true) {
          document.querySelector('.menu').style.position = 'position'
          document.querySelector('.menu').style.zIndex = '10'
        } else {
          document.querySelector('.menu').style.position = 'relative'
        }
      })

/*
      var lastscroll;
      const nav = document.querySelector('header');
window.onscroll = function () {
    var y = window.pageYOffset || document.documentElement.scrollTop;
    console.log(y);
    if (y > lastscroll || y == 0) {
        nav.classList.remove('active')

    } else {
        nav.classList.add('active')

    }
    lastscroll = y;

}
*/

document.getElementById("serv").addEventListener("change",(e)=>{
  document.getElementsByClassName("price")[0].innerHTML = e.target.value;
  var text=e.target.options[e.target.selectedIndex].text;
  document.getElementsByClassName("hiddenfield")[0].value = text;
})



    </script>
    <script>


/*

document.querySelector('.stripe-button-el').setAttribute("id","myBtn");
document.querySelector('.stripe-button-el').setAttribute("name","payBtn");
document.getElementById("myBtn").disabled = true;
// name,e-mail,pn,serv
var check = function() {
  // stripe-button-el
if(document.getElementById("name").value.length > 0 &&
document.getElementById("e-mail").value.length > 0 &&
document.getElementById("pn").value.length > 0 &&
document.getElementById("serv").value > 0){
  document.getElementById("myBtn").disabled = false;
}
}
*/

    </script>
  </body>
</html>
