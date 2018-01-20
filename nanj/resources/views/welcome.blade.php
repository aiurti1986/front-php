
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <title>NanjCoin</title>
    <meta name="description" content="{{__('messages.description')}}">
    <link rel="stylesheet" href="{{ '/css/normalize.css' }}" type="text/css">
    <link rel="stylesheet" href="{{ '/css/index.css' }}" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="{{'/js/scroll.js'}}"></script>
</head>

<body>
<header>
    <div class="container">
        <h1>
            <img src="{{'/img/title.jpg'}}" alt="NANJ COIN">
        </h1>
    </div>
</header>
<div class="btn_menu">MENU</div>
<nav>
    <div class="container">

        <ul class="navbar">
            <li class="btn_top">{{__('message.top')}}</li>
            <li class="btn_nav">{{__('message.about')}}</li>
            <li class="btn_nav">{{__('message.roadMap')}}</li>
            <li class="btn_nav">{{__('message.whitePaper')}}</li>
            <li class="btn_nav">{{__('message.wallet')}}</li>
            <li class="btn_nav">{{__('message.exchanges')}}</li>
            <li class="btn_nav">{{__('message.community')}}</li>
        </ul>
    </div>
</nav>

<main>
    <div class="container">
        <div class="images">
            <img src="{{'/img/logo.jpg'}}" alt="">
            <img src="{{'/img/min.jpg'}}" alt="">
        </div>
        <div class="content">
            <h1>ABOUT</h1>
            <div class="flex_container">
                <div class="flex_inner">
                    <h2>{{__('message.whatIsNanJ')}}</h2>
                    {!!__('message.whatIsNanJDescription')!!}
                </div>
                <div class="flex_inner">
                    <h2>{{__('message.tokenDetail')}}</h2>
                    <ul>
                        <li>{{__('message.tokenName')}}</li>
                        <li>{{__('message.tokenSymbol')}}</li>
                        <li>{{__('message.issueNumber')}}</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="content">
            <h1>{{__('message.roadMap')}}</h1>
            <img src="{{'/img/roadmap.png'}}" alt="">

        </div>

        <div class="content">
            <h1>{{__('message.whitePaper')}}</h1>
            <div class="comingsoon">{{__('message.comingSoon')}}</div>
        </div>

        <div class="content">
            <h1>{{__('message.wallet')}}</h1>
            <a href="https://www.myetherwallet.com/">My Ether Wallet</a>
            <ul>
                <li>{{__('message.contractAddress')}}</li>
                <li>{{__('message.tokenSymbol')}}</li>
                <li>{{__('message.numberOfDigits')}}</li>
            </ul>
        </div>

        <div class="content">
            <h1>{{__('message.exchanges')}}</h1>
            <div class="comingsoon">{{__('message.comingSoon')}}</div>
        </div>

        <div class="content">
            <h1>{{__('message.community')}}</h1>
            <a href="https://twitter.com/nanjcoin?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-size="large" data-show-count="false">Follow @nanjcoin</a>

            <ul>
                <li><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></li>
                <li><a href="https://discord.gg/UesS6K">Discord</a></li>
                <li><a href="https://github.com/NANJ-COIN">GitHub</a></li>
            </ul>
        </div>
    </div>
</main>

<footer>
    <div class="container">
        <span id="copy">&copy;2018 nanjcoin &amp; icchi All rights reserved.</span>
    </div>
</footer>
</body>

</html>