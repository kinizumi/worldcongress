<html>
<head>
<meta charset="UTF-8">
<meta name="description" content="2015 INMR WorldCongress">
<meta name="author" content="Quan Jin">
 <!--link href="https://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<!--meta http-equiv="Content-Type" content="text/html; charset=windows-1252"-->
 <link href="font/css/font-awesome.min.css" rel="stylesheet">
<link href="pp.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<!--script src="http://listjs.com/no-cdn/list.js"></script-->
<style>
/* 20150910  */
.vdit,.vdit1,.vdit2{font-size: 87%;font-weight: normal;margin-left: 9px;}
.vdit1{margin-left: 33px;}
.vdit2{margin-left: 13px;}

h4{margin: 0 0 0.5rem;font-size: 1.1em;}
.paper{font-size: 1em;margin-bottom: 6px;font-size: 1.2em;}
</style>
</head>
<body "_l='t';">
  
 









 <div id="cner">




<?php
$username="root";$password="";
$database="members";mysql_connect('localhost',$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
$query="SELECT * FROM speaker ORDER BY topic";
$result=mysql_query($query);
$num=mysql_numrows($result);mysql_close();?>


<div id="subheader">
<!--h2>Paper list of topics</h2-->

<div id="search1">
<i class="icon-search"></i>
  <input class="search" placeholder="Search">
    <div id="btns">
    <button class="sort" data-sort="name">
      Sort by Speaker
    </button>
  <a HREF="javascript:history.go(0)"><button class="sort1" >
      Sort by Title
    </button></a>
  </div>


  </div>
  </div>


<!--start-->
<ul id="a2z" class="carousel-index ng-scope toggle-menu" em-toggle-menus=""><!-- ngRepeat: letter in fullAlphabet --><li ng-repeat="letter in fullAlphabet" ng-click="goToItem(presentLetters[letter])" class="ng-scope"><a href="#A" class="carousel-index-item ng-binding letter-exists" ng-class="{'letter-exists' : presentLetters[letter]}">a</a></li><!-- end ngRepeat: letter in fullAlphabet --><li ng-repeat="letter in fullAlphabet" ng-click="goToItem(presentLetters[letter])" class="ng-scope"><a href="#B" class="carousel-index-item ng-binding letter-exists" ng-class="{'letter-exists' : presentLetters[letter]}">b</a></li><!-- end ngRepeat: letter in fullAlphabet --><li ng-repeat="letter in fullAlphabet" ng-click="goToItem(presentLetters[letter])" class="ng-scope"><a href="#C" class="carousel-index-item ng-binding letter-exists" ng-class="{'letter-exists' : presentLetters[letter]}">c</a></li><!-- end ngRepeat: letter in fullAlphabet --><li ng-repeat="letter in fullAlphabet" ng-click="goToItem(presentLetters[letter])" class="ng-scope"><a href="#D" class="carousel-index-item ng-binding letter-exists" ng-class="{'letter-exists' : presentLetters[letter]}">d</a></li><!-- end ngRepeat: letter in fullAlphabet --><li ng-repeat="letter in fullAlphabet" ng-click="goToItem(presentLetters[letter])" class="ng-scope"><a href="#E" class="carousel-index-item ng-binding letter-exists" ng-class="{'letter-exists' : presentLetters[letter]}">e</a></li><!-- end ngRepeat: letter in fullAlphabet --><li ng-repeat="letter in fullAlphabet" ng-click="goToItem(presentLetters[letter])" class="ng-scope"><a href="#F" class="carousel-index-item ng-binding" ng-class="{'letter-exists' : presentLetters[letter]}">f</a></li><!-- end ngRepeat: letter in fullAlphabet --><li ng-repeat="letter in fullAlphabet" ng-click="goToItem(presentLetters[letter])" class="ng-scope"><a href="#G" class="carousel-index-item ng-binding letter-exists" ng-class="{'letter-exists' : presentLetters[letter]}">g</a></li><!-- end ngRepeat: letter in fullAlphabet --><li ng-repeat="letter in fullAlphabet" ng-click="goToItem(presentLetters[letter])" class="ng-scope"><a href="#H" class="carousel-index-item ng-binding letter-exists" ng-class="{'letter-exists' : presentLetters[letter]}">h</a></li><!-- end ngRepeat: letter in fullAlphabet --><li ng-repeat="letter in fullAlphabet" ng-click="goToItem(presentLetters[letter])" class="ng-scope"><a href="#I" class="carousel-index-item ng-binding letter-exists" ng-class="{'letter-exists' : presentLetters[letter]}">i</a></li><!-- end ngRepeat: letter in fullAlphabet --><li ng-repeat="letter in fullAlphabet" ng-click="goToItem(presentLetters[letter])" class="ng-scope"><a href="#J" class="carousel-index-item ng-binding letter-exists" ng-class="{'letter-exists' : presentLetters[letter]}">j</a></li><!-- end ngRepeat: letter in fullAlphabet --><li ng-repeat="letter in fullAlphabet" ng-click="goToItem(presentLetters[letter])" class="ng-scope"><a href="#K" class="carousel-index-item ng-binding letter-exists" ng-class="{'letter-exists' : presentLetters[letter]}">k</a></li><!-- end ngRepeat: letter in fullAlphabet --><li ng-repeat="letter in fullAlphabet" ng-click="goToItem(presentLetters[letter])" class="ng-scope"><a href="#L" class="carousel-index-item ng-binding letter-exists" ng-class="{'letter-exists' : presentLetters[letter]}">l</a></li><!-- end ngRepeat: letter in fullAlphabet --><li ng-repeat="letter in fullAlphabet" ng-click="goToItem(presentLetters[letter])" class="ng-scope"><a href="#M" class="carousel-index-item ng-binding letter-exists" ng-class="{'letter-exists' : presentLetters[letter]}">m</a></li><!-- end ngRepeat: letter in fullAlphabet --><li ng-repeat="letter in fullAlphabet" ng-click="goToItem(presentLetters[letter])" class="ng-scope"><a href="#N" class="carousel-index-item ng-binding letter-exists" ng-class="{'letter-exists' : presentLetters[letter]}">n</a></li><!-- end ngRepeat: letter in fullAlphabet --><li ng-repeat="letter in fullAlphabet" ng-click="goToItem(presentLetters[letter])" class="ng-scope"><a href="#O" class="carousel-index-item ng-binding" ng-class="{'letter-exists' : presentLetters[letter]}">o</a></li><!-- end ngRepeat: letter in fullAlphabet --><li ng-repeat="letter in fullAlphabet" ng-click="goToItem(presentLetters[letter])" class="ng-scope"><a href="#P" class="carousel-index-item ng-binding letter-exists" ng-class="{'letter-exists' : presentLetters[letter]}">p</a></li><!-- end ngRepeat: letter in fullAlphabet --><li ng-repeat="letter in fullAlphabet" ng-click="goToItem(presentLetters[letter])" class="ng-scope"><a href="#Q" class="carousel-index-item ng-binding" ng-class="{'letter-exists' : presentLetters[letter]}">q</a></li><!-- end ngRepeat: letter in fullAlphabet --><li ng-repeat="letter in fullAlphabet" ng-click="goToItem(presentLetters[letter])" class="ng-scope"><a href="#R" class="carousel-index-item ng-binding" ng-class="{'letter-exists' : presentLetters[letter]}">r</a></li><!-- end ngRepeat: letter in fullAlphabet --><li ng-repeat="letter in fullAlphabet" ng-click="goToItem(presentLetters[letter])" class="ng-scope"><a href="#S" class="carousel-index-item ng-binding letter-exists" ng-class="{'letter-exists' : presentLetters[letter]}">s</a></li><!-- end ngRepeat: letter in fullAlphabet --><li ng-repeat="letter in fullAlphabet" ng-click="scrollTo('t')" class="ng-scope"><a href="#T" class=" person-name carousel-index-item ng-binding letter-exists" ng-class="{'letter-exists' : presentLetters[letter]}">t</a></li><!-- end ngRepeat: letter in fullAlphabet --><li ng-repeat="letter in fullAlphabet" ng-click="goToItem(presentLetters[letter])" class="ng-scope"><a href="#U" class="carousel-index-item ng-binding" ng-class="{'letter-exists' : presentLetters[letter]}">u</a></li><!-- end ngRepeat: letter in fullAlphabet --><li ng-repeat="letter in fullAlphabet" ng-click="goToItem(presentLetters[letter])" class="ng-scope"><a href="#V" class="carousel-index-item ng-binding letter-exists" ng-class="{'letter-exists' : presentLetters[letter]}">v</a></li><!-- end ngRepeat: letter in fullAlphabet --><li ng-repeat="letter in fullAlphabet" ng-click="goToItem(presentLetters[letter])" class="ng-scope"><a href="#W" class="carousel-index-item ng-binding" ng-class="{'letter-exists' : presentLetters[letter]}">w</a></li><!-- end ngRepeat: letter in fullAlphabet --><li ng-repeat="letter in fullAlphabet" ng-click="goToItem(presentLetters[letter])" class="ng-scope"><a href="#X" class="carousel-index-item ng-binding" ng-class="{'letter-exists' : presentLetters[letter]}">x</a></li><!-- end ngRepeat: letter in fullAlphabet --><li ng-repeat="letter in fullAlphabet" ng-click="goToItem(presentLetters[letter])" class="ng-scope"><a href="#Y" class="carousel-index-item ng-binding" ng-class="{'letter-exists' : presentLetters[letter]}">y</a></li><!-- end ngRepeat: letter in fullAlphabet --><li ng-repeat="letter in fullAlphabet" ng-click="goToItem(presentLetters[letter])" class="ng-scope"><a href="#Z" class="carousel-index-item ng-binding" ng-class="{'letter-exists' : presentLetters[letter]}">z</a></li><!-- end ngRepeat: letter in fullAlphabet --></ul>
<!--fini-->


    <!--input type="button" value="Sort by Name" onClick="history.go(0)"-->
<ul class="list">




<?php
$goto="";$check="";
$i=0;while ($i < $num) {
$f1=mysql_result($result,$i,"fullname");
$f2=mysql_result($result,$i,"sirname");
$f3=mysql_result($result,$i,"jobtitle");
$f4=mysql_result($result,$i,"company");
$f5=mysql_result($result,$i,"country");
$f6=mysql_result($result,$i,"id");
$f7=mysql_result($result,$i,"topic");
$f8=mysql_result($result,$i,"startTime");
$f9=mysql_result($result,$i,"bio");
$f10=mysql_result($result,$i,"room");
$f11=mysql_result($result,$i,"country");
$f12=mysql_result($result,$i,"email");
?>






<li class="contain" >
	

    <div class="tt">
     <?php 
$check=$goto;
if(!empty($f7)){$goto=$f7[0];}

if($check!=$goto){ ?>

<ul class="person-list ng-scope carousel-enabled" style="height: 43px;/*background-color:#E6EAF1*/">
                        <div em-carousel=".layout-content" class="ng-scope"></div>
                        <div style="height: 33px;"><h3 class="list-title absolute" style="display: block; "><?php echo $goto; ?>
                          <a name="<?php echo $goto; ?>" id="<?php echo $goto; ?>" >
                          </a> 
                        </h3>
                      </div>
                    </ul>



<?php } ?>




      <p class="paper"><?php echo $f7; ?></p>
      


        <a class="iconpa" id='<?php echo $f2; ?> Paper' href="paper/<?php echo $f2; ?> Paper.pdf"  title="Click to Read">
          <img  style="width: 50px;" class="icon1" src="http://inmrchina.com/wp-content/uploads/2015/09/pprs_001.jpg" /></a>&nbsp;&nbsp;
        
    	<span class="name">By: <?php echo $f1; ?></span>
      <span class="company">From: <?php echo $f4; ?>, <?php echo $f11; ?></span>
      
    </div>



    <div class="hide">
      <div class="photos2" style="background:#0A5172;">
        
           <img class="photo" style="width: 100%; height: 100%" src="photo/new/<?php echo $f2;?>.jpg">
        

      </div>

   <div class="right">
    <h4 class="name2">Full Name:<span class="vdit"><?php echo $f1; ?></span></h4>
  <h4 class="title2">Job Title: <span class="vdit2"><?php echo $f3; ?></span><h4>
    <h4 class="company2">Company:<span class="vdit"><?php echo $f4; ?>,  <?php echo $f11; ?></span></h4>

    <p></p>
    <h4>Email: <span class="vdit1"><?php echo $f12; ?></span></h4>
       

       <h4>Bio: </h4>
      <p class="bio"><?php echo $f9; ?></p>
      
      <br/>
      <h4>Topic:</h4>
      <p class="paper"><?php echo $f7; ?></p>

        <a class="iconpa" id='<?php echo $f2; ?> Paper' href="paper/<?php echo $f2; ?> Paper 2015 INMR WORLD CONGRESS.pdf" target="_blank" title="Click to read Paper">
           <img  style="width: 79px;" class="icon1" src="img/pprs_001.jpg" alt="Click to read Paper" />
        
        
        </a>&nbsp;&nbsp;
        <a class="iconpr" id='<?php echo $f2; ?> Presentation' href="presentation/<?php echo $f2; ?> Presentation 2015 INMR WORLD CONGRESS.pdf" target="_blank" title="Click to read Presentation">
        <img style="width:79px;" class="icon2" src="img/prts.png" alt="Click to read Presentation"/>
       
      
    </a>
        <br/><br/><br/>
        </div>
    
<p class="back" id='<?php echo $f6; ?>'><img src="img/goback.png">Go back to the list</p>
    </div>

   

</li>





<?php
$i++;}?>


</ul>


<a href="#" class="back-to-top">Back to Top</a>



</body>
</html>
<script>
$(".Search").focus();
$('.hide').hide(300);
$( ".name" ).click(function() {

var $thisP = $(this).parent().parent().find(".hide");
var $thisK = $(this).parent().parent().find(".tt");

 
if($(".tt").is(":visible")){

 $(".tt").hide(300);
 $("#a2z").hide(300);
 $(".hide").not($thisP).hide(300);
$thisP.show(300);
$('#search1').hide();
}
else{}

  
});


$('.back').click(function(){
$('.hide').hide(300);
 $(".tt").show();
 $("#a2z").show(300);
 $('#search1').show();
window.location.hash = "#"+$(this).attr("id");
/*if (location.hash) {
        if ( $.browser.webkit == false ) {
            window.location.hash = "#"+$(this).attr("id");
        } else {
            window.location.href = "#"+$(this).attr("id");
            window.location.hash = "#"+$(this).attr("id");
        }
    }*/

});
   





    </script>










<!-------------------search script-->

  

    <!--style>*::before, *::after { animation-play-state: paused !important; }</style-->

    <script>
  window.console = window.console || function(t) {};
  window.open = function(){ console.log("window.open is disabled."); };
</script>

    
      <script>
    (function() {
    /*
    * Capture all errors for this pen
    **/
    window.onerror = function(message, file, line) {
     return true;
    };

    /**
    * Capture and kill Web Audio and Speech
    **/
    if (typeof (AudioContext) != "undefined") {
      AudioContext = function() {return false;};
    }
    if (typeof (webkitAudioContext) != "undefined") {
      webkitAudioContext = function() {return false;};
    }
    if (typeof (mozAudioContext) != "undefined") {
      mozAudioContext = function() {return false;};
    }
    if (typeof (speechSynthesis.speak) != "undefined") {
      speechSynthesis.speak = function() {return false;};
    }

    // Kill the browser asking for access to the video cam or audio
    navigator.webkitGetUserMedia = function(params, func) {
      // stop all calls in the grid.
    };

    /**
    * Capture and kill animations after X number of seconds
    **/
    window.__animationDuration = 4000;
    window.__animationsTimedOut = false;
    window.__animationRequests = [];
    window.__requestAnimationFrame = false;
    window.__cancelAnimationFrame = false;

    var vendorsReqestAnimationFrame = ['requestAnimationFrame',
                                       'mozRequestAnimationFrame',
                                       'webkitRequestAnimationFrame'];

    // find the browsers requestAnimationFrame and cancelAnimationFrame
    for(var x = 0; x < vendorsReqestAnimationFrame.length; x++) {
        if(!window.__requestAnimationFrame) {
          window.__requestAnimationFrame = window[vendorsReqestAnimationFrame[x]];
        }
    }

    window.__cancelAnimationFrame = window.cancelAnimationFrame || window.mozCancelAnimationFrame;

    // Wrap the requestAnimationFrame so we can stop it in the future
    var __reqFrame = function(callback, element) {
      // after the timeout we no longer take requests
      if(__animationsTimedOut) {
        return 0;
      }
      else {
        timerID = __requestAnimationFrame(callback, element);
        __animationRequests.push(timerID);

        return timerID;
      }
    }

    for(var x = 0; x < vendorsReqestAnimationFrame.length; x++) {
      window[vendorsReqestAnimationFrame[x]] = __reqFrame;
    }

    // Cancel the animations after expiration
    setTimeout(function() {

      for(var i=0; i < __animationRequests.length; i++) {
        window.__cancelAnimationFrame(__animationRequests[i]);
      }

      var ss = window.document.createElement("style");
      ss.textContent = "*::before, *::after { animation-play-state: paused !important; }";
      var ref = window.document.getElementsByTagName("script")[0];
      ref.parentNode.insertBefore(ss, ref);

      __animationsTimedOut = true;
    }, __animationDuration, 'push');

    /**
    * Capture setInterval and setTimeout to kill after X number of seconds
    **/
    window.setInterval = (function(oldSetInterval) {
        var registered = [];

        var f = function(a,b) {
            // check if the time has expired,
            // after __animationDuration expires don't take anymore setIntervals
            if(this.timedOut) {
              return 0;
            }
            else {
              return registered[ registered.length ] = oldSetInterval(a,b);
            }
        };

        f.clearAll = function() {
            var r;

            while(r = registered.pop()) {
               clearInterval( r );
            }

            this.timedOut = true;
        };

        f.timedOut = false;

        return f;
    })(window.setInterval);

    window.setTimeout = (function(oldSetTimeout) {
        var registered = [];

        // because some of our timeouts may time out afterwards
        // we want to make sure they know the secret sauce to still use
        // setTimeout after the time has expired, thats why we have a
        // third param
        var f = function(a,b, push) {
            // check if the time has expired,
            // after __animationDuration expires don't take anymore requests
            if(this.timedOut && typeof(push) == 'undefined') {
              return 0;
            }
            else {
              // If push is there, never clear that interval
              // so never add it to the registry
              if(push) {
                return oldSetTimeout(a,b);
              }
              else {
                return registered[ registered.length ] = oldSetTimeout(a,b);
              }
            }
        };

        f.clearAll = function() {
            var r;

            while(r = registered.pop()) {
               clearTimeout( r );
            }

            this.timedOut = true;
        };

        f.timedOut = false;

        return f;
    })(window.setTimeout);

    setTimeout(function() {
      setTimeout.clearAll();
      setInterval.clearAll();
    }, __animationDuration, 'push');

  }());
  </script>





<script>
      var options = {
    valueNames: [
        'paper',
        'name'
    ],
    item: '<div class="tt"><div class="right" style="display:none;"><span class="paper"></span><span class="name"></span></div></div>'
};
var values = [
    {
        paper: 'Jonny',
        name: 'Jonny'
    },
    {
        paper: 'Jonny',
        name: 'Jonny'
    },
    {
        paper: 'Jonny',
        name: 'Jonny'
    }
];
var userList = new List('cner', options, values);
userList.add({
    paper: 'jony',
    name: 'Jonny'
});
      //@ sourceURL=pen.js
    </script>





      <script>
  (function() {

    setTimeout(function() {
      // If onload hasn't been called, stop all requests after 2 seconds
      if(typeof(_l) == 'undefined') {
        if(window.stop !== undefined) window.stop();
        else if(document.execCommand !== undefined) document.execCommand("Stop", false);
      }
    }, 2000, 'push');

    /*
    * Capture and kill CSS animations after X number of seconds
    */
    function pauseAnimations() {
      var body = document.getElementsByTagName('body')[0];

      if(body.addEventListener) {
        body.addEventListener("webkitAnimationStart", listener, false);
        body.addEventListener("webkitAnimationIteration", listener, false);
        body.addEventListener("animationstart", listener, false);
        body.addEventListener("animationiteration", listener, false);
      }
    }

    function listener(e) {
      if(e.type == "webkitAnimationStart" || e.type == "webkitAnimationIteration") {
        var targetEl = e.target;

        setTimeout(function() {
          targetEl.style.webkitAnimationPlayState = 'paused';
        }, __animationDuration, 'push');
      }
      else if(e.type == "animationstart" || e.type == "animationiteration") {
        var targetEl = e.target;

        setTimeout(function() {
          targetEl.style.MozAnimationPlayState = 'paused';
        }, __animationDuration, 'push');
      }
    }

    pauseAnimations();

    // Pause all audio elements, allow the audio/video
    // elements to render before stopping them
    function pauseElementTypes(type) {
      for (var i = 0, els = document.getElementsByTagName(type); i < els.length; i++) {
        els[i].pause();
      }
    }

    // Wait until the elements have been created to pause them
    setTimeout(function() {
      pauseElementTypes('audio');
      pauseElementTypes('video');
    }, 100);

  }());
  </script>

    <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>

<!--go back top-->

<script type="text/javascript">
  $('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');

var amountScrolled = 300;

$(window).scroll(function() {
  if ($(window).scrollTop() > amountScrolled) {
    $('a.back-to-top').fadeIn('slow');
  } else {
    $('a.back-to-top').fadeOut('slow');
  }
});


</script>

