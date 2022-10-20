<?php
include "../connection/conn.php";

$name ="";
$email ="";
$phone ="";
$address ="";

$errorMessage = "";
$sucessMenssage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $address = $_POST["address"];

        do{
            if(empty($name)|| empty($email) || empty($phone) || empty($address)){
                $errorMessage = "All the fields are required";
                break;
            }

            $sql = "INSERT INTO client (name, email, phone, address) ".
                    "VALUES('$name','$email','$phone','$address')";
            $result = $conn->query($sql);

            if(!$result){
                $errorMessage = "Invalid query: " . $conn->error;
                break;
            }

            $name ="";
            $email ="";
            $phone ="";
            $address ="";

            $sucessMenssage = "Client added correctly";

            header("location:../php/index.php");
            exit;
            
    } while(false);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <h2>
            new Client

            <?php
            if(!empty($errorMessage)){
                echo"
                <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    <strong> $errorMessage </strong>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button
                </div>
                    ";
            }
            ?>
        </h2>
        <form action="../php/create.php" method="POST">
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Name </label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="name" value="<?php echo $name?>">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Email </label>
            <div class="col-sm-6">
                <input type="email" class="form-control" name="email" value="<?php echo $email?>">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Phone</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="phone" value="<?php echo $phone?>">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Address</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="address" value="<?php echo $address?>">
            </div>
        </div>
        <?php
            if(!empty($sucessMenssage)){
                echo"
                <div class='row mb-3'>
                    <div class='offset-sm-3 col-sm-6'>
                        <div class='alert alert-sucess alert-dismissible fade show' role='alert'>
                            <strong>$sucessMenssage</strong>
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button
                        </div>
                    </div>
                </div>
                ";
                }
            ?>
        <div class="row mb-3">
            <div class="offset-sm-3 col-sm-3 d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <div class="col-sm-3 d-grid">
                <a class="btn btn-outline-primary" href="../php/index.php" role="button">Cancel</a>
            </div>
        </div>
        </form>
    </div>
</body>
</html>