<!doctype html>
<html lang="en">
<head>
<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-39288670-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-39288670-2');
</script>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Aphelion-P2P Digital Trading Platform</title>

<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/styles-v2.css" rel="stylesheet">
<link href="css/updates.css" rel="stylesheet">
<link href="css/stacktable.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">
  var CaptchaCallback = function() {
  grecaptcha.render('RecaptchaField1', {'sitekey' : '6LdmbDMUAAAAAGqwHGSpKXVqGNwlq4hut9B22AbC'});
  grecaptcha.render('RecaptchaField2', {'sitekey' : '6LdmbDMUAAAAAGqwHGSpKXVqGNwlq4hut9B22AbC'});
  };
</script>
<script src="https://www.google.com/recaptcha/api.js?onload=CaptchaCallback&render=explicit" async defer></script>
</head>

<body>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) 
	<script src="js/jquery-1.11.3.min.js"></script>
	--> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script> 
<script src="js/countdown.js"></script>
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
        <li><a href="#whyneo">Why NEO</a></li>
        <li><a href="/docs/aphelion-whitepaper.pdf">Whitepaper</a></li>
        <li><a href="#openModal">Pre-Sale</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<picture>
<!-- temp header -->
<div id="temp-header">
  <link href="https://fonts.googleapis.com/css?family=Saira+Condensed:700" rel="stylesheet">
  <img src="./images/only-logo.png" style="margin-top: 10%; max-width: 100%;">
  <div class="slider-text1">World's First Decentralized P2P Trading Platform</div>
  <br/>
  <br/>
  <div class="slider-text2">SOLVING THE LIMITS</div>
  <br/>
  <div class="slider-text3">OF CRYPTO EXCHANGES</div>
</div>
<!-- Video -->
<style>
.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; height: auto; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
</style>
<div class="embed-container topbrdr">
  <iframe src="https://player.vimeo.com/video/236696722" frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
</div>
<div class="row container" id="countdown">
  <h3>Countdown to Crowdsale Launch: <span style="white-space: nowrap;">Nov 15, 2017 0:00:00 GMT</span></h3>
  <div id="clockdiv">
    <div> <span class="days"></span>
      <div class="smalltext">Days</div>
    </div>
    <div> <span class="hours"></span>
      <div class="smalltext">Hr</div>
    </div>
    <div> <span class="minutes"></span>
      <div class="smalltext">Min</div>
    </div>
    <div> <span class="seconds"></span>
      <div class="smalltext">Sec</div>
    </div>
  </div>
</div>
<script>
	function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  var days = Math.floor(t / (1000 * 60 * 60 * 24));
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);

    daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

var deadline = new Date(Date.parse(new Date("Nov 15 2017 11:51:36 GMT-0000")) );
initializeClock('clockdiv', deadline);
	</script> 

<!-- DL Whitepaper -->
<div class="row container" id="prpl-btn"> <a class="prpl-btn" href="/docs/aphelion-whitepaper.pdf" download>Download Aphelion Whitepaper</a> </div>
<!-- Presale Modal -->

<div class="row container" id="prpl-btn">
  <h3>Presale Private Offer is Going on Now!</h3>
  <a class="prpl-btn" href="#openModal">Apply for Presale Private Offer</a> </div>
