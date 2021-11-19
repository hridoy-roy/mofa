@extends('layouts.frontend.app')
@section('nev_sub')

@endsection

@section('main-section')
<div id="page" class="site">
    <div id="content" class="site-content" style="margin-top: 141px;">
        <div class="textured-bg">
            <div class="container donate__page">
                <h1 class="donate__title">
                    From all of us at MOPA:<br>
                    Thank you for your generous donation! </h1>
                <section class="donate__content">
                    <p>Your support increases access to the arts and teaches visual literacy through programs and
                        exhibitions that empower communities.</p>
                </section>
            </div>
            <section class="donate__donation-type">
                <div class="donate__donation-type-wrapper" style="max-height: 500px;">
                    <article data-donation="Donate Now">
                        <div>
                            <span class="donate__donation-heading">Let The Lens Tell Your Story</span>
                            <span class="donate__donation-value">Donate Now</span>
                            <a class="mopa-btn mopa-btn--gradient mopa-btn--fixed-width" href="#" target="_blank"
                                rel="noopener noreferrer">Donate</a>
                        </div>
                        <picture>
                            <img alt="" class="attachment-full size-full ls-is-cached lazyloaded"
                                src="https://mopa.org/wp-content/uploads/2021/10/Tim_Hardy-wide.jpg" width="100%"
                                height="auto">
                        </picture>
                    </article>
                </div>
            </section>
            <div class="container donate__page">
                <section class="donate__content-block">
                    <h2>More Ways to Give</h2>
                    <div class="donate__content-block-items">
                        <article>
                            <h3>Legacy Giving</h3>
                            <p>One easy way to include the Museum in your estate plan is to name MOPA as a beneficiary
                                of your of your retirement plan, IRA, or life insurance policy.</p>
                            <a class="mopa-btn mopa-btn--hollow mopa-btn--fixed-width" href="#">Learn more</a>
                        </article>
                        <article>
                            <h3>Gifts of Stock</h3>
                            <p>To make a charitable contribution of securities, please contact Deputy Director Vivienne
                                Esrig at 619.238.7559 extension 205 or esrig@mopa.org.</p>
                            <a class="mopa-btn mopa-btn--hollow mopa-btn--fixed-width" href="#">Learn more</a>
                        </article>
                        <article>
                            <h3>Sponsor a Program</h3>
                            <p>MOPA relies on customized sponsorships from our corporate community to help bring
                                world-class exhibitions, learning and film programming year-round to San Diego and the
                                world.</p>
                            <a class="mopa-btn mopa-btn--hollow mopa-btn--fixed-width" href="#">Learn more</a>
                        </article>
                        <article>
                            <h3>Volunteer</h3>
                            <p>For your and our staff’s safety, we are currently not taking new volunteers. Please check
                                back later.</p>
                        </article>
                    </div>
                    <div class="contact-block-footer-text">
                        <p>Tax deductibility is determined to be 100%. Tax ID: 95-2889390.<br>
                            For any other questions, contact development@MOPA.org</p>
                    </div>
                </section>
                <section class="mopa-section-contact" id="mopa-section-contact">
                    <h2>Start a Conversation</h2>
                    <p>To discover more ways for your business or organization to partner with MOPA, please contact our
                        development team.</p>
                    <div class="mopa-section-contact__wrapper">
                        <a class="mopa-section-contact__phone" href="tel:619.238.7559">
                            <i style="font-size: 20px;" class="bi bi-telephone-fill"></i>
                            <span style="margin-left: 7px;">619.238.7559</span>
                        </a>
                        <a class="mopa-section-contact__email" href="mailto:development@mopa.org">
                            <i style="font-size: 24px;" class="bi bi-envelope-fill"></i>
                            <span style="margin-left: 7px;">development@mopa.org</span>
                        </a>
                    </div>
                </section>
            </div>
        </div>

    </div>
</div>
@endsection