<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Page</title>
    <link rel="stylesheet" href="uploadStyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

</head>
<body>
    <div class="container_1">
        <div class="container_2">
                <div class="box1">
                    <a href="search.html"><img src="go.png" class="back"></a>
                </div>
            <hr>
            <div class="box2">
                <div class="Ages">
                    <label>Age:</label><br>
                    <input type="number" class="age">
                </div>
                <div class="type">
                    <label>Type:</label><br>
                    <input type="radio" class="level" name="1">
                    <span class="level">Male</span>
                    <br>
                    <input type="radio" class="level" name="1">
                    <span class="level">Female</span>
                    
                </div>
                <div class="upfile">
                    <label>CV:</label><br>
                    <input type="file" class="uploadfile">
                    
                </div>
            </div>
            <hr>
            <div class="buttons">
               <a href="home.html"><input type="button"  class="buttons1" value="Apply Now"></a>
            </div>
        </div>
    </div>
</body>
</html>