<div id="openModal" class="modalDialog">
  <div style="max-width: 99%!important; border: solid #b34fff 1px"> <a href="#close" title="Close" class="close">X</a>
    <form id="contact" action="#" method="post">
      <h4>Apply for Presale Opportunity</h4>
      <p style="font-style: italic;font-size: 10px;">The offer is NOT available to citizens of the US. Minimum contribution amount to qualify for the Pre-Sale is the equivalent of $5,000 USD. Smaller amounts will be accepted on and after November 15, 2017</p>
      <fieldset>
        <input placeholder="First Name" type="text" tabindex="1" name="firstName" required autofocus>
      </fieldset>
      <fieldset>
        <input placeholder="Last Name" type="text" tabindex="2" name="lastName" required autofocus>
      </fieldset>
      <fieldset>
        <input placeholder="Email Address" type="email" tabindex="3" name="email" required>
      </fieldset>
      <fieldset>
        <label>Contribution Amount (USD Equivalent)</label>
        <div class="styled-select slate">
          <select id="myList" tabindex="4" name="contribution">
            <option value="">Select</option>
            <option value="5000">5,000</option>
            <option value="10000">10,000</option>
            <option value="25000">25,000</option>
            <option value="50000">50,000</option>
            <option value="100000">100,000</option>
            <option value="250000">250,000</option>
            <option value="500000">500,000</option>
            <option value="750000">750,000</option>
            <option value="1000000">1,000,000</option>
            <option value="2000000">2,000,000</option>
            <option value="Other">Other</option>
          </select>
        </div>
      </fieldset>
      <fieldset>
        <label>Currency</label>
        <div class="styled-select slate">
          <select id="myList-2" tabindex="4" name="currency">
            <option value="">Select</option>
            <option value="NEO">NEO</option>
            <option value="GAS">NEO GAS</option>
            <option value="BTC">Bitcoin</option>
            <option value="ETH">Ethereum</option>
            <option value="Other">Other</option>
          </select>
        </div>
      </fieldset>
      <fieldset>
        <textarea placeholder="Type additional info here...." tabindex="5" name="textMessage"></textarea>
      </fieldset>
      <fieldset>
        <input type="checkbox" name="agreement" id="agreement" style="vertical-align: top;">
        &nbsp;&nbsp;
        <label style="width: 80%;" for="agreement">I am NOT a citizen of the US.</label>
      </fieldset>
      <fieldset>
        <div id="RecaptchaField1"></div>
      </fieldset>
      <fieldset>
        <button class="prpl-btn" name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
      </fieldset>
    </form>
    <p style="color:red;display:none;" id="contact-error"></p>
  </div>
</div>

<!-- Login Screen -->
<div id="openModal-login" class="modalDialog">
  <div style="max-width: 99%!important"> <a href="#close" title="Close" class="close">X</a>
    <form id="login" action="" method="post">
      <h4>Access Control</h4>
      <fieldset>
        <input placeholder="Email Address" type="email" tabindex="1" required>
      </fieldset>
      <fieldset>
        <input placeholder="Password" type="password" tabindex="2" required>
      </fieldset>
      <fieldset>
        <button class="prpl-btn flt-right" name="submit" type="submit" id="login-submit" data-submit="...Sending">Submit</button>
      </fieldset>
      <a href="#openModal-forgot">Forgot Password?</a>
    </form>
  </div>
</div>

<!-- Register Screen -->
<div id="openModal-reg" class="modalDialog">
  <div style="max-width: 99%!important"> <a href="#close" title="Close" class="close">X</a>
    <form id="reg" action="" method="post">
      <h4>Register</h4>
      <fieldset>
        <input placeholder="Email Address" type="email" tabindex="1" required>
      </fieldset>
      <fieldset>
        <input placeholder="Password" type="password" tabindex="2" required>
      </fieldset>
      <fieldset>
        <input placeholder="Verify" type="password" tabindex="3" required>
      </fieldset>
      <fieldset>
        <button class="prpl-btn flt-right" name="submit" type="submit" id="reg-submit" data-submit="...Sending">Submit</button>
      </fieldset>
      <a href="#openModal-forgot">Forgot Password?</a>
    </form>
  </div>
</div>

<!-- Forgot Password -->
<div id="openModal-forgot" class="modalDialog">
  <div style="max-width: 99%!important"> <a href="#close" title="Close" class="close">X</a>
    <form id="reg" action="" method="post">
      <h4>Forgot Password?</h4>
      Enter your email address and we will send you reset instructions.
      <fieldset>
        <input placeholder="Email Address" type="email" tabindex="1" required>
      </fieldset>
      <fieldset>
        <button class="prpl-btn flt-right" name="submit" type="submit" id="forgot-submit" data-submit="...Sending">Submit</button>
      </fieldset>
    </form>
  </div>
</div>

<!-- Thank You -->
<div id="openModal-thanks" class="modalDialog">
  <div style="max-width: 99%!important"> <a href="#close" title="Close" class="close">X</a>
    <form id="reg" action="" method="">
      <h4>Thank You!</h4>
      Thank you for your interest in Aphelion. <br>
      A member of the team will be
      in touch within 24 hours.
    </form>
  </div>
</div>

