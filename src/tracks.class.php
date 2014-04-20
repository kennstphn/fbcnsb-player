<?php
 /**
 * tracks.class.php
 *
 * @package    Joomla
 * @subpackage fbcnsb-player
 * 
 * @copyright  Copyright (C) 2013 Servant Holdings LLC
 * @license    GNU General Public License version 3
 * @version    VCS: 3/2/14.8:37 PM
 */


class song
{
    private $songPath;
    private $songTitle;
    private $songTracks;

    public function __construct()
    {

    }

    public function getSongPath()
    {
        return $this->songPath;
    }

    public function getSongTitle()
    {
        return $this->songTitle;
    }

    public function getSongTracks()
    {
        return $this->songTracks;
    }

    public function setSongPath($path)
    {
        return $this->songPath = $path;
    }

    public function setSongTitle($title)
    {
        return $this->songTitle = $title;
    }

    public function setSongTracks($tracks)
    {
        return $this->songTracks = $tracks;
    }
}

class track
{
    private $trackTitle;
    private $trackPath;

    public function getTrackTitle()
    {
        return $this->trackTitle;
    }

    public function getTrackPath()
    {
        return $this->trackPath;
    }

    public function setTrackPath($path)
    {
        return $this->trackPath = $path;
    }

    public function setTrackTitle($title)
    {
        return $this->trackTitle = $title;
    }
}