@
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
        <div class="w-100 vh-100 d-flex justify-content-center align-items-center">
            <form action="<?php echo url('/?page=auth') ?>" style="max-width: 400px;">
                <h1 class="display-4 text-center pb-5">Log In</h1>
                <input type="email" class="form-control mb-3 rounded" placeholder="Email" name="email" required>
                <input type="email" class="form-control mb-3 rounded" placeholder="Email" name="email" required>
                <button class="form-control btn btn-danger py3 mt3 rounded" type="submit">Log In</button>
            </form>
        </div>
</body>
</html>