<!doctype html>
<html lang="ko">
	<head>
		<meta charset="utf-8">
		<title>logout</title>
	</head>
	<body>
		<?php
		session_start();
		$id = $_SESSION['user_id'];
		if(!isset($id)) {
			echo '<script>alert("로그인 되어 있지 않습니다."); history.go(-1)</script>';
		}
		else{
			
			session_destroy();
			echo '<script>alert("로그아웃 되었습니다."); location.href="../home.html"</script>';
		}
		?>
	</body>
</html>