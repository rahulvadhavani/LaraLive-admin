<div class="section-body mt-3">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="mb-4">
                    <h4>Welcome {{auth()->user()->first_name}}</h4>
                </div>                        
            </div>
        </div>
        <div class="row clearfix row-deck">
            @if(count($cards) > 0)
            @foreach($cards as $key => $val)
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{$key}}</h3>
                    </div>
                    <div class="card-body">
                        <h5 class="number mb-0 font-32 counter">{{$val['count']}}</h5>
                        <span class="font-12"><a href="{{$val['route']}}">More</a></span>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">100</h3>
                    </div>
                    <div class="card-body">
                        <h5 class="number mb-0 font-32 counter">Dummy</h5>
                        <span class="font-12">Measure How Fast... <a href="#">More</a></span>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@section('page')
{{$page}}
@endsection