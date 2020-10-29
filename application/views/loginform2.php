<!DOCTYPE html>
<html>
<head>
	<title>Digital Shop</title>



	<style type="text/css">
		@import "compass/css3";

*, *:before, *:after {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}
$openSans: 'Open Sans', Helvetica, Arial, sans-serif;
html, body {
  font-size: 62.5%;
  height: 100%;
  overflow: hidden;
  
  @media (max-width: 768px) {
    font-size: 50%;
  }
}
svg {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  overflow: visible;
}
.svg-icon {
  cursor: pointer;

  path {
    stroke: rgba(255,255,255,0.9);
    fill: none;
    stroke-width: 1;
  }
}
input, button {
  outline: none;
  border: none;
}
.cont {
  position: relative;
  height: 100%;
  background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/slider-2.jpg');
  background-size: cover;
  overflow: auto;
  font-family: $openSans;
}
.demo {
  position: absolute;
  top: 50%;
  left: 50%;
  margin-left: -15rem;
  margin-top: -26.5rem;
  width: 30rem;
  height: 53rem;
  overflow: hidden;
}
.login {
  position: relative;
  height: 100%;
  background: linear-gradient(to bottom, rgba(146, 135, 187, 0.8) 0%, rgba(0,0,0,0.6) 100%);
  transition: opacity 0.1s, transform 0.3s cubic-bezier(0.17, -0.65, 0.665, 1.25);
  transform: scale(1);
  
  &.inactive {
    opacity: 0;
    transform: scale(1.1);
  }
  
  &__check {
    position: absolute;
    top: 16rem;
    left: 13.5rem;
    width: 14rem;
    height: 2.8rem;
    background: #fff;
    transform-origin: 0 100%;
    transform: rotate(-45deg);
    
    &:before {
      content: "";
      position: absolute;
      left: 0;
      bottom: 100%;
      width: 2.8rem;
      height: 5.2rem;
      background: #fff;
      box-shadow: inset -0.2rem -2rem 2rem rgba(0,0,0,0.2);
    }
  }
  
  &__form {
    position: absolute;
    top: 50%;
    left: 0;
    width: 100%;
    height: 50%;
    padding: 1.5rem 2.5rem;
    text-align: center;
  }
  
  &__row {
    height: 5rem;
    padding-top: 1rem;
    border-bottom: 1px solid rgba(255,255,255,0.2);
  }
  
  &__icon {
    margin-bottom: -0.4rem;
    margin-right: 0.5rem;
    
    &.name path {
      stroke-dasharray: 73.50196075439453;
      stroke-dashoffset: 73.50196075439453;
      animation: animatePath 2s 0.5s forwards;
    }
    &.pass path {
      stroke-dasharray: 92.10662841796875;
      stroke-dashoffset: 92.10662841796875;
      animation: animatePath 2s 0.5s forwards;
    }
  }
  
  &__input {
    display: inline-block;
    width: 22rem;
    height: 100%;
    padding-left: 1.5rem;
    font-size: 1.5rem;
    background: transparent;
    color: #FDFCFD;
  }
  
  &__submit {
    position: relative;
    width: 100%;
    height: 4rem;
    margin: 5rem 0 2.2rem;
    color: rgba(255,255,255,0.8);
    background: #FF3366;
    font-size: 1.5rem;
    border-radius: 3rem;
    cursor: pointer;
    overflow: hidden;
    transition: width 0.3s 0.15s, font-size 0.1s 0.15s;
    
    &:after {
      content: "";
      position: absolute;
      top: 50%;
      left: 50%;
      margin-left: -1.5rem;
      margin-top: -1.5rem;
      width: 3rem;
      height: 3rem;
      border: 2px dotted #fff;
      border-radius: 50%;
      border-left: none;
      border-bottom: none;
      transition: opacity 0.1s 0.4s;
      opacity: 0;
    }
    
    &.processing {
      width: 4rem;
      font-size: 0;
      
      &:after {
        opacity: 1;
        animation: rotate 0.5s 0.4s infinite linear;
      }
    }
    
    &.success {
      transition: transform 0.3s 0.1s ease-out, opacity 0.1s 0.3s, background-color 0.1s 0.3s;
      transform: scale(30);
      opacity: 0.9;
      //background-color: rgba(255,255,255,0.95);
      
      &:after {
        transition: opacity 0.1s 0s;
        opacity: 0;
        animation: none;
      }
    }
  }
  
  &__signup {
    font-size: 1.2rem;
    color: #ABA8AE;
    
    a {
      color: #fff;
      cursor: pointer;
    }
  }
  
}

