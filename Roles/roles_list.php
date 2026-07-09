<?php
$path = $_SERVER['DOCUMENT_ROOT'];
require_once $path . "/attendanceweb/database/database.php";

$pdo = getDB();

// Delete
if (isset($_GET['delete'])) {

    $id = (int)$_GET['delete'];

    $stmt = $pdo->prepare("DELETE FROM roles WHERE id = :id");
    $stmt->execute([':id' => $id]);

    header("Location: roles_list.php");
    exit;
}

$stmt = $pdo->query("SELECT * FROM roles ORDER BY id DESC");
$roles = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Role Management</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">

        <h2>Role Management</h2>

        <p><a href="index_pdo.php">+ Add New Role</a></p>

        <table>

            <tr>
                <th>ID</th>
                <th>Role</th>
                <th>Display Name</th>
                <th>Status</th>
                <th>Created</th>
                <th>Action</th>
            </tr>

            <?php if (!$roles) { ?>
                <tr>
                    <td colspan="6">No roles found.</td>
                </tr>
            <?php } ?>

            <?php foreach ($roles as $r) { ?>

                <tr>
                    <td><?php echo $r['id']; ?></td>
                    <td><?php echo htmlspecialchars($r['name']); ?></td>
                    <td><?php echo htmlspecialchars($r['display_name']); ?></td>
                    <td><?php echo htmlspecialchars($r['status']); ?></td>
                    <td><?php echo htmlspecialchars($r['created_at']); ?></td>
                    <td>
                        <a href="index_pdo.php?edit=<?php echo $r['id']; ?>">Edit</a>
                        <a href="?delete=<?php echo $r['id']; ?>" onclick="return deleteRole()">Delete</a>
                    </td>
                </tr>

            <?php } ?>

        </table>

    </div>

    <script>
        function deleteRole() {
            return confirm("Are you sure you want to delete this role?");
        }
    </script>
</body>
</html>
