<?php
if(!empty($_POST)) {
    //coś przyszło postem
    $postTitle = $_POST['postTitle'];
    $postDescription = $_POST['postDescription'];
    //wgrywanie pliku
    //zdefiniuj folder docelowy
    $targetDirectory = "img/";
    //użyj oryginalnej nazwy pliku
    $fileName = $_FILES['file']['name'];
    //przesuń plik z lokalizacji tymczasowej do docelowej
    move_uploaded_file($_FILES['file']['tmp_name'], $targetDirectory.$fileName);

    //dopisz posta do bazy
    $authorID = 1;
    $imageUr1 = "localhost/cms/img/" . $fileName;

    $db = new 
    


}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="postTitleInput">Tytuł posta:</label>
        <input type="text" name="pstTitle" id="postTitleInput">
        <br>
        <label for="postDescriptionInput">Opis posta:</label>
        <input type="text" name="postDescription" id="postDescription">
        <br>
        <label for="fileInput">Obrazek:</label>
        <input type="file" name="file"  id="fileInput">
        <br>
        <input type="submit" value="Wyślij">

    </form>
</body>
</html>