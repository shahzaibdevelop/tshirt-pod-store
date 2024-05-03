<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/style.css')}}">
    <link href="{{asset('assets/css/style.min.css')}}" rel="stylesheet" type="text/css" />
    <style>
        .border-blue {
            border: 2px solid #4e42d9;
            border-radius: 16px;
        }
        .design-container {
            position: relative;
            width: 300px;
            height: 200px;
            border: 2px solid #ccc;
            margin-bottom: 20px;
            overflow: hidden;
        }
        .design-container img {
            width: 100%;
            height: auto;
            display: block;
        }
        #uploadedImage {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            cursor: move;
        }
        #userTextElement {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 20px;
            color: #000;
            user-select: none;
            cursor: move;
        }
    </style>
    
</head>
<body>
    @include('layout.navbar')
    <section class="design py-5">
        <div class="content vh-100 ">
            <div class="d-flex justify-content-center py-5">
                <h3>Customize your merch </h3>
            </div>
            <div class="row w-100 px-3">
                <div class="col-md-4">
                    <img class="img img-fluid img-clickable" src="{{asset('mockups/tshirt.png')}}" alt="">
                </div>
                <div class="col-md-4">
                    <img class="img img-fluid img-clickable" src="{{asset('mockups/long-sleeve-tshirt.png')}}" alt="">
                </div>
                <div class="col-md-4">
                    <img class="img img-fluid img-clickable" src="{{asset('mockups/hoodie.png')}}" alt="">
                </div>
            </div>
            <hr>
            {{-- Custom  --}}
            <div class="edit-shirt px-4">
                <div class="row w-100">
                    <div class="col-md-6">
                        <label for="uploadInput">Upload Design</label>
                        <input type="file" class="form-control mb-4 mt-2"  name="userDesign" id="uploadInput">
                        <label for="userText ">Write Text</label>
                        <input type="text" class="form-control mt-2" id="userText" placeholder="Enter your text here">
                        <img id="finalDesign" hidden>
                        <button class="btn btn-primary mt-3" id="orderButton">Order Now</button>

                    </div>
                    <div class="col-md-6 mt-3 mt-md-0">
                        <div class="design-container w-100 h-100" id="designshirt">
                            <img id="mockupImage" class="img img-fluid">
                            <img id="uploadedImage" src="" alt="Uploaded Image" style="display: none;">
                            <div id="userTextElement"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{asset('assets/js/smooth-scroll.polyfills.min.js')}}"></script>
    <script src="{{asset('assets/js/gumshoe.polyfills.min.js')}}"></script>
    <script src="{{asset('assets/js/feather.js')}}"></script>
    <script src="{{asset('assets/js/unicons.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
    <script src="{{asset('plugins/jquery/script.js')}}"></script>
    <script src="{{asset('plugins/bootstrap/script.js')}}"></script>
    <script src="{{asset('plugins/interactjs/script.js')}}"></script>
    <script src="{{asset('plugins/html2canvas/script.js')}}"></script>

    <script>
        $(document).ready(function() {
            $('.img-clickable').click(function() {
                $('.img-clickable').removeClass('border-blue');
                $(this).addClass('border-blue');
                $('#mockupImage').attr('src', $(this).attr('src'));
            });
        });
    </script>
    <script>
         $('#orderButton').click(function() {
                var node = document.getElementById('designshirt');
                html2canvas(node).then(function(canvas) {
                    var imageData = canvas.toDataURL('image/png');
                    $("#finalDesign").attr('src', imageData);
                });
            });
    </script>
      <script>
        document.getElementById('uploadInput').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file && file.type.startsWith('image')) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const imageUrl = e.target.result;
                    const uploadedImg = document.getElementById('uploadedImage');

                    // Set uploaded image source
                    uploadedImg.src = imageUrl;

                    // Calculate new size based on container size
                    const containerWidth = document.querySelector('.design-container').clientWidth;
                    const containerHeight = document.querySelector('.design-container').clientHeight;
                    const newSize = Math.min(containerWidth, containerHeight) * 0.2; // 20% of the smaller dimension

                    // Set uploaded image size
                    uploadedImg.style.width = newSize + 'px';
                    uploadedImg.style.height = 'auto'; // Maintain aspect ratio
                    uploadedImg.style.display = 'block';

                    // Make the image draggable
                    makeDraggable(uploadedImg);

                    // Make the image resizable
                    makeResizable(uploadedImg);
                };
                reader.readAsDataURL(file);
            }
        });

        document.getElementById('userText').addEventListener('input', function(event) {
            const text = event.target.value;
            const textElement = document.getElementById('userTextElement');

            // Set text element content
            textElement.textContent = text;

            // Make the text element draggable
            makeDraggable(textElement);

            // Make the text element resizable
            // makeResizable(textElement);
        });

        const textElement = document.getElementById('userTextElement');
        textElement.style.position = 'absolute';
        textElement.style.top = '50%';
        textElement.style.left = '50%';
        textElement.style.transform = 'translate(-50%, -50%)';
        textElement.style.fontSize = '20px';
        textElement.style.color = '#000';
        textElement.style.userSelect = 'none';
        textElement.style.cursor = 'move';

        function makeDraggable(element) {
            let pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
            element.onmousedown = dragMouseDown;

            function dragMouseDown(e) {
                e = e || window.event;
                e.preventDefault();
                pos3 = e.clientX;
                pos4 = e.clientY;
                document.onmouseup = closeDragElement;
                document.onmousemove = elementDrag;
            }

            function elementDrag(e) {
                e = e || window.event;
                e.preventDefault();
                pos1 = pos3 - e.clientX;
                pos2 = pos4 - e.clientY;
                pos3 = e.clientX;
                pos4 = e.clientY;
                element.style.top = (element.offsetTop - pos2) + "px";
                element.style.left = (element.offsetLeft - pos1) + "px";
            }

            function closeDragElement() {
                document.onmouseup = null;
                document.onmousemove = null;
            }
            let posX = 0, posY = 0, initialX = 0, initialY = 0;
            element.addEventListener('touchstart', function(e) {
        initialX = e.touches[0].clientX - posX;
        initialY = e.touches[0].clientY - posY;
        if (e.cancelable) {
            e.preventDefault();
        }
    });

    element.addEventListener('touchmove', function(e) {
        posX = e.touches[0].clientX - initialX;
        posY = e.touches[0].clientY - initialY;
        element.style.top = posY + 'px';
        element.style.left = posX + 'px';
        if (e.cancelable) {
            e.preventDefault();
        }
    });

    element.addEventListener('touchend', function(e) {
        initialX = posX;
        initialY = posY;
        if (e.cancelable) {
            e.preventDefault();
        }
    });
        }

        function makeResizable(element) {
            interact(element).resizable({
                edges: { left: true, right: true, bottom: true, top: true },
                listeners: {
                    move: function (event) {
                        let target = event.target;
                        target.style.width = event.rect.width + 'px';
                        target.style.height = event.rect.height + 'px';
                    }
                }
            });
        }
    </script>
</body>
</html>