<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | Creators - Earn Money Online</title>
    <meta name="description" content="Join thousands of creators earning money by completing simple social media tasks. Get paid instantly for likes, follows, and subscriptions.">

    {{-- Tailwind via Vite (package-based, no CDN) --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        @keyframes gradient {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }
        @keyframes slideInLeft {
            from { opacity: 0; transform: translateX(-30px); }
            to { opacity: 1; transform: translateX(0); }
        }
        @keyframes slideInRight {
            from { opacity: 0; transform: translateX(30px); }
            to { opacity: 1; transform: translateX(0); }
        }
        @keyframes scaleIn {
            from { opacity: 0; transform: scale(0.9); }
            to { opacity: 1; transform: scale(1); }
        }
        .animate-float { animation: float 6s ease-in-out infinite; }
        .animate-gradient { 
            background-size: 200% 200%;
            animation: gradient 8s ease infinite;
        }
        .animate-slide-in-left { animation: slideInLeft 0.8s ease-out; }
        .animate-slide-in-right { animation: slideInRight 0.8s ease-out; }
        .animate-scale-in { animation: scaleIn 0.5s ease-out; }
        .glassmorphism {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .text-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .hover-lift {
            transition: all 0.3s ease;
        }
        .hover-lift:hover {
            transform: translateY(-8px);
        }
    </style>
</head>
<body class="bg-gray-50 overflow-x-hidden">

<!-- NAVBAR -->
<nav class="fixed w-full top-0 z-50 bg-white/80 backdrop-blur-lg border-b border-gray-200/50 shadow-sm">
    <div class="max-w-7xl mx-auto px-6 py-4">
        <div class="flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-600 to-indigo-600 rounded-xl blur opacity-75"></div>
                    <div class="relative w-12 h-12 bg-gradient-to-br from-blue-600 to-indigo-600 rounded-xl flex items-center justify-center shadow-lg">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                </div>
                <div>
                    <h1 class="text-2xl font-bold text-gradient">Creators</h1>
                    <p class="text-xs text-gray-500">Earn Online</p>
                </div>
            </div>

            <div class="hidden md:flex items-center space-x-8">
                <a href="#features" class="text-gray-600 hover:text-indigo-600 font-medium transition-colors relative group">
                    Features
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-indigo-600 transition-all group-hover:w-full"></span>
                </a>
                <a href="#how-it-works" class="text-gray-600 hover:text-indigo-600 font-medium transition-colors relative group">
                    How It Works
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-indigo-600 transition-all group-hover:w-full"></span>
                </a>
                <a href="#testimonials" class="text-gray-600 hover:text-indigo-600 font-medium transition-colors relative group">
                    Testimonials
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-indigo-600 transition-all group-hover:w-full"></span>
                </a>
            </div>

            <div class="flex items-center space-x-4">
                <a href="{{ route('login') }}"
                   class="hidden sm:block text-gray-700 hover:text-indigo-600 font-semibold transition-colors">
                    Login
                </a>
                <a href="{{ route('register.create') }}"
                   class="relative group overflow-hidden bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-6 py-2.5 rounded-xl font-semibold shadow-lg hover:shadow-xl transition-all">
                    <span class="relative z-10">Get Started</span>
                    <div class="absolute inset-0 bg-gradient-to-r from-indigo-600 to-purple-600 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                </a>
            </div>
        </div>
    </div>
</nav>


<!-- HERO -->
<section class="relative min-h-screen flex items-center bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100 pt-24 pb-20 overflow-hidden">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-20 left-10 w-72 h-72 bg-blue-400/30 rounded-full blur-3xl animate-float"></div>
        <div class="absolute top-40 right-20 w-96 h-96 bg-indigo-400/20 rounded-full blur-3xl animate-float" style="animation-delay: 1s;"></div>
        <div class="absolute bottom-20 left-1/3 w-80 h-80 bg-purple-400/20 rounded-full blur-3xl animate-float" style="animation-delay: 2s;"></div>
        
        <!-- Grid Pattern -->
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#80808012_1px,transparent_1px),linear-gradient(to_bottom,#80808012_1px,transparent_1px)] bg-[size:24px_24px]"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 relative z-10 w-full">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Left Content -->
            <div class="animate-slide-in-left">
                <div class="inline-flex items-center space-x-2 bg-white/60 backdrop-blur-sm px-5 py-2.5 rounded-full mb-8 border border-white/40 shadow-lg">
                    <span class="relative flex h-3 w-3">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
                    </span>
                    <span class="text-sm font-semibold text-gray-700">🚀 10,000+ Active Users Earning Daily</span>
                </div>

                <h1 class="text-5xl lg:text-7xl font-extrabold mb-6 leading-tight">
                    <span class="text-gray-900">Earn Money</span>
                    <br>
                    <span class="text-gradient">Doing What</span>
                    <br>
                    <span class="text-gray-900">You Love</span>
                </h1>

                <p class="text-xl text-gray-600 mb-8 leading-relaxed max-w-xl">
                    Complete simple social media tasks and get paid instantly. No investment, no hidden fees, just pure earnings. Join the revolution! 💰
                </p>

                <div class="flex flex-wrap gap-4 mb-10">
                    <a href="{{ route('register.create') }}"
                       class="group relative inline-flex items-center gap-2 bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 text-white px-8 py-4 rounded-2xl font-bold text-lg shadow-2xl hover:shadow-indigo-500/50 transition-all animate-gradient overflow-hidden">
                        <span class="relative z-10">Start Earning Now</span>
                        <svg class="w-5 h-5 relative z-10 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>

                    <a href="{{ route('login') }}"
                       class="inline-flex items-center gap-2 bg-white text-gray-700 px-8 py-4 rounded-2xl font-semibold text-lg shadow-lg hover:shadow-xl border-2 border-gray-200 hover:border-indigo-300 transition-all">
                        <span>I Have Account</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                        </svg>
                    </a>
                </div>

                <!-- Trust Indicators -->
                <div class="flex flex-wrap items-center gap-6">
                    <div class="flex items-center space-x-2">
                        <div class="flex -space-x-2">
                            <div class="w-10 h-10 rounded-full bg-gradient-to-br from-blue-400 to-blue-600 border-2 border-white"></div>
                            <div class="w-10 h-10 rounded-full bg-gradient-to-br from-purple-400 to-purple-600 border-2 border-white"></div>
                            <div class="w-10 h-10 rounded-full bg-gradient-to-br from-pink-400 to-pink-600 border-2 border-white"></div>
                            <div class="w-10 h-10 rounded-full bg-gradient-to-br from-green-400 to-green-600 border-2 border-white"></div>
                        </div>
                        <div class="text-sm">
                            <div class="font-bold text-gray-900">10K+ Users</div>
                            <div class="text-gray-600">Trust us daily</div>
                        </div>
                    </div>
                    <div class="h-12 w-px bg-gray-300"></div>
                    <div class="text-sm">
                        <div class="flex items-center gap-1 mb-1">
                            <span class="text-yellow-500">★★★★★</span>
                            <span class="font-bold text-gray-900">4.8/5</span>
                        </div>
                        <div class="text-gray-600">User Ratings</div>
                    </div>
                </div>
            </div>

            <!-- Right Visual -->
            <div class="hidden lg:block animate-slide-in-right">
                <div class="relative">
                    <!-- Main Card -->
                    <div class="relative z-10 bg-white/70 backdrop-blur-xl rounded-3xl p-8 shadow-2xl border border-white/50">
                        <div class="space-y-6">
                            <!-- Earnings Card -->
                            <div class="bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl p-6 text-white shadow-xl transform hover:scale-105 transition-transform">
                                <div class="flex justify-between items-start mb-4">
                                    <div>
                                        <p class="text-green-100 text-sm mb-1">Total Earnings</p>
                                        <p class="text-4xl font-bold">₹24,500</p>
                                    </div>
                                    <div class="bg-white/20 p-3 rounded-xl">
                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"/>
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2 text-sm">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>+₹2,500 this week</span>
                                </div>
                            </div>

                            <!-- Active Tasks -->
                            <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100">
                                <div class="flex justify-between items-center mb-4">
                                    <h3 class="font-bold text-gray-900">Active Tasks</h3>
                                    <span class="bg-blue-100 text-blue-600 text-xs font-semibold px-3 py-1 rounded-full">5 Available</span>
                                </div>
                                <div class="space-y-3">
                                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors">
                                        <div class="flex items-center gap-3">
                                            <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg flex items-center justify-center text-white">
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073z"/></svg>
                                            </div>
                                            <div>
                                                <p class="font-semibold text-sm text-gray-900">Instagram Follow</p>
                                                <p class="text-xs text-gray-500">2 min task</p>
                                            </div>
                                        </div>
                                        <span class="font-bold text-green-600">₹15</span>
                                    </div>
                                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors">
                                        <div class="flex items-center gap-3">
                                            <div class="w-10 h-10 bg-gradient-to-br from-red-500 to-red-600 rounded-lg flex items-center justify-center text-white">
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                                            </div>
                                            <div>
                                                <p class="font-semibold text-sm text-gray-900">YouTube Subscribe</p>
                                                <p class="text-xs text-gray-500">3 min task</p>
                                            </div>
                                        </div>
                                        <span class="font-bold text-green-600">₹25</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Elements -->
                    <div class="absolute -top-6 -right-6 bg-yellow-400 text-yellow-900 px-4 py-2 rounded-xl font-bold shadow-lg animate-float">
                        ⚡ Fast Payments
                    </div>
                    <div class="absolute -bottom-6 -left-6 bg-purple-500 text-white px-4 py-2 rounded-xl font-bold shadow-lg animate-float" style="animation-delay: 1.5s;">
                        ✅ Trusted Platform
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- STATS -->
<section class="relative bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 py-16 overflow-hidden">
    <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGQ9Ik0zNiAxOGMzLjMxNCAwIDYgMi42ODYgNiA2cy0yLjY4NiA2LTYgNi02LTIuNjg2LTYtNiAyLjY4Ni02IDYtNnoiIHN0cm9rZT0iI2ZmZiIgc3Ryb2tlLW9wYWNpdHk9Ii4xIi8+PC9nPjwvc3ZnPg==')] opacity-20"></div>
    
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <div class="group">
                <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-6 text-center border border-white/20 hover:bg-white/20 transition-all hover-lift">
                    <div class="text-5xl font-black text-white mb-2 group-hover:scale-110 transition-transform">10K+</div>
                    <div class="text-white/80 font-medium">Active Users</div>
                    <div class="h-1 w-12 bg-yellow-400 rounded-full mx-auto mt-3"></div>
                </div>
            </div>
            <div class="group">
                <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-6 text-center border border-white/20 hover:bg-white/20 transition-all hover-lift">
                    <div class="text-5xl font-black text-white mb-2 group-hover:scale-110 transition-transform">₹50L+</div>
                    <div class="text-white/80 font-medium">Paid Out</div>
                    <div class="h-1 w-12 bg-green-400 rounded-full mx-auto mt-3"></div>
                </div>
            </div>
            <div class="group">
                <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-6 text-center border border-white/20 hover:bg-white/20 transition-all hover-lift">
                    <div class="text-5xl font-black text-white mb-2 group-hover:scale-110 transition-transform">5K+</div>
                    <div class="text-white/80 font-medium">Daily Tasks</div>
                    <div class="h-1 w-12 bg-blue-400 rounded-full mx-auto mt-3"></div>
                </div>
            </div>
            <div class="group">
                <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-6 text-center border border-white/20 hover:bg-white/20 transition-all hover-lift">
                    <div class="flex items-center justify-center gap-1 text-5xl font-black text-white mb-2 group-hover:scale-110 transition-transform">
                        4.8<span class="text-yellow-300 text-4xl">★</span>
                    </div>
                    <div class="text-white/80 font-medium">User Rating</div>
                    <div class="h-1 w-12 bg-pink-400 rounded-full mx-auto mt-3"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FEATURES -->
<section id="features" class="max-w-7xl mx-auto px-6 py-24">
    <div class="text-center mb-20">
        <div class="inline-block bg-gradient-to-r from-blue-100 to-indigo-100 px-6 py-2 rounded-full mb-6">
            <span class="text-indigo-600 font-bold">✨ FEATURES</span>
        </div>
        <h2 class="text-5xl md:text-6xl font-black mb-6">
            <span class="text-gray-900">Why Choose</span>
            <span class="text-gradient"> Creators?</span>
        </h2>
        <p class="text-xl text-gray-600 max-w-2xl mx-auto">Everything you need to start earning online and achieve financial freedom</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="group relative bg-gradient-to-br from-blue-50 to-indigo-50 p-8 rounded-3xl hover:shadow-2xl transition-all hover-lift border-2 border-transparent hover:border-blue-200 overflow-hidden">
            <div class="absolute top-0 right-0 w-32 h-32 bg-blue-200 rounded-full blur-3xl opacity-0 group-hover:opacity-50 transition-opacity"></div>
            <div class="relative z-10">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="font-black text-xl mb-3 text-gray-900">Easy Tasks</h3>
                <p class="text-gray-600 leading-relaxed">
                    Simple social media tasks that anyone can complete. No special skills required.
                </p>
            </div>
        </div>

        <div class="group relative bg-gradient-to-br from-green-50 to-emerald-50 p-8 rounded-3xl hover:shadow-2xl transition-all hover-lift border-2 border-transparent hover:border-green-200 overflow-hidden">
            <div class="absolute top-0 right-0 w-32 h-32 bg-green-200 rounded-full blur-3xl opacity-0 group-hover:opacity-50 transition-opacity"></div>
            <div class="relative z-10">
                <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="font-black text-xl mb-3 text-gray-900">Instant Payments</h3>
                <p class="text-gray-600 leading-relaxed">
                    Withdraw your earnings instantly via UPI, PayTM, or bank transfer. No delays.
                </p>
            </div>
        </div>

        <div class="group relative bg-gradient-to-br from-purple-50 to-pink-50 p-8 rounded-3xl hover:shadow-2xl transition-all hover-lift border-2 border-transparent hover:border-purple-200 overflow-hidden">
            <div class="absolute top-0 right-0 w-32 h-32 bg-purple-200 rounded-full blur-3xl opacity-0 group-hover:opacity-50 transition-opacity"></div>
            <div class="relative z-10">
                <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <h3 class="font-black text-xl mb-3 text-gray-900">Trusted Platform</h3>
                <p class="text-gray-600 leading-relaxed">
                    Join thousands of satisfied users earning daily. 100% secure and reliable.
                </p>
            </div>
        </div>

        <div class="group relative bg-gradient-to-br from-yellow-50 to-orange-50 p-8 rounded-3xl hover:shadow-2xl transition-all hover-lift border-2 border-transparent hover:border-yellow-200 overflow-hidden">
            <div class="absolute top-0 right-0 w-32 h-32 bg-yellow-200 rounded-full blur-3xl opacity-0 group-hover:opacity-50 transition-opacity"></div>
            <div class="relative z-10">
                <div class="w-16 h-16 bg-gradient-to-br from-yellow-500 to-orange-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h3 class="font-black text-xl mb-3 text-gray-900">Quick Start</h3>
                <p class="text-gray-600 leading-relaxed">
                    Register in seconds and start earning immediately. No waiting period.
                </p>
            </div>
        </div>

        <div class="group relative bg-gradient-to-br from-red-50 to-rose-50 p-8 rounded-3xl hover:shadow-2xl transition-all hover-lift border-2 border-transparent hover:border-red-200 overflow-hidden">
            <div class="absolute top-0 right-0 w-32 h-32 bg-red-200 rounded-full blur-3xl opacity-0 group-hover:opacity-50 transition-opacity"></div>
            <div class="relative z-10">
                <div class="w-16 h-16 bg-gradient-to-br from-red-500 to-rose-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <h3 class="font-black text-xl mb-3 text-gray-900">24/7 Support</h3>
                <p class="text-gray-600 leading-relaxed">
                    Our dedicated support team is always here to help you succeed.
                </p>
            </div>
        </div>

        <div class="group relative bg-gradient-to-br from-indigo-50 to-blue-50 p-8 rounded-3xl hover:shadow-2xl transition-all hover-lift border-2 border-transparent hover:border-indigo-200 overflow-hidden">
            <div class="absolute top-0 right-0 w-32 h-32 bg-indigo-200 rounded-full blur-3xl opacity-0 group-hover:opacity-50 transition-opacity"></div>
            <div class="relative z-10">
                <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-blue-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/>
                    </svg>
                </div>
                <h3 class="font-black text-xl mb-3 text-gray-900">Multiple Platforms</h3>
                <p class="text-gray-600 leading-relaxed">
                    Tasks available for Instagram, YouTube, Facebook, Twitter, and more.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- HOW IT WORKS -->
<section id="how-it-works" class="relative bg-gradient-to-br from-gray-50 via-white to-blue-50 py-24 overflow-hidden">
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#4f46e520_1px,transparent_1px),linear-gradient(to_bottom,#4f46e520_1px,transparent_1px)] bg-[size:40px_40px]"></div>
    
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="text-center mb-20">
            <div class="inline-block bg-gradient-to-r from-purple-100 to-pink-100 px-6 py-2 rounded-full mb-6">
                <span class="text-purple-600 font-bold">⚙️ HOW IT WORKS</span>
            </div>
            <h2 class="text-5xl md:text-6xl font-black mb-6">
                <span class="text-gray-900">Start Earning in</span>
                <span class="text-gradient"> 4 Simple Steps</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">From registration to earnings in just minutes</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 relative">
            <!-- Connection Lines -->
            <div class="hidden md:block absolute top-20 left-0 right-0 h-1 bg-gradient-to-r from-blue-200 via-indigo-200 to-purple-200"></div>
            
            <!-- Step 1 -->
            <div class="relative animate-scale-in">
                <div class="bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all hover-lift border-2 border-gray-100">
                    <div class="absolute -top-6 left-1/2 transform -translate-x-1/2">
                        <div class="relative">
                            <div class="absolute inset-0 bg-gradient-to-br from-blue-600 to-indigo-600 rounded-2xl blur opacity-50"></div>
                            <div class="relative w-14 h-14 bg-gradient-to-br from-blue-600 to-indigo-600 rounded-2xl flex items-center justify-center text-white text-2xl font-black shadow-lg">
                                1
                            </div>
                        </div>
                    </div>
                    <div class="text-6xl mb-6 text-center mt-4">📝</div>
                    <h4 class="font-black text-xl mb-3 text-center">Register</h4>
                    <p class="text-gray-600 text-center">
                        Create your free account in less than 60 seconds using email or phone
                    </p>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="relative animate-scale-in" style="animation-delay: 0.1s;">
                <div class="bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all hover-lift border-2 border-gray-100">
                    <div class="absolute -top-6 left-1/2 transform -translate-x-1/2">
                        <div class="relative">
                            <div class="absolute inset-0 bg-gradient-to-br from-indigo-600 to-purple-600 rounded-2xl blur opacity-50"></div>
                            <div class="relative w-14 h-14 bg-gradient-to-br from-indigo-600 to-purple-600 rounded-2xl flex items-center justify-center text-white text-2xl font-black shadow-lg">
                                2
                            </div>
                        </div>
                    </div>
                    <div class="text-6xl mb-6 text-center mt-4">📋</div>
                    <h4 class="font-black text-xl mb-3 text-center">Choose Task</h4>
                    <p class="text-gray-600 text-center">
                        Browse hundreds of tasks and select ones that match your interests
                    </p>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="relative animate-scale-in" style="animation-delay: 0.2s;">
                <div class="bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all hover-lift border-2 border-gray-100">
                    <div class="absolute -top-6 left-1/2 transform -translate-x-1/2">
                        <div class="relative">
                            <div class="absolute inset-0 bg-gradient-to-br from-purple-600 to-pink-600 rounded-2xl blur opacity-50"></div>
                            <div class="relative w-14 h-14 bg-gradient-to-br from-purple-600 to-pink-600 rounded-2xl flex items-center justify-center text-white text-2xl font-black shadow-lg">
                                3
                            </div>
                        </div>
                    </div>
                    <div class="text-6xl mb-6 text-center mt-4">✅</div>
                    <h4 class="font-black text-xl mb-3 text-center">Complete</h4>
                    <p class="text-gray-600 text-center">
                        Follow simple instructions and submit proof of completion
                    </p>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="relative animate-scale-in" style="animation-delay: 0.3s;">
                <div class="bg-gradient-to-br from-green-500 to-emerald-600 text-white rounded-3xl p-8 shadow-2xl transform hover:scale-105 transition-all border-2 border-green-400">
                    <div class="absolute -top-6 left-1/2 transform -translate-x-1/2">
                        <div class="relative">
                            <div class="absolute inset-0 bg-white rounded-2xl blur opacity-50"></div>
                            <div class="relative w-14 h-14 bg-white rounded-2xl flex items-center justify-center text-green-600 text-2xl font-black shadow-lg">
                                4
                            </div>
                        </div>
                    </div>
                    <div class="text-6xl mb-6 text-center mt-4">💸</div>
                    <h4 class="font-black text-xl mb-3 text-center">Earn Money</h4>
                    <p class="text-white/90 text-center">
                        Get paid instantly to your wallet. Withdraw anytime!
                    </p>
                </div>
            </div>
        </div>

        <!-- CTA in How It Works -->
        <div class="text-center mt-16">
            <a href="{{ route('register.create') }}"
               class="inline-flex items-center gap-3 bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-10 py-5 rounded-2xl font-bold text-lg shadow-2xl hover:shadow-indigo-500/50 transition-all hover:scale-105">
                <span>Get Started Now</span>
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- TESTIMONIALS -->
<section id="testimonials" class="max-w-7xl mx-auto px-6 py-24">
    <div class="text-center mb-20">
        <div class="inline-block bg-gradient-to-r from-green-100 to-emerald-100 px-6 py-2 rounded-full mb-6">
            <span class="text-green-600 font-bold">💬 TESTIMONIALS</span>
        </div>
        <h2 class="text-5xl md:text-6xl font-black mb-6">
            <span class="text-gray-900">Our Users</span>
            <span class="text-gradient"> Love Us!</span>
        </h2>
        <p class="text-xl text-gray-600 max-w-2xl mx-auto">Real stories from real earners who changed their lives</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="group bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all hover-lift border-2 border-gray-100">
            <div class="flex items-center mb-6">
                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-400 to-indigo-500 rounded-2xl blur opacity-50"></div>
                    <div class="relative w-16 h-16 bg-gradient-to-br from-blue-400 to-indigo-500 rounded-2xl flex items-center justify-center text-white font-black text-xl shadow-lg">
                        RK
                    </div>
                </div>
                <div class="ml-4">
                    <div class="font-black text-lg">Rahul Kumar</div>
                    <div class="text-sm text-gray-500">📍 Delhi, India</div>
                </div>
            </div>
            <div class="flex mb-4 text-2xl">
                <span class="text-yellow-400">★★★★★</span>
            </div>
            <p class="text-gray-600 leading-relaxed italic">
                "I've earned over ₹15,000 in just 2 months! The tasks are super easy and payments are always on time. Best platform ever!"
            </p>
            <div class="mt-6 pt-6 border-t border-gray-200">
                <div class="flex items-center justify-between text-sm">
                    <span class="text-gray-500">Total Earned</span>
                    <span class="font-black text-green-600">₹15,000+</span>
                </div>
            </div>
        </div>

        <div class="group bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all hover-lift border-2 border-gray-100">
            <div class="flex items-center mb-6">
                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-purple-400 to-pink-500 rounded-2xl blur opacity-50"></div>
                    <div class="relative w-16 h-16 bg-gradient-to-br from-purple-400 to-pink-500 rounded-2xl flex items-center justify-center text-white font-black text-xl shadow-lg">
                        PS
                    </div>
                </div>
                <div class="ml-4">
                    <div class="font-black text-lg">Priya Sharma</div>
                    <div class="text-sm text-gray-500">📍 Mumbai, India</div>
                </div>
            </div>
            <div class="flex mb-4 text-2xl">
                <span class="text-yellow-400">★★★★★</span>
            </div>
            <p class="text-gray-600 leading-relaxed italic">
                "As a student, this is perfect for pocket money. I complete tasks during my free time and earn consistently every day."
            </p>
            <div class="mt-6 pt-6 border-t border-gray-200">
                <div class="flex items-center justify-between text-sm">
                    <span class="text-gray-500">Total Earned</span>
                    <span class="font-black text-green-600">₹8,500+</span>
                </div>
            </div>
        </div>

        <div class="group bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all hover-lift border-2 border-gray-100">
            <div class="flex items-center mb-6">
                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-green-400 to-emerald-500 rounded-2xl blur opacity-50"></div>
                    <div class="relative w-16 h-16 bg-gradient-to-br from-green-400 to-emerald-500 rounded-2xl flex items-center justify-center text-white font-black text-xl shadow-lg">
                        AV
                    </div>
                </div>
                <div class="ml-4">
                    <div class="font-black text-lg">Amit Verma</div>
                    <div class="text-sm text-gray-500">📍 Bangalore, India</div>
                </div>
            </div>
            <div class="flex mb-4 text-2xl">
                <span class="text-yellow-400">★★★★★</span>
            </div>
            <p class="text-gray-600 leading-relaxed italic">
                "Instant withdrawals and genuine tasks. I was skeptical at first but this platform exceeded my expectations. Highly recommended!"
            </p>
            <div class="mt-6 pt-6 border-t border-gray-200">
                <div class="flex items-center justify-between text-sm">
                    <span class="text-gray-500">Total Earned</span>
                    <span class="font-black text-green-600">₹12,300+</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="relative bg-gradient-to-br from-blue-600 via-indigo-600 to-purple-700 py-24 overflow-hidden">
    <!-- Animated Background -->
    <div class="absolute inset-0">
        <div class="absolute top-10 left-10 w-96 h-96 bg-white/10 rounded-full blur-3xl animate-float"></div>
        <div class="absolute bottom-10 right-10 w-80 h-80 bg-white/10 rounded-full blur-3xl animate-float" style="animation-delay: 1s;"></div>
    </div>

    <div class="max-w-5xl mx-auto px-6 text-center relative z-10">
        <div class="inline-block bg-white/20 backdrop-blur-sm px-6 py-2 rounded-full mb-8">
            <span class="text-white font-bold text-sm">🎉 Limited Time Offer</span>
        </div>
        
        <h2 class="text-4xl md:text-6xl font-black text-white mb-6 leading-tight">
            Ready to Start Your
            <br>
            <span class="text-yellow-300">Earning Journey?</span>
        </h2>
        
        <p class="text-xl md:text-2xl text-white/90 mb-10 max-w-3xl mx-auto leading-relaxed">
            Join thousands of users who are already earning daily. No investment required. Start today and get a ₹50 signup bonus!
        </p>
        
        <div class="flex flex-col sm:flex-row gap-4 justify-center mb-10">
            <a href="{{ route('register.create') }}"
               class="group relative inline-flex items-center justify-center gap-3 bg-white text-indigo-600 px-10 py-5 rounded-2xl font-black text-lg shadow-2xl hover:shadow-white/50 transition-all hover:scale-105 overflow-hidden">
                <span class="relative z-10">Create Free Account</span>
                <svg class="w-6 h-6 relative z-10 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                </svg>
            </a>
            
            <a href="{{ route('login') }}"
               class="inline-flex items-center justify-center gap-3 bg-white/10 backdrop-blur-sm text-white border-2 border-white/30 px-10 py-5 rounded-2xl font-bold text-lg hover:bg-white/20 transition-all">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                </svg>
                <span>Login</span>
            </a>
        </div>
        
        <p class="text-white/70 text-sm">
            Already have an account? <a href="{{ route('login') }}" class="underline font-semibold hover:text-white transition-colors">Login here</a>
        </p>

        <!-- Trust Badges -->
        <div class="flex flex-wrap justify-center items-center gap-8 mt-12 pt-10 border-t border-white/20">
            <div class="text-white/80 text-sm flex items-center gap-2">
                <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                <span class="font-semibold">100% Secure</span>
            </div>
            <div class="text-white/80 text-sm flex items-center gap-2">
                <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                <span class="font-semibold">No Hidden Fees</span>
            </div>
            <div class="text-white/80 text-sm flex items-center gap-2">
                <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                <span class="font-semibold">24/7 Support</span>
            </div>
            <div class="text-white/80 text-sm flex items-center gap-2">
                <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                <span class="font-semibold">Instant Withdrawals</span>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="bg-gradient-to-br from-gray-900 via-gray-900 to-black text-white">
    <div class="max-w-7xl mx-auto px-6 py-16">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
            <!-- Brand -->
            <div class="md:col-span-1">
                <div class="flex items-center space-x-3 mb-6">
                    <div class="relative">
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-600 to-indigo-600 rounded-xl blur opacity-75"></div>
                        <div class="relative w-12 h-12 bg-gradient-to-br from-blue-600 to-indigo-600 rounded-xl flex items-center justify-center shadow-lg">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-2xl font-black text-gradient">Creators</h3>
                        <p class="text-xs text-gray-400">Earn Online</p>
                    </div>
                </div>
                <p class="text-gray-400 text-sm leading-relaxed mb-6">
                    Earn money online by completing simple social media tasks. Join thousands of satisfied users today.
                </p>
                <div class="flex space-x-3">
                    <a href="#" class="w-10 h-10 bg-gray-800 rounded-xl flex items-center justify-center hover:bg-blue-600 transition-all hover-lift group">
                        <svg class="w-5 h-5 text-gray-400 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                    </a>
                    <a href="#" class="w-10 h-10 bg-gray-800 rounded-xl flex items-center justify-center hover:bg-blue-600 transition-all hover-lift group">
                        <svg class="w-5 h-5 text-gray-400 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg>
                    </a>
                    <a href="#" class="w-10 h-10 bg-gray-800 rounded-xl flex items-center justify-center hover:bg-pink-600 transition-all hover-lift group">
                        <svg class="w-5 h-5 text-gray-400 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </a>
                    <a href="#" class="w-10 h-10 bg-gray-800 rounded-xl flex items-center justify-center hover:bg-red-600 transition-all hover-lift group">
                        <svg class="w-5 h-5 text-gray-400 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="font-black text-lg mb-6">Quick Links</h4>
                <ul class="space-y-3 text-sm">
                    <li><a href="#features" class="text-gray-400 hover:text-white transition-colors flex items-center gap-2 group">
                        <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        Features
                    </a></li>
                    <li><a href="#how-it-works" class="text-gray-400 hover:text-white transition-colors flex items-center gap-2 group">
                        <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        How It Works
                    </a></li>
                    <li><a href="#testimonials" class="text-gray-400 hover:text-white transition-colors flex items-center gap-2 group">
                        <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        Testimonials
                    </a></li>
                    <li><a href="{{ route('register.create') }}" class="text-gray-400 hover:text-white transition-colors flex items-center gap-2 group">
                        <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        Get Started
                    </a></li>
                </ul>
            </div>

            <!-- Legal -->
            <div>
                <h4 class="font-black text-lg mb-6">Legal</h4>
                <ul class="space-y-3 text-sm">
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors flex items-center gap-2 group">
                        <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        Terms of Service
                    </a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors flex items-center gap-2 group">
                        <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        Privacy Policy
                    </a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors flex items-center gap-2 group">
                        <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        Refund Policy
                    </a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors flex items-center gap-2 group">
                        <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        Contact Us
                    </a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h4 class="font-black text-lg mb-6">Contact Us</h4>
                <ul class="space-y-4 text-sm">
                    <li class="flex items-start gap-3 text-gray-400">
                        <svg class="w-5 h-5 text-blue-500 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <span>support@creators.com</span>
                    </li>
                    <li class="flex items-start gap-3 text-gray-400">
                        <svg class="w-5 h-5 text-green-500 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <span>+91 9876543210</span>
                    </li>
                    <li class="flex items-start gap-3 text-gray-400">
                        <svg class="w-5 h-5 text-red-500 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span>Mumbai, India</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="border-t border-gray-800 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-gray-400">
                <p>© 2026 <span class="font-bold text-white">Creators Platform</span>. All Rights Reserved.</p>
                <p class="flex items-center gap-2">
                    Made with <span class="text-red-500 text-xl animate-pulse">❤️</span> in India
                </p>
            </div>
        </div>
    </div>
</footer>

</body>
</html>