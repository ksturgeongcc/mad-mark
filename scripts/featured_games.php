<?php

// SQL query to retrieve a small selection of games (e.g. featured games on homepage)
$sql = "
    SELECT 
        game.id,                         -- unique ID for each game
        game.image AS game_image,        -- image file name/path for display
        game.name AS game_name,          -- name of the game
        game.price AS game_price,        -- price of the game
        game.rating AS game_rating,      -- age rating (e.g. 12, 18)
        genre.name AS genre_name         -- genre name from the genre table
        
    FROM game

    -- join genre table to get readable genre names instead of just IDs
    INNER JOIN genre 
        ON game.fk_genre_id = genre.id

    -- join metadata table (used for relationships such as console/location)
    INNER JOIN game_metadata 
        ON game.id = game_metadata.fk_game_id

    -- group results so each game only appears once
    -- (prevents duplicates if a game has multiple related records)
    GROUP BY 
        game.id,
        game.name,
        game.price,
        game.rating,
        genre.name

    -- sort results alphabetically by game name
    ORDER BY game.name ASC

    -- limit results to 3 games (used for featured section)
    LIMIT 3
";

// prepare the SQL statement (helps protect against SQL injection)
$stmt = $conn->prepare($sql);

// execute the query
$stmt->execute();

// get the results returned from the database
$result = $stmt->get_result();

// convert results into an associative array for easy use in PHP
$featured_games = $result->fetch_all(MYSQLI_ASSOC);