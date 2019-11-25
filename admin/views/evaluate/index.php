<div class="box">
    <div class="box-content">
        <div class="box-header">
            <h1>考评管理</h1>
        </div><!--box-header end-->
        <div class="box-search">
            <link href="static/admin/css/color.css">
            <script type="text/javascript" src="static/admin/js/search.js"></script>
            <form action="<?php echo Yii::app()->request->url;?>" method="get">
                <input type="hidden" name="r" value="<?php echo Yii::app()->request->getParam('r');?>">
                <label style="margin-right:10px;">
                    <span>学号/姓名：</span>
                    <input id="key" type="text"
                           style="width: 100px; text-align: left; font-size: 14px;" />
                </label>
                <button class="btn btn-blue" type="button" onclick="search()">查询</button>
            </form>
        </div><!--box-search end-->
        <div class="box-table">
            <table class="list">
                <thead>
                <tr>
                    <th>学号</th>
                    <th>姓名</th>
                    <th>性别</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($s_list as $item) {?>
                    <tr>
                        <td><?php echo $item->s_id?></td>
                        <td><?php echo $item->s_name?></td>
                        <td><?php echo $item->s_gender?></td>
                        <?php
                        $write = array(
                                'id'=>$item->s_id,
                            'name'=>$item->s_name,
                            'gender'=>$item->s_gender
                        );
                        ?>
                        <td>
                            <a class="btn" href="<?php echo $this->createUrl('edit', $write);?>" title="填写"><i class="fa fa-edit"></i></a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
            <div class="box-page c"></div>
        </div><!--box-table end-->
    </div><!--box-content end-->
</div><!--box end-->