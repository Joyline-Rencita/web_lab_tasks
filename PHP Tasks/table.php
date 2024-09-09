<html>
    <head><title>Table</title></head>
    <body>
        
        <table>
            <tr>
                <th>Number</th>
                <th>Square</th>
                <th>Cube</th>
            </tr>
            <?php
                for($i=1;$i<=10;$i++){
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $i*$i; ?></td>
                        <td><?php echo $i*$i*$i; ?></td>
                    </tr>
            <?php    } ?>
           
        </table>
    </body>
</html>
