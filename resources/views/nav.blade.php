<nav class="navbar navbar-expand-lg bg-light">
    <div class="d-flex w-100 container-fluid">
        <div class="w-100 d-flex justify-content-between">
            <div class="d-flex">
                <div class="mx-2"><small><strong>IG</strong></small></div>
                <div class="mx-2"><small><strong>Toped</strong></small></div>
                <div class="mx-2"><small><strong>WA</strong></small></div>

            </div>
            <div>
                <a class="navbar-brand" href="#">CENTRUME_ind</a>
            </div>

        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            </ul>
            <form class="d-flex">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    {{-- <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li> --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Product
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/marmergranit">Marmer & Granit</a></li>
                            <li><a class="dropdown-item" href="/besi">Besi</a></li>
                            {{-- <li>
                            <hr class="dropdown-divider">
                        </li> --}}
                            <li><a class="dropdown-item" href="/aksesoris">Aksesoris</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/portofolio">Portofolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/contact">Contact</a>
                    </li>
                    {{-- <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li> --}}
                </ul>
                {{-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> --}}
                {{-- <button class="btn btn-outline-success" type="submit">Search</button> --}}
            </form>
        </div>
    </div>
</nav>