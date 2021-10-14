(function() {

    // Get any lib=___ param from the query string.
    var library = location.search.match(/[?&]lib=(.*?)(?=&|$)/);
  
    /* jshint -W060 */
    if (library) {
      document.write('<script src="../libs/' + library[1] + '"></script>');
    } else {
      document.write('<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>');
    }
  }());
      // html dom 이 다 로딩된 후 실행된다.
      $(document).ready(function(){
		    var gnbOffset = $( 'header' ).offset();
		    var onOff = Number
            $( window ).scroll( function() {
              if ( $( document ).scrollTop() > gnbOffset.top ) {
                $( 'header' ).addClass( 'fixed' );
              }
              else {
                $( 'header' ).removeClass( 'fixed' );
              }
		});
    })
    $('a[href="#"]').click(function(e) {
      e.preventDefault();
    });