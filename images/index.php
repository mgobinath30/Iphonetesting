<!doctype html>
<html lang="en"><head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aphelion-P2P Digital Trading Platform</title>
    
    
    <!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/styles-v2.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		
	<!-- <?php include 'slider/embed.php'; ?> -->
    <link rel="stylesheet" href="compiled/flipclock.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="compiled/flipclock.js"></script>	
		
  </head>
  
  <body>
  
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) 
	<script src="js/jquery-1.11.3.min.js"></script>
	--> 
	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="js/bootstrap.js"></script>
  	<?php RevSliderEmbedder::headIncludes(); ?>
  	<div class="container">
  	
  	<!-- MAIN NAVIGATION -->
  	
	  <nav class="navbar navbar-default navbar-fixed-top" id="navbar-top">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
		      <a class="navbar-brand" href="#"><img src="images/logo-small-navbar-200px.png" id="brandlogo" class="img-responsive" alt="APHELION"></a></div>
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    
	      
	      <div class="collapse navbar-collapse" id="topFixedNavbar1">
		      <ul class="nav navbar-nav">
	          </ul>
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="#about">About Aphelion</a></li>
		        <li><a href="#howitworks">How It Works</a></li>
		        <li><a href="#">Road Map</a></li>
                <li><a href="#team">Team</a></li>
                <li><a href="#">Sign Up</a></li>
                <li><a href="#">Log In</a></li>
	          </ul>
	        </div>
		    <!-- /.navbar-collapse -->
	    </div>
		  <!-- /.container-fluid -->
	  </nav> 
  <picture>
<!-- temp header -->
  <div id="temp-header">
  </div>
<div class="row container" id="prpl-btn">
<h3>Countdown to Crowdsale Launch: Nov 15, 2017 0:00:00 GMT</h3>
</div>
<div class="clock" >

	<div class="message"></div>

	<script type="text/javascript">
			var clock;

			$(document).ready(function() {

				// Grab the current date
				var currentDate = new Date();

				// Set some date in the future. In this case, it's always Jan 1
				var futureDate  = new Date(2017, 11, 14, 17, 0, 0, 0);

				// Calculate the difference in seconds between the future and current date
				var diff = futureDate.getTime() / 1000 - currentDate.getTime() / 1000;

				// Instantiate a coutdown FlipClock
				clock = new FlipClock($('.clock'), diff, {
          clockFace: 'DailyCounter',
          countdown: true
        });
			});
		</script>
		</div>
	
<!-- MAIN SLIDER  
    <div class="row container" id="top-slider">
    		<?php // RevSliderEmbedder::putRevSlider('homepage-main-slider'); ?>
    </div>
   --> 
   
 <!-- DL Whitepaper -->
    
    <div class="row container" id="prpl-btn">
    		<a class="prpl-btn" href="/docs/aphelion-whitepaper.pdf" download>DOWNLOAD APHLEION WHITEPAPER</a>
    </div>
 <!-- Presale Modal -->

  <div class="row container" id="prpl-btn">
  <h3>Presale Private Offer is Going on Now!</h3>
   <a class="prpl-btn" href="#openModal">Apply for Presale Private Offer</a>
   </div>

