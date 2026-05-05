@extends('layout.plantilla')
@section('contenido')
        <div id="slideshow" class="relative w-full h-72 md:h-[600px] lg:h-[720px] z-0 overflow-hidden">
            <div class="absolute inset-0 transition-opacity duration-700 opacity-100" data-index="0">
                <img src="banner-home3b.png" alt="banner" class="w-full h-full object-fit-cover">
            </div>
            <div class="absolute inset-0 transition-opacity duration-700 opacity-0" data-index="1">
                <img src="olva-expansion.jpg" alt="expansion" class="w-full h-full object-fit-cover">
            </div>
            <div class="absolute inset-0 transition-opacity duration-700 opacity-0" data-index="2">
                <img src="olva-expansion-2.jpg" alt="expansion2" class="w-full h-full object-fit-cover">
            </div>
            <div class="absolute inset-0 transition-opacity duration-700 opacity-0" data-index="3">
                <img src="olva-expansion-3.jpg" alt="expansion3" class="w-full h-full object-fit-cover">
            </div>
            <button id="prevBtn" aria-label="Anterior" class="absolute left-2 top-1/2 -translate-y-1/2 bg-white/70 rounded-full p-2">◀</button>
            <button id="nextBtn" aria-label="Siguiente" class="absolute right-2 top-1/2 -translate-y-1/2 bg-white/70 rounded-full p-2">▶</button>
        </div>
        <div class="container mx-auto px-4 py-10" id="inicio">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <img src="regular1.jpg" alt="Personas" class="w-full h-48 object-fit-cover">
                    <div class="p-4 text-center">
                        <h2 class="text-xl font-semibold">Personas</h2>
                        <p class="text-sm text-gray-600">Aquellos clientes regulares que registran sus envíos en nuestras tiendas, agentes o desean el servicio de recojo a domicilio.</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <img src="partner1.jpg" alt="Emprendedores" class="w-full h-48 object-fit-cover">
                    <div class="p-4 text-center">
                        <h2 class="text-xl font-semibold">Emprendedores</h2>
                        <p class="text-sm text-gray-600">Dirigido a pequeños emprendedores que ofrecen sus productos a través del comercio electrónico.</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <img src="olva-empresas.jpg" alt="Empresas" class="w-full h-48 object-fit-cover">
                    <div class="p-4 text-center">
                        <h2 class="text-xl font-semibold">Empresas</h2>
                        <p class="text-sm text-gray-600">Orientado a empresas que buscan desarrollar y mejorar su servicio de última milla.</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <img src="olva-compras.jpg" alt="Olva Box" class="w-full h-48 object-fit-cover">
                    <div class="p-4 text-center">
                        <h2 class="text-xl font-semibold">Olva Box</h2>
                        <p class="text-sm text-gray-600">Realiza compras en las distintas tiendas virtuales de Norteamérica y nosotros nos encargamos de transportarlas hasta la comodidad de tu hogar.</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <img src="cotizador_1.jpg" alt="Cotizador" class="w-full h-48 object-fit-cover">
                    <div class="p-4 text-center">
                        <h2 class="text-xl font-semibold">Cotizador</h2>
                        <p class="text-sm text-gray-600">Calcula el costo de tu envío ingresando origen, destino y peso del paquete de forma rápida y sencilla.</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <img src="olva-sorteos.jpg" alt="Sorteos" class="w-full h-48 object-fit-cover">
                    <div class="p-4 text-center">
                        <h2 class="text-xl font-semibold">Sorteos</h2>
                        <p class="text-sm text-gray-600">Participa en nuestros sorteos y gana premios increíbles.</p>
                    </div>
                </div>
            </div>
        </div>
@endsection