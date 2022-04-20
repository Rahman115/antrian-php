<?php foreach ($data['fileSound'] AS $id => $val) { ?>
    <!--display: none;-->
    <audio controls id="<?php echo $id; ?>" style="display: none;"> 
        <source src="../public/audio/<?php echo $val; ?>" type="audio/mpeg">
    </audio>
<?php } ?>

<button class="btn btn-primary" type="button" name="play" id="tombol" onclick="mulai(9,3);">
    <span class="glyphicon glyphicon-bell"></span>
</button>

<script type="text/javascript" >
    
    function mulai(urut, counter) {
        var totalTimers = 0;
        document.getElementById('in').pause();
        document.getElementById('in').currentTime = 0;
        document.getElementById('in').play();

        totalTimers = document.getElementById('suarabel').duration * 1000;

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

            setCounter(counter, totalTimers);

        } else if (urut == 10) {
            setTimeout(function () {
                document.getElementById('sepuluh').pause();
                document.getElementById('sepuluh').currentTime = 0;
                document.getElementById('sepuluh').play();
            }, totalTimers);

            setCounter(counter, totalTimers);

        } else if (urut == 11) {
            setTimeout(function () {
                document.getElementById('sebelas').pause();
                document.getElementById('sebelas').currentTime = 0;
                document.getElementById('sebelas').play();
            }, totalTimers);

            setCounter(counter, totalTimers);
        } else if (urut < 20) {
            setTimeout(function () {
                document.getElementById('suarabelloket' + urut + '').pause();
                document.getElementById('suarabelloket' + urut + '').currentTime = 0;
                document.getElementById('suarabelloket' + urut + '').play();
            }, totalTimers);

            totalTimers = totalTimers + 1000;
            setTimeout(function () {
                document.getElementById('belas').pause();
                document.getElementById('belas').currentTime = 0;
                document.getElementById('belas').play();
            }, totalTimers);

            setCounter(counter, totalTimers);
        }
    }

    function setCounter(value, timers) {
        timers = timers + 1000;
        setTimeout(function () {
            document.getElementById('loket').pause();
            document.getElementById('loket').currentTime = 0;
            document.getElementById('loket').play();
        }, timers);
//        timers = timers + 1000;
//        setTimeout(function () {
//            document.getElementById('suarabelsuarabelloket').pause();
//            document.getElementById('suarabelsuarabelloket').currentTime = 0;
//            document.getElementById('suarabelsuarabelloket').play();
//        }, timers);
        timers = timers + 1000;
        setTimeout(function () {
            document.getElementById('suarabelloket' + value + '').pause();
            document.getElementById('suarabelloket' + value + '').currentTime = 0;
            document.getElementById('suarabelloket' + value + '').play();
        }, timers);
    }
</script>