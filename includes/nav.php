<?php 
session_start();
// session_destroy();
// if (!(isset($_SESSION['auth']) && $_SESSION['auth'] === true)) {
// 	header("Location: admin.php?access=false");
// 	exit();
// }
// else {
// 
// }
if (isset($_SESSION['admin'])) {
     $admin = $_SESSION['admin'];
}

if (isset($_SESSION['student-name'])) {
     $student = $_SESSION['student-name'];
   
}
?>



<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example">
                <span class="sr-only">:</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">  Library Management System</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example">
            <ul class="nav navbar-nav">
                <?php if(isset($admin)) { ?>  
                <li class="active"><a href="admin.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                <li><a href="bookstable.php"> <i class="fa fa-book" aria-hidden="true"></i> Books</a></li>
                <li><a href="users.php"> <i class="fa fa-lock" aria-hidden="true"></i> Admins</a></li>
                <li><a href="viewstudents.php"> <i class="fa fa-users" aria-hidden="true"></i> Students</a></li>
                <li><a href="borrowedbooks.php"> <i class="fa fa-book" aria-hidden="true"></i> Borrowed books</a></li>
                <li><a href="fines.php"><i class="fa fa-inr" aria-hidden="true"></i> Fines</a></li>
                <?php } ?>
                <?php if(isset($student)) { ?>
              <li class="active"><a href="studentportal.php">Home</a></li>
            <li><a href="profile.php">View Profile</a></li>
            <li><a href="borrow-student.php">Borrow Books</a></li>
            <li><a href="fine-student.php">Fines</a></li>
            </ul> 
            <?php } ?>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php"> <i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
            </ul>
        </div>
    </div>
</nav>