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

            <? //$this->load->library('ion_auth'); ?>
            <? $this->load->helper('url'); ?>


            <? if($this->ion_auth->logged_in()): ?>

            <div class="form-group">
                <?php
                $usr = $this->ion_auth->user()->row();
                $usr = $usr->username;
                ?>

                <?php
                $ar = array(
                    'class' => 'btn btn-default navbar-btn navbar-right',
                    'style' => 'margin-right: 5px;');
                echo anchor('admin/logout','Выход ' . $usr, $ar);
                ?>
            </div>

            <? else: ?>

            <? endif ?>

        </div>
    </div>
</nav>