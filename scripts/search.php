<?php

// include the database connection file (creates $conn)
include 'config/dbConfig.php';

// create a variable to store the search term
$searchTerm = '';

// check if the user has submitted a search using the "q" parameter
if (isset($_GET['q'])) {
    // remove any extra spaces from the input
    $searchTerm = trim($_GET['q']);
}

// if the user has entered something, run a search query
if ($searchTerm !== '') {

    // SQL query to search for games based on user input
    $sql = "
        SELECT 
            game.id,                         -- unique game ID
            game.name AS game_name,          -- game title
            game.price AS game_price,        -- game price
            game.rating AS game_rating,      -- age rating
            genre.name AS genre_name         -- genre name from genre table
        FROM game

        -- join genre table to get readable genre names
        INNER JOIN genre 
            ON game.fk_genre_id = genre.id

        -- search across multiple fields using LIKE
        WHERE game.name LIKE ?
           OR game.main_character LIKE ?
           OR genre.name LIKE ?

        -- order results alphabetically
        ORDER BY game.name ASC
    ";

    // prepare the SQL statement (protects against SQL injection)
    $stmt = $conn->prepare($sql);

    // add wildcard symbols (%) for partial matching
    // e.g. "mar" will match "Mario"
    $searchValue = '%' . $searchTerm . '%';

    // bind the search value to each placeholder
    // "sss" means 3 string values
    $stmt->bind_param("sss", $searchValue, $searchValue, $searchValue);

} else {

    // if no search term is entered, return all games
    $sql = "
        SELECT 
            game.id,
            game.name AS game_name,
            game.price AS game_price,
            game.rating AS game_rating,
            genre.name AS genre_name
        FROM game

        -- join genre table to get genre names
        INNER JOIN genre 
            ON game.fk_genre_id = genre.id

        -- order results alphabetically
        ORDER BY game.name ASC
    ";

    // prepare the SQL statement
    $stmt = $conn->prepare($sql);
}

// execute the query
$stmt->execute();

// get the results from the database
$result = $stmt->get_result();

// convert results into an associative array for use in PHP
$games = $result->fetch_all(MYSQLI_ASSOC);

?>