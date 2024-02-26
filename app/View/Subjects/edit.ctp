
<div class="col-md-9 col-md-offset-1 well">
    <h4 class="pink">
        <i class="ace-icon fa fa-hand-o-right green"></i>
        <a href="#" class="blue"> <?php echo __('Thay đổi thông tin học phần'); ?> </a>
    </h4>
    <div class="hr hr-18 dotted hr-double"></div>


    <?php
    echo $this->Form->create('Subject', array(
        'role' => 'form',
        'class' => 'form-horizontal',
        'inputDefaults' => array(
            'class' => 'form-control',
        )
            )
    );
    ?>
    <?php echo $this->Form->input('code', ['label' => 'Mã học phần']); ?>
    <?php echo $this->Form->input('name', ['label' => 'Tên học phần']); ?>
    <?php echo $this->Form->input('theory_credit', ['label' => 'Số tín chỉ lý thuyết']); ?>
    <?php echo $this->Form->input('practice_credit', ['label' => 'Số tín chỉ thực hành']); ?>
    <?php echo $this->Form->input('theory_hour', ['label' => 'Số giờ lý thuyết']); ?>
    <?php echo $this->Form->input('practice_hour', ['label' => 'Số giờ thực hành']); ?>
    <?php echo $this->Form->input('self_learning_time', ['label' => 'Số giờ tự học']); ?>
    <?php echo $this->Form->input('note', ['label' => 'Ghi chú']); ?>
    <?php echo $this->Form->input('describe', ['label' => 'Miêu tả']); ?>
    <?php echo $this->Form->input('syllabus_filename'); ?>
    <?php echo $this->Form->input('syllabus_path'); ?>
    <?php echo $this->Form->input('semester_id', ['label' => 'Học kỳ']); ?>
    <?php
    echo $this->Form->input('syllabus_filename', array('type' => 'file', 'label' => 'File đề cương:')); 
    echo $this->Form->input('syllabus_path', array('type' => 'hidden')); ?>
    <?php echo $this->Form->input('id'); ?>
    <div class="clearfix form-actions">
        <div class="pull-right">
            <?php echo $this->Form->button('<i class="ace-icon fa fa-check bigger-110"></i>Lưu', array('class' => 'btn btn-info', 'type' => 'submit')); ?>
            &nbsp; &nbsp; &nbsp;
<?php echo $this->Html->link('<i class="ace-icon fa fa-undo bigger-110"></i>Hủy thao tác', array('action' => 'index'), array('class' => 'btn btn-warning', 'escape' => false)); ?>

        </div>
    </div>
    <div class="hr hr-24"></div>
<?php echo $this->Form->end(); ?>

</div>