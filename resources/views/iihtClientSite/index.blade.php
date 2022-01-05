@extends('iihtClientSite.layouts.header')
@section('content')
    <div id="mydiv"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/babel">
        function Test() {
            return (
                <section>
                    <div class="main-image">
                        <div class="container pt-4">
                            @if(session()->has('message'))
                            <div class="alert alert-success">
                            {{ session()->get('message') }}
                            </div>
                            @endif
                            <nav class="navbar navbar-expand-lg navbar-dark nav-bg nav-border ">
                            <div class="container-fluid">
                                <a class="navbar-brand ps-3" href="#">
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
                                            <li class="nav-item pe-3">
                                                <a
                                                    class="nav-link active nav-font"
                                                    aria-current="page"
                                                    href="#"
                                                >
                                                    Home
                                                </a>
                                            </li>

                                            <li class="nav-item pe-3">
                                                <a
                                                    class="nav-link active nav-font"
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
                                                        <div class="modal-header bg-modal text-center">
                                                            <h5
                                                                class="modal-title w-100 text-center text-white text"
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
                                                        <form action="{{ route('booked.seat') }}" method="POST">
                                                            <input type="hidden" name="_token"
                                                                   value="{{ csrf_token() }}"/>
                                                            <meta name="csrf-token" content="{{ csrf_token() }}"/>
                                                            <div class="modal-body">
                                                                <div
                                                                    class="d-flex justify-content-center align-items-center">
                                                                    <div class="shadow-lg p-4">
                                                                        <div class="mb-3 row">
                                                                            <label for="inputtext"
                                                                                   class="col-sm-2 col-form-label text ">Name</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text"
                                                                                       class="form-control"
                                                                                       name="name" id="inputName"/>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mb-3 row">
                                                                            <label for="inputtext"
                                                                                   class="col-sm-2 col-form-label text ">Email</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="email"
                                                                                       class="form-control"
                                                                                       name="email" id="inputName"/>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-6 col-12">
                                                                                <div class="custom-select ">
                                                                                    <label for="inputtext"
                                                                                           class="col-sm-2 col-form-label text text-white">Courses</label>
                                                                                    <span class="ps-5">
                                                <select class="form-select" name='course_id' id='courseId'>
                                                @foreach ($courseList as $key => $value)
                                                <option value='{{$key}}'>{{$value}}</option>
                                                    @endforeach
                                                </select>
                                            </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 col-12"
                                                                                 id="showCourseSlot">
                                                                            </div>
                                                                        </div>
                                                                        <div class="d-flex justify-content-center">
                                                                            <a href=""
                                                                               class="text-decoration-none mt-3">
                                                                                {" "}
                                                                                <button id="alert" type="submit"
                                                                                        class="btn bg-warning rounded-pill px-5 text">Confirm
                                                                                    your seat
                                                                                </button>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <div
                                                            class="modal-footer d-flex justify-content-center bg-modal">
                                                            <div class=" py-3"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <li class="nav-item pe-3">
                                                <a
                                                    class="nav-link active nav-font"
                                                    aria-current="page"
                                                    href="#about"
                                                >
                                                    About Us
                                                </a>
                                            </li>

                                            <li class="nav-item pe-3">
                                                <a
                                                    class="nav-link active nav-font"
                                                    aria-current="page"
                                                    href="#course"
                                                >
                                                    Courses
                                                </a>
                                            </li>
                                            <li class="nav-item pe-3">
                                                <a
                                                    class="nav-link active nav-font"
                                                    aria-current="page"
                                                    href="#contact"
                                                >
                                                    Contact Us
                                                </a>
                                            </li>
                                            <li class="nav-item pe-3">
                                                <a
                                                    class="nav-link active nav-font"
                                                    aria-current="page"
                                                    href="#"
                                                >
                                                    Booking<i class="fas fa-shopping-cart"></i>
                                                </a>
                                            </li>
                                            <li class="nav-item pe-3">
                                                <a
                                                    class="nav-link active nav-font"
                                                    aria-current="page"
                                                    href="#career"
                                                >
                                                    Career Counselling
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            </nav>
                        </div>

                        <div class="container">
                            <div class="content text-light d-flex justify-content-start align-items-center mt-5">
                                <div>
                                    <h1 class="fw-bold heading1-size">
                                        Make Your Step To <br/> Build Your Future
                                    </h1>
                                    <p class="my-4">
                                        Learn and grow with us cause<br/> the more you learn the more
                                        you grow
                                    </p>
                                    <div class="btn-flex">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal" >
                                            <button type="button"
                                                    class=" text-white btn1 rounded-pill">
                                                Book Now
                                            </button>
                                        </a>

                                        <a href="">
                                            <button type="button"
                                                    class="text-white border-info btn2  btn-color rounded-pill">
                                                Learn More
                                            </button>
                                        </a>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-center heading-color fs-2 mt-5 mb-5">
                        Welcome to IIHT Bangladesh{" "}
                    </h3>
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

                                <p class=" text-wrap sec2-text">
                                    {{ ($testimonials) ? $testimonials->content : null}}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="container my-5" id="course">
                        <h3 class="text-center fs-2 fw-bolder heading-color mb-2">Our Courses</h3>
                        <p class="text-secondary text-center mt-2 mb-5">

                            <small clas="fw-3">

                                We provide the best quality and ensures your extra care if needed.
                                {" "}

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
                                <div class="row g-3 mb-5">
                                    @foreach( $courses as $course )
                                    <div class="col-md-3 col-6 ">
                                    <div
                                        class="d-flex justify-content-center align-items-center dev-bg-{{$color}} p-3 py-4 course-top ">

                                        <div class="border border-secondary icon-round p-3 me-2 bg-white d-flex align-content-center justify-content-center">
                                            <i class="fas fa-users text-warning"></i>
                                        </div>
                                        <div class="d-flex justify-content-center align-content-center">
                                            <p class="text-white course-name ms-2">{{$course->name}}</p>
                                        </div>

                                    </div>
                                    <div class="p-3 shadow-lg course-bottom text-secondary">
                                        <p>Price : {{ $course->price }} BDT</p>
                                        <p>Class : {{ $course->class_no }} </p>
                                        <p>Duration : {{ $course->duration }} hours </p>
                                        <a href="" class="text-decoration-none learn-text">
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

                    <div class="container-fluid ">

                        <h3 class="fw-bolder heading-color text-center  ms-4">

                            We are providing best <br /> training service

                        </h3>

                        <p class="text-secondary text-center mt-2 mb-4">

                            <small clas="fw-3">

                                We provide the best training cause we know your every effort

                                counts.{" "}

                            </small>

                        </p>

                        <div class="d-flex justify-content-center align-items-center video-banner p-5">

                            <div class="embed-responsive embed-responsive-16by9 ">

                                <iframe

                                    id="video-size"

                                    src="https://www.youtube.com/embed/s27mY8pxBd8"

                                    title="YouTube video player"

                                    frameborder="0"

                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"

                                    allowfullscreen

                                ></iframe>

                            </div>

                        </div>

                    </div>


                    <div id="career">
                        <div class="form-banner pt-5">
                            <div class="heading">
                                <h3 class="fw-bolder heading heading-color fs-2 ms-4">
                                    Need Career Counselling?
                                </h3>
                            </div>
                            <div class="container row mt-5">
                                <div class="col-md-6 col-12">
                                    <form class="shadow-lg p-4" action="{{ route('career.appointment') }}"
                                          method="POST">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                        <div class="row g-4">
                                            <div class="col-md-6 col-12 mb-2">
                                                <input type="text" name="name" placeholder="User Name"
                                                       class="form-control " id="exampleInputEmail1"
                                                       aria-describedby="emailHelp"/>
                                            </div>
                                            <div class="col-md-6 col-12 mb-2">
                                                <input placeholder="example@gmail.com" name="email" type="email"
                                                       class="form-control" id="exampleInputEmail1"
                                                       aria-describedby="emailHelp"/>
                                            </div>
                                            <div class="col-md-6 col-12 mb-2">
                                                <select name="subject" id="" class="form-control">
                                                    <option value="">Select</option>
                                                    <option value="Career in Web Develpment - Laravel">
                                                        Career in Web Development - Laravel
                                                    </option>
                                                    <option value="Career in Web Develpment - Django">
                                                        Career in Web Development - Django
                                                    </option>
                                                    <option value="Career in Machine Learning">
                                                        Career in Machine Learning
                                                    </option>
                                                    <option value="Career in Artificial Intelligence">
                                                        Career in Artificial Intelligence
                                                    </option>
                                                    <option value="Data Science and it's Career">
                                                        Data Science and it's Career
                                                    </option>
                                                    <option value="Career in UI/UX">
                                                        Career in UI/UX
                                                    </option>
                                                    <option value="Career in Graphics Design">
                                                        Career in Graphics Design
                                                    </option>
                                                    <option value="Python Development">
                                                        Python Development
                                                    </option>
                                                    <option value="Career in Graphics Design">
                                                        Career in Graphics Design
                                                    </option>
                                                    <option value="Spoken English">
                                                        Spoken English
                                                    </option>
                                                    <option value="IELTS Preparation">
                                                        IELTS Preparation
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-12 mb-2">
                                                <input type="date" name="date" placeholder="Time" class="form-control selectDate"
                                                       id="appDate" aria-describedby="emailHelp"/>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-warning text-white rounded-pill mt-3">Book
                                            Appointment
                                        </button>
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
                                    <img src="assets/asset/image/ceo.png" alt=""/>
                                </div>
                                <div class="team-content">
                                    <h3 class="">Nafiul Akbar</h3>
                                    <p class="text-info text">CEO</p>
                                    <div>
                                        <i class="fab fa-facebook text-primary"></i>
                                        <i class="fab fa-instagram-square text-primary mx-2"></i>
                                        <i class="fab fa-twitter-square text-primary me-2"></i>
                                        <i class="fab fa-youtube text-danger"></i>
                                    </div>
                                </div>
                            </div>


                            < div class="our-team">
                                <div class="team-pic">
                                    <img src="assets/asset/image/co-founder.png" alt=""/>
                                </div>
                                <div class="team-content">
                                    <h3 class="mt-4">Tasvir Faheem</h3>
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
                                    <img src="assets/asset/image/co ordinator.png" alt=""/>
                                </div>
                                <div class="team-content">
                                    <h3 class="">Faheem Ahmed</h3>
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
                            <div class="d-flex justify-content-between flex-wrap border-bottom">
                                <p class="text text-white">IIHT Bangladesh</p>
                                <p class="text text-white">
                                    Follow us <a class="text-white" href="https://www.facebook.com/IIHTDhaka/"><i class="fab fa-facebook ms-2"></i></a>

                                    <i class="fab fa-instagram-square  mx-2"></i>
                                    <i class="fab fa-twitter-square me-2"></i>
                                    <i class="fab fa-youtube "></i>
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
                                            Dhaka Division, Bangladesh
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
                            <a href="https://sisinflexionpointbd.com/">
                                <p class="text-white py-3">
                                    <small>
                                        <i class="far fa-copyright"></i> All Right Reserved By SiS
                                        Inflexionpoint BD Ltd.{" "}
                                    </small>
                                </p>
                            </a>

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

        ReactDOM.render(<Home/>, document.getElementById("mydiv"));

        //boot strap
    </script>
    <script>
        $(document).on("change", "#courseId", function () {
            var courseId = $("#courseId").val();
            var options = {
                closeButton: true,
                debug: false,
                positionClass: "toast-bottom-right",
                onclick: null
            };

            $.ajax({
                url: "{{ URL::to('getSlot')}}",
                type: "POST",
                dataType: "json",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    course_id: courseId,
                },
                success: function (res) {
                    $('#showCourseSlot').html(res.html);
                    $('.js-source-states').select2();
                    App.unblockUI();
                },
                error: function (jqXhr, ajaxOptions, thrownError) {
                    toastr.error('@lang("label.SOMETHING_WENT_WRONG")', 'Error', options);
                    App.unblockUI();
                }
            });//ajax
        });
        $(document).on('change', '.selectDate', function () {
            var todaysDate = new Date();
            var inputDate = new Date($('#appDate').val());
            if (todaysDate > inputDate) {
                swal("Date must be greater than today's Date");
                return false;
            }
        });

        $("document").ready(function(){
            setTimeout(function(){
                $("div.alert").remove();
            }, 5000 ); // 5 secs
        });
    </script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"
    ></script>

    </body>
@endsection

