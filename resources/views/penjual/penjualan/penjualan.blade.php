<link rel="stylesheet" href="{{ asset('styles/output.css') }}">
<link rel="stylesheet" href="{{ asset('styles/crsl.css') }}">
<script src="{{ asset('js/sidebardashboard.js') }}"></script>
<link rel="stylesheet" href="{{ asset('styles/flowbite.min.css') }}">
<script src="{{ asset('js/flowbite.min.js') }}"></script>
@extends('layout.dashboardnavbar')

@section('title', 'Penjualan')
@section('content')
<div class="bg-slate-100 p-2 pt-10 sm:ml-64">
   <div id="" class="bg-white m-4 kategori-content h-full p-4 mt-14 overflow-auto">
        <h1 class="text-xl font-bold mb-2">Tabel Penjualan</h1><br>
        @include('sweetalert::alert')
        <div>

            <section class="container px-4 mx-auto mb-10">
                <div class="flex flex-col">
                    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                            <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                                @if($checkout->isEmpty())
                                    <div class="p-4 text-center text-gray-500 dark:text-gray-400">
                                        Belum ada Riwayat Pemesanan!!
                                    </div>
                                @else
                                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                        <thead class="bg-lawngreen dark:bg-gray-800">
                                            <tr>
                                                <th scope="col" class="py-3.5 px-4 text-sm font-bold text-left rtl:text-right text-black dark:text-gray-400">
                                                    <div class="flex items-center gap-x-3">
                                                        <button class="flex items-center gap-x-2">
                                                            <span>Invoice</span>
                                                        </button>
                                                    </div>
                                                </th>

                                                <th scope="col" class="px-4 py-3.5 text-sm font-bold text-left rtl:text-right text-black dark:text-gray-400">
                                                    Date
                                                </th>

                                                <th scope="col" class="px-4 py-3.5 text-sm font-bold text-left rtl:text-right text-black dark:text-gray-400">
                                                    Status
                                                </th>

                                                <th scope="col" class="px-4 py-3.5 text-sm font-bold text-left rtl:text-right text-black dark:text-gray-400">
                                                    Customer
                                                </th>

                                                <th scope="col" class="relative py-3.5 px-4">
                                                    <span class="sr-only">Actions</span>
                                                </th>
                                                <th scope="col" class="relative py-3.5 px-4">
                                                    <span class="sr-only">Actions</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        @foreach ($checkout as $checkout)
                                        <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                                            <tr>
                                                <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                                    <div class="inline-flex items-center gap-x-3">
                                                        <span>#{{$checkout->id}}</span>
                                                    </div>
                                                </td>
                                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">{{ \Carbon\Carbon::parse($checkout->created_at)->format('d M Y') }}</td>
                                                <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                    @if ($checkout->status == 'Paid')
                                                    <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60 dark:bg-gray-800">
                                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10 3L4.5 8.5L2 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>

                                                        <h2 class="text-sm font-normal">Paid</h2>
                                                    </div>
                                                    @else
                                                    <div class="inline-flex items-center px-3 py-1 text-red-500 rounded-full gap-x-2 bg-red-100/60 dark:bg-gray-800">
                                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M9 3L3 9M3 3L9 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>

                                                        <h2 class="text-sm font-normal">Unpaid</h2>
                                                    </div>
                                                    @endif

                                                </td>
                                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                    <div class="flex items-center gap-x-2">
                                                        <img class="object-cover w-8 h-8 rounded-full" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="">
                                                        <div>
                                                            <h2 class="text-sm font-medium text-gray-800 dark:text-white ">{{$checkout->name}}</h2>
                                                            <p class="text-xs font-normal text-gray-600 dark:text-gray-400">{{$checkout->email}}</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                    <div class="flex items-center gap-x-6">
                                                        <a href="{{ route('invoicepenjual', ['id' => $checkout->id]) }}" class="text-gray-500 transition-colors duration-200 dark:hover:text-indigo-500 dark:text-gray-300 hover:text-indigo-500 focus:outline-none">
                                                            Archive
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                    <div class="flex items-center gap-x-6">
                                                        <a href="{{ route('downloadInvoice', ['id' => $checkout->id]) }}" target="_blank" class="text-gray-500 transition-colors duration-200 dark:hover:text-indigo-500 dark:text-gray-300 hover:text-indigo-500 focus:outline-none">
                                                            Download
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    
                                </div>
                                <div class="text-right mt-2">
                                    <a href="{{ route('download-Allinvoice', ['id' => $checkout->id]) }}" target="_blank" class="inline-block">
                                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-flex items-center">
                                            Cetak Data
                                            <svg class="w-5 h-5 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor">
                                                <!-- Font Awesome SVG Icon -->
                                                <path d="M128 0C92.7 0 64 28.7 64 64v96h64V64H354.7L384 93.3V160h64V93.3c0-17-6.7-33.3-18.7-45.3L400 18.7C388 6.7 371.7 0 354.7 0H128zM384 352v32 64H128V384 368 352H384zm64 32h32c17.7 0 32-14.3 32-32V256c0-35.3-28.7-64-64-64H64c-35.3 0-64 28.7-64 64v96c0 17.7 14.3 32 32 32H64v64c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V384zM432 248a24 24 0 1 1 0 48 24 24 0 1 1 0-48z"/>
                                            </svg>
                                        </button>
                                    </a>
                                </div>
                        </div>
                        @endif
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection
