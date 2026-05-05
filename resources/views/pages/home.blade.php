@extends('layouts.view')

@section('content')

<!-- HERO -->
<section class="py-24 bg-blue-100 min-h-screen flex items-center justify-center">
    <div class="max-w-7xl mx-auto px-6 md:px-12 flex flex-col lg:flex-row items-center justify-center gap-12 lg:gap-48 w-full">

        <div class="max-w-xl">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-semibold leading-tight mb-6">
                Healthcare that comes to you
            </h1>

            <p class="text-gray-600 mb-8 text-lg">
                Professional nurses, physiotherapists and wellbeing staff delivering care directly to your home.
            </p>

            <div class="flex flex-wrap gap-4">
                <a href="{{ route('login') }}" class="btn-primary">Book Appointment</a>
                <a href="{{ route('login') }}" class="btn-secondary">Login</a>
            </div>
        </div>

        <img src="{{ asset('images/docHero.png') }}"
            class="w-[300px] h-[300px] object-contain rounded-2xl shadow-md"
            alt="Document Hero">
    </div>
</section>


<!-- FEATURES -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6 md:px-12 grid gap-8 md:grid-cols-3">

        <div class="card">
            <i class="fa-solid fa-calendar-check icon"></i>
            <h3 class="font-semibold text-lg">Easy Booking</h3>
            <p class="text-gray-500 text-sm">Schedule visits quickly</p>
        </div>

        <div class="card">
            <i class="fa-solid fa-user-nurse icon"></i>
            <h3 class="font-semibold text-lg">Qualified Staff</h3>
            <p class="text-gray-500 text-sm">Experienced professionals</p>
        </div>

        <div class="card">
            <i class="fa-solid fa-headset icon"></i>
            <h3 class="font-semibold text-lg">24/7 Support</h3>
            <p class="text-gray-500 text-sm">Always here to help</p>
        </div>

    </div>
</section>


<!-- ABOUT -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6 md:px-12 flex flex-col lg:flex-row items-center gap-16">

        <img src="{{ asset('images/team.png') }}"
            class="w-full max-w-[500px] h-[350px] object-cover rounded-2xl shadow-sm">

        <div class="max-w-lg">
            <h2 class="text-3xl md:text-4xl font-semibold mb-6">About Home First</h2>

            <p class="text-gray-600 mb-6">
                For over 5 years, we’ve delivered personalised healthcare directly to patients’ homes, improving comfort and independence.
            </p>

            <button class="btn-primary">Learn More</button>
        </div>

    </div>
</section>


<!-- SERVICES -->
<section class="py-24 bg-blue-100">
    <div class="max-w-7xl mx-auto px-6 md:px-12">

        <h2 class="text-3xl md:text-4xl font-semibold text-center mb-16">Our Services</h2>

        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">

            <div class="card-2"><i class="fa-solid fa-running icon"></i>Physiotherapy</div>
            <div class="card-2"><i class="fa-solid fa-user-nurse icon"></i>Specialist Nursing</div>
            <div class="card-2"><i class="fa-solid fa-heart icon"></i>Well-being Support</div>
            <div class="card-2"><i class="fa-solid fa-clipboard icon"></i>Health Assessments</div>
            <div class="card-2"><i class="fa-solid fa-gears icon"></i>Equipment Support</div>
            <div class="card-2"><i class="fa-solid fa-house icon"></i>Home Assistance</div>

        </div>

    </div>
</section>


<!-- PROCESS -->
<section class="py-24 bg-white min-h-screen flex items-center justify-center">
    <div class="max-w-7xl mx-auto px-6 md:px-12 flex flex-col lg:flex-row items-center justify-center gap-12 lg:gap-48 w-full">

        <div class="space-y-6 max-w-md">

            <h2 class="text-3xl md:text-4xl font-semibold mb-6">Our Simple Process</h2>

            <div class="step">
                <span>1</span>
                <p>Request a visit online or by phone</p>
            </div>

            <div class="step">
                <span>2</span>
                <p>We assign the right healthcare professional</p>
            </div>

            <div class="step">
                <span>3</span>
                <p>Receive care at home</p>
            </div>

        </div>

        <img src="{{ asset('images/docStandingWithTablet.png') }}"
            class="w-full max-w-[450px] h-[520px] object-cover rounded-2xl shadow-sm">

    </div>
</section>


