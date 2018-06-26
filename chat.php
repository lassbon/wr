<!DOCTYPE html>
<html lang="en">

<head>
<title>WhodoyouwanttoFind</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
    crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,500,700,800" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>	
  
  
   <!-- Google Fonts -->
  <script src="assets/webfont.js"></script>
  <link rel="stylesheet" href="assets/app.css" media="all">
  <script>
    WebFont.load({
      google: {
        "families": ["Montserrat:400,500,600,700", "Noto+Sans:400,700"]
      },
      active: function () {
        sessionStorage.fonts = true;
      }
    });
  </script>
  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="#">
  <link rel="icon" type="image/png" sizes="32x32" href="#">
  <link rel="icon" type="image/png" sizes="16x16" href="#">
  <!-- Stylesheet -->
  <link rel="stylesheet" href="assets/bootstrap.min.css">
  <link rel="stylesheet" href="assets/elisyam-1.1.min.css">
  <!-- Splash Screen -->
  <style type="text/css">
    .fixed-btn {
      background: #e23f83;
      background: linear-gradient(to right, #e23f83 0%, #ea5844 100%);
      position: fixed;
      top: 30%;
      right: 0;
      padding: 0.7rem 1.07rem;
      text-align: center;
      border-radius: 6px 0 0 6px;
      cursor: pointer;
      z-index: 9999;
      transition: all 0.4s ease;
      transform: translateX(145px);
    }

    .fixed-btn:hover {
      background-position: right center;
      transform: translateX(0px);
    }

    .fixed-btn i {
      font-size: 2rem;
      color: #fff;
      vertical-align: middle;
    }

    .fixed-btn p {
      color: #fff;
      font-weight: 500;
      margin: 0;
    }
  </style>
  <style>
  .time{
	 display: flex;
    flex-direction: row;
    margin-left: 26px;
    color: #d6d2d2;
    font-weight: 300;
    font-family: open sans-serif
  }
  .time_bird{
	 display: flex;
    flex-direction: row-reverse;
    color: #d6d2d2;
    font-weight: 300;
    font-family: open sans-serif
  }
  
  
  </style>


</head>

<body>
  <div class="wrapper">
    <div class="chat-logo">
      <img class="resize logo-small" src="assets/wr-logo.png">
	  
      <div class="social-icons" >
	  <!-- Edited syuffs here -->
		<link>
			<img onclick="location.href='mailto:?subject=WHO DO YOU WANT TO FIND &amp;body=Check out this, share and win a bird Drone...  http://www.whodoyouwanttofind.com/'" id ="emailLnk" src="./assets/email1.png" alt="email"> 
		</link>
		
	<!--
		<link>
			<img onclick="location.href='whatsapp://send?text= Check out this, share and win a bird Drone...  http://www.whodoyouwanttofind.com/'" id ="emailLnk" src="assets/whatsapp_logo.png" alt="wha"> 
		</link>
		-->
		
        <link><img onclick="displaySweetAlert(this.id)" id ="twitterBTN" src="./assets/twitter_logo.png" alt="twitter_logo"></link>
        <link><img src="./assets/instagram_logo.png" id ="instagramBTN" alt="instagram_logo"></link>
       <img data-toggle="modal" data-target="#myModal_2" id ="facebookBTN" src="./assets/facebook_logo.png" alt="facebook_logo" />
      </div>
	  
	<!--  
	<div class="social-icons">
        <link><img onclick="displaySweetAlert()"src="./assets/twitter_logo.png" alt="twitter_logo"></link>
        <link><img onclick="displaySweetAlert()"src="./assets/instagram_logo.png" alt="instagram_logo"></link>
        <link><img onclick="displaySweetAlert()" src="./assets/facebook_logo.png" alt="facebook_logo"></link>
      </div>
	  -->
	  
	  
    </div>
	
	<!-- Modal for link Pop]up -->

  
	
	<!--- ends modal pop -->

	<!-- Modal -->
	
  
	 <div id="myModal" class="modal fade modal-popup" > 
	
       <!--
	   <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header fix-modal-header">
                    <button type="button" id="close" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Nyra wants to know you</h4>
                </div>
               
				 <div class="modal-body">
					<div class="row">
						<div class="form-group col-md-2" id="new_userbtndiv"> <button type="button" id="new_user" class="btn btn-info btn-sm" >  New User</button></div>
                        <div class="form-group col-md-4" id="returning_user"> <button type="button" id="returning_user" class="btn btn-info btn-sm" >  Returning User</button>  </div>			
					</div>
                </div>
				 <div class="modal-body" id="new_userdiv">
				                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name" id="username" value="">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email Address" id="email" value="" required>
                        </div>
                        <div class="form-group">
                            <input type="numeric" class="form-control" placeholder="Phone Number(optional)" id="phone" value="">
                        </div>
                        <button type="submit"  class="btn purple" id="send-1">Send</button>		

                </div>
				 <div class="modal-body" id="returning_userdiv">
				        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email Address" id="email_2" name="email_2" value="" required>
                        </div>
                        
                        <button type="submit"  class="btn purple" id="send-2">Send</button>		

                </div>
				
				
            </div>
        </div>
		
		
		 <!--<div id="welcomeModal" class="modal fade modal-popup" aria-hidden="true"> -->
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
              <img src="assets/nyra-1.png" style="width: 8%; height: auto; margin-right:15px;" class="avatar-bubble rounded-circle" alt="...">
            <h4 class="modal-title" style="line-height: 2">Nyra would like to get to know you!</h4>
            <button type="button" class="close" data-dismiss="modal">
              <span aria-hidden="true" id="close">×</span>
              <span class="sr-only">close</span>
            </button>
          </div>
          <div class="modal-body" >
            <ul class="nav nav-tabs nav-fill" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="just-tab-1" data-toggle="tab" href="#j-tab-1" role="tab" aria-controls="j-tab-1" aria-selected="true">New User</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="just-tab-2" data-toggle="tab" href="#j-tab-2" role="tab" aria-controls="j-tab-2" aria-selected="false">Returning User</a>
              </li>
            </ul>
            <div class="tab-content pt-3" >
              <div class="tab-pane fade show active" id="j-tab-1" role="tabpanel" aria-labelledby="just-tab-1">
                <!--<form class="needs-validation" novalidate=""> -->
                  <div class="form-group row d-flex align-items-center mb-5">
                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Name</label>
                    <div class="col-lg-7" >
                      <input type="text" class="form-control" name="username" id="username" placeholder="Tell me your name" >
                    </div>
                  </div>
                  <div class="form-group row d-flex align-items-center mb-5">
                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Email Address *</label>
                    <div class="col-lg-7">
                      <div class="input-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Tell me your email" required="">
                        <span class="input-group-addon addon-primary">
                          <i class="la la-phone"></i>
                        </span>
                        <div class="invalid-feedback">
                          Please enter a real email
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row d-flex align-items-center mb-5">
                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Phone Number</label>
                    <div class="col-lg-7">
                      <div class="input-group">
                        <span class="input-group-addon addon-primary">
                          <i class="la la-phone"></i>
                        </span>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder=" phone number (Optional)">
                      </div>
                    </div>
                  </div>
				  <div class="form-group row d-flex align-items-center mb-5">
                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"></label>
                    <div class="col-lg-7">
                      <div class="input-group" >                       
                       <button type="submit" name="send-1" id="send-1" class="btn btn-primary" style="float:right">Send</button>
                      </div>
                    </div>
                  </div>
				   
               <!-- </form> -->
              </div>
              <div class="tab-pane fade" id="j-tab-2" role="tabpanel" aria-labelledby="just-tab-2">
               <!-- <form class="needs-validation" novalidate=""> -->
                  <div class="form-group row d-flex align-items-center mb-5">
                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Email Address *</label>
                    <div class="col-lg-7">
                      <div class="input-group">
                        <input type="email" name="email_2" id="email_2" class="form-control" placeholder="Tell me your email" required="">
                        <!--<span class="input-group-addon addon-orange">.com</span> -->
                        <div class="invalid-feedback">
                          Please enter a real email
                        </div>
                      </div>
                    </div>
                  </div>
				  <div class="form-group row d-flex align-items-center mb-5">
                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"></label>
                    <div class="col-lg-7">
                      <div class="input-group" >                       
                       <button type="submit" name="send-1" id="send-2" class="btn btn-primary"  style="float:right">Send</button>
                      </div>
                    </div>
               <!-- </form> -->
              </div>
            </div>
          </div>
          <div class="modal-footer">
           <!-- <button type="button" class="btn btn-shadow" data-dismiss="modal">Close</button> -->
          <!--  <button type="button" class="btn btn-primary" data-dismiss="modal" >Send</button> -->
          </div>
        </div>
     <!-- </div> -->
    </div>
	
	
		
		
		
		
		
		
		
		
    </div>
	

	</div>
	
	
	
	
    <div class="container main-wrapper" id="chat_t" style="color:black;">
      <div class="chat-area-wrapper chat-form" id="chat-area-wrapper">
        <div class="chat-area" style="" >
          <div class="message-container" style="display:none">
                <img class="bot" src="assets/IconBirdy.png">
            <div class="message message-left" id="message-left">
              <span>
               
                </span>
            </div>
          </div>
         <div class="message-container msg-right" style="display:none" id="u_msg">
            <div class="message message-right" id="message-right">
              <span>
                  
              </span>
            </div>
            <div class="identification person"></div>
         </div>
        </div>
     
      </div>
    </div>
	
    <div class="chat-form container">
        <div class="chat-input-wrapper">
          <form>
            <div class="input-group">
              <input type="text" id="text_a" style="border:3px solid #efefef" class="form-control textArea" value="">
            </div>
          </form>
        </div>
        <div class="chat-button-wrapper">
          <button id="send" class="btn send"  style="background:#5d5386" type="submit">send</button>
        </div>
      </div>
  </div>
  
  
	 <!-- Modal -->
  <div class="modal fade" id="myModal_2"  role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <!--
		  <button type="button" class="close" data-dismiss="modal">&times;</button>
         -->
		 <i > referral link. copy, paste, share and Invite on your facebook profile to win a bird drone <br />
         </i> 
		
        </div>
        <div class="modal-body" style="word-wrap: break-word;">
		 <p id="referal_id" style="color:red" class=""></p>
		 
        </div>
        <div class="modal-footer">
          <button type="button" onclick="copyLink()" class="btn btn-default" id="copyBtn">Copy link</button>
        </div>
      </div>
      
    </div>
  </div>
  
