<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style.css?v=3">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/68fb1c67da.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/assets/css/style-nc.css">
    <link rel="stylesheet" href="/assets/css/topnews.css">
	<link rel="stylesheet" href="/assets/css/responsive.css">
    <title></title>

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true">

  </head>

  <script type="text/javascript">
	document.addEventListener("DOMContentLoaded", function(){
		
		window.addEventListener('scroll', function() {
	       
			if (window.scrollY > 50) {
				document.getElementById('navbar_top').classList.add('fixed-top');
				// add padding top to show content behind navbar
				navbar_height = document.querySelector('.navbar').offsetHeight;
				document.body.style.paddingTop = navbar_height + 'px';
			} else {
			 	document.getElementById('navbar_top').classList.remove('fixed-top');
				 // remove padding top from body
				document.body.style.paddingTop = '0';
			} 
		});
	}); 
	// DOMContentLoaded  end
</script>
  <body>
  <?php
      $uri = service('uri');
     ?>
	 
<nav id="navbar_top" class="navbar navbar-expand-lg">
<?php if (session()->get('isLoggedIn')): ?>
    <style>
        .habnetfm-rank-box {
            background-color: #2d2323;
        }
    </style>
<div class="habnetfm-rank-box">
    <img src="https://habnet.nl/templates/david_vox/img/habnet.png" style="width: 67%; position: relative;">
</div>
<?php else: ?>
    <div class="habnetfm-rank-box">
    <img src="https://habnet.nl/templates/david_vox/img/habnet.png" style="width: 87%; position: relative;">
</div>
<?php endif; ?>
    <div class="container">
        
        <button class="navbar-toggler mr-auto" type="button" data-toggle="collapse" data-target="#navbar">
            <i class="fas fa-bars toggler-icon ml-auto" aria-hidden="true"></i>
        </button>
        
        <div class="collapse navbar-collapse" id="navbar">
            
            <ul class="navbar-nav mr-auto navbar-left">
                <li class="nav-item">
                    <a class="nav-link" href="/">
                        <i class="fas fa-home nav-icon" aria-hidden="true"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                        Home
                    </font></font></a>
                </li>

				<li class="nav-item">
                    <a class="nav-link" href="/verzoeken">
                        <i class="fas fa-envelope nav-icon" aria-hidden="true"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                        Verzoek
                    </font></font></a>
                </li>
                
            </ul>
        </div>
        <ul class="navbar-right navbar-nav flex-row ml-auto">
                          <li class="nav-item">
                    <a class="nav-link" style="font-size:15px"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                        Luisteraars: <b class="listner">0</b>
                    </font></font></a>
                </li>
                      </ul>
    </div>
</nav>
<div class="feed">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 clearfix show-xl">
                <p class="tweets">
                    <span>
						<font style="vertical-align: inherit;">
							<font style="vertical-align: inherit;">DJ </font>
						</font>
						<a href="https://habnet.nl/profiel/David" target="_blank">
							<font style="vertical-align: inherit;">
								<font style="vertical-align: inherit;">@David</font>
							</font>
						</a>
					</span>
						<font style="vertical-align: inherit;">
							<font style="vertical-align: inherit;"> zegt: Tijdens dit uurtje gaan we helemaal los op lekkere 80s rock!</font>
						</font>
                </p>
            </div>
			<?php if (session()->get('isLoggedIn')): ?>
                
            <div class="col-lg-3 col-12" id="feed-right">
					<i class="fas fa-sign-in-alt" aria-hidden="true"></i>
						<font style="vertical-align: inherit;">
                        
							<font style="vertical-align: inherit;"><?= session()->get('username') ?></font>
						</font>
					<a href="http://localhost:8080/logout">
						<font style="vertical-align: inherit;">
							<font style="vertical-align: inherit;">Uitloggen</font>
						</font>
					</a>
            </div>
			<?php else: ?>
			<div class="col-lg-3 col-12" id="feed-right">
                <a data-toggle="modal" data-target="#login-form">
					<i class="fas fa-sign-in-alt" aria-hidden="true"></i>
						<font style="vertical-align: inherit;">
							<font onclick="document.getElementById('id01').style.display='block'" style="vertical-align: inherit;">Inloggen</font>
						</font>
				</a>
				<a href="https://habnet.nl/register">
					<i class="fas fa-user-plus" aria-hidden="true"></i>
						<font style="vertical-align: inherit;">
							<font style="vertical-align: inherit;">Registreren</font>
						</font>
				</a>   
            </div>
			<?php endif; ?>
        </div>
    </div>
</div>

