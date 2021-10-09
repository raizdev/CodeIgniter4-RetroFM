<div class="content container">
   <div class="news row no-gutters">
      <div class="col-lg-8">
         <div class="news-body">
            <div class="news-header" style="background-image: url(<?= $data->afbeelding ?>)">
               <h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?= $data->titel ?></font></font></h1>
               <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Notice</font></font></p>
               <div class="news-author">
                  <div class="badge-name">
                     <img class="user-icon" src="https://habbo.city/habbo-imaging/avatarimage?figure=hd-190-2.ha-99878498-62.hr-6158598-45-31.sh-295-92.lg-280-63.ch-266-64.ca-201422-62-62&amp;head_direction=3&amp;gesture=sml&amp;action=crr=667&amp;headonly=1" style="position:absolute;top:110px;left:110px;"><a href="/Profiel/gebruiker/<?= $data->author ?>"><font style="vertical-align: inherit;"><?= $data->author ?></a></font>
                  </div>
               </div>
            </div>
            <div class="news-text">
               <?= $data->tekst ?>
            </div>
         </div>
      </div>
      <div class="col-lg-4">
         <div class="news-comments">
            <h1><font style="vertical-align: inherit;">Reacties</font></h1>
            <?php foreach($data->reacties as $reacties) { ?>
            <div class="content-box">
               <div class="content-header">
                  <div class="user-avatar" style="background-image: url(https://avatar.habnet.nl/avatarimage.php?figure=hr-3260-42.hd-3103-1370.ch-65107-73.lg-270-63.sh-3252-92-62.ca-1802-92.wa-9001123-68&amp;head_direction=3&amp;action=wav)"></div>
                  <h1>
                     <a href="https://habnet.nl/profiel/David"><img class="user-icon"></a>
                     <a href="https://habnet.nl/profiel/David"><font style="vertical-align: inherit;"><?= $reacties->user['username'] ?></font></a>
                     <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></p>
                     <div class="content-body"><font style="vertical-align: inherit;">
                       <?= $reacties->message ?><br><br>
                        </font>
                     </div>
                  </h1>
               </div>
            </div>
            <?php } ?>
         </div>
      </div>
   </div>
</div>