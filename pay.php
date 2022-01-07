<?php
include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
              <a href="index.php#what" class="w-bold">What we do?</a>
              <div class="line p-absolute"></div>
            </li>
            <li class="d-flex align-center p-relative">
              <a href="index.php#who" class="w-bold">Who we are?</a>
              <div class="line p-absolute"></div>
            </li>
            <li class="d-flex align-center p-relative">
              <a href="index.php#partners" class="w-bold">Partners</a>
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
<form autocomplete="off" action="checkout.php" method="POST" class="width-100 pay padTop-20">

    <div class="pay-info width-80 margin-auto padTop-20">
        <p class="font-50-30 w-extrabold d-flex justify-center padTop-20">
            Securely send Payments
            </p>

            <div class="d-flex wrap-flex padTop-20 m-t-30 gap">
            <div class="flex-1">
                <p>Name</p>
                <p class="font-50-30 w-extrabold">
                    <span class="clrd-text">
                      <?php echo $_GET['name']; ?>
                    </span>
                    <input type="hidden" name="name" value="<?php echo $_GET['name']; ?>">
                  </p>
            </div>
            <div class="d-flex ">
            <div class="">
                <p>Service</p>
                <p class="font-50-30 w-extrabold">
                    <span class="clrd-text">
                    <?php echo $_GET['desc']; ?>
                    </span>
                    <input type="hidden" name="description" value="<?php echo $_GET['desc']; ?>">
                  </p>
            </div>
            </div>
    </div>
            <div class="d-flex wrap-flex padTop-20 m-t-30 gap">
            <div class="flex-1">
              
                <p class="font-50-30 w-extrabold">
                    <span class="pay-price">
                    <?php echo $_GET['price'] . '$'; ?>
                    </span>
                    <input type="hidden" name="money" value="<?php echo $_GET['price'];?>">
                  </p>
            </div>
            <div class="d-flex ">
            <div class="">
               
             <!---------Stripe button here----------->
             <script
                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                data-key="pk_test_51K9vOCETgOUDccbLLYCgUpGX9L9jKCFUXhr4lXyXWXOACZdU1V0FVasyMEnSARmH6ZcAa8FRioTTVNTVwGApJ8UM00ADqbOR0C"
                data-amount=<?php echo str_replace(',', '', $_GET['price']) *
                    100; ?>
                data-name="<?php echo $_GET['desc']; ?>"
                data-description="<?php echo $_GET['name']; ?>"
                data-image=""
                data-currency="usd"
                data-locale="auto">
                </script>
            </div>
            </div>
    </div>

</form>
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

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
        document.getElementsByClassName("hiddenfield").value = e.target.innerHTML;
      })
      
      
      
          </script>


</body>
</html>