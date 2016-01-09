// Variables
    var RAIZ = "http://localhost/infinito/";
// serializacion 
    function serializeSection(section) {
        var frm = serializeToJson(section.find("input,select,textarea").serializeArray());
        return frm;
    }
    function serializeToJson(a) {
        var o = {};
        $.each(a, function () {
            if (o[this.name]) {
                if (!o[this.name].push) {
                    o[this.name] = [o[this.name]];
                }
                o[this.name].push(this.value || '');
            } else {
                o[this.name] = this.value || '';
            }
        });
        return o;
    }
// funciones ajax
    function actualizarCatalogo(urlAjax,frm,callback,before) {
        $.ajax({
            url: urlAjax,
            type: 'POST',
            error: function(xhr,status,error){
                console.log("entro a los errores");
                console.log(xhr);
                console.log(status);
                console.log(error);
            },

            data: {
                form: JSON.stringify(frm)
            },
            beforeSend: function(){
                if (before !== undefined) {
                    before();
                }
            },
            success:function(data){
                if (!data.estado && data.errorType == 0) {
                    location.reload();
                } else {
                    callback(data);
                }
                
            }
        });
    }
    function accionAjaxWithImage(urlAjax,formData,callBack) {
        $.ajax({
            type:           "POST",
            url:            urlAjax,
            contentType:    false,
            processData:    false,
            data: formData,
            success: function (data) {
                if (!data.estado && data.errorType == 0) {
                    location.reload();
                } else {
                    callBack(data);
                }
            },
            error: function (xhr, status, p3, p4) {
                var err = "Error " + " " + status + " " + p3 + " " + p4;
                if (xhr.responseText && xhr.responseText[0] == "{")
                    err = JSON.parse(xhr.responseText).Message;
                console.log(err);
            }
        });
    }