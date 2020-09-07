<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            body{
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background: #34495e;
            }
            .title-in{
                text-align: center;
                color: white;
                background-color: #191919;
                width: 100%;
            }
            .container{
                width: 80%;
                margin: auto;
                height: 100%;
                background-color: #191919;
                color: white;
                text-align: center;
            }
            hr{
                background: #3498db;
                height: 5px;
            }
            .logout{
                border:0;
                background: none;
                display: block;
                margin: 20px auto;
                text-align: center;
                border: 2px solid #2ecc71;
                padding: 14px 40px;
                outline: none;
                border-radius: 24px;
                transition: 0.25s;
                cursor: pointer;
            }
            .logout a{
                text-decoration: none;
                color: white;
            }
            .logout:hover{
                background: #2ecc71;
            }
        </style>
    </head>
    <body>
        <?php
        session_start();

        if (empty($_SESSION['userdata'])) {
            header("LOCATION:index.html");
        }else{
            echo "<h1 class='title-in'>welcome</h1>"."<br>";
        }
        ?>

        <?php
        $posts =[
            
            ['titel'=>'poste one','artical'=>'I LOVE WATERMEALON'],
            
            ['titel'=>'poste two','artical'=>'I LOVE APPLE'],
            
            ['titel'=>'poste three','artical'=>'I LOVE PEER'],
            
            ['titel'=>'poste four','artical'=>'I LOVE MANGO']

        ];
        ?>
        <div class="container">
            <?php
                foreach ($posts as $key => $value) {
                    foreach ($value as $k => $v) {
                        print "<h1>" . $v . "</h1>"."<hr>"."<br>" ;
                    }
                }
            ?>
            <button class="logout"><a  href='logout.php'>logout</a></button>
            
        </div>
    </body>
</html>

