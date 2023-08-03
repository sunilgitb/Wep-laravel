<style>
/* Center the loader */
#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 120px;
  height: 120px;
  margin: -76px 0 0 -76px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

/* #myDiv {
  display: none;
  text-align: center;
} */
</style>
<script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage,1000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>
  <body onload="myFunction()" style="margin:0;">
  <div id="loader"></div>
  <div style="display:none;" id="myDiv" class="animate-bottom">
<header class="header">
          <nav class="navigation">
            <a href="{{url('/')}}" class="logo">
              <img src="{{asset('frontend/assets/img/new-logo.png')}}" alt="Tech Simians" />
            </a>
            <button class="navigation__button">
              <span></span>
              <span></span>
              <span></span>
            </button>
            <div class="navigation__menu closed">
              <div class="navigation__title">Menu</div>
              <ul>
                <li class="navigation__item"><a href="/">Home</a></li>
                <li class="navigation__item"><a href="{{url('about-us')}}">About </a></li>
                <li class="navigation__item navigation__item--with-dropdown">
                  <a href="{{('/')}}">Services</a>
                  <ul class="navigation__dropdown">
                    <li><a href="{{url('development')}}">Development</a></li>
                    <li><a href="{{url('designing')}}">Designing</a></li>
                    <li>
                      <a href="{{('enterprise-solution')}}">Enterprise Solutions</a>
                    </li>
                    <li><a href="{{url('cloud-solutions')}}">Cloud Solutions</a></li>
                    <li><a href="{{('it-consulting')}}">IT Consulting</a></li>
                  </ul>
                </li>
                <li class="navigation__item"><a href="{{url('our-work')}}">Work</a></li>
                <li class="navigation__item"><a href="{{url('careers')}}">Careers</a></li>
                <li class="navigation__item"><a href="{{url('blog')}}">Blog</a></li>
              </ul>
              <div class="navigation__contact">
                <a href="mailto:info@techsimians.com">info@techsimians.com</a>
                <a href="tel:+918080425120">+91 808 042 5120</a>
              </div>
            
              <div>
                <a class="navigation__cta" href="{{url('contact-us')}}">Contact</a>
              </div>
            </div>
          </nav>
      </header>
      
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
      
      