.app {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
  display: none;
  transition: opacity 0.1s, transform 0.3s cubic-bezier(0.68, -0.45, 0.465, 1.25);
  transform: scale(1.2);
  
  &.active {
    opacity: 1;
    transform: scale(1);
    
    .app__user-photo {
      transform: scale(1);
    }
    
    .app__meeting {
      transform: translateY(0);
      opacity: 1;
    }
    
    .app__logout {
      transform: scale(1);
    }
  }

  &__top {
    position: relative;
    height: 28rem;
    background: rgba(0,0,0,0.5);
    padding: 6rem 1.5rem 2rem;
    text-align: center;
  }

  &__bot {
    position: relative;
    height: 25rem;
    background: #fff;
  }
  
  &__menu-btn {
    position: absolute;
    top: 2rem;
    left: 1.5rem;
    width: 1.8rem;
    height: 1.7rem;
    cursor: pointer;
    
    span,
    &:before,
    &:after {
      position: absolute;
      left: 0;
      width: 100%;
      height: 1px;
      background: rgba(255,255,255,0.6);
    }
    
    span {
      top: 0.8rem;
    }
    &:before {
      content: "";
      top: 0;
    }
    &:after {
      content: "";
      bottom: 0;
    }
  }

  &__icon {
    position: absolute;
    top: 2rem;

    &.search {
      right: 1.5rem;
      stroke-dasharray: 61.847137451171875;
      stroke-dashoffset: 61.847137451171875;
      animation: animatePath 0.5s 0.5s forwards;
    }
  }
  
  &__hello {
    font-size: 2.2rem;
    color: #fff;
    font-weight: normal;
    margin-bottom: 3rem;
  }
  
  &__user {
    position: relative;
    display: inline-block;
    width: 9rem;
    height: 9rem;
    margin-bottom: 3rem;
  }
  &__user-photo {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    transition: transform 0.3s 0.2s cubic-bezier(.62,.35,.56,1.55);
    transform: scale(0);
  }
  &__user-notif {
    position: absolute;
    top: 0;
    right: 0;
    width: 3rem;
    height: 3rem;
    border-radius: 50%;
    line-height: 3rem;
    text-align: center;
    background: #50D2C2;
    color: #fff;
    font-size: 1.5rem;
  }
  
  &__month:after {
    content: "";
    display: table;
    clear: both;
  }
  
  &__month-name {
    display: inline-block;
    color: rgba(255,255,255,0.6);
    font-size: 1.2rem;
    text-transform: uppercase;
  }
  
  &__month-btn {
    display: inline-block;
    width: 1.2rem;
    height: 1.2rem;
    border: 1px solid rgba(255,255,255,0.6);
    border-left: none;
    border-bottom: none;
    cursor: pointer;
    
    &.left {
      float: left;
      transform: rotate(-135deg);
    }
    
    &.right {
      float: right;
      transform: rotate(45deg);
    }
  }
  
  &__days {
    height: 7rem;
    padding: 1.5rem 2rem;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
  }
  
  &__day {
    width: 14%;
    text-align: center;
    font-size: 1.2rem;
    
    &.weekday {
      color: #919197;
      text-transform: uppercase;
    }
    &.date {
      font-size: 1.2rem;
      font-weight: bold;
      color: #3C3C43;
    }
  }
  
  &__meeting {
    position: relative;
    height: 6rem;
    border-top: 1px solid #EEEEEF;
    padding: 1rem 2rem 1rem 7.5rem;
    transition: transform 0.3s, opacity 0.3s;
    transform: translateY(-50%);
    opacity: 0;
    
    @for $i from 1 through 5 {
      &:nth-child(#{$i}) {
        transition-delay: 0.1s + 0.1s * $i;
      }
    }
    
    &-photo {
      position: absolute;
      left: 2rem;
      top: 1rem;
      width: 4rem;
      height: 4rem;
    }
    &-name {
      color: #000;
      font-size: 1.3rem;
    }
    &-info {
      color: #949498;
      font-size: 1.1rem;
    }
  }
  
  &__logout {
    position: absolute;
    bottom: 3.3rem;
    right: 3.3rem;
    width: 4.6rem;
    height: 4.6rem;
    margin-right: -2.3rem;
    margin-bottom: -2.3rem;
    background: #FC3768;
    color: #fff;
    font-size: 2rem;
    border-radius: 50%;
    cursor: pointer;
    transition: bottom 0.4s 0.1s, right 0.4s 0.1s, transform 0.4s 0.4s, opacity 0.1s 0.7s, background-color 0.1s 0.7s;
    transform: scale(0);
    
    &.clicked {
      bottom: 50%;
      right: 50%;
      transform: scale(30) !important;
      opacity: 0.9;
      //background-color: rgba(255,255,255,0.95);
      
      svg {
        opacity: 0;
      }
    }
    
    &-icon {
      position: absolute;
      width: 3rem;
      height: 3rem;
      top: 50%;
      left: 50%;
      margin-left: -1.5rem;
      margin-top: -1.5rem;
      transition: opacity 0.1s;
      
      path {
        stroke-width: 4px;
        stroke-dasharray: 64.36235046386719;
        stroke-dashoffset: 64.36235046386719;
        animation: animatePath 0.5s 0.5s forwards;
      }
    }
  }
  
}

