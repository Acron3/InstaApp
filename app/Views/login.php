<?= $this->extend('layout\template_login') ?>

<?= $this->section('content') ?>
<body>
	<main id="cover" class="container-fluid">
		<article class="d-flex justify-content-center mt-1">
			<div class="w-50 d-flex justify-content-end non-mobile">
				<img class="responsive-image" src="/images/sample-fix.png" alt="">
			</div>
			<div class="w-50 top-40 pt-5 max">
				<div class="card w-50 border-dark p-1m p-5 text-center max rounded-4">
					<img class="responsive-image w-25 align-self-center" src="<?=base_url('images/Instify_logo.png')?>" alt="logo">
					<h1 class="font-logo m-3 mb-5 fw-bolder">InstaApp</h1>
					<form action="#" method="post" class="form mb-1">
						<input id="user" class="mb-3 form-control" type="text" placeholder="username">
						<input id="password" class="mb-3 form-control" type="password" placeholder="password">
						<button id="login" type="submit" class="btn btn-primary form-control disabled">Login</button>
						<label style="font-size:13px" class="text-center register form-label mt-3 titilium">dont have an account? <a href="/register" class="text-decoration-none">Sign Up</a></label>					
					</form>
				</div>
			</div>
		</article>
	</main>
	<script>
		$(document).ready(function(){
			var cek_user = false;
			var cek_pass = false;
		$("#password").on('input',function(){
			if($(this).val().length >= 8){
				cek_pass = true;
			}else{
				cek_pass = false;
			}
			cek(cek_user,cek_pass);
		});
		
		$("#user").on("input",function(){
					if($(this).val().length > 0){
						cek_user = true;
					}else{
						cek_user = false;
					}
					cek(cek_user,cek_pass);
				});

		function cek(a,b){
			if(a&&b){
				$("#login").removeClass("disabled");
			}else{
				$("#login").addClass("disabled");
			}
		}
});
	</script>
<?= $this->endSection() ?>