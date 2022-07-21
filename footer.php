<footer>
    <div class="container">
        <div class="row col-mar-0 footer-lien-he"  id="lien-he">
            <div class="col-lg-5 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
               <?php 
               if ( dynamic_sidebar('sidebar1') ) : else : endif; 

               ?>
               
        </div>
        <div class="col-lg-7">
            <div class="row justify-content-between">
                <div class="col-xl-auto col-md-4 wow fadeInUp " >
                    <?php if ( dynamic_sidebar('menuFooter') ) : else : endif;  ?>

                </div>
                <div class="col-xl-auto col-md-4 wow fadeInUp " >
                 <?php if ( dynamic_sidebar('menuProduct') ) : else : endif;  ?>

             </div>
             <div class="col-xl-auto col-md-4 wow  fadeInUp">
                 <?php if ( dynamic_sidebar('trungtamhotro') ) : else : endif;  ?>

             </div>
				<div class="gg-partner wow fadeInUp" style="margin:auto;text-align:center;">
                    <div><img src="https://devapi.qrcode-gen.com/generate/2021_04/1621149469.png" class="qrcode" width="124" height="124" caption="false" /></div>
					<div class="text"><img src="https://hosco.vn/wp-content/uploads/2021/05/logo-footer.png" style="height: 115px;"/></div>
					
                </div>
				
        </div>	
    </div>
			
</div>    
		<div class="copyright">
            <div class="row">
                <div class="col-lg-6 text-lg-left text-center">
                	<div class="copyright-pc">
                		Copyright © 2022 Công ty Cổ phần HOSCO VIỆT NAM
                	</div>
                	<div class="copyright-mobile">
                  Copyright © 2022 Công ty Cổ phần HOSCO VIỆT NAM
                    </div>
                </div>
           
                <div class="col-lg-6 text-lg-right text-center">
                    <a class="smooth" href="#" title="" style="color: #fff">Quy định sử dụng</a> <a class="smooth" href="#" title="" style="color: #fff">Chính sách bảo mật</a>
                </div>
            </div>
        </div>
</div>
</footer>
<div id="informationForm" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content trial-md-ct">
            
         <?php if ( dynamic_sidebar('formTuVan') ) : else : endif;  ?>

     </div>
 </div>
</div>
<div id="price_quote" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content trial-md-ct">
            <button type="button" class="md-close" data-dismiss="modal"><i class="ic ic-close"></i></button>
            <h2 class="title">Điền thông tin của bạn</h2>
            <form method="POST" id="PriceSheet-home" action="index.html" class="form-horizontal form-validate" data-callback="reload_page" novalidate="novalidate">
                <input type="hidden">                <div class="row col-mar-13">
                    <div class="col-sm-12" id="load-template-info">
                    </div>
                    <div class="col-sm-12" id="load-template-number-user"></div>
                    <input type="hidden" name="tien_tong_cong" class="total_price_form" value="0">
                    <input type="hidden" name="tien_thanh_toan_tat_ca" class="total_price_payment_form" value="0">
                    <input type="hidden" name="current_date" value="23/04/2021">
                    <input type="hidden" name="id_pdf" value="190442">
                    <div class="col-sm-12">
                        <p>Họ và tên của bạn</p>
                        <div class="input">
                            <i class="ic ic-user"></i>
                            <input required="" type="text" name="name">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <p>Số điện thoại</p>
                        <div class="input">
                            <i class="ic ic-phone"></i>
                            <input required="" type="text" class="numberic" name="phone">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <p>Email</p>
                        <div class="input">
                            <i class="ic ic-email"></i>
                            <input type="text" name="email">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <p>Ngành nghề</p>
                        <div class="input">
                            <input style="padding-left: 15px;" required="" type="text" name="job">
                        </div>
                    </div>
                </div>
                <div class="text-center"><button type="submit" class="smooth">Đăng ký</button></div>
            </form>
        </div>
    </div>
</div>

<div class="navigation-mobile-bottom">
<nav class="mobile-bottom-nav">
    <div class="mobile-bottom-nav__item mobile-bottom-nav__item--active">
        <div class="mobile-bottom-nav__item-content">
            <a id="fcb-phone" class="social bgcolor-twitter pointer txt-center ctn-icon-social-media twitter" href="tel:0909934689" rel="nofollow"><img src="https://hosco.vn/wp-content/uploads/2021/06/telephone.svg" alt="phone">
            </a>
        </div>      
    </div>
    <div class="mobile-bottom-nav__item">       
        <div class="mobile-bottom-nav__item-content">
            <a id="fcb-mail" class="social bgcolor-whatsapp pointer txt-center ctn-icon-social-media whatsapp" data-toggle="modal" data-target="#informationForm" href="#information-form"><img src="https://hosco.vn/wp-content/uploads/2021/06/chat.svg" alt="mail">
            </a>
        </div>
    </div>
    <div class="mobile-bottom-nav__item">
        <div class="mobile-bottom-nav__item-content">
            <a id="fcb-zalo" class="social bgcolor-rss pointer txt-center ctn-icon-social-media email" href="https://zalo.me/0909934689" target="_blank" rel="nofollow"><img src="https://hosco.vn/wp-content/uploads/2021/06/zalo-1.svg" alt="zalo"></a>
        </div>      
    </div>
    
    <div class="mobile-bottom-nav__item">
        <div class="mobile-bottom-nav__item-content">
            <a id="fcb-facebook" class="social bgcolor-github pointer txt-center ctn-icon-social-media up" href="https://m.me/phanmembanhanghosco" target="_blank" rel="nofollow"><img src="https://hosco.vn/wp-content/uploads/2021/06/messenger.svg" alt="facebook"></a>
        </div>      
    </div>
</nav>
</div>

