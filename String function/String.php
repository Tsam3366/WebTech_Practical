<html>
    <head>
        <title>
            PHP STRING FUNCTIONS
        </title>
    </head>
    <body>
        <form action="" method="GET">
        Enter the string:<input type="text" name="str"><br><br>
        <input type="submit" value="UPPER" name="up">
        <input type="submit" value="LOWER" name="low">
        <input type="submit" value="LENGTH" name="len">
        <input type="submit" value="WORD COUNT" name="wc">
        <input type="submit" value="REVERSE" name="rev">
        <input type="submit" value="REPEAT" name="rep">
        <input type="submit" value="TRIM" name="trim">
        <input type="submit" value="UPPER FIRST" name="ufirst">
        <input type="submit" value="UPPER WORDS" name="uwords">
    </form>
        <?php
        //TO UPPER
        if(isset($_GET['up']))
        {
            $a=$_GET['str'];
            echo"UPPER CASE OF THE STRING:".strtoupper($a);
        }
        //TO LOWER
        if(isset($_GET['low']))
        {
            $a=$_GET['str'];
            echo"LOWER CASE OF THE STRING:".strtolower($a);
        }
        //LENGTH OF THE STRING 
        if(isset($_GET['len']))
        {
            $a=$_GET['str'];
            echo"LENGTH OF THE STRING:".strlen($a);
        }
        //NUMBER OF WORDS IS A SENTENCE
        if(isset($_GET['wc']))
        {
            $a=$_GET['str'];
            echo"WORD COUNT:".str_word_count($a);
        }
        //STRING REVERSE
        if(isset($_GET['rev']))
        {
            $a=$_GET['str'];
            echo"REVERSED STRING:".strrev($a);
        }
        //REPEATING STRING
        if(isset($_GET['rep']))
        {
            $a=$_GET['str'];
            echo"REPEATATION OF THE STRING:".str_repeat($a,3);
        }
        //REMOVE WHITESPACES OF A STRING
        if(isset($_GET['trim']))
        {
            $a=$_GET['str'];
            echo"WORD COUNT:".trim($a);
        }
        //FIRST WORD FIRST LETTER UPPER
        if(isset($_GET['ufirst']))
        {
            $a=$_GET['str'];
            echo"UPPER CASE OF THE STRING:".ucfirst($a);
        }
        //ALL WORDS FIRST LETTER UPPER
        if(isset($_GET['uwords']))
        {
            $a=$_GET['str'];
            echo"UPPER CASE OF THE STRING:".ucwords($a);
        }
        ?>
    </body>
</html>