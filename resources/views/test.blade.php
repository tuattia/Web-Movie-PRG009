<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PROGRESS.MOVIE | home</title>
  <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
  <nav class=" breadcrumb navbar navbar-expand-lg bg-light ">
    <div class="container-fluid ">
      <h1 href="#">Hello User</h1>
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav ">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#747678" class="bi bi-bookmark-fill" viewBox="0 0 16 16">
              <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z"/>
            </svg> </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#747678" class="bi bi-bell" viewBox="0 0 16 16">
              <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
            </svg></a>
          </li>
        </ul>
      </div>
    </div>
    <h5 style="margin-left: 15px">Enjoy your favorite movie</h5>
  </nav>

  <form class="d-flex" action="#" method="">
    <input class="form-control rounded  me-sm-2" type="search" placeholder="Search Movie.." name="" value=""required/>
</form>


  <h1 style="margin-top: 40px">Popular Movie </h1>
  <div class="media-container">
    <div class="media-scroller">
      <!--   Group 1 -->
      <div class="media-group" id="group-1">
        <div class="media-element">
          <img src="img/pinocchio.jpg" alt="poster pinocchio" />
          <a href="#">
            <h2 margin-top=20px> Pinocchio</h2>
            <h5> Adventure, Comedy </h5>
          </a>
        </div>
        <div class="media-element">
          <img src="img/5.jpg" alt="poster frozen" />
          <a href="#">
            <h2 margin-top=20px> Frozen</h2>
            <h5> Family, Comedy </h5>
          </a>
        </div>
        <div class="media-element">
          <img src="img/the batman.jpg" alt="poster the batman" />
          <a href="#">
            <h2 margin-top=20px> The Batman</h2>
            <h5> Action, Crime </h5>
          </a>
        </div>
        <a class="next" href="#group-2" aria-label="next">
          <svg>
            <use href="#next"></use>
          </svg>
        </a>
      </div>
      <!-- Group 2   -->
      <div class="media-group" id="group-2">
        <a class="previous" href="#group-1">
          <svg>
            <use href="#previous"></use>
          </svg>
        </a>
        <div class="media-element">
          <img src="img/claus family 2.jpg" alt="poster Clause Family" />
          <a href="#">
            <h2 margin-top=20px> Claus Family 2</h2>
            <h5> Family, Comedy </h5>
          </a>
        </div>
        <div class="media-element">
          <img src="img/6.jpg" alt="poster toy story" />
          <a href="#">
            <h2 margin-top=20px> Toy Story</h2>
            <h5> Adventure, Comedy </h5>
          </a>
        </div>
        <div class="media-element">
          <img src="img/8.jpg" alt="poster beauty and the beast" />
          <a href="#">
            <h2 margin-top=20px> Beauty and The Beast</h2>
            <h5> Family </h5>
          </a>
        </div>
      </div>
    </div>
  </div>

  <h1 style="margin-top: 60px"> TV Show </h1>
  <div class="media-container">
    <div class="media-scroller">
      <!--   Group 11 -->
      <div class="media-group" id="group-11">
        <a class="media-element2" href="#">
          <img src="img/4.jpg" alt="poster" />
          <h2> Brave </h2>
        </a>
        <a class="media-element2" href="#">
          <img src="img/1.jpg" alt="poster" />
          <h2> Wish Dragon </h2>
        </a>
        <a class="media-element2" href="#">
          <img src="img/6.jpg" alt="poster" />
          <h2> Toy Story 3 </h2>
        </a>
        <a class="media-element2" href="#">
          <img src="img/10.jpg" alt="poster" />
          <h2> Pirates of the caribbean </h2>
        </a>

        <a class="next" href="#group-12" aria-label="next">
          <svg>
            <use href="#next"></use>
          </svg>
        </a>
      </div>
      <!-- Group 12   -->
      <div class="media-group" id="group-12">
        <a class="previous" href="#group-11">
          <svg>
            <use href="#previous"></use>
          </svg>
        </a>
        <a class="media-element2" href="#">
          <img src="img/2.jpg" alt="poster" />
          <h2> Trolls</h2>
        </a>
        <a class="media-element2" href="#">
          <img src="img/7.jpg" alt="poster" />
          <h2> Peter Pan</h2>
        </a>
        <a class="media-element2" href="#">
          <img src="img/8.jpg" alt="poster" />
          <h2> Beauty and the beast</h2>
        </a>
        <a class="media-element2" href="#">
          <img src="img/the batman.jpg" alt="poster" />
          <h2> The Batman</h2>
        </a>
        <a class="next" href="#group-13" aria-label="next">
          <svg>
            <use href="#next"></use>
          </svg>
        </a>
      </div>
      <!-- Group 13   -->
      <div class="media-group" id="group-13">
        <a class="previous" href="#group-12">
          <svg>
            <use href="#previous"></use>
          </svg>
        </a>
        <a class="media-element2" href="#">
          <img src="img/9.jpg" alt="poster" />
          <h2> Aladdin</h2>
        </a>
        <a class="media-element2" href="#">
          <img src="img/14.jpg" alt="poster" />
          <h2> Harry Potter </h2>
        </a>
        <a class="media-element2" href="#">
          <img src="img/11.jpg" alt="poster" />
          <h2> Guardians of the galaxy</h2>
        </a>
        <a class="media-element2" href="#">
          <img src="img/13.jpg" alt="poster" />
          <h2> Harry Potter 1</h2>
        </a>



      </div>

      <svg>
        <symbol id="next" viewBox="0 0 256 512">
          <path fill="white" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" />
        </symbol>
        <symbol id="previous" viewBox="0 0 256 512">
          <path fill="white" d="M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z" />
        </symbol>
      </svg>
    </div>

    <form action="/logout" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger">logout</button>
    </form>
</body>

</html>

