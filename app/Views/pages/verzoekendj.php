<div class="content container">
	<div class="news row no-gutters">
		
				<div class="col-lg-8">
					<div class="news-body">
					<div class="news-header" style="background-image: url(https://cdn.davidv053.nl/habnet/nieuws/VxT0uw1.jpg)">
						<h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bericht van de HabnetFM Developer</font></font></h1>
						<p><font style="vertical-align: inherit; color: lightgreen;"><font style="vertical-align: inherit;">HabnetFM CMS 1.0</font></font></p>
							<div class="news-author">
								<div class="badge-name">
									<img class="user-icon" src="https://habbo.city/habbo-imaging/avatarimage?figure=wa-2001-62.hr-1121832-31.lg-285-110.hd-3092-24.ch-215-62.cc-3075-110.ca-3084-78-78.sh-290-62&amp;head_direction=3&amp;gesture=sml&amp;action=crr=667&amp;headonly=1" style="position:absolute;top:110px;left:110px;"><font style="vertical-align: inherit;">Milan</font>
								</div>
							</div>
							</div>
							
							<div class="news-text">
								<h1>Welkom <?php echo session()->get('username'); ?> </h1><span>Uw rang is: <b><?= $ranknaam ?></b></span>
								<hr>
								Dit is de verzoeklijn overview, hier kan je de ingestuurde verzoeken bekijken. Maar een DJ+ kan het verwerken.
							</div>
						</div>
						</div>
				        <div class="col-lg-4">
            <div class="news-comments">
                <h1><font style="vertical-align: inherit;">Inkomende Verzoeken</font></h1>
		<div style="overflow-y: auto; max-height:300px;">
		<?php
		$db = \Config\Database::connect();
		$query = $db->table('habnet_verzoeken')->get(10);

		foreach ($query->getResult() as $row) {
			echo '<div class="content-box">
			<div class="content-header">
				<div class="user-avatar" style="background-image: url(https://habbo.city/habbo-imaging/avatarimage?figure='. $row->userlook .'&amp;head_direction=3&amp;gesture=sml&amp;action=crr=667&amp;headonly=1)"></div>
						
						<h1>
						
					<font style="vertical-align: inherit;">'. $row->habnet_naam .'</font>
						
						<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">#'. $row->id .'</font></font></p>
						<div class="content-body"><font style="vertical-align: inherit;">
						'. $row->verzoeken .' <br><br>
						
						
						</div>
					</div>
				</h1>
			</div>
			';}?>
			
        </div>
	</div>
</div></div></div>