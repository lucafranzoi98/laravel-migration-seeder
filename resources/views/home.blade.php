<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/app.js')
    <title>Trains</title>
</head>

<body class="bg-dark text-white">

    <h1 class="text-center my-4">Trains</h1>

    <div class="container">
        <div class="table-responsive">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">Company</th>
                        <th scope="col">Departure station</th>
                        <th scope="col">Departure time</th>
                        <th scope="col">Arrival station</th>
                        <th scope="col">Arrival time</th>
                        <th scope="col">Train code</th>
                        <th scope="col">Carriages number</th>
                        <th scope="col">Canceled</th>
                        <th scope="col">On time</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach ($trains as $train)
                        <tr>
                           <td>{{Str::ucfirst($train->company)}}</td>
                           <td>{{Str::ucfirst($train->departure_station)}}</td>
                           <td>{{$train->departure_time}}</td>
                           <td>{{Str::ucfirst($train->arrival_station)}}</td>
                           <td>{{$train->arrival_time}}</td>
                           <td>{{$train->train_code}}</td>
                           <td>{{$train->carriages_number}}</td>
                           <td>{{$train->canceled ? 'Canceled' : '-'}}</td>

                           @if ($train->canceled)
                           <td>-</td>
                           @else
                              <td>{{$train->on_time ? 'On time' : 'Delayed'}}</td>
                           @endif
                        </tr>
                     @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
