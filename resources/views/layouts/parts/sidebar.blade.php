<aside class="left-sidebar " data-sidebarbg="skin5">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ url('/') }}" aria-expanded="false"><i class="mdi mdi-home"></i><span
                            class="hide-menu">Dashboard</span></a></li>
                <hr>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-houzz-box"></i><span
                            class="hide-menu">Slider</span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        @if (Helpers::isAdmin())
                        <li class="sidebar-item"><a href="{{ url('/admin/slider/create') }}" class="sidebar-link"><i
                                    class="mdi mdi-note-outline"></i><span class="hide-menu">Add Slider
                                </span></a></li>
                        @endif
                        <li class="sidebar-item"><a href="{{ url('/admin/slider') }}" class="sidebar-link"><i
                                    class="mdi mdi-note-plus"></i><span class="hide-menu"> Slider List
                                </span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-puzzle"></i><span
                            class="hide-menu">Service</span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        @if (Helpers::isAdmin())
                        <li class="sidebar-item"><a href="{{ url('/admin/service/create') }}" class="sidebar-link"><i
                                    class="mdi mdi-note-outline"></i><span class="hide-menu">Add Service
                                </span></a></li>
                        @endif
                        <li class="sidebar-item"><a href="{{ url('/admin/service') }}" class="sidebar-link"><i
                                    class="mdi mdi-note-plus"></i><span class="hide-menu"> Service List
                                </span></a></li>
                    </ul>
                </li>

                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-hangouts"></i><span
                            class="hide-menu">Objective</span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{ url('/admin/objective') }}" class="sidebar-link"><i
                                    class="mdi mdi-note-plus"></i><span class="hide-menu"> Objective List
                                </span></a></li>
                    </ul>
                </li>

                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-sitemap"></i><span
                            class="hide-menu">Category</span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        @if (Helpers::isAdmin())
                        <li class="sidebar-item"><a href="{{ url('/admin/category/create') }}" class="sidebar-link"><i
                                    class="mdi mdi-note-outline"></i><span class="hide-menu">Add Category
                                </span></a></li>
                        @endif
                        <li class="sidebar-item"><a href="{{ url('/admin/category') }}" class="sidebar-link"><i
                                    class="mdi mdi-note-plus"></i><span class="hide-menu"> Category List
                                </span></a></li>
                    </ul>
                </li>

                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-television-guide"></i><span
                            class="hide-menu">Project</span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        @if (Helpers::isAdmin())
                        <li class="sidebar-item"><a href="{{ url('/admin/project/create') }}" class="sidebar-link"><i
                                    class="mdi mdi-note-outline"></i><span class="hide-menu">Add Project
                                </span></a></li>
                        @endif
                        <li class="sidebar-item"><a href="{{ url('/admin/project') }}" class="sidebar-link"><i
                                    class="mdi mdi-note-plus"></i><span class="hide-menu"> Project List
                                </span></a></li>
                    </ul>
                </li>

                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span
                            class="hide-menu">Our Team</span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        @if (Helpers::isAdmin())
                        <li class="sidebar-item"><a href="{{ url('/admin/our_team/create') }}" class="sidebar-link"><i
                                    class="mdi mdi-note-outline"></i><span class="hide-menu">Add Our Team
                                </span></a></li>
                        @endif
                        <li class="sidebar-item"><a href="{{ url('/admin/our_team') }}" class="sidebar-link"><i
                                    class="mdi mdi-note-plus"></i><span class="hide-menu"> Our Team List
                                </span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span
                            class="hide-menu">Contact <span
                                class="badge badge-danger">{{Helpers::countTblData('message', 'status', null)}}</span></span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        @if (Helpers::isAdmin())
                        <li class="sidebar-item"><a href="{{ url('/admin/contact') }}" class="sidebar-link"><i
                                    class="mdi mdi-note-outline"></i><span class="hide-menu">Contacts
                                </span></a></li>
                        @endif
                        <li class="sidebar-item"><a href="{{ url('/admin/message') }}" class="sidebar-link"><i
                                    class="mdi mdi-note-plus"></i><span class="hide-menu"> Messages <span
                                        class="badge badge-danger">{{Helpers::countTblData('message', 'status', null)}}</span>
                                </span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span
                            class="hide-menu">About Us</span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{ url('/admin/about') }}" class="sidebar-link"><i
                                    class="mdi mdi-note-plus"></i><span class="hide-menu"> About Us
                                </span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span
                            class="hide-menu">Client</span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        @if (Helpers::isAdmin())
                        <li class="sidebar-item"><a href="{{ url('/admin/client/create') }}" class="sidebar-link"><i
                                    class="mdi mdi-note-outline"></i><span class="hide-menu">Add Client
                                </span></a></li>
                        @endif
                        <li class="sidebar-item"><a href="{{ url('/admin/client') }}" class="sidebar-link"><i
                                    class="mdi mdi-note-plus"></i><span class="hide-menu"> Client List
                                </span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                    href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span
                        class="hide-menu">Newsletter</span></a>
                <ul aria-expanded="false" class="collapse  first-level">
                    <li class="sidebar-item"><a href="{{ url('/admin/newsletter') }}" class="sidebar-link"><i
                                class="mdi mdi-note-plus"></i><span class="hide-menu"> Newsletter List
                            </span></a></li>
                </ul>
            </li>
            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span
                    class="hide-menu">Blog</span></a>
            <ul aria-expanded="false" class="collapse  first-level">
                @if (Helpers::isAdmin())
                <li class="sidebar-item"><a href="{{ url('/admin/blog/create') }}" class="sidebar-link"><i
                            class="mdi mdi-note-outline"></i><span class="hide-menu">Add Blog
                        </span></a></li>
                <li class="sidebar-item"><a href="{{ url('/admin/blog-category/create') }}" class="sidebar-link"><i
                    class="mdi mdi-note-outline"></i><span class="hide-menu">Add Blog Catagory
                </span></a></li>
                @endif
                <li class="sidebar-item"><a href="{{ url('/admin/blog') }}" class="sidebar-link"><i
                            class="mdi mdi-note-plus"></i><span class="hide-menu"> Blog List
                        </span></a></li>
                <li class="sidebar-item"><a href="{{ url('/admin/blog-category') }}" class="sidebar-link"><i
                    class="mdi mdi-note-plus"></i><span class="hide-menu"> Blog Catagory List
                </span></a></li>
            </ul>
        </li>
                {{--<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-developer-board"></i><span
                            class="hide-menu">Leave</span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        @if (Hr::isUser())
                        <li class="sidebar-item"><a href="{{ url('/admin/leave/create') }}" class="sidebar-link"><i
                    class="mdi mdi-note-outline"></i><span class="hide-menu">Add Leave
                </span></a></li>
                @endif
                <li class="sidebar-item"><a href="{{ url('/admin/leave') }}" class="sidebar-link"><i
                            class="mdi mdi-note-plus"></i><span class="hide-menu"> Leave List
                        </span></a></li>
            </ul>
            </li>

            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                    href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-folder"></i><span
                        class="hide-menu">Schedule</span></a>
                <ul aria-expanded="false" class="collapse  first-level">
                    @if (Hr::isAdmin())
                    <li class="sidebar-item"><a href="{{ url('/admin/schedule/create') }}" class="sidebar-link"><i
                                class="mdi mdi-note-outline"></i><span class="hide-menu">Add Schedule
                            </span></a></li>
                    @endif
                    <li class="sidebar-item"><a href="{{ url('/admin/schedule') }}" class="sidebar-link"><i
                                class="mdi mdi-note-plus"></i><span class="hide-menu"> Schedule List
                            </span></a></li>
                </ul>
            </li>

            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                    href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-flip-to-back"></i><span
                        class="hide-menu">Salary</span></a>
                <ul aria-expanded="false" class="collapse  first-level">
                    @if (Hr::isAdmin())
                    <li class="sidebar-item"><a href="{{ url('/admin/salary/create') }}" class="sidebar-link"><i
                                class="mdi mdi-note-outline"></i><span class="hide-menu">Add Salary
                            </span></a></li>
                    @endif
                    <li class="sidebar-item"><a href="{{ url('/admin/salary') }}" class="sidebar-link"><i
                                class="mdi mdi-note-plus"></i><span class="hide-menu"> Salary List
                            </span></a></li>
                </ul>
            </li>
            @if (Hr::isAdmin())
            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                    href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-bank"></i><span
                        class="hide-menu">Bank</span></a>
                <ul aria-expanded="false" class="collapse  first-level">
                    <li class="sidebar-item"><a href="{{ url('/admin/bank/create') }}" class="sidebar-link"><i
                                class="mdi mdi-note-outline"></i><span class="hide-menu">Add Bank
                            </span></a></li>
                    <li class="sidebar-item"><a href="{{ url('/admin/bank') }}" class="sidebar-link"><i
                                class="mdi mdi-note-plus"></i><span class="hide-menu"> Bank List
                            </span></a></li>
                </ul>
            </li>
            <hr>
            @endif
            @if (Hr::isAdmin())
            <li class="sidebar-item"><a href="{{ url('/admin/holiday/create') }}" class="sidebar-link"><i
                        class="mdi mdi-note-outline"></i><span class="hide-menu"> Monthly Holidays Set
                    </span></a></li>
            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                    href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-chart-areaspline"></i><span
                        class="hide-menu">Reports</span></a>
                <ul aria-expanded="false" class="collapse  first-level">
                    <li class="sidebar-item"><a href="{{ url('/admin/report/monthly') }}" class="sidebar-link"><i
                                class="mdi mdi-note-outline"></i><span class="hide-menu"> Monthly Reports
                            </span></a></li>

                </ul>
            </li>
            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                    href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-equal-box"></i><span
                        class="hide-menu">Expense</span></a>
                <ul aria-expanded="false" class="collapse  first-level">
                    <li class="sidebar-item"><a href="{{ url('/admin/expense/create') }}" class="sidebar-link"><i
                                class="mdi mdi-note-outline"></i><span class="hide-menu">Add Expense
                            </span></a></li>
                    <li class="sidebar-item"><a href="{{ url('/admin/expense') }}" class="sidebar-link"><i
                                class="mdi mdi-note-plus"></i><span class="hide-menu"> Expense List
                            </span></a></li>
                    <li class="sidebar-item"><a href="{{ url('/admin/expanse-category/create') }}"
                            class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">
                                Add Expense Category
                            </span></a></li>
                    <li class="sidebar-item"><a href="{{ url('/admin/expanse-category') }}" class="sidebar-link"><i
                                class="mdi mdi-note-plus"></i><span class="hide-menu"> Expense Category List
                            </span></a></li>
                </ul>
            </li>

            @endif

            <hr>
            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                    href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span
                        class="hide-menu">Employee</span></a>
                <ul aria-expanded="false" class="collapse  first-level">
                    @if (Hr::isAdmin())
                    <li class="sidebar-item"><a href="{{ url('/admin/employee/create') }}" class="sidebar-link"><i
                                class="mdi mdi-note-outline"></i><span class="hide-menu">Add Employee
                            </span></a></li>
                    @endif
                    <li class="sidebar-item"><a href="{{ url('/admin/employee') }}" class="sidebar-link"><i
                                class="mdi mdi-note-plus"></i><span class="hide-menu"> Employee List
                            </span></a></li>
                </ul>
            </li>

            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                    href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span
                        class="hide-menu">Employee Info</span></a>
                <ul aria-expanded="false" class="collapse  first-level">
                    @if (Hr::isAdmin())
                    <li class="sidebar-item"><a href="{{ url('/admin/employee-personal-info/create') }}"
                            class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">
                                Add Employee Info
                            </span></a></li>
                    @endif
                    <li class="sidebar-item"><a href="{{ url('/admin/employee-personal-info') }}"
                            class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Employee
                                Info List
                            </span></a></li>
                </ul>
            </li> --}}

            @if (Helpers::isAdmin())

            @endif
            </ul>
        </nav>
    </div>
</aside>
