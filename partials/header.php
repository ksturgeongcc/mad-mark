<?php
include 'config/dbConfig.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>
<body>
    
    <?php include 'partials/nav.php'; ?>
    <div class="flex flex-col w-full items-center pt-1 gap-4 ">
    <p class="text-4xl md:text-6xl font-extrabold text-white">Search</p>
    <form action="search_results.php" method="GET" class="max-w-[480px] w-full px-4">    <div class="relative">
        <input 
            type="text" 
            name="q" 
            value=""
            class="w-full border h-12 shadow p-4 rounded-full" 
            placeholder="Search games"
        >

        <button type="submit">
            <svg class="text-gray-400 h-5 w-5 absolute top-3.5 right-3 fill-current"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 56.966 56.966">
                <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
            </svg>
        </button>
    </div>
</form>
</div>
