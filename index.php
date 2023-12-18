<body>
    <h1>this is PHP <?='Hello World'; ?></h1>
    <div>
        <p>1</p>
        <?php
        $var_a = 1;
        $var_a ="1";
        print_r($var_a);
        var_dump($var_a);
        echo $var_a + 2;
        {
            echo "<h1>my h1</h1>";
            ?>
            <p>2</p>
            <?php
        }
        ?>
        <p>3</p>
    </div>
</body>
