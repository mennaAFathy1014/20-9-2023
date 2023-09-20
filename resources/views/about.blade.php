<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Clean Blog - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
               <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


        <style>
            header.masthead {
            position: relative;
            margin-bottom: 3rem;
            padding-top: calc(8rem + 57px);
            padding-bottom: 8rem;
            background: no-repeat center center;
            background-color: #6c757d;
            background-size: cover;
            background-attachment: scroll;

        }
            header.masthead:before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: #212529;
                opacity: 0.5;
            }
            header.masthead .page-heading,
            header.masthead .post-heading,
            header.masthead .site-heading {
                color: #fff;
            }
            header.masthead .page-heading,
            header.masthead .site-heading {
                text-align: center;
            }
            header.masthead .page-heading h1,
            header.masthead .page-heading .h1,
            header.masthead .site-heading h1,
            header.masthead .site-heading .h1 {
                font-size: 3rem;
            }
            header.masthead .page-heading .subheading,
            header.masthead .site-heading .subheading {
                font-size: 1.5rem;
                font-weight: 300;
                line-height: 1.1;
                display: block;
                margin-top: 0.625rem;
                font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI",
                    Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji",
                    "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            }
            header.masthead .post-heading h1,
            header.masthead .post-heading .h1 {
                font-size: 2.25rem;
            }
            header.masthead .post-heading .meta,
            header.masthead .post-heading .subheading {
                line-height: 1.1;
                display: block;
            }
            header.masthead .post-heading .subheading {
                font-size: 1.5rem;
                font-weight: 600;
                margin: 0.75rem 0 2rem;
                font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI",
                    Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji",
                    "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            }
            header.masthead .post-heading .meta {
                font-size: 1.25rem;
                font-weight: 300;
                font-style: italic;
                font-family: "Lora", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
                    "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji",
                    "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            }
            header.masthead .post-heading .meta a {
                color: #fff;
            }
            @media (min-width: 992px) {
                header.masthead {
                    padding-top: 12.5rem;
                    padding-bottom: 12.5rem;
                }
                header.masthead .page-heading h1,
                header.masthead .page-heading .h1,
                header.masthead .site-heading h1,
                header.masthead .site-heading .h1 {
                    font-size: 5rem;
                }
                header.masthead .post-heading h1,
                header.masthead .post-heading .h1 {
                    font-size: 3.5rem;
                }
                header.masthead .post-heading .subheading {
                    font-size: 1.875rem;
                }
            }
             .section-heading {
                font-size: 2.25rem;
                font-weight: 700;
                margin-top: 3.75rem;
            }

            .caption {
                font-size: 0.875rem;
                font-style: italic;
                display: block;
                margin: 0;
                padding: 0.625rem;
                text-align: center;
            }

            .post-preview > a {
                color: #212529;
            }
            .post-preview > a:focus,
            .post-preview > a:hover {
                text-decoration: none;
                color: #0085a1;
            }
            .post-preview > a > .post-title {
                font-size: 1.875rem;
                margin-top: 1.875rem;
                margin-bottom: 0.625rem;
            }
            .post-preview > a > .post-subtitle {
                font-weight: 300;
                margin-bottom: 0.625rem;
            }
            .post-preview > .post-meta {
                font-size: 1.125rem;
                font-style: italic;
                margin-top: 0;
                color: #6c757d;
            }
            .post-preview > .post-meta > a {
                text-decoration: none;
            }
            @media (min-width: 992px) {
                .post-preview > a > .post-title {
                    font-size: 2.25rem;
                }
            }

        </style>
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.blade.html">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.blade.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="about.blade.html">About</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="post.blade.html">Sample Post</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="contact.blade.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('assets/img/about-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1>About Me</h1>
                            <span class="subheading">This is what I do.</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe nostrum ullam eveniet pariatur voluptates odit, fuga atque ea nobis sit soluta odio, adipisci quas excepturi maxime quae totam ducimus consectetur?</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius praesentium recusandae illo eaque architecto error, repellendus iusto reprehenderit, doloribus, minus sunt. Numquam at quae voluptatum in officia voluptas voluptatibus, minus!</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur magnam, excepturi aliquid ex itaque esse est vero natus quae optio aperiam soluta voluptatibus corporis atque iste neque sit tempora!</p>
                    </div>
                </div>
            </div>
        </main>
        <!-- Footer-->
        <footer class="border-top">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <ul class="list-inline text-center">
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="small text-center text-muted fst-italic">Copyright &copy; Your Website 2023</div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
          <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
           <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>