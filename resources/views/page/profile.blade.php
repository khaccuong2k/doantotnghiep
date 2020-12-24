@extends('master')
@section('contentMaster')
<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block text-center">
            <span class="text-white">Profile Detail</span>
            <h1 class="text-capitalize mb-5 text-lg">{{Auth::user()->username}}</h1>
  
            <!-- <ul class="list-inline breadcumb-nav">
              <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
              <li class="list-inline-item"><span class="text-white">/</span></li>
              <li class="list-inline-item"><a href="#" class="text-white-50">Doctor Details</a></li>
            </ul> -->
          </div>
        </div>
      </div>
    </div>
  </section>
  
  
  <section class="section doctor-single">
      <div class="container">
          <div class="row">
              <div class="col-lg-4 col-md-6">
                  <div class="doctor-img-block">
                      <img src="{{asset('novena/images/team/1.jpg')}}" alt="" class="img-fluid w-100">
  
                      <div class="info-block mt-4">
                          <h4 class="mb-0">{{Auth::user()->username}}</h4>
                          {{-- <p>Orthopedic Surgary</p> --}}
  
                          <ul class="list-inline mt-4 doctor-social-links">
                              <li class="list-inline-item"><a href="#"><i class="icofont-facebook"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="icofont-twitter"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="icofont-skype"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="icofont-linkedin"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="icofont-pinterest"></i></a></li>
                          </ul>
                      </div>
                  </div>
              </div>
  
              <div class="col-lg-8 col-md-6">
                  <div class="doctor-details mt-4 mt-lg-0">
                      <h5 class="text-md">Edit Your Profile</h5>
                      <div class="divider my-4"></div>
                      <form>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Username</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username">
                          {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                          {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            {{-- {{asset('upload/img/img_country')}}/{{ $aa->img }} --}}
                            <img id="output" src="" width="100" height="100">
                            <input name="img_edit" type="file" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                      {{-- <a href="appoinment.html" class="btn btn-main-2 btn-round-full mt-3">Make an Appoinment<i class="icofont-simple-right ml-2  "></i></a> --}}
                  </div>
              </div>
          </div>
      </div>
  </section>
  
  <section class="section doctor-qualification gray-bg">
      <div class="container">
          <div class="row">
              <div class="col-lg-6">
                  <div class="section-title">
                      <h3>My Educational Qualifications</h3>
                      <div class="divider my-4"></div>
                  </div>
              </div>
          </div>
  
          <div class="row">
              <div class="col-lg-6">
                  <div class="edu-block mb-5">
                      <span class="h6 text-muted">Year(2005-2007) </span>
                      <h4 class="mb-3 title-color">MBBS, M.D at University of Wyoming</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi doloremque harum, mollitia, soluta maxime porro veritatis fuga autem impedit corrupti aperiam sint, architecto, error nesciunt temporibus! Vel quod, dolor aliquam!</p>
                  </div>
  
                  <div class="edu-block">
                      <span class="h6 text-muted">Year(2007-2009) </span>
                      <h4 class="mb-3 title-color">M.D. of Netherland Medical College</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi doloremque harum, mollitia, soluta maxime porro veritatis fuga autem impedit corrupti aperiam sint, architecto, error nesciunt temporibus! Vel quod, dolor aliquam!</p>
                  </div>
              </div>
  
              <div class="col-lg-6">
                  <div class="edu-block mb-5">
                      <span class="h6 text-muted">Year(2009-2010) </span>
                      <h4 class="mb-3 title-color">MBBS, M.D at University of Japan</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi doloremque harum, mollitia, soluta maxime porro veritatis fuga autem impedit corrupti aperiam sint, architecto, error nesciunt temporibus! Vel quod, dolor aliquam!</p>
                  </div>
  
                  <div class="edu-block">
                      <span class="h6 text-muted">Year(2010-2011) </span>
                      <h4 class="mb-3 title-color">M.D. of Canada Medical College</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi doloremque harum, mollitia, soluta maxime porro veritatis fuga autem impedit corrupti aperiam sint, architecto, error nesciunt temporibus! Vel quod, dolor aliquam!</p>
                  </div>
              </div>
          </div>
      </div>
  </section>
  
  
  <section class="section doctor-skills">
      <div class="container">
          <div class="row">
              <div class="col-lg-4">
                  <h3>My skills</h3>
                  <div class="divider my-4"></div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In architecto voluptatem alias, aspernatur voluptatibus corporis quisquam? Consequuntur, ad, doloribus, doloremque voluptatem at consectetur natus eum ipsam dolorum iste laudantium tenetur.</p>
              </div>
              <div class="col-lg-4">
                  <div class="skill-list">
                      <h5 class="mb-4">Expertise area</h5>
                      <ul class="list-unstyled department-service">
                          <li><i class="icofont-check mr-2"></i>International Drug Database</li>
                          <li><i class="icofont-check mr-2"></i>Stretchers and Stretcher Accessories</li>
                          <li><i class="icofont-check mr-2"></i>Cushions and Mattresses</li>
                          <li><i class="icofont-check mr-2"></i>Cholesterol and lipid tests</li>
                          <li><i class="icofont-check mr-2"></i>Critical Care Medicine Specialists</li>
                          <li><i class="icofont-check mr-2"></i>Emergency Assistance</li>
                      </ul>
                  </div>
              </div>
              <div class="col-lg-4">
                  <div class="sidebar-widget  gray-bg p-4">
                      <h5 class="mb-4">Make Appoinment</h5>
  
                      <ul class="list-unstyled lh-35">
                        <li class="d-flex justify-content-between align-items-center">
                          <a href="#">Monday - Friday</a>
                          <span>9:00 - 17:00</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                          <a href="#">Saturday</a>
                          <span>9:00 - 16:00</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                          <a href="#">Sunday</a>
                          <span>Closed</span>
                        </li>
                      </ul>
  
                      <div class="sidebar-contatct-info mt-4">
                          <p class="mb-0">Need Urgent Help?</p>
                          <h3 class="text-color-2">+23-4565-65768</h3>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
@endsection