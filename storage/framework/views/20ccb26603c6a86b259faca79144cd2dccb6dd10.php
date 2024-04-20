<?php $__env->startSection('content'); ?>
    <div>
        <!-- Contenido específico de esta vista -->

        <h1>Deteccion en tiempo real</h1>
        <div style="display: flex; align-items: center;">
            <video id="video" width="640" height="480" autoplay style="display: none;"></video>
            <canvas id="canvas" width="640" height="480"></canvas>
            <div style="display: flex; flex-direction: column; margin-left: 20px;">
                <div style="  border-radius: 15px; padding: 5px; margin-bottom: 5px; display: flex; align-items: center;">
                    <div style="background-color: white; border-radius: 50%; padding: 5px; display: flex; align-items: center; margin:10px">
                        <img src="<?php echo e(asset('icons/coche.png')); ?>" width="75" style="margin: 10px;" alt="Carro">
                    </div> 
                    <span style="margin-right: 10px;">Carros: </span>
                    <span id="counter_car">0</span>
                </div>
                <div style="  border-radius: 15px; padding: 5px; margin-bottom: 5px; display: flex; align-items: center;">
                    <div style="background-color: white; border-radius: 50%; padding: 5px; display: flex; align-items: center; margin:10px">
                        <img src="<?php echo e(asset('icons/bus.png')); ?>" width="75" style="margin: 10px;" alt="Bus">
                    </div>
                    <span style="margin-right: 10px;">Buses: </span>
                    <span id="counter_bus">0</span>
                </div>
                <div style="  border-radius: 15px; padding: 5px; display: flex; align-items: center;">
                    <div style="background-color: white; border-radius: 50%; padding: 5px; display: flex; align-items: center; margin:10px">
                        <img src="<?php echo e(asset('icons/moto.png')); ?>" width="75" style="margin: 5px;" alt="Moto">
                    </div>
                    <span style="margin-right: 10px;">Motos: </span>
                    <span id="counter_motorcycle">0</span>
                </div>
            </div>
        </div>

        <script>
            const video = document.getElementById('video');
            const canvas = document.getElementById('canvas');
            const ctx = canvas.getContext('2d');
            let registeredBoxes = [];
            let counter_car = 0;
            let counter_bus = 0;
            let counter_motorcycle = 0;

            // Load the COCO-SSD model
            cocoSsd.load().then(model => {
                // Get access to the webcam stream
                navigator.mediaDevices.getUserMedia({
                        video: true
                    })
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
                    const carIconUrl = "<?php echo e(asset('icons/coche.png')); ?>";
                    const motoIconUrl = '<?php echo e(asset('icons/moto.png')); ?>';
                    const busIconUrl = '<?php echo e(asset('icons/bus.png')); ?>';
                    // Display bounding boxes and labels for each detected object
                    predictions.forEach(prediction => {
                        const [x, y, width, height] = prediction.bbox;
                        let draw = false;

                        if (['car', 'bus', 'motorcycle'].includes(prediction.class)) {
                            draw = true;
                        }

                        if (draw) {
                            const box = { x, y, width, height };
                            ctx.beginPath();
                            ctx.rect(x, y, width, height);
                            ctx.lineWidth = 2;
                            ctx.strokeStyle = 'red';
                            ctx.fillStyle = 'red';
                            ctx.stroke();
                            ctx.fillText(`${prediction.class}: ${Math.round(prediction.score * 100)}%`, x, y > 10 ?
                                y - 5 : 10);

                            const isBoxRegistered = registeredBoxes.some(registeredBox =>
                                calculateDistance(registeredBox, box) < 100 // Aquí definimos la distancia mínima entre cuadros
                            );

                            if (!isBoxRegistered) {
                                registeredBoxes.push(box);

                                if (prediction.class === 'car') {
                                    counter_car += 1;
                                    document.getElementById('counter_car').innerText = counter_car;
                                } else if (prediction.class === 'bus') {
                                    counter_bus += 1;
                                    document.getElementById('counter_bus').innerText = counter_bus;
                                } else if (prediction.class === 'motorcycle') {
                                    counter_motorcycle += 1;
                                    document.getElementById('counter_motorcycle').innerText = counter_motorcycle;
                                }
                            }
                        }
                    });
                }
            }

            // Función para calcular la distancia euclidiana entre dos cuadros delimitadores
            function calculateDistance(boxA, boxB) {
                const centerX_A = boxA.x + boxA.width / 2;
                const centerY_A = boxA.y + boxA.height / 2;
                const centerX_B = boxB.x + boxB.width / 2;
                const centerY_B = boxB.y + boxB.height / 2;

                return Math.sqrt(Math.pow(centerX_B - centerX_A, 2) + Math.pow(centerY_B - centerY_A, 2));
            }
        </script>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/josegomez/Documents/TROYANO/resources/views/index.blade.php ENDPATH**/ ?>