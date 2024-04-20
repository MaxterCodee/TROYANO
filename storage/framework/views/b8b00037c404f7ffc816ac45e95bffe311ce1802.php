<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Real-time Object Detection</title>
  <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs"></script>
  <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/coco-ssd"></script>
</head>
<body>
  <h1>Real-time Object Detection</h1>
  <video id="video" width="640" height="480" autoplay></video>
  <canvas id="canvas" width="640" height="480"></canvas>

  <script>
    const video = document.getElementById('video');
    const canvas = document.getElementById('canvas');
    const ctx = canvas.getContext('2d');

    // Load the COCO-SSD model
    cocoSsd.load().then(model => {
      // Get access to the webcam stream
      navigator.mediaDevices.getUserMedia({ video: true })
        .then(stream => {
          video.srcObject = stream;
          video.onloadedmetadata = () => {
            video.play();
            detectObjects(model);
          };
        })
        .catch(err => {
          console.error('Error accessing the webcam:', err);
        });
    });

    // Function to detect objects in real-time
    async function detectObjects(model) {
      // Continuously detect objects in each frame
      while (true) {
        await new Promise(resolve => requestAnimationFrame(resolve)); // Wait for the next frame

        // Draw the current frame on the canvas
        ctx.drawImage(video, 0, 0, canvas.width, canvas.height);

        // Detect objects in the current frame
        const predictions = await model.detect(canvas);

        // Display bounding boxes and labels for each detected object
        predictions.forEach(prediction => {
          const [x, y, width, height] = prediction.bbox;
          ctx.beginPath();
          ctx.rect(x, y, width, height);
          ctx.lineWidth = 2;
          ctx.strokeStyle = 'red';
          ctx.fillStyle = 'red';
          ctx.stroke();
          ctx.fillText(`${prediction.class}: ${Math.round(prediction.score * 100)}%`, x, y > 10 ? y - 5 : 10);
        });
      }
    }
  </script>
</body>
</html>
<?php /**PATH /home/maximiliano/Esc/sample/resources/views/index.blade.php ENDPATH**/ ?>