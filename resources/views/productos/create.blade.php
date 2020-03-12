<h1>Crear Producto:</h1>

<form action="{{ url('guardarproducto') }}"method="post">
    @csrf
    Nombre: <input type="texto" name="nombre" /> 
    <br />
    <br />
    Valor Unitario: <input type="texto" name="valor" />
    <br />
    <button type="submit">
        Guardar
    </button>
</form>