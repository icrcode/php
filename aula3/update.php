<?php
    include 'db.php';

    $id = $_GET['id'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        $name = $_POST['name'];
        $email = $_POST['email'];

        $sql = "UPDATE user SET name='$name', email='$email' WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            echo "Registro atualizado com sucesso";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }

        $conn ->close();
        header ("Location: read.php");
        exit();
    }

    $sql = "SELECT * FROM user WHERE id=$id";
    $result = $conn -> query($sql);
    $row = $result -> fetch_assoc();

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    
    <form method="POST" action=" update.php?id=<?php echo $row['id'];?>">
        <label for="name">Nome</label>
        <input type="text" name="name" value="<?php echo $row['name']; ?>" required>
        <label for="email">Email</label>
        <input type="email" name="email" value="<?php echo $row['email']; ?>" required>
        <input type="submit" value="Atualizar">
    </form>

</body>
</html>