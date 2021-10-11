<!doctype html>
<html lang="de">
<head>
    <!-- META -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="HabMusic.de"/>
    <meta name="description" content="HabMusic.de ist ein innovatives Sonderprojekt zum Habbo Hotel Deutschland. Wir bieten dir unter erstklassiger Musikalischer Begleitung viele sagenhafte Extras."/>
    <meta name="keywords" content="habbo, news, fanseite, playhab, habview, habbotimes, habbofun, radio, teamspeak, gewinne, taler, ihabbid, offiziell, webradio, music, habbohotel, lautfm, habboradio, habbokritik"/>
    <meta name="robots" content="index, follow, noarchive"/>

    <meta property="og:title" content="HabMusic - Let the beat drop!">
    <meta property="og:url" content="https://habmusic.de/">
    <meta property="og:image" content="https://www.habmusic.de/assets/img/hm-default.png">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@HabMusic">
    <meta name="twitter:title" content="HabMusic - Let the beat drop!">
    <meta name="twitter:description" content="Dein offizielles Webradio zum deutschen Habbo Hotel!">
    <meta name="twitter:image" content="/assets/img/hm-default.png">
    <!-- ./META -->

    <title>HabMusic Radio: Startseite</title>
    <link rel="shortcut icon" href="/assets/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/assets/favicon.ico" type="image/x-icon">

    <!-- CSS&JS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/css/style.css?161513161337">
    <link rel="stylesheet" href="/assets/css/iziToast.css">
    <link rel="stylesheet" href="/assets/css/style-nc.css?161151136332">
    <link rel="stylesheet" href="/assets/css/responsive.css?1615136332">
    <link rel="stylesheet" href="/assets/css/swipebox.css?1615136332">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/emojionearea.min.css">
    <script type="text/javascript" src="/assets/js/emojionearea.min.js"></script>
    <script
        src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="https://kit.fontawesome.com/f1c29004a3.js" crossorigin="anonymous"></script>
    <script src="/assets/js/sweetalert.min.js"></script>
</head>
<body>
<!-- MODAL: LOGIN -->
 <div class="modal fade" id="login-form" tabindex="-1">
    <div class="modal-dialog">
       <div class="modal-content">
          <div class="loginForm">
             <h1>Hallo!</h1>
             <p>Meld je aan bij Habnet om van alle voordelen gebruik te kunnen maken. </p>
             <form action="/auth/login" method="POST" name="testform">
                <div class="form-group">
                   <input type="text" name="username" class="form-control" placeholder="Habbonaam">
                   <i class="fas fa-user input-icon"></i>
                </div>
                <div class="form-group">
                   <input type="password" name="password" class="form-control" placeholder="****">
                   <i class="fas fa-lock input-icon"></i>
                </div>
                <button type="submit" class="btn btn-block btn-primary">Aanmelden</button>
             </form>
          </div>
          <p><a href="/registration">Nog geen account? Maak account aan!</a></p>
       </div>
    </div>
 </div>
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <button class="navbar-toggler mr-auto" type="button" data-toggle="collapse" data-target="#navbar">
            <i class="fas fa-bars toggler-icon ml-auto"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav mr-auto navbar-left">
                <li class="nav-item">
                    <a class="nav-link" href="/">
                        <i class="fas fa-home nav-icon"></i>
                        Home
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-hashtag nav-icon"></i>
                        HabMusic
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/team">Unser Team</a>
                        <a class="dropdown-item" href="/teamspeak">TeamSpeak</a>
                        <a class="dropdown-item" href="/partner">Partner</a>
                        <a class="dropdown-item" href="/about">&Uuml;ber uns</a>
                        <a class="dropdown-item" href="/kontakt">Kontakt</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-newspaper nav-icon"></i>
                        News
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/news/habmusic">HabMusic</a>
                        <a class="dropdown-item" href="/news/habbo">Habbo</a>
                        <a class="dropdown-item" href="/news/eventloesungen">Eventl&ouml;sungen</a>
                        <a class="dropdown-item" href="/news/musichub">MusicHub</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-headset nav-icon"></i>
                        Radio
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/post">DJ Post</a>
                        <a class="dropdown-item" href="/tracklist">Tracklist</a>
                        <a class="dropdown-item" href="/sendeplan">Sendeplan</a>
                        <a class="dropdown-item" href="/stammsendungen">Stammsendungen</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-theater-masks nav-icon"></i>
                        Events
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/events">&Uuml;bersicht</a>
                        <a class="dropdown-item" href="/beats">Beats</a>
                        <a class="dropdown-item" href="/style">Fashion Week</a>
                        <a class="dropdown-item" href="/songquiz">Songquiz</a>
                        <a class="dropdown-item" href="/aktivitaetswettbewerb">Aktivitätswettbewerb</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/bewerben">
                        <i class="fas fa-briefcase nav-icon"></i>
                        Jobs
                    </a>
                </li>
            </ul>
        </div>
        <?php if(isset($user)): ?>
