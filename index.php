<?php 
$time=date('H:i', time()+900);
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Blueprint: Responsive Multi-Column Form</title>
		<meta name="description" content="Blueprint: Blueprint: Responsive Multi-Column Form" />
		<meta name="keywords" content="responsive form, inputs, html5, responsive, multi-column, fluid, media query, template" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
		<script src="//storage.googleapis.com/code.getmdl.io/1.0.1/material.min.js"></script>
		<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		<link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="//storage.googleapis.com/code.getmdl.io/1.0.1/material.teal-red.min.css" />
		<link href="css/jquery-ui.min.css" rel="stylesheet">
		<link href="css/layout-menu.css" rel="stylesheet">
		<script type="text/javascript">
		if(navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(function(position) {
					var latitude = position.coords.latitude;
					var longitude = position.coords.longitude;
					$.ajax({
					  type: 'POST',
					  url: '/address.php?longitude='+longitude+'&latitude='+latitude,
					  success: function(data) {
						$("#first_name").val(data)
					  },
					  error:  function(xhr, str){
					alert('Возникла ошибка: ' + xhr.responseCode);
					  }
					});
    
		});
		 
		} else {
			alert("Geolocation API не поддерживается в вашем браузере");
		}
		</script>
		<script>
			
		  var x=false;
		  function imgchange(obj,imgX,imgY,id) {
		   if  (x){
		   obj.src=imgX;
		   document.getElementById(id).style.color = '#FFFFFF';
		   } else {
		   obj.src=imgY
		   document.getElementById(id).style.color = '#00FF21';
		   }
		  x=!x
		 }
		 
		 function zakaz()
			 {
					$.ajax({
					  type: 'POST',
					  url: "zakaz.php",
					  success: function(data) {
						$('#rezult_zakaz').html(data);
					  },
					  error:  function(xhr, str){
					alert('Возникла ошибка: ' + xhr.responseCode);
					  }
					});				 
			 }
		 </script>
		 <script>
	/*$(document).ready(function(){
        //Скрыть PopUp при загрузке страницы    
        PopUpHide();
    });*/
    //Функция отображения PopUp
    function PopUpFadeIn(){
        $("#popup1").fadeIn(500);
    };
    //Функция скрытия PopUp
    function PopUpHide(){
        $("#popup1").hide();
    };
	function PopUpFadeOut(){
		$('#popup1').fadeOut(500);
	}
		 </script>
		<script>
			function passenger(){
				$('#autoChose').val('Легковая');
				PopUpFadeOut();
			}
			function universal(){
				$('#autoChose').val('Универсал');
				PopUpFadeOut();
			}
			function microbus(){
				$('#autoChose').val('Микроавтобус');
				PopUpFadeOut();
			}
			function business(){
				$('#autoChose').val('Бизнес');
				PopUpFadeOut();
			}
		</script>
	</head>
	<body>
		<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header mdl-layout--fixed-tabs">
		<header class="mdl-layout__header">
			  <div class="mdl-layout__header-row">
				<!-- Title -->
				<img class="logo" src="img/logo.jpg">
			  </div>
			  <div class="buttons">
				  <a href="tel:5333"><i class="material-icons">call</i></a>
				  <a href="#"><i class="material-icons">near_me</i></a>
			  </div>
			</header>
			<!--POPUP -->
			<div class="b-popup" id="popup1">
				<div class="b-popup-content">
					<p class="chose-auto">Выберите Класс Авто</p>
					<i class="material-icons popup-close-icon" onclick="PopUpFadeOut()">clear</i>
					<div class="auto-block">
					<a href="#" class="auto auto-1" onclick="passenger()">Легковая</a>
					<a href="#" class="auto auto-2" onclick="universal()">Универсал</a>
					<a href="#" class="auto auto-3" onclick="microbus()">Микроавтобус</a>
					<a href="#" class="auto auto-4" onclick="business()">Бизнес</a>
					</div>
					<div class="auto-class auto-class-1"></div>
				</div>
			</div>
			<!--END POPUP -->
			<div class="mdl-layout__drawer">
			  <div class="layout-menu first-elem"><span class="mdl-layout-title"><i class="material-icons">location_on</i><a href="#">О нас</a></span></div>
			  <div class="layout-menu second-elem"><span class="mdl-layout-title"><i class="material-icons">phone</i><a href="contacts.php">Контакты</a></span></div>
			  <div class="layout-menu third-elem"><span class="mdl-layout-title"><i class="material-icons">list</i><a href="uslugi.php">Услуги</a></span></div>
			  <div class="layout-menu fifth-elem"><span class="mdl-layout-title"><i class="material-icons">attach_money</i><a href="#">Тарифы</a></span></div>
			</div>
			<div id="rezult_zakaz">
			<div class="container">
				<div class="main">
					<form class="cbp-mc-form">
						<div class="cbp-mc-column">
							<div class="input_with_icon"><i class="material-icons">phone_iphone</i><input type="number" id="first_name" name="first_name" placeholder="Ваш телефон" ></div>
							<div class="input_with_icon"><i class="material-icons">person_pin_circle</i><input type="text" id="last_name" name="last_name" placeholder="Откуда" ></div>
							<div class="input_with_icon"><i class="material-icons">place</i></i><input type="text" id="adress" name="adress" placeholder="Куда"></div>
							<div class="input_with_icon"><i class="material-icons">access_time</i><input type="time" name="usr_time" value="<?php echo $time;?>"></div>
							<div class="input_with_icon"><i class="material-icons">local_taxi</i><input type="text" id="autoChose" name="auto" placeholder="Выберите класс авто" onclick="PopUpFadeIn()" readonly></div>
							<div class="input_with_icon input-for-padding" style="border:none;"><i class="material-icons">comment</i><textarea id="comment" name="comment" placeholder="Комментарий" rows="2"></textarea></div>
			                     <a class="zakaz" onclick="zakaz()">
									<div class="cbp-mc-submit-wrap"><i class="fa fa-hand-pointer-o" aria-hidden="true"></i> Заказать Такси</div>
								</a>
								
						</div>
					</form>
				</div>
			</div>
			</div>	
		</div>
<script src="js/jquery.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/autocomplete.js"></script>
	</body>
</html>
