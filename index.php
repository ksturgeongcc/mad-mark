<?php
include 'partials/header.php';
include 'scripts/featured_games.php';
?>
<section 
  class="relative bg-cover bg-center bg-no-repeat h-[50vh] flex items-center justify-center" 
  style="background-image: url('assets/images/bg.webp');"
>
  <div class="absolute inset-0 bg-black/50"></div>

  <div class="relative z-10 text-center text-white px-6">
    <h1 class="text-4xl md:text-6xl font-bold mb-6">
      Build Something Amazing
    </h1>

    <button 
      class="px-8 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-lg shadow-lg transition"
    >
      Get Started
    </button>
  </div>
</section>

<section class="py-16 bg-gray-100">
  <div class="max-w-6xl mx-auto px-6">

    <!-- Section Heading -->
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold mb-4">Featured Games</h2>
      <p class="text-gray-600 max-w-2xl mx-auto">
        Explore some of the most exciting titles available right now. Each game offers a unique world, thrilling gameplay, and unforgettable experiences.
      </p>
    </div>

    <!-- Cards Grid -->
    <div class="grid gap-8 md:grid-cols-3">
        <?php foreach ($featured_games as $game): ?>

      <!-- Card 1 -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden">
        <img 
          src="assets/images/<?= htmlspecialchars($game['game_image'], ENT_QUOTES, 'UTF-8') ?>" 
          alt="<?= htmlspecialchars($game['game_name'], ENT_QUOTES, 'UTF-8') ?>" 
          class="w-full h-48 object-cover"
        >
        <div class="p-6">
          <h3 class="text-xl font-semibold mb-3"><?= htmlspecialchars($game['game_name'], ENT_QUOTES, 'UTF-8') ?> </h3>
          <p class="text-gray-600 mb-4">
            Dive into a futuristic world filled with neon lights, fast action, and mystery.
          </p>
          <button class="px-5 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">
            More Info
          </button>
        </div>
      </div>
<?php endforeach ?>
     
    </div>
  </div>
</section>
<section class="py-20 bg-white">
  <div class="max-w-6xl mx-auto px-6">

    <!-- Section Heading -->
    <div class="text-center mb-14">
      <h2 class="text-3xl md:text-4xl font-bold mb-4">What Players Are Saying</h2>
      <p class="text-gray-600 max-w-2xl mx-auto">
        Real feedback from gamers who’ve explored our worlds, conquered challenges, and lived the adventure.
      </p>
    </div>

    <!-- Testimonials Grid -->
    <div class="grid gap-10 md:grid-cols-3">

      <!-- Testimonial 1 -->
      <div class="bg-gray-50 p-8 rounded-xl shadow">
        <div class="flex items-center mb-4">
          <img 
            src="https://randomuser.me/api/portraits/men/32.jpg" 
            alt="User 1" 
            class="w-14 h-14 rounded-full mr-4"
          >
          <div>
            <h4 class="font-semibold text-lg">Alex Carter</h4>
            <p class="text-gray-500 text-sm">Competitive Gamer</p>
          </div>
        </div>
        <p class="text-gray-700 leading-relaxed">
          “One of the most immersive gaming experiences I’ve ever had. The visuals and gameplay are top‑tier.”
        </p>
      </div>

      <!-- Testimonial 2 -->
      <div class="bg-gray-50 p-8 rounded-xl shadow">
        <div class="flex items-center mb-4">
          <img 
            src="https://randomuser.me/api/portraits/women/44.jpg" 
            alt="User 2" 
            class="w-14 h-14 rounded-full mr-4"
          >
          <div>
            <h4 class="font-semibold text-lg">Samantha Lee</h4>
            <p class="text-gray-500 text-sm">Adventure Enthusiast</p>
          </div>
        </div>
        <p class="text-gray-700 leading-relaxed">
          “Every game feels like a new world. I love the storytelling and attention to detail.”
        </p>
      </div>

      <!-- Testimonial 3 -->
      <div class="bg-gray-50 p-8 rounded-xl shadow">
        <div class="flex items-center mb-4">
          <img 
            src="https://randomuser.me/api/portraits/men/76.jpg" 
            alt="User 3" 
            class="w-14 h-14 rounded-full mr-4"
          >
          <div>
            <h4 class="font-semibold text-lg">Jordan Miles</h4>
            <p class="text-gray-500 text-sm">Casual Player</p>
          </div>
        </div>
        <p class="text-gray-700 leading-relaxed">
          “Easy to pick up, hard to put down. These games keep me coming back every day.”
        </p>
      </div>

    </div>
  </div>
</section>
<!-- contact -->

