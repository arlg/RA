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

        W.MenuScroll.init();
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
W.MenuScroll = (function(){
	
	var menu = document.querySelector('#header'),
		menuYPos = 0;

    function init(){
    	if( menu ){
    	   _stickyScroll();
           _initEvents();
        }
        
    }

    function _initEvents(){

    	var resizeDebounce = _.debounce(_onResize, 50);

    	window.addEventListener('resize', resizeDebounce, false);
    	window.addEventListener('scroll', _stickyScroll, false);

    }

    function _stickyScroll(){

    	if( window.pageYOffset > menuYPos ){
    		menu.classList.add('isfixed');
    	}else{
    		menu.classList.remove('isfixed');
    	}

    }

    function _onResize(){
    	menuYPos = 0;
    }

    return {
        init : init
    };

})();
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIkFwcC5qcyIsIlZpZXdzL01lbnVTY3JvbGwuanMiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQzdEQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBIiwiZmlsZSI6Im1haW4uanMiLCJzb3VyY2VzQ29udGVudCI6WyJ2YXIgVyA9IFcgfHwge307XG5cblcuQXBwID0gZnVuY3Rpb24oKXtcbiAgICBcbiAgICB2YXIgX2RvbVBsYXllciwgXG4gICAgICAgIF9kb21WaWRlbyxcbiAgICAgICAgX2RvbVZpZGVvSW5uZXI7XG5cbiAgICBmdW5jdGlvbiBpbml0KCl7XG5cbiAgICAgICAgX2RvbVBsYXllciA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJyNob21lX3ZpZGVvJyk7XG4gICAgICAgIF9kb21WaWRlbyA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJy52aWRlb193cmFwcGVyJyk7XG4gICAgICAgIF9kb21WaWRlb0lubmVyID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignLnZpZGVvX3dyYXBwZXIgdmlkZW8nKTtcblxuICAgICAgICBidWlsZCgpO1xuXG4gICAgfVxuXG4gICAgZnVuY3Rpb24gYnVpbGQoKXtcblxuICAgICAgICBXLk1lbnVTY3JvbGwuaW5pdCgpO1xuICAgICAgICBfY2hlY2tWaWRlb0xvYWRlZCgpO1xuICAgICAgICBfc21vb3RoU2Nyb2xsKCk7XG5cbiAgICB9XG5cbiAgICBmdW5jdGlvbiBfY2hlY2tWaWRlb0xvYWRlZCgpe1xuXG4gICAgICAgIGlmIChfZG9tVmlkZW9Jbm5lci5yZWFkeVN0YXRlID09PSA0KSB7XG4gICAgICAgICAgICBfaW5pdEZpdCgpO1xuICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgc2V0VGltZW91dChfY2hlY2tWaWRlb0xvYWRlZCwgNTApO1xuICAgICAgICB9XG5cbiAgICB9XG5cbiAgICBmdW5jdGlvbiBfc21vb3RoU2Nyb2xsKCl7XG5cbiAgICAgICAgc21vb3RoU2Nyb2xsLmluaXQoe1xuICAgICAgICAgICAgc3BlZWQ6IDgwMFxuICAgICAgICB9KTtcblxuICAgIH1cblxuICAgIGZ1bmN0aW9uIF9pbml0Rml0KCl7XG4gICAgICAgIHZhciBjb3ZlciA9IHRydWU7XG4gICAgICAgIGZpdCggX2RvbVZpZGVvLCBfZG9tUGxheWVyLCB7Y292ZXI6IHRydWUsIHdhdGNoOiB0cnVlLCB2QWxpZ246IGZpdC5DRU5URVJ9ICk7XG4gICAgfVxuXG4gICAgcmV0dXJuIHtcbiAgICAgICAgaW5pdCA6IGluaXRcbiAgICB9O1xuXG59KCk7XG5cblxuLy8gRW50cnkgcG9pbnRcbmRvY3VtZW50LmFkZEV2ZW50TGlzdGVuZXIoJ0RPTUNvbnRlbnRMb2FkZWQnLCBmdW5jdGlvbigpe1xuXG4gICAgVy5BcHAuaW5pdCgpO1xuXG59KTsiLCJXLk1lbnVTY3JvbGwgPSAoZnVuY3Rpb24oKXtcblx0XG5cdHZhciBtZW51ID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignI2hlYWRlcicpLFxuXHRcdG1lbnVZUG9zID0gMDtcblxuICAgIGZ1bmN0aW9uIGluaXQoKXtcbiAgICBcdGlmKCBtZW51ICl7XG4gICAgXHQgICBfc3RpY2t5U2Nyb2xsKCk7XG4gICAgICAgICAgIF9pbml0RXZlbnRzKCk7XG4gICAgICAgIH1cbiAgICAgICAgXG4gICAgfVxuXG4gICAgZnVuY3Rpb24gX2luaXRFdmVudHMoKXtcblxuICAgIFx0dmFyIHJlc2l6ZURlYm91bmNlID0gXy5kZWJvdW5jZShfb25SZXNpemUsIDUwKTtcblxuICAgIFx0d2luZG93LmFkZEV2ZW50TGlzdGVuZXIoJ3Jlc2l6ZScsIHJlc2l6ZURlYm91bmNlLCBmYWxzZSk7XG4gICAgXHR3aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcignc2Nyb2xsJywgX3N0aWNreVNjcm9sbCwgZmFsc2UpO1xuXG4gICAgfVxuXG4gICAgZnVuY3Rpb24gX3N0aWNreVNjcm9sbCgpe1xuXG4gICAgXHRpZiggd2luZG93LnBhZ2VZT2Zmc2V0ID4gbWVudVlQb3MgKXtcbiAgICBcdFx0bWVudS5jbGFzc0xpc3QuYWRkKCdpc2ZpeGVkJyk7XG4gICAgXHR9ZWxzZXtcbiAgICBcdFx0bWVudS5jbGFzc0xpc3QucmVtb3ZlKCdpc2ZpeGVkJyk7XG4gICAgXHR9XG5cbiAgICB9XG5cbiAgICBmdW5jdGlvbiBfb25SZXNpemUoKXtcbiAgICBcdG1lbnVZUG9zID0gMDtcbiAgICB9XG5cbiAgICByZXR1cm4ge1xuICAgICAgICBpbml0IDogaW5pdFxuICAgIH07XG5cbn0pKCk7Il19
