@if(!Request::is('login') && !Request::is('register'))
	<footer class="relative bg-slate-900 dark:bg-slate-800">
		<div class="container">
			<div class="grid grid-cols-1">
				<div class="relative py-16">
					<div class="relative w-full">
						<div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
							<div class="lg:col-span-4 md:col-span-12">
								<a href="#" class="text-[22px] focus:outline-none">
									<img src="{{asset('assets/images/logo-light.png')}}" class="h-[24px]" alt="">
								</a>
								<p class="mt-6 text-gray-300">A great plateform to buy, sell and rent your properties without any agent or commisions.</p>
							</div>
							<div class="lg:col-span-2 md:col-span-4">
								<h5 class="tracking-[1px] text-gray-100 font-semibold">Company</h5>
								<ul class="list-none footer-list mt-6">
									<li><a href="aboutus.html" class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b ltr:mr-1 rtl:ml-1"></i> About us</a></li>
									<li class="mt-[10px]"><a href="features.html" class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b ltr:mr-1 rtl:ml-1"></i> Services</a></li>
									<li class="mt-[10px]"><a href="pricing.html" class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b ltr:mr-1 rtl:ml-1"></i> Pricing</a></li>
									<li class="mt-[10px]"><a href="blog.html" class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b ltr:mr-1 rtl:ml-1"></i> Blog</a></li>
									<li class="mt-[10px]"><a href="auth-login.html" class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b ltr:mr-1 rtl:ml-1"></i> Login</a></li>
								</ul>
							</div>
							<div class="lg:col-span-3 md:col-span-4">
								<h5 class="tracking-[1px] text-gray-100 font-semibold">Usefull Links</h5>
								<ul class="list-none footer-list mt-6">
									<li><a href="terms.html" class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b ltr:mr-1 rtl:ml-1"></i> Terms of Services</a></li>
									<li class="mt-[10px]"><a href="privacy.html" class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b ltr:mr-1 rtl:ml-1"></i> Privacy Policy</a></li>
									<li class="mt-[10px]"><a href="listing-one.html" class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b ltr:mr-1 rtl:ml-1"></i> Listing</a></li>
									<li class="mt-[10px]"><a href="contact.html" class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b ltr:mr-1 rtl:ml-1"></i> Contact</a></li>
								</ul>
							</div>
							<div class="lg:col-span-3 md:col-span-4">
								<h5 class="tracking-[1px] text-gray-100 font-semibold">Contact Details</h5>
								<div class="flex mt-6">
									<i data-feather="map-pin" class="w-5 h-5 text-green-600 ltr:mr-3 rtl:ml-3"></i>
									<div class="">
										<h6 class="text-gray-300 mb-2">Kazahstan, <br> Almaty, <br> Manas 34/1</h6>
										<a href="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d375.7269095591244!2d76.90986904320448!3d43.23502854823706!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3883692f027581ad%3A0x2426740f56437e63!2z0KXQsNC70YvSm9Cw0YDQsNC70YvSmyDQsNKb0L_QsNGA0LDRgtGC0YvSmyDRgtC10YXQvdC-0LvQvtCz0LjRj9C70LDRgCDRg9C90LjQstC10YDRgdC40YLQtdGC0ZY!5e0!3m2!1sen!2sin!4v1680833966487!5m2!1sen!2sin" data-type="iframe" class="text-green-600 hover:text-green-700 duration-500 ease-in-out lightbox">View on Google map</a>
									</div>
								</div>
								<div class="flex mt-6">
									<i data-feather="mail" class="w-5 h-5 text-green-600 ltr:mr-3 rtl:ml-3"></i>
									<div class="">
										<a href="mailto:reception@iitu.edu.kz" class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out">reception@iitu.edu.kz</a>
									</div>
								</div>
								<div class="flex mt-6">
									<i data-feather="phone" class="w-5 h-5 text-green-600 ltr:mr-3 rtl:ml-3"></i>
									<div class="">
										<a href="tel:+77273200000" class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out">8 (727) 320-00-00</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
@endif