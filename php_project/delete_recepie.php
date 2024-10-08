<!DOCTYPE html>
<head>
    <title>Recipe Management System</title>
    <link rel="stylesheet" href="update_recepie.css">
</head>
<body>
    <div class="container">
        <h1>Recipe Management System</h1>
        <div class="update-recipe-form">
            <h2>Delete Recipe</h2>
            <form action="delete_recepie.php" method="POST">
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
                <button type="submit">Delete Recipe</button>
            </form>
        </div>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $conn = new mysqli("localhost", "root", "", "recepie");

        $name = mysqli_real_escape_string($conn, $_POST['name']);

        $stmt = $conn->prepare("DELETE FROM menu WHERE name=?");
        $stmt->bind_param("s", $name);

        if ($stmt->execute()) {
            echo "<script>alert('Recipe deleted successfully.');</script>"; 
        } else {
            echo "<p>Error: " . $stmt->error . "</p>";
        }

        $stmt->close();
        $conn->close();
    }
    ?>
</body>
</html>
