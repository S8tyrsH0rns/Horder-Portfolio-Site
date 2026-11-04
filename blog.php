<!DOCTYPE html>
<html>
<head>
	<title>My Blog</title>
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
		<li class="selected"><a href="">[03] Blog</a></li>
		<li><a href="contact.php">[04] Contact</a></li>
		<div class="web-ring">
			<a href="https://aberwebr.ing/Horder/left"><- </a>
			<a href="https://aberwebr.ing/">Aber Web-Ring</a>
			<a href="https://aberwebr.ing/Horder/right"> -></a>
		</div>
	</ul>
</div>

<div class="header">
	<h1 class="text-cursor">> My Blog</h1>
	<h5>Sharing what's on my mind</h5>
</div>

<div class="seperator"></div>

<div class="project-row">
	<button class="toggle" data-topic="web">Web Development</button>
	<button class="toggle" data-topic="swe">Software Engineering</button>
	<button class="toggle" data-topic="out">Outdoor Exploring</button>
	<button class="toggle" data-topic="art">Creative Endeavours</button>
	<button class="toggle" data-topic="msc">Miscellaneous </button>
</div>
<div class="seperator"></div>
<div class="main">
	<a href="blogs/portfolio-creation.php/" class="blog-redirect">
		<div class="blog-card" data-category="web">
			<h2>Blog 002 - Creating my Portfolio Website</h2>
			<img src="img/PortfolioSite.PNG/" alt="A Screenshot of Portfolio Logo.">
			<p>An explanation on my creation process for this website. Looking into the design and development for my portfolio website, built using HTML, CSS and JavaScript.</p>
			<p>In this post I also discuss how websites are some of the purest form of self expression in our modern age and how web-rings can create communities whilst retaining control over your own space.</p>
		</div>
	</a>
	<a href="blogs/jogglecube-dev.php/" class="blog-redirect">
		<div class="blog-card" data-category="swe">
			<h2>Blog 001 - JoggleCube Development</h2>
			<img src="img/JoggleCube.PNG/" alt="A Screenshot of JoggleCube Game.">
			<p>My experiences taking on the role of project leader for my CS22120 Software Engineering coursework in an AGILE development lifecycle. I worked with a group of 7 other students as we created a word game using Java and JavaFX.</p>
			<p>The game consists of a 3x3x3 grid of cubes, each containing a letter. The task was to link cubes with other adjacent letter cubes to make a word that exists within a dictionary.</p>
		</div>
	</a>
	<a href="blogs/vr-tour.php/" class="blog-redirect">
		<div class="blog-card" data-category="swe">
			<h2>Blog 000 - VR Tour of School</h2>
			<img src="img/riftS.jpg/" alt="Oculus Rift S Headset.">
			<p>During sixth form I achieved top in class for my IT Coursework where I created a Virtual Reality Tour of a number of classrooms.</p>
			<p>The Tour covers three departments in my Secondary School and was created to advertise the school in an innovative way. The departments covered were English, Maths and Computer Science.</p>
		</div>
	</a>
</div>

<script>
	const buttons = document.querySelectorAll('.toggle');
	const blog_posts = document.querySelectorAll('.blog-card')


	buttons.forEach(button => {
		button.addEventListener('click', () => {
			button.classList.toggle('pressed');
			
			const activeTopics = Array.from(buttons).filter(btn => btn.classList.contains('pressed')).map(btn => btn.dataset.topic);
			
			blog_posts.forEach(post => {
				const category = post.dataset.category;
				
				if (activeTopics.length === 0 || activeTopics.includes(category)) {
					post.classList.remove('hidden');
				} else {
					post.classList.add('hidden')
				}
			});
		});
	});
	
</script>
</body>