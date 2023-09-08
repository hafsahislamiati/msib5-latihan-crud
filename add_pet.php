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
        <h3 class="mb-3">Form Add Pet</h3>
        <form action="add_pet.php" method="POST" name="addPets">
            <div class="mb-3">
                <label for="pet_name" class="form-label">Pet Name</label>
                <input type="text" class="form-control" name="pet_name" required>
            </div>
            <div class="mb-3">
                <label for="pet_type" class="form-label">Pet Type</label>
                <select class="form-select" name="pet_type" required>
                    <option value="">Choose</option>
                    <option value="Cat">Cat</option>
                    <option value="Dog">Dog</option>
                    <option value="Reptil">Reptil</option>
                    <option value="Bird">Bird</option>
                    <option value="Rodent">Rodent</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Pet Gender</label>
                <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="pet_gender" value="Male" required>
                    <label class="form-check-label">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="pet_gender" value="Female" required>
                    <label class="form-check-label">Female</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="pet_age" class="form-label">Pet Age</label>
                <input type="text" class="form-control" name="pet_age" required>
            </div>
            <button type="submit" class="btn btn-primary" name="Submit">Add</button> 
            <a href="index.php" class="btn btn-secondary">Back</a>
        </form>
       
        <p>

        <!-- Handle permintaan POST dari form diatas -->
        <?php
            if(isset($_POST['Submit'])) {
                $pet_name = $_POST['pet_name'];
                $pet_type = $_POST['pet_type'];
                $pet_gender = $_POST['pet_gender'];
                $pet_age = $_POST['pet_age'];

                // Memanggil koneksi menuju database
                include_once("connection.php");

                // Query untuk insert data ke database
                $result = mysqli_query($mysqli, "INSERT INTO tb_pet (pet_name, pet_type, pet_gender, pet_age) VALUES ('$pet_name','$pet_type','$pet_gender','$pet_age')");

                echo "Berhasil menambah pet. <a href='index.php' class='btn btn-secondary'>Lihat Pet</a>";
            }
        ?>
    </div>

    <!-- Add Bootstrap JavaScript (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
