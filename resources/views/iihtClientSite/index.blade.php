@extends('iihtClientSite.layouts.header')
@section('content')
    <div id="mydiv"></div>
    <script type="text/babel">
      function Test() {
        return (
          <section>
            <div class="main-image">
              <div class="container pt-4">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
                  <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                      IIHT BD
                    </a>
                    <button
                      class="navbar-toggler"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#navbarSupportedContent"
                      aria-controls="navbarSupportedContent"
                      aria-expanded="false"
                      aria-label="Toggle navigation"
                    >
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div
                      class="collapse navbar-collapse"
                      id="navbarSupportedContent"
                    >
                      <div class="ms-auto">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a
                              class="nav-link active"
                              aria-current="page"
                              href="#"
                            >
                              Home
                            </a>
                          </li>

                          <li class="nav-item">
                            <a
                              class="nav-link active"
                              data-bs-toggle="modal"
                              data-bs-target="#exampleModal"
                              aria-current="page"
                              id=""
                              href="#"
                            >
                              Admission
                            </a>
                          </li>

                          <div
                            class="modal fade"
                            id="exampleModal"
                            tabindex="-1"
                            aria-labelledby="exampleModalLabel"
                            aria-hidden="true"
                          >
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header bg-info">
                                  <h5
                                    class="modal-title text-center text"
                                    id="exampleModalLabel"
                                  >
                                    Book Your Seat
                                  </h5>
                                  <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"
                                  ></button>
                                </div>
                                  <form action="{{ route('booked.seat') }}" method="POST" >
                                      <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <div class="modal-body ">
                                  <div class="d-flex justify-content-center align-items-center">
                                    <div class="shadow-lg p-4">
                                      <div class="mb-3 row">
                                        <label for="inputtext" class="col-sm-2 col-form-label text">Name</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" name="name" id="inputName"/>
                                        </div>
                                      </div>
                                      <div class="mb-3 row">
                                        <label for="inputtext" class="col-sm-2 col-form-label text">Email</label>
                                        <div class="col-sm-10">
                                          <input type="email" class="form-control" name="email" id="inputName"/>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-6 col-12">
                                          <div class="custom-select ">
                                            <label for="inputtext" class="col-sm-2 col-form-label text">Courses</label>
                                            <span class="ps-5">
                                                <select class="form-select" id='courseId' name='course_id' >
                                                @foreach ($courseList as $key => $value)
                                                <option value='{{$key}}'>{{$value}}</option>
                                                    @endforeach
                                                </select>
                                            </span>
                                          </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                          <div class="custom-select ">
                                            <label for="inputtext" class="col-sm-2 col-form-label text">Slots</label>
                                            <span class="ps-5">
                                              <select name="slot_id" id="slotId" class="form-control text">
                                                <option value="">Select</option>
                                              </select>
                                            </span>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="d-flex justify-content-center">
                                        <a href="" class="text-decoration-none mt-3">
                                          {" "}
                                          <button id="alert" type="submit" class="btn btn-warning rounded-pill px-5 text">Confirm your seat</button>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                  </form>
                                <div class="modal-footer d-flex justify-content-center bg-info ">
                                  <div class=" py-3"></div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <li class="nav-item">
                            <a
                              class="nav-link active"
                              aria-current="page"
                              href="#about"
                            >
                              About Us
                            </a>
                          </li>

                          <li class="nav-item">
                            <a
                              class="nav-link active"
                              aria-current="page"
                              href="#course"
                            >
                              Courses
                            </a>
                          </li>
                          <li class="nav-item">
                            <a
                              class="nav-link active"
                              aria-current="page"
                              href="#contact"
                            >
                              Contact Us
                            </a>
                          </li>
                          <li class="nav-item">
                            <a
                              class="nav-link active"
                              aria-current="page"
                              href="#career"
                            >
                              Career Counselling
                            </a>
                          </li>
                        </ul>
                      </div>

                      <form class="d-flex">
                        <input
                          class="form-control me-2"
                          type="search"
                          placeholder="Search"
                          aria-label="Search"
                        />
                        <a href="">
                          <i class="fas fa-search text-info my-3"></i>
                        </a>
                      </form>
                    </div>
                  </div>
                </nav>
              </div>

              <div class="container">
                <div class="content text-light d-flex justify-content-start align-items-center mt-5">
                  <div>
                    <h1 class="fw-bolder heading">
                      Make Your Step To <br /> Build Your Future
                    </h1>
                    <p class="my-4">
                      Learn and grow with us cause, the more you learn the more
                      you grow
                    </p>
                    <a href="">
                      <button type="button" class="btn btn-info rounded-pill">
                        Book Now
                      </button>
                    </a>

                    <a href="">
                      <button
                        type="button"
                        class=" mx-3 btn btn-outline-info rounded-pill"
                      >
                        Learn More
                      </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="container mt-3 shadow-lg rounded-3 my-5">
              <div class="row g-4 p-3">
                <div class="col-md-6 col-12">
                  <img
                    class="img-fluid"
                    src="https://media.istockphoto.com/photos/school-corridor-with-lockers-3d-illustration-picture-id1267107338?b=1&k=20&m=1267107338&s=170667a&w=0&h=XQMnVJACk1ojL9HyyyNVqX1R6mq81VDe1iOOKNVtohA="
                    alt=""
                  />
                </div>
                <div class="col-md-6 col-12 pt-4">
                  <h3 class="text-center fw-bolder heading-color">
                    Welcome to IIHT Bangladesh{" "}
                  </h3>
                  <p class=" text-wrap sec2-text">
                      {{ ($testimonials) ? $testimonials->content : null}}
                  </p>
                </div>
              </div>
            </div>

            <div class="container my-5" id= "course">
              <h3 class="text-center fw-bolder heading-color">Our Courses</h3>
              <p class="text-center text-info pb-4">
                <small>
                  We provide the best quality and ensures your extra care if
                  needed.
                </small>
              </p>
                @if(!$courses->isEmpty())
              <div
                id="carouselExampleControls"
                class="carousel slide"
                data-bs-ride="carousel"
              >
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row g-5 mb-5">
                        @foreach( $courses as $course )
                      <div class="col-md-3 col-6 ">
                        <div class="d-flex justify-content-center align-items-center dev-bg-{{$color}} p-3  rounded-top">
                          <div class="border border-secondary rounded-circle p-2 me-2 bg-white">
                            <i class="fas fa-users text-warning"></i>
                          </div>
                          <p class="text-white">{{$course->name}}</p>
                        </div>
                        <div class="p-3 shadow-lg rounded-bottom">
                          <p>Price : {{ $course->price }} BDT</p>
                          <p>Class : {{ $course->class_no }} </p>
                          <p>Duration : {{ $course->duration }} hours </p>
                          <a href="" class="text-decoration-none text-warning">
                            Learn More
                          </a>
                        </div>
                      </div>
                        @endforeach
                    </div>
                  </div>
                </div>
              </div>
                @else
                <div><p>There is no course available now</p></div>
                @endif
            </div>
            <div id="career">
              <div class="form-banner pt-5">
                <div class="heading">
                  <h3 class="fw-bolder heading-color  ms-4">
                    Need Career Counselling?
                  </h3>
                </div>
                <div class="container row mt-5">
                  <div class="col-md-6 col-12">
                    <form class="shadow-lg p-4" action="{{ route('career.appointment') }}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                      <div class="row g-4">
                        <div class="col-md-6 col-12 mb-2">
                          <input type="text" name="name" placeholder="User Name" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp"/>
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                          <input placeholder="example@gmail.com" name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"/>
                        </div>
                          <div class="col-md-6 col-12 mb-2">
                          <select name="subject" id="" class="form-control">
                              <option value="">Select</option>
                              <option value="Career in Web Develpment - Laravel">
                                  Career in Web Develpment - Laravel
                              </option>
                              <option value="Career in Web Develpment - Django">
                                  Career in Web Develpment - Django
                              </option>
                              <option value="Machine Learning and it's Career">
                                  Machine Learning and it's Career
                              </option>
                              <option value="Data Science and it's Career">
                                  Data Science and it's Career
                              </option>
                              <option value="UI/UX">
                                  Career in UI/UX
                              </option>
                              <option value="Career in Graphics Design">
                                  Career in Graphics Design
                              </option>
                          </select>
                          </div>
                        <div class="col-md-6 col-12 mb-2">
                          <input type="date" name="date" placeholder="Time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"/>
                        </div>
                      </div>
                        <button type="submit" class="btn btn-warning text-white rounded-pill mt-3">Book Appointment</button>
                    </form>
                      @if (\Session::has('success'))
                      <div class="alert alert-success">
                      <ul>
                          {!! \Session::get('success') !!}
                      </ul>
                      </div>
                      @endif
                  </div>
                </div>
              </div>
            </div>

            <div class="team-bg py-3 shadow-lg" id="about">
              <h3 class="fw-bolder heading-color text-white text-center my-5 pt-3">
                Meet Our Team Members
              </h3>
              <div class="container-team">
                <div class="our-team">
                  <div class="team-pic">
                    <img src="assets/asset/image/ceo.png" alt="" />
                  </div>
                  <div class="team-content">
                    <h3 class="title">Ashley Fletcher</h3>
                    <p class="text-info text">CEO</p>
                    <div>
                      <i class="fab fa-facebook text-primary"></i>
                      <i class="fab fa-instagram-square text-primary mx-2"></i>
                      <i class="fab fa-twitter-square text-primary me-2"></i>
                      <i class="fab fa-youtube text-danger"></i>
                    </div>
                  </div>
                </div>
                <div class="our-team">
                  <div class="team-pic">
                    <img src="assets/asset/image/co-founder.png" alt="" />
                  </div>
                  <div class="team-content">
                    <h3 class="title mt-4">Avie Beaton</h3>
                    <p class="text-info text">CO Founder</p>
                    <div>
                      <i class="fab fa-facebook text-primary"></i>
                      <i class="fab fa-instagram-square text-primary mx-2"></i>
                      <i class="fab fa-twitter-square text-primary me-2"></i>
                      <i class="fab fa-youtube text-danger"></i>
                    </div>
                  </div>
                </div>
                <div class="our-team">
                  <div class="team-pic">
                    <img src="assets/asset/image/co ordinator.png" alt="" />
                  </div>
                  <div class="team-content">
                    <h3 class="">Ben Jonson</h3>
                    <p class="text-info text">Consultant</p>
                    <div>
                      <i class="fab fa-facebook text-primary"></i>
                      <i class="fab fa-instagram-square text-primary mx-2"></i>
                      <i class="fab fa-twitter-square text-primary me-2"></i>
                      <i class="fab fa-youtube text-danger"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <footer>
              <div class="container" id="contact">
                <div class="d-flex justify-content-between mt-5 border-bottom">
                  <p class="text text-white">IIHT Bangladesh</p>
                  <p class="text text-white">
                    Follow us <i class="fab fa-facebook text-primary"></i>
                    <i class="fab fa-instagram-square text-primary mx-2"></i>
                    <i class="fab fa-twitter-square text-primary me-2"></i>
                    <i class="fab fa-youtube text-danger"></i>
                  </p>
                </div>

                <div class="row mt-3">
                  <div class="col-md-3 col-12">
                    <p class="fw-bold  text-info">Contact us</p>
                    <p>
                      <small class=" text-white">Phone : +8801716445415</small>
                    </p>
                    <p>
                      <small class=" text-white">info@iihtbangladesh.com</small>
                    </p>
                    <p>
                      <small class=" text-white">Office</small>
                    </p>
                    <p>
                      <small class=" text-white">6 Pantha Path Lane ,</small>
                    </p>
                    <p>
                      <small class=" text-white">
                        Navana DH Tower, 1215 Dhaka
                      </small>
                    </p>
                    <p>
                      <small class=" text-white">
                        Dhaka Devision, Bangladesh
                      </small>
                    </p>
                  </div>
                  <div class="col-md-3 col-12">
                    <p class="fw-bold text-info">Legal</p>
                    <p>
                      <small class=" text-white">About Us</small>
                    </p>
                    <p>
                      <small class=" text-white">Company Info</small>
                    </p>
                    <p>
                      <small class=" text-white">Our Team Members</small>
                    </p>
                    <p>
                      <small class=" text-white"> We are hiring</small>
                    </p>
                    <p>
                      <small class=" text-white">Watch a Demo</small>
                    </p>
                  </div>

                  <div class="col-md-3 col-12">
                    <p class="fw-bold text-info">Features</p>
                    <p>
                      <small class=" text-white">Our Courses</small>
                    </p>
                    <p>
                      <small class=" text-white">Special Offers</small>
                    </p>
                    <p>
                      <small class=" text-white">Live Chat</small>
                    </p>
                    <p>
                      <small class=" text-white"> Unlimited Support</small>
                    </p>
                  </div>

                  <div class="col-md-3 col-12">
                    <p class="fw-bold text-info">Get In Touch</p>
                    <div class="input-group mb-3">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="your email"
                        aria-label="Recipient's username"
                        aria-describedby="button-addon2"
                      />
                      <button
                        class="btn btn-warning"
                        type="button"
                        id="button-addon2"
                      >
                        Subscribe
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="d-flex justify-content-center align-items-center footer-copy-right">
                <p class="text-white py-3">
                  <small>
                    <i class="far fa-copyright"></i> All Right Reserved By SiS
                    Inflexionpoint BD Ltd.{" "}
                  </small>
                </p>
              </div>
            </footer>
          </section>
        );
      }

      class Home extends React.Component {
        render() {
          return (
            <div>
              <Test></Test>{" "}
            </div>
          );
        }
      }
      ReactDOM.render(<Home />, document.getElementById("mydiv"));

      //boot strap
    </script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

    </body>
@endsection
