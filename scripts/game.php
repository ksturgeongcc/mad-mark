<?php
$game_id = $_GET['game_id'] ?? null;
// SQL query to retrieve game data from the database
$sql = "
    SELECT 
        game.id,                         -- unique ID of the game
        game.image AS game_image,        -- image file name/path
        game.name AS game_name,          -- game title
        game.description AS game_description, -- game description
        game.price AS game_price,        -- price of the game
        game.rating AS game_rating,      -- age rating (e.g. 12, 18)
        genre.name AS genre_name         -- genre name from the genre table
        
    FROM game

    -- join genre table to get the genre name instead of just the ID
    INNER JOIN genre 
        ON game.fk_genre_id = genre.id

    -- join metadata table (used for relationships such as console/location)
    INNER JOIN game_metadata 
        ON game.id = game_metadata.fk_game_id

        where game.id = ?
";

// prepare the SQL statement (protects against SQL injection)
$stmt = $conn->prepare($sql);
$bind_param = $stmt->bind_param("i", $game_id);

// execute the query
$stmt->execute();


// get the result set from the query
$result = $stmt->get_result();

// convert results into an associative array
// (so we can use column names like $game['game_name'])
$game = $result->fetch_assoc();