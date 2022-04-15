

<!-- Footer -->
<div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by MHB</p>
            </div>
        </div>
        </div>

</body>
<!--   Core JS Files   -->
<script src="<?= URLROOT ?>/vendor/global/global.min.js"></script>
    <script src="<?= URLROOT ?>/js/quixnav-init.js"></script>
    <script src="<?= URLROOT ?>/js/custom.min.js"></script>
  <!-- Datatable -->
  <script src="<?= URLROOT ?>/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?= URLROOT ?>/js/plugins-init/datatables.init.js"></script>
    <!-- JS -->
    <script src="<?= URLROOT ?>/template/vendor/jquery/jquery.min.js"></script>
    <script src="<?= URLROOT ?>/template/vendor/nouislider/nouislider.min.js"></script>
    <script src="<?= URLROOT ?>/template/vendor/wnumb/wNumb.js"></script>
    <script src="<?= URLROOT ?>/template/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="<?= URLROOT ?>/template/vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="<?= URLROOT ?>/template/js/main.js"></script>
    
  

      <!-- Daterangepicker -->
    <!-- momment js is must -->
    <script src="<?= URLROOT ?>/vendor/moment/moment.min.js"></script>
    <script src="<?= URLROOT ?>/vendor/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- clockpicker -->
    <script src="<?= URLROOT ?>/vendor/clockpicker/js/bootstrap-clockpicker.min.js"></script>
    <!-- asColorPicker -->
    <script src="<?= URLROOT ?>/vendor/jquery-asColor/jquery-asColor.min.js"></script>
    <script src="<?= URLROOT ?>/vendor/jquery-asGradient/jquery-asGradient.min.js"></script>
    <script src="<?= URLROOT ?>/vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js"></script>
    <!-- Material color picker -->
    <script src="<?= URLROOT ?>/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <!-- pickdate -->
    <script src="<?= URLROOT ?>/vendor/pickadate/picker.js"></script>
    <script src="<?= URLROOT ?>/vendor/pickadate/picker.time.js"></script>
    <script src="<?= URLROOT ?>/vendor/pickadate/picker.date.js"></script>



    <!-- Daterangepicker -->
    <script src="<?= URLROOT ?>/js/plugins-init/bs-daterange-picker-init.js"></script>
    <!-- Clockpicker init -->
    <script src="<?= URLROOT ?>/js/plugins-init/clock-picker-init.js"></script>
    <!-- asColorPicker init -->
    <script src="<?= URLROOT ?>/js/plugins-init/jquery-asColorPicker.init.js"></script>
    <!-- Material color picker init -->
    <script src="<?= URLROOT ?>/js/plugins-init/material-date-picker-init.js"></script>
    <!-- Pickdate -->
    <script src="<?= URLROOT ?>/js/plugins-init/pickadate-init.js"></script>

<!-- Accueil -->
    <script src="<?= URLROOT ?>/js/extention/choices.js"></script>
    <script src="<?= URLROOT ?>/js/extention/flatpickr.js"></script>
    <script>
      flatpickr(".datepicker",
      {});

    </script>
    <script>
      const choices = new Choices('[data-trigger]',
      {
        searchEnabled: false,
        itemSelectText: '',
      });

    </script>
