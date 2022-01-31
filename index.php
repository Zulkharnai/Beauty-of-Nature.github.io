<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>syed zulkharnain | first website</title>

    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>

    <!-- css style -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'manu.php'; ?>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="s1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Beauty of Nature</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="s2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Beauty of Nature</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="s3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Beauty of Nature</h5>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">About Us</h2>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="s4.jpg" alt="Men With Nature" class="img-fluid aboutimg">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h3 class="display-4">I am syed zulkharnain </h3>
                    <h5>A web Developer</h5>
                    <p class="py-2">A web developer is a programmer who specializes in, or is specifically engaged in,
                        the
                        development of World Wide Web applications using a client–server model. The applications
                        typically use HTML, CSS and JavaScript in the client, PHP, ASP.NET (C#), Python, Node.js, Go or
                        Java in the server, and http for communications between client and server. A web developer may
                        specialize in client-side applications (front-end developer), server-side applications (back-end
                        developer), or both (full-stack developer). A web content management system may be used to
                        develop and maintain web applications.</p>
                    <p>
                        <a href="about.php" class="btn btn-success"> Check More </a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center" id="service">Our Services</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img src="s5.jpg" class="card-img-top" alt="Beauty of Nature">
                        <div class="card-body">
                            <h5 class="card-title">Beauty of Nature</h5>
                            <p class="card-text">simple example.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img src="s5.jpg" class="card-img-top" alt="Beauty of Nature">
                        <div class="card-body">
                            <h5 class="card-title">Beauty of Nature</h5>
                            <p class="card-text">simple example</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img src="s5.jpg" class="card-img-top" alt="Beauty of Nature">
                        <div class="card-body">
                            <h5 class="card-title">Beauty of Nature</h5>
                            <p class="card-text">simple example</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Our Gallery</h2>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="s2.jpg" alt="Beauty of Nature" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="s2.jpg" alt="Beauty of Nature" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="s2.jpg" alt="Beauty of Nature" class="img-fluid pb-4">
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="s2.jpg" alt="Beauty of Nature" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="s2.jpg" alt="Beauty of Nature" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="s2.jpg" alt="Beauty of Nature" class="img-fluid pb-4">
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="s2.jpg" alt="Beauty of Nature" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="s2.jpg" alt="Beauty of Nature" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="s2.jpg" alt="Beauty of Nature" class="img-fluid pb-4">
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center" id="contact">Contact</h2>
        </div>
        <div class="w-50 m-auto">
            <form action="userinfo.php" method="post">
                <div class="form-group">
                    <label>username</label>
                    <input type="text" name="username" autocomplete="off" class="form-control username">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="Email" autocomplete="off" class="form-control username">
                </div>
                <div class="form-group">
                    <label>Mobile Number</label>
                    <input type="text" name="Mobile" autocomplete="off" class="form-control username">
                </div>
                <div class="form-group">
                    <label>Comment</label>
                    <textarea name="Comment" class="form-control">
                    </textarea>
                </div>
                <button type="submit" class="btn btn-success my-3">Submite</button>
            </form>
        </div>
    </section>

    <footer>
        <p class="text-white bg-dark p-3 text-center">@Syed Zulkharnain</p>
    </footer>

</body>

</html>