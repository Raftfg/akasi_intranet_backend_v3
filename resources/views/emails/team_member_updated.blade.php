<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Email - Team</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            overflow-x: hidden;
        }

        * {
            padding: 0;
            margin: 0;
            position: relative;
            box-sizing: border-box;
            box-sizing: border-box;
            color: #343a40;
            /*
            font-size: 18px;
            font-family: Verdana, Geneva, Tahoma, sans-serif; */
        }

        .mail-container {
            min-height: 100vh;
            padding: 20px;
        }

        .b-container {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
        }

        .author {
            font-weight: bold;
        }
    </style>
</head>

<body class="antialiased">
    <div class="b-container">
        <div class="mail-container">
            <div class="mail-title">
                <div>
                    Bonjour M/Mme <span class="author">
                        {{ $member->user->firstname }} {{ $member->user->lastname }},
                    </span>
                    votre role dans l'équipe {{ $member->team->name }} vient d'ếtre modifié .

                    <div>
                        Veuillez vous connecter sur : <a href="{{ env('FRONTEND_URL') }}">Akasi intranet</a> pour plus
                        d'information.
                    </div>
                </div>
            </div>
            <div class="mail-content">
                <div>


                    --
                    <p>

                        Cordialement, <br>
                        Akasi Intranet.
                    </p>
                </div>
            </div>
        </div>
</body>

</html>
