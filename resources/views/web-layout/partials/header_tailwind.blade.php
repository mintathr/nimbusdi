<header class="fixed w-full bg-white shadow z-50">
  <div class="container mx-auto flex items-center justify-between py-4 px-6">
    <!-- Logo -->
    <a href="#" class="flex items-center space-x-2">
      <img src="assets-nova/images/nimbus_logo.jpg" alt="Nimbus Logo" class="w-16 h-10 rounded"/>
      <span class="text-xl md:text-2xl font-bold text-[#4d83bc]">NIMBUS</span>
    </a>

    <!-- Navbar desktop -->
    <nav class="hidden md:flex space-x-6 font-medium relative">
      <a href="{{ route('home.tailwind') }}" class="hover:text-blue-600 px-2 py-1 rounded transition">Home</a>
      <a href="#" class="hover:text-blue-600 px-2 py-1 rounded transition">About</a>

      <!-- Experience with sub menu -->
      <div class="group relative">
  <!-- Trigger level 1 -->
  <button class="flex items-center hover:text-blue-600 px-2 py-1 rounded transition">
    Solutions
    <svg class="w-4 h-4 ml-1 text-gray-500 group-hover:text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
    </svg>
  </button>

  <!-- Dropdown level 1 -->
  <div class="absolute left-0 mt-2 w-72 bg-white border rounded-lg shadow-lg hidden group-hover:block">
    <a href="#" class="block px-4 py-2 hover:bg-gray-100 transition">Enterprise Resource Planning</a>
    <a href="#" class="block px-4 py-2 hover:bg-gray-100 transition">Enterprise Asset Management</a>
    <a href="#" class="block px-4 py-2 hover:bg-gray-100 transition">Manufacturing Execution System</a>
    <a href="#" class="block px-4 py-2 hover:bg-gray-100 transition">Barcode Solution</a>

    <!-- Submenu level 2 -->
    <div class="relative group">
      <a href="#industrial" class="flex justify-between items-center px-4 py-2 hover:bg-gray-100 transition">
        Services
        <svg class="w-4 h-4 ml-2 text-gray-500 group-hover:text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
        </svg>
      </a>

      <!-- Dropdown level 2 -->
      <div class="absolute top-0 right-full mt-0 w-64 bg-white border rounded-lg shadow-lg hidden group-hover:block">
        <a href="{{ route('page.erp.implemen.tailwind') }}" class="block px-4 py-2 hover:bg-gray-100 transition">ERP Implementation</a>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 transition">Cloud Migration Services</a>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 transition">Local Maintenance Support</a>
      </div>
    </div>
  </div>
</div>

      <!-- Experience with sub menu -->
      


      <a href="#contact" class="hover:text-blue-600 px-2 py-1 rounded transition">Contact</a>
    </nav>

    <!-- Mobile menu button -->
    <button id="menu-btn" class="md:hidden text-2xl focus:outline-none">☰</button>
  </div>

  <!-- Mobile menu -->
  <div id="mobile-menu" class="hidden md:hidden bg-white border-t shadow">
    <nav class="flex flex-col space-y-2 p-4 font-medium">
      <a href="{{ route('home.tailwind') }}" class="hover:text-blue-600 px-2 py-1 rounded transition">Home</a>
      <a href="#" class="hover:text-blue-600 px-2 py-1 rounded transition">About</a>
      <!-- Experience accordion -->
      <button id="exp-btn" class="flex justify-between items-center hover:text-blue-600 px-2 py-1 rounded transition">
        solutions
        <svg class="w-4 h-4 ml-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
        </svg>
      </button>
      <div id="exp-sub" class="hidden flex flex-col pl-4 mt-2 space-y-1 text-sm">
        <a href="#" class="hover:text-blue-600">Enterprise Resource Planning</a>
        <a href="#" class="hover:text-blue-600">Enterprise Asset Management</a>
        <a href="#" class="hover:text-blue-600">Manufacturing Execution System</a>
        <a href="#" class="hover:text-blue-600">Barcode Solution</a>
        
        <!-- Nested Industrial accordion -->
        <button id="ind-btn" class="flex justify-between items-center hover:text-blue-600">
        Services
          <svg class="w-4 h-4 ml-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
          </svg>
        </button>
        <div id="ind-sub" class="hidden flex flex-col pl-4 mt-2 space-y-1 text-sm">
          <a href="#" class="hover:text-blue-600">ERP Implementation</a>
          <a href="#" class="hover:text-blue-600">Cloud Migration Services</a>
          <a href="#" class="hover:text-blue-600">Local Maintenance Support</a>
        </div>
      </div>
      <a href="#contact" class="hover:text-blue-600 px-2 py-1 rounded transition">Contact</a>
    </nav>
  </div>
</header>

<!-- Gunakan atribut data-aos di elemen:
data-aos="fade-up" → animasi naik dari bawah.
data-aos="fade-right" → animasi dari kanan.
data-aos="zoom-in" → zoom masuk.
data-aos-duration="1000" → durasi animasi 1 detik. -->