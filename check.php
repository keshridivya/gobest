
One: 
<iframe frameborder="0" allowfullscreen="1" id="hhhh" title="YouTube video player" width="160" height="100" src="http://www.youtube.com/embed/zXV8GMSc5Vg?enablejsapi=1&amp;origin=http%3A%2F%2Ffiddle.jshell.net"></iframe>
<br/>
Two:
<iframe frameborder="0" allowfullscreen="1" id="hhhh" title="YouTube video player" width="160" height="100" src="http://www.youtube.com/embed/LTy0TzA_4DQ?enablejsapi=1&amp;origin=http%3A%2F%2Ffiddle.jshell.net"></iframe>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="http://www.youtube.com/player_api"></script>
    <script>
    var tag = document.createElement('script');
    tag.src = "//www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    function onYouTubeIframeAPIReady() {
        var players = [];
        $('iframe').filter(function(){return this.src.indexOf('http://www.youtube.com/') == 0}).each( function (k, v) {
            if (!this.id) { this.id='embeddedvideoiframe' + k }
            players.push(new YT.Player(this.id, {
                events: {
                    'onStateChange': function(event) {
                        if (event.data == YT.PlayerState.PLAYING) {
                            $.each(players, function(k, v) {
                                if (this.getIframe().id != event.target.getIframe().id) {
                                    this.pauseVideo();
                                }
                            });
                        }
                    }
                }
            }))
        });
    }
</script>
