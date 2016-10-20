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
// N.Events = {
//     clickEvent : ( N.Config.isDebug === true ) ? 'click' : 'tap',
//     downEvent  : ( N.Config.isDebug === true ) ? 'mousedown' : 'touchstart',
//     upEvent    : ( N.Config.isDebug === true ) ?  'mouseup' : 'touchend',
// };
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIkFwcC5qcyIsIkNvbmZpZy5qcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQzdDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBIiwiZmlsZSI6Im1haW4uanMiLCJzb3VyY2VzQ29udGVudCI6WyJ2YXIgVyA9IFcgfHwge307XG5cblcuQXBwID0gZnVuY3Rpb24oKXtcbiAgICBcbiAgICB2YXIgX2RvbVBsYXllciwgXG4gICAgICAgIF9kb21WaWRlbyxcbiAgICAgICAgX2RvbVZpZGVvSW5uZXI7XG5cbiAgICBmdW5jdGlvbiBpbml0KCl7XG5cbiAgICAgICAgX2RvbVBsYXllciA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJyNob21lX3ZpZGVvJyk7XG4gICAgICAgIF9kb21WaWRlbyA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJy52aWRlb193cmFwcGVyJyk7XG4gICAgICAgIF9kb21WaWRlb0lubmVyID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignLnZpZGVvX3dyYXBwZXIgdmlkZW8nKTtcblxuICAgICAgICBidWlsZCgpO1xuXG4gICAgfVxuXG4gICAgZnVuY3Rpb24gYnVpbGQoKXtcblxuICAgICAgIGNvbnNvbGUubG9nKCdFbnRyeSBwb2ludCcpO1xuXG4gICAgICAgX2RvbVZpZGVvSW5uZXIuYWRkRXZlbnRMaXN0ZW5lcignbG9hZGVkZGF0YScsIGZ1bmN0aW9uKCkge1xuICAgICAgICAgICBfaW5pdEZpdCgpO1xuICAgICAgICB9LCBmYWxzZSk7XG5cbiAgICB9XG5cbiAgICBmdW5jdGlvbiBfaW5pdEZpdCgpe1xuICAgICAgICB2YXIgY292ZXIgPSB0cnVlO1xuICAgICAgICBmaXQoIF9kb21WaWRlbywgX2RvbVBsYXllciwge2NvdmVyOiB0cnVlLCB3YXRjaDogdHJ1ZSwgdkFsaWduOiBmaXQuQ0VOVEVSfSApO1xuICAgIH1cblxuICAgIHJldHVybiB7XG4gICAgICAgIGluaXQgOiBpbml0XG4gICAgfTtcblxufSgpO1xuXG5cbi8vIEVudHJ5IHBvaW50XG5kb2N1bWVudC5hZGRFdmVudExpc3RlbmVyKCdET01Db250ZW50TG9hZGVkJywgZnVuY3Rpb24oKXtcblxuICAgIFcuQXBwLmluaXQoKTtcblxufSk7IiwiLy8gTi5FdmVudHMgPSB7XG4vLyAgICAgY2xpY2tFdmVudCA6ICggTi5Db25maWcuaXNEZWJ1ZyA9PT0gdHJ1ZSApID8gJ2NsaWNrJyA6ICd0YXAnLFxuLy8gICAgIGRvd25FdmVudCAgOiAoIE4uQ29uZmlnLmlzRGVidWcgPT09IHRydWUgKSA/ICdtb3VzZWRvd24nIDogJ3RvdWNoc3RhcnQnLFxuLy8gICAgIHVwRXZlbnQgICAgOiAoIE4uQ29uZmlnLmlzRGVidWcgPT09IHRydWUgKSA/ICAnbW91c2V1cCcgOiAndG91Y2hlbmQnLFxuLy8gfTsiXX0=
