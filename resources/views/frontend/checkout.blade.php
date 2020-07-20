@extends('frontend.layouts1.master')
@section('title')
CHECK OUT PAGE
@endsection

@section('content')
<body>
 <!-- Checkout area -->
 <div class="checkout-area">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-title">
          <h2>Kiểm tra đơn hàng</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-9 col-md-12">
        <!-- Payment Method -->
        <div class="payment-method">
          <!-- Panel Gropup -->
          <div class="panel-group" id="accordion3">
            {{-- <!-- Panel Default -->
            <div class="panel panel_default">
              <div class="panel_heading">
                <h4 class="check-title">
                  <a data-toggle="collapse" class="active" href="#checkut1">
                    <span class="number">1</span>Checkout Method</a>
                  </h4>
                </div>
                <div id="checkut1" class="panel-collapse collapse show" data-parent="#accordion3">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-lg-6 col-md-6">
                        <form class="checkout-form product-form">
                          <h2>Checkout as a Guest or Register</h2>
                          <div class="checkout-form-inner">
                            <p>Register with us for future convenience:</p>
                            <div class="i_boxb">                      
                              <input class="checkout_radio" type="radio" name="tag" id="credio"/>
                              <label class="cradio" for="credio">Checkout as Guest</label>
                            </div>
                            <div class="i_boxb">                      
                              <input class="checkout_radio" type="radio" name="tag" id="craiot"/>
                              <label class="cradio" for="craiot">Register</label>
                            </div>
                            <p>
                              <span>Register and save time!</span><br />
                              Register with us for future convenience:<br />
                              Fast and easy check out<br />
                              Easy access to your order history and status<br />
                            </p>                    
                          </div>
                          <div class="user-bottom fix">
                            <button class="btn custom-button" type="button">Create an Account</button>
                          </div>
                        </form>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <form class="checkout-form product-form">
                          <h2>Login</h2>
                          <div class="submit_review">
                            <p class="title"><b>Already registered?</b></p>
                            <p>Please log in below</p>
                            <div class="account-form">
                              <div class="form-goroup">
                                <label>Email Address <sup>*</sup></label>
                                <input type="text" required="required" class="form-control">
                              </div>
                              <div class="form-goroup">
                                <label>Password <sup>*</sup></label>
                                <input type="password" required="required" class="form-control">
                              </div>
                            </div>            
                          </div>
                          <div class="user-bottom fix">
                            <a href="#">Forgot Your Password?</a>
                            <button class="btn custom-button" type="button">login</button>
                          </div>
                        </form>
                      </div>
                    </div>                  
                  </div>
                </div>
              </div><!-- End Panel Default --> --}}

              <!-- Panel Default -->
              <form action="{{route('frontend.home.storeOrder')}}" method="POST">
                @csrf
                <div class="panel panel_default">
                  <div class="panel_heading">
                    <h4 class="check-title">
                      <a data-toggle="collapse" class="active" href="#checkut2">
                        <span class="number">1</span>Thông tin giao hàng</a>
                      </h4>
                    </div>
                    <div id="checkut2" class="panel-collapse collapse show" data-parent="#accordion3">
                      <div class="panel-body">
                        <div class="row">
                          <div class="col-xl-12 col-lg-12 col-md-12">
                            {{-- <form> --}}
                              <div class="form">
                                <div class="card_control">
                                  <ul>
                                    <li>
                                      <div class="field fix">
                                       <div class="input-box">
                                        <label class="label" for="Company">Họ và tên</label>
                                        <input name="name" type="text" class=" border_color" id="Company" value="{{$user->name}}">
                                      </div>
                                      <div class="input-box">
                                        <label class="label" for="Company">Số điện thoại</label>
                                        <input name="phone" type="text" class=" border_color" id="Company" value="{{$user->phone}}">
                                      </div>
                                      <div class="input-box">
                                        <label class="label" for="email">Email</label>
                                        <input name="email" type="email" class=" border_color" id="email"/ value="{{$user->email}}">
                                      </div>            
                                    </div>
                                  </li>
                                  <li>
                                    <div class="field fix">
                                      <div class="input-box inhun">
                                        <label class="label" for="addr">Địa chỉ nhận hàng</label>
                                        <input name="address" type="text" class=" border_color" id="addr"/ value="{{$user->address}}">
                                      </div>              
                                    </div>  
                                  </li>

                                  {{-- <li>
                                    <div class="chackoutl">
                                      <div class="i_boxb topmargin">                      
                                        <input class="checkout_radio" type="radio" name="tag" id="guest"/>
                                        <label class="cradio" for="guest">Checkout as Guest</label>
                                      </div>
                                      <div class="i_boxb">                      
                                        <input class="checkout_radio" type="radio" name="tag" id="regis"/>
                                        <label class="cradio" for="regis">Register</label>
                                      </div>                  
                                    </div>                      
                                  </li> --}}
                                </ul>
                              </div>
                              <div class="button_check">                  
                                <div class="">                  
                                  <span class="left_btn"><a href="#"><i class="fa fa-long-arrow-up"></i>Quay lại</a></span><button class="btn right_btn custom-button">Tiếp tục</button>
                                </div>                    
                              </div>
                            </div>
                          {{-- </form> --}}
                        </div>                  
                      </div>
                    </div>
                  </div>
                </div><!-- End Panel Default -->
                <!-- Panel Default -->
                <div class="panel panel_default">
                  <div class="panel_heading">
                    <h4 class="check-title">
                      <a data-toggle="collapse" href="#checkut4">
                        <span class="number">2</span>Hình thức vận chuyển</a>
                      </h4>
                    </div>
                    <div id="checkut4" class="panel-collapse collapse" data-parent="#accordion3">
                      <div class="panel-body">
                        <div class="row">
                          <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="flatrate">
                              <div class="row">
                                <input style="margin-left: 50px;" name="ship" type="radio" value="" />&nbsp;Chuyển phát nhanh
                               <input  style="margin-left: 50px;" name="ship" type="radio" value="" />&nbsp;Giao hàng tận nhà
                               <input  style="margin-left: 50px;" name="ship" type="radio" value="" />&nbsp;Gửi qua đường bưu điện
                             </div>
                             
                           </div>                
                           <div class="button_check">                  
                            <div class="">                  
                              <span class="left_btn"><a href="#"><i class="fa fa-long-arrow-up"></i>Quay lại</a></span><button class="btn right_btn custom-button">Tiếp tục</button>
                            </div>                    
                          </div>                      
                        </div>                    
                      </div>
                    </div>
                  </div>
                </div><!-- End Panel Default -->
                <!-- Panel Default -->
                <div class="panel panel_default">
                  <div class="panel_heading">
                    <h4 class="check-title">
                      <a data-toggle="collapse" href="#checkut5">
                        <span class="number">3</span>Phương thức thanh toán</a>
                      </h4>
                    </div>
                    <div id="checkut5" class="panel-collapse collapse" data-parent="#accordion3">
                      <div class="panel-body">
                        <div class="row">
                          <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="flatrate">
                              <p><input type="radio" id="Money"/><label for="Money">Thanh toán online / Chuyển khoản </label></p>
                              <p><input type="radio" id="Credit"/><label for="Credit">Thanh toán khi nhận được hàng </label></p>
                            </div>                
                            <div class="button_check">          
                              <div class="">              
                                <span class="left_btn"><a href="#"><i class="fa fa-long-arrow-up"></i>Quay lại</a></span><button  class="btn right_btn custom-button">Tiếp tục</button>
                              </div>                    
                            </div>                      
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Panel Default -->  
                  <!-- Panel Default -->
                  <div class="panel panel_default">
                    <div class="panel_heading">
                      <h4 class="check-title">
                        <a data-toggle="collapse" href="#checkut6">
                          <span class="number">4</span>Hóa đơn thanh toán</a>
                        </h4>
                      </div>
                      <div id="checkut6" class="panel-collapse collapse" data-parent="#accordion3">
                        <div class="panel-body">
                          <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                              <div class="table-responsive">
                                <table class="tablec">
                                  <tr>
                                    <td>Tên sản phẩm</td>
                                    <td>Giá sản phẩm</td>
                                    <td>Số lượng</td>
                                    <td>Tổng giá</td>
                                  </tr>
                                  @foreach($items as $item)
                                  <tr>
                                    <td>{{$item->name}}</td>
                                    <td><p class="tabletextp">{{number_format($item->price)}} đ</p></td>
                                    <td>{{$item->qty}}</td>
                                    <td><p class="tabletextp">{{number_format($item->price * $item->qty)}} đ</p></td>
                                  </tr>
                                  @endforeach
                                  <tr>
                                    <td colspan="3">
                                      <p class="tabletext">Số lượng sản phẩm</p>
                                      <p class="tabletext">Tổng giá trị đơn hàng</p>
                                      {{-- <p class="tabletext">Grand Total</p> --}}
                                    </td>
                                    <td>
                                      <p class="tabletextp">{{$totalQty}}</p>
                                      <p class="tabletextp">{{$totalPrice}} đ</p>
                                      {{-- <p class="tabletextp">&dollar;160.00</p> --}}
                                    </td>
                                  </tr>
                                  <tr>
                                    <td colspan="4">
                                      <div class="button_check">                  
                                        <div class="">                  
                                          <span class="left_btn"></span><button type="submit" class="btn right_btn custom-button">Xác nhận</button>
                                        </div>                    
                                      </div>          
                                    </td>
                                  </tr>                           
                                </table>
                              </div>
                            </div>                    
                          </div>
                        </div>
                      </div>
                    </div>
                  </form><!-- End Panel Default -->                        
                </div><!-- End Panel Gropup -->
              </div><!-- End Payment Method -->   
            </div>
            <div class="col-lg-3 col-md-12">
              <div class="checkout-sidebar">
                <h4>Các bước thanh toán</h4>
                <ul>
                  <li>Xác nhận thông tin giao hàng</li>
                  <li>Xác nhận phương thức vận chuyển</li>
                  <li>Xác định phương thức thanh toán</li>
                  <li>Xác nhận hóa đơn</li>
                  <li>Đặt hàng</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end discount area -->
    </body>
    @endsection