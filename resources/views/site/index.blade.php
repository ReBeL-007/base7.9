<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ashmita Publication</title>
    <!-- bootstrap -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
      integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
      crossorigin="anonymous"
    />

    <!-- font-awesome -->

    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
      integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp"
      crossorigin="anonymous"
    />
    <!-- javascript -->

    <link rel="stylesheet" href="{{ asset('site/css/style.css')}}" />
  </head>
  <section class="header-section section">
    <!-- logo -->
    <a href="#" class="logo-link">
      <img src="./img/asmita.png" alt="" />
    </a>
    <form action="" class="header-section__form">
      <div class="form__group">
        <input type="text" placeholder="Search..." />
        <select id="Categories">
          <option value="hide">All Categories</option>
          <option value="all categories">All Categories</option>
          <option value="uncategorized">uncategorized</option>
          <option value="schoolLevel">School Level</option>
          <option value="one">One</option>
          <option value="two">two</option>
          <option value="three">three</option>
          <option value="four">four</option>
          <option value="five">five</option>
          <option value="six">six</option>
          <option value="seven">seven</option>
          <option value="eight">eight</option>
          <option value="nine">nine</option>
          <option value="ten">ten</option>
          <option value="ten">ten</option>
          <option value="MBBS">MBBS</option>
          <option value="BCA">BCA</option>
          <option value="BBS">BBS</option>
        </select>
        <button class="search-btn"><i class="fas fa-search"></i></button>
      </div>
    </form>
    <!-- search -->
  </section>
  <!-- mobile tablet search -->
  <a class="btn searchIcon">
    <i class="fas fa-search"></i>
    <form action="" class="header-section__form myForm">
      <div class="form__group">
        <input type="text" placeholder="Search..." />
        <select id="Categories">
          <option value="hide">All Categories</option>
          <option value="all categories">All Categories</option>
          <option value="uncategorized">uncategorized</option>
          <option value="schoolLevel">School Level</option>
          <option value="one">One</option>
          <option value="two">two</option>
          <option value="three">three</option>
          <option value="four">four</option>
          <option value="five">five</option>
          <option value="six">six</option>
          <option value="seven">seven</option>
          <option value="eight">eight</option>
          <option value="nine">nine</option>
          <option value="ten">ten</option>
          <option value="ten">ten</option>
          <option value="MBBS">MBBS</option>
          <option value="BCA">BCA</option>
          <option value="BBS">BBS</option>
        </select>
        <button class="search-btn"><i class="fas fa-search"></i></button>
      </div>
    </form>
  </a>
  <section class="sub-header__container">
    <!-- nav section -->
    <nav class="section-nav">
      <input type="checkbox" id="check" />
      <div class="hamburger-menu-container">
        <div class="hamburger-menu">
          <div></div>
        </div>
      </div>
      <div class="logo-container">
        <a href="#" class="logo-container__link">
          <img src="./img/asmita.png" alt="" />
        </a>
      </div>
      <!-- desktop nav and then transformed into mobile nav-->
      <div class="nav-btn">
        <!-- after sticky should be displayed -->
        <div class="logo-container">
          <a href="#" class="logo-container__link">
            <img src="./img/asmita.png" alt="" />
          </a>
        </div>
        <div class="nav-links">
          <ul>
            <li class="nav-link">
              <a href="#">School <i class="fas fa-caret-down"></i></a>
              <!-- <div class="dropdown">
                    <ul>
                      <li class="dropdown-link">
                        <a href="#"> Primary Level </a>
                      </li>
                      <li class="dropdown-link">
                        <a href="#"> One </a>
                      </li>
                      <li class="dropdown-link">
                        <a href="#"> Two </a>
                      </li>
                      <li class="dropdown-link">
                        <a href="#"> Three </a>
                      </li>
                    </ul>
                  </div> -->
            </li>
            <li class="nav-link">
              <a href="#">10 +2 Books <i class="fas fa-caret-down"></i></a>
              <!-- <div class="dropdown">
                    <ul>
                      <li class="dropdown-link">
                        <a href="#"> Eleven </a>
                      </li>
                      <li class="dropdown-link">
                        <a href="#"> Twelve </a>
                      </li>
                    </ul>
                  </div> -->
            </li>
            <li class="nav-link">
              <a href="#">University Books <i class="fas fa-caret-down"></i></a>
              <div class="dropdown">
                <ul>
                  <li class="dropdown-link">
                    <a href="#"> BBS <i class="fas fa-caret-right"></i></a>
                    <div class="dropdown nested">
                      <ul>
                        <li class="dropdown-link">
                          <a href="#">
                            Tribhuwan University
                            <i class="fas fa-caret-right"></i
                          ></a>
                          <div class="dropdown nested">
                            <ul>
                              <li class="dropdown-link">
                                <a href="#">
                                  First Year
                                  <i class="fas fa-caret-right"></i
                                ></a>
                              </li>
                              <li class="dropdown-link">
                                <a href="#">
                                  Second Year
                                  <i class="fas fa-caret-right"></i
                                ></a>
                              </li>
                              <li class="dropdown-link">
                                <a href="#">
                                  Third Year
                                  <i class="fas fa-caret-right"></i
                                ></a>
                              </li>
                              <li class="dropdown-link">
                                <a href="#">
                                  Fourth Year<i class="fas fa-caret-right"></i>
                                </a>
                              </li>
                              <div class="arrow"></div>
                            </ul>
                          </div>
                        </li>
                        <li class="dropdown-link">
                          <a href="#">
                            Mid-Western University
                            <i class="fas fa-caret-right"></i
                          ></a>
                        </li>
                        <li class="dropdown-link">
                          <a href="#">
                            Far-Western University
                            <i class="fas fa-caret-right"></i
                          ></a>
                        </li>
                        <div class="arrow"></div>
                      </ul>
                    </div>
                  </li>
                  <li class="dropdown-link">
                    <a href="#"> BBA <i class="fas fa-caret-right"></i></a>
                  </li>
                  <li class="dropdown-link">
                    <a href="#"> BIM <i class="fas fa-caret-right"></i></a>
                  </li>
                  <li class="dropdown-link">
                    <a href="#"> BHM<i class="fas fa-caret-right"></i> </a>
                  </li>
                  <div class="arrow"></div>
                </ul>
              </div>
            </li>
            <li class="nav-link">
              <a href="#">More Books <i class="fas fa-caret-down"></i></a>
            </li>
            <li class="nav-link">
              <a href="#">Teachers Guide <i class="fas fa-caret-down"></i></a>
            </li>
          </ul>
        </div>
        <div class="nav-sign">
          <a href="#" class="sign-in"
            ><i class="fas fa-user"></i> <span> Sign In</span></a
          >
          <a href="#" class="register">
            <i class="fas fa-user-plus"></i>
            <span>Register</span></a
          >
        </div>
        <!-- visible after sticky -->
        <a class="btn sticky-search">
          <i class="fas fa-search"></i>
          <form action="" class="header-section__form sticky-form">
            <div class="form__group">
              <input type="text" placeholder="Search..." />
              <select id="Categories">
                <option value="hide">All Categories</option>
                <option value="all categories">All Categories</option>
                <option value="uncategorized">uncategorized</option>
                <option value="schoolLevel">School Level</option>
                <option value="one">One</option>
                <option value="two">two</option>
                <option value="three">three</option>
                <option value="four">four</option>
                <option value="five">five</option>
                <option value="six">six</option>
                <option value="seven">seven</option>
                <option value="eight">eight</option>
                <option value="nine">nine</option>
                <option value="ten">ten</option>
                <option value="ten">ten</option>
                <option value="MBBS">MBBS</option>
                <option value="BCA">BCA</option>
                <option value="BBS">BBS</option>
              </select>
              <button class="search-btn"><i class="fas fa-search"></i></button>
            </div>
          </form>
        </a>
      </div>
    </nav>
    <div class="section-background--slider">
      <div
        id="carouselExampleControls"
        class="carousel slide fix-height"
        data-ride="carousel"
      >
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              class="d-block w-100"
              src="./img/slider-5.jpg"
              alt="First slide"
            />
          </div>
          <!-- <div class="carousel-item">
            <img
              class="d-block w-100"
              src="./img/slider-2.jpg"
              alt="Second slide"
            />
          </div> -->
          <div class="carousel-item">
            <img
              class="d-block w-100"
              src="./img/slider-3.jpg"
              alt="Third slide"
            />
          </div>
          <!-- <div class="carousel-item">
            <img
              class="d-block w-100"
              src="./img/slider-4.jpg"
              alt="Third slide"
            />
          </div> -->
        </div>
        <a
          class="carousel-control-prev"
          href="#carouselExampleControls"
          role="button"
          data-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a
          class="carousel-control-next"
          href="#carouselExampleControls"
          role="button"
          data-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>
  <main>
    <section class="section top-picks">
      <!-- <div class="overlay"></div> -->
      <div class="top-picks__container">
        <div class="top-picks__card">
          <div class="top-picks__image">
            <img src="./img/books.jpg" alt="" />
          </div>
          <div class="top-picks__body">
            <a class="top-picks__info"
              >10 +2 Books, Eleven, latest releases, love books</a
            >
            <a class="top-picks__title">Major Nepali, Grade - 11</a>
            <div class="top-picks__rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
          </div>
        </div>
        <div class="top-picks__card">
          <div class="top-picks__image">
            <img src="./img/books.jpg" alt="" />
          </div>
          <div class="top-picks__body">
            <a class="top-picks__info"
              >10 +2 Books, Eleven, latest releases, love books</a
            >
            <a class="top-picks__title">Major Nepali, Grade - 11</a>
            <div class="top-picks__rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
          </div>
        </div>
        <div class="top-picks__card">
          <div class="top-picks__image">
            <img src="./img/books.jpg" alt="" />
          </div>
          <div class="top-picks__body">
            <a class="top-picks__info"
              >10 +2 Books, Eleven, latest releases, love books</a
            >
            <a class="top-picks__title">Major Nepali, Grade - 11</a>
            <div class="top-picks__rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
          </div>
        </div>
        <div class="top-picks__card">
          <div class="top-picks__image">
            <img src="./img/books.jpg" alt="" />
          </div>
          <div class="top-picks__body">
            <a class="top-picks__info"
              >10 +2 Books, Eleven, latest releases, love books</a
            >
            <a class="top-picks__title">Major Nepali, Grade - 11</a>
            <div class="top-picks__rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
          </div>
        </div>
        <div class="top-picks__card">
          <div class="top-picks__image">
            <img src="./img/books.jpg" alt="" />
          </div>
          <div class="top-picks__body">
            <a class="top-picks__info"
              >10 +2 Books, Eleven, latest releases, love books</a
            >
            <a class="top-picks__title">Major Nepali, Grade - 11</a>
            <div class="top-picks__rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
          </div>
        </div>
        <div class="top-picks__card">
          <div class="top-picks__image">
            <img src="./img/books.jpg" alt="" />
          </div>
          <div class="top-picks__body">
            <a class="top-picks__info"
              >10 +2 Books, Eleven, latest releases, love books</a
            >
            <a class="top-picks__title">Major Nepali, Grade - 11</a>
            <div class="top-picks__rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- all books section -->
    <section class="allBooks-section">
      <div class="title-seperator utility-padding">
        <h3 class="section__heading">All Books</h3>
        <a href="#"
          >View All Products
          <span><i class="fas fa-arrow-right"></i></span>
        </a>
      </div>
      <div class="gallery__container utility-padding">
        <div class="gallery__heading">
          <h2 class="gallery__heading-text">
            Ashmita Books Publishers & Distributors P. Ltd.
          </h2>
          <div class="gallery__heading-image">
            <img src="./img/slider-1.jpg" alt="" />
          </div>
          <a href="" class="btn btn-link"
            >Explore Books
            <span><i class="fas fa-arrow-right"></i></span>
          </a>
        </div>
        <div class="gallery__cards">
          <div class="top-picks__card">
            <div class="top-picks__image">
              <img src="./img/books.jpg" alt="" />
            </div>
            <div class="top-picks__body">
              <a class="top-picks__info"
                >10 +2 Books, Eleven, latest releases, love books</a
              >
              <a class="top-picks__title">Major Nepali, Grade - 11</a>
              <div class="top-picks__rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
          </div>
          <div class="top-picks__card">
            <div class="top-picks__image">
              <img src="./img/books.jpg" alt="" />
            </div>
            <div class="top-picks__body">
              <a class="top-picks__info"
                >10 +2 Books, Eleven, latest releases, love books</a
              >
              <a class="top-picks__title">Major Nepali, Grade - 11</a>
              <div class="top-picks__rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
          </div>
          <div class="top-picks__card">
            <div class="top-picks__image">
              <img src="./img/books.jpg" alt="" />
            </div>
            <div class="top-picks__body">
              <a class="top-picks__info"
                >10 +2 Books, Eleven, latest releases, love books</a
              >
              <a class="top-picks__title">Major Nepali, Grade - 11</a>
              <div class="top-picks__rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
          </div>
          <div class="top-picks__card">
            <div class="top-picks__image">
              <img src="./img/books.jpg" alt="" />
            </div>
            <div class="top-picks__body">
              <a class="top-picks__info"
                >10 +2 Books, Eleven, latest releases, love books</a
              >
              <a class="top-picks__title">Major Nepali, Grade - 11</a>
              <div class="top-picks__rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
          </div>
          <div class="top-picks__card">
            <div class="top-picks__image">
              <img src="./img/books.jpg" alt="" />
            </div>
            <div class="top-picks__body">
              <a class="top-picks__info"
                >10 +2 Books, Eleven, latest releases, love books</a
              >
              <a class="top-picks__title">Major Nepali, Grade - 11</a>
              <div class="top-picks__rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
          </div>
          <div class="top-picks__card">
            <div class="top-picks__image">
              <img src="./img/books.jpg" alt="" />
            </div>
            <div class="top-picks__body">
              <a class="top-picks__info"
                >10 +2 Books, Eleven, latest releases, love books</a
              >
              <a class="top-picks__title">Major Nepali, Grade - 11</a>
              <div class="top-picks__rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
          </div>
          <div class="top-picks__card">
            <div class="top-picks__image">
              <img src="./img/books.jpg" alt="" />
            </div>
            <div class="top-picks__body">
              <a class="top-picks__info"
                >10 +2 Books, Eleven, latest releases, love books</a
              >
              <a class="top-picks__title">Major Nepali, Grade - 11</a>
              <div class="top-picks__rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
          </div>
          <div class="top-picks__card">
            <div class="top-picks__image">
              <img src="./img/books.jpg" alt="" />
            </div>
            <div class="top-picks__body">
              <a class="top-picks__info"
                >10 +2 Books, Eleven, latest releases, love books</a
              >
              <a class="top-picks__title">Major Nepali, Grade - 11</a>
              <div class="top-picks__rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- small advertisment -->
    <section class="advertisment-section">
      <div class="advertisment-section__header">
        <h1 class="advertisement__text">
          Asmita Books Publishers & Distributors P .Ltd
        </h1>
        <a href="" class="btn btn-link-1"
          >Explore Books
          <span><i class="fas fa-arrow-right"></i></span>
        </a>
        <div class="image__section">
          <img src="./img/slider-5.jpg" alt="" />
        </div>
      </div>
    </section>
    <!-- recent books -->
    <section class="recent-books">
      <div class="gallery__container utility-padding recent-books__container">
        <h3 class="section__heading">Recent Books</h3>
        <div class="gallery__cards">
          <div class="top-picks__card">
            <div class="top-picks__image">
              <img src="./img/books.jpg" alt="" />
            </div>
            <div class="top-picks__body">
              <a class="top-picks__info"
                >10 +2 Books, Eleven, latest releases, love books</a
              >
              <a class="top-picks__title">Major Nepali, Grade - 11</a>
              <div class="top-picks__rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
          </div>
          <div class="top-picks__card">
            <div class="top-picks__image">
              <img src="./img/books.jpg" alt="" />
            </div>
            <div class="top-picks__body">
              <a class="top-picks__info"
                >10 +2 Books, Eleven, latest releases, love books</a
              >
              <a class="top-picks__title">Major Nepali, Grade - 11</a>
              <div class="top-picks__rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
          </div>
          <div class="top-picks__card">
            <div class="top-picks__image">
              <img src="./img/books.jpg" alt="" />
            </div>
            <div class="top-picks__body">
              <a class="top-picks__info"
                >10 +2 Books, Eleven, latest releases, love books</a
              >
              <a class="top-picks__title">Major Nepali, Grade - 11</a>
              <div class="top-picks__rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
          </div>
          <div class="top-picks__card">
            <div class="top-picks__image">
              <img src="./img/books.jpg" alt="" />
            </div>
            <div class="top-picks__body">
              <a class="top-picks__info"
                >10 +2 Books, Eleven, latest releases, love books</a
              >
              <a class="top-picks__title">Major Nepali, Grade - 11</a>
              <div class="top-picks__rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
          </div>
          <div class="top-picks__card">
            <div class="top-picks__image">
              <img src="./img/books.jpg" alt="" />
            </div>
            <div class="top-picks__body">
              <a class="top-picks__info"
                >10 +2 Books, Eleven, latest releases, love books</a
              >
              <a class="top-picks__title">Major Nepali, Grade - 11</a>
              <div class="top-picks__rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
          </div>
          <div class="top-picks__card">
            <div class="top-picks__image">
              <img src="./img/books.jpg" alt="" />
            </div>
            <div class="top-picks__body">
              <a class="top-picks__info"
                >10 +2 Books, Eleven, latest releases, love books</a
              >
              <a class="top-picks__title">Major Nepali, Grade - 11</a>
              <div class="top-picks__rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
          </div>
          <div class="top-picks__card">
            <div class="top-picks__image">
              <img src="./img/books.jpg" alt="" />
            </div>
            <div class="top-picks__body">
              <a class="top-picks__info"
                >10 +2 Books, Eleven, latest releases, love books</a
              >
              <a class="top-picks__title">Major Nepali, Grade - 11</a>
              <div class="top-picks__rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
          </div>
          <div class="top-picks__card">
            <div class="top-picks__image">
              <img src="./img/books.jpg" alt="" />
            </div>
            <div class="top-picks__body">
              <a class="top-picks__info"
                >10 +2 Books, Eleven, latest releases, love books</a
              >
              <a class="top-picks__title">Major Nepali, Grade - 11</a>
              <div class="top-picks__rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer class="footer utility-padding">
    <div class="logo--holder">
      <a href="#" class="logo-link">
        <img src="./img/asmita.png" alt="" />
      </a>
      <p>&#169; 2020.All Rights Reserved</p>
    </div>
    <div class="links-section">
      <div class="social-link__container">
        <div class="social-links">
          <a href="">
            <i class="fab fa-facebook-f icon"></i>
          </a>
        </div>
        <div class="social-links">
          <a href="">
            <i class="fab fa-twitter icon"></i>
          </a>
        </div>
        <div class="social-links">
          <a href="">
            <i class="fab fa-linkedin-in icon"></i>
          </a>
        </div>
      </div>
      <!-- <button class="btn-top">
        <i class="fas fa-chevron-up"></i>
      </button> -->
    </div>
  </footer>
  <body>
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
      defer
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
      defer
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
      defer
    ></script>
    <script src="./js/searchSelect.js" defer></script>
    <script src="./js/navigationFixed.js" defer></script>
  </body>
</html>
