
/*
    Tüm sistemi ortak olarak ilgilendiren fonksiyonları buraya ekliyoruz
 */

var common = {



    /**
     * @description that function gets the data about the current date jobs
     */
    getCurrentDayDetails: function () {

        var data={'getcurrentdaydetails':true};
        this.setAjaxRequest('getcurrentdaydetails','post',data,'', function (responseData) {
            console.log(responseData);
        });

        
    },


    /**
     *
     * @param url
     * @param actionType
     * @param data
     * @param beforeSend
     * @param callbackFunction
     * @description callbackFunction is send the ajax response, after asynchronous request is 100% finished
     */
    setAjaxRequest: function (url,actionType,data,beforeSend,callbackFunction) {

        $.when(

            $.ajax({
                url: "/"+url,
                type: actionType,
                data: JSON.stringify(data),
                dataType: "json",
                beforeSend: function () {
                    if(beforeSend.trim().length>0){

                    }
                },
                error: function (a,b,c) {
                    console.log(a.responseText);
                },
                success: function (responseData) {

                }
            })


        ).then(function (data, textStatus, jqXHR) {

                callbackFunction(data)

            }

        );


        
    }








};


common.getCurrentDayDetails();