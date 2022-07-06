
//horizontally scrolldown lazy loading images script here



document.addEventListener("DOMContentLoaded", function() {
  var lazyloadImages = document.querySelectorAll("img.lazy");    
  var lazyloadThrottleTimeout;
  
  function lazyload () {
    if(lazyloadThrottleTimeout) {
      clearTimeout(lazyloadThrottleTimeout);
    }    
    
    lazyloadThrottleTimeout = setTimeout(function() {
        var scrollTop = window.pageYOffset;
        lazyloadImages.forEach(function(img) {
            if(img.offsetTop < (window.innerHeight + scrollTop)) {
              img.src = img.dataset.src;
              img.classList.remove('lazy');
            }
        });
        if(lazyloadImages.length == 0) { 
          document.removeEventListener("scroll", lazyload);
          window.removeEventListener("resize", lazyload);
          window.removeEventListener("orientationChange", lazyload);
        }
    }, 20);
  }
  
  document.addEventListener("scroll", lazyload);
  window.addEventListener("resize", lazyload);
  window.addEventListener("orientationChange", lazyload);
});

/*Hotel Tab Navigation*/
(function(){
    // Responsive Tabbed Navigation - by CodyHouse.co
  function TabbedNavigation( element ) {
    this.element = element;
    this.navigation = this.element.getElementsByClassName("cd-tabs__navigation")[0];
    this.navigationElements = this.navigation.getElementsByClassName("cd-tabs__list")[0];
    this.content = this.element.getElementsByClassName("cd-tabs__panels")[0];
    this.activeTab;
    this.activeContent;
    this.init();
  };

  TabbedNavigation.prototype.init = function() {
    var self = this;
    //listen for the click on the tabs navigation
    this.navigation.addEventListener("click", function(event){
      event.preventDefault();
      var selectedItem = event.target.closest('.cd-tabs__item');
      if(selectedItem && !Util.hasClass(selectedItem, "cd-tabs__item--selected")) {
        self.activeTab = selectedItem;
        self.activeContent = document.getElementById(self.activeTab.getAttribute("href").replace('#', ''));
        self.updateContent();
      }
    });

    //listen for the scroll in the tabs navigation 
    this.navigationElements.addEventListener('scroll', function(event){
      self.toggleNavShadow();
    });
  };

  TabbedNavigation.prototype.updateContent = function() {
    var self = this;
    var actualHeight = this.content.offsetHeight;
    //update navigation classes
    Util.removeClass(this.navigation.querySelectorAll(".cd-tabs__item--selected")[0], "cd-tabs__item--selected");
    Util.addClass(this.activeTab, "cd-tabs__item--selected");
    //update content classes
    Util.removeClass(this.content.querySelectorAll(".cd-tabs__panel--selected")[0], "cd-tabs__panel--selected");
    Util.addClass(this.activeContent, "cd-tabs__panel--selected");
    //set new height for the content wrapper
    if(window.requestAnimationFrame && window.getComputedStyle(this.element).getPropertyValue('display') == 'block') {
      Util.setHeight(actualHeight, this.activeContent.offsetHeight, this.content, 200, function(){
        self.content.removeAttribute('style');
      });
    }
  };

  TabbedNavigation.prototype.toggleNavShadow = function() {
    //show/hide tabs navigation gradient layer
    this.content.removeAttribute("style");
    var navItems = this.navigationElements.getElementsByClassName("cd-tabs__item"),
      navigationRight = Math.floor(this.navigationElements.getBoundingClientRect().right),
      lastItemRight = Math.ceil(navItems[navItems.length - 1].getBoundingClientRect().right);
    ( navigationRight >= lastItemRight )
      ? Util.addClass(this.element, "cd-tabs--scroll-ended")
      : Util.removeClass(this.element, "cd-tabs--scroll-ended");
  };

  var tabs = document.getElementsByClassName("js-cd-tabs"),
    tabsArray = [],
    resizing = false;
  if( tabs.length > 0 ) {
    for( var i = 0; i < tabs.length; i++) {
      (function(i){
        tabsArray.push(new TabbedNavigation(tabs[i]));
      })(i);
    }

    window.addEventListener("resize", function(event) {
      if( !resizing ) {
        resizing = true;
        (!window.requestAnimationFrame) ? setTimeout(checkTabs, 250) : window.requestAnimationFrame(checkTabs);
      }
    });
  }

  function checkTabs() {
    tabsArray.forEach(function(tab){
      tab.toggleNavShadow();
    });
    resizing = false;
  };
})();

