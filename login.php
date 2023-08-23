<?php
include('connection.php');
if (isset($_POST['submit'])) {
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $sql = "SELECT * FROM credentials WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        header("Location: welcome.php");
    } else {
        echo '<script>
            window.location.href = "index.php";
            alert("Login failed. Invalid username or password!!");
        </script>';
    }
}
?>




<!-- Previous code VVV

include('connection.php');
if (isset($_POST['submit'])) {
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $sql = "select * from credentials";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    var_dump($result);

    
    if ($count == 1) {
        header("Location: welcome.php");
    } else {
        echo '<script>
                        window.location.href = "index.php";
                        alert("Login failed. Invalid username or password!!")
                    </script>';
    }
} -->