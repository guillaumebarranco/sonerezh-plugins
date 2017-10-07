$(function( ){

	function getLastSong() {

		$.ajax({
            url: baseurl + "/streams/last",
            method: 'GET',
            success: function(response) {
            	console.log('response', response);

            	var songId = response.Song.id;

            	var songs = [songsManager.getSong(songId)];

		        populatePlaylist(songs);
		        if (player.isShuffle()) {
		            player.setFirst(songId);
		        }

		        if (player.getCurrentTrack().id == songId) {
		            player.play();
		        } else {
		            player.play(songId);
		        }

            }, error: function(err) {
            	console.log('err', err);
            }
        });
	}

	getLastSong();
});