/*End Hotel Tab Navigation*/




$(document).ready(function(){

	$('.amenity-trigger').on('click',function(){
		$('.amenities').show();

});
$('.amenities .btn-close').on('click',function(){
		$('.amenities').hide();

});

$('.policy-trigger').on('click',function(){
		$('.policies').show();

});
$('.policies .btn-close').on('click',function(){
		$('.policies').hide();

});

$('.chit-trigger').on('click',function(){
		$('.js-circle').toggle();

});

$('.addon-trigger').on('click', function(){
	
});

	$('.gallery-banner').owlCarousel({
		items : 1,
		lazyLoad : true,
		nav : true,
		slideSpeed : 300,
		paginationSpeed : 400,
		singleItem : true,
		pagination : true,
		rewindSpeed : 500,
		dots : false,
		loop : true,
		autoplay: true,
    	autoplaySpeed: 1000,
    	autoplayTimeout: 5000,
    	autoplayHoverPause: true
	});
	$('#home-banner').owlCarousel({
		items : 1,
		lazyLoad : true,
		nav : true,
		slideSpeed : 300,
		paginationSpeed : 400,
		singleItem : true,
		pagination : true,
		rewindSpeed : 500,
		loop : true,
		autoplay: true,
    	autoplaySpeed: 1000,
    	autoplayTimeout: 5000,
    	autoplayHoverPause: true
	});

	$('.caro').owlCarousel({
		autoPlay:true,
		autoPlayTimeout:1000,
		autoPlayHoverPause:true,
		lazyLoad : true,
		items : 3,
		nav : true,
		slideSpeed : 300,
		paginationSpeed : 400,
		dots : false,
		singleItem : true,
		pagination : false,
		rewindSpeed : 500,
		responsive : {
			0 : {items : 1},
			448 : {items : 2},
			768 : {items : 3},
			1024 : {items : 4},
			1160 : {items : 5},
			1400 : {items : 6}
		},
		autoplay: true,
    	autoplaySpeed: 1000,
    	autoplayTimeout: 5000,
    	autoplayHoverPause: true
	});

	
	$('.header-list').on('mouseenter', function(){
		var selected = $(this).children('a');
		var each = selected.next('ul').addClass('active');
	});
	$('.header-list').on('mouseleave',function(){
		var selected = $(this).children('a');
		var each = selected.next('ul').removeClass('active');

	});
	


	
	

	
});