.ripple {
  position: absolute;
  width: 15rem;
  height: 15rem;
  margin-left: -7.5rem;
  margin-top: -7.5rem;
  background: rgba(0,0,0,0.4);
  transform: scale(0);
  animation: animRipple 0.4s;
  border-radius: 50%;
}
@keyframes animRipple {
  to {
    transform: scale(3.5);
    opacity: 0;
  }
}
@keyframes rotate {
  to {
    transform: rotate(360deg);
  }
}
@keyframes animatePath {
  to {
    stroke-dashoffset: 0;
  }
}
	</style>



</head>
<body>


<div class="cont">
  <div class="demo">
    <div class="login">
      <div class="login__check"></div>
      <div class="login__form">
        <div class="login__row">
          <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
          </svg>
          <input type="text" class="login__input name" placeholder="Username"/>
        </div>
        <div class="login__row">
          <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
          </svg>
          <input type="password" class="login__input pass" placeholder="Password"/>
        </div>
        <button type="button" class="login__submit">Sign in</button>
        <p class="login__signup">Don't have an account? &nbsp;<a>Sign up</a></p>
      </div>
    </div>
    <div class="app">
      <div class="app__top">
        <div class="app__menu-btn">
          <span></span>
        </div>
        <svg class="app__icon search svg-icon" viewBox="0 0 20 20">
          <!-- yeap, its purely hardcoded numbers straight from the head :D (same for svg above) -->
          <path d="M20,20 15.36,15.36 a9,9 0 0,1 -12.72,-12.72 a 9,9 0 0,1 12.72,12.72" />
        </svg>
        <p class="app__hello">Good Morning!</p>
        <div class="app__user">
          <img src="//s3-us-west-2.amazonaws.com/s.cdpn.io/142996/profile/profile-512_5.jpg" alt="" class="app__user-photo" />
          <span class="app__user-notif">3</span>
        </div>
        <div class="app__month">
          <span class="app__month-btn left"></span>
          <p class="app__month-name">March</p>
          <span class="app__month-btn right"></span>
        </div>
      </div>
      <div class="app__bot">
        <div class="app__days">
          <div class="app__day weekday">Sun</div>
          <div class="app__day weekday">Mon</div>
          <div class="app__day weekday">Tue</div>
          <div class="app__day weekday">Wed</div>
          <div class="app__day weekday">Thu</div>
          <div class="app__day weekday">Fri</div>
          <div class="app__day weekday">Sad</div>
          <div class="app__day date">8</div>
          <div class="app__day date">9</div>
          <div class="app__day date">10</div>
          <div class="app__day date">11</div>
          <div class="app__day date">12</div>
          <div class="app__day date">13</div>
          <div class="app__day date">14</div>
        </div>
        <div class="app__meetings">
          <div class="app__meeting">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/profile/profile-80_5.jpg" alt="" class="app__meeting-photo" />
            <p class="app__meeting-name">Feed the cat</p>
            <p class="app__meeting-info">
              <span class="app__meeting-time">8 - 10am</span>
              <span class="app__meeting-place">Real-life</span>
            </p>
          </div>
          <div class="app__meeting">
            <img src="//s3-us-west-2.amazonaws.com/s.cdpn.io/142996/profile/profile-512_5.jpg" alt="" class="app__meeting-photo" />
            <p class="app__meeting-name">Feed the cat!</p>
            <p class="app__meeting-info">
              <span class="app__meeting-time">1 - 3pm</span>
              <span class="app__meeting-place">Real-life</span>
            </p>
          </div>
          <div class="app__meeting">
            <img src="//s3-us-west-2.amazonaws.com/s.cdpn.io/142996/profile/profile-512_5.jpg" alt="" class="app__meeting-photo" />
            <p class="app__meeting-name">FEED THIS CAT ALREADY!!!</p>
            <p class="app__meeting-info">
              <span class="app__meeting-time">This button is just for demo ></span>
            </p>
          </div>
        </div>
      </div>
      <div class="app__logout">
        <svg class="app__logout-icon svg-icon" viewBox="0 0 20 20">
          <path d="M6,3 a8,8 0 1,0 8,0 M10,0 10,12"/>
        </svg>
      </div>
    </div>
  </div>
