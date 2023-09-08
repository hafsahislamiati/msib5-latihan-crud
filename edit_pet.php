<?php
include_once("connection.php");

// Update
if (isset($_POST['update'])) {
    $pet_id = $_POST['id']; // Change 'pet_id' to 'id'

    $pet_name = $_POST['name']; // Change 'pet_name' to 'name'
    $pet_type = $_POST['pet_type'];
    $pet_gender = $_POST['pet_gender'];
    $pet_age = $_POST['age'];

    // query untuk update data
    $query = mysqli_query($mysqli, "UPDATE tb_pet SET pet_name='$pet_name', pet_type='$pet_type', pet_gender='$pet_gender', pet_age='$pet_age' WHERE pet_id='$pet_id' ");

    header('Location: index.php');
}

// Ambil data user
$pet_id = $_GET['id'];

$query = "SELECT * FROM tb_pet WHERE pet_id='$pet_id'"; // Change 'id' to 'pet_id'

$result = mysqli_query($mysqli, $query); // Execute the query

if (!$result) {
    die("Error: " . mysqli_error($mysqli));
}

$pets = mysqli_fetch_array($result); // Fetch data from the result set

$pet_name = $pets['pet_name'];
$pet_type = $pets['pet_type'];
$pet_gender = $pets['pet_gender'];
$pet_age = $pets['pet_age'];
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
        <h2>Edit Pet</h2>
        <form action="edit_pet.php" method="POST" name="editPet">
            <div class="mb-3">
                <label for="name" class="form-label">Pet Name</label>
                <input type="text" class="form-control" name="name" value="<?= $pet_name ?>">
            </div>
            <div class="mb-3">
                <label for="pet_type" class="form-label">Pet Type</label>
                <select class="form-select" name="pet_type" required>
                    <option value="">Choose</option>
                    <option value="Cat" <?= ($pet_type == 'Cat') ? 'selected' : ''; ?>>Cat</option>
                    <option value="Dog" <?= ($pet_type == 'Dog') ? 'selected' : ''; ?>>Dog</option>
                    <option value="Reptil" <?= ($pet_type == 'Reptil') ? 'selected' : ''; ?>>Reptil</option>
                    <option value="Bird" <?= ($pet_type == 'Bird') ? 'selected' : ''; ?>>Bird</option>
                    <option value="Rodent" <?= ($pet_type == 'Rodent') ? 'selected' : ''; ?>>Rodent</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Pet Gender</label>
                <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="pet_gender" value="Male" <?= ($pet_gender == 'Male') ? 'checked' : ''; ?> required>
                    <label class="form-check-label">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="pet_gender" value="Female" <?= ($pet_gender == 'Female') ? 'checked' : ''; ?> required>
                    <label class="form-check-label">Female</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Pet Age</label>
                <input type="text" class="form-control" name="age" value="<?= $pet_age ?>">
            </div>
            <input type="hidden" name="id" value="<?= $pet_id ?>">
            <button type="submit" class="btn btn-primary" name="update">Update</button>
            <a href="index.php" class="btn btn-secondary">Back</a>
        </form>
    </div>

    <!-- Add Bootstrap JavaScript (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
