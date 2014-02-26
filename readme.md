# Customized Multi Track player for multiple synced audio sources for First Baptist Church of New Smyrna Beach.

## Details
Script automatically parses through a specified data directory for folders and subfolders.
It groups the sub folders as a set of multi track files to be played and automatically generates a multi track
player instance for them.

## Instructions
Place the index.php file in the root of the player directory. Place grouped track files in a specified media / root folder, grouped by a subdirectory which is web-safe
and denotes the song name. The script will automatically display folder titles nicely.

Directory Structure:

```
music-player/
	index.php
	├── media/
	│	├── grouped-track-song-title/
	│	│	├── instrument-one.mp3
	│	│	├── instrument-two.mp3
	│	│	└── instrument-three.mp3
	│	└── another-track-song-title/
	│		├── instrument-one.mp3
	│		├── instrument-two.mp3
	│		└── instrument-three.mp3
	└──	includes/
		├──	src
		│	└── playermaker.class.php
		│
		└── bootstrap/
			├── css/
			│   ├── bootstrap.css
			│   ├── bootstrap.min.css
			│   ├── bootstrap-theme.css
			│   └── bootstrap-theme.min.css
			├── js/
			│   ├── bootstrap.js
			│   └── bootstrap.min.js
			└── fonts/
				├── glyphicons-halflings-regular.eot
				├── glyphicons-halflings-regular.svg
				├── glyphicons-halflings-regular.ttf
				└── glyphicons-halflings-regular.woff
```

Song titles will display in-list in this manner:

```
- Grouped Track Song Title
--- Instrument 1
--- Instrument 2
--- Instrument 3
- Another Track Song Title
--- Instrument 1
--- Instrument 2
--- Instrument 3
```


## Credits
The multitrack player is code is written by Binarymind and is licensed under the BSD license. Read more here:
https://github.com/binarymind/multitrackHTMLPlayer

Beautifucation of app provided by Bootstrap3

## License Info
All php code authored by Chad Windnagle is licensed under the GPL. Media (javascript, css, images, etc...) is licensed under the MIT license.

Code libraries from other authors are licensed and copyright/left by their original authors and are provided as dependencies to the the main operating php code.