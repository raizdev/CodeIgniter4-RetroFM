<div class="content container">
	<div class="row">
        <div class="col-lg-12 col-md-12"> </div>
            <div class="col-lg-8 col-md-12 content-left">
                <div class="content-box">
					<div class="content-header">
						<h1><font style="vertical-align: inherit;">Verzoeklijn</font></h1>
					</div>
					<div class="content-body">
                    <?php if (isset($validation)): ?>
            <div class="col-12">
              <div class="alert alert-danger" role="alert">
                <?= $validation->listErrors() ?>
              </div>
            </div>
          <?php endif; ?>
        <center>
        <?php if (session()->get('success')): ?>
          <div class="alert alert-success" role="alert">
            <?= session()->get('success') ?>
          </div>
        <?php endif; ?>
		<?php if (session()->get('isLoggedIn')): ?>
			
		</div>
		<center>
					<form method="post">
                            <input type="hidden" value="<?= $user['username'] ?>" name="habnet_naam" style="margin-top: 10px;" readonly>
							<input type="text"  placeholder="Plaats je verzoek" name="verzoeken" style="margin-top: 10px;">
							<input type="submit" class="button btn btn-block btn-primary" value="Plaats je verzoek" style="margin-top: 10px;">
						</form>
			</div>
		
		<?php else: ?>
		<h4>Je moet eerst inloggen met je Habnet Naam. Voordat je een verzoek kan in sturen.</h4>
		</div>
			<?php endif; ?>

		<?php if (session()->get('isLoggedIn')): ?>

			<?php 
				
				

				?>
		
				<div class="content-box">
					<div class="content-header">
						<h1><font style="vertical-align: inherit;">Jouw Vorige Verzoek</font></h1>
					</div>
	
					<div class="content-body">
					<?php
				$db = \Config\Database::connect();
				$query = $db->table('habnet_verzoeken')->where('habnet_naam', $user['username'])->get(1);

			if ($user['username'] == true) {
				foreach ($query->getResult() as $row) {
					echo '<p style="background-color: brown; text-align: center; color: white;">Jouw vorige Verzoek: <span style="color: yellow;">' .  $row->verzoeken . 
					'</span> staat nog actief in ons systeem. <br>En zal ook zo snel mogelijk bekeken worden.</p>'
					;} 	
			}
			?>	
	</div>
	<?php endif; ?>
					</div>
				</div>
        </center>
            <div class="col-lg-4 col-md-12 content-right">
                <div class="content-box">
					<div class="content-header">
						<h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wat is de verzoeklijn?</font></font></h1>
					</div>
				
					<div class="content-body">
						<img src="/assets/img/file_62.gif" align="right">
						<b><font style="vertical-align: inherit;">Stuur een berichtje naar de DJ!</font></b>
						<br><br>
						<font style="vertical-align: inherit;">
						Via de verzoeklijn kan jij als luisteraar een liedje aanvragen of een mooi berichtje sturen, bijvoorbeeld over hoe jouw dag was.</font>
						<br><br>
						<hr>
						<small>
							<i>
								<font style="vertical-align: inherit;">Houd de verzoeklijn netjes, deze <b> checken </b>wij constant.<hr>
								<p style="color: red;">Schelden in verzoeken en / of trollen leiden naar een <b>IP Blacklist</b> van ons Verzoek Systeem.<br></p></font>
							</i>
						</small>
					</div>
				</div>
            </div>
    </div>
</div>