@extends('user.layouts.head')
@section('title','home')
@section('content')

<div class="site-section">
    <div class="container">
        <div class="row">
            <h3> 0 {{ __('messages.result') }} </h3>
        </div>
    </div>
</div>
</div>
</div>
<br><br><br><br><br><br><br><br>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="copyright">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                        </script> Sun asterisk <i class="icon-heart text-danger" aria-hidden="true"></i> </a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


</div>
<!-- .site-wrap -->


<!-- loader -->
<div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
            stroke="#ff5e15" />
    </svg></div>

@endsection