<!--begin::Logo-->
<div
    id="kt_app_sidebar_toggle"
    class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary h-30px w-30px position-absolute top-50 start-100 translate-middle rotate "
    data-kt-toggle="true"
    data-kt-toggle-state="active"
    data-kt-toggle-target="body"
    data-kt-toggle-name="app-sidebar-minimize"
>
    <i class="ki-outline ki-left fs-3 rotate-180"></i>
</div>
<!--end::Logo-->
<!--begin::sidebar menu-->
<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
    <!--begin::Menu wrapper-->
    <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper">
        <!--begin::Scroll wrapper-->
        <div
            id="kt_app_sidebar_menu_scroll"
            class="scroll-y my-5 mx-3"
            data-kt-scroll="true"
            data-kt-scroll-activate="true"
            data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
            data-kt-scroll-wrappers="#kt_app_sidebar_menu"
            data-kt-scroll-offset="5px"
            data-kt-scroll-save-state="true"
        >
            <!--begin::Menu-->
            <div
                class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6"
                id="#kt_app_sidebar_menu"
                data-kt-menu="true"
                data-kt-menu-expand="false"
            >



                <!--begin:Menu item-->
                <div class="menu-item">
                    <a class="menu-link" href="/link/create">
                        <span class="menu-title">لینک کوتاه جدید</span>
                    </a>
                    <a class="menu-link" href="/link/create">
                        <span class="menu-title">همه لینک کوتاه ها</span>
                    </a>
                    <a class="menu-link" href="/link/list?c=5">
                        <span class="menu-title">5 لینک محبوب</span>
                    </a>
                </div>
            </div>
            <!--end::Menu-->
        </div>
        <!--end::Scroll wrapper-->
    </div>
    <!--end::Menu wrapper-->
</div>
<!--end::sidebar menu-->
<!--begin::Footer-->
<div class="app-sidebar-footer flex-column-auto pt-2 pb-6 px-6" id="kt_app_sidebar_footer">
    <a
        href="/logout"
        class="btn btn-danger btn-flex flex-center btn-custom btn-primary overflow-hidden text-nowrap px-0 h-40px w-100"
        data-bs-toggle="tooltip"
        data-bs-trigger="hover"
        data-bs-dismiss-="click">
        {{--        title="200+ in-house components and 3rd-party plugins">--}}
        <span class="btn-label">
           خروج
        </span>
        <i class="ki-outline ki-exit-left btn-icon fs-2 m-0"></i>
    </a>
</div>

<!--end::Footer-->
