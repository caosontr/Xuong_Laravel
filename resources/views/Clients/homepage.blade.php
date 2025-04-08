@extends('Clients.master') 
@section('main-content')

<!-- Home -->
<section id="billboard" class="bg-light py-5">
  <div class="container">
    <div class="row">
      <div
        class="swiper main-swiper py-4"
        data-aos="fade-up"
        data-aos-delay="600"
      >
        <div class="swiper-wrapper d-flex border-animation-left">
          <div class="swiper-slide">
            <div class="banner-item image-zoom-effect">
              <div class="image-holder">
                <a href="#">
                  <img
                    src="images/phimco2.jpg"
                    style="max-height: 500px; width: 100%"
                    alt="product"
                    class="img-fluid"
                  />
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="banner-item image-zoom-effect">
              <div class="image-holder">
                <a href="#">
                  <img
                    src="images/phimco3.jpg"
                    style="max-height: 500px; width: 100%"
                    alt="product"
                    class="img-fluid"
                  />
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="banner-item image-zoom-effect">
              <div class="image-holder">
                <a href="#">
                  <img
                    src="images/phimco4.jpg"
                    style="max-height: 500px; width: 100%"
                    alt="product"
                    class="img-fluid"
                  />
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="banner-item image-zoom-effect">
              <div class="image-holder">
                <a href="#">
                  <img
                    src="images/phimco3.jpg"
                    style="max-height: 500px; width: 100%"
                    alt="product"
                    class="img-fluid"
                  />
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="banner-item image-zoom-effect">
              <div class="image-holder">
                <a href="#">
                  <img
                    src="images/phimco3.jpg"
                    style="max-height: 500px; width: 100%"
                    alt="product"
                    class="img-fluid"
                  />
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="banner-item image-zoom-effect">
              <div class="image-holder">
                <a href="#">
                  <img
                    src="images/phimco7.jpg"
                    style="max-height: 500px; width: 100%"
                    alt="product"
                    class="img-fluid"
                  />
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
      <div>
        <div class="icon-arrow icon-arrow-left">
          <i class="fas fa-arrow-left" style="font-size: 50px"></i>
        </div>
        <div class="icon-arrow icon-arrow-right">
          <i class="fas fa-arrow-right" style="font-size: 50px"></i>
        </div>
      </div>
    </div>
  </div>
</section>

<section
  id="best-sellers"
  class="best-sellers product-carousel py-5 position-relative overflow-hidden"
>
  <div class="container">
    <div class="d-flex justify-content-between align-items-center mt-5 mb-3">
      <h4 class="text-uppercase">Sản phẩm mới nhất</h4>
      <a href="/products" class="btn-link">Xem Tất Cả Sản Phẩm</a>
    </div>
    <div class="swiper product-swiper open-up" data-aos="zoom-out">
      <div class="swiper-wrapper d-flex">
        @foreach ($allProduct as $pro) {{-- Sản Phẩm --}}
        <div class="swiper-slide">
          <div class="product-item image-zoom-effect link-effect">
            <div class="image-holder">
              <a href="index.html">
                <img
                  src="images/{{$pro->image}}"
                  style="max-height: 400px; width: 100%"
                  alt="categories"
                  class="product-image img-fluid"
                />
              </a>

              <div class="product-content">
                <h5 class="text-uppercase fs-5 mt-3 text-truncate">
                  <a href="index.html">{{$pro->name}}</a>
                </h5>
                <a
                  href="index.html"
                  class="text-decoration-none text-info"
                  data-after="Add to cart"
                  ><span class="text-danger"
                    >{{ number_format($pro->price)}} VNĐ</span
                  ></a
                >
              </div>
            </div>
          </div>
        </div>
        {{-- End Sản Phẩm --}} @endforeach
      </div>
      <div class="swiper-pagination"></div>
    </div>
    <div>
      <div class="icon-arrow icon-arrow-left">
        <i class="fas fa-arrow-left" style="font-size: 50px"></i>
      </div>
      <div class="icon-arrow icon-arrow-right">
        <i class="fas fa-arrow-right" style="font-size: 50px"></i>
      </div>
    </div>
  </div>
</section>

