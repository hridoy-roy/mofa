@extends('layouts.frontend.app')
@section('nev_sub')
<nav id="nav-sub" class="navbar navbar-default navbar-fixed-top sub-nav" role="navigation">
    <div class="container">
        <a href="#" class="sub-nav-back-mobile visible-xs visible-sm visible-md" data-toggle="collapse"
            data-target="#mopa-sub-menu">
            <span class="clearfix">
                <span class="pull-left">exhibitions</span>
                <span class="caret-rotate pull-right">
                    <img src="https://mopa.org/wp-content/themes/mopa/img/icons/caret.svg"></span>
            </span>
        </a>
        <a href="#" class="sub-nav-back-mobile-membership hidden">
            <span class="clearfix">
                <span class="pull-left">
                    <img style="transform: rotate(180deg)" alt="" class="lazyload"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">back
                </span>
            </span>
        </a>

        <div class="collapse navbar-collapse" id="mopa-sub-menu">
            <ul id="menu-exhibitions" class="nav navbar-nav">
                <li id="menu-item-1865"
                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1865"><a
                        href="#">Current</a></li>
                <li id="menu-item-1866"
                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1866"><a
                        href="#">Upcoming</a></li>
                <li id="menu-item-1869"
                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1869"><a
                        href="https://mopa.org/exhibitions/past">Past</a></li>
                <li id="menu-item-1867"
                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1867"><a
                        href="#">Online</a></li>
            </ul>
        </div>
    </div>
