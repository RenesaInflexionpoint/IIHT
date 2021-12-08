<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <script
      crossorigin
      src="https://unpkg.com/react@17/umd/react.production.min.js"
    ></script>
    <script
      crossorigin
      src="https://unpkg.com/react-dom@17/umd/react-dom.production.min.js"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-standalone/6.25.0/babel.min.js"></script>

    <!-- date time  -->
    <script type="text/javascript" src="/scripts/jquery.min.js"></script>
    <script type="text/javascript" src="/scripts/moment.min.js"></script>
    <script type="text/javascript" src="/scripts/bootstrap.min.js"></script>
    <script
      type="text/javascript"
      src="/scripts/bootstrap-datetimepicker.*js"
    ></script>

    <!-- font awesome -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
      integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
      crossorigin="anonymous"
    />
    <!-- boot strap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;700&display=swap"
      rel="stylesheet"
    />

    <title>Document</title>
  </head>
  <body>
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
                                <div class="modal-body ">
                                  <div class="d-flex justify-content-center align-items-center">
                                    <div class="shadow-lg p-4">
                                      <div class="mb-3 row">
                                        <label
                                          for="inputtext"
                                          class="col-sm-2 col-form-label text"
                                        >
                                          Name
                                        </label>
                                        <div class="col-sm-10">
                                          <input
                                            type="text"
                                            class="form-control"
                                            id="inputName"
                                          />
                                        </div>
                                      </div>
                                      <div class="mb-3 row">
                                        <label
                                          for="inputtext"
                                          class="col-sm-2 col-form-label text"
                                        >
                                          Email
                                        </label>
                                        <div class="col-sm-10">
                                          <input
                                            type="email"
                                            class="form-control"
                                            id="inputName"
                                          />
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-6 col-12">
                                          <div class="custom-select ">
                                            <label
                                              for="inputtext"
                                              class="col-sm-2 col-form-label text"
                                            >
                                              Courses
                                            </label>
                                            <span class="ps-5">
                                              <select
                                                name=""
                                                id=""
                                                class="form-control"
                                              >
                                                <option value="">Select</option>
                                                <option value="english">
                                                  English
                                                </option>
                                                <option value="math">
                                                  Math
                                                </option>
                                                <option value="bangla">
                                                  Bangla
                                                </option>
                                                <option value="science">
                                                  Science
                                                </option>
                                              </select>
                                            </span>
                                          </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                          <div class="custom-select ">
                                            <label
                                              for="inputtext"
                                              class="col-sm-2 col-form-label text"
                                            >
                                              Slots
                                            </label>
                                            <span class="ps-5">
                                              <select
                                                name=""
                                                id=""
                                                class="form-control text"
                                              >
                                                <option value="">Select</option>
                                                <option value="english"></option>
                                                <option value="math">
                                                  Math
                                                </option>
                                                <option value="bangla">
                                                  Bangla
                                                </option>
                                                <option value="science">
                                                  Science
                                                </option>
                                              </select>
                                            </span>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="d-flex justify-content-center">
                                        <a
                                          href=""
                                          class="text-decoration-none mt-3"
                                        >
                                          {" "}
                                          <button
                                            id="alert"
                                            type="button"
                                            class="btn btn-warning rounded-pill px-5 text"
                                          >
                                            Confirm your seat
                                          </button>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
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
                              href="#"
                            >
                              About Us
                            </a>
                          </li>

                          <li class="nav-item">
                            <a
                              class="nav-link active"
                              aria-current="page"
                              href="#"
                            >
                              Courses
                            </a>
                          </li>
                          <li class="nav-item">
                            <a
                              class="nav-link active"
                              aria-current="page"
                              href="#"
                            >
                              Contact Us
                            </a>
                          </li>
                          <li class="nav-item">
                            <a
                              class="nav-link active"
                              aria-current="page"
                              href="#"
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
                <div class="content text-white d-flex justify-content-start align-items-center mt-5">
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
                    A great integrated online e-learning platform that provides
                    learners and trainers the best EdTech environment.A great
                    integrated online e-learning platform that provides learners
                    and trainers the best EdTech environment.IIHT (Indian
                    Institute of hardware & technology) Asia's No1 IMS Training
                    Institute.. Now arriving at Bangladesh..
                  </p>
                </div>
              </div>
            </div>

            <div class="container my-5 ">
              <h3 class="text-center fw-bolder heading-color">Our Courses</h3>
              <p class="text-center text-info pb-4">
                <small>
                  We provide the best quality and ensures your extra care if
                  needed.
                </small>
              </p>
              <div
                id="carouselExampleControls"
                class="carousel slide"
                data-bs-ride="carousel"
              >
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row mb-5">
                      <div class="col-md-3 col-6 ">
                        <div class="d-flex justify-content-center align-items-center dev-bg p-3  rounded-top">
                          <div class="border border-secondary rounded-circle p-2 me-2 bg-white">
                            <i class="fas fa-users text-warning"></i>
                          </div>
                          <p class="text-white">web development</p>
                        </div>
                        <div class="p-3 shadow-lg rounded-bottom">
                          <p>Price : 16,000 BDT</p>
                          <p>Class : 14 </p>
                          <p>Duration : 2 hours </p>
                          <a href="" class="text-decoration-none text-warning">
                            Learn More
                          </a>
                        </div>
                      </div>
                      <div class="col-md-3 col-6 ">
                        <div class="d-flex justify-content-center align-items-center graphics-bg p-3  rounded-top">
                          <div class="border border-secondary rounded-circle p-2 me-2 bg-white">
                            <i class="fas fa-users text-warning"></i>
                          </div>
                          <p class="text-white">Graphics Design</p>
                        </div>
                        <div class="p-3 shadow-lg rounded-bottom">
                          <p>Price : 16,000 BDT</p>
                          <p>Class : 14 </p>
                          <p>Duration : 2 hours </p>
                          <a href="" class="text-decoration-none text-warning">
                            Learn More
                          </a>
                        </div>
                      </div>
                      <div class="col-md-3 col-6 ">
                        <div class="d-flex justify-content-center align-items-center marketing-bg p-3  rounded-top">
                          <div class="border border-secondary rounded-circle p-2 me-2 bg-white">
                            <i class="fas fa-users text-warning"></i>
                          </div>
                          <p class="text-white">Digital Marketing</p>
                        </div>
                        <div class="p-3 shadow-lg rounded-bottom">
                          <p>Price : 16,000 BDT</p>
                          <p>Class : 14 </p>
                          <p>Duration : 2 hours </p>
                          <a href="" class="text-decoration-none text-warning">
                            Learn More
                          </a>
                        </div>
                      </div>
                      <div class="col-md-3 col-6 ">
                        <div class="d-flex justify-content-center align-items-center bg-success p-3  rounded-top">
                          <div class="border border-secondary rounded-circle p-2 me-2 bg-white">
                            <i class="fas fa-users text-warning"></i>
                          </div>
                          <p class="text-white">Machine Learning</p>
                        </div>
                        <div class="p-3 shadow-lg rounded-bottom">
                          <p>Price : 16,000 BDT</p>
                          <p>Class : 14 </p>
                          <p>Duration : 2 hours </p>
                          <a href="" class="text-decoration-none text-warning">
                            Learn More
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row mb-5">
                      <div class="col-md-3 col-6">
                        <div class="d-flex justify-content-center align-items-center dev-bg p-3  rounded-top">
                          <div class="border border-secondary rounded-circle p-2 me-2 bg-white">
                            <i class="fas fa-users text-warning"></i>
                          </div>
                          <p>web development</p>
                        </div>
                        <div class="p-3 shadow-lg rounded-bottom">
                          <p>Price : 16,000 BDT</p>
                          <p>Class : 14 </p>
                          <p>Duration : 2 hours </p>
                          <a href="" class="text-decoration-none text-warning">
                            Learn More
                          </a>
                        </div>
                      </div>
                      <div class="col-md-3 col-6 ">
                        <div class="d-flex justify-content-center align-items-center graphics-bg p-3  rounded-top">
                          <div class="border border-secondary rounded-circle p-2 me-2 bg-white">
                            <i class="fas fa-users text-warning"></i>
                          </div>
                          <p>web development</p>
                        </div>
                        <div class="p-3 shadow-lg rounded-bottom">
                          <p>Price : 16,000 BDT</p>
                          <p>Class : 14 </p>
                          <p>Duration : 2 hours </p>
                          <a href="" class="text-decoration-none text-warning">
                            Learn More
                          </a>
                        </div>
                      </div>
                      <div class="col-md-3 col-6 ">
                        <div class="d-flex justify-content-center align-items-center marketing-bg p-3  rounded-top">
                          <div class="border border-secondary rounded-circle p-2 me-2 bg-white">
                            <i class="fas fa-users text-warning"></i>
                          </div>
                          <p>web development</p>
                        </div>
                        <div class="p-3 shadow-lg rounded-bottom">
                          <p>Price : 16,000 BDT</p>
                          <p>Class : 14 </p>
                          <p>Duration : 2 hours </p>
                          <a href="" class="text-decoration-none text-warning">
                            Learn More
                          </a>
                        </div>
                      </div>
                      <div class="col-md-3 col-6 ">
                        <div class="d-flex justify-content-center align-items-center bg-success p-3  rounded-top">
                          <div class="border border-secondary rounded-circle p-2 me-2 bg-white">
                            <i class="fas fa-users text-warning"></i>
                          </div>
                          <p>web development</p>
                        </div>
                        <div class="p-3 shadow-lg rounded-bottom">
                          <p>Price : 16,000 BDT</p>
                          <p>Class : 14 </p>
                          <p>Duration : 2 hours </p>
                          <a href="" class="text-decoration-none text-warning">
                            Learn More
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row mb-5">
                      <div class="col-md-3 col-6 ">
                        <div class="d-flex justify-content-center align-items-center dev-bg p-3  rounded-top">
                          <div class="border border-secondary rounded-circle p-2 me-2 bg-white">
                            <i class="fas fa-users text-warning"></i>
                          </div>
                          <p>web development</p>
                        </div>
                        <div class="p-3 shadow-lg rounded-bottom">
                          <p>Price : 16,000 BDT</p>
                          <p>Class : 14 </p>
                          <p>Duration : 2 hours </p>
                          <a href="" class="text-decoration-none text-warning">
                            Learn More
                          </a>
                        </div>
                      </div>
                      <div class="col-md-3 col-6 ">
                        <div class="d-flex justify-content-center align-items-center graphics-bg p-3  rounded-top">
                          <div class="border border-secondary rounded-circle p-2 me-2 bg-white">
                            <i class="fas fa-users text-warning"></i>
                          </div>
                          <p>web development</p>
                        </div>
                        <div class="p-3 shadow-lg rounded-bottom">
                          <p>Price : 16,000 BDT</p>
                          <p>Class : 14 </p>
                          <p>Duration : 2 hours </p>
                          <a href="" class="text-decoration-none text-warning">
                            Learn More
                          </a>
                        </div>
                      </div>
                      <div class="col-md-3 col-6 ">
                        <div class="d-flex justify-content-center align-items-center marketing-bg p-3  rounded-top">
                          <div class="border border-secondary rounded-circle p-2 me-2 bg-white">
                            <i class="fas fa-users text-warning"></i>
                          </div>
                          <p>web development</p>
                        </div>
                        <div class="p-3 shadow-lg rounded-bottom">
                          <p>Price : 16,000 BDT</p>
                          <p>Class : 14 </p>
                          <p>Duration : 2 hours </p>
                          <a href="" class="text-decoration-none text-warning">
                            Learn More
                          </a>
                        </div>
                      </div>
                      <div class="col-md-3 col-6 ">
                        <div class="d-flex justify-content-center align-items-center bg-success p-3  rounded-top">
                          <div class="border border-secondary rounded-circle p-2 me-2 bg-white">
                            <i class="fas fa-users text-warning"></i>
                          </div>
                          <p>web development</p>
                        </div>
                        <div class="p-3 shadow-lg rounded-bottom">
                          <p>Price : 16,000 BDT</p>
                          <p>Class : 14 </p>
                          <p>Duration : 2 hours </p>
                          <a href="" class="text-decoration-none text-warning">
                            Learn More
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <button
                  class="carousel-control-prev"
                  type="button"
                  data-bs-target="#carouselExampleControls"
                  data-bs-slide="prev"
                >
                  <span
                    class="carousel-control-prev-icon"
                    aria-hidden="true"
                  ></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button
                  class="carousel-control-next"
                  type="button"
                  data-bs-target="#carouselExampleControls"
                  data-bs-slide="next"
                >
                  <span
                    class="carousel-control-next-icon"
                    aria-hidden="true"
                  ></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>

            <div>
              <div class="form-banner pt-5">
                <div class="heading">
                  <h3 class="fw-bolder heading-color  ms-4">
                    Need Career Counselling?
                  </h3>
                </div>
                <div class="container row mt-5">
                  <div class="col-md-6 col-12">
                    <form class="shadow-lg p-4">
                      <div class="row g-4">
                        <div class="col-md-6 col-12 mb-2">
                          <input
                            type="text"
                            placeholder="User Name"
                            class="form-control "
                            id="exampleInputEmail1"
                            aria-describedby="emailHelp"
                          />
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                          <input
                            placeholder="example@gmail.com"
                            type="email"
                            class="form-control"
                            id="exampleInputEmail1"
                            aria-describedby="emailHelp"
                          />
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                          <input
                            type="text"
                            placeholder="Please select"
                            class="form-control"
                            aria-label="Text input with dropdown button"
                          />{" "}
                          <ul class="dropdown-menu">
                            <li>
                              <a class="dropdown-item" href="#">
                                Action before
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="#">
                                Another action before
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="#">
                                Something else here
                              </a>
                            </li>
                            <li>
                              <hr class="dropdown-divider" />
                            </li>
                            <li>
                              <a class="dropdown-item" href="#">
                                Separated link
                              </a>
                            </li>
                          </ul>
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                          <input
                            type="email"
                            placeholder="Time"
                            class="form-control"
                            id="exampleInputEmail1"
                            aria-describedby="emailHelp"
                          />
                        </div>
                      </div>

                      <a href="">
                        <button
                          type="submit"
                          class="btn btn-warning text-white rounded-pill mt-3"
                        >
                          Book Appointment
                        </button>
                      </a>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <div class="team-bg py-3 shadow-lg">
              <h3 class="fw-bolder heading-color text-white text-center my-5 pt-3">
                Meet Our Team Members
              </h3>
              <div class="container-team">
                <div class="our-team">
                  <div class="team-pic">
                    <img src="image/ceo.png" alt="" />
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
                    <img src="image/co-founder.png" alt="" />
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
                    <img src="image/co ordinator.png" alt="" />
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
              <div class="container">
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
</html>

<!-- <div class="container">
  <div class="row">
     <div class='col-sm-6'>
        <div class="form-group">
           <div class='input-group date' id='datetimepicker1'>
              <input type='text' class="form-control" />
              <span class="input-group-addon">
              <span class="glyphicon glyphicon-calendar"></span>
              </span>
           </div>
        </div>
     </div>
     <script type="text/javascript">
        $(function () {
            $('#datetimepicker1').datetimepicker();
        });
     </script>
  </div>
</div> -->

<!-- 
<div class="form">
  <div class="input-field">
    <label for="">Name</label>
    <input type="text" class="input" />
  </div>
  <div class="input-field">
    <label for="">Email</label>
    <input type="email" class="input" />
  </div>
  <div class="input-field">
    <label for="">Course Name</label>
    <input type="text" class="input" />
  </div>
  <div class="input-field">
    <label for="">Time</label>
    <input type="text" class="input" />
  </div>
</div> -->