<section class="collection bg-light position-relative py-5">
  <div class="container">
    <div class="row">
      <div class="title-xlarge text-uppercase txt-fx domino">Collection</div>
      <div class="collection-item d-flex flex-wrap my-5">
        <div class="col-md-6 column-container">
          <div class="image-holder">
            <img
              src="images/phimco7.jpg"
              alt="collection"
              class="product-image img-fluid"
            />
          </div>
        </div>
        <div class="col-md-6 column-container bg-white">
          <div class="collection-content p-5 m-0 m-md-5">
            <h3 class="element-title text-uppercase">
              Classic winter collection
            </h3>
            <p>
              Dignissim lacus, turpis ut suspendisse vel tellus. Turpis purus,
              gravida orci, fringilla a. Ac sed eu fringilla odio mi. Consequat
              pharetra at magna imperdiet cursus ac faucibus sit libero.
              Ultricies quam nunc, lorem sit lorem urna, pretium aliquam ut. In
              vel, quis donec dolor id in. Pulvinar commodo mollis diam sed
              facilisis at cursus imperdiet cursus ac faucibus sit faucibus sit
              libero.
            </p>
            <a href="#" class="btn btn-dark text-uppercase mt-3"
              >Shop Collection</a
            >
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="video py-5 overflow-hidden">
  <div class="container-fluid">
    <div class="row">
      <div class="video-content open-up" data-aos="zoom-out">
        <div class="video-bg">
          <img
            src="images/video-image.jpg"
            alt="video"
            class="video-image img-fluid"
          />
        </div>
        <div class="video-player">
          <a class="youtube" href="https://www.youtube.com/embed/pjtsGzQjFM4">
            <svg width="24" height="24" viewBox="0 0 24 24">
              <use xlink:href="#play"></use>
            </svg>
            <img
              src="images/text-pattern.png"
              alt="pattern"
              class="text-rotate"
            />
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="testimonials py-5 bg-light">
  <div class="section-header text-center mt-5">
    <h3 class="section-title">WE LOVE GOOD COMPLIMENT</h3>
  </div>
  <div class="swiper testimonial-swiper overflow-hidden my-5">
    <div class="swiper-wrapper d-flex">
      <div class="swiper-slide">
        <div class="testimonial-item text-center">
          <blockquote>
            <p>
              “More than expected crazy soft, flexible and best fitted white
              simple denim shirt.”
            </p>
            <div class="review-title text-uppercase">casual way</div>
          </blockquote>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="testimonial-item text-center">
          <blockquote>
            <p>
              “Best fitted white denim shirt more than expected crazy soft,
              flexible
            </p>
            <div class="review-title text-uppercase">uptop</div>
          </blockquote>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="testimonial-item text-center">
          <blockquote>
            <p>
              “Best fitted white denim shirt more white denim than expected
              flexible crazy soft.”
            </p>
            <div class="review-title text-uppercase">Denim craze</div>
          </blockquote>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="testimonial-item text-center">
          <blockquote>
            <p>
              “Best fitted white denim shirt more than expected crazy soft,
              flexible
            </p>
            <div class="review-title text-uppercase">uptop</div>
          </blockquote>
        </div>
      </div>
    </div>
  </div>
  <div
    class="testimonial-swiper-pagination d-flex justify-content-center mb-5"
  ></div>
</section>

<section class="blog py-5">
  <div class="container">
    <div
      class="d-flex flex-wrap justify-content-between align-items-center mt-5 mb-3"
    >
      <h4 class="text-uppercase">Read Blog Posts</h4>
      <a href="index.html" class="btn-link">View All</a>
    </div>
    <div class="row">
      <div class="col-md-4">
        <article class="post-item">
          <div class="post-image">
            <a href="index.html">
              <img
                src="images/post-image1.jpg"
                alt="image"
                class="post-grid-image img-fluid"
              />
            </a>
          </div>
          <div class="post-content d-flex flex-wrap gap-2 my-3">
            <div class="post-meta text-uppercase fs-6 text-secondary">
              <span class="post-category">Fashion /</span>
              <span class="meta-day"> jul 11, 2022</span>
            </div>
            <h5 class="post-title text-uppercase">
              <a href="index.html">How to look outstanding in pastel</a>
            </h5>
            <p>
              Dignissim lacus,turpis ut suspendisse vel tellus.Turpis
              purus,gravida orci,fringilla...
            </p>
          </div>
        </article>
      </div>
      <div class="col-md-4">
        <article class="post-item">
          <div class="post-image">
            <a href="index.html">
              <img
                src="images/post-image2.jpg"
                alt="image"
                class="post-grid-image img-fluid"
              />
            </a>
          </div>
          <div class="post-content d-flex flex-wrap gap-2 my-3">
            <div class="post-meta text-uppercase fs-6 text-secondary">
              <span class="post-category">Fashion /</span>
              <span class="meta-day"> jul 11, 2022</span>
            </div>
            <h5 class="post-title text-uppercase">
              <a href="index.html">Top 10 fashion trend for summer</a>
            </h5>
            <p>
              Turpis purus, gravida orci, fringilla dignissim lacus, turpis ut
              suspendisse vel tellus...
            </p>
          </div>
        </article>
      </div>
      <div class="col-md-4">
        <article class="post-item">
          <div class="post-image">
            <a href="index.html">
              <img
                src="images/post-image3.jpg"
                alt="image"
                class="post-grid-image img-fluid"
              />
            </a>
          </div>
          <div class="post-content d-flex flex-wrap gap-2 my-3">
            <div class="post-meta text-uppercase fs-6 text-secondary">
              <span class="post-category">Fashion /</span>
              <span class="meta-day"> jul 11, 2022</span>
            </div>
            <h5 class="post-title text-uppercase">
              <a href="index.html">Crazy fashion with unique moment</a>
            </h5>
            <p>
              Turpis purus, gravida orci, fringilla dignissim lacus, turpis ut
              suspendisse vel tellus...
            </p>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>

