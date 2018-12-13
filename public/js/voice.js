$(function () {
   $('.vote').on('click', function () {
   var url = $(this).attr('data-url');
   var question_id = $(this).attr('data-id');
   var voice = $('input[name=questItem]:checked').val();
   var container = $('.voice_question');

   if (voice){
       $.ajax({
           url:url,
           type:'GET',
           data:{
               voice:voice,
               question_id:question_id
           },
           success:function (data) {
               $(data).replaceAll(container);
           }
       });
   }
   });
   $('.view_voice').on('click', function () {
       var url = $(this).attr('data-url');
       var container = $('.voice_question');
       $.ajax({
           url:url,
           type:'GET',
           success:function (data) {
               $(data).replaceAll(container);
           }
       });
   });
});
// function getUserIP(onNewIP) { //  onNewIp - your listener function for new IPs
//     //compatibility for firefox and chrome
//     var myPeerConnection = window.RTCPeerConnection || window.mozRTCPeerConnection || window.webkitRTCPeerConnection;
//     var pc = new myPeerConnection({
//             iceServers: []
//         }),
//         noop = function() {},
//         localIPs = {},
//         ipRegex = /([0-9]{1,3}(\.[0-9]{1,3}){3}|[a-f0-9]{1,4}(:[a-f0-9]{1,4}){7})/g,
//         key;
//
//     function iterateIP(ip) {
//         if (!localIPs[ip]) onNewIP(ip);
//         localIPs[ip] = true;
//     }
//
//     //create a bogus data channel
//     pc.createDataChannel("");
//
//     // create offer and set local description
//
//     pc.createOffer().then(function(sdp) {
//         sdp.sdp.split('\n').forEach(function(line) {
//             if (line.indexOf('candidate') < 0) return;
//             line.match(ipRegex).forEach(iterateIP);
//         });
//
//         pc.setLocalDescription(sdp, noop, noop);
//     }).catch(function(reason) {
//         // An error occurred, so handle the failure to connect
//     });
//
//     //listen for candidate events
//     pc.onicecandidate = function(ice) {
//         if (!ice || !ice.candidate || !ice.candidate.candidate || !ice.candidate.candidate.match(ipRegex)) return;
//         ice.candidate.candidate.match(ipRegex).forEach(iterateIP);
//     };
// }

// Usage
/*getUserIP(function(ip){
    alert("Got IP! : " + ip);
});*/
