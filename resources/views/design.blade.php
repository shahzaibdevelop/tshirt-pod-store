<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/style.css') }}">
    <link href="{{ asset('assets/css/style.min.css') }}" rel="stylesheet" type="text/css" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Dancing+Script:wght@400..700&family=Jaro:opsz@6..72&family=Pacifico&family=Permanent+Marker&display=swap');

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

        @font-face {
            font-family: 'Helvetica';
            src: url("{{ asset('fonts/Helvetica.ttf') }}") format('truetype');
        }


        .font1 {
            font-family: "Permanent Marker", cursive;
            font-weight: 400;
            font-style: normal;
        }

        .font2 {
            font-family: "Pacifico", cursive;
            font-weight: 400;
            font-style: normal;
        }

        .font3 {
            font-family: "Dancing Script", cursive;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
        }

        .font4 {
            font-family: "Bebas Neue", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        .font5 {
            font-family: "Jaro", sans-serif;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
        }

        .font6 {
            font-family: 'Helvetica';
        }

        .radio-inputs {
            display: flex;
            justify-content: center;
            align-items: center;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .radio-inputs>* {
            margin: 6px;
        }

        .radio-input:checked+.radio-tile {
            border-color: #2260ff;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            color: #2260ff;
        }

        .radio-input:checked+.radio-tile:before {
            transform: scale(1);
            opacity: 1;
            background-color: #2260ff;
            border-color: #2260ff;
        }

        .radio-input:checked+.radio-tile .radio-icon svg {
            fill: #2260ff;
        }

        .radio-input:checked+.radio-tile .radio-label {
            color: #2260ff;
        }

        .radio-input:focus+.radio-tile {
            border-color: #2260ff;
        }

        .radio-input:focus+.radio-tile:before {
            transform: scale(1);
            opacity: 1;
        }

        .radio-tile {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border-radius: 0.5rem;
            border: 2px solid #b5bfd9;
            background-color: #fff;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            transition: 0.15s ease;
            cursor: pointer;
            position: relative;
        }

        .radio-tile:before {
            content: "";
            position: absolute;
            display: block;
            width: 0.75rem;
            height: 0.75rem;
            border: 2px solid #b5bfd9;
            background-color: #fff;
            border-radius: 50%;
            top: 0.25rem;
            left: 0.25rem;
            opacity: 0;
            transform: scale(0);
            transition: 0.25s ease;
        }

        .radio-tile:hover {
            border-color: #2260ff;
        }

        .radio-tile:hover:before {
            transform: scale(1);
            opacity: 1;
        }

        .radio-icon svg {
            width: 2rem;
            height: 2rem;
            fill: #494949;
        }

        .radio-label {
            color: #707070;
            transition: 0.375s ease;
            text-align: center;
            font-size: 13px;
        }

        .radio-input {
            clip: rect(0 0 0 0);
            -webkit-clip-path: inset(100%);
            clip-path: inset(100%);
            height: 1px;
            overflow: hidden;
            position: absolute;
            white-space: nowrap;
            width: 1px;
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
                    <img class="img img-fluid img-clickable" src="{{ asset('mockups/tshirt.png') }}" alt="">
                </div>
                <div class="col-md-4">
                    <img class="img img-fluid img-clickable" src="{{ asset('mockups/long-sleeve-tshirt.png') }}"
                        alt="">
                </div>
                <div class="col-md-4">
                    <img class="img img-fluid img-clickable" src="{{ asset('mockups/hoodie.png') }}" alt="">
                </div>
            </div>
            <hr>
            {{-- Custom  --}}
            <div class="edit-shirt px-4">
                <form action="{{route('save-design')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="row w-100 pb-5 ">
                    <div class="col-md-6">
                        <label for="uploadInput">Upload Design</label>
                        <input type="file" class="form-control mb-4 mt-2" required name="shirt_logo" id="uploadInput">
                        <label for="userText ">Write Text</label>
                        <input type="text" class="form-control mt-2" required name="shirt_text" id="userText"
                            placeholder="Enter your text here">
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <label for="userText" class="mb-2">Select Text Font</label>
                                <select onchange="changeTextFont()" id="selectTextFont" name="font_name" class="form-control">
                                    <option selected disabled>Select a Font</option>
                                    <option value="Permanent Marker" class="font1">Permanent Marker</option>
                                    <option value="Pacifico" class="font2">Pacifico</option>
                                    <option value="Dancing Script" class="font3">Dancing Script</option>
                                    <option value="Bebas Neue" class="font4">Bebas Neue</option>
                                    <option value="Jaro" class="font5">Jaro

                                    </option>
                                    <option value="Helvetica" class="font6">Helvetica</option>
                                </select>
                            </div>
                            <div class="col-md-4 ">
                                <label for="userText" class="mb-2">Select Text Color</label>
                                <input type="color" name="text_color" oninput="changeTextColor()" id="changeTextColor"
                                    class="form-control">
                            </div>
                            <div class="col-md-4 ">
                                <label for="userShirt" class="mb-2">Select Shirt Color</label>
                                <input type="color" name="shirt_color" oninput="changeShirtColor()" id="changeShirtColor"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="d-flex  gap-2 mt-3">
                            <button onclick="increaseFontSize()" class="btn btn-success w-100">Font size +</button>
                            <button onclick="decreaseFontSize()" class="btn btn-danger w-100">Font size -</button>
                        </div>
                        <label for="size" class="mt-3">Select Size</label>
                        <div class="d-flex">
                            <div class="radio-inputs d-flex flex-wrap">
                                <label>
                                    <input class="radio-input" type="radio" name="size" value="Small">
                                        <span class="radio-tile px-4 py-2">
                                            <span class="radio-label">Small</span>
                                        </span>
                                </label>
                                <label>
                                    <input checked="" class="radio-input" type="radio" name="size" value="Medium">
                                    <span class="radio-tile px-4 py-2">
                                        <span class="radio-label">Medium</span>
                                    </span>
                                </label>
                                <label>
                                    <input class="radio-input" type="radio" name="size" value="Large">
                                    <span class="radio-tile px-4 py-2">
                                        <span class="radio-label">Large</span>
                                    </span>
                                </label>
                                <label>
                                    <input class="radio-input" type="radio" name="size" value="XL">
                                    <span class="radio-tile px-4 py-2">
                                        <span class="radio-label">XL</span>
                                    </span>
                                </label>
                                <label>
                                    <input class="radio-input" type="radio" name="size" value="XXL">
                                    <span class="radio-tile px-4 py-2">
                                        <span class="radio-label">XXL</span>
                                    </span>
                                </label>
                                <label>
                                    <input class="radio-input" type="radio" name="size" value="XXXL">
                                    <span class="radio-tile px-4 py-2">
                                        <span class="radio-label">XXXL</span>
                                    </span>
                                </label>
                        </div>
                        </div>
                        <div class="form-check mt-3">
                            <input class="form-check-input" required type="checkbox" id="generateImageCheckbox">
                            <label class="form-check-label" for="generateImageCheckbox">
                                Design is Final?
                            </label>
                        </div>
                        <input type="text" id="finalDesign" name="finalDesign" hidden>
                        <button type="submit" class="btn btn-primary mt-3">Order Now</button>
                    </div>
                    <div class="col-md-6 mt-3 mt-md-0">
                        <div class="design-container w-100 h-100" id="designshirt">
                            <img id="mockupImage" class="img img-fluid">
                            <img id="uploadedImage" src="" alt="Uploaded Image" style="display: none;">
                            <div id="userTextElement"></div>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </section>

    <script src="{{ asset('assets/js/smooth-scroll.polyfills.min.js') }}"></script>
    <script src="{{ asset('assets/js/gumshoe.polyfills.min.js') }}"></script>
    <script src="{{ asset('assets/js/feather.js') }}"></script>
    <script src="{{ asset('assets/js/unicons.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('plugins/jquery/script.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/script.js') }}"></script>
    <script src="{{ asset('plugins/interactjs/script.js') }}"></script>
    <script src="{{ asset('plugins/html2canvas/script.js') }}"></script>
    <script>
        function changeTextColor() {
            var userTextElement = $('#userTextElement');
            userTextElement.css('color', $('#changeTextColor').val());
        }
    </script>
    <script>
        function changeShirtColor() {
            var userTextElement = $('#userTextElement');
            userTextElement.css('color', $('#changeTextColor').val());
        }
    </script>
    <script>
        function increaseFontSize() {
            var userTextElement = $('#userTextElement');
            var currentFontSize = parseInt(userTextElement.css('font-size'));
            var newFontSize = currentFontSize + 2;
            userTextElement.css('font-size', newFontSize + 'px');
        }

        function decreaseFontSize() {
            var userTextElement = $('#userTextElement');
            var currentFontSize = parseInt(userTextElement.css('font-size'));
            var newFontSize = currentFontSize - 2;
            userTextElement.css('font-size', newFontSize + 'px');
        }
    </script>
    <script>
        function changeTextFont() {
            let selectedFont = $('#selectTextFont').val();
            $('#userTextElement').removeClass();
            $('#userTextElement').addClass(selectedFont);
            $('#selectTextFont').removeClass();
            $('#selectTextFont').addClass('form-control');
            $('#selectTextFont').addClass(selectedFont);

        }
    </script>

    <script>
        $(document).ready(function() {
            $('.img-clickable').click(function() {
                $('.img-clickable').removeClass('border-blue');
                $(this).addClass('border-blue');
                $('#mockupImage').attr('src', $(this).attr('src'));
            });
        });
    </script>
    {{-- <script>
        $('#orderButton').click(function() {
            var node = document.getElementById('designshirt');
            html2canvas(node).then(function(canvas) {
                var imageData = canvas.toDataURL('image/png');
                console.log(imageData);
                $("#finalDesign").attr('value', imageData);
            });
        });
    </script> --}}

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#generateImageCheckbox').change(function() {
            if(this.checked) {
                generateImage();
            }
        });

        function generateImage() {
            var node = document.getElementById('designshirt');
            html2canvas(node).then(function(canvas) {
                var imageData = canvas.toDataURL('image/png');
                $("#finalDesign").attr('value', imageData);
            });
        }
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
                    const newSize = Math.min(containerWidth, containerHeight) *
                        0.2; // 20% of the smaller dimension

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
            let pos1 = 0,
                pos2 = 0,
                pos3 = 0,
                pos4 = 0;
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
            let posX = 0,
                posY = 0,
                initialX = 0,
                initialY = 0;
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
                edges: {
                    left: true,
                    right: true,
                    bottom: true,
                    top: true
                },
                listeners: {
                    move: function(event) {
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