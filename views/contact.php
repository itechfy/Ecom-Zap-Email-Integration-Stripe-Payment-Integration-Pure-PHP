<?php
include("../email.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../theme/style.css">
    <title>Contact - Ecom Zap</title>
</head>
<body>
    <header class="width-100">
        <nav class="d-flex align-center width-80 margin-auto">
          <a href="../index.php#" class="logo">
          <div>
            <img src="../assets/icons/logo1.svg" alt="" />
          </div>
        </a>
          <input type="checkbox" name="" id="chkbox" />
          <div class="menu-list d-flex flex-1">
            <li class="d-flex align-center p-relative">
              <a href="../index.php#what" class="w-bold">What we do?</a>
              <div class="line p-absolute"></div>
            </li>
            <li class="d-flex align-center p-relative">
              <a href="../index.php#who" class="w-bold">Who we are?</a>
              <div class="line p-absolute"></div>
            </li>
            <li class="d-flex align-center p-relative">
              <a href="../index.php#partners" class="w-bold">Partners</a>
              <div class="line p-absolute"></div>
            </li>
          </div>
          <div class="ctas d-flex">
            <a href="" class="d-flex">
              <div
                class="call box-btn d-flex align-center justify-center radius-3"
              >
                <img src="../assets/icons/call.svg" alt="" />
              </div>
            </a>
  
            <label for="chkbox" class="menu d-none">
              <div
                class="menu-btn box-btn d-flex align-center justify-center radius-3"
              >
                <img src="../assets/icons/menu-ico.svg" alt="" />
              </div>
            </label>
            <a
              href="contact.php"
              class="d-flex align-center justify-center box-btn w-bold contact-btn clicked radius-3"
            >
              Contact us
            </a>
          </div>
        </nav>
      </header>


      <main>

          <!----------Form area------------>
          <section class="contact-form width-80 margin-auto">

            <div class="form c-form radius-10">
              <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" class="s-form" id="c-form">
                <p class="font-50-30 w-extrabold">
                  <span class="clrd-text">
                    Contact us
                  </span>
                </p>
                <p class="clrd-text">Write us your queries and we will get back to you as soon within 24 hours.</p>
              
              <!--------form starts here------------->
              <p class="font-13 w-semibold field-name">NAME</p>
              <input required type="text" name="name" id="" class="field width-100 font-16">
              <p class="font-13 w-semibold field-name">EMAIL ADDRESS</p>
              <input required type="email" name="email" id="" class="field width-100 font-16">
              <p class="font-13 w-semibold field-name">TYPE YOUR MESSAGE</p>
              <textarea required name="msg" id="" class="field width-100 font-16"></textarea>
              <div class="d-flex align-center price-area">
   
    <div class="margin-left-auto">         
      <button type="submit" name="submit" class="d-flex align-center justify-center box-btn w-bold contact-btn talk-btn con-btn clicked radius-3 send-btn margin-left-auto"
    >
       Send &nbsp;&nbsp; <img src="../assets/icons/black-arrow.svg" alt="">
    </button>
    <p class="clrd-text">For enquiries, email at <a href="mailto:info@ecom-zap.com" class="clrd-text w-bold">info@ecom-zap.com</a></p>
    </div> 
  
    
              </form>
             
            </div>

            <div class="social-links  d-flex justify-center">
                <a href=""><img src="../assets/icons/Facebook.svg" alt=""></a>
                <a href=""><img src="../assets/icons/Twitter.svg" alt=""></a>
                <a href=""><img src="../assets/icons/Instagram.svg" alt=""></a>
            </div>
            
          </section>
            <!----------Ask---------->
            <div class="chat p-relative">
                <p class="font-50-30 w-extrabold d-flex justify-center">
                Ask us through live chat support
                </p>
                <img src="../assets/images/msg.png" alt="" class="p-absolute">
              </div>
          
            </main>
        
            <footer id="foot">
              <div  class="d-flex wrap-flex footer gap">
          <div class="logo-foot">
          <img src="../assets/icons/logo-footer.svg" alt="">
          </div>
          <div class="s-foot">
          <p class="font-13 w-semibold foot-heading">AMAZON SERVICES</p>
          <div class="s-list d-flex flex-col line-h-30 hover-blue-line">
          <a href="account.php" class="font-16-13"> Full Account Management</a>
<a href="copywriting.php" class="font-16-13">Copywriting</a>
<a href="FBA.php" class="font-16-13">FBA Full</a>
<a href="freight.php" class="font-16-13">Freight Management</a>
<a href="graphic.php" class="font-16-13">Graphic Designing</a>
<a href="patent.php" class="font-16-13">Patent check</a>
<a href="product-inspection.php" class="font-16-13">Product Inspection</a>
<a href="product-research.php" class="font-16-13">Product Research</a>
<a href="sample-testing.php" class="font-16-13">Sample Testing</a>
<a href="trademark.php" class="font-16-13">Trademark Registration</a>
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
                  document.querySelector('.menu').style.position = 'fixed'
                  document.querySelector('.menu').style.zIndex = '1000'
                } else {
                  document.querySelector('.menu').style.position = 'relative'
                }
              })
        
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
        
        document.getElementById("serv").addEventListener("change",(e)=>{
          document.getElementsByClassName("price")[0].innerHTML = e.target.value;
        })
        
            </script>
</body>
</html>