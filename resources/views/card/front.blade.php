<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<head>
    <style>
        @page {
            size: A4;
            /* Set the page size to A4, adjust as needed */
            margin: 0;
        }

        body {
            margin: 0;
            padding: 0;

        }

        .container {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .image {
            /* Adjust the width and height to fit the image to the page */

            max-width: 100%;
            max-height: 50vh;
            object-fit: cover;

            /* Adjust as needed */
        }

        .card_name {
            position: absolute;
            top: 21%;
            left: 60%;
            /* Adjust the left position as needed */
            transform: translateX(-50%);
            /* Center horizontally */
            z-index: 1;
            font-size: 40px;
            color: red;
            font-style: italic;
        }

        .card_address {
            position: absolute;
            top: 25%;
            left: 72%;
            /* Adjust the left position as needed */
            transform: translateX(-50%);
            /* Center horizontally */
            z-index: 1;
            font-size: 42px;
            color: red;
            font-style: italic;
        }

        @page {
            size: A4 portrait;
            margin-bottom: 20px;
        }


      
    </style>
</head>

<body>

    <div class="container">
        <img class="image"
            src="{{ 'data:image/png;base64,' . base64_encode(file_get_contents(public_path('/image.png'))) }} "
            height:300%;>
        <div class="card_name">
            <p>{{ $card->name }}</p>
        </div>
        <div class="card_address">
            <p>{{ $card->adddres }}</p> <!-- Fixed a typo in the variable name -->
        </div>
    </div>
</body>

</html>
