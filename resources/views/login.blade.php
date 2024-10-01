<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"> 
    <title>Login</title>
</head>
<body>
<div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6 border p-3">
                <form class="form" action="{{ route('vals') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label class="form-label">User Name</label><br>
                        <input type="text" name="usnm1" id="usnm1" class="form-control" placeholder="Enter your user name"><br>
                        
                        <label>Password</label><br>
                        <input type="text" name="pass1" id="pass1" class="form-control" placeholder="Enter your password"><br>
                        
                        <div class="d-flex justify-content-center">
                            <button type="submit">Login</button>
                        </div>
                        
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</body>
</html>