<?php
$path = $_SERVER['DOCUMENT_ROOT'];
require_once $path . "/attendanceweb/database/database.php";

$pdo = getDB();

// Insert
if (isset($_POST['save'])) {

    $name         = $_POST['name'];
    $display_name = $_POST['display_name'];
    $status       = $_POST['status'];

    $stmt = $pdo->prepare(
        "INSERT INTO roles (name, display_name, status) VALUES (:name, :display_name, :status)"
    );
    $stmt->execute([
        ':name'         => $name,
        ':display_name' => $display_name,
        ':status'       => $status,
    ]);

    header("Location: roles_list.php");
    exit;
}

// Update
if (isset($_POST['update'])) {

    $id           = (int)$_POST['id'];
    $name         = $_POST['name'];
    $display_name = $_POST['display_name'];
    $status       = $_POST['status'];

    $stmt = $pdo->prepare(
        "UPDATE roles SET name = :name, display_name = :display_name, status = :status WHERE id = :id"
    );
    $stmt->execute([
        ':name'         => $name,
        ':display_name' => $display_name,
        ':status'       => $status,
        ':id'           => $id,
    ]);

    header("Location: roles_list.php");
    exit;
}

$edit = false;

if (isset($_GET['edit'])) {

    $edit = true;
    $id = (int)$_GET['edit'];

    $stmt = $pdo->prepare("SELECT * FROM roles WHERE id = :id");
    $stmt->execute([':id' => $id]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $edit ? 'Edit Role' : 'Add Role'; ?></title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">

        <h2><?php echo $edit ? 'Edit Role' : 'Add Role'; ?></h2>

        <p><a href="roles_list.php">&larr; Back to roles list</a></p>

        <form method="post">

            <?php if ($edit) { ?>
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($row['id']); ?>">
            <?php } ?>

            <label>Role Name</label>

            <select name="name" required>

                <option value="">Select</option>

                <?php
                $roles = [
                    "superadmin",
                    "company_admin",
                    "hr_manager",
                    "employee",
                ];

                foreach ($roles as $r) {

                    $selected = "";

                    if ($edit && $row['name'] == $r) {
                        $selected = "selected";
                    }

                    echo "<option $selected value=\"$r\">$r</option>";
                }
                ?>

            </select>

            <label>Display Name</label>

            <input type="text" name="display_name" required
                   value="<?php echo $edit ? htmlspecialchars($row['display_name']) : ''; ?>">

            <label>Status</label>

            <select name="status">

                <option value="active" <?php if ($edit && $row['status'] == "active") echo "selected"; ?>>
                    Active
                </option>

                <option value="inactive" <?php if ($edit && $row['status'] == "inactive") echo "selected"; ?>>
                    Inactive
                </option>

            </select>

            <?php
            if ($edit) {
                echo "<button name='update'>Update Role</button>";
            } else {
                echo "<button name='save'>Save Role</button>";
            }
            ?>
        </form>

    </div>
</body>
</html>
