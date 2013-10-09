<?php $view->extend('DevMStudyTaskManageBundle::layout.html.php') ?>

<?php $view['slots']->set('title', 'DevMStudyTaskManageBundle:TaskManage:create') ?>

<?php $view['slots']->start('body') ?>
<h1>Welcome to the TaskManage:create page</h1>

<form action="" method="post" class="form-horizontal" role="form">
    <div class="form-group">
        <label for="Title" class="col-lg-2 control-label">題名</label>
        <div class="col-lg-5">
            <input type="text" class="form-control" id="Title" placeholder="題名" />
        </div>
    </div>

    <div class="form-group">
        <label for="Detail" class="col-lg-2 control-label">詳細</label>
        <div class="col-lg-5">
            <textarea class="form-control" id="Detail" placeholder="詳細" rows="10"></textarea>
        </div>
    </div>

    <div class="form-group">
        <label for="Assignee" class="col-lg-2 control-label">担当者</label>
        <div class="col-lg-5">
            <select class="form-control" id="Assignee">
                <option>選択してください</option>
                <option>湯比呂 太郎</option>
                <option>湯比呂 花子</option>
                <option>湯比呂 二郎</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label for="StartDate" class="col-lg-2 control-label">開始日</label>
        <div class="col-lg-5">
            <input type="date" class="form-control" id="StartDate" />
        </div>
    </div>

    <div class="form-group">
        <label for="DueDate" class="col-lg-2 control-label">期日</label>
        <div class="col-lg-5">
            <input type="date" class="form-control" id="DueDate" />
        </div>
    </div>

    <div class="form-group">
        <div for="DueDate" class="col-lg-2 control-label"></div>
        <div class="col-lg-5">
            <button type="submit" class="btn btn-primary">登録する</button>
            <a href="" class="btn btn-default">キャンセル</a>
        </div>
    </div>
</form>
<?php $view['slots']->stop() ?>
