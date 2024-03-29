
<div class="row">
    <div class="col-xs-12">

        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title"><?php  echo __('State'); ?></h3>
                <div class="box-tools pull-right">
                    <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i> Edit'), array('action' => 'edit', $state['State']['id']), array('class' => 'btn btn-primary', 'escape' => false)); ?>
                </div>
            </div>

            <div class="box-body table-responsive">
                <table id="States" class="table table-bordered table-striped">
                    <tbody>
                        <tr>		<td><strong><?php echo __('Name'); ?></strong></td>
		<td>
			<?php echo h($state['State']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($state['State']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
			<?php echo h($state['State']['modified']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($state['State']['id']); ?>
			&nbsp;
		</td>
</tr>                    </tbody>
                </table><!-- /.table table-striped table-bordered -->
            </div><!-- /.table-responsive -->

        </div><!-- /.view -->

        
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title"><?php echo __('Related Curriculumns'); ?></h3>
                    <div class="box-tools pull-right">
    <?php echo $this->Html->link('<i class="glyphicon glyphicon-plus"></i> '.__('New Curriculumn'), array('controller' => 'curriculumns', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>                    </div><!-- /.actions -->
                </div>
    <?php if (!empty($state['Curriculumn'])): ?>

                <div class="box-body table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                		<th class="text-center"><?php echo __('Code'); ?></th>
		<th class="text-center"><?php echo __('Name Vn'); ?></th>
		<th class="text-center"><?php echo __('Name Eng'); ?></th>
		<th class="text-center"><?php echo __('Level Id'); ?></th>
		<th class="text-center"><?php echo __('Department Id'); ?></th>
		<th class="text-center"><?php echo __('Major Id'); ?></th>
		<th class="text-center"><?php echo __('Form Of Trainning Id'); ?></th>
		<th class="text-center"><?php echo __('Credit'); ?></th>
		<th class="text-center"><?php echo __('Trainning Time'); ?></th>
		<th class="text-center"><?php echo __('Enrollment Subject'); ?></th>
		<th class="text-center"><?php echo __('Point Ladder'); ?></th>
		<th class="text-center"><?php echo __('Graduation Condition'); ?></th>
		<th class="text-center"><?php echo __('Diploma Id'); ?></th>
		<th class="text-center"><?php echo __('State Id'); ?></th>
		<th class="text-center"><?php echo __('Approve'); ?></th>
		<th class="text-center"><?php echo __('Created'); ?></th>
		<th class="text-center"><?php echo __('Modified'); ?></th>
		<th class="text-center"><?php echo __('Id'); ?></th>
                                <th class="text-center"><?php echo __('Actions'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            	<?php
										$i = 0;
										foreach ($state['Curriculumn'] as $curriculumn): ?>
		<tr>
			<td class="text-center"><?php echo $curriculumn['code']; ?></td>
			<td class="text-center"><?php echo $curriculumn['name_vn']; ?></td>
			<td class="text-center"><?php echo $curriculumn['name_eng']; ?></td>
			<td class="text-center"><?php echo $curriculumn['level_id']; ?></td>
			<td class="text-center"><?php echo $curriculumn['department_id']; ?></td>
			<td class="text-center"><?php echo $curriculumn['major_id']; ?></td>
			<td class="text-center"><?php echo $curriculumn['form_of_trainning_id']; ?></td>
			<td class="text-center"><?php echo $curriculumn['credit']; ?></td>
			<td class="text-center"><?php echo $curriculumn['trainning_time']; ?></td>
			<td class="text-center"><?php echo $curriculumn['enrollment_subject']; ?></td>
			<td class="text-center"><?php echo $curriculumn['point_ladder']; ?></td>
			<td class="text-center"><?php echo $curriculumn['graduation_condition']; ?></td>
			<td class="text-center"><?php echo $curriculumn['diploma_id']; ?></td>
			<td class="text-center"><?php echo $curriculumn['state_id']; ?></td>
			<td class="text-center"><?php echo $curriculumn['approve']; ?></td>
			<td class="text-center"><?php echo $curriculumn['created']; ?></td>
			<td class="text-center"><?php echo $curriculumn['modified']; ?></td>
			<td class="text-center"><?php echo $curriculumn['id']; ?></td>
			<td class="text-center">
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('controller' => 'curriculumns', 'action' => 'view', $curriculumn['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'view')); ?>
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('controller' => 'curriculumns', 'action' => 'edit', $curriculumn['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'edit')); ?>
				<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('controller' => 'curriculumns', 'action' => 'delete', $curriculumn['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'delete'), __('Are you sure you want to delete # %s?', $curriculumn['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
                        </tbody>
                    </table><!-- /.table table-striped table-bordered -->
                </div><!-- /.table-responsive -->

    <?php endif; ?>



            </div><!-- /.related -->


    </div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->

