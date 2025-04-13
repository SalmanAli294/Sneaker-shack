<?php
     $pictures = array('nike.png', 'adidas.png', 'puma.png', 'reebok.png', 'vans.png', 'newbalance.png');
    shuffle($pictures);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sneaker Shack – Step Into Style</title>
         </head>
         <body>
            <h1>Sneaker Shack – Step Into Style</h1>
                <div align="center">
                <table style="width: 100%; border: 0">
                    <tr>
                    <?php
                    for ($i = 0; $i < 3; $i++) {
                        echo "<td style=\"width: 33%; text-align: center\"><img src=\"";
                        echo $pictures[$i];
                        echo "\"/></td>";
                    }
                    ?>
                    </tr>
                </table>
                </div>
            </body>
        </html