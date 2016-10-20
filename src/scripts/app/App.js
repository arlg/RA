var W = W || {};

W.App = function(){
    
    var _domPlayer, 
        _domVideo,
        _domVideoInner;

    function init(){

        _domPlayer = document.querySelector('#home_video');
        _domVideo = document.querySelector('.video_wrapper');
        _domVideoInner = document.querySelector('.video_wrapper video');

        build();

    }

    function build(){

       console.log('Entry point');

       _domVideoInner.addEventListener('loadeddata', function() {
           _initFit();
        }, false);

    }

    function _initFit(){
        var cover = true;
        fit( _domVideo, _domPlayer, {cover: true, watch: true, vAlign: fit.CENTER} );
    }

    return {
        init : init
    };

}();


// Entry point
document.addEventListener('DOMContentLoaded', function(){

    W.App.init();

});