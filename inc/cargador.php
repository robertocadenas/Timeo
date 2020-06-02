
<h2>Subir libro</h2>

<form method="get" action="detalle.php" target="_self">


    <label for="nombre">Title:</label><br>
    <input type="text" id="title" name="title" size="60" required><br/><br/>
    <label for="author">Autor:</label><br>
    <input type="text" id="author" name="author" size="60" required><br/><br/>
    <label for="nombre">Publisher:</label><br>
    <input type="text" id="publisher" name="publisher" size="60" required><br/><br/>
    <label for="year">Year:</label><br>
    <input type="date" id="year" name="year" required><br/><br/>
    <label for="img">Imagen:</label>
    <input type="file" id="img" name="img" size="60" required><br/><br/>
    <label for="formato">Formato:</label><br>
    <select name="formato" size="3" required>
      <option value="tapa_blanda">Tapa Blanda</option>
      <option value="tapa_dura">Tapa Dura</option>
      <option value="ebook">ebook</option>
    </select>
    <br><br/>
    <label for="type">Tipo:</label><br>
    <input type="type" id="type" name="type" size="60" required><br/><br/>
    <label for="category">Category:</label><br>
    <input type="category" id="category" name="category" size="60" required><br/><br/>
    <label for="colection">Colección:</label><br>
    <input type="colection" id="colection" name="colection" size="60"><br/><br/>
    <label for="tags">Tags:</label><br>
    <input type="tags" id="tags" name="tags" size="60"><br/><br/>
    <label for="section">Sección:</label><br>
    <input type="section" id="section" name="section" size="60" required><br/><br/>
    <label for="isbn">isbn:</label><br>
    <input type="isbn" id="isbn" name="isbn" size="60" placeholder="12345567891" required><br/><br/>

    <!-- <input type="submit" value="Cargar"> -->
        <button type="submit" class="cargar">Cargar</button>
</form>
