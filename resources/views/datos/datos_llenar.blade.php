<x-app-layout>

    <form action="{{route('datos.store')}}" method="POST">
        @csrf
        <div class="mb-6">
            <h2 class="font-semibold text-lg mb-2">1. Datos Personales</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium">Nombres</label>
                    <input type="text" class="w-full border-gray-300 rounded-md shadow-sm" name="name">
                </div>
                <div>
                    <label class="block text-sm font-medium">Apellidos</label>
                    <input type="text" class="w-full border-gray-300 rounded-md shadow-sm" name="apellido">
                </div>
                <div>
                    <label class="block text-sm font-medium">Telefono</label>
                    <input type="text" class="w-full border-gray-300 rounded-md shadow-sm" name="telefono">
                </div>
            </div>
        </div>

        <button type="submit" class="bg-blue-500 text-black py-2 px-4 rounded-md hover:bg-blue-600">Enviar</button>
    </form>
</x-app-layout>