<!-- TESTIMONIALS -->
<section class="py-24 px-6 max-w-7xl mx-auto">
    <!-- Grid centered with even gaps -->
    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3 justify-items-center items-center">
        <div class="flex w-full p-4 max-w-lg flex-col rounded-lg bg-white shadow-sm border border-slate-200 my-6">
            <div class="flex items-center gap-4 text-slate-800">
                <img src="https://plus.unsplash.com/premium_photo-1690579805273-fd0c7b08035d?w=700&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8YXZhdGFyJTIwcHJvZmlsZSUyMHBpY3R1cmV8ZW58MHx8MHx8fDA%3D&amp;auto=format&amp;fit=crop&amp;w=1480&amp;q=80" alt="Tania Andrew" class="relative inline-block h-[58px] w-[58px] !rounded-full  object-cover object-center" />
                <div class="flex w-full flex-col">
                    <div class="flex items-center justify-between">
                        <h5 class="text-xl font-semibold text-slate-800">
                            Loraine Maine
                        </h5>
                        <div class="flex items-center gap-0 5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-yellow-600">
                                <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-yellow-600">
                                <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-yellow-600">
                                <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-yellow-600">
                                <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-yellow-600">
                                <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    <p class="text-xs uppercase font-bold text-slate-500 mt-0.5">
                        Attended Well-being support
                    </p>
                </div>
            </div>
            <div class="mt-6">
                <p class="text-base text-slate-600 font-light leading-normal">
                    &quot;Really patient and helpful they guided me through a tough time.&quot;
                </p>
            </div>
        </div>
            <div class="flex p-6 max-w-lg flex-col rounded-lg bg-white shadow-sm border border-slate-200 my-1">
            <div class="flex items-center gap-4 text-slate-800">
                <img src="https://images.unsplash.com/photo-1619895862022-09114b41f16f?w=700&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8V09NRU4lMjBwcm9maWxlJTIwcGljdHVyZXxlbnwwfHwwfHx8MA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1480&amp;q=80" alt="Tania Andrew" class="relative inline-block h-[58px] w-[58px] !rounded-full  object-cover object-center" />
                <div class="flex w-full flex-col">
                    <div class="flex items-center justify-between">
                        <h5 class="text-xl font-semibold text-slate-800">
                            Tania Andrew
                        </h5>
                        <div class="flex items-center gap-0 5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-yellow-600">
                                <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-yellow-600">
                                <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-yellow-600">
                                <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-yellow-600">
                                <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-yellow-600">
                                <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    <p class="text-xs uppercase font-bold text-slate-500 mt-0.5">
                        DEMENTIA CARE
                    </p>
                </div>
            </div>
            <div class="mt-6">
                <p class="text-base text-slate-600 font-light leading-normal">
                    &quot;My mother is well looked after and every staff interaction I have seen has been kind and respectful. The senior nurses are always helpful and knowledgeable about her care.&quot;
                </p>
            </div>
        </div>
            <div class="flex w-full p-4 max-w-lg flex-col rounded-lg bg-white shadow-sm border border-slate-200 my-6">
            <div class="flex items-center gap-4 text-slate-800">
                <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?fm=jpg&q=60&w=3000&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dXNlciUyMHByb2ZpbGV8ZW58MHx8MHx8fDA%3D&amp;auto=format&amp;fit=crop&amp;w=1480&amp;q=80" alt="Tania Andrew" class="relative inline-block h-[58px] w-[58px] !rounded-full  object-cover object-center" />
                <div class="flex w-full flex-col">
                    <div class="flex items-center justify-between">
                        <h5 class="text-xl font-semibold text-slate-800">
                            Michael Sanders
                        </h5>
                        <div class="flex items-center gap-0 5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-yellow-600">
                                <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-yellow-600">
                                <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-yellow-600">
                                <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-yellow-600">
                                <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-yellow-600">
                                <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    <p class="text-xs uppercase font-bold text-slate-500 mt-0.5">
                        ATTENDED PHYSIOLOGY
                    </p>
                </div>
            </div>
            <div class="mt-6">
                <p class="text-base text-slate-600 font-light leading-normal">
                    &quot;They helped me get back on my feet after a horrible accident. Forever thankful.&quot;
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="relative w-full overflow-visible pt-20">
    
    <div class="absolute bottom-0 left-0 w-full h-[55%] bg-[#E0FBFC] -z-10"></div>

    <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row items-end justify-between gap-12">
        
        <div class="md:w-1/3 flex justify-center items-end">
            <img src="{{ asset('images/docHelping.png') }}" alt="Home First Care" class="max-h-[500px] w-auto block object-contain transform translate-y-[1px]">
        </div>

        <!-- Text and Buttons -->
        <div class="md:w-2/3 text-center md:text-left pb-20 md:pb-32">
            <h2 class="text-3xl md:text-4xl font-bold text-[#1A365D] mb-10 leading-tight">
                Ready to experience care that puts you first?
            </h2>

            <div class="flex flex-wrap justify-center md:justify-start gap-6">
                <a href="{{ route('register') }}" class="bg-[#253237] text-white px-8 py-4 rounded-lg font-bold text-xs uppercase tracking-widest hover:bg-black transition shadow-lg">
                    Register as New Patient
                </a>
                <a href="{{ route('login') }}" class="bg-[#253237] text-white px-8 py-4 rounded-lg font-bold text-xs uppercase tracking-widest hover:bg-black transition shadow-lg">
                    Login to Your Portal
                </a>
            </div>
        </div>
    </div>
</section>

@endsection