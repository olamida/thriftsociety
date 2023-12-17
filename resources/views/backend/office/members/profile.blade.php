@extends('backend.layouts.backcork')

@section('title', __('Members'))

@push('after-styles')
<link href="{{ asset('office/backcork/assets/css/users/user-profile.css') }}" rel="stylesheet" type="text/css" />
   <link href="{{ asset('office/backcork/assets/css/widgets/modules-widgets.css') }}" rel="stylesheet" type="text/css" />  
   
@endpush

@section('content')
        <div class="col-xl-4 col-lg-6 col-md-5 col-sm-12 layout-top-spacing">
            <div class="user-profile layout-spacing">
               <div class="widget-content widget-content-area">
                  <div class="d-flex justify-content-between">
                     <h3 class="">Info</h3>
                     <a href="user_account_setting.html" class="mt-2 edit-profile">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
                           <path d="M12 20h9"></path>
                           <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                        </svg>
                     </a>
                  </div>
                  <div class="text-center user-info">
                     <img src="{{ asset('office/backcork/assets/img/90x90.jpg') }}" alt="avatar">
                     <p class="">Jimmy Turner</p>
                  </div>
                  <div class="user-info-list">
                     <div class="">
                        <ul class="contacts-block list-unstyled">
                           <li class="contacts-block__item">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-coffee">
                                 <path d="M18 8h1a4 4 0 0 1 0 8h-1"></path>
                                 <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path>
                                 <line x1="6" y1="1" x2="6" y2="4"></line>
                                 <line x1="10" y1="1" x2="10" y2="4"></line>
                                 <line x1="14" y1="1" x2="14" y2="4"></line>
                              </svg>
                              Web Developer
                           </li>
                           <li class="contacts-block__item">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar">
                                 <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                 <line x1="16" y1="2" x2="16" y2="6"></line>
                                 <line x1="8" y1="2" x2="8" y2="6"></line>
                                 <line x1="3" y1="10" x2="21" y2="10"></line>
                              </svg>
                              Jan 20, 1989
                           </li>
                           <li class="contacts-block__item">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin">
                                 <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                 <circle cx="12" cy="10" r="3"></circle>
                              </svg>
                              New York, USA
                           </li>
                           <li class="contacts-block__item">
                              <a href="mailto:example@mail.com">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                 </svg>
                                 Jimmy@gmail.com
                              </a>
                           </li>
                           <li class="contacts-block__item">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone">
                                 <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                              </svg>
                              +1 (530) 555-12121
                           </li>
                           <li class="contacts-block__item">
                              <ul class="list-inline">
                                 <li class="list-inline-item">
                                    <div class="social-icon">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook">
                                          <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                       </svg>
                                    </div>
                                 </li>
                                 <li class="list-inline-item">
                                    <div class="social-icon">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter">
                                          <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                                       </svg>
                                    </div>
                                 </li>
                                 <li class="list-inline-item">
                                    <div class="social-icon">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin">
                                          <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                                          <rect x="2" y="9" width="4" height="12"></rect>
                                          <circle cx="4" cy="4" r="2"></circle>
                                       </svg>
                                    </div>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
        </div>
        <div class="col-xl-8 col-lg-6 col-md-7 col-sm-12 layout-top-spacing">

            <div class="bio layout-spacing ">
               <div class="widget-content widget-content-area">
                  <h3 class="">Bio</h3>
                  <p>I'm Web Developer from California. I code and design websites worldwide. Mauris varius tellus vitae tristique sagittis. Sed aliquet, est nec auctor aliquet, orci ex vestibulum ex, non pharetra lacus erat ac nulla.</p>
                  <div class="bio-skill-box">
                     <div class="row">
                        <div class="col-12 col-xl-6 col-lg-12 mb-xl-5 mb-5 ">
                           <div class="d-flex b-skills">
                              <div class="widget widget-table-one">
                                 <div class="widget-heading">
                                    <h5 class="">Transactions</h5>
                                 </div>

                                 <div class="widget-content">
                                    <div class="transactions-list">
                                          <div class="t-item">
                                             <div class="t-company-name">
                                                <div class="t-icon">
                                                      <div class="icon">
                                                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                                      </div>
                                                </div>
                                                <div class="t-name">
                                                      <h4>Electricity Bill</h4>
                                                      <p class="meta-date">4 Aug 1:00PM</p>
                                                </div>

                                             </div>
                                             <div class="t-rate rate-dec">
                                                <p><span>-$16.44</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg></p>
                                             </div>
                                          </div>
                                    </div>

                                    <div class="transactions-list">
                                          <div class="t-item">
                                             <div class="t-company-name">
                                                <div class="t-icon">
                                                      <div class="avatar avatar-xl">
                                                         <span class="avatar-title rounded-circle">SP</span>
                                                      </div>
                                                </div>
                                                <div class="t-name">
                                                      <h4>Shaun Park</h4>
                                                      <p class="meta-date">4 Aug 1:00PM</p>
                                                </div>
                                             </div>
                                             <div class="t-rate rate-inc">
                                                <p><span>+$66.44</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline></svg></p>
                                             </div>
                                          </div>
                                    </div>

                                    <div class="transactions-list">
                                          <div class="t-item">
                                             <div class="t-company-name">
                                                <div class="t-icon">
                                                      <div class="avatar avatar-xl">
                                                         <span class="avatar-title rounded-circle">AD</span>
                                                      </div>
                                                </div>
                                                <div class="t-name">
                                                      <h4>Amy Diaz</h4>
                                                      <p class="meta-date">4 Aug 1:00PM</p>
                                                </div>

                                             </div>
                                             <div class="t-rate rate-inc">
                                                <p><span>+$66.44</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline></svg></p>
                                             </div>
                                          </div>
                                    </div>

                                    <div class="transactions-list">
                                          <div class="t-item">
                                             <div class="t-company-name">
                                                <div class="t-icon">
                                                      <div class="icon">
                                                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                                      </div>
                                                </div>
                                                <div class="t-name">
                                                      <h4>Netflix</h4>
                                                      <p class="meta-date">4 Aug 1:00PM</p>
                                                </div>

                                             </div>
                                             <div class="t-rate rate-dec">
                                                <p><span>-$32.00</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg></p>
                                             </div>
                                          </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="col-12 col-xl-6 col-lg-12 mb-xl-5 mb-5 ">
                           <div class="d-flex b-skills">
                              <div>
                              </div>
                              <div class="">
                                 <h5>Github Countributer</h5>
                                 <p>Ut enim ad minim veniam, quis nostrud exercitation aliquip ex ea commodo consequat.</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 col-xl-6 col-lg-12 mb-xl-0 mb-5 ">
                           <div class="d-flex b-skills">
                              <div>
                              </div>
                              <div class="">
                                 <h5>Photograhpy</h5>
                                 <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia anim id est laborum.</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 col-xl-6 col-lg-12 mb-xl-0 mb-0 ">
                           <div class="d-flex b-skills">
                              <div>
                              </div>
                              <div class="">
                                 <h5>Mobile Apps</h5>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do et dolore magna aliqua.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
        </div>

                     <div class="col-xl-5 col-lg-12 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="widget-content widget-content-area">
                           <div class="widget widget-table-one">
                              <div class="widget-heading">
                                 <h5 class="">Transactions</h5>
                              </div>

                              <div class="widget-content">
                                 <div class="transactions-list">
                                       <div class="t-item">
                                          <div class="t-company-name">
                                             <div class="t-icon">
                                                   <div class="icon">
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                                   </div>
                                             </div>
                                             <div class="t-name">
                                                   <h4>Electricity Bill</h4>
                                                   <p class="meta-date">4 Aug 1:00PM</p>
                                             </div>

                                          </div>
                                          <div class="t-rate rate-dec">
                                             <p><span>-$16.44</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg></p>
                                          </div>
                                       </div>
                                 </div>

                                 <div class="transactions-list">
                                       <div class="t-item">
                                          <div class="t-company-name">
                                             <div class="t-icon">
                                                   <div class="avatar avatar-xl">
                                                      <span class="avatar-title rounded-circle">SP</span>
                                                   </div>
                                             </div>
                                             <div class="t-name">
                                                   <h4>Shaun Park</h4>
                                                   <p class="meta-date">4 Aug 1:00PM</p>
                                             </div>
                                          </div>
                                          <div class="t-rate rate-inc">
                                             <p><span>+$66.44</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline></svg></p>
                                          </div>
                                       </div>
                                 </div>

                                 <div class="transactions-list">
                                       <div class="t-item">
                                          <div class="t-company-name">
                                             <div class="t-icon">
                                                   <div class="avatar avatar-xl">
                                                      <span class="avatar-title rounded-circle">AD</span>
                                                   </div>
                                             </div>
                                             <div class="t-name">
                                                   <h4>Amy Diaz</h4>
                                                   <p class="meta-date">4 Aug 1:00PM</p>
                                             </div>

                                          </div>
                                          <div class="t-rate rate-inc">
                                             <p><span>+$66.44</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline></svg></p>
                                          </div>
                                       </div>
                                 </div>

                                 <div class="transactions-list">
                                       <div class="t-item">
                                          <div class="t-company-name">
                                             <div class="t-icon">
                                                   <div class="icon">
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                                   </div>
                                             </div>
                                             <div class="t-name">
                                                   <h4>Netflix</h4>
                                                   <p class="meta-date">4 Aug 1:00PM</p>
                                             </div>

                                          </div>
                                          <div class="t-rate rate-dec">
                                             <p><span>-$32.00</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg></p>
                                          </div>
                                       </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="widget-content widget-content-area">
                           <div class="widget widget-account-invoice-one">

                              <div class="widget-heading">
                                 <h5 class="">Account Info</h5>
                              </div>

                              <div class="widget-content">
                                 <div class="invoice-box">
                                       
                                       <div class="acc-total-info">
                                          <h5>Balance</h5>
                                          <p class="acc-amount">$470</p>
                                       </div>

                                       <div class="inv-detail">                                        
                                          <div class="info-detail-1">
                                             <p>Monthly Plan</p>
                                             <p>$ 199.0</p>
                                          </div>
                                          <div class="info-detail-2">
                                             <p>Taxes</p>
                                             <p>$ 17.82</p>
                                          </div>
                                          <div class="info-detail-3 info-sub">
                                             <div class="info-detail">
                                                   <p>Extras this month</p>
                                                   <p>$ -0.68</p>
                                             </div>
                                             <div class="info-detail-sub">
                                                   <p>Netflix Yearly Subscription</p>
                                                   <p>$ 0</p>
                                             </div>
                                             <div class="info-detail-sub">
                                                   <p>Others</p>
                                                   <p>$ -0.68</p>
                                             </div>
                                          </div>
                                       </div>

                                       <div class="inv-action">
                                          <a href="" class="btn btn-outline-dark">Summary</a>
                                          <a href="" class="btn btn-danger">Transfer</a>
                                       </div>
                                 </div>
                              </div>

                           </div>
                        </div>
                    </div>
        
@endsection

@push('after-scripts')
    <script src="{{ asset('office/backcork/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('office/backcork/assets/js/widgets/modules-widgets.js') }}"></script>
@endpush

