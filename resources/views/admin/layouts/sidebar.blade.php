

<div class="left-side-bar">
    <div class="brand-logo">
        <a href="index.html">
            <img src="{{ asset('assets/admin') }}/vendors/images/deskapp-logo.svg" alt="" class="dark-logo">
            <img src="{{ asset('assets/admin') }}/vendors/images/deskapp-logo-white.svg" alt="" class="light-logo">
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li class="dropdown">
                    <a href="{{url('admin')}}" class="dropdown-toggle">
                        <span class="micon dw dw-house-1"></span>
                        <span class="mtext">Home</span>
                    </a>
                </li>

                <li>
                    <div class="sidebar-small-cap">PAGES</div>
                </li>


                

                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-edit2"></span><span class="mtext">Skills Master</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{url('admin/skills/add')}}">Add Skills</a></li>
                        <li><a href="{{url('admin/skills')}}">View Skills </a></li>
                    </ul>
                </li>  
              

                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-edit2"></span><span class="mtext">Education Master</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{url('admin/education/add')}}">Add Education</a></li>
                        <li><a href="{{url('admin/education')}}">View Education </a></li>
                    </ul>
                </li> 


                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-edit2"></span><span class="mtext">Experience Master</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{url('admin/experience/add')}}">Add Experience</a></li>
                        <li><a href="{{url('admin/experience')}}">View Experience </a></li>
                    </ul>
                </li>
                
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-edit2"></span><span class="mtext">Services Master</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{url('admin/services/add')}}">Add Services</a></li>
                        <li><a href="{{url('admin/services')}}">View Services </a></li>
                    </ul>
                </li>


                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-edit2"></span><span class="mtext">Testimonials Master</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{url('admin/testimonials/add')}}">Add Testimonials</a></li>
                        <li><a href="{{url('admin/testimonials')}}">View Testimonials </a></li>
                    </ul>
                </li>

             

             
            </ul>
        </div>
    </div>
</div>
<div class="mobile-menu-overlay"></div>
