<div id="sidebar" class="sidebar responsive ace-save-state">
    <script type="text/javascript">
        try {
            ace.settings.loadState('sidebar')
        } catch (e) {
        }
    </script>

    <div class="sidebar-shortcuts" id="sidebar-shortcuts">
        <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
            <button class="btn btn-success">
                <i class="ace-icon fa fa-signal"></i>
            </button>

            <button class="btn btn-info">
                <i class="ace-icon fa fa-pencil"></i>
            </button>

            <button class="btn btn-warning">
                <i class="ace-icon fa fa-users"></i>
            </button>

            <button class="btn btn-danger">
                <i class="ace-icon fa fa-cogs"></i>
            </button>
        </div>

        <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
            <span class="btn btn-success"></span>

            <span class="btn btn-info"></span>

            <span class="btn btn-warning"></span>

            <span class="btn btn-danger"></span>
        </div>
    </div><!-- /.sidebar-shortcuts -->

    <ul class="nav nav-list">
        <li class="">
            <a href="<?php echo BASE_URL ?>">
                <i class="menu-icon fa fa-tachometer"></i>
                <span class="menu-text"> Bàn làm việc </span>
            </a>

            <b class="arrow"></b>
        </li>
        
        

        <li class="">
            <?php
            echo $this->Html->link('<i class="menu-icon fa fa-cloud-download"></i>Sao lưu', array('admin' => true, 'controller' => 'Mysqldumps', 'action' => 'index'), array('escape' => false));
            ?>
        </li>
