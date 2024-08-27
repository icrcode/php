<?php
include 'db.php';

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "UPDATE users SET name='$name', email='$email' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Registro atualizado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header("Location: read.php");
    exit();
}

$sql = "SELECT * FROM users WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<form method="post" action="update.php?id=<?php echo $id; ?>">
    Nome: <input type="text" name="name" value="<?php echo $row['name']; ?>" required>
    Email: <input type="email" name="email" value="<?php echo $row['email']; ?>" required>
    <input type="submit" value="Atualizar">
</form>
