	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="public/configurations/config.js"></script>


    <!-- <script src="public/libs/jquery/jquery-3.3.1.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script type="text/javascript" src="public/libs/moment/js/moment.min.js"></script>
    <script>
        $('.preloadContainer').prepend('<div class="spanLoader" style="text-align:center; background: #cce8ca"><img src="public/images/rotor.gif" alt="Cargando..."> Cargando...</div>');
    </script>

    <!-- Bootstrap JS -->
    <script src="public/libs/boostrap/js/transition.js"></script>
    <script src="public/libs/boostrap/js/collapse.js"></script>
    <script src="public/libs/boostrap/js/bootstrap.min.js"></script>

    <!-- DatePicker Bootstrap JS -->
    <script type="text/javascript" src="public/libs/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
    <script>  $('#datetimepicker1').datetimepicker();  </script>
    <!-- <script type="text/javascript" src="public/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script> -->
    
    
    <!-- DataTable JS -->
    <script type="text/javascript" src="public/libs/datatables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="public/libs/datatables/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="public/libs/datatables/js/dataTables.select.min.js"></script>
    <script type="text/javascript" src="public/libs/datatables/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="public/libs/datatables/responsive/dataTables.responsive.min.js"></script>

    <script type="text/javascript" src="public/libs/datatables/exports/buttons.flash.min.js"></script>
    <script type="text/javascript" src="public/libs/datatables/exports/jszip.min.js"></script>
    <script type="text/javascript" src="public/libs/datatables/exports/pdfmake.min.js"></script>
    <script type="text/javascript" src="public/libs/datatables/exports/vfs_fonts.js"></script>
    <script type="text/javascript" src="public/libs/datatables/exports/buttons.html5.min.js"></script>
    <script type="text/javascript" src="public/libs/datatables/exports/buttons.print.min.js"></script>
    <script type="text/javascript" src="public/libs/datatables/js/dataTables.fixedHeader.min.js"></script>
    <script type="text/javascript" src="public/libs/datatables/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="public/libs/datatables/js/responsive.bootstrap.min.js"></script>
    <script type="text/javascript" src="public/components/CDatatable.js"></script>
    
    <!-- Jquery validation JS-->
    <script type="text/javascript" src="public/libs/jquery-validation/js/jquery.validate.min.js"></script>

    <!-- Select2 JS -->
    <script src="public/libs/select2/js/select2.min.js"></script>

    <!-- bootstrap-treeview JS -->
    <script src="public/libs/bootstrap-treeview/js/bootstrap-treeview.min.js"></script>

    <!-- Mask JS -->
    <script src="public/libs/mask/jquery.mask.min.js" type="text/javascript"></script>

    <!-- Mask JS -->
    <script src="public/libs/serializejson/js/jquery.serializejson.min.js" type="text/javascript"></script>

    <!-- Configurations -->
    <script src="public/configurations/config.jquery.validate.js?date='<?php echo uniqid()?>'"></script>
    <script src="public/configurations/config.collapsed.js?date='<?php echo uniqid()?>'"></script>

    <!-- Componentes -->
    <script src="public/components/ContainerJS.js" type="text/javascript"></script>
    <script src="public/components/CallRest.js" type="text/javascript"></script>

    <!-- PNotify -->
    <script src="public/libs/pnotify/js/pnotify.custom.min.js" type="text/javascript"></script>
    <script src="public/components/Notifications.js" type="text/javascript"></script>


    <!-- Bootboxx mensajes de alert prompt y confirm -->
    <script src="public/libs/bootbox/js/bootbox.min.js" type="text/javascript"></script>
    <script src="public/libs/bootbox/js/bootbox.locales.min.js" type="text/javascript"></script>
    
    <!-- Page JS -->
    <script src="public/libs/pagejs/js/page.js" type="text/javascript"></script>
    
    <!-- RequireJs -->
    <script src="public/libs/requirejs/js/require.js" type="text/javascript"></script>

    <script>
        jQuery(document).ready(function($) {
            $('a[href="#recibida"]').attr('href', Config.baseUrl()+Config.folder+"/recibida-interna.php");
            $('a[href="#emitida"]').attr('href', Config.baseUrl()+Config.folder+"/emitida-interna.php");
            $('a[href="#cerrarSession"]').attr('href', Config.baseUrl()+Config.folder+"/login.php");



            $(document).on('click', '.panel-heading span.clickable', function(e){

                var $this = $(this);
                if(!$this.hasClass('panel-collapsed')) {
                    $this.parents('.panel').find('.panel-body').slideUp();
                    $this.addClass('panel-collapsed');
                    $this.find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
                    
                } else {
                    $this.parents('.panel').find('.panel-body').slideDown();
                    $this.removeClass('panel-collapsed');
                    $this.find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
                    
                }
            });
        });
    </script>

  </body>
</html>
