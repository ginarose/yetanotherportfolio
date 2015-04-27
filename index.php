<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/reset.css" type="text/css">
<link rel="stylesheet" href="css/style.css" type="text/css">
<script type="text/javascript" src="fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
<!-- Add fancyBox -->
<link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

<meta charset="UTF-8">
<title>Gina Piscitelli</title>
</head>

<body>
<!-- header -->
<h1>Gina Rose Piscitelli</h1>
<!-- menu -->
<div class="pure-menu pure-menu-horizontal">
    <a href="#about" class="pure-menu-heading pure-menu-link">About</a>
    <a href="#gallery" class="pure-menu-heading pure-menu-link">Gallery</a>
    <a href="#" class="pure-menu-heading pure-menu-link">Resume</a>
    <a href="#" class="pure-menu-heading pure-menu-link">Contact</a>
</div>

<!-- about -->
<div class="pure-g about-block" id="#about">
  <div class="pure-u-1"><h2>About Me</h2></div>
  <div class="pure-u-sm-1 pure-u-md-1-3" class="about-picture"><img src="imgs/me.jpg" alt="Me!" class="about-picture"></div>
  <div class="pure-u-sm-1 pure-u-md-2-3"><p class="about-text">My name is Gina Piscitelli, or Gina Rose for short. I see you've stumbled upon my portfolio page. Welcome! Here you'll find a visual representation of my work as a digital media connoisseur. I enjoy fiddling with code as well as dabbling in design work. The examples you'll find around my portfolio showcase my latest works, as well as the portfolio itself.</p></div>
</div>

<!-- gallery -->
<div class="pure-g">
  <div class="pure-u-1"><h2>Things I've Made</h2></div>
  
  <div class="interest-selection form-control select select-primary select-block mbl pure-u-sm-1 pure-u-md-1-7 pure-u-lg-1-4">
    <form class="pure-form"><select id="mywork" class="pure-input-1">
    <option value="default">(Choose from me!)</option>
    <option value="motion">Motion Graphics</option>
    <option value="video">Videography</option>
    <option value="design">Design/graphics</option>
    <option value="web">Web Development</option>
    <option value="all">ALL</option>
    </select>
    </form>

  </div>

  <div class="interest-display pure-u-sm-1 pure-u-md-6-7 pure-u-lg-3-4" id="gallery">
    <a class="fancybox" data-caption="This is the caption" title="Captionnn" rel="lightbox" href="imgs/gallery/fullsize1.jpg"><img class="gallery-thumbnail all web" src="imgs/gallery/thumb1.jpg" alt="Kittens are cute" /></a>
    <a class="fancybox" data-caption="This is the caption" title="Captionnn" rel="lightbox" href="imgs/gallery/fullsize1.jpg"><img class="gallery-thumbnail all video" src="imgs/gallery/thumb1.jpg" alt="Kittens are cute" /></a>
    <a class="fancybox" data-caption="This is the caption" title="Captionnn" rel="lightbox" href="imgs/gallery/fullsize1.jpg"><img class="gallery-thumbnail all web" src="imgs/gallery/thumb1.jpg" alt="Kittens are cute" /></a>
    <a class="fancybox" data-caption="This is the caption" title="Captionnn" rel="lightbox" href="imgs/gallery/fullsize1.jpg"><img class="gallery-thumbnail all video" src="imgs/gallery/thumb1.jpg" alt="Kittens are cute" /></a>
    <a class="fancybox" data-caption="This is the caption" title="Captionnn" rel="lightbox" href="imgs/gallery/fullsize1.jpg"><img class="gallery-thumbnail all design" src="imgs/gallery/thumb1.jpg" alt="Kittens are cute" /></a>
    <a class="fancybox" data-caption="This is the caption" title="Captionnn" rel="lightbox" href="imgs/gallery/fullsize1.jpg"><img class="gallery-thumbnail all motion" src="imgs/gallery/thumb1.jpg" alt="Kittens are cute" /></a>
    <a class="fancybox" data-caption="This is the caption" title="Captionnn" rel="lightbox" href="imgs/gallery/fullsize1.jpg"><img class="gallery-thumbnail all design" src="imgs/gallery/thumb1.jpg" alt="Kittens are cute" /></a>
  </div>
</div>

</body>
</html>

<script src="js/gallery.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $(".fancybox").fancybox();
  });
</script>