<!-- ETH Deposit -->
<div id="ethdeposit" class="modalDialog modalDeposit">
  <div style="max-width: 99%!important"> <a href="#close" title="Close" class="close">X</a>
    <form id="reg" action="" method="">
      <h4>ETH Deposit Address</h4>
0xFBc0F99C4A1A5cc29cBE63149A49af53A7E7Ea9A
    </form>
  </div>
</div>
<div id="eth2deposit" class="modalDialog modalDeposit">
  <div style="max-width: 99%!important"> <a href="#close" title="Close" class="close">X</a>
    <form id="reg" action="" method="">
      <h4>ETH Deposit Address</h4>
0x72454AFc75834AB95F0958b9B818058B7E425BF6
    </form>
  </div>
</div>

<!-- BTC Deposit -->
<div id="btcdeposit" class="modalDialog modalDeposit">
  <div style="max-width: 99%!important"> <a href="#close" title="Close" class="close">X</a>
    <form id="reg" action="" method="">
      <h4>BTC Deposit Address</h4>
3FT8xMkqC1sgtYK1Nh5k7iVexJxAP6VWcx
    </form>
  </div>
</div>
<div id="btc2deposit" class="modalDialog modalDeposit">
  <div style="max-width: 99%!important"> <a href="#close" title="Close" class="close">X</a>
    <form id="reg" action="" method="">
      <h4>BTC Deposit Address</h4>
3JgWg92vswPatbXZQEVKgME95eVsBszGBA
    </form>
  </div>
</div>

<!-- NEO Deposit -->
<div id="neodeposit" class="modalDialog modalDeposit">
  <div style="max-width: 99%!important"> <a href="#close" title="Close" class="close">X</a>
    <form id="reg" action="" method="">
      <h4>NEO/GAS Deposit Address</h4>   
AYQyFRmwwYsYnmFQh38BNkqYk6XwF34PJp
    </form>
  </div>
</div>
<div id="neo2deposit" class="modalDialog modalDeposit">
  <div style="max-width: 99%!important"> <a href="#close" title="Close" class="close">X</a>
    <form id="reg" action="" method="">
      <h4>NEO/GAS Deposit Address</h4>   
AcvQp8DQBCi5go1oakFJiu1iAx1xEnzv9T
    </form>
  </div>
</div>


<!-- Notify by Email capture-->
<div class="row" id="notify-capture">
  <div id="notify-capture-inner"> <span class="h-join">Join Aphelion</span>
    <form action="#" method="post" class="form-inline" id="subscribe">
      <fieldset>
        <div class="form-group">
          <input type="email" class="email-box form-control" size="45" placeholder="email" name="email">
        </div>
      </fieldset>
      <fieldset>
        <div class="form-group" style="margin: 5px 0;">
          <div id="RecaptchaField2"></div>
        </div>
      </fieldset>
      <fieldset>
        <button type="submit" style="padding: 4px 20px 3px 20px" class="prpl-btn btn btn-default">Send Invitation</button>
      </fieldset>
      <p style="color:red;display:none;" id="subscribe-error"></p>
    </form>
  </div>
</div>

<!-- About Section-->

<div class="row container-fluid" id="about" name="about" style="text-align: center"> <span class="col-sm-4">
  <picture> <img src="images/aphelion-about-logo.png" alt="Aphelion" style="width:auto;max-width: 100%"> </picture>
  </span> <span class="col-sm-8 text-justify">
  <h3>About Aphelion:</h3>
  Aiming to be one of the first NEO tokens, Aphelion is building a next generation, tokenized, distribution mechanism to solve for the challenges plaguing the centralized cryptocurrency exchanges and trading platforms.   This protocol will allow for a groundbreaking peer-to-peer smart contract called a Distributed Exchange Asset Ledger (DEAL).  An APH DEAL fuels the Aphelion DApp built on the NEO blockchain that is open source, supports multi programming languages, transacts quickly and frees DEAL makers from: rules, latency and security breaches.
  
  APH tokens represent a new breed of digital asset exchange tool.  The breakthrough advancement is creating the protocol powering the truly decentralized exchanges directly between users as a distributed ledger DApp.  Aphelion’s own Distributed Exchange Asset Ledger (DEAL) is advancing p2p blockchain to the next level and finally into the total control of the users.
  
  Aphelion tokens are an escrow utility. They are the digital smart contract mechanism powering the DEAL. </span> </div>
