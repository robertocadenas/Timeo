
<?php
 // Recordatorio: el dato que se envia es el "name"; https://www.w3schools.com/html/html_forms.asp
?>

<h2>Comprar:</h2>

<form method="get" target="_self">
    <fieldset>
       <legend>Comprar:</legend>
        <select name="vendedores" size="3">
          <option value="Amazon">Amazon</option>
          <option value="Fnac">Fnac</option>
          <option value="Casa_del_libro">Casa del Libro</option>
        </select>
    </fieldset>

<br/><br/>
<button type="submit" class="comprar">comprar</button>
</form>
