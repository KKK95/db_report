<?php
	session_start();							//用來暫存用戶的資料

	require_once ('connMysql.php');

	require_once("login_check.php");			//login_check.php 是用來檢查用戶是否登錄了

	$ac=$_SESSION['ac'];	
	
    $sql = "SELECT * FROM general as g
			where g.talk_id = '".$_GET['id']."'";

	$result=$conn->query($sql);

	$row=$result->fetch_array();

?>

<!doctype html>

<html>

	<head>

		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
		<link href="style_test.css" rel="stylesheet">
		<title>導生一般會談記錄表</title>

	</head>

	<body>
		<table width="800" align="center" cellspacing="2" cellpadding = "5" bgcolor="#DDDDDD">
			<tr>
				<th bgcolor="#F2F2F2" align="left" ><label for="grade" colspan="1">學生系級 : </label>
				<?php echo $row['grade']; ?>
				</th>
				<th bgcolor="#F2F2F2" align="center" ><label for="user_id" colspan="1">學號 : </label>
					<?php echo $row['user_id']; ?>
				</th>
				<th bgcolor="#F2F2F2" align="center" ><label for="user_name" colspan="1">姓名 : </label>
					<?php echo $row['user_name']; ?>
				</th>
			</tr>
			<tr>
				<th width="20%" bgcolor="#F9F9F9" align="left" colspan="1"> <label for="telephone">聯絡電話 : </label>
				<?php echo $row['telephone']; ?>
				</th>
				<th width="20%" bgcolor="#F9F9F9" align="left" colspan="2"> <label for="addr">住址 : </label>
				<?php echo $row['addr']; ?>
				</th>
				
			</tr>
			<tr>
				<th bgcolor="#F9F9F9" align="left" colspan="3" > 談話日期 : 
				<?php echo $row['talkdate']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<label for="talk_times">第&nbsp;</label> 
					<?php echo $row['talk_times']; ?>
				<label for="talk_times">&nbsp;次 </label>
				</th>
			</tr>
			<tr>
				<th bgcolor="#F9F9F9" align="left" colspan="3"> 一. 學生一般狀況 :
			</tr>
			<tr>
				<th bgcolor="#F9F9F9" align="center" rowspan="2"> 1. 學業 :</th>
				<th bgcolor="#F9F9F9" align="center" colspan="2"> 
					評價：
					<?php 
						if ( $row['level'] == 1)
							echo "很好"; 
						else if ( $row['level'] == 2)
							echo "好"; 
						else if ( $row['level'] == 3)
							echo "普通"; 
						else if ( $row['level'] == 4)
							echo "再加努力"; 
					?>
				</th>
			</tr>
			<tr>
				<th bgcolor="#F9F9F9" align="left" colspan="2">
				<label for="comment">補 充 :</br></label>
				<?php 
					if ( isset($row['comment2']) )
						echo $row['comment2']; 
					else
						echo "\n無補充"; 
				?>
			</tr>
			
			
			<tr>
				<th bgcolor="#F9F9F9" align="center" rowspan="2"> 2. 生活作息 :</th>
				<th bgcolor="#F9F9F9" align="center" colspan="2"> 
					評價：
					<?php 
						if ( $row['life_schedule'] == 1)
							echo "很好"; 
						else if ( $row['life_schedule'] == 2)
							echo "好"; 
						else if ( $row['life_schedule'] == 3)
							echo "普通"; 
						else if ( $row['life_schedule'] == 4)
							echo "再調整"; 
					?>
				</th>
			</tr>
			<tr>
				<th bgcolor="#F9F9F9" align="left" colspan="2">
				<label for="comment2">補 充 :</br></label>
				<?php 
					if ( isset($row['comment2']) )
						echo $row['comment2']; 
					else
						echo "\n無補充"; 
				?>
			</tr>
			
			
			<tr>
				<th bgcolor="#F9F9F9" align="center" rowspan="2"> 3. 家庭關系 :</th>
				<th bgcolor="#F9F9F9" align="center" colspan="2"> 
				
					評價：
					<?php 
						if ( $row['family'] == 1)
							echo "很好"; 
						else if ( $row['family'] == 2)
							echo "好"; 
						else if ( $row['family'] == 3)
							echo "普通"; 
						else if ( $row['family'] == 4)
							echo "需改善"; 
					?>
				</th>
			</tr>
			<tr>
				<th bgcolor="#F9F9F9" align="left" colspan="2">
				<label for="comment3">補 充 :</br></label>
				<?php 
					if ( isset($row['comment3']) )
						echo $row['comment3']; 
					else
						echo "\n無補充"; 
				?>
			</tr>
			
			<tr>
				<th bgcolor="#F9F9F9" align="center" rowspan="2"> 4. 人際關系 :</th>
				<th bgcolor="#F9F9F9" align="center" colspan="2"> 
				
					評價：
					<?php 
						if ( $row['social'] == 1)
							echo "很好"; 
						else if ( $row['social'] == 2)
							echo "好"; 
						else if ( $row['social'] == 3)
							echo "普通"; 
						else if ( $row['social'] == 4)
							echo "需調整"; 
					?>
				</th>
			</tr>
			<tr>
				<th bgcolor="#F9F9F9" align="left" colspan="2">
				<label for="comment4">補 充 :</br></label>
				<?php 
					if ( isset($row['comment4']) )
						echo $row['comment4']; 
					else
						echo "\n無補充"; 
				?>
			</tr>
			
			<tr>
				<th bgcolor="#F9F9F9" align="center" colspan="1"> 5. 個人特色 :</th>
				<th bgcolor="#F9F9F9" align="left" colspan="2">
				<?php 
					if ( isset($row['comment5']) )
						echo $row['comment5']; 
					else
						echo "\n無補充"; 
				?>
			</tr>
			
			<!--														第二頁														-->
			
			<tr>
				<th bgcolor="#F9F9F9" align="left" colspan="3" > 一. 學生特殊狀況 :
			</tr>
			<tr>
				<th bgcolor="#F9F9F9" align="left" width="30%">家庭關系 :
					<?php 
						if ( $row['special_family'] == 1)
							echo "無特殊狀況"; 
						else if ( $row['special_family'] == 2)
							echo "與父母溝通不良"; 
						else if ( $row['special_family'] == 3)
							echo "與父母不合"; 
						else if ( $row['special_family'] == 4)
							echo "家庭暴力"; 
						else if ( $row['special_family'] == 5)
							echo "家庭性侵害"; 
						else if ( $row['special_family'] == 6)
							echo "家庭經濟困難"; 
						else if ( $row['special_family'] == 7)
							echo "家庭變固"; 
					?>
					</br></br>
					<label for="another" style="display:block">補充 : </label>
					<?php 
					if ( isset($row['special_family_text']) )
						echo $row['special_family_text']; 
					else
						echo "\n無補充"; 
					?>
				</th>
			
				<th bgcolor="#F9F9F9" align="left" width="30%">課業與學習 :
					<?php 
						if ( $row['study'] == 1)
							echo "無特殊狀況"; 
						else if ( $row['study'] == 2)
							echo "科系志趣不合"; 
						else if ( $row['study'] == 3)
							echo "學習困難"; 
						else if ( $row['study'] == 4)
							echo "課業生活壓力"; 
						else if ( $row['study'] == 5)
							echo "考慮休學/轉學"; 
					?>
					</br></br>
					<label for="another" style="display:block">補充 : </label>
					<?php 
					if ( isset($row['study_text']) )
						echo $row['study_text']; 
					else
						echo "\n無補充"; 
					?>
				</th>
				
				<th bgcolor="#F9F9F9" align="left" width="30%">生活與生涯 :
					<?php 
						if ( $row['life'] == 1)
							echo "無特殊狀況"; 
						else if ( $row['life'] == 2)
							echo "社團娛樂困擾"; 
						else if ( $row['life'] == 3)
							echo "休閒娛樂困擾"; 
						else if ( $row['life'] == 4)
							echo "人生意義疑惑"; 
						else if ( $row['life'] == 5)
							echo "生涯規劃問題"; 
						else if ( $row['life'] == 6)
							echo "生活作息問題"; 
					?>
					</br></br>
					<label for="another" style="display:block">補充 : </label>
					<?php 
					if ( isset($row['life_text']) )
						echo $row['life_text']; 
					else
						echo "\n無補充"; 
					?>
				</th>
			</tr>
			<!--												第二欄											-->
			<tr>
				<th bgcolor="#F9F9F9" align="left" >兩性關系 :
					<?php 
						if ( $row['relation'] == 1)
							echo "無特殊狀況"; 
						else if ( $row['relation'] == 2)
							echo "異性溝通不良"; 
						else if ( $row['relation'] == 3)
							echo "與異性起衝突"; 
						else if ( $row['relation'] == 4)
							echo "感情不順"; 
						else if ( $row['relation'] == 5)
							echo "與異性分手困擾"; 
						else if ( $row['relation'] == 6)
							echo "同性溝通問題"; 
						else if ( $row['relation'] == 7)
							echo "同性戀傾向"; 
					?>
					</br></br>
					<label for="another" style="display:block">補充 : </label>
					<?php 
					if ( isset($row['relationtext']) )
						echo $row['relationtext']; 
					else
						echo "\n無補充"; 
					?>
				</th>
				
				
				<th bgcolor="#F9F9F9" align="left" >兩性關系 :
					<?php 
						if ( $row['life'] == 1)
							echo "無特殊狀況"; 
						else if ( $row['life'] == 2)
							echo "與人疏離"; 
						else if ( $row['life'] == 3)
							echo "與人溝通不良"; 
						else if ( $row['life'] == 4)
							echo "易與人起衡突"; 
						else if ( $row['life'] == 5)
							echo "分離失落感"; 
						else if ( $row['life'] == 6)
							echo "其他"; 
					?>
					</br></br>
					<label for="another" style="display:block">補充 : </label>
					<?php 
					if ( isset($row['relationtext2']) )
						echo $row['relationtext2']; 
					else
						echo "\n無補充"; 
					?>				
				</th>
				
				<th bgcolor="#F9F9F9" align="left" >身心狀況 :
					<?php 
						if ( $row['study2'] == 1)
							echo "無特殊狀況"; 
						else if ( $row['study2'] == 2)
							echo "憂鬱傾向"; 
						else if ( $row['study2'] == 3)
							echo "焦慮傾向"; 
						else if ( $row['study2'] == 4)
							echo "生理問題"; 
					?>
					</br></br>
					<label for="another" style="display:block" >補充 : </label>
					<?php 
					if ( isset($row['studytext2']) )
						echo $row['studytext2']; 
					else
						echo "\n無補充"; 
					?>	
				</th>
			</tr>
			
			<tr>
				<th bgcolor="#F9F9F9" align="left" colspan="1"> 導師補充意見 :</th>
				<th bgcolor="#F9F9F9" align="left" colspan="2">
				<?php 
					if ( isset($row['commont6']) )
						echo $row['commont6']; 
					else
						echo "\n無補充"; 
				?>
			</tr>
			
			<tr>
				<th bgcolor="#F9F9F9" align="left" colspan="3"> 是否需轉介學生輔導相關單位 :
					<?php 
					if ( $row['need_to_transfer'] == 1 )
					{
						echo "需轉介至:";
						if ($row['transfer'] == 1)
							echo "學生咨商中心";
						else if ($row['transfer'] == 2)
							echo "生活輔導組";
						else if ($row['transfer'] == 3)
							echo "僑外組";
						else if ($row['transfer'] == 4)
							echo "課外組";
						else if ($row['transfer'] == 5)
							echo "衛保組";
					}	
					else
						echo "\n無需轉介"; 
					?>
					
				</th>
			</tr>

			<tr>
				<th bgcolor="#F9F9F9" align="left" colspan="3"> 是否需建議學校相關單位於法規措施或設施作調整 :	
					<?php 
					if ( $row['feeback'] == 1 )
					{
						echo "需建議單位:";
						if ($row['transfer2'] == 1)
							echo "教務處";
						else if ($row['transfer2'] == 2)
							echo "總務處";
						else if ($row['transfer2'] == 3)
							echo "學務處";
						else if ($row['transfer2'] == 4)
							echo "圖資管";
						else if ($row['transfer2'] == 5)
							echo "秘書室";
					}	
					else
						echo "\n不需要"; 
					?>
				</th>
			</tr>
		</table>
		<br />

	</body>

</html>