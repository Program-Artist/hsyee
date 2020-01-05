<div class="box">
    <div class="box-content">
        <div class="box-header">
            <h1>录入成绩</h1>
        </div><!--box-header end-->
        <div class="box-search">
            <link href="static/admin/css/color.css">
            <span>学年：</span>
            <select>
                <option name="year" value="2">2019-2020</option>
                <option name="year" value="1">2018-2019</option>
            </select>
            <span style="margin-left:15px">年级：</span>
            <select>
                <option name="grade" value="7">7</option>
                <option name="grade" value="6">6</option>
                <option name="grade" value="5">5</option>
                <option name="grade" value="4">4</option>
                <option name="grade" value="3">3</option>
                <option name="grade" value="2">2</option>
                <option name="grade" value="1">1</option>
            </select>
            <span style="margin-left:15px">班级：</span>
            <select>
                <option name="class" value="7">7</option>
                <option name="class" value="6">6</option>
                <option name="class" value="5">5</option>
                <option name="class" value="4">4</option>
                <option name="class" value="3">3</option>
                <option name="class" value="2">2</option>
                <option name="class" value="1">1</option>
            </select>
            <span style="margin-left:15px">科目：</span>
            <select>
                <option name="subject" value="0">physical</option>
                <option name="subject" value="1">chinese</option>
                <option name="subject" value="2">math</option>
                <option name="subject" value="3">english</option>
            </select>
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