<!-- Why Neo -->
<div class="row container-fluid" id="whyneo" name="whyneo"> <span class="col-sm-4">
  <picture> <img src="images/neo-logo.png" alt="Aphelion" style="width:auto;max-width: 100%;"> </picture>
  </span> <span class="col-sm-8 text-justify">
  <h3>Why NEO?</h3>
  “NEO supports faster development and deployment of smart contracts and projects, as it enables developers to build on
  programming languages already familiar with them. We provide various advanced languages in the form of compiler,” says Da Hongfei (founder).
  “Besides .Net and Java, we will support Python and Go in the future which can cover more than 90 percent of developers.
  Compared with Ethereum, development has more smooth learning curve and shorter learning circle, allowing for fast introduction of projects.” </span> </div>
<table id="card-table" class="table">
  <thead>
    <tr>
      <th width="14%">&nbsp;</th>
      <th width="20%"><img src="images/bitcoin-logo.png" alt="Bitcoin" class="img-responsive center-block"></th>
      <th width="20%"><img src="images/ethereum-logo.png" alt="Ethereum" class="img-responsive center-block"></th>
      <th width="20%"><img src="images/neo-logo-sm.png" alt="Neo" class="img-responsive center-block"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><h4>Efficiency</h4></td>
      <td> POW on ASIC machines uses vast amounts of energy </td>
      <td> GPU miners collectively using more energy than an entire country* </td>
      <td>dBFT ensures finality through highly efficient method </td>
    </tr>
    <tr>
      <td><h4>Secure Contracts</h4></td>
      <td>Pseudo-anonymity creates lack of integrity in transactions </td>
      <td> Vulnerable contract code prone to hacker attacks** </td>
      <td>Integrated digital identity allows for real world applications </td>
    </tr>
    <tr>
      <td><h4>Dev Languages</h4></td>
      <td>C++</td>
      <td align-middle>Solidity</td>
      <td> C#, .Net, Java, Python and Go coming which can cover 90% of developers </td>
    </tr>
    <tr>
      <td><h4>Scalability</h4></td>
      <td>Peak transaction per second is limited to 3-4 </td>
      <td>Current peak transaction per second is 20 </td>
      <td>Up to 10,000 transactions per second </td>
    </tr>
  </tbody>
  <tfoot>
  </tfoot>
</table>
<!-- Centralized Exchanges -->
<div class="row container-fluid" id="whyneo" name="whyneo">
  <h3>Centralized Exchanges</h3>
  There is widespread use of several cryptocurrency trading platforms and exchanges. They are the clear mechanism for p2p trading, but they are not decentralized. They act as intermediaries between traders initiating trades and this poses a number of inherent challenges. First, exchanges set the rules for who can trade, what can be traded and when. There are countless stories of users accounts and even initiated trades being a deleted or frozen without explanation. We’ve also had numerous security breaches resulting in hundreds of millions (USD) being stolen. On top of these inherent challenges the exchanges are facing there is a complete lack of support facing many users today. These so-called decentralized exchanges are not decentralized at all, in fact quite the opposite. 
  <!-- Comparison Chart -->
  <table style="width:100%; margin: 10px 0;">
    <tr>
      <th></th>
      <th>Decentralized Exchanges</th>
      <th>Centralized Exchanges</th>
    </tr>
    <tr>
      <td>Equanimity between buyer &amp; seller </td>
      <td><picture> <img src="images/check-box.png" alt="Check Box" style="width:auto;"> </picture></td>
      <td></td>
    </tr>
    <tr>
      <td>Loss of funds from exchange shutdown</td>
      <td></td>
      <td><picture> <img src="images/check-box.png" alt="Check Box" style="width:auto;"> </picture></td>
    </tr>
    <tr>
      <td>Potential of frozen accounts</td>
      <td></td>
      <td><picture> <img src="images/check-box.png" alt="Check Box" style="width:auto;"> </picture></td>
    </tr>
    <tr>
      <td>Income for exchange from transaction</td>
      <td></td>
      <td><picture> <img src="images/check-box.png" alt="Check Box" style="width:auto;"> </picture></td>
    </tr>
    <tr>
      <td>Trading security risks</td>
      <td></td>
      <td><picture> <img src="images/check-box.png" alt="Check Box" style="width:auto;"> </picture></td>
    </tr>
    <tr>
      <td>Deposits required</td>
      <td></td>
      <td><picture> <img src="images/check-box.png" alt="Check Box" style="width:auto;"> </picture></td>
    </tr>
  </table>
</div>

<!-- Decentralized Exchanges -->
<div class="row container-fluid" id="dex" name="dex">
  <h3>Decentralized Exchanges</h3>
  Several projects make the claim of being a P2P Decentralized Exchange (DEX). However there are very few built as dApps, completely within a blockchain. Some are centralized client to server operations that rely on an organization's hardware and proprietary software and others are simply a protocol that requires integration into existing centralized exchanges to function properly.  Aphelion aims to be one of the pioneers of DEX residing completely within the blockchain as a dApp, requiring only an open source user interface to access data and control smart contracts to trade digital assets. <strong>How it Works:</strong> As illustrated in the graphic below, if an app=frontend+server, then DApp = frontend + community + contracts. Aphelion contracts are code that runs on the global Aphelion decentralized peer-to-peer protocol. </div>
<div class="row container-fluid" id="bc-graphic" name="bc-graphic">
  <picture> <img src="images/graph_DApp-color.png" alt="dApp" style="width:auto;max-width: 100%"> </picture>
  <h3><i>"Join in our mission to build a collaborative, open source, p2p blockchain technology that finally decentralizes asset distribution and solves for the many challenges plaguing the centralized crypto exchanges and trading platforms."</i></h3>
</div>
<!-- Team -->
<section id="team" class="text-center section">
<div class="container">
<h2><span class="highlight_secondary">Team</span></h2>
<div class="row">
  <div class="col-12 team-wrapper">
    <div class="team">
      <div class="team-image"><img src="images/andrew-morrell.png" class="img-circle img-responsive">
        <div class="team-links">
          <div class="team-links-list"> </div>
          <!-- /.team-links-list --> 
        </div>
        <!-- /.team-links --> 
      </div>
      <!-- /.team-image -->
      <div class="team-content">
        <div class="team-name">
          <h5>Andrew Morrell</h5>
        </div>
        <div class="team-role">Lead Software Engineer</div>
        <div class="team-description">Charles Schwab Developer</div>
      </div>
      <!-- /.team-content --> 
    </div>
    <div class="team">
      <div class="team-image"><img src="images/colan-sewell.png" class="img-circle img-responsive">
        <div class="team-links">
          <div class="team-links-list"> </div>
          <!-- /.team-links-list --> 
        </div>
        <!-- /.team-links --> 
      </div>
      <!-- /.team-image -->
      <div class="team-content">
        <div class="team-name">
          <h5>Colan Sewell</h5>
        </div>
        <div class="team-role">Lead Analyst</div>
        <div class="team-description">US Lead HTC Vive</div>
      </div>
      <!-- /.team-content --> 
    </div>
    <div class="team">
      <div class="team-image"><img src="images/aaron-levin.png" class="img-circle img-responsive">
        <div class="team-links">
          <div class="team-links-list"> </div>
          <!-- /.team-links-list --> 
        </div>
        <!-- /.team-links --> 
      </div>
      <!-- /.team-image -->
      <div class="team-content">
        <div class="team-name">
          <h5>Aaron Levin</h5>
        </div>
        <div class="team-role">Web &amp; App Security</div>
        <div class="team-description">Engineer - Ping Identity</div>
      </div>
      <!-- /.team-content --> 
    </div>
    
    <div class="team">
      <div class="team-image"> <a href="#"><img src="images/broz.png" class="img-circle img-responsive"></a>
        <div class="team-links">
          <div class="team-links-list"> </div>
          <!-- /.team-links-list --> 
        </div>
        <!-- /.team-links --> 
      </div>
      <!-- /.team-image -->
      <div class="team-content">
        <div class="team-name">
          <h5>Matt Brozovich</h5>
        </div>
        <div class="team-role">Web Developer</div>
        <div class="team-description">Founder BrozKnows</div>
      </div>
      <!-- /.team-content --> 
    </div>
    <div class="team">
      <div class="team-image"><img src="images/josh-finkleman.png" class="img-circle img-responsive">
        <div class="team-links">
          <div class="team-links-list"> </div>
          <!-- /.team-links-list --> 
        </div>
        <!-- /.team-links --> 
      </div>
      <!-- /.team-image -->
      <div class="team-content">
        <div class="team-name">
          <h5>Joshua Finkleman</h5>
        </div>
        <div class="team-role">ICO Advisor</div>
        <div class="team-description">Co Blockchain Capital</div>
      </div>
      <!-- /.team-content --> 
    </div>
    <div class="team">
      <div class="team-image"><img src="images/astrid-baldissera.png" class="img-circle img-responsive">
        <div class="team-links">
          <div class="team-links-list"> </div>
          <!-- /.team-links-list --> 
        </div>
        <!-- /.team-links --> 
      </div>
      <!-- /.team-image -->
      <div class="team-content">
        <div class="team-name">
          <h5>Astrid Baldissera</h5>
        </div>
        <div class="team-role">Legal Counsel</div>
        <div class="team-description">CEO Starting Legal</div>
      </div>
      <!-- /.team-content --> 
    </div>
    <div class="team">
      <div class="team-image"><img src="images/natalie-wilcox.png" class="img-circle img-responsive">
        <div class="team-links">
          <div class="team-links-list"> </div>
          <!-- /.team-links-list --> 
        </div>
        <!-- /.team-links --> 
      </div>
      <!-- /.team-image -->
      <div class="team-content">
        <div class="team-name">
          <h5>Natalie Wilcox</h5>
        </div>
        <div class="team-role">Social Media Marketing</div>
        <div class="team-description">Century Link</div>
      </div>
      <!-- /.team-content --> 
    </div>
    <div class="team">
      <div class="team-image"> <a href="#"><img src="images/eric-liss.png" class="img-circle img-responsive"></a>
        <div class="team-links">
          <div class="team-links-list"> </div>
          <!-- /.team-links-list --> 
        </div>
        <!-- /.team-links --> 
      </div>
      <!-- /.team-image -->
      <div class="team-content">
        <div class="team-name">
          <h5>Eric Liss</h5>
        </div>
        <div class="team-role">Motion Graphics/UI</div>
        <div class="team-description">Freelance Global Lead<br>
        </div>
      </div>
      <!-- /.team-content --> 
    </div>
    <div class="team">
      <div class="team-image"> <a href="#"><img src="images/joe-debinza.png" class="img-circle img-responsive"></a>
        <div class="team-links">
          <div class="team-links-list"> </div>
          <!-- /.team-links-list --> 
        </div>
        <!-- /.team-links --> 
      </div>
      <!-- /.team-image -->
      <div class="team-content">
        <div class="team-name">
          <h5>Joe Debuzna</h5>
        </div>
        <div class="team-role">Software Architect</div>
        <div class="team-description">VP Engineering<br>
          HVR Software</div>
      </div>
      <!-- /.team-content --> 
    </div>
    <div class="team">
      <div class="team-image"><img src="images/adi-benari.png" class="img-circle img-responsive">
        <div class="team-links">
          <div class="team-links-list"> </div>
          <!-- /.team-links-list --> 
        </div>
        <!-- /.team-links --> 
      </div>
      <!-- /.team-image -->
      <div class="team-content">
        <div class="team-name">
          <h5>Adi Benari</h5>
        </div>
        <div class="team-role">Lead Blockchain Developer</div>
        <div class="team-description">Applied Blockchain</div>
      </div>
      <!-- /.team-content --> 
    </div>
    <div class="team">
      <div class="team-image"><img src="images/cneil.jpg" class="img-circle img-responsive">
        <div class="team-links">
          <div class="team-links-list"> </div>
          <!-- /.team-links-list --> 
        </div>
        <!-- /.team-links --> 
      </div>
      <!-- /.team-image -->
      <div class="team-content">
        <div class="team-name">
          <h5>Craig Neil</h5>
        </div>
        <div class="team-role">Founding Member</div>
        <div class="team-description">Founder Orion Technologies,<br>
