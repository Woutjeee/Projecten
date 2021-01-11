
    function sendData(){
        let currentLoad = document.querySelector('#ingenomenLading').value;
        let beingLoaded = document.querySelector('#hoeveelGeladen').value;
        let seasons = document.querySelector('#seizoenen').value;
        let waterType = document.querySelector('#waterType').value;
        let shipType = document.querySelector('#shipType').value;

        var url = 'php/berekening.php?ingenomenLading=' + currentLoad + '&hoeveelGeladen=' + beingLoaded + 
        '&seizoenen=' + seasons + '&waterType=' + waterType + '&shipType=' + shipType;
        fetch(url)
            .then(convertToJSon)
            .then(checkData)
    }

    function convertToJSon(response){	
        return response.json();
    }

    function checkData(data){
        //All variables
        let maxWeight = 0;
        let currWeight = 0;
        let result = document.querySelector('.result');
        let btn = document.querySelector('#brkn-btn');
        let currentLoad = document.querySelector('#ingenomenLading').value;
        let beingLoaded = document.querySelector('#hoeveelGeladen').value;
        let seasons = document.querySelector('#seizoenen').value;
        let waterType = document.querySelector('#waterType').value;

        let currShip = document.querySelector('#shipType').value;
        let currShipLength = document.querySelector('#shipType').length;
        let currShipOptions = document.querySelector('#shipType');

        //  Check if input fields are filled in
        if(currentLoad == "" || beingLoaded == "") {
            alert('Vul alle velden in');
        } else {
            //  Result animation
            var animation = anime({
                targets: '.result',
                translateX: [350, 0],
            });

            var toHeavy = anime({
                targets: '#toHeavy',
                scale: [1, 1.5],
                translateY: 40,
                translateX: -15,
                delay: 500
            });
            result.style.display = 'flex';
        }

        for(let i = 0; i < currShipLength; i++){
            if(currShip == currShipOptions.options[i].value){
                document.getElementById('maxGewicht').innerHTML = "U kunt max " + data.ships[i].GRT + " ton mee nemen.";
                document.getElementById('linkToShip').href = data.ships[i].trackID; //Link to ship
                maxWeight = Number(data.ships[i].GRT)
                currWeight = +currentLoad + +beingLoaded;   //Calculate how much of the weight is taken   
                if(currWeight >= maxWeight){
                    showResultsIfBad();
                } else {
                    showResultsIfGood();
                }
            }
        }
    }


    function showResultsIfGood(){
        let currentLoad = document.querySelector('#ingenomenLading').value;
        let beingLoaded = document.querySelector('#hoeveelGeladen').value;
        let seasons = document.querySelector('#seizoenen').value;
        let waterType = document.querySelector('#waterType').value;

        document.getElementById('vrachtZwaarte').innerHTML = "Het ingenomen gewicht is : " + currentLoad + " ton";
        document.getElementById('howMuchBeingLoaded').innerHTML = "Er wordt nu " + beingLoaded + " aan tonnen geladen";
        document.getElementById('selectedSeason').innerHTML = "Het door u geselecteerde seizoen is : " + seasons;
        document.getElementById('selectedWaterType').innerHTML = "Het door u geselecteerde water type is : " + waterType;

    }

    function showResultsIfBad(){
        alert('Uw schip is the zwaar');
        document.querySelector(".result").style.backgroundColor ='#ab2727';
        document.getElementById('vrachtZwaarte').display = 'hidden';
        document.getElementById('howMuchBeingLoaded').display = 'hidden';
        document.getElementById('selectedSeason').display = 'hidden';
        document.getElementById('selectedWaterType').display = 'hidden';

        document.getElementById('toHeavy').innerHTML = "Uw boot is te zwaar, Mijn advies is de haven niet te verlaten.";
    }