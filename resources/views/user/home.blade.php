<!DOCTYPE html>
<html lang="en">
<head>
  @include('user.css')
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  @include('user.navbar')

         @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">
                    x
                </button>
                {{session()->get('message')}}
            </div>
         @endif
  @include('user.initial')
  @include('user.doctor')
  @include('user.news')
  @include('user.appointment')
  @include('user.footer')
  <!-- .page-section -->


<!-- ... (your existing HTML code) ... -->
@include('user.script')

</body>
</html>