(function(){
    //Login/Signup modal window - by CodyHouse.co
	function ModalSignin( element ) {
		this.element = element;
		this.blocks = this.element.getElementsByClassName('js-signin-modal-block');
		this.switchers = this.element.getElementsByClassName('js-signin-modal-switcher')[0].getElementsByTagName('a'); 
		this.triggers = document.getElementsByClassName('js-signin-modal-trigger');
		this.hidePassword = this.element.getElementsByClassName('js-hide-password');
		this.init();
	};

	ModalSignin.prototype.init = function() {
		var self = this;
		//open modal/switch form
		for(var i =0; i < this.triggers.length; i++) {
			(function(i){
				self.triggers[i].addEventListener('click', function(event){
					if( event.target.hasAttribute('data-signin') ) {
						event.preventDefault();
						self.showSigninForm(event.target.getAttribute('data-signin'));
					}
				});
			})(i);
		}

		//close modal
		this.element.addEventListener('click', function(event){
			if( hasClass(event.target, 'js-signin-modal') || hasClass(event.target, 'js-close') ) {
				event.preventDefault();
				removeClass(self.element, 'cd-signin-modal--is-visible');
			}
		});
		//close modal when clicking the esc keyboard button
		document.addEventListener('keydown', function(event){
			(event.which=='27') && removeClass(self.element, 'cd-signin-modal--is-visible');
		});

		//hide/show password
		for(var i =0; i < this.hidePassword.length; i++) {
			(function(i){
				self.hidePassword[i].addEventListener('click', function(event){
					self.togglePassword(self.hidePassword[i]);
				});
			})(i);
		} 

		//IMPORTANT - REMOVE THIS - it's just to show/hide error messages in the demo
		
	};

	ModalSignin.prototype.togglePassword = function(target) {
		var password = target.previousElementSibling;
		( 'password' == password.getAttribute('type') ) ? password.setAttribute('type', 'text') : password.setAttribute('type', 'password');
		target.textContent = ( 'Hide' == target.textContent ) ? 'Show' : 'Hide';
		putCursorAtEnd(password);
	}

	ModalSignin.prototype.showSigninForm = function(type) {
		// show modal if not visible
		!hasClass(this.element, 'cd-signin-modal--is-visible') && addClass(this.element, 'cd-signin-modal--is-visible');
		// show selected form
		for( var i=0; i < this.blocks.length; i++ ) {
			this.blocks[i].getAttribute('data-type') == type ? addClass(this.blocks[i], 'cd-signin-modal__block--is-selected') : removeClass(this.blocks[i], 'cd-signin-modal__block--is-selected');
		}
		//update switcher appearance
		var switcherType = (type == 'signup') ? 'signup' : 'login';
		for( var i=0; i < this.switchers.length; i++ ) {
			this.switchers[i].getAttribute('data-type') == switcherType ? addClass(this.switchers[i], 'cd-selected') : removeClass(this.switchers[i], 'cd-selected');
		} 
	};

	ModalSignin.prototype.toggleError = function(input, bool) {
		// used to show error messages in the form
		toggleClass(input, 'cd-signin-modal__input--has-error', bool);
		toggleClass(input.nextElementSibling, 'cd-signin-modal__error--is-visible', bool);
	}

	var signinModal = document.getElementsByClassName("js-signin-modal")[0];
	if( signinModal ) {
		new ModalSignin(signinModal);
	}

	// toggle main navigation on mobile
	var mainNav = document.getElementsByClassName('js-main-nav')[0];
	if(mainNav) {
		mainNav.addEventListener('click', function(event){
			if( hasClass(event.target, 'js-main-nav') ){
				var navList = mainNav.getElementsByTagName('ul')[0];
				toggleClass(navList, 'cd-main-nav__list--is-visible', !hasClass(navList, 'cd-main-nav__list--is-visible'));
			} 
		});
	}
	
	//class manipulations - needed if classList is not supported
	function hasClass(el, className) {
	  	if (el.classList) return el.classList.contains(className);
	  	else return !!el.className.match(new RegExp('(\\s|^)' + className + '(\\s|$)'));
	}
	function addClass(el, className) {
		var classList = className.split(' ');
	 	if (el.classList) el.classList.add(classList[0]);
	 	else if (!hasClass(el, classList[0])) el.className += " " + classList[0];
	 	if (classList.length > 1) addClass(el, classList.slice(1).join(' '));
	}
	function removeClass(el, className) {
		var classList = className.split(' ');
	  	if (el.classList) el.classList.remove(classList[0]);	
	  	else if(hasClass(el, classList[0])) {
	  		var reg = new RegExp('(\\s|^)' + classList[0] + '(\\s|$)');
	  		el.className=el.className.replace(reg, ' ');
	  	}
	  	if (classList.length > 1) removeClass(el, classList.slice(1).join(' '));
	}
	function toggleClass(el, className, bool) {
		if(bool) addClass(el, className);
		else removeClass(el, className);
	}

	//credits http://css-tricks.com/snippets/jquery/move-cursor-to-end-of-textarea-or-input/
	function putCursorAtEnd(el) {
    	if (el.setSelectionRange) {
      		var len = el.value.length * 2;
      		el.focus();
      		el.setSelectionRange(len, len);
    	} else {
      		el.value = el.value;
    	}
	};
})();

jQuery(document).ready(function($){
	if( $('.floating-labels').length > 0 ) floatLabels();

	function floatLabels() {
		var inputFields = $('.floating-labels .cd-label').next();
		inputFields.each(function(){
			var singleInput = $(this);
			//check if user is filling one of the form fields 
			checkVal(singleInput);
			singleInput.on('change keyup', function(){
				checkVal(singleInput);	
			});
		});
	}

	function checkVal(inputField) {
		( inputField.val() == '' ) ? inputField.prev('.cd-label').removeClass('float') : inputField.prev('.cd-label').addClass('float');
	}
});

