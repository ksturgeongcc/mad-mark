<?php
$searchTerm = '';

if (isset($_GET['q'])) {
    $searchTerm = trim($_GET['q']);
}

$sql = "
   SELECT 
    game.id,
    game.name AS game_name,
    game.price AS game_price,
    game.rating AS game_rating,
    genre.name AS genre_name,
    game.image AS game_image,
    console.name as console_name
FROM game
INNER JOIN genre 
    ON game.fk_genre_id = genre.id
INNER JOIN game_metadata 
    ON game.id = game_metadata.fk_game_id
INNER JOIN console 
    ON game_metadata.fk_console_id = console.id
WHERE game.name LIKE ?
   OR game.main_character LIKE ?
   OR genre.name LIKE ?
   OR console.name LIKE ?

   
ORDER BY game.name ASC
";

$stmt = $conn->prepare($sql);

$searchValue = '%' . $searchTerm . '%';
$stmt->bind_param("ssss", $searchValue, $searchValue, $searchValue, $searchValue);

$stmt->execute();

$result = $stmt->get_result();
$games = $result->fetch_all(MYSQLI_ASSOC);
?>