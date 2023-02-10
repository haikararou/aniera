$(function(){
    var sendData = {};
    var pid;
    $(document).on('click', '.AddToCart:not(.modal_open)',function(){
        var $amountBox = $(this).parent().prev('.spinner_area').find('input');
        pid = $(".product_box").attr("id");
        sendData.variation = $amountBox.data('variation');
        sendData.amount = $amountBox.val();
        if(sendData.amount <= 0) {
            alert('数を選択して下さい');
            return false;
        }
        sendData.pid = pid;
        sendData.mode = 'incart';
        $.ajax({
            type: "post",
            url: "/ec/api/addtocart",
            timeout: 1000,
            cache: false,
            data: {
                data: sendData
            },
            dataType: 'json',
            crossDomain: true,
            xhrFields: {
                withCredentials: true
            }
        }).done(function(response, textStatus, jqXHR) {
            if (response.status === "autherr") {
                alert(response.msg);
                document.location.href = '/ec/login';
            } else if(response.status === "ng") {
                alert(response.msg);
                
            } else {
                alert('カートに追加いたしました。');
                document.location.href = '/ec/cart';
            }
        }).fail(function(jqXHR, textStatus, errorThrown) {
            alert("失敗: サーバー内でエラーがあったか、サーバーから応答がありませんでした。");
        }).always(function(data_or_jqXHR, textStatus, jqXHR_or_errorThrown) {
        });
    });
    $(document).on('click', '.Reservation:not(.modal_open)',function(){
        var $amountBox = $(this).parent().prev('.spinner_area').find('input');
        pid = $(".product_box").attr("id");
        sendData.variation = $amountBox.data('variation');
        sendData.amount = $amountBox.val();
        if(sendData.amount <= 0) {
            alert('数を選択して下さい');
            return false;
        }
        sendData.pid = pid;
        sendData.mode = 'reserve';
        $.ajax({
            type: "post",
            url: "/ec/api/addtocart",
            timeout: 1000,
            cache: false,
            data: {
                data: sendData
            },
            dataType: 'json',
            crossDomain: true,
            xhrFields: {
                withCredentials: true
            }
        }).done(function(response, textStatus, jqXHR) {
            if (response.status === "autherr") {
                alert(response.msg);
                document.location.href = '/ec/login';
            } else if(response.status === "ng") {
                alert(response.msg);
                
            } else {
                alert('カートに追加いたしました。');
                document.location.href = '/ec/cart';
            }
        }).fail(function(jqXHR, textStatus, errorThrown) {
            alert("失敗: サーバー内でエラーがあったか、サーバーから応答がありませんでした。");
        }).always(function(data_or_jqXHR, textStatus, jqXHR_or_errorThrown) {
        });
    });

});