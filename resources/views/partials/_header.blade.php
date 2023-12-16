<!-- header.blade.php -->

<header>
    <a class="navbar-brand" href="/">LaraGigs</a>
    <div class="navbar-control d-flex align-items-center justify-content-around">
        <form class="input-group input-group-sm mr-3">
            <input class="form-control form-control-sm" type="text" name="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sm search-btn" type="submit">
                    <i data-feather="search"></i> <!-- Assuming you're using Font Awesome for icons -->
                </button>
            </div>
        </form>
        <div class="d-flex align-items-center justify-content-around">
            @auth
            <a href="/listings/manage" class="btn btn-sm mx-1" type="submit">Manage Listings</a>
            <a href="/listings/create" class="btn btn-sm mx-1" type="submit">Post a Job</a>
            <i data-feather="user">Welcome {{auth()->user()->name}}</i>
            @else
            <a href="/login" class="btn btn-sm mx-1" type="submit">Login</a>
            <a href="/register" class="btn btn-sm mx-1" type="submit">Register</a>
            @endauth
        </div>
    </div>
</header>

