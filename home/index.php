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
  <main class="container">
    <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
      <div class="col-md-6 px-0">
        <h1 class="display-4 fst-italic">LAMP Stack Demo: Intended for Oliver Harte.</h1>
        <p class="lead my-3">The purpose of this demo is to demonstrate a realtime blog post/comment
          webapp where each post has an author, title, post, and a date.
          It is meant to display MySql, PHP, and JQuery Skills.</p>
        <p class="lead mb-0"><a class="text-white fw-bold" href=<?php
                                                                require_once("../scripts/getUrl.php");
                                                                getUrl("/home/docs.php"); ?>>
            Please view the docs for more specifications.</a>
        </p>
      </div>
    </div>

    <div class="row mb-2 d-flex justify-content-center">
      <div class="col-md-6">
        <div class="row g-0 border rounded flex-md-row mb-4 shadow-sm h-md-400 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <h4>Author a Post</h4>
            <form name="contact-form" action="" method="post" id="contact-form">
              <div class="form-group">
                <label for="Author">Author</label>
                <input type="text" class="form-control" name="authorSelf" placeholder="Author" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" class="form-control" name="titleSelf" placeholder="Title" required>
              </div>
              <div class="form-group">
                <label for="Phone">Comment</label>
                <input type="text" class="form-control" name="commentSelf" placeholder="Comment" required>
              </div>
              <br>
              <button type="submit" class="btn btn-primary" name="submit" value="Submit" id="submit_form">Submit</button>

            </form>


            <div class="response_msg"></div>
          </div>
        </div>
      </div>
    </div>

    <h2> Previous Posts </h2>
    <div class="row mb-2" id="responsecontainer">

    </div>


  </main>

  <footer class="blog-footer">
    <p>Web App by Skylar Bruce. <a href="https://skylarbruce.dev/">Visit my website.</a></p>
    <p>
      <a href="#">Back to top</a>
    </p>
  </footer>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    $(document).ready(function() {

      $.ajax({ //create an ajax request to display.php
        type: "GET",
        url: "../scripts/getPosts.php",
        dataType: "html", //expect html to be returned                
        success: function(response) {
          $("#responsecontainer").html(response);
          //alert(response);
        }
      });
      $("#contact-form").on("submit", function(e) {
        e.preventDefault();
        if ($("#contact-form [name='authorSelf']").val() === '') {
          $("#contact-form [name='authorSelf']").css("border", "1px solid red");
        } else if ($("#contact-form [name='titleSelf']").val() === '') {
          $("#contact-form [name='titleSelf']").css("border", "1px solid red");
        } else if ($("#contact-form [name='commentSelf']").val() === '') {
          $("#contact-form [name='commentSelf']").css("border", "1px solid red");
        } else {
          $("#loading-img").css("display", "block");
          var sendData = $(this).serialize();
          $.ajax({
            type: "POST",
            url: "../scripts/getPostResponse.php",
            data: sendData,
            success: function(data) {
              $(".response_msg").text(data);
              $(".response_msg").slideDown().fadeOut(3000);
              $("#contact-form").find("input[type=text], input[type=email], textarea").val("");
              $.ajax({ //create an ajax request to display.php
                type: "GET",
                url: "../scripts/getPosts.php",
                dataType: "html", //expect html to be returned                
                success: function(response) {
                  $("#responsecontainer").html(response);
                  //alert(response);
                }
              });
            }

          });
        }
      });

      $("#contact-form input").blur(function() {
        var checkValue = $(this).val();
        if (checkValue != '') {
          $(this).css("border", "1px solid #eeeeee");
        }
      });
    });
  </script>

</body>

</html>