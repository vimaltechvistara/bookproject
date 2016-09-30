<div class="sidebar sidebar-main hidden-xs">
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
            <div class="category-content">
                <div class="media">
                    <a href="index.php" class="media-left"><img src="{{asset('assets/images/users/user6.png')}}" class="img-circle img-sm" alt=""></a>
                    <div class="media-body">
                        <span class="media-heading text-semibold">Andrew Brewer</span>
                    </div>
                    <div class="media-right media-middle">
                        <ul class="icons-list">
                            <li>
                                <a href="#"><i class="fa fa-sign-out"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /user menu -->

        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">
                    @if(Auth::user()->hasRole('admin'))
                    <!-- Main -->
                    <li class="<?php echo $menu_first; ?>">
                        <a href="dashboard.php"><i class="fa fa-desktop"></i> <span>DASHBOARD</span></a>
                    </li>
                    <!-- /Main -->

                    <!-- Content -->
                    <li class="<?php echo $menu_second; ?>">
                        <a href="#"><i class="fa fa-th"></i> <span>BOOKS</span></a>
                        <ul>
                            <li><a href="{{URL::to('/')}}/booklists">LIST BOOK</a></li>
                            <li><a href="{{URL::to('/')}}/createbooks">ADD BOOK</a></li>

                        </ul>
                    </li>
                    <li class="<?php echo $menu_third; ?>">
                        <a href="#"><i class="fa fa-th"></i> <span>CLASSES</span></a>
                        <ul>
                            <li><a href="{{URL::to('/')}}/classlists">LIST CLASS</a></li>
                            <li><a href="{{URL::to('/')}}/createclass">ADD CLASS</a></li>
                        </ul>
                    </li>
                    <li class="<?php echo $menu_four; ?>">
                        <a href="#"><i class="fa fa-th"></i> <span>SUBJECT</span></a>
                        <ul>
                            <li><a href="{{URL::to('/')}}/subjectlists">LIST SUBJECT</a></li>
                            <li><a href="{{URL::to('/')}}/createsubject">ADD SUBJECT</a></li>
                        </ul>
                    </li>
                    <li class="<?php echo $menu_five; ?>">
                        <a href="#"><i class="fa fa-th"></i> <span>INSTITUTE</span></a>
                        <ul>
                            <li><a href="{{URL::to('/')}}/institutelists">LIST INSTITUTE</a></li>
                            <li><a href="{{URL::to('/')}}/createinstitute">ADD INSTITUTE </a></li>

                        </ul>
                    </li>
                    <li class="<?php echo $menu_six; ?>">
                        <a href="#"><i class="fa fa-th"></i> <span>INSTITUTE BOOKS</span></a>
                        <ul>
                            <li><a href="{{URL::to('/')}}/assignedinstitutebooklists"> LIST INSTITUTE ASSIGN BOOKS</a></li>
                            <li><a href="{{URL::to('/')}}/assigninstitutebooks">ASSIGN INSTITUTE BOOKS</a></li>
                        </ul>
                    </li>
                    <li class="<?php echo $menu_seven; ?>">
                        <a href="#"><i class="fa fa-paper-plane"></i> <span>SETTING</span></a>
                        <ul>
                            <li><a href="{{URL::to('/')}}/updateprofile">PROFILE UPDATE</a></li>
                            <li><a href="{{URL::to('/')}}/updatepassword">PASSWORD UPDATE</a></li>
                            <li><a href="{{URL::to('/')}}/updatewebsite">WEBSITE UPDATE</a></li>
                            <li><a href="{{URL::to('/')}}/updatesubscription">SUBSCRIPTION UPDATE</a></li>
                        </ul>
                    </li>
                    <li class="<?php echo $menu_eight; ?>">
                        <a href="#"><i class="fa fa-paper-plane"></i> <span>NOTIFICATIONS</span></a>
                        <ul>
                            <li><a href="{{URL::to('/')}}/notificationlist">ALL NOTIFICATIONS</a></li>
                            <li><a href="{{URL::to('/')}}/createnotification">SEND NOTIFICATIONS</a></li>
                        </ul>
                    </li>
                        <li class="<?php echo $menu_in; ?>">
                            <a href="{{URL::to('/')}}/logout"><i class="fa fa-th"></i> <span>LOGOUT</span></a>
                        </li>
                        @elseif(Auth::user()->hasRole('manager'))
                        <li class="<?php echo $menu_nine; ?>">
                            <a href="#"><i class="fa fa-th"></i> <span>PUBLISHER</span></a>
                            <ul>
                                <li><a href="{{URL::to('/')}}/publisherlists">LIST PUBLISHER</a></li>
                                <li><a href="{{URL::to('/')}}/createpublisher">ADD PUBLISHER </a></li>
                            </ul>
                        </li>

                        <li class="<?php echo $menu_in; ?>">
                            <a href="{{URL::to('/')}}/logout"><i class="fa fa-th"></i> <span>LOGOUT</span></a>
                        </li>
                    @elseif(Auth::user()->hasRole('publisher'))
                        <li class="<?php echo $menu_first; ?>">
                            <a href="dashboard.php"><i class="fa fa-desktop"></i> <span>DASHBOARD</span></a>
                        </li>
                        <!-- /Main -->

                        <!-- Content -->
                        <li class="<?php echo $menu_second; ?>">
                            <a href="#"><i class="fa fa-th"></i> <span>BOOKS</span></a>
                            <ul>
                                <li><a href="{{URL::to('/')}}/booklists">LIST BOOK</a></li>
                                <li><a href="{{URL::to('/')}}/createbooks">ADD BOOK</a></li>

                            </ul>
                        </li>
                        <li class="<?php echo $menu_third; ?>">
                            <a href="#"><i class="fa fa-th"></i> <span>CLASSES</span></a>
                            <ul>
                                <li><a href="{{URL::to('/')}}/classlists">LIST CLASS</a></li>
                                <li><a href="{{URL::to('/')}}/createclass">ADD CLASS</a></li>
                            </ul>
                        </li>
                        <li class="<?php echo $menu_four; ?>">
                            <a href="#"><i class="fa fa-th"></i> <span>SUBJECT</span></a>
                            <ul>
                                <li><a href="{{URL::to('/')}}/subjectlists">LIST SUBJECT</a></li>
                                <li><a href="{{URL::to('/')}}/createsubject">ADD SUBJECT</a></li>
                            </ul>
                        </li>
                        <li class="<?php echo $menu_five; ?>">
                            <a href="#"><i class="fa fa-th"></i> <span>INSTITUTE</span></a>
                            <ul>
                                <li><a href="{{URL::to('/')}}/institutelists">LIST INSTITUTE</a></li>
                                <li><a href="{{URL::to('/')}}/createinstitute">ADD INSTITUTE </a></li>
                            </ul>
                        </li>
                        <li class="<?php echo $menu_six; ?>">
                            <a href="#"><i class="fa fa-th"></i> <span>INSTITUTE BOOKS</span></a>
                            <ul>
                                <li><a href="{{URL::to('/')}}/assignedinstitutebooklists"> LIST INSTITUTE ASSIGN BOOKS</a></li>
                                <li><a href="{{URL::to('/')}}/assigninstitutebooks">ASSIGN INSTITUTE BOOKS</a></li>
                            </ul>
                        </li>
                    @elseif(Auth::user()->hasRole('school'))
                        <li class="<?php echo $menu_first; ?>">
                            <a href="dashboard.php"><i class="fa fa-desktop"></i> <span>DASHBOARD</span></a>
                        </li>
                        <!-- /Main -->

                        <!-- Content -->
                        <li class="<?php echo $menu_second; ?>">
                            <a href="#"><i class="fa fa-th"></i> <span>BOOKS</span></a>
                            <ul>
                                <li><a href="{{URL::to('/')}}/booklists">LIST BOOK</a></li>
                                <li><a href="{{URL::to('/')}}/createbooks">ADD BOOK</a></li>

                            </ul>
                        </li>
                        <li class="<?php echo $menu_ten; ?>">
                            <a href="#"><i class="fa fa-th"></i> <span>STUDENT</span></a>
                            <ul>
                                <li><a href="{{URL::to('/')}}/studentlists">LIST STUDENT</a></li>
                                <li><a href="{{URL::to('/')}}/createstudent">ADD STUDENT </a></li>

                            </ul>
                        </li>

                    @else
                        <li class="">

                        </li>
                    @endif
                </ul>
            </div>
        </div>
        <!-- /main navigation -->

    </div>
</div>