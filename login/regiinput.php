<?php
    $name = $_POST['name'];
	$id = $_POST['id'];
    $pw = $_POST['pw'];
	$pwc = $_POST['pwc'];
	$authority = 1;
    echo $name;
	if ( !is_null( $name )) {
		$conn = mysqli_connect( 'localhost', 'root', 'cha63788', 'jungtongdb') or die("connect faiiled..");
		/*if(!$conn){
			echo 'db연결 실패';
		}
		else{
			echo 'db연결 성공';
		}*/
		$sql = "SELECT * FROM member WHERE name = '$name';";
		$result = mysqli_query( $conn, $sql );
		
		while ($row = mysqli_fetch_array( $result )) {
			$name_e = $row['name'];
		}
		
		$sql_id = "SELECT * FROM member WHERE id = '$id';";
		$result_id = mysqli_query($conn, $sql_id);
		
		while ($row_id = mysqli_fetch_array($result_id)) {
			$id_e = $row_id['id'];
		}

		if ( $name == $name_e ) {
			echo '<script>alert("사용자 이름이 중복되었습니다."); history.go(-1)</script>';
		} 
		elseif ( $id == $id_e ) {
			echo '<script>alert("사용자 id가 중복되었습니다."); history.go(-1)</script>';
		}
		else {
			if ( $pw != $pwc ) {
			echo '<script>alert("비밀번호가 일치하지 않습니다."); history.go(-1)</script>';
			}
			else{
				$sql_add_user = "INSERT INTO member(name, id, pw, authority) VALUES('$name','$id','$pw', '$authority');";
				$result_add_user = mysqli_query( $conn, $sql_add_user );
				if($result_add_user===false){
					echo '<script>alert("회원가입 실패"); history.go(-1)"</script>';
				}
				else{
					echo '<script>alert("회원가입 성공"); location.href = "../home.html"</script>';
				}
			}
    	}
	}
?>