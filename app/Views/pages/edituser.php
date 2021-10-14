<div class="content container">
	<div class="row">
        <div class="col-lg-12 col-md-12"> </div>
            <div class="col-lg-8 col-md-12 content-left">
                <div class="content-box">
				<?php if (session()->get('success')): ?>
          <div class="alert alert-success" role="alert">
            <?= session()->get('success') ?>
          </div>
        <?php endif; ?>
					<div class="content-header">
						<h1><font style="vertical-align: inherit;">Acties</font></h1>
					</div>
                
					<div style="display: flex;"class="content-body">
					<form method="post" style="width: 100%;">
					<button name="force_logoff" style="width: 48%;">Forceer Uitlog</button>
					</form>
                    <hr>
                    <button name="" value="1" style="width: 48%;">Ban Gebruiker</button>
					</div>
				</div>
            </div>
            <div class="col-lg-4 col-md-12 content-right">
                <div class="content-box">
					<div class="content-header">
						<h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Admin Paneel</font></font></h1>
					</div>
					<div class="content-body">
						<img src="/templates/habnetfm/assets/img/file_62.gif" align="right">
						<b><font style="vertical-align: inherit;">Admin Acties op <?= $username ?></font></b>
						<br><br>
						<img alt="habnetter" src="https://avatar.habnet.nl/avatarimage.php?figure=<?= $look ?>&amp;head_direction=2&amp;gesture=sml&amp;action=crr=667" width="150px;">
						<br>U hebt <b><?= $username ?><?= $rank ?></b> geselecteert.<br>
						<hr>
						<small>
							<i>
								<font style="vertical-align: inherit;">Voordat u iets verandert, wees <b>zeker</b> dat het de juiste gebruiker is die je wilt veranderen.</font>
							</i>
						</small>
					</div>
				</div>
            </div>
    </div>
</div>