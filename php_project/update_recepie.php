<!DOCTYPE html>
<head>
    <title>Recipe Management System</title>
    <link rel="stylesheet" href="update_recepie.css">
</head>
<body>
    <div class="container">
        <h1>Recipe Management System</h1>
        <div class="update-recipe-form">
            <h2>Update Recipe</h2>
            <form action="update_recepie.php" method="POST">
                <div class="form-group">
                    <label for="recipe_select">Select Recipe:</label>
                    <select id="recipe_select" name="name" required>
                        <option value="">Select Recipe</option>
                        <?php
                        $conn = new mysqli("localhost", "root", "", "recepie");
                        $result = $conn->query("SELECT name FROM menu");

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='" . $row["name"] . "'>" . $row["name"] . "</option>";
                            }
                        } else {
                            echo "<option disabled>No recipes found</option>";
                        }
                        $conn->close();
                        ?>
                    </select>
                </div>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $conn = new mysqli("localhost", "root", "", "recepie");

                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $stmt = $conn->prepare("UPDATE menu SET description=?, preparation_time=?, servings=?, difficulty=? WHERE name=?");
                    $stmt->bind_param("siiss", $_POST['description'], $_POST['preparation_time'], $_POST['servings'], $_POST['difficulty'], $_POST['name']);

                    if ($stmt->execute()) {
                        echo "<script>alert('Recipe updated successfully.');</script>";
                    } else {
                        echo "<p>Error: " . $stmt->error . "</p>";
                    }

                    $stmt->close();
                    $conn->close();
                }
                ?>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea id="description" name="description" required></textarea>
                </div>
                <div class="form-group">
                    <label for="preparation_time">Preparation Time (in minutes):</label>
                    <input type="number" id="preparation_time" name="preparation_time" required>
                </div>
                <div class="form-group">
                    <label for="servings">Servings:</label>
                    <input type="number" id="servings" name="servings" required>
                </div>
                <div class="form-group">
                    <label for="difficulty">Difficulty:</label>
                    <select id="difficulty" name="difficulty" required>
                        <option value="">Select</option>
                        <option value="Easy">Easy</option>
                        <option value="Medium">Medium</option>
                        <option value="Hard">Hard</option>
                    </select>
                </div>
                <button type="submit">Update Recipe</button>
            </form>
        </div>
    </div>
</body>
</html>
