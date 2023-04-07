@extends('layouts.app')

@section('content')
	<section class="relative py-40 lg:h-screen flex justify-center items-center bg-green-600/10">
		<div class="container">
			<div class="grid md:grid-cols-2 gap-[30px] mt-10 items-center">
				<div class="ltr:md:text-left rtl:md:text-right text-center">
					<h1 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-6">Make your <span class="text-green-600">contribution <br> to the eco-future</span> of our city!</h1>
					<p class="text-slate-400 text-xl max-w-xl">Support of local initiatives and participation of citizens in environmental projects.</p>
				</div>
				<div class="relative ltr:lg:ml-10 rtl:lg:mr-10">
					<div class="p-5 shadow dark:shadow-gray-700 rounded-t-full bg-white dark:bg-slate-900">
						<img src="{{asset('assets/images/hero.jpg')}}" class="shadow-md rounded-t-full rounded-md" alt="">
					</div>
					<div class="absolute bottom-2/4 translate-y-2/4 right-0 left-0 text-center">
						<a href="#!" data-type="youtube" data-id="YOYyvOKlh9Y" class="lightbox h-20 w-20 rounded-full shadow-md dark:shadow-gray-800 inline-flex items-center justify-center bg-white dark:bg-slate-900 text-green-600">
							<i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="relative md:py-24 py-16">
		<div class="container">
			<div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
				<div class="md:col-span-5">
					<div class="relative">
						<img src="{{asset('assets/images/about.jpg')}}" class="rounded-xl shadow-md" alt="">
						<div class="absolute bottom-2/4 translate-y-2/4 right-0 left-0 text-center">
							<a href="#!" data-type="youtube" data-id="0NtrMdNshYs"
							   class="lightbox h-20 w-20 rounded-full shadow-md dark:shadow-gyay-700 inline-flex items-center justify-center bg-white dark:bg-slate-900 text-green-600">
								<i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="md:col-span-7">
					<div class="ltr:lg:ml-4 rtl:lg:mr-4">
						<h4 class="mb-6 md:text-3xl text-2xl lg:leading-normal leading-normal font-semibold">Efficiency. Transparency. <br> Control.</h4>
						<p class="text-slate-400 max-w-xl">Hously developed a platform for the Real Estate marketplace that allows buyers and sellers to easily execute a transaction on their own. The platform drives efficiency, cost transparency and control into the hands of the consumers. Hously is Real Estate Redefined.</p>

						<div class="mt-4">
							<a href="" class="btn bg-green-600 hover:bg-green-700 text-white rounded-md mt-3">Learn More </a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container lg:mt-24 mt-16">
			<div class="grid grid-cols-1 pb-8 text-center">
				<h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">How It Works</h3>
				<p class="text-slate-400 max-w-xl mx-auto">A great plateform to buy, sell and rent your properties without any agent or commisions.</p>
			</div>
			<div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
				<div class="group relative lg:px-10 transition-all duration-500 ease-in-out rounded-xl bg-transparent overflow-hidden text-center">
					<div class="relative overflow-hidden text-transparent -m-3">
						<i data-feather="hexagon" class="h-32 w-32 fill-green-600/5 mx-auto"></i>
						<div class="absolute top-2/4 -translate-y-2/4 left-0 right-0 mx-auto text-green-600 rounded-xl transition-all duration-500 ease-in-out text-4xl flex align-middle justify-center items-center">
							<i class="uil uil-estate"></i>
						</div>
					</div>
					<div class="mt-6">
						<h5 class="text-xl font-medium">Evaluate Property</h5>
						<p class="text-slate-400 mt-3">If the distribution of letters and 'words' is random, the reader will not be distracted from making.</p>
					</div>
				</div>
				<div class="group relative lg:px-10 transition-all duration-500 ease-in-out rounded-xl bg-transparent overflow-hidden text-center">
					<div class="relative overflow-hidden text-transparent -m-3">
						<i data-feather="hexagon" class="h-32 w-32 fill-green-600/5 mx-auto"></i>
						<div class="absolute top-2/4 -translate-y-2/4 left-0 right-0 mx-auto text-green-600 rounded-xl transition-all duration-500 ease-in-out text-4xl flex align-middle justify-center items-center">
							<i class="uil uil-bag"></i>
						</div>
					</div>
					<div class="mt-6">
						<h5 class="text-xl font-medium">Meeting with Agent</h5>
						<p class="text-slate-400 mt-3">If the distribution of letters and 'words' is random, the reader will not be distracted from making.</p>
					</div>
				</div>
				<div class="group relative lg:px-10 transition-all duration-500 ease-in-out rounded-xl bg-transparent overflow-hidden text-center">
					<div class="relative overflow-hidden text-transparent -m-3">
						<i data-feather="hexagon" class="h-32 w-32 fill-green-600/5 mx-auto"></i>
						<div class="absolute top-2/4 -translate-y-2/4 left-0 right-0 mx-auto text-green-600 rounded-xl transition-all duration-500 ease-in-out text-4xl flex align-middle justify-center items-center">
							<i class="uil uil-key-skeleton"></i>
						</div>
					</div>
					<div class="mt-6">
						<h5 class="text-xl font-medium">Close the Deal</h5>
						<p class="text-slate-400 mt-3">If the distribution of letters and 'words' is random, the reader will not be distracted from making.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container lg:mt-24 mt-16">
			<div class="grid grid-cols-1 pb-8 text-center">
				<h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Featured Properties</h3>
				<p class="text-slate-400 max-w-xl mx-auto">A great plateform to buy, sell and rent your properties without any agent or commisions.</p>
			</div>
			<div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">

				{{--repeat--}}
				<div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
					<div class="relative">
						<img src="{{asset('assets/images/property/1.jpg')}}" alt="">
						<div class="absolute top-4 ltr:right-4 rtl:left-4">
							<a href="javascript:void(0)" class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i class="mdi mdi-heart mdi-18px"></i></a>
						</div>
					</div>
					<div class="p-6">
						<div class="pb-6">
							<a href="#" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">10765 Hillshire Ave, Baton Rouge, LA 70810, USA</a>
						</div>
						<ul class="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
							<li class="flex items-center ltr:mr-4 rtl:ml-4">
								<i class="uil uil-compress-arrows text-2xl ltr:mr-2 rtl:ml-2 text-green-600"></i>
								<span>8000sqf</span>
							</li>
							<li class="flex items-center ltr:mr-4 rtl:ml-4">
								<i class="uil uil-bed-double text-2xl ltr:mr-2 rtl:ml-2 text-green-600"></i>
								<span>4 Beds</span>
							</li>
							<li class="flex items-center">
								<i class="uil uil-bath text-2xl ltr:mr-2 rtl:ml-2 text-green-600"></i>
								<span>4 Baths</span>
							</li>
						</ul>
						<ul class="pt-6 flex justify-between items-center list-none">
							<li>
								<span class="text-slate-400">Price</span>
								<p class="text-lg font-medium">$5000</p>
							</li>
							<li>
								<span class="text-slate-400">Rating</span>
								<ul class="text-lg font-medium text-amber-400 list-none">
									<li class="inline"><i class="mdi mdi-star"></i></li>
									<li class="inline"><i class="mdi mdi-star"></i></li>
									<li class="inline"><i class="mdi mdi-star"></i></li>
									<li class="inline"><i class="mdi mdi-star"></i></li>
									<li class="inline"><i class="mdi mdi-star"></i></li>
									<li class="inline text-black dark:text-white">5.0(30)</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>

			</div>
		</div>
		<div class="container lg:mt-24 mt-16">
			<div class="grid grid-cols-1 pb-8 text-center">
				<h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">What Our Client Say ?</h3>
				<p class="text-slate-400 max-w-xl mx-auto">A great plateform to buy, sell and rent your properties without any agent or commisions.</p>
			</div>
			<div class="flex justify-center relative mt-16">
				<div class="relative lg:w-1/3 md:w-1/2 w-full">
					<div class="absolute -top-20 ltr:md:-left-24 rtl:md:-right-24 ltr:-left-0 rtl:-right-0">
						<i class="mdi mdi-format-quote-open text-9xl opacity-5"></i>
					</div>
					<div class="absolute bottom-28 ltr:md:-right-24 rtl:md:-left-24 ltr:-right-0 rtl:-left-0">
						<i class="mdi mdi-format-quote-close text-9xl opacity-5"></i>
					</div>
					<div class="tiny-single-item">

						{{--repeat--}}
						<div class="tiny-slide">
							<div class="text-center">
								<p class="text-xl text-slate-400 italic"> " Hously made the processes so easy. Hously instantly increased the amount of interest and ultimately saved us over $10,000. " </p>

								<div class="text-center mt-5">
									<ul class="text-xl font-medium text-amber-400 list-none mb-2">
										<li class="inline"><i class="mdi mdi-star"></i></li>
										<li class="inline"><i class="mdi mdi-star"></i></li>
										<li class="inline"><i class="mdi mdi-star"></i></li>
										<li class="inline"><i class="mdi mdi-star"></i></li>
										<li class="inline"><i class="mdi mdi-star"></i></li>
									</ul>
									<img src="{{asset('assets/images/client/01.jpg')}}" class="h-14 w-14 rounded-full shadow-md dark:shadow-gray-700 mx-auto" alt="">
									<h6 class="mt-2 fw-semibold">Christa Smith</h6>
									<span class="text-slate-400 text-sm">Manager</span>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<div class="container lg:mt-24 mt-16">
			<div class="grid grid-cols-1 text-center">
				<h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-medium text-black dark:text-white">Have Question ? Get in touch!</h3>

				<p class="text-slate-400 max-w-xl mx-auto">A great plateform to buy, sell and rent your properties without any agent or commisions.</p>

				<div class="mt-6">
					<a href="{{ route('contact.index') }}" class="btn bg-green-600 hover:bg-green-700 text-white rounded-md"><i class="uil uil-phone align-middle ltr:mr-2 rtl:ml-2"></i> Contact us</a>
				</div>
			</div>
		</div>
	</section>
@endsection