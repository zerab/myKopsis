@extends('layouts.master')
@section('title','Home - myKopsis')
<?php $user = Auth::user();?>
@section('content')
@include('layouts.alert')
<div class="home-welcome">
<div class="home-welcome-title">
<center><h1><b>Selamat datang di myKopsis!<b></h1></center><br>
</div>
  <center>
  <div class="home-welcome-picture">
  <center><img src="{{ URL::asset('images/myKopsis-logo-blue.png') }}"></center>
  </div>
</center>
  <div class="home-welcome-content">
        <center><h3><b>Mengenai myKopsis</b></h3></center>
        <p>
          &emsp; &emsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean viverra vitae purus et tincidunt. Vestibulum a mi mi. Maecenas facilisis interdum metus. Curabitur commodo tristique urna ut dictum. In dui sapien, ornare quis risus ut, gravida congue ipsum. Nunc eleifend vulputate mi. Duis efficitur vitae tellus eu interdum. Integer posuere, metus convallis porttitor tempor, tellus enim condimentum purus, placerat vestibulum magna odio et velit. Vestibulum nec sem porttitor, porttitor augue et, finibus purus. Donec ut tellus a elit pretium laoreet. Aenean non nisl a erat auctor ornare vitae at lorem.
        <br><br>
        &emsp; &emsp;Vestibulum scelerisque aliquam fermentum. Nullam vel orci nulla. Sed mollis luctus erat at pharetra. Nulla malesuada est magna, at imperdiet enim pharetra eget. Pellentesque vehicula venenatis nulla eu hendrerit. Aenean pharetra mi rutrum, pulvinar lectus sit amet, volutpat nisl. Nam dictum interdum nisl. Duis dapibus purus venenatis sapien pulvinar, quis rhoncus libero egestas. Sed sagittis, urna at vehicula venenatis, mi sem lobortis libero, in vestibulum nunc urna et ipsum. Pellentesque luctus id metus sit amet tincidunt. Nullam finibus porta sem at sodales. Duis dui lectus, ullamcorper ut tellus vel, porta aliquet nisl. Aenean a mi efficitur, fermentum lorem eget, sodales erat. Mauris vitae mi posuere, maximus nisl sed, consequat tortor. Praesent viverra, orci in pellentesque ullamcorper, lorem quam egestas turpis, nec finibus erat justo nec libero.
        <br><br>
        &emsp; &emsp;Ut sollicitudin interdum dolor, sed efficitur enim. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque luctus porta diam. Donec sit amet venenatis mi. Sed at sem metus. Mauris finibus rutrum vulputate. Phasellus facilisis ipsum a ipsum ultricies dictum. Integer et mattis tellus. Praesent malesuada odio vitae erat commodo porttitor quis sit amet justo. Donec tincidunt placerat justo ac tincidunt. Donec aliquam est ut augue laoreet varius vel eu nisl. Duis dignissim a magna ac dictum. Pellentesque sodales nunc ut nunc gravida consequat. Phasellus ornare orci id sem consequat, ac sodales risus sollicitudin.
        </p>
  </div>
  <div class="home-welcome-founder-image">
    <center><img src="{{ URL::asset('images/founder.jpg') }}" class="img-circle"><br><b>Abihu Presly Haezer</b><br><i>Founder myKopsis</i></center>
    <div class="social">
      <a href="https://www.facebook.com/abihu.haizer" class="fb" target="_blank">B</a><a href="https://www.twitter.com/abihupreslyhaez" class="tw" target="_blank">A</a><a href="https://www.github.com/zerab" class="gh" target="_blank">P</a><a href="https://www.instagram.com/abihu.haezer" class="ig" target="_blank">V</a>
    </div>
  </div>
  <div class="home-welcome-content">
        <center><h3><b>Sepatah dua patah kata...</b></h3></center>
        <p>
          &emsp; &emsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean viverra vitae purus et tincidunt. Vestibulum a mi mi. Maecenas facilisis interdum metus. Curabitur commodo tristique urna ut dictum. In dui sapien, ornare quis risus ut, gravida congue ipsum. Nunc eleifend vulputate mi. Duis efficitur vitae tellus eu interdum. Integer posuere, metus convallis porttitor tempor, tellus enim condimentum purus, placerat vestibulum magna odio et velit. Vestibulum nec sem porttitor, porttitor augue et, finibus purus. Donec ut tellus a elit pretium laoreet. Aenean non nisl a erat auctor ornare vitae at lorem.
        <br><br>
        &emsp; &emsp;Vestibulum scelerisque aliquam fermentum. Nullam vel orci nulla. Sed mollis luctus erat at pharetra. Nulla malesuada est magna, at imperdiet enim pharetra eget. Pellentesque vehicula venenatis nulla eu hendrerit. Aenean pharetra mi rutrum, pulvinar lectus sit amet, volutpat nisl. Nam dictum interdum nisl. Duis dapibus purus venenatis sapien pulvinar, quis rhoncus libero egestas. Sed sagittis, urna at vehicula venenatis, mi sem lobortis libero, in vestibulum nunc urna et ipsum. Pellentesque luctus id metus sit amet tincidunt. Nullam finibus porta sem at sodales. Duis dui lectus, ullamcorper ut tellus vel, porta aliquet nisl. Aenean a mi efficitur, fermentum lorem eget, sodales erat. Mauris vitae mi posuere, maximus nisl sed, consequat tortor. Praesent viverra, orci in pellentesque ullamcorper, lorem quam egestas turpis, nec finibus erat justo nec libero.
        </p>
  </div>
</div>
@endsection
