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
            background-color: rgb(218, 205, 205);
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
    </style>
</head>

<body id="antialiased">
    <div id="head">
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="{{ url('signup') }}">signup</a></li>
            <li><a href="/teacher-data">Teacher-data</a></li>
        </ul>
    </div>

    <div>
        {{-- fetch multiple data --}}
        {{-- @foreach ($teacher_data as $data)
            {{ $data->id }}
            {{ $data->First }}
            {{ $data->Last }}
            {{ $data->State }}
            {{ $data->Pincode }}
            <br>
        @endforeach --}}



        {{-- fetch for single data --}}
        {{ $teacher_data->id . '.' }}
        {{ $teacher_data->First }}
        {{ $teacher_data->Last . '-' }}
        {{ $teacher_data->State . '-' }}
        {{ $teacher_data->Pincode }}

    </div>

</body>

</html>