<section class="py-20 bg-gray-100">
  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12">

    <!-- Map -->
    <div class="w-full h-96 rounded-xl overflow-hidden shadow-lg">
      <iframe
        width="100%"
        height="100%"
        style="border:0;"
        loading="lazy"
        allowfullscreen
        referrerpolicy="no-referrer-when-downgrade"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2243.676350207429!2d-4.272595!3d55.821657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x488846f2f0b98f7f%3A0x4f7f2b6c9adbb6f0!2sGlasgow%20Clyde%20College%20-%20Langside%20Campus!5e0!3m2!1sen!2suk!4v1700000000000">
      </iframe>
    </div>

    <!-- Contact Form -->
    <div>
      <h2 class="text-3xl font-bold mb-4">Get in Touch</h2>
      <p class="text-gray-600 mb-8">
        Have questions or want to reach out? Send us a message and we’ll get back to you soon.
      </p>

      <form class="space-y-5">
        <div>
          <label class="block text-gray-700 font-medium mb-1">Name</label>
          <input type="text" class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-indigo-500" placeholder="Your Name">
        </div>

        <div>
          <label class="block text-gray-700 font-medium mb-1">Email</label>
          <input type="email" class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-indigo-500" placeholder="you@example.com">
        </div>

        <div>
          <label class="block text-gray-700 font-medium mb-1">Message</label>
          <textarea class="w-full px-4 py-3 border rounded-lg h-32 focus:ring-2 focus:ring-indigo-500" placeholder="Write your message..."></textarea>
        </div>

        <button class="px-6 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition font-semibold">
          Send Message
        </button>
      </form>

      <!-- Social Icons -->
      <div class="mt-10 flex space-x-6">
        <!-- Facebook -->
        <a href="#" class="text-gray-600 hover:text-indigo-600 transition">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
            <path d="M22 12a10 10 0 1 0-11.5 9.9v-7h-2v-3h2v-2.3c0-2 1.2-3.1 3-3.1.9 0 1.8.1 1.8.1v2h-1c-1 0-1.3.6-1.3 1.2V12h2.3l-.4 3h-1.9v7A10 10 0 0 0 22 12z"/>
          </svg>
        </a>

        <!-- Twitter -->
        <a href="#" class="text-gray-600 hover:text-indigo-600 transition">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
            <path d="M22 5.8c-.8.4-1.7.6-2.6.8a4.5 4.5 0 0 0-7.7 4v.6A12.8 12.8 0 0 1 3 5.2s-4 9 5 13c-2.2 1.5-4.7 2-7 1.7 9 5.5 20 0 20-12v-.5c.7-.5 1.4-1.2 2-2z"/>
          </svg>
        </a>

        <!-- Instagram -->
        <a href="#" class="text-gray-600 hover:text-indigo-600 transition">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
            <path d="M7 2C4.2 2 2 4.2 2 7v10c0 2.8 2.2 5 5 5h10c2.8 0 5-2.2 5-5V7c0-2.8-2.2-5-5-5H7zm10 2c1.7 0 3 1.3 3 3v10c0 1.7-1.3 3-3 3H7c-1.7 0-3-1.3-3-3V7c0-1.7 1.3-3 3-3h10zm-5 3.5A4.5 4.5 0 1 0 16.5 12 4.5 4.5 0 0 0 12 7.5zm0 7.3A2.8 2.8 0 1 1 14.8 12 2.8 2.8 0 0 1 12 14.8zm4.8-8.9a1.1 1.1 0 1 1-1.1-1.1 1.1 1.1 0 0 1 1.1 1.1z"/>
          </svg>
        </a>
      </div>

    </div>
  </div>
</section>
<section class="py-20 bg-white">
  <div class="max-w-6xl mx-auto px-6">

    <!-- Section Heading -->
    <div class="text-center mb-14">
      <h2 class="text-3xl md:text-4xl font-bold mb-4">What Players Are Saying</h2>
      <p class="text-gray-600 max-w-2xl mx-auto">
        Real feedback from gamers who’ve explored our worlds, conquered challenges, and lived the adventure.
      </p>
    </div>

    <!-- Testimonials Grid -->
    <div class="grid gap-10 md:grid-cols-3">

      <!-- Testimonial 1 -->
      <div class="bg-gray-50 p-8 rounded-xl shadow">
        <div class="flex items-center mb-4">
          <img 
            src="https://randomuser.me/api/portraits/men/32.jpg" 
            alt="User 1" 
            class="w-14 h-14 rounded-full mr-4"
          >
          <div>
            <h4 class="font-semibold text-lg">Alex Carter</h4>
            <p class="text-gray-500 text-sm">Competitive Gamer</p>
          </div>
        </div>
        <p class="text-gray-700 leading-relaxed">
          “One of the most immersive gaming experiences I’ve ever had. The visuals and gameplay are top‑tier.”
        </p>
      </div>

      <!-- Testimonial 2 -->
      <div class="bg-gray-50 p-8 rounded-xl shadow">
        <div class="flex items-center mb-4">
          <img 
            src="https://randomuser.me/api/portraits/women/44.jpg" 
            alt="User 2" 
            class="w-14 h-14 rounded-full mr-4"
          >
          <div>
            <h4 class="font-semibold text-lg">Samantha Lee</h4>
            <p class="text-gray-500 text-sm">Adventure Enthusiast</p>
          </div>
        </div>
        <p class="text-gray-700 leading-relaxed">
          “Every game feels like a new world. I love the storytelling and attention to detail.”
        </p>
      </div>

      <!-- Testimonial 3 -->
      <div class="bg-gray-50 p-8 rounded-xl shadow">
        <div class="flex items-center mb-4">
          <img 
            src="https://randomuser.me/api/portraits/men/76.jpg" 
            alt="User 3" 
            class="w-14 h-14 rounded-full mr-4"
          >
          <div>
            <h4 class="font-semibold text-lg">Jordan Miles</h4>
            <p class="text-gray-500 text-sm">Casual Player</p>
          </div>
        </div>
        <p class="text-gray-700 leading-relaxed">
          “Easy to pick up, hard to put down. These games keep me coming back every day.”
        </p>
      </div>

    </div>
  </div>
</section>

<?php
include 'partials/footer.php';
?>