<div class="header">
    <div class="container">
		<div class="tanzbanner show-xl">
			<div class="platform-habbo">
				<div class="habbo_dance">
					<div class="habbo" style="left: 91px; top: 3px;">
						<div class="shadow"></div>
						<div class="dance_1" style="background-image: url(https://avatar.habnet.nl/avatarimage.php?figure=hr-3260-42.hd-3103-1370.ch-65107-73.lg-270-63.sh-3252-92-62.ca-1802-92.wa-9001123-68&amp;head_direction=3&amp;gesture=sml&amp;action=wlk);"></div>
						<div class="dance_2" style="background-image: url(https://avatar.habnet.nl/avatarimage.php?figure=hr-3260-42.hd-3103-1370.ch-65107-73.lg-270-63.sh-3252-92-62.ca-1802-92.wa-9001123-68&amp;head_direction=2&amp;gesture=sml&amp;action=std);"></div>
					</div>
					
					<div class="message tip" data-toggle="tooltip" data-placement="top" title="" style="left: 163px; top: 34px" data-original-title="<b>Ricardo,:</b> Welkom!! :)"></div>
						<div class="habbo delay" style="left: 0; top: 15px;">
						<div class="shadow"></div>
						<div class="dance_1" style="background-image: url(https://avatar.habnet.nl/avatarimage.php?figure=cc-3158-1334.sh-6102459-1205-1236.fa-201407-72.ch-61741412-1193-62.lg-3058-1189.hr-3260-45.ca-65071-1236.hd-209-3&amp;head_direction=3&amp;gesture=sml&amp;action=wlk);"></div>
						<div class="dance_2" style="background-image: url(https://avatar.habnet.nl/avatarimage.php?figure=cc-3158-1334.sh-6102459-1205-1236.fa-201407-72.ch-61741412-1193-62.lg-3058-1189.hr-3260-45.ca-65071-1236.hd-209-3&amp;head_direction=2&amp;gesture=sml&amp;action=std);"></div>
					</div>
					<div class="message tip" data-toggle="tooltip" data-placement="top" title="" style="left: 16px; top: 35px" data-original-title="<b>Stann:</b> Born to be Wild!"></div>
						<div class="habbo" style="left: 38px; top: 21px">
						<div class="shadow"></div>
						<div class="dance_1" style="background-image: url(https://avatar.habnet.nl/avatarimage.php?figure=he-3218-62.cc-3075-100.ca-3217-68-68.sh-6010262-62.hr-65023-40.lg-280-1193.hd-180-1359.wa-9001123-68.ch-8464812-89&amp;head_direction=3&amp;gesture=sml&amp;action=wlk);"></div>
						<div class="dance_2" style="background-image: url(https://avatar.habnet.nl/avatarimage.php?figure=he-3218-62.cc-3075-100.ca-3217-68-68.sh-6010262-62.hr-65023-40.lg-280-1193.hd-180-1359.wa-9001123-68.ch-8464812-89&amp;head_direction=2&amp;gesture=sml&amp;action=std);"></div>
					</div>
					<div class="message tip" data-toggle="tooltip" data-placement="top" title="" style="left: 54px; top: 45px" data-original-title="<b>GewoonBjorn:</b> Ik ben een nutteloze tukker zonder muzieksmaak!"></div>
						<div class="habbo delay" style="left: 65px; top: 28px">
						<div class="shadow"></div>
						<div class="dance_1" style="background-image: url(https://avatar.habnet.nl/avatarimage.php?figure=lg-3023-108.sh-3016-110.ch-3222-96.hd-180-1.he-1604-62.hr-3162-36&amp;head_direction=2&amp;gesture=sml&amp;action=wlk);"></div>
						<div class="dance_2" style="background-image: url(https://avatar.habnet.nl/avatarimage.php?figure=lg-3023-108.sh-3016-110.ch-3222-96.hd-180-1.he-1604-62.hr-3162-36&amp;head_direction=3&amp;gesture=sml&amp;action=std);"></div>
					</div>
					<div class="message tip" data-toggle="tooltip" data-placement="top" title="" style="left: 82px; top: 55px" data-original-title="<b>MaichelVD:</b> Ook DJ worden? Solliciteer snel!"></div>
						<div class="habbo" style="left: 117px; top: 24px">
						<div class="shadow"></div>
						<div class="dance_1" style="background-image: url(https://habbo.city/habbo-imaging/avatarimage?figure=ea-6136543-62.sh-305-110.ha-6058508-1198.fa-570698-1205.hd-84694-1.ch-562828-110.wa-9211528-1193-62.hr-65183-49.lg-44689-92&amp;head_direction=3&amp;gesture=sml&amp;action=wlk);"></div>
						<div class="dance_2" style="background-image: url(https://habbo.city/habbo-imaging/avatarimage?figure=ea-6136543-62.sh-305-110.ha-6058508-1198.fa-570698-1205.hd-84694-1.ch-562828-110.wa-9211528-1193-62.hr-65183-49.lg-44689-92&amp;head_direction=2&amp;gesture=sml&amp;action=std);"></div>
					</div>
					<div class="message tip" data-toggle="tooltip" data-placement="top" title="" style="left: 196px; top: 50px" data-original-title="<b>Gio:</b> Ik sloop je huis"></div>
						<div class="habbo delay" style="left: 182px; top: 23px">
						<div class="shadow"></div>
						<div class="dance_1" style="background-image: url(https://habbo.city/habbo-imaging/avatarimage?figure=lg-3006-110-110.fa-201407-1294.ch-3935-110-110.hd-629-3.sh-987462861-110-92.hr-64370-45.he-64353-62.ca-65071-62.ha-1003-1189&amp;head_direction=3&amp;gesture=sml&amp;action=wlk);"></div>
						<div class="dance_2" style="background-image: url(https://habbo.city/habbo-imaging/avatarimage?figure=lg-3006-110-110.fa-201407-1294.ch-3935-110-110.hd-629-3.sh-987462861-110-92.hr-64370-45.he-64353-62.ca-65071-62.ha-1003-1189&amp;head_direction=3&amp;gesture=sml&amp;action=std);"></div>
					</div> 
					<div class="message tip" data-toggle="tooltip" data-placement="top" title="" style="left: 132px; top: 50px" data-original-title="<b>Jill:</b> hihi"></div>
				</div>
			</div>
		</div>       
		<div class="row">
				<div class="col-md-3">
					<div class="logo">
						<img src="/assets/img/habnetfm.png" alt="HabnetFM logo" onclick="window.location='/'" style="top:40px;position:relative;">
					</div>
				</div>
			<div class="col-md-3">
				<div class="comment-bubble" onclick="window.location=verzoeklijn">
					<div class="user-avatar" style="background-image: url(/assets/img/503.png)"></div>
						<p>
							<font style="vertical-align: inherit;">
								<font style="vertical-align: inherit;">Recentste Verzoek</font>
							</font>
						</p>
						<p>
							<font style="vertical-align: inherit;">
		
			gooi  een house nummertje van klaus veen  aka fietspomp of poison
									</font>
						</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="comment-bubble" onclick="window.location=nieuws">
					<div class="user-avatar" style="background-image: url(/assets/img/6.png)"></div>
						<p>
							<font style="vertical-align: inherit;">
								<font style="vertical-align: inherit;">Recentste Nieuws-reactie</font>
							</font>
						</p>
						<p>
							<font style="vertical-align: inherit;">
		
			bad_word_kay=utf8
									</font>
						</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="comment-bubble">
					<div class="user-avatar" style="background-image: url(/assets/img/2.png)"></div>
						<p>
							<font style="vertical-align: inherit;">
								<font style="vertical-align: inherit;">Live DJ</font>
							</font>
						</p>
						<p>
							<font style="vertical-align: inherit;">
								<font class="streamerr" style="vertical-align: inherit;">HabnetFM</font>
							</font>
						</p>
				</div>
			</div>
		</div>
    </div>
</div>

<div id="id01" class="modal">
        <div class="modal-content animate">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
                <img src=
"https://habnetfm.nl/templates/habnetfm/assets/img/habnetfm.png" alt="Avatar">
            </div>
  
            <div class="container">
                <?php if (session()->get('success')): ?>
          <div class="alert alert-success" role="alert">
            <?= session()->get('success') ?>
          </div>
        <?php endif; ?>
        <form class="" action="/" method="post">

        <style>
        </style>
        <center>
          <div class="form-group">
           <input type="text" placeholder="Email" class="form-control" name="email" id="email" value="">
          </div>
          <div class="form-group">
           <input type="password" placeholder="Wachtwoord" class="form-control" name="password" id="password" value="">
          </div>
        
          <?php if (isset($validation)): ?>
            <div class="col-12">
              <div class="alert alert-danger" role="alert">
                <?= $validation->listErrors() ?>
              </div>
            </div>
          <?php endif; ?>
              <button type="submit" class="bttn success">Login</button>
          </center>
        </form>
            </div>
  
            <div class="container" style="background-color:#ffffffd1">
               
            </div>
        </div>
    </div>
  
    <script>
        var modal = document.getElementById('id01');
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

	 
	