<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="./css/onepage-scroll.css">
  <link rel="stylesheet" type="text/css" href="./css/style2.css">
	<script type="text/javascript" src="./js/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="./js/jquery.onepage-scroll.min.js"></script>
</head>
<body class="loading">
  <div class="main">
    <section>
      <div class="container">
        <h1>Welcome!</h1>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="left col">
      <h1 class="slideInUp">Are you ready to ...</h1>
          <p class="slideInUp"></p>
          <p class="slideInUp">
          </p>
   <h1><a href="/index1.php">go to site!</a></h1>

  <!--   <h6><a href="/July1/">ポートフォリオ(1)</a></h6>
<h6><a href="/Aug6/staff_login/staff_top.php">ポートフォリオ(2)</a></h6> -->

        </div>
        <div class="right col">
          <img src="./img/img-laptop.png" class="slideInUp" />
        </div>
      </div>
    </section>
  </div>
  <script type="text/javascript">
    $(document).ready(function() {
      $(".main").onepage_scroll({
        sectionContainer: "section",     // sectionContainer accepts any kind of selector in case you don't want to use section
        easing: "cubic-bezier(0.080, 0.545, 0.170, 1.000)",                  // Easing options accepts the CSS3 easing animation such "ease", "linear", "ease-in",
                                         // "ease-out", "ease-in-out", or even cubic bezier value such as "cubic-bezier(0.175, 0.885, 0.420, 1.310)"
        animationTime: 800,             // AnimationTime let you define how long each section takes to animate
        pagination: true,                // You can either show or hide the pagination. Toggle true for show, false for hide.
        updateURL: false,                // Toggle this true if you want the URL to be updated automatically when the user scroll to each page.
        beforeMove: function(index) {},  // This option accepts a callback function. The function will be called before the page moves.
        afterMove: function(index) {},   // This option accepts a callback function. The function will be called after the page moves.
        loop: false,                     // You can have the page loop back to the top/bottom when the user navigates at up/down on the first/last page.
        keyboard: true,                  // You can activate the keyboard controls
        responsiveFallback: false,        // You can fallback to normal page scroll by defining the width of the browser in which
        // you want the responsive fallback to be triggered. For example, set this to 600 and whenever
        // the browser's width is less than 600, the fallback will kick in.
        direction: "vertical"            // You can now define the direction of the One Page Scroll animation. Options available are "vertical" and "horizontal". The default value is "vertical".
      });
    });
    $(window).load(function() {
      window.setTimeout(function(){
        $('body').removeClass("loading").addClass('complete');
      }, 500);
    });
  </script>
</body>
</html>
