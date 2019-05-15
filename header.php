<div class="header">
    <div class="logo-icon">
        <img src="res/img/title.png" alt="3iLogo">
        
        <!-- https://via.placeholder.com/450x1000.png-->
    </div>

    <nav>
        <!-- HOME PRODUCT SERVICE CONTACT ABOUT -->
        <ul>
            <a href="#a"><li>HOME</li></a>
            <a href="#b"><li>PRODUCT</li></a>
            <a href="#c"><li>SERVICE</li></a>
            <a href="#d"><li>CONTACT</li></a>
            <a href="#e"><li>ABOUT</li></a>
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
            <li><a href="#">HOME</a></li>
            <li><a href="#">PRODUCT</a></li>
            <li><a href="#">SERVICE</a></li>
            <li><a href="#">CONTACT</a></li>
            <li><a href="#">ABOUT</a></li>
        </ul>
    </nav>
    <div class="clearfix"></div>
</div>

<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  <script type="text/javascript">
    $(document).ready(function() {
        $('.newHead .menu-toggle').click(function(){
            $('.newHead .menu-toggle').toggleClass('active');
            $('.newHead nav').toggleClass('active');
        })
    })
  </script>
