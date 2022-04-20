<header>
<div class="header">
    <div class="container-fluid">
      <div class="container">
        <figure class="logo">
          <img src="{{ asset('img/dc-logo.png') }}" alt="">
      </figure>
      <nav class="main-nav nav">

     

        <ul>
            @foreach($headerMenu as $el)
                <li class="nav__item">   
                    <a :href="{{ $el['href'] }}">
                    <span>{{ $el['text'] }}</span>
                    </a>
                </li> 
            @endforeach
        </ul>

      </nav>
      </div>
      
    </div>
  </div>
</header>