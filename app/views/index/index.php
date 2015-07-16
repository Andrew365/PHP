<!--<?php require 'app/views/master.php';?>

<!-- media queries  just for master-->
<link rel="stylesheet" type="text/css" media="only screen and (min-width:980px) and
(max-width: 2000px)" href="<?php echo URL; ?>public/stylesheets/980/index.css"/>

<link rel="stylesheet" type="text/css" media="only screen and (min-width:768px) and
(max-width: 980px)" href="<?php echo URL; ?>public/stylesheets/768/index.css"/>

<link rel="stylesheet" type="text/css" media="only screen and (min-width:600px) and
(max-width: 767px)" href="<?php echo URL; ?>public/stylesheets/600/index.css"/>

<link rel="stylesheet" type="text/css" media="only screen and (min-width:300px) and
(max-width: 599px)" href="<?php echo URL; ?>public/stylesheets/300/index.css"/>

<link rel="stylesheet" type="text/css" media="only screen and (min-width:100px) and
(max-width: 299px)" href="<?php echo URL; ?>public/stylesheets/100/index.css"/>
<!-- end of media queries -->
<script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
<script>
$(window).scroll(function(){

  var wScroll = $(this).scrollTop();

    $('#title').css({
      'transform' : 'translate(0px, '+ wScroll /2 +'%)'
    });

});
  </script>
</head>

<body>

  <div id="splashpage">
    <div id="linkbar">
    <?php require 'app/views/master.php';?>
  </div>

    <div id="title">
      AWDevelopment
    </div>
  </div>
  <div class="content">
  <!-- <div class="filler">

  </div> -->
  <div class="container">
     <h1>PHP</h1>
     <hr/>
     Large amount of experience with PHP. I have completed many projects using this language that have included login systems and email. T
     his site is built upon a MVC style framework that I built myself, and it includes a built in authentication system.
          <h1>Front-End Development</h1>
          <hr/>
    Front-End technologies are no problem either, I am experienced in Jquery as well as plain javascript, styling languages such as CSS and Sass,
     and other things such as the Bootstrap Framework. For example, this website is built with 5 other stylistic versions for responsive design.
    <h1>The MEAN Stack</h1>
    <hr/>
    One of the newer technologies that I have learned is the use of the MEAN stack which uses Angular, Node, Mongodb, and Express to create a full-stack javascript implementation.
  </div>
</div>
  <div class="footer">
    <h1>Footer</h1>
  </div>
</body>
</html>
