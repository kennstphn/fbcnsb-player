<?php
/**
 * Created by Chad Windnagle.
 * Date: 2/25/14
 * Time: 9:34 PM
 * Included scripts by various authors. See readme.md
 */


// include classes
require_once('src/makeplayer.class.php');
require_once('src/tracks.class.php');

// Configure root of the media folder.
define('MEDIA_ROOT', __DIR__ . '/media');

?>
<html lang="en">
<head>
	<!-- Bootstrap core CSS -->
	<link href="src/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="src/multitrack/css/css/screen.css" rel="stylesheet">
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
		?>

        <?php foreach($makeplayer->getSongItems() as $songItem): ?>
            <article>
                <h3>
                    <a href="#" data-toggle="modal" data-target="#<?php echo $songItem->getSongTitle(); ?>">
                        <?php echo $songItem->getSongTitle(); ?>
                    </a>
                </h3>

                <div class="modal fade" id="<?php echo $songItem->getSongTitle(); ?>" tabindex="-1" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="<?php echo $songItem->getSongTitle(); ?>">
                                    <?php echo  $songItem->getSongTitle(); ?>
                                </h4>
                            </div>
                            <div class="modal-body">
                                <div class='audio-container' name='Example with existing sources'>
                                    <?php foreach($songItem->getSongTracks() as $tracks): ?>
                                        <?php echo $tracks->getTrackTitle(); ?>
                                        <audio name="<?php echo $tracks->getTrackTitle(); ?>"
                                               url="<?php echo $tracks->getTrackPath(); ?>"
                                               controls>
                                        </audio>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <?php var_dump($songItem); ?>
        <?php endforeach; ?>
	</div>
	<script src="src/jquery/dist/jquery.min.js"></script>
	<script src="src/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="src/multitrack/js/player.js"></script>
</body>
</html>