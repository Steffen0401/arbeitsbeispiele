$(function(){

    //Text animationen
    var headerTextAnimation = document.querySelector("#corvetteHeaderLogo");
    headerTextAnimation.innerHTML = headerTextAnimation.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

    anime.timeline({loop: false}).add({
        targets: "#corvetteHeaderLogo .letter",
        translateY: [-300,0],
        easing: "easeOutExpo",
        duration: 2000,
        delay: (el, i) => 40 * i
      });

    var textAnimation = document.querySelector("#scrollDown");
    textAnimation.innerHTML = textAnimation.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

    anime.timeline({loop: false}).add({
        targets: '#scrollDown .letter',
        opacity: [0,1],
        easing: "easeInOutQuad",
        duration: 500,
        delay: (el, i) => 150 * (i+1)
      });

    //Slideshow
    let bgArray=new Array();
    bgArray[0] = "pics/Corvette2.jpg";
    bgArray[1] = "pics/Corvette3.jpg";
    bgArray[2] = "pics/Corvette4.jpg";
    bgArray[3] = "pics/Corvette5.jpg";
    bgArray[4] = "pics/Corvette6.jpg";

    let slideCount=0;
    let countPics = bgArray.length;
    setInterval(function(){
      $(".mySlides").attr("src",bgArray[slideCount]);
      slideCount++;
      if (slideCount==countPics)
      { 
        slideCount=0;
      }
    },3000);        

    //engineStart/Stop
    const audio = new Audio("sound/CorvetteEngine.mp3");
    audio.volume = 0.2;

    $("#engineStartStop").click(function(){      
        if (audio.paused)
        {
            audio.play();
            $("#engineStartStop hr").css('background-color', '#EA2027');
        }
        else
        {
            audio.currentTime = 0;
            audio.pause();
            $("#engineStartStop hr").css('background-color', '#26DE81');
        }
    });

    //ScrollAnimation
    $(window).scroll(function(){
      if (window.matchMedia('(min-width: 1000px)').matches) {
        $("#engine .scrollE1").css({"-webkit-transform":"translateX("+ (scrollY / -10 - 200 ) +"px)"});
        $("#engine .scrollE2").css({"-webkit-transform":"translateX("+ (scrollY / 10 - 500) +"px)"});
        $("#dimension h1").css({"-webkit-transform":"translateX("+ (scrollY / 10 - 600) +"px)"});
        $("#powerOutput h1").css({"-webkit-transform":"translateX("+ (scrollY / -15) +"px)"});
        $(".slideShow h1").css({"-webkit-transform":"translateX("+ (scrollY / 10 + 100) +"px)"});
        $(".slideShow h3").css({"-webkit-transform":"translateX("+ (scrollY / -20 + 300) +"px)"});

      }
      
      //gibt wieder welches element zu sehen ist
      //https://blog.kulturbanause.de/2016/09/scrolling-effekte-css-klasse-viewport/
      function isElementInViewport(element) {
        let rect = element.getBoundingClientRect();
        return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
      }
       
      let elements = document.querySelectorAll(".visibleAnimation");
      
      function callbackFunc() {
        for (var i = 0; i < elements.length; i++) {
          if (isElementInViewport(elements[i])) {
            elements[i].classList.add("visible");
          }
          else 
          { 
            elements[i].classList.remove("visible");
          }
        }
      } 
      window.addEventListener("load", callbackFunc);
      window.addEventListener("scroll", callbackFunc);


      //DimensionAnimation
      if ($('#corvetteSide #length').hasClass('visible')) {
        $('#length').animate({width: $('#corvetteSide img').css('width')}, 1000);
        $('#lengthP').each(function(){
            let lengthMM = 4514;
            $({countNum: $("#lengthP").text()}).animate({
                countNum: lengthMM
            },{
            duration: 1000,
            easing:'linear',
            step: function() {
              $("#lengthP").text(Math.floor(this.countNum));
            },
            complete: function() {
              $("#lengthP").text(this.countNum);
            }
            });
        });
      }

      if ($('#corvetteSide #height').hasClass('visible')) {
        $('#height').animate({height: $('#corvetteSide img').css('height')}, 1000);
        $('#heightP').each(function(){
            let heightMM = 1239;
            $({countNum: $("#heightP").text()}).animate({
                countNum: heightMM
            },{
            duration: 1000,
            easing: "linear",
            step: function() {
              $("#heightP").text(Math.floor(this.countNum));
            },
            complete: function() {
              $("#heightP").text(this.countNum);
            }
            });
        });
      }

      //speed Animtion
      if ($('.needle1').hasClass('visible')) {
        $('.needle1').addClass('speedStart1');
      }
      else{
        $('.needle1').removeClass('speedStart1');
        $('.needle1').css({transform: 'rotate(-60deg)'});
      }

      if ($('.needle2').hasClass('visible')) {
        $('.needle2').addClass('speedStart2');
      }
      else{
        $('.needle2').removeClass('speedStart2');
        $('.needle2').css({transform: 'rotate(-60deg)'});
      }
    });


});
