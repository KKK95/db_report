<?php

	$years = date("Y");

	$months = date("m");

	$month = (int)$months;

	session_start();							//用來暫存用戶的資料

	require_once ('connMysql.php');

	require_once("login_check.php");			//login_check.php 是用來檢查用戶是否登錄了

	if (isset($_GET['query']) && $_SESSION['ac'] == "rootroot")		//如果查詢人是管理員 且 $_POST['query']不為空
	{
		$ac = $_GET['query'];
	}
	else
	{	$ac=$_SESSION['ac'];	}
	
    $sql = "SELECT ac,name,in_school FROM member 
			where state < 2 and access = \"student\" 
			group by in_school 
			ORDER BY in_school DESC";
	
	$result=$conn->query($sql);

?>

<html>
	<head>
	<link href="style_test.css" rel="stylesheet">
	</head>
<body>
	<table width="800" border="0" align="center" cellpadding="4" cellspacing="0">
		  <td>
			<table>
				<?php
					$num_rows = $result->num_rows;	
					
					for ($j = 1911; $j<=1916; $j++)
					{
						$row=$result->fetch_array();				//rs 在這裏, fetch_assoc 的 index 只能用字串, 而 fetch_array 能用數字和字串作 index
						$y = explode("-" ,$row['in_school']);
						$year = $y[0] - 1911;
						$now = (int)$years - $j;
						for($i=0 ;$i<4; $i++)
						{
							$class_year = $now - $i;
				?>
					  <tr>
						<th>
							<?php 
								echo "{$now} 年度   ";
								echo $now-$i;
							?>
							級導生名單
							<?php
								if ($months>6||$months<2)
								{	echo " (上學期)";
									$semester = 1;
								}
								else
								{
									echo " (下學期)";
									$semester = 2;
								}
							?>
						</th>
						
						<th>
							<p>------------------------------------------------</p>
						</th>
						<th>
						<?php
							if ($j == 1911)
							{
								$make_clase_list_link = 
								"<a href=\"make_class_list_form.php?id=".$class_year."&now=".$now."&semester=".$semester."\">編輯列表</a>";
								echo $make_clase_list_link;
							}

						?>
			
						<!-- <a href="del_class_member_form.php?id=<?php //echo $class_year; ?>&now=<?php //echo $now; ?>"></a>		-->
						<a href="get_class_member_list.php?id=<?php echo $class_year; ?>&now=<?php echo $now; ?>&semester="<?php echo $semester; ?>">查看列表</a>
						</th>
					  </tr>
				<?php
						}
					}
				?>
			</table>
		  </td>
	</table>
</body>


</html>