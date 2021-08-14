<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Skylar Bruce">
  <title>Demo</title>

  <!-- Bootstrap core CSS -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- Favicons -->
  <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
  <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
  <meta name="theme-color" content="#7952b3">


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="../assets/css/blog.css" rel="stylesheet">
</head>

<body>

  <div class="container">
    <header class="blog-header py-3">
      <div class="row flex-nowrap justify-content-center align-items-center">
        <div class="col-4 text-center">
          <a class="blog-header-logo text-dark" href=<?php
                                                      require_once("../scripts/getUrl.php");
                                                      getUrl("/home/");
                                                      ?>>RealTime Blog Posts</a>
        </div>

      </div>
    </header>

    <div class="nav-scroller py-1 mb-2">
      <nav class="nav d-flex justify-content-center">
        <a class="p-2 link-secondary" href=<?php
                                            require_once("../scripts/getUrl.php");
                                            getUrl("/home/");
                                            ?>>Home</a>
        <a class="p-2 link-secondary active" href=<?php
                                                  require_once("../scripts/getUrl.php");
                                                  getUrl("/home/docs.php");
                                                  ?>>Docs</a>
      </nav>
    </div>
  </div>
  <br><br>
  <main class="container">
    <h2> Documentation </h2>
    <p>
    <table class=" table">
      <thead>
        <tr>
          <th scope="col">Technology</th>
          <th scope="col">Usage</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Linux</td>
          <td>CentOS 7.0-64 hosted on a virtual server on the IBM Cloud.</td>
        </tr>
        <tr>
          <td>Apache</td>
          <td>Apache HTTP Server.</td>
        </tr>
        <tr>
          <td>MySql</td>
          <td>MariaDB.</td>
        </tr>
        <tr>
          <td>PHP</td>
          <td>PHP 7.4.22: Usage featured in the /scripts folder. Also used in docs for url tasks.</td>
        </tr>
        <tr>
          <td>JQuery</td>
          <td>JQuery 3.6.0: Usage featured in home/index.php, ajax request used to GET a response from the DB and scripting used to verify validity of the submission form.</td>
        </tr>
        <tr>
          <td>GitHub</td>
          <td><a href="https://github.com/skylovescoffee/lamp_realtime_blog">View source code on GitHub.</a></td>
        </tr>
      </tbody>
    </table>
    <br><br><br>

  </main>

  <footer class="blog-footer">
    <p>Web App by Skylar Bruce. <a href="https://skylarbruce.dev/">Visit my website.</a></p>
    <p>
      <a href="#">Back to top</a>
    </p>
  </footer>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</body>

</html>