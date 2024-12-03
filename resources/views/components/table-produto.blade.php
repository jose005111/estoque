<table class="min-w-full border-collapse border border-gray-300">  
    <thead>  
        <tr>  
            <th class="border border-gray-300 px-4 py-2">ID</th>  
            <th class="border border-gray-300 px-4 py-2">Nome</th>  
            <th class="border border-gray-300 px-4 py-2">Preço</th>  
            <th class="border border-gray-300 px-4 py-2">Ação</th>  
        </tr>  
    </thead>  
    <tbody>  
        @foreach($produtos as $produto)  
            <tr>  
                <td class="border border-gray-300 px-4 py-2">{{ $produto->id }}</td>  
                <td class="border border-gray-300 px-4 py-2">{{ $produto->nome }}</td>  
                <td class="border border-gray-300 px-4 py-2">{{ number_format($produto->preco, 2, ',', '.') }} €</td>  
                <td class="border border-gray-300 px-4 py-2">  
                    <a href="{{ route('produtos.edit', $produto->id) }}" class="text-blue-500 hover:text-blue-700">Editar</a>  
                </td>  
            </tr>  
        @endforeach  
    </tbody>  
</table>