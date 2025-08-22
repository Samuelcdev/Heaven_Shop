<section class="hero bg-gradient-to-br from-[#f4f6fb] to-[#e9eff9] py-16 h-[88vh] flex items-center justify-center">
    <div class="text-center max-w-3xl px-6 animate-fadeUp">
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-[#14519A] leading-tight">
            Bienvenido <span class="text-[#95A557]">Administrador</span>
        </h1>
        <p class="mt-6 text-lg sm:text-xl text-gray-600 leading-relaxed">
            Administra productos, usuarios y categorías de tu tienda de forma <br class="hidden sm:block">
            simple, rápida y profesional.
        </p>
        <button
            class="mt-8 px-8 py-3 rounded-2xl bg-gradient-to-r from-[#14519A] to-[#1e61c9] text-white font-semibold text-lg shadow-md hover:shadow-xl transition-all">
            <i class="fa-solid fa-play mr-2"></i>
            <a href="#Servicios">Empezar ahora</a>
        </button>
    </div>
</section>
<section class="text-center py-12 px-6" id="Servicios">
    <h2 class="text-3xl sm:text-4xl font-extrabold text-[#14519A]">
        Nuestros Servicios
    </h2>
    <p class="mt-4 text-gray-600 max-w-2xl mx-auto text-lg">
        Accede a las principales funciones del sistema y gestiona tu tienda con herramientas modernas y fáciles de usar.
    </p>
</section>

<section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mx-auto w-full max-w-[1200px] py-8 px-4">
    <div
        class="card backdrop-blur-lg bg-white/80 shadow-xl hover:shadow-2xl rounded-2xl border border-[#14519A]/10 transition-all duration-500 hover:-translate-y-2 animate-fadeUp">
        <div class="card-body space-y-4 p-6">
            <div class="flex items-center space-x-4">
                <div class="flex items-center justify-center w-16 h-16 rounded-2xl bg-[#14519A]/10 text-[#14519A]">
                    <i class="fa-solid fa-box-open text-2xl"></i>
                </div>
                <h2 class="text-2xl font-bold text-[#14519A]">Productos</h2>
            </div>
            <p class="text-gray-600 leading-relaxed">
                Gestiona todo el inventario de productos y accede a sus detalles fácilmente.
            </p>
            <div class="card-actions">
                <a href="/productos"
                    class="btn w-full rounded-xl text-white bg-[#14519A] hover:brightness-110 transition-all">
                    <i class="fa-solid fa-eye mr-2"></i> Ver Productos
                </a>
            </div>
        </div>
    </div>
    <div
        class="card backdrop-blur-lg bg-white/80 shadow-xl hover:shadow-2xl rounded-2xl border border-[#14519A]/10 transition-all duration-500 hover:-translate-y-2 animate-fadeUp [animation-delay:200ms]">
        <div class="card-body space-y-4 p-6">
            <div class="flex items-center space-x-4">
                <div class="flex items-center justify-center w-16 h-16 rounded-2xl bg-[#14519A]/10 text-[#14519A]">
                    <i class="fa-solid fa-layer-group text-2xl"></i>
                </div>
                <h2 class="text-2xl font-bold text-[#14519A]">Categorías</h2>
            </div>
            <p class="text-gray-600 leading-relaxed">
                Administra las categorías de productos, asigna productos a categorías y gestiona su visibilidad.
            </p>
            <div class="card-actions">
                <a href="/categorias"
                    class="btn w-full rounded-xl text-white bg-[#14519A] hover:brightness-110 transition-all">
                    <i class="fa-solid fa-layer-group mr-2"></i> Ver Categorías
                </a>
            </div>
        </div>
    </div>
    <div
        class="card backdrop-blur-lg bg-white/80 shadow-xl hover:shadow-2xl rounded-2xl border border-[#14519A]/10 transition-all duration-500 hover:-translate-y-2 animate-fadeUp [animation-delay:400ms]">
        <div class="card-body space-y-4 p-6">
            <div class="flex items-center space-x-4">
                <div class="flex items-center justify-center w-16 h-16 rounded-2xl bg-[#14519A]/10 text-[#14519A]">
                    <i class="fa-solid fa-chart-line text-2xl"></i>
                </div>
                <h2 class="text-2xl font-bold text-[#14519A]">Reportes</h2>
            </div>
            <p class="text-gray-600 leading-relaxed">
                Genera reportes detallados sobre el rendimiento de tu tienda y productos.
            </p>
            <div class="card-actions">
                <a href="/reportes"
                    class="btn w-full rounded-xl text-white bg-[#14519A] hover:brightness-110 transition-all">
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
        animation: fadeUp 0.8s ease-out forwards;
    }
</style>