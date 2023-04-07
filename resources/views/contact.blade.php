@extends('layouts.app')

@section('content')
	<div class="container-fluid relative mt-20">
		<div class="grid grid-cols-1">
			<div class="w-full leading-[0] border-0">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d375.7269095591244!2d76.90986904320448!3d43.23502854823706!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3883692f027581ad%3A0x2426740f56437e63!2z0KXQsNC70YvSm9Cw0YDQsNC70YvSmyDQsNKb0L_QsNGA0LDRgtGC0YvSmyDRgtC10YXQvdC-0LvQvtCz0LjRj9C70LDRgCDRg9C90LjQstC10YDRgdC40YLQtdGC0ZY!5e0!3m2!1sen!2sin!4v1680833966487!5m2!1sen!2sin" style="border:0" class="w-full h-[500px]" allowfullscreen></iframe>
			</div>
		</div>
	</div>
	<section class="relative lg:py-24 py-16">
		<div class="container">
			<div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
				<div class="lg:col-span-7 md:col-span-6">
					<img src="{{asset('assets/images/svg/contact.svg')}}" alt="">
				</div>
				<div class="lg:col-span-5 md:col-span-6">
					<div class="lg:ml-5">
						<div class="bg-white dark:bg-slate-900 rounded-md shadow dark:shadow-gray-700 p-6">
							<h3 class="mb-6 text-2xl leading-normal font-medium">Get in touch !</h3>
							<form method="post" name="myForm" id="myForm" onsubmit="return validateForm()">
								<p class="mb-0" id="error-msg"></p>
								<div id="simple-msg"></div>
								<div class="grid lg:grid-cols-12 lg:gap-6">
									<div class="lg:col-span-6 mb-5">
										<label for="name" class="font-medium">Your Name:</label>
										<input name="name" id="name" type="text" class="form-input mt-2" placeholder="Name :">
									</div>
									<div class="lg:col-span-6 mb-5">
										<label for="email" class="font-medium">Your Email:</label>
										<input name="email" id="email" type="email" class="form-input mt-2" placeholder="Email :">
									</div>
								</div>
								<div class="grid grid-cols-1">
									<div class="mb-5">
										<label for="subject" class="font-medium">Your Question:</label>
										<input name="subject" id="subject" class="form-input mt-2" placeholder="Subject :">
									</div>
									<div class="mb-5">
										<label for="comments" class="font-medium">Your Comment:</label>
										<textarea name="comments" id="comments" class="form-input mt-2 textarea" placeholder="Message :"></textarea>
									</div>
								</div>
								<button type="submit" id="submit" name="send" class="btn bg-green-600 hover:bg-green-700 text-white rounded-md">Send Message</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container lg:mt-24 mt-16">
			<div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px]">
				<div class="text-center px-6">
					<div class="relative overflow-hidden text-transparent -m-3">
						<i data-feather="hexagon" class="h-32 w-32 fill-green-600/5 mx-auto"></i>
						<div class="absolute top-2/4 -translate-y-2/4 left-0 right-0 mx-auto text-green-600 rounded-xl transition-all duration-500 ease-in-out text-4xl flex align-middle justify-center items-center">
							<i class="uil uil-phone"></i>
						</div>
					</div>
					<div class="content mt-7">
						<h5 class="title h5 text-xl font-medium">Phone</h5>
						<p class="text-slate-400 mt-3">The phrasal sequence of the is now so that many campaign and benefit</p>
						<div class="mt-5">
							<a href="tel:+152534-468-854" class="btn btn-link text-green-600 hover:text-green-600 after:bg-green-600 transition duration-500">+152 534-468-854</a>
						</div>
					</div>
				</div>
				<div class="text-center px-6">
					<div class="relative overflow-hidden text-transparent -m-3">
						<i data-feather="hexagon" class="h-32 w-32 fill-green-600/5 mx-auto"></i>
						<div class="absolute top-2/4 -translate-y-2/4 left-0 right-0 mx-auto text-green-600 rounded-xl transition-all duration-500 ease-in-out text-4xl flex align-middle justify-center items-center">
							<i class="uil uil-envelope"></i>
						</div>
					</div>
					<div class="content mt-7">
						<h5 class="title h5 text-xl font-medium">Email</h5>
						<p class="text-slate-400 mt-3">The phrasal sequence of the is now so that many campaign and benefit</p>
						<div class="mt-5">
							<a href="mailto:contact@example.com" class="btn btn-link text-green-600 hover:text-green-600 after:bg-green-600 transition duration-500">contact@example.com</a>
						</div>
					</div>
				</div>
				<div class="text-center px-6">
					<div class="relative overflow-hidden text-transparent -m-3">
						<i data-feather="hexagon" class="h-32 w-32 fill-green-600/5 mx-auto"></i>
						<div class="absolute top-2/4 -translate-y-2/4 left-0 right-0 mx-auto text-green-600 rounded-xl transition-all duration-500 ease-in-out text-4xl flex align-middle justify-center items-center">
							<i class="uil uil-map-marker"></i>
						</div>
					</div>
					<div class="content mt-7">
						<h5 class="title h5 text-xl font-medium">Location</h5>
						<p class="text-slate-400 mt-3">C/54 Northwest Freeway, Suite 558, <br> Houston, USA 485</p>
						<div class="mt-5">
							<a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin"
							   data-type="iframe" class="video-play-icon read-more lightbox btn btn-link text-green-600 hover:text-green-600 after:bg-green-600 transition duration-500">View on Google map</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection