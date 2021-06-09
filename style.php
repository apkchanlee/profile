
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>


  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
 
<style>

html{
  scroll-behavior: smooth;
}

html,
body,
header,
.view {
  height: 100%;
}

body {
  width: 100%;
  margin: 0;
  padding: 0; 
  overflow-x: hidden;
  overflow-y: auto;
  font-family: 'Montserrat', sans-serif;
}


.td_sign{
  vertical-align:top;
  padding:8px;
  border:none;
  font:15px/1.2em sans-serif;
  padding:0 5px 0 0;
}

.bold{
  color:#000000; font-weight:bold;
}

.front-face,
.contents,.back-face{
  position: absolute;
}
.center{
  height: 400px;
  width: 290px;
  transform-style: preserve-3d;
 perspective: 1000px;
}
.front-face, .back-face{
  height: 100%;
  width: 100%;
  text-align: center;
  background: linear-gradient(rgba(0,0,0,.2),
              rgba(0,0,0,.2)),url(img/chanlee2.jpg);
  background-size: cover;
  background-position: center;
  transform: translateY(0deg);
  border-radius: 10px;
  backface-visibility: hidden;
  transform-style: preserve-3d;
  transition: transform .7s cubic-bezier(.4,.2,.2,1);
}
.contents{
  left: 0%;
  top: 50%;
  width: 100%;
  perspective: 1000px;
  transform: translateY(-50%) translateZ(60px) scale(0.94);
}
.front p{
  font-size: 35px;
  margin-bottom: 15px;
  color: white;
}
.front span{
  font-size: 23px;
  color: white;
}
.front p:after{
  content: '';
  display: block;
  left: 0;
  right: 0;
  width: 100px;
  height: 2px;
  background: white;
  margin: 0 auto;
  margin-top: 10px;
}
.back-face{
  transform: rotateY(180deg);
  background: linear-gradient(45deg,#043348 0%,#032535 100%);
}
.back {
  color: white;
}
.back h2{
  font-size: 33px;
  padding-bottom: 5px;
}
.back span{
  font-size: 25px;
}

.icons{
  margin: 10px 0;
  display: block;
}
.icons i{
  color:  #042f4b;
  font-size: 20px;
  height: 40px;
  width: 40px;
  background: white;
  border-radius: 50%;
  margin: 0 5px;
  line-height: 40px;
  cursor: pointer;
}
.center:hover > .back-face{
  transform: rotateY(0deg);
}
.center:hover > .front-face{
  transform: rotateY(-180deg);
}

.bg-card:hover{
  background-color: #FFEE88;
}

.bg-shadow:hover{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}


.icon i{
    border-radius:50%;
    padding:8px 4px;
    width:36px; 
    height:36px; 
  }
  
.icon{
  border-radius:50%;
    margin: -10px 0px; 
    border-color: black;
}

.icon i:hover{
  background: white;
  background-color: white;
  color: black;
}

.fb a i{
  background-color: #3b5998;
}

.twt a i{
  background-color: #00acee;
}

.ins a i{
  background: #d6249f;
  background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%);
}

.lin a i{
  background-color: #0e76a8;
}

.git a i{
  background-color: #000;
}

.fb a i:hover{
  color: #3b5998;
}

.twt a i:hover{
  color: #00acee;
}

.ins a i:hover{
  background-color: white;
  color: #d6249f;
  color: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%);
}

.lin a i:hover{
  color: #0e76a8;
}

.git a i:hover{
  color: #000;
}


.section1 {
    background-color: #fff;
    background-size: cover;
    background-attachment: fixed;
    width: 100%;
    height: auto;
}

.section4 {
    background-color: #fff;
    background: url("img/laptop.jpg")no-repeat center center;
    background-size: cover;
    background-attachment: fixed;
    width: 100%;
    height: auto;
}

.navbar {
    background-color: transparent;
}

.top-nav-collapse {
    background-color: black;
}

@media only screen and (max-width: 768px) {
    .navbar {
        background-color: #4285F4;
    }
}


/* scroll bar */
::-webkit-scrollbar {
    
    width: 10px;
    transition: width 2s;
}
 
