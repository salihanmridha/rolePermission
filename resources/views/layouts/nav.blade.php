<!--/. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <a href="#"><i class="fa fa-dashboard"></i> User <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('createuser')}}">Add User</a>
                    </li>
                    <li>
                        <a href="">View All User</a>
                    </li>
                </ul>
            </li>



            <li>
                <a href="#"><i class="fa fa-dashboard"></i> Posts <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">

                    <li>
                        <a href="{{route('posts.create')}}">Add New Post</a>
                    </li>


                    <li>
                        <a href="{{route('allposts')}}">View All Posts</a>
                    </li>

                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-dashboard"></i> Products <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">

                    <li>
                        <a href="{{route('product.create')}}">Add New Product</a>
                    </li>


                    <li>
                        <a href="">View All Products</a>
                    </li>

                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-dashboard"></i> Roles and Permission <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('createrole')}}">Add New Role</a>
                    </li>
                    <li>
                        <a href="{{route('createpermission')}}">Add New Permission</a>
                    </li>
                </ul>
            </li>
        </ul>

    </div>

</nav>