<div class="group-contact-shops show">
    <div class="group-hosco-contact">
        <a id="fcb-mail" data-toggle="modal" data-target="#informationForm" href="#information-form" ><img src="<?php bloginfo("template_directory"); ?>/themes/default/assets/images/email_ly.png" alt="mail"></a>
        <a id="fcb-zalo" href="https://zalo.me/0909934689" target="_blank" rel="nofollow"><img src="<?php bloginfo("template_directory"); ?>/themes/default/assets/images/zalo_ly.png" alt="zalo"></a>
        <a id="fcb-facebook" href="https://m.me/phanmembanhanghoscos" target="_blank" rel="nofollow"><img src="<?php bloginfo("template_directory"); ?>/themes/default/assets/images/messenger_ly.png" alt="facebook"></a>
    </div>
</div>
<a href="tel:0909 934 689" title="" class="btn-call">
    <strong>0909 934 689</strong>
    <span><i class="fa fa-phone"></i></span>
</a>

<script src="<?php bloginfo("template_directory"); ?>/assets/vendor/jquery.min.js" ></script>    
<script src="<?php bloginfo("template_directory"); ?>/themes/default/lib/slick/slick.min.js" ></script>
<script src="<?php bloginfo("template_directory"); ?>/themes/default/lib/isotope/isotope.pkgd.min.js" ></script>
<script src="<?php bloginfo("template_directory"); ?>/themes/default/lib/lightbox/js/lightbox.min.js" ></script>
<script src="<?php bloginfo("template_directory"); ?>/themes/default/lib/main.js" ></script>
<script>
    /*! jQuery & Zepto Lazy v1.7.10 - http://jquery.eisbehr.de/lazy - MIT&GPL-2.0 license - Copyright 2012-2018 Daniel 'Eisbehr' Kern */
    !function(t,e){"use strict";function r(r,a,i,u,l){function f(){L=t.devicePixelRatio>1,i=c(i),a.delay>=0&&setTimeout(function(){s(!0)},a.delay),(a.delay<0||a.combined)&&(u.e=v(a.throttle,function(t){"resize"===t.type&&(w=B=-1),s(t.all)}),u.a=function(t){t=c(t),i.push.apply(i,t)},u.g=function(){return i=n(i).filter(function(){return!n(this).data(a.loadedName)})},u.f=function(t){for(var e=0;e<t.length;e++){var r=i.filter(function(){return this===t[e]});r.length&&s(!1,r)}},s(),n(a.appendScroll).on("scroll."+l+" resize."+l,u.e))}function c(t){var i=a.defaultImage,o=a.placeholder,u=a.imageBase,l=a.srcsetAttribute,f=a.loaderAttribute,c=a._f||{};t=n(t).filter(function(){var t=n(this),r=m(this);return!t.data(a.handledName)&&(t.attr(a.attribute)||t.attr(l)||t.attr(f)||c[r]!==e)}).data("plugin_"+a.name,r);for(var s=0,d=t.length;s<d;s++){var A=n(t[s]),g=m(t[s]),h=A.attr(a.imageBaseAttribute)||u;g===N&&h&&A.attr(l)&&A.attr(l,b(A.attr(l),h)),c[g]===e||A.attr(f)||A.attr(f,c[g]),g===N&&i&&!A.attr(E)?A.attr(E,i):g===N||!o||A.css(O)&&"none"!==A.css(O)||A.css(O,"url('"+o+"')")}return t}function s(t,e){if(!i.length)return void(a.autoDestroy&&r.destroy());for(var o=e||i,u=!1,l=a.imageBase||"",f=a.srcsetAttribute,c=a.handledName,s=0;s<o.length;s++)if(t||e||A(o[s])){var g=n(o[s]),h=m(o[s]),b=g.attr(a.attribute),v=g.attr(a.imageBaseAttribute)||l,p=g.attr(a.loaderAttribute);g.data(c)||a.visibleOnly&&!g.is(":visible")||!((b||g.attr(f))&&(h===N&&(v+b!==g.attr(E)||g.attr(f)!==g.attr(F))||h!==N&&v+b!==g.css(O))||p)||(u=!0,g.data(c,!0),d(g,h,v,p))}u&&(i=n(i).filter(function(){return!n(this).data(c)}))}function d(t,e,r,i){++z;var o=function(){y("onError",t),p(),o=n.noop};y("beforeLoad",t);var u=a.attribute,l=a.srcsetAttribute,f=a.sizesAttribute,c=a.retinaAttribute,s=a.removeAttribute,d=a.loadedName,A=t.attr(c);if(i){var g=function(){s&&t.removeAttr(a.loaderAttribute),t.data(d,!0),y(T,t),setTimeout(p,1),g=n.noop};t.off(I).one(I,o).one(D,g),y(i,t,function(e){e?(t.off(D),g()):(t.off(I),o())})||t.trigger(I)}else{var h=n(new Image);h.one(I,o).one(D,function(){t.hide(),e===N?t.attr(C,h.attr(C)).attr(F,h.attr(F)).attr(E,h.attr(E)):t.css(O,"url('"+h.attr(E)+"')"),t[a.effect](a.effectTime),s&&(t.removeAttr(u+" "+l+" "+c+" "+a.imageBaseAttribute),f!==C&&t.removeAttr(f)),t.data(d,!0),y(T,t),h.remove(),p()});var m=(L&&A?A:t.attr(u))||"";h.attr(C,t.attr(f)).attr(F,t.attr(l)).attr(E,m?r+m:null),h.complete&&h.trigger(D)}}function A(t){var e=t.getBoundingClientRect(),r=a.scrollDirection,n=a.threshold,i=h()+n>e.top&&-n<e.bottom,o=g()+n>e.left&&-n<e.right;return"vertical"===r?i:"horizontal"===r?o:i&&o}function g(){return w>=0?w:w=n(t).width()}function h(){return B>=0?B:B=n(t).height()}function m(t){return t.tagName.toLowerCase()}function b(t,e){if(e){var r=t.split(",");t="";for(var a=0,n=r.length;a<n;a++)t+=e+r[a].trim()+(a!==n-1?",":"")}return t}function v(t,e){var n,i=0;return function(o,u){function l(){i=+new Date,e.call(r,o)}var f=+new Date-i;n&&clearTimeout(n),f>t||!a.enableThrottle||u?l():n=setTimeout(l,t-f)}}function p(){--z,i.length||z||y("onFinishedAll")}function y(t,e,n){return!!(t=a[t])&&(t.apply(r,[].slice.call(arguments,1)),!0)}var z=0,w=-1,B=-1,L=!1,T="afterLoad",D="load",I="error",N="img",E="src",F="srcset",C="sizes",O="background-image";"event"===a.bind||o?f():n(t).on(D+"."+l,f)}function a(a,o){var u=this,l=n.extend({},u.config,o),f={},c=l.name+"-"+ ++i;return u.config=function(t,r){return r===e?l[t]:(l[t]=r,u)},u.addItems=function(t){return f.a&&f.a("string"===n.type(t)?n(t):t),u},u.getItems=function(){return f.g?f.g():{}},u.update=function(t){return f.e&&f.e({},!t),u},u.force=function(t){return f.f&&f.f("string"===n.type(t)?n(t):t),u},u.loadAll=function(){return f.e&&f.e({all:!0},!0),u},u.destroy=function(){return n(l.appendScroll).off("."+c,f.e),n(t).off("."+c),f={},e},r(u,l,a,f,c),l.chainable?a:u}var n=t.jQuery||t.Zepto,i=0,o=!1;n.fn.Lazy=n.fn.lazy=function(t){return new a(this,t)},n.Lazy=n.lazy=function(t,r,i){if(n.isFunction(r)&&(i=r,r=[]),n.isFunction(i)){t=n.isArray(t)?t:[t],r=n.isArray(r)?r:[r];for(var o=a.prototype.config,u=o._f||(o._f={}),l=0,f=t.length;l<f;l++)(o[t[l]]===e||n.isFunction(o[t[l]]))&&(o[t[l]]=i);for(var c=0,s=r.length;c<s;c++)u[r[c]]=t[0]}},a.prototype.config={name:"lazy",chainable:!0,autoDestroy:!0,bind:"load",threshold:500,visibleOnly:!1,appendScroll:t,scrollDirection:"both",imageBase:null,defaultImage:"data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==",placeholder:null,delay:-1,combined:!1,attribute:"data-src",srcsetAttribute:"data-srcset",sizesAttribute:"data-sizes",retinaAttribute:"data-retina",loaderAttribute:"data-loader",imageBaseAttribute:"data-imagebase",removeAttribute:!0,handledName:"handled",loadedName:"loaded",effect:"show",effectTime:0,enableThrottle:!0,throttle:250,beforeLoad:e,afterLoad:e,onError:e,onFinishedAll:e},n(t).on("load",function(){o=!0})}(window);
