function makeTimer() {

	
    var endTime = new Date("21 october 2021 15:11:00 GMT+04:00");			
    endTime = (Date.parse(endTime) / 1000);

    var now = new Date();
    now = (Date.parse(now) / 1000);

    var timeLeft = endTime - now;

    var days = Math.floor(timeLeft / 86400); 
    var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
    var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
    var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
    
    if (days < "10") { days = "0" + days; }
    if (hours < "10") { hours = "0" + hours; }
    if (minutes < "10") { minutes = "0" + minutes; }
    if (seconds < "10") { seconds = "0" + seconds; }
  
    $("#days").html(days + "<span></span>" );
    $("#hours").html(hours + "<span></span>");
    $("#minutes").html(minutes + "<span></span>");
    $("#seconds").html(seconds + "<span></span>");		

    if ( days == 0 && hours == 0 && minutes == 0 && seconds == 0 ){
        clearInterval( timerCountdown );
    }
    
    }

   var timerCountdown =   setInterval(function() { makeTimer(); }, 1000);