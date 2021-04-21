<!DOCTYPE html>
<html>

<head>
    <title>Read file PHP</title>
    <link rel="icon" href="https://icon-library.com/images/php-icon-png/php-icon-png-7.jpg" type="image/icon type">
    <style>
        * {
            padding: 0;
            margin: 0;
            font-family: cursive;
        }

        html,
        body {
            scroll-behavior: smooth;
            background-color: #6495ed;
        }

        h1 {
            font-size: 40px;
            font-weight: 600;
            text-decoration: underline;
            text-align: center;
        }

        #head {
            font-size: 25px
        }

        /* Box */
        .box {
            width: 800px;
            height: 380px;
            border: 2px black solid;
            margin: 10px;
            padding: 10px;
            font-size: 20px;
            background-color: #1fcecb;
        }

        .box1 {
            box-shadow: 10px 5px 7px #000;
            margin-bottom: 15px;
        }

        .box2 {
            box-shadow: -10px 5px 7px #000;
            margin-bottom: 15px;
        }

        .box3 {
            box-shadow: 10px -5px 7px #000;
            margin-top: 15px;
        }

        .box4 {
            box-shadow: -10px -5px 7px #000;
            margin-top: 15px;
        }

        /* Position */
        .left {
            float: left;
            margin-left: 35px;
        }

        .right {
            float: right;
            margin-right: 35px;
        }

        @media screen and (max-width: 1440px) {
            .box {
                width: 600px;
            }
        }
        @media screen and (max-width: 1024px) {
            .box {
                display: block;
                float: none;
                margin-left: auto;
                margin-right: auto;
                width: 80%;
                margin-bottom: 20px;
            }
            .box1,
            .box2,
            .box3,
            .box4 {
                box-shadow: 0px 10px 10px #000;
            }
        }
    </style>
</head>

<body>
    <h1>
        Reading files in 4 ways in php
    </h1>
    <br>
    <div class="box left box1">
        <h1 id="head">
            1. include + readfile
        </h1>
        <br>
        <?php
            include "readfile.php";
        ?>
    </div>
    <div class="box right box2">
        <h1 id="head">
            2. fread
        </h1>
        <br>
        <?php
            $myfile = fopen("aboutphp.txt", "r") or die("Unable to open file.");
            echo fread($myfile, filesize("aboutphp.txt"));
            fclose($myfile);
        ?>
    </div>
    <div class="box left box3">
        <h1 id="head">
            3. fgets
        </h1>
        <br>
        <?php
            $myfile = fopen("aboutphp.txt", "r") or die("Unable to open file.");
            echo fgets($myfile);
            fclose($myfile);
        ?>
    </div>
    <div class="box right box4">
        <h1 id="head">
            4. fgetc
        </h1>
        <br>
        <?php
            $myfile = fopen("aboutphp.txt", "r") or die("Unable to open file.");
            while (!feof($myfile)) { 
                echo fgetc($myfile); 
            }
            fclose($myfile);
        ?>
    </div>
</body>

</html>