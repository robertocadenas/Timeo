
<?php
 // Recordatorio: el dato que se envia es el "name"; https://www.w3schools.com/html/html_forms.asp
?>

<h2>Comprar:</h2>

<form method="get" target="_self">
        <input list="vendedor" name="vendedor">
       <datalist id="vendedor">
         <option value="Amazon">
         <option value="Fnac">
         <option value="Casa del libro">
       </datalist>
<button type="submit" class="comprar">comprar</button>
</form>
