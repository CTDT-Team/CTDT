<?php
$this->Paginator->options(array(
    'url' => array('bct' => true, 'action' => 'bct_da_danh_gia'),
    'update' => '#datarows',
    'evalScripts' => true,
    'data' => http_build_query($this->request->data),
    'method' => 'POST'
));

//debug($ketQuaDanhGias);die;
?>

<table class="table table-bordered table-hover has-checked-item">
    <thead>

        <tr class="headings">
            <th>#</th>


            <th class="column-title"><?php echo $this->Paginator->sort('evaluation_round_id', 'Đợt đánh giá'); ?></th>


            <th class="column-title"><?php echo $this->Paginator->sort('course_id', 'Khóa học'); ?></th>
            <th class="column-title"><?php echo $this->Paginator->sort('start_date', 'Ngày bắt đầu dạy'); ?></th>

            <th class="column-title"><?php echo $this->Paginator->sort('pass', 'Kết quả'); ?></th>
            <th class="column-title"><?php echo $this->Paginator->sort('not_exist', 'Không tìm thấy khóa học'); ?></th>

            <th class="column-title"><?php echo $this->Paginator->sort('reason', 'Ghi chú'); ?></th>
            <th class="column-title"><?php echo $this->Paginator->sort('supporter_id', 'Bán chuyên trách'); ?></th>


            <th class="column-title"><?php echo $this->Paginator->sort('id'); ?></th>

            <th class="column-title no-link last"><span class="nobr">Hành động</span></th>

        </tr>
    </thead>

    <tbody>
        <?php $stt = (($this->Paginator->params['paging']['EvaluationResult']['page'] - 1) * $this->Paginator->params['paging']['EvaluationResult']['limit']) + 1; ?>
        <?php foreach ($ketQuaDanhGias as $ketQuaDanhGia): ?>
            <tr id="row-<?php echo $ketQuaDanhGia['EvaluationResult']['id'] ?>">
                <td><?php echo $stt++; ?></td>

                <td class="">
                    <?php echo $ketQuaDanhGia['EvaluationRound']['title']; ?>
                </td>
                <td class="">
                    <?php
                    if (empty($ketQuaDanhGia['Course']['lms_course_id'])) {
                        $url = "https://lms.tvu.edu.vn/course/search.php?q=" . $ketQuaDanhGia['Course']['subject_code'];
                    } else {
                        $url = "https://lms.tvu.edu.vn/course/view.php?id=" . $ketQuaDanhGia['Course']['lms_course_id'];
                    }
                    echo $this->Html->link($ketQuaDanhGia['Course']['fullname'], $url, array('target' => "_blank"));
                    ?>
                </td>
                <td><?php echo $ketQuaDanhGia['Course']['startdate']; ?></td>
                <td class=""><?php echo $this->Common->showPass($ketQuaDanhGia['EvaluationResult']['pass']); ?>&nbsp;</td>
                <td class=""><?php echo h($ketQuaDanhGia['EvaluationResult']['not_exist']); ?>&nbsp;</td>
                <td class=""><?php echo h($ketQuaDanhGia['EvaluationResult']['reason']); ?>&nbsp;</td>
                <td class=""><?php echo h($ketQuaDanhGia['Supporter']['last_name'] . ' ' . $ketQuaDanhGia['Supporter']['first_name']); ?>&nbsp;</td>
                <td class=""><?php echo h($ketQuaDanhGia['EvaluationResult']['id']); ?>&nbsp;</td>
                <td>
                    <?php
                    if (!$ketQuaDanhGia['EvaluationRound']['isCompleted'])
                        echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('bct' => true, 'action' => 'edit', $ketQuaDanhGia['EvaluationResult']['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle' => 'tooltip', 'title' => 'edit'));
                    ?>
                </td>



            </tr>
<?php endforeach; ?>
    </tbody>


</table>
<?php echo $this->element("pagination"); ?>  

<?php
echo $this->Js->writeBuffer();
