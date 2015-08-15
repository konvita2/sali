<?
$this->load->helper('form');
?>

<!DOCTYPE html>
<html lang="ru">

<? $this->load->view('main_head'); ?>

<body>

<? $this->load->view('main_navbar'); ?>

<div class="container">

    <h3>Административный раздел</h3>

            <?php
                $ar = array('class' => 'btn btn-primary');
                echo anchor('categ','Категории товаров',$ar);
            ?>

            <?php
            $ar = array('class' => 'btn btn-primary');
            echo anchor('goods','Товары',$ar);
            ?>

            <?php
                $ar = array('class' => 'btn btn-primary');
                echo anchor('#','Пользователи',$ar);
            ?>

</div>

</body>
</html>
