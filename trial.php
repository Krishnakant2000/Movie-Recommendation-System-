<!DOCTYPE html>
<html>
    <head>
        <title>
            Trial
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="star.css">

        <style>
            .read-more-container span {
            display: inline-block;
            /*color: #0984e3;  */
            margin-top: -15px;
            padding: 0;
            }
            .read-more-container .card-text {
            height: 50px;
            overflow: hidden;
            }
        </style>
        
       <script type="text/javascript">
          /*  const selected = document.querySelector(".selected");
            const optionsContainer = document.querySelector(".options-container");

            const optionList = document.querySelectorAll(".option");

            selected.addEventListener("click",()=>{
                optionsContainer.classList.toggle("active");
            })

            optionList.forEach(o =>{
                o.addEventListener("click",()=>{
                    selected.innerHTML = o.querySelector("label").innerHTML;
                    console.log(selected.innerHTML);
                    optionsContainer.classList.remove("active");
                })
            }) */
        </script> 
        <style>
            select{
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 8px;
                box-sizing: border-box;
                background: #e5e5e5;
                text-align: center;
            }
        </style>
    </head>

    <body>

    <div class="inputBody" style="margin: 90px;">
        <div class="text-center">
          <h3 class="topMessage">Ready to watch? Enter Your Emotions!</h3>
            <h5>Choose Movie Taste</h5>
           <!-- <div class="root">
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
                        <div class="selected" id="selected" name="selected" value="">
                            Select your movie taste here...
                        </div>
                    </div>
                </div> -->
                <form method="POST">
                <select id="category" name="category">
                <option value="category">Select your movie here...</option>
                <option value="action">Action</option>                  
                <option value="adventure">Adventure</option>
                <option value="animated">Animated</option>
                <option value="biopic">Biopic</option>
                <option value="comedy">Comedy</option>
                <option value="emotional">Emotional</option>
                <option value="horror">Horror</option>
                <option value="musical">Musical</option>
                <option value="mystery">mystery</option>
                <option value="romantic">Romantic</option>
                <input type="submit" name="submit" value="search"/>
                </select>
                </form>

        </div>
    </div> 

<?php

    if(isset($_POST['submit']))
    {
        $value=$_POST['category'];
        //echo "selected category: ".$value;
        
        $connectin= mysqli_connect("localhost","root","","movierecommendation");
        if($value == 'action')
        {
            $query="select * from action order by rand() limit 4";
        }else if($value == 'adventure'){
            $query="select * from adventure order by rand() limit 4";
        }else if($value == 'animated'){
            $query="select * from animated order by rand() limit 4";
        }else if($value == 'biopic'){
            $query="select * from biopic order by rand() limit 4";
        }else if($value == 'comedy'){
            $query="select * from comedy order by rand() limit 4";
        }else if($value == 'emotional'){
            $query="select * from emotional order by rand() limit 4";
        }else if($value == 'horror'){
            $query="select * from horror order by rand() limit 4";
        }else if($value == 'historical'){
            $query="select * from historical order by rand() limit 4";
        }else if($value == 'musical'){
            $query="select * from musical order by rand() limit 4";
        }else if($value == 'mystery'){
            $query="select * from mystery order by rand() limit 4";
        }else if($value == 'romantic'){
            $query="select * from romantic order by rand() limit 4";
        }

        $query_run=mysqli_query($connectin,$query);

            $check_data = mysqli_num_rows($query_run) > 0;
        ?>
    <div class="row">
        <?php
    if($check_data)
    {
        while($row=mysqli_fetch_assoc($query_run))
        {    
            ?>
            <div class="col-md-3" style="padding: 0 20px 0 15px;">
                <div class="card" style="box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.9); height: 450px; margin-bottom: 50px;">
                    <div style="width='100px'"><?php 
                        echo "<img class='card-img-top' height='190px' src='./uploads/$row[image]' alt='Card image'>";
                    ?></div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['name']?></h5>
                        <p class="card-text"><div class="Stars" style="--rating: <?php echo $row['rating']; ?>; font-size: 25px;">
                            <span style="font-size: 18px;"> <?php echo $row['rating'];  echo " | "; echo $row['time_in_minute']; ?></span><?php echo " min"; ?></div></p>
                        <!--<p class="card-text" style="color: gray; font-size: 14px; text-align: left; margin-top: -10px;"><?php echo $row['description']?></p>  -->
                        <p class="card-text"> <?php echo $row['actors']?></p>
                    </div>
                        <a href=<?php echo $row['link']?> class="btn btn-primary">Watch Now</a>
                </div>
                
            </div>
            <?php
       // echo $row['ID'];
        }
    }
    else
    {
        echo "No record found!!!";
    }
            ?>
    </div>
    <?php
    }

?>
   <!--<?php
         '<script>
                function fun1(){
                        var cat = document.querySelector(".selected").innerText;
                        console.log(cat);
                        alert("selected: "+cat);
                    }
            </script>';
        
        echo "Hekjdsfhj";
   ?> -->
   <!-- <div class="container py-5 cardstyles">
        <div class="row">
            <?php
            $connectin= mysqli_connect("localhost","root","","movierecommendation");
            $query="select * from  comedy order by rand() limit 4";

            /*// random num of record fetch
            $r = mysql_query("SELECT count(*) FROM user");  
            $d = mysql_fetch_row($r);  
            $rand = mt_rand(0,$d[0] - 1);  
           
            $r = mysql_query("SELECT * FROM action LIMIT $rand, 1"); 

            /////////////////////////////////////////////////////////  */
            $query_run=mysqli_query($connectin,$query);

            $check_data = mysqli_num_rows($query_run) > 0;

            if($check_data)
            {
                while($row=mysqli_fetch_assoc($query_run))
                {    
                    ?>
                    <div class="col-md-3">
                        <div class="card " style="height: 500px; margin-bottom: 50px; box-shadow: 2px 10px 10px rgba(0,0,0,0.10)">
                            <?php 
                                echo "<img class='card-img-top' src='./uploads/$row[image]' width='200px' height='200px' alt='Card image'>";
                            ?>
                            <div class="card-body">
                            <h5 class="card-title"><?php echo $row['name']?></h5>
                            <p class="card-text"><div class="Stars" style="--rating: <?php echo $row['rating']; ?>; font-size: 25px;">
                                <span style="font-size: 18px;"> <?php echo $row['rating'];  echo " | "; echo $row['time_in_minute']; ?></span><?php echo " min"; ?></div></p>
                            <div class="read-more-container">
                                <p class="card-text"><?php echo $row['description']?></p>
                                <span class="read-more-btn">Read More... </span>
                            </div> 
                            </div>
                            <a href="#" class="btn btn-secondary">Watch Now</a>
                        </div>
                    </div>
                    <?php
                   // echo $row['ID'];
                }
            }
            else
            {
                echo "No record found!!!";
            }
            ?> 
        </div>
    </div>  -->
        <script src="main.js"></script> 
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
