$(()=>{
    $("#btnalert").click(
        function action () {
          alert("this is an alert on top");
        }
      );
      
      $("#btndialog").click(
        function action () {
          $("#dialog").html("dialog on the back");
          $("#dialog").dialog();
          $(".ui-dialog").css({
            zIndex: '1060',
            top: '100px'
          });
          prepareDialog();
          
        }
      );
      
      function prepareDialog() {
        $("html, body").animate({ scrollTop: 0 }, "slow");
        $(".ui-dialog-titlebar").css({ background: '#F7985D' });
        $(".ui-dialog .ui-dialog-content").css({ 'text-align': 'center' });
      }

})