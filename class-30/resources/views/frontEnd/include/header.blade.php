<header>
    <div class="px-3 py-2 text-bg-dark">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="#" class='navbar-logo d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none'>
            <img src="asset/images/favicon.png" alt="" width='50' height='50' class='img-fluid bi me-2'>
          </a>

          <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
            <li>
              @php $pageLabel=0; $page_name=0; @endphp
              <?php $pageLabel='Home'; ?>
              <a href="{{route('home')}}" class="nav-link <?php if($page_name==$pageLabel){echo'text-white';}else{echo'text-secondary';}?>">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#home"/></svg>
                <?php echo $pageLabel; ?>
              </a>
            </li>
            <li>
            <?php $pageLabel='Blogs'; ?>
              <a href="{{route('blog')}}" class="nav-link <?php if($page_name==$pageLabel){echo'text-white';}else{echo'text-secondary';}?>">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#speedometer2"/></svg>
                <?php echo $pageLabel; ?>
              </a>
            </li>
            <li>
            <?php $pageLabel='Categories'; ?>
              <a href="{{route('category')}}" class="nav-link  <?php if($page_name==$pageLabel){echo'text-white';}else{echo'text-secondary';}?>">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#grid"/></svg>
                <?php echo $pageLabel; ?>
              </a>
            </li>
            <li class="dropdown d-none">
            <?php $pageLabel='Categories'; ?>
                                <a href="" class="nav-link  <?php if($page_name==$pageLabel){echo'text-white';}else{echo'text-secondary';}?> dropdown-toggle" data-bs-toggle='dropdown'>
                                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#table"/></svg>    
                                <?php echo $pageLabel; ?>  
                              </a>
                                <ul class="dropdown-menu">
                                    
                                </ul>
                            </li>
            <li>
            <li class="dropdown d-none">
            <?php $pageLabel='Brands'; ?>
                                <a href="" class="nav-link  <?php if($page_name==$pageLabel){echo'text-white';}else{echo'text-secondary';}?> dropdown-toggle" data-bs-toggle='dropdown'>
                                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#calendar3"/></svg>    
                                <?php echo $pageLabel; ?>  
                              </a>
                                <ul class="dropdown-menu">
                                   
                                </ul>
                            </li>
            <li>
            <li>
            <?php $pageLabel='Students'; ?>
              <a href="{{route('student')}}" class="nav-link  <?php if($page_name==$pageLabel){echo'text-white';}else{echo'text-secondary';}?>">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#grid"/></svg>
                <?php echo $pageLabel; ?>
              </a>
            </li>
            <?php $pageLabel='Users'; ?>
              <a href="{{route('user')}}" class="nav-link <?php if($page_name==$pageLabel){echo'text-white';}else{echo'text-secondary';}?>">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#people-circle"/></svg>
                <?php echo $pageLabel; ?>
              </a>
            </li>
{{-- Collection--}}
            <li class='dropdown d-none'>
            <?php $pageLabel='collection'; ?>
              <a href="action.php?page=<?php echo $pageLabel; ?>" class="nav-link  <?php if($page_name==$pageLabel){echo'text-white';}else{echo'text-secondary';}?> dropdown-toggle" data-bs-toggle='dropdown'>
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#collection"/></svg>
                <?php echo $pageLabel; ?>
              </a>
              <ul class="dropdown-menu bg-dark text-center">
              <li>
            <?php $pageLabel='chat-qoute-fill'; ?>
              <a href="action.php?page=<?php echo $pageLabel; ?>" class="dropdown-item  <?php if($page_name==$pageLabel){echo'text-white';}else{echo'text-secondary';}?>">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#chat-quote-fill"/></svg>
                <?php echo $pageLabel; ?>
              </a>
            </li>
            <li>
            <?php $pageLabel='cpu-fill'; ?>
              <a href="action.php?page=<?php echo $pageLabel; ?>" class="dropdown-item  <?php if($page_name==$pageLabel){echo'text-white';}else{echo'text-secondary';}?>">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#cpu-fill"/></svg>
                <?php echo $pageLabel; ?>
              </a>
            </li>
            <li>
            <?php $pageLabel='gear-fill'; ?>
              <a href="action.php?page=<?php echo $pageLabel; ?>" class="dropdown-item  <?php if($page_name==$pageLabel){echo'text-white';}else{echo'text-secondary';}?>">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#gear-fill"/></svg>
                <?php echo $pageLabel; ?>
              </a>
            </li>
            <li>
            <?php $pageLabel='toggles2'; ?>
              <a href="action.php?page=<?php echo $pageLabel; ?>" class="dropdown-item  <?php if($page_name==$pageLabel){echo'text-white';}else{echo'text-secondary';}?>">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#toggles2"/></svg>
                <?php echo $pageLabel; ?>
              </a>
            </li>
            <li>
            <?php $pageLabel='tools'; ?>
              <a href="action.php?page=<?php echo $pageLabel; ?>" class="dropdown-item  <?php if($page_name==$pageLabel){echo'text-white';}else{echo'text-secondary';}?>">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#<?php echo $pageLabel; ?>"/></svg>
                <?php echo $pageLabel; ?>
              </a>
            </li>
            <li>
            <?php $pageLabel='chevron-right'; ?>
              <a href="action.php?page=<?php echo $pageLabel; ?>" class="dropdown-item  <?php if($page_name==$pageLabel){echo'text-white';}else{echo'text-secondary';}?>">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#<?php echo $pageLabel; ?>"/></svg>
                <?php echo $pageLabel; ?>
              </a>
            </li>
            <li>
            <?php $pageLabel='geo-fill'; ?>
              <a href="action.php?page=<?php echo $pageLabel; ?>" class="dropdown-item  <?php if($page_name==$pageLabel){echo'text-white';}else{echo'text-secondary';}?>">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#<?php echo $pageLabel; ?>"/></svg>
                <?php echo $pageLabel; ?>
              </a>
            </li> 
                                </ul>
            </li>
            

          </ul>
        </div>
      </div>
    </div>
  </header>