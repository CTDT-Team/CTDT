
<div class="row">
    <div class="col-xs-12">

        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title"><?php echo __('Intrustor'); ?></h3>
                <div class="box-tools pull-right">
                    <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i> Edit'), array('action' => 'edit', $intrustor['Intrustor']['id']), array('class' => 'btn btn-primary', 'escape' => false)); ?>
                </div>
            </div>

            <div class="box-body table-responsive">
                <table id="Intrustors" class="table table-bordered table-striped">
                    <tbody>
                        <tr>		<td><strong><?php echo __('Workshop'); ?></strong></td>
                            <td>
                                <?php echo $this->Html->link($intrustor['Workshop']['name'], array('controller' => 'workshops', 'action' => 'view', $intrustor['Workshop']['id']), array('class' => '')); ?>
                                &nbsp;
                            </td>
                        </tr><tr>		<td><strong><?php echo __('User'); ?></strong></td>
                            <td>
                                <?php echo $this->Html->link($intrustor['User']['name'], array('controller' => 'users', 'action' => 'view', $intrustor['User']['id']), array('class' => '')); ?>
                                &nbsp;
                            </td>
                        </tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
                            <td>
                                <?php echo h($intrustor['Intrustor']['created']); ?>
                                &nbsp;
                            </td>
                        </tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
                            <td>
                                <?php echo h($intrustor['Intrustor']['modified']); ?>
                                &nbsp;
                            </td>
                        </tr><tr>		<td><strong><?php echo __('Id'); ?></strong></td>
                            <td>
                                <?php echo h($intrustor['Intrustor']['id']); ?>
                                &nbsp;
                            </td>
                        </tr>                    </tbody>
                </table><!-- /.table table-striped table-bordered -->
            </div><!-- /.table-responsive -->

        </div><!-- /.view -->


    </div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->

