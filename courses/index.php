<!DOCTYPE html>
<html>
<head>
	<title>Academic | Larby Sy School</title>
	<link rel="icon" href="../image/school-logo2.png">
	<link rel="stylesheet" type="text/css" href="../style/fonts.css">
	<link rel="stylesheet" type="text/css" href="../fontawesome-free-5.15.1-web/css/all.css">
	<link rel="stylesheet" type="text/css" href="../style/style.css">
	<link rel="stylesheet" type="text/css" href="../style/media.css">

</head>
<body>
<!-- ---------------------------------------------START---Dropdown HTML-------------------------------------- -->

<div id="drop-bar" class="drop-bar">
	<img class="dropdown-logo" src="../image/school-logo2.png"> 
	<div class="dropbar-list">
			<ul>
				<li><a href="../index.php">Home<hr></a></li>
				<li><a href="#">Admission<hr></a>
					<div class="drop-list2">
						<ul>
							<li><a href="../req">Requirements</a></li>
							<li><a href="../admission">Procedure</a></li>
						</ul>
	
						</div>
				</li>
				<li><a href="../courses">Academic<hr></a></li>
				<li><a href="../aboutus">About us<hr></a></li>
				<li><a href="../contact">Contacts<hr></a></li>
			</ul>
			
	</div>
	<i class="fas fa-bars"></i>
</div>
<script>
	window.onscroll=function(){myscroll()};
	function myscroll()
{
	
	if(document.documentElement.scrollTop > 150)
	{
		document.getElementById("drop-bar").style.top="0";
	}
	else
	{
		document.getElementById("drop-bar").style.top="-80px";
	}
}
function popup()
{
	document.getElementById("login").style.display="flex";
}

function popout()
{
	document.getElementById("login").style.display="none";
}
</script>
<!-- ---------------------------------------------END---Dropdown HTML-------------------------------------- -->
<!-- ---------------------------------------------START---log-in HTML-------------------------------------- -->
  
	<div class="login" id="login">
		<i onclick="popout();" class="fas fa-times login-exit"></i>
			<div class="login-form">
				
				
				<h1><i class="fas fa-user"></i></h1>
				<h2>Student Portal</h2>
				<form method="POST" action="../login/index.php">
					<table>
						
						<tr>
							<input type="text" name="email" placeholder="Email">
						</tr>
						<tr>
							<input type="password" name="password" placeholder="Password">
						</tr>
						<tr>
							<input type="submit" name="submit" value="submit" class="log-submit">
						</tr>
							<tr>
							<div>
							</div>
					
							 
						</tr>


					
					
					
					<a href="../Application-form">Sign up</a>
					</table>
				</form>
				
			</div>
		
	</div>


<!-- ---------------------------------------------End---log-in HTML-------------------------------------- -->

<div id="upper-bar" class="upper-bar">
	<img class="nav-logo" src="../image/school-logo2.png"> 
	<h2 class="school-name">Larby Sy College</h2>
	
</div>
<div id="lower-bar" class="lower-bar">
	<div class="lower-bar-left">
			<ul>
				<li><a id="swtc1" href="../index.php">Home<hr></a></li>
				<li ><a class="admin-list" id="swtc2" href="#">Admission&ensp;<i class="fas fa-chevron-right"></i><hr></a>
					<div class="drop-list">
	<ul>
		<li><a href="../req">Requirements</a></li>
		<li><a href="../admission">Procedure</a></li>
	</ul>
	
</div>
				</li>
				<li><a id="swtc3" href="../courses">Academic<hr></a></li>
				<li><a id="swtc4" href="../aboutus">About us<hr></a></li>
				<li><a id="swtc5" href="../contact">Contacts<hr></a></li>
			</ul>
	</div>
	<div class="lower-bar-right">
		 <ul>
		 	<li><a id="swtc6" href="../faq">FAQ's<hr></a></li>
		 	<li><a id="swtc7" onclick="popup();" href="#">Sign in<hr></a></li>
		 </ul>
	</div>
	
</div>




<div class="academic">

