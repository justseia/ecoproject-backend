@extends('layouts.app')

@section('content')
	<section class="relative table w-full py-32 lg:py-36 bg-[url('../../assets/images/bg/01.jpg')] bg-no-repeat bg-center bg-cover">
		<div class="absolute inset-0 bg-black opacity-80"></div>
		<div class="container">
			<div class="grid grid-cols-1 text-center mt-10">
				<h3 class="md:text-3xl text-2xl md:leading-snug tracking-wide leading-snug font-medium text-white mb-3">Skills That You Can Learn In The Real Estate Market</h3>
				<ul class="list-none mt-6">
					<li class="inline-block text-white/50 mx-5"> <span class="text-white block">Author :</span> <span class="block">Calvin Carlo</span></li>
					<li class="inline-block text-white/50 mx-5"> <span class="text-white block">Date :</span> <span class="block">3rd March, 2023</span></li>
					<li class="inline-block text-white/50 mx-5"> <span class="text-white block">Time :</span> <span class="block">8 Min Read</span></li>
				</ul>
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
			<div class="grid lg:grid-cols-12 md:grid-cols-2 grid-cols-1 gap-[30px]">
				<div class="lg:col-span-8 md:order-1 order-2">
					<div class="relative overflow-hidden rounded-xl shadow dark:shadow-gray-800">
						<img src="{{asset('assets/images/property/9.jpg')}}" alt="">
						<div class="p-6">
							<p class="text-slate-400">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. Lorem Ipsum is composed in a pseudo-Latin language which more or less corresponds to 'proper' Latin. It contains a series of real Latin words. This ancient dummy text is also incomprehensible, but it imitates the rhythm of most European languages in Latin script.</p>
							<p class="text-slate-400 italic border-x-4 border-green-600 rounded-tl-xl rounded-br-xl mt-3 p-3">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. "</p>
							<p class="text-slate-400 mt-3">The advantage of its Latin origin and the relative meaninglessness of Lorum Ipsum is that the text does not attract attention to itself or distract the viewer's attention from the layout.</p>
						</div>
					</div>
					<div class="p-6 rounded-md shadow dark:shadow-gray-800 mt-8">
						<h5 class="text-lg font-semibold">Leave A Comment:</h5>
						<form class="mt-8">
							<div class="grid lg:grid-cols-12 lg:gap-6">
								<div class="lg:col-span-6 mb-5">
									<div class="text-left">
										<label for="name" class="font-semibold">Your Name:</label>
										<div class="form-icon relative mt-2">
											<i data-feather="user" class="w-4 h-4 absolute top-3 left-4"></i>
											<input name="name" id="name" type="text" class="form-input pl-11" placeholder="Name :">
										</div>
									</div>
								</div>
								<div class="lg:col-span-6 mb-5">
									<div class="text-left">
										<label for="email" class="font-semibold">Your Email:</label>
										<div class="form-icon relative mt-2">
											<i data-feather="mail" class="w-4 h-4 absolute top-3 left-4"></i>
											<input name="email" id="email" type="email" class="form-input pl-11" placeholder="Email :">
										</div>
									</div>
								</div>
							</div>
							<div class="grid grid-cols-1">
								<div class="mb-5">
									<div class="text-left">
										<label for="comments" class="font-semibold">Your Comment:</label>
										<div class="form-icon relative mt-2">
											<i data-feather="message-circle" class="w-4 h-4 absolute top-3 left-4"></i>
											<textarea name="comments" id="comments" class="form-input pl-11 h-28" placeholder="Message :"></textarea>
										</div>
									</div>
								</div>
							</div>
							<button type="submit" id="submit" name="send" class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white rounded-md w-full">Send Message</button>
						</form>
					</div>
				</div>
				<div class="lg:col-span-4 md:order-2 order-1">
					<div class="sticky top-20">
						<form>
							<div>
								<label for="searchname" class="font-medium text-lg">Search Properties</label>
								<div class="relative mt-2">
									<i class="uil uil-search text-lg absolute top-[8px] ltr:left-3 rtl:right-3"></i>
									<input name="search" id="searchname" type="text" class="form-input border border-slate-100 dark:border-slate-800 ltr:pl-10 rtl:pr-10" placeholder="Search">
								</div>
							</div>
						</form>
						<h5 class="font-medium text-lg mt-[30px]">Recent post</h5>
						<div class="flex items-center mt-4">
							<img src="{{asset('assets/images/property/6.jpg')}}" class="h-16 rounded-md shadow dark:shadow-gray-800" alt="">
							<div class="ltr:ml-3 rtl:mr-3">
								<a href="" class="font-medium hover:text-green-600">10 Things You About Real Estate</a>
								<p class="text-sm text-slate-400">2nd March 2023</p>
							</div>
						</div>
						<div class="flex items-center mt-4">
							<img src="{{asset('assets/images/property/7.jpg')}}" class="h-16 rounded-md shadow dark:shadow-gray-800" alt="">
							<div class="ltr:ml-3 rtl:mr-3">
								<a href="" class="font-medium hover:text-green-600">Why We Love Real Estate</a>
								<p class="text-sm text-slate-400">2nd March 2023</p>
							</div>
						</div>
						<div class="flex items-center mt-4">
							<img src="{{asset('assets/images/property/8.jpg')}}" class="h-16 rounded-md shadow dark:shadow-gray-800" alt="">
							<div class="ltr:ml-3 rtl:mr-3">
								<a href="" class="font-medium hover:text-green-600">110 Quick Tips About Real Estate</a>
								<p class="text-sm text-slate-400">2nd March 2023</p>
							</div>
						</div>
						<h5 class="font-medium text-lg mt-[30px]">Social sites</h5>
						<ul class="list-none mt-4">
							<li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-green-600 hover:text-white hover:bg-green-600"><i data-feather="facebook" class="h-4 w-4"></i></a></li>
							<li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-green-600 hover:text-white hover:bg-green-600"><i data-feather="instagram" class="h-4 w-4"></i></a></li>
							<li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-green-600 hover:text-white hover:bg-green-600"><i data-feather="twitter" class="h-4 w-4"></i></a></li>
							<li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-green-600 hover:text-white hover:bg-green-600"><i data-feather="linkedin" class="h-4 w-4"></i></a></li>
							<li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-green-600 hover:text-white hover:bg-green-600"><i data-feather="github" class="h-4 w-4"></i></a></li>
							<li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-green-600 hover:text-white hover:bg-green-600"><i data-feather="youtube" class="h-4 w-4"></i></a></li>
							<li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-green-600 hover:text-white hover:bg-green-600"><i data-feather="gitlab" class="h-4 w-4"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection