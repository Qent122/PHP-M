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

        header {
            text-align: center;
        }

        main {
            display: flex;
            justify-content: center;
        }

        #container {

            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-template-rows: repeat(2, 1fr);
            grid-column-gap: 20px;
            grid-row-gap: 20px;
        }

        .card {
            text-align: center;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            width: 25rem;
            border-radius: 10%;
        }

        figure img {
            border-radius: 50%;
        }
    </style>
</head>

<body>

    <header>
        <h1>Les tableaux en PHP</h1>
        <?php echo date('d' . '/' . 'm' . '/' . 'Y'); ?>

    </header>
    <hr>