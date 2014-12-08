var ntime = 0;
setInterval(function(){
    var dd = new Date();
    var hh = dd.getHours();
    var mm = dd.getMinutes();
    var ss = dd.getSeconds();
    var h = hh *15*2;
    var m = mm * 6;
    var s = ss * 6;
    $("#hh").css("transform", "rotate(" + h + "deg)");
    $("#mm").css("transform", "rotate(" + m + "deg)");
    $("#ss").css("transform", "rotate(" + s + "deg)");
},10);