</script>
<script>
    $(function() {
        $('.lazy').lazy();
    });
</script>
<script src="<?php bloginfo("template_directory"); ?>/themes/default/assets/js/bootstrap.min.js" ></script>

<script src="<?php bloginfo("template_directory"); ?>/assets/vendor/toastr/toastr.min.js" ></script>
<script src="<?php bloginfo("template_directory"); ?>/assets/vendor/sweetalert2/sweetalert2.min.js" ></script>
<script src="<?php bloginfo("template_directory"); ?>/assets/vendor/ajaxform/jquery.form.min.js" ></script>

<script defer>
    (function(){var a,b,c,d,e,f=function(a,b){return function(){return a.apply(b,arguments)}},g=[].indexOf||function(a){for(var b=0,c=this.length;c>b;b++)if(b in this&&this[b]===a)return b;return-1};b=function(){function a(){}return a.prototype.extend=function(a,b){var c,d;for(c in b)d=b[c],null==a[c]&&(a[c]=d);return a},a.prototype.isMobile=function(a){return/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(a)},a.prototype.createEvent=function(a,b,c,d){var e;return null==b&&(b=!1),null==c&&(c=!1),null==d&&(d=null),null!=document.createEvent?(e=document.createEvent("CustomEvent"),e.initCustomEvent(a,b,c,d)):null!=document.createEventObject?(e=document.createEventObject(),e.eventType=a):e.eventName=a,e},a.prototype.emitEvent=function(a,b){return null!=a.dispatchEvent?a.dispatchEvent(b):b in(null!=a)?a[b]():"on"+b in(null!=a)?a["on"+b]():void 0},a.prototype.addEvent=function(a,b,c){return null!=a.addEventListener?a.addEventListener(b,c,!1):null!=a.attachEvent?a.attachEvent("on"+b,c):a[b]=c},a.prototype.removeEvent=function(a,b,c){return null!=a.removeEventListener?a.removeEventListener(b,c,!1):null!=a.detachEvent?a.detachEvent("on"+b,c):delete a[b]},a.prototype.innerHeight=function(){return"innerHeight"in window?window.innerHeight:document.documentElement.clientHeight},a}(),c=this.WeakMap||this.MozWeakMap||(c=function(){function a(){this.keys=[],this.values=[]}return a.prototype.get=function(a){var b,c,d,e,f;for(f=this.keys,b=d=0,e=f.length;e>d;b=++d)if(c=f[b],c===a)return this.values[b]},a.prototype.set=function(a,b){var c,d,e,f,g;for(g=this.keys,c=e=0,f=g.length;f>e;c=++e)if(d=g[c],d===a)return void(this.values[c]=b);return this.keys.push(a),this.values.push(b)},a}()),a=this.MutationObserver||this.WebkitMutationObserver||this.MozMutationObserver||(a=function(){function a(){"undefined"!=typeof console&&null!==console&&console.warn("MutationObserver is not supported by your browser."),"undefined"!=typeof console&&null!==console&&console.warn("WOW.js cannot detect dom mutations, please call .sync() after loading new content.")}return a.notSupported=!0,a.prototype.observe=function(){},a}()),d=this.getComputedStyle||function(a,b){return this.getPropertyValue=function(b){var c;return"float"===b&&(b="styleFloat"),e.test(b)&&b.replace(e,function(a,b){return b.toUpperCase()}),(null!=(c=a.currentStyle)?c[b]:void 0)||null},this},e=/(\-([a-z]){1})/g,this.WOW=function(){function e(a){null==a&&(a={}),this.scrollCallback=f(this.scrollCallback,this),this.scrollHandler=f(this.scrollHandler,this),this.resetAnimation=f(this.resetAnimation,this),this.start=f(this.start,this),this.scrolled=!0,this.config=this.util().extend(a,this.defaults),null!=a.scrollContainer&&(this.config.scrollContainer=document.querySelector(a.scrollContainer)),this.animationNameCache=new c,this.wowEvent=this.util().createEvent(this.config.boxClass)}return e.prototype.defaults={boxClass:"wow",animateClass:"animated",offset:0,mobile:!0,live:!0,callback:null,scrollContainer:null},e.prototype.init=function(){var a;return this.element=window.document.documentElement,"interactive"===(a=document.readyState)||"complete"===a?this.start():this.util().addEvent(document,"DOMContentLoaded",this.start),this.finished=[]},e.prototype.start=function(){var b,c,d,e;if(this.stopped=!1,this.boxes=function(){var a,c,d,e;for(d=this.element.querySelectorAll("."+this.config.boxClass),e=[],a=0,c=d.length;c>a;a++)b=d[a],e.push(b);return e}.call(this),this.all=function(){var a,c,d,e;for(d=this.boxes,e=[],a=0,c=d.length;c>a;a++)b=d[a],e.push(b);return e}.call(this),this.boxes.length)if(this.disabled())this.resetStyle();else for(e=this.boxes,c=0,d=e.length;d>c;c++)b=e[c],this.applyStyle(b,!0);return this.disabled()||(this.util().addEvent(this.config.scrollContainer||window,"scroll",this.scrollHandler),this.util().addEvent(window,"resize",this.scrollHandler),this.interval=setInterval(this.scrollCallback,50)),this.config.live?new a(function(a){return function(b){var c,d,e,f,g;for(g=[],c=0,d=b.length;d>c;c++)f=b[c],g.push(function(){var a,b,c,d;for(c=f.addedNodes||[],d=[],a=0,b=c.length;b>a;a++)e=c[a],d.push(this.doSync(e));return d}.call(a));return g}}(this)).observe(document.body,{childList:!0,subtree:!0}):void 0},e.prototype.stop=function(){return this.stopped=!0,this.util().removeEvent(this.config.scrollContainer||window,"scroll",this.scrollHandler),this.util().removeEvent(window,"resize",this.scrollHandler),null!=this.interval?clearInterval(this.interval):void 0},e.prototype.sync=function(b){return a.notSupported?this.doSync(this.element):void 0},e.prototype.doSync=function(a){var b,c,d,e,f;if(null==a&&(a=this.element),1===a.nodeType){for(a=a.parentNode||a,e=a.querySelectorAll("."+this.config.boxClass),f=[],c=0,d=e.length;d>c;c++)b=e[c],g.call(this.all,b)<0?(this.boxes.push(b),this.all.push(b),this.stopped||this.disabled()?this.resetStyle():this.applyStyle(b,!0),f.push(this.scrolled=!0)):f.push(void 0);return f}},e.prototype.show=function(a){return this.applyStyle(a),a.className=a.className+" "+this.config.animateClass,null!=this.config.callback&&this.config.callback(a),this.util().emitEvent(a,this.wowEvent),this.util().addEvent(a,"animationend",this.resetAnimation),this.util().addEvent(a,"oanimationend",this.resetAnimation),this.util().addEvent(a,"webkitAnimationEnd",this.resetAnimation),this.util().addEvent(a,"MSAnimationEnd",this.resetAnimation),a},e.prototype.applyStyle=function(a,b){var c,d,e;return d=a.getAttribute("data-wow-duration"),c=a.getAttribute("data-wow-delay"),e=a.getAttribute("data-wow-iteration"),this.animate(function(f){return function(){return f.customStyle(a,b,d,c,e)}}(this))},e.prototype.animate=function(){return"requestAnimationFrame"in window?function(a){return window.requestAnimationFrame(a)}:function(a){return a()}}(),e.prototype.resetStyle=function(){var a,b,c,d,e;for(d=this.boxes,e=[],b=0,c=d.length;c>b;b++)a=d[b],e.push(a.style.visibility="visible");return e},e.prototype.resetAnimation=function(a){var b;return a.type.toLowerCase().indexOf("animationend")>=0?(b=a.target||a.srcElement,b.className=b.className.replace(this.config.animateClass,"").trim()):void 0},e.prototype.customStyle=function(a,b,c,d,e){return b&&this.cacheAnimationName(a),a.style.visibility=b?"hidden":"visible",c&&this.vendorSet(a.style,{animationDuration:c}),d&&this.vendorSet(a.style,{animationDelay:d}),e&&this.vendorSet(a.style,{animationIterationCount:e}),this.vendorSet(a.style,{animationName:b?"none":this.cachedAnimationName(a)}),a},e.prototype.vendors=["moz","webkit"],e.prototype.vendorSet=function(a,b){var c,d,e,f;d=[];for(c in b)e=b[c],a[""+c]=e,d.push(function(){var b,d,g,h;for(g=this.vendors,h=[],b=0,d=g.length;d>b;b++)f=g[b],h.push(a[""+f+c.charAt(0).toUpperCase()+c.substr(1)]=e);return h}.call(this));return d},e.prototype.vendorCSS=function(a,b){var c,e,f,g,h,i;for(h=d(a),g=h.getPropertyCSSValue(b),f=this.vendors,c=0,e=f.length;e>c;c++)i=f[c],g=g||h.getPropertyCSSValue("-"+i+"-"+b);return g},e.prototype.animationName=function(a){var b;try{b=this.vendorCSS(a,"animation-name").cssText}catch(c){b=d(a).getPropertyValue("animation-name")}return"none"===b?"":b},e.prototype.cacheAnimationName=function(a){return this.animationNameCache.set(a,this.animationName(a))},e.prototype.cachedAnimationName=function(a){return this.animationNameCache.get(a)},e.prototype.scrollHandler=function(){return this.scrolled=!0},e.prototype.scrollCallback=function(){var a;return!this.scrolled||(this.scrolled=!1,this.boxes=function(){var b,c,d,e;for(d=this.boxes,e=[],b=0,c=d.length;c>b;b++)a=d[b],a&&(this.isVisible(a)?this.show(a):e.push(a));return e}.call(this),this.boxes.length||this.config.live)?void 0:this.stop()},e.prototype.offsetTop=function(a){for(var b;void 0===a.offsetTop;)a=a.parentNode;for(b=a.offsetTop;a=a.offsetParent;)b+=a.offsetTop;return b},e.prototype.isVisible=function(a){var b,c,d,e,f;return c=a.getAttribute("data-wow-offset")||this.config.offset,f=this.config.scrollContainer&&this.config.scrollContainer.scrollTop||window.pageYOffset,e=f+Math.min(this.element.clientHeight,this.util().innerHeight())-c,d=this.offsetTop(a),b=d+a.clientHeight,e>=d&&b>=f},e.prototype.util=function(){return null!=this._util?this._util:this._util=new b},e.prototype.disabled=function(){return!this.config.mobile&&this.util().isMobile(navigator.userAgent)},e}()}).call(this);
