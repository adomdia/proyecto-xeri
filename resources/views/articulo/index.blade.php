@include('articulo.cabecera')
<div class="container mt-5">
<div class="card-group text-center" style="width: 70rem;">
    @foreach($articulos as $articulo)
        <div class="card" style="width: 100px;">
            <img src="{{ asset('storage').'/'.$articulo->foto }}" class="card-img-top" alt="imagen_producto">
            <div class="card-body">
                <h5 class="card-title">{{ $articulo->descripcion }}</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Código: {{ $articulo->codigo }}</li>
                <li class="list-group-item">Precio: {{ $articulo->precio }}€</li>
                <li class="list-group-item">Stock: {{ $articulo->stock }}</li>
            </ul>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="{{ url('/articulo/'.$articulo->id.'/edit') }}" class="card-link"><button type="submit" class="btn btn-primary m-4">Editar</button></a>
                    <form action="{{ url('/articulo/'.$articulo->id) }}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger m-4" onclick="return confirm('¿Quieres borrar este dato?')">Borrar</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
</div>

<div class="text-center">
    <a href="{{ url('/articulo/create') }}"><button class="btn btn-success m-5">Crear artículos</button></a>
</div>




