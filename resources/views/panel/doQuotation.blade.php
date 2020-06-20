@extends('layouts.adminPanelTemplate')
@section('content')
    <div id="main">
        <div class="row">
            <div class="pt-1 pb-0" id="breadcrumbs-wrapper">
                <!-- Search for small screen-->
                <div class="container">
                    <div class="row">
                        <div class="col s12 m6 l6">
                            <h5 class="breadcrumbs-title"><span>فرو رفتگی</span></h5>
                        </div>
                        <div class="col s12 m6 l6 right-align-md">
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="index-2.html">خانه</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">رابط کاربری پیشرفته</a>
                                </li>
                                <li class="breadcrumb-item active">فرو رفتگی
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12">
                <div class="container">
                    <div class="section">
                        <div class="card">
                            <div class="card-content">
                                <p class="caption">
                                    فرو می ریزد عناصر آکاردئونی هستند که با کلیک بر روی آنها گسترش می یابند. آنها به شما امکان می دهند محتوایی را که بلافاصله مربوط به کاربر نیست ، مخفی کنید </p>
                            </div>
                        </div>
                        <!--Accordion-->
                        <div class="row">
                            <div class="col s12">
                                <ul class="collapsible collapsible-accordion">
                                    <li>
                                        <div class="collapsible-header"><i class="material-icons">mic_none</i> سرصفحه اول</div>
                                        <div class="collapsible-body">
                                            <p>
                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می
                                                باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی
                                                ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی
                                                اساسا مورد استفاده قرار گیرد.
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="collapsible-header"><i class="material-icons">cloud_queue</i> سرصفحه دوم</div>
                                        <div class="collapsible-body">
                                            <p>
                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می
                                                باشد.
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="collapsible-header"><i class="material-icons">adjust</i> سرصفحه سوم</div>
                                        <div class="collapsible-body">
                                            <p>
                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می
                                                باشد.
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="popout" class="row">
                            <div class="col s12">
                                <h4 class="header">جمع (popout)</h4>
                                <p>برای ایجاد یک popout قابل جمع شدن ، فقط کلاس را اضافه کنید </p>
                            </div>
                            <div class="col s12">
                                <ul class="collapsible popout">
                                    <li class="active">
                                        <div class="collapsible-header" tabindex="0"><i class="material-icons">filter_drama</i>اول</div>
                                        <div class="collapsible-body" style="display: block;">
                                            <span>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</span>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div class="collapsible-header" tabindex="0"><i class="material-icons">place</i>دوم</div>
                                        <div class="collapsible-body">
                                            <span>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</span>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div class="collapsible-header" tabindex="0"><i class="material-icons">whatshot</i>سوم</div>
                                        <div class="collapsible-body">
                                            <span>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</span>
                                        </div>
                                    </li>
                                </ul>
                                <pre><code class="language-markup">
  &lt;ul class="collapsible popout">
      </code></pre>
                            </div>
                        </div>
                        <div id="structure" class="section scrollspy card card-tabs">
                            <div class="card-content">
                                <div class="card-title">
                                    <div class="row">
                                        <div class="col s12 m6 l6">
                                            <h4 class="card-title">ساختار</h4>
                                        </div>
                                        <div class="col s12 m6 l6">
                                            <ul class="tabs">
                                                <li class="tab col s6 p-0"><a class="p-0" href="#html-collapsible">Html</a></li>
                                                <li class="tab col s6 p-0"><a class="p-0" href="#js-collapsible">JS</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div id="html-collapsible">
                                    <pre><code class="language-markup">