<div id="openModal" class="modalDialog">
<div>
		<a href="#close" title="Close" class="close">X</a>
  <form id="contact" action="" method="post">
    <h4>Apply for Presale Opportunity</h4>
    <fieldset>
      <input placeholder="First Name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Last Name" type="text" tabindex="2" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Email Address" type="email" tabindex="3" required>
    </fieldset>
    <fieldset>
             <label>Contribution Amount (USD Equivalent)</label>
             <div class="styled-select slate">
             <select id = "myList" tabindex="4">
               <option value = "5000">5,000</option>
               <option value = "10000">10,000</option>
               <option value = "25000">25,000</option>
               <option value = "50000">50,000</option>
               <option value = "100000">100,000</option>
               <option value = "250000">250,000</option>
               <option value = "500000">500,000</option>
               <option value = "750000">750,000</option>
               <option value = "1000000">1,000,000</option>
               <option value = "2000000">2,000,000</option>
               <option value = "Other">Other</option>
             </select>
          </div>
       </fieldset>
       <fieldset>
             <label>Currency</label>
             <div class="styled-select slate">
             <select id = "myList" tabindex="4">
               <option value = "BTC">Bitcoin</option>
               <option value = "ETH">Ethereum</option>
               <option value = "NEO">NEO</option>
               <option value = "Other">Other</option>
             </select>
          </div>
       </fieldset>
    <fieldset>
      <textarea placeholder="Type additional info here...." tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button class="prpl-btn" "name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
	</div>
	
</div>     
<!-- Three buckets -->
         
<div class="container">
<div class="row" id="bucket-bar">
  <div class="col-lg-4 col-sm-4" id="three-buckets">
    <div id="bucket-inner">
      <h2>Aphelion DApp</h2>
      <p>Aphelion is a NEO blockchain decentralized application that allows members to seamlessly send and receive digital assets.</p>
      <span class="align-bottom"><button class="bucket-cta-btn btn-block btn-default">Get DApp</button></span>
    </div>
  </div>
  <div class="col-lg-4 col-sm-4" id="three-buckets">
    <div id="bucket-inner">
      <h2>APH White Paper</h2>
      <p>Read the details behind our mission, vision, concept and technology</p>
      <span class="align-bottom"><button class="bucket-cta-btn btn-block btn-default">DOWNLOAD</button></span>
    </div>
  </div>
  <div class="col-lg-4 col-sm-4" id="three-buckets">
    <div id="bucket-inner">
      <h2>Get APH Coin</h2>
      <p>Join us in bringing blockchain to the next level</p>
      <form><br><br><button class="btn-group-lg">Contribute Now</button></form>
    </div>
  </div>
</div>
</div>
    
        <!-- Video SLIDER 
    
    <div class="row container" id="top-slider">
    		<?php /*?><?php RevSliderEmbedder::putRevSlider('overview-video-slider'); ?><?php */?>
    </div>
    -->
     
      <!-- Contribute Slider -->
      <!--
     <div class="container" id=contribute-slider>
     	<?php /*?><?php RevSliderEmbedder::putRevSlider('contribute-slider'); ?><?php */?>
     </div>
     -->
      <!-- Notify by Email capture-->
      <div class="row" id="notify-capture">
      	<div id="notify-capture-inner">
      	<h2>Join Aphelion Mailing List</h2>
      	<form><input type="email" class="form" size="45" placeholder="Enter email" ><button class="btn-group-lg block">Get Updates</button></form>
      	</div>
      </div>

      <!-- About Section-->
      
    <div class="row container-fluid" id="about" name="about">
      	<span class="col-sm-4">
      	<picture>
  <img src="images/aphelion-about-logo.png" alt="Aphelion" style="width:auto;">
</picture>
      	</span>
      	<span class="col-sm-8 text-justify"><h3>About Aphelion:</h3>Aiming to be one of the first NEO tokens, Aphelion is building a next generation, tokenized, distribution mechanism to solve for the challenges plaguing the centralized cryptocurrency exchanges and trading platforms.   This protocol will allow for a groundbreaking peer-to-peer smart contract called a Distributed Exchange Asset Ledger (DEAL).  An APH DEAL fuels the Aphelion DApp built on the NEO blockchain that is open source, supports multi programming languages, transacts quickly and frees DEAL makers from: rules, latency and security breaches.

APH tokens represent a new breed of digital asset exchange tool.  The breakthrough advancement is creating the protocol powering the truly decentralized exchanges directly between users as a distributed ledger DApp.  Aphelion’s own Distributed Exchange Asset Ledger (DEAL) is advancing p2p blockchain to the next level and finally into the total control of the users.

