
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container"> <a class="navbar-brand" href="home.php">
            <img class="img-fluid d-block" src="img/navbar/Logo.png">
        </a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse"
            data-target="#navbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav mr-auto">
                <li <?php if ($currentPage == 'home.php') echo 'class="current-page"'; else echo 'class="nav-item"'; ?>> <a class="nav-link" href="home.php">Home</a> </li>
                <li <?php if ($currentPage == 'recipe_list.php' || $currentPage == 'recipe.php') echo 'class="current-page"'; else echo 'class="nav-item"'; ?>> <a class="nav-link" href="recipe_list.php">Recipes</a> </li>
                <li <?php if ($currentPage == 'about_us.php') echo 'class="current-page"'; else echo 'class="nav-item"'; ?>> <a class="nav-link" href="about_us.php">About Us</a> </li>
            </ul>
            <a class="btn navbar-btn ml-md-2 btn-light" href="index.php">Logout</a>
        </div>
    </div>
</nav>