&lt;ul class="collapsible">
   &lt;li>
   &lt;div class="collapsible-header">&lt;i class="material-icons">filter_drama&lt;/i>First&lt;/div>
   &lt;div class="collapsible-body">&lt;span>Lorem ipsum dolor sit amet.&lt;/span>&lt;/div>
   &lt;/li>
   &lt;li>
   &lt;div class="collapsible-header">&lt;i class="material-icons">place&lt;/i>Second&lt;/div>
   &lt;div class="collapsible-body">&lt;span>Lorem ipsum dolor sit amet.&lt;/span>&lt;/div>
   &lt;/li>
   &lt;li>
   &lt;div class="collapsible-header">&lt;i class="material-icons">whatshot&lt;/i>Third&lt;/div>
   &lt;div class="collapsible-body">&lt;span>Lorem ipsum dolor sit amet.&lt;/span>&lt;/div>
   &lt;/li>
&lt;/ul>
          </code></pre>
                                </div>
                                <div id="js-collapsible">
                                    <h4 class="header">مقداردهی اولیه</h4>
                                    <span>عناصر فرورفته فقط در صورت اضافه شدن به پویا اولیه نیاز دارند همچنین میتوانید وارد گزینه های اولیه داخل شوید با این حال میتواند در نشانه گذاری اچ تی ام ال نیز انجام شود</span>
                                    <pre><code class="language-javascript">
        $(document).ready(function(){
          $('.collapsible').collapsible({
            accordion:true
          });
        });
      </code></pre>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <h4 class="header">بخش ارائه شده است</h4>
                                <p>
                                    اگر می خواهید با یک بخش از پیش آماده شده کامپوزیت کنید ، فقط آن را اضافه کنید
                                    <code class=" language-markup">active</code>کلاس به سمت دروغ جمع شونده
                                </p>
                            </div>
                            <div class="col s12">
                                <ul class="collapsible collapsible-accordion">
                                    <li>
                                        <div class="collapsible-header"><i class="material-icons">blur_circular</i>سرصفحه اول</div>
                                        <div class="collapsible-body">
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای
                                                متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص
                                                طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی،
                                                و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                                        </div>
                                    </li>
                                    <li class="active">
                                        <div class="collapsible-header"><i class="material-icons">details</i>بخش از پیش تعیین شده</div>
                                        <div class="collapsible-body">
                                            <p>
                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می
                                                باشد.
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="collapsible-header"><i class="material-icons">filter_center_focus</i>عنوان سوم</div>
                                        <div class="collapsible-body">
                                            <p>
                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می
                                                باشد.
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                                <pre><code class="language-markup">
          &lt;li class=&quot;active&quot;&gt;
          &lt;div class=&quot;collapsible-header&quot;&gt;
            &lt;i class=&quot;material-icons&quot;&gt;details&lt;/i&gt; Preselected Section&lt;/div&gt;
            &lt;/li&gt;
      </code></pre>
                            </div>
                        </div>
                        <div id="options" class="scrollspy section">
                            <h4>گزینه ها</h4>
                            <span>شما می توانید با استفاده از این گزینه ها ، رفتار هر جمع بندی را سفارشی کنید. به عنوان مثال ، هنگام باز شدن یا بسته شدن یک بسته کوچک ، می توانید برای انجام کار تماس بگیرید. تابع عبور می کند
         <span class="language-markup">از </span>عنصری که به عنوان یک استدلال باز یا بسته شد</span>
                            <pre><code class="language-javascript">
    $('.collapsible').collapsible({
      accordion: false, // A setting that changes the collapsible behavior to expandable instead of the default accordion style
      onOpen: function(el) { alert('Open'); }, // Callback for Collapsible open
      onClose: function(el) { alert('Closed'); } // Callback for Collapsible close
    });
  </code></pre>
                        </div>
                        <div id="methods" class="scrollspy section">
                            <h4>مواد و روش ها</h4>
                            <span>با استفاده از این روشها می توانید برنامه نویسی را باز و بسته کنید. پارامتر دوم شاخص پایه 0 از پایه ای است که می خواهید آن را باز کنید</span>
                            <pre><code class="language-javascript">
    // Open
    $('.collapsible').collapsible('open', 0);
    // Close
    $('.collapsible').collapsible('close', 0);
    // Destroy
    $('.collapsible').collapsible('destroy');
  </code></pre>
                        </div>
                        <!--Accordion Options-->
                        <div class="divider"></div>
                        <div id="accordion-options">
                            <!--Accordion Options-->
                            <div class="divider"></div>
                            <div class="col s12">
                                <div>
                                    <h4 class="header">گزینه ها</h4>
                                    <p class="caption">
                                        دو راه وجود دارد که یک رفتار متلاشی کننده می تواند رفتار کند. این هم می تواند اجازه دهد چندین بخش باز بماند ، یا فقط می تواند یک بخش را در یک زمان باز بماند ، که به آن آکاردئون می گویند. در زیر نسخه نمایشی از هر نوع را مشاهده کنید </p>
                                    <div class="row">
                                        <div class="col s12">
                                            <h4 class="header">Accordion</h4>
                                            <p>
                                                این یک رفتار پیش فرض است ، اما شما می توانید با تنظیم آن صریحاً آن را تنظیم کنید <code class=" language-markup"> accordion: true</code> گزینه را همزمان با شروع فرو می ریزد در Js.
                                            </p>
                                        </div>
                                        <div class="col s12">
                                            <ul class="collapsible collapsible-accordion">
                                                <li>
                                                    <div class="collapsible-header"><i class="material-icons">pie_chart_outlined</i>سرصفحه اول
                                                    </div>
                                                    <div class="collapsible-body">
                                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز،
                                                            و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان
                                                            رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز
                                                            شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="collapsible-header"><i class="material-icons">border_all</i>سرصفحه دوم</div>
                                                    <div class="collapsible-body">
                                                        <p>
                                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می
                                                            باشد.
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="collapsible-header"><i class="material-icons">trending_up</i> سرصفحه سوم</div>
                                                    <div class="collapsible-body">
                                                        <p>
                                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می
                                                            باشد.
                                                        </p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <h4 class="header">قابل گسترش است</h4>
                                            <p>
                                                با تنظیم گزینه از گزینه های قابل ارتقا استفاده کنید <code class=" language-markup">accordion: false</code>گزینه را همزمان با شروع فرو می ریزد در Js.
                                            </p>
                                        </div>
                                        <div class="col s12">
                                            <ul class="collapsible expandable">
                                                <li>
                                                    <div class="collapsible-header"><i class="material-icons">filter_drama</i>اول</div>
                                                    <div class="collapsible-body">
                                                        <span>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد.</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="collapsible-header"><i class="material-icons">place</i>دوم</div>
                                                    <div class="collapsible-body">
                                                        <span>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد.</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="collapsible-header"><i class="material-icons">whatshot</i>سوم</div>
                                                    <div class="collapsible-body">
                                                        <span>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد.</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <!--Using Color-->
                        <div class="row">
                            <div class="col s12">
                                <div id="using-color">
                                    <h4 class="header">با استفاده از رنگ</h4>
                                    <p class="caption">
                                        این موضوع موضوعات مختلفی دارد <a href="https://pixinvent.com/" target="_blank">پالت رنگ</a> بر اساس رنگ پایه طراحی مواد ، می توانید از هر موضوع دیگری فقط برای افزودن کلاس رنگ استفاده کنید
                                    </p>
                                    <div class="row">
                                        <div class="col s12">
                                            <p>تک رنگ با آیکون ها</p>
                                        </div>
                                        <div class="col s12">
                                            <ul class="collapsible collapsible-accordion">
                                                <li>
                                                    <div class="collapsible-header light-blue light-blue-text text-lighten-5">
                                                        <i class="material-icons">swap_calls</i>سرصفحه اول
                                                    </div>
                                                    <div class="collapsible-body light-blue lighten-5">
                                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز،
                                                            و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان
                                                            رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز
                                                            شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="collapsible-header light-blue light-blue-text text-lighten-5">
                                                        <i class="material-icons">filter_list</i>سرصفحه دوم
                                                    </div>
                                                    <div class="collapsible-body light-blue lighten-5">
                                                        <p>
                                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می
                                                            باشد.
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="collapsible-header light-blue light-blue-text text-lighten-5">
                                                        <i class="material-icons">sort</i> سرصفحه سوم
                                                    </div>
                                                    <div class="collapsible-body light-blue lighten-5">
                                                        <p>
                                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می
                                                            باشد.
                                                        </p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12">
                                        <p>چندین رنگ با نمادها</p>
                                    </div>
                                    <div class="col s12">
                                        <ul class="collapsible collapsible-accordion">
                                            <li>
                                                <div class="collapsible-header purple lightrn-1 white-text">
                                                    <i class="material-icons">settings_backup_restore</i> سرصفحه اول
                                                </div>
                                                <div class="collapsible-body purple lighten-5">
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز،
                                                        و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه
                                                        ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی
                                                        دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="collapsible-header cyan white-text"><i class="material-icons">toll</i> سرصفحه دوم
                                                </div>
                                                <div class="collapsible-body cyan lighten-5 lighten-5">
                                                    <p>
                                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می
                                                        باشد.
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="collapsible-header red accent-2 white-text">
                                                    <i class="material-icons">timeline</i>سرصفحه سوم
                                                </div>
                                                <div class="collapsible-body red lighten-5">
                                                    <p>
                                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می
                                                        باشد.
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12">
                                        <p>شیب با نمادها</p>
                                    </div>
                                    <div class="col s12">
                                        <ul class="collapsible collapsible-accordion">
                                            <li>
                                                <div class="collapsible-header waves-light gradient-45deg-purple-deep-orange lightrn-1 white-text">
                                                    <i class="material-icons">settings_backup_restore</i> سرصفحه اول
                                                </div>
                                                <div class="collapsible-body purple lighten-5">
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز،
                                                        و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه
                                                        ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی
                                                        دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="collapsible-header gradient-45deg-light-blue-cyan white-text">
                                                    <i class="material-icons">toll</i>سرصفحه دوم
                                                </div>
                                                <div class="collapsible-body cyan lighten-5 lighten-5">
                                                    <p>
                                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می
                                                        باشد.
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="collapsible-header gradient-45deg-red-pink accent-2 white-text">
                                                    <i class="material-icons">timeline</i>سرصفحه سوم
                                                </div>
                                                <div class="collapsible-body red lighten-5">
                                                    <p>
                                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می
                                                        باشد.
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- START RIGHT SIDEBAR NAV -->
                    <aside id="right-sidebar-nav">
                        <div id="slide-out-right" class="slide-out-right-sidenav sidenav rightside-navigation">
                            <div class="row">
                                <div class="slide-out-right-title">
                                    <div class="col s12 border-bottom-1 pb-0 pt-1">
                                        <div class="row">
                                            <div class="col s2 pr-0 center">
                                                <i class="material-icons vertical-text-middle"><a href="#"
                                                                                                  class="sidenav-close">clear</a></i>
                                            </div>
                                            <div class="col s10 pl-0">
                                                <ul class="tabs">
                                                    <li class="tab col s4 p-0">
                                                        <a href="#messages" class="active">
                                                            <span>پیام ها</span>
                                                        </a>
                                                    </li>
                                                    <li class="tab col s4 p-0">
                                                        <a href="#settings">
                                                            <span>تنظیمات</span>
                                                        </a>
                                                    </li>
                                                    <li class="tab col s4 p-0">
                                                        <a href="#activity">
                                                            <span>فعالیت</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide-out-right-body row pl-3">
                                    <div id="messages" class="col s12 pb-0">
                                        <div class="collection border-none mb-0">
                                            <input class="header-search-input mt-4 mb-2 iransans" type="text" name="Search" placeholder="جستجوی پیام" />
                                            <ul class="collection right-sidebar-chat p-0 mb-0">
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-online avatar-50"><img
                                                            src="../../../app-assets/images/avatar/avatar-7.png"
                                                            alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">کیانو</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">ممنون
                                                        </p>
                                                    </div>
                                                    <span class="secondary-content medium-small">5:00 صبح</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-online avatar-50"><img
                                                            src="../../../app-assets/images/avatar/avatar-1.png"
                                                            alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">لئو</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">سلام
                                                        </p>
                                                    </div>
                                                    <span class="secondary-content medium-small">4:14 صبح</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-off avatar-50"><img
                                                            src="../../../app-assets/images/avatar/avatar-2.png"
                                                            alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">ریچارد</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">سلام
                                                        </p>
                                                    </div>
                                                    <span class="secondary-content medium-small">4:14 صبح</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-online avatar-50"><img
                                                            src="../../../app-assets/images/avatar/avatar-3.png"
                                                            alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">آدام</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">هی!
                                                        </p>
                                                    </div>
                                                    <span class="secondary-content medium-small">9:00 شب</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-online avatar-50"><img
                                                            src="../../../app-assets/images/avatar/avatar-4.png"
                                                            alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">جان</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">اوه خدا
                                                        </p>
                                                    </div>
                                                    <span class="secondary-content medium-small">4:14 صبح</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-off avatar-50"><img
                                                            src="../../../app-assets/images/avatar/avatar-5.png"
                                                            alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">ادوارد</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                            عاشقتم</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">5:15 عصر</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-online avatar-50"><img
                                                            src="../../../app-assets/images/avatar/avatar-6.png"
                                                            alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">تامی</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">آیا میتونیم؟
                                                        </p>
                                                    </div>
                                                    <span class="secondary-content medium-small">8:00 صبح</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-off avatar-50"><img
                                                            src="../../../app-assets/images/avatar/avatar-7.png"
                                                            alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">کریستین</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">عالی!
                                                        </p>
                                                    </div>
                                                    <span class="secondary-content medium-small">9:53 شب</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-off avatar-50"><img
                                                            src="../../../app-assets/images/avatar/avatar-8.png"
                                                            alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">ویلارد</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                            انجامش بده</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">4:20 صبح</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-online avatar-50"><img
                                                            src="../../../app-assets/images/avatar/avatar-1.png"
                                                            alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">رونی</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">بدست آوردش
                                                        </p>
                                                    </div>
                                                    <span class="secondary-content medium-small">5:20 صبح</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-online avatar-50"><img
                                                            src="../../../app-assets/images/avatar/avatar-9.png"
                                                            alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">سلنا</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">مرسی
                                                        </p>
                                                    </div>
                                                    <span class="secondary-content medium-small">12:00 صبح</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-off avatar-50"><img
                                                            src="../../../app-assets/images/avatar/avatar-10.png"
                                                            alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">سارا</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">باشه
                                                        </p>
                                                    </div>
                                                    <span class="secondary-content medium-small">11:14 شب</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-off avatar-50"><img
                                                            src="../../../app-assets/images/avatar/avatar-11.png"
                                                            alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">بتی</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">می تواند انجام دهد؟</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">7:30 شب</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-off avatar-50"><img
                                                            src="../../../app-assets/images/avatar/avatar-12.png"
                                                            alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">کمیلیا</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">ولش کن
                                                        </p>
                                                    </div>
                                                    <span class="secondary-content medium-small">2:00 ظهر</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="settings" class="col s12">
                                        <p class="setting-header mt-8 mb-3 ml-5 font-weight-900">تنظیمات عمومی</p>
                                        <ul class="collection border-none">
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>اعلان</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input checked type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>فعالیت اخیر را نشان بده</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>فعالیت اخیر را نشان بده</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>نمایش آمار کار</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>ایمیل های خود را نشان دهید</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>اعلان های ایمیل</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input checked type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <p class="setting-header mt-7 mb-3 ml-5 font-weight-900">تنظیمات سیستم</p>
                                        <ul class="collection border-none">
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>ورود به سیستم</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>گزارش خطا</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>برنامه های ورود به سیستم </span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input checked type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>سرورهای پشتیبان</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>گزارش های حسابرسی</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div id="activity" class="col s12">
                                        <div class="activity">
                                            <p class="mt-5 mb-0 ml-5 font-weight-900">ورود به سیستم</p>
                                            <ul class="widget-timeline mb-0">
                                                <li class="timeline-items timeline-icon-green active">
                                                    <div class="timeline-time">امروز</div>
                                                    <h6 class="timeline-title">طراحی صفحه اصلی</h6>
                                                    <p class="timeline-text">ملیسا فعالیت شما را دوست داشت</p>
                                                    <div class="timeline-content orange-text">مهم</div>
                                                </li>
                                                <li class="timeline-items timeline-icon-cyan active">
                                                    <div class="timeline-time">10 دقیقه</div>
                                                    <h6 class="timeline-title">ملیسا فعالیت شما را دوست داشت </h6>
                                                    <p class="timeline-text">در اینجا چند مفهوم تعامل با خوراک خبر آورده شده است.</p>
                                                    <div class="timeline-content green-text">حل شد</div>
                                                </li>
                                                <li class="timeline-items timeline-icon-red active">
                                                    <div class="timeline-time">30 دقیقه</div>
                                                    <h6 class="timeline-title">12 کاربر جدید ثبت نام کردند</h6>
                                                    <p class="timeline-text">در اینجا خبر چند مفهوم تعامل با خوراک آورده شده است</p>
                                                    <div class="timeline-content">
                                                        <img src="../../../app-assets/images/icon/pdf.png" alt="document" height="30" width="25" class="mr-1">Registration.doc
                                                    </div>
                                                </li>
                                                <li class="timeline-items timeline-icon-indigo active">
                                                    <div class="timeline-time">2 ساعت</div>
                                                    <h6 class="timeline-title">تینا در فعالیت شما شرکت می کند</h6>
                                                    <p class="timeline-text">در اینجا خبر چند مفهوم تعامل با خوراک آورده شده است</p>
                                                    <div class="timeline-content">
                                                        <img src="../../../app-assets/images/icon/pdf.png" alt="document" height="30" width="25" class="mr-1">Activity.doc
                                                    </div>
                                                </li>
                                                <li class="timeline-items timeline-icon-orange">
                                                    <div class="timeline-time">5 ساعت</div>
                                                    <h6 class="timeline-title">جاش الان دنبالته</h6>
                                                    <p class="timeline-text">در اینجا خبر چند مفهوم تعامل با خوراک آورده شده است</p>
                                                    <div class="timeline-content red-text">در انتظار</div>
                                                </li>
                                            </ul>
                                            <p class="mt-5 mb-0 ml-5 font-weight-900">برنامه های ورود به سیستم</p>
                                            <ul class="widget-timeline mb-0">
                                                <li class="timeline-items timeline-icon-green active">
                                                    <div class="timeline-time">همین الان</div>
                                                    <h6 class="timeline-title">سفارش جدید فوری دریافت کرد</h6>
                                                    <p class="timeline-text">ملیسا فعالیت شما را دوست داشت</p>
                                                    <div class="timeline-content orange-text">مهم</div>
                                                </li>
                                                <li class="timeline-items timeline-icon-cyan active">
                                                    <div class="timeline-time">5 دقیقه</div>
                                                    <h6 class="timeline-title">خاموش کردن سیستم</h6>
                                                    <p class="timeline-text">در اینجا خبر چند مفهوم تعامل با خوراک آورده شده است</p>
                                                    <div class="timeline-content blue-text">فوری</div>
                                                </li>
                                                <li class="timeline-items timeline-icon-red">
                                                    <div class="timeline-time">20 دقیقه</div>
                                                    <h6 class="timeline-title">بانک اطلاعاتی بارگیری 89٪</h6>
                                                    <p class="timeline-text">در اینجا خبر چند مفهوم تعامل با خوراک آورده شده است</p>
                                                    <div class="timeline-content">
                                                        <img src="../../../app-assets/images/icon/pdf.png" alt="document" height="30" width="25" class="mr-1">Database-log.doc
                                                    </div>
                                                </li>
                                            </ul>
                                            <p class="mt-5 mb-0 ml-5 font-weight-900">ورود به سیستم</p>
                                            <ul class="widget-timeline mb-0">
                                                <li class="timeline-items timeline-icon-green active">
                                                    <div class="timeline-time">10 دقیقه</div>
                                                    <h6 class="timeline-title">خطای سیستم</h6>
                                                    <p class="timeline-text">ملیسا فعالیت شما را دوست داشت</p>
                                                    <div class="timeline-content red-text">خطا</div>
                                                </li>
                                                <li class="timeline-items timeline-icon-cyan">
                                                    <div class="timeline-time">1 دقیقه</div>
                                                    <h6 class="timeline-title">سرور تولید پایین</h6>
                                                    <p class="timeline-text">در اینجا چند مفهوم تعامل با خوراک خبر آورده شده است</p>
                                                    <div class="timeline-content blue-text">فوری</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide Out Chat -->
                        <ul id="slide-out-chat" class="sidenav slide-out-right-sidenav-chat">
                            <li class="center-align pt-2 pb-2 sidenav-close chat-head">
                                <a href="#!"><i class="material-icons mr-0">chevron_left</i>مدیر</a>
                            </li>
                            <li class="chat-body">
                                <ul class="collection">
                                    <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                        <span class="avatar-status avatar-online avatar-50"><img
                                                src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar" />
                                        </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">سلام!</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">چطور میتوانیم کمک کنیم؟ ما برای شما اینجا هستیم</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                        <span class="avatar-status avatar-online avatar-50"><img
                                                src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar" />
                                        </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">من به دنبال بهترین الگوی سرپرست هستم؟</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">سرگرمی سرپرست پاسخگو قالب css است</p>
                                        </div>
                                    </li>

                                    <li class="collection-item display-grid width-100 center-align">
                                        <p>8:20 صبح</p>
                                    </li>

                                    <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                        <span class="avatar-status avatar-online avatar-50"><img
                                                src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar" />
                                        </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">اوه بسیار خوب</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">ممنون</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                        <span class="avatar-status avatar-online avatar-50"><img
                                                src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar" />
                                        </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">چگونه می توانم آن را خریداری کنم؟</p>
                                        </div>
                                    </li>

                                    <li class="collection-item display-grid width-100 center-align">
                                        <p>9:00 صبح</p>
                                    </li>

                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">از راستچین</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">فقط 24 دلار</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                        <span class="avatar-status avatar-online avatar-50"><img
                                                src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar" />
                                        </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">اوه متشکرم</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                        <span class="avatar-status avatar-online avatar-50"><img
                                                src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar" />
                                        </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">من آن را با اطمینان خریداری می کنم</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">عالی , از تماس با ما احساس راحتی کنید</p>
                                        </div>
                                    </li>

                                </ul>
                            </li>
                            <li class="center-align chat-footer">
                                <form class="col s12" onsubmit="slideOutChat()" action="javascript:void(0);">
                                    <div class="input-field">
                                        <input id="icon_prefix" type="text" class="search" />
                                        <label for="icon_prefix">Type here..</label>
                                        <a onclick="slideOutChat()"><i class="material-icons prefix">send</i></a>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </aside>
                    <!-- END RIGHT SIDEBAR NAV -->
                    <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top"><a class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow"><i class="material-icons">add</i></a>
                        <ul>
                            <li><a href="css-helpers.html" class="btn-floating blue"><i class="material-icons">help_outline</i></a></li>
                            <li><a href="cards-extended.html" class="btn-floating green"><i class="material-icons">widgets</i></a></li>
                            <li><a href="app-calendar.html" class="btn-floating amber"><i class="material-icons">today</i></a></li>
                            <li><a href="app-email.html" class="btn-floating red"><i class="material-icons">mail_outline</i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="content-overlay"></div>
            </div>
        </div>
    </div>


@endsection
