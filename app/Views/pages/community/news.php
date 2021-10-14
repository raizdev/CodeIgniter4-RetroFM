<?= $this->extend('base') ?>
<?= $this->section('content') ?>
<div class="content container">
   <div class="news row no-gutters">
      <div class="col-lg-8">
         <div class="news-body">
            <div class="news-header" style="background-image: url(<?= $news->image ?>)">
               <h1><?= $news->title ?></h1>
               <p><?= $news->timestamp ?></p>
               <div class="news-author">
                  <div class="badge-name">
                     <img class="user-icon" src="img/icon/duck.gif" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quack!">
                     <a href="/profile/<?= $news->author->username ?>"><?= $news->author->username ?></a>                        
                  </div>
               </div>
            </div>
            <div class="news-text">
               <p style="text-align:center"><em><?= $news->short_story ?></em></p>
               <hr>
               <?= $news->full_story ?>
            </div>
         </div>
      </div>
      <div class="col-lg-4">
            <div class="news-comments">
            <h1><font style="vertical-align: inherit;">Reacties</font></h1>
            <?php foreach($news->reacties as $reacties) { ?>
            <div class="content-box">
               <div class="content-header">
                  <div class="user-avatar" style="background-image: url(https://avatar.habnet.nl/avatarimage.php?figure=hr-<?= $reacties->user->look ?>&amp;head_direction=3&amp;action=wav)"></div>
                  <h1>
                     <a href="https://habnet.nl/profiel/David"><img class="user-icon"></a>
                     <a href="https://habnet.nl/profiel/David"><font style="vertical-align: inherit;"><?= $reacties->user->username ?></font></a>
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
<?= $this->endSection() ?>