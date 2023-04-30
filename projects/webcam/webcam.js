var streaming = false,
    video = document.querySelector('video'),
    canvas = document.getElementById('webcamCanvas'),
    width = 320,
    numberOfFails = 0;

navigator.getMedia = (navigator.getUserMedia ||
    navigator.webkitGetUserMedia ||
    navigator.mozGetUserMedia ||
    navigator.msGetUserMedia);

function getMedia() {
    navigator.getMedia({
            video: true,
            audio: false
        },
        function (stream) {
            var video = document.querySelector('video');

            if (navigator.mozGetUserMedia) {
                video.mozSrcObject = stream;
            } else {
                var vendorURL = window.URL || window.webkitURL;
                video.src = vendorURL.createObjectURL(stream);
            }
            video.play();
        },

        function (err) {
            console.log("The following error occured: " + err + ". Trying again.");
            numberOfFails++;
            
            if(numberOfFails < 3) {
                getMedia();
            } else {
                alert("There was a problem connecting to your webcam.");
            }
        }

    );

    video.addEventListener('canplay', function (ev) {
        if (!streaming) {
            
                var height = video.videoHeight / (video.videoWidth/width);
                video.setAttribute('width', width);
                video.setAttribute('height', height);
                canvas.setAttribute('width', width);
                canvas.setAttribute('height', height);
                
            streaming = true;
        }
    }, false);
}

getMedia();

document.getElementById("button").onclick = function takePicture(evt) {
    if (streaming) {
        
        //canvas.width = video.videoWidth / 2;
        //canvas.height = video.videoHeight / 2;
        var ctx = canvas.getContext("2d");
        ctx.drawImage(video, 0, 0, canvas.width, canvas.height);

        var img = document.createElement("img");
        img.src = canvas.toDataURL("image/png");
        //img.style.padding = 5;
        img.width = canvas.width;
        img.height = canvas.height;

        
        var div = document.createElement('div');
        div.appendChild(img);
        
        var a = document.createElement('a');
        a.href = img.src;
        a.download = "WebcamImg";
        a.textContent = 'Download ready';
        a.draggable = true; // Don't really need, but good practice.
        div.appendChild(a)
        
        var pic = document.getElementById("filmRoll");
        pic.insertBefore(div, pic.firstChild);
        //pic.appendChild(div);

        
    }
};