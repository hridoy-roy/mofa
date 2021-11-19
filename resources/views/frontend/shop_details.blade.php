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
        <div id="shopify-section-product-template" class="shopify-section">
            <div class="product-template__container page-width" id="ProductSection-product-template">
                <div class="grid product-single">
                    <div class="grid__item product-single__photos medium-up--two-thirds">
                        <div id="FeaturedImageZoom-product-template" class="product-single__photo"
                            data-zoom="//cdn.shopify.com/s/files/1/1723/6189/products/9783869303147_p0_v2_s600x595_1024x1024.jpg?v=1594410242">
                            <img src="//cdn.shopify.com/s/files/1/1723/6189/products/9783869303147_p0_v2_s600x595_720x.jpg?v=1594410242"
                                alt="" class="product-featured-img js-zoom-enabled">
                        </div>
                    </div>
                    <div class="grid__item medium-up--one-third">
                        <div class="product-single__meta">
                            <h1 itemprop="name" class="product-single__title">Berenice Abbott: Paris Portraits
                                1925-1930
                            </h1>
                            <div>
                                <link href="#">
                                <p class="product-single__price product-single__price-product-template">
                                    <span class="visually-hidden">Regular price</span>
                                    <s id="ComparePrice-product-template" class="hide"></s>
                                    <span class="product-price__price product-price__price-product-template">
                                        <span id="ProductPrice-product-template">$70.00</span>
                                        <span
                                            class="product-price__sale-label product-price__sale-label-product-template hide">Sale</span>
                                    </span>
                                </p>
                                <form action="" method="post" enctype="multipart/form-data"
                                    class="product-form product-form-product-template">
                                    <div class="selector-wrapper js product-form__item">
                                        <label for="SingleOptionSelector-0">
                                            Price
                                        </label>
                                        <select
                                            class="single-option-selector single-option-selector-product-template product-form__input"
                                            id="SingleOptionSelector-0" data-index="option1">
                                            <option value="Non-Member" selected="selected">Non-Member</option>
                                            <option value="Member">Member</option>
                                        </select>
                                    </div>
                                    <select name="id" id="ProductSelect-product-template"
                                        class="product-form__variants no-js">
                                        <option selected="selected" value="">Non-Member</option>
                                        <option disabled="disabled">Member - Sold out</option>
                                    </select>
                                    <div class="product-form__item product-form__item--quantity">
                                        <label for="Quantity">Quantity</label>
                                        <input type="number" id="Quantity" name="quantity" value="1" min="1"
                                            class="product-form__input" pattern="[0-9]*">
                                    </div>
                                    <div class="product-form__item product-form__item--submit">
                                        <button type="submit" name="add" id="AddToCart-product-template"
                                            class="btn product-form__cart-submit">
                                            <span id="AddToCartText-product-template">
                                                Add to cart
                                            </span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="product-single__description rte">
                                <p><b>The photographs that launched Abbott's career: portraits of artists and
                                        writers in
                                        prewar Paris, from Jean Cocteau to James Joyce</b>
                                </p>
                                <p>This is one in a series of books to be published by Steidl that will explore
                                    Berenice
                                    Abbott’s oeuvre. Abbott began her photographic career in Paris in 1925, taking
                                    portraits of some the most celebrated artists and writers of the day, including
                                    Marie Laurencin, Jean Cocteau, Peggy Guggenheim, Coco Chanel, Max Ernst, André
                                    Gide,
                                    Philippe Soupault and James Joyce. Within a year her work was exhibited and
                                    acclaimed.<span>&nbsp;</span><i>Paris Portraits
                                        1925–1930</i><span>&nbsp;</span>features the results of Abbott’s earliest
                                    photographic project and illustrates the philosophy of all her subsequent work.
                                    For
                                    this landmark book, 115 portraits of 83 subjects have been scanned from the
                                    original
                                    glass negatives, which have been printed in full.
                                </p>
                                <p><b>Berenice Abbott</b><span>&nbsp;</span>was born in Springfield, Ohio, in 1898.
                                    She
                                    left Ohio State University early for New York's Greenwich Village in 1918, where
                                    she
                                    spent several years before studying in Europe. Abbott was first introduced to
                                    photography while studying sculpture in Paris; she became Man Ray's darkroom
                                    assistant and soon began her own studio, practicing primarily portrait
                                    photography.
                                    In 1929 she returned to New York, photographing its neighborhoods, buildings and
                                    residents. After a lung operation in the 1950s­­, on doctor's orders to escape
                                    urban
                                    pollution, Abbott resettled in Maine, where she would remain until her death in
                                    1991.
                                </p>
                                <p>
                                    <strong>ISBN-13:</strong> 9783869303147<br>
                                    <strong>Publisher:</strong> Steidl/Commerce Graphics, New York<br>
                                    <strong>Publication date:</strong> 10/25/2016<br>
                                    <strong>Pages:</strong> 368<br>
                                    <strong>Product dimensions:</strong> 9.70(w) x 12.00(h) x 1.50(d)
                                </p>
                            </div>
                            <!-- /snippets/social-sharing.liquid -->
                            <div class="social-sharing">
                                <a target="_blank" href="#"
                                    class="btn btn--small btn--secondary btn--share share-facebook"
                                    title="Share on Facebook">
                                    <svg aria-hidden="true" focusable="false" role="presentation"
                                        class="icon icon-facebook" viewBox="0 0 20 20">
                                        <path fill="#444"
                                            d="M18.05.811q.439 0 .744.305t.305.744v16.637q0 .439-.305.744t-.744.305h-4.732v-7.221h2.415l.342-2.854h-2.757v-1.83q0-.659.293-1t1.073-.342h1.488V3.762q-.976-.098-2.171-.098-1.634 0-2.635.964t-1 2.72V9.47H7.951v2.854h2.415v7.221H1.413q-.439 0-.744-.305t-.305-.744V1.859q0-.439.305-.744T1.413.81H18.05z">
                                        </path>
                                    </svg>
                                    <span class="share-title" aria-hidden="true">Share</span>
                                    <span class="visually-hidden">Share on Facebook</span>
                                </a>
                                <a target="_blank" href="#" title="Tweet on Twitter"
                                    class="btn btn--small btn--secondary btn--share share-twitter">
                                    <svg aria-hidden="true" focusable="false" role="presentation"
                                        class="icon icon-twitter" viewBox="0 0 20 20">
                                        <path fill="#444"
                                            d="M19.551 4.208q-.815 1.202-1.956 2.038 0 .082.02.255t.02.255q0 1.589-.469 3.179t-1.426 3.036-2.272 2.567-3.158 1.793-3.963.672q-3.301 0-6.031-1.773.571.041.937.041 2.751 0 4.911-1.671-1.284-.02-2.292-.784T2.456 11.85q.346.082.754.082.55 0 1.039-.163-1.365-.285-2.262-1.365T1.09 7.918v-.041q.774.408 1.773.448-.795-.53-1.263-1.396t-.469-1.864q0-1.019.509-1.997 1.487 1.854 3.596 2.924T9.81 7.184q-.143-.509-.143-.897 0-1.63 1.161-2.781t2.832-1.151q.815 0 1.569.326t1.284.917q1.345-.265 2.506-.958-.428 1.386-1.732 2.18 1.243-.163 2.262-.611z">
                                        </path>
                                    </svg>
                                    <span class="share-title" aria-hidden="true">Tweet</span>
                                    <span class="visually-hidden">Tweet on Twitter</span>
                                </a>
                                <a target="_blank" href="#"
                                    class="btn btn--small btn--secondary btn--share share-pinterest">
                                    <svg aria-hidden="true" focusable="false" role="presentation"
                                        class="icon icon-pinterest" viewBox="0 0 20 20">
                                        <path fill="#444"
                                            d="M9.958.811q1.903 0 3.635.744t2.988 2 2 2.988.744 3.635q0 2.537-1.256 4.696t-3.415 3.415-4.696 1.256q-1.39 0-2.659-.366.707-1.147.951-2.025l.659-2.561q.244.463.903.817t1.39.354q1.464 0 2.622-.842t1.793-2.305.634-3.293q0-2.171-1.671-3.769t-4.257-1.598q-1.586 0-2.903.537T5.298 5.897 4.066 7.775t-.427 2.037q0 1.268.476 2.22t1.427 1.342q.171.073.293.012t.171-.232q.171-.61.195-.756.098-.268-.122-.512-.634-.707-.634-1.83 0-1.854 1.281-3.183t3.354-1.329q1.83 0 2.854 1t1.025 2.61q0 1.342-.366 2.476t-1.049 1.817-1.561.683q-.732 0-1.195-.537t-.293-1.269q.098-.342.256-.878t.268-.915.207-.817.098-.732q0-.61-.317-1t-.927-.39q-.756 0-1.269.695t-.512 1.744q0 .39.061.756t.134.537l.073.171q-1 4.342-1.22 5.098-.195.927-.146 2.171-2.513-1.122-4.062-3.44T.59 10.177q0-3.879 2.744-6.623T9.957.81z">
                                        </path>
                                    </svg>
                                    <span class="share-title" aria-hidden="true">Pin it</span>
                                    <span class="visually-hidden">Pin on Pinterest</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center return-link-wrapper back-to-home">
                <a href="#" class="btn btn--secondary btn--has-icon-before return-link">
                    <svg aria-hidden="true" focusable="false" role="presentation"
                        class="icon icon--wide icon-arrow-left" viewBox="0 0 20 8">
                        <path
                            d="M4.814 7.555C3.95 6.61 3.2 5.893 2.568 5.4 1.937 4.91 1.341 4.544.781 4.303v-.44a9.933 9.933 0 0 0 1.875-1.196c.606-.485 1.328-1.196 2.168-2.134h.752c-.612 1.309-1.253 2.315-1.924 3.018H19.23v.986H3.652c.495.632.84 1.1 1.036 1.406.195.306.485.843.869 1.612h-.743z"
                            fill="#000" fill-rule="evenodd"></path>
                    </svg>
                    Back to Books &amp; Catalogs
                </a>
            </div>
        </div>
        <div id="shopify-section-related-products" class="shopify-section">
            <div class="product-template__container page-width" id="ProductSection-related-products">
                <aside class="grid">
                    <div class="grid__item">
                        <header class="section-header">
                            <h2 class="section-header__title">Related Products</h2>
                        </header>
                        <div class="grid-uniform">
                            <div class="grid__item small--one-half medium-up--one-quarter">
                                <div class="grid-view-item">
                                    <a href="#" class="grid-view-item__link">
                                        <img class="grid-view-item__image"
                                            src="//cdn.shopify.com/s/files/1/1723/6189/products/100_movies_all_time_fav_bu_gb_3d_45445_1711061228_id_947900_medium.png?v=1605816285"
                                            alt="">
                                    </a>
                                    <p class="h6">
                                        <a href="#">100 All-Time Favorite Movies of the 20th Century</a>
                                    </p>
                                    <p>
                                        <span class="product-price__price">$20.00</span>
                                    </p>
                                </div>
                            </div>
                            <div class="grid__item small--one-half medium-up--one-quarter">
                                <div class="grid-view-item">
                                    <a href="#" class="grid-view-item__link">
                                        <img class="grid-view-item__image"
                                            src="//cdn.shopify.com/s/files/1/1723/6189/products/AnitGlossy_medium.jpg?v=1594407695"
                                            alt="#">
                                    </a>
                                    <p class="h6">
                                        <a href="#">Anti Glossy: Fashion Photography Now</a>
                                    </p>
                                    <p>
                                        <span class="product-price__price">$50.00</span>
                                    </p>
                                </div>
                            </div>
                            <div class="grid__item small--one-half medium-up--one-quarter">
                                <div class="grid-view-item">
                                    <a href="#">
                                        <img class="grid-view-item__image"
                                            src="//cdn.shopify.com/s/files/1/1723/6189/products/boundless1_medium.jpg?v=1504650277"
                                            alt="">
                                    </a>
                                    <p class="h6">
                                        <a href="#">Boundless: A California Invitational</a>
                                    </p>
                                    <p>
                                        <span class="product-price__price">$45.00</span>
                                    </p>
                                </div>
                            </div>
                            <div class="grid__item small--one-half medium-up--one-quarter">


                                <div class="grid-view-item">
                                    <a href="#" class="grid-view-item__link">
                                        <img class="grid-view-item__image"
                                            src="//cdn.shopify.com/s/files/1/1723/6189/products/9780770433079_medium.jpg?v=1605819627"
                                            alt="">
                                    </a>

                                    <p class="h6">
                                        <a href="#">Bryan Peterson's Understanding Composition Field Guide: How to
                                            See and Photograph Images with Impact</a>
                                    </p>
                                    <p>
                                        <span class="product-price__price">$22.99</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </main>
</div>
@endsection