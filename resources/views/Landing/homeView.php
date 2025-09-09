<section
    class="hero bg-gradient-to-br from-[#f8fafc] via-[#eef3fb] to-[#e0eaf8] py-20 h-[88vh] flex items-center justify-center relative overflow-hidden">
    <!-- Fondo decorativo -->
    <div
        class="absolute top-0 left-0 w-40 h-40 bg-[#14519A]/10 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2">
    </div>
    <div
        class="absolute bottom-0 right-0 w-52 h-52 bg-[#FFDE60]/20 rounded-full blur-3xl translate-x-1/3 translate-y-1/3">
    </div>

    <!-- Contenido -->
    <div class="text-center max-w-3xl px-6 relative z-10 animate-fadeUp">
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-[#14519A] leading-tight">
            Bienvenido <span class="text-[#95A557]">Administrador</span>
        </h1>
        <p class="mt-6 text-lg sm:text-xl text-gray-600 leading-relaxed">
            Administra productos, usuarios y categorías de tu tienda de forma <br class="hidden sm:block">
            <span class="text-[#14519A] font-semibold">simple, rápida y profesional.</span>
        </p>
        <a href="#Servicios"
            class="inline-flex items-center gap-2 mt-8 px-8 py-3 rounded-2xl bg-gradient-to-r from-[#14519A] to-[#1e61c9] text-white font-semibold text-lg shadow-md hover:shadow-xl hover:scale-105 transition-all">
            <i class="fa-solid fa-play"></i> Empezar ahora
        </a>
    </div>
</section>

<section class="text-center py-16 px-6 bg-[#f9fafc]">
    <h2 class="text-3xl sm:text-4xl font-extrabold text-[#14519A]">
        Nuestros Servicios
    </h2>
    <p class="mt-4 text-gray-600 max-w-2xl mx-auto text-lg">
        Accede a las principales funciones del sistema y gestiona tu tienda con herramientas modernas y fáciles de usar.
    </p>
</section>

<section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 mx-auto w-full max-w-[1200px] py-12 px-6">
    <!-- Card -->
    <div
        class="card backdrop-blur-xl bg-white/90 shadow-xl hover:shadow-2xl rounded-2xl border border-[#14519A]/10 transition-all duration-500 hover:-translate-y-2 animate-fadeUp">
        <div class="card-body space-y-4 p-8">
            <div class="flex items-center space-x-4">
                <div
                    class="flex items-center justify-center w-16 h-16 rounded-2xl bg-gradient-to-br from-[#14519A]/10 to-[#FFDE60]/30 text-[#14519A]">
                    <i class="fa-solid fa-box-open text-2xl"></i>
                </div>
                <h2 class="text-2xl font-bold text-[#14519A]">Productos</h2>
            </div>
            <p class="text-gray-600 leading-relaxed">
                Gestiona todo el inventario de productos y accede a sus detalles fácilmente.
            </p>
            <div class="card-actions">
                <a href="/productos"
                    class="btn w-full rounded-xl text-white bg-[#14519A] hover:bg-[#0f3a70] hover:scale-105 transition">
                    <i class="fa-solid fa-eye mr-2"></i> Ver Productos
                </a>
            </div>
        </div>
    </div>

    <!-- Card -->
    <div
        class="card backdrop-blur-xl bg-white/90 shadow-xl hover:shadow-2xl rounded-2xl border border-[#14519A]/10 transition-all duration-500 hover:-translate-y-2 animate-fadeUp [animation-delay:200ms]">
        <div class="card-body space-y-4 p-8">
            <div class="flex items-center space-x-4">
                <div
                    class="flex items-center justify-center w-16 h-16 rounded-2xl bg-gradient-to-br from-[#14519A]/10 to-[#FFDE60]/30 text-[#14519A]">
                    <i class="fa-solid fa-layer-group text-2xl"></i>
                </div>
                <h2 class="text-2xl font-bold text-[#14519A]">Categorías</h2>
            </div>
            <p class="text-gray-600 leading-relaxed">
                Administra las categorías de productos, asigna productos a categorías y gestiona su visibilidad.
            </p>
            <div class="card-actions">
                <a href="/categorias"
                    class="btn w-full rounded-xl text-white bg-[#14519A] hover:bg-[#0f3a70] hover:scale-105 transition">
                    <i class="fa-solid fa-layer-group mr-2"></i> Ver Categorías
                </a>
            </div>
        </div>
    </div>

    <!-- Card -->
    <div
        class="card backdrop-blur-xl bg-white/90 shadow-xl hover:shadow-2xl rounded-2xl border border-[#14519A]/10 transition-all duration-500 hover:-translate-y-2 animate-fadeUp [animation-delay:400ms]">
        <div class="card-body space-y-4 p-8">
            <div class="flex items-center space-x-4">
                <div
                    class="flex items-center justify-center w-16 h-16 rounded-2xl bg-gradient-to-br from-[#14519A]/10 to-[#FFDE60]/30 text-[#14519A]">
                    <i class="fa-solid fa-chart-line text-2xl"></i>
                </div>
                <h2 class="text-2xl font-bold text-[#14519A]">Reportes</h2>
            </div>
            <p class="text-gray-600 leading-relaxed">
                Genera reportes detallados sobre el rendimiento de tu tienda y productos.
            </p>
            <div class="card-actions">
                <a href="/reportes"
                    class="btn w-full rounded-xl text-white bg-[#14519A] hover:bg-[#0f3a70] hover:scale-105 transition">
                    <i class="fa-solid fa-chart-line mr-2"></i> Ver Reportes
                </a>
            </div>
        </div>
    </div>
</section>

<style>
    @keyframes fadeUp {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fadeUp {
        animation: fadeUp 0.9s ease-out forwards;
    }

    .animate-fadeUp[animation-delay="200ms"] {
        animation-delay: 0.2s;
    }

    .animate-fadeUp[animation-delay="400ms"] {
        animation-delay: 0.4s;
    }
</style>