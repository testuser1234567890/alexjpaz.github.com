<?php

define("LAST_EDIT", "26th July 2011");

/* Descriptions */
define("NAME", "Alexander");
define("SURNAME", "Paz");
define("PROFESSION_SHORT", "Front End Developer");
define("PROFESSION_LONG", "Web Developer");
define("PROFESSION_SMALL", "Web Developer");


/* Details */
define("PHONE", "+1 304 981 1771");
define("ADDRESS_STREET", "313 Jackson Street");
define("ADDRESS_POST_CODE", "25136");

/* URLs */
define("EMAIL", "info@ajpaz.com");

define("WEBSITE", "http://ajpaz.com");
define("WEBSITE_FRIENDLY", "ajpaz.com");
define("BLOG", "http://ajpaz.com");
define("RSS2", "http://ajpaz.com/feed/");
define("RSS92", "http://ajpaz.com/feed/rss/");
define("ATOM", "http://ajpaz.com/feed/atom/");

/* PATHS (with trailing slash) */
define("CV_WEB_PATH", "http://ajpaz.com/webcv");
define("CV_WEB_PATH_FRIENDLY", "ajpaz.com/webcv");
define("CV_DOC_PATH", "http://ajpaz.com/cv/curriculumvitae_ajpaz.doc");
define("CV_DOC_PATH_PDF","http://ajpaz.com/cv/curriculumvitae_ajpaz.pdf");

define("CSS_PATH", "");


?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/xhtml; charset=UTF-8" />
	<title><?=NAME?> <?=SURNAME?> <?=PROFESSION_SHORT?> - Curriculum Vitae</title>
	<link rel="profile" href="http://microformats.org/profile/hcard" />
	<?php if (stristr($_SERVER['HTTP_USER_AGENT'], 'iPhone') || $_GET['v']=="iphone") { ?>
	<link media="screen" href="<?=CSS_PATH?>mobile.css" type="text/css" rel="stylesheet" />
  <meta name="viewport" content="width=320; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
	<?php }else{ ?>
	<link media="only screen and (max-device-width: 480px)" href="<?=CSS_PATH?>mobile.css" type="text/css" rel="stylesheet" /> 
		<!-- add ?v=iphone to the URL to force the iPhone view -->
  <link rel="stylesheet" href="<?=CSS_PATH?>style.css" type="text/css" media="screen"  />
	<?php } ?>
  <link rel="stylesheet" href="<?=CSS_PATH?>print.css" type="text/css" media="print"  />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?=RSS2?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?=RSS92?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?=ATOM?>" />
</head>
<body id="curriculumvitae">

