
<?php
 // Recordatorio: el dato que se envia es el "name"; https://www.w3schools.com/html/html_forms.asp
?>

<h2>¿Los has leido? Déjamos tu comentario:</h2>

<form method="get" action="detalle.php?id=<?php echo $id; ?>" target="_self">
    <fieldset>
        <!-- <input type="hidden" id="id" name="id" value="103"> -->
       <legend>Participar:</legend>
        <input type="hidden" id=103>
        <input class="like" type="radio" name="gusta" id="Si" value="Si">
        <label for="Si">Me gustó</label><br/>
        <input class="like" type="radio" name="gusta" id="No" value="No">
        <label for="No">No me gustó</label><br/>
        <br/><br/>
        <label for="comentario">Comentario:</label><br/>
        <textarea name="comentario" rows="8" cols="50">
        </textarea>
        <br/><br/>
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre"><br/>
        <label for="email">Email:</label><br>
        <input type="email">
        <br/><br/>
        <button type="submit" class="like">Enviar</button>
        <?php echo $id; ?>
    </fieldset>
</form>
