@extends('layout.master')
@section('title', 'PICC - Home')

@section('styles')
    @parent
    <link rel="stylesheet" type="text/css" href="/css/lightslider.min.css">
    <link rel="stylesheet" href="/css/nanoGALLERY/nanogallery.min.css">
    <link rel="stylesheet" href="/css/nanoGALLERY/themes/light/nanogallery_light.min.css">
    <style>
        .home-slide {
            display: block;
            height: 768px;
            background-color: #00A6C7;
            background-size: cover;
            background-position: center center;
            position: relative;
        }

        .slide-caption {
            display: block;
            position: absolute;
            font-size: 3rem;
            font-weight: bold;
            text-shadow: 0px 0px 10px rgba(0,0,0,1);

            top: 25%;
            left: 5%;
            width: 35%;
            line-height: 1.2;



        }

        #home-detail{
            margin-top: 5rem;
        }

        #home-partner {
            padding-top: 4px;
        }
    </style>
@endsection

@section('content')
<div>
    <ul id="home-slider">
        <li>
            <div id="slide1" class="home-slide" style="background-image: url(/images/slider/travel1.jpg);">
                <h1 class="ui inverted header">
                    <span class="slide-caption">在出发前就订好景点门票和观光项目，以获得更多优惠!</span>
                </h1>
            </div>
        </li>
        <li>
            <div id="slide2" class="home-slide" style="background-image: url(/images/slider/travel2.jpg);">
                <h1 class="ui inverted header">
                    <span class="slide-caption">一起预定机票和酒店，享受高达70%的优惠!</span>
                </h1>
            </div>
        </li>
        <li>
            <div id="silde3" class="home-slide" style="background-image: url(/images/slider/travel3.jpg);">
                <h1 class="ui inverted header">
                    <span class="slide-caption">在出发前就订好景点门票和观光项目，以获得更多优惠!</span>
                </h1>
            </div>
        </li>
    </ul>
</div>
<div id="home-detail">
    <div class="ui grid container">
        <div class="eleven wide column">
            <h3 class="ui left floated red header">{{ trans('home.hot_place') }}</h3>
            <div class="ui clearing divider"></div>
            <div id="home-gallery"></div>
        </div>
        <div class="five wide column">
            <h3 class="ui left floated red header">{{ trans('home.partner') }}</h3>
            <div class="ui clearing divider"></div>
            <div id="home-partner">
                <div class="partner blurring dimmable image">
                    <div class="ui dimmer">
                        <div class="content">
                            <div class="center">
                                <h3><a class="ui red header" href="#">Hilton</a></h3>
                                <p>The Best of LasVegas</p>
                            </div>
                        </div>
                    </div>
                    <img class="ui centered image" src="/images/thumbnails/hilton.jpg">
                </div>
                <div class="ui hidden divider"></div>
                <div class="partner blurring dimmable image">
                    <div class="ui dimmer">
                        <div class="content">
                            <div class="center">
                                <h3><a class="ui red header" href="#">Four Seasons</a></h3>
                                <p>The Best of London</p>
                            </div>
                        </div>
                    </div>
                    <img class="ui centered image" src="/images/thumbnails/fs.jpg">
                </div>
                <div class="ui hidden divider"></div>
                <div class="partner blurring dimmable image">
                    <div class="ui dimmer">
                        <div class="content">
                            <div class="center">
                                <h3><a class="ui red header" href="#">Drake</a></h3>
                                <p>The Best of Chicago</p>
                            </div>
                        </div>
                    </div>
                    <img class="ui centered image" src="/images/thumbnails/drake.jpg">
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

@section('scripts')
	@parent
    <script src="/js/lightslider.min.js"></script>
    <script src="/js/jquery.nanogallery.min.js"></script>
	<script type="text/javascript">
		$('.partner').dimmer({
            opacity: '0.1',
            on: 'hover'
        });

        $('.menu .item').removeClass('active');
		$('#home').addClass('active');

        $('#home-slider').lightSlider(
                {
                    item: 1,
                    mode: 'fade',
                    auto: true,
                    loop: true,
                    controls: true,
                    pause: 4000,
                    speed: 800,

                }
        );

        $('#home-gallery').nanoGallery(

                {
                    thumbnailWidth: 'auto',
                    thumbnailHeight: 250,

                    theme: "light",

                    //thumbnailAlignment: "justified",
                    thumbnailGutterWidth : 0,
                    thumbnailGutterHeight : 0,
                    thumbnailHoverEffect: [{ name: 'labelAppear75', duration: 300 }],
                    thumbnailLabel: {
                                        display: true,
                                        position: 'overImageOnMiddle',
                                        align: 'center',
                                        hideIcons: true,
                                    },
                    fnThumbnailOpen: function(items){
                        window.location.href=items[0].src;
                    },
                    items: [
                        {
                            src:'/about',
                            srct:'/images/thumbnails/lasvegas.jpg',
                            title: "LasVegas"
                        },
                        {
                            src: '/about',
                            srct: '/images/thumbnails/newyork.jpg',
                            title: 'NewYork'
                        },
                        {
                            src: '/about',
                            srct: '/images/thumbnails/london.jpg',
                            title: 'London'
                        },
                        {
                            src: '/about',
                            srct: '/images/thumbnails/chicago.jpg',
                            title: 'Chicago'
                        },
                        {
                            src: '/about',
                            srct: '/images/thumbnails/paris.jpg',
                            title: 'Paris'
                        },
                        {
                            src: '/about',
                            srct: '/images/thumbnails/tokyo.jpg',
                            title: 'Tokyo'
                        },
                        {
                            src: '/about',
                            srct: '/images/thumbnails/orlando.jpg',
                            title: 'Orlando'
                        },
                        {
                            src: '/about',
                            srct: '/images/thumbnails/sydney.jpg',
                            title: 'Sydney'
                        },
                        {
                            src: '/about',
                            srct: '/images/thumbnails/losangeles.jpg',
                            title: 'Los Angeles (LA)'
                        }]
                }

        );

	</script>
@endsection
