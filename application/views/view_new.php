<!DOCTYPE html>
<html>
<head>
	<title>Mencoba Hal Baru</title>
	  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style type="text/css">
	h1{
		color: white;
		font-style: Calibri;
		background-color: blue;
		margin-bottom: 0;
	}
	marquee{
		background-color: yellow; 
	}
	#card {
        background: #fbfbfb;
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        height: 410px;
        margin: 6rem auto 8.1rem auto;
        width: 329px;
		}	
	#card-content {
      padding: 12px 44px;
		}
		#card-title {
      font-family: "Raleway Thin", sans-serif;
      letter-spacing: 4px;
      padding-bottom: 23px;
      padding-top: 13px;
      text-align: center;
	}
.underline-title {
      background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
      height: 2px;
      margin: -1.1rem auto 0 auto;
      width: 89px;
}
				a {
    text-decoration: none;
}
label {
    font-family: "Raleway", sans-serif;
    font-size: 11pt;
}
#forgot-pass {
    color: #2dbd6e;
    font-family: "Raleway", sans-serif;
    font-size: 10pt;
    margin-top: 3px;
    text-align: right;
}
.form {
    align-items: left;
    display: flex;
    flex-direction: column;
}
.form-border {
    background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
    height: 1px;
    width: 100%;
}
.form-content {
    background: #fbfbfb;
    border: none;
    outline: none;
    padding-top: 14px;
}

</style>
</head>
<body>
	<center><h1>Sistem Informasi Keuangan</h1></center>
	<marquee>Silahkan login menggunakan username dan password yang sudah diperoleh!</marquee>
	<div id="card">
		<div id="card-content">
			<div id="card-title">
   				<h2>LOGIN</h2>
   		 			<form method="post" class="form" action="<?php echo base_url('index.php/login/auth'); ?>" method="post">
   		 			<label for="user-email" style="padding-top:13px">&nbsp;Email</label>
  						<input
					   id="user-email"
					   class="form-content"
					   type="text"
					   name="name"
					   required />
					  <div class="form-border"></div>
					<label for="user-password" style="padding-top:22px">&nbsp;Password</label>
					  <input
					   id="user-password"
					   class="form-content"
					   type="password"
					   name="password"
					   required />
					  <div class="form-border"></div>
					  <input style="margin-top: 15px;" id="submit-btn" type="submit" name="submit" value="login" /></form>
  			</div>
		</div>
	</div>
</body>
</html>