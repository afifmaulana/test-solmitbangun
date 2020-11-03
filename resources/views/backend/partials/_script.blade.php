<script src="{{ asset ('assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{ asset ('assets/plugins/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset ('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{ asset ('assets/js/jquery.slimscroll.js') }}"></script>
<!--Wave Effects -->
<script src="{{ asset ('assets/js/waves.js') }}"></script>
<!--Menu sidebar -->
<script src="{{ asset ('assets/js/sidebarmenu.js') }}"></script>
<!--stickey kit -->
<script src="{{ asset ('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
<script src="{{ asset ('assets/plugins/sparkline/jquery.sparkline.min.js') }}"></script>

<!--Custom JavaScript -->
<script src="{{ asset ('assets/js/custom.min.js') }}"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!-- chartist chart -->
<script src="{{ asset ('assets/plugins/chartist-js/dist/chartist.min.js') }}"></script>
<script src="{{ asset ('assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js') }}"></script>
<!--c3 JavaScript -->
<script src="{{ asset ('assets/plugins/d3/d3.min.js') }}"></script>
<script src="{{ asset ('assets/plugins/c3-master/c3.min.js') }}"></script>
<!-- Chart JS -->
<script src="{{ asset ('assets/js/dashboard1.js') }}"></script>
<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="{{ asset ('assets/plugins/styleswitcher/jQuery.style.switcher.js') }}"></script>

<script src="{{ asset ('assets/plugins/summernote/dist/summernote.min.js') }}"></script>
<script>
    jQuery(document).ready(function() {

        $('.summernote').summernote({
            height: 350, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: false // set focus to editable area after initializing summernote
        });

        $('.inline-editor').summernote({
            airMode: true
        });

    });

    window.edit = function() {
        $(".click2edit").summernote()
    },
        window.save = function() {
            $(".click2edit").summernote('destroy');
        }
</script>

<!-- jQuery file upload -->
<script src="{{ asset ('assets/plugins/dropify/dist/js/dropify.min.js') }}"></script>
<script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();

        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
</script>
<!-- Magnific popup JavaScript -->
<script src="{{ asset ('assets/plugins/Magnific-Popup-master/dist/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset ('assets/plugins/Magnific-Popup-master/dist/jquery.magnific-popup-init.js') }}"></script>
<!-- ============================================================== -->
<!-- Sweet-Alert  -->
<script src="{{ asset ('assets/plugins/sweetalert/sweetalert.min.js') }}"></script>
<script src="{{ asset ('assets/plugins/sweetalert/jquery.sweet-alert.custom.js') }}"></script>
<!-- ============================================================== -->