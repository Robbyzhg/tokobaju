<?php  

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>
	#card {
        background: #fbfbfb;
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        height: 410px;
        margin: 6rem auto 8.1rem auto;
        width: 329px;
}
	body {
       background: -webkit-linear-gradient(bottom, white, skyblue);
       background-repeat: no-repeat;
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
#signup {
    color: #2dbd6e;
    font-family: "Raleway", sans-serif;
    font-size: 10pt;
    margin-top: 16px;
    text-align: center;
    margin-left: 95px;
}
#submit-btn {
    background: -webkit-linear-gradient(right, #a6f77b, #2dbd6e);
    border: none;
    border-radius: 21px;
    box-shadow: 0px 1px 8px #24c64f;
    cursor: pointer;
    color: white;
    font-family: "Raleway SemiBold", sans-serif;
    height: 42.3px;
    margin: 0 auto;
    margin-top: 50px;
    transition: 0.25s;
    width: 153px;
    margin-left: 90px;
}
#submit-btn:hover {
    box-shadow: 0px 1px 18px #24c64f;
}
</style>
<body>
<div id="card">
	<div id="card-title">
		<h2>Sign Up</h2>
	</div>
	<form action="<?= base_url("register/aksi_daftar") ?>" method="post">
		<label for="username" style="padding-top:13px"></label>
  <input  
  placeholder="username"
  class="form-content"
  type="text"
  name="username"
  required />
  <div class="form-border"></div>
<label for="password" style="padding-top:22px"></label>
  <input
  placeholder="password"
  class="form-content"
  type="password"
  name="password"
  required />
  <div class="form-border"></div>
<input id="submit-btn" type="submit" name="submit" value="SIGNUP" />
	</form>
</div>
</body>
</html>