::-webkit-scrollbar:hover {
    width: 15px;
}

::-webkit-scrollbar-track {
    box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
    border-radius: 10px;
}
 
::-webkit-scrollbar-thumb {
    border-radius: 10px;
    background-color: darkgreen;
    box-shadow: inset 0 0 6px rgba(0, 80, 9, 0.5); 
}

/* Loader */
.loader {
    position: fixed;
    z-index: 99;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: white;
    display: flex;
    justify-content: center;
    align-items: center;
}

.loader > img {
    width: 100px;
    -webkit-animation: rotation 2s infinite linear;
    width:300px;
}

.loader.hidden {
    animation: fadeOut 1s;
    animation-fill-mode: forwards;
}

/*
.loader2 {
    position: fixed;
    z-index: 99;
    top: -6;
    left: 10;
    width: 100%;
    height: 90%;
    display: flex;
    justify-content: center;
    align-items: center;
}
.loader2 > img {
    -webkit-animation: rotation 3s infinite linear;
    position: fixed;
    z-index: 99;
    width:300px;
    height:300px;
}
*/

@keyframes fadeOut {
    100% {
        opacity: 0;
        visibility: hidden;
    }
}

@-webkit-keyframes rotation {
    from {
            -webkit-transform: rotate(0deg);
    }
    to {
            -webkit-transform: rotate(-359deg);
    }
}



#art-0 {
  background-image: url("img/bg0.png");
  z-index: 0; }

#art-1 {
  background-image: url("img/bg1.png");
  z-index: 1; }

#art-2 {
  background-image: url("img/bg2.png");
  z-index: 2; }

#art-3 {
  background-image: url("img/bg3.png");
  z-index: 3; }

#art-4 {
  background-image: url("img/bg4.png");
  z-index: 4; }

#art-5 {
  background-image: url("img/bg5.png");
  z-index: 5; }

#art-6 {
  background-image: url("img/bg6.png");
  z-index: 6; }

#art-7 {
  background-image: url("img/bg7.png");
  z-index: 7; }

#art-8 {
  background-image: url("img/bg8.png");
  z-index: 8; }

#art-9 {
  background-image: url("img/bg9.png");
  z-index: 10; }

#art-10 {
  z-index: 9; }

.art {
  background-color: #F4EFEB;
  position: relative;
  height: 100vh;
  width: 100vw;
  overflow: hidden;
  z-index: -1; }

.art--layer {
  background-position: center;
  background-size: cover;
  width: 100%;
  position: absolute;
  height: 100vh;
  width: 100vw;
  position: fixed; }

#art-logo {
  font-family: 'Indie Flower', cursive;
  color: gray;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  opacity: 1;
  height: 100%;
  z-index: 5; }

  .loader-span {
    font-family: 'Indie Flower', cursive;
    font-size: 30px;
     }
    
    
  #art-logo span {
    z-index: 100;
    font-size: 30px;
    margin-bottom: 200px; }

.filler {
  height: 100px;
  background-color: black;
  background-image: linear-gradient(black, white);
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center; }
  .filler img {
    max-width: 50px; 
    }

</style>





