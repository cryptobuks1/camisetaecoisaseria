{{--
  Template Name: Nos_products Template
--}}

@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  <div class="content products container">
    <section class="category-products flex flex-col my-12 border-solid border-gray border-b-1 pb-6">
      <ul class="flex flex-wrap -mx-4 p-0 text-center">
        @foreach ($nos_categories as $img)
        <li class="border-dashed border-r">
          <a class="linkimgprod my-2 px-2 w-1/2 overflow-hidden sm:w-1/3" href="{!! $img->get_permalink() !!}">
            @php
              $imgprod = $img->get_image($size = 'produtos', array('class'=>'imgprod'));
            @endphp
            {!! $imgprod !!}
            <h2>
              {!! $img->get_title() !!}
            </h2>
            <span class="price">{!! $img->get_price_html() !!}</span>
          </a>
        </li>
        @endforeach

      </ul>
    </section>
  </div>

</section>

@endsection
