<?php
    include 'partials/header.php';
    include 'scripts/all_games.php';
?>
<div class="max-w-7xl mx-auto">
    <h1 class="text-4xl font-bold text-center mb-12 text-gray-800">Games</h1>  
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
        <!-- Games -->
        <?php foreach ($games as $game): ?>

        <div class="group relative bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-500 hover:shadow-2xl hover:-translate-y-2">
            <div class="relative overflow-hidden h-80">
                <img src="assets/images/<?= htmlspecialchars($game['game_image'], ENT_QUOTES, 'UTF-8') ?>" 
                        alt="Image of <?= htmlspecialchars($game['game_name'], ENT_QUOTES, 'UTF-8') ?>" 
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="absolute top-4 right-4">
                    <button class="bg-white/90 text-gray-800 p-2 rounded-full shadow-md transform translate-y-2 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-300 hover:bg-red-500 hover:text-white">
                        <i class="fas fa-heart"></i>
                    </button>
                </div>           
                <span class="absolute top-4 left-4 bg-green-500 text-white text-xs font-bold px-2 py-1 rounded-full animate-pulse-slow"><?= htmlspecialchars($game['game_price'], ENT_QUOTES, 'UTF-8') ?></span>
            </div>
            <div class="p-5">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="text-lg font-bold text-gray-800"><?= htmlspecialchars($game['game_name'], ENT_QUOTES, 'UTF-8') ?></h3>
                        <p class="text-gray-500 text-sm"><?= htmlspecialchars($game['genre_name'], ENT_QUOTES, 'UTF-8') ?></p>
                    </div>
                </div>
                <button class="mt-4 bg-red-600 text-white py-2 px-4 rounded-lg hover:bg-indigo-700 transition-colors duration-300">
                    More Details
                <div class="mt-3 flex items-center">
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach ?>
    </div>
</div>
<?php
    include 'partials/footer.php';
?>