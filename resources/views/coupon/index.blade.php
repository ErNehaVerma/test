@extends ('app')
    @section('content')
        <div class="box box-danger">
            <div class="box-header">
                <strong>List</strong>
                <div class="pull-right">
                    <a href="{{url('coupons/create')}}" class="btn btn-danger">
                        <i class="fa fa-plus"> New Coupon</i>
                    </a>
                </div>
            </div>
            <div class="box-body table-danger ">
                <table id="myTable" class="table table-bordered ">
                    <thead>
                        <tr class="warning">
                            <th>Id</th>
                            <th>Name</th>
                            <th>Coupon Code</th>
                            <th>Mobile Image</th>
                            <th>Desktop Image</th>
                            <th>Logo</th>
                            <th>Category</th>
                            <th>Slug</th>
                            <th>Description</th>
                            <th>Tags</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Promotion</th>
                            <th>Publish Now</th>
                            <th>Is Brand</th>
                            <th>Status</th>
                            <th>Created Date</th>
                            <th>Updated Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    @foreach($coupons as $coupon)
                    <tr>
                        <td>{{ $coupon->id }}</td>
                        <td>{{ $coupon->name }}</td>
                        <td>{{ $coupon->coupon_code }}</td>
                        <td><img src="{{ url('/coupons/'. $coupon->image4mobile) }}" alt="coupon_image" width="70px"></td>
                        <td><img src="{{ url('/coupons/'. $coupon->image4desktop) }}" alt="coupon_image" width="70px"></td>
                        <td><img src="{{ url('/coupons/'. $coupon->brand_logo) }}" alt="coupon_image" width="70px"></td>
                        <td>{{ $coupon->category->name }}</td>
                        <td>{{ $coupon->slug }}</td>
                        <td>{{ $coupon->description }}</td>
                        <td>{{ $coupon->tags }}</td>
                        <td>{{ $coupon->offer_start_date }}</td>
                        <td>{{ $coupon->offer_end_date }}</td>
                        <td>{{ $coupon->promotion_category == 'P' ? 'Popular' : 'Exclusive' }}</td>
                        <td>{{ $coupon->publish_now  == 'Y' ? 'Yes' : 'No' }}</td>
                        <td>{{ $coupon->is_brand  == 'Y' ? 'Yes' : 'No' }}</td>
                        <td>{{ $coupon->status }}</td>
                        <td>{{ $coupon->created_date }}</td>
                        <td>{{ $coupon->updated_date }}</td>
                        <td>
                            <a href="{{ url('/coupons/' . $coupon->id . '/edit') }}" class="btn btn-warning" style="margin-bottom:5px">
                                <i class="fa fa-edit"> Edit</i>
                            </a>

                            <form action="{{ url('coupons' , $coupon->id ) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-danger"><i class="fa fa-trash"> Delete</i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

                </table>
            </div>
        </div>
    @stop
