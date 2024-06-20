<link rel="stylesheet" href="{{ asset('styles/output.css') }}">
<link rel="stylesheet" href="{{ asset('styles/flowbite.min.css') }}">
<script src="{{ asset('js/flowbite.min.js') }}"></script>

<div class="m-auto px-10">
    <button type="button" class="flex" aria-expanded="false" data-dropdown-toggle="dropdown-user">
      <span class="sr-only">Open user menu</span>
      <img src="{{ asset('images/profile/Buyer/'. Auth::user()->photo ) }}" alt="User Photo" class="h-10 w-12 rounded-full">

    </button>
  </div>

<div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
  <div class="px-4 py-3" role="none">
    <p class="text-sm text-gray-900 dark:text-white" role="none">
        {{Auth::user()->name}}
    </p>
    <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
        {{Auth::user()->email}}
    </p>
  </div>

    <ul class="py-1" role="none">
      <li>
        <a href="../landingpage" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Home</a>
      </li>
      <li>
        <a href="../katalog" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Katalog</a>
      </li>
      <!-- <li>
        <a href="../keranjang" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Keranjang</a>
      </li> -->
      <!-- <li>
        <a href="../detailpesanan" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Detail pesanan</a>
      </li>
      <li> -->
        <a href="../riwayatpesanan" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Riwayat pesanan</a>
      </li>
      <li>
        <a href="../profilpembeli" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Profil</a>
      </li>
      <li>
        <a href="/login/logout" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Keluar</a>
      </li>
    </ul>
</div>
