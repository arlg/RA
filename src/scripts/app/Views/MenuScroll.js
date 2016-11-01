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