</nav>
@endsection
@section('main-section')
<div class="page-container drawer-page-content" id="PageContainer" style="margin-top: 176px;">
  <main class="main-content" id="MainContent" role="main">
      <div id="shopify-section-collection-template" class="shopify-section">
          <div data-section-id="collection-template" data-section-type="collection-template">
              <header class="collection-header">
                  <div class="page-width">
                      <div class="section-header text-center">
                          <h1>Books &amp; Catalogs</h1>
                      </div>
                  </div>
                  <div class="filters-toolbar-wrapper">
                      <div class="page-width">
                          <div class="filters-toolbar">
                              <div class="filters-toolbar__item filters-toolbar__item--count">
                                  <span class="filters-toolbar__product-count">16 products</span>
                              </div>
                              <div class="filters-toolbar__item text-right">Sort by:
                                  <label for="SortBy" class="label--hidden">Alphabetically, A-Z</label>
                                  <select name="SortBy" id="SortBy"
                                      class="filters-toolbar__input filters-toolbar__input--sort"
                                      style="width: 190px;">
                                      <option value="title-ascending" selected="selected">Alphabetically, A-Z</option>
                                      <option value="manual">Featured</option>
                                      <option value="best-selling">Best Selling</option>
                                      <option value="title-descending">Alphabetically, Z-A</option>
                                      <option value="price-ascending">Price, low to high</option>
                                      <option value="price-descending">Price, high to low</option>
                                      <option value="created-descending">Date, new to old</option>
                                      <option value="created-ascending">Date, old to new</option>
                                  </select>
                                  <input class="collection-header__default-sort" type="hidden"
                                      value="title-ascending">
                              </div>
                          </div>
                      </div>
                  </div>
              </header>
              <div class="page-width" id="Collection">
                  <div class="grid grid--uniform grid--view-items">
                      <div class="grid__item small--one-half medium-up--one-quarter">
                          <div class="grid-view-item">
                              <a class="grid-view-item__link" href="#">
                                  <img class="grid-view-item__image"
                                      src="//cdn.shopify.com/s/files/1/1723/6189/products/100_movies_all_time_fav_bu_gb_3d_45445_1711061228_id_947900_250x200.png?v=1605816285"
                                      alt="">
                                  <div class="h4 grid-view-item__title">
                                      100 All-Time Favorite Movies of the 20th Century
                                  </div>
                                  <div class="grid-view-item__meta">
                                      <span class="product-price__price">$20.00</span>
                                  </div>
                              </a>
                          </div>
                      </div>
                      <div class="grid__item small--one-half medium-up--one-quarter">
                          <div class="grid-view-item">
                              <a class="grid-view-item__link" href="#">
                                  <img class="grid-view-item__image"
                                      src="//cdn.shopify.com/s/files/1/1723/6189/products/AnitGlossy_250x200.jpg?v=1594407695"
                                      alt="">
                                  <div class="h4 grid-view-item__title">Anti Glossy: Fashion Photography Now</div>
                                  <div class="grid-view-item__meta">
                                      <span class="product-price__price">$50.00</span>
                                  </div>
                              </a>
                          </div>
                      </div>
                      <div class="grid__item small--one-half medium-up--one-quarter">
                          <div class="grid-view-item">
                              <a class="grid-view-item__link" href="#">
                                  <img class="grid-view-item__image"
                                      src="//cdn.shopify.com/s/files/1/1723/6189/products/9783869303147_p0_v2_s600x595_250x200.jpg?v=1594410242"
                                      alt="">
                                  <div class="h4 grid-view-item__title">
                                      Berenice Abbott: Paris Portraits 1925-1930
                                  </div>
                                  <div class="grid-view-item__meta">
                                      <span class="product-price__price">$70.00</span>
                                  </div>
                              </a>
                          </div>
                      </div>
                      <div class="grid__item small--one-half medium-up--one-quarter">
                          <div class="grid-view-item">
                              <a class="grid-view-item__link" href="#">
                                  <img class="grid-view-item__image"
                                      src="//cdn.shopify.com/s/files/1/1723/6189/products/boundless1_250x200.jpg?v=1504650277"
                                      alt="">
                                  <div class="h4 grid-view-item__title">Boundless: A California Invitational</div>

                                  <div class="grid-view-item__meta">
                                      <span class="product-price__price">$45.00</span>
                                  </div>
                              </a>
                          </div>
                      </div>
                      <div class="grid__item small--one-half medium-up--one-quarter">
                          <div class="grid-view-item">
                              <a class="grid-view-item__link" href="#">
                                  <img class="grid-view-item__image"
                                      src="//cdn.shopify.com/s/files/1/1723/6189/products/9780770433079_250x200.jpg?v=1605819627"
                                      alt="">
                                  <div class="h4 grid-view-item__title">
                                      Bryan Peterson's Understanding Composition
                                      Field Guide: How to See and Photograph Images with Impact
                                  </div>
                                  <div class="grid-view-item__meta">
                                      <span class="product-price__price">$22.99</span>
                                  </div>
                              </a>
                          </div>
                      </div>
                      <div class="grid__item small--one-half medium-up--one-quarter">
                          <div class="grid-view-item">
                              <a class="grid-view-item__link" href="#">
                                  <img class="grid-view-item__image"
                                      src="//cdn.shopify.com/s/files/1/1723/6189/products/61B9Y1WNZuL_250x200.jpg?v=1594409202"
                                      alt="">
                                  <div class="h4 grid-view-item__title">Darren Almond Fullmoon</div>

                                  <div class="grid-view-item__meta">
                                      <span class="product-price__price">$69.99</span>
                                  </div>
                              </a>
                          </div>
                      </div>
                      <div class="grid__item small--one-half medium-up--one-quarter">
                          <div class="grid-view-item">
                              <a class="grid-view-item__link" href="">
                                  <img class="grid-view-item__image"
                                      src="//cdn.shopify.com/s/files/1/1723/6189/products/film_noir_bu_gb_3d_49343_1708101257_id_1133544_250x200.png?v=1605816609"
                                      alt="">
                                  <div class="h4 grid-view-item__title">Film Noir</div>
                                  <div class="grid-view-item__meta">
                                      <span class="product-price__price">$20.00</span>
                                  </div>
                              </a>
                          </div>
                      </div>
                      <div class="grid__item small--one-half medium-up--one-quarter">
                          <div class="grid-view-item">
                              <a class="grid-view-item__link" href="#">
                                  <img class="grid-view-item__image"
                                      src="//cdn.shopify.com/s/files/1/1723/6189/products/go_photo_book_cover_render_2_250x200.jpg?v=1511396501"
                                      alt="">
                                  <div class="h4 grid-view-item__title">Go Photo! An Activity Book for Kids</div>
                                  <div class="grid-view-item__meta">
                                      <span class="product-price__price">$19.99</span>
                                  </div>
                              </a>
                          </div>
                      </div>
                      <div class="grid__item small--one-half medium-up--one-quarter">
                          <div class="grid-view-item">
                              <a class="grid-view-item__link" href="#">
                                  <img class="grid-view-item__image"
                                      src="//cdn.shopify.com/s/files/1/1723/6189/products/OTS_catalogue_1copy_250x200.jpg?v=1599071001"
                                      alt="">
                                  <div class="h4 grid-view-item__title">
                                      Out of the Shadows: Contemporary Chinese Photography
                                  </div>
                                  <div class="grid-view-item__meta">
                                      <span class="product-price__price">$45.00</span>
                                  </div>
                              </a>
                          </div>
                      </div>
                      <div class="grid__item small--one-half medium-up--one-quarter">
                          <div class="grid-view-item">
                              <a class="grid-view-item__link" href="#">
                                  <img class="grid-view-item__image"
                                      src="//cdn.shopify.com/s/files/1/1723/6189/products/IMG_20171116_114411_BURST001_COVER_250x200.jpg?v=1542742049"
                                      alt="">
                                  <div class="h4 grid-view-item__title">
                                      Point/Counterpoint: Contemporary Mexican Photography
                                  </div>
                                  <div class="grid-view-item__meta">
                                      <span class="product-price__price">$55.00</span>
                                  </div>
                              </a>
                          </div>
                      </div>
                      <div class="grid__item small--one-half medium-up--one-quarter">
                          <div class="grid-view-item product-price--sold-out grid-view-item--sold-out">
                              <a class="grid-view-item__link" href="#">
                                  <img class="grid-view-item__image"
                                      src="//cdn.shopify.com/s/files/1/1723/6189/products/Read_THis_People_IOI_250x200.jpg?v=1541789936"
                                      alt="">
                                  <div class="h4 grid-view-item__title">
                                      Read This If You Want to Take Great Photographs of People
                                  </div>
                                  <div class="grid-view-item__meta">
                                      <span class="product-price__price">$17.95</span>
                                      <span class="product-price__sold-out">Sold out</span>
                                  </div>
                              </a>
                          </div>
                      </div>
                      <div class="grid__item small--one-half medium-up--one-quarter">
                          <div class="grid-view-item product-price--sold-out grid-view-item--sold-out">
                              <a class="grid-view-item__link" href="#">
                                  <img class="grid-view-item__image"
                                      src="//cdn.shopify.com/s/files/1/1723/6189/products/Read_THis_Places_250x200.jpg?v=1541788806"
                                      alt="">
                                  <div class="h4 grid-view-item__title">
                                      Read This if You Want to Take Great Photographs of Places
                                  </div>
                                  <div class="grid-view-item__meta">
                                      <span class="product-price__price">$17.95</span>
                                      <span class="product-price__sold-out">Sold out</span>
                                  </div>
                              </a>
                          </div>
                      </div>
                      <div class="grid__item small--one-half medium-up--one-quarter">
                          <div class="grid-view-item">
                              <a class="grid-view-item__link" href="#">
                                  <img class="grid-view-item__image"
                                      src="//cdn.shopify.com/s/files/1/1723/6189/products/staking_claim_250x200.png?v=1501304133"
                                      alt="">
                                  <div class="h4 grid-view-item__title">Staking Claim: A California Invitational</div>

                                  <div class="grid-view-item__meta">
                                      <span class="product-price__price">$45.00</span>
                                  </div>
                              </a>
                          </div>
                      </div>
                      <div class="grid__item small--one-half medium-up--one-quarter">
                          <div class="grid-view-item">
                              <a class="grid-view-item__link" href="#">
                                  <img class="grid-view-item__image"
                                      src="//cdn.shopify.com/s/files/1/1723/6189/products/streetwise_250x200.jpg?v=1501304138"
                                      alt="">
                                  <div class="h4 grid-view-item__title">
                                      Streetwise: Masters of 60s Photography, Exhibition Catalogue
                                  </div>
                                  <div class="grid-view-item__meta">
                                      <span class="product-price__price">$44.00</span>
                                  </div>
                              </a>
                          </div>
                      </div>
                      <div class="grid__item small--one-half medium-up--one-quarter">
                          <div class="grid-view-item">
                              <a class="grid-view-item__link" href="#">
                                  <img class="grid-view-item__image"
                                      src="//cdn.shopify.com/s/files/1/1723/6189/products/412t30U5ykL_250x200.jpg?v=1605823734"
                                      alt="">
                                  <div class="h4 grid-view-item__title">
                                      The Filmmaker Says: Quotes, Quips, and Words of Wisdom
                                  </div>
                                  <div class="grid-view-item__meta">
                                      <span class="product-price__price">$14.95</span>
                                  </div>
                              </a>
                          </div>
                      </div>
                      <div class="grid__item small--one-half medium-up--one-quarter">
                          <div class="grid-view-item product-price--sold-out grid-view-item--sold-out">
                              <a class="grid-view-item__link" href="#">
                                  <img class="grid-view-item__image"
                                      src="//cdn.shopify.com/s/files/1/1723/6189/products/51MmUrAYRUL_250x200.jpg?v=1605823750"
                                      alt="">
                                  <div class="h4 grid-view-item__title">
                                      Use This if You Want to Take Great Photographs: A Photo Journal
                                  </div>
                                  <div class="grid-view-item__meta">
                                      <span class="product-price__price">$15.95</span>
                                      <span class="product-price__sold-out">Sold out</span>
                                  </div>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </main>
@endsection