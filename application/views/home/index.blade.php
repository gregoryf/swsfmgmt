<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>SWSF:MGMT - Empire management application</title>
	<meta name="viewport" content="width=device-width">
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
                <a href="/laravel/public/">Home</a>
              </li>
              <li class="">
                <a href="/laravel/public/users/">Users</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    @yield('content')

</body>
</html>
