<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Toggle button -->
        <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarCenteredExample"
            aria-controls="navbarCenteredExample"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <i class="fas fa-bars"></i>
        </button>

        <!-- Logo  -->
        <div class="logo-wrapper waves-light waves-effect waves-light">
            <a href="/">
                <img
                    class="img-fluid d-flex justify-content-center mx-auto"
                    src="{{ asset('images/logo.png') }}"
                    style="height: 50px"
                />
            </a>
        </div>
        <!-- Logo  -->

        <!-- Collapsible wrapper -->
        <div
            class="collapse navbar-collapse justify-content-center"
            id="navbarCenteredExample"
        >
            <!-- Left links -->
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a
                        class="nav-link active"
                        aria-current="page"
                        href="{{ route('home') }}"
                        >Home</a
                    >
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('service') }}"
                        >Service</a
                    >
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('training') }}"
                        >Training</a
                    >
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About Us</a>
                </li>
                <!-- Navbar dropdown -->
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        href="{{ route('knowledge') }}"
                        id="navbarDropdown"
                        role="button"
                        data-mdb-toggle="dropdown"
                        aria-expanded="false"
                    >
                        Knowledge
                    </a>
                    <!-- Dropdown menu -->
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="{{ route('knowledge') }}">All Knowledge</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Diabetes</a>
                        </li>
                        <li><hr class="dropdown-divider" /></li>
                        <li>
                            <a class="dropdown-item" href="#">Caregiver</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li>
            </ul>
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
</nav>
