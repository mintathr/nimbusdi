<header class="fixed w-full bg-white shadow z-50">
  <div class="container mx-auto flex items-center py-4 px-6">
    <a href="#" class="flex items-center space-x-2 mr-10">
      <img src="assets-nova/images/nimbus_logo.jpg" alt="Nimbus Logo" class="w-16 h-10 rounded"/>
      <span class="text-xl md:text-2xl font-bold text-[#4d83bc]">NIMBUS</span>
    </a>

    <nav class="hidden md:flex space-x-6 font-medium">
  <a href="{{ route('home.tailwind') }}" class="hover:text-[#4d83bc] px-2 py-1 transition">Home</a>
  <a href="#about_us" class="hover:text-[#4d83bc] px-2 py-1 transition">About</a>

  <div class="relative group">
    <button class="flex items-center hover:text-[#4d83bc] px-2 py-1 transition group-hover:text-[#4d83bc]">
      Solutions
      <svg class="w-4 h-4 ml-1 text-gray-500 transition-transform group-hover:rotate-180 group-hover:text-[#4d83bc]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
      </svg>
    </button>

    <div class="absolute left-0 mt-2 w-72 bg-white border rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
      <a href="#" class="block px-4 py-2 hover:bg-gray-100 hover:text-[#4d83bc] transition">Enterprise Resource Planning</a>
      <a href="#" class="block px-4 py-2 hover:bg-gray-100 hover:text-[#4d83bc] transition">Enterprise Asset Management</a>
      <a href="#" class="block px-4 py-2 hover:bg-gray-100 hover:text-[#4d83bc] transition">Manufacturing Execution System</a>
      <a href="#" class="block px-4 py-2 hover:bg-gray-100 hover:text-[#4d83bc] transition">Barcode Solution</a>

      <div class="relative group/sub">
        <a href="#" class="flex items-center justify-between w-full px-4 py-3 hover:bg-gray-100 transition-colors group-hover/sub:text-[#4d83bc]">
          <span class="whitespace-nowrap mr-4">Services</span>
          <svg class="w-4 h-4 flex-shrink-0 text-gray-400 group-hover/sub:text-[#4d83bc] transition-colors" 
               fill="none" 
               stroke="currentColor" 
               viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
          </svg>
        </a>

        <div class="absolute top-0 left-full ml-1 w-64 bg-white border rounded-lg shadow-lg opacity-0 invisible group-hover/sub:opacity-100 group-hover/sub:visible transition-all duration-300">
          <a href="#" class="block px-4 py-2 hover:bg-gray-100 hover:text-[#4d83bc]">ERP Implementation</a>
          <a href="#" class="block px-4 py-2 hover:bg-gray-100 hover:text-[#4d83bc]">Cloud Migration Services</a>
          <a href="#" class="block px-4 py-2 hover:bg-gray-100 hover:text-[#4d83bc]">Local Maintenance Support</a>
        </div>
      </div>
    </div>
  </div>

  <a href="#contact" class="hover:text-[#4d83bc] px-2 py-1 transition">Contact</a>
</nav>
<div class="flex-1 md:hidden"></div> 
  
    <button id="menu-btn" class="md:hidden text-2xl focus:outline-none">☰</button>
  </div>

  <div id="mobile-menu" class="hidden bg-white border-t shadow-inner">
    <nav class="flex flex-col p-4 font-medium">
      <a href="{{ route('home.tailwind') }}" class="py-2 hover:text-blue-600">Home</a>
      <a href="#" class="py-2 hover:text-blue-600">About</a>
      
      <button onclick="toggleElement('exp-sub')" class="flex justify-between items-center py-2 hover:text-blue-600">
        Solutions
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"/></svg>
      </button>
      <div id="exp-sub" class="hidden flex-col pl-4 space-y-2 text-sm border-l-2 border-gray-100 ml-2">
        <a href="#" class="py-1">Enterprise Resource Planning</a>
        <a href="#" class="py-1">Enterprise Asset Management</a>
        <button onclick="toggleElement('ind-sub')" class="flex justify-between items-center py-1">
          Services
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div id="ind-sub" class="hidden flex-col pl-4 space-y-2 text-xs text-gray-600">
          <a href="#">ERP Implementation</a>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100">ERP Implementation</a>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100">Local Maintenance Support</a>

          <a href="#">Cloud Migration</a>
        </div>
      </div>
      
      <a href="#contact" class="py-2 hover:text-blue-600">Contact</a>
    </nav>
  </div>
</header>

<script>
  // Script untuk Mobile Menu Toggle
  const menuBtn = document.getElementById('menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');

  menuBtn.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
  });

  function toggleElement(id) {
    const el = document.getElementById(id);
    el.classList.toggle('hidden');
    el.classList.toggle('flex');
  }
</script>