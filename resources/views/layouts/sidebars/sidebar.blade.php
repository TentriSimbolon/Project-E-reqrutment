 <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start for admin-->
              @if(Auth::user()->showMenu()==1)
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="#">
                          <i class="icon_house_alt"></i>
                          <span>Home</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Forms</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="form_component.html">Form Elements</a></li>                          
                          <li><a class="" href="form_validation.html">Form Validation</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>UI Fitures</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="general.html">Elements</a></li>
                          <li><a class="" href="buttons.html">Buttons</a></li>
                          <li><a class="" href="grids.html">Grids</a></li>
                      </ul>
                  </li>
                  <li>
                      <a class="" href="widgets.html">
                          <i class="icon_genius"></i>
                          <span>Widgets</span>
                      </a>
                  </li>
                  
                  <li>                     
                      <a class="" href="chart-chartjs.html">
                          <i class="icon_piechart"></i>
                          <span>Charts</span>
                      </a>      
                  </li>          
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Tables</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="basic_table.html">Basic Table</a></li>
                      </ul>
                  </li>
                  
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Pages</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">                          
                          <li><a class="" href="profile.html">Profile</a></li>
                          <li><a class="" href="login.html"><span>Login Page</span></a></li>
                          <li><a class="" href="blank.html">Blank Page</a></li>
                          <li><a class="" href="404.html">404 Error</a></li>
                      </ul>
                  </li>
              </ul> 
              <!-- sidebar menu end for admin-->
              @elseif(Auth::user()->showMenu()==2)
              <!-- sidebar menu start for request p-req-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="{{ route('homePage') }}">
                          <i class="icon_house_alt"></i>
                          <span>Home</span>
                      </a>
                  </li>

                  <li>
                      <a class="" href="{{ route('mppPage') }}">
                          <i class="icon_genius"></i>
                          <span>Man Power Planning</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>P-Req</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="general.html">Request P-Req</a></li>
                          <li><a class="" href="general.html">Status P-Req</a></li>
                      </ul>
                  </li>       

              </ul> 
              <!-- sidebar menu end for request p-req-->
              @endif
          </div>
      </aside>
      <!--sidebar end-->