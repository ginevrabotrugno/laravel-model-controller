<header>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href=" {{ route('home') }} ">MOVIES</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href=" {{ route('home') }} ">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href=" {{ route('about') }} ">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href=" {{ route('contacts') }} ">Contacts</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href=" {{ route('bestMovies') }} ">Best Movies</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</header>
