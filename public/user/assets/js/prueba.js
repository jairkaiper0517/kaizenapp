  $( function() {
 
    // Ahí está la galería y la basura
    var $gallery = $( "#gallery" ),
      $trash = $( "#trash" );
 
    // Deja que los elementos de la galería sean arrastrables
    $( "li", $gallery ).draggable({
      cancel: "a.ui-icon", // hacer clic en un ícono no iniciará el arrastre
      revert: "invalid", // cuando no se cae, el artículo volverá a su posición inicia
      containment: "document",
      helper: "clone",
      cursor: "move"
    });
 
    // Deja que la basura sea droppable, aceptando los elementos de la galería
    $trash.droppable({
      accept: "#gallery > li",
      classes: {
        "ui-droppable-active": "ui-state-highlight"
      },
      drop: function( event, ui ) {
        deleteImage( ui.draggable );
      }
    });
 
    // Deje que la galería también se pueda descargar, aceptando elementos de la papelera
    $gallery.droppable({
      accept: "#trash li",
      classes: {
        "ui-droppable-active": "custom-state-active"
      },
      drop: function( event, ui ) {
        recycleImage( ui.draggable );
      }
    });
 
    // Función de eliminación de imagen
    var recycle_icon = "<a href='link/to/recycle/script/when/we/have/js/off' title='Recycle this image' class='ui-icon ui-icon-refresh'>Recycle image</a>";
    function deleteImage( $item ) {
      $item.fadeOut(function() {
        var $list = $( "ul", $trash ).length ?
          $( "ul", $trash ) :
          $( "<ul class='gallery ui-helper-reset'/>" ).appendTo( $trash );
 
        $item.find( "a.ui-icon-trash" ).remove();
        $item.append( recycle_icon ).appendTo( $list ).fadeIn(function() {
          $item
            .animate({ width: "48px" })
            .find( "img" )
              .animate({ height: "36px" });
        });
      });
    }
 
    // Función de reciclaje de imagen

    var trash_icon = "<a href='link/to/trash/script/when/we/have/js/off' title='Delete this image' class='ui-icon ui-icon-trash'>Delete image</a>";
    function recycleImage( $item ) {
      $item.fadeOut(function() {
        $item
          .find( "a.ui-icon-refresh" )
            .remove()
          .end()
          .css( "width", "96px")
          .append( trash_icon )
          .find( "img" )
            .css( "height", "72px" )
          .end()
          .appendTo( $gallery )
          .fadeIn();
      });
    }
 
    // Función de vista previa de la imagen, que demuestra el ui.dialog utilizado como ventana modal
    function viewLargerImage( $link ) {
      var src = $link.attr( "href" ),
        title = $link.siblings( "img" ).attr( "alt" ),
        $modal = $( "img[src$='" + src + "']" );
 
      if ( $modal.length ) {
        $modal.dialog( "open" );
      } else {
        var img = $( "<img alt='" + title + "' width='384' height='288' style='display: none; padding: 8px;' />" )
          .attr( "src", src ).appendTo( "body" );
        setTimeout(function() {
          img.dialog({
            title: title,
            width: 400,
            modal: true
          });
        }, 1 );
      }
    }
 
    // Resuelva el comportamiento de los iconos con la delegación de eventos
    $( "ul.gallery > li" ).on( "click", function( event ) {
      var $item = $( this ),
        $target = $( event.target );
 
      if ( $target.is( "a.ui-icon-trash" ) ) {
        deleteImage( $item );
      } else if ( $target.is( "a.ui-icon-zoomin" ) ) {
        viewLargerImage( $target );
      } else if ( $target.is( "a.ui-icon-refresh" ) ) {
        recycleImage( $item );
      }
 
      return false;
    });
  } );
