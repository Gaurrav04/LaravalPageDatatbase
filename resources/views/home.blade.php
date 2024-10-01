<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <title>home</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="fw-light">Welcome {{ $personaltable->name }}</h1>
        <h2 class="fw-light">Registration Details</h2>
        <table class="table table-light">
            <tr>
                <th>Name</th>
                <td>{{ $personaltable->name }}</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>{{ $personaltable->address }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $personaltable->email }}</td>
            </tr>
            <tr>
                <th>Phone no.</th>
                <td>{{ $personaltable->phno }}</td>
            </tr>
        </table>

        <h2 class="fw-light">Educational Details</h2>
        <table class="table table-light">
            <tr>
                <th>SPI 1</th>
                <td>{{ $detail->spi1 }}</td>
            </tr>
            <tr>
                <th>SPI 2</th>
                <td>{{ $detail->spi2 }}</td>
            </tr>
            <tr>
                <th>SPI 3</th>
                <td>{{ $detail->spi3 }}</td>
            </tr>
            <tr>
                <th>SPI 4</th>
                <td>{{ $detail->spi4 }}</td>
            </tr>
            <tr>
                <th>SPI 5</th>
                <td>{{ $detail->spi5 }}</td>
            </tr>
            <tr>
                <th>SPI 6</th>
                <td>{{ $detail->spi6 }}</td>
            </tr>
            <tr>
                <th>CPI</th>
                <td>{{ $detail->cpi }}</td>
            </tr>
        </table>

    </div>  
</body>
</html>