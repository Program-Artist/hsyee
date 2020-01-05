<div class="box">
    <div class="box-content">
        <div class="box-header">
            <h1>录入成绩</h1>
        </div><!--box-header end-->
        <div class="box-search">
            <link href="static/admin/css/color.css">
            <!--            <script type="text/javascript" src="static/admin/js/search.js"></script>-->
            <!--            <form action="--><?php //echo Yii::app()->request->url;?><!--" method="get">-->
            <!--                <input type="hidden" name="r" value="-->
            <?php //echo Yii::app()->request->getParam('r');?><!--">-->
            <!--                <label style="margin-right:10px;">-->
            <!--                    <span>学号/姓名：</span>-->
            <!--                    <input id="key" type="text"-->
            <!--                           style="width: 100px; text-align: left; font-size: 14px;" />-->
            <!--                </label>-->
            <!--                <button class="btn btn-blue" type="button" onclick="search()">查询</button>-->
            <!--            </form>-->
        </div><!--box-search end-->
        <?php $form = $this->beginWidget('CActiveForm', get_form_list()); ?>
        <div class="box-table">
            <table class="list">
                <thead>
                <tr>
                    <th>学号</th>
                    <th>姓名</th>
                    <th>体育成绩</th>
                </tr>
                </thead>
                <tbody>
                <?php $n = 0; ?>
                <?php foreach ($scores_list as $item) { ?>
                    <input type="hidden" name="info[<?php echo $n ?>][0]" value="<?php echo $item['s_id'] ?>"
                    <tr>
                        <td width="33%"><?php echo $item['s_id'] ?></td>
                        <td width="33%"><?php echo $item['s_name'] ?></td>
                        <td width="33%"><input name="info[<?php echo $n ?>][1]" type="text"
                                               value="<?php echo $item['score1'] ?>"/>
                        </td>
                        <!--                        --><?php
                        //                        $write = array(
                        //                            'id'=>$item->s_id,
                        //                            'name'=>$item->s_name,
                        //                            'gender'=>$item->s_gender
                        //                        );
                        //                        ?>
                        <!--                        <td>-->
                        <!--                            <a class="btn" href="-->
                        <?php //echo $this->createUrl('edit', $write);?><!--" title="填写"><i class="fa fa-edit"></i></a>-->
                        <!--                        </td>-->
                    </tr>
                    <?php
                    $n = $n + 1;
                } ?>
                </tbody>
            </table>
            <div class="box-page c"></div>
            <div class="box-detail-submit">
                <button onclick="submitType='baocun';alert('保存成功')" class="btn btn-blue" type="submit">保存修改</button>
            </div>
        </div><!--box-table end-->
        <?php $this->endWidget(); ?>
    </div><!--box-content end-->
</div><!--box end-->