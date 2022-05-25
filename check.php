<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .about-info {
            color: #fe235b;
    font-size: 20px;
}
        
        </style>
</head>
<body>
<div class="row">

<div class="col-xl-6 mt-3">
    <div class="beforeAfter" data-bareservedstyle="position:static;overflow:visible" style="position: relative; overflow: hidden;">
        
        
    <div style="position:relative !important;width:100% !important;height:100%  !important;-webkit-user-select:none;-ms-user-select:none;user-select:none;"><img src="image/about-img2.webp" data-bareservedstyle="position:static;top:auto;left:auto;width:720px;height:720px;z-index:auto;float:none" style="position: relative; top: 0px; left: 0px; width: 100%;"></div><div style="position:absolute !important;width:50% !important;height:100% !important;top:0px !important;right:0px !important;overflow:hidden !important;-webkit-user-select:none;-ms-user-select:none;user-select:none;"><img src="image/about-img3.jpg" data-bareservedstyle="position:static;top:auto;left:auto;width:720px;height:720px;z-index:auto" style="position: absolute; top: 0px; right: 0px; width: 546px; height: 546px; z-index: 1;"></div><div style="background-color: rgb(250, 250, 250); cursor: e-resize; opacity: 0.4; z-index: 2; user-select: none; position: absolute !important; width: 2px !important; height: 100% !important; top: 0px !important; right: 50% !important; overflow: visible !important; transform: translateX(50%) !important;"><div style="position:relative;width:100%;height:100%;"><div style="position: absolute; width: 32px; height: 32px; line-height: 30px; text-align: center; top: 50%; left: 50%; transform: translate(-50%, -50%); border-radius: 50%; background-color: rgb(250, 250, 250);"><i style="border-style: solid; border-color: rgb(51, 51, 51); border-image: initial; border-width: 0px 2px 2px 0px; display: inline-block; padding: 3px; transform: rotate(135deg);"></i><i style="border-style: solid; border-color: rgb(51, 51, 51); border-image: initial; border-width: 2px 0px 0px 2px; display: inline-block; padding: 3px; transform: rotate(135deg);"></i></div></div></div></div>
    
</div>

<div class="col-xl-6">
<script>
    var tag = document.createElement('script');
    tag.src = "//www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    function onYouTubeIframeAPIReady() {
        var $ = jQuery;
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

One: 
<iframe frameborder="0" allowfullscreen="1" title="YouTube video player" width="160" height="100" src="http://www.youtube.com/embed/zXV8GMSc5Vg?enablejsapi=1&amp;origin=http%3A%2F%2Ffiddle.jshell.net"></iframe>
<br/>
Two:
<iframe frameborder="0" allowfullscreen="1" title="YouTube video player" width="160" height="100" src="http://www.youtube.com/embed/LTy0TzA_4DQ?enablejsapi=1&amp;origin=http%3A%2F%2Ffiddle.jshell.net"></iframe>
</div>

</div>
</body>
</html>