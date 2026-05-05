<div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6 font-[Funnel display,sans-serif]">
    
    <!-- SERVER OPERATIONS  -->
    <div class="md:col-span-2 bg-white p-8 rounded-2xl shadow-md border border-hf-sky">
        <h3 class="text-xs uppercase tracking-widest text-hf-steel font-bold mb-6">Server Operations Status</h3>
        <div class="space-y-4">
            <div class="flex justify-between items-center border-b border-gray-100 pb-3">
                <span class="text-hf-navy font-semibold">Patient Portal</span>
                <span class="flex items-center gap-2 px-3 py-1 rounded-full bg-green-100 text-green-700 text-[10px] font-black uppercase">
                    <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span> Running
                </span>
            </div>
            <div class="flex justify-between items-center border-b border-gray-100 pb-3">
                <span class="text-hf-navy font-semibold">Staff Portal</span>
                <span class="flex items-center gap-2 px-3 py-1 rounded-full bg-green-100 text-green-700 text-[10px] font-black uppercase">
                    <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span> Running
                </span>
            </div>
            <div class="flex justify-between items-center">
                <span class="text-hf-navy font-semibold">Main Database</span>
                <span class="flex items-center gap-2 px-3 py-1 rounded-full bg-green-100 text-green-700 text-[10px] font-black uppercase">
                    <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span> Running
                </span>
            </div>
        </div>
    </div>

    <!-- METRICS OF USERS AND STAFFS -->
    <div class="bg-white p-8 rounded-2xl shadow-md border border-hf-sky flex flex-col items-center justify-center text-center relative overflow-hidden">
        <!-- Subtle Funnel Shape Accent -->
        <div class="absolute -right-4 -top-4 w-16 h-16 bg-hf-sky/20 rounded-full"></div>
        <span class="text-xs uppercase tracking-widest text-hf-steel font-bold mb-4">Total User Count</span>
        <span class="text-5xl font-bold text-hf-navy">2,000</span>
        <p class="text-[10px] text-hf-sage font-bold mt-2">↑ 12% This Month</p>
    </div>

    <div class="bg-white p-8 rounded-2xl shadow-md border border-hf-sky flex flex-col items-center justify-center text-center relative overflow-hidden">
        <div class="absolute -right-4 -top-4 w-16 h-16 bg-hf-sky/20 rounded-full"></div>
        <span class="text-xs uppercase tracking-widest text-hf-steel font-bold mb-4">Total Staff Count</span>
        <span class="text-5xl font-bold text-hf-navy">25</span>
        <p class="text-[10px] text-hf-steel font-bold mt-2">All Active</p>
    </div>

    <!-- FAKE TICKETS  -->
    <div class="md:col-span-2 bg-white p-8 rounded-2xl shadow-md border border-hf-sky">
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-xs uppercase tracking-widest text-hf-steel font-bold">Admin Tickets</h3>
            <span class="text-[10px] bg-hf-navy text-white px-2 py-1 rounded font-bold">2 NEW</span>
        </div>
        <div class="space-y-6">
            <div class="group cursor-pointer p-4 hover:bg-hf-cyan rounded-xl transition border-l-4 border-hf-navy bg-gray-50">
                <h4 class="text-hf-navy font-bold text-sm leading-none">TICKET #214 NEW ACCOUNT</h4>
                <p class="text-xs text-hf-steel mt-2">Awaiting verification from Office Manager.</p>
            </div>
            <div class="group cursor-pointer p-4 hover:bg-hf-cyan rounded-xl transition border-l-4 border-hf-navy bg-gray-50">
                <h4 class="text-hf-navy font-bold text-sm leading-none">TICKET #213 ACCOUNT ISSUE</h4>
                <p class="text-xs text-hf-steel mt-2">Login failure reported by Staff Rep.</p>
            </div>
        </div>
    </div>

    <!-- MANAGE APPOINTMENTSS -->
    <div class="md:col-span-2 bg-white p-8 rounded-2xl shadow-md border border-hf-sky">
        <h3 class="text-xs uppercase tracking-widest text-hf-steel font-bold mb-6">Manage Appointments</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            
            <button class="sm:col-span-2 flex items-center justify-center gap-3 bg-[#253237] text-white p-4 rounded-2xl font-bold text-xs uppercase tracking-widest hover:bg-black transition shadow-lg">
                <div class="bg-white/10 p-2 rounded-lg group-hover:scale-110 transition">
                    <i class="fa-solid fa-calendar-plus text-lg"></i>
                </div>
                <span>Book Appointment</span>
            </button>
            
            <button class="sm:col-span-2 flex items-center justify-center gap-3 bg-[#253237] text-white p-4 rounded-2xl font-bold text-xs uppercase tracking-widest hover:bg-black transition shadow-lg">
                <div class="bg-white/10 p-2 rounded-lg group-hover:scale-110 transition">
                    <i class="fa-solid fa-calendar-check text-lg"></i>
                </div>
                <span>Edit Appointment</span>
            </button>

            <button class="sm:col-span-2 flex items-center justify-center gap-3 bg-[#253237] text-white p-4 rounded-2xl font-bold text-xs uppercase tracking-widest hover:bg-black transition shadow-lg">
                <div class="bg-white/10 p-2 rounded-lg group-hover:scale-110 transition">
                   <i class="fa-solid fa-list-check"></i>
                </div>
                <span>View All Clinic Appointments</span>
            </button>
        </div>
    </div>


</div>
