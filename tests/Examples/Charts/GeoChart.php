<?php
    $popularity = $lava->DataTable();
    $popularity->addStringColumn('Country')
               ->addNumberColumn('Popularity')
               ->addRow(['Germany', 200])
               ->addRow(['United States', 300])
               ->addRow(['Brazil', 400])
               ->addRow(['Canada', 500])
               ->addRow(['France', 600])
               ->addRow(['RU', 700]);

    $lava->GeoChart('Popularity', $popularity, [
        'width' => $width,
        'height' => $height
    ]);
?>

<html>
    <head></head>
    <body>
        <div class="render" id="chart"></div>
        <?= $lava->render('GeoChart', 'Popularity', 'chart'); ?>
    </body>
</html>
