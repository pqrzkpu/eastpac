@extends('layouts.app')

@section('css')
<style>
.status {
    padding: 40px 20px;
    border-radius: 4px;
/*    text-align: center;*/
    border: 1px solid #dce6f5;
}
.status-empty .status-icon {
    background: #eff6ff;
    border-color: #c8d8f0;
}

.status-icon {
    position: relative;
    height: 100px;
    width: 100px;
    background: #fff;
    border-radius: 50%;
    text-align: center;
    margin: 0 auto 10px;
/*    border: 2px solid #c8d8f0;*/
}

.imgicon{
    margin-top: 20%;
}

.btn-primary {
    background: #2b56f5;
    border-color: #2b56f5;
    box-shadow: 0px 2px 18px 2px rgba(43, 86, 245, 0.25);
}
    
.step-number {
    flex-shrink: 0;
    height: 48px;
    width: 48px;
    font-size: 16px;
    color: #758698;
    border: 2px solid #b1becc;
    text-align: center;
    line-height: 45px;
    border-radius: 50%;
    margin-right: 12px;
    margin-top: 4px;
    margin-bottom: 4px;
}
    
/** Payment Box **/

.payment-list{
    padding-right : 0px;
}
.payment-item {
	text-align: center;
	margin-bottom: 15px;
	position: relative;
    
}
SS
.payment-item>span {
	display: block;
	font-size: 13px;
	color: #9eaecf;
	line-height: 1;
	position: absolute;
	right: 10px;
	top: 50%;
	transform: translateY(-50%);
}

.payment-item label {
	width: 100%;
	border: 2px solid #d3e0f3;
	border-radius: 4px;
	background: #eff6ff;
	padding: 2px 3px 1px;
	cursor: pointer;
	transition: all .4s;
	position: relative;
	display: flex;
	align-items: center;
    margin-right: 5px;  
}

.payment-item label span {
	padding-left: 10px;
}

.payment-item label:after {
	position: absolute;
	top: -15px;
	right: -15px;
	height: 30px;
	width: 30px;
	line-height: 26px;
/*    background-image: url('../img/checked.png');*/
/*	content: '\f00c';*/
	font-weight: 600;
	font-size: 10px;
	color: #fff;
	font-family: Font Awesome;
	border-radius: 50%;
	background: #2b56f5;
	border: 3px solid #fff;
	transition: all .4s;
	transform: scale(0);
}

.payment-item input[type="radio"] {
	display: none;
}

.payment-item input[type="radio"]:checked~label {
	border-color: #2b56f5;
}

.payment-item input[type="radio"]:checked~label:after {
	transform: scale(1);
}

.payment-icon {
	margin-bottom: 3px;
}

.payment-icon img {
	width: 30px;
	border-radius: 50%;
}

.payment-icon [class*=fa-] {
	height: 30px;
	width: 30px;
	border-radius: 50%;
	line-height: 30px;
	text-align: center;
	color: #fff;
	font-size: 12px;
}

/* upload-box */
.dz-clickable {
    border: 1px dashed #b1becc;
    background: #e0e8f3;
    border-radius: 4px;
    padding: 50px 0 20px;
    text-align: center;
}

.dz-message {
    padding-bottom: 30px;
}

.dz-message span {
    display: block;
    color: rgba(117,134,152,0.6);
}

.dz-message-text {
    font-size: 10pt;
}

.dz-message-text-or {
    font-size: 15pt;
    margin-bottom: 4px;
    padding-top: 10px;
    padding-bottom: 10px;
    text-transform: uppercase;
}
</style>
@endsection

