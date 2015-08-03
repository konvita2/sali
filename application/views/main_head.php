<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="/css/bootstrap.css"/>
    <link rel="stylesheet" href="/css/style.css"/>
    <script type="text/javascript" src='/js/jquery-2.1.4.js'></script>
    <script type="text/javascript" src="/js/bootstrap.js"></script>
    
    <?php 
    if(isset($tit)){
        echo "<title>$tit</title>";
    }
    else{
        echo "---";
    }    
    ?>
    
</head>