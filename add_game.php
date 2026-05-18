<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

require 'config/dbConfig.php';

$genres = $conn->query("
    SELECT id, name 
    FROM genre 
    ORDER BY name ASC
")->fetch_all(MYSQLI_ASSOC);

$consoles = $conn->query("
    SELECT id, name 
    FROM console 
    ORDER BY name ASC
")->fetch_all(MYSQLI_ASSOC);

$locations = $conn->query("
    SELECT id, city 
    FROM location 
    ORDER BY city ASC
")->fetch_all(MYSQLI_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = trim($_POST['name']);
    $description = trim($_POST['description']);
    $rating = trim($_POST['rating']);

    $genre_id = (int) $_POST['fk_genre_id'];
    $console_id = (int) $_POST['fk_console_id'];
    $location_id = (int) $_POST['fk_location_id'];

    $main_character = trim($_POST['main_character']);
    $price = (float) $_POST['price'];
    $year = (int) $_POST['year'];

    $imageName = '';

    // image upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {

        $imageName = basename($_FILES['image']['name']);

        $targetPath = 'assets/images/games/' . $imageName;

        if (!move_uploaded_file($_FILES['image']['tmp_name'], $targetPath)) {
            die("Image upload failed.");
        }
    }

    // insert game
    $gameSql = "
        INSERT INTO game (
            rating,
            fk_genre_id,
            name,
            description,
            image,
            main_character,
            price,
            year
        )
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)
    ";

    $stmt = $conn->prepare($gameSql);

    $stmt->bind_param(
        "sissssdi",
        $rating,
        $genre_id,
        $name,
        $description,
        $imageName,
        $main_character,
        $price,
        $year
    );

    $stmt->execute();

    // get newly created game ID
    $newGameId = $conn->insert_id;

    // insert metadata
    $metaSql = "
        INSERT INTO game_metadata (
            fk_game_id,
            fk_console_id,
            fk_location_id
        )
        VALUES (?, ?, ?)
    ";

    $metaStmt = $conn->prepare($metaSql);

    $metaStmt->bind_param(
        "iii",
        $newGameId,
        $console_id,
        $location_id
    );

    $metaStmt->execute();

    header("Location: games.php");
    exit;
}

include 'partials/header.php';
?>

<div class="max-w-2xl mx-auto bg-white p-8 rounded-xl shadow-lg">

    <h1 class="text-3xl font-bold mb-6 text-center">
        Add Game
    </h1>

    <form method="POST" enctype="multipart/form-data" class="space-y-5">

        <!-- Game Name -->
        <div>
            <label class="block mb-2 font-semibold">
                Game Name
            </label>

            <input 
                type="text"
                name="name"
                class="w-full border rounded-lg p-3"
                required
            >
        </div>

        <!-- Description -->
        <div>
            <label class="block mb-2 font-semibold">
                Description
            </label>

            <textarea
                name="description"
                rows="5"
                class="w-full border rounded-lg p-3"
                required
            ></textarea>
        </div>

        <!-- Rating -->
        <div>
            <label class="block mb-2 font-semibold">
                Rating
            </label>

            <input
                type="text"
                name="rating"
                placeholder="12 / 16 / 18"
                class="w-full border rounded-lg p-3"
                required
            >
        </div>

        <!-- Genre -->
        <div>
            <label class="block mb-2 font-semibold">
                Genre
            </label>

            <select 
                name="fk_genre_id"
                class="w-full border rounded-lg p-3"
                required
            >
                <option value="">
                    Select Genre
                </option>

                <?php foreach ($genres as $genre): ?>

                    <option value="<?= $genre['id'] ?>">
                        <?= htmlspecialchars($genre['name'], ENT_QUOTES, 'UTF-8') ?>
                    </option>

                <?php endforeach; ?>

            </select>
        </div>

        <!-- Console -->
        <div>
            <label class="block mb-2 font-semibold">
                Console
            </label>

            <select 
                name="fk_console_id"
                class="w-full border rounded-lg p-3"
                required
            >
                <option value="">
                    Select Console
                </option>

                <?php foreach ($consoles as $console): ?>

                    <option value="<?= $console['id'] ?>">
                        <?= htmlspecialchars($console['name'], ENT_QUOTES, 'UTF-8') ?>
                    </option>

                <?php endforeach; ?>

            </select>
        </div>

        <!-- Location -->
        <div>
            <label class="block mb-2 font-semibold">
                Location
            </label>

            <select 
                name="fk_location_id"
                class="w-full border rounded-lg p-3"
                required
            >
                <option value="">
                    Select Location
                </option>

                <?php foreach ($locations as $location): ?>

                    <option value="<?= $location['id'] ?>">
                        <?= htmlspecialchars($location['city'], ENT_QUOTES, 'UTF-8') ?>
                    </option>

                <?php endforeach; ?>

            </select>
        </div>

        <!-- Main Character -->
        <div>
            <label class="block mb-2 font-semibold">
                Main Character
            </label>

            <input
                type="text"
                name="main_character"
                class="w-full border rounded-lg p-3"
            >
        </div>

        <!-- Price -->
        <div>
            <label class="block mb-2 font-semibold">
                Price
            </label>

            <input
                type="number"
                name="price"
                step="0.01"
                class="w-full border rounded-lg p-3"
                required
            >
        </div>

        <!-- Year -->
        <div>
            <label class="block mb-2 font-semibold">
                Year
            </label>

            <input
                type="number"
                name="year"
                class="w-full border rounded-lg p-3"
                required
            >
        </div>

        <!-- Image -->
        <div>
            <label class="block mb-2 font-semibold">
                Game Image
            </label>

            <input
                type="file"
                name="image"
                accept="image/*"
                class="w-full border rounded-lg p-3 bg-white"
                required
            >
        </div>

        <!-- Submit -->
        <button
            type="submit"
            class="w-full bg-purple-700 hover:bg-purple-800 text-white font-bold py-3 rounded-lg transition"
        >
            Add Game
        </button>

    </form>

</div>

<?php include 'partials/footer.php'; ?>
