<!DOCTYPE html>
<html>
    <head>
        <title>movierecommendation!</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.css"> 
        <link rel="stylesheet" href="css/main.css">
        
        <style>
            :root {
            /*--star-size: 60px; */
            --star-color: #e5e5e5;
            --star-background: #fc0;
            }

            .Stars {
            --percent: calc(var(--rating) / 5 * 100%);
            
            display: inline-block;
            font-size: var(--star-size);
            font-family: Times;
            line-height: 1;
            }
            .Stars::before {
                content: '★★★★★';
                letter-spacing: 3px;
                background: linear-gradient(90deg, var(--star-background) var(--percent), var(--star-color) var(--percent));
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }
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
       <nav class="navbar navbar-light fixed-top" style="height: 60px; background-color: #e1e5e9;">
            <a class="navbar-brand" href="#" style="font-size: 22px; font-weight: bold; padding-left: 20px; color: #800080;">MovieRecommandation</a>
            <a class="nav-link" href="mainpageview.php" style="font-size: 20px;color:black; margin-left: -1040px; font-family: 'Poppins',sans-serif;">Home</a>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="welcomepage.html" style="font-size: 18px;color:black; padding-right: 20px;"> Sign Out</a></li>
            </ul>
        </nav>

    <div class="container">
        <div style="margin: 90px;">
            <div class="text-center">
              <h2 class="topMessage">Ready to watch? Enter Your Emotions!</h2>
                <h4>Choose Movie Taste</h4>
                <!--<div class="root">
                  <div class="select-box">
                        <div class="options-container active">
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
    
    </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="main.js"></script>
    </body>
</html>