</script>
<script src="<?php bloginfo("template_directory"); ?>/themes/default/assets/js/slick.min.js" ></script>

<script src="<?php bloginfo("template_directory"); ?>/themes/default/assets/fancybox/jquery.fancybox.pack.js" ></script>
<script src="<?php bloginfo("template_directory"); ?>/themes/default/assets/fancybox/helpers/jquery.fancybox-thumbs.js" ></script>
<script defer>
    var script=function(){var e=$(window),a=($("html"),$("body")),t=function(){var t=$(""),i=t.find(".nav-ct"),n=t.find(".nav-top"),s=$(".nav-open"),o=$(".nav-close");n.append($("nav.navbarmain-primary").clone()),$(".navbar-super-logo").append($(".logo-wrap .logo").clone()),i.append($(".header-contact-top").clone()),i.append($(".main-nav").clone()),i.append($(".social-link").clone()),s.click(function(i){i.preventDefault(),e.width()<991&&(t.addClass("act"),a.addClass("stage-open"))}),o.click(function(i){i.preventDefault(),e.width()<991&&(t.removeClass("act"),a.removeClass("stage-open"))});var l=$(".sb-nav"),r=(n=l.find(".nav-ct"),$(".sb-open")),c=$(".sb-close");r.click(function(a){a.preventDefault(),e.width()<1200&&l.addClass("act")}),c.click(function(a){a.preventDefault(),e.width()<1200&&l.removeClass("act")}),e.click(function(e){0!=t.has(e.target).length||t.is(e.target)||0!=s.has(e.target).length||s.is(e.target)||(t.removeClass("act"),a.removeClass("stage-open")),0!=l.has(e.target).length||l.is(e.target)||0!=r.has(e.target).length||r.is(e.target)||l.removeClass("act")}),nav=t.find(".main-nav"),nav.find("ul li").each(function(){$(this).find("ul>li").length>0&&$(this).prepend('<i class="nav-drop"></i>')}),$(".navsub-primary-menu").find("ul>li").each(function(){$(this).find("ul>li").length>0&&$(this).prepend('<i class="nav-drop"></i>')}),$(".nav-drop").click(function(){var e=$(this).nextAll("ul");!0===e.is(":hidden")?(e.parent("li").parent().children().children(".groupmenu-drop").slideUp(200),e.parent("li").parent().children().children(".nav-drop").removeClass("act"),$(this).addClass("act"),e.slideDown(200)):(e.slideUp(200),$(this).removeClass("act"))})},i=function(){$(".drop").each(function(){var a=$(this),t=a.children("a"),i=a.children("ul"),n=i.children("li").children("a");a.click(function(){i.slideToggle(150)}),n.click(function(e){e.preventDefault(),t.html($(this).html())}),e.click(function(e){0!=a.has(e.target).length||a.is(e.target)||a.children("ul").slideUp(150)})})},n=function(){var a=$(".back-to-top");e.scrollTop()>600&&a.fadeIn(),a.click(function(){return $("html, body").animate({scrollTop:0},800),!1}),e.scroll(function(){e.scrollTop()>600?a.fadeIn():a.fadeOut()})},s=function(){$("[data-show]").each(function(){var e=$(this),a=$(e.attr("data-show"));e.click(function(e){e.preventDefault(),a.slideToggle(200)})}),e.click(function(e){$("[data-show]").each(function(){var a=$(this),t=$(a.attr("data-show"));0!=t.has(e.target).length||t.is(e.target)||0!=a.has(e.target).length||a.is(e.target)||t.slideUp(200)})})};function o(e){e.each(function(){var e=$(this),a=e.data("animation");e.addClass(a).one("webkitAnimationEnd animationend",function(){e.removeClass(a)})})}var l=function(){$(".slider-cas").slick({autoplay:!1,autoplaySpeed:3e3,arrows:!1,dots:!0}),$(".partner-cas").slick({slidesToShow:8,autoplay:!0,autoplaySpeed:1500,arrows:!1,responsive:[{breakpoint:1199,settings:{slidesToShow:7}},{breakpoint:420,settings:{slidesToShow:3}}]}),$(".blog-cas").slick({slidesToShow:3,autoplay:!1,autoplaySpeed:1500,arrows:!0,responsive:[{breakpoint:767,settings:{slidesToShow:2}},{breakpoint:420,settings:{slidesToShow:1}}]}),o($(".slider-cas .slick-current [data-animation ^= 'animated']")),$(".slider-cas").on("beforeChange",function(e,a,t,i){t!=i&&o($(this).find(".slick-slide").find("[data-animation ^= 'animated']"))})},r=function(){$(".reviews-slide").slick({slidesToShow:3,nextArrow:'<div class="next"><span class="icon-next"></span> </div>',prevArrow:'<div class="prev"><span class="icon-prev"></span> </div>',arrows:!0,dots:!1,autoplay:!0,autoplaySpeed:3e3,infinite:!0,responsive:[{breakpoint:1199,settings:{slidesToShow:3}},{breakpoint:991,settings:{slidesToShow:2}},{breakpoint:700,settings:{slidesToShow:2}},{breakpoint:480,settings:{slidesToShow:1}}]}),$(".service-slide").slick({slidesToShow:3,slidesToScroll:3,swipeToSlide:!0,autoplay:!1,autoplaySpeed:4e3,dots:!0,responsive:[{breakpoint:1199,settings:{slidesToShow:3}},{breakpoint:991,settings:{slidesToShow:3}},{breakpoint:700,settings:{slidesToShow:2}},{breakpoint:480,settings:{slidesToShow:1}}]}),$(".pediatricians-slide").slick({slidesToShow:1,slidesToScroll:1,swipeToSlide:!0,autoplay:!1,autoplaySpeed:4e3,dots:!0})},c=function(){var t=$("header").innerHeight();$(".header-bottom").innerHeight();e.width()>991?e.scrollTop()>t&&($("header").addClass("fixed"),a.css("margin-top",t)):e.scrollTop()>0&&($("header").addClass("fixed"),a.css("margin-top",t)),e.scroll(function(i){e.width()>991?e.scrollTop()>t?($("header").addClass("fixed"),a.css("margin-top",t)):($("header").removeClass("fixed"),a.css("margin-top","")):e.scrollTop()>0?($("header").addClass("fixed"),a.css("margin-top",t)):($("header").removeClass("fixed"),a.css("margin-top",""))})},d=function(){},p=function(){function a(){e.width()<767?$(".price td").attr("colspan",2):$(".price td").removeAttr("colspan")}a(),window.onresize=function(){a()},$("article ul").on("click","li",function(){var e=$(this).index()+2;$("article tr").find("td:not(:eq(0))").hide(),$("article td:nth-child("+e+")").css("display","table-cell"),$("article tr").find("th:not(:eq(0))").hide(),$("article li").removeClass("active"),$(this).addClass("active")});var t=window.matchMedia("(min-width: 768px)");function i(e){e.matches?$(".sep").attr("colspan",4):$(".sep").attr("colspan",2)}t.addListener(i),i(t)};return{uiInit:function(e){switch(e){case"mMenu":t();break;case"backToTop":n();break;case"uiSlider":l();break;case"uiSlick":r();break;case"uiClickShow":s();break;case"uiScroll":c();break;case"uiDrop":i();break;case"calendar":d();break;case"tabbelprice":p();break;default:t(),n(),l(),r(),s(),c(),i(),d(),p()}}}}();jQuery(function(e){new WOW({offset:50,mobile:!1}).init(),script.uiInit(),e(".yt-box .play").click(function(a){var t=e(this).closest(".yt-box").attr("data-id");e(this).closest(".yt-box iframe").remove(),e(this).closest(".yt-box").append('<iframe src="https://www.youtube.com/embed/'+t+'?rel=0&amp;autoplay=1&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>')}),e(window).width()>991&&e(".fanpage").innerWidth()>500&&e(".fb-page").css({"-webkit-transform":"scale("+e(".fanpage").innerWidth()/500+")",transform:"scale("+e(".fanpage").innerWidth()/500+")"}),e(".t-gallery:not(.slick-cloned) a").fancybox({prevEffect:"fade",nextEffect:"fade",transitionIn:"fade",transitionOut:"fade",speedIn:600,speedOut:200,overlayShow:!1,autoScale:!0,helpers:{thumbs:{width:50,height:50}}}),e(".action.search").click(function(){e(".action-control-search").toggleClass("active")})});
