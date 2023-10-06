<nav class="navbar navbar-expand-lg bg-light p-2 shadow-sm">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse px-5" style="justify-content: center;" id="navbarNavDropdown">
        <a class="navbar-brand" style="margin-right:10em;" href="index.php">VStudies</a>
        <ul class="navbar-nav">
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
            <?php if(empty($_SESSION['USER'])) :
                ?>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="login.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="signup.php">Signup</a>
            </li>
            <?php else: ?>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="admin.php">Admin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="logout.php">Logout</a>
            </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>
