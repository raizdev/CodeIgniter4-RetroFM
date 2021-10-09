<div class="topnews container">
	<div class="row">
		
		<?php
		$db = \Config\Database::connect();
		$query = $db->table('habnet_nieuws')->get(3);

		foreach ($query->getResult() as $row) {
			echo '<div class="news-col col-lg-4">
			<a href="/News/nummer/'. $row->id .'">
			<div class="news-big" style="background-image: url('. $row->afbeelding .')">
					<div class="news-note"><font style="vertical-align: inherit;">Recent</font></div>                
						<div class="news-title"><font style="vertical-align: inherit;">'. $row->titel .'</font></div>
					</div>
				</a>
			</div>';}?>
		</div>
		</div>

<div class="topnews-event container">
	<p class="topnews-event-title"> <i class="fas fa-hammer" aria-hidden="true"></i><font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Evenementen</font></font></p>
	<div class="row">
		
	<?php
		$db = \Config\Database::connect();
		$query = $db->table('habnet_events')->get(3);

		foreach ($query->getResult() as $row) {
			echo '<div class="news-col col-lg-3">
			<a href="/Events/nummer/'. $row->id .'">
				<div class="news-small" style="background-image: url('. $row->afbeelding .')">
					<div class="news-cmts"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">TODO</font></font></div>
					<div class="news-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">'. $row->titel .'</font></font></div>
				</div>
			</a>
		</div>';}?>
	 </div>
		</div>
			</div>
		</div>