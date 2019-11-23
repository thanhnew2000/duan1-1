<?php 
$hostname='localhost';
$username='root';
$password='';
$database='duan1';
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");

try
{
  $conn= new PDO("mysql:host=$hostname;dbname=$database",$username,$password,$options);
  $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  $conn2= new PDO("mysql:host=$hostname;dbname=$database",$username,$password,$options);
  $conn2->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


  		$sqltaikhoan="select * from users ";
		$querytaikhoan=$conn->prepare($sqltaikhoan);
		$querytaikhoan->execute();
		$rowtaikhoan= $querytaikhoan->fetchAll(PDO::FETCH_ASSOC);

		$sqlcategory="select * from category ";
		$querycategory=$conn->prepare($sqlcategory);
		$querycategory->execute();
		$rowcategory= $querycategory->fetchAll(PDO::FETCH_ASSOC);


		$sqlsubcategory="select * from subcategory ";
		$querysubcategory=$conn->prepare($sqlsubcategory);
		$querysubcategory->execute();
		$rowsubcategory= $querysubcategory->fetchAll(PDO::FETCH_ASSOC);

		$sqlcourse ="select * from course ";
		$querycourse =$conn->prepare($sqlcourse);
		$querycourse->execute();
		$rowcourse = $querycourse->fetchAll(PDO::FETCH_ASSOC);

		$sqltest  ="select * from test ";
		$querytest  =$conn->prepare($sqltest);
		$querytest->execute();
		$rowtest  = $querytest->fetchAll(PDO::FETCH_ASSOC);

		$sqltopic ="select * from topic ";
		$querytopic =$conn->prepare($sqltopic);
		$querytopic->execute();
		$rowtopic = $querytopic->fetchAll(PDO::FETCH_ASSOC);


		$sqllesson ="select * from lesson ";
		$querylesson =$conn->prepare($sqllesson);
		$querylesson->execute();
		$rowlesson = $querylesson->fetchAll(PDO::FETCH_ASSOC);

		$sqlteacher ="select * from teacher ";
		$queryteacher =$conn->prepare($sqlteacher);
		$queryteacher->execute();
		$rowteacher = $queryteacher->fetchAll(PDO::FETCH_ASSOC);






 function users($id){
	  global $conn;
		
		$sql="select * from users where id_user={$id} ";
		$query=$conn->prepare($sql);
		$query->execute();
		$row= $query->fetch(PDO::FETCH_ASSOC);
		
    return $row;
		}

function test($id){
	  global $conn;
		
		$sql="select * from test where id_test={$id} ";
		$query=$conn->prepare($sql);
		$query->execute();
		$row= $query->fetch(PDO::FETCH_ASSOC);
		
    return $row;
		}

function test_question($idtest){
	  global $conn;
		
		$sql="select * from test_question where id_test={$idtest} ";
		$query=$conn->prepare($sql);
		$query->execute();
		$row= $query->fetch(PDO::FETCH_ASSOC);
		
    return $row;
		}

		
		function test_questionAll($idtest){
	  global $conn;
		
		$sql="select * from test_question where id_test={$idtest} ";
		$query=$conn->prepare($sql);
		$query->execute();
		$row= $query->fetchAll(PDO::FETCH_ASSOC);
		
    return $row;
		}

function question($id){
	  global $conn;
		
		$sql="select * from question where id_question={$id} ";
		$query=$conn->prepare($sql);
		$query->execute();
		$row= $query->fetch(PDO::FETCH_ASSOC);
		
    return $row;
		}

 function category($id){
	  global $conn;
		
		$sql="select * from category where id_category={$id} ";
		$query=$conn->prepare($sql);
		$query->execute();
		$row= $query->fetch(PDO::FETCH_ASSOC);
		
    return $row;
		}


 function subcategory($id){
	  global $conn;
		
		$sql="select * from subcategory where id_subcategory={$id} ";
		$query=$conn->prepare($sql);
		$query->execute();
		$row= $query->fetch(PDO::FETCH_ASSOC);
		
    return $row;
		}



 function subcategory_id($id){
	  global $conn;
		
		$sql="select * from subcategory where id_category={$id} ";
		$query=$conn->prepare($sql);
		$query->execute();
		$row= $query->fetchAll(PDO::FETCH_ASSOC);
		
    return $row;
		}

 function topic($id){
	  global $conn;
		
		$sql="select * from topic where id_topic={$id} ";
		$query=$conn->prepare($sql);
		$query->execute();
		$row= $query->fetch(PDO::FETCH_ASSOC);
		
    return $row;
		}

		 function topic_idcourse($id){
	  global $conn;
		
		$sql="select * from topic where id_course={$id} ";
		$query=$conn->prepare($sql);
		$query->execute();
		$row= $query->fetchAll(PDO::FETCH_ASSOC);
		
    return $row;
		}

	function course($id){
	  global $conn;
		
		$sql="select * from course where id_course={$id} ";
		$query=$conn->prepare($sql);
		$query->execute();
		$row= $query->fetch(PDO::FETCH_ASSOC);
		
    return $row;
}

	function lesson($id){
	  global $conn;
		
		$sql="select * from lesson where id_lesson={$id} ";
		$query=$conn->prepare($sql);
		$query->execute();
		$row= $query->fetch(PDO::FETCH_ASSOC);
		
    return $row;
}
	function teacher($id){
	  global $conn;
		
		$sql="select * from teacher where id_teacher={$id} ";
		$query=$conn->prepare($sql);
		$query->execute();
		$row= $query->fetch(PDO::FETCH_ASSOC);
		
    return $row;
}



function executeQuery($sql, $getAll = true){
	global $conn;

	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$result = $stmt->fetchAll();
	if($getAll == true){
		return $result;
	}

	if($result != null){
		return $result[0];
	}
}





  } catch(Exception $e){
	echo $e.getMessage();

}
 ?>