<<<<<<< HEAD

        <li class="">
            <a href="" class="dropdown-toggle">
                <i class="menu-icon fa fa-desktop"></i>
                <span class="menu-text">
                    Tập huấn
                </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">

                <li class="">
                    <?php echo $this->Html->link(' <i class="menu-icon fa fa-caret-right"></i>
                        Kết quả tập huấn', array('admin' => true, 'controller' => 'enrolments', 'action' => 'index'), array('escape' => false)); ?>
                    <b class="arrow"></b>
                </li>

                <li class="">

                    <?php echo $this->Html->link('<i class="menu-icon fa fa-caret-right"></i>
                        Workshop', array('admin' => true, 'controller' => 'workshops', 'action' => 'index'), array('escape' => false)); ?>


                    <b class="arrow"></b>
                </li>

                <li class="">
                    <?php echo $this->Html->link(' <i class="menu-icon fa fa-caret-right"></i>
                        Chuyên đề', array('controller' => 'chapters', 'action' => 'index'), array('escape' => false)); ?>




                    <b class="arrow"></b>
                </li>


                <li class="">
                    <?php echo $this->Html->link(' <i class="menu-icon fa fa-caret-right"></i>
                        Lĩnh vực', array('controller' => 'fields', 'action' => 'index'), array('escape' => false)); ?>




                    <b class="arrow"></b>
                </li>




            </ul>
        </li>

        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-list"></i>
                <span class="menu-text"> Đánh giá khóa học </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">

                    <?php echo $this->Html->link('<i class="menu-icon fa fa-users"></i>
                <span class="menu-text"> Phân công BCT </span>', array('admin' => true, 'plugin' => false, 'controller' => 'evaluationResults', 'action' => 'phan_cong'), array('escape' => false)); ?>

                    <b class="arrow"></b>
                </li>
                <li class="">

                    <?php echo $this->Html->link('<i class="menu-icon fa fa-calendar-check-o"></i>
                <span class="menu-text">Đợt đánh giá</span>', array('admin' => true, 'plugin' => false, 'controller' => 'evaluation_rounds', 'action' => 'index'), array('escape' => false)); ?>


                    <b class="arrow"></b>
                </li>

                <li class="">
                    <?php echo $this->Html->link('<i class="menu-icon fa fa-folder-open"></i>
                <span class="menu-text"> Khóa học</span>', array('admin' => true, 'plugin' => false, 'controller' => 'courses', 'action' => 'index'), array('escape' => false)); ?>


                    <b class="arrow"></b>
                </li>
                <li class="">
                    <?php echo $this->Html->link('<i class="menu-icon fa  fa-graduation-cap"></i>
                <span class="menu-text"> Khóa học LMS</span>', array('admin' => true, 'plugin' => false, 'controller' => 'lms_courses', 'action' => 'index'), array('escape' => false)); ?>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <?php echo $this->Html->link('<i class="menu-icon fa fa-gavel"></i>
                <span class="menu-text"> Kết quả đánh giá</span>', array('admin' => true, 'plugin' => false, 'controller' => 'evaluation_results', 'action' => 'index'), array('escape' => false)); ?>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <?php echo $this->Html->link('<i class="menu-icon fa fa-gavel"></i>
                <span class="menu-text"> Yêu cầu hỗ trợ</span>', array('admin' => true, 'plugin' => false, 'controller' => 'supporting_requests', 'action' => 'index'), array('escape' => false)); ?>

                    <b class="arrow"></b>
                </li>


            </ul>
        </li>


        <li class="">
            <a href="" class="dropdown-toggle">
                <i class="menu-icon fa fa-desktop"></i>
                <span class="menu-text">
                    Thang do Bloom
                </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">


                <li class="">

                    <?php echo $this->Html->link('<i class="menu-icon fa fa-sort-numeric-asc"></i>
                        Lĩnh vực nhận thức', array('admin' => false, 'controller' => 'linh_vuc_nhan_thucs', 'action' => 'index'), array('escape' => false)); ?>


                    <b class="arrow"></b>
                </li>
                <li class="">

                    <?php echo $this->Html->link('<i class="menu-icon fa fa-caret-right"></i>
                        Mức độ nhận thức', array('admin' => false, 'controller' => 'muc_do_nhan_thucs', 'action' => 'index'), array('escape' => false)); ?>


                    <b class="arrow"></b>
                </li>

                <li class="">

                    <?php echo $this->Html->link('<i class="menu-icon fa fa-caret-right"></i>
                       Động từ thể hiện', array('admin' => false, 'controller' => 'dong_tu_the_hiens', 'action' => 'index'), array('escape' => false)); ?>


                    <b class="arrow"></b>
                </li>




            </ul>
        </li>

        <li class="">
            <a href="" class="dropdown-toggle">
                <i class="menu-icon fa fa-desktop"></i>
                <span class="menu-text">
                    Hội thi hùng biện
                </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">


                <li class="">

                    <?php echo $this->Html->link('<i class="menu-icon fa fa-caret-right"></i>
                        Thí sinh', array('admin' => true, 'controller' => 'ThiSinhHungBiens', 'action' => 'index'), array('escape' => false)); ?>


                    <b class="arrow"></b>
                </li>

                <li class="">
                    <?php echo $this->Html->link(' <i class="menu-icon fa fa-caret-right"></i>
                        Kết quả dự đoán', array('controller' => 'DuDoanHungBiens', 'action' => 'index'), array('escape' => false)); ?>




                    <b class="arrow"></b>
                </li>


            </ul>
        </li>

        <li class="">
            <a href="" class="dropdown-toggle">
                <i class="menu-icon fa fa-users"></i>
                <span class="menu-text">
                    Quản lý người dùng
                </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">


                <li class="">

                    <?php echo $this->Html->link('<i class="menu-icon fa fa-users"></i>
                <span class="menu-text"> Danh sách Đơn vị </span>', array('admin' => false, 'plugin' => false, 'controller' => 'departments', 'action' => 'index'), array('escape' => false)); ?>

                    <b class="arrow"></b>
                </li>

                <li class="">

                    <?php echo $this->Html->link('<i class="menu-icon fa fa-users"></i>
                <span class="menu-text"> Danh sách User </span>', array('admin' => true, 'plugin' => false, 'controller' => 'users', 'action' => 'index'), array('escape' => false)); ?>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <?php echo $this->Html->link('<i class="menu-icon fa fa-users"></i>
                <span class="menu-text"> Danh sách nhóm </span>', array('admin' => true, 'plugin' => false, 'controller' => 'groups'), array('escape' => false)); ?>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <?php echo $this->Html->link('<i class="menu-icon fa fa-caret-right"></i>
                                                        <span class="menu-text"> Cập nhật ACOS </span>', '/admin/acl_manager/acl/update_acos', array('escape' => false)); ?>
                    <b class="arrow"></b>
                </li>
                <li class="">
                    <?php echo $this->Html->link('<i class="menu-icon fa fa-caret-right"></i>
                                                        <span class="menu-text"> Cập nhật AROS </span>', '/admin/acl_manager/acl/update_aros', array('escape' => false)); ?>
                    <b class="arrow"></b>
                </li>
                <li class="">
                    <?php echo $this->Html->link('<i class="menu-icon fa fa-check"></i>
                                                        <span class="menu-text"> Phân quyền </span>', '/admin/acl_manager/acl', array('escape' => false)); ?>
                    <b class="arrow"></b>
                </li>


            </ul>
        </li>
=======
>>>>>>> 44514db2cc53104cda8971bc7720054e20440c14
        <li class="">
            <a href="" class="dropdown-toggle">
                <i class="menu-icon fa fa-book" aria-hidden="true"></i>
                <span class="menu-text">
                    Quản lý đào tạo
                </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">


                <li class="">

                    <?php echo $this->Html->link('
                <span class="menu-text"> Chương trình đào tạo </span>', array('pkt' => true, 'plugin' => false, 'controller' => 'curriculumns', 'action' => 'pkt_curriculumn_index'), array('escape' => false)); ?>

                    <b class="arrow"></b>
                </li>

                <li class="">
                <li class="">
                    <?php echo $this->Html->link('<i class="menu-icon fa fa-caret-right"></i>
                                                        <span class="menu-text"> Đơn vị </span>',  array('pkt' => true, 'controller' => 'departments', 'action' => 'pkt_dpm_index'), array('escape' => false)); ?>
                    <b class="arrow"></b>
                </li>
                <li class="">
                    <?php echo $this->Html->link('<i class="menu-icon fa fa-caret-right"></i>
                                                        <span class="menu-text"> Ngành </span>', array('pkt' => true, 'controller' => 'majors', 'action' => 'pkt_major_index'), array('escape' => false)); ?>
                    <b class="arrow"></b>
                </li>
                  
            
                 <li class="">
                    <?php echo $this->Html->link('<i class="menu-icon fa fa-caret-right"></i>
<<<<<<< HEAD
                                                        <span class="menu-text"> Trình độ đào tạo </span>', array('pkt' => true, 'controller' => 'levels', 'action' => 'pkt_level_index'), array('escape' => false)); ?>
=======
<<<<<<< HEAD
                                                        <span class="menu-text"> Trình độ đào tạo </span>', '/levels', array('escape' => false)); ?>
=======
                                                        <span class="menu-text"> Trình độ đào tạo </span>', '/levels/index_pkt', array('escape' => false)); ?>
>>>>>>> 44514db2cc53104cda8971bc7720054e20440c14
>>>>>>> e03f9b92fc827138169fc9a8b61d1883f5b83663
                    <b class="arrow"></b>
                </li>
                <li class="">
                    <?php echo $this->Html->link('<i class="menu-icon fa fa-caret-right"></i>
                                                        <span class="menu-text"> Hình thức đào đạo </span>',array('pkt' => true, 'controller' => 'FormOfTrainnings', 'action' => 'pkt_training_index'), array('escape' => false)); ?>
                    <b class="arrow"></b>
                </li>
                <li class="">
                    <?php echo $this->Html->link('<i class="menu-icon fa fa-caret-right"></i>
                                                        <span class="menu-text"> Mục tiêu đào tạo </span>', array('pkt' => true, 'controller' => 'ProgramOutcomes', 'action' => 'pkt_outcome_index'), array('escape' => false)); ?>
                    <b class="arrow"></b>
                </li>
                <li class="">
                    <?php echo $this->Html->link('<i class="menu-icon fa fa-caret-right"></i>
                                                        <span class="menu-text"> Chương trình đào tạo tham khảo </span>',array('pkt' => true, 'controller' => 'CurriculumnsReferences', 'action' => 'pkt_reference_index'), array('escape' => false)); ?>
                    <b class="arrow"></b>
                </li>
                <li class="">
                    <?php echo $this->Html->link('<i class="menu-icon fa fa-caret-right"></i>
                                                        <span class="menu-text"> Chuẩn đầu ra </span>', array('pkt' => true, 'controller' => 'ProgramObjectives', 'action' => 'pkt_objective_index'), array('escape' => false)); ?>
                    <b class="arrow"></b>
                </li>
                <li class="">
                    <?php echo $this->Html->link('<i class="menu-icon fa fa-caret-right"></i>
                                                        <span class="menu-text"> Khối kiến thức </span>', array('pkt' => true, 'controller' => 'Knowledges', 'action' => 'pkt_knowledge_index'), array('escape' => false)); ?>
                    <b class="arrow"></b>
                </li>
                <li class="">
                    <?php echo $this->Html->link('<i class="menu-icon fa fa-caret-right"></i>
                                                        <span class="menu-text"> Học phần </span>', array('pkt' => true, 'controller' => 'Subjects', 'action' => 'pkt_subject_index'), array('escape' => false)); ?>
                    <b class="arrow"></b>
                </li>
                <li class="">
                    <?php echo $this->Html->link('<i class="menu-icon fa fa-caret-right"></i>
                                                        <span class="menu-text"> Tài liệu </span>',array('pkt' => true, 'controller' => 'Books', 'action' => 'pkt_book_index'), array('escape' => false)); ?>
                    <b class="arrow"></b>
                </li>
                <li class="">
                    <?php echo $this->Html->link('<i class="menu-icon fa fa-caret-right"></i>
                                                        <span class="menu-text"> Cơ sở vật chất </span>', '/rooms', array('escape' => false)); ?>
                    <b class="arrow"></b>
                </li>
                

    </ul><!-- /.nav-list -->

    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
        <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
    </div>
</div>
