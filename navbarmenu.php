<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">SPK Weighted Product</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Data Kriteria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Data Alternatif</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Analisa</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">Perhitungan</a>
                </li>
            </ul>
            <form class="d-flex">
                <button class="btn <?= isset($_SESSION['username']) ? "btn-outline-danger" : "btn-outline-success" ?>" onclick="window.location.href='<?= isset($_SESSION['username']) ? 'logout.php' : 'login.php' ?>'" type="button">
                    <?= isset($_SESSION['username']) ? "Logout" : "Login" ?>
                </button>
            </form>
        </div>
    </div>
</nav>