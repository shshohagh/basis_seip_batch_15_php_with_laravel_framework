<aside class="sidebar-wrapper">
          <div class="iconmenu"> 
            <div class="nav-toggle-box">
              <div class="nav-toggle-icon"><i class="bi bi-list"></i></div>
            </div>
            <ul class="nav nav-pills flex-column">
              <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboards">
                <a href="{{route('dashboard')}}">
                  <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-dashboards" type="button"><i class="bi bi-house-door-fill"></i></button>
                </a>
              </li>
              <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Settings">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#settings" type="button"><i class="bi bi-gear"></i></button>
              </li>
              <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Blog">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#blog" type="button"><i class="bi bi-chat-left-text"></i></button>
              </li>


            </ul>
          </div>
          <div class="textmenu">
            <div class="brand-logo">
              <img src="{{ asset('admin') }}/assets/images/brand-logo-2.png" width="140" alt=""/>
            </div>
            <div class="tab-content">

              <div class="tab-pane fade d-none" id="pills-dashboards">
                <div class="list-group list-group-flush">
                  <div class="list-group-item">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-0">Dashboards</h5>
                    </div>
                    <small class="mb-0">Some placeholder content</small>
                  </div>
                  <a href="index.html" class="list-group-item"><i class="bi bi-cart-plus"></i>e-Commerce</a>
                  <a href="index2.html" class="list-group-item"><i class="bi bi-wallet"></i>Sales</a>
                  <a href="index3.html" class="list-group-item"><i class="bi bi-bar-chart-line"></i>Analytics</a>
                  <a href="index4.html" class="list-group-item"><i class="bi bi-archive"></i>Project Management</a>
                  <a href="index5.html" class="list-group-item"><i class="bi bi-cast"></i>CMS Dashboard</a>
                </div>
              </div>
              <div class="tab-pane fade" id="settings">
                <div class="list-group list-group-flush">
                  <div class="list-group-item">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-0">Settings</h5>
                    </div>
                    <small class="mb-0">Some placeholder content</small>
                  </div>
                  <a href="{{route('admin.category')}}" class="list-group-item"><i class="bi bi-envelope"></i>Category</a>
                  <a href="{{route('admin.sub.category')}}" class="list-group-item"><i class="bi bi-envelope"></i>Sub Category</a>
                  <a href="{{route('admin.author')}}" class="list-group-item"><i class="bi bi-chat-left-text"></i>Author</a>
                  <a href="{{route('admin.setting')}}" class="list-group-item"><i class="bi bi-chat-left-text"></i>Setting</a>
                </div>
              </div>
              <div class="tab-pane fade" id="blog">
                <div class="list-group list-group-flush">
                  <div class="list-group-item">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-0">Blog</h5>
                    </div>
                    <small class="mb-0">Some placeholder content</small>
                  </div>
                  <a href="{{route('admin.blog.new')}}" class="list-group-item"><i class="bi bi-plus"></i>Ad New Blog</a>
                  <a href="{{route('admin.blog.manage')}}" class="list-group-item"><i class="bi bi-chat-left-text"></i>Mange Blog</a>
                </div>
              </div>

            </div>
          </div>
       </aside>