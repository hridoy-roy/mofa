@extends('layouts.frontend.app')
@section('nev_sub')

@endsection

@section('main-section')
<div id="page" class="site">
    <div id="content" class="site-content" style="margin-top: 131.567px;">
        <div class="textured-bg">
            <div class="container members__page">
                <h1 class="members__title">Member</h1>
                <section class="members__membership-type">
                    <div class="members__membership-type-wrapper">
                        <article data-membership="Individual" style="display: flex;align-self: self-start;">
                            <div>
                                <h2>Already a Member?</h2>
                                {{-- <p>Treat yourself to a MOPA membership, and visit as often as you'd like.</p> --}}
                                {{-- <a href="#" class="members__membership-modal-trigger">View all membership benefits</a> --}}
                                <div class="members__membership-buttons">
                                    <a class="mopa-btn mopa-btn--gradient" href="#" target="_blank">LOG IN</a>
                                    {{-- <a class="mopa-btn mopa-btn--hollow" href="#">HOUSEHOLD (DUAL) - $ 75</a> --}}
                                </div>
                            </div>
                        </article>
                        <article data-membership="Senior" style="display: flex;align-self: self-start;">
                            <div>
                                {{-- <span class="members__membership-price">
                                    <small>$</small>40<small>/year</small>
                                </span> --}}
                                <h2>Become a Member</h2>
                                {{-- <p>Enjoy all MOPA has to offer -- with your own annual membership.</p> --}}
                                {{-- <a href="#" class="members__membership-modal-trigger">View all membership benefits</a> --}}
                                <div class="members__membership-buttons">
                                    <a class="mopa-btn mopa-btn--gradient" href="#" target="_blank" >JOIN NOW</a>
                                    {{-- <a class="mopa-btn mopa-btn--hollow" href="#" target="_blank">SENIOR (DUAL) - $ 70</a> --}}
                                </div>
                            </div>
                        </article>
                        {{-- <article data-membership="Photographer's Circle">
                            <div><span class="members__membership-price"><small>$</small>150<small>/year</small></span>
                                <h2>Photographer's Circle</h2>
                                <p>Unlock access to museums across the country and beyond.</p><a href="#"
                                    class="members__membership-modal-trigger" data-title="Photographer's Circle">View
                                    all membership benefits</a>
                                <div class="members__membership-buttons"><a class="mopa-btn mopa-btn--gradient"
                                        href="https://interland3.donorperfect.net/weblink/WebLink.aspx?name=E9394&amp;id=300&amp;type=Memberships&amp;membership=Photographer's Circle"
                                        target="_blank" >JOIN NOW</a></div>
                            </div>
                            <picture><img alt="" src="https://mopa.org/wp-content/uploads/2021/09/image-11.jpg">
                            </picture>
                        </article> --}}
                        {{-- <article data-membership="Silver Circle">
                            <div><span class="members__membership-price">
                                <small>$</small>250<small>/year</small>
                            </span>
                                <h2>Silver Circle</h2>
                                <p>Receive invitations to MOPA ReFramed and enjoy insider access today.</p>
                                <a href="#" class="members__membership-modal-trigger" data-title="Silver Circle">View all membership benefits</a>
                                <div class="members__membership-buttons">
                                    <a class="mopa-btn mopa-btn--gradient" href="#" target="_blank" >JOIN NOW</a>
                                </div>
                            </div>
                            <picture>
                                <img alt="" src="https://mopa.org/wp-content/uploads/2021/09/mopa-hero-3-1.jpg">
                            </picture>
                        </article> --}}
                    </div>
                    <div class="members__text-after-membership">
                        {{-- <p>Already a Member? <a href="#" target="_blank" rel="noopener">Renew Membership</a></p> --}}
                        <style>
                            article[data-membership="Photographer's Circle"],
                            article[data-membership="Silver Circle"] {
                                display: none;
                            }
                        </style>
                    </div>
                </section>
                {{-- <section class="members__second-block">
                    <h2>Additional Membership Options</h2>
                    <div class="members__second-block-description">
                        <p>Membership durations are for 1 Year (Annual)</p>
                    </div>
                    <div class="members__second-block-buttons">
                        <a class="mopa-btn mopa-btn--gradient mopa-btn--fixed-width" href="#" target="_blank" >STUDENT - $ 25</a>
                        <a class="mopa-btn mopa-btn--gradient mopa-btn--fixed-width" href="#" target="_blank" >EDUCATOR - $40</a>
                        <a class="mopa-btn mopa-btn--gradient mopa-btn--fixed-width" href="#" target="_blank" >CREW MEMBER - $5</a>
                    </div>
                    <div class="members__second-block-text-after-buttons">
                        <p>*Member benefits vary, so please contact a member of the Development Team to help you
                            personalize your membership package. All membership levels are partially or fully
                            tax-deductible. (All non-tax-deductible benefits may be waived to receive full deduction if
                            noted.)</p>
                    </div>
                </section> --}}
                <section class="members__third-block">
                    <h2>“Beautiful photography museum! Their exhibitions are some of the best exhibitions I have ever
                        seen.”</h2>
                    <p>– Seiko U., Carmel, CA</p>
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