<div class="row">
    <div class="col-md-12">
        <p> This is the footer of application. &copy; Ahmad {{ now()->year }}</p>
    </div>
</div>

<script src="{{  asset('/js/app.js') }}"></script>
<script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
@yield('page-level-js')
</body>
</html>
