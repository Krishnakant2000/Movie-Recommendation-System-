<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
    <script type="text/javascript">
            function fun1(){
                var cat = document.querySelector(".selected").innerText;
                alert("selected: "+cat);
                var name = cat;
                return name;
            }
            var value = fun1();
        </script>
        <?php
            echo "welcome!!....";
            echo "<br>";
            echo "<script>document.write(value)</script><br> tttt";
        ?>
</head>
<body>
<div class="root">
                  <div class="select-box">
                        <div class="options-container active" id="options-container">
                            <div class="option" id="option">
                                <input type="radio" class="radio" id="comedy" value="action" name="category">
                                <label>Action</label>
                            </div>

                            <div class="option" id="option">
                                <input type="radio" class="radio" id="horror" value="adventure" name="category">
                                <label>Adventure</label>
                            </div>

                            <div class="option" id="option">
                                <input type="radio" class="radio" id="animated" value="animated" name="category">
                                <label>Animated</label>
                            </div>

                            <div class="option" id="option">
                                <input type="radio" class="radio" id="romantic" value="biopic" name="category">
                                <label>Biopics</label>
                            </div>

                            <div class="option" id="option">
                                <input type="radio" class="radio" id="action" value="comedy" name="category">
                                <label>Comedy</label>
                            </div>

                            <div class="option" id="option">
                                <input type="radio" class="radio" id="triller" value="emotional" name="category">
                                <label>Emotional</label>
                            </div>

                            <div class="option" id="option">
                                <input type="radio" class="radio" id="emotional" value="horror" name="category">
                                <label>Horror</label>
                            </div>

                            <div class="option" id="option">
                                <input type="radio" class="radio" id="dramatical"  value="musical" name="category">
                                <label>Musical</label>
                            </div>
                            <div class="option" id="option">
                                <input type="radio" class="radio" id="mystery" value="Mystery" name="category">
                                <label>Mystery</label>
                            </div>
                            <div class="option" id="option">
                                <input type="radio" class="radio" id="biopic" value="romantic" name="category">
                                <label>Romantic</label>
                            </div>
                        </div>
                        <div class="selected" id="selected">
                            Select your movie taste here .....
                        </div>
                    </div>
                </div>
                <button onclick="fun1()" id="btn1">Show selected movie</button>

        <script src="main.js"></script> 
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>