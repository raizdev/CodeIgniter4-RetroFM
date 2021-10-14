<?= $this->extend('base') ?>
<?= $this->section('content') ?>
<div class="topnews container">
   <div class="row">
      <?php list($first, $second, $third, $fourth, $fifth) = $news; ?>
      <div class="news-col col-lg-4">
         <a href="/news/read/<?= $first->id ?>">
            <div class="news-big" style="background-image: url(<?= $first->afbeelding ?>)">
               <div class="news-cmts"><?= $first->reactionsCount ?></div>
               <div class="news-ntfy">NIEUW</div>
               <div class="news-title"><?= $first->titel ?></div>
            </div>
         </a>
      </div>
      <?php array_shift($news) ?>
      <div class="news-col col-lg-4">
         <?php for ($i = 0; $i < 2; $i++){ ?>
         <?php if($i == 0) { ?>
         <a href="/news/read/<?= $second->id ?>">
            <div class="news-small" style="background-image: url(<?= $second->afbeelding ?>)">
               <div class="news-cmts"><?= $first->reactionsCount ?></div>
               <div class="news-title"><?= $second->titel ?></div>
            </div>
         </a>
         <?php } ?>
         <?php if($i == 1) { ?>
         <a href="/news/read/<?= $third->id ?>">
            <div class="news-small" style="background-image: url(<?= $third->afbeelding ?>)">
               <div class="news-cmts"><?= $first->reactionsCount ?></div>
               <div class="news-title"><?= $third->titel ?></div>
            </div>
         </a>
         <?php } ?> 
         <?php } ?>
      </div>
      <div class="news-col col-lg-4">
         <?php for ($i = 2; $i < 4; $i++){ ?>
         <?php if($i == 2) { ?>
         <a href="/news/read/<?= $fourth->id ?>">
            <div class="news-small" style="background-image: url(<?= $fourth->afbeelding ?>)">
               <div class="news-cmts"><?= $first->reactionsCount ?></div>
               <div class="news-title"><?= $fourth->titel ?></div>
            </div>
         </a>
         <?php } ?>
         <?php if($i == 3) { ?>
         <a href="/news/read/<?= $fifth->id ?>">
            <div class="news-small" style="background-image: url(<?= $fifth->afbeelding ?>)">
               <div class="news-cmts"><?= $fifth->reactionsCount ?></div>
               <div class="news-title"><?= $fifth->titel ?></div>
            </div>
         </a>
         <?php } ?> 
         <?php } ?>
      </div>
   </div>
