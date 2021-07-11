<div>
    <div class="card text-left shadow-lg">
      <div class="card-body">
        <div class="card-title d-flex ">
        {!! $title !!}
            @if(Auth::user()->can($showBtn))
            <a href="{{ $url }}" class=" ml-5 btn btn-sm btn-outline-primary font-weight-bold">{{ $btnTxt }}</a>
            @endif
        </div>
      <div class='mt-5'>
        {{ $slot }}
      </div>
      </div>
    </div>
    </div>
