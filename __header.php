<header class="header">


  <!-- desktop header  -->
  <div class="header-content">
    <div class="header__logo">
      <img src="images/flat-logo.png" alt="logo" />
    </div>
    <div class="header__menu">
      <a href="" class="menu__link"> Home </a>
      <a href="" class="menu__link"> About </a>
      <a href="" class="menu__link"> Service </a>
      <a href="" class="menu__link"> Contact </a>
      <a href="" class="btn-outline"> Contact For Appointment </a>
    </div>
  </div>



  <!-- header mobile  -->
  <div class="header-mobile">
    <div class="header__logo">
      <img src="images/flat-logo.png" alt="logo" />
    </div>
    <div class="open">
      <i class="bi bi-justify-right"></i>
    </div>
  </div>

  <!-- aside menu  -->
  <aside class="aside">

    <div class="close">
      <i class="bi bi-x-lg"></i>
    </div>

    <div class="menu">
      <a href="#">Home</a>
      <a href="#">About</a>
      <a href="#">Service</a>
      <a href="#">Contact</a>
    </div>


    <div class="buttons">
      <a href="" class="btn-1"> Book Bike Service </a>
      <a href="" class="btn-2"> Buy Space Parts </a>
    </div>


    <div class="social-icons">
       <a href="" > <i class="bi bi-facebook"></i> </a>
       <a href="" > <i class="bi bi-facebook"></i> </a>
       <a href=""> <i class="bi bi-facebook"></i> </a>
    </div>
  </aside>
</header>


<script>
  let openNav = document.querySelector('.header-mobile .open')
  let closeNav = document.querySelector('.aside .close')
  let aside = document.querySelector(".aside")

  openNav.addEventListener("click",()=>{
      aside.style.right = "0"
  })

  closeNav.addEventListener("click",()=>{
      aside.style.right = "-100%"
  })

</script>