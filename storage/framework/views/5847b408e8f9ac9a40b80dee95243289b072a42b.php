<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="fw-light">Welcome <?php echo e($personaltable->name); ?></h1>
        <h2 class="fw-light">Registration Details</h2>
        <table class="table table-light">
            <tr>
                <th>Name</th>
                <td><?php echo e($personaltable->name); ?></td>
            </tr>
            <tr>
                <th>Address</th>
                <td><?php echo e($personaltable->address); ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo e($personaltable->email); ?></td>
            </tr>
            <tr>
                <th>Phone no.</th>
                <td><?php echo e($personaltable->phno); ?></td>
            </tr>
        </table>

        <h2 class="fw-light">Educational Details</h2>
        <table class="table table-light">
            <tr>
                <th>SPI 1</th>
                <td><?php echo e($detail->spi1); ?></td>
            </tr>
            <tr>
                <th>SPI 2</th>
                <td><?php echo e($detail->spi2); ?></td>
            </tr>
            <tr>
                <th>SPI 3</th>
                <td><?php echo e($detail->spi3); ?></td>
            </tr>
            <tr>
                <th>SPI 4</th>
                <td><?php echo e($detail->spi4); ?></td>
            </tr>
            <tr>
                <th>SPI 5</th>
                <td><?php echo e($detail->spi5); ?></td>
            </tr>
            <tr>
                <th>SPI 6</th>
                <td><?php echo e($detail->spi6); ?></td>
            </tr>
            <tr>
                <th>CPI</th>
                <td><?php echo e($detail->cpi); ?></td>
            </tr>
        </table>

    </div>  
</body>
</html><?php /**PATH C:\Sem2\WDF_Lab\Laravel\lara_login\resources\views/home.blade.php ENDPATH**/ ?>