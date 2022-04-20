//var main = document.getElementById("main");
//var y = main.getElementsByTagName("b");
//var pol == document.getElementById("POL01").innerHTML;
setInterval('refreshPerPage()', 2500);

function refreshPage() {
    $.ajax({
        url: "http://localhost/antrian/?page=home&&action=display",
        success: function (data) {
            var myData = JSON.parse(data);

            var sum = Object.keys(myData.result).length;
            var keyObj = Object.keys(myData.result);

            for (i = 0; i < sum; i++) {
                console.log(myData.result[keyObj[i]].name);
            }
        }
    });
}

function refreshPerPage() {
    $.ajax({
        url: "http://localhost/antrian/?page=home&&action=display",
        success: function (data) {
            var myData = JSON.parse(data);

            var sum = Object.keys(myData.result).length;
            var keyObj = Object.keys(myData.result);

            for (i = 0; i < sum; i++) {
                if (myData.result[keyObj[i]].counter == 'POL01') {
                    
                    layoutPage(myData.result[keyObj[i]].name, myData.result[keyObj[i]].counter, myData.result[keyObj[i]].antrian);
                } else if (myData.result[keyObj[i]].counter == 'POL02') {
                    
                    layoutPage(myData.result[keyObj[i]].name, myData.result[keyObj[i]].counter, myData.result[keyObj[i]].antrian);
                } else if (myData.result[keyObj[i]].counter == 'POL03') {
                    
                    layoutPage(myData.result[keyObj[i]].name, myData.result[keyObj[i]].counter, myData.result[keyObj[i]].antrian);
                } else if (myData.result[keyObj[i]].counter == 'POL04') {
                    
                    layoutPage(myData.result[keyObj[i]].name, myData.result[keyObj[i]].counter, myData.result[keyObj[i]].antrian);
                } else if (myData.result[keyObj[i]].counter == 'POL05') {
                    
                    layoutPage(myData.result[keyObj[i]].name, myData.result[keyObj[i]].counter, myData.result[keyObj[i]].antrian);
                } else if (myData.result[keyObj[i]].counter == 'POL06') {
                    
                    layoutPage(myData.result[keyObj[i]].name, myData.result[keyObj[i]].counter, myData.result[keyObj[i]].antrian);
                } else if (myData.result[keyObj[i]].counter == 'POL07') {
                    
                    layoutPage(myData.result[keyObj[i]].name, myData.result[keyObj[i]].counter, myData.result[keyObj[i]].antrian);
                } else if (myData.result[keyObj[i]].counter == 'POL08') {
                    
                    layoutPage(myData.result[keyObj[i]].name, myData.result[keyObj[i]].counter, myData.result[keyObj[i]].antrian);
                } else if (myData.result[keyObj[i]].counter == 'POL09') {
                    
                    layoutPage(myData.result[keyObj[i]].name, myData.result[keyObj[i]].counter, myData.result[keyObj[i]].antrian);
                } else if (myData.result[keyObj[i]].counter == 'POL10') {
                    
                    layoutPage(myData.result[keyObj[i]].name, myData.result[keyObj[i]].counter, myData.result[keyObj[i]].antrian);
                } else if (myData.result[keyObj[i]].counter == 'POL11') {
                    
                    layoutPage(myData.result[keyObj[i]].name, myData.result[keyObj[i]].counter, myData.result[keyObj[i]].antrian);
                } else if (myData.result[keyObj[i]].counter == 'POL12') {
                    
                    layoutPage(myData.result[keyObj[i]].name, myData.result[keyObj[i]].counter, myData.result[keyObj[i]].antrian);
                } else if (myData.result[keyObj[i]].counter == 'POL13') {
                    
                    layoutPage(myData.result[keyObj[i]].name, myData.result[keyObj[i]].counter, myData.result[keyObj[i]].antrian);
                } else if (myData.result[keyObj[i]].counter == 'POL14') {
                    
                    layoutPage(myData.result[keyObj[i]].name, myData.result[keyObj[i]].counter, myData.result[keyObj[i]].antrian);
                } else {
                    layoutPage("kosong", myData.result[keyObj[i]].counter, "0");
                    
                }
            }
        }
    });
}

function layoutPage(names, counter, num) {
    document.getElementById(counter).innerHTML = names;
    document.getElementById("number"+counter).innerHTML = num;
}

$(document).ready(function () {

//    console.log(refreshPerPage());

});



