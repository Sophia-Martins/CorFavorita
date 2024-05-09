<body>
    <div>
        <center>
        <?php
        $favcolor = $_POST ['favcolor'];

        switch ($favcolor){
            case "vermelho";

            ?><div style=" border: solid red; width: 300px; height: 200px"> <h1 style="color: red;"><?php echo "<p>Sua cor favorita é vermelho!</p>";?></h1></div><?php
            break;

            case "azul";
            ?><div style=" border: solid blue; width: 300px; height: 200px"> <h1 style="color: blue;"><?php echo "<p>Sua cor favorita é azul!</p>";?></h1></div><?php
            break;

            case "verde";
            ?><div style=" border: solid green; width: 300px; height: 200px"> <h1 style="color: green;"><?php echo "<p>Sua cor favorita é verde!</p>";?></h1></div><?php
            break;

            default:
            ?><div style=" border: solid ; width: 300px; height: 200px"> <h1 ><?php echo "<p>Sua cor favorita não é vermelho, azul ou verde!</p>";?></h1></div><?php
            
        }
        ?>
        </center>
    </div>
</body>