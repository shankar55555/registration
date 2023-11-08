<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        #antialiased {
            background-color: rgb(202, 185, 185)
        }

        #head {
            border: 1px solid black;
        }

        #head ul {
            display: flex;
            justify-content: center;
            text-decoration: none;
            list-style: none;
        }

        #head li {
            margin: 0px 10px 0px 10px;

        }

        #head li a {
            text-decoration: none;

        }

        #form {
            border: 1px solid black;
            position: absolute;
            top: 50%;
            left: 40%;
            display: block;
        }

        #btn {
            display: flex;
            justify-content: center;
        }
    </style>
</head>

<body id="antialiased">
    <div id="head">
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/signup">signup</a></li>
            <li><a href="/teacher-data">Teacher-data</a></li>
        </ul>
    </div>
    <div id="form">
        @csrf
        <form method="POST" action="">
            <label for="username">username</label>
            <input type="text" name="username" /><br><br>

            <label for="username">password</label>
            <input type="password" name="password" /><br><br><br>

            <input type="submit" value="Submit" id="btn" />
        </form>

    </div>

</body>

</html>
