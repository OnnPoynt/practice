<?php
include('connection.php');
if (isset($_POST['submit'])) {
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $sql = "SELECT * FROM credentials WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $detailsSql = "SELECT * FROM details WHERE email = '$username'";
        $detailsResult = mysqli_query($conn, $detailsSql);
        $userDetails = mysqli_fetch_assoc($detailsResult);
        header("Location: welcome.php?name={$userDetails['name']}&email={$userDetails['email']}&phone_number={$userDetails['phone_number']}&company={$userDetails['company']}");
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