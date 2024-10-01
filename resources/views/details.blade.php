<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <title>Educational Details</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6 border p-3">
                <form class="form" method="post" action="{{ route('insert2') }}">
                    @csrf
                    <div class="form-group">
                        <h2 class="fw-light">Educational Details</h2><br>
                        <label class="form-label">Sem 1</label>
                        <input type="text" name="sem1" id="sem1" class="form-control" placeholder="Enter your sem 1 spi" required pattern="^[0-9]$"><br>
                        <label class="form-label">Sem 2</label>
                        <input type="text" name="sem2" id="sem2" class="form-control" placeholder="Enter your sem 2 spi" required pattern="^[0-9]$"><br>
                        <label class="form-label">Sem 3</label>
                        <input type="text" name="sem3" id="sem3" class="form-control" placeholder="Enter your sem 3 spi" required pattern="^[0-9]$"><br>
                        <label class="form-label">Sem 4</label>
                        <input type="text" name="sem4" id="sem4" class="form-control" placeholder="Enter your sem 4 spi" required pattern="^[0-9]$"><br>
                        <label class="form-label">Sem 5</label>
                        <input type="text" name="sem5" id="sem5" class="form-control" placeholder="Enter your sem 5 spi" required pattern="^[0-9]$"><br>
                        <label class="form-label">Sem 6</label>
                        <input type="text" name="sem6" id="sem6" class="form-control" placeholder="Enter your sem 6 spi" required pattern="^[0-9]$"><br>
                        <label class="form-label">Cumulative grade points</label>
                        <input type="text" name="cumulative" id="cumulative" class="form-control" placeholder="Enter your cpi" required pattern="^[0-9]$"><br>
                        
                        <div class="d-flex justify-content-center">
                            <button>Submit</button>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</body>
</html>