<ul class="navbar-right navbar-nav flex-row ml-auto">
                <li class="nav-item dropdown show">
                    <a class="nav-link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <div class="nav-profile" style="margin-top: -10px; background-image: url(https://avatar.habnet.nl/avatarimage.php?figure=hr-<?= $user->look ?>&amp;head_direction=3&amp;action=wav)">
                        </div>
                    </a>
                    <div class="dropdown-menu show">
                        <a class="dropdown-item" href="/user/<?= $user->username ?>">Profiel</a>
                        <a class="dropdown-item" href="/auth/logout">Uitloggen</a>
                    </div>
                </li>
                      </ul>
          <?php endif ?>
    </div>
</nav>
<!-- ./NAV -->
<!--googleoff: index-->
<!-- FEED-->
<div class="feed">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 clearfix show-xl">
                <p class="tweets">
                    <span>@HabMusic </span><span>Congratulations to getting official! <a href="https://twitter.com/Habbplus" target="_blank">@Habbplus</a> ♥️ <a href="https://t.co/lUP6O248AT" target="_blank">https://t.co/lUP6O248AT</a></span>
                </p>
            </div>
            <?php if(!isset($user)): ?>
            <div class="col-lg-3 col-12" id="feed-right">
                     <a data-toggle="modal" data-target="#login-form"><i class="fas fa-sign-in-alt"></i>Login</a>
     <a href="/registration"><i class="fas fa-user-plus"></i>Registreren</a>
            <?php endif ?>
            </div>
        </div>
    </div>
</div>
<!-- ./FEED -->
<!--googleon: index-->
<!-- HEADER -->
<div class="header">
    <!--googleoff: index-->
    
    <div class="container">
        <div class="tanzbanner show-xl"><div class="platform-habbo"><div class="habbo_dance"><div class="habbo" style="left: 91px; top: 3px;">
                <div class="shadow"></div>
                <div class="dance_1" style="background-image: url(https://www.habbo.de/habbo-imaging/avatarimage?&amp;user=efi.styler&amp;action=wlk&amp;direction=3&amp;head_direction=3&amp;img_format=png&amp;gesture=sml&amp;headonly=0&amp;size=b?t1633802313);"></div>
                <div class="dance_2" style="background-image: url(https://www.habbo.de/habbo-imaging/avatarimage?&amp;user=efi.styler&amp;action=std&amp;direction=3&amp;head_direction=4&amp;img_format=png&amp;gesture=sml&amp;headonly=0&amp;size=b?t1633802313);"></div>
            </div><div class="message tip" data-toggle="tooltip" data-placement="top" title="<b>efi.styler:</b> Ja sischa dÃ¤Ã¤t!" style="left: 107px; top: 25px"></div>					<div class="habbo delay" style="left: 147px; top: 4px;">
    <div class="shadow"></div>
    <div class="dance_1" style="background-image: url(https://www.habbo.de/habbo-imaging/avatarimage?&amp;user=Emely...sophie&amp;action=wlk&amp;direction=3&amp;head_direction=3&amp;img_format=png&amp;gesture=sml&amp;headonly=0&amp;size=b?t1633802313);"></div>
    <div class="dance_2" style="background-image: url(https://www.habbo.de/habbo-imaging/avatarimage?&amp;user=Emely...sophie&amp;action=std&amp;direction=3&amp;head_direction=2&amp;img_format=png&amp;gesture=sml&amp;headonly=0&amp;size=b?t1633802313);"></div>
  </div>
  <div class="message tip" data-toggle="tooltip" data-placement="top" title="<b>Emely...sophie:</b> Huhu!" style="left: 163px; top: 34px"></div>					<div class="habbo delay" style="left: 0; top: 15px;">
    <div class="shadow"></div>
    <div class="dance_1" style="background-image: url(https://www.habbo.de/habbo-imaging/avatarimage?&amp;user=nightthinker&amp;action=std&amp;direction=2&amp;head_direction=3&amp;img_format=png&amp;gesture=sml&amp;headonly=0&amp;size=b?t1633802313);"></div>
    <div class="dance_2" style="background-image: url(https://www.habbo.de/habbo-imaging/avatarimage?&amp;user=nightthinker&amp;action=wlk&amp;direction=2&amp;head_direction=2&amp;img_format=png&amp;gesture=sml&amp;headonly=0&amp;size=b?t1633802313);"></div>
  </div>
  <div class="message tip" data-toggle="tooltip" data-placement="top" title="<b>nightthinker:</b> excuse me?" style="left: 16px; top: 35px"></div>					<div class="habbo" style="left: 38px; top: 21px">
    <div class="shadow"></div>
    <div class="dance_1" style="background-image: url(https://www.habbo.de/habbo-imaging/avatarimage?&amp;user=dani=Ra&amp;action=wlk&amp;direction=2&amp;head_direction=3&amp;img_format=png&amp;gesture=sml&amp;headonly=0&amp;size=b?t1633802313);"></div>
    <div class="dance_2" style="background-image: url(https://www.habbo.de/habbo-imaging/avatarimage?&amp;user=dani=Ra&amp;action=std&amp;direction=2&amp;head_direction=2&amp;img_format=png&amp;gesture=sml&amp;headonly=0&amp;size=b?t1633802313);"></div>
  </div>
  <div class="message tip" data-toggle="tooltip" data-placement="top" title="<b>dani=Ra:</b> Fuchsdeifiwuid!" style="left: 54px; top: 45px"></div>					<div class="habbo delay" style="left: 65px; top: 28px">
    <div class="shadow"></div>
    <div class="dance_1" style="background-image: url(https://www.habbo.de/habbo-imaging/avatarimage?&amp;user=xXRukiaXx&amp;action=wlk&amp;direction=2&amp;head_direction=3&amp;img_format=png&amp;gesture=sml&amp;headonly=0&amp;size=b?t);"></div>
    <div class="dance_2" style="background-image: url(https://www.habbo.de/habbo-imaging/avatarimage?&amp;user=xXRukiaXx&amp;action=std&amp;direction=2&amp;head_direction=2&amp;img_format=png&amp;gesture=sml&amp;headonly=0&amp;size=b?t);"></div>
  </div>
  <div class="message tip" data-toggle="tooltip" data-placement="top" title="<b>xXRukiaXx:</b> Shaka brah!" style="left: 82px; top: 55px"></div>					<div class="habbo" style="left: 117px; top: 24px">
    <div class="shadow"></div>
    <div class="dance_1" style="background-image: url(https://www.habbo.de/habbo-imaging/avatarimage?&amp;user=Musiikfreeak&amp;action=wlk&amp;direction=2&amp;head_direction=4&amp;img_format=png&amp;gesture=sml&amp;headonly=0&amp;size=b?t1633802313);"></div>
    <div class="dance_2" style="background-image: url(https://www.habbo.de/habbo-imaging/avatarimage?&amp;user=Musiikfreeak&amp;action=std&amp;direction=2&amp;head_direction=3&amp;img_format=png&amp;gesture=sml&amp;headonly=0&amp;size=b?t1633802313);"></div>
  </div>
  <div class="message tip" data-toggle="tooltip" data-placement="top" title="<b>Musiikfreeak:</b> Ich bin ein Habmusicfreeak! *StÃ¶ÃŸchen*" style="left: 132px; top: 50px"></div>					<div class="habbo delay" style="left: 182px; top: 23px">
    <div class="shadow"></div>
    <div class="dance_1" style="background-image: url(https://www.habbo.de/habbo-imaging/avatarimage?&amp;user=zut&amp;action=wlk&amp;direction=4&amp;head_direction=3&amp;img_format=png&amp;gesture=sml&amp;headonly=0&amp;size=b?t1633802313);"></div>
    <div class="dance_2" style="background-image: url(https://www.habbo.de/habbo-imaging/avatarimage?&amp;user=zut&amp;action=std&amp;direction=4&amp;head_direction=4&amp;img_format=png&amp;gesture=sml&amp;headonly=0&amp;size=b?t1633802313);"></div>
  </div> <div class="message tip" data-toggle="tooltip" data-placement="top" title="<b>zut:</b> Ã„hre" style="left: 196px; top: 50px"></div></div></div></div>
        <style>
.xx.content-box:first-of-type:before{
content: "";
display: inline-block;
width: 372px;
height: 190px;
background-image: url(https://www.habmusic.de/assets/file_5337.png);
background-repeat: no-repeat;
position: absolute;
margin-left: -9px;
    margin-top: -3px;
}
</style>        <div class="row">
            <div class="col-md-3">
                <div class="logo">
                    <img src="/assets/img/logo.png" alt="HabMusic Logo" style="image-rendering: auto;"
                         onclick="window.location='/'">
                </div>
            </div>
          <div class="col-md-3"><div class="comment-bubble" onclick="window.location='news/read/1107'" data-toggle="tooltip" data-placement="top" title="T0WLY kommentierte Ecotron oder doch Recycler? Was denn nun?"><div class="user-avatar" style="background-image: url(/assets/avatar/463.png?1633802313)"></div><p>Endlich wird man wieder seinen Schrott los und bekommt immerhin was dafür.</p><p>&bdquo;Ecotron oder doch Recycler? Was denn nun?&ldquo;</p></div></div><div class="col-md-3"><div class="comment-bubble" onclick="window.location='news/read/1107'" data-toggle="tooltip" data-placement="top" title=":SoUtHaFrIkA: kommentierte Ecotron oder doch Recycler? Was denn nun?"><div class="user-avatar" style="background-image: url(/assets/avatar/1024.png?1633802313)"></div><p>Find die Möbel scheisse</p><p>&bdquo;Ecotron oder doch Recycler? Was denn nun?&ldquo;</p></div></div><div class="col-md-3"><div class="comment-bubble" onclick="window.location='news/read/1105'" data-toggle="tooltip" data-placement="top" title=":SoUtHaFrIkA: kommentierte BAW: Minievent 3"><div class="user-avatar" style="background-image: url(/assets/avatar/1024.png?1633802313)"></div><p>Cooles Badge</p><p>&bdquo;BAW: Minievent 3&ldquo;</p></div></div>        </div>
    </div>
    <!--googleon: index-->
</div>
<!-- ./HEADER -->
  
<?= $this->renderSection('content') ?>
  
<footer>
    <div class="footer-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-sm-6">
                    <ul class="footer-list">
                        <li>HabMusic</li>
                        <li>
                            <a href="/team">Team</a>
                        </li>
                        <li>
                            <a href="/beats">Beats</a>
                        </li>
                        <li>
                            <a href="/bewerben">Jobs</a>
                        </li>
                        <li>
                            <a href="/kontakt">Kontakt</a>
                        </li>
                        <li>
                            <a href="/impressum">Impressum</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <ul class="footer-list">
                        <li>Habbo Hotel</li>
                        <li>
                            <a href="https://www.habbo.de/">Habbo Deutschland</a>
                        </li>
                        <li>
                            <a href="https://www.sulake.com/">Sulake</a>
                        </li>
                        <li>
                            <a href="https://help.habbo.de/hc/de">Help Tool</a>
                        </li>
                        <li>
                            <a href="https://habbohelpde.zendesk.com/entries/37597418-Tipps-f%C3%BCr-Eltern">F&uuml;r Eltern</a>
                        </li>
                        <li>
                            <a href="https://www.habbo.de/playing-habbo/safety">Sicherheit</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <ul class="footer-list" id="tweets">
                        <li>Aktuelle Tweets</li>
                        <li><img src="/assets/img/icon-twitter.png" height="26" width="30" alt=""><div class="tweet">Congratulations to getting official! <a href="https://twitter.com/Habbplus" target="_blank">@Habbplus</a> ♥️ <a href="https://t.co/lUP6O248AT" target="_blank">https://t.co/lUP6O248AT</a></div></li><li><img src="/assets/img/icon-twitter.png" height="26" width="30" alt=""><div class="tweet">RT <a href="https://twitter.com/De_Habbo" target="_blank">@De_Habbo</a>: Dein Oktober mit den offiziellen Fanseiten <a href="https://t.co/dBkvmcTVA6" target="_blank">https://t.co/dBkvmcTVA6</a></div></li><li><img src="/assets/img/icon-twitter.png" height="26" width="30" alt=""><div class="tweet">In unserer Timeline auf der Startseite gibt es gerade eine polaroid Kamera zu gewinnen! Kommentiert dort den Beitra… <a href="https://t.co/Ae28A5sBKS" target="_blank">https://t.co/Ae28A5sBKS</a></div></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <div class="footer-list" id="official-disclaimer">
                        <li>Offizielle Fanseite</li>
                        <li>
                            <p>
                                HabMusic ist nicht mit Sulake Oy oder Partnerfirmen von Sulake Oy verbunden und wird
                                auch nicht von ihnen bef&uuml;rwortet, unterst&uuml;tzt oder spezifisch genehmigt. HabMusic darf
                                die Marken und anderes geistiges Eigentum von Habbo im Rahmen der Richtlinien f&uuml;r
                                Habbo-Fansites verwenden.
                            </p>
                        </li>
                    </div>
                </div>
            </div>
        </div>
     
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <p class="text-left float-left">
                        &#169; 2019 -
                        <script>document.write(new Date().getFullYear())</script>
                        <span class="text-highlight">HabMusic</span>. Alle Rechte vorbehalten.
                    </p>
                </div>
                <div class="col-6">
                    <p class="text-right float-right">
                        Hergestellt mit <i class="fas fa-heart" style="color: red"></i> von <span
                        class="text-highlight">Jorge</span>, <span class="text-highlight">AVMX</span>, <span
                        class="text-highlight">DJ.Nico09</span>, <span
                        class="text-highlight">HiPPo@</span> & <span class="text-highlight">Markus</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="/assets/js/sweetalert2.all.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="/assets/js/jquery.swipebox.js"></script>
<script src="/assets/js/iziToast.js"></script>
<script>
    <?php 
    if(session('errors') && is_array(session('errors'))) { foreach(array_slice(session('errors'), 0, 1) as $errors => $index) { ?>
     iziToast.error({position: "topRight", timeout: 5000, icon: 'fa fa-check', title: 'Oops..', message: '<?php echo $index ?>'});  
    <?php } }elseif(session('errors')) { ?>
    iziToast.error({position: "topRight", timeout: 5000, icon: 'fa fa-check', title: 'Oops..', message: '<?php echo session('errors') ?>'});
    <?php } ?>
    <?php 
    if(session('success') && is_array(session('success'))) { foreach(array_slice(session('success'), 0, 1) as $errors => $index) { ?>
     iziToast.success({position: "topRight", timeout: 5000, icon: 'fa fa-check', title: 'Gelukt!', message: '<?php echo $index ?>'});  
    <?php } } elseif(session('success')) { ?> 
    iziToast.success({position: "topRight", timeout: 5000, icon: 'fa fa-check', title: 'Gelukt!', message: '<?php echo session('success') ?>'});
    <?php } ?>
</script>
<script type="text/javascript">
    ;( function( $ ) {

        $( '.swipebox' ).swipebox( {
            useCSS : true,
            useSVG : true,
            initialIndexOnArray : 0,
            hideCloseButtonOnMobile : false,
            removeBarsOnMobile : false,
            hideBarsDelay : 3000,
            videoMaxWidth : 1140,
            beforeOpen: function() {},
            afterOpen: null,
            afterClose: function() {},
            loopAtEnd: false
        } );

    } )( jQuery );
</script>
<script src="/assets/js/swiper-bundle.min.js"></script>
<script src="/assets/js/main.js?1615136332"></script>
<script src="/assets/js/timeline.js"></script>
<!-- ./JS -->
</body>
</html>

