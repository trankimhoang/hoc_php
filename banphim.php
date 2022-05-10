<?php
    // code php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body div {
            margin-top: 7px;
            margin-bottom: 7px;
            display: grid;
            grid-auto-columns: 1fr;
            grid-auto-flow: column;
        }
        body div button {
            margin: 5px;
            padding: 15px;
        }
    </style>
</head>
<body>
    <div>
        <button id="27">ESC</button>
        <button id="112">F1</button>
        <button id="113">F2</button>
        <button id="114">F3</button>
        <button id="115">F4</button>
        <button id="116">F5</button>
        <button id="117">F6</button>
        <button id="118">F7</button>
        <button id="119">F8</button>
        <button id="120">F9</button>
        <button id="121">F10</button>
        <button id="122">F11</button>
        <button id="123">F12</button>
        <button id="19">Pause break</button>
        <button id="44">Prt sc sysrq</button>
        <button id="45">insert</button>
        <button id="46">delete</button>
    </div>
    <div>
        <button id="192">~`</button>
        <button id="49">1</button>
        <button id="50">2</button>
        <button id="51">3</button>
        <button id="52">4</button>
        <button id="53">5</button>
        <button id="54">6</button>
        <button id="55">7</button>
        <button id="56">8</button>
        <button id="57">9</button>
        <button id="48">0</button>
        <button id="189">-</button>
        <button id="187">+ =</button>
        <button id="8">backspace</button>
        <button id="36">home</button>
    </div>

    <div>
        <button id="9">tab</button>
        <button id="81">Q</button>
        <button id="87">W</button>
        <button id="69">E</button>
        <button id="82">R</button>
        <button id="84">T</button>
        <button id="89">Y</button>
        <button id="85">U</button>
        <button id="73">I</button>
        <button id="79">O</button>
        <button id="80">P</button>
        <button id="219">{ </button>
        <button id="221">}</button>
        <button id="220">\</button>
        <button id="33">pgup</button>
    </div>

    <div>
        <button id="20">cap lock</button>
        <button id="65">A</button>
        <button id="83">S</button>
        <button id="68">D</button>
        <button id="70">F</button>
        <button id="71">G</button>
        <button id="72">H</button>
        <button id="74">J</button>
        <button id="75">K</button>
        <button id="76">L</button>
        <button id="186">;</button>
        <button id="222">'</button>
        <button id="13" style="width: 150px;">enter</button>
        <button id="34">pgdn</button>
    </div>

    <div>
        <button id="16-ShiftLeft">shift</button>
        <button id="90">Z</button>
        <button id="88">X</button>
        <button id="67">C</button>
        <button id="86">V</button>
        <button id="66">B</button>
        <button id="78">N</button>
        <button id="77">M</button>
        <button id="188">,</button>
        <button id="190">.</button>
        <button id="191">/</button>
        <button id="16-ShiftRight">shift</button>
        <button id="35">end</button>
    </div>

    <div>
        <button id="17-ControlLeft">ctrl</button>
        <button>fn</button>
        <button id="91">window</button>
        <button id="18-AltLeft">alt</button>
        <button id="32" style="width: 300px;">space</button>
        <button id="18-AltRight">alt</button>
        <button id="17-ControlRight">ctrl</button>
        <button id="37">left</button>
        <button id="38">up</button>
        <button id="40">down</button>
        <button id="39">right</button>
        <button>fn</button>
    </div>

    <script>
        document.onkeydown = function(event) {
            xuliphim(event);
        };

        document.onkeyup = function(event) {
            xuliphim(event);
        };


        document.onkeypress = function(event) {
            xuliphim(event);
        };



        function xuliphim(event) {
            event.preventDefault();
            console.log(event.keyCode);

            let key_code = event.keyCode;

            if (key_code == 16 || key_code == 17 || key_code == 18) {
                key_code += '-' + event.code;
            }

            if (document.getElementById(key_code)) {
                document.getElementById(key_code).style.background = 'blue';
                setTimeout(function (){
                    document.getElementById(key_code).style.background = 'red';
                }, 300);
            }
        }
    </script>
</body>
</html>
