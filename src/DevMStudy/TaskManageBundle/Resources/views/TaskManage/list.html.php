<?php $view->extend('DevMStudyTaskManageBundle::layout.html.php') ?>

<?php $view['slots']->set('title', 'DevMStudyTaskManageBundle:TaskManage:list') ?>

<?php $view['slots']->start('body') ?>
<h1>Welcome to the TaskManage:list page</h1>

<a href="#" class="btn btn-primary">新規登録</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>題名</th>
            <th>担当者</th>
            <th>開始日</th>
            <th>期日</th>
            <th>進捗率</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>#1</td>
            <td><a href="#">XXXXをやる</a></td>
            <td>湯比呂 太郎</td>
            <td>2013-08-01</td>
            <td>2013-08-10</td>
            <td>0%</td>
        </tr>
        <tr>
            <td>#2</td>
            <td><a href="#">YYYYをやる</a></td>
            <td>湯比呂 花子</td>
            <td>2013-08-03</td>
            <td>2013-08-07</td>
            <td>30%</td>
        </tr>
        <tr>
            <td>#3</td>
            <td><a href="#">ZZZZをやる</a></td>
            <td>湯比呂 二郎</td>
            <td>2013-08-01</td>
            <td>2013-08-10</td>
            <td>20%</td>
        </tr>
    </tbody>
</table>
<?php $view['slots']->stop() ?>