CTO MorCap Fund Advisors</div>
      </div>
      <!-- /.team-content --> 
    </div>
    <div class="team">
      <div class="team-image"><img src="images/mike-jaltuch.png" class="img-circle img-responsive">
        <div class="team-links">
          <div class="team-links-list"> </div>
          <!-- /.team-links-list --> 
        </div>
        <!-- /.team-links --> 
      </div>
      <!-- /.team-image -->
      <div class="team-content">
        <div class="team-name">
          <h5>Michael Jaltuch</h5>
        </div>
        <div class="team-role">Founding Member</div>
        <div class="team-description">Founder Orion Technologies,<br>
Linear Method Software</div>
      </div>
      <!-- /.team-content --> 
    </div>
    <div class="team">
      <div class="team-image"><img src="images/ian-holtz.png" class="img-circle img-responsive">
        <div class="team-links">
          <div class="team-links-list"> </div>
          <!-- /.team-links-list --> 
        </div>
        <!-- /.team-links --> 
      </div>
      <!-- /.team-image -->
      <div class="team-content">
        <div class="team-name">
          <h5>Ian Holtz</h5>
        </div>
        <div class="team-role">Founding Member</div>
        <div class="team-description">Founder Orion Technologies</div>
      </div>
      <!-- /.team-content --> 
    </div>
  </div>
