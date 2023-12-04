<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
        <meta name="keywords" content="HTML, CSS, JavaScript">
        <link rel="stylesheet" href="https://bootswatch.com/5/slate/bootstrap.min.css">
        <title><?= $title ?></title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container-fluid">
            <a class="navbar-brand" href="#">LOGO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="./ ">Accueil
                            <span class="visually-hidden">(actif)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./blog.php">Blog</a>
                    </li>
                    <!-- <li class="nav-item"> -->
                        <!-- <a class="nav-link" href="#">Pricing</a> -->
                    <!-- </li> -->
                    <!-- <li class="nav-item"> -->
                        <!-- <a class="nav-link" href="#">About</a> -->
                    <!-- </li> -->
                    <!-- <li class="nav-item dropdown"> -->
                        <!-- <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a> -->
                        <!-- <div class="dropdown-menu"> -->
                            <!-- <a class="dropdown-item" href="#">Action</a> -->
                            <!-- <a class="dropdown-item" href="#">Another action</a> -->
                            <!-- <a class="dropdown-item" href="#">Something else here</a> -->
                            <!-- <div class="dropdown-divider"></div> -->
                            <!-- <a class="dropdown-item" href="#">Separated link</a> -->
                        <!-- </div> -->
                    <!-- </li> -->
                </ul>
                <!-- <form class="d-flex"> -->
                    <!-- <input class="form-control me-sm-2" type="search" placeholder="Search"> -->
                    <!-- <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button> -->
                <!-- </form> -->
            </div>
            </div>
        </nav>
        <main>
            <div class="container">
                <?=$content?>
            </div>
        </main>

    </body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</html>
