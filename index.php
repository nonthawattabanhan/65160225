<html>
    <head>
        <meta charset="utf-8">
    </head>

    <body>
        <h1><?php echo "Hello World <br><br>";?></h1>
        <?php echo "<h1>hello world <br><br></h1>"?>
        <?php $var_a = "SE CAMP" ?>
        <?php echo $var_b = 'Hello $var_a' ?>
        <?php echo $var_c = "Hello $var_a" ?>
        <br>
        <?php
        $var_b = 1;
        if($var_b === $var_c){
            echo '$var_b === $var_v';

        }else if($var_b <> $var_c){
            echo '$var_b <== $var_c';

        }else{
            echo 'else';
        } ?>

        <br>
        <?php
        echo $var_c;
        echo "<brL>";
        switch($var_c){
            case 1:
                echo "1";
                break;
            default:
            echo "test";    
        }

        $arry = array(1,2,3);
        $arry1 = [1,2,3];
        $arry2[] = 1;
        $arry2[] = 2;
        $arry2[] = 3;
        $arry2[] = "hello";
        $arry2['SE'] = "world";
    ?> <?php print_r($arry);?>
        <pre><?php print_r($arry);?></pre>
        <pre><?php print_r($arry1);?></pre>
        <pre><?php print_r($arry2);?></pre>

        <?php for($i = 0; $i < count(array2); $i++){ ?>
        <h3><?php echo $arry2[$i]; ?></h3>
        <?php } ?>

        <?php foreach($arry2 as $key => $value){ ?>
            <h3><?php echo $arry2[key]; ?>: <?php echo $value; ?></h3>
            <?php } ?>

    </body>
</html>