</div>

<div class="row container-fluid" id="audits" name="audits">
  <h4>Smart Contracts &amp; Transaction Audits will be performed through 3rd party verification.</h4>
  <br>
  <h4>KYC Compliance to be Performed by:<br>
  </h4>
  <img src="images/identity-logo.png" ></div>

<!-- Footer Buckets -->

<div class="container">
  <div class="row" id="footer-buckets">
    <div class="col-lg-4 col-sm-4" id="three-footer-buckets">
      <div id="">
        <h4>CONTACT US</h4>
        <p><a href="mailto:info@apheliontoken.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>info@apheliontoken.com</a> </p>
      </div>
    </div>
    <div class="col-lg-4 col-sm-4 follow-us" id="three-footer-buckets">
      <div id="">
        <h4>FOLLOW US</h4>
        <a href="https://www.facebook.com/apheliontoken/" target="_blank"><i class="fa fa-facebook fa-2x " style="min-width: 40px;"></i></a> <a href="https://www.linkedin.com/company/11245374/" target="_blank"><i class="fa fa-linkedin fa-2x " style="min-width: 40px;"></i></a> <a href="https://twitter.com/apheliontoken" target="_blank"><i class="fa fa-twitter fa-2x " style="min-width: 40px;"></i></a> </div>
    </div>
    <div class="col-lg-4 col-sm-4" id="three-footer-buckets">
      <div id=""> </div>
    </div>
  </div>
</div>
<!-- Footer Bar -->
<div class="container" id="footer-bar">
  <div class="col-md-2"><a href="disclaimer.html">Disclaimer</a> | <a href="privacy.html">Privacy + TOS</a></div>
  <div class="col-md-8 text-center">&copy;2017 Aphelion Coin - P2P Digital Asset Distribution - All Rights Reserved</div>
  <div class="col-md-2"> </div>
</div>
<script>
  var busy = false;
  $(function() {
    $('#contact').submit(function(){
      if (busy) return false;
      if (!$('#agreement').is(':checked'))
      {
        alert('We do not accept funds from USA citizens. If you are NOT a citizen of the USA, please click the checkbox below.');
        return false;
      }
      busy = true;
      $('#contact-error').html('').hide();
      $.ajax({
        method: "POST",
        url: "contact-form-handler2.php",
        data: $('#contact').serialize()+"&g-recaptcha-response="+$("#g-recaptcha-response").val()
      }).done(function( msg ) {
        busy = false;
        if (msg == 'OK')
        {
          document.location.href = 'index.php#openModal-thanks';
        }
        else
        {
          $('#contact-error').html(msg).slideDown();
        }
        return false;
      });
      return false;
    });
    $('#subscribe').submit(function(){
      if (busy) return false;
      busy = true;
      $('#subscribe-error').html('').hide();
      $.ajax({
        method: "POST",
        url: "contact-form-handler.php",
        data: $('#subscribe').serialize()+"&g-recaptcha-response="+$("#g-recaptcha-response-1").val()
      }).done(function( msg ) {
        busy = false;
        if (msg == 'OK')
        {
          document.location.href = 'index.php#openModal-thanks';
        }
        else
        {
          $('#subscribe-error').html(msg).slideDown();
        }
        return false;
      });
      return false;
    });
  });
</script>
</body>
</html>