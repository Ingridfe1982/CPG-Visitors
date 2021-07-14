// FONCTION POUR RECUPERER LE FLUX VIDEO ET CAPTURER PHOTO
// function start() {
//     video = document.getElementById('video');
//     canvas = document.getElementById('canvas');
//     photo = document.getElementById('photo');
//     startbutton = document.getElementById('take-photo');

//     // accéder à la vidéo de la webcam
//     navigator.mediaDevices.getUserMedia({
//             video: true,
//             audio: false
//         })
//         //stream dans l'id vidéo
//         .then(function(stream) {
//             video.srcObject = stream;
//             video.play();
//         })
//         .catch(function(err) {
//             console.log("An error occurred: " + err);
//         });

//     video.addEventListener('canplay', function(ev) {
//         if (!streaming) {
//             height = video.videoHeight / (video.videoWidth / width);

//             if (isNaN(height)) {
//                 height = width / (4 / 3);
//             }

//             video.setAttribute('width', width);
//             video.setAttribute('height', height);
//             canvas.setAttribute('width', width);
//             canvas.setAttribute('height', height);
//             streaming = true;
//         }
//     }, false);

//     startbutton.addEventListener('click', function(ev) {
//         takepicture();
//         ev.preventDefault();
//     }, false);

//     clearphoto();
// }
// window.addEventListener('load', start, false);

// function clearphoto() {
//     var context = canvas.getContext('2d');
//     context.fillStyle = "#AAA";
//     context.fillRect(0, 0, canvas.width, canvas.height);

//     var data = canvas.toDataURL('image/png');
//     photo.setAttribute('src', data);
// }

// function takepicture() {
//     canvas.width = width;
//     canvas.height = height;
//     canvas.getContext('2d').drawImage(video, 0, 0, width, height);
//     var data = canvas.toDataURL('image/png');
//     photo.setAttribute('src', data);
//   }


