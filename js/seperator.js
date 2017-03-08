
    setInterval( function (){
      $('#seperator-bar-1, #seperator-bar-3').removeClass('seperator-margin-top');
      $('#seperator-bar-2, #seperator-bar-4').addClass('seperator-margin-top');
      setTimeout( function (){
        $('#seperator-bar-2, #seperator-bar-4').removeClass('seperator-margin-top');
        $('#seperator-bar-1, #seperator-bar-3').addClass('seperator-margin-top');
      },3000);
    },6000);

/*
setInterval( function (){
  $('#seperator-bar-1').removeClass('margin-top-m-9 margin-top-tb-7');
  $('#seperator-bar-1').addClass('margin-top-m-9 margin-top-tb-0');
  setTimeout( function (){
    $('#seperator-bar-1').removeClass('margin-top-m-9 margin-top-tb-7');
    $('#seperator-bar-1').addClass('margin-top-m-9 margin-top-tb-0');
  },3000);
  setTimeout( function (){

  },6000);
},9000);

setInterval( function (){
  $('#seperator-bar-1').removeClass('margin-top-m-9 margin-top-tb-9');
  $('#seperator-bar-2').addClass('margin-top-m-9 margin-top-tb-6');
  $('#seperator-bar-3').addClass('margin-top-m-2 margin-top-tb-6');
  $('#seperator-bar-3').removeClass('margin-top-m-7 margin-top-tb-7');
  $('#seperator-bar-4').removeClass('margin-top-m-2 margin-top-tb-6');
  $('#seperator-bar-4').addClass('margin-top-m-8 margin-top-tb-8');
  $('#seperator-bar-5').removeClass('margin-top-m-6 margin-top-tb-7');
    $('#seperator-bar-5').addClass('margin-top-m-3 margin-top-tb-6');
  setTimeout( function (){
    $('#seperator-bar-1').addClass('margin-top-m-9 margin-top-tb-9');
    $('#seperator-bar-2').removeClass('margin-top-m-9 margin-top-tb-6');
    $('#seperator-bar-2').addClass('margin-top-tb-9');
    $('#seperator-bar-3').removeClass('margin-top-m-2 margin-top-tb-2');
    $('#seperator-bar-3').addClass('margin-top-m-7 margin-top-tb-7');
    $('#seperator-bar-4').removeClass('margin-top-m-8 margin-top-tb-8');
    $('#seperator-bar-4').addClass('margin-top-m-2 margin-top-tb-6');
    $('#seperator-bar-5').removeClass('margin-top-m-3 margin-top-tb-6');
    $('#seperator-bar-5').addClass('margin-top-m-6 margin-top-tb-7');
  },3000);
},6000);
*/
