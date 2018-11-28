<aside class="main-sidebar">
  <section class="sidebar">
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ asset('dist/img/download.jpg') }}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>USER</p>
        <a href="#"><i class="fa fa-circle text-success"></i>Online</a>
      </div>
    </div>
    <ul class="sidebar-menu">
        <li class="treeview {{ checkActive(['coupons', 'coupons/create' , 'coupons/*/edit']) }}">
            <a href="">
              <i class="fa fa-dashboard"></i> <span>Coupon</span>
              </a>
            <ul class="treeview-menu">
              <li class="{{ checkActive(['coupons/create']) }}">
                <a href="{{ url('coupons/create') }}"><i class="fa fa-circle-o"></i>Create</a>
              </li>
              <li class="{{ checkActive(['coupons']) }}">
                <a href="{{ url('coupons') }}"><i class="fa fa-circle-o"></i>List</a>
              </li>
            </ul>
        </li>
        <li class="treeview {{ checkActive(['category', 'category/create' , 'category/*/edit']) }}">
            <a href="">
              <i class="fa fa-dashboard"></i> <span>Category</span>
              </a>
            <ul class="treeview-menu">
              <li class="{{ checkActive(['category/create']) }}">
                <a href="{{ url('category/create') }}"><i class="fa fa-circle-o"></i>Create</a>
              </li>
              <li class="{{ checkActive(['category']) }}">
                <a href="{{ url('category') }}"><i class="fa fa-circle-o"></i>List</a>
              </li>
            </ul>
        </li>
        <li class="treeview {{ checkActive(['users']) }}">
            <a href="">
              <i class="fa fa-dashboard"></i> <span>Users</span>
              </a>
            <ul class="treeview-menu">
              <li class="{{ checkActive(['users']) }}">
                <a href="{{ url('users') }}"><i class="fa fa-circle-o"></i>List</a>
              </li>
            </ul>
        </li>
    </ul>
  </section>
</aside>
