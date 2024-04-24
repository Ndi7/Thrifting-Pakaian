<link rel="stylesheet" href="{{ asset('styles/output.css') }}">
<link rel="stylesheet" href="{{ asset('styles/crsl.css') }}">
<link rel="stylesheet" href="{{ asset('styles/flowbite.min.css') }}">
<script src="{{ asset('js/flowbite.min.js') }}"></script>
@extends('layout.navbar')

@section ('title', 'keranjang')
@section('content')
<div class="container mx-auto px-5 my-10 justify-center">
            <div class="container mx-auto px-20 my-10 justify-center">
                <div class="py-3">
                    <h2 class="font-bold mb-5">Keranjang Belanja</h2>
                
                <div class="flex">
                <div class="w-3/5 scroll-container overflow-auto max-h-96">
                    <div>
                        <table class="w-full justify-center">
                        <thead class="bg-white h-14 sticky top-0 z-0">
                            <tr>
                                <th><input class="rounded-full" type="checkbox" id="checkAll"></th>
                                <th colspan="2">Produk</th>
                                <th>Harga Satuan</th>
                                <th colspan="2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="productsTable">
                            <tr class="bg-slate-100/70 h-28 cursor-pointer">
                                <td class="text-center"><input class="productCheckbox rounded-full" type="checkbox"></td>
                                <td class="w-28"><img class="size-fit" src="{{ asset('images/kaos2.jpg') }}" alt=""></td>
                                <td class="ml-5">Nama Pakaian</td>
                                <td class="text-center">Rp. xxx.xxx</td>
                                <td class="w-16"><svg class="like m-auto fill-slate-300" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" stroke="#dedede"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"><path d="M20.808,11.079C19.829,16.132,12,20.5,12,20.5s-7.829-4.368-8.808-9.421C2.227,6.1,5.066,3.5,8,3.5a4.444,4.444,0,0,1,4,2,4.444,4.444,0,0,1,4-2C18.934,3.5,21.773,6.1,20.808,11.079Z"/></g></svg></td>
                                <td class="w-16"><svg class="m-auto" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none" stroke="#f40b0b"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <path d="M10 11V17" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M14 11V17" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M4 7H20" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M6 7H12H18V18C18 19.6569 16.6569 21 15 21H9C7.34315 21 6 19.6569 6 18V7Z" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> </g></svg></td>
                            </tr>
                            <tr class="bg-white/70 h-28 cursor-pointer">
                                <td class="text-center"><input class="productCheckbox rounded-full" type="checkbox"></td>
                                <td class="600 w-28"><img class="size-fit" src="{{ asset('images/kaos4.jpg') }}" alt=""></td>
                                <td class="ml-5">Nama Pakaian</td>
                                <td class="text-center">Rp. xxx.xxx</td>
                                <td class="w-16"><svg class="like m-auto fill-slate-300" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" stroke="#dedede"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"><path d="M20.808,11.079C19.829,16.132,12,20.5,12,20.5s-7.829-4.368-8.808-9.421C2.227,6.1,5.066,3.5,8,3.5a4.444,4.444,0,0,1,4,2,4.444,4.444,0,0,1,4-2C18.934,3.5,21.773,6.1,20.808,11.079Z"/></g></svg></td>
                                <td class="w-16"><svg class="m-auto" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none" stroke="#f40b0b"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <path d="M10 11V17" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M14 11V17" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M4 7H20" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M6 7H12H18V18C18 19.6569 16.6569 21 15 21H9C7.34315 21 6 19.6569 6 18V7Z" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> </g></svg></td>
                            </tr>
                            <tr class="bg-slate-100/70 h-28 cursor-pointer">
                                <td class="text-center"><input class="productCheckbox rounded-full" type="checkbox"></td>
                                <td class="w-28"><img class="size-fit" src="{{ asset('images/kaos1.jpg') }}" alt=""></td>
                                <td class="ml-5">Nama Pakaian</td>
                                <td class="text-center">Rp. xxx.xxx</td>
                                <td class="w-16"><svg class="like m-auto fill-slate-300" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" stroke="#dedede"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"><path d="M20.808,11.079C19.829,16.132,12,20.5,12,20.5s-7.829-4.368-8.808-9.421C2.227,6.1,5.066,3.5,8,3.5a4.444,4.444,0,0,1,4,2,4.444,4.444,0,0,1,4-2C18.934,3.5,21.773,6.1,20.808,11.079Z"/></g></svg></td>
                                <td class="w-16"><svg class="m-auto" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none" stroke="#f40b0b"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <path d="M10 11V17" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M14 11V17" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M4 7H20" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M6 7H12H18V18C18 19.6569 16.6569 21 15 21H9C7.34315 21 6 19.6569 6 18V7Z" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> </g></svg></td>
                            </tr>
                            <tr class="bg-white/70 h-28 cursor-pointer">
                                <td class="text-center"><input class="productCheckbox rounded-full" type="checkbox"></td>
                                <td class="600 w-28"><img class="size-fit" src="{{ asset('images/celana1.jpg') }}" alt=""></td>
                                <td class="ml-5">Nama Pakaian</td>
                                <td class="text-center">Rp. xxx.xxx</td>
                                <td class="w-16"><svg class="like m-auto fill-slate-300" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" stroke="#dedede"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"><path d="M20.808,11.079C19.829,16.132,12,20.5,12,20.5s-7.829-4.368-8.808-9.421C2.227,6.1,5.066,3.5,8,3.5a4.444,4.444,0,0,1,4,2,4.444,4.444,0,0,1,4-2C18.934,3.5,21.773,6.1,20.808,11.079Z"/></g></svg></td>
                                <td class="w-16"><svg class="m-auto" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none" stroke="#f40b0b"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <path d="M10 11V17" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M14 11V17" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M4 7H20" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M6 7H12H18V18C18 19.6569 16.6569 21 15 21H9C7.34315 21 6 19.6569 6 18V7Z" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> </g></svg></td>
                            </tr>
                            <tr class="bg-slate-100/70 h-28 cursor-pointer">
                                <td class="text-center"><input class="productCheckbox rounded-full" type="checkbox"></td>
                                <td class="w-28"><img class="size-fit" src="{{ asset('images/celana4.jpg') }}" alt=""></td>
                                <td class="ml-5">Nama Pakaian</td>
                                <td class="text-center">Rp. xxx.xxx</td>
                                <td class="w-16"><svg class="like m-auto fill-slate-300" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" stroke="#dedede"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"><path d="M20.808,11.079C19.829,16.132,12,20.5,12,20.5s-7.829-4.368-8.808-9.421C2.227,6.1,5.066,3.5,8,3.5a4.444,4.444,0,0,1,4,2,4.444,4.444,0,0,1,4-2C18.934,3.5,21.773,6.1,20.808,11.079Z"/></g></svg></td>
                                <td class="w-16"><svg class="m-auto" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none" stroke="#f40b0b"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <path d="M10 11V17" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M14 11V17" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M4 7H20" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M6 7H12H18V18C18 19.6569 16.6569 21 15 21H9C7.34315 21 6 19.6569 6 18V7Z" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> </g></svg></td>
                            </tr>
                            <tr class="bg-white/70 h-28 cursor-pointer">
                                <td class="text-center"><input class="productCheckbox rounded-full" type="checkbox"></td>
                                <td class="600 w-28"><img class="size-fit" src="{{ asset('images/celana1.jpg') }}" alt=""></td>
                                <td class="ml-5">Nama Pakaian</td>
                                <td class="text-center">Rp. xxx.xxx</td>
                                <td class="w-16"><svg class="like m-auto fill-slate-300" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" stroke="#dedede"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"><path d="M20.808,11.079C19.829,16.132,12,20.5,12,20.5s-7.829-4.368-8.808-9.421C2.227,6.1,5.066,3.5,8,3.5a4.444,4.444,0,0,1,4,2,4.444,4.444,0,0,1,4-2C18.934,3.5,21.773,6.1,20.808,11.079Z"/></g></svg></td>
                                <td class="w-16"><svg class="m-auto" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none" stroke="#f40b0b"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <path d="M10 11V17" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M14 11V17" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M4 7H20" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M6 7H12H18V18C18 19.6569 16.6569 21 15 21H9C7.34315 21 6 19.6569 6 18V7Z" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> </g></svg></td>
                            </tr>
                        </tbody>
                        </table>
                        <script src="{{ asset('js/checkbox.js') }}"></script>
                        <script src="{{ asset('js/likedeletebutton.js') }}"></script>
                    </div>
                </div>
                   
                   <div class="w-2/5 bg-slate-100/80 ml-2 max-h-96">
                        <div class="m-4">
                        <h2>Alamat</h2>
                        <input class="w-full font-normal mb-7 h-6 rounded-md" type="text">
                        <div class="flex gap-2">
                        <div>
                            <h2>Item</h2>
                            <input class="mb-7 w-full h-6 rounded-md" type="text">
                            <h2>Potongan harga</h2>
                            <input class="mb-7 w-full h-6 rounded-md bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" disabled>
                            <h2>Total Pesanan</h2>
                            <input class="mb-7 w-full h-6 rounded-md bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" disabled>
                        </div>
                        <div>
                            <h2>Biaya Pengiriman</h2>
                            <input class="mb-7 w-full h-6 rounded-md bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" disabled>
                            <h2>Code Voucher</h2>
                            <input class="mb-7 w-full h-6 rounded-md" type="text">
                            <h2>Opsi Pengiriman</h2>
                            <form class="font-normal" name="formcek">
                                <select class="w-full h-10 text-black rounded-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500" name="deliveryOption">
                                    <option value="Via Transfer">Via Transfer</option>
                                    <option value="Cash On Delivery (COD)">Cash On Delivery (COD)</option>
                                </select>
                            </form>
                        </div>
                        
                        </div>
                        <div class="bg-lawngreen mt-5 m-auto text-center w-full font-semibold rounded-md cursor-pointer">
                            <button class="">Checkout</button>
                        </div>
                        </div>
                   </div>
                </div>
            </div>      
            <br><br>          
            @include('component.pakaianatas')
            @include('component.pakaianbawah')
            @include('component.alaskaki')
        </div>
        </div>
                
    </div>
    </div>
</div>
@endsection