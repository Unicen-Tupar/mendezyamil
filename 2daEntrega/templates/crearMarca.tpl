{include file="header.tpl"}
<form action="guardarmarca" method="post">
  <label for="nombre">Nombre</label>
  <input type="text" name="nombre" value="">
  <label for="descripcion">Descripcion</label>
  <textarea name="descripcion" rows="8" cols="80"></textarea>
  <button type="submit" name="button">Crear</button>
</form>
{include file="footer.tpl"}