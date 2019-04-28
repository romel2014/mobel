@extends('layout')




@section('content')
    <section class="ptb-100 main-bg">
    
        <div class="container">
            
            <div class="row">

                <div class="col-lg-8">
                     <div class="white-bg pt-4 pb-4 ">
                          <ul class="steps-bullet d-flex justify-content-between">
                              <li class="active"><span>1</span></li>
                              <li><span>2</span></li>
                              <li><span>3</span></li>
                              <li><span>4</span></li>
                              <li><span>5</span></li>
                          </ul><!-- ./steps-bullet -->  


                          <div class="row m-2">
                             
                              <div class="col-lg-5"> 
                                  <h4>Item Description</h4> 
                                  <p>a litle bit of descriptions here</p>
                                  <img src="img/banner.png" class="img-fluid">
                              </div>

                              <div class="col-lg-7">

                                        <div class="box-list">
                                                  <div class="step-box active ">

                                                              <form>
                                                                <div class="light-bg">
                                                                    <h4>Choose Type:</h4>
                                                                   
                                                                    <div class="form-group">
                                                                      <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="hinged" value="Hinged">
                                                                            <label class="form-check-label" for="hinged">Hinged</label>
                                                                          </div>
                                                                          <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" id="sliding" type="radio" name="inlineRadioOptions" value="Sliding">
                                                                            <label class="form-check-label" for="sliding">Sliding</label>
                                                                      </div>
                                                                    </div>
                                                                  </div><!-- light-bg -->  

                                                                 
                                                                  <div class="light-bg">
                                                                         <h4>Set the sizes:</h4>
                                                                         <div class="form-group row">
                                                                              <label class="col-sm-6 col-form-label">Width</label>
                                                                              <div class="col-sm-6">
                                                                                <select class="form-control add-price">
                                                                                      <option value="0">Select</option>

                                                                                      <option value="100">100cm</option>
                                                                                      <option value="200">200cm</option>
                                                                                </select>
                                                                              </div>
                                                                          </div> <!-- ./form-group -->  
                                                                          <div class="form-group row">
                                                                              <label class="col-sm-6 col-form-label">Height</label>
                                                                              <div class="col-sm-6">
                                                                                <select class="form-control">
                                                                                     <option value="0">Select</option>
                                                                                </select>
                                                                              </div>
                                                                          </div> <!-- ./form-group --> 
                                                                          <div class="form-group row">
                                                                              <label class="col-sm-6 col-form-label">Depth</label>
                                                                              <div class="col-sm-6">
                                                                                <select class="form-control">
                                                                                     <option value="0">Select</option>
                                                                                </select>
                                                                              </div>
                                                                          </div> <!-- ./form-group --> 
                                                                      </div><!-- light-bg -->  


                                                              </form> <!-- ./form -->
                                                          
                                                  </div><!-- ./step-1-->

                                                  <div class="step-box">
                                                      <div class="light-bg">
                                                          <h4>Choose Color Frame</h4>

                                                          <ul class="list-block">
                                                            <li class="active"><a href="#"><img src={{asset('img/frame/frame1.jpg')}} alt=""></a></li>
                                                            <li><a href="#"><img src={{asset('img/frame/frame2.jpg')}} alt=""></a></li>
                                                            <li><a href="#"><img src={{asset('img/frame/frame3.jpg')}} alt=""></a></li>
                                                            <li><a href="#"><img src={{asset('img/frame/frame1.jpg')}} alt=""></a></li>
                                                            <li><a href="#"><img src={{asset('img/frame/frame2.jpg')}} alt=""></a></li>
                                                            <li><a href="#"><img src={{asset('img/frame/frame3.jpg')}} alt=""></a></li>
                                                            <li><a href="#"><img src={{asset('img/frame/frame1.jpg')}} alt=""></a></li>
                                                          </ul>

                                                      </div>  
                                                  </div><!-- ./step-2-->

                                                  <div class="step-box">
                                                      <div class="light-bg">
                                                          <h4>Front Door Application</h4>

                                                          <ul class="list-block">
                                                            <li class="active"><a href="#"><img src={{asset('img/frontdoor/glass.jpg')}} alt=""></a></li>
                                                            <li><a href="#"><img src={{asset('img/frontdoor/wood.jpg')}} alt=""></a></li>
                                                            <li><a href="#"><img src={{asset('img/frontdoor/glass.jpg')}} alt=""></a></li>
                                                            <li><a href="#"><img src={{asset('img/frontdoor/wood.jpg')}} alt=""></a></li>    
                                                          </ul>                                                                                                                      
                                                      </div> 
                                                      <div class="light-bg">
                                                          <h4>Choose Color</h4>

                                                          <ul class="list-block">
                                                            <li class="active"><a href="#"><img src={{asset('img/frontdoor/glass.jpg')}} alt=""></a></li>
                                                            <li><a href="#"><img src={{asset('img/frontdoor/wood.jpg')}} alt=""></a></li>
                                                            <li><a href="#"><img src={{asset('img/frontdoor/glass.jpg')}} alt=""></a></li>
                                                            <li><a href="#"><img src={{asset('img/frontdoor/wood.jpg')}} alt=""></a></li>  
                                                            <li><a href="#"><img src={{asset('img/frontdoor/wood.jpg')}} alt=""></a></li>
                                                            <li><a href="#"><img src={{asset('img/frontdoor/glass.jpg')}} alt=""></a></li>
                                                            <li><a href="#"><img src={{asset('img/frontdoor/wood.jpg')}} alt=""></a></li>   
                                                          </ul>                                                                                                                      
                                                      </div>  
                                                  </div><!-- ./step-3-->

                                                  <div class="step-box">
                                                      <div class="light-bg">
                                                          <h4>With Drawer or Mirror?</h4>

                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                            <label class="form-check-label" for="inlineRadio1">None</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                            <label class="form-check-label" for="inlineRadio2">Drawer</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                                            <label class="form-check-label" for="inlineRadio3">Mirror</label>
                                                          </div>

                                                      </div> <!-- ./light-bg --> 
                                                      <div class="light-bg">
                                                          <h4>New Option pops here</h4>

                                                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                          tempor incididunt ut labore et dolore magna aliqua. </p>

                                                      </div> <!-- ./light-bg --> 
                                                  </div><!-- ./step-4-->


                                                  <div class="step-box">
                                                      <div class="light-bg">

                                                        <div class="finalize">
                                                          <h4>Are you Happy with this?</h4>
                                                          <h5>Type:</h5>
                                                          <p>Sliding</p>
                                                          <hr>
                                                          <h5>Frame:</h5>
                                                          <p>Type:  <img src={{asset('img/frontdoor/wood.jpg')}} alt=""></p>
                                                          <hr>
                                                          <h5>Size:</h5>
                                                          <p>Width:  208</p>
                                                          <p>Height:  208</p>
                                                          <p>Depth:  208</p>
                                                          <hr>

                                                          <h5>Front Door:</h5>
                                                          <p>Wood:  <img src={{asset('img/frontdoor/wood.jpg')}} alt=""></p>
                                                          <p>Color:  <img src={{asset('img/frontdoor/wood.jpg')}} alt=""></p>                                       
                                                          <hr>
                                                          <h5>With:</h5>
                                                          <p>Drawer</p>
                                                          <p>some option here</p>
                                                       </div>   
                                                          
                                                          

                                                      </div>  
                                                  </div><!-- ./step-5-->

                                                  

                                                  

                                          </div><!-- ./box-list -->
                              </div>  

                          </div>  

                          
                          



                          <div class="step-action-box text-center mt-5">
                                <a href="#" class="btn btn-main" id="prev"> Previous</a>
                                <a href="#" class="btn btn-main" id="next"> Next</a>   
                          </div><!-- ./step-action-box -->


                     </div> 
                </div>

                <div class="col-lg-4">
                     <div class="white-bg p-3">
                          
                          <h4>Your Customization</h4>

                          <ul class="list-progress">
                              <li class="active" ><span>Choose Type</span> </li>
                              <li><span>Color Frame</span> </li>
                              <li><span>Front Door</span></li>
                              <li><span>Extras</span></li>
                              <li><span>Final</span></li>
                             
                              
                          </ul><!-- ./list-progress -->

                          <div class="d-flex justify-content-between">
                              <h4>Total</h4>  
                              <div class="price" id="total-price">$0</div>
                          </div>


                          <div class="text-center">                           
                                <p class="text-center mt-3 mb-3"> <small>incl. VAT Free delivery to the apartment <br> Delivery time aprrox.  6-9 Weeks </small></p>

                                <a href="#" class="btn btn-main text-center">checkout</a>
                          </div>


                     </div> 
                </div>

            </div><!-- ./row -->

        </div> <!-- ./container -->

    </section>

@endsection
