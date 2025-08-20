<section class="hero bg-base-200 py-12 h-[88vh]">
    <div class="hero-content text-center max-w-2xl">
        <div>
            <h1 class="text-4xl sm:text-5xl font-bold text-[#14519A]">Bienvenido Administrador</h1>
            <p class="py-6 text-gray-600 leading-relaxed">
                Administra productos, usuarios y categorías de tu tienda fácilmente desde un solo lugar.
            </p>
            <button class="btn rounded-xl px-6 bg-[#14519A] text-white hover:bg-[#95A557] transition-colors">
                <i class="fa-solid fa-play mr-2"></i><a href="#Servicios">Empezar ahora</a>
            </button>
        </div>
    </div>
</section>
<section class="text-center py-8 px-6" id="Servicios">
    <h2 class="text-3xl sm:text-4xl font-extrabold text-[#14519A]">Nuestros Servicios</h2>
    <p class="mt-3 text-gray-600 max-w-2xl mx-auto">
        Accede a las principales funciones del sistema y gestiona tu tienda de forma eficiente.
    </p>
</section>
<section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mx-auto w-full max-w-[1200px] py-6">
    <div class="card bg-white shadow-lg hover:shadow-2xl rounded-2xl border border-[#14519A]/20 
                transition-all duration-300 hover:-translate-y-1 animate-fadeUp">
        <div class="card-body space-y-4">
            <div class="flex items-center space-x-4">
                <div class="flex items-center justify-center w-14 h-14 rounded-xl bg-[#14519A]/10 text-[#14519A]">
                    <i class="fa-solid fa-box-open text-2xl"></i>
                </div>
                <h2 class="text-2xl font-bold text-[#14519A]">Productos</h2>
            </div>
            <p class="text-gray-600 leading-relaxed">
                Gestiona todos los productos del inventario y accede a sus detalles fácilmente.
            </p>
            <div class="card-actions">
                <a href="/productos"
                    class="btn w-full rounded-xl border-0 text-white bg-[#14519A] hover:bg-[#95A557] transition-colors">
                    <i class="fa-solid fa-eye mr-2"></i> Ver Productos
                </a>
            </div>
        </div>
    </div>
    <div class="card bg-white shadow-lg hover:shadow-2xl rounded-2xl border border-[#14519A]/20 
                transition-all duration-300 hover:-translate-y-1 animate-fadeUp [animation-delay:200ms]">
        <div class="card-body space-y-4">
            <div class="flex items-center space-x-4">
                <div class="flex items-center justify-center w-14 h-14 rounded-xl bg-[#14519A]/10 text-[#14519A]">
                    <i class="fa-solid fa-users text-2xl"></i>
                </div>
                <h2 class="text-2xl font-bold text-[#14519A]">Usuarios</h2>
            </div>
            <p class="text-gray-600 leading-relaxed">
                Administra los usuarios, sus roles y permisos dentro del sistema.
            </p>
            <div class="card-actions">
                <a href="/usuarios"
                    class="btn w-full rounded-xl border-0 text-white bg-[#14519A] hover:bg-[#95A557] transition-colors">
                    <i class="fa-solid fa-user-shield mr-2"></i> Ver Usuarios
                </a>
            </div>
        </div>
    </div>
    <div class="card bg-white shadow-lg hover:shadow-2xl rounded-2xl border border-[#14519A]/20 
                transition-all duration-300 hover:-translate-y-1 animate-fadeUp [animation-delay:400ms]">
        <div class="card-body space-y-4">
            <div class="flex items-center space-x-4">
                <div class="flex items-center justify-center w-14 h-14 rounded-xl bg-[#14519A]/10 text-[#14519A]">
                    <i class="fa-solid fa-layer-group text-2xl"></i>
                </div>
                <h2 class="text-2xl font-bold text-[#14519A]">Categorías</h2>
            </div>
            <p class="text-gray-600 leading-relaxed">
                Visualiza productos organizados por categorías como ropa, juguetes, etc.
            </p>
            <div class="card-actions">
                <a href="/categorias"
                    class="btn w-full rounded-xl border-0 text-white bg-[#14519A] hover:bg-[#95A557] transition-colors">
                    <i class="fa-solid fa-list mr-2"></i> Ver Categorías
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Animación -->
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