@extends('layouts.shop')
@section('content')

<section class="ftco-menu mb-5 pb-5">
    <div class="container">
        <div class="row justify-content-center mb-5">
      <div class="col-md-7 heading-section text-center ftco-animate">
          <span class="subheading">Discover</span>
        <h2 class="mb-4">Our Products</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
      </div>
    </div>
        <div class="row d-md-flex">
            <div class="col-lg-12 ftco-animate p-md-5">
                <div class="row">
              <div class="col-md-12 nav-link-wrap mb-5">
                <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">ĐĂNG NHẬP</a>

                  <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">ĐĂNG KY</a>

                </div>
              </div>
              <div class="col-md-8 col-sm-12 d-flex align-items-center">
                
                <div class="tab-content ftco-animate" id="v-pills-tabContent">

                  <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
                      <div class="row">
                        <div class="col-md-8">
                        <form action="#" class="contact-form">
                            <div class="row">
                                <div class="col-md-6">
                                <div class="form-group">
                                  <a href="{{ url('/auth/redirect/facebook') }}" class="btn btn-primary"><i class="fa fa-facebook"></i> Facebook</a>

                                  
                                  <input type="text" class="form-control" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                  <input type="text" class="form-control" placeholder="Your Email">
                                </div>
                                </div>
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject">
                          </div>
                          <div class="form-group">
                            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                          </div>
                          <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                          </div>
                        </form>
                        </div>
                      </div>
                  </div>

                  <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
                    <div class="row">
                        <form action="#" class="contact-form">
                      
                          <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject">
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject">
                          </div>
                          <div class="form-group">
                            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                          </div>
                          <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                          </div>
                        </form>
                      </div>
                  </div>

                
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</section>

@endsection