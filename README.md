# WordPressDropboxMp3Shortcode
A simple Wordpress plugin that creates an [mp3] shortcode to work specifically with audio files in Dropbox

While it works with most any URL, it specifically is designed to work with MP3 files on Dropbox for which you have a public URL. Normally, this wouldn't work because Dropbox public URL isn't intended to be used inside an &lt;audio&gt; tag.

# Installation
1. Zip up the dropbox-mp3-player folder
2. In WordPress, Plugins->Add New->Upload-> choose the zip you created.
3. In WordPress, activate the plugin

# Usage
1. Get the link to a DropBox audio file. (In Dropbox, select an MP3, click Share->Get a link->Copy link) (Note: any mp3 url will work, not just Dropbox)
2. In WordPress post, use the shortcode [mp3 url]. For example, [mp3 http://foo.com/my.mp3]
