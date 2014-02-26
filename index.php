<?php
/**
 * Created by Chad Windnagle.
 * Date: 2/25/14
 * Time: 9:34 PM
 * Included scripts by various authors. See readme.md
 */


// include classes
require_once('src/makeplayer.class.php');

// Configure root of the media folder.
define('MEDIA_ROOT', __DIR__ . '/media');

?>
<html lang="en">
<head>
	<!-- Bootstrap core CSS -->
	<link href="src/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Media Player</a>
		</div>
	</div>
</div>

	<div class="container">
		<h3>Testing</h3>

		<?php
			$makeplayer = new makeplayer();
			$makeplayer->setMediaRoot(MEDIA_ROOT);


			foreach($makeplayer->buildFolderTree() as $file) {
				if($file->isDir()) {
					echo ($file->getRealpath()), PHP_EOL;
				}
			}

		?>
		<audio preload="none">
			<source src="src/multitrack/data/sample.ogg" type="audio/ogg" />
			<source src="src/multitrack/data/sample.ogg" type="audio/mp3" />
		</audio>


	</div>
	<script src="src/jquery/dist/jquery.min.js"></script>
	<script src="src/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="src/tracks.js"></script>
	<script type="text/javascript">
		var song = new tracks.Tracks(document.getElementsByTagName('audio'));
		song.on('canplay', function(){
			this.play();
		}).preload();
	</script>
</body>
</html>