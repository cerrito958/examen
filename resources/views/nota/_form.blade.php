@csrf
<div class="form-group">
    <label for="titulo">Título:</label>
    <input type="text" name="titulo" id="titulo" class="form-control text-uppercase" value="{{old('titulo', $nota->titulo)}}">
</div>

<div class="form-group">
    <label for="contenido">Contenido:</label>
    <textarea class="form-control" name="contenido" id="contenido" rows="10">
        {!! old('contenido', $nota->contenido) !!}
    </textarea>
</div>
<div class="text-center mt-4">
    <input type="submit" class="btn btn-primary" value="{{$btnText}}">
</div>
