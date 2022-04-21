
@extends('layouts.standard')

@section('metaTitle', 'laravel-comics HOME')

@section('mainContent')
<div class="main">
    <div class="container">
      <div class="jumbo-up-container">
        <div class="jumbo-up">
          <a href="">
            Current series
          </a>
        </div>
      </div>
      <div class="jumbo-container">
        <div class="jumbo">
          <div class="row">
            <ul>
            @foreach($comics as $key => $elem)
              
                <li class="card-wrapper">
                  <a href="{{ route( 'comics.show', [ 'id' => $key ] ) }}">
                    <figure class="card-header">
                        <div class="overlay">
                            <p>
                                {{ $elem['price'] }}
                            </p>

                        </div>
                    <img src="{{ $elem['thumb'] }}" alt="">
                    </figure>
                    <h3 class="card-footer">
                    <span>{{ $elem['series'] }}</span>
                    </h3>
                  </a>
                </li>
              
            @endforeach
            </ul>
           
          </div>
          <div class="row_2">
              <a href="">
                Load more
              </a>
          </div>
        </div>
      </div>
      <div class="menu-container">
        <div class="menu-wrapper">
          <ul class="menu">
            @foreach($mainMenu as $el)
                <li class="menu__item">   
                    <figure>
                        <img src="{{ $el['image'] }}">
                    </figure>
                    <a href="{{ $el['href'] }}">
                        <span>{{ $el['text'] }}</span>
                    </a>
                </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
@endsection