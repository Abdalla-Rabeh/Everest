<!-- Footer -->
<!-- <style>
    .social-media :hover {
        color: {{$web_config['secondary_color']}} !important;
    }
    .widget-list-link{
        color: white !important;
    }

    .widget-list-link:hover{
        color: #999898 !important;
    }
    .subscribe-border{
        border-radius: 5px;
    }
    .subscribe-button{
        background: #1B7FED;
        position: absolute;
        top: 0;
        color: white;
        padding: 11px;
        padding-left: 15px;
        padding-right: 15px;
        text-transform: capitalize;
        border: none;
    }
    .start_address{
        display: flex;
        justify-content: space-between;
    }
    .start_address_under_line{
        {{Session::get('direction') === "rtl" ? 'width: 344px;' : 'width: 331px;'}}
    }
    .address_under_line{
        width: 299px;
    }
    .end-footer{
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    @media only screen and (max-width: 500px) {
        .start_address {
            display: block;
        }
        .footer-web-logo {
            justify-content: center !important;
            padding-bottom: 25px;
        }
        .footer-padding-bottom {
            padding-bottom: 15px;
        }
        .mobile-view-center-align {
            justify-content: center !important;
            padding-bottom: 15px;
        }
        .last-footer-content-align {
            display: flex !important;
            justify-content: center !important;
            padding-bottom: 10px;
        }
    }
    @media only screen and (max-width: 800px) {
        .end-footer{
            
            display: block;
            
            align-items: center;
        }
    }
    @media only screen and (max-width: 1200px) {
        .start_address_under_line {
            display: none;
        }
        .address_under_line{
            display: none;
        }
    }
</style> -->




<style>
    /*-----------------------------------*\
  #FOOTER
\*-----------------------------------*/
footer{
    background: #212121;
    color: #fff !important;
    font-size: 20px;
    font-weight: bold;
}
footer button {
    color:#fff;
    font-size: 20px;
}
.footer {
  background-repeat: no-repeat;
  background-size: 100%;
  background-position: top;
}

.footer-top {
  padding-block-start: 100px;
  border-block-end: 1px solid var(--onyx);
}

.footer-top .container {
  display: grid;
  gap: 30px;
}

.footer .logo {
  color: var(--white);
  margin-block-end: 10px;
}

.footer-text {
  font-size: var(--fs-6);
  margin-block-end: 25px;
}

.footer-text .link {
  display: inline-block;
  color: var(--portland-orange);
}

.contact-item {
  margin-block-end: 15px;
  color: var(--white);
  font-weight: var(--fw-700);
  display: flex;
  align-items: center;
  gap: 15px;
}

.contact-item ion-icon {
  flex-shrink: 0;
  font-size: 22px;
  color: var(--portland-orange);
}

.social-list {
  display: flex;
  gap: 20px;
 flex-wrap: wrap;
}

.social-link {
  background-color: var(--white);
  color: var(--black);
  padding: 5px;
  border-radius: 50%;
  transition: var(--transition-1);
}


.footer-list-title {
  color: var(--white);
  font-size: var(--fs-5);
  font-weight: var(--fw-700);
  padding-block: 10px;
}

.footer-link {
  padding-block: 4px;
  transition: var(--transition-1);
}

.footer-link:is(:hover, :focus) { color: #fff !important; background-color:#000 !important }
.social-link:hover{
    color: #fff, i !important;
}
.footer-bottom { padding-block: 20px; }

.copyright { margin-block-end: 10px; }

.copyright-link { display: inline-block; color: #2ebd30 !important; }

.footer-bottom .img {
  width: 100%;
  max-width: max-content;
}
.widget-list-link {
    color: #d9dce2 !important;
}


/**
 * responsive for large than 575px screen
 */

@media (min-width: 575px) {

/**
 * FOOTER
 */

.footer-top .container { grid-template-columns: 1fr 1fr; }

}





/**
* responsive for large than 768px screen
*/

@media (min-width: 768px) {




/**
 * FOOTER
 */

.footer-bottom .container {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

}





/**
* responsive for large than 992px screen
*/

@media (min-width: 992px) {




/**
 * FOOTER
 */

.footer-top .container { grid-template-columns: 1fr 0.5fr 0.5fr 0.5fr; }

}





/**
* responsive for large than 1200px screen
*/

@media (min-width: 1200px) {
:is(.brand, .footer) .container {
  max-width: 1200px;
  width: 100%;
  margin-inline: auto;
}

.footer { padding-block-start: 40px; }

}
</style>



<div class="d-flex justify-content-center text-center {{Session::get('direction') === "rtl" ? 'text-md-right' : 'text-md-left'}} mt-3"
        style="background: {{$web_config['primary_color']}}10;padding:20px;">
        {{-- <div class="col-md-1">

        </div> --}}
    <div class="col-md-3 d-flex justify-content-center">
        <div >
            <a href="{{route('about-us')}}">
                <div style="text-align: center;">
                    <img style="height: 60px;width:60px;" src="{{asset("public/assets/front-end/png/about company.png")}}"
                            alt="">
                </div>
                <div style="text-align: center;">
                    
                        <p>
                            {{ \App\CPU\translate('About Company')}}
                        </p>
                    
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-3 d-flex justify-content-center">
        <div >
            <a href="{{route('contacts')}}">
                <div style="text-align: center;">
                    <img style="height: 60px;width:60px;" src="{{asset("public/assets/front-end/png/contact us.png")}}"
                             alt="">
                </div>
                <div style="text-align: center;">
                    <p>
                    {{ \App\CPU\translate('Contact Us')}}
                </p>
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-3 d-flex justify-content-center">
        <div >
            <a href="{{route('helpTopic')}}">
                <div style="text-align: center;">
                    <img style="height: 60px;width:60px;" src="{{asset("public/assets/front-end/png/faq.png")}}"
                             alt="">
                </div>
                <div style="text-align: center;">
                    <p>
                    {{ \App\CPU\translate('FAQ')}}
                </p>
                </div>
            </a>
        </div>
    </div>
    {{-- <div class="col-md-1">

    </div> --}}
</div>


<!-- <footer class="page-footer font-small mdb-colorrtl">
   
    
    <div style="background:{{$web_config['primary_color']}}20;padding-top:30px;  font-weight: bold !important;">
        <div class="container text-center" style="padding-bottom: 13px;">

           
            <div
                class="row text-center {{Session::get('direction') === "rtl" ? 'text-md-right' : 'text-md-left'}} mt-3 pb-3 ">
               
                <div class="col-md-3 d-flex justify-content-start align-items-center footer-web-logo" >
                    <a class="d-inline-block mt-n1" href="{{route('home')}}">
                        <img style="height: 46px!important; width: 180px;"
                             src="{{asset("storage/app/public/company/")}}/{{ $web_config['footer_logo']->value }}"
                             onerror="this.src='{{asset('public/assets/front-end/img/image-place-holder.png')}}'"
                             alt="{{ $web_config['name']->value }}"/>
                    </a>
                </div>
                <div class="col-md-9" >
                    <div class="row">
                        
                        <div class="col-md-3 footer-padding-bottom" >
                            <h6 class="text-uppercase mb-4 font-weight-bold footer-heder">{{\App\CPU\translate('special')}}</h6>
                            <ul class="widget-list" style="padding-bottom: 10px">
                                @php($flash_deals=\App\Model\FlashDeal::where(['status'=>1,'deal_type'=>'flash_deal'])->whereDate('start_date','<=',date('Y-m-d'))->whereDate('end_date','>=',date('Y-m-d'))->first())
                                @if(isset($flash_deals))
                                    <li class="widget-list-item">
                                        <a class="widget-list-link"
                                        href="{{route('flash-deals',[$flash_deals['id']])}}">
                                            {{\App\CPU\translate('flash_deal')}}
                                        </a>
                                    </li>
                                @endif
                                <li class="widget-list-item"><a class="widget-list-link"
                                                                href="{{route('products',['data_from'=>'featured','page'=>1])}}">{{\App\CPU\translate('featured_products')}}</a>
                                </li>
                                <li class="widget-list-item"><a class="widget-list-link"
                                                                href="{{route('products',['data_from'=>'latest','page'=>1])}}">{{\App\CPU\translate('latest_products')}}</a>
                                </li>
                                <li class="widget-list-item"><a class="widget-list-link"
                                                                href="{{route('products',['data_from'=>'best-selling','page'=>1])}}">{{\App\CPU\translate('best_selling_product')}}</a>
                                </li>
                                <li class="widget-list-item"><a class="widget-list-link"
                                                                href="{{route('products',['data_from'=>'top-rated','page'=>1])}}">{{\App\CPU\translate('top_rated_product')}}</a>
                                </li>
    
                            </ul>
                        </div>
                        <div class="col-md-4 footer-padding-bottom" style="{{Session::get('direction') === "rtl" ? 'padding-right:20px;' : ''}}">
                            <h6 class="text-uppercase mb-4 font-weight-bold footer-heder">{{\App\CPU\translate('account_&_shipping_info')}}</h6>
                            @if(auth('customer')->check())
                                <ul class="widget-list" style="padding-bottom: 10px">
                                    <li class="widget-list-item"><a class="widget-list-link"
                                                                    href="{{route('user-account')}}">{{\App\CPU\translate('profile_info')}}</a>
                                    </li>
                                    <li class="widget-list-item"><a class="widget-list-link"
                                                                    href="{{route('wishlists')}}">{{\App\CPU\translate('wish_list')}}</a>
                                    </li>
                                    
                                    <li class="widget-list-item"><a class="widget-list-link"
                                                                    href="{{route('track-order.index')}}">{{\App\CPU\translate('track_order')}}</a>
                                    </li>
                                    <li class="widget-list-item"><a class="widget-list-link"
                                                                    href="{{ route('account-address') }}">{{\App\CPU\translate('address')}}</a>
                                    </li>
                                    
                                </ul>
                            @else
                                <ul class="widget-list" style="padding-bottom: 10px">
                                    <li class="widget-list-item"><a class="widget-list-link"
                                                                    href="{{route('customer.auth.login')}}">{{\App\CPU\translate('profile_info')}}</a>
                                    </li>
                                    <li class="widget-list-item"><a class="widget-list-link"
                                                                    href="{{route('customer.auth.login')}}">{{\App\CPU\translate('wish_list')}}</a>
                                    </li>
                                    
                                    <li class="widget-list-item"><a class="widget-list-link"
                                                                    href="{{route('track-order.index')}}">{{\App\CPU\translate('track_order')}}</a>
                                    </li>
                                    <li class="widget-list-item"><a class="widget-list-link"
                                                                    href="{{route('customer.auth.login')}}">{{\App\CPU\translate('address')}}</a>
                                    </li>
                                    
                                    
                                </ul>
                            @endif
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="row d-flex align-items-center mobile-view-center-align {{Session::get('direction') === "rtl" ? ' flex-row-reverse' : ''}}">
                                <div style="{{Session::get('direction') === "rtl" ? 'margin-right:23px;' : ''}}">
                                    {{-- <span class="mb-4 font-weight-bold footer-heder">{{ \App\CPU\translate('Start a conversation')}}</span> --}}
                                </div>
                                <div class="{{Session::get('direction') === "rtl" ? 'mr-3' : 'ml-3'}}">
                                    <hr class="start_address_under_line" style="border: 1px solid #E0E0E0;"/>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-11 start_address ">
                                    <div style="color:" class="">
                                        <a class="widget-list-link" href="tel: {{$web_config['phone']->value}}">
                                            <span ><i class="fa fa-phone m-2"></i>{{\App\CPU\Helpers::get_business_settings('company_phone')}} </span>
                                        </a>
                                        
                                    </div>
                                    <div style=""class="">
                                        <a class="widget-list-link" href="email:">
                                            <span ><i class="fa fa-envelope m-2"></i> {{\App\CPU\Helpers::get_business_settings('company_email')}} </span>
                                        </a>
                                    </div>
                                    <div style="" class="">
                                        @if(auth('customer')->check())
                                            <a class="widget-list-link" href="{{route('account-tickets')}}">
                                                <span ><i class="fa fa-user-o m-2"></i> {{ \App\CPU\translate('Support Ticket')}} </span>
                                            </a><br>
                                        @else
                                            <a class="widget-list-link" href="{{route('customer.auth.login')}}">
                                                <span ><i class="fa fa-user-o m-2"></i> {{ \App\CPU\translate('Support Ticket')}} </span>
                                            </a><br>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 ">
                            <div class="row pl-2 d-flex align-items-center mobile-view-center-align {{Session::get('direction') === "rtl" ? ' flex-row-reverse' : ''}}">
                                <div>
                                    <span class="mb-4 font-weight-bold footer-heder">{{ \App\CPU\translate('address')}}</span>
                                </div>
                                <div class="{{Session::get('direction') === "rtl" ? 'mr-3 ' : 'ml-3'}}">
                                    <hr class="address_under_line" style="border: 1px solid #E0E0E0;"/>
                                </div>
                            </div>
                            <div class="row pl-2">
                                <span style="font-size: 14px;"><i class="fa fa-map-marker m-2"></i> {{ \App\CPU\Helpers::get_business_settings('shop_address')}} </span>
                            </div>
                        </div>
                    </div>
                </div>
                
    
                
               
            </div>
            
        </div>
    </div>
    
   
    <div style="background: {{$web_config['primary_color']}}10;">
        <div class="container">
            <div class="row end-footer footer-end last-footer-content-align">
                <div class=" mt-3">
                    <p class="{{Session::get('direction') === "rtl" ? 'text-right ' : 'text-left'}}" style="font-size: 16px;">{{ $web_config['copyright_text']->value }}</p>
                </div>
                <div class="mt-md-3 mt-0 mb-md-3 {{Session::get('direction') === "rtl" ? 'text-right' : 'text-left'}}">
                    @php($social_media = \App\Model\SocialMedia::where('active_status', 1)->get())
                    @if(isset($social_media))
                        @foreach ($social_media as $item)
                            <span class="social-media ">
                                    <a class="social-btn sb-light sb-{{$item->name}} {{Session::get('direction') === "rtl" ? 'ml-2' : 'mr-2'}} mb-2"
                                       target="_blank" href="{{$item->link}}" style="color: white!important;">
                                        <i class="{{$item->icon}}" aria-hidden="true"></i>
                                    </a>
                                </span>
                        @endforeach
                    @endif
                </div>
                <div class="d-flex" style="font-size: 14px;">
                    <div class="{{Session::get('direction') === "rtl" ? 'ml-3' : 'mr-3'}}" >
                        <a class="widget-list-link"
                        href="{{route('terms')}}">{{\App\CPU\translate('terms_&_conditions')}}</a>
                    </div>
                    <div>
                        <a class="widget-list-link" href="{{route('privacy-policy')}}">
                            {{\App\CPU\translate('privacy_policy')}}
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
       
    </div>
   
</footer> -->

<footer class="footer" style="background: #373A41;">
    <div class="container">
    
        <div class="row">
            <div class="col-lg-8">
            <div
                class="row text-center {{Session::get('direction') === "rtl" ? 'text-md-right' : 'text-md-left'}} mt-3 pb-3 ">
               
                <div class="col-md-4 d-flex justify-content-start align-items-center footer-web-logo" >
                    <a class="d-inline-block mt-n1" href="{{route('home')}}">
                        <img style="height: 250px!important; width: 500px;"
                             src="{{asset("storage/app/public/company/")}}/{{ $web_config['footer_logo']->value }}"
                             onerror="this.src='{{asset('public/assets/front-end/img/image-place-holder.png')}}'"
                             alt="{{ $web_config['name']->value }}"/>
                    </a>
                </div>
                <div class="col-md-8" >
                    <div class="row">
                        
                        <div class="col-md-3 footer-padding-bottom" >
                            <h6 class="text-uppercase mb-4 font-weight-bold footer-heder">{{\App\CPU\translate('special')}}</h6>
                            <ul class="widget-list" style="padding-bottom: 10px">
                                @php($flash_deals=\App\Model\FlashDeal::where(['status'=>1,'deal_type'=>'flash_deal'])->whereDate('start_date','<=',date('Y-m-d'))->whereDate('end_date','>=',date('Y-m-d'))->first())
                                @if(isset($flash_deals))
                                    <li class="widget-list-item">
                                        <a class="widget-list-link"
                                        href="{{route('flash-deals',[$flash_deals['id']])}}">
                                            {{\App\CPU\translate('flash_deal')}}
                                        </a>
                                    </li>
                                @endif
                                <li class="widget-list-item"><a class="widget-list-link"
                                                                href="{{route('products',['data_from'=>'featured','page'=>1])}}">{{\App\CPU\translate('featured_products')}}</a>
                                </li>
                                <li class="widget-list-item"><a class="widget-list-link"
                                                                href="{{route('products',['data_from'=>'latest','page'=>1])}}">{{\App\CPU\translate('latest_products')}}</a>
                                </li>
                                <li class="widget-list-item"><a class="widget-list-link"
                                                                href="{{route('products',['data_from'=>'best-selling','page'=>1])}}">{{\App\CPU\translate('best_selling_product')}}</a>
                                </li>
                                <li class="widget-list-item"><a class="widget-list-link"
                                                                href="{{route('products',['data_from'=>'top-rated','page'=>1])}}">{{\App\CPU\translate('top_rated_product')}}</a>
                                </li>
    
                            </ul>
                        </div>
                        <div class="col-md-4 footer-padding-bottom" style="{{Session::get('direction') === "rtl" ? 'padding-right:20px;' : ''}}">
                            <h6 class="text-uppercase mb-4 font-weight-bold footer-heder">{{\App\CPU\translate('account_&_shipping_info')}}</h6>
                            @if(auth('customer')->check())
                                <ul class="widget-list" style="padding-bottom: 10px">
                                    <li class="widget-list-item"><a class="widget-list-link"
                                                                    href="{{route('user-account')}}">{{\App\CPU\translate('profile_info')}}</a>
                                    </li>
                                    <li class="widget-list-item"><a class="widget-list-link"
                                                                    href="{{route('wishlists')}}">{{\App\CPU\translate('wish_list')}}</a>
                                    </li>
                                    
                                    <li class="widget-list-item"><a class="widget-list-link"
                                                                    href="{{route('track-order.index')}}">{{\App\CPU\translate('track_order')}}</a>
                                    </li>
                                    <li class="widget-list-item"><a class="widget-list-link"
                                                                    href="{{ route('account-address') }}">{{\App\CPU\translate('address')}}</a>
                                    </li>
                                    
                                </ul>
                            @else
                                <ul class="widget-list" style="padding-bottom: 10px">
                                    <li class="widget-list-item"><a class="widget-list-link"
                                                                    href="{{route('customer.auth.login')}}">{{\App\CPU\translate('profile_info')}}</a>
                                    </li>
                                    <li class="widget-list-item"><a class="widget-list-link"
                                                                    href="{{route('customer.auth.login')}}">{{\App\CPU\translate('wish_list')}}</a>
                                    </li>
                                    
                                    <li class="widget-list-item"><a class="widget-list-link"
                                                                    href="{{route('track-order.index')}}">{{\App\CPU\translate('track_order')}}</a>
                                    </li>
                                    <li class="widget-list-item"><a class="widget-list-link"
                                                                    href="{{route('customer.auth.login')}}">{{\App\CPU\translate('address')}}</a>
                                    </li>
                                    
                                    
                                </ul>
                            @endif
                        </div>
                        
                    </div>
                    <div class="row start_address" style="color:#fff">
                                    <div style="color:" class="">
                                        <a class="widget-list-link" href="tel: +2250788998998">
                                            <span><i class="fa fa-phone m-2"></i>+2250788998998 </span>
                                        </a>
                                        
                                    </div>
                                    <div style="" class="">
                                        <a class="widget-list-link" href="email:">
                                            <span><i class="fa fa-envelope m-2"></i> help@everest-ci.com </span>
                                        </a>
                                    </div>
                                    <div style="" class="">
                                                                                    <a class="widget-list-link" href="https://tce-i.com/customer/auth/login">
                                                <span><i class="fa fa-user-o m-2"></i> بطاقة الدعم </span>
                                            </a><br>
                                                                            </div>
                                </div>
                </div>
                
    
                
               
            </div>
               
            </div>
           
            <div class="col-lg-4">
                <ul class="footer-list">
                  @php($ios = \App\CPU\Helpers::get_business_settings('download_app_apple_stroe'))
                @php($android = \App\CPU\Helpers::get_business_settings('download_app_google_stroe'))
                        
                 @if($ios['status'] || $android['status'])
                    <div class="d-flex justify-content-center">
                        <h6 class="text-uppercase font-weight-bold footer-heder align-items-center">
                            {{\App\CPU\translate('download_our_app')}}
                            </h6>
                        </div>
                 @endif
                        
                        
                                            <div class="store-contents d-flex justify-content-center" >
                                                @if($ios['status'])
                                                    <div class="{{Session::get('direction') === "rtl" ? 'ml-2' : 'mr-2'}} mb-2">
                                                        <a class="" href="{{ $ios['link'] }}" role="button"><img
                                                                src="{{asset("public/assets/front-end/png/apple_app.png")}}"
                                                                alt="" style="height: 51px!important;">
                                                        </a>
                                                    </div>
                                                @endif
                        
                                                @if($android['status'])
                                                    <div class="{{Session::get('direction') === "rtl" ? 'ml-2' : 'mr-2'}} mb-2">
                                                        <a href="{{ $android['link'] }}" role="button">
                                                            <img src="{{asset("public/assets/front-end/png/google_app.png")}}"
                                                                 alt="" style="height: 51px!important;">
                                                        </a>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="text-nowrap mb-2">
                                                <span style="font-weight: 700;font-size: 14.3208px;">{{\App\CPU\translate('NEWS LETTER')}}</span><br>
                                                <span style="font-weight: 400;font-size: 11.066px;">{{\App\CPU\translate('subscribe to our new channel to get latest updates')}}</span>
                                            </div>
                                            <div class="text-nowrap mb-4" style="position:relative;">
                                                <form action="{{ route('subscription') }}" method="post">
                                                    @csrf
                                                    <input type="email" name="subscription_email" class="form-control subscribe-border"
                                                        placeholder="{{\App\CPU\translate('Your Email Address')}}" required style="padding: 11px;text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};">
                                                    <button class="subscribe-button" type="submit"
                                                        style="{{Session::get('direction') === "rtl" ? 'float:right;left:0px;border-radius:5px 0px 0px 5px;' : 'float:right;right:0px; border-radius:0px 5px 5px 0px;'}};font-size: .94rem;">
                                                        {{\App\CPU\translate('subscribe')}}
                                                    </button>
                                                </form>
                                            </div>                   
                    </ul>
                  </div>
                </ul>
            
            </div>
        </div>


       
    <div class="footer-bottom">
      <div class="container">

        <p class="copyright" style="color:#fff;">
          &copy; 2022 Made with ♥ by <a href="#" class="copyright-link">Doctor-code.net</a>
        </p>
        <div class="footer-brand">

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook" style="color: #3A6EE5;"></ion-icon>
              </a>
            </li>
            <li>
              <a href="#" class="social-link">
                  <ion-icon name="logo-youtube" style="color:#c00"></ion-icon>
              </a>
            </li>
            <li>
                <a href="" class="social-link">
                <ion-icon name="logo-linkedin" style="color:#3467C2;"></ion-icon>
                </a>
            </li>
            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter" style="color:#4F9CF0"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-pinterest" style="color:#E62E2D"></ion-icon>
              </a>
            </li>
            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram" style="color:#E72EB3"></ion-icon>
              </a>
            </li>

          </ul>

        </div>
      </div>
    </div>

  </footer>