Aphelion tokens are an escrow utility. They are the digital smart contract mechanism powering the DEAL.
</span>
      </div>
 <!-- Why Neo -->     
<div class="row container-fluid" id="whyneo" name="whyneo">
      	<span class="col-sm-4"><picture>
  <img src="images/neo-logo.png" alt="Aphelion" style="width:auto;">
</picture>
</span>
      	<span class="col-sm-8 text-justify"><h3>Why NEO?</h3>“NEO supports faster development and deployment of smart contracts and projects, as it enables developers to build on
      	programming languages already familiar with them. We provide various advanced languages in the form of compiler,” says Da Hongfei (founder).
      	“Besides .Net and Java, we will support Python and Go in the future which can cover more than 90 percent of developers.
      	Compared with Ethereum, development has more smooth learning curve and shorter learning circle, allowing for fast introduction of projects.”
      	</span>
<!-- Comparison Chart -->
<table style="width:100%">
  <tr>
    <th></th>
    <th>Efficiency</th> 
    <th>Secure Contracts</th>
    <th>Dev Language(s)</th>
    <th>Scalability</th>
  </tr>
  <tr>
    <td><picture>
  <img src="images/bitcoin-logo.png" alt="Bitcoin Logo" style="width:auto;">
</picture></td>
    <td>POW on ASIC machines uses vast amounts of energy</td> 
    <td>Pseudo-anonymity creates lack of integrity in transactions</td>
    <td>Only C++</td> 
    <td>Peak transaction per second is limited to 3-4</td>
  </tr>
  <tr>
    <td><picture>
  <img src="images/ethereum-logo.png" alt="Ethereum Logo" style="width:auto;">
</picture></td>
      <td>GPU miners collectively using more energy than an entire country<sm>*</sm></td> 
    <td>Vulnerable contract code prone to hacker attacks<sm>**</sm></td>
    <td>Only Solidity</td> 
    <td>Current peak transaction per second is  20</td>
  </tr>
  <tr>
    <td><picture>
  <img src="images/neo-logo-sm.png" alt="Neo Logo" style="width:auto;">
</picture></td>
      <td>dBFT ensures finality through highly efficient method</td> 
    <td>Integrated digital identity allows for real world applications</td>
    <td>.Net, Java, Python and Go coming which can cover 90% of developers</td> 
    <td>
Up to 10,000 transactions per second
</td>
  </tr>
</table>
      </div>       
  
  
  
  <!-- Centralized Exchanges -->     
<div class="row container-fluid" id="whyneo" name="whyneo">
      	
      	<span class="col-sm-8 text-justify"><h3>Centralized Exchanges</h3>There is widespread use of several cryptocurrency trading platforms and exchanges.
      	 They are the clear mechanism for p2p trading, but they are not decentralized. 
      	 They act as intermediaries between traders initiating trades and this poses a number of inherent challenges. 
      	 First, exchanges set the rules for who can trade, what can be traded and when.  There are countless stories of users accounts and even initiated trades being a 
      	 deleted or frozen without explanation.   We’ve also had numerous security breaches resulting in hundreds of millions (USD) being stolen.  
      	 On top of these inherent challenges the exchanges are facing there is a complete lack of support facing many users today.  
      	 These so-called decentralized exchanges are not decentralized at all, in fact quite the opposite. 
</span>
<!-- Comparison Chart -->
<table style="width:100%">
  <tr>
    <th></th>
    <th>Decentralized Exchanges</th> 
    <th>Centralized Exchanges</th>
  </tr>
  <tr>
    <td>Equanimity between buyer & seller </td>
    <td>
    <picture>
  <img src="images/check-box.png" alt="Check Box" style="width:auto;">
</picture>
</td> 
    <td></td>
    
  </tr>
  <tr>
    <td>Loss of funds from exchange shutdown</td>
      <td></td> 
    <td><picture>
  <img src="images/check-box.png" alt="Check Box" style="width:auto;">
