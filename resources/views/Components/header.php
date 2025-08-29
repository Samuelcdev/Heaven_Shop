<header class="navbar h-20 bg-white shadow-md px-6 sticky top-0 z-50">
    <div class="flex flex-row mx-auto justify-between w-full max-w-[1200px] items-center">
        <div class="navbar-start">
            <a href="/Home" class="text-2xl lg:text-3xl font-bold text-[#14519A] flex items-center gap-3">
                <img src="/Images/image.png" alt="Logo de Heaven Shop" class="h-12 w-12 object-contain" />
                Heaven Shop
            </a>
        </div>
        <div class="navbar-end hidden lg:flex">
            <ul class="menu menu-horizontal px-1 gap-4 font-medium">
                <li>
                    <a href="/Home"
                        class="px-4 py-2 rounded-lg text-[#14519A] hover:bg-[#14519A]/10 hover:text-[#14519A] transition flex items-center gap-2">
                        <i class="fas fa-home"></i> Inicio
                    </a>
                </li>
                <li>
                    <a href="/products"
                        class="px-4 py-2 rounded-lg text-[#14519A] hover:bg-[#14519A]/10 hover:text-[#14519A] transition flex items-center gap-2">
                        <i class="fas fa-box"></i> Productos
                    </a>
                </li>
                <li>
                    <a href="/reportes"
                        class="px-4 py-2 rounded-lg text-[#14519A] hover:bg-[#14519A]/10 hover:text-[#14519A] transition flex items-center gap-2">
                        <i class="fas fa-chart-line"></i> Reportes
                    </a>
                </li>
            </ul>
        </div>
        <div class="navbar-end lg:hidden">
            <div class="dropdown dropdown-end">
                <label tabindex="0" class="btn btn-ghost">
                    <i class="fas fa-bars text-xl"></i>
                </label>
                <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-10 p-2 shadow bg-white rounded-xl w-56">
                    <li><a href="/home"><i class="fas fa-home mr-2"></i> Inicio</a></li>
                    <li><a href="/Products/"><i class="fas fa-box mr-2"></i> Productos</a></li>
                    <li><a href="/Usuarios"><i class="fas fa-users mr-2"></i> Usuarios</a></li>
                    <li><a href="/Reportes"><i class="fas fa-chart-line mr-2"></i> Reportes</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>