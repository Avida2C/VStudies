<nav class="navbar navbar-expand-lg bg-body-tertiary bg-light shadow-sm">
    <div class="container-fluid col-lg-8">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="index.php">VStudies</a>

        <div class="offcanvas offcanvas-start" style="justify-content: center;" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">VStudies</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav">
                    <?php if(empty($_SESSION['USER'])) :
                        ?>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="login.php">Login</a>
                    </li>
                    <?php else: ?>
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="javascriptNotes.php">Javascript</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="regEx.php">RegEx</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="phpNotes.php">PHP</a>
                    </li>
                    <a class="nav-link active" aria-current="page" href="apiNotes.php">API</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="referenceList.php">References</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="admin.php">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="logout.php">Logout</a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>


        
</nav>