<section class="logo-bar py-5 my-5">
  <div class="container">
    <div class="row">
      <div class="logo-content d-flex flex-wrap justify-content-between">
        <img src="images/logo1.png" alt="logo" class="logo-image img-fluid" />
        <img src="images/logo2.png" alt="logo" class="logo-image img-fluid" />
        <img src="images/logo3.png" alt="logo" class="logo-image img-fluid" />
        <img src="images/logo4.png" alt="logo" class="logo-image img-fluid" />
        <img src="images/logo5.png" alt="logo" class="logo-image img-fluid" />
      </div>
    </div>
  </div>
</section>

<section
  class="newsletter bg-light"
  style="background: url(images/pattern-bg.png) no-repeat"
>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 py-5 my-5">
        <div class="subscribe-header text-center pb-3">
          <h3 class="section-title text-uppercase">
            Sign Up for our newsletter
          </h3>
        </div>
        <form id="form" class="d-flex flex-wrap gap-2">
          <input
            type="text"
            name="email"
            placeholder="Your Email Addresss"
            class="form-control form-control-lg"
          />
          <button class="btn btn-dark btn-lg text-uppercase w-100">
            Sign Up
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<section class="instagram position-relative">
  <div
    class="d-flex justify-content-center w-100 position-absolute bottom-0 z-1"
  >
    <a href="https://www.instagram.com/kaoxown/" class="btn btn-dark px-5"
      >Follow us on Instagram</a
    >
  </div>
  <div class="row g-0">
    <div class="col-6 col-sm-4 col-md-2">
      <div class="insta-item">
        <a href="https://www.instagram.com/templatesjungle/" target="_blank">
          <img
            src="images/insta-item1.jpg"
            alt="instagram"
            class="insta-image img-fluid"
          />
        </a>
      </div>
    </div>
    <div class="col-6 col-sm-4 col-md-2">
      <div class="insta-item">
        <a href="https://www.instagram.com/templatesjungle/" target="_blank">
          <img
            src="images/insta-item2.jpg"
            alt="instagram"
            class="insta-image img-fluid"
          />
        </a>
      </div>
    </div>
    <div class="col-6 col-sm-4 col-md-2">
      <div class="insta-item">
        <a href="https://www.instagram.com/templatesjungle/" target="_blank">
          <img
            src="images/insta-item3.jpg"
            alt="instagram"
            class="insta-image img-fluid"
          />
        </a>
      </div>
    </div>
    <div class="col-6 col-sm-4 col-md-2">
      <div class="insta-item">
        <a href="https://www.instagram.com/templatesjungle/" target="_blank">
          <img
            src="images/insta-item4.jpg"
            alt="instagram"
            class="insta-image img-fluid"
          />
        </a>
      </div>
    </div>
    <div class="col-6 col-sm-4 col-md-2">
      <div class="insta-item">
        <a href="https://www.instagram.com/templatesjungle/" target="_blank">
          <img
            src="images/insta-item5.jpg"
            alt="instagram"
            class="insta-image img-fluid"
          />
        </a>
      </div>
    </div>
    <div class="col-6 col-sm-4 col-md-2">
      <div class="insta-item">
        <a href="https://www.instagram.com/templatesjungle/" target="_blank">
          <img
            src="images/insta-item6.jpg"
            alt="instagram"
            class="insta-image img-fluid"
          />
        </a>
      </div>
    </div>
  </div>
</section>
@endsection
<!-- End Home -->