</div>
<div class="content container">
   <!-- MODAL: NEWS-SEARCH -->
   <div class="modal fade" id="news-search" tabindex="-1">
      <div class="modal-dialog">
         <div class="modal-content">
            <form>
               <input type="text" class="search" name="search" placeholder="Beats, Fashion Week, Karaoke, ...">
            </form>
         </div>
      </div>
   </div>
   <!-- ./MODAL: NEWS-SEARCH -->
   <div class="modal fade timelineModal" tabindex="-1" id="timelineModal">
      <div class="modal-dialog modal-dialog-scrollable modal-lg">
         <div class="modal-content">
            <div class="modal-body"></div>
         </div>
      </div>
   </div>
   <!-- ./MODAL: LOGIN -->
   <div class="row">
      <div class="col-lg-12 col-md-12">
         <hr style="margin: 0 0 40px;">
      </div>
      <div class="col-lg-12 col-md-12 content-left">
         <div class="row">
            <div class="col-sm-12">
               <div class="badgestitle"><i class="fas fa-fire" aria-hidden="true"></i>Teilnehmerbadges</div>
            </div>
            <div class="col-sm-12 col-md-6">
               <div class="content-box">
                  <div class="content-body">
                     <div class="activity-check">
                        <div class="row">
                           <div class="col-sm-8">
                              <div class="ac-infos">
                                 <div class="ac-header">
                                    Beats
                                 </div>
                                 <div class="ac-tasks">
                                    Für mindestens 1 Punkt bei unserem Beats Wettbewerb.
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-4">
                              <div class="ac-badge">
                                 <img src="https://images.habbo.com/c_images/album1584/ES90J.png" data-toggle="tooltip" data-placement="top" title="" data-original-title="<strong>Teilnehmerbadge</strong><br>Cuteness overload">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-12 col-md-6">
               <div class="content-box">
                  <div class="content-body">
                     <div class="activity-check">
                        <div class="row">
                           <div class="col-sm-8">
                              <div class="ac-infos">
                                 <div class="ac-header">
                                    Aktivitätswettbewerb
                                 </div>
                                 <div class="ac-tasks">
                                    Für mindestens 15 Punkte bei unserem Aktivitätswettbewerb.
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-4">
                              <div class="ac-badge">
                                 <img src="https://images.habbo.com/c_images/album1584/BRB46.png" data-toggle="tooltip" data-placement="top" title="" data-original-title="<strong>Teilnehmerbadge</strong><br>if you truly love someone, accept their past and leave it there">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <style>
            .bbtitle {
            font-size: 16px;
            font-weight: var(--font-semibold);
            color: #BBC5CA;
            padding: 28px 17px;
            float: left;
            text-shadow: 0 1px 1px rgba(0,0,0,0.4);
            }
            .badgestitle {
            font-size: 18px;
            font-weight: 500;
            color: #575a5b;
            margin: 0 0 25px 0;
            }
            .badgestitle > i {
            margin-right: 10px;
            }
            .activity-check .ac-tasks {
            font-size: 1rem;
            color: #666666;
            }
            .activity-check .ac-header {
            font-weight: bolder;
            }
         </style>
         <div class="row">
            <div class="col-lg-12 col-md-12">
               <div class="badgestitle"><i class="fas fa-certificate" aria-hidden="true"></i>Neueste Badges</div>
               <div class="content-box">
                  <div class="content-header">
                     <h1>Zuletzt hochgeladene Badges</h1>
                  </div>
                  <div class="content-body">
                     <div class="badge-swiper">
                        <div class="swiper-container" id="newest-badges">
                           <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                 <div class="badge-wrapper" data-toggle="tooltip" data-placement="top" title="<b>HSJ09</b><br/><small>Hochgeladen vor 1 Tag"></small>
                                    <img src="https://images.habbo.com/c_images/album1584/HSJ09.png" class="badge-image" loading="lazy">
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="badge-wrapper" data-toggle="tooltip" data-placement="top" title="<b>HSJ02</b><br/><small>Hochgeladen vor 2 Tagen"></small>
                                    <img src="https://images.habbo.com/c_images/album1584/HSJ02.png" class="badge-image" loading="lazy">
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="badge-wrapper" data-toggle="tooltip" data-placement="top" title="<b>HSJ26</b><br/><small>Hochgeladen vor 3 Tagen"></small>
                                    <img src="https://images.habbo.com/c_images/album1584/HSJ26.png" class="badge-image" loading="lazy">
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="badge-wrapper" data-toggle="tooltip" data-placement="top" title="<b>NL879</b><br/><small>Hochgeladen vor 3 Tagen"></small>
                                    <img src="https://images.habbo.com/c_images/album1584/NL879.png" class="badge-image" loading="lazy">
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="badge-wrapper" data-toggle="tooltip" data-placement="top" title="<b>NL878</b><br/><small>Hochgeladen vor 3 Tagen"></small>
                                    <img src="https://images.habbo.com/c_images/album1584/NL878.png" class="badge-image" loading="lazy">
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="badge-wrapper" data-toggle="tooltip" data-placement="top" title="<b>FR42D</b><br/><small>Hochgeladen vor 5 Tagen"></small>
                                    <img src="https://images.habbo.com/c_images/album1584/FR42D.png" class="badge-image" loading="lazy">
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="badge-wrapper" data-toggle="tooltip" data-placement="top" title="<b>FR41D</b><br/><small>Hochgeladen vor 5 Tagen"></small>
                                    <img src="https://images.habbo.com/c_images/album1584/FR41D.png" class="badge-image" loading="lazy">
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="badge-wrapper" data-toggle="tooltip" data-placement="top" title="<b>HSJ20</b><br/><small>Hochgeladen vor 1 Woche"></small>
                                    <img src="https://images.habbo.com/c_images/album1584/HSJ20.png" class="badge-image" loading="lazy">
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="badge-wrapper" data-toggle="tooltip" data-placement="top" title="<b>HSJ21</b><br/><small>Hochgeladen vor 1 Woche"></small>
                                    <img src="https://images.habbo.com/c_images/album1584/HSJ21.png" class="badge-image" loading="lazy">
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="badge-wrapper" data-toggle="tooltip" data-placement="top" title="<b>HSJ01</b><br/><small>Hochgeladen vor 1 Woche"></small>
                                    <img src="https://images.habbo.com/c_images/album1584/HSJ01.png" class="badge-image" loading="lazy">
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="badge-wrapper" data-toggle="tooltip" data-placement="top" title="<b>NL877</b><br/><small>Hochgeladen vor 1 Woche"></small>
                                    <img src="https://images.habbo.com/c_images/album1584/NL877.png" class="badge-image" loading="lazy">
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="badge-wrapper" data-toggle="tooltip" data-placement="top" title="<b>HSJ08</b><br/><small>Hochgeladen vor 1 Woche"></small>
                                    <img src="https://images.habbo.com/c_images/album1584/HSJ08.png" class="badge-image" loading="lazy">
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="badge-wrapper" data-toggle="tooltip" data-placement="top" title="<b>US229</b><br/><small>Hochgeladen vor 1 Woche"></small>
                                    <img src="https://images.habbo.com/c_images/album1584/US229.png" class="badge-image" loading="lazy">
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="badge-wrapper" data-toggle="tooltip" data-placement="top" title="<b>HSJ06</b><br/><small>Hochgeladen vor 1 Woche"></small>
                                    <img src="https://images.habbo.com/c_images/album1584/HSJ06.png" class="badge-image" loading="lazy">
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="badge-wrapper" data-toggle="tooltip" data-placement="top" title="<b>HSJ07</b><br/><small>Hochgeladen vor 1 Woche"></small>
                                    <img src="https://images.habbo.com/c_images/album1584/HSJ07.png" class="badge-image" loading="lazy">
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="badge-wrapper" data-toggle="tooltip" data-placement="top" title="<b>BRB51</b><br/><small>Hochgeladen vor 1 Woche"></small>
                                    <img src="https://images.habbo.com/c_images/album1584/BRB51.png" class="badge-image" loading="lazy">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-button-prev" id="slider-prev-newbadge"></div>
                        <div class="swiper-button-next" id="slider-next-newbadge"></div>
                     </div>
                  </div>
               </div>
               <div class="content-box">
                  <div class="content-header">
                     <h1>Zuletzt beschriftete Badges</h1>
                  </div>
                  <div class="content-body">
                     <div class="badge-swiper">
                        <div class="swiper-container" id="labeled-badges">
                           <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                 <div class="badge-wrapper" data-toggle="tooltip" data-placement="top" title="<b>PT814</b><br/>&#187;BobbaGames Teilnehmer #Oktober&#171;<br/><small>Beschriftet vor 1 Tag<br/>Hotel: de"></small>
                                    <img src="https://images.habbo.com/c_images/album1584/PT814.png" class="badge-image" loading="lazy">
                                    <img src="/assets/img/de.png" class="badge-country">
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="badge-wrapper" data-toggle="tooltip" data-placement="top" title="<b>FR499</b><br/>&#187;Landis Sammler #Oktober&#171;<br/><small>Beschriftet vor 1 Tag<br/>Hotel: de"></small>
                                    <img src="https://images.habbo.com/c_images/album1584/FR499.png" class="badge-image" loading="lazy">
                                    <img src="/assets/img/de.png" class="badge-country">
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="badge-wrapper" data-toggle="tooltip" data-placement="top" title="<b>VPV23</b><br/>&#187;Giveaway Bulldog Inglese&#171;<br/><small>Beschriftet vor 1 Tag<br/>Hotel: it"></small>
                                    <img src="https://images.habbo.com/c_images/album1584/VPV23.png" class="badge-image" loading="lazy">
                                    <img src="/assets/img/it.png" class="badge-country">
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="badge-wrapper" data-toggle="tooltip" data-placement="top" title="<b>VPV26</b><br/>&#187;Hai partecipato alla Competizione Il ritorno degli anni '80&#171;<br/><small>Beschriftet vor 1 Tag<br/>Hotel: it"></small>
                                    <img src="https://images.habbo.com/c_images/album1584/VPV26.png" class="badge-image" loading="lazy">
                                    <img src="/assets/img/it.png" class="badge-country">
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="badge-wrapper" data-toggle="tooltip" data-placement="top" title="<b>VPV27</b><br/>&#187;Mega Collezionista di Oggetti Crafting&#171;<br/><small>Beschriftet vor 1 Tag<br/>Hotel: it"></small>
                                    <img src="https://images.habbo.com/c_images/album1584/VPV27.png" class="badge-image" loading="lazy">
                                    <img src="/assets/img/it.png" class="badge-country">
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="badge-wrapper" data-toggle="tooltip" data-placement="top" title="<b>VPV25</b><br/>&#187;Sei rientrato nella top 5 della Competizione Il ritorno degli anni '80&#171;<br/><small>Beschriftet vor 1 Tag<br/>Hotel: it"></small>
                                    <img src="https://images.habbo.com/c_images/album1584/VPV25.png" class="badge-image" loading="lazy">
                                    <img src="/assets/img/it.png" class="badge-country">
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="badge-wrapper" data-toggle="tooltip" data-placement="top" title="<b>VPV20</b><br/>&#187;Frenchie&#171;<br/><small>Beschriftet vor 1 Tag<br/>Hotel: it"></small>
                                    <img src="https://images.habbo.com/c_images/album1584/VPV20.png" class="badge-image" loading="lazy">
                                    <img src="/assets/img/it.png" class="badge-country">
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="badge-wrapper" data-toggle="tooltip" data-placement="top" title="<b>VPV24</b><br/>&#187;Vincitore Competizione Il ritorno degli anni '80&#171;<br/><small>Beschriftet vor 1 Tag<br/>Hotel: it"></small>
                                    <img src="https://images.habbo.com/c_images/album1584/VPV24.png" class="badge-image" loading="lazy">
                                    <img src="/assets/img/it.png" class="badge-country">
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="badge-wrapper" data-toggle="tooltip" data-placement="top" title="<b>VPV08</b><br/>&#187;Affare Stanza Centro Commerciale Habbo&#171;<br/><small>Beschriftet vor 1 Tag<br/>Hotel: it"></small>
                                    <img src="https://images.habbo.com/c_images/album1584/VPV08.png" class="badge-image" loading="lazy">
                                    <img src="/assets/img/it.png" class="badge-country">
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="badge-wrapper" data-toggle="tooltip" data-placement="top" title="<b>VPV13</b><br/>&#187;Auto di Lusso Scintillante LTD&#171;<br/><small>Beschriftet vor 1 Tag<br/>Hotel: it"></small>
                                    <img src="https://images.habbo.com/c_images/album1584/VPV13.png" class="badge-image" loading="lazy">
                                    <img src="/assets/img/it.png" class="badge-country">
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="badge-wrapper" data-toggle="tooltip" data-placement="top" title="<b>VPV07</b><br/>&#187;Affare Stanza Studio moderno&#171;<br/><small>Beschriftet vor 1 Tag<br/>Hotel: it"></small>
                                    <img src="https://images.habbo.com/c_images/album1584/VPV07.png" class="badge-image" loading="lazy">
                                    <img src="/assets/img/it.png" class="badge-country">
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="badge-wrapper" data-toggle="tooltip" data-placement="top" title="<b>VPV11</b><br/>&#187;Jukebox Retro Raro&#171;<br/><small>Beschriftet vor 1 Tag<br/>Hotel: it"></small>
                                    <img src="https://images.habbo.com/c_images/album1584/VPV11.png" class="badge-image" loading="lazy">
                                    <img src="/assets/img/it.png" class="badge-country">
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="badge-wrapper" data-toggle="tooltip" data-placement="top" title="<b>VPV12</b><br/>&#187;Moto Miami Rara&#171;<br/><small>Beschriftet vor 1 Tag<br/>Hotel: it"></small>
                                    <img src="https://images.habbo.com/c_images/album1584/VPV12.png" class="badge-image" loading="lazy">
                                    <img src="/assets/img/it.png" class="badge-country">
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="badge-wrapper" data-toggle="tooltip" data-placement="top" title="<b>VPV06</b><br/>&#187;Affare Stanza Banca&#171;<br/><small>Beschriftet vor 1 Tag<br/>Hotel: it"></small>
                                    <img src="https://images.habbo.com/c_images/album1584/VPV06.png" class="badge-image" loading="lazy">
                                    <img src="/assets/img/it.png" class="badge-country">
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="badge-wrapper" data-toggle="tooltip" data-placement="top" title="<b>US227</b><br/>&#187;Pioggia autunnale&#171;<br/><small>Beschriftet vor 1 Tag<br/>Hotel: it"></small>
                                    <img src="https://images.habbo.com/c_images/album1584/US227.png" class="badge-image" loading="lazy">
                                    <img src="/assets/img/it.png" class="badge-country">
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="badge-wrapper" data-toggle="tooltip" data-placement="top" title="<b>US228</b><br/>&#187;Passeggiata nel bosco&#171;<br/><small>Beschriftet vor 1 Tag<br/>Hotel: it"></small>
                                    <img src="https://images.habbo.com/c_images/album1584/US228.png" class="badge-image" loading="lazy">
                                    <img src="/assets/img/it.png" class="badge-country">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-button-prev" id="slider-prev-labeledBadges"></div>
                        <div class="swiper-button-next" id="slider-next-labeledBadges"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-sm-12">
               <div class="badgestitle"><i class="fas fa-trophy" aria-hidden="true"></i>Bestenlisten</div>
            </div>
            <div class="col-sm-12 col-md-6">
               <div class="content-box">
                  <div class="content-header">
                     <h1>Beats Ranking</h1>
                  </div>
                  <div class="content-body">
                     <ul class="list-beats">
                        <li data-toggle="tooltip" data-placement="top" title="pumaboy322 belegt den 1. Platz mit 180 Beats">
                           <div class="circle" style="background-image: url('https://www.habbo.de/habbo-imaging/avatarimage?img_format=gif&user=pumaboy322&action=std&direction=2&head_direction=3&gesture=spk&size=b')"></div>
                           <span>
                              <a href="/user/pumaboy322">pumaboy322</a>
                              <p>180 Beats</p>
                           </span>
                        </li>
                        <li data-toggle="tooltip" data-placement="top" title="Arya-97 belegt den 2. Platz mit 75 Beats">
                           <div class="circle" style="background-image: url('https://www.habbo.de/habbo-imaging/avatarimage?img_format=gif&user=Arya-97&action=std&direction=2&head_direction=3&gesture=spk&size=b')"></div>
                           <span>
                              <a href="/user/Arya-97">Arya-97</a>
                              <p>75 Beats</p>
                           </span>
                        </li>
                        <li data-toggle="tooltip" data-placement="top" title="Lucenza belegt den 3. Platz mit 73 Beats">
                           <div class="circle" style="background-image: url('https://www.habbo.de/habbo-imaging/avatarimage?img_format=gif&user=Lucenza&action=std&direction=2&head_direction=3&gesture=spk&size=b')"></div>
                           <span>
                              <a href="/user/Lucenza">Lucenza</a>
                              <p>73 Beats</p>
                           </span>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-sm-12 col-md-6">
               <div class="content-box">
                  <div class="content-header">
                     <h1>Noten Ranking</h1>
                  </div>
                  <div class="content-body">
                     <ul class="list-beats">
                        <li data-toggle="tooltip" data-placement="top" title="T0WLY belegt den 1. Platz mit 48 Noten">
                           <div class="circle" style="background-image: url('/assets/avatar/463.png');background-size: contain;image-rendering: auto;"></div>
                           <span>
                              <a href="/user/T0WLY">T0WLY</a>
                              <p>48 Noten</p>
                           </span>
                        </li>
                        <li data-toggle="tooltip" data-placement="top" title=":SoUtHaFrIkA: belegt den 2. Platz mit 34 Noten">
                           <div class="circle" style="background-image: url('/assets/avatar/1024.png');background-size: contain;image-rendering: auto;"></div>
                           <span>
                              <a href="/user/:SoUtHaFrIkA:">:SoUtHaFrIkA:</a>
                              <p>34 Noten</p>
                           </span>
                        </li>
                        <li data-toggle="tooltip" data-placement="top" title="MalerWanne belegt den 3. Platz mit 34 Noten">
                           <div class="circle" style="background-image: url('/assets/avatar/1032.png');background-size: contain;image-rendering: auto;"></div>
                           <span>
                              <a href="/user/MalerWanne">MalerWanne</a>
                              <p>34 Noten</p>
                           </span>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- ./CONTENT: LEFT -->
      <!-- CONTENT: RIGHT -->
      <div class="col-lg-4 col-md-12 content-right">
         <style>
            .content-box {
            margin: 25px 0 45px;
            }
            .timelineTitle {
            margin: 0 0 25px 0;
            }
            @media (max-width: 767px) {
            .content {
            margin-top: -100px;
            }}
         </style>
         <style>
            .werbung_rechts {display: none;}
         </style>
      </div>
      <!-- ./CONTENT: RIGHT -->
   </div>
</div>
<?= $this->endSection() ?>