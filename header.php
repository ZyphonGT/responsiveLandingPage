<div class="header">
    <div class="logo-icon">
        <img src="res/img/title.png" alt="3iLogo">
        
        <!-- https://via.placeholder.com/450x1000.png-->
    </div>

    <nav>
        <!-- HOME PRODUCT SERVICE CONTACT ABOUT -->
        <ul>
            <a class="nav-selection-home" href=""><li>HOME</li></a>
            <a class="nav-selection-about" href=""><li>ABOUT</li></a>
            <a class="nav-selection-product" href=""><li>PRODUCT</li></a>
            <a class="nav-selection-service" href=""><li>SERVICE</li></a>
            <a class="nav-selection-contact" href=""><li>CONTACT</li></a>
        </ul>
    </nav>
</div>

<div class="newHead">
    <a href="#" class="logo">
        <img src="res/img/title.png" alt="3iLogo">
    </a>
    <div class="menu-toggle"></div>
    <nav>
        <ul>
            <li><a class="nav-selection-home">HOME</a></li>
            <li><a class="nav-selection-about">ABOUT</a></li>
            <li><a class="nav-selection-product">PRODUCT</a></li>
            <li><a class="nav-selection-service">SERVICE</a></li>
            <li><a class="nav-selection-contact">CONTACT</a></li>
        </ul>
    </nav>
    <div class="clearfix"></div>
</div>

<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  <script type="text/javascript">
    /* TOGGLE NAV-MENU BUTTON */
    $(document).ready(function() {
        $('.newHead .menu-toggle').click(function(){
            $('.newHead .menu-toggle').toggleClass('active');
            $('.newHead nav').toggleClass('active');
        })
    })


    /* Navigation Scrolling */

    $(".nav-selection-home").click(function() {
    $('html,body').animate({
        scrollTop: $("body").offset().top},'slow');
    });

    $(".nav-selection-about").click(function() {
    $('html,body').animate({
        scrollTop: $(".welcome-wrapper").offset().top - $("header").outerHeight(true)},'slow');
    });

    $(".nav-selection-product").click(function() {
    $('html,body').animate({
        scrollTop: $(".product-wrapper").offset().top - $("header").outerHeight(true)},'slow');
    });

    $(".nav-selection-service").click(function() {
    $('html,body').animate({
        scrollTop: $(".service-wrapper").offset().top - $("header").outerHeight(true)},'slow');
    });

    $(".nav-selection-contact").click(function() {
    $('html,body').animate({
        scrollTop: $("footer").offset().top - $("header").outerHeight(true)},'slow');
    });
  </script>
