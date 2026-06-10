<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 13 - 欢迎首页</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-br from-slate-900 to-slate-800 flex items-center justify-center min-h-screen text-white font-sans">
    <div class="max-w-md w-full mx-4 p-8 bg-white/10 backdrop-blur-md rounded-3xl border border-white/10 shadow-2xl text-center">
        <div class="mb-6">
            <span class="text-xs font-semibold tracking-widest uppercase px-3 py-1 bg-indigo-500/20 text-indigo-300 rounded-full">Laravel v13</span>
            <h1 class="text-4xl font-black mt-3 tracking-tight bg-clip-text text-transparent bg-gradient-to-r from-white to-slate-400">
                管理系统-ANXIN后台
            </h1>
        </div>
        <p class="text-slate-400 text-sm mb-8 leading-relaxed">
            <!-- 基于 Laravel Breeze 构建的轻量级用户身份验证中心。点击下方按钮进入系统。 -->
        </p>
        <div class="space-y-3.5">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="block w-full py-3 px-6 bg-gradient-to-r from-indigo-500 to-purple-600 hover:from-indigo-600 hover:to-purple-700 text-white font-medium rounded-xl shadow-lg shadow-indigo-500/20 transition duration-200 transform hover:-translate-y-0.5">
                        进入后台 (Dashboard)
                    </a>
                @else
                    <a href="{{ route('login') }}" class="block w-full py-3 px-6 bg-white hover:bg-slate-100 text-slate-950 font-semibold rounded-xl transition duration-200 transform hover:-translate-y-0.5">
                        立即登录 (Log In)
                    </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="block w-full py-3 px-6 bg-white/5 hover:bg-white/10 text-slate-300 hover:text-white font-medium rounded-xl border border-white/10 transition duration-200">
                            注册新账号 (Sign Up)
                        </a>
                    @endif
                @endauth
            @endif
        </div>
        <div class="mt-8 pt-6 border-t border-white/5 text-xs text-slate-500">
            PHP {{ PHP_VERSION }} &middot; Laravel v{{ App::version() }}
        </div>
    </div>
</body>
</html>