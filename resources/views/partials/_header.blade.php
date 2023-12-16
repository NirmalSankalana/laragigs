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
            <a href="/profile" class="btn btn-sm mx-1 btn-user" type="submit"><i data-feather="user"></i></a>            
        </div>
    </div>
</header>

