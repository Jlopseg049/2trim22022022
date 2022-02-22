'use strict';
var recorder=null;
var blob=null;
var recordedChunks=[];
window.addEventListener("load",function(){
    const video = document.getElementById('video');
    const video2 = document.getElementById('videoconretraso');
    const canvas = document.getElementById('canvas');
    const snap = document.getElementById("snap");
    const errorMsgElement = document.querySelector('span#errorMsg');

    const constraints = {
    audio: true,
    video: {
        width: 640, height: 360
    }
    };


    // Access webcam
    async function init() {
    try {
        const stream = await navigator.mediaDevices.getUserMedia(constraints);
        handleSuccess(stream);
    } catch (e) {
        console.log( `navigator.getUserMedia error:${e.toString()}`);
    }
    }

    // Success
    function handleSuccess(stream) {
    console.log(stream);
    window.stream = stream;
    video.srcObject = stream;
    recorder = new MediaRecorder(stream, { mimeType: "video/webm; codecs=vp9" });
    blob = new Blob(recordedChunks, {
        type: "video/webm"
      });
    
    recorder.ondataavailable = (event) => {
        console.log(' Recorded chunk of size ' + event.data.size + "B");
        console.log(event);
        recordedChunks.push(event.data);
        var size=recordedChunks.length;
        if (size%10==0)[
            
        ]
        blob = new Blob(recordedChunks, {
            type: "video/webm"
          });
        
    }
    recorder.start(100);
    }

    // Load init
    init();

    // Draw image
    var context = canvas.getContext('2d');
    snap.addEventListener("click", function() {
            context.drawImage(video, 0, 0, 640, 480);
    });
})

{/* <script>
  var recorder=null;
  var recordedChunks = [];
  var URL = window.URL || window.webkitURL;
  var url = null;
  arrancado=false
  function gotMedia(stream) {
    // |video| shows a live view of the captured MediaStream.
    var video = document.querySelector('video');
    var blob = new Blob(recordedChunks, {
      type: "video/webm"
    });
    

    //var recorder = null;
    try {
      recorder = new MediaRecorder(stream, {mimeType: "video/webm"});
    } catch (e) {
      console.error('Exception while creating MediaRecorder: ' + e);
      return;
    }

    recorder.ondataavailable = (event) => {
      console.log(' Recorded chunk of size ' + event.data.size + "B");
      console.log(event);
      recordedChunks.push(event.data);
      if (!arrancado){
        var url = URL.createObjectURL(blob);
        console.log(url)
        video.src = url;
      }
    };

    recorder.start(100);
  }

  navigator.mediaDevices.getUserMedia({video: true, audio: true})
      .then(gotMedia)
      .catch(e => { console.error('getUserMedia() failed: ' + e); });
</script> */}