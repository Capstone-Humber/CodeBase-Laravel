@extends('layouts.template')
@section('content')
    <div class="entity_wrapper">



        <div class="col-md-6">
            <span class="tag purple">Toronto Weather</span>
            <div class="category_article_content">
                <script type='text/javascript' src='https://darksky.net/widget/graph-bar/43.654,-79.3872/ca12/en.js?width=100%&height=400&title=Full Forecast&textColor=333333&bgColor=FFFFFF&transparency=false&skyColor=undefined&fontFamily=Default&customFont=&units=ca&timeColor=333333&tempColor=333333&currentDetailsOption=true'></script>
            </div>


            <!----media_social------>
        </div>


        <div class="col-md-6">
            <span class="tag purple">World Weather</span>
            <div class="category_article_content">
                <script src='https://darksky.net/map-embed/@temperature,46.768,-77.273,4.js?embed=true&timeControl=false&fieldControl=false&defaultField=temperature&defaultUnits=_c'></script>

            </div>


            <!----media_social------>



        </div>
@endsection