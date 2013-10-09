<?php $view->extend('DevMStudyTaskManageBundle::layout.html.php') ?>

<?php $view['slots']->set('title', 'DevMStudyTaskManageBundle:TaskManage:update') ?>

<?php $view['slots']->start('body') ?>
<h1>Welcome to the TaskManage:update page</h1>

<form action="" method="" class="form-horizontal" role="form">
    <div class="form-group">
        <label for="Title" class="col-lg-2 control-label">題名</label>
        <div class="col-lg-5">
            <input type="text" class="form-control" id="Title" placeholder="題名" value="XXXXをやる" />
        </div>
    </div>

    <div class="form-group">
        <label for="Detail" class="col-lg-2 control-label">詳細</label>
        <div class="col-lg-5">
            <textarea class="form-control" id="Detail" placeholder="詳細" rows="10">XXXXをああしてこうしてください</textarea>
        </div>
    </div>

    <div class="form-group">
        <label for="Assignee" class="col-lg-2 control-label">担当者</label>
        <div class="col-lg-5">
            <select class="form-control" id="Assignee">
                <option>選択してください</option>
                <option selected="selected">湯比呂 太郎</option>
                <option>湯比呂 花子</option>
                <option>湯比呂 二郎</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label for="StartDate" class="col-lg-2 control-label">開始日</label>
        <div class="col-lg-5">
            <input type="date" class="form-control" id="StartDate" value="2013-08-01" />
        </div>
    </div>

    <div class="form-group">
        <label for="DueDate" class="col-lg-2 control-label">期日</label>
        <div class="col-lg-5">
            <input type="date" class="form-control" id="DueDate" value="2013-08-10" />
        </div>
    </div>

    <div class="form-group">
        <label for="Progress" class="col-lg-2 control-label">担当者</label>
        <div class="col-lg-5">
            <select class="form-control" id="Progress">
                <option>0%</option>
                <option>10%</option>
                <option>20%</option>
                <option>30%</option>
                <option>40%</option>
                <option>50%</option>
                <option>60%</option>
                <option>70%</option>
                <option>80%</option>
                <option>90%</option>
                <option>100%</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <div for="DueDate" class="col-lg-2 control-label"></div>
        <div class="col-lg-5">
            <button type="submit" class="btn btn-primary">更新する</button>
            <button type="button" onclick="javascript:confirmDelete()" class="btn btn-danger">削除する</button>
            <a href="" class="btn btn-default">キャンセル</a>
        </div>
    </div>
</form>

<script type="text/javascript">
    function confirmDelete() {
        if (window.confirm('本当に削除しますか？')) {

        }
    }
</script>
<?php $view['slots']->stop() ?>