<div id="canvas">

	<div class="page pagefirst">
	
			<h1><?=NAME." ".SURNAME?> <span><?=PROFESSION_LONG?></span></h1>
			<p class="subh1">Curriculum Vitae<br />
			Microformat friendly<br />
			<?=LAST_EDIT?></p>
            <p class=" subh1-print onlyprint">A microformat friendly CV is available at <a href="<?=CV_WEB_PATH?>"><?=CV_WEB_PATH_FRIENDLY?></a></p>

			<h4 id="statement">Passionate, enthusiastic and hard worker. Enjoy working in a team, share ideas and knowledge and listen from feedback. Realistic and Optimistic. Stress and deadline-proof. Willing to grow in a challenging environment.</h4>
            
	<div id="contact" class="hCard vcard">
			<p class="fn n" lang="ca">Name: <strong><span class="given-name"><?=NAME?></span> <span class="family-name"><?=SURNAME?></span></strong></p>
			<p>Job Title: <span class="title"><?=PROFESSION_LONG?></span></p>
			
			<p>Website: <a href="<?=WEBSITE?>" class="url personal"><?=WEBSITE_FRIENDLY?></a></p>
			<p>E-mail: <a href="mailto:<?=EMAIL?>" class="email"><?=EMAIL?></a></p>
			<p class="tel"><span class="type">Phone</span>: <span class="pref"><?=PHONE?></span></p>
			<p class="adr">Address: <span class="street-address"><?=ADDRESS_STREET?></span>, <span class="postal-code"><?=ADDRESS_POST_CODE?></span> (<span class="locality region">Montgomery, WV</span>)</p>
		</div>
		
		
		<div id="skills">
			<h2>Skills</h2>
			
			<h3 id="front-end-development">Front End Web Development</h3>
			
			<p><strong>Clean code</strong>, <strong>Usability</strong>, <strong>Accessibility</strong>, organic <strong><abbr title="Search Engine Optimization">SEO</abbr></strong>, <strong>progressive enhancement</strong> and graceful degradation.</p>
		  <p><strong><abbr lang="en" title="Extensible Hypertext Markup Language" class="skill">XHTML</abbr></strong>, <strong><abbr lang="en" title="Cascading Style Sheets" class="skill">CSS</abbr></strong> (including Blueprint, 960gs, 1KB grid and other frameworks and Zen Coding),</p>
		  <p><strong>HTML5</strong> and <strong>CSS3</strong>, <strong><abbr lang="en" title="Extensible Markup Language">XML</abbr></strong>/<abbr lang="en" title="Really Simple Syndication">RSS</abbr>.<br />
	<strong>JavaScript</strong> (including <strong>jQuery</strong> framework, MooTools), <strong><abbr lang="en" title="Asynchronous JavaScript and XML">AJAX</abbr></strong> and several Web Service Protocols (<abbr lang="en" title="Simple Object Access Protocol">SOAP</abbr>, <strong><abbr lang="en" title="JavaScript Object Notation">JSON</abbr></strong>&hellip;), microformats.</p>
			<p>Exposure to high-traffic websites and scalability.<br />
			Looking forward to the embrace of <strong>HTML5</strong>, <strong>CSS3</strong> and JavaScript 2.</p>		
			<p class="software">Software: Notepad++, Cloud9, and Firebug.</p>
			
			<h3 id="back-end-development">Back End Web Development</h3>
			
			<p><strong><acronym lang="en" title="Hypertext Preprocessor">PHP4</acronym></strong> and <strong><acronym lang="en" title="Hypertext Preprocessor">PHP5</acronym></strong> (<strong><abbr lang="en" title="Model-View-Controller">MVC</abbr></strong>, <abbr lang="en" title="Object Oriented Programming">OOP</abbr> programming) including several <strong><abbr lang="en" title="Content Management System">CMS</abbr></strong>, and frameworks (<strong>Wordpress</strong> and <strong>Drupal</strong>; CodeIgniter, <strong>CakePHP</strong>); excited about <strong>Ruby on Rails 3</strong>; fell in love with <strong><abbr lang="en" title="Active Server Pages">ASP</abbr>.NET MVC 3</strong>.<br />
