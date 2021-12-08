<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>InstaApp</title>
	<link rel="icon" href="/images/Instify_logo.png">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300&display=swap" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="https://kit.fontawesome.com/22d9638678.js" crossorigin="anonymous"></script>
</head>
	<style>
	.fa-check-circle{
		color:green;
	}
	.fa-times-circle{
		color:red;
	}
	.titilium{
		font-family: 'Titillium Web', sans-serif;
	}
	.font-logo{
		font-family: 'Dancing Script', cursive;
		font-size:4vw;
	}
	.footer-text{
		margin:0!important;
	}
	#cover{
		width:100%;
		height:100%;
	}
	.rounded-4{
			border-radius:2rem!important;
		}
	@media screen and (max-width:950px) {
		.non-mobile{
			display:none!important;
		}
		.max{
			width:80%!important;
			margin: auto;
		}
		.top-40{
			padding-top:40%!important;
		}
		.p-1m{
			padding:1rem!important;
		}
		.footer-text{
			position:absolute;
			bottom:10px;
			left: 30px;
			right:30px;
		}
	}
</style>

<?= $this->renderSection('content');?>

	<footer class="text-center titilium d-flex justify-content-center">
		<p class="footer-text">made with love by Achmad Romadoni &copy; 2021</p>
	</footer>

</body>
</html>