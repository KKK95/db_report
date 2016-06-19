<!doctype html>

<html>

	<head>

		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
		<link href="style_test.css" rel="stylesheet">
		<title>校外住宿訪視記錄表</title>

	</head>

	<body>
	<form action="new_student_dormitory.php" method="POST" target="_blank" align="center">
		<table width="800" align="center" cellspacing="2" cellpadding = "5" bgcolor="#DDDDDD">
			<tr>
				<th bgcolor="#F2F2F2" align="left" ><label for="class" colspan="1">學生班級 : </label>
				<input type="text" name="grade" id="grade" size="5" value="">
				</th>
				<th bgcolor="#F2F2F2" align="center" ><label for="user_id" colspan="1">學號 : </label>
					<input  type="text" name="user_id" id="user_id" size="10" value="">
				</th>
				<th bgcolor="#F2F2F2" align="center" ><label for="user_name" colspan="1">姓名 : </label>
					<input type="text" name="user_name" id="user_name" size="10" value="">
				</th>
			</tr>
			<tr>
				<th width="20%" bgcolor="#F9F9F9" align="left" colspan="1"> <label for="telephone">聯絡電話 : </label>
				<input type="text" name="telephone" id="telephone" size="10">
				</th>
				<th width="20%" bgcolor="#F9F9F9" align="left" colspan="2"> <label for="address">住址 : </label>
				<input type="text" name="addr" id="addr" size="60"> 
				</th>
				
			</tr>
			<tr>
				<th bgcolor="#F9F9F9" align="left" colspan="3" > 訪問日期 : 
				<input type="text" name="year" id="year" size="4"> <label for="year">年</label>
				<input type="text" name="month" id="month" size="2"> <label for="month">月</label>
				<input type="text" name="day" id="day" size="2"> <label for="day">日</label>
				</th>
			</tr>
			<tr>
				<th bgcolor="#F9F9F9" align="left" colspan="3"> 緊急聯絡資料
			</tr>
			<tr>
				<th bgcolor="#F9F9F9" align="left" rowspan="2"><label for="parent_name"> 家長姓名 :</label>
				<input type="text" name="parent_name" id="parent_name" size="10">
				</th>
				<th bgcolor="#F9F9F9" align="left" rowspan="2"><label for="home_phone"> 家裡電話 :</label>
				<input type="text" name="home_phone" id="home_phone" size="10">
				</th>
			</tr>
			<tr>
				<th bgcolor="#F9F9F9" align="left" rowspan="2"><label for="parent_telephone"> 行動電話 :</label>
				<input type="text" name="parent_telephone" id="parent_telephone" size="10">
				</th>
			</tr>
			<tr>
				<th bgcolor="#F9F9F9" align="left" rowspan="2" width="100%"><label for="parent_name"> 同住同學 :</label>
				<textarea name="roommate" id="roommate" rows="5" cols="60" size="60"></textarea>
				</th>
			</tr>
			<tr>
				<th bgcolor="#F9F9F9" align="left" colspan="3"> 租屋環境品質及生活設施安全訪談調查
			</tr>
			<tr>
				<th bgcolor="#F9F9F9" align="left" colspan="2" width="50%"> 房東資料
				<th bgcolor="#F9F9F9" align="left" colspan="2" width="50%"> 房屋概況
			</tr>
			<tr>
				<th bgcolor="#F9F9F9" align="center" rowspan="2" width="50%"><label for="homeowner_name"> 姓名 :</label>
				<input type="text" name="homeowner_name" id="homeowner_name" size="10">
				</th>
				<th bgcolor="#F9F9F9" align="center" rowspan="2" width="30%"><label for="floor_number"> 坪數 :</label>
				<input type="text" name="floor_number" id="floor_number" size="10">
				</th>
				<th bgcolor="#F9F9F9" align="center" rowspan="2" width="20%"><label for="floors"> 樓層 :</label>
				<input type="text" name="floors" id="floors" size="10">
				</th>
			</tr>
			<tr>
				<th bgcolor="#F9F9F9" align="center" rowspan="2"><label for="homeowner_phone"> 電話 :</label>
				<input type="text" name="homeowner_phone" id="homeowner_phone" size="10">
				</th>
				<th bgcolor="#F9F9F9" align="center" rowspan="2" width="30%"><label for="rent"> 租金 :</label>
				<input type="text" name="rent" id="rent" size="10">
				</th>
				<th bgcolor="#F9F9F9" align="center" rowspan="2" width="20%"><label for="deposit"> 押金 :</label>
				<input type="text" name="deposit" id="deposit" size="10">
				</th>
			</tr>
			<tr>
				<th bgcolor="#F9F9F9" align="center" rowspan="4"><label for="homeowner_address"> 住址 :</label>
				<input type="text" name="homeowner_address" id="homeowner_address" size="60">
				</th>
				<th bgcolor="#F9F9F9" align="center" rowspan="2" width="30%"><label for="type"> 樓別 :</label>
				<input type="text" name="type" id="type" size="10">
				</th>
				<th bgcolor="#F9F9F9" align="center" rowspan="2" width="20%"><label for="age"> 屋齡 :</label>
				<input type="text" name="age" id="age" size="10">
				</th>
			</tr>
			<tr>
				<th bgcolor="#F9F9F9" align="left" colspan="3"> 調查租屋條件分析
			</tr>
			<tr>
				<th bgcolor="#F9F9F9" align="center" rowspan="2"> 有否訂定租賃契約？ </th>
				<th bgcolor="#F9F9F9" align="center" colspan="2"> 
					<input type="radio" name="contract" id="no" value="0">
					<label for="no">沒有 </label>
					<input type="radio" name="contract" id="yes" value="1">
					<label for="yes">有 </label>
				</th>
			</tr>
			<tr>
				<th bgcolor="#F9F9F9" align="center" rowspan="2"> 房屋是否違建有保火險？ </th>
				<th bgcolor="#F9F9F9" align="center" colspan="2"> 
					<input type="radio" name="illegal_building" id="no" value="0">
					<label for="no">沒有 </label>
					<input type="radio" name="illegal_building" id="yes" value="1">
					<label for="yes">有 </label>
				</th>
			</tr>
			<tr>
				<th bgcolor="#F9F9F9" align="center" rowspan="2"> 契約有否損害個人權益？ </th>
				<th bgcolor="#F9F9F9" align="center" colspan="2"> 
					<input type="radio" name="right" id="no" value="0">
					<label for="no">沒有 </label>
					<input type="radio" name="right" id="yes" value="1">
					<label for="yes">有(請說明)：</label>
					<input type="text" name="right_info" id="right_info" size="20">
				</th>
			</tr>
			<tr>
				<th bgcolor="#F9F9F9" align="center" rowspan="2"> 消防安全設施？ </th>
				<th bgcolor="#F9F9F9" align="center" colspan="2"> 
					<input type="radio" name="fire_control" id="0" value="鐵門">
					<label for="0">鐵門 </label>
					<input type="radio" name="fire_control" id="1" value="鐵窗">
					<label for="1">鐵窗 </label>
					<input type="radio" name="fire_control" id="2" value="防火梯">
					<label for="2">防火梯 </label>
					<input type="radio" name="fire_control" id="3" value="滅火器">
					<label for="3">滅火器 </label>
					<input type="radio" name="fire_control" id="4" value="警衛">
					<label for="4">警衛 </label>
					<input type="radio" name="fire_control" id="5" value="緩降機">
					<label for="5">緩降機 </label>
					<input type="radio" name="fire_control" id="6" value="灑水器">
					<label for="6">灑水器 </label>
				</th>
			</tr>
			<tr>
				<th bgcolor="#F9F9F9" align="center" rowspan="2"> 火災警報器？ </th>
				<th bgcolor="#F9F9F9" align="center" colspan="2"> 
					<input type="radio" name="fire_alarm" id="no" value="0">
					<label for="no">沒有 </label>
					<input type="radio" name="fire_alarm" id="yes" value="1">
					<label for="yes">有 </label>
				</th>
			</tr>
			<tr>
				<th bgcolor="#F9F9F9" align="center" rowspan="2"> 熱水器？ </th>
				<th bgcolor="#F9F9F9" align="center" colspan="2"> 
					<input type="radio" name="water_heater" id="0" value="太陽能">
					<label for="0">太陽能 </label>
					<input type="radio" name="water_heater" id="1" value="瓦斯">
					<label for="1">瓦斯 </label>
					<input type="radio" name="water_heater" id="2" value="室內">
					<label for="2">室內 </label>
					<input type="radio" name="water_heater" id="3" value="室外">
					<label for="3">室外 </label>
				</th>
			</tr>
			<tr>
				<th bgcolor="#F9F9F9" align="center" rowspan="2"> 房間採光？ </th>
				<th bgcolor="#F9F9F9" align="center" colspan="2"> 
					<input type="radio" name="lighting" id="0" value="良好">
					<label for="0">良好 </label>
					<input type="radio" name="lighting" id="1" value="尚可">
					<label for="1">尚可 </label>
					<input type="radio" name="lighting" id="2" value="不佳">
					<label for="2">不佳 </label>
				</th>
			</tr>
			<tr>
				<th bgcolor="#F9F9F9" align="center" rowspan="2"> 居所環境？ </th>
				<th bgcolor="#F9F9F9" align="center" colspan="2"> 
					<input type="radio" name="environment" id="0" value="安寧">
					<label for="0">安寧 </label>
					<input type="radio" name="environment" id="1" value="安靜">
					<label for="1">安靜 </label>
					<input type="radio" name="environment" id="2" value="尚可">
					<label for="2">尚可 </label>
					<input type="radio" name="environment" id="3" value="吵雜">
					<label for="3">吵雜 </label>
				</th>
			</tr>
			<tr>
				<th bgcolor="#F9F9F9" align="center" rowspan="2"> 生活公共設施？ </th>
				<th bgcolor="#F9F9F9" align="center" colspan="2"> 
					<input type="checkbox" name="device" id="0" value="書桌">
					<label for="0">書桌 </label>
					<input type="checkbox" name="device" id="1" value="衣櫥">
					<label for="1">衣櫥 </label>
					<input type="checkbox" name="device" id="2" value="檯燈">
					<label for="2">檯燈 </label>
					<input type="checkbox" name="device" id="3" value="電視">
					<label for="3">電視 </label>
					<input type="checkbox" name="device" id="4" value="床">
					<label for="4">床 </label>
					<input type="checkbox" name="device" id="5" value="沙發">
					<label for="5">沙發 </label>
					<input type="checkbox" name="device" id="6" value="廚房">
					<label for="6">廚房 </label>
					<input type="checkbox" name="device" id="7" value="衛浴">
					<label for="7">衛浴 </label>
					<input type="checkbox" name="device" id="8" value="電扇">
					<label for="8">電扇 </label>
					<input type="checkbox" name="device" id="9" value="脫水機">
					<label for="9">脫水機 </label>
					<input type="checkbox" name="device" id="10" value="洗衣機">
					<label for="10">洗衣機 </label>
					<input type="checkbox" name="device" id="11" value="窗簾">
					<label for="11">窗簾 </label>
					<input type="checkbox" name="device" id="12" value="瓦斯">
					<label for="12">瓦斯 </label>
					<input type="checkbox" name="device" id="13" value="冷氣">
					<label for="13">冷氣 </label>
					<input type="checkbox" name="device" id="14" value="乾衣機">
					<label for="14">乾衣機 </label>
					<input type="checkbox" name="device" id="15" value="其他">
					<label for="15">其他 </label>
				</th>
			</tr>
			<tr>
				<th bgcolor="#F9F9F9" align="center" rowspan="2"> 離校距離？ </th>
				<th bgcolor="#F9F9F9" align="center" colspan="2"> 
					<input type="radio" name="distance" id="0" value="五百公尺內">
					<label for="0">五百公尺內 </label>
					<input type="radio" name="distance" id="1" value="五百～一千公尺">
					<label for="1">五百～一千公尺 </label>
					<input type="radio" name="distance" id="2" value="一～二公里">
					<label for="2">一～二公里 </label>
					<input type="radio" name="distance" id="3" value="二～三公里">
					<label for="3">二～三公里 </label>
					<input type="radio" name="distance" id="4" value="三公里以上">
					<label for="4">三公里以上 </label>
				</th>
			</tr>
			<tr>
				<th bgcolor="#F9F9F9" align="center" rowspan="2"> 房東為人？ </th>
				<th bgcolor="#F9F9F9" align="center" colspan="2"> 
					<input type="radio" name="personality" id="0" value="和善">
					<label for="0">和善 </label>
					<input type="radio" name="personality" id="1" value="普通">
					<label for="1">普通 </label>
					<input type="radio" name="personality" id="2" value="苛刻">
					<label for="2">苛刻 </label>
					<input type="radio" name="personality" id="3" value="不瞭解">
					<label for="3">不瞭解 </label>
				</th>
			</tr>
			<tr>
				<th bgcolor="#F9F9F9" align="center" rowspan="2"> 治安情形？ </th>
				<th bgcolor="#F9F9F9" align="center" colspan="2"> 
					<input type="radio" name="security" id="0" value="良好">
					<label for="0">良好 </label>
					<input type="radio" name="security" id="1" value="普通">
					<label for="1">普通 </label>
					<input type="radio" name="security" id="2" value="不好">
					<label for="2">不好 </label>
					<input type="radio" name="security" id="3" value="危險">
					<label for="3">危險 </label>
				</th>
			</tr>
			<tr>
				<th bgcolor="#F9F9F9" align="center" rowspan="2"><label for="visitor"> 訪問人員： </label>
				<input type="text" name="visitor" id="visitor" size="10">
			</tr>
		</table>
		<br />
		<input type="submit" value="新增記錄">
		<input type="reset" value="重新設定">
	</form>
	</body>

</html>