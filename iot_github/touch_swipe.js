var registerInteraction = function () {
        'use strict';
        window.sampleCompleted('index.html-SwipeFrontTouch');
      };
      var swipeFronts = document.querySelectorAll('.swipe-front');
      for(var i = 0; i < swipeFronts.length; i++) {
        swipeFronts[i].addEventListener('touchstart', registerInteraction);
      }