</script>
<script defer>
    !function(t){"use strict";"function"==typeof define&&define.amd?define(["jquery"],t):"undefined"!=typeof module&&module.exports?module.exports=t(require("jquery")):t(jQuery)}(function(t){var e=-1,o=-1,a=function(t){return parseFloat(t)||0},n=function(e){var o=t(e),n=null,i=[];return o.each(function(){var e=t(this),o=e.offset().top-a(e.css("margin-top")),r=i.length>0?i[i.length-1]:null;null===r?i.push(e):Math.floor(Math.abs(n-o))<=1?i[i.length-1]=r.add(e):i.push(e),n=o}),i},i=function(e){var o={byRow:!0,property:"height",target:null,remove:!1};return"object"==typeof e?t.extend(o,e):("boolean"==typeof e?o.byRow=e:"remove"===e&&(o.remove=!0),o)},r=t.fn.matchHeight=function(e){var o=i(e);if(o.remove){var a=this;return this.css(o.property,""),t.each(r._groups,function(t,e){e.elements=e.elements.not(a)}),this}return this.length<=1&&!o.target?this:(r._groups.push({elements:this,options:o}),r._apply(this,o),this)};r.version="master",r._groups=[],r._throttle=80,r._maintainScroll=!1,r._beforeUpdate=null,r._afterUpdate=null,r._rows=n,r._parse=a,r._parseOptions=i,r._apply=function(e,o){var s=i(o),h=t(e),l=[h],c=t(window).scrollTop(),p=t("html").outerHeight(!0),u=h.parents().filter(":hidden");return u.each(function(){var e=t(this);e.data("style-cache",e.attr("style"))}),u.css("display","block"),s.byRow&&!s.target&&(h.each(function(){var e=t(this),o=e.css("display");"inline-block"!==o&&"flex"!==o&&"inline-flex"!==o&&(o="block"),e.data("style-cache",e.attr("style")),e.css({display:o,"padding-top":"0","padding-bottom":"0","margin-top":"0","margin-bottom":"0","border-top-width":"0","border-bottom-width":"0",height:"100px",overflow:"hidden"})}),l=n(h),h.each(function(){var e=t(this);e.attr("style",e.data("style-cache")||"")})),t.each(l,function(e,o){var n=t(o),i=0;if(s.target)i=s.target.outerHeight(!1);else{if(s.byRow&&n.length<=1)return void n.css(s.property,"");n.each(function(){var e=t(this),o=e.attr("style"),a=e.css("display");"inline-block"!==a&&"flex"!==a&&"inline-flex"!==a&&(a="block");var n={display:a};n[s.property]="",e.css(n),e.outerHeight(!1)>i&&(i=e.outerHeight(!1)),o?e.attr("style",o):e.css("display","")})}n.each(function(){var e=t(this),o=0;s.target&&e.is(s.target)||("border-box"!==e.css("box-sizing")&&(o+=a(e.css("border-top-width"))+a(e.css("border-bottom-width")),o+=a(e.css("padding-top"))+a(e.css("padding-bottom"))),e.css(s.property,i-o+"px"))})}),u.each(function(){var e=t(this);e.attr("style",e.data("style-cache")||null)}),r._maintainScroll&&t(window).scrollTop(c/p*t("html").outerHeight(!0)),this},r._applyDataApi=function(){var e={};t("[data-match-height], [data-mh]").each(function(){var o=t(this),a=o.attr("data-mh")||o.attr("data-match-height");e[a]=a in e?e[a].add(o):o}),t.each(e,function(){this.matchHeight(!0)})};var s=function(e){r._beforeUpdate&&r._beforeUpdate(e,r._groups),t.each(r._groups,function(){r._apply(this.elements,this.options)}),r._afterUpdate&&r._afterUpdate(e,r._groups)};r._update=function(a,n){if(n&&"resize"===n.type){var i=t(window).width();if(i===e)return;e=i}a?-1===o&&(o=setTimeout(function(){s(n),o=-1},r._throttle)):s(n)},t(r._applyDataApi);var h=t.fn.on?"on":"bind";t(window)[h]("load",function(t){r._update(!1,t)}),t(window)[h]("resize orientationchange",function(t){r._update(!0,t)})});
