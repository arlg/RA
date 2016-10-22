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
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIkFwcC5qcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSIsImZpbGUiOiJtYWluLmpzIiwic291cmNlc0NvbnRlbnQiOlsidmFyIFcgPSBXIHx8IHt9O1xuXG5XLkFwcCA9IGZ1bmN0aW9uKCl7XG4gICAgXG4gICAgdmFyIF9kb21QbGF5ZXIsIFxuICAgICAgICBfZG9tVmlkZW8sXG4gICAgICAgIF9kb21WaWRlb0lubmVyO1xuXG4gICAgZnVuY3Rpb24gaW5pdCgpe1xuXG4gICAgICAgIF9kb21QbGF5ZXIgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcjaG9tZV92aWRlbycpO1xuICAgICAgICBfZG9tVmlkZW8gPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcudmlkZW9fd3JhcHBlcicpO1xuICAgICAgICBfZG9tVmlkZW9Jbm5lciA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJy52aWRlb193cmFwcGVyIHZpZGVvJyk7XG5cbiAgICAgICAgYnVpbGQoKTtcblxuICAgIH1cblxuICAgIGZ1bmN0aW9uIGJ1aWxkKCl7XG5cbiAgICAgICAgX2NoZWNrVmlkZW9Mb2FkZWQoKTtcbiAgICAgICAgX3Ntb290aFNjcm9sbCgpO1xuXG4gICAgfVxuXG4gICAgZnVuY3Rpb24gX2NoZWNrVmlkZW9Mb2FkZWQoKXtcblxuICAgICAgICBpZiAoX2RvbVZpZGVvSW5uZXIucmVhZHlTdGF0ZSA9PT0gNCkge1xuICAgICAgICAgICAgX2luaXRGaXQoKTtcbiAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgIHNldFRpbWVvdXQoX2NoZWNrVmlkZW9Mb2FkZWQsIDUwKTtcbiAgICAgICAgfVxuXG4gICAgfVxuXG4gICAgZnVuY3Rpb24gX3Ntb290aFNjcm9sbCgpe1xuXG4gICAgICAgIHNtb290aFNjcm9sbC5pbml0KHtcbiAgICAgICAgICAgIHNwZWVkOiA4MDBcbiAgICAgICAgfSk7XG5cbiAgICB9XG5cbiAgICBmdW5jdGlvbiBfaW5pdEZpdCgpe1xuICAgICAgICB2YXIgY292ZXIgPSB0cnVlO1xuICAgICAgICBmaXQoIF9kb21WaWRlbywgX2RvbVBsYXllciwge2NvdmVyOiB0cnVlLCB3YXRjaDogdHJ1ZSwgdkFsaWduOiBmaXQuQ0VOVEVSfSApO1xuICAgIH1cblxuICAgIHJldHVybiB7XG4gICAgICAgIGluaXQgOiBpbml0XG4gICAgfTtcblxufSgpO1xuXG5cbi8vIEVudHJ5IHBvaW50XG5kb2N1bWVudC5hZGRFdmVudExpc3RlbmVyKCdET01Db250ZW50TG9hZGVkJywgZnVuY3Rpb24oKXtcblxuICAgIFcuQXBwLmluaXQoKTtcblxufSk7Il19
