<?php
// Start the session
session_start();

// Check if the user is not logged in, redirect to login page
if (!isset($_SESSION['user_id'])) {
    header('Location: /WEBPROG/Login Form/login.php');
    exit();
}

// Include database connection file if needed
// require 'database.php';

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="style.css" />
	<title>Angelo Ramos</title>
	<link rel="shortcut icon" type="x-icon" href="mc.jpg">
  </head>
  <body>
    <div class="about-me">
      <div class="frame">
        <div class="navigation">
          <p class="angelo-r"><span class="text-wrapper">Angelo </span> <span class="span">R.</span></p>
          <div class="navbar">
            <div class="div"><a href="/WEBPROG/Personal/index.php" class="div">HOME</a></div>
            <div class="div"><a href="/WEBPROG/Personal/portfolio.php" class="home">PORTFOLIO</a></div>
            <div class="div"><a href="/WEBPROG/Personal/contact.php" class="div">CONTACT</a></div>
            <div class="div">
            <a href="/WEBPROG/Login Form/logout.php" class="div">Logout</a>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="herosection">
        <div class="frame-2">
          <div class="frame-3">
            <div class="text-wrapper-2">Hello, Welcome!</div>
            <div class="frame-4">
              <div class="text-wrapper-3">I m Angelo Ramos</div>
              <p class="p">
                I am a Freelancer with Over 5+ Years of Experience <br/>specializing as an E-Commerce Manager,
                Executive<br/>Assistant, and Social Media Manager
              </p>
            </div>
            <div class="div-wrapper"><div class="text-wrapper-4">Contact Me</div></div>
          </div>
          <img class="rectangle" src="profile.jpg" />
        </div>
      </div>
      <div class="aboutme">
        <div class="about">
          <div class="overlap-group">
            <div class="rectangle-2"></div>
            <img class="img" src="picme.jpg" />
          </div>
        </div>
        <div class="frame-5">
          <p class="div-2"><span class="text-wrapper-5">About </span> <span class="span">Me</span></p>
          <div class="frame-6">
            <div class="frame-7">
              <p class="save-time-money-and">
                Save time, money, and even grow them in turn. I’ve worked with companies and individual proprietors<br />which
                I became a part in growing these sites to over +50,000 following whilst providing Assistant Services<br />at
                the same time.
              </p>
              <p class="p">
                Work with me and never worry about falling behind your goals. Or the pile of grunt work you would rather
                <br />spend your time focusing on the more important aspects of your business.
              </p>
            </div>
            <div class="buttondl">
					<button class="buttondl" onclick="window.open('CV.pdf')">
						Download CV
					</button>
				</div>
          </div>
        </div>
      </div>
      <div class="myservice">
        <div class="frame-9">
          <div class="frame-3">
            <p class="div-2"><span class="span">Services </span> <span class="text-wrapper-6">I Offer</span></p>
          </div>
          <div class="frame-10">
            <div class="frame-wrapper">
              <div class="frame-11">
                <img class="frame-12" src="megaphone.png" />
                <div class="frame-13">
                  <div class="text-wrapper-7">Social Media<br />Management</div>
                  <p class="text-wrapper-8">
                    I specialize in crafting engaging content, scheduling posts, and fostering audience interaction
                    across platforms. With a keen eye for analytics, I refine strategies for optimal online presence. As
                    I handle your social media, you can focus on running your business while I elevate your brand&#39;s
                    digital profile.
                  </p>
                </div>
              </div>
            </div>
            <div class="frame-wrapper">
              <div class="frame-11">
                <img class="frame-14" src="ecommerce.png" />
                <div class="frame-13">
                  <div class="text-wrapper-7">E-Commerce<br />Management</div>
                  <p class="text-wrapper-8">
                    I am dedicated to ensuring a seamless and profitable e-commerce experience for your business. My
                    skill spans strategic product listings, meticulous inventory management, customer chat response, and
                    the implementation of targeted marketing strategies.
                  </p>
                </div>
              </div>
            </div>
            <div class="frame-wrapper">
              <div class="frame-11">
                <img class="frame-12" src="cboard.png" />
                <div class="frame-13">
                  <div class="text-wrapper-7">Assistant <br />Services</div>
                  <p class="text-wrapper-8">
                    My expertise includes managing calendars, coordinating meetings, and handling administrative tasks
                    with precision. I excel in organizing and streamlining workflows, ensuring efficient operations for
                    executives and entrepreneurs. I enhance your productivity, allowing you to focus on strategic
                    priorities.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->

      <div class="myportfolio">
       <div class="frame-15">
          <p class="div-3"><span class="text-wrapper-5">My </span> <span class="span">Portfolio</span></p>
          <p class="text-wrapper-9">These are some of the businesses I have worked with and propelled to grow.</p>
        </div>
        <div class="frame-16">
          <img class="rectangle-3" src="lnpost2.png" />
          <div class="frame-17">
            <div class="rectangle-wrapper">
              <img class="rectangle-4" src="lnpost1.png" />
            </div>
          </div>
        </div>
        <img class="rectangle-5" src="shopee.png" />
		
        <img class="rectangle-6" src="fb.png" />
      </div> 
      <div class="experience">
        <div class="experience-2">
          <div class="frame-3">
            <div class="frame-4">
              <p class="my-experiences">
                <span class="text-wrapper-5">My&nbsp;&nbsp;</span> <span class="span">Experiences</span>
              </p>
            </div>
            <p class="text-wrapper-10">
              These are some of the most notable companies I have worked for and assisted in managing in various ways
              over the years.
            </p>
          </div>
          <div class="frame-18">
            <div class="frame-wrapper">
              <div class="frame-4">
                <div class="text-wrapper-11">2019-2021</div>
                <div class="frame-4">
                  <div class="frame-19">
                    <div class="text-wrapper-12">E-Commerce Manager</div>
                    <div class="text-wrapper-13">Alamid Online Shop (Shopee)</div>
                  </div>
                  <div class="frame-20">
                    <p class="text-wrapper-14">
                      I helped manage and grow Alamid Online Shop on Shopee to its +43,000 list of followers and managed the entire business processes involved in the site.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="frame-21">
              <div class="frame-4">
                <div class="text-wrapper-11">2020-2022</div>
                <div class="frame-22">
                  <div class="frame-19">
                    <div class="text-wrapper-15">E-Commerce/Social Media</div>
                    <div class="text-wrapper-13">Conie &amp; Co. (Facebook)</div>
                  </div>
                  <p class="there-are-many">         
						I managed and created collaterals for posts, catered to user responses, and set up the company's e-commerce profile				
                  </p>
                </div>
              </div>
            </div>
            <div class="frame-21">
              <div class="frame-4">
                <div class="text-wrapper-11">2021-2023</div>
                <div class="frame-4">
                  <div class="frame-19">
                    <div class="text-wrapper-12">Executive Assistant</div>
                    <div class="text-wrapper-13">E-agricom Inc., Infinivan Inc.</div>
                  </div>
                  <div class="frame-20">
                    <p class="text-wrapper-14">
                      I have 3 years of combined experience working as an Executive Assistant and Sales Assistant
                      respectively for both the companies above.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--<div class="contact">
        <div class="frame-15"> 
          <div class="work-with-me-wrapper">
            <p class="div-3"><span class="text-wrapper-5">Work With </span> <span class="span">Me</span></p>
          </div>
        </div>
        <div class="frame-23">
          <div class="frame-22">
            <p class="phone">
              <span class="text-wrapper-16">Phone _ </span> <span class="text-wrapper-5">+63 999 999 9999</span>
            </p>
            <p class="e-mail">
              <span class="text-wrapper-16">E mail _ </span>
              <span class="text-wrapper-5">roldanangelo2003@gmail.com</span>
            </p>
          </div>
          <div class="frame-24">
            <div class="frame-25">
              <div class="text-wrapper-17">Facebook</div>
              <img class="frame-26" src="fblogo.png" />
            </div>
          </div>
          <div class="text-wrapper-18">LinkedIn</div>
          <img class="frame-26" src="ldnlogo.png" />
        </div>
      </div>
      <div class="frame-27">
        <div class="frame-15">
          <p class="angelo-r-2"><span class="text-wrapper">Angelo </span> <span class="span">R.</span></p>
          <p class="text-wrapper-19">Saving your time and growing your money since 2019.</p>
        </div>
      </div>-->
    </div>
  </body>
  </html>