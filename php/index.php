<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="container my-5">
        <h2>List of Client</h2>
        <a class="btn btn-primary" href="../php/create.php" role="button">New Client</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Phone</th>
                    <th>Addrees</th>
                    <th>Age</th>

                </tr>
            </thead>
            <tbody>
                <?php
                include("../connection/conn.php");

                $sql = $pdo->prepare("SELECT * FROM client");

                if ($result = $sql->execute()) {
                    if (!$result) {
                        die("Invalid query:");
                    }
                }
                while ($row = $sql->fetch()) {
                ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['phone'] ?></td>
                        <td><?= $row['address'] ?></td>
                        <td><?= $row['age'] ?></td>
                        <td><?= $row['created_at'] ?></td>
                        <td>
                            <a class='btn btn-primary btn-sm' href='../php/edit.php?id=<?= $row['id'] ?>'>Edit</a>
                            <a class='btn btn-danger btn-sm' href='../php/delete.php?id=<?= $row['id'] ?>'>Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>
