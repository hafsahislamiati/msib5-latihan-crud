<?php

// Memanggil koneksi menuju database
include "connection.php";	//call connection

// Memanggil data dari database
$result = mysqli_query($mysqli, 'SELECT * FROM tb_pet');

?>

<div class="container pt-5">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PETS</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Pets List</h2>
        <a href="add_pet.php" class="btn btn-primary mb-3">Add New Pet</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Gender</th>
                    <th>Age (month)</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($data = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td><?php echo $data['pet_name']; ?></td>
                    <td><?php echo $data['pet_type']; ?></td>
                    <td><?php echo $data['pet_gender']; ?></td>
                    <td><?php echo $data['pet_age']; ?></td>
                    <td>
                        <a href="edit_pet.php?id=<?php echo $data['pet_id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="delete_pet.php?id=<?php echo $data['pet_id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Add Bootstrap JavaScript (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
