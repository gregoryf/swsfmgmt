<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Laravel: A Framework For Web Artisans</title>
	<meta name="viewport" content="width=device-width">
	{{ HTML::style('laravel/css/style.css') }}
	{{ Asset::container('bootstrapper')->styles(); }}
	{{ Asset::container('bootstrapper')->scripts(); }}
</head>
<body>
 <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="./index.html">Bootstrap</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="">
                <a href="./index.html">Home</a>
              </li>
              <li class="">
                <a href="./getting-started.html">Get started</a>
              </li>
              <li class="active">
                <a href="./scaffolding.html">Scaffolding</a>
              </li>
              <li class="">
                <a href="./base-css.html">Base CSS</a>
              </li>
              <li class="">
                <a href="./components.html">Components</a>
              </li>
              <li class="">
                <a href="./javascript.html">JavaScript</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

</body>
</html>
