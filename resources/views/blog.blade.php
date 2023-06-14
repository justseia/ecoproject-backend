@extends('layouts.app')

@section('content')
    <section class="relative table w-full py-32 lg:py-36 bg-[url('../../assets/images/bg/01.jpg')] bg-no-repeat bg-center bg-cover">
        <div class="absolute inset-0 bg-black opacity-80"></div>
        <div class="container">
            <div class="grid grid-cols-1 text-center mt-10">
                <h3 class="md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">Blogs & News</h3>
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
    <section class="relative md:py-24 py-16">
        <div class="container">
            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px]">

                @foreach($blogs as $blog)
                    <div class="group relative h-fit hover:-mt-[5px] overflow-hidden bg-white dark:bg-slate-900 rounded-xl shadow dark:shadow-gray-700 transition-all duration-500">
                        <div class="relative overflow-hidden">
                            <img src="{{ $blog->image }}" class="w-[350px] h-[250px] object-cover" alt="">
                            <div class="absolute ltr:right-4 rtl:left-4 top-4">
                                <span class="bg-green-600 text-white text-[14px] px-2.5 py-1 font-medium rounded-full h-5">Eco</span>
                            </div>
                        </div>

                        <div class="relative p-6">
                            <div class="">
                                <div class="flex justify-between mb-4">
                                    <span class="text-slate-400 text-sm"><i class="uil uil-calendar-alt text-slate-900 dark:text-white mr-2"></i>{{ $blog->created_at->isoFormat('LL') }}</span>
                                    <span class="text-slate-400 text-sm ml-3"><i class="uil uil-clock text-slate-900 dark:text-white mr-2"></i>5 min read</span>
                                </div>

                                <a href="{{ route('blog.show', $blog->id) }}" class="title text-xl font-medium hover:text-green-600 duration-500 ease-in-out">{{ $blog->title }}</a>

                                <div class="mt-3">
                                    <a href="{{ route('blog.show', $blog->id) }}" class="btn btn-link hover:text-green-600 after:bg-green-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
