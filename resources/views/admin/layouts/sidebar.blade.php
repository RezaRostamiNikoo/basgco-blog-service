<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">@lang('translation.Menu')</li>
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards">@lang('translation.Dashboard')</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-detail"></i>
                        <span key="t-blog">@lang('translation.Blog')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('admin.blogs.index')}}" key="t-blog-list">@lang('translation.Blog_List')</a>
                        </li>
                        <li><a href="{{route('admin.blogs.create')}}"
                               key="t-blog-grid">@lang('translation.New_Blog')</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('admin.categories.list')}}" class="waves-effect">
                        <i class="bx bx-detail"></i>
                        <span key="t-categories">@lang('translation.categories')</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.tags.create')}}" class="waves-effect">
                        <i class="bx bx-detail"></i>
                        <span key="t-tags">@lang('translation.tags')</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
