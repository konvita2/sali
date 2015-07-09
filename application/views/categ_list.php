<!DOCTYPE html>
<html lang="ru">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" href="/css/bootstrap.css"/>
        <link rel="stylesheet" href="/css/style.css"/>
        <script type="text/javascript" src='/js/jquery-2.1.4.js'></script>
        <script type="text/javascript" src="/js/bootstrap.js"></script> 
        
        <script type="text/javascript">
            
            // not use for a while
            function open_editor(adr){
                base_url = '<?=site_url();?>';
                alert(base_url + '/categ/edit/' + adr);
                //window.open();
            }
            
            
        </script>
        
    </head>   

    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">

                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Сали</a>
                </div>

                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li><a href="#">Товары</a></li>
                        <li><a href="#">Оплата и доставка</a></li>
                        <li><a href="#">Контакты</a></li>                         
                    </ul>
                </div>
            </div>
        </nav>
        
        <!--
        <div class="container">
            <div class="row">
                <div class="col-sm-3 sidebar"></div>
                <div class="col-sm-9"></div>
            </div>           

        </div>
        -->
        
        <div class="container">
            
            <h1>Категории товаров</h1>
            
            <p>Родитель:  </p>
            
            <button class="btn btn-default">Новая категория</button>
            
            <table class="table table-condensed">
                
                <thead>
                    <tr>
                        <th>Код</th>
                        <th>Наименование</th>  
                        <th>Действия</th>                          
                    </tr>
                </thead>
                
                <tbody>
                    
                    <?php foreach($qdata as $qrow): ?>
                    
                    <tr>
                        <td><?=$qrow['id'];?></td>
                        <td>
                            <a href="<?php echo site_url('categ/edit').'/'.$qrow['id'];?>">
                                <?=$qrow['nam'];?>
                            </a>
                        </td>
                        
                        <td>
                            <button class="btn btn-default"
                                    onclick="">Уд</button>                            
                        </td>
                    </tr>   
                    
                    
                    <?php endforeach ?>
                    
                </tbody>
                
            </table>
            



    <!-- <div class="container"> -->
        <ul>
            <li>
                Ford
                <ul>
                    <li>Escort</li>
                    <li>Sierra</li>
                    <li>Mondeo</li>
                </ul>
            </li>

            <li>Opel</li>


            <li></li>

        </ul>
    <!-- </div> -->
        </div>
    </body>

</html>