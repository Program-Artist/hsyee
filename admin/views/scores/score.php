<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        header h1{
            margin-right: 25px;
            margin-top: 15px;
            margin-left: 25px;
            padding-bottom: 15px;
            border-bottom: 1px solid #ddd;
        }
        .main{
            margin: 25px;
            margin-top: 10px;
        }

        table{
            text-align: center;
            border-collapse: collapse;
            width: 100%;
        }

        .buttons{
            align-items: center;
        }

    </style>
</head>
<body>

<header>
    <h1 >班级信息</h1>
</header>

<div class="main">
    <div class="box-table">
        <table class="list">
            <tr>
                <th class="num" rowspan="2">学号</th>
                <th rowspan="2">姓名</th>


                <th colspan="10" style="text-align: center">成绩</th>

            </tr>
            <tr>
                <th>体育</th>
                <th>语文</th>
                <th>数学</th>
                <th>英语</th>
                <th>物理</th>
                <th>化学</th>
                <th>生物</th>
                <th>政治</th>
                <th>历史</th>
                <th>地理</th>
            </tr>
            <?php foreach ($sc_list as $item) {?>
                <tr>
                    <td><?php echo $item['s_id'] ?></td>
                    <td><?php echo $item['s_name'] ?></td>
                    <td><?php echo $item['pe_score1'] ?></td>
                    <td><?php echo $item['ch_score1'] ?></td>
                    <td><?php echo $item['math_score1'] ?></td>
                    <td><?php echo $item['en_score1'] ?></td>
                    <td><?php echo $item['ph_score1'] ?></td>
                    <td><?php echo $item['chem_score1'] ?></td>
                    <td><?php echo $item['bi_score1'] ?></td>
                    <td><?php echo $item['ph_score1'] ?></td>
                    <td><?php echo $item['hi_score1'] ?></td>
                    <td><?php echo $item['geo_score1'] ?></td>

                </tr>
            <?php } ?>
   </table>


    </div>
</div>

</body>
</html>