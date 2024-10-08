<!DOCTYPE html>
<head>
    <title>Recipe Management System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Recipe Management System</h1>
        <div class="add-recipe-form">
            <h2>Add Recipe</h2>
            <form action="add_recepie.php" method="POST">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
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
                <button type="submit">Add Recipe</button>
            </form>
        </div>
    </div>

    <?php
    $conn = new mysqli("localhost", "root", "", "recepie");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $stmt = $conn->prepare("INSERT INTO menu (name, description, preparation_time, servings, difficulty) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssiss", $_POST['name'], $_POST['description'], $_POST['preparation_time'], $_POST['servings'], $_POST['difficulty']);

        if ($stmt->execute()) {
            echo "<script>alert('New Recipe added successfully.');</script>";
        } else {
            echo "<p>Error: " . $stmt->error . "</p>";
        }

        $stmt->close();
    }
    $conn->close();
    ?>
</body>
</html>
