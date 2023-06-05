<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        .main{
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="main">
        <form action="change-password" method="post" class="w-50">
            @csrf
            <div class="mb-3">
                <label for="OldPassword" >Old Password</label>
                <input type="password" class="form-control" id="oldpassword" name="old_password" class="">
            </div>
            <div class="mb-3">
                <label for="NewPassword">New Password</label>
                <input type="password" class="form-control" id="Newpassword" name="New_password" class="">
            </div>
            <div class="mb-3">
                <label for="ReapetPassword">confirm Password</label>
                <input type="password" class="form-control" id="Reapetpassword" name="Reapet_password" class="">
            </div>
            <div>
                <div>
                    <button type="submit" class="btn btn-primary">save</button>
                </div>
            </div>
        </form>
        </div>
    </div>
</body>
</html>