</script>
<script src="<?php bloginfo("template_directory"); ?>/themes/default/assets/js/jquery.matchheight.js" ></script>
<script src="<?php bloginfo("template_directory"); ?>/themes/default/js/script.js" ></script>
<script src="<?php bloginfo("template_directory"); ?>/themes/default/js/jscolor.js" ></script>
<script src="<?php bloginfo("template_directory"); ?>/themes/default/js/hosco.js" ></script>
<script src="<?php bloginfo("template_directory"); ?>/themes/default/js/custom.js" ></script>
<script src="<?php bloginfo("template_directory"); ?>/themes/default/js/jquery.parallax.js" ></script>


<script defer>
    function update(picker, selector) {
        document.getElementById('pnks').style.background = picker.toBackground()
        document.getElementById('pnks1').style.background = picker.toBackground()
        document.getElementById('pnks2').style.background = picker.toBackground()
        document.getElementById('pnks3').style.background = picker.toBackground()
        document.getElementById('pnks4').style.background = picker.toBackground()
        document.getElementById('group-qa-bg').style.background = picker.toBackground()
        document.getElementById('group-qa-bg2').style.background = picker.toBackground()
        document.getElementById('group-qa-bg3').style.background = picker.toBackground()
        document.getElementById('group-qa-bg4').style.background = picker.toBackground()
        document.getElementById('group-qa-bg5').style.background = picker.toBackground()
    }
    jscolor.trigger('input change');
