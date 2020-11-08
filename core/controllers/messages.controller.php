<?php  
	//Handles all the messages for the application
		if (isset($_SESSION['msj'])) {
			switch ($_SESSION['msj']) {
				//Default VIEW messages
					//Approved Messages
						case 'success':
							echo 
							"<script>
								swal({
									title: `".$_SESSION['msjTitle']."`,
									text: `".$_SESSION['msjText']."`,
									icon: 'success',
								})
								$('.swal-overlay').css('background-color', 'rgba(0, 255, 0, 0.514)');
							</script>";
						break;
						
					//Approved Messages

					//Denied Messages
						case 'error':
							echo 
							"<script>
								swal({
									title: `".$_SESSION['msjTitle']."`,
									text: `".$_SESSION['msjText']."`,
									icon: 'error',
								})
								$('.swal-overlay').css('background-color', 'rgba(255, 0, 0, 0.514)');
							</script>";
						break;
					//Denied Messages

					//Warning Messages
						case 'warning':
							echo 
							"<script>
								swal({
									title: `".$_SESSION['msjTitle']."`,
									text: `".$_SESSION['msjText']."`,
									icon: 'warning',
								})
								$('.swal-overlay').css('background-color', 'rgba(255, 69, 0, 0.514)');
							</script>";
						break;
					//Warning Messages
				//Default VIEW messages
			}
		}
	//Handles all the messages for the application
?>