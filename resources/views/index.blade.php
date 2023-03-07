<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
</head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>

<body>
    <div class="container">
        <div class="header">
            <h1>Hallo User</h1>
            <hr>

        </div>

        <div class="main">
            <h3>Array</h3>
            {{-- V. PHP --}}
            {{-- <?php
            echo $modelUser;
            ?>
            <br> --}}

            {{-- V. Laravel --}}
            {{ $modelUser }}
            <br><br>

            <h3>Baris</h3>
            @foreach ($modelUser as $user)
                id : {{ $user->id }}
                <br>
                name : {{ $user->name }}
                <br>
                gender : {{ $user->gender }}
                <br>
                email : {{ $user->email }}
                <br>
            @endforeach
            <br>

            <h3>Tabel</h3>
            <table class="table table-bordered" style="width: 500px">
                <thead class="table table-primary" style="text-align: center">
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">name</th>
                        <th scope="col">gender (L / P)</th>
                        <th scope="col">email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($modelUser as $user)
                        <tr>
                            <th scope="row" style="text-align: center">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td style="text-align: center">{{ $user->gender }}</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

    </div>
</body>

</html>
