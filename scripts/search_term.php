<?php

// create an empty variable to store the search term
$searchTerm = '';

// check if the user has submitted a search using the "q" parameter in the URL
if (isset($_GET['q'])) {
    // trim removes any extra spaces from the start and end of the input
    $searchTerm = trim($_GET['q']);
}

// SQL query to search for games based on user input
$sql = "
   SELECT 
    game.id,                         -- unique game ID
    game.name AS game_name,          -- game title
    game.price AS game_price,        -- game price
    game.rating AS game_rating,      -- age rating
    genre.name AS genre_name,        -- genre name from genre table
    game.image AS game_image,        -- image for display
    console.name as console_name     -- console name from console table

FROM game

-- join genre table to get the genre name
INNER JOIN genre 
    ON game.fk_genre_id = genre.id

-- join metadata table to link games to consoles
INNER JOIN game_metadata 
    ON game.id = game_metadata.fk_game_id

-- join console table to get console names
INNER JOIN console 
    ON game_metadata.fk_console_id = console.id

-- search across multiple fields using LIKE
-- the ? placeholders are used for prepared statements (security)
WHERE game.name LIKE ?
   OR game.main_character LIKE ?
   OR genre.name LIKE ?
   OR console.name LIKE ?

-- order results alphabetically
ORDER BY game.name ASC
";

// prepare the SQL statement (protects against SQL injection)
$stmt = $conn->prepare($sql);

// add wildcard symbols (%) to allow partial matching
// e.g. searching "mar" will match "Mario"
$searchValue = '%' . $searchTerm . '%';

// bind the search value to each placeholder in the query
// "ssss" means 4 string values
$stmt->bind_param("ssss", $searchValue, $searchValue, $searchValue, $searchValue);

// execute the query
$stmt->execute();

// get the results from the database
$result = $stmt->get_result();

// convert results into an associative array for use in PHP
$games = $result->fetch_all(MYSQLI_ASSOC);
?>