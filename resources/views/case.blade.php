@extends('layouts.app')

@section('content')
    <section class="relative table w-full py-32 lg:py-36 bg-[url('../../assets/images/bg/01.jpg')] bg-no-repeat bg-center bg-cover">
        <div class="absolute inset-0 bg-black opacity-80"></div>
        <div class="container">
            <div class="grid grid-cols-1 text-center mt-10">
                <h3 class="md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">Case</h3>
            </div>
        </div>
    </section>
    <div class="relative">
        <div class="shape overflow-hidden z-1 text-white dark:text-slate-900">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <section class="relative lg:py-24 py-16">
        <div class="container">
            <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                <div class="lg:col-span-12 md:col-span-12">
                    <div class="grid lg:grid-cols-3 grid-cols-1 gap-[30px]">

                        @foreach($cases as $case)
                            <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                                <div class="relative">
                                    <img src="{{ $case->image }}" class="object-cover h-[300px] w-full" alt="">

                                    <div class="absolute top-4 ltr:right-4 rtl:left-4">
                                        <a href="javascript:void(0)" class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i class="mdi mdi-heart mdi-18px"></i></a>
                                    </div>
                                </div>

                                <div class="p-6">
                                    <div class="pb-1">
                                        <a href="{{ route('home.index') }}" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">{{ $case->title }}</a>
                                    </div>
                                    <div class="pb-6">
                                        {{ $case->created_at->isoFormat('LL') }}
                                    </div>

                                    <ul class="py-6 border-t border-slate-100 dark:border-gray-800 flex items-center list-none">
                                        {{ $case->body }}
                                    </ul>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
