<nav class="bg-white shadow-md">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-16">
      <!-- Logo -->
      <div class="flex-shrink-0 flex items-center">
        <a href="#" class="text-xl text-blue-600 font-bold text-gray-800">DanDev</a>
      </div>

      <!-- Desktop Menu -->
      <div class="hidden md:flex space-x-6 items-center">
        <a href="#" class="text-gray-600 hover:text-blue-600 font-medium">Home</a>
        <a href="#" class="text-gray-600 hover:text-blue-600 font-medium">Projects</a>
        <a href="#" class="text-gray-600 hover:text-blue-600 font-medium">About</a>
        <a href="#" class="text-gray-600 hover:text-blue-600 font-medium">Contact</a>
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
    <a href="#" class="block text-gray-600 hover:text-blue-600">Home</a>
    <a href="#" class="block text-gray-600 hover:text-blue-600">Projects</a>
    <a href="#" class="block text-gray-600 hover:text-blue-600">About</a>
    <a href="#" class="block text-gray-600 hover:text-blue-600">Contact</a>
  </div>
</nav>

<script>
  const btn = document.getElementById('menu-btn');
  const menu = document.getElementById('mobile-menu');

  btn.addEventListener('click', () => {
    menu.classList.toggle('hidden');
  });
</script>