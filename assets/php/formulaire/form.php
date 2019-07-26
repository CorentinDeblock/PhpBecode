<?php
if(!isset($_POST["nom"]) && !isset($_POST["prenom"]) && !isset($_POST["genre"])){
    echo '<form enctype="multipart/form-data" method="POST" action="/#formChange">
        <select name="genre" id="">
            <option value="Mr">Mr</option>
            <option value="Mme">Mme</option>
        </select>
        <input type="text" name="nom">
        <input type="text" name="prenom">
        <input type="file" name="file">
        <input type="submit">
    </form>';
}else{
    echo $_POST["nom"]."<br>".$_POST["prenom"]."<br>".$_POST["genre"]."<br>".$_FILES["file"]["name"]."<br>";
    if($_FILES["file"]["type"] != "application/pdf")
        echo "N'est pas de type pdf";
    else
        echo "C'est un pdf";
}
?>