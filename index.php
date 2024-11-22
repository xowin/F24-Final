<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sportify</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous">
  <!-- Bootstrap icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <!-- Custom styles -->
  <link rel="stylesheet" href="styles/style.css" />
</head>
<body class="body">
    <!-- playlist header -->
     <header class="container-fluid">
        <div class="row justify-content-center">
        <!-- playlist image -->
         <div class="col-12 col-md-4">
         <img src="/images/placeholder.jpg" alt="playlist image" class="img-fluid" />
        </div>        <!-- playlist information -->
        <!-- playlist information -->
        <div class="col-2 col-sm my-auto pb-2 pb-sm-0 pe-sm-5">
        <small><strong>Playlist</small></strong>
        <h1><strong id="pl-name">On Repeat</strong></h1>
        <strong><p id="pl-description">Songs I can't get enough of right now!</strong></p>
        <p class="d-block text-shadow-white">
          <small><i class="bi bi-github"></i></small>
          <strong><small id="create">
            Created by Hayley, Ethan, Vivaan
            <a href="" class="text-decoration-none text-light"></a></strong>
          </small>
        </p>
      </div>
    </div>
        <!-- Action buttons -->
        <div class="p-6">
      <button type="button" class="btn btn-play" aria-label="Play">
        <i class="bi bi-play-fill"></i>
      </button>
      <button type="button" class="btn" id="btn-favorite" aria-label="Favorite">
        <i class="bi bi-heart text-light"></i>
      </button>
      <button type="button" class="btn" id="btn-more-options" aria-label="More options">
        <i class="bi bi-three-dots text-light"></i>
      </button>
    </div> 
        <!-- Song information row -->
        <div class="container-fluid text-center border-top border-bottom border-secondary py-2 full-width-row">
      <div class="row">
        <small class="col-1">#</small>
        <small class="col-4 text-start">Title</small>
        <small class="col-2 d-none d-md-block text-start">Album</small>
        <small class="col-3 text-start">Artist</small>
        <small class="col-1 px-0"><i class="bi bi-clock-fill"></i></small>
      </div>
    </div>
  </header>
  <!-- Songs -->
  <main class="container-fluid" id="songs">

    <?php
    include 'songs.php';
    ?>
  </main>

   <!-- Media controls -->
   </div>
    <footer class="bg-dark text-white py-3">
    <div class="container d-flex justify-content-between align-items-center">
        <!-- Song Title -->
        <div class="d-flex align-items-center">
            <div class="ms-3">
                <p class="mb-0"></p>
                <small></small>
            </div>
        </div>

        <!-- Media Controls -->
        <div class="d-flex align-items-center">
            <button class="btn btn-outline-light me-2">
                <i class="fas fa-step-backward"></i>
            </button>
            <button class="btn btn-light me-2">
                <i class="fas fa-play"></i>
            </button>
            <button class="btn btn-outline-light me-2">
                <i class="fas fa-step-forward"></i>
            </button>
        </div>

        <!-- Volume Control -->
        <div class="d-flex align-items-center">
            <i class="fas fa-volume-up me-2"></i>
            <input type="range" class="form-range" id="volumeControl" min="0" max="100" step="1" value="50">
        </div>
    </div>

    <!-- Progress Bar -->
    <div class="container mt-2">
        <input type="range" class="form-range" id="progressBar" min="0" max="100" step="1" value="0">
    </div>
</footer>


  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous">

  </script>
  
</body>

</html>