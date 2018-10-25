function switchVisible() {
            if (document.getElementById('openbag')) {

                if (document.getElementById('openbag').style.display == 'none') {
                    document.getElementById('openbag').style.display = 'block';
                    document.getElementById('map').style.display = 'none';
                }
                else {
                    document.getElementById('openbag').style.display = 'none';
                    document.getElementById('map').style.display = 'block';
                }
            }
}

