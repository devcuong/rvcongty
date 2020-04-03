<?php require_once 'mvc/core/Config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Simple Chat UI</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet"
	href="<?php echo $servername ?>/mvc/public/css/styles.css">
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript"
	src="<?php echo $servername ?>/mvc/public/js/config.js"></script>
<script type="text/javascript">
var myVar = setInterval(myTimer, 1000);

function myTimer() {
	var arrUrl = window.document.URL.split("/");
	var idCongTy = arrUrl[arrUrl.length - 1];
	$.ajax({
        type: "POST",
        url: SiteName + "/chat/read-file/",
        data: {"cong-ty":idCongTy},
        success: function(data)
        {
           if(data){
        	   var arrayChat = JSON.parse(data);
	           //alert(arrayChat[0].noidung);
	           for(var i=0; i<arrayChat.length; i++){
	        	   appendMessage(arrayChat[i].chatuser, BOT_IMG, "left", arrayChat[i].noidung);
		       }
           }
        }
      });
}
</script>
</head>
<body>
	<!-- partial:index.partial.html -->
	<section class="msger">
		<header class="msger-header">
			<div class="msger-header-title">
				<i class="fas fa-comment-alt"></i> SimpleChat <?php echo session_id();?>
    </div>
			<div class="msger-header-options">
				<span><i class="fas fa-cog"></i></span>
			</div>
		</header>

		<main class="msger-chat">
		<div class="msg left-msg">
			<div class="msg-img"
				style="background-image: url(https://image.flaticon.com/icons/svg/327/327779.svg)"></div>

			<div class="msg-bubble">
				<div class="msg-info">
					<div class="msg-info-name">BOT</div>
					<div class="msg-info-time">12:45</div>
				</div>

				<div class="msg-text">Hi, welcome to SimpleChat! Go ahead and send
					me a message. 😄</div>
			</div>
		</div>

		<div class="msg right-msg">
			<div class="msg-img"
				style="background-image: url(https://image.flaticon.com/icons/svg/145/145867.svg)"></div>

			<div class="msg-bubble">
				<div class="msg-info">
					<div class="msg-info-name">Sajad</div>
					<div class="msg-info-time">12:46</div>
				</div>

				<div class="msg-text">You can change your name in JS section!</div>
			</div>
		</div>
		</main>

		<form class="msger-inputarea">
			<input type="text" class="msger-input"
				placeholder="Enter your message...">
			<button type="submit" class="msger-send-btn">Send</button>
		</form>
	</section>
	<!-- partial -->
	<script src='https://use.fontawesome.com/releases/v5.0.13/js/all.js'></script>
	<script src="<?php echo $servername ?>/mvc/public/js/script.js"></script>

</body>
</html>
