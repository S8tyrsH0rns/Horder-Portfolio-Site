<!DOCTYPE html>
<html>
<head>
	<title>Contact Me</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="css/styles.css">

</head>

<body>
<div class="navigation-bar">
	<ul>
		<li class="logo">Thomas <br/> Horder</li>
		<li><a href="index.php">[00] Home</a></li>
		<li><a href="about.php">[01] About Me</a></li>
		<li><a href="projects.php">[02] Projects</a></li>
		<li><a href="blog.php">[03] Blog</a></li>
		<li class="selected"><a href="">[04] Contact</a></li>
		<div class="web-ring">
			<a href="https://aberwebr.ing/Horder/left"><- </a>
			<a href="https://aberwebr.ing/">Aber Web-Ring</a>
			<a href="https://aberwebr.ing/Horder/right"> -></a>
		</div>
	</ul>
</div>

<div class="header">
	<h1 class="text-cursor">> Contact Me</h1>
	<h5>Please reach out!</h5>
</div>

<div class="seperator"></div>

<div class="main flex">
	<div class="split left">
		<p>I am always open to employment opportunities and collaborating with any interested developers on projects. If you're interested in working with me, have an idea for a project or just want to get in touch, please feel free to contact me!</p>
	</div>
	
	<div class="split right">
		<p>LinkedIn: <a href="https://www.linkedin.com/in/thomas-horder-31703a416" target="_blank">Thomas Horder</a></p>
		<p>GitHub: <a href="https://github.com/S8tyrsH0rns" target="_blank">Horder</a></p>
	
		<form action="https://formspree.io/f/xljjwvrj" method="POST">
			<label>Email: <input type="email" name="email" required></label>
			<br/>
			<label>Your Message: <textarea name="message" required></textarea></label>
			<button type="submit" style="font-weight: bold;">Send Message</button>
		</form>
	</div>

</div>

</body>