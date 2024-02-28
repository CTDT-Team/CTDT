<?php
$this->Paginator->options(array(
    'url' => array('action' => 'index'),
    'update' => '#datarows',
    'evalScripts' => true,
    'data' => http_build_query($this->request->data),
    'method' => 'POST'
));
?>


<table class="table table-bordered table-hover has-checked-item">
    <thead>

        <tr class="headings">
            <th>#</th>


            <th class="column-title"><?php echo $this->Paginator->sort('code', 'Mã chương trình đào tạo'); ?></th>


            <th class="column-title"><?php echo $this->Paginator->sort('level_id', 'Trình độ đào tạo'); ?></th>


            <th class="column-title"><?php echo $this->Paginator->sort('major_id', 'Ngành đào tạo'); ?></th>


            <th class="column-title"><?php echo $this->Paginator->sort('form_of_trainning_id', 'Hình thức đào tạo'); ?></th>


            <th class="column-title"><?php echo $this->Paginator->sort('Tên tiếng Việt'); ?></th>


            <th class="column-title"><?php echo $this->Paginator->sort('Tên tiếng Anh'); ?></th>


            <th class="column-title"><?php echo $this->Paginator->sort('Số tín chỉ'); ?></th>


            <th class="column-title"><?php echo $this->Paginator->sort('Thời gian đào tạo'); ?></th>


            <th class="column-title"><?php echo $this->Paginator->sort('Đối tượng tuyển sinh'); ?></th>


            <th class="column-title"><?php echo $this->Paginator->sort('Thang điểm'); ?></th>


            <th class="column-title"><?php echo $this->Paginator->sort('Điều kiện tốt nghiệp'); ?></th>


            <th class="column-title"><?php echo $this->Paginator->sort('Văn bằng tốt nghiệp'); ?></th>


            <th class="column-title"><?php echo $this->Paginator->sort('id'); ?></th>

            <th class="column-title no-link last"><span class="nobr">Hành động</span></th>
            <th><input type="checkbox" id="check-all" </th>
        </tr>
    </thead>

    <tbody>
        <?php $stt = (($this->Paginator->params['paging']['Curriculumn']['page'] - 1) * $this->Paginator->params['paging']['Curriculumn']['limit']) + 1; ?>
        <?php foreach ($curriculumns as $curriculumn): ?>
            <tr id="row-<?php echo $curriculumn['Curriculumn']['id'] ?>">
                <td><?php echo $stt++; ?></td>

                <td class=""><?php echo h($curriculumn['Curriculumn']['code']); ?>&nbsp;</td>
                <td class="">
                    <?php echo $this->Html->link($curriculumn['Level']['name'], array('controller' => 'levels', 'action' => 'view', $curriculumn['Level']['id'])); ?>
                </td>
                <td class="">
                    <?php echo h($curriculumn['Major']['name']); ?>&nbsp;</td>
                </td>
                <td class="">
                    <?php echo h($curriculumn['FormOfTrainning']['name']); ?>&nbsp;</td>
                </td>
                <td class=""><?php echo h($curriculumn['Curriculumn']['name_vn']); ?>&nbsp;</td>
                <td class=""><?php echo h($curriculumn['Curriculumn']['name_eng']); ?>&nbsp;</td>
                <td class=""><?php echo h($curriculumn['Curriculumn']['credit']); ?>&nbsp;</td>
                <td class=""><?php echo h($curriculumn['Curriculumn']['trainning_time']); ?>&nbsp;</td>
                <td class=""><?php echo h($curriculumn['Curriculumn']['enrollment_subject']); ?>&nbsp;</td>
                <td class=""><?php echo h($curriculumn['Curriculumn']['point_ladder']); ?>&nbsp;</td>
                <td class=""><?php echo h($curriculumn['Curriculumn']['graduation_condition']); ?>&nbsp;</td>

                <td class="">
                    <a href="/files/curriculumn/image_filename/<?php echo $curriculumn['Curriculumn']['image_path'] . "/" . $curriculumn['Curriculumn']['image_filename']; ?>">
                        Tải văn bằng </a>&nbsp;</td>
                <td class=""><?php echo h($curriculumn['Curriculumn']['id']); ?>&nbsp;</td>
                <td>
                    <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('action' => 'edit', $curriculumn['Curriculumn']['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle' => 'tooltip', 'title' => 'edit')); ?>
                </td>
                <td>
                    <input type = "checkbox" class = "flat" name = "selete-item" value="<?php echo $curriculumn['Curriculumn']['id'] ?>">
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    <tfoot>
    <span class="pull-right">
        <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-plus"></i>Thêm mới'), "/curriculumns/add", ['class' => 'btn btn-info btn-xs', 'escape' => false, 'data-toggle' => 'tooltip', 'title' => 'Xóa các dòng đã chọn']); ?>                        <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-trash"></i>Xóa dòng chọn'), "#", array("id" => "delete-seleted", "class" => "btn btn-danger btn-xs", "escape" => false, "data-toggle" => "tooltip", "title" => "Xóa các dòng đã chọ")); ?>                    </span>
</tfoot>
</table>
<?php echo $this->element("pagination"); ?>  

<?php
echo $this->Js->writeBuffer();