<script type="text/javascript">


  var app = {
    controller: null,
  
    init: function() {
      this.initParallaxScene();
    },
  
    initParallaxScene: function() {
  
      this.controller = new ScrollMagic.Controller();
      var tween = new TimelineMax ().add([
        TweenMax.fromTo("#art-0", 0.5, {y:0, ease: Linear.easeNone}, {y: -20, ease: Linear.easeNone}),
        TweenMax.fromTo("#art-1", 0.5, {y:0, ease: Linear.easeNone}, {y: -20, ease: Linear.easeNone}),
        TweenMax.fromTo("#art-2", 0.5, {y:0, ease: Linear.easeNone}, {y: -56, ease: Linear.easeNone}),
        TweenMax.fromTo("#art-3", 0.5, {y:0, ease: Linear.easeNone}, {y: -140, ease: Linear.easeNone}),
        TweenMax.fromTo("#art-4", 0.5, {y:0, ease: Linear.easeNone}, {y: -308, ease: Linear.easeNone}),
        TweenMax.fromTo("#art-5", 0.5, {y:0, ease: Linear.easeNone}, {y: -448, ease: Linear.easeNone}),
        TweenMax.fromTo("#art-6", 0.5, {y:0, ease: Linear.easeNone}, {y: -728, ease: Linear.easeNone}),
        TweenMax.fromTo("#art-7", 0.5, {y:0, ease: Linear.easeNone}, {y: -1008, ease: Linear.easeNone}),
        TweenMax.fromTo("#art-8", 0.5, {y:0, ease: Linear.easeNone}, {y: -1372, ease: Linear.easeNone}),
        TweenMax.fromTo("#art-9", 0.5, {y:0, ease: Linear.easeNone}, {y: -1933, ease: Linear.easeNone}),
        TweenMax.fromTo("#art-10", 0.5, {y:0, ease: Linear.easeNone}, {y: -1933, ease: Linear.easeNone}),
        TweenMax.fromTo("#art-logo", 0.1, {opacity:1.0, ease: Linear.easeNone}, {opacity: 0, ease: Linear.easeNone}),
      ]);
  
      // build scene
      var scene = new ScrollMagic.Scene({triggerElement: "#art", duration: 2000, offset: 450})
      .setTween(tween)
      .setPin("#art")
      .triggerHook(0.5)
      .offset(10)
      .addTo(this.controller);
    },
  }
  
  $(document).ready(function() {
    app.init();
  })
  
  

// popovers Initialization
$(function () {
$('[data-toggle="popover"]').popover()
});

var temporary;

window.addEventListener("load", function () {
    const loader = document.querySelector(".loader");
    loader.className += " hidden"; // class "loader hidden"
    document.getElementById("art-10").style.backgroundImage = "url('img/bat.gif')";
    temporary = 1;
});

var myVar = setInterval(myTimer, 8000);

function myTimer() {
  if(temporary == 1){
    document.getElementById("art-10").style.backgroundImage = "url('img/rain.gif')";
    temporary = 0;
  }
  else if(temporary == 0){

    document.getElementById("art-10").style.backgroundImage = "url('img/bat.gif')";
    temporary = 3;
  }
  else if(temporary == 3){

    document.getElementById("art-10").style.backgroundImage = "url('img/snow.gif')";
    temporary = 2;
  }
  else if(temporary == 2){

    document.getElementById("art-10").style.backgroundImage = "url('img/bat.gif')";
    temporary = 1;
  }
}

document.getElementById("body").onscroll = function myFunction() {  
    var scrolltotop = document.scrollingElement.scrollTop;
    var target = document.getElementById("main1");
    var xvalue = "center";
    var factor = 0.5;
    var yvalue = scrolltotop * factor;
    target.style.backgroundPosition = xvalue + " " + yvalue + "px";
    
  }

AOS.init();

</script>




