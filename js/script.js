var ScriptLocation = "/log/createlog.php";
        /* No other customizations required. */
        function LinkClicked(obj) {
        var http;
        if (window.XMLHttpRequest) {
        try { http = new XMLHttpRequest(); }
        catch(e) {}
        }
        else if (window.ActiveXObject) {
        try { http = new ActiveXObject("Msxml2.XMLHTTP"); }
        catch(e) {
        try { http = new ActiveXObject("Microsoft.XMLHTTP"); }
        catch(e) {}
        }
        }
        if(!http) { return false; }
        ScriptLocation += "?link=" + escape(obj.href) + "&page=" + escape(document.URL);
        http.onreadystatechange = function(){};
        http.open('GET',ScriptLocation,true);
        http.send('');
        return true;
        }

ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .then( editor => {
        console.log( editor );
    } )
    .catch( error => {
        console.error( error );
    } );