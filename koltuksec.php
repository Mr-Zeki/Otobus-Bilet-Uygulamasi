<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koltuk Seç</title>
</head>
<link rel="stylesheet" href="koltuksec.css">

<body>
    <button onclick="selectSeat(event)" id="btn_1" class="buton1" type="button">1</button>
    <button onclick="selectSeat(event)" id="btn_2" class="buton2" type="button">2</button>
    <button onclick="selectSeat(event)" id="btn_3" class="buton3" type="button">3</button>
    <button onclick="selectSeat(event)" id="btn_4" class="buton4" type="button">4</button>
    <button onclick="selectSeat(event)" id="btn_5" class="buton5" type="button">5</button>
    <button onclick="selectSeat(event)" id="btn_6" class="buton6" type="button">6</button>
    <button onclick="selectSeat(event)" id="btn_7" class="buton7" type="button">7</button>
    <button onclick="selectSeat(event)" id="btn_8" class="buton8" type="button">8</button>
    <button onclick="selectSeat(event)" id="btn_9" class="buton9" type="button">9</button>
    <button onclick="selectSeat(event)" id="btn_10" class="buton10" type="button">10</button>
    <button onclick="selectSeat(event)" id="btn_11" class="buton11" type="button">11</button>
    <button onclick="selectSeat(event)" id="btn_12" class="buton12" type="button">12</button>
    <button onclick="selectSeat(event)" id="btn_13" class="buton13" type="button">13</button>
    <button onclick="selectSeat(event)" id="btn_14" class="buton14" type="button">14</button>
    <button onclick="selectSeat(event)" id="btn_15" class="buton15" type="button">15</button>
    <button onclick="selectSeat(event)" id="btn_16" class="buton16" type="button">16</button>
    <button onclick="selectSeat(event)" id="btn_17" class="buton17" type="button">17</button>
    <button onclick="selectSeat(event)" id="btn_18" class="buton18" type="button">18</button>
    <button onclick="selectSeat(event)" id="btn_19" class="buton19" type="button">19</button>
    <button onclick="selectSeat(event)" id="btn_20" class="buton20" type="button">20</button>
    <button onClick="buy(event)" id="buy_button" class="button"  style="vertical-align: middle;" type="button" >Satın Al</button>
    <script>
        let seats = {}

        function selectSeat(e) {
            if (e.target.style.backgroundColor == "lightblue") {
                e.target.style.backgroundColor = "white"
                seats = removeItem(seats, e.target.id)
            } else {
                e.target.style.backgroundColor = "lightblue"
                seats[e.target.id]=e.target.innerHTML;


                /*var params = "lorem=ipsum";
                var xhr = new XMLHttpRequest();
                 xhr.open("POST", url, true);
                   xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                     xhr.send(params);
                     window.parent.location.href = 'bilet.php';*/
            }
            console.log(seats)
        }

        function removeItem(arr, value) {
            var index = arr.indexOf(value);
            if (index > -1) {
                arr.splice(index, 1);
            }
            return arr;

        }

        function buy(e) {
            var form = document.createElement('form');
            form.style.visibility = 'hidden';
            form.method = 'POST';
            var url = "bilet.php";
            form.action = url;
           
            for(var key in seats){
                var input = document.createElement('input');
                input.name = key;
                input.value = seats[key];
                form.appendChild(input)
            }
           
            
            document.body.appendChild(form);
            form.submit();

        }
    </script>

</body>

</html>