<style> #slider-container {
		height: 100px;
		width: 100vw;
		margin: 0 auto;
		position: relative;
		overflow: hidden;
	}
	.slider {
		position: absolute;
		display: flex;
		flex-flow: row nowrap;
	}
	.slider-instant {
		transition: none;
	}
	.slider-animate {
		margin-left: 0;
	}
	.slider-extra {
		display: flex;
		flex-flow: row nowrap;
	}
	.slider-last {
		min-width: 100vw;
		max-width: 100vw;
		overflow: hidden;
	}
	.slider span {
		margin-right: 30px;
	}
	.slider .slider-extra {
		margin-right: 0;
	}
	.slider img {
		height: inherit;
		vertical-align: inherit;
		border: inherit;
		width: auto;
    height: 100px;
	}</style>

  <script>class InfiniteSlider {
	constructor(animTime = '5000', selector = '.slider', container = '#slider-container') {
		this.slider = document.querySelector(selector)
		this.container = document.querySelector(container)
		this.width = 0
		this.oldWidth = 0
		this.duration = parseInt(animTime)
		this.start = 0
		this.refresh = 0 //0, 1, or 2, as in steps of the animation
		this._prevStop = false
		this._stop = false
		this._oldTimestamp = 0
	}
	
	animate() {
		/* fix for browsers who like to run JS before images are loaded */
		const imgs = Array.prototype.slice.call(this.slider.querySelectorAll('img'))
						.filter(img => {
							return img.naturalWidth === 0
						})
		if (imgs.length > 0) {
			window.requestAnimationFrame(this.animate.bind(this));
			return
		}
		
		/* Add another copy of the slideshow to the end, keep track of original width */
		this.oldWidth = this.slider.offsetWidth
		const sliderText = '<span class="slider-extra">' + this.slider.innerHTML + '</span>'
		this.slider.innerHTML += sliderText

		/* can have content still when we move past original slider */
		this.width = this.slider.offsetWidth
		const minWidth = 2 * screen.width

		/* Add more slideshows if needed to keep a continuous stream of content */
		while (this.width < minWidth) {
			this.slider.innerHTML += sliderText
			this.width = this.slider.width
		}
		this.slider.querySelector('.slider-extra:last-child').classList.add('slider-last')
		
		/* loop animation endlesssly (this is pretty cool) */
		window.requestAnimationFrame(this.controlAnimation.bind(this))
	}
	
	halt() {
		this._stop = true
		this._prevStop = false
	}
	
	go() {
		this._stop = false
		this._prevStop = true
	}
	
	stagnate() {
		this.container.style.overflowX = "scroll"
	}
	
	controlAnimation(timestamp) {
		//console.log('this.stop: ' + this._stop + '\nthis.prevStop: ' + this._prevStop)
		if (this._stop === true) {
			if (this._prevStop === false) {
				this.slider.style.marginLeft = getComputedStyle(this.slider).marginLeft
				this._prevStop = true
				this._oldTimestamp = timestamp
			}
		} else if (this._stop === false && this._prevStop === true) {
			this._prevStop = false
			this.start = this.start + (timestamp - this._oldTimestamp)
		} else {
			//reset animation
			if (this.refresh >= 1) {
				this.start = timestamp
				this.slider.style.marginLeft = 0
				this.refresh = 0
				window.requestAnimationFrame(this.controlAnimation.bind(this))
				return
			}
			if (timestamp - this.start >= this.duration) {
				this.refresh = 1
			}
			
			const perc = ((timestamp - (this.start)) / this.duration) * this.oldWidth
			this.slider.style.marginLeft = (-perc) + 'px'
		}
		window.requestAnimationFrame(this.controlAnimation.bind(this))
		return
	}
	
	getIeWidth() {
		this.slider.style.marginLeft = '-99999px';
	}
	
	ie11Fix() {
		this.slider.querySelector('.slider-last').style.position = 'absolute';
	}
}

function detectIE() {
	var ua = window.navigator.userAgent
	var msie = ua.indexOf('MSIE ')

	if (msie > 0) {
		// IE 10 or older => return version number
		return parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10)
	}
	
	var trident = ua.indexOf('Trident/')
	if (trident > 0) {
		// IE 11 => return version number
		var rv = ua.indexOf('rv:')
		return parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10)
	}

	var edge = ua.indexOf('Edge/');
	if (edge > 0) {
		// Edge (IE 12+) => return version number
		return parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10)
	}

	// other browser
	return false
}


document.addEventListener('DOMContentLoaded', function() {
	const slider = new InfiniteSlider(20000)
	const ie = detectIE()
	
	//Dont animate under IE10, just place the images
	if (ie !== false && ie < 10) {
		slider.stagnate()
		return
	}
	//IE 11 and lower, fix for width *increasing* as more of the slider is shown
	if (ie !== false && ie < 12) { slider.getIeWidth() }
	
	slider.animate()
	document.querySelector('#slider-container')
		.addEventListener('mouseenter', slider.halt.bind(slider))
	document.querySelector('#slider-container')
		.addEventListener('mouseleave', slider.go.bind(slider))
	
	if (ie === 11) {
		setTimeout(slider.ie11Fix.bind(slider), 1000)
	}
});
</script>