
<div id="editor">

    <!--<textarea id="editor" placeholder="这里输入内容" autofocus></textarea>-->

</div>
<script type="text/javascript" src="static/admin/js/wangEditor.js"></script>
<script type="text/javascript">
    var E = window.wangEditor;
    var editor = new E('#editor');
    // 或者 var editor = new E( document.getElementById('editor') )
    editor.customConfig.menus = [
        'undo', 'redo',
        'fontName', 'fontSize', 'foreColor', 'backColor',// 背景颜色
        'bold', 'italic', 'underline', 'strikeThrough',
        'justify',  // 对齐方式
        'table',  // 表格
        'quote',  // 引用
        'emoticon',  // 表情
        'link',  // 插入链接
        'image'  // 插入图片
    ];
    editor.create()
</script>

<button class="btn btn-blue" type="submit">保存</button>

<div class="box-table">
    <table class="list">
        <thead>
        <tr>
            <th>学号</th>
            <th>姓名</th>
            <th>性别</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <?php
            $id = Yii::app()->request->getParam('id');
            $name = Yii::app()->request->getParam('name');
            $gender = Yii::app()->request->getParam('gender');
            ?>
            <td><?php echo $id ?></td>
            <td><?php echo $name ?></td>
            <td><?php echo $gender ?></td>
        </tr>
        </tbody>
    </table>
</div>

<div class="box-table">
    <table class="list">
        <thead>
        <tr>
            <th><?php echo $s_list[1]->year ?></th>
            <th>语文</th>
            <th>数学</th>
            <th>英语</th>
            <th>物理</th>
            <th>化学</th>
            <th>生物</th>
            <th>政治</th>
            <th>历史</th>
            <th>地理</th>
            <th>体育</th>
            <th>总分</th>
            <th>班排</th>
            <th>级排</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>期中成绩</td>
            <td><?php echo $s_list[1]->score1 ?></td>
            <td><?php echo $s_list[2]->score1 ?></td>
            <td><?php echo $s_list[3]->score1 ?></td>
            <td><?php echo $s_list[4]->score1 ?></td>
            <td><?php echo $s_list[5]->score1 ?></td>
            <td><?php echo $s_list[6]->score1 ?></td>
            <td><?php echo $s_list[7]->score1 ?></td>
            <td><?php echo $s_list[8]->score1 ?></td>
            <td><?php echo $s_list[9]->score1 ?></td>
            <td><?php echo $s_list[0]->score1 ?></td>
            <td><?php echo $s_list[0]->score1 +
                    $s_list[1]->score1 + $s_list[2]->score1 + $s_list[3]->score1 +
                    $s_list[4]->score1 + $s_list[5]->score1 + $s_list[6]->score1 +
                    $s_list[7]->score1 + $s_list[8]->score1 + $s_list[9]->score1 ?></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>期末成绩</td>
            <td><?php echo $s_list[1]->score2 ?></td>
            <td><?php echo $s_list[2]->score2 ?></td>
            <td><?php echo $s_list[3]->score2 ?></td>
            <td><?php echo $s_list[4]->score2 ?></td>
            <td><?php echo $s_list[5]->score2 ?></td>
            <td><?php echo $s_list[6]->score2 ?></td>
            <td><?php echo $s_list[7]->score2 ?></td>
            <td><?php echo $s_list[8]->score2 ?></td>
            <td><?php echo $s_list[9]->score2 ?></td>
            <td><?php echo $s_list[0]->score2 ?></td>
            <td><?php echo $s_list[0]->score2 +
                    $s_list[1]->score2 + $s_list[2]->score2 + $s_list[3]->score2 +
                    $s_list[4]->score2 + $s_list[5]->score2 + $s_list[6]->score2 +
                    $s_list[7]->score2 + $s_list[8]->score2 + $s_list[9]->score2 ?></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
</div>