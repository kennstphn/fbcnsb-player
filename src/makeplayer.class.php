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
			$folders = $this->getFolderList($this->media_root);
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

	public function getFolderList($root)
	{
		if (! is_dir($root))
		{
			throw new Exception('The folder ' . $root . ' does not exist!');
			return false;
		}

		$folders = new DirectoryIterator($root);

		return $folders;
	}

}