</script>


<script defer>
    $(function () {
        $('#sheet-forms').bind('submit', function () {
            $.ajax({
                type: 'post',
                url: 'index.html',
                data: $('#sheet-forms').serialize(),
                success: function () {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Bạn Đã Gửi Thành Công!',
                        showConfirmButton: false,
                        timer: 1800
                    })
                }
            });
            return false;
        });
    });
</script>
<script defer>
    $(function () {
        $('#sheet-four').bind('submit', function () {
            $.ajax({
                type: 'post',
                url: 'index.html',
                data: $('#sheet-four').serialize(),
                success: function () {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Bạn Đã Gửi Thành Công!',
                        showConfirmButton: false,
                        timer: 1800
                    })
                }
            });
            return false;
        });
    });
</script>
<script defer>
  $(document).ready(function(){
      $(window).on('scroll',function(){
       var windowWidth = window.innerWidth ? window.innerWidth : $(window).width();
       if( windowWidth <= 991 ) {
        var scrollBottom = $(document).height() - $(window).height() - $(window).scrollTop();
        if(scrollBottom <= 100){
            $('.fix-toolbar').css({
                position: 'relative'
            });
        }else if(scrollBottom >= 110 ){
           $('.fix-toolbar').css({
            position: 'fixed'
        });
       }
   }
});
  });