</picture></td>
  </tr>
  <tr>
    <td>Potential of frozen accounts</td>
      <td></td> 
    <td><picture>
  <img src="images/check-box.png" alt="Check Box" style="width:auto;">
</picture></td> 
  </tr>
  <tr>
  <td>Income for exchange from transaction</td>
  <td></td>
  <td><picture>
  <img src="images/check-box.png" alt="Check Box" style="width:auto;">
</picture></td>
</tr>
<tr>
    <td>Trading security risks</td>
  <td></td>
  <td><picture>
  <img src="images/check-box.png" alt="Check Box" style="width:auto;">
</picture></td>
</tr>
<tr>
    <td>Deposits required</td>
  <td></td>
  <td><picture>
  <img src="images/check-box.png" alt="Check Box" style="width:auto;">
</picture></td>
</tr>
</table>
      </div>  
  
      
       <!-- Team Members Slider -->
      
     <section id="team" class="text-center section">
  <div class="container">
    <h2><span class="highlight_secondary">Aphelion Team</span></h2>

    <h5>
      Our people are our greatest asset and biggest differentiator.<br>They also believe in having a lot of fun along the way.
    </h5>

    <div class="hr big_size_hr invisible_hr">
        <i class="fa fa-"></i>
    </div>
    
    <div class="hr invisible_hr">
        <i class="fa fa-"></i>
    </div>

    <div class="row">
      <div class="col-md-2 col-sm-4 col-xs-6" id="team"><!-- add col-md-offset-1 for 5 members -->
        <div class="team">
          <div class="team-image">
            <a href="#">
              <img src="https://dummyimage.com/450x450/d9dadc/1c1f24.png&text=+" class="img-circle img-responsive">
            </a>
            <div class="team-links">
              <div class="team-links-list">
                 <a href="#" target="_blank"><i class="fa fa-linkedin fa-1x " style="min-width: 10px;"></i></a>
              </div><!-- /.team-links-list -->
            </div><!-- /.team-links -->
          </div><!-- /.team-image -->
          <div class="team-content">
            <div class="team-name"><h5>Adi Ben-Air</h5></div>
            <div class="team-role">Blockchain Engineer</div>
            <div class="team-description"></div>
          </div><!-- /.team-content -->
        </div><!-- /.team -->
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6">
        <div class="team">
          <div class="team-image">
            <a href="#">
              <img src="https://dummyimage.com/450x450/d9dadc/1c1f24.png&text=+" class="img-circle img-responsive">
            </a>
            <div class="team-links">
              <div class="team-links-list">
                 <a href="#" target="_blank"><i class="fa fa-linkedin fa-1x " style="min-width: 10px;"></i></a>
              </div><!-- /.team-links-list -->
            </div><!-- /.team-links -->
          </div><!-- /.team-image -->
          <div class="team-content">
            <div class="team-name"><h5>Colan Sewell</h5></div>
            <div class="team-role">Lead Analyst</div>
            <div class="team-description"></div>
          </div><!-- /.team-content -->
        </div><!-- /.team -->
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6">
        <div class="team">
          <div class="team-image">
            <a href="#">
              <img src="https://dummyimage.com/450x450/d9dadc/1c1f24.png&text=+" class="img-circle img-responsive">
            </a>
            <div class="team-links">
              <div class="team-links-list">
                 <a href="#" target="_blank"><i class="fa fa-linkedin fa-1x " style="min-width: 10px;"></i></a>
              </div><!-- /.team-links-list -->
            </div><!-- /.team-links -->
          </div><!-- /.team-image -->
          <div class="team-content">
            <div class="team-name"><h5>Andrew Morrell</h5></div>
            <div class="team-role">Lead Software Engineer</div>
            <div class="team-description"></div>
          </div><!-- /.team-content -->
        </div><!-- /.team -->
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6">
        <div class="team">
          <div class="team-image">
            <a href="#">
              <img src="https://dummyimage.com/450x450/d9dadc/1c1f24.png&text=+" class="img-circle img-responsive">
            </a>
            <div class="team-links">
              <div class="team-links-list">
                 <a href="#" target="_blank"><i class="fa fa-linkedin fa-1x " style="min-width: 10px;"></i></a>
              </div><!-- /.team-links-list -->
            </div><!-- /.team-links -->
          </div><!-- /.team-image -->
          <div class="team-content">
            <div class="team-name"><h5>Joe Debuzna</h5></div>
            <div class="team-role">Product Advisor</div>
            <div class="team-description"></div>
          </div><!-- /.team-content -->
        </div><!-- /.team -->
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6">
        <div class="team">
          <div class="team-image">
            <a href="#">
              <img src="https://dummyimage.com/450x450/d9dadc/1c1f24.png&text=+" class="img-circle img-responsive">
            </a>
            <div class="team-links">
              <div class="team-links-list">
                 <a href="#" target="_blank"><i class="fa fa-linkedin fa-1x " style="min-width: 10px;"></i></a>
              </div><!-- /.team-links-list -->
            </div><!-- /.team-links -->
          </div><!-- /.team-image -->
          <div class="team-content">
            <div class="team-name"><h5>Shawn Owen</h5></div>
            <div class="team-role">ICO Advisor</div>
            <div class="team-description"></div>
          </div><!-- /.team-content -->
        </div><!-- /.team -->
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6">
        <div class="team">
          <div class="team-image">
            <a href="#">
              <img src="https://dummyimage.com/450x450/d9dadc/1c1f24.png&text=+" class="img-circle img-responsive">
            </a>
            <div class="team-links">
              <div class="team-links-list">
                 <a href="#" target="_blank"><i class="fa fa-linkedin fa-1x " style="min-width: 10px;"></i></a>
              </div><!-- /.team-links-list -->
            </div><!-- /.team-links -->
          </div><!-- /.team-image -->
          <div class="team-content">
            <div class="team-name"><h5>Joshua Finkleman</h5></div>
            <div class="team-role">ICO Advisor</div>
            <div class="team-description"></div>
          </div><!-- /.team-content -->
        </div><!-- /.team -->
      </div>
      </div>
      </div>
      </div>
    </div>

    <div class="hr big_size_hr invisible_hr">
        <i class="fa fa-"></i>
    </div>

  </div><!-- /.container -->
