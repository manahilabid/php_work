<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get and post methods</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container">
        <h1>golbal variables</h1>
<div class="row">
    <div class="col-6">
        <form method="get" action="welcome.php">
            <h1>fill this form</h1>
            <input type="txt" placeholder="enter your name" classs="form-control mb-3" name="username"><br><br>     
            <input type="email" placeholder="enter your email" classs="form-control mb-3" name="email"><br><br>
            <input type="number" placeholder="enter your contact" classs="form-control mb-3" name="contact"><br><br>
            <input type="password" placeholder="enter your password" classs="form-control mb-3" name="password"><br><br>    
            <button class="btn btn-dark w-100" name="btn_submit">submit</button>

        </form>
    </div>
</div>
    </section>
    <?php
    if(isset($_GET['btn_submit'])){
        $name = $_GET['username'];
        $email = $_GET['email'];
        $contact = $_GET['contact'];
        $password = $_GET['password'];  
        echo $name;
        echo $email;
        echo $contact;
        echo $password;
    }
    ?>

</body>
</html>