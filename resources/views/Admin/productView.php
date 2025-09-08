<div class="p-4 sm:p-6 lg:p-8 max-w-[1200px] mx-auto">
    <!-- Título -->
    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-8">
        <h1 class="text-2xl sm:text-3xl font-bold text-[#14519A] flex items-center gap-3">
            <i class="fas fa-box"></i> Gestión de Productos
        </h1>
        <a href="/products/create"
            class="btn w-full sm:w-auto bg-[#14519A] hover:bg-[#0f3a70] text-white px-5 py-2 rounded-xl shadow-md flex items-center justify-center gap-2">
            <i class="fas fa-plus"></i> Nuevo Producto
        </a>
    </div>

    <!-- Grid de productos -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php foreach ($productsPaginated['items'] as $p): ?>
            <div
                class="group card bg-white shadow-md hover:shadow-xl rounded-2xl border border-gray-100 hover:-translate-y-1 transition duration-300 overflow-hidden h-full flex flex-col">

                <!-- Imagen -->
                <figure class="h-48 sm:h-52 bg-gray-50 flex items-center justify-center">
                    <img src="<?= htmlspecialchars($p->image_product) ?>" alt="<?= htmlspecialchars($p->name_product) ?>"
                        class="object-contain h-full max-h-52 p-4 transition-transform duration-300 group-hover:scale-105" />
                </figure>

                <!-- Cuerpo -->
                <div class="card-body px-5 py-6 flex flex-col flex-grow">
                    <!-- Nombre -->
                    <h2 class="text-base sm:text-lg text-[#14519A] font-semibold truncate">
                        <?= htmlspecialchars($p->name_product) ?>
                    </h2>

                    <!-- Descripción -->
                    <p class="text-sm text-gray-600 line-clamp-2 mt-1">
                        <?= htmlspecialchars($p->description_product) ?>
                    </p>

                    <!-- Categoría -->
                    <div class="mt-2 text-sm text-gray-700">
                        <span class="font-semibold text-[#14519A]">Categoría:</span>
                        <?= htmlspecialchars($p->name_category) ?>
                    </div>

                    <!-- Precio y Estado -->
                    <div class="mt-4 flex justify-between items-center">
                        <span class="text-lg sm:text-xl font-bold text-[#14519A]">
                            $<?= number_format($p->price_product, 2) ?>
                        </span>
                        <span
                            class="px-3 py-1 rounded-full text-xs font-semibold
                                     <?= $p->status_product === 'Active' ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-600' ?>">
                            <?= $p->status_product ?>
                        </span>
                    </div>

                    <!-- Botones -->
                    <div class="flex flex-col sm:flex-row gap-2 mt-5">
                        <a href="/products/edit/<?= $p->id_product ?>"
                            class="flex-1 btn btn-sm bg-[#14519A] hover:bg-[#0f3a70] text-white rounded-xl shadow transition flex items-center justify-center gap-2">
                            <i class="fas fa-edit"></i> Editar
                        </a>
                        <a href="/products/delete/<?= $p->id_product ?>"
                            class="flex-1 btn btn-sm bg-red-600 hover:bg-red-700 text-white rounded-xl shadow transition flex items-center justify-center gap-2">
                            <i class="fas fa-trash"></i> Eliminar
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Paginación -->
<div class="flex flex-wrap justify-center gap-2 my-10">
    <?php if ($productsPaginated['page'] > 1): ?>
        <a href="?page=<?= $productsPaginated['page'] - 1 ?>" class="px-3 sm:px-4 py-2 rounded-full shadow-md transition text-sm font-semibold 
                   bg-gray-200 hover:bg-[#14519A] hover:text-[#FFDE60] text-gray-700 flex items-center gap-1">
            <i class="fas fa-chevron-left"></i> <span class="hidden sm:inline">Anterior</span>
        </a>
    <?php endif; ?>

    <?php for ($i = 1; $i <= $productsPaginated['totalPages']; $i++): ?>
        <a href="?page=<?= $i ?>" class="px-3 sm:px-4 py-2 rounded-full shadow-md transition text-sm font-semibold
                   <?= $i == $productsPaginated['page']
                       ? 'bg-[#14519A] text-[#FFDE60]'
                       : 'bg-gray-200 hover:bg-[#14519A] hover:text-[#FFDE60] text-gray-700' ?>">
            <?= $i ?>
        </a>
    <?php endfor; ?>

    <?php if ($productsPaginated['page'] < $productsPaginated['totalPages']): ?>
        <a href="?page=<?= $productsPaginated['page'] + 1 ?>" class="px-3 sm:px-4 py-2 rounded-full shadow-md transition text-sm font-semibold 
                   bg-gray-200 hover:bg-[#14519A] hover:text-[#FFDE60] text-gray-700 flex items-center gap-1">
            <span class="hidden sm:inline">Siguiente</span> <i class="fas fa-chevron-right"></i>
        </a>
    <?php endif; ?>
</div>