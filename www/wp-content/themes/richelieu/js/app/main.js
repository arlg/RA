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

    }

    function _checkVideoLoaded(){

        if (_domVideoInner.readyState === 4) {
            _initFit();
        } else {
            setTimeout(_checkVideoLoaded, 50);
        }

    }

    function _initFit(){
        console.log('init Fit');
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
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIkFwcC5qcyIsIkNvbmZpZy5qcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FDcERBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EiLCJmaWxlIjoibWFpbi5qcyIsInNvdXJjZXNDb250ZW50IjpbInZhciBXID0gVyB8fCB7fTtcblxuVy5BcHAgPSBmdW5jdGlvbigpe1xuICAgIFxuICAgIHZhciBfZG9tUGxheWVyLCBcbiAgICAgICAgX2RvbVZpZGVvLFxuICAgICAgICBfZG9tVmlkZW9Jbm5lcjtcblxuICAgIGZ1bmN0aW9uIGluaXQoKXtcblxuICAgICAgICBfZG9tUGxheWVyID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignI2hvbWVfdmlkZW8nKTtcbiAgICAgICAgX2RvbVZpZGVvID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignLnZpZGVvX3dyYXBwZXInKTtcbiAgICAgICAgX2RvbVZpZGVvSW5uZXIgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcudmlkZW9fd3JhcHBlciB2aWRlbycpO1xuXG4gICAgICAgIGJ1aWxkKCk7XG5cbiAgICB9XG5cbiAgICBmdW5jdGlvbiBidWlsZCgpe1xuXG4gICAgICAgIF9jaGVja1ZpZGVvTG9hZGVkKCk7XG5cbiAgICB9XG5cbiAgICBmdW5jdGlvbiBfY2hlY2tWaWRlb0xvYWRlZCgpe1xuXG4gICAgICAgIGlmIChfZG9tVmlkZW9Jbm5lci5yZWFkeVN0YXRlID09PSA0KSB7XG4gICAgICAgICAgICBfaW5pdEZpdCgpO1xuICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgc2V0VGltZW91dChfY2hlY2tWaWRlb0xvYWRlZCwgNTApO1xuICAgICAgICB9XG5cbiAgICB9XG5cbiAgICBmdW5jdGlvbiBfaW5pdEZpdCgpe1xuICAgICAgICBjb25zb2xlLmxvZygnaW5pdCBGaXQnKTtcbiAgICAgICAgdmFyIGNvdmVyID0gdHJ1ZTtcbiAgICAgICAgZml0KCBfZG9tVmlkZW8sIF9kb21QbGF5ZXIsIHtjb3ZlcjogdHJ1ZSwgd2F0Y2g6IHRydWUsIHZBbGlnbjogZml0LkNFTlRFUn0gKTtcbiAgICB9XG5cbiAgICByZXR1cm4ge1xuICAgICAgICBpbml0IDogaW5pdFxuICAgIH07XG5cbn0oKTtcblxuXG4vLyBFbnRyeSBwb2ludFxuZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcignRE9NQ29udGVudExvYWRlZCcsIGZ1bmN0aW9uKCl7XG5cbiAgICBXLkFwcC5pbml0KCk7XG5cbn0pOyIsIi8vIE4uRXZlbnRzID0ge1xuLy8gICAgIGNsaWNrRXZlbnQgOiAoIE4uQ29uZmlnLmlzRGVidWcgPT09IHRydWUgKSA/ICdjbGljaycgOiAndGFwJyxcbi8vICAgICBkb3duRXZlbnQgIDogKCBOLkNvbmZpZy5pc0RlYnVnID09PSB0cnVlICkgPyAnbW91c2Vkb3duJyA6ICd0b3VjaHN0YXJ0Jyxcbi8vICAgICB1cEV2ZW50ICAgIDogKCBOLkNvbmZpZy5pc0RlYnVnID09PSB0cnVlICkgPyAgJ21vdXNldXAnIDogJ3RvdWNoZW5kJyxcbi8vIH07Il19