</div>










































	<script type="text/javascript">
		$(document).ready(function() {
  
  var animating = false,
      submitPhase1 = 1100,
      submitPhase2 = 400,
      logoutPhase1 = 800,
      $login = $(".login"),
      $app = $(".app");
  
  function ripple(elem, e) {
    $(".ripple").remove();
    var elTop = elem.offset().top,
        elLeft = elem.offset().left,
        x = e.pageX - elLeft,
        y = e.pageY - elTop;
    var $ripple = $("<div class='ripple'></div>");
    $ripple.css({top: y, left: x});
    elem.append($ripple);
  };
  
  $(document).on("click", ".login__submit", function(e) {
    if (animating) return;
    animating = true;
    var that = this;
    ripple($(that), e);
    $(that).addClass("processing");
    setTimeout(function() {
      $(that).addClass("success");
      setTimeout(function() {
        $app.show();
        $app.css("top");
        $app.addClass("active");
      }, submitPhase2 - 70);
      setTimeout(function() {
        $login.hide();
        $login.addClass("inactive");
        animating = false;
        $(that).removeClass("success processing");
      }, submitPhase2);
    }, submitPhase1);
  });
  
  $(document).on("click", ".app__logout", function(e) {
    if (animating) return;
    $(".ripple").remove();
    animating = true;
    var that = this;
    $(that).addClass("clicked");
    setTimeout(function() {
      $app.removeClass("active");
      $login.show();
      $login.css("top");
      $login.removeClass("inactive");
    }, logoutPhase1 - 120);
    setTimeout(function() {
      $app.hide();
      animating = false;
      $(that).removeClass("clicked");
    }, logoutPhase1);
  });
  
});
	</script>
</body>
</html>