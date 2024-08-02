@extends('app')

@section('content')
    <div>
        <center><h1>Detección en tiempo real</h1></center>
        <div style="display: flex; align-items: center; margin-top: 2%;">
            <div id="liveView" class="camView">
                <button id="webcamButton">Iniciar cámara IP</button>
                <img id="ipCameraFeed" width="640" height="480" style="display: none;">
                <canvas id="canvas" width="640" height="480" style="border-radius: 15px;"></canvas>
            </div>
            <div style="display: flex; flex-direction: column; margin-left: 20%; border-color:white; border:1px;">
                <div style="border-radius: 15px; padding: 5px; margin-bottom: 5px; display: flex; align-items: center;">
                    <div style="background-color: white; border-radius: 50%; padding: 5px; display: flex; align-items: center; margin:10px">
                        <img src="{{ asset('icons/coche.png') }}" width="75" style="margin: 10px;" alt="Carro">
                    </div> 
                    <span style="margin-right: 10px;">Carros: </span>
                    <span id="counter_car">0</span>
                </div>
                <div style="border-radius: 15px; padding: 5px; margin-bottom: 5px; display: flex; align-items: center;">
                    <div style="background-color: white; border-radius: 50%; padding: 5px; display: flex; align-items: center; margin:10px">
                        <img src="{{ asset('icons/bus.png') }}" width="75" style="margin: 10px;" alt="Bus">
                    </div>
                    <span style="margin-right: 10px;">Buses: </span>
                    <span id="counter_bus">0</span>
                </div>
                <div style="border-radius: 15px; padding: 5px; display: flex; align-items: center;">
                    <div style="background-color: white; border-radius: 50%; padding: 5px; display: flex; align-items: center; margin:10px">
                        <img src="{{ asset('icons/moto.png') }}" width="75" style="margin: 5px;" alt="Moto">
                    </div>
                    <span style="margin-right: 10px;">Motos: </span>
                    <span id="counter_motorcycle">0</span>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs/dist/tf.min.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/coco-ssd"></script>
        <script>
            const ipCameraFeed = document.getElementById('ipCameraFeed');
            const canvas = document.getElementById('canvas');
            const ctx = canvas.getContext('2d');
            const enableWebcamButton = document.getElementById('webcamButton');
            let model = undefined;
            let registeredBoxes = [];
            let counter_car = 0;
            let counter_bus = 0;
            let counter_motorcycle = 0;

            // URL de la cámara IP (reemplaza esto con la URL real de tu cámara IP)
            const ipCameraUrl = 'http://192.168.100.20:8080/video';

            enableWebcamButton.addEventListener('click', enableCam);

            function enableCam(event) {
                event.target.classList.add('removed');

                ipCameraFeed.src = ipCameraUrl;
                ipCameraFeed.style.display = 'block';
                canvas.style.display = 'block';

                ipCameraFeed.onload = function() {
                    cocoSsd.load().then(function (loadedModel) {
                        model = loadedModel;
                        predictWebcam();
                    });
                };

                ipCameraFeed.onerror = function() {
                    console.error("No se pudo cargar el feed de la cámara IP. Verifica la URL.");
                };
            }

            function predictWebcam() {
                if (!model) {
                    console.error("El modelo no se ha cargado correctamente.");
                    return;
                }

                ctx.drawImage(ipCameraFeed, 0, 0, canvas.width, canvas.height);

                model.detect(canvas).then(function (predictions) {
                    ctx.clearRect(0, 0, canvas.width, canvas.height); // Limpiar el canvas antes de dibujar
                    ctx.drawImage(ipCameraFeed, 0, 0, canvas.width, canvas.height); // Dibujar la imagen de nuevo

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
                            ctx.fillText(`${prediction.class}: ${Math.round(prediction.score * 100)}%`, x, y > 10 ? y - 5 : 10);

                            const isBoxRegistered = registeredBoxes.some(registeredBox =>
                                calculateDistance(registeredBox, box) < 100
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

                    requestAnimationFrame(predictWebcam);
                }).catch(function(error) {
                    console.error("Error durante la detección: ", error);
                });
            }

            function calculateDistance(boxA, boxB) {
                const centerX_A = boxA.x + boxA.width / 2;
                const centerY_A = boxA.y + boxA.height / 2;
                const centerX_B = boxB.x + boxB.width / 2;
                const centerY_B = boxB.y + boxB.height / 2;

                return Math.sqrt(Math.pow(centerX_B - centerX_A, 2) + Math.pow(centerY_B - centerY_A, 2));
            }
        </script>
    </div>
@endsection
