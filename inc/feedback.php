
<?php
 // Recordatorio: el dato que se envia es el "name"; https://www.w3schools.com/html/html_forms.asp


 $is_like = '';
 $is_dislike = '';

 if (isset($_POST["like"])){
     echo $_POST["like"];
     // $id = $_GET["id"];
     $like = filter_input(INPUT_POST, 'like', FILTER_SANITIZE_SPECIAL_CHARS);
     if($like == 'like') {
         $is_like = 'checked';
         $is_dislike = '';
     } elseif ($like == 'dislike') {
         $is_like = '';
         $is_dislike = 'checked';
     }
 }

 if (isset($_POST["comment"])){
     // $id = $_GET["id"];
     $comment = filter_input(INPUT_POST, 'comment', FILTER_SANITIZE_SPECIAL_CHARS);
     echo $comment;
 } else {
     $comment = "";
 }

if(isset($userid) && $userid != null) {

    echo
    '<h2>Your feedback:</h2>
    <p>'. $people[$userid]["fullname"] . '</p>

    <form method="post" action="content_detail.php?id=' . $id . '" target="_self">
            <!-- <input type="hidden" id="id" name="id" value="103"> -->
            <input type="hidden" id=103>
            <input class="like" type="radio" name="like" id="like" value="like"'. $is_like .' >
            <label for="like">like</label><br/>
            <input class="like" type="radio" name="like" id="like" value="dislike"'. $is_dislike .' >
            <label for="dislike">dislike</label><br/>
            <br/><br/>
            <label for="comment">Comment:</label><br/>
            <textarea name="comment" rows="8" cols="50">' . $comment . '</textarea>
            <br/><br/>
            <button type="submit" class="like">Enviar</button>
    </form>';
} else {
    echo '<a href="login.php">Login to give your opinion.</a>';

}
