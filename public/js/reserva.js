// $(()=>{
//     dialog = $( "#dialog-form" ).dialog({
//         autoOpen: false,
//         height: 400,
//         width: 350,
//         modal: true,
//         buttons: {
//           Cancel: function() {
//             dialog.dialog( "close" );
//           }
//         },
//         close: function() {
//           form[ 0 ].reset();
//           allFields.removeClass( "ui-state-error" );
//         }
//       });
//     $( "#create-user" ).button().on( "click", function() {
//         dialog.dialog( "open" );
//       });
// })
$( function() {
    $( "#dialog" ).dialog({
      autoOpen: false,
      resizable: false,
     height: 222.178,

      width: 535.406,
      
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "blind",
        duration: 1000
      }
    });
 
    $( "#opener" ).on( "click", function() {
      $( "#dialog" ).dialog( "open" );
    });
  } );