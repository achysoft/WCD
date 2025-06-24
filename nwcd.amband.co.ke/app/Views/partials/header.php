<div x-data="{ loading: true }" x-init="window.addEventListener('load', () => loading = false)" x-show="loading" x-transition class="fixed inset-0 bg-white flex items-center justify-center z-[9999]">
  <svg class="w-10 h-10 text-purple-600 animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"></path>
  </svg>
</div>

<nav x-data="{ open: false, searchOpen: false, activeDropdown: '' }" class="bg-white shadow fixed w-full top-0 left-0 z-50">
  <div class="max-w-7xl mx-auto px-4">
    <div class="flex justify-between items-center py-4">
      <!-- Logo -->
      <a href="<?= base_url(); ?>">
        <img src="<?= base_url('assets/images/logo1.png') ?>" class="h-10 w-auto" alt="Logo" />
      </a>

      <!-- Desktop Menu -->
      <div class="hidden md:flex space-x-6 items-center">
        <a href="<?= base_url(); ?>" class="hover:text-purple-600">Home</a>

        <!-- Landscape Dropdown -->
        <div x-data="{ open: false }" class="relative">
          <button @click="open = !open" class="hover:text-purple-600 flex items-center gap-1">
            Landscape
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <ul x-show="open" @click.away="open = false" class="absolute bg-white shadow rounded mt-2 w-56 z-50">
            <li><a href="<?= base_url('parks'); ?>" class="block px-4 py-2 hover:bg-gray-100">Parks</a></li>
            <li><a href="<?= base_url('landscape/Reserves'); ?>" class="block px-4 py-2 hover:bg-gray-100">Reserves</a></li>
            <li><a href="<?= base_url('landscape/Sanctuaries'); ?>" class="block px-4 py-2 hover:bg-gray-100">Sanctuaries</a></li>
            <li><a href="<?= base_url('landscape/Conservancies'); ?>" class="block px-4 py-2 hover:bg-gray-100">Conservancies</a></li>
          </ul>
        </div>

        <!-- Conservation Placeholder -->
        <div x-data="{ open: false }" class="relative">
          <button @click="open = !open" class="hover:text-purple-600 flex items-center gap-1">
            Conservation
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <ul x-show="open" @click.away="open = false" class="absolute bg-white shadow rounded mt-2 w-56 z-50">
            <li><a href="<?= base_url('landscape/Parks'); ?>" class="block px-4 py-2 hover:bg-gray-100">Youth/young people in conservation</a></li>
            <li><a href="<?= base_url('landscape/Reserves'); ?>" class="block px-4 py-2 hover:bg-gray-100"> Conservation Education & Awareness</a></li>
            <li><a href="<?= base_url('landscape/Sanctuaries'); ?>" class="block px-4 py-2 hover:bg-gray-100">Threats and challenges to Wildlife conservation</a></li>
            <li><a href="<?= base_url('landscape/Conservancies'); ?>" class="block px-4 py-2 hover:bg-gray-100">Wildlife economy</a></li>
             <li><a href="<?= base_url('landscape/Conservancies'); ?>" class="block px-4 py-2 hover:bg-gray-100">Programs and projects </a></li>
             <li><a href="<?= base_url('landscape/Conservancies'); ?>" class="block px-4 py-2 hover:bg-gray-100">Donors, development partner & other stakeholders   </a></li>
          </ul>
        </div>

        <!-- Biodiversity Dropdown -->
        <div x-data="{ open: false }" class="relative">
          <button @click="open = !open" class="hover:text-purple-600 flex items-center gap-1">
            Biodiversity
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <ul x-show="open" @click.away="open = false" class="absolute bg-white shadow rounded mt-2 w-56 z-50">
            <li><a href="<?= base_url('biodiversity/Flora'); ?>" class="block px-4 py-2 hover:bg-gray-100">Flora Ecosystems</a></li>
            <li><a href="<?= base_url('biodiversity/Fauna'); ?>" class="block px-4 py-2 hover:bg-gray-100">Fauna Ecosystems</a></li>
            <li><a href="<?= base_url('biodiversity/Publications'); ?>" class="block px-4 py-2 hover:bg-gray-100">Publications</a></li>
          </ul>
        </div>

        <a href="<?= base_url('frontend/People_wildlife'); ?>" class="hover:text-purple-600">People & Wildlife</a>

        <!-- Policy & Legal Dropdown -->
        <div x-data="{ open: false }" class="relative">
          <button @click="open = !open" class="hover:text-purple-600 flex items-center gap-1">
            Policy & Legal
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <ul x-show="open" @click.away="open = false" class="absolute bg-white shadow rounded mt-2 w-56 z-50">
            <li><a href="<?= base_url('policyPublications'); ?>" class="block px-4 py-2 hover:bg-gray-100">Publications</a></li>
          </ul>
        </div>
      </div>

      <!-- Desktop Search -->
      <div class="hidden md:flex items-center space-x-2 relative">
        <button @click="searchOpen = !searchOpen" class="text-gray-700 hover:text-purple-600">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M11 18a7 7 0 1 1 0-14 7 7 0 0 1 0 14z" />
          </svg>
        </button>
        <div x-show="searchOpen" x-transition class="absolute top-10 right-0 w-64 z-50">
          <input type="text" placeholder="Search..." class="w-full border border-gray-300 rounded px-3 py-1 shadow-md focus:ring-2 focus:ring-purple-400" />
        </div>
      </div>

      <!-- Mobile Hamburger -->
      <div class="md:hidden flex items-center">
        <button @click="open = true" class="text-gray-700 z-50">
          <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Sidebar Menu -->
  <div x-show="open" class="fixed inset-0 bg-black/50 z-40" @click="open = false"></div>
  <div x-show="open" x-transition class="fixed top-0 left-0 w-64 h-full bg-white shadow-lg z-50 p-4 overflow-y-auto">
    <button @click="open = false" class="mb-4 text-gray-700">
      <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>
    <template x-for="section in [
      {
        title: 'Landscape',
        links: [
          { name: 'Parks', href: '<?= base_url('parks'); ?>' },
          { name: 'Reserves', href: '<?= base_url('reserves'); ?>' },
          { name: 'Sanctuaries', href: '<?= base_url('landscape/Sanctuaries'); ?>' },
          { name: 'Conservancies', href: '<?= base_url('landscape/Conservancies'); ?>' }
        ]
      },
      {
        title: 'Biodiversity',
        links: [
          { name: 'Flora Ecosystems', href: '<?= base_url('biodiversity/Flora'); ?>' },
          { name: 'Fauna Ecosystems', href: '<?= base_url('biodiversity/Fauna'); ?>' },
          { name: 'Publications', href: '<?= base_url('biodiversity/Publications'); ?>' }
        ]
      },
      {
        title: 'People & Wildlife',
        links: [
          { name: 'People & Wildlife', href: '<?= base_url('frontend/People_wildlife'); ?>' }
        ]
      },
      {
        title: 'Policy & Legal',
        links: [
          { name: 'Publications', href: '<?= base_url('policyPublications'); ?>' }
        ]
      }
    ]" :key="section.title">
      <div x-data="{ dropdown: false }" class="mb-2">
        <button @click="dropdown = !dropdown" class="flex justify-between w-full py-2 font-semibold hover:text-purple-600">
          <span x-text="section.title"></span>
          <svg :class="dropdown ? 'rotate-180' : ''" class="w-4 h-4 transform transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <div x-show="dropdown" x-transition>
          <template x-for="link in section.links" :key="link.name">
            <a :href="link.href" class="block pl-4 py-1 text-sm hover:text-purple-600" x-text="link.name"></a>
          </template>
        </div>
      </div>
    </template>
  </div>
</nav>