Database management (<strong><abbr lang="en" title=" Michael Structured Query Language">MySQL</abbr></strong>, Oracle, <abbr lang="en" title="Microsoft Structured Query Language">MSSQL</abbr>, Access).<br />
<strong>Apache</strong> (including <abbr lang="en" title="Client URL Request Library">cURL</abbr>, mod_rewrite and other modules), <abbr lang="en" title="Internet Information Server">IIS</abbr> server administration/setup and knowledge of several public <strong><abbr lang="en" title="Application Programming Interface">API</abbr></strong> (<strong>Google Maps</strong>, Google Visualization, <strong>Facebook</strong>/<strong><abbr title="Facebook Markup Language">FBML</abbr></strong>/<strong><abbr title="Facebook JavaScript">FBJS</abbr></strong>&hellip;).<br />
Code optimization, scalability and debugging. Web security (SQL Injection, <abbr lang="en" title="Cross-site Scripting">XSS</abbr>...).</p>
			
			<p class="software">Software: Notepad++, Visual Studio 2010, Firebug/FirePHP.</p>
			
			
			
			<h3 id="ui-design">User Interface Design</h3>
			
			<p>Wireframing and designing of user interfaces and websites designs focusing on usability and clearness.</p>
			<p><strong>Table-less</strong> cross-browser hand-coded 100% <strong>valid CSS2-3/XHTML</strong> (following <strong><abbr title="World Wide Web Consorcium">W3C</abbr> standards</strong>) to ensure the best formatting and the fastest code possible in <strong><abbr title="Internet Explorer 6">IE6</abbr></strong> to 9, Firefox, Opera, Safari, Chrome and <strong>iPhone/Android</strong>. <strong>Theme design</strong> for several CMS and blogs.</p>
			
			<p class="software">Software: Notepad++, Adobe Illustrator, Adobe Photoshop, and Adobe Flash.</p>
			
			<h3 id="miscellaneous">Miscellaneous</h3>
			
			<p><strong>Unix</strong> (<abbr title="Hewlett Packard UniX">HP UX</abbr>) and <strong><acronym title="GNU's Not Unix">GNU</acronym>/Linux</strong>  distributions <strong>console</strong> (Ubuntu, Debian, Arch, Red Hat, etc...). </p>
			<p><strong>Windows</strong> XP/7, Windows Server, Mac <strong>OSX</strong>, Linux (all at administration level).</p>
			<p><strong><abbr title="Secure Shell">SSH</abbr></strong> and <abbr title="File Transfer Protocol">FTP</abbr>. <strong>Git, Mercucial, SVN</strong>.</p>
			<p>Agile software development (<strong>SCRUM</strong>). Advanced Microsoft Excel, Word and Powerpoint.</p>
			<p>Python, Visual Basic 6, VBS, <strong><abbr lang="en" title="Regular Expressions">RegEx</abbr></strong>, Hardware maintenance and basic networking.</p>
			<p>Familiar with documentation (<acronym title="Institute of Electrical and Electronics Engineers">IEEE</acronym> 830), reporting and time-tracking.</p>
			<p class="software">Software: PuTTY, WinSCP, Cygwin, Eclipse, Audacity, Gimp, Autodesk Autcad/Maya, Blender3D.</p>
		
		</div><!--/skills-->
	
	</div><!--.page-->
	<div class="page">
	
		<div id="employment">
		
			<h2>Employment</h2>
			<ol>
				<li class="experience">
					<p class="dt"><span class="dtstart" title="2010-10-17">Oct 2010</span> - <span class="dtend" title="2010-<?php echo date("y-m-d");?>">Present</span></p>
					<p><strong class="title">Web Software Developer</strong>
					<em class="org">Northrop Grumman</em> <span class="location">WV</span></p>
					<p class="summary">TBD</p>
				</li>
				<li class="experience">
					<p class="dt"><span class="dtstart" title="2009-10-01">Oct 2009</span> - <span class="dtend" title="2010-10-17">Oct 2010</span></p>
					<p><strong class="title">Lead Programmer/Analyst</strong>
					<em class="org">West Virginia Office of Technology</em> <span class="location">WV</span></p>
					<p class="summary">Implemented an IT Dashboard web application to provide fiscal information of all WV State IT projects over $100,000. Working closely with a graphic designer, and two back-end developers. Complete front end website development solutions in XHTML/CSS, PHP5, MySQL, jQuery/JavaScript and AJAX/JSON. Usability improvements, SEO and theme designs. Providing ideas and feedback on how to improve current and future projects. Weekly knowledge sharing with other members of the team. Chosen to provide emergency technical support to high proiorty project during heavy use.</p>
				</li>
				<li class="experience">
					<p class="dt"><span class="dtstart" title="2005-06-01">Jul 2005</span> - <span class="dtend" title="<?php echo date("y-m-d");?>">Present</span></p>
					<p><strong class="title">Freelance Web Developer</strong></p>
					<p class="summary">Consultant and complete web site design and development solutions running Apache server (PHP5, MySQL, AJAX). Usability improvements, SEO and theme designs.</p>
				</li>
				<li class="experience">
					<p class="dt"><span class="dtstart" title="2007-06-01">Mar 2007</span> - <span class="dtend" title="2009-07-01">Jul 2009</span></p>
					<p><strong class="title">Computer Lab Administrator</strong>
					<em class="org">WVU Insitute of Technology</em> <span class="location">WV</span></p>
					<p class="summary">Web and network maintenance. Installed and maintained several educational packaged used by students and faculty. Implemented deployment software to maintain lab integrerty. Installed a centralized Linux server to help reduce downtime and data loss.</p>

				</li>	
			</ol>
		</div><!--/employment-->
		
	</div><!--.page-->
		<div class="page">
			<div id="education">
			
				<h2>Education</h2>
				
				<ul>
					<li class="education">
						<p class="dt"><span class="dtstart" title="2005-06-01">Jan 2005</span> - <span class="dtend" title="<?php echo date("y-m-d");?>">Present</span></p>
						<p><strong class="title">Self Taught Web Development and Graphic Design</strong></p>
						<p class="summary">Reading books, blogs, news and tutorials to keep myself in the loop of the latest market trends and technology resources available through web seminars, guru blogs feeds <small>(Stackoverflow, Smashing Magazine, Jacob Nielsen, John Resig, Google Code, Gmail and Webmaster Central blogs, Fuel your Creativity, I Love Typography, jQuery Blog, NetTuts and TED amongst others)</small>.</p>
					</li>
					
					<li class="education">
						<p class="dt"><span class="dtstart" title="2011-05-01">May 2010</span></p>
						<p><strong class="title">Bachelor of Science in Computer Science</strong>
						<em class="org">WVU Institute of Technology</em></p>
						<p class="summary"><strong>Web Development</strong> (XHTML, CSS, PHP, ASP), <strong>Database management</strong> (MySQL, Oracle, MSSQL, Access), <strong>Graphic Design</strong> (Photoshop, Illustrator), <strong>GNU/Linux</strong>, Windows Server, C, C#, Java, Python.</p>
					</li>
				</ul>
			</div><!--/education-->
			
			<div id="references">
				<h2>References</h2>

				<p>Visit <strong><a class="url personal" href="http://ajpaz.com/">ajpaz.com</a></strong> to see my personal website and some projects.</p>
			</div><!--/references-->
			
		</div><!--.page-->
	</div><!--#canvas-->
	
	
	<div id="fixedmenu">
		<ul>
			<li><a href="#curriculumvitae" title="Scroll to the top"><strong><?=NAME?> <?=SURNAME?></strong> <small><?=PROFESSION_SMALL?></small></a></li>
			<li><a href="#skills" title="">Skills</a>
				<ul>
					<li><a href="#front-end-development" title="Front End Web Development">Front End Web Development</a></li>
					<li><a href="#back-end-development" title="Back End Web Development">Back End Web Development</a></li>
					<li><a href="#ui-design" title="User Interface Design">User Interface Design</a></li>
					<li><a href="#miscellaneous" title="Miscellaneous">Miscellaneous</a></li>
				</ul>
			</li>
			<li><a href="#employment" title="Employment">Employment</a></li>
			<li><a href="#education" title="Education">Education</a></li>
			<li><a href="#references" title="References">References</a></li>
			<li>&nbsp;</li>
			<li><a href="<?=CV_DOC_PATH?>" title="Download as Microsoft Word document (.doc)"><small><strong>Download as document</strong> .doc</small></a></li>
			<li><a href="<?=CV_DOC_PATH_PDF?>" title="Download as Adobe PDF (.pdf)"><small><strong>Download as document</strong> .pdf</small></a></li>
		</ul>
	</div>
	
	<div id="gototop">
		<a href="#curriculumvitae" title="Scroll to the top">Up</a>
	</div>
	
</body>
</html>