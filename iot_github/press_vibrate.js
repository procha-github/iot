$(() => {
       'use strict';
       $('button').click(function() {
       $(this).toggleClass('pressed');
       navigator.vibrate([50,50,50]);
});
});  
