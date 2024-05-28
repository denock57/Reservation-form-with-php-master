<?php 
    session_start();
    if (!isset($_SESSION['email'])) {
        header('location: demo.php');
        exit();
    }
?>

<h1><?php echo $_SESSION['success'] . "  And You are User  " . $_SESSION['new_id']; ?> <br>
<a href="demo.php?logout=<?php echo $_SESSION['new_id'] ?>">Logout</a>
</h1>

