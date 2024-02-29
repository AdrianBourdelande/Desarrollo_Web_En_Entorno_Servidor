<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        body{
            background-color: grey;
        }
        form{
            width: 30%;
            margin: auto;
        }
        .container{
            display: flex;
            flex-wrap: wrap;
            align-content:center;  
            justify-content: space-around; 
            margin-top: 10%;
            width:50%;
        }  
        h1{
            text-align: center;
        }
    </style>
    <title>Idealisto</title>
</head>
<body>
    <h1>IDEALISTO</h1>
    <form action="./login2.php">
        <div  >
            <label for="email">Email address</label>
            <input type="email" name="email" class="form-control"   aria-describedby="emailHelp" placeholder="Enter email" >
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control"  placeholder="Password">
        </div>
        <button type="submit"  class="btn btn-primary">Submit</button>
</form>

    
       

</body>

</html>
