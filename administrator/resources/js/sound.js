function mulai(urut, counter, id, call) {
//    console.log(ur);
 console.log(counter);
    var totalTimers = 0;
    document.getElementById('in').pause();
    document.getElementById('in').currentTime = 0;
    document.getElementById('in').play();

    totalTimers = document.getElementById('suarabel').duration * 170;

    setTimeout(function () {
        document.getElementById('suarabelnomorurut').pause();
        document.getElementById('suarabelnomorurut').currentTime = 0;
        document.getElementById('suarabelnomorurut').play();
    }, totalTimers);

    totalTimers = totalTimers + 1000;

    if (urut < 10) {
        setTimeout(function () {
            document.getElementById('suarabelloket' + urut + '').pause();
            document.getElementById('suarabelloket' + urut + '').currentTime = 0;
            document.getElementById('suarabelloket' + urut + '').play();
        }, totalTimers);

        setCounter(counter, totalTimers, id, call);

    } else if (urut == 10) {
        setTimeout(function () {
            document.getElementById('sepuluh').pause();
            document.getElementById('sepuluh').currentTime = 0;
            document.getElementById('sepuluh').play();
        }, totalTimers);

        setCounter(counter, totalTimers, id, call);


    } else if (urut == 11) {
        setTimeout(function () {
            document.getElementById('sebelas').pause();
            document.getElementById('sebelas').currentTime = 0;
            document.getElementById('sebelas').play();
        }, totalTimers);

        setCounter(counter, totalTimers, id, call);
    } else if (urut < 20) {

        var arr = ("" + urut).split("");


        setTimeout(function () {
            document.getElementById('suarabelloket' + arr[1] + '').pause();
            document.getElementById('suarabelloket' + arr[1] + '').currentTime = 0;
            document.getElementById('suarabelloket' + arr[1] + '').play();
        }, totalTimers);

        totalTimers = totalTimers + 800;
        setTimeout(function () {
            document.getElementById('belas').pause();
            document.getElementById('belas').currentTime = 0;
            document.getElementById('belas').play();
        }, totalTimers);

        setCounter(counter, totalTimers, id, call);
    } else if (urut < 100) {

        var arr = ("" + urut).split("");

        setTimeout(function () {
            document.getElementById('suarabelloket' + arr[0] + '').pause();
            document.getElementById('suarabelloket' + arr[0] + '').currentTime = 0;
            document.getElementById('suarabelloket' + arr[0] + '').play();
        }, totalTimers);

        totalTimers = totalTimers + 1000;
        setTimeout(function () {
            document.getElementById('puluh').pause();
            document.getElementById('puluh').currentTime = 0;
            document.getElementById('puluh').play();
        }, totalTimers);

        if (arr[1] != 0) {
            totalTimers = totalTimers + 1000;
            setTimeout(function () {
                document.getElementById('suarabelloket' + arr[1] + '').pause();
                document.getElementById('suarabelloket' + arr[1] + '').currentTime = 0;
                document.getElementById('suarabelloket' + arr[1] + '').play();
            }, totalTimers);
        }

        setCounter(counter, totalTimers, id, call);
    } else if (urut == 100) {

        var arr = ("" + urut).split("");
        setTimeout(function () {
            document.getElementById('seratus').pause();
            document.getElementById('seratus').currentTime = 0;
            document.getElementById('seratus').play();
        }, totalTimers);


        setCounter(counter, totalTimers, id, call);
    } else if (urut < 110) {
        var arr = ("" + urut).split("");

        setTimeout(function () {
            document.getElementById('seratus').pause();
            document.getElementById('seratus').currentTime = 0;
            document.getElementById('seratus').play();
        }, totalTimers);

        totalTimers = totalTimers + 1000;
        setTimeout(function () {
            document.getElementById('suarabelloket' + arr[2] + '').pause();
            document.getElementById('suarabelloket' + arr[2] + '').currentTime = 0;
            document.getElementById('suarabelloket' + arr[2] + '').play();
        }, totalTimers);

        setCounter(counter, totalTimers, id, call);

    } else if (urut == 110) {
//        var arr = ("" + urut).split("");

        setTimeout(function () {
            document.getElementById('seratus').pause();
            document.getElementById('seratus').currentTime = 0;
            document.getElementById('seratus').play();
        }, totalTimers);

        totalTimers = totalTimers + 1000;
        setTimeout(function () {
            document.getElementById('sepuluh').pause();
            document.getElementById('sepuluh').currentTime = 0;
            document.getElementById('sepuluh').play();
        }, totalTimers);

        setCounter(counter, totalTimers, id, call);

    } else if (urut == 111) {
        setTimeout(function () {
            document.getElementById('seratus').pause();
            document.getElementById('seratus').currentTime = 0;
            document.getElementById('seratus').play();
        }, totalTimers);

        totalTimers = totalTimers + 1000;
        setTimeout(function () {
            document.getElementById('sebelas').pause();
            document.getElementById('sebelas').currentTime = 0;
            document.getElementById('sebelas').play();
        }, totalTimers);

        setCounter(counter, totalTimers, id, call);
    } else if (urut < 120) {

        var arr = ("" + urut).split("");

        setTimeout(function () {
            document.getElementById('seratus').pause();
            document.getElementById('seratus').currentTime = 0;
            document.getElementById('seratus').play();
        }, totalTimers);

        totalTimers = totalTimers + 1000;
        setTimeout(function () {
            document.getElementById('suarabelloket' + arr[2] + '').pause();
            document.getElementById('suarabelloket' + arr[2] + '').currentTime = 0;
            document.getElementById('suarabelloket' + arr[2] + '').play();
        }, totalTimers);

        totalTimers = totalTimers + 1000;

        setTimeout(function () {
            document.getElementById('belas').pause();
            document.getElementById('belas').currentTime = 0;
            document.getElementById('belas').play();
        }, totalTimers);

        setCounter(counter, totalTimers, id, call);
    } else if (urut < 200) {

        var arr = ("" + urut).split("");
        setTimeout(function () {
            document.getElementById('seratus').pause();
            document.getElementById('seratus').currentTime = 0;
            document.getElementById('seratus').play();
        }, totalTimers);

        totalTimers = totalTimers + 1000;
        setTimeout(function () {
            document.getElementById('suarabelloket' + arr[1] + '').pause();
            document.getElementById('suarabelloket' + arr[1] + '').currentTime = 0;
            document.getElementById('suarabelloket' + arr[1] + '').play();
        }, totalTimers);

        totalTimers = totalTimers + 1000;
        setTimeout(function () {
            document.getElementById('puluh').pause();
            document.getElementById('puluh').currentTime = 0;
            document.getElementById('puluh').play();
        }, totalTimers);

        if (arr[2] != 0) {
            totalTimers = totalTimers + 1000;
            setTimeout(function () {
                document.getElementById('suarabelloket' + arr[2] + '').pause();
                document.getElementById('suarabelloket' + arr[2] + '').currentTime = 0;
                document.getElementById('suarabelloket' + arr[2] + '').play();
            }, totalTimers);
        }

        setCounter(counter, totalTimers, id, call);
    } else if (urut < 1000) {

        var arr = ("" + urut).split("");

        setTimeout(function () {
            document.getElementById('suarabelloket' + arr[0] + '').pause();
            document.getElementById('suarabelloket' + arr[0] + '').currentTime = 0;
            document.getElementById('suarabelloket' + arr[0] + '').play();
        }, totalTimers);


        if (arr[1] == 0 && arr[2] == 0) {
            totalTimers = totalTimers + 1000;
            setTimeout(function () {
                document.getElementById('ratus').pause();
                document.getElementById('ratus').currentTime = 0;
                document.getElementById('ratus').play();
            }, totalTimers);

        }

        if (arr[1] == 0 && arr[2] != 0) {
            totalTimers = totalTimers + 1000;
            setTimeout(function () {
                document.getElementById('ratus').pause();
                document.getElementById('ratus').currentTime = 0;
                document.getElementById('ratus').play();
            }, totalTimers);

            totalTimers = totalTimers + 1000;
            setTimeout(function () {
                document.getElementById('suarabelloket' + arr[2] + '').pause();
                document.getElementById('suarabelloket' + arr[2] + '').currentTime = 0;
                document.getElementById('suarabelloket' + arr[2] + '').play();
            }, totalTimers);
        }
        
        if (arr[1] == 1 && arr[2] == 0) {
            totalTimers = totalTimers + 1000;
            setTimeout(function () {
                document.getElementById('ratus').pause();
                document.getElementById('ratus').currentTime = 0;
                document.getElementById('ratus').play();
            }, totalTimers);

            totalTimers = totalTimers + 1000;
            setTimeout(function () {
                document.getElementById('sepuluh').pause();
                document.getElementById('sepuluh').currentTime = 0;
                document.getElementById('sepuluh').play();
            }, totalTimers);
        }
        
        if (arr[1] == 1 && arr[2] == 1) {
            totalTimers = totalTimers + 1000;
            setTimeout(function () {
                document.getElementById('ratus').pause();
                document.getElementById('ratus').currentTime = 0;
                document.getElementById('ratus').play();
            }, totalTimers);

            totalTimers = totalTimers + 1000;
            setTimeout(function () {
                document.getElementById('sebelas').pause();
                document.getElementById('sebelas').currentTime = 0;
                document.getElementById('sebelas').play();
            }, totalTimers);
        }
        
        if (arr[1] == 1 && arr[2] != 0) {
            totalTimers = totalTimers + 1000;
            setTimeout(function () {
                document.getElementById('ratus').pause();
                document.getElementById('ratus').currentTime = 0;
                document.getElementById('ratus').play();
            }, totalTimers);

            totalTimers = totalTimers + 1000;
            setTimeout(function () {
                document.getElementById('suarabelloket' + arr[2] + '').pause();
                document.getElementById('suarabelloket' + arr[2] + '').currentTime = 0;
                document.getElementById('suarabelloket' + arr[2] + '').play();
            }, totalTimers);
            
            totalTimers = totalTimers + 1000;
            setTimeout(function () {
                document.getElementById('belas').pause();
                document.getElementById('belas').currentTime = 0;
                document.getElementById('belas').play();
            }, totalTimers);
        }
        
        if (arr[1] > 1 && arr[2] == 0) {
            totalTimers = totalTimers + 1000;
            setTimeout(function () {
                document.getElementById('ratus').pause();
                document.getElementById('ratus').currentTime = 0;
                document.getElementById('ratus').play();
            }, totalTimers);

            totalTimers = totalTimers + 1000;
            setTimeout(function () {
                document.getElementById('suarabelloket' + arr[1] + '').pause();
                document.getElementById('suarabelloket' + arr[1] + '').currentTime = 0;
                document.getElementById('suarabelloket' + arr[1] + '').play();
            }, totalTimers);
            
            totalTimers = totalTimers + 1000;
            setTimeout(function () {
                document.getElementById('puluh').pause();
                document.getElementById('puluh').currentTime = 0;
                document.getElementById('puluh').play();
            }, totalTimers);
            
        }

        if (arr[1] > 1 && arr[2] > 0) {
            totalTimers = totalTimers + 1000;
            setTimeout(function () {
                document.getElementById('ratus').pause();
                document.getElementById('ratus').currentTime = 0;
                document.getElementById('ratus').play();
            }, totalTimers);

            totalTimers = totalTimers + 1000;
            setTimeout(function () {
                document.getElementById('suarabelloket' + arr[1] + '').pause();
                document.getElementById('suarabelloket' + arr[1] + '').currentTime = 0;
                document.getElementById('suarabelloket' + arr[1] + '').play();
            }, totalTimers);
            
            totalTimers = totalTimers + 1000;
            setTimeout(function () {
                document.getElementById('puluh').pause();
                document.getElementById('puluh').currentTime = 0;
                document.getElementById('puluh').play();
            }, totalTimers);
            
            totalTimers = totalTimers + 1000;
            setTimeout(function () {
                document.getElementById('suarabelloket' + arr[2] + '').pause();
                document.getElementById('suarabelloket' + arr[2] + '').currentTime = 0;
                document.getElementById('suarabelloket' + arr[2] + '').play();
            }, totalTimers);
            
        }
        
        setCounter(counter, totalTimers, id, call);
    }
}

function setCounter(vl, timers, i, c) {
    
    timers = timers + 1000;
    setTimeout(function () {
        document.getElementById('loket').pause();
        document.getElementById('loket').currentTime = 0;
        document.getElementById('loket').play();
    }, timers);
    
    timers = timers + 1000;
    setTimeout(function () {
        document.getElementById('p' + vl + '').pause();
        document.getElementById('p' + vl + '').currentTime = 0;
        document.getElementById('p' + vl + '').play();
    }, timers);
    timers = timers + 1000;
    if (c == false) {
        setTimeout(function () {

//            location.href = "index.php?page=calls&action=recall";
        }, timers);
    } else {
        setTimeout(function () {

            location.href = "index.php?page=calls&action=update_antrian&id=" + i;
        }, timers);
    }
}


function tunda(urut, counter, id) {
    console.log(urut);
    console.log(counter);
    console.log(id);

    location.href = "index.php?page=calls&action=delay&id=" + id;
}