<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<?php
if($_REQUEST["vmode"] != 'full')
{
	$useragent=$_SERVER['HTTP_USER_AGENT'];
	if(preg_match('/android.+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|e\-|e\/|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|xda(\-|2|g)|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
	header('Location: mobile/');
}
?>

<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title>Amey Rupji :: Home</title>
	<link rel="stylesheet" href="template/css/styles.css" type="text/css" media="screen" />
	<link rel="stylesheet" type="text/css" href="template/css/print.css" media="print" />
    <link rel="shortcut icon" href="template/images/favicon.gif">
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>

<div style="display:none; position:fixed;" id="notificationsBar">
	
</div>
<div id="wrapperPad"><!-- #wrapperPad -->
	<a id="slideMenu">See  Menu</a>
    <div id="wrapper"><!-- #wrapper -->
        <header><!-- header -->
            
            <div id="goMobile">
                <a href="mobile/index.php"></a>
            </div>
            <a href="index.php" id="logo"></a>
        </header>
        <!-- end of header -->
        <section id="main"><!-- #main content and sidebar area -->
            <div id="menuPad">
            <div id="menu">
                <ul id="sliding-navigation">
                    <li class="sliding-element">
                        <a href="#homeDiv" id="home"></a>
                    </li>
                    <li class="sliding-element">
                        <a href="#aboutMeDiv" id="aboutMe"></a>
                    </li>
                    <li class="sliding-element">
                        <a href="#skillsDiv" id="skills"></a>
                    </li>
                    <li class="sliding-element">
                        <a href="#workDiv" id="work"></a>
                    </li>
                    <li class="sliding-element">
                        <a href="#resumeDiv" id="resume"></a>
                    </li>
                    <li class="sliding-element">
                        <a href="#contactDiv" id="contact"></a>
                    </li>
                </ul>
            </div>
            <div id="content">
                <div class="contentsDiv" id="homeDiv">
                    <div class="white" id="social">
                        <h2 class="blue">Share &raquo;</h2>
                        <div class="data" style="padding: 0 10px;"></div>
                    </div>
                    
                    <img src="images/ameyRupjiFrontPage.jpg" alt="Amey Rupji" id="frontImg"/>
                    <h1>Amey Rupji <script type="IN/MemberProfile" data-id="http://www.linkedin.com/in/ameyrupji" data-format="hover"></script></h1>
                    <div>
                        <div class="div33 white">
                            <h2 class="blue">What am I Upto &raquo;</h2>
                            <div class="data">
                                <p>Looking for Summer Internship</p>
                            </div>
                        </div>
                        <div class="div33 white">
                            <h2 class="blue">Connect with me &raquo;</h2>
                            <div class="data">
                                <ul class="noStyle">
                                    <li><a href="http://www.linkedin.com/in/ameyrupji">Linked In</a></li>
                                    <li><a href="http://www.facebook.com/ameyrupji">Facebook</a></li>
                                    <li><a href="https://twitter.com/#!/ameyrupji">Twitter</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="div33 white">
                            <h2 class="blue">Recent Work &raquo;</h2>
                            <div class="data">
                                <div class="slideshow" style="position: relative;">
                                    <div>
                                        <img src="recentWork/agendaManager/agendaManager.png" width="215" height="50" alt="Agenda Manager">
                                        <p>Built a heap by using priority queue to run a agenda manager</p>
                                        <a href="recentWork/agendaManager/agendaManager.html" class="readMore nyroModal">Read more &raquo;</a>
                                    </div>
                                    <!--<div>
                                        <img src="images/recentWork/ttuIsaElections.jpg" width="215" height="50" alt="TTU ISA Elections 2012">
                                        <p>Building a web portal for TTU India Student Asso. Elections 2012</p>
                                        <a href="recentWork/agendaManager.html" class="readMore nyroModal">Read more &raquo;</a>
                                    </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contentsDiv" id="aboutMeDiv">
                    <h1>About Me</h1>
                    <div class="scroll-pane">
                        <p>I have always been interested in doing things outside of academic books & my love for web- designing has prompted me to squeeze out some time to do many things out of sheer interest, which in a way has molded my personality.</p>
                        <p>I would like to equip myself well enough to build a career around my potential.</p>
    
                        <p>Human civilization till date has evolved as a result of three major revolutions - the Agricultural Revolution, the Industrial Revolution & the IT Revolution. Though the IT revolution has made rapid strides in the past few years in transforming, ameliorating & progressively impacting the way of life of mankind, we are still at the beginning of a great journey. I cherish a resolute dream & a burning desire to make an impact within this revolution & leave pioneering foot prints behind on this change that is taking over the world.</p>
    
                        <p>Thank you and have a great day!</p>
                        <p>Amey Rupji</p>
                    </div>
                </div>
                <div class="contentsDiv" id="skillsDiv">
                    <h1>Skills &amp; Projects</h1>
                    <div class="scroll-pane">
                        <h2 class="head">Skills &raquo;</h2>
                        <div>
                            <ul>
                                <li><strong>Programming Languages :</strong> C, C++, C#, Java, Matlab</li>
                                <li><strong>Web Programming :</strong> HTML4, HTML5, CSS2 and CSS3, Java Script, jQuery, XML, ASP.net C#, PHP</li>
                                <li><strong>Databases :</strong> Microsoft SQL Server 2005/2008, MySQL</li>
                                <li><strong>Modeling and Concepts :</strong> UML, OOAD, OOPS</li>
                                <li><strong>Operating Systems :</strong> Windows XP/Vista/7, Linux</li>
                                <li><strong>Web Server :</strong> Internet Information Services (IIS), Apache Tomcat</li>
                                <li><strong>Other Software :</strong> Joomla, WordPress, Photoshop, Dreamweaver, Expression Web, Visual Studio</li>
                            </ul>
                        </div>
                        <h2 class="head">Academic Projects &raquo;</h2>
                        <div>
                            <h3>Course Scheduler <em>(2011 – Present)</em></h3>
                            <ul>
                                <li>Working on a project to develop a course scheduler for the Department of Computer Science Texas Tech University</li>
                                <li>Improving the currently existing manual error prone and tedious departmental course scheduling process by an automated one.</li>
                                <li>Developing in ASP.net C# using Microsoft Visual Studio 2010 with Microsoft SQL Server 2008 as the database.</li>
                            </ul>
                            
                            <h3>A priority queue for a simplified agenda manager
    in a rule-based expert system shell <em>(Course - Analysis of Algorithms, Spring 2012)</em></h3> 
                            <ul>
                                <li>The goal was to implement a simplified agenda manager which reads a list of rules with priorities from a file and created a priority queue by using a heap to run the agenda manager</li>
                                <li>This project was implemented in C with special consideration to make program is self-aware with graceful degradation (i.e. give rationales upon exit) when inputs do not fit the specification</li>
                            </ul>
                            
                            <h3>Real Arithmetic Library <em>(Course - Scientific Computing, Fall 2011)</em></h3> 
                            <ul>
                                <li>Implemented a Real Arithmetic Library in Python that evaluates and real number arethmetic with the help of rational numbers. The generates the arithmetic operations had an accuracy of 10^(-20) decimals. </li>
                            </ul>
                            
                            <h3>Quintic Equation Solver <em>(Course - Scientific Computing, Fall 2011)</em></h3> 
                            <ul>
                                <li>Implemented Quintic Equation(equation of degree 5) Solver using Python.</li>
                                <li>This Project involved generating the roots of the given Quintic equation by mathematical algorithms such as Newton Raphson Method, Bisection Method, Mid Point Algorithm and Secant Method.</li>
                            </ul>
                             
                            <h3>V Space <em>(2009 – 2010)</em></h3>
                            <ul>
                                <li>Contributed in setting up an Intranet based portal for Department of Information Technology K J Somiaya College of Engineering, Mumbai University.</li>
                                <li>Administered and enhanced the portal features and ran periodic backups.</li>
                                <li>The project was implemented in PHP using MySQL as the database.</li>
                            </ul>
                            
                            <h3>Digital Security System through Images <em>(2009 – 2010)</em></h3>
                            <ul>
                                <li>Developed a security system using Images and a self-developed ‘Roll In Roll Back’ (RIRB) Algorithm for data encryption.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="contentsDiv" id="workDiv">
                    <h1>Work Experience</h1>
                    <div class="scroll-pane">
                         <h2>Graduate Web Student (Graduate Assistant)
                            <span class="workPlace">
                                <a href="http://www.depts.ttu.edu/itts/" target="_blank">Technology Support</a>,<br />
                                <a href="http://www.depts.ttu.edu/infotech/" target="_blank">Information Technology Division</a>,<br />
                                <a href="http://www.ttu.edu/" target="_blank">Texas Tech University</a></span></h2>
                        <p>Working as a Graduate Assistant at the Technology Support Department's Web Services Team I was able to apply Software Development and Project Management concepts in web projects. The project ranged from web designing (mobile also) to working with advance technologies such as Microsoft SharePoint. This job has exposed me to major IT processes like Time Lines, Documentation, Development, Review (Testing) and Modifications and also help me improve my interpersonal and communication skills. </p>
                        
    
                        <div class="div5050">
                            <h3>From:</h3>
                            <p>September 2011</p>
                        </div>
                        
                        <div class="div5050">
                            <h3>To:</h3>
                            <p>Present</p>
                        </div>
                        
                        <div class="div5050">
                            <div class="heading collapsed">
                                <h3>Knowledge Gained</h3>
                            </div>
                            <div class="hidden"> 
                                <ul>
                                    <li>Web Designing with jQuery with major concentration on web accessibility</li>
                                    <li>Mobile Web Development</li>
                                    <li>Understanding advanced technologies like Microsoft SharePoint</li>
                                    <li>Working on project in a team environment</li>
                                </ul>
                            </div>
                        </div>
                        <div class="div5050">
                            <div class="heading collapsed">
                                <h3>References</h3>
                            </div>
                            <div class="hidden">
                                <ul>
                                    <li><a href="mailto:">Carlene Kelly</a></li>
                                    <li><a href="mailto:">Jeff Barrington</a></li>
                                </ul>
                            </div>
                        </div>
                        <p>&nbsp;</p>
                        <h2>Web Project Manager (Graduate Assistant)
                            <span class="workPlace">
                                <a href="http://www.ba.ttu.edu/" target="_blank">Rawls College of Business Administration</a>,<br />
                                <a href="http://www.ttu.edu/" target="_blank">Texas Tech University</a></span></h2>
                        <p>As a Web Project Manager at RCOBA my main responsibility was developing and improving websites throughout the Rawls College of Business. This included customizing and modifying web templates. Working under Dr. Laverie (Sr. Associate Dean, RCOBA), I have tried to enhance the web experience of the RCOBA websites by providing mobile support for devices such as iPhone, Android, Blackberry and Symbian. </p>
                        
                        <div class="div5050">
                            <h3>From:</h3>
                            <p>November 2010</p>
                        </div>
                        
                        <div class="div5050">
                            <h3>To:</h3>
                            <p>September 2011 </p>
                        </div>
                        
                        <div class="div5050">
                            <div class="heading collapsed">
                                <h3>Knowledge Gained</h3>
                            </div>
                            <div class="hidden"> 
                                <ul>
                                    <li>Web Designing with advance use of CSS2, CSS3 and jQuery</li>
                                    <li>Mobile Web Development</li>
                                </ul>
                            </div>
                        </div>
                        <div class="div5050">
                            <div class="heading collapsed">
                                <h3>References</h3>
                            </div>
                            <div class="hidden">
                                <ul>
                                    <li><a href="mailto:debbie.laverie@ttu.edu">Dr. Debra Laverie</a></li>
                                    <li><a href="mailto:zafar.miller@ttu.edu">Zafar Miller</a></li>
                                </ul>
                            </div>
                        </div>
                        <p>&nbsp;</p>
                        <h2>Student Assistant
                            <span class="workPlace">
                                <a href="http://bacs.ba.ttu.edu/" target="_blank">Business Administration Computing Services</a>,<br />
                                <a href="http://www.ba.ttu.edu/" target="_blank">Rawls College of Business Administration</a>,<br />
                                <a href="http://www.ttu.edu/" target="_blank">Texas Tech University</a></span></h2>
                        <p>As a Student Assistant for Business Administration Computing Services at RCOBA my prime responsibility was managing printing services and providing technical assistance with printing in lab.</p>
                        
                        <div class="div5050">
                            <h3>From:</h3>
                            <p>August 2010</p>
                        </div>
                        
                        <div class="div5050">
                            <h3>To:</h3>
                            <p>October 2010</p>
                        </div>
                        
                        <div class="div5050">
                            <div class="heading collapsed">
                                <h3>Knowledge Gained</h3>
                            </div>
                            <div class="hidden"> 
                                <ul>
                                    <li>Customer Service</li>
                                    <li>Time Management</li>
                                </ul>
                            </div>
                        </div>
                        <div class="div5050">
                            <div class="heading collapsed">
                                <h3>References</h3>
                            </div>
                            <div class="hidden">
                                <ul>
                                    <li><a href="mailto:zafar.miller@ttu.edu">Zafar Miller</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contentsDiv" id="resumeDiv">
                    <h1>Request My Resume</h1>
                    <div class="scroll-pane">
                        <div class="noJS">
                            <h3>Please Upgrade Browser</h3>
                            <p> You are seeing this message because your browser is quite old or You have no Java Script enabled on your browser. Please re-enable JavaScript or please check your browser for JavaScript Support for this page to work properly.</p>
                        </div>
                        <form name="ResumeForm" id="ResumeForm" method="post" action="resume.php" class="validate">
                            <p>Please enter your Name and Email below, then click the Submit to receive a copy of my Resume. </p>
                            <div id="msg"></div>
                            <div id="loading" style="display: none;">
                                <img alt="loading" src="template/images/ajax_load.gif" > Sending...
                            </div>
                            <!--<div id="map_canvas" style="width:100%; height:100px;"></div>-->
                            <div class="input-box">
                                <label for="name"><span class="reqBlue">*</span> Name</label>  
                                <input type="text" name="name" id="name" value="" placeholder="Name" class="required"/> 
                            </div>
                            <div class="input-box">
                                <label for="email"><span class="reqBlue">*</span> Email</label>
                                <input type="text" name="email" id="email" value="" placeholder="Email" class="required email"/> 
                            </div>
                            <div class="input-box">
                                <label for="org"><span class="reqBlue">*</span> Organization</label>
                                <input type="text" name="org" id="org" value="" placeholder="Organization" /> 
                            </div>
                            <div class="submit">
                                <span class="req"><span class="reqBlue">*</span> Required Fields</span>
                                <button type="submit" id="resumeSubmit" style="float:right;">Submit</button>
                                <div class="locationName"><img alt="loading" src="template/images/ajax_load.gif"><div class="text"></div></div>
                                <a class="location off nyroModal" href="geolocation.html"></a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="contentsDiv" id="contactDiv">
                    <h1>Contact Me</h1>
                    <div class="scroll-pane">
                        <div class="noJS">
                            <h3>Please Upgrade Browser</h3>
                            <p> You are seeing this message because your browser is quite old or You have no Java Script enabled on your browser. Please re-enable JavaScript or please check your browser for JavaScript Support for this page to work properly.</p>
                        </div>
                        <form name="ContactForm" id="ContactForm" method="post" action="contact.php" class="validate">
                            <p>Please enter the requested information below, then click the Submit button to get in touch with me. </p>
                            <div id="msg1"></div>
                            <div id="loading1" style="display:none;">
                                <img alt="loading" src="template/images/ajax_load.gif" > Sending...
                            </div>
                            
                            <div id="yourNameDiv" data-role="fieldcontain">
                                <label for="nameC" class="ui-input-text"><span class="reqBlue">*</span> Name</label>  
                                <input type="text" name="nameC" id="nameC" value="" placeholder="Name" class="required" /> 
                            </div>
                            <div id="emailDiv" data-role="fieldcontain" class="ui-input-text">
                                <label for="emailC"><span class="reqBlue">*</span> Email</label>
                                <input type="text" name="emailC" id="emailC" value="" placeholder="Email" class="required email" /> 
                            </div>
                            <div id="subjectDiv" data-role="fieldcontain" class="ui-input-text">
                                <label for="message_subject"><span class="reqBlue">*</span> Subject</label>
                                <input type="text" name="message_subject" id="message_subject" value="" placeholder="Subject" class="required"/> 
                            </div>
                            <div id="messageDiv" data-role="fieldcontain" class="ui-input-text">
                                <label for="message_body"><span class="reqBlue">*</span> Message</label>
                                <textarea id="message_body" name="message_body" rows="8" placeholder="Please Enter your Comments..."  class="required"></textarea>
                            </div>
                            <div class="submit">
                                <span class="req"><span class="reqBlue">*</span> Required Fields</span>
                                <button type="submit" id="contactSubmit" style="float:right;">Submit</button>
                                <div class="locationName">
                                    <img alt="loading" src="template/images/ajax_load.gif">
                                    <div class="text"></div>
                                </div>
                                <a class="location off nyroModal" href="geolocation.html"></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </section><!-- end of #main content and sidebar-->
        <footer>
            <section id="footer-area">
    
                <section id="footer-outer-block">
                        <aside id="htmlLogo" class="footer-segment">
                            <a href="http://www.w3.org/html/logo/" id="html5" class="nyroModal foot-img"></a>
                            <a href="" id="jquery" class="foot-img"></a>
                        </aside>
                        <!-- end of #first footer segment -->
                        <aside id="cssLogo" class="footer-segment">
                            <a href="http://www.w3.org/html/logo/" id="css3" class="nyroModal foot-img"></a>
                            <a href="" id="ajax" class="foot-img"></a>
                        </aside>
                        <!-- end of #first footer segment -->
                        <aside id="devAccLogo" class="footer-segment">
                            <a href="" id="devAcc" class="foot-img"></a>
                            <a href="" id="json" class="foot-img"></a>
                        </aside>
                        <!-- end of #first footer segment -->
                        <aside id="creativeCommons" class="footer-segment">
                            <p>Creative Commons <a href="index.php">Amey Rupji</a><br/>
                            <a href="version.php">version d.alpha1  </a>
                            </p>
                        </aside><!-- end of #second footer segment -->
    
                </section><!-- end of footer-outer-block -->
    
            </section><!-- end of footer-area -->
        </footer>
    </div><!-- #wrapper -->
</div><!-- #wrapperPad -->
	<script type="text/javascript"> 
	var $buoop = {vs:{i:7,f:3.5,o:10.6,s:3.2,n:9}} 
	$buoop.ol = window.onload; 
	window.onload=function(){ 
	try {if ($buoop.ol) $buoop.ol();}catch (e) {} 
		var e = document.createElement("script"); 
		e.setAttribute("type", "text/javascript"); 
		e.setAttribute("src", "http://browser-update.org/update.js"); 
		document.body.appendChild(e); 
	} 
	</script> 
    
    <script type="text/javascript" src="template/js/jquery-1.7.1.min.js"></script>
    <!-- Custom Scroll bar -->
	<script type="text/javascript" src="template/js/jquery.mousewheel.js"></script>
    <script type="text/javascript" src="template/js/jquery.jscrollpane.min.js"></script>
    <script type="text/javascript" id="sourcecode">
        $(function() {
            $('.scroll-pane').jScrollPane({showArrows: true});
        });
		
    </script>
    
    <!-- Sliding menu -->
	<script type="text/javascript" src="template/js/sliding_effect.js"></script>
    
    <!-- collapsable pannels -->
    <script type='text/javascript' src="template/js/jquery.collapsible.js"></script>

    <!-- validation -->
	<script type='text/javascript' src="template/js/jquery.validate.js"></script>
    
    <!-- lightbox -->
    <script type="text/javascript" src="template/js/jquery.nyroModal.custom.js"></script>
    <!--[if IE 6]>
        <script type="text/javascript" src="jquery.nyroModal-ie6.min.js"></script>
    <![endif]-->
    
    <!-- cycle plugin -->
    <script type="text/javascript" src="template/js/jquery.cycle.lite.js"></script>
	
	<!-- Geolocation -->
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBlvouF_UlU-hQLJEWgA6jM9yPP9U3SBzk&sensor=false"></script>
    <script type="text/javascript" src="http://maps.gstatic.com/intl/en_us/mapfiles/400d/maps2.api/main.js"></script>
	
	
	<script type="text/javascript">
	//<![CDATA[
	$(document).ready(function () {
		$('.validate').show(); 
		$('.noJS').hide();
		$.collapsible(".div5050 .heading");
		$('.location').nyroModal();
	  	$('.readMore').nyroModal();
	  	$('.logo').nyroModal();
		setTimeout(function () {
			$('.msg').fadeOut(1000);
		}, 5000);
		setTimeout(function () {
			$("#social .data").load("social.html");
		}, 1000);
		$('.slideshow').cycle({
			fx: 'fade',
			speed: 'slow',
			timeout: 10000
		});
		$('#ResumeForm' ).validate({
			rules: {
				name: "required",
				email: "required",
				org: "required"
			},
			messages: {
				name: "Please enter your Name",
				email: "Please enter your Email",
				org: "Please enter your Organization"
			},
			submitHandler: function( form ) {
				// disable submit button
				$('#resumeSubmit').attr('disabled', true);
				var formData = $("#ResumeForm").serialize();
				$('#loading').css('display','block');
				// make the ajax call
				$.ajax({
					type: "POST",
					url: "resumeJSON.php",
					cache: false,
					data: formData,
					dataType:  'json',
				}).done(function(json) {
					// AJAX JSON response format: {"type" : "success", "message" : "Thank-You for submitting the form!"}
					
					$('#resumeSubmit').attr('disabled', false);
					$('#loading').css('display','none');
					$('#msg').removeClass().addClass(json.type).html(json.message).fadeIn('slow');
					if(json.type == 'success')
						$('#ResumeForm').clearForm();
				});	
			}
		});
		
		$( "#ContactForm" ).validate({
			rules: {
				nameC: "required",
				emailC: "required",
				message_subject: "required",
				message_body:"required"
			},
			messages: {
				nameC: "Please enter your Name",
				emailC: "Please enter your Email",
				message_subject: "Please enter Subject",
				message_body: "Please enter Message"
			},
			submitHandler: function( form ) {
				// disable submit button
				$('#ContactForm').attr('disabled', true);
				
				var formData = $("#ContactForm").serialize();
				$('#loading1').css('display','block');
				$.ajax({
					type: "POST",
					url: "contactJSON.php",
					cache: false,
					data: formData,
					dataType:  'json',
				}).done(function(json) {
					// AJAX JSON response format: {"type" : "success", "message" : "Thank-You for submitting the form!"}
					
					$('#contactSubmit').attr('disabled', false);
					$('#loading1').css('display','none');
					$('#msg1').removeClass().addClass(json.type).html(json.message).fadeIn('slow');
					if(json.type == 'success')
						$('#ContactForm').clearForm();
				});	
			}
		});
		
		$("#name").focus();
		$("#nameC").focus();
		//
		$("#slideMenu").toggle(
			function() {
				
				$("#notificationsBar").css('display','block');
				$("#notificationsBar").css('position','absolute');
				$("#wrapperPad").css('position','fixed');
				$("#wrapperPad").animate({marginLeft:"300px",},'slow',function(){ 
					var startX;
					var currentX;
					var dx;
					$('#wrapperPad').bind('touchstart',function(e){
						e.preventDefault();
						startX = e.originalEvent.touches[0].pageX;
					});
					$('#wrapperPad').bind('touchmove',function(e){
						e.preventDefault();
						currentX = e.originalEvent.touches[0].pageX;
						dx = startX - currentX;
						$("#wrapperPad").animate({marginLeft:300 -dx,},0,function(){ 
							/*if( dx > 290) {
								$("#page").animate({marginLeft:"0px",},300,function(){
									$("#notificationsBar").css('position','fixed');
									$("#notificationsBar").css('display','none');
								});
								$("#wrapperPad").css('position','absolute');
								$('#wrapperPad').unbind('touchstart');
								$('#wrapperPad').unbind('touchmove');
								$('#wrapperPad').unbind('touchend');
							}*/
						});
					});
					$('#wrapperPad').bind('touchend',function(e){
						e.preventDefault();
						if($('#notificationsBar').is(':hidden'))
						{
							$('#wrapperPad').unbind('touchstart');
							$('#wrapperPad').unbind('touchmove');
							$('#wrapperPad').unbind('touchend');
						}
						else
						{	 
						
							$(".fb-activity").css("display","none");
							$("#wrapperPad").animate({marginLeft:300 -dx,},0,function(){ 
								if( dx < 100) {
									$("#wrapperPad").animate({marginLeft:"300px",},300,function(){ });
								}
								else {
									$("#wrapperPad").animate({marginLeft:"0px",},300,function(){ 
										$("#notificationsBar").css('position','fixed');
										$("#notificationsBar").css('display','none');
										$("#wrapperPad").css('position','absolute');
										$('#wrapperPad').unbind('touchstart');
										$('#wrapperPad').unbind('touchmove');
										$('#wrapperPad').unbind('touchend');
									});
								}
							});
						}
						
					});
					$(".fb-activity").css("display","block");
				});
				
			},
			function() {
				$(".fb-activity").css("display","none");
				$("#wrapperPad").animate({marginLeft:"0px",},300,function(){
					$("#notificationsBar").css('position','fixed');
					$("#notificationsBar").css('display','none');
				});
				$("#wrapperPad").css('position','absolute');
			}
		);
		// get the location of user
		getLocation();
		$("#notificationsBar").load("sideMenu.html");
	});
	
	function getLocation()
	{
		if (navigator.geolocation)
		{
			navigator.geolocation.getCurrentPosition( function (position) {
				$('.locationName').css('display','inline');
				$('.locationName .text').html('Reading Device Location...');
			
				$('.location').removeClass('off').addClass('on');
				$('.locationName .text').html('Updating Location...');
				
				var lat = position.coords.latitude;
				var lng = position.coords.longitude;
				
				geocoder = new google.maps.Geocoder();
				var latlng = new google.maps.LatLng(lat, lng);
				/*var myOptions = {
				  zoom: 8,
				  center: latlng,
				  mapTypeId: google.maps.MapTypeId.ROADMAP
				}
				map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);*/
	
				geocoder.geocode( { 'latLng': latlng}, function(results, status) {
				  if (status == google.maps.GeocoderStatus.OK) {
					/*map.setCenter(results[0].geometry.location);
					var marker = new google.maps.Marker({
						map: map,
						position: results[0].geometry.location
					});*/
					$('.locationName img').css('display','none');
					$('.locationName .text').html(results[3].formatted_address);
				  } else {
					alert("Geocode was not successful for the following reason: " + status);
				  }
				});
			});
		}
		else
		{
			$('.locationName img').css('display','none');
			$('.locationName .text').html('');
		}
	}
	//]]> 
	</script>
</body>
</html>
