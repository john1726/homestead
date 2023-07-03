@extends('layouts.app')

@section('title', 'A federal not-for-profit that seeks to address issues affecting marginalized Canadians')

@section('content')
<h4 class="intro">Welcome to LEDCA Official Website</h4>               
<p>
    LEDCA is a federal not-for-profit organization that seeks to address the issues affecting marginalized Canadians especially those of Kenyan origin, the black communities and visible minorities while assisting newcomers to settle and make a positive contribution in the society as they endeavor to achieve their goals
</p>
<img src="/images/association.jpg" class="home">
<div class="menu-categories">
    @foreach ($programs as $prog)
        <article>
            <a href="/menu#{{str_slug($prog->title)}}"><img src="/images/{{$prog->image}}"></a>
            <h2><a href="/menu#{{str_slug($prog->title)}}">{{$prog->title}}</a></h2>
        </article>   
    @endforeach               
</div>
<div class="social">
    <div>
        <h4>What our members say</h4>
        <p>
            
Kenyan Canadian Association (KCA) held the Inuagural International Women's Day Workshop & Celebration Dinner on March 11, 2023 in Brampton, Ontario, Canada. The colorful event was grace by invited local and international dignitaries and special guests.<br>
            <br>
            Shad Cayden
        </p>
    </div>    
    <div class="networks">
        <a href="#"><img src="/images/twitter.png"></a>
        <a href="#"><img src="/images/fb.png"></a>
        <a href="#"><img src="/images/ig.png"></a>    
    </div>
</div>
@endsection
