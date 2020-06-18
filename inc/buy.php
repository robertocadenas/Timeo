
<?php
 // Recordatorio: el dato que se envia es el "name"; https://www.w3schools.com/html/html_forms.asp
?>

<h2>Buy:</h2>

<form method="post" action="inc/cookie.php?shop_item" target="_self">
       <legend>Sellers:</legend>
        <select name="seller" id="seller" size="3">
          <option value="Amazon">Amazon</option>
          <option value="Fnac">Fnac</option>
          <option value="Casa_del_libro">Casa del Libro</option>
        </select>

<br/><br/>
<button type="submit" class="buy">buy now</button>
</form>
