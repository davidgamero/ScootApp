<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Help</title>
	
	<!-- Allows Android to add to home screen -->
	<meta name="mobile-web-app-capable" content="yes">
    
	
    <!-- Sets initial viewport load and disables zooming  -->
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">

    <!-- Makes your prototype chrome-less once bookmarked to your phone's home screen -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Include the compiled Ratchet CSS -->
    <link href="css/ratchet.min.css" rel="stylesheet">

    <!-- Include the compiled Ratchet JS -->
    <script src="js/ratchet.min.js"></script>
  </head>
  <body>

    <!-- Make sure all your bars are the first things in your <body> -->
    <header class="bar bar-nav">
		<a class="btn btn-link btn-nav pull-left" href="Home.php" data-transition="slide-out">
			<span class="icon icon-left-nav"></span>
			Home
		</a>
		<a class="btn btn-link btn-nav pull-right">
			<span class="icon icon-info"></span>
			
		</a>
		<h1 class="title">Help</h1>
    </header>

    <!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
    <div class="content">
      <p class="content-padded">Thanks for downloading Ratchet. This is an example HTML page that's linked up to compiled Ratchet CSS and JS, has the proper meta tags and the HTML structure. Need some more help before you start filling this with your own content? Check out some Ratchet resources:</p>
      <div class="card">
        <ul class="table-view">
          <li class="table-view-cell">
            <a class="push-right" href="http://goratchet.com">
              <strong>Ratchet documentation</strong>
            </a>
          </li>
          <li class="table-view-cell">
            <a class="push-right" href="https://github.com/twbs/ratchet/">
              <strong>Ratchet on Github</strong>
            </a>
          </li>
          <li class="table-view-cell">
            <a class="push-right" href="https://groups.google.com/forum/#!forum/goratchet">
              <strong>Ratchet Google group</strong>
            </a>
          </li>
          <li class="table-view-cell">
            <a class="push-right" href="https://twitter.com/goratchet">
              <strong>Ratchet on Twitter</strong>
            </a>
          </li>
        </ul>
      </div>
    </div>

  </body>
</html>