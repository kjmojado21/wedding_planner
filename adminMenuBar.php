<nav class="navbar navbar-expand navbar-light bg-faded">
    <a class="navbar-brand" href="admin.php"><img src="images/logo.jpg" alt="" style="height: 150px; width:150px;"></a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
            <a class="nav-link" href="#"></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Userlist</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options</a>
            <div class="dropdown-menu" aria-labelledby="dropdownId">
                <a class="dropdown-item" href="#">Manage User</a>
                <a class="dropdown-item" href="#">Manage Packages</a>
                <a class="dropdown-item" href="logout.php">Logout</a>
            </div>
        </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" method='post'>
        
        <input class="form-control mr-sm-2" type="text" placeholder="Search a couple">
        <button class="btn btn-outline-success my-2 my-sm-0" name="search" type="submit">Search</button>
    </form>
</nav>