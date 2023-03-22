<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

    <title>Courses | The Providers Solutions</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">
            <img src="https://theproviderssolutions.com/public/assets/images/whitetext-1@2x.png" alt="logo-alt" width="90" height="40">
        </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Frontend Development Course
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/coursedetail">HTML</a></li>
                  <li><a class="dropdown-item" href="/coursedetail">CSS</a></li>
                  <li><a class="dropdown-item" href="/coursedetail">JAVASCRIPT</a></li>
                  <li><a class="dropdown-item" href="/coursedetail">BOOTSTRAP</a></li>
                  <li><a class="dropdown-item" href="/coursedetail">jQuery</a></li>
                  <li><a class="dropdown-item" href="/coursedetail">SCSS</a></li>
                  <li><a class="dropdown-item" href="/coursedetail">SASS</a></li>
                  <li><a class="dropdown-item" href="/coursedetail">SEO BASICS</a></li>
                  <li><a class="dropdown-item" href="/coursedetail">Moduler Project</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Backend Development Course
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/coursedetail">PHP</a></li>
                    <li><a class="dropdown-item" href="/coursedetail">MySQL</a></li>
                    <li><a class="dropdown-item" href="/coursedetail">LARAVEL</a></li>
                    <li><a class="dropdown-item" href="/coursedetail">Version Control</a></li>
                    <li><a class="dropdown-item" href="/coursedetail">XML</a></li>
                    <li><a class="dropdown-item" href="/coursedetail">JSON</a></li>
                    <li><a class="dropdown-item" href="/coursedetail">Data Management With SQL</a></li>
                    <li><a class="dropdown-item" href="/coursedetail">Object Oriented Programming</a></li>
                    <li><a class="dropdown-item" href="/coursedetail">Moduler Project</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/">Contact</a>
              </li>
            </ul>
    <a href="/login"><button class="btn btn-outline-warning">Login / Register</button></a>
          </div>
        </div>
      </nav>
    @yield('homeContent')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
