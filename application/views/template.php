<!doctype html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  
  <title><?=$title?></title>
  <!-- TODO add meta tags -->
  <link rel="stylesheet" href="<?=base_url()."themes/".$style."/style.css"?>">
</head>

<body>
  <div class="header_slide">
    <h3 class="sliderH1"><?= anchor('/', $blog_title, 'title="$blog_title"')?></h3>
  <!--<?="<h3 class=\"sliderH1\"> &raquo; ".$blog_title."</h3>"?>-->
  </div>
  
  <div id="container">
    <div class="header">
      <h1><?= anchor('/', $blog_title, 'title="$blog_title"')?></h1>
      <h2 class="tagline"><?=$tagline?></h2>
    </div>
    <?= $contents ?>
    <?= $tools ?>
    <?= $comments ?>
    <div class="footer">
      <?="Copyright &copy; 2011 <b>".$first_name." ".$last_name."</b>. All Rights Reserved"?> | Powered by <a href="https://github.com/laurencedawson/codeigniter-blog">codeigniter-blog</a>      
    </div>  
  </div>

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
  <script type="text/javascript" src="<?=base_url()."js/index.js"?>"></script>

  <script>
    var _gaq=[["_setAccount","UA-22557362-1"],["_trackPageview"]];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
    g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
    s.parentNode.insertBefore(g,s)}(document,"script"));
  </script>

</body>
</html>