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
    .navbar{
        border-bottom:1 solid grey;
    }
    .w-65{
        width:55%;
    }
    .ms-6{
        margin-left:5rem!important;
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
<body class="bg-secondary">
    <nav class="navbar px-5 py-0 navbar-expand-lg navbar-light bg-light border border-secondary">
        <div class="container-fluid w-75 mx-auto justify-content-center">
            <a class="navbar-brand text-center fs-2 font-logo" href="/home">InstaApp</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <label for="search" class="form-label m-0 align-self-center"><i style="color:grey" class="fas fa-search"></i></label>
                </form>
                </li>
            </ul>
            
            </div>
        </div>
    </nav>

    <?=$this->renderSection('content')?>

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
</script>
</body>