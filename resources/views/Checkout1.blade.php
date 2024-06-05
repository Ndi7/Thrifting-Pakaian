<link rel="stylesheet" href="{{ asset('styles/output.css') }}">
@extends('layout.navbar')

@section ('title', 'checkout')
@section('content')


<div class="min-w-screen min-h-screen bg-gray-50 py-5">
    <div class="px-5">

        <div class="mb-3 p-5">
            <h1 class="text-3xl md:text-5xl font-bold text-gray-600">Checkout.</h1>
        </div>

    </div>
    <div class="w-full bg-white border-t border-b border-gray-200 px-5 py-10 text-gray-800">
        <div class="w-full  ">
            <div class="mx-3 md:flex justify-center gap-4">
                <div class="py-5 px-3 md:w-full lg:items-start">
                    <div class="w-full mx-auto text-gray-800 font-light mb-6 border-b border-gray-200 pb-6">
                        <div class="w-full flex items-center">
                            <div class="overflow-hidden rounded-lg w-16 h-16 bg-gray-50 border border-gray-200">
                                <img src="https://images.unsplash.com/photo-1572635196237-14b3f281503f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1160&q=80" alt="">
                            </div>
                            <div class="flex-grow pl-2">
                                <h6 class="font-semibold uppercase text-gray-600">Ray Ban Sunglasses.</h6>
                                <p class="text-gray-400">x 1</p>
                            </div>
                            <div>
                                <span class="font-semibold text-gray-600 text-xl">$210</span><span class="font-semibold text-gray-600 text-sm">.00</span>
                            </div>
                        </div>
                    </div>

                    <div class="mb-6 pb-6 border-b border-gray-200 text-gray-800">
                        <div class="w-full flex mb-3 items-center">
                            <div class="flex-grow">
                                <span class="text-gray-600">Subtotal</span>
                            </div>
                            <div class="pl-3">
                                <span class="font-semibold">$190.91</span>
                            </div>
                        </div>
                        <div class="w-full flex items-center">
                            <div class="flex-grow">
                                <span class="text-gray-600">Taxes (GST)</span>
                            </div>
                            <div class="pl-3">
                                <span class="font-semibold">$19.09</span>
                            </div>
                        </div>
                    </div>
                    <div class="mb-6 pb-6 border-b border-gray-200 md:border-none text-gray-800 text-xl">
                        <div class="w-full flex items-center">
                            <div class="flex-grow">
                                <span class="text-gray-600">Total</span>
                            </div>
                            <div class="pl-3">
                                <span class="font-semibold text-gray-400 text-sm">AUD</span> <span class="font-semibold">$210.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-3 md:w-full">
                    <form name="form" action="{{ route('checkout.store') }}" method="POST">
                            @csrf
                    <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-3 text-gray-800 font-light mb-6">

                        <div class="w-full flex mb-5 items-center">
                            <div class="w-30">
                                <span class="text-gray-600 font-semibold">Alamat Pengiriman</span>
                            </div>
                        </div>
                        @foreach ($addresses as $addresses)
                        <div class="w-full flex mb-3 items-center">
                            <div class="w-32">
                                <span class="text-gray-600 font-semibold">Nama</span>
                            </div>
                            <div class="flex-grow pl-3">
                                <span>{{ $addresses->first_name }} {{ $addresses->last_name }}</span>
                            </div>
                        </div>

                        <div class="w-full flex mb-3 items-center">
                            <div class="w-32">
                                <span class="text-gray-600 font-semibold">Alamat</span>
                            </div>
                            <div class="flex-grow pl-3">
                                <span>{{ $addresses->address1 }} {{ $addresses->address2 }}</span>
                            </div>
                        </div>

                        <div class="w-full flex mb-3 items-center">
                            <div class="w-32">
                                <span class="text-gray-600 font-semibold">Telepon</span>
                            </div>
                            <div class="flex-grow pl-3">
                                <span>{{ $addresses->phone }}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 text-gray-800 font-light mb-6">
                        <div class="w-full p-3 border-b border-gray-200">
                                <h2 class="font-bold mb-2">Jasa Pengiriman</h2>
                                    <select class="w-full px-3 py-2 mb-5 border border-black rounded-lg" id="jasa_pengiriman" name="jasa_pengiriman" required>
                                        <option value="">Pilih Jasa Pengiriman</option>
                                        <option value="jne">JNE</option>
                                        <option value="jnt">JNT</option>
                                        <option value="tiki">TIKI</option>
                                    </select>
                            <div>
                                <h2 class="font-bold mb-2">Opsi Pengiriman</h2>
                                <select class="w-full px-3 py-2 mb-5 border border-black rounded-lg" id="opsi_pengiriman" name="opsi_pengiriman" required>
                                    <option value="">Pilih Opsi Pengiriman</option>
                                    <option value="reguler">Pengiriman Reguler (Estimasi tiba: 3-5 hari kerja)</option>
                                    <option value="ekspres">Pengiriman Ekspres (Estimasi tiba: 1-2 hari kerja)</option>
                                    <option value="kargo">Pengiriman Kargo (Estimasi tiba: 5-7 hari kerja)</option>
                                </select>


                            </div>
                        </div>

                    </div>
                    <div>
                        <button class="block w-full max-w-xs mx-auto bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-2 font-semibold"><i class="mdi mdi-lock-outline mr-1"></i> PAY NOW</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="p-5">
        <div class="text-center text-gray-400 text-sm">
            <a href="https://www.buymeacoffee.com/scottwindon" target="_blank" class="focus:outline-none underline text-gray-400"><i class="mdi mdi-beer-outline"></i>Buy me a beer</a> and help support open-resource
        </div>
    </div>
</div>




@endsection
