<div id="produk-content" class="bg-white m-4 content produk-content h-full p-4 mt-14 hidden">
    <h1 class="text-xl font-bold mb-5">Katalog produk</h1> 
        <div>
        <!-- daftarin barang -->
        <!-- Modal toggle -->
        <button data-modal-target="crudadd-modal" data-modal-toggle="crudadd-modal" class="bg-lawngreen hover:bg-lime-600 ml-2 text-black focus:ring-4 focus:outline-none focus:ring-lime-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2">
            <svg class="text-gray-700 font-extrabold aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/>
            </svg>
            <span class="ml-3">Tambah Produk</span>
        </button>
    
        <!-- CRUD ADD PRODUCT -->
        @include('component.crudaddmodalproduk')

    
        <!-- dropdown kategori -->
        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="mb-2 text-black bg-lawngreen hover:bg-lime-600 focus:ring-4 focus:outline-none focus:ring-lawngreen font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="">Kategori<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
        </svg>
        </button>

        <!-- Dropdown menu -->
        <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                <li>
                    <a href="#pakaianatas" class="kategori-link block block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Pakaian Atas</a>
                </li>
                <li>
                    <a href="#pakaianbawah" class="kategori-link block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Pakaian Bawah</a>
                </li>
                <li>
                    <a href="#sepatusandal" class="kategori-link block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sepatu/Sandal</a>
                </li>
                </ul>
            </div>
        </div>

        <!-- CRUD EDIT PRODUCT -->
        @include('component.crudeditmodalproduk')
        

        <!-- KATEGORI PAKAIAN ATAS -->
        <div id="pakaianatas" class="kategori ml-2 relative overflow-x-auto shadow-md sm:rounded-lg mb-5 active">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-lawngreen dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            ID produk
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama produk
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Brand
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Warna
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jumlah
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Harga
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Hapus</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            xxxxxx
                        </th>
                        <td class="px-6 py-4">
                            Pakaian Atas
                        </td>
                        <td class="px-6 py-4">
                            Adidas
                        </td>
                        <td class="px-6 py-4">
                            Silver
                        </td>
                        <td class="px-6 py-4">
                            Laptop
                        </td>
                        <td class="px-6 py-4">
                            $2999
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button data-modal-target="edit-modal" data-modal-toggle="edit-modal">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </button>                        </td>
                        <td class="px-2 py-4 text-left">
                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- KATEGORI PAKAIAN BAWAH -->
        <div id="pakaianbawah" class="kategori ml-2 relative overflow-x-auto shadow-md sm:rounded-lg mb-5 hidden">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-lawngreen dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            ID produk
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama produk
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Brand
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Warna
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jumlah
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Harga
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Hapus</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            xxxxxx
                        </th>
                        <td class="px-6 py-4">
                            Pakaian Bawah
                        </td>
                        <td class="px-6 py-4">
                            Adidas
                        </td>
                        <td class="px-6 py-4">
                            Silver
                        </td>
                        <td class="px-6 py-4">
                            Laptop
                        </td>
                        <td class="px-6 py-4">
                            $2999
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button data-modal-target="edit-modal" data-modal-toggle="edit-modal">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </button>
                        </td>
                        <td class="px-2 py-4 text-left">
                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</a>
                        </td>
                    </tr>
                    <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        xxxxxx
                        </th>
                        <td class="px-6 py-4">
                        Pakaian Bawah
                        </td>
                        <td class="px-6 py-4">
                        -
                        </td>
                        <td class="px-6 py-4">
                            Black
                        </td>
                        <td class="px-6 py-4">
                            Accessories
                        </td>
                        <td class="px-6 py-4">
                            $99
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button data-modal-target="edit-modal" data-modal-toggle="edit-modal">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </button>
                        </td>
                        <td class="px-2 py-4 text-left">
                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- KATEGORI SEPATU SANDAL -->
        <div id="sepatusandal" class="kategori ml-2 relative overflow-x-auto shadow-md sm:rounded-lg mb-5 hidden">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-lawngreen dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            ID produk
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama produk
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Brand
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Warna
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jumlah
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Harga
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Hapus</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            xxxxxx
                        </th>
                        <td class="px-6 py-4">
                            Sepatu Sandal
                        </td>
                        <td class="px-6 py-4">
                            Adidas
                        </td>
                        <td class="px-6 py-4">
                            Silver
                        </td>
                        <td class="px-6 py-4">
                            Laptop
                        </td>
                        <td class="px-6 py-4">
                            $2999
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button data-modal-target="edit-modal" data-modal-toggle="edit-modal">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </button>
                        </td>
                        <td class="px-2 py-4 text-left">
                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
   </div>