<!DOCTYPE html>
<html>
<head>
<script
src="http://maps.googleapis.com/maps/api/js">
</script>

<script>
function initialize()
{
	var mapOpt = {
		center:new google.maps.LatLng(22.7340927,120.2814604),
		zoom:15,
		mapTypeId:google.maps.MapTypeId.ROADMAP
	};
	var map = new google.maps.Map(document.getElementById("googleMap"),mapOpt);
	
	var addr = [];
	<?php
	
	session_start();
	
	require_once ('connMysql.php');

	require_once("login_check.php");			//login_check.php 是用來檢查用戶是否登錄了
	
	if(isset($_GET['year']) && isset($_GET['sem']) && isset($_GET['class'])) {
		$sql = "SELECT member.addr, member.name FROM member, class_list 
				WHERE class_list.teacher_ac='" . $_SESSION["ac"] . "'
				AND class_list.student_ac=member.ac
				AND class_list.this_year=" . $_GET['year'] .
				" AND class_list.semester=" . $_GET['sem'] . 
				" AND class_list.class_year=" . $_GET['class'];
	}
	else {
		$sql = "SELECT member.addr, member.name FROM member, class_list WHERE class_list.teacher_ac='" . $_SESSION["ac"] . "'
				AND class_list.student_ac=member.ac AND class_list.this_year=105";
	}
	
	$result = $conn->query($sql);									// mysql_query 查詢, 取得查詢的結果
	?>

	// get data of each row
    <?php while($row = $result->fetch_assoc()) : ?>
		addr.push([ <?php echo '"' . $row["addr"] . '", "' . $row["name"] . '"' ?> ]);
	<?php endwhile; ?>
	
	addr.sort();
	
	var sort_addr = [], sort_stud = [];
	
	for(var i = 0; i < addr.length; i++) {
		if(i == 0 || addr[i - 1][0] != addr[i][0]) {
			sort_addr.push(addr[i][0]);
			sort_stud.push(addr[i][1]);
		}
		else {
			sort_stud[sort_stud.length - 1] += ", " + addr[i][1];
		}
	}

	var i, marker, infoWindow = new google.maps.InfoWindow(), geocoder = new google.maps.Geocoder();
	
	for(i = 0; i < sort_addr.length; i++) {
		geocoder.geocode({ 'address' : sort_addr[i] }, function(results, status) {
			if(status == google.maps.GeocoderStatus.OK) {
				marker = new google.maps.Marker({
					map : map,
					position : results[0].geometry.location,
				});
				
				// Allow each marker to have an info window
				google.maps.event.addListener(marker, 'click', function(marker, i) {
					return function() {
						infoWindow.setContent(sort_stud[i]);
						infoWindow.open(map, marker);
					}
				} (marker, i));
			}
			else {
				alert('Geocode was not successful for the following reason: ' + status);
			}
		});
	}

}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>

<body>
<div id="" style="width:500px;height:40px;">
	<table>
		<tr>
		<?php
		$sql = "SELECT cl.this_year, cl.class_year, cl.semester FROM class_list as cl, member as m
				where m.ac = cl.student_ac and cl.teacher_ac = '". $_SESSION["ac"] ."'  
				GROUP BY this_year, class_year, semester 
				ORDER BY this_year DESC, semester DESC";
		
		$result=$conn->query($sql);
		
		while($row = $result->fetch_assoc()) {
			$year = $row['this_year'];
			$class = $row ['class_year'];
			$sem = $row['semester'];
			
			echo "<td><a href='student_address.php?year=" . $year . "&sem=" . $sem . "&class=" . $class . "'>";
			echo $year . "年度";
			if($sem == 1) echo "上";
			else echo "下";
			echo $class . "級";
			echo "</a></td>";
		}
		?>
		</tr>
	</table>
</div>
<div id="googleMap" style="width:800px;height:480px;"></div>

</body>
</html>