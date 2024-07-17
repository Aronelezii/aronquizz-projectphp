<?php
    session_start();
    if(empty($_SESSION['username'])){
        header("Location:index.php");
    }

    include_once("config.php");
   
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a href="" class="navbar-brand col-md-3 col-lg-2 m3-0 px-3">
            <?php echo "Welcome back ".$_SESSION['username']; ?></a>
            <button class="navbar-toggle position-absolute d-md-none collapsed" type="button"
            data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" 
            aria-expend="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>

            </button>
            <input  class="form-control form-control-dark w-50" type="text"
            placeholder="Search" aria-label="Search">
            <div class="nav-item text-nowrap">
                <a href="logout.php" class="nav-item px-3" >Sign Out</a>
            </div>
    </header>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bd-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="Dashboard.php">Dashboard</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>    
    </div>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
       <form action="CreateUserLogic.php" method="post">
                <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Username</label>
                        <input name="username" type="text" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                        <input name="Cpassword" type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="is_admin" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Admin</label>
                        </div>
                        <input type="submit" name="submit" class="btn btn-primary">
</div>
       </form>
    </main>
</body>
</html>