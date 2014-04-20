<?php
/**
 * Created by PhpStorm.
 * User: administrator
 * Date: 2/25/14
 * Time: 11:07 PM
 */


class makeplayer {

	private $media_root;

	public function __construct()
	{

	}

	public function buildFolderTree()
	{
        try
		{
			$folders = $this->getFilesystemList($this->media_root);
			return $folders;

		}
		catch (Exception $e) {
			echo 'Caught exception: ',  $e->getMessage(), "\n";
		}

		return false;
	}

	public function setMediaRoot($media_root)
	{
		return $this->media_root = $media_root;
	}

	public function getMediaRoot()
	{
		return $this->media_root;
	}

	public function getFilesystemList($root)
	{
        if (! is_dir($root))
		{
			throw new Exception('The folder ' . $root . ' does not exist!');
			return false;
		}

		$folders = new FilesystemIterator($root);

		return $folders;
	}

    public function getSongItems()
    {
        $songs = array();
        foreach ($this->getFilesystemList($this->media_root) as $list_item)
        {
            $song = new song;
            $song->setSongTitle(basename($list_item->getRealPath()));
            $song->setSongPath($list_item->getFilename());

            $song->setSongTracks($this->getTrackItems($list_item->getRealPath()));

            $songs[] = $song;


        }

        return $songs;

    }

    public function getTrackItems($songPath)
    {
        $tracks = array();
        foreach ($this->getFilesystemList($songPath) as $track_item)
        {
            $track = new track;

            $track->setTrackTitle(basename($track_item->getRealPath()));
            $track->setTrackPath('/' . MEDIA_ROOT . '/' . basename($songPath) . '/' . basename($track_item->getRealPath()));
            $tracks[] = $track;
        }
        return $tracks;
    }

}