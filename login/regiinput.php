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
			echo 'db���� ����';
		}
		else{
			echo 'db���� ����';
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
			echo '<script>alert("����� �̸��� �ߺ��Ǿ����ϴ�."); history.go(-1)</script>';
		} 
		elseif ( $id == $id_e ) {
			echo '<script>alert("����� id�� �ߺ��Ǿ����ϴ�."); history.go(-1)</script>';
		}
		else {
			if ( $pw != $pwc ) {
			echo '<script>alert("��й�ȣ�� ��ġ���� �ʽ��ϴ�."); history.go(-1)</script>';
			}
			else{
				$sql_add_user = "INSERT INTO member(name, id, pw, authority) VALUES('$name','$id','$pw', '$authority');";
				$result_add_user = mysqli_query( $conn, $sql_add_user );
				if($result_add_user===false){
					echo '<script>alert("ȸ������ ����"); history.go(-1)"</script>';
				}
				else{
					echo '<script>alert("ȸ������ ����"); location.href = "../home.html"</script>';
				}
			}
    	}
	}
?>