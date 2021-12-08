<?= $this->extend('layout\template_login') ?>

<?= $this->section('content') ?>
<body>
	<main id="cover" class="container-fluid">
		<article class="d-flex justify-content-center">
			<div class="w-50 pt-2 top-40 max m-auto">
				<div class="card w-50 border-dark p-1m p-5 text-center max rounded-4 m-auto">
					<img class="responsive-image w-25 align-self-center" src="<?=base_url('images/Instify_logo.png')?>" alt="logo">
					<h1 class="font-logo m-3 mb-3 fw-bolder">InstaApp</h1>
                    <label style="font-size:13px" class="text-center mb-4 form-label titilium">already have an account? <a href="/" class="text-decoration-none">Log In</a></label>	
					<form action="#" class="form mb-1">
                        <div class="container-fluid d-flex">
                            <input id="email" class="mb-3 form-control" type="email" placeholder="Email">
                            <span class="mb-3 ms-2 align-self-center"><i id="email_cek" class="far fa-check-circle d-none"></i></span>
                        </div>
                        <div class="container-fluid d-flex">
                            <input id="name" class="mb-3 form-control" type="text" placeholder="Full Name">
                            <span class="mb-3 ms-2 align-self-center"><i id="name_cek" class="far fa-check-circle d-none"></i></span>
                        </div>
                        <div class="container-fluid d-flex">
                            <input id="user" class="mb-3 form-control" type="text" placeholder="Username">
                            <span class="mb-3 ms-2 align-self-center"><i id="user_cek" class="far fa-check-circle d-none"></i></span>
                        </div>
                        <div class="container-fluid d-flex">
                            <input id="password" class=" form-control" type="password" placeholder="Password">
                            <span class=" ms-2 align-self-center"><i id="password_cek" class="far fa-check-circle d-none"></i></span>
                        </div>
                            <label style="font-size:13px" class="form-label mb-3 titilium">min. 8 character</label>
						<button id="register" type="submit" class="btn btn-primary form-control disabled">Sign Up</button>
                        <label style="font-size:13px;color:grey" class="text-center fw-bold form-label titilium">By signing up, you agree to our Terms , Data Policy and Cookies Policy .</label>	
										
					</form>
				</div>
			</div>
		</article>
	</main>
    <script>
			var cek_user = false;
			var cek_pass = false;
            var cek_email = false;
			var cek_name = false;
		$("#password").on('input',function(){
			if($(this).val().length >= 8){
				cek_pass = true;
                if($("#password_cek").hasClass("d-none")){$("#password_cek").removeClass("d-none");}
                if($("#password_cek").is(".fa-times-circle")){
                    $("#password_cek").removeClass("fa-times-circle");
                    $("#password_cek").addClass("fa-check-circle");
                }
			}else{
				cek_pass = false;
                if($("#password_cek").is(".fa-check-circle")){
                    $("#password_cek").removeClass("fa-check-circle");
                    $("#password_cek").addClass("fa-times-circle");
                }
			}
			cek(cek_user,cek_pass,cek_email,cek_name);
		});
		
		$("#user").on("input",function(){
					if($(this).val().length > 0){
						cek_user = true;
                        if($("#user_cek").hasClass("d-none")){$("#user_cek").removeClass("d-none");}
                if($("#user_cek").is(".fa-times-circle")){
                    $("#user_cek").removeClass("fa-times-circle");
                    $("#user_cek").addClass("fa-check-circle");
                } 
					}else{
						cek_user = false;
                        if($("#user_cek").is(".fa-check-circle")){
                    $("#user_cek").removeClass("fa-check-circle");
                    $("#user_cek").addClass("fa-times-circle");
                }
					}
					cek(cek_user,cek_pass,cek_email,cek_name);
				});
        $("#name").on("input",function(){
					if($(this).val().length > 0){
						cek_name = true;
                        if($("#name_cek").hasClass("d-none")){$("#name_cek").removeClass("d-none");}
                if($("#name_cek").is(".fa-times-circle")){
                    $("#name_cek").removeClass("fa-times-circle");
                    $("#name_cek").addClass("fa-check-circle");
                }
					}else{
						cek_name = false;
                        if($("#name_cek").is(".fa-check-circle")){
                    $("#name_cek").removeClass("fa-check-circle");
                    $("#name_cek").addClass("fa-times-circle");
                }
					}
					cek(cek_user,cek_pass,cek_email,cek_name);
				});
        $("#email").on("input",function(){
					if($(this).val().indexOf('@') > 0 && $(this).val().indexOf('.') > 1 ){
						cek_email = true;
                        if($("#email_cek").hasClass("d-none")){$("#email_cek").removeClass("d-none");}
                if($("#email_cek").is(".fa-times-circle")){
                    $("#email_cek").removeClass("fa-times-circle");
                    $("#email_cek").addClass("fa-check-circle");
                }
					}else{
						cek_email = false;
                        if($("#email_cek").is(".fa-check-circle")){
                    $("#email_cek").removeClass("fa-check-circle");
                    $("#email_cek").addClass("fa-times-circle");
                }
					}
					cek(cek_user,cek_pass,cek_email,cek_name);
				});
		function cek(a,b,c,d){
			if(a&&b&&c&&d){
				$("#register").removeClass("disabled");
			}else{
				$("#register").addClass("disabled");
			}
		}
	</script>
<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.0/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.6.0/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyBZFApKsJiGP0ARtje_5ttNIYJy-N5rfgI",
    authDomain: "instaapp-ca0df.firebaseapp.com",
    projectId: "instaapp-ca0df",
    storageBucket: "instaapp-ca0df.appspot.com",
    messagingSenderId: "1073472273798",
    appId: "1:1073472273798:web:f986018e2dfdd2a8e28007",
    measurementId: "G-3WX0XCSPXL"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
	var registRef = app.database.ref('user');
    
	$('#register').submit(function(e) {
    e.preventDefault();
        var newRegist = registRef.push();
        newRegist.set({
            name: $('#name').val(),
            email: $('#email').val(),
            username: $('#user').val(),
            password: $('#password').val()
        });
    });
</script>

<?= $this->endSection()?>