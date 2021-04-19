<!DOCTYPE html>
<html lang="en">

<?php include __DIR__ . "/partials/head.php"; ?>

<body>

  <?php include __DIR__ . "/partials/header.php"; ?>

  <!-- banner -->
  <div class="banner">

    <!--Slider-->
    <div class="slider">
      <div class="callbacks_container">
        <ul class="rslides" id="banner">

          <li>

            <div class="slider-img">
              <img src="/images/banner1.jpg" class="img-responsive" alt="Fantasy World">
            </div>

            <div class="slider-info">
              <h4>Dragon Fin Soup Ridding </h4>
              <p>World building is component of fantasy </p>
              <a href="#about" class="hvr-shutter-in-horizontal scroll">Read More</a>
            </div>

          </li>

          <li>

            <div class="slider-img">
              <img src="/images/banner2.jpg" class="img-responsive" alt="Fantasy World">
            </div>

            <div class="slider-info">
              <h4>Girl Dragon fantasy sword wing</h4>
              <p>World building is component of fantasy </p>
              <a href="#about" class="hvr-shutter-in-horizontal scroll">Read More</a>
            </div>

          </li>

          <li>

            <div class="slider-img">
              <img src="/images/banner3.jpg" class="img-responsive" alt="Fantasy World">
            </div>

            <div class="slider-info">
              <h4>Danger bear guy pistol moment</h4>
              <p>World building is component of fantasy </p>
              <a href="#about" class="hvr-shutter-in-horizontal scroll">Read More</a>
            </div>

          </li>

        </ul>

      </div>

      <div class="clearfix"></div>

    </div>
    <!--//Slider-->

  </div>
  <!-- //banner -->

  <!-- about -->
  <div class="about" id="about">
    <div class="container">

      <div class="col-md-4 agileits_about_left">
        <h3 class="w3l_head">About Us</h3>
        <p class="w3ls_head_para">who we are</p>
      </div>

      <div class="agileits_banner_bottom_grids">

        <div class="col-md-6 agileits_banner_bottom_grid_l">

          <h4>Aliquam a nunc non erat lobortis</h4>

          <p>
            <i>
              Vestibulum nec consequat nisl. Aliquam vehicula egestas commodo.
              Pellentesque lorem magna, pulvinar sed lacinia et, venenatis in mi.
            </i>
            Nullam sodales rutrum nisl, gravida porttitor lectus porta et.
            Duis purus arcu, semper at magna faucibus, elementum maximus ligula.
            Etiam imperdiet posuere odio gravida vehicula. Nulla consectetur massa
            eget tincidunt suscipit. Integer vitae ex eros. Cras ornare dignissim
            scelerisque.
          </p>

        </div>

        <div class="col-md-6 agileits_banner_bottom_grid_r">
          <div class="agileits_banner_btm_grid_r">

            <img src="images/ab.jpg" alt=" " class="img-responsive">

            <div class="agileits_banner_btm_grid_r_pos">
              <img src="images/ab1.jpg" alt=" " class="img-responsive">
            </div>

          </div>
        </div>

        <div class="clearfix"> </div>

      </div>

    </div>
  </div>
  <!-- //about-bottom -->

  <!-- services -->
  <div class="services" id="services">

    <h3 class="w3l_head w3l_head1">Services</h3>

    <p class="w3ls_head_para w3ls_head_para1">View Our Services</p>

    <div class="services-agile-w3l">

      <div class="col-md-3 services-gd text-center">
        <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
          <a href="#" class="hi-icon">
            <img src="/images/s1.png" alt=""/>
          </a>
        </div>
        <h4>Service 1</h4>
        <p>Lorem Ipsum</p>
      </div>

      <div class="col-md-3 services-gd text-center">
        <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
          <a href="#" class="hi-icon">
            <img src="/images/s2.png" alt=""/>
          </a>
        </div>
        <h4>Service 2</h4>
        <p>Lorem Ipsum</p>
      </div>

      <div class="col-md-3 services-gd text-center">
        <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
          <a href="#" class="hi-icon">
            <img src="/images/s3.png" alt=""/>
          </a>
        </div>
        <h4>Service 3</h4>
        <p>Lorem Ipsum</p>
      </div>

      <div class="col-md-3 services-gd text-center">
        <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
          <a href="#" class="hi-icon">
            <img src="/images/s4.png" alt=""/>
          </a>
        </div>
        <h4>Service 4</h4>
        <p>Lorem Ipsum</p>
      </div>

      <div class="clearfix"></div>

    </div>
  </div>
  <!-- //services -->

  <!--Banner Slider JS -->
  <script>
    $(window).on('load', function() {
      slider();
    });
  </script>

</body>

</html>