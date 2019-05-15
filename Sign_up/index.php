<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="abb.png">
	<title> Sign up </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="responsive.css">
</head>
<body>

<div class="container">
	
<!-- Nav Bar -->

<nav>
	
<h2> V-Play </h2>

<button class="option" id="btn"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" class="svg-inline--fa fa-bars fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></svg></button>

<ul id="u">
	
<li><a href="#"> Home </a></li>

<li><a href="#"> Sign in </a></li>

<li><a href="#"> Sign up </a></li>

<li><a href="#"> V-Play ? <span>&#10095;</span></a>

<ul>
	
<li style="margin-top: -20px"><a href="#">V-Play ? </a></li>
<li><a href="#"> &copy; Copy </a></li>
<li><a href="#"> About us </a></li>

</ul>

</li>

<li><a href="#"> More <span style="transform: rotate(90deg);">&#10095;</span></a>

<ul>
	
<li style="margin-top: -20px"><a href="#"> Contact </a></li>
<li><a href="#"> Alert </a></li>
<li><a href="#"> Privacy </a></li>

</ul>

</li>

</ul>

</nav>

<!-- -->

<!-- Sign up Box -->

<section id="s">
	
<div class="logo"><img src="l.png"></div>

<form>
	
<p> UserName </p>
<input type="text" name="name" placeholder="UserName">

<p> E-mail </p>
<input type="email" name="email" placeholder="E-mail">

<p> Password </p>
<input type="password" name="password" placeholder="Password">

<p> Confirm Password </p>
<input type="password" name="cpassword" placeholder="Confirm Password">

<input type="submit" name="submit" value="Sign up">

</form>

</section>

<!-- -->

</div>

<script src="jquery.js"></script>
<script>

var i=0;	

$("#btn").click(function(){

i++;

if (i % 2 == 1) {

$("#s").css("display","none");
$("#u").css("display","block");

}
else if (i % 2 == 0) {

$("#s").css("display","block");
$("#u").css("display","none");

}

console.log(i);

});

</script>

</body>
</html>