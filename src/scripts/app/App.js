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

        console.log('Website Development: http://arlg.me');
    }

    function build(){

        W.MenuScroll.init();

        if(_domVideoInner)
            _checkVideoLoaded();

        _smoothScroll();

    }

    function _checkVideoLoaded(){

        if (_domVideoInner.readyState === 4) {
            _initFit();
        } else {
            setTimeout(_checkVideoLoaded, 50);
        }

    }

    function _smoothScroll(){

        smoothScroll.init({
            speed: 800
        });

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