<?php
session_start();
include "conn.php";


if (isset($_POST['uname']) && isset($_POST['password'])){

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {
        echo "<script type='text/javascript'>window.top.location='/loginForm.php?error=User Name is requited';</script>"; exit;
        header("Location: loginForm.php?error=User Name is requited");
        exit();
    }else if(empty($pass)){
        echo "<script type='text/javascript'>window.top.location='/loginForm.php?error=Password is requited';</script>"; exit;
        header("Location: loginForm.php?error=Password is requited");
        exit();
    }else{

        $pass = md5($pass);

        $sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass ) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
                $_SESSION['password'] = $row['password'];
                echo "<script type='text/javascript'>window.top.location='/main2.php';</script>"; exit;
            	// header("Location: main2.php");
		        exit();
            }else{
                echo "<script type='text/javascript'>window.top.location='/loginForm.php?error=Incorect User name or password';</script>"; exit;
				// header("Location: loginForm.php?error=Incorect User name or password");
		        exit();
			}
		}else{
            echo "<script type='text/javascript'>window.top.location='/loginForm.php?error=Incorect User name or password';</script>"; exit;
			// header("Location: loginForm.php?error=Incorect User name or password");
	        exit();
		}
    }

}else{
    header("Location: loginForm.php");
    exit();
}

?>