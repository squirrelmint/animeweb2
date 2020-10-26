<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Anime8k</title>

  <!-- Bootstrap core CSS -->
  <link href="<?=$document_root?>assets/vendor/bootstrap/css/bootstrap.min.css?v=1" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="<?=$document_root?>assets/vendor/fontawesome-free/css/all.min.css?v=1" rel="stylesheet">
  <link href="<?=$document_root?>assets/vendor/simple-line-icons/css/simple-line-icons.css?v=1" rel="stylesheet" type="text/css">
  
  <!-- Swiper -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?=$document_root?>assets/css/landing-page.css?v=1" rel="stylesheet">

  <!-- Bootstrap core JavaScript -->
  <script src="<?=$document_root?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?=$document_root?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light anime-navbar static-top">
    <div class="container">
      <a class="navbar-brand" href="#">Start Bootstrap</a>
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Category</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contract</a>
            </li>
        </ul>
        <form id="anime-formsearch">
          <div class="input-group" id="adv-search">
            <input id="anime-search" class="anime-search" placeholder="Search..." value="">
            <div class="input-group-btn">
                <div class="btn-group" role="group">
                  <button type="submit" class="anime-search-button"><i class="fas fa-search"></i></button>
                  <!-- <div class="dropdown dropdown-lg">
                      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                      <div class="dropdown-menu dropdown-menu-right" role="menu">
                          <div class="anime-search-detail">
                            <label>Type :</label>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" id="anime_type1" name="anime_type" value="movie">
                              <label class="form-check-label" for="anime_type1">
                                Movie
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" id="anime_type2" name="anime_type" value="subthai">
                              <label class="form-check-label" for="anime_type2">
                                SUB-THAI
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" id="anime_type3" name="anime_type" value="soundthai">
                              <label class="form-check-label" for="anime_type3">
                                SOUND-THAI
                              </label>
                            </div>
                          </div>
                          <div class="anime-search-line"></div>
                          <div class="anime-search-detail">
                            <div class="form-group">
                              <label for="anime_category">Category :</label>
                              <select id="anime_category" name="anime_category" class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
                              </select>
                            </div>
                          </div>
                      </div>
                  </div> -->
                </div>
            </div>
          </div>
        </form>
     </div>
    </div>
  </nav>

  <section id="anime-banners" class="text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-12 ">
          <img class="banners" src="https://gurubac.com//images/banner.jpg?692d2df5f9f9837e6112a0e772232da7">
        </div>
      </div>
    </div>
  </section>