<h1>Academics</h1>
<hr>
	
	<div class="acad-sub">
		
		<ul>

			<h2>UNDERGRADUATE PROGRAM</h2>
			<br>

			<h2>College of Art and Science</h2>
			<li>BS Psychology</li>
			<p>The Bachelor of Science in Psychology (BS Psych) is a four-year program designed to help you observe human behavior through the scientific method, allowing you to gain access to the human psyche and fathom its depths.The BS in Psychology degree prepares you for general careers in teaching, research, counseling and human resources. It can also be a foundation for further studies in the fields of Medicine, Guidance and Counseling, Human Resource Development and Law.</p>
			<br>

			<li>BS Information Technology</li>
			<p>The Bachelor of Science in Information Technology (BSIT) program prepares students to be IT professionals who are able to perform installation, operation, development, maintenance and administration of computer applications. The goal of the program is to gear up students as "information technologists" who can assist individuals and organizations in solving problems using information technology (IT) techniques. This degree is primarily focused on subjects such as software, databases, and networking.This degree is awarded for completing a program of study in the field of software development, software testing, software engineering, web design, databases, programming, computer networking and computer systems.</p>
			<br>

			<li>BS Computer Science</li>
			<p>The Bachelor of Science in Computer Science (BSCS) is a four-year degree course, which focuses on the study of concepts and theories, algorithmic foundations, implementation and application of information and computing solutions. The program prepares students to be IT professionals and Researchers, and to be proficient in designing and developing computing solutions. Students who want to pursue a degree in BS in Accountancy are encouraged to take the Accountancy, Business and Management Course. This course provides the basic concepts of business and financial management, and corporate operations that will be helpful for college.</p>
			<br>

			<h2>College and Business and Accountancy</h2>
			<li>BS Accountancy</li>
			<p>The Bachelor of Science in Accountancy (BSA) program is a five-year program focused on subjects in financial, public, and managerial accounting, auditing, administration, business laws, and taxation. The program also teaches students to integrate information technology concepts into business systems, to create a more systematic and organized way of storing business-related data. Aside from business topics, BSA also equips students with a basic understanding of computer programming and auditing systems.</p>
			<br>

			<li>BS Entrepreneurship</li>
			<p>The Bachelor of Science in Entrepreneurship is a four-year degree program that centers on how to start and manage a business by combining management, accounting, finance, and marketing principles. This program is designed in order to equip students with the necessary knowledge and skills in identifying business opportunities, business planning, financing, company valuation, and business management. The program commits itself to the education and formation of students who will be competent, committed, and compassionate entrepreneurs imbued with ethical, pro-social, and altruistic qualities of empathy, social responsibility, and justice.</p>
			<br>

			<li>BS Hotel and Restaurant</li>
			<p>The Bachelor of Science in Hotel and Restaurant Management is a four-year degree program that equips students with the necessary knowledge, skills, and attitude to provide quality service in the hospitality industry.Students who want to pursue a degree in Hotel and Restaurant Management are encouraged to take the Home Economics strand under the Technical-Vocational and Livelihood (TVL) track. The strand covers interesting topics like beauty and wellness, cooking, fashion designing, tourism, hospitality, and handicrafts. These topics are helpful to incoming college students as it teaches the basics of their degree program.