@section('content')
<section class="content">
     <div class="row">
          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
        <div class="col-sm-12" style="margin-top: 10px">
            <div class="box box-warning">
                <div class="box-header with-border">
                    <h2 class="box-title">Begin your ID-Verification</h2>
                    <div class="box-body">
                        <p>Verify your identity to participate in tokensale.</p>
                        <div class="status status-empty">
                            <div class="step-head" style="display: flex; align-items: center"><div class="step-number">01</div><div class="step-head-text"><h4 class="pull-left">Personal Details</h4></div>
                            </div>
                            <hr>
                            <form action="{{ route('home.kycapp.store') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                <p><i class="fa fa-info-circle" style="color:#f39c12"></i> Please type carefully and fill out the form with your personal details. Your can’t edit these details once you submitted the form.</p>
                                <div class="row">
                                    <div class="col-md-6">
                                         <div class="form-group">
                                            <label for="first-name">First Name</label>
                                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="" >
                                          </div>
                                    </div>
                                    <div class="col-md-6">
                                         <div class="form-group">
                                            <label for="last-name">Last Name</label>
                                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="">
                                          </div>
                                    </div>
                                  
                                </div>
                                <div class="row">
                                     <div class="col-md-6">
                                         <div class="form-group">
                                            <label for="email">Email Address</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="">
                                          </div>
                                    </div>
                                    <div class="col-md-6">
                                         <div class="form-group">
                                            <label for="phone">Phone Number</label>
                                            <input type="number" class="form-control" id="mobilenumber" name="mobilenumber" placeholder="">
                                          </div>
                                    </div>
                                  
                                </div>
                               <div class="row">
                                    <div class="col-md-6">
                                         <div class="form-group">
                                            <label for="birthdate">Date of Birth</label>
                                            <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" data-date-format="yyyy/mm/dd" placeholder="">
                                          </div>
                                    </div>
                                   
                                  
                                </div>
                              
                              <div class="row"><div class="col-md-6"><h4 class="pull-left">Your Address</h4></div></div>
                              <div class="row">
                                    <div class="col-md-6">
                                         <div class="form-group">
                                            <label for="address">Address Line 1</label>
                                            <input type="text" class="form-control" id="address_1" name="address_1" placeholder="">
                                          </div>
                                    </div>
                                    <div class="col-md-6">
                                         <div class="form-group">
                                            <label for="address2">Address Line 2</label>
                                            <input type="text" class="form-control" id="address_2" name="address_2" placeholder="">
                                          </div>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="col-md-6">
                                         <div class="form-group">
                                            <label for="city">City</label>
                                            <input type="text" class="form-control" id="city" name="city" placeholder="">
                                          </div>
                                    </div>
                                    <div class="col-md-6">
                                         <div class="form-group">
                                            <label for="state">State</label>
                                            <input type="text" class="form-control" id="state" name="state" placeholder="">
                                          </div>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="col-md-6">
                                         <div class="form-group">
                                            <label for="nationality">Nationality</label>
                                            <input type="text" class="form-control" id="nationality" name="nationality" placeholder="">
                                          </div>
                                    </div>
                                    <div class="col-md-6">
                                         <div class="form-group">
                                            <label for="zip-code">Zip Code</label>
                                            <input type="text" class="form-control" id="zip_code" name="zip_code" placeholder="">
                                          </div>
                                    </div>
                              </div>
                              <hr>
                              <!--point 02-->
                               <div class="step-head" style="display: flex; align-items: center"><div class="step-number">02</div><div class="step-head-text"><h4 class="pull-left">Document Upload</h4></div>
                              </div>
                              <hr>
                              <p><i class="fa fa-info-circle" style="color:#f39c12"></i> In order to complete, please upload any of the following personal document.</p>
                              
                                <div class="payment-list">
                                    <div class="row">
                                       <div class="col-md-2 col-sm-6">
                                            <div class="payment-item">
                                                <input class="payment-check" type="radio" id="passport" name="document_type" value="1" checked="">
                                                <label for="passport">
                                                    <img src="{{asset('dist/img/icon-passport.png')}}" width="50px"; height="50px"; alt="icon"><br>
                                                    <span class="payment-cur">Passport</span>
                                                </label>                                               
                                            </div>       
                                       </div>
                                        <div class="col-md-2 col-sm-6">
                                            <div class="payment-item">
                                                <input class="payment-check" type="radio" id="national-card" name="document_type" value="2" checked="">
                                                <label for="national-card">
                                                    <img src="{{asset('dist/img/icon-national-id.png')}}" width="50px"; height="50px"; alt="icon"><br>
                                                    <span class="payment-cur">National Card</span>
                                                </label>
                                            
                                            </div>       
                                       </div>
                                       <div class="col-md-2 col-sm-6">
                                            <div class="payment-item">
                                                <input class="payment-check" type="radio" id="driver-licence" name="document_type" value="3" checked="">
                                                <label for="driver-licence">
                                                    <img src="{{asset('dist/img/icon-licence.png')}}" width="50px"; height="50px"; alt="icon"><br>
                                                    <span class="payment-cur">Driver License</span>
                                                </label>
                                            
                                            </div>       
                                       </div>
                                    </div>
                              </div>

                               <div class="row">
                                <div class="col-md-6">
                                    <p><b>To avoid delays when verifying account, Please make sure bellow:</b></p>
                                    <p><i class="fa fa-check"></i> Chosen credential must not be expaired.</p>
                                    <p><i class="fa fa-check"></i> Document should be good condition and clearly visible.</p>
                                    <p><i class="fa fa-check"></i> Make sure that there is no light glare on the card.</p>
                                    <br>
                                    <p><b>Upload Here Your Passport Copy</b></p>
                                    <div class="form-group">
                                      <label for="upload_images" class="col-sm-3">Upload Here Your Passport Copy</label>
                                      <div class="col-sm-9" id="upload-input">
                                          <input id="upload-image" type="file" class="form-control" name="document_file">
                                            
                                      </div>
                                  </div>
                                </div>
                              </div>

                              <!-- Start upload-zone dropzone dz-clickable -->
                              {{-- <div class="col-md-6">
                              <div class="upload-zone dropzone dz-clickable">
                                <div class="dz-message" data-dz-message>
                                    <span class="dz-message-text">Drag and Drop File</span>
                                    <span class="dz-message-text-or">or</span>
                                    <button class="btn btn-warning">Browse</button>
                                </div>
                              </div>
                              </div> --}}

                              <!-- end col -->
                              <!-- End upload-zone dropzone dz-clickable -->

                               {{--  <div class="col-md-1"></div>
                                <div class="col-sm-3 d-none d-sm-block">
                                <div class="mx-md-3">
                                    <img src="{{asset('dist/img/vector-passport.png')}}"/ width="200px;" height="200px"; alt="vector">
                                </div>
                                </div> --}}
                        
                              <div class="col-md-12">  
                              <hr>
                              <div class="step-head" style="display: flex; align-items: center"><div class="step-number">03</div><div class="step-head-text"><h4 class="pull-left">Your Paying Wallet</h4></div>
                              </div>
                              <hr>
                              <div class="row" style="">
                                    <div class="col-md-6">
                                         <div class="form-group">
                                            <label for="wallet">Select Wallet</label>
                                            <select id="wallet_type" class="form-control" name="wallet_type">
                                              <option value="1">Ethereum</option>
                                              <option value="2">Ethereum2</option>
                                            </select>
                                          </div>
                                    </div>
                              </div>
                              
                             
                              <div class="row">
                                    <div class="col-md-6">
                                         <div class="form-group">
                                            <label for="wallet_address">Your Address for1 tokens:</label>
                                            <input type="text" class="form-control" id="wallet_address" name="wallet_address" value="">
                                             <small style="color:grey;">Note: Address should be ERC20-compliant.</small>
                                          </div>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="col-md-6">
                                         <div class="form-group">
                                             <label>
                                              <input type="checkbox" class="minimal-red">
                                              I Have Read The Terms Of Condition And Privary Policy.
                                             </label>
                                          </div>
                                          <div class="form-group">
                                             <label>
                                              <input type="checkbox" class="minimal-red">
                                              All The Personal Information I Have Entered Is Correct.
                                             </label>
                                          </div>
                                    </div> 
                                    
                              </div>
                              <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-warning" href="{{ route('home.kycThankyou') }}">Process for Verify</button>  
                                </div>
                              </div>
                             </form>
                          </div>
                    </div>
              </div>
                
           
          </div>
        </div>
      </div>
    

    {{-- <div class="row">
        <div class="col-sm-12" style="margin-top: 10px">
            <div class="box box-warning">
                <div class="box-header with-border">
                    <h2 class="box-title">Identity Verification - KYC</h2>
                    <div class="box-body">
                        <form action="{{ route('home.kycapp.store') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <input type="file" id="exampleInputFile" name="document_file">
                                <p class="help-block">Example block-level help text here.</p>
                            </div>
                            <div class="checkbox">
                                <label>
                                <input type="checkbox"> Check me out
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

</section>
@endsection

@section('script')
 
@endsection