<style>

	/* The Modal (background) */
	.myModal_prediction {
		display: none; /* Hidden by default */
		position: fixed; /* Stay in place */
		z-index: 1; /* Sit on top */
		padding-top: 100px; /* Location of the box */
		left: 0;
		top: 0;
		width: 100%; /* Full width */
		height: 100%; /* Full height */
		overflow: auto; /* Enable scroll if needed */
		background-color: rgb(0,0,0); /* Fallback color */
		background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
		background:url('assets/fifa.jpg') center no-repeat;
		background-size: cover;
	
	}

	/* Modal Content */
	.modal-content_prediction {
		background-color: #fefefe;
		margin: auto;
		padding: 20px;
		border: 1px solid #888;
		width: 70%;
		color:#000;

	
	}

	/* The Close Button */
	.close_prediction {
		color: #aaaaaa;
		float: right;
		font-size: 28px;
		font-weight: bold;
	}

	.close_prediction:hover,
	.close_prediction:focus {
		color: #000;
		text-decoration: none;
		cursor: pointer;
	}
	.center {
    display: block;
    margin-left: auto;
    margin-right: auto;
}
</style>
   
  <!-- Prediction Modal-->
  <!-- Trigger/Open The Modal -->
  
	<button id="myBtn">Open Modal</button>
	<!-- The Modal -->
	<div id="myModal_prediction" class="myModal_prediction">

	  <!-- Modal content -->
	  <div class="modal-content_prediction">
		<span class="close_prediction">&times;</span>
		<h2 style="behavior:scroll">Predict with Nyra and Win Awesome Prizes..</h2><hr />
		
		 <div class="row">
			<div class="col-md-6">
			
				<div class="row" style="">
				
					<img src="assets/IconBird3.png" style="" class="center" />
					
				</div><br />
			
			
				<div class="row" style="" class="center"> 
				
					<div class="col-md-5" style=""> Nigeria &nbsp;&nbsp;&nbsp;  <input type="text" class="form-control" style="width:50%;border:1px solid red" /> </div>
					<div class="col-md-2" style="font-weight:600;font-size:x-large;margin-left:-74px;"> VS </div>
					<div class="col-md-5" style=""> Tunisia &nbsp;&nbsp;&nbsp;  <input type="text" class="form-control" style="width:50%;border:1px solid red" /> </div>
				</div><br />
				<div class="row" style="">
				
					<div class="col-md-5" style=""> Nigeria &nbsp;&nbsp;&nbsp;  <input type="text" class="form-control" style="width:50%;border:1px solid red" /> </div>
					<div class="col-md-2" style="font-weight:600;font-size:x-large;margin-left:-74px;"> VS </div>
					<div class="col-md-5" style=""> Tunisia &nbsp;&nbsp;&nbsp;  <input type="text" class="form-control" style="width:50%;border:1px solid red" /> </div>
				</div><br />
				<div class="row" style="">
				
					<div class="col-md-5" style=""> Nigeria &nbsp;&nbsp;&nbsp;  <input type="text" class="form-control" style="width:50%;border:1px solid red" /> </div>
					<div class="col-md-2" style="font-weight:600;font-size:x-large;margin-left:-74px;"> VS </div>
					<div class="col-md-5" style=""> Tunisia &nbsp;&nbsp;&nbsp;  <input type="text" class="form-control" style="width:50%;border:1px solid red" /> </div>
				</div><br />
				
			</div>
			<div class="col-md-1" style=""></div>
			<div class="col-md-4" style="">

			
			<div id="demo" class="carousel slide" data-ride="carousel">
			  <ul class="carousel-indicators">
				<li data-target="#demo" data-slide-to="0" class="active"></li>
				<li data-target="#demo" data-slide-to="1"></li>
				<li data-target="#demo" data-slide-to="2"></li>
			  </ul>
			  <div class="carousel-inner">
				<div class="carousel-item active">
				  <img src="assets/jesery1_2.jpg" alt="Los Angeles" style="width:100%">
				  <div class="carousel-caption">
					<p>Nyra Awesome prizes</p>
				  </div>   
				</div>
				<div class="carousel-item">
				  <img src="assets/jesery1_1.jpg" alt="Los Angeles" style="width:100%">
				  <div class="carousel-caption">
					<p>Nyra Awesome prizes</p>
				  </div>   
				</div>
				<div class="carousel-item">
				  <img src="assets/DELUXE-BIONIC-BIRD-04.jpg" alt="Los Angeles" style="width:100%">
				  <div class="carousel-caption">
					<p>Nyra Awesome prizes</p>
				  </div>   
				</div>
			  
			  </div>
			  <a class="carousel-control-prev" href="#demo" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			  </a>
			  <a class="carousel-control-next" href="#demo" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			  </a>
			</div>
			
			
			
			
			</div>
				
			
		 
		 </div>
	  </div>
	
	  

	</div>
  
  <script>
	// Get the modal
	var modal = document.getElementById('myModal_prediction');
	// Get the button that opens the modal
	var btn = document.getElementById("myBtn");

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close_prediction")[0];

	// When the user clicks the button, open the modal 
	btn.onclick = function() {
		modal.style.display = "block";
	}

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
		modal.style.display = "none";
	}

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}
</script>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
</body>
<script type="text/javascript" src="assets/html2canvas.js"></script>

