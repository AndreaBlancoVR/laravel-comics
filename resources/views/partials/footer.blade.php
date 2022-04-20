<div class="footer">
    <div class="container">
      <div class="footer_up">
        <section class="footer_up-left">
          <div class="ul-1-2">
            <h2 class="map-title">DC Comics</h2>
            <div class="">
              <ul class="menu">
                @foreach($UlOne as $el)
                    <li class="menu__item">
                    <a href="{{ $el['href'] }}">{{ $el['text'] }}</a>
                    </li>
                @endforeach
              </ul>    
            </div>
            <h2 class="">Shop</h2>
            <div class="">
              <ul class="menu">
                @foreach($UlTwo as $el)
                    <li class="menu__item">
                    <a href="{{ $el['href'] }}">{{ $el['text'] }}</a>
                    </li>
                @endforeach
              </ul>
            </div>
          </div>
          <div class="">
            <h2 class="">DC</h2>
            <div class="">
              <ul class="menu">
                @foreach($UlThree as $el)
                    <li class="menu__item">
                    <a href="{{ $el['href'] }}">{{ $el['text'] }}</a>
                    </li>
                @endforeach
              </ul>    
            </div>
          </div>
          <div class="">
            <h2 class="">Sites</h2>
            <div class="">
              <ul class="menu">
                @foreach($UlFour as $el)
                    <li class="menu__item">
                    <a href="{{ $el['href'] }}">{{ $el['text'] }}</a>
                    </li>
                @endforeach
              </ul>    
            </div>
          </div>
        </section> 
        <section class="footer_up-right">
          <div class="">
          </div>
        </section> 
      </div>
      <div class="footer_down">
        <div class="footer_down-wrapper">
              <div class="sign-up">
                <p>
                  <a href="">Sign-Up Now!</a>
                </p>    
              </div>
            <div class="social-wrapper">
              <h2 class="">Follow us</h2>
              <div class="social-items">
                <ul class="menu">
                    @foreach($UlIcons as $el)
                        <li>
                            <a href="">
                            <img src=" {{ $el['icon'] }} ">
                            </a>
                        </li>
                        @endforeach
                </ul>    
              </div>
            </div>
        </div>
      </div> 
    </div>         
  </div>

