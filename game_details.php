<?php
    include 'partials/header.php';
    include 'scripts/game.php';
    include 'scripts/featured_games.php';

    $randomNumber = rand(10, 20);
?>

<section class="flex flex-col max-md:gap-20 md:flex-row pb-20 items-center justify-between mt-20 px-4 md:px-16 lg:px-24 xl:px-32">
    
    <div class="flex flex-col items-center md:items-start">
        <nav class="flex mt-1 mb-20">
    <ol class="flex flex-wrap text-xs">
        <li class="inline-flex items-center">
            <a href="/" class="inline-flex items-center font-medium text-gray-700 hover:text-gray-900">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                    </path>
                </svg>
            </a>
        </li>
        <li>
            <div class="flex items-center">
                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd">
                    </path>
                </svg>
                <a href="games.php"
                    class="flex font-medium text-gray-700 hover:text-gray-900">Games
                </a>
            </div>
        </li>
        <li>
            <div class="flex items-center">
                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd">
                    </path>
                </svg>
                <a href="#"
                    class="flex font-medium text-gray-700 hover:text-gray-900">
                    <?= htmlspecialchars($game['genre_name'], ENT_QUOTES, 'UTF-8') ?>
                </a>
            </div>
        </li>
        <li aria-current="page">
            <div class="flex items-center">
                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="font-medium text-gray-500"><?=  htmlspecialchars($game['game_name'], ENT_QUOTES, 'UTF-8') ?></span>
            </div>
        </li>
    </ol>
</nav>
        <div class="flex flex-wrap items-center justify-center p-1.5 rounded-full border border-slate-400 text-gray-500 text-xs">
            <div class="flex items-center">
                <img class="size-7 rounded-full border-3 border-white"
                    src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?q=80&w=50" alt="userImage1">
                <img class="size-7 rounded-full border-3 border-white -translate-x-2"
                    src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?q=80&w=50" alt="userImage2">
                <img class="size-7 rounded-full border-3 border-white -translate-x-4"
                    src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=50&h=50&auto=format&fit=crop"
                    alt="userImage3">
            </div>
            <p class="-translate-x-2">This game has been bought <?= $randomNumber ?> times in the last hour</p>
        </div>
        <h1 class="text-center md:text-left text-5xl leading-[68px] md:text-6xl md:leading-[84px] font-medium max-w-xl text-slate-900">
            <?= htmlspecialchars($game['game_name'], ENT_QUOTES, 'UTF-8') ?>
        </h1>
        <p class="text-center md:text-left text-sm text-slate-700 max-w-lg mt-2">
            <?= htmlspecialchars($game['game_description'], ENT_QUOTES, 'UTF-8') ?>
        <div class="flex items-center gap-4 mt-8 text-sm">
            <button class="bg-red-900 hover:bg-red-700 text-white active:scale-95 rounded-md px-7 h-11">
                Buy Now
            </button>
            <button class="flex items-center gap-2 border border-slate-600 active:scale-95 hover:bg-white/10 transition text-slate-600 rounded-md px-6 h-11">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-video-icon lucide-video"><path d="m16 13 5.223 3.482a.5.5 0 0 0 .777-.416V7.87a.5.5 0 0 0-.752-.432L16 10.5"/><rect x="2" y="6" width="14" height="12" rx="2"/></svg>
                <span>Watch demo</span>
            </button>
        </div>
         <div class="flex flex-wrap items-center justify-center mt-10 p-1.5 w-full rounded-full border border-slate-400 text-gray-500 text-xs">
            <p class="-translate-x-2"><?= htmlspecialchars($game['genre_name'], ENT_QUOTES, 'UTF-8') ?></p>        
        </div>
     </div>
    <img src="assets/images/games/<?= htmlspecialchars($game['game_image'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($game['game_name'], ENT_QUOTES, 'UTF-8') ?>" class="max-w-xs w-full sm:max-w-sm lg:max-w-md transition-all duration-300">
</section>

<!-- featured games -->
 <h1 class="text-2xl md:text-3xl pl-2 my-2 border-l-4  font-sans font-bold border-teal-400 text-center w-content mb-10 dark:text-gray-200">
    <?= htmlspecialchars($game['game_name'], ENT_QUOTES, 'UTF-8') ?> fans also bought:
</h1>
<div class="grid gap-8 md:grid-cols-3 p-5" >
        <?php foreach ($featured_games as $game): ?>

      <!-- Card 1 -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden">
        <img 
          src="assets/images/games/<?= htmlspecialchars($game['game_image'], ENT_QUOTES, 'UTF-8') ?>" 
          alt="<?= htmlspecialchars($game['game_name'], ENT_QUOTES, 'UTF-8') ?>" 
          class="w-full h-48 object-cover"
        >
        <div class="p-6">
          <h3 class="text-xl font-semibold mb-3"><?= htmlspecialchars($game['game_name'], ENT_QUOTES, 'UTF-8') ?> </h3>
          <p class="text-gray-600 mb-4">
            Dive into a futuristic world filled with neon lights, fast action, and mystery.
          </p>
          <button class="px-5 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition">
            More Info
          </button>
        </div>
      </div>
<?php endforeach ?>
</div>
     

<script>
    const openMenu = document.getElementById("open-menu");
    const closeMenu = document.getElementById("close-menu");
    const navLinks = document.getElementById("mobile-navLinks");

    const openMenuHandler = () => {
        navLinks.classList.remove("-translate-x-full")
        navLinks.classList.add("translate-x-0")
    }

    const closeMenuHandler = () => {
        navLinks.classList.remove("translate-x-0")
        navLinks.classList.add("-translate-x-full")
    }

    openMenu.addEventListener("click", openMenuHandler);
    closeMenu.addEventListener("click", closeMenuHandler);
</script>
<?php
include 'partials/footer.php';
?>