var liveTime = '';
var realDate = '';

jQuery(document).ready(function() {

    startTime();
    getDay();

    jQuery('#slider').skdslider( {
        delay:5000, 
        animationSpeed: 5000,
        showNextPrev:false,
        showNav:false,
        showPlayButton:false,
        autoSlide:true,
        animationType:'fading'
    });
    $( "#report-print" ).click(function() {
        $( "#modal-print" ).fadeIn( "fast", "linear" );
    });
    $( "#x-print" ).click(function() {
        $( "#modal-print" ).fadeOut( "fast", "linear" );
    });
    $( "#x-in" ).click(function() {
        $( "#modal-in" ).fadeOut( "fast", "linear" );
        reloadPage();
    });
    $( "#x-out" ).click(function() {
        $( "#modal-out" ).fadeOut( "fast", "linear" );
        reloadPage();
    });
    $( "#mobile-button" ).click(function() {
        $( "#mobile-nav" ).slideToggle( "fast");
    });
});

// get the time and day and push to live objects
function startTime() {
    var today=new Date();
    var h=today.getHours();
    var m=today.getMinutes();
    var s=today.getSeconds();
    var day=today.getDate();
    var month=today.getMonth();
    var year=today.getFullYear().toString().substr(2,2);
    m = checkTime(m);
    s = checkTime(s);
    var ampm = (h >= 12) ? h-12+":"+m+":"+s+" PM" : h+":"+m+":"+s+" AM";
    document.getElementById('liveTime').innerHTML = ampm;
    liveTime = h+":"+m+":"+s;
    realDate = month+1+"."+day+"."+year;
    var t = setTimeout(function(){startTime()},500);
}

// get the weekday in exchange for the day number
function getDay() {
    var d = new Date();
    var weekday = new Array(7);
    weekday[0] = "Sunday";
    weekday[1] = "Monday";
    weekday[2] = "Tuesday";
    weekday[3] = "Wednesday";
    weekday[4] = "Thursday";
    weekday[5] = "Friday";
    weekday[6] = "Saturday";

    var n = weekday[d.getDay()];
    document.getElementById("liveDay").innerHTML = n;
}

// check time for accuracy
function checkTime(i) {
    if (i<10) {
        i = "0" + i
    };
    return i;
}

// send data to punchin.php and get its response
function punchIn(id) {
    var data = {date: realDate, intime: liveTime, userid: id};
    $.post('../php/punchin.php', data, function(returnedData) {
        document.getElementById('resultTime-in').innerHTML = returnedData;
        $( "#modal-in" ).fadeIn( "fast", "linear" );
    });
}

// send data to punchout.php and get its response
function punchOut(id) {
    var data = {date: realDate, intime: liveTime, userid: id};
    $.post('../php/punchout.php', data, function(returnedData) {
        document.getElementById('resultTime-out').innerHTML = returnedData;
        $( "#modal-out" ).fadeIn( "fast", "linear" );
    });
}

// convert time to words (not used)
function timeToWords(h, m, s) {
   var words = toWords(h)+":"+toWords(m)+":"+toWords(s);
    return words;
}

// reload page with 500ms timeout
function reloadPage() {
    var t = setTimeout(function(){
        location.reload();
    },500);
}