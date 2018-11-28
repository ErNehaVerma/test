<!-- jQuery 2.2.3 -->
<script src="{{ asset('plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);</script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('plugins/morris/morris.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparkline/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap -->
<script src="{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- Slimscroll -->
<!-- FastClick -->
<script src="{{ asset('plugins/fastclick/fastclick.js') }}"></script>
<script src="{{ asset('dist/js/app.min.js') }}"></script>
<script src="{{ asset('plugins/vue/vue.js') }}"></script>
<script src="{{ asset('plugins/vue-resource/vue-resource.min.js') }}"></script>
<script>
  Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#csrf-token').getAttribute('content');

</script>
<script>
    window.base_url = '{{url('/')}}';

    function readURL1(input) {
        if (input.files && input.files[0]) {
            var reader1 = new FileReader();

            reader1.onload = function (e) {
                $('#logo-img').attr('src', e.target.result);
            }
            reader1.readAsDataURL(input.files[0]);
        }
    }
    $("#logo").change(function(){
        readURL1(this);
    });

     function readURL2(input) {
        if (input.files && input.files[0]) {
            var reader2 = new FileReader();

            reader2.onload = function (e) {
                $('#image4mobile-img').attr('src', e.target.result);
            }
            reader2.readAsDataURL(input.files[0]);
        }
    }
    $("#image4mobile").change(function(){
        readURL2(this);
    });

    function readURL3(input) {
        if (input.files && input.files[0]) {
            var reader3 = new FileReader();

            reader3.onload = function (e) {
                $('#image4desktop-img').attr('src', e.target.result);
            }
            reader3.readAsDataURL(input.files[0]);
        }
    }
    $("#image4desktop").change(function(){
        readURL3(this);
    });

    $(document).ready( function () {
        $('#myTable').DataTable({
            "scrollX": true
        });

} );
</script>
