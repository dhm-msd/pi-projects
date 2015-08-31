<?php
require('login.php');
?>
<html class="no-js">
	<head>
		<title>Command + Control</title>
		<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
		<script src="modernizr.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div id="top-bar">
			<div id="buttons">
				<button onclick="stop_all()">Stop All actions</button>
				<button onclick="goUp()">Go Up</button>
				<button onclick="goDown()">Go Down</button>
				<button onclick="getAllStatus()">Get Status for all</button>
			</div>
			<div id="gpioStatus"></div>
			<div id ="action_result"></div>
		</div>
		<div id="Board">
			<div id="board-buttons-left">
					<div class="spacer"></div>
					<button class="board_buttons" id="b2" onclick="trigger(2)">Switch 2</button>
					<button class="board_buttons" id="b3" onclick="trigger(3)">Switch 3</button>
					<button class="board_buttons" id="b4" onclick="trigger(4)">Switch 4</button>
					<div class="spacer"></div>
					<button class="board_buttons" id="b17" onclick="goDown(17)">Switch 17[DOWN]</button>
					<button class="board_buttons" id="b27" onclick="goUp()">Switch 27[UP]</button>
					<button class="board_buttons" id="b22" onclick="trigger(22)">Switch 22</button>
					<div class="spacer"></div>
					<button class="board_buttons" id="b10" onclick="trigger(10)">Switch 10</button>
					<button class="board_buttons" id="b9" onclick="trigger(9)">Switch 9</button>
					<button class="board_buttons" id="b11" onclick="trigger(11)">Switch 11</button>
					<div class="spacer"></div>
					<div class="spacer"></div>
					<button class="board_buttons" id="b5" onclick="trigger(5)">Switch 5</button>
					<button class="board_buttons" id="b6" onclick="trigger(6)">Switch 6</button>
					<button class="board_buttons" id="b13" onclick="trigger(13)">Switch 13</button>
					<button class="board_buttons" id="b19" onclick="trigger(19)">Switch 19</button>
					<button class="board_buttons" id="b26" onclick="trigger(26)">Switch 26</button>
					<div class="spacer"></div>
			</div>
			<img src="image/piGpio.png" height="500px" class="board_gpio">
			<div id ="board-buttons-right">
					<div class="spacer"></div>	
					<div class="spacer"></div>	
					<div class="spacer"></div>
					<button class="board_buttons" id="b14" onclick="trigger(14)">Switch 14</button>
					<button class="board_buttons" id="b15" onclick="trigger(15)">Switch 15</button>
					<button class="board_buttons" id="b18" onclick="trigger(18)">Switch 18</button>
					<div class="spacer"></div>
					<button class="board_buttons" id="b23" onclick="trigger(23)">Switch 23</button>
					<button class="board_buttons" id="b24" onclick="trigger(24)">Switch 24</button>
					<div class="spacer"></div>
					<button class="board_buttons" id="b25" onclick="trigger(25)">Switch 25</button>
					<button class="board_buttons" id="b8" onclick="trigger(8)">Switch 8</button>
					<button class="board_buttons" id="b7" onclick="trigger(7)">Switch 7</button>
					<div class="spacer"></div>
					<div class="spacer"></div>
					<button class="board_buttons" id="b12" onclick="trigger(12)">Switch 12</button>
					<div class="spacer"></div>
					<button class="board_buttons" id="b16" onclick="trigger(16)">Switch 16</button>
					<button class="board_buttons" id="b20" onclick="trigger(20)">Switch 20</button>
					<button class="board_buttons" id="b21" onclick="trigger(21)">Switch 21</button>
			</div>
		</div>
		<div id="console">Console:<br></div>
		<?
		$useragent=$_SERVER['HTTP_USER_AGENT'];
		if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
			//echo "<script>$('html, body').css('zoom', '1.1');</script>";
		}
		?>
		<script>
		function getStatus(){
				$.ajax({
				  type: 'POST',
				  url: 'status.php',
				  data: { command : "panel" } ,
				  success: function(data){
					$('#gpioStatus').html(data);
					//window.location.href = "success";
				  },
				  error: function(data){
							alert(data);
							//window.location.href = "fail";
				  },
				  dataType: "html"
				});
			}
			function getAllStatus(){
				$.ajax({
				  type: 'POST',
				  url: 'status.php',
				  data: { command : "get_all" } ,
				  success: function(data){
					var splited_data = data.split(" ");
					splited_data.forEach(function(gpio_Data) {
						var gpio_Data = gpio_Data.split(":");
						if(gpio_Data[1] == "1"){
							$('#b'+gpio_Data[0]).html("OFF");
						} else if(gpio_Data[1] == "0"){
							$('#b'+gpio_Data[0]).html("ON");
						}
					});
					//window.location.href = "success";
				  },
				  error: function(data){
							alert(data);
							//window.location.href = "fail";
				  },
				  dataType: "html"
				});
			}
		function trigger(pinNum){
			$.ajax({
				  type: 'POST',
				  url: 'trigger.php',
				  data: { 'pinNum' : pinNum } ,
				  success: function(data){
					$('#console').append('Triggerd pin '+pinNum+'<br>');
					$('#action_result').html(data);
					getStatus();
					getAllStatus();
					//window.location.href = "success";
				  },
				  error: function(data){
							alert(data);
							//window.location.href = "fail";
				  },
				  dataType: "html"
				});
		}
		function goUp(){
				$.ajax({
				  type: 'POST',
				  url: 'up.php',
				  data: { man : 'database_streams' } ,
				   beforeSend: getStatus() ,
				  success: function(data){
					$('#action_result').html(data);
					getStatus();
					//window.location.href = "success";
				  },
				  error: function(data){
							alert(data);
							//window.location.href = "fail";
				  },
				  dataType: "html"
				});
			}
		function goDown(){
				$.ajax({
				  type: 'POST',
				  url: 'down.php',
				  beforeSend: getStatus() ,
				  data: { man : 'database_streams' } ,
				  success: function(data){
					$('#action_result').html(data);
					getStatus();
				  },
				  error: function(data){
							alert(data);
							//window.location.href = "fail";
				  },
				  dataType: "html"
				});
		}
		function stop_all(){
				$.ajax({
				  type: 'POST',
				  url: 'stop_all.php',
				  data: { man : 'database_streams' } ,
				  success: function(data){
					$('#action_result').html(data);
					getStatus();
				  },
				  error: function(data){
							alert(data);
							//window.location.href = "fail";
				  },
				  dataType: "html"
				});
		}
		</script>
		<script>getStatus()</script>
		<script>getAllStatus()</script>
	</body>
</html>