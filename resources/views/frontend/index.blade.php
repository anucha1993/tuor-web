<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    @include("frontend.layout.inc_header")
    <!-- Datepicker-->
    {{-- <script src="{{asset('frontend/js/datepicker.js')}}"></script>
    <script src="{{asset('frontend/js/daterangepicker.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/daterangepicker.css')}}"/> --}}
    {{-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" /> --}}
</head>

<body>
    @include("frontend.layout.inc_topmenu")
    <section id="homepage" class="wrapperPages" style="min-height: 1200px;">
    
    </section>
    @include("frontend.layout.inc_footer")
    
    <?php 
        echo '<script>';
        echo "var country = $data_country;";
        echo "var city = $data_city;";
        echo "var country_famus = $country_famus;";
        echo "var keyword_famus = $keyword_famus;";
        echo "var province = $data_province;";
        echo "var amupur = $data_amupur;";
        echo '</script>';
    ?>
    @include("frontend.layout.search-data")
    <script>
        var day = ['วันอาทิตย์','วันจันทร์','วันอังคาร','วันพุธ','วันพฤหัสบดี','วันศุกร์','วันเสาร์'];
        var month = ['ม.ค.','ก.พ.','มี.ค.','เม.ย.','พ.ค.','มิ.ย.','ก.ค.','ส.ค.','ก.ย.','ต.ค.','พ.ย.','ธ.ค.'];
        var check_after = new Date();
        var check_befor = new Date(check_after.valueOf()+86400000);
        // let test = day[check_after.getDay()]+'ที่ '+check_after.getDate()+' '+month[check_after.getMonth()]+' '+(check_after.getFullYear()*1+543)+' | '+day[check_befor.getDay()]+'ที่ '+check_befor.getDate()+' '+month[check_befor.getMonth()]+' '+(check_befor.getFullYear()*1+543);
        // document.getElementById('show_date_select').value = test;
        var strat_show = check_after.getDate()+'  '+month[check_after.getMonth()]+'  '+(check_after.getFullYear()*1+543);
        var start_day_show = day[check_after.getDay()];
        var end_show = check_befor.getDate()+'  '+month[check_befor.getMonth()]+'  '+(check_befor.getFullYear()*1+543);
        var end_day_show = day[check_befor.getDay()];
        var text_s_show = '';
            text_s_show += "<span style='color:gray'>"+strat_show+"</span><br>";
            text_s_show += "<span style='font-size:0.8rem;padding:3px 2px;display:block;color:gray;'>"+start_day_show+"</span>";
        var text_e_show = '';
            text_e_show += "<span style='color:gray'>"+end_show+"</span><br>";
            text_e_show += "<span style='font-size:0.8rem;padding:3px 2px;display:block;color:gray;'>"+end_day_show+"</span>";
    
        document.getElementById('show_date_calen').innerHTML = text_s_show;
        document.getElementById('show_end_calen').innerHTML = text_e_show;
        $('#hide_date_select').hide();
    
        $(function() {
            $('input[name="daterange"]').daterangepicker({
                opens: 'left',
                minDate: "{{date('m/d/Y')}}"
            }, function(start, end, label) {
                document.getElementById('start_date').value = start.format('YYYY-MM-DD');
                document.getElementById('end_date').value = end.format('YYYY-MM-DD');
                let y = new Date(start);
                let x = new Date(end);
                let s_show = y.getDate()+'  '+month[y.getMonth()]+'  '+(y.getFullYear()*1+543);
                let e_show = x.getDate()+'  '+month[x.getMonth()]+'  '+(x.getFullYear()*1+543);
                let s_day = day[y.getDay()];
                let e_day = day[x.getDay()];
                // document.getElementById('show_date_select').value = test;
                var text_start = '';
                    text_start += s_show+"<br>";
                    text_start += "<span style='font-size:0.8rem;padding:3px 2px;display:block;'>"+s_day+"</span>";
                var text_end = '';
                    text_end += e_show+"<br>";
                    text_end += "<span style='font-size:0.8rem;padding:3px 2px;display:block;'>"+e_day+"</span>";
    
                document.getElementById('show_date_calen').innerHTML = text_start;
                document.getElementById('show_end_calen').innerHTML = text_end;
    
                $('#show_date_calen').show();
                $('#show_end_calen').show();
                $('#hide_date_select').hide();
            });
            $('input[name="daterange"]').on('cancel.daterangepicker', function(ev, picker) {
                document.getElementById('start_date').value = null;
                document.getElementById('end_date').value = null;
    
                let y = new Date("{{date('m/d/Y')}}");
                let x = new Date("{{date('m/d/Y',strtotime('+1 day'))}}");
                let s_show = y.getDate()+'  '+month[y.getMonth()]+'  '+(y.getFullYear()*1+543);
                let e_show = x.getDate()+'  '+month[x.getMonth()]+'  '+(x.getFullYear()*1+543);
                let s_day = day[y.getDay()];
                let e_day = day[x.getDay()];
                
                var text_start1 = '';
                    text_start1 += "<span style='color:gray'>"+s_show+"</span<br>";
                    text_start1 += "<span style='font-size:0.8rem;padding:3px 2px;display:block;color:gray;'>"+s_day+"</span>";
                var text_end2 = '';
                    text_end2 += "<span style='color:gray'>"+e_show+"<br>";
                    text_end2 += "<span style='font-size:0.8rem;padding:3px 2px;display:block;color:gray;'>"+e_day+"</span</span>";
                document.getElementById('show_date_calen').innerHTML = text_start1;
                document.getElementById('show_end_calen').innerHTML = text_end2;
    
                $('#show_date_calen').show();
                $('#show_end_calen').show();
                $('#hide_date_select').hide();
                
            });
            $('input[name="daterange"]').on('hide.daterangepicker', function(ev, picker) {
                $('#show_date_calen').show();
                $('#show_end_calen').show();
                $('#hide_date_select').hide();
            });
        });
        function show_datepicker() {
            $('#show_date_calen').hide();
            $('#show_end_calen').hide();
            $('#hide_date_select').show();
            document.getElementById("hide_date_select").click();
        }
        
    </script>
    <script>
        $(document).ready(function () {
            var time_ads = "{{$status->time_ads}}"*Number(1000);
            var time_slide = "{{$status->time_slide}}"*Number(1000);
            var status_ads = false ;
            var status_slide = false ;
            var time_calendar = "{{$status->time_calendar}}"*Number(1000);
            var time_cus = "{{$status->time_cus}}"*Number(1000);
            var status_calendar = false ;
            var status_cus = false ;
            if("{{$status->status_ads}}" == 'on'){
                status_ads = true;
            }
            if("{{$status->status_slide}}" == 'on'){
                status_slide  = true;
            }
            if("{{$status->status_calendar}}" == 'on'){
                status_calendar = true;
            }
            if("{{$status->status_cus}}" == 'on'){
                status_cus  = true;
            }
            $('.bannerhomepage').owlCarousel({
                loop: true,
                item: 1,
                nav: true,
                navText: ['<img src="{{asset('frontend/images/arBn_left.svg')}}">', '<img src="{{asset('frontend/images/arBn_right.svg')}}">'],
                navClass: ['owl-prev', 'owl-next'],
                slideBy: 1,
                autoplay: status_slide,
                animateOut: 'fadeOut',
                // autoplayTimeout: 4000,
                autoplayTimeout: time_slide,
                autoplayHoverPause: true,
                smartSpeed: time_slide,
                dots: false,
                responsive: {
                    0: {
                        items: 1,


                    },
                    600: {
                        items: 1,
                        slideBy: 1,
                        nav: false,

                    },
                    1024: {
                        items: 1,
                        slideBy: 1
                    },
                    1200: {
                        items: 1,
                        slideBy: 1
                    }
                }
            })
            $('#promotionslide').owlCarousel({
                loop: true,
                autoplay:status_ads,
                smartSpeed: time_ads,
                nav: true,
                navText: ['<img src="{{asset('frontend/images/arrowRight.svg')}}">', '<img src="{{asset('frontend/images/arrowLeft.svg')}}">'],
                navClass: ['owl-prev', 'owl-next'],
                dots: true,
                margin: 10,
                responsive: {
                    0: {
                        items: 2,


                    },
                    600: {
                        items: 2,
                        slideBy: 1,
                        nav: false,

                    },
                    1024: {
                        items: 2,
                        slideBy: 1
                    },
                    1200: {
                        items: 3,
                        slideBy: 1
                    }
                }
            })
            $('#calendarslide').owlCarousel({
                loop: true,
                autoplay:status_calendar,
                smartSpeed: time_calendar,
                nav: true,
                navText: ['<img src="{{asset('frontend/images/arrowRight.svg')}}">', '<img src="{{asset('frontend/images/arrowLeft.svg')}}">'],
                navClass: ['owl-prev', 'owl-next'],
                dots: true,
                margin: 10,
                responsive: {
                    0: {
                        items: 2,


                    },
                    600: {
                        items: 2,
                        slideBy: 1,
                        nav: false,

                    },
                    1024: {
                        items: 2,
                        slideBy: 1
                    },
                    1200: {
                        items: 3,
                        slideBy: 1
                    }
                }
            })
            $('.countryslider').owlCarousel({
                loop: true,
                autoplay: false,
                smartSpeed: 2000,
                nav: true,
                navText: ['<img src="{{asset('frontend/images/arrowRight.svg')}}">', '<img src="{{asset('frontend/images/arrowLeft.svg')}}">'],
                navClass: ['owl-prev', 'owl-next'],
                dots: true,
                margin: 10,
                responsive: {
                    0: {
                        items: 2,


                    },
                    600: {
                        items: 2,
                        slideBy: 1,
                        nav: false,

                    },
                    1024: {
                        items: 2,
                        slideBy: 1
                    },
                    1200: {
                        items: 3,
                        slideBy: 1
                    }
                }
            })
            $('.clientslide').owlCarousel({
                loop: true,
                autoplay: status_cus,
                smartSpeed: time_cus,
                dots: true,
                nav: true,
                navText: ['<img src="{{asset('frontend/images/arrowRight.svg')}}">', '<img src="{{asset('frontend/images/arrowLeft.svg')}}">'],
                navClass: ['owl-prev', 'owl-next'],
                margin: 10,
                responsive: {
                    0: {
                        items: 2,


                    },
                    600: {
                        items: 2,
                        slideBy: 1,
                        nav: false,

                    },
                    1024: {
                        items: 4,
                        slideBy: 1
                    },
                    1200: {
                        items: 5,
                        slideBy: 1
                    }
                }
            })

        });

        var owl = $('.screenshot_slider').owlCarousel({
            loop: true,
            responsiveClass: true,
            nav: true,
            margin: 0,
            autoplayTimeout: 4000,
            smartSpeed: 400,
            center: true,
            navText: ['&#8592;', '&#8594;'],
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 5
                },
                1200: {
                    items: 5
                }
            }
        });

        /****************************/

        jQuery(document.documentElement).keydown(function (event) {

            // var owl = jQuery("#carousel");

            // handle cursor keys
            if (event.keyCode == 37) {
                // go left
                owl.trigger('prev.owl.carousel', [400]);
                //owl.trigger('owl.prev');
            } else if (event.keyCode == 39) {
                // go right
                owl.trigger('next.owl.carousel', [400]);
                //owl.trigger('owl.next');
            }

        });
    </script>
    <script>
        $(document).ready(function () {

            var weekday = new Array(7);
            weekday[0] = "อาทิตย์";
            weekday[1] = "จันทร์";
            weekday[2] = "อังคาร";
            weekday[3] = "พุธ";
            weekday[4] = "พฤหัสบดี";
            weekday[5] = "ศุกร์";
            weekday[6] = "เสาร์";

            $(function () {
                $('.datepicker').datepicker({
                    setDate: new Date(),
                    dateFormat: 'dd MM yy',
                    showButtonPanel: false,
                    changeMonth: false,
                    changeYear: false,
                    /*showOn: "button",
                     buttonImage: "images/calendar.gif",
                     buttonImageOnly: true,
                     minDate: '+1D',
                     maxDate: '+3M',*/
                    inline: true,
                    onSelect: function (dateText, inst) {
                        var date = $(this).datepicker('getDate');
                        var dayOfWeek = weekday[date.getUTCDay()];
                        // dayOfWeek is then a string containing the day of the week
                        if ($(this).parent().find(".dp_dayOfWeek")) {
                            $(this).parent().find(".dp_dayOfWeek").remove();
                        }
                        $(this).parent().append("<span class='dp_dayOfWeek'>" + dayOfWeek +
                            "</span>");
                    },
                });

                var lastDate = new Date();
                lastDate.setDate(lastDate.getDate()); //any date you want
                $("input[name='date_start']").datepicker('setDate', lastDate);

                var dayOfWeek = weekday[lastDate.getUTCDay()];
                // dayOfWeek is then a string containing the day of the week
                if ($("input[name='date_start']").parent().find(".dp_dayOfWeek")) {
                    $("input[name='date_start']").parent().find(".dp_dayOfWeek").remove();
                }
                $("input[name='date_start']").parent().append("<span class='dp_dayOfWeek'>" +
                    dayOfWeek + "</span>");

                lastDate.setDate(lastDate.getDate() + 1); //any date you want
                $("input[name='date_end']").datepicker('setDate', lastDate);
                var dayOfWeek = weekday[lastDate.getUTCDay()];
                // dayOfWeek is then a string containing the day of the week
                if ($("input[name='date_end']").parent().find(".dp_dayOfWeek")) {
                    $("input[name='date_end']").parent().find(".dp_dayOfWeek").remove();
                }
                $("input[name='date_end']").parent().append("<span class='dp_dayOfWeek'>" + dayOfWeek +
                    "</span>");

            });
            $.datepicker.regional['es'] = {
                closeText: 'Cerrar',
                prevText: '<Ant',
                nextText: 'Sig>',
                currentText: 'Hoy',
                monthNames: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม',
                    'สิงหาคม',
                    'กันยายน', 'ตุลาคม', 'พฤษจิกายน', 'ธันวาคม'
                ],
                monthNamesShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct',
                    'Nov', 'Dec'
                ],
                dayNames: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Sathurday'],
                dayNamesShort: ['Sun', 'Mon', 'Tue', 'Wed', 'Thr', 'Fri', 'Sat'],
                dayNamesMin: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                weekHeader: 'Sm',
                dateFormat: 'dd/mm/yy',
                firstDay: 1,
                isRTL: false,
                showMonthAfterYear: false,
                yearSuffix: ''
            };
            $.datepicker.setDefaults($.datepicker.regional['es']);
        });
    </script>
   
    <script>
        $("#carousel").flipster({
            style: 'flat',
            spacing: -0.4,
            nav: true,
            buttons: true,
        });
    </script>


</body>

</html>