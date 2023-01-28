<script src="{{ url('assets_frontend/js/jquery-3.6.0.min.js') }}"></script>
<!-- Bootstrap js -->
<script src="{{ url('assets_frontend/js/bootstrap.bundle.js') }}"></script>
<!-- Meanu js -->
<script src="{{ url('assets_frontend/js/jquery.meanmenu.js') }}"></script>
<!-- owl carousel js -->
<script src="{{ url('assets_frontend/js/owl.carousel.min.js') }}"></script>
<!-- wow.js -->
<script src="{{ url('assets_frontend/js/wow.min.js') }}"></script>
<!-- Custom js -->
<script src="{{ url('assets_frontend/js/custom.js') }}"></script>
<script src="{{ url('assets_frontend/js/add-form.js') }}"></script>
<script src="{{ url('assets_frontend/js/form-dropdown.js') }}"></script>

<script src="{{ url('assets_frontend/select2/dist/js/select2.min.js') }}" type="text/javascript"></script>

<script>
    $(document).ready(function() {
        $(".number").keypress(function (e) {
        if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
            $("#errmsg").html("Veuillez saisir uniquement des chiffres").stop().show().fadeOut("slow");
            return false;
        }
        });
    });
</script>






