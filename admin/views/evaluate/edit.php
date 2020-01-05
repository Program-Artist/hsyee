<?php  ?>

<div id="editor" name="content">
    <!--<textarea id="editor" placeholder="这里输入内容" autofocus></textarea>-->
    <p><?php echo $list[0] ?></p>
</div>

<script>
    var E = window.wangEditor;
    var editor = new E('#editor');
    editor.create();
        function save() {
            var content = editor.txt.text();

            $.ajax({
                type:'post',
                url:"<?= $this->createUrl('evaluate/save')?>",
                data:{'content':content,
                'id':'<?= $id = Yii::app()->request->getParam('id');?>'},
                dataType:'json',

                success:function(d) {
                   we.overlay('show');
                   we.success(d.msg,d.redirect);
                }
            });

        }
</script>
<button class="btn btn-blue" type="submit" onclick="save();">保存</button>

<!--</form>-->

<script type="text/javascript" src="static/admin/js/wangEditor.min.js"></script>
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
    editor.create();
    editor.setText();
</script>


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
<?php $grade = 7; ?>
<div class="box-table">
    <table class="list">
        <thead>
        <tr>
            <th><?php echo $list[1] ?></th>
            <th>语文</th>
            <th>数学</th>
            <th>英语</th>

            <?php if($grade > 6) {?>
            <th>物理</th>
            <th>化学</th>
            <th>生物</th>
            <th>政治</th>
            <th>历史</th>
            <th>地理</th>
            <?php } ?>

            <th>体育</th>
            <th>总分</th>
            <th>班排</th>
            <th>级排</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>期中成绩</td>
            <td><?php echo $list[2][1] ?></td>
            <td><?php echo $list[2][2] ?></td>
            <td><?php echo $list[2][3] ?></td>

            <?php if($grade > 6) {?>
            <td><?php echo $list[2][4] ?></td>
            <td><?php echo $list[2][5] ?></td>
            <td><?php echo $list[2][6] ?></td>
            <td><?php echo $list[2][7] ?></td>
            <td><?php echo $list[2][8] ?></td>
            <td><?php echo $list[2][9] ?></td>
            <?php } ?>

            <td><?php echo $list[2][0] ?></td>
            <td><?php echo $list[2][0] +
                    $list[2][1] + $list[2][2] + $list[2][3] +
                    $list[2][4] + $list[2][5] + $list[2][6] +
                    $list[2][7] + $list[2][8] + $list[2][9] ?></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>期末成绩</td>
            <td><?php echo $list[3][1] ?></td>
            <td><?php echo $list[3][2] ?></td>
            <td><?php echo $list[3][3] ?></td>

            <?php if($grade > 6) {?>
                <td><?php echo $list[3][4] ?></td>
                <td><?php echo $list[3][5] ?></td>
                <td><?php echo $list[3][6] ?></td>
                <td><?php echo $list[3][7] ?></td>
                <td><?php echo $list[3][8] ?></td>
                <td><?php echo $list[3][9] ?></td>
            <?php } ?>

            <td><?php echo $list[3][0] ?></td>
            <td><?php echo $list[3][0] +
                    $list[3][1] + $list[3][2] + $list[3][3] +
                    $list[3][4] + $list[3][5] + $list[3][6] +
                    $list[3][7] + $list[3][8] + $list[3][9] ?></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
</div>