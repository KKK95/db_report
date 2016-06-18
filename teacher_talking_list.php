<?php

	session_start();							//用來暫存用戶的資料

	$year = date("Y");

	$month = date("m");
	
	require_once ('connMysql.php');

	require_once("login_check.php");			//login_check.php 是用來檢查用戶是否登錄了

	$ac=$_SESSION['ac'];	
	
    $sql = "SELECT tl.type, tl.talk_id, m.name, tl.this_year, cl.w_r
			FROM talking_record as tl, member as m, general as g, class_list as cl
			where tl.talk_id = g.talk_id 
				and m.ac = cl.student_ac 
				and cl.this_year = tl.this_year 
				and cl.class_year = tl.class_year
				and	cl.teacher_ac = '".$ac
			."' and tl.class_year = '".$_GET['id']
			."' and tl.this_year = '".$_GET['now']
			."' ORDER BY cl.student_ac DESC";
	
	$result=$conn->query($sql);

	$sql2 = "select cl.w_r
			from class_list as cl
			where cl.teacher_ac = '".$ac
			."' and cl.class_year = '".$_GET['id']
			."' and cl.this_year = '".$_GET['now']
			."' group by cl.this_year, cl.class_year";
	
	
	$result2 = $conn->query($sql2);
	$w_r = $result2->fetch_array();
	$link_to_form;
	
?>

<!DOCTYPE html>

<table width="600" border="0" align="center" cellpadding="4" cellspacing="0">
    <tr>
      <td>
        <table>
          <tr>
			<th width="200">紀錄表類型</th>
			<th width="200">學生名字</th>
            <th width="200">編輯</th>
          </tr>
        <?php
            $num_rows = $result->num_rows;	
			if ($num_rows==0)
			{
				echo "<tr><th width=\"200\">目前沒有紀錄</th></tr>";
			}	
            for($i=1;$i<=$num_rows;$i++)
            {
                $row=$result->fetch_array();				//rs 在這裏, fetch_assoc 的 index 只能用字串, 而 fetch_array 能用數字和字串作 index
        ?>
          <tr>
            <th>
				<?php 
					if ($row['type']==1)
					{
						echo "<tr>一般會談紀錄</tr>";
					}
					else if ($row['type']==2)
					{
						echo "<tr>住宿訪視紀錄</tr>";
					}
					else 
					{
						echo "<tr>二一學生輔導紀錄</tr>";
					}
				?>
			</th>
			<th>
				<?php 
					printf ("%s" ,$row['name']); 
				?>
			</th>
			<th>
				<?php 
					if ($row['w_r']!=1)
						echo "<tr>紀錄已歸檔,無法修改</tr>";
					else 
					{
						if ($row['type']==1)
						{
							echo "fuck you";
					//		print ("<tr><a href=\"update_general_talk_form.php?id=%d\">修改紀錄</a></tr>",$row['talk_id']);
						}
					}	
				//	echo "<tr><a href=\"check_general_talk_form.php?id=$row['talk_id']\">查看紀錄</a></tr>";
				?>
			</th>
			
			
		<?php
            }
        ?>
		<?php 
			if (isset($w_r))
			{	if ($w_r[0]==1)
				{
						echo "<tr><th width=\"200\">
						<select onchange=\"location.href=this.options[this.selectedIndex].value\">
						<option value=\"\">新增紀錄</option>
						<option value=\"new_general_talk_form.php\">一般會談紀錄</option>
						<option value=\"一般會談紀錄\">住宿訪視紀錄</option>
						<option value=\"new_one_of_two_talk_form.php\">二一學生輔導紀錄</option>
						</select>";
				//		$link_to_form = $_POST['type'];
				//		echo "<a href=\"".$link_to_form."\">新增紀錄</a></th></tr>";
				
				//		<select onchange="location.href=this.options[this.selectedIndex].value">
				//		 <option value="網址連結">網址文字敘述</option>
				//		 <option value="http://yahoo.com">yahoo網頁</option>
				//		 <option value="http://www.google.com">google網頁</option>
				//		</select>
				}
			}
		?>
        </table>
      </td>
</table>