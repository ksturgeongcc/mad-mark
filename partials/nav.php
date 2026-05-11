<nav class="bg-black shadow-md text-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-16">
      <!-- Logo -->
      <div class="flex-shrink-0 flex items-center">
        <a href="#" class="text-xl text-white font-bold text-gray-800"><img class="h-10 w-10 rounded-full" src="assets/images/mad_mike_logo.png" alt="Logo"></a>
      </div>

      <!-- Desktop Menu -->
      <div class="hidden md:flex space-x-6 items-center">
        <a href="games.php" class="text-red-900 hover:text-white font-medium">Games</a>
        <a href="contact.php" class="text-gray-600 hover:text-white font-medium">Contact</a>
      </div>

      <!-- Mobile Menu Button -->
      <div class="md:hidden flex items-center">
        <button id="menu-btn" class="text-gray-600 focus:outline-none">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>
    </div>
  </div>


  <div id="mobile-menu" class="md:hidden hidden px-4 pb-4 space-y-2">
    <a href="games.php" class="block text-red-900 hover:text-white">Games</a>
    <a href="contact.php" class="block text-red-900 hover:text-white">Contact</a>
  </div>
</nav>

<script>
  const btn = document.getElementById('menu-btn');
  const menu = document.getElementById('mobile-menu');

  btn.addEventListener('click', () => {
    menu.classList.toggle('hidden');
  });
</script>