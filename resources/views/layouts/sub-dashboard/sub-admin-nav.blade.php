<div id="sidebar-nav" class="sidebar">
  <div class="sidebar-scroll">
    <nav>

      <ul class="nav">

        <li>
          <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>User Management</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
          <div id="subPages" class="collapse ">
            <ul class="nav">

                <li><a href="{{route('customer.user.create')}}" class="">Add New User</a></li>
                <li><a href="page-profile.html" class="">View All User</a></li>

            </ul>
          </div>
        </li>

        <li>
          <a href="#subPosts" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Posts</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
          <div id="subPosts" class="collapse ">
            <ul class="nav">
              @if(Auth::guard('customer')->user()->can('Add Post'))
              <li><a href="{{route('customer.post.create')}}" class="">Add New Post</a></li>
              @endif
              @if(Auth::guard('customer')->user()->can('View Post'))
              <li><a href="{{route('customer.post.all')}}" class="">View Post</a></li>
              @endif

            </ul>
          </div>
        </li>


        <li>
          <a href="#subProducts" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Products</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
          <div id="subProducts" class="collapse ">
            <ul class="nav">

              <li><a href="{{route('customer.product.create')}}" class="">Add New Product</a></li>


              <li><a href="{{route('customer.products')}}" class="">View Product</a></li>

            </ul>
          </div>
        </li>

        <li><a href="{{ route('customer.logout') }}" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();" class=""><i class="lnr lnr-cog"></i> <span>Logout</span>
                      <form id="logout-form" action="{{ route('customer.logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                    </a></li>
      </ul>
    </nav>
  </div>
</div>
