@extends('layouts.frontend')
@section('content')
           <!-- breadcrumb-area-start -->
            <div class="breadcrumb-area pt-150 pb-155" style="background-image:url(assets/img/bg/bg-13.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-text text-center">
                                <h1>Coronavirus</h1>
                                <ul class="breadcrumb-menu">
                                    <li><a href="{{route('home')}}">home</a></li>
                                    <li><span>Coronavirus Posts</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- breadcrumb-area-end -->

            <!-- blog-area-start -->
            <div class="blog-grid-area pt-130 pb-130">
                <div class="container">
                    <div class="row">

                        @foreach($coronas as $corona)
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="blog-wrapper mb-80">
                                <div class="blog-img">
                                    @if($corona->image)
                                    <a href="{{route('coronavirus.single', $corona->slug)}}"><img src="{{asset('$corona->image')}}" alt="{{$corona->title}}"></a>
                                    @endif
                                </div>
                                <div class="blog-content blog-02-content">
                                    <div class="blog-meta">
                                        <!-- <span><i class="far fa-calendar-alt"></i> <a href="blog-details.html">12 Oct 2019</a></span> -->
                                        <!-- <span><i class="far fa-comment"></i> <a href="blog-details.html">Comments (05)</a></span> -->
                                    </div>
                                    <div class="blog-title">
                                        <h3><a href="blog-details.html">{{$corona->title}}</a></h3>
                                    </div>
                                    <p>{{$corona->sort_description}}</p>
                                    <a class="btn green-btn" href="{{route('coronavirus.single', $corona->slug)}}">read more <i class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach


                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="basic-pagination mt-10 text-center">
                                {!! $coronas->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- blog-area-end -->
@endsection

@push('scripts')
<!-- <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> -->
<script type="text/javascript">


// Want to use async/await? Add the `async` keyword to your outer function/method.
// axios({
//   method: 'get',
//   url: 'https://bing.com/covid/data',
//   headers: {
//       'Content-Type': 'application/json',
//       'mode': 'no-cors'

//     }
//   // responseType: 'stream'
// })
//   .then(function (response) {

//     console.log(data);
//     // response.data.pipe(fs.createWriteStream('ada_lovelace.jpg'))
//   });

// fetch("https://pomber.github.io/covid19/timeseries.json")
fetch("https://api.covid19api.com/country/bangladesh/status/confirmed/live")
// fetch("https://api.covid19api.com/country/bangladesh/status/confirmed/live")
  .then(response => response.json())
  .then(data => {



//     console.log(data);

// data.slice(Math.max(data.length - 5, 0)).forEach(({ Cases, confirmed, recovered, deaths }) =>
//       console.log(`${date} active cases: ${confirmed - recovered - deaths}`)
//     );

console.log(data);

    // data["Bangladesh"].forEach(({ date, confirmed, recovered, deaths }) =>
    //   console.log(`${date} active cases: ${confirmed - recovered - deaths}`)
    // );
  });
</script>
@endpush