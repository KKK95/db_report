<?php

	header("Content-Type: text/html; charset=UTF-8");
	
	require_once ('connMysql.php');			//引用connMysql.php 來連接資料庫
	
	if ($_POST["class"]=="")
		$_POST["class"] = NULL;
	if ($_POST["user_id"]=="")
		$_POST["user_id"] = NULL;
	if ($_POST["user_name"]=="")
		$_POST["user_name"] = NULL;
	if ($_POST["telephone"]=="")
		$_POST["telephone"] = NULL;
	if ($_POST["address"]=="")
		$_POST["address"] = NULL;
	
	if ($_POST["parent_name"]=="")
		$_POST["parent_name"] = NULL;
	if ($_POST["home_phone"]=="")
		$_POST["home_phone"] = NULL;
	if ($_POST["parent_telephone"]=="")
		$_POST["parent_telephone"] = NULL;
		
	if ($_POST["roommate"]=="")
		$_POST["roommate"] = NULL;
	
	if ($_POST["homeowner_name"]=="")
		$_POST["homeowner_name"] = NULL;
	if ($_POST["homeowner_phone"]=="")
		$_POST["homeowner_phone"] = NULL;
	if ($_POST["homeowner_address"]=="")
		$_POST["homeowner_address"] = NULL;
		
	if ($_POST["floor_number"]== "")
		$_POST["floor_number"] = NULL;
	if ($_POST["floors"]== "")
		$_POST["floors"] = NULL;
	if ($_POST["rent"]=="")
		$_POST["rent"] = NULL;
	if ($_POST["deposit"]=="")
		$_POST["deposit"] = NULL;
	if ($_POST["age"]=="")
		$_POST["age"] = NULL;
	if ($_POST["type"]=="")
		$_POST["type"] = NULL;
		
	if ($_POST["contract"]=="")
		$_POST["contract"] = NULL;
	if ($_POST["illegal_building"]=="")
		$_POST["illegal_building"] = NULL;
	if ($_POST["right"]=="")
		$_POST["right"] = NULL;
	if ($_POST["right_info"]=="")
		$_POST["right_info"] = NULL;
	if ($_POST["fire_control"]=="")
		$_POST["fire_control"] = NULL;
	if ($_POST["fire_alarm"]=="")
		$_POST["fire_alarm"] = NULL;
	if ($_POST["water_heater"]=="")
		$_POST["water_heater"] = NULL;
	if ($_POST["lighting"]=="")
		$_POST["lighting"] = NULL;
	if ($_POST["environment"]=="")
		$_POST["environment"] = NULL;
	if ($_POST["device"]=="")
		$_POST["device"] = NULL;
	if ($_POST["distance"]=="")
		$_POST["distance"] = NULL;
	if ($_POST["personality"]=="")
		$_POST["personality"] = NULL;
	if ($_POST["security"]=="")
		$_POST["security"] = NULL;
		
	if ($_POST["visitor"]=="")
		$_POST["visitor"] = NULL;
	
	$sql = "SELECT g.talkdate, g.user_id 
			FROM general as g 
			where g.talkdate = '".$_POST["year"]."-".$_POST["month"]."-".$_POST["day"].
			"' and g.user_id = '".$_POST["user_id"]."'";
	
	$result=$conn->query($sql);
	
	$num_rows = $result->num_rows;	
	
	if ($num_rows != 0)
		echo "新增資料表與過往資料表有衡突, 請檢查資料表內容是否正常";
	else
	{
		$date = $_POST["year"] . "-" . $_POST["month"] . "-" . $_POST["day"];
		
		$sql = "INSERT INTO address	(date,class,user_id,user_name,telephone,address,parent_name,home_phone,parent_telephone,roommate,homeowner_name,
				homeowner_phone,homeowner_address,floor_number,floors,rent,deposit,age,type,contract,illegal_building,right,right_info,fire_control,
				fire_alarm,water_heater,lighting,environment,device,distance,personality,security,visitor) VALUES('"
				 . $date . "'," . $_POST["class"] . ",'" . $_POST["user_id"] . "','" . $_POST["user_name"] . "','" . $_POST["telephone"] . "','"
				 . $_POST["address"] . "','" . $_POST["parent_name"] . "','" . $_POST["home_phone"] . "','" . $_POST["parent_telephone"] . "','"
				 . $_POST["roommate"] . "','" . $_POST["homeowner_name"] . "','" . $_POST["homeowner_phone"] . "','" . $_POST["homeowner_address"] . "','"
				 . $_POST["floor_number"] . "','" . $_POST["floors"] . "','" . $_POST["rent"] . "','" . $_POST["deposit"] . "','" . $_POST["age"] . "','"
				 . $_POST["type"] . "','" . $_POST["contract"] . "','" . $_POST["illegal_building"] . "','" . $_POST["right"] . "','"
				 . $_POST["right_info"] . "','" . $_POST["fire_control"] . "','" . $_POST["fire_alarm"] . "','" . $_POST["water_heater"] . "','"
				 . $_POST["lighting"] . "','" . $_POST["environment"] . "','" . $_POST["device"] . "','" . $_POST["distance"] . "','"
				 . $_POST["personality"] . "','" . $_POST["security"] . "','" . $_POST["visitor"]
				 . "')";
		
		$result=$conn->query($sql);
		
		$sql = "SELECT talk_id
				FROM address
				WHERE user_id = '" . $_POST['user_id'] . "' AND date = '" . $date . "'";

		$result=$conn->query($sql);
		$row=$result->fetch_array();
		
		$sql = "INSERT INTO talking_record (class_year, this_year, semester, teacher_ac, student_ac, type, talk_id) VALUES('"
				 . $_POST["class_year"] . "','" . $_POST["year"] . "','";
		if($_POST["month"] >= 2 && $_POST["month"] <= 7)
			$sql .= 2;
		else
			$sql .= 1;
		$sql .= "','" . $_POST["teacher_ac"] . "','" . $_POST["user_id"] . "','" . $_POST["type"] . "','" . $row["talk_id"] . "')";
					
		$result=$conn->query($sql);
	}
?>
