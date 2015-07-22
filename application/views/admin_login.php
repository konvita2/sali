<?
$this->load->helper('form');
?>

<!DOCTYPE html>
<html lang="ru">

<? $this->load->view('main_head'); ?>

<body>

<? $this->load->view('main_navbar'); ?>

<div class="container">

    <h3>Авторизуйтесь для работы в административном разделе:</h3>

    <? echo form_open('admin/login',array('class' => 'form-horizontal')); ?>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="login">Логин:</label>
            <div class="col-sm-4 control-label">
                <input type="text" class="form-control" id="login" name="login"/>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Пароль</label>
            <div class="col-sm-4 control-label">
                <input type="password" class="form-control" id="password" name="password"/>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2 col-sm-offset-2">
                <button type="submit" class="btn btn-primary" name="btn_save">Вход</button>
            </div>
        </div>

    <? echo form_close(); ?>

</div>

</body>
</html>