<script>

  // (function($) {
  //   $.fn.uploader = function(options) {
  //     var settings = $.extend({
  //         MessageAreaText: "",
  //         MessageAreaTextWithFiles: "Liste des fichiers:",
  //         DefaultErrorMessage: "Impossible d'ouvrir ce fichier.",
  //         BadTypeErrorMessage: "Ce type de fichier n'est pas accepté.",
  //         acceptedFileTypes: [
  //           "pdf",
  //           "doc",
  //           "docx",
  //           "xls",
  //           "xlsx"
  //         ]
  //       },
  //       options
  //     );

  //     var uploadId = 1;
  //     //update the messaging
  //     $(".file-uploader__message-area p").text(
  //       options.MessageAreaText || settings.MessageAreaText
  //     );

  //     //create and add the file list and the hidden input list
  //     var fileList = $('<ul class="file-list"></ul>');
  //     var hiddenInputs = $('<div class="hidden-inputs hidden"></div>');
  //     $(".file-uploader__message-area").after(fileList);
  //     $(".file-list").after(hiddenInputs);

  //     //when choosing a file, add the name to the list and copy the file input into the hidden inputs
  //     $(".file-chooser__input").on("change", function() {
  //       var files = document.querySelector(".file-chooser__input").files;

  //       for (var i = 0; i < files.length; i++) {
  //         console.log(files[i]);

  //         var file = files[i];
  //         var fileName = file.name.match(/([^\\\/]+)$/)[0];

  //         //clear any error condition
  //         $(".file-chooser").removeClass("error");
  //         $(".error-message").remove();

  //         //validate the file
  //         var check = checkFile(fileName);
  //         if (check === "valid") {
  //           // move the 'real' one to hidden list
  //           $(".hidden-inputs").append($(".file-chooser__input"));

  //           //insert a clone after the hiddens (copy the event handlers too)
  //           $(".file-chooser").append(
  //             $(".file-chooser__input").clone({
  //               withDataAndEvents: true
  //             })
  //           );

  //           //add the name and a remove button to the file-list
  //           $(".file-list").append(
  //             '<li style="display: none;"><span class="file-list__name">' +
  //             fileName +
  //             '</span><button class="removal-button" data-uploadid="' +
  //             uploadId +
  //             '">X</button></li>'
  //           );
  //           $(".file-list").find("li:last").show(800);

  //           //removal button handler
  //           $(".removal-button").on("click", function(e) {
  //             e.preventDefault();

  //             //remove the corresponding hidden input
  //             $(
  //               '.hidden-inputs input[data-uploadid="' +
  //               $(this).data("uploadid") +
  //               '"]'
  //             ).remove();

  //             //remove the name from file-list that corresponds to the button clicked
  //             $(this)
  //               .parent()
  //               .hide("puff")
  //               .delay(10)
  //               .queue(function() {
  //                 $(this).remove();
  //               });

  //             //if the list is now empty, change the text back
  //             if ($(".file-list li").length === 0) {
  //               $(".file-uploader__message-area").text(
  //                 options.MessageAreaText || settings.MessageAreaText
  //               );
  //             }
  //           });

  //           //so the event handler works on the new "real" one
  //           $(".hidden-inputs .file-chooser__input")
  //             .removeClass("file-chooser__input")
  //             .attr("data-uploadId", uploadId);

  //           //update the message area
  //           $(".file-uploader__message-area").text(
  //             options.MessageAreaTextWithFiles ||
  //             settings.MessageAreaTextWithFiles
  //           );

  //           uploadId++;
  //         } else {
  //           //indicate that the file is not ok
  //           $(".file-chooser").addClass("error");
  //           var errorText =
  //             options.DefaultErrorMessage || settings.DefaultErrorMessage;

  //           if (check === "badFileName") {
  //             errorText =
  //               options.BadTypeErrorMessage || settings.BadTypeErrorMessage;
  //           }

  //           $(".file-chooser__input").after(
  //             '<p class="error-message">' + errorText + "</p>"
  //           );
  //         }
  //       }
  //     });

  //     var checkFile = function(fileName) {
  //       var accepted = "invalid",
  //         acceptedFileTypes =
  //         this.acceptedFileTypes || settings.acceptedFileTypes,
  //         regex;

  //       for (var i = 0; i < acceptedFileTypes.length; i++) {
  //         regex = new RegExp("\\." + acceptedFileTypes[i] + "$", "i");

  //         if (regex.test(fileName)) {
  //           accepted = "valid";
  //           break;
  //         } else {
  //           accepted = "badFileName";
  //         }
  //       }

  //       return accepted;
  //     };
  //   };
  // })($);

  // //init
  // $(document).ready(function() {

  //   var table1 = $('#example1').DataTable({
  //     // scrollY: "300px",
  //     // scrollX: true,
  //     // scrollCollapse: true,
  //     // paging: false,
  //     // columnDefs: [{
  //     //   width: 100,
  //     //   targets: 0
  //     // }],
  //     // fixedColumns: true,
  //     // "responsive": true,
  //     "lengthMenu": [
  //       [5, 10, 20, -1],
  //       [10, 10, 20, "Tous"]
  //     ],
  //     "info": false,
  //     "oLanguage": {
  //       "sZeroRecords": "Aucune activité !",
  //       "sProcessing": "En cours..."
  //     },
  //     "lengthChange": false,
  //     "searching": true,
  //     "dom": 'lrtip',
  //     "paging": true,
  //     "language": {
  //       "paginate": {
  //         "previous": "<<",
  //         "next": ">>"
  //       }
  //     }
  //   });



  //   var table = $('#example').DataTable({
  //     "responsive": true,
  //     "lengthMenu": [
  //       [10, 10, 20, -1],
  //       [10, 10, 20, "Tous"]
  //     ],
  //     "info": false,
  //     "oLanguage": {
  //       "sZeroRecords": "Aucun résultat trouvé !",
  //       "sProcessing": "En cours..."
  //     },
  //     "lengthChange": false,
  //     "searching": true,
  //     "dom": 'lrtip',
  //     "paging": true,
  //     "language": {
  //       "paginate": {
  //         "previous": "<<",
  //         "next": ">>"
  //       }
  //     }
  //   });


  //   $('#mySearchText').on('keyup', function() {
  //     table.search($('#mySearchText').val()).draw();
  //   });

  //   console.log("hi");
  //   $(".fileUploader").uploader({
  //     MessageAreaText: ""
  //   });

  // });
</script>

</html>