<link rel="stylesheet" href="{{ asset('styles/output.css') }}">
<link rel="stylesheet" href="{{ asset('styles/crsl.css') }}">
@extends('layout.navbar')

@section ('title', 'keranjang')
@section('content')
<div class="container mx-auto px-5 my-10 justify-center">
            <div class="container mx-auto px-20 my-10 justify-center">
                <div class="py-3">
                    <h2 class="font-bold text-2xl my-0 text-center">2ND CHANCE</h2><br>
                    <h2 class="font-bold mb-5">Keranjang Belanja</h2>
                
                <div class="flex">
                <div class="w-3/5 scroll-container overflow-auto max-h-96">
                    <div>
                    <table class="w-full justify-center">
                        <thead class="bg-white h-14 sticky top-0 z-0">
                            <tr>
                                <th><input type="checkbox" id="checkAll"></th>
                                <th colspan="2">Produk</th>
                                <th>Harga Satuan</th>
                                <th colspan="2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="productsTable">
                            <tr class="bg-slate-100/70 h-28 cursor-pointer">
                                <td class="text-center"><input class="productCheckbox" type="checkbox"></td>
                                <td class="w-28"><img class="size-fit" src="{{ asset('images/kaos2.jpg') }}" alt=""></td>
                                <td class="ml-5">Nama Pakaian</td>
                                <td class="text-center">Rp. xxx.xxx</td>
                                <td class="w-16"><svg class="m-auto" xmlns="http://www.w3.org/2000/svg" fill="#dedede" width="20px" height="20px" viewBox="0 0 24 24" stroke="#dedede"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"><path d="M20.808,11.079C19.829,16.132,12,20.5,12,20.5s-7.829-4.368-8.808-9.421C2.227,6.1,5.066,3.5,8,3.5a4.444,4.444,0,0,1,4,2,4.444,4.444,0,0,1,4-2C18.934,3.5,21.773,6.1,20.808,11.079Z"/></g></svg></td>
                                <td class="w-16"><svg class="m-auto" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none" stroke="#f40b0b"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <path d="M10 11V17" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M14 11V17" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M4 7H20" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M6 7H12H18V18C18 19.6569 16.6569 21 15 21H9C7.34315 21 6 19.6569 6 18V7Z" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> </g></svg></td>
                            </tr>
                            <tr class="bg-white/70 h-28 cursor-pointer">
                                <td class="text-center"><input class="productCheckbox" type="checkbox"></td>
                                <td class="600 w-28"><img class="size-fit" src="{{ asset('images/kaos4.jpg') }}" alt=""></td>
                                <td class="ml-5">Nama Pakaian</td>
                                <td class="text-center">Rp. xxx.xxx</td>
                                <td class="w-16"><svg class="m-auto" xmlns="http://www.w3.org/2000/svg" fill="#dedede" width="20px" height="20px" viewBox="0 0 24 24" stroke="#dedede"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"><path d="M20.808,11.079C19.829,16.132,12,20.5,12,20.5s-7.829-4.368-8.808-9.421C2.227,6.1,5.066,3.5,8,3.5a4.444,4.444,0,0,1,4,2,4.444,4.444,0,0,1,4-2C18.934,3.5,21.773,6.1,20.808,11.079Z"/></g></svg></td>
                                <td class="w-16"><svg class="m-auto" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none" stroke="#f40b0b"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <path d="M10 11V17" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M14 11V17" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M4 7H20" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M6 7H12H18V18C18 19.6569 16.6569 21 15 21H9C7.34315 21 6 19.6569 6 18V7Z" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> </g></svg></td>
                            </tr>
                            <tr class="bg-slate-100/70 h-28 cursor-pointer">
                                <td class="text-center"><input class="productCheckbox rounded-full" type="checkbox"></td>
                                <td class="w-28"><img class="size-fit" src="{{ asset('images/kaos1.jpg') }}" alt=""></td>
                                <td class="ml-5">Nama Pakaian</td>
                                <td class="text-center">Rp. xxx.xxx</td>
                                <td class="w-16"><svg class="m-auto" xmlns="http://www.w3.org/2000/svg" fill="#dedede" width="20px" height="20px" viewBox="0 0 24 24" stroke="#dedede"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"><path d="M20.808,11.079C19.829,16.132,12,20.5,12,20.5s-7.829-4.368-8.808-9.421C2.227,6.1,5.066,3.5,8,3.5a4.444,4.444,0,0,1,4,2,4.444,4.444,0,0,1,4-2C18.934,3.5,21.773,6.1,20.808,11.079Z"/></g></svg></td>
                                <td class="w-16"><svg class="m-auto" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none" stroke="#f40b0b"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <path d="M10 11V17" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M14 11V17" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M4 7H20" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M6 7H12H18V18C18 19.6569 16.6569 21 15 21H9C7.34315 21 6 19.6569 6 18V7Z" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> </g></svg></td>
                            </tr>
                            <tr class="bg-white/70 h-28 cursor-pointer">
                                <td class="text-center"><input class="productCheckbox" type="checkbox"></td>
                                <td class="600 w-28"><img class="size-fit" src="{{ asset('images/celana1.jpg') }}" alt=""></td>
                                <td class="ml-5">Nama Pakaian</td>
                                <td class="text-center">Rp. xxx.xxx</td>
                                <td class="w-16"><svg class="m-auto" xmlns="http://www.w3.org/2000/svg" fill="#dedede" width="20px" height="20px" viewBox="0 0 24 24" stroke="#dedede"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"><path d="M20.808,11.079C19.829,16.132,12,20.5,12,20.5s-7.829-4.368-8.808-9.421C2.227,6.1,5.066,3.5,8,3.5a4.444,4.444,0,0,1,4,2,4.444,4.444,0,0,1,4-2C18.934,3.5,21.773,6.1,20.808,11.079Z"/></g></svg></td>
                                <td class="w-16"><svg class="m-auto" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none" stroke="#f40b0b"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <path d="M10 11V17" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M14 11V17" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M4 7H20" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M6 7H12H18V18C18 19.6569 16.6569 21 15 21H9C7.34315 21 6 19.6569 6 18V7Z" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> </g></svg></td>
                            </tr>
                            <tr class="bg-slate-100/70 h-28 cursor-pointer">
                                <td class="text-center"><input class="productCheckbox" type="checkbox"></td>
                                <td class="w-28"><img class="size-fit" src="{{ asset('images/celana4.jpg') }}" alt=""></td>
                                <td class="ml-5">Nama Pakaian</td>
                                <td class="text-center">Rp. xxx.xxx</td>
                                <td class="w-16"><svg class="m-auto" xmlns="http://www.w3.org/2000/svg" fill="#dedede" width="20px" height="20px" viewBox="0 0 24 24" stroke="#dedede"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"><path d="M20.808,11.079C19.829,16.132,12,20.5,12,20.5s-7.829-4.368-8.808-9.421C2.227,6.1,5.066,3.5,8,3.5a4.444,4.444,0,0,1,4,2,4.444,4.444,0,0,1,4-2C18.934,3.5,21.773,6.1,20.808,11.079Z"/></g></svg></td>
                                <td class="w-16"><svg class="m-auto" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none" stroke="#f40b0b"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <path d="M10 11V17" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M14 11V17" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M4 7H20" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M6 7H12H18V18C18 19.6569 16.6569 21 15 21H9C7.34315 21 6 19.6569 6 18V7Z" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> </g></svg></td>
                            </tr>
                            <tr class="bg-white/70 h-28 cursor-pointer">
                                <td class="text-center"><input class="productCheckbox" type="checkbox"></td>
                                <td class="600 w-28"><img class="size-fit" src="{{ asset('images/celana1.jpg') }}" alt=""></td>
                                <td class="ml-5">Nama Pakaian</td>
                                <td class="text-center">Rp. xxx.xxx</td>
                                <td class="w-16"><svg class="m-auto" xmlns="http://www.w3.org/2000/svg" fill="#dedede" width="20px" height="20px" viewBox="0 0 24 24" stroke="#dedede"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"><path d="M20.808,11.079C19.829,16.132,12,20.5,12,20.5s-7.829-4.368-8.808-9.421C2.227,6.1,5.066,3.5,8,3.5a4.444,4.444,0,0,1,4,2,4.444,4.444,0,0,1,4-2C18.934,3.5,21.773,6.1,20.808,11.079Z"/></g></svg></td>
                                <td class="w-16"><svg class="m-auto" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none" stroke="#f40b0b"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <path d="M10 11V17" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M14 11V17" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M4 7H20" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M6 7H12H18V18C18 19.6569 16.6569 21 15 21H9C7.34315 21 6 19.6569 6 18V7Z" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> </g></svg></td>
                            </tr>
                        </tbody>
                    </table>
                    <script src="{{ asset('js/checkbox.js') }}"></script>
                    </div>
                </div>
                   
                   <div class="w-2/5 bg-slate-100/80 ml-2 max-h-96">
                        <div class="m-4">
                        <h2>Alamat</h2>
                        <input class="w-full font-normal mb-7 h-6 rounded-md" type="text">
                        <div class="flex flex-wrap gap-2">
                        <div>
                            <h2>Item</h2>
                            <input class="mb-7 w-full h-6 rounded-md" type="text">
                            <h2>Potongan harga</h2>
                            <input class="mb-7 w-full h-6 rounded-md" type="text" disabled>
                            <h2>Total Pesanan</h2>
                            <input class="mb-7 w-full h-6 rounded-md" type="text" disabled>
                        </div>
                        <div>
                            <h2>Biaya Pengiriman</h2>
                            <input class="mb-7 w-full h-6 rounded-md" type="text" disabled>
                            <h2>Code Voucher</h2>
                            <input class="mb-7 w-full h-6 rounded-md" type="text">
                            <h2>Opsi Pengiriman</h2>
                            <form class="font-normal mb-5" name="formcek">
                                <select class="w-full h-6 rounded-md" name="jurusan">
                                 <option value="GoSend Instant">Via Transfer
                                 <option value="Cash Of Delivery COD">Cash Of Delivery COD
                                </select>
                            </form>
                        </div>
                        
                        </div>
                        <div class="bg-lawngreen mt-5 m-auto text-center w-full font-semibold rounded-md cursor-pointer">
                            <button class="">Checkout</button>
                        </div>
                        <div class="flex justify-center h-10 mt-7 gap-10 font-semibold text-xl">
                            <button class="bg-white w-32 rounded-md">CHECKOUT</button>
                            <button class="bg-black text-white w-32 rounded-md">CANCEL</button>
                        </div>
                        </form>
                   </div>
                </div>
            </div>
                
            <br><br>
                  
                <!-- Katalog Produk Promo -->
                <div class="py-3">
                        <p class="font-bold my-0">Produk Promo</p>
                        <p>promosi produk yang menarik untuk Style Kamu</p>
                    </div>
                    <div class="grid grid-cols-5 container sm:justify-center gap-y-3 gap-x-1 text-left m-auto">
                        <div class=" w-48 h-fit bg-slate-200 shadow-md">
                            <img class="w-full h-52" src="{{ asset('images/kaos2.jpg') }}" alt="">
                            <div class="m-1 flex-wrap gap-2">
                                <h2 class="text-sm font-bold">Nama pakaian</h2>
                                <h3 class="text-sm my-1">Harga</h3>
                            <div class=" flex flex-wrap">
                            <button class="bg-white/80 hover:bg-white max-w-fit px-3 py-1 rounded-md text-xs font-semibold">
                                <span>
                                    Beli
                                </span>
                            </button>
                            <button class="ml-2 bg-lawngreen/80 hover:bg-lawngreen flex-grow px-3 py-1 rounded-md text-xs font-semibold">
                                <span>
                                    Masukan Keranjang
                                </span>
                            </button>
                            </div>
                            </div>  
                        </div>

                        <div class=" w-48 h-fit bg-slate-200 shadow-md">
                            <img class="w-full h-52" src="{{ asset('images/kaos1.jpg') }}" alt="">
                            <div class="m-1 flex-wrap gap-2">
                                <h2 class="text-sm font-bold">Nama pakaian</h2>
                                <h3 class="text-sm my-1">Harga</h3>
                            <div class=" flex flex-wrap">
                            <button class="bg-white/80 hover:bg-white max-w-fit px-3 py-1 rounded-md text-xs font-semibold">
                                <span>
                                    Beli
                                </span>
                            </button>
                            <button class="ml-2 bg-lawngreen/80 hover:bg-lawngreen flex-grow px-3 py-1 rounded-md text-xs font-semibold">
                                <span>
                                    Masukan Keranjang
                                </span>
                            </button>
                            </div>
                            </div>  
                        </div>

                        <div class=" w-48 h-fit bg-slate-200 shadow-md">
                            <img class="w-full h-52" src="{{ asset('images/celana1.jpg') }}" alt="">
                            <div class="m-1 flex-wrap gap-2">
                                <h2 class="text-sm font-bold">Nama pakaian</h2>
                                <h3 class="text-sm my-1">Harga</h3>
                            <div class=" flex flex-wrap">
                            <button class="bg-white/80 hover:bg-white max-w-fit px-3 py-1 rounded-md text-xs font-semibold">
                                <span>
                                    Beli
                                </span>
                            </button>
                            <button class="ml-2 bg-lawngreen/80 hover:bg-lawngreen flex-grow px-3 py-1 rounded-md text-xs font-semibold">
                                <span>
                                    Masukan Keranjang
                                </span>
                            </button>
                            </div>
                            </div>  
                        </div>

                        <div class=" w-48 h-fit bg-slate-200 shadow-md">
                            <img class="w-full h-52" src="{{ asset('images/kaos3.jpg') }}" alt="">
                            <div class="m-1 flex-wrap gap-2">
                                <h2 class="text-sm font-bold">Nama pakaian</h2>
                                <h3 class="text-sm my-1">Harga</h3>
                            <div class=" flex flex-wrap">
                            <button class="bg-white/80 hover:bg-white max-w-fit px-3 py-1 rounded-md text-xs font-semibold">
                                <span>
                                    Beli
                                </span>
                            </button>
                            <button class="ml-2 bg-lawngreen/80 hover:bg-lawngreen flex-grow px-3 py-1 rounded-md text-xs font-semibold">
                                <span>
                                    Masukan Keranjang
                                </span>
                            </button>
                            </div>
                            </div>  
                        </div>

                        <div class=" w-48 h-fit bg-slate-200 shadow-md">
                            <img class="w-full h-52" src="{{ asset('images/celana5.jpg') }}" alt="">
                            <div class="m-1 flex-wrap gap-2">
                                <h2 class="text-sm font-bold">Nama pakaian</h2>
                                <h3 class="text-sm my-1">Harga</h3>
                            <div class=" flex flex-wrap">
                            <button class="bg-white/80 hover:bg-white max-w-fit px-3 py-1 rounded-md text-xs font-semibold">
                                <span>
                                    Beli
                                </span>
                            </button>
                            <button class="ml-2 bg-lawngreen/80 hover:bg-lawngreen flex-grow px-3 py-1 rounded-md text-xs font-semibold">
                                <span>
                                    Masukan Keranjang
                                </span>
                            </button>
                            </div>
                            </div>  
                        </div>

                        <div class=" w-48 h-fit bg-slate-200 shadow-md">
                            <img class="w-full h-52" src="{{ asset('images/celana2.jpg') }}" alt="">
                            <div class="m-1 flex-wrap gap-2">
                                <h2 class="text-sm font-bold">Nama pakaian</h2>
                                <h3 class="text-sm my-1">Harga</h3>
                            <div class=" flex flex-wrap">
                            <button class="bg-white/80 hover:bg-white max-w-fit px-3 py-1 rounded-md text-xs font-semibold">
                                <span>
                                    Beli
                                </span>
                            </button>
                            <button class="ml-2 bg-lawngreen/80 hover:bg-lawngreen flex-grow px-3 py-1 rounded-md text-xs font-semibold">
                                <span>
                                    Masukan Keranjang
                                </span>
                            </button>
                            </div>
                            </div>  
                        </div>

                        <div class=" w-48 h-fit bg-slate-200 shadow-md">
                            <img class="w-full h-52" src="{{ asset('images/kaos2.jpg') }}" alt="">
                            <div class="m-1 flex-wrap gap-2">
                                <h2 class="text-sm font-bold">Nama pakaian</h2>
                                <h3 class="text-sm my-1">Harga</h3>
                            <div class=" flex flex-wrap">
                            <button class="bg-white/80 hover:bg-white max-w-fit px-3 py-1 rounded-md text-xs font-semibold">
                                <span>
                                    Beli
                                </span>
                            </button>
                            <button class="ml-2 bg-lawngreen/80 hover:bg-lawngreen flex-grow px-3 py-1 rounded-md text-xs font-semibold">
                                <span>
                                    Masukan Keranjang
                                </span>
                            </button>
                            </div>
                            </div>  
                        </div>

                        <div class=" w-48 h-fit bg-slate-200 shadow-md">
                            <img class="w-full h-52" src="{{ asset('images/kaos4.jpg') }}" alt="">
                            <div class="m-1 flex-wrap gap-2">
                                <h2 class="text-sm font-bold">Nama pakaian</h2>
                                <h3 class="text-sm my-1">Harga</h3>
                            <div class=" flex flex-wrap">
                            <button class="bg-white/80 hover:bg-white max-w-fit px-3 py-1 rounded-md text-xs font-semibold">
                                <span>
                                    Beli
                                </span>
                            </button>
                            <button class="ml-2 bg-lawngreen/80 hover:bg-lawngreen flex-grow px-3 py-1 rounded-md text-xs font-semibold">
                                <span>
                                    Masukan Keranjang
                                </span>
                            </button>
                            </div>
                            </div>  
                        </div>

                        <div class=" w-48 h-fit bg-slate-200 shadow-md">
                            <img class="w-full h-52" src="{{ asset('images/kaos1.jpg') }}" alt="">
                            <div class="m-1 flex-wrap gap-2">
                                <h2 class="text-sm font-bold">Nama pakaian</h2>
                                <h3 class="text-sm my-1">Harga</h3>
                            <div class=" flex flex-wrap">
                            <button class="bg-white/80 hover:bg-white max-w-fit px-3 py-1 rounded-md text-xs font-semibold">
                                <span>
                                    Beli
                                </span>
                            </button>
                            <button class="ml-2 bg-lawngreen/80 hover:bg-lawngreen flex-grow px-3 py-1 rounded-md text-xs font-semibold">
                                <span>
                                    Masukan Keranjang
                                </span>
                            </button>
                            </div>
                            </div>  
                        </div>

                        <div class=" w-48 h-fit bg-slate-200 shadow-md">
                            <img class="w-full h-52" src="{{ asset('images/kaos3.jpg') }}" alt="">
                            <div class="m-1 flex-wrap gap-2">
                                <h2 class="text-sm font-bold">Nama pakaian</h2>
                                <h3 class="text-sm my-1">Harga</h3>
                            <div class=" flex flex-wrap">
                            <button class="bg-white/80 hover:bg-white max-w-fit px-3 py-1 rounded-md text-xs font-semibold">
                                <span>
                                    Beli
                                </span>
                            </button>
                            <button class="ml-2 bg-lawngreen/80 hover:bg-lawngreen flex-grow px-3 py-1 rounded-md text-xs font-semibold">
                                <span>
                                    Masukan Keranjang
                                </span>
                            </button>
                            </div>
                            </div>  
                        </div>
                    </div>

                        
                    </div>
                
            </div>
        </div>
    </div>
@endsection