</section>
      
     <!-- Footer Buckets -->
         
<div class="container">
<div class="row" id="footer-buckets">
  <div class="col-lg-4 col-sm-4" id="three-footer-buckets">
    <div id="">
      <h4>CONTACT US</h4>
      <p><a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> info@aphelioncoin.com</a></p>
    </div>
  </div>
  <div class="col-lg-4 col-sm-4" id="three-footer-buckets">
    <div id="">
      <h4>FOLLOW US</h4>
      	<i class="fa fa-facebook fa-2x " style="min-width: 40px;"></i>
		<i class="fa fa-linkedin fa-2x " style="min-width: 40px;"></i>
   		<i class="fa fa-twitter fa-2x " style="min-width: 40px;"></i> 
    </div>
  </div>
  <div class="col-lg-4 col-sm-4" id="three-footer-buckets">
    <div id="">
      
    </div>
  </div>
</div>
</div>
 	
 	<!-- Footer Bar -->
<div class="container"  id="footer-bar">
	<div class="col-md-2"><a href="#">Disclaimers | Privacy</a></div>
	<div class="col-md-8 text-center">&copy;2017 Aphelion Coin - P2P Digital Asset Distribution - All Rights Reserved</div>
 	<div class="col-md-2"><a href="#">Site Map</a></div>
</div>
  	
</div>
</body>
</html>