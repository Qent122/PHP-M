<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <!-- <link rel="stylesheet" href="../assets/card.css"> -->
    <style>
        * {
            /* padding: 0; */
            /* margin: 0; */
            box-sizing: border-box;
        }



        .l {
            box-shadow: rgba(240, 46, 170, 0.4) 5px 5px, rgba(240, 46, 170, 0.3) 10px 10px, rgba(240, 46, 170, 0.2) 15px 15px, rgba(240, 46, 170, 0.1) 20px 20px, rgba(240, 46, 170, 0.05) 25px 25px,
                rgba(240, 46, 170, 0.4) -5px -5px, rgba(240, 46, 170, 0.3) -10px -10px, rgba(240, 46, 170, 0.2) -15px -15px, rgba(240, 46, 170, 0.1) -20px -20px, rgba(240, 46, 170, 0.05) -25px -25px,
                rgba(240, 46, 170, 0.4) -5px 5px, rgba(240, 46, 170, 0.3) -10px 10px, rgba(240, 46, 170, 0.2) -15px 15px, rgba(240, 46, 170, 0.1) -20px 20px, rgba(240, 46, 170, 0.05) -25px 25px, rgba(240, 46, 170, 0.4) 5px -5px, rgba(240, 46, 170, 0.3) 10px -10px, rgba(240, 46, 170, 0.2) 15px -15px, rgba(240, 46, 170, 0.1) 20px -20px, rgba(240, 46, 170, 0.05) 25px -25px;
        }



        figure img:hover {
            animation: wow 2s infinite;
            cursor: pointer;

        }

        .card:hover {
            transform: perspective(500px) translateZ(20px);

        }


        header {
            text-align: center;
        }

        main {
            width: 100%;

        }

        #BG {
            background-color: #000;
            width: 100%;
            display: flex;
            justify-content: center;
        }

        #container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-template-rows: repeat(2, 1fr);
            grid-column-gap: 80px;
            grid-row-gap: 80px;


        }

        .card {
            margin-top: 5rem;
            margin-bottom: 5rem;
            text-align: center;
            /* box-shadow: blue 0px 0px 0px 2px inset, #000 10px -10px 0px -3px, #0084ff 10px -10px, #000 20px -20px 0px -3px, #0084ff 20px -20px, #000 30px -30px 0px -3px, #0084ff 30px -30px, #000 40px -40px 0px -3px, #0084ff 40px -40px; */
            width: 20rem;
            border-radius: 10%;
            color: #fff;
        }

        figure img {
            border-radius: 50%;
        }

        @keyframes wow {
            to {
                transform: rotate(360deg);
            }

        }
    </style>
</head>

<body>

    <header>
        <h1>Les tableaux en PHP</h1>
        <?php echo date('d' . '/' . 'm' . '/' . 'Y'); ?>

    </header>
    <hr>