</script>
<script defer type="text/javascript"> 	$(document).ready(function(){
jssor_1_slider_init();
});</script>
<script defer src="<?php bloginfo("template_directory"); ?>/themes/default/js/owl.carousel.js" ></script>
<script defer type="text/javascript">
 $(document).ready(function() {
  var owl = $('#slider-cutomer');
       owl.owlCarousel({
        items: 3,
        loop:true,
        margin:10,
        autoplay:true,
		lazyLoad: true,
        autoplayTimeout:6000,
        responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        768:{
			items:2
		},
        992:{
            items:3,
            loop:true
        }
    }
        
    });
  $(".slider-product").owlCarousel({
		center:true,
        pagination:true,
	  loop:true,
        items:3,
        autoplay:true,
        autoplayTimeout:6000,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
				
            },
            
            768:{
                items:1
            },
			992:{
				items:3
			}
            
        }


});
  $("#owl-demo").owlCarousel({
	  center:true,
          slideSpeed : 300,
          paginationSpeed : 400,
            items:1,
	      dots:false
	  
  });
});
</script>
<script defer type="text/javascript">
  $(".show-swap ul li").click(function(){
      $(".show-swap ul li").removeClass("active");
      $(this).addClass("active");
  });
</script>
<script defer>
    function openNav() {
      document.getElementById("myNav").style.width = "100%";
  }

  function closeNav() {
      document.getElementById("myNav").style.width = "0%";
  }
  $('.sub-menu ul').hide();
  $(".sub-menu a").click(function () {
      $(this).parent(".sub-menu").children("ul").slideToggle("100");
      $(this).find(".right").toggleClass("fa-caret-up fa-caret-down");
  });
</script>
<script defer type="text/javascript">
    jQuery(function($){
      $('.tab').click(function(){
        $('.is-active').removeClass('is-active');
        $(this).addClass('is-active');
        $('.is-show').removeClass('is-show');
        const index = $(this).index();
        $('.panel').eq(index).addClass('is-show');
    });
  });
</script>
<script defer type="text/javascript">
    $(document).ready(function() {
        $('.colors').hide(); //hide
        $('.1').show(); //set default class to be shown here, or remove to hide all
    });
    $('#colorselector').change(function(){
        $('.colors').hide();
        $('#' + $(this).val()).show();
    });
</script>
<script defer type="text/javascript">
 let tab1 = document.querySelector("#tab1");
 let tab2 = document.querySelector("#tab2");
 let tabs = document.querySelectorAll(".tab-hosco");
 let content = document.querySelectorAll(".contentlienhe");

 tab1.onclick = () => {
  if (tab1.checked) {
    content[0].style.display = "block";
    content[1].style.display = "none";
    tabs[0].classList.add("c-active");
    tabs[1].classList.remove("c-active");
}
};

tab2.onclick = () => {
  if (tab2.checked) {
    content[0].style.display = "none";
    content[1].style.display = "block";
    tabs[1].classList.add("c-active");
    tabs[0].classList.remove("c-active");
}
};
</script>
<script defer type="text/javascript">
    jQuery(function($){
      $('.menuTab ').click(function(){
        // $('.is-active').removeClass('is-active');
        // $(this).addClass('is-active');
        if($(this).hasClass('is-active')){
            $(this).removeClass('is-active');
        }else{
            $('.menuTab').removeClass('is-active');
            $(this).addClass('is-active');
        }
    });
		$('.name_title_mobile').click(function(){
        if ($(this).hasClass('active-hst')) {
            $(this).removeClass('active-hst');
        }else{
            $('.name_title_mobile').removeClass('active-hst');
            $(this).addClass('active-hst');
        }
    });
      
  });
</script>
<script defer type="text/javascript">
    $(function() {
    var header = $(".menuTab");
    var mnfixed =$("mnfixed_self");
  
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
        if (scroll >= 50) {
            header.addClass("fixed");
            
        } else {
            header.removeClass("fixed");
             
        }
    });
  
});
</script>
<script defer type="text/javascript">
     $('.panel-collapse').on('show.bs.collapse', function () {
    $(this).siblings('.panel-heading').addClass('active');
  });

  $('.panel-collapse').on('hide.bs.collapse', function () {
    $(this).siblings('.panel-heading').removeClass('active');
  });
</script>
<script defer type="text/javascript">
    $('.share-button-main').on('click', function() {
  $(this).toggleClass('rotate');
  $('.share-buttons').toggleClass('open');
});
</script>
<script defer type="text/javascript">
    $(window).scroll(function() {
  if ($(window).scrollTop() > 400) {
    $(".menuTab").css({
      'position': 'fixed',
      'top': '0px',
      'width': '100%',
      'background':'#fff',
      'z-index':'5',
      'transition':'.3s',
      'margin-top':'58px'
    });
  } else {
    $(".menuTab").css({
      'position': 'relative',
    })
  }
});
	
</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/616ce77f86aee40a57370bde/1fi8mgjhf';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<?php wp_footer(); ?>
</body>
</html>
