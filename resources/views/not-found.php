<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page not found</title>

    <style>
        body {
            font-family: monospace;
            line-height: 1.5;
        }

        div {
            max-width: 1000px;
            padding: 40px;
            margin: 0 auto;
        }

        h1 {
            font-size: 26px;
            margin: 0;
        }

        p {
            color: #555;
            margin: 0;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <div>
        <h1>Oh no!</h1>
        <p>
            The requested URL
            <strong><?= $uri->getPath() ?></strong>
            was not found on this server.
        </p>
    </div>
</body>

</html>