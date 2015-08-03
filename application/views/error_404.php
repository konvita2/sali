<!DOCTYPE html>
<html lang="ru">

<?php $this->load->view('main_head'); ?>

<body>

<?php 
$data['tit'] = 'Page not found';
$this->load->view('main_navbar', $data); 
?>

<div class="container">
    <div class="jumbotron">
    <h1>Страница не найдена</h1> 
    <p>Ошибка 404</p> 
  </div>

</div>

</body>
</html>