</p>
			<br>

		<h2>College of Engineering</h2>
			<li>BS Civil Enginnering</li>
			<p>The Bachelor of Science in Civil Engineering (BSCE) is a four-year program that aims to provide students with knowledge in mathematics and science to be applied in the different specializations such as structural, transportation, water resource, geotechnical, environmental and construction project management. Under this program, students are trained to have exceptional skills in planning, design, and supervision of different infrastructures and civil engineering works.</p>
			<br>

			<li>BS Industrial Enginnering</li>
			<p>The Bachelor of Science in Industrial Engineering is a five-year degree program designed to prepare students for becoming professional Industrial Engineers. The BS in Industrial Engineering program is a combination of three disciplines: mathematics, physical sciences, and engineering sciences. Students are provided with the knowledge and skills needed for designing, installing, managing and maintaining production, and manufacturing systems. They are also taught techniques of how to transform resources into useful goods and services.</p>
			<br>

			<li>BS Electrical Enginnering</li>
			<p>Within four years of graduation, holders of the degree of Bachelor of Science in Electrical Engineering from the University of Santo Tomas shall be engaged, either locally or abroad, in the following areas of practice: Power Systems Engineering; Design; Illumination; Entrepreneurship; Sales; Education and Research; Instrumentation and Control; and Electrical Safety. Furthermore, they shall be expected to imbibe the following traits: contemplative, creative, and critical thinking; exemplary work ethic; and a commitment to improve society and to lifelong learning.</p>
			<br>

			<li>BS Mechanical Enginnering</li>
			<p>Bachelor of Science in Mechanical Engineering (BSME) is a five-year program that deals with the design, development, installation, operation, and maintenance of machinery, engines, and structures used in industrial, biomedical, instrumentation and transportation systems. This program discusses the study of the conversion of thermal and chemical energy into mechanical work through engines and power plants while teaching students the proper utilization of these energies, forces, and structures to successfully perform a variety of tasks.

</p>
			<br>


			<h2>GRADUATE PROGRAM</h2>

			<br>
			<li>Master in Buisness Administration</li>
			<p>Master in Business Administration (MBA) program is a two-year graduate program usually taken by mid-career professionals to gain an advantage in their professional careers. The curriculum is designed to equip students with the skills that will make them qualified and competent in higher-level management positions. The program centers on the current management techniques, functional areas in the field of business, relevant concepts in economics, applied mathematics, statistics, and behavioral science, and their practical applications. It does not only teach students about theories and applications of business concepts, processes, tools, and techniques but also teaches students about managerial tools and right decision-making processes in a business.</p>
			<br>

			<li>MS Criminology</li>
			<p>The Criminology Masters Program begins with an orientation. Because this is a small and highly select program which concentrates on personal attention and guidance, this orientation period provides an opportunity for students to get to know each other, faculty and administrators. The Master of Criminology (MCrim) draws on many disciplines and has many applications. People who have studied criminology work in a number of areas and for a host of organisations.</p>
			<br>

			<li>MS Psychology</li>
			<p>The Master of Science in Psychology is a two-year comprehensive graduate program designed to train students to become professionals who provide relevant counseling and interventions to children, teenagers, and adults. The program focuses on the general study of emotions, behavior and thought processes on individuals of all ages. It aims to help resolve the patient’s personality issues through critical thinking and effective problem-solving strategies. Students who wish to pursue a graduate degree in MS in Psychology should have an undergraduate degree in psychology and the social sciences field.</p>
			<br>



		</ul>




	</div>


	
</div>





































<div class="footer">
				<div class="quick-link">
					<h2>Quick Links</h2>
					<ul>
						<li><a href="../admission">Admissions</a></li>
						<li><a href="../courses">Academic</a></li>
					
						<li><a href="../aboutus">About us</a></li>
						<li><a href="../contact">Contact us</a></li>
						<li><a href="../Application-form" >Sign in</a></li>
					</ul>
				</div>
				<div class="contact-us">
					<h2>Talk to us</h2>
					<ul>
						<li><span>Email:</span> larby_admissions@gmail.com</li>
						<li><span>Tel No:</span> +1202-555-0353 / +1202-555-0784</li>
						<li><span>Address:</span>(678) 625-81615388 Wapakonata Trl SW Oxford, Georgia(GA), 30054</li>

					</ul>
					
				</div>
				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3318.587485057879!2d-83.8791490854544!3d33.719621642633726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f5cbc498efd885%3A0xdad87ba39fc5390e!2s625%20Wapakonata%20Trail%20%23678%2C%20Oxford%2C%20GA%2030054%2C%20USA!5e0!3m2!1sen!2sph!4v1607146837144!5m2!1sen!2sph" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					
				</div>
				
			</div>
			<div class="footer-2">
				<h5>&#169; Copyright 2020 Larby Sy College</h5>
			</div>


</body>
</html>