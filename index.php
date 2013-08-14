<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="refresh" content="30; URL=http://flexmktg.com/gerome/">
        <title><?= strtoupper(str_replace('/', '', dirname($_SERVER['PHP_SELF']))) ?> DOWNLOADS</title>
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        <style>
            body {
                padding: 20px;
            }
            legend {
                color: #999999;
            }
            legend i {
                color: #B6D8FF;
            }
            a {
              font-family: helvetica;
              font-size: 18px;
              font-weight: 200;
              color: #777777;
              text-decoration: none;
            }
            a:hover {
                text-decoration: none;
            }
            .last {
                text-align:right;
                font-size:12px;
                color: #ccc;
                font-weight: 200;
            }
            .sorry {
                font-size:18px;
                color: #ccc;
                font-weight: 200;
                text-align:center;
                padding-top:100px;
            }
            .sorry i {
                color: #FFE5BE;
            }
            .date {
                display:inline-block;
                padding-left: 10px;
            }
            .lead {
                margin-bottom: 0;
            }
            hr {
                margin: 0 0 20px;
            }
        </style>
    </head>
    <body>
        <p class="lead"><i class="icon-cloud-download"></i> Avalable items for download</p>
        <hr>
        <?php
            $dirname = ".";
            $dir = opendir($dirname);
            $files = 0;
            while(false != ($file = readdir($dir)))
            {
                if(($file != "index.php") and (substr($file, 0, 1) != '.'))
                {
                    echo('<div class="row-fluid">');
                    echo('<div class="span6"><a target="_blank" href="'.dirname($_SERVER['PHP_SELF']).'/'.$file.'" download><i class="icon-download"></i> '.$file.'</a></div>');
                    echo('<div class="span6 last"><i class="icon-cloud"></i> '.round((filesize($file)/1000)/1000, 1).'MB <div class="date">'.date("m/d/y H:i", filemtime($file)).'</div></div>');
                    echo('</div>');
                }
                $files ++;
            }
            if ($files == 0) {
                echo('<div class="sorry"><i class="icon-warning-sign"></i> Sorry, no files to download.</div>');
            }
        ?>
    </body>
    
    
    
