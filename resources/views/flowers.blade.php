<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Hi, this is for you!</title>
    <link rel="stylesheet" href="{{ asset('css/flowers.css') }}">

    <style>
        .overlay {
            position: absolute; /* Position the overlay relative to the container */
            top: 50%; /* Center vertically */
            left: 50%; /* Center horizontally */
            transform: translate(-50%, -50%); /* Adjust for the offset of the text */
            text-align: center; /* Center the text */
            color: white; /* Text color */
            z-index: 10; /* Ensure it's on top */
        }

        .overlay__text {
            font-size: 2rem; /* Size of the text */
            margin-bottom: 20px; /* Space between text and button */
        }

        .overlay__button {
            padding: 10px 20px; /* Button padding */
            font-size: 1rem; /* Button text size */
            background-color: #f48fb1; /* Button color */
            border: none; /* Remove border */
            color: white; /* Button text color */
            cursor: pointer; /* Pointer on hover */
            border-radius: 5px; /* Rounded corners */
            transition: background-color 0.3s; /* Smooth transition */
        }

        .overlay__button:hover {
            background-color: #e64a19; /* Darker color on hover */
        }
    </style>
</head>

<body>
    <!-- partial:index.partial.html -->
    <body class="container body">
        <div class="night"></div>
        <div class="flowers">
            <div class="flower flower--1">
                <div class="flower__leafs flower__leafs--1">
                    <div class="flower__leaf flower__leaf--1"></div>
                    <div class="flower__leaf flower__leaf--2"></div>
                    <div class="flower__leaf flower__leaf--3"></div>
                    <div class="flower__leaf flower__leaf--4"></div>
                    <div class="flower__white-circle"></div>

                    <div class="flower__light flower__light--1"></div>
                    <div class="flower__light flower__light--2"></div>
                    <div class="flower__light flower__light--3"></div>
                    <div class="flower__light flower__light--4"></div>
                    <div class="flower__light flower__light--5"></div>
                    <div class="flower__light flower__light--6"></div>
                    <div class="flower__light flower__light--7"></div>
                    <div class="flower__light flower__light--8"></div>

                </div>
                <div class="flower__line">
                    <div class="flower__line__leaf flower__line__leaf--1"></div>
                    <div class="flower__line__leaf flower__line__leaf--2"></div>
                    <div class="flower__line__leaf flower__line__leaf--3"></div>
                    <div class="flower__line__leaf flower__line__leaf--4"></div>
                    <div class="flower__line__leaf flower__line__leaf--5"></div>
                    <div class="flower__line__leaf flower__line__leaf--6"></div>
                </div>
            </div>

            <div class="flower flower--2">
                <div class="flower__leafs flower__leafs--2">
                    <div class="flower__leaf flower__leaf--1"></div>
                    <div class="flower__leaf flower__leaf--2"></div>
                    <div class="flower__leaf flower__leaf--3"></div>
                    <div class="flower__leaf flower__leaf--4"></div>
                    <div class="flower__white-circle"></div>

                    <div class="flower__light flower__light--1"></div>
                    <div class="flower__light flower__light--2"></div>
                    <div class="flower__light flower__light--3"></div>
                    <div class="flower__light flower__light--4"></div>
                    <div class="flower__light flower__light--5"></div>
                    <div class="flower__light flower__light--6"></div>
                    <div class="flower__light flower__light--7"></div>
                    <div class="flower__light flower__light--8"></div>

                </div>
                <div class="flower__line">
                    <div class="flower__line__leaf flower__line__leaf--1"></div>
                    <div class="flower__line__leaf flower__line__leaf--2"></div>
                    <div class="flower__line__leaf flower__line__leaf--3"></div>
                    <div class="flower__line__leaf flower__line__leaf--4"></div>
                </div>
            </div>

            <div class="flower flower--3">
                <div class="flower__leafs flower__leafs--3">
                    <div class="flower__leaf flower__leaf--1"></div>
                    <div class="flower__leaf flower__leaf--2"></div>
                    <div class="flower__leaf flower__leaf--3"></div>
                    <div class="flower__leaf flower__leaf--4"></div>
                    <div class="flower__white-circle"></div>

                    <div class="flower__light flower__light--1"></div>
                    <div class="flower__light flower__light--2"></div>
                    <div class="flower__light flower__light--3"></div>
                    <div class="flower__light flower__light--4"></div>
                    <div class="flower__light flower__light--5"></div>
                    <div class="flower__light flower__light--6"></div>
                    <div class="flower__light flower__light--7"></div>
                    <div class="flower__light flower__light--8"></div>

                </div>
                <div class="flower__line">
                    <div class="flower__line__leaf flower__line__leaf--1"></div>
                    <div class="flower__line__leaf flower__line__leaf--2"></div>
                    <div class="flower__line__leaf flower__line__leaf--3"></div>
                    <div class="flower__line__leaf flower__line__leaf--4"></div>
                </div>
            </div>
            <div class="flower flower--4">
                <div class="flower__leafs flower__leafs--3">
                    <div class="flower__leaf flower__leaf--1"></div>
                    <div class="flower__leaf flower__leaf--2"></div>
                    <div class="flower__leaf flower__leaf--3"></div>
                    <div class="flower__leaf flower__leaf--4"></div>
                    <div class="flower__white-circle"></div>

                    <div class="flower__light flower__light--1"></div>
                    <div class="flower__light flower__light--2"></div>
                    <div class="flower__light flower__light--3"></div>
                    <div class="flower__light flower__light--4"></div>
                    <div class="flower__light flower__light--5"></div>
                    <div class="flower__light flower__light--6"></div>
                    <div class="flower__light flower__light--7"></div>
                    <div class="flower__light flower__light--8"></div>

                </div>
                <div class="flower__line">
                    <div class="flower__line__leaf flower__line__leaf--1"></div>
                    <div class="flower__line__leaf flower__line__leaf--2"></div>
                    <div class="flower__line__leaf flower__line__leaf--3"></div>
                    <div class="flower__line__leaf flower__line__leaf--4"></div>
                </div>
            </div>

            <div class="grow-ans" style="--d:1.2s">
                <div class="flower__g-long">
                    <div class="flower__g-long__top"></div>
                    <div class="flower__g-long__bottom"></div>
                </div>
            </div>

            <div class="growing-grass">
                <div class="flower__grass flower__grass--1">
                    <div class="flower__grass--top"></div>
                    <div class="flower__grass--bottom"></div>
                    <div class="flower__grass__leaf flower__grass__leaf--1"></div>
                    <div class="flower__grass__leaf flower__grass__leaf--2"></div>
                    <div class="flower__grass__leaf flower__grass__leaf--3"></div>
                    <div class="flower__grass__leaf flower__grass__leaf--4"></div>
                    <div class="flower__grass__leaf flower__grass__leaf--5"></div>
                    <div class="flower__grass__leaf flower__grass__leaf--6"></div>
                    <div class="flower__grass__leaf flower__grass__leaf--7"></div>
                    <div class="flower__grass__leaf flower__grass__leaf--8"></div>
                    <div class="flower__grass__overlay"></div>
                </div>
            </div>

            <div class="growing-grass">
                <div class="flower__grass flower__grass--2">
                    <div class="flower__grass--top"></div>
                    <div class="flower__grass--bottom"></div>
                    <div class="flower__grass__leaf flower__grass__leaf--1"></div>
                    <div class="flower__grass__leaf flower__grass__leaf--2"></div>
                    <div class="flower__grass__leaf flower__grass__leaf--3"></div>
                    <div class="flower__grass__leaf flower__grass__leaf--4"></div>
                    <div class="flower__grass__leaf flower__grass__leaf--5"></div>
                    <div class="flower__grass__leaf flower__grass__leaf--6"></div>
                    <div class="flower__grass__leaf flower__grass__leaf--7"></div>
                    <div class="flower__grass__leaf flower__grass__leaf--8"></div>
                    <div class="flower__grass__overlay"></div>
                </div>
            </div>

            <div class="grow-ans" style="--d:2.4s">
                <div class="flower__g-right flower__g-right--1">
                    <div class="leaf"></div>
                </div>
            </div>

            <div class="grow-ans" style="--d:2.8s">
                <div class="flower__g-right flower__g-right--2">
                    <div class="leaf"></div>
                </div>
            </div>

            <div class="grow-ans" style="--d:2.8s">
                <div class="flower__g-front">
                    <div class="flower__g-front__leaf-wrapper flower__g-front__leaf-wrapper--1">
                        <div class="flower__g-front__leaf"></div>
                    </div>
                    <div class="flower__g-front__leaf-wrapper flower__g-front__leaf-wrapper--2">
                        <div class="flower__g-front__leaf"></div>
                    </div>
                    <div class="flower__g-front__leaf-wrapper flower__g-front__leaf-wrapper--3">
                        <div class="flower__g-front__leaf"></div>
                    </div>
                    <div class="flower__g-front__leaf-wrapper flower__g-front__leaf-wrapper--4">
                        <div class="flower__g-front__leaf"></div>
                    </div>
                    <div class="flower__g-front__leaf-wrapper flower__g-front__leaf-wrapper--5">
                        <div class="flower__g-front__leaf"></div>
                    </div>
                    <div class="flower__g-front__leaf-wrapper flower__g-front__leaf-wrapper--6">
                        <div class="flower__g-front__leaf"></div>
                    </div>
                    <div class="flower__g-front__leaf-wrapper flower__g-front__leaf-wrapper--7">
                        <div class="flower__g-front__leaf"></div>
                    </div>
                    <div class="flower__g-front__leaf-wrapper flower__g-front__leaf-wrapper--8">
                        <div class="flower__g-front__leaf"></div>
                    </div>
                    <div class="flower__g-front__line"></div>
                </div>
            </div>

            <div class="grow-ans" style="--d:3.2s">
                <div class="flower__g-fr">
                    <div class="leaf"></div>
                    <div class="flower__g-fr__leaf flower__g-fr__leaf--1"></div>
                    <div class="flower__g-fr__leaf flower__g-fr__leaf--2"></div>
                    <div class="flower__g-fr__leaf flower__g-fr__leaf--3"></div>
                    <div class="flower__g-fr__leaf flower__g-fr__leaf--4"></div>
                    <div class="flower__g-fr__leaf flower__g-fr__leaf--5"></div>
                    <div class="flower__g-fr__leaf flower__g-fr__leaf--6"></div>
                    <div class="flower__g-fr__leaf flower__g-fr__leaf--7"></div>
                    <div class="flower__g-fr__leaf flower__g-fr__leaf--8"></div>
                </div>
            </div>

            <div class="long-g long-g--0">
                <div class="grow-ans" style="--d:3s">
                    <div class="leaf leaf--0"></div>
                </div>
                <div class="grow-ans" style="--d:2.2s">
                    <div class="leaf leaf--1"></div>
                </div>
                <div class="grow-ans" style="--d:3.4s">
                    <div class="leaf leaf--2"></div>
                </div>
                <div class="grow-ans" style="--d:3.6s">
                    <div class="leaf leaf--3"></div>
                </div>
            </div>

            <div class="long-g long-g--1">
                <div class="grow-ans" style="--d:3.6s">
                    <div class="leaf leaf--0"></div>
                </div>
                <div class="grow-ans" style="--d:3.8s">
                    <div class="leaf leaf--1"></div>
                </div>
                <div class="grow-ans" style="--d:4s">
                    <div class="leaf leaf--2"></div>
                </div>
                <div class="grow-ans" style="--d:4.2s">
                    <div class="leaf leaf--3"></div>
                </div>
            </div>

            <div class="long-g long-g--2">
                <div class="grow-ans" style="--d:4s">
                    <div class="leaf leaf--0"></div>
                </div>
                <div class="grow-ans" style="--d:4.2s">
                    <div class="leaf leaf--1"></div>
                </div>
                <div class="grow-ans" style="--d:4.4s">
                    <div class="leaf leaf--2"></div>
                </div>
                <div class="grow-ans" style="--d:4.6s">
                    <div class="leaf leaf--3"></div>
                </div>
            </div>

            <div class="long-g long-g--3">
                <div class="grow-ans" style="--d:4s">
                    <div class="leaf leaf--0"></div>
                </div>
                <div class="grow-ans" style="--d:4.2s">
                    <div class="leaf leaf--1"></div>
                </div>
                <div class="grow-ans" style="--d:3s">
                    <div class="leaf leaf--2"></div>
                </div>
                <div class="grow-ans" style="--d:3.6s">
                    <div class="leaf leaf--3"></div>
                </div>
            </div>

            <div class="long-g long-g--4">
                <div class="grow-ans" style="--d:4s">
                    <div class="leaf leaf--0"></div>
                </div>
                <div class="grow-ans" style="--d:4.2s">
                    <div class="leaf leaf--1"></div>
                </div>
                <div class="grow-ans" style="--d:3s">
                    <div class="leaf leaf--2"></div>
                </div>
                <div class="grow-ans" style="--d:3.6s">
                    <div class="leaf leaf--3"></div>
                </div>
            </div>

            <div class="long-g long-g--5">
                <div class="grow-ans" style="--d:4s">
                    <div class="leaf leaf--0"></div>
                </div>
                <div class="grow-ans" style="--d:4.2s">
                    <div class="leaf leaf--1"></div>
                </div>
                <div class="grow-ans" style="--d:3s">
                    <div class="leaf leaf--2"></div>
                </div>
                <div class="grow-ans" style="--d:3.6s">
                    <div class="leaf leaf--3"></div>
                </div>
            </div>

            <div class="long-g long-g--6">
                <div class="grow-ans" style="--d:4.2s">
                    <div class="leaf leaf--0"></div>
                </div>
                <div class="grow-ans" style="--d:4.4s">
                    <div class="leaf leaf--1"></div>
                </div>
                <div class="grow-ans" style="--d:4.6s">
                    <div class="leaf leaf--2"></div>
                </div>
                <div class="grow-ans" style="--d:4.8s">
                    <div class="leaf leaf--3"></div>
                </div>
            </div>

            <div class="long-g long-g--7">
                <div class="grow-ans" style="--d:3s">
                    <div class="leaf leaf--0"></div>
                </div>
                <div class="grow-ans" style="--d:3.2s">
                    <div class="leaf leaf--1"></div>
                </div>
                <div class="grow-ans" style="--d:3.5s">
                    <div class="leaf leaf--2"></div>
                </div>
                <div class="grow-ans" style="--d:3.6s">
                    <div class="leaf leaf--3"></div>
                </div>
            </div>
        </div>
        <div class="overlay">
            <h1 class="overlay__text">Hello! Please click the button below :)</h1>
            <button class="overlay__button" id="submitButton">Click Me!</button>
        </div>
    </body>
    <script>
        window.onload = function() {
            document.body.classList.add("container");
            document.getElementById('submitButton').addEventListener('click', function() {
                document.querySelector('.overlay__text').textContent = `Happy Graduation! Wish all the best for you :)`;
                document.querySelector('.overlay__button').style.display = 'none';
                document.body.classList.remove("container");
            });
        }
    </script>

</html>
