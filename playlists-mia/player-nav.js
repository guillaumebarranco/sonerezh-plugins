// Line 256

function $_GET(param) {
    var vars = {};
    window.location.href.replace( location.hash, '' ).replace(
        /[?&]+([^=&]+)=?([^&]*)?/gi, // regexp
        function( m, key, value ) { // callback
            vars[key] = value !== undefined ? value : '';
        }
    );

    if (param) {
        return vars[param] ? vars[param] : null;
    }

    return vars;
}

if($_GET('mia') && $_GET('mia') === "true") {

    setTimeout(() => {

        // var songs = songsManager.getPlaylistAllSongs();

        var songs = [];
        var length = $('.playlist-row [data-id]').length;
        $('.playlist-row [data-id]').each(function(index, element) {
            songs.push(songsManager.getSong($(element).attr('data-id')));
        });

        console.log('songs', songs);

        player.clearPlaylist();
        player.addAll(songs.shuffle());
        player.play(songs[0]);
    }, 2000);
}

var socket = io('http://92.222.34.194:2612');

socket.on('newPlaylist', (playlist) => {
    console.log('playlist', playlist);
    location.href = "http://music.webarranco.fr/playlists/"+playlist.playlistId+"?mia=true";
});