<!-- edited here  -->
<script>


    function take_screenshot(buttonClickedid, inviteBtn)
    {
	
     html2canvas(document.querySelector("#chat_t")).then(canvas=> {
        document.body.appendChild(canvas);
        var img = canvas.toDataURL();
    
        //alert(img);
            $.post("screenshots.php", {data: img}, function (file){
			//alert(file);
                window.location.href =  "screenshots.php?file="+ file
                var facebookShare = document.querySelector('[data-js="facebook-share"]');
				
				var filename = file;
				var buttonClickedid_ = buttonClickedid;
				if(buttonClickedid_ =="facebookBTN"){
					window.location.href =  "fb_share/index.php";
				
				}
				else if(buttonClickedid_ =="twitterBTN")
				{	
					if(inviteBtn == "Invite"){
						//invite friends
					}
					else{
					window.location.href =  "tw_share/index.php?redirect=true&image="+filename;
					}
					
				}
				else if(buttonClickedid_ =="instagramBTN"){
					//download chat image to share o instagram with the hashtag #whodoyouwanttofind
					//so raven pick it up
				
				}
				else{
				
				}
			
			});
		});
		
	//displaySweetAlert();
	

	
	function displaySweetAlert(buttonClickedid){
		
	
	swal("Would you like to share or invite friends!",  {
	  buttons: {
		Share: "Share",
		Invite: "Invite Friends"
	  },
	}).then((value) => {
  switch (value) {
 
    case "Share":
      swal({
			  title: "Nyra",
			  text: "Nyra is sharing this on your Account!",
			  icon: "success"
			});
			//take screenshot and go ahead to post
			  take_screenshot(buttonClickedid);
      break;
 
    case "Invite":
      swal({
			  title: "Nyra",
			  text: "Nyra is Inviting your friends.!",
			  icon: "success"
			});
			//invite Friends here
				//alert(value);
      break;
 
    default:
     
  }
});

}
</script>
<script>

</script>
<script>
$(document).ready(function() 
{
	
	$('#returning_userdiv').hide();
	$('#new_userdiv').hide();
	
	$('#new_user').click(function() {
		
		$('#returning_userdiv').hide();		
		$('#new_userdiv').toggle().show();
				
		//$('#new_user').hide();
		//$('#returning_user').show();
		
	});
	
	$('#returning_user').click(function() {
		
		$('#new_userdiv').hide();		
		$('#returning_userdiv').toggle().show();
		//alert("cool");
	});
	
	
  var username;
  var email;
  var get_users_first_letter_in_name ;
  
//display modal popup
	//$("#myModal").modal('show');	
	$('#myModal').modal({

    backdrop: 'static',
    keyboard: false,
	show: true	
});
	
	//collect modal paramteres
		$('#send-1').click(function() {
		 username = $("#username").val();
		 email = $("#email").val();
		 phone = $("#phone").val();
		////console.log(username);
		setUserToGuest(username); //set user to guest
			
	
		
		//get the email and send to the page back to be used inside the referal modal pop up		
		$.ajax({
               type: "POST",
               url: "ecrypt_email_ajax.php",
               data: {email:email},
               success: function(data){
				////console.log(email);
				//alert(data);
				$('#referal_id').text('www.whodoyouwanttofind.com/?ref=' + data);
				
               },
                error: function (xhr, desc, err)
                {
                    //console.log("error");

                }
			});
			
			//save detaisl for users
			$.ajax({
               type: "POST",
               url: "chat_details.php",
               data: {email:email,username:username,phone:phone},
               success: function(data){
				////console.log(email);
				//alert(data);
				if(data == "error"){
					//email already exists.pic
						swal({
						  title: "Error!",
						  text: "email already exist...",
						  timer: 2000,
						});
						/** setTimeout(function () {
						   location.reload();
						}, 2000);
						**/
				}else if(data == "err"){
					swal({
						  title: "Error!",
						  text: "Email is required",
						  timer: 2000,
						});
				}else{
					swal({
						  title: "Success!",
						  text: data,
						  timer: 2000,
						});
						
							//sending the parameters to ajax call 
						
						$('#myModal').modal('hide');
						botWelcomeMessage(username);
				}
				
				
               },
                error: function (xhr, desc, err)
                {
                    //console.log("error");

                }
    });
	
			
	
});	
	//collect modal paramteres for the returning users
		$('#send-2').click(function() 
		{
		 email = $("#email_2").val();
		var username;
		//alert(email);		 
					
		//sending the parameters to ajax call 
			
		//get the email and send to the page back to be used inside the referal modal pop up		
		$.ajax({
               type: "POST",
               url: "get_users_returning_details_ajax.php",
               data: {email:email},
               success: function(data){
				//console.log(data);
				var dataArr = data.split("/");
				username = dataArr[0];
				//alert(username);
				if(username == "error"){//means emails does not exist
				//$('#myModal').modal('show');
					swal({
						  title: "Error!",
						  text: "email does not exist as registered User...",
						  timer: 2000,
						});
					
				}
				else if(data == "err"){
					//$('#myModal').modal('show');
					swal({
						  title: "Error!",
						  text: "Nyra want to know your email...",
						  timer: 2000,
						});
						
				}
				else{
					$('#myModal').modal('hide');
				$('#referal_id').text('www.whodoyouwanttofind.com/?ref=' + dataArr[1]);				
				setUserToGuest(username); //set user to guest if no username
				botWelcomeMessage(username);
						
					
				}
			
               },
                error: function (xhr, desc, err)
                {
                    //console.log("error");

                }
					
			});
			
			
			
		

			
			
	
});
		
	function getUserEmail(){
		alert ($("#username").val());
		
	}
	
		function getTime()
	{		
		var time = new Date();
		return (
		  time.toLocaleString('en-US', { hour: 'numeric', minute: 'numeric', hour12: true })
		);
	}
	
    $('#send').click(function() {
        var msg = $("#text_a").val();
    if ($('#text_a').val() === "") {
                // alert('Please enter Username and Password.');
                return false;
            }
        //alert(msg);
            AddText(msg);
            sendChat(msg);
  $('.main-wrapper').scrollTop($('.main-wrapper')[0].scrollHeight)
    });
    
    //mointor if the enter button is clicked
    
    $('#text_a').keypress(function (e) {                                       
       if (e.which == 13) {
            e.preventDefault();
            //do something   
            if ($('#text_a').val() === "") {
                // alert('Please enter Username and Password.');
                return false;
            }
            var msg = $("#text_a").val();
            AddText(msg);
            sendChat(msg);
			 $('.main-wrapper').scrollTop($('.main-wrapper')[0].scrollHeight)
            $('#text_a').val('');
    }
    });
	

	
  function clearInput() {
  $("#text_a").each(function() {
    $(this).val(''); //hide form values
  });
}
	$('#close').click(function() {
	username = "Guest";
	email = "guest@workraven.com";
	
	botWelcomeMessage(username);
	});
	
	function botWelcomeMessage(username){
		if(username == "Guest"){
			var getMessage = (function(username) {
            var textArray = [
            'Hi '+username+', I am Nyra' 
                ]
          return textArray[0];
        });
			
		}
		else{
			var getMessage = (function(username) {
            var textArray = [
            'How do you do today  '+username + '?',
            'Hi '+username+', Lovely weather it is today',
             username + ' how do you do?',
            'Whatsup '+username+'?',
            'Bright day today '+username,
            'Hello '+username+', hope you are having a great day?',
            'Hola '+username+'!'
        ]
          return textArray[Math.floor(Math.random()*textArray.length)];
        });
			
		}

		
        var username = setUserToGuest(username);
        $('<div class="message-container"><img class="bot" src="./assets/IconBirdy.png"><div class="message message-left" id="message-left"><span>' + getMessage(username) + '</span></div></div><div class="time_bird">'+getTime()+'</div>').appendTo('.chat-area');
	
	
	}
	
	/**
	function botWelcomeMessage(username){
	var username = setUserToGuest(username);
	$('<div class="message-container"><img class="bot" src="./assets/IconBirdy.png"><div class="message message-left" id="message-left"><span>Hello '+ username + ' my name is IDA</span></div></div>').appendTo('.chat-area');
	
	}
	**/
	
	
	function setUserToGuest(username)
	{
	
		if(!username || username===' '){
			username = "Guest";
		return username;
		}
		else{
		return username;
		}
	}

	
		/**function appends the user chats to the users first letter in its name
			input: takes the users raw message: msg
			outputs: returns the the users mesages and the first Lettername		
		**/		
    function AddText(msg) {
            // NOW ADD THE VALUE TO THE DIV ELEMENT.
			//console.log('i ama here', $("#username").val());
			var getUserName =  $("#username").val();
			var getEmail =  $("#email").val();
			
			getUserName = setUserToGuest(getUserName); //set user to guest and email to guest@workraven.com if user does not enetr any details
			
			 get_users_first_letter_in_name = getUserName.substring(0,1);
			 
			//console.log(get_users_first_letter_in_name);
			
			////console.log(get_users_first_letter_in_name);
            $('<div class="message-container" id="u_msg"><div class="message message-right" id="message-right"><span>'+ msg +'</span></div><div class="identification person">'+get_users_first_letter_in_name.toUpperCase()+'</div></div><div class="time">'+getTime()+'</div>').appendTo('.chat-area');
			
			 $('.main-wrapper').scrollTop($('.main-wrapper')[0].scrollHeight);
			//write users cchat to text file (user_chat_bot.txt)
			//WriteFile(getUserName, msg);
			
	
		}
	
		
		/**
		Bot Resposes
		The function sents the users message to the bot api for response
		input: gets users message:
		ouput: send bots responses 
		
		**/
	function sendChat(msg){       
				//updateChat();

				 $.ajax({
					   type: "POST",
					   url: "bot_api_connection.php",
					   data: {message: msg},
					   success: function(data){
						   //alert(data);
						   //alert("*----Received Data----*nnResponse : " + response+"nnStatus : " + status);
						   $('<div class="message-container"><img class="bot" src="./assets/IconBirdy.png"><div class="message message-left" id="message-left"><span>'+ data + '</span></div></div><div class="time_bird">'+getTime()+'</div>').appendTo('.chat-area');
						    $('.main-wrapper').scrollTop($('.main-wrapper')[0].scrollHeight);
					   },
						error: function (xhr, desc, err)
						{
							//console.log("error");

						}
					});
			}
			
			
			
	
var copyBtn = document.getElementById('copyBtn');
copyBtn.onclick = function(){
    var userRefferalCodeLink =  $('#referal_id').text();			
   // alert("Copied the text: " + userRefferalCodeLink);
	
    var fullLink = document.createElement('input');
    document.body.appendChild(fullLink);
    fullLink.value = userRefferalCodeLink;
    fullLink.select();
    document.execCommand("copy", false);
    fullLink.remove();
   // alert("Copied the text: " + userRefferalCodeLink);
	swal({
	  title: "Copied!",
	  text: "redirecting...",
	  timer: 3000,
	});
	 setTimeout(function () {
       window.location.href = "https://www.facebook.com/WRNyra-585929458458177/";
    }, 3000);
	
}

	
	 });
	 
	 

</script>

	